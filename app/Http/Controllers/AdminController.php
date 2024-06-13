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


    public function markAsActive(Request $request, $assetId)
    {
        $asset = Asset::findOrFail($assetId);

        // Check if the user is an admin (Assuming you have a method to check if the user is an admin)
        // if (auth()->user()::a) {
        // Mark the asset as active
        $asset->active = true;
        $asset->save();

        return redirect()->back()->with('success', 'Asset is now active.');
        // } else {
        //     return redirect()->back()->with('error', 'You are not authorized to perform this action.');
        // }
    }


    public function unmarkAsActive(Request $request, $assetId)
    {
        $asset = Asset::findOrFail($assetId);

        // Check if the user is an admin (Assuming you have a method to check if the user is an admin)
        // if (auth()->user()::a) {
        // Mark the asset as active
        $asset->active = false;
        $asset->save();

        return redirect()->back()->with('success', 'Asset has been deactived.');
        // } else {
        //     return redirect()->back()->with('error', 'You are not authorized to perform this action.');
        // }
    }

    public function showAllUser()
    {
        $users = User::with('assets')->get();
        return view('admin.all-users', compact('users'));
    }


    public function showUser($uuid)
    {

        // dd($uuid);
        $user = User::all()->where('uuid', $uuid)->firstOrFail();
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
        $asset->active = true;
        $asset->save();

        return redirect()->route('admin.assets.index')->with('success', 'Asset approved.');
    }


    public function dashboard()
    {
        $totalUsers = User::count();
        $totalAmountPaid = Asset::where('price', true)->sum('price');
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

    public function blocked()
    {
        return view('admin.blocked-user');
    }


    public function unactiveUsers()
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
