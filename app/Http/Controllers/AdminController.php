<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    protected $redirectTo = '/admin/dashboard';

    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('logout');
    // }



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
        return view('admin.dashboard');
    }

    public function projects()
    {
        return view('admin.projects');
    }


    public function  activeUsers()
    {
        return view('admin.active-user');
    }


    public function   unactiveUsers()
    {
        return view('admin.unactive-user');
    }




    public function profile()
    {
        return view('admin.profile');
    }

    public function message()
    {
        return view('admin.message');
    }

    public function users()
    {
        return view('admin.users');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Admin $admin)
    // {
    //     //
    // }
}
