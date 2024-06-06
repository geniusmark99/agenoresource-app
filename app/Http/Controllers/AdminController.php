<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Asset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    protected $redirectTo = '/admin/dashboard';


    public function showAllUser()
    {
        $users = User::all();
        return view('admin.all-users', compact('users'));
    }


    public function showUser($uuid)
    {
        $user = User::get()->where('uuid', $uuid)->firstOrFail();


        return view('admin.user', compact('user'));
    }

    public function loginView()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function approve($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->is_active = true;
        $asset->save();

        return redirect()->route('admin.assets.index')->with('success', 'Asset approved.');
    }


    public function dashboard()
    {
        $totalUsers = User::count();
        $totalAmountPaid = Asset::where('paid', true)->sum('price');
        $users = User::with('assets')->paginate(10);

        return view('admin.dashboard', compact('users', 'totalUsers', 'totalAmountPaid'));
    }

    public function projects()
    {
        return view('admin.projects');
    }


    public function  activeUsers()
    {
        return view('admin.active-user');
    }

    public function activatedUser()
    {
        return view('admin.activated-user');
    }

    public function blockedUser()
    {
        return view('admin.blocked-user');
    }


    public function   unactiveUsers()
    {
        return view('admin.unactive-user');
    }




    public function profile()
    {

        $user = Auth::guard('admin')->user();

        return view('admin.profile', compact('user'));
    }

    public function message()
    {
        return view('admin.message');
    }

    public function users()
    {
        return view('admin.users');
    }
}
