<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Asset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminUpdateRequest;

class AdminController extends Controller
{

    protected $redirectTo = '/admin/dashboard';


    public function updateProfile(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect()->back()->with('status', 'Profile updated successfully!');
    }

    public function markAsActive($assetId)
    {
        $asset = Asset::findOrFail($assetId);
        if ($asset) {
            $asset->active = true;
            $asset->date_activated = now();
            $asset->save();
        }
        return redirect()->back()->with('success', 'Asset is now active.');
    }


    public function unmarkAsActive(Request $request, $assetId)
    {
        $asset = Asset::findOrFail($assetId);
        $asset->active = false;
        $asset->save();
        return redirect()->back()->with('success', 'Asset has been deactived.');
    }

    public function showAllUser()
    {
        $users = User::with('assets')->get();
        return view('admin.all-users', compact('users'));
    }


    public function showUser($uuid)
    {

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

    public function activate($id)
    {
        $user = User::findOrFail($id);
        $user->unblock();
        return redirect()->back()->with('status', 'User activated successfully.');
    }

    public function deactivate($id)
    {
        $user = User::findOrFail($id);
        $user->block();
        return redirect()->back()->with('status', 'User deactivated successfully.');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.dashboard')->with('status', 'User deleted successfully.');
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

    public function notification()
    {

        // $user = auth()->user();
        // $user = User::with('unreadNotifications')->find(1);
        // // $user = User::with('unreadNotifications')->get();
        // if ($user) {
        //     $unreadNotifications = $user->unreadNotifications;
        //     return view('admin.notification', ['notifications' => $unreadNotifications]);
        // } else {
        //     return redirect()->route('admin.login')->with('error', 'Please log in to view notifications.');
        // }

        // Get the currently authenticated admin
        // $user = auth()->user();
        $admin = Auth::guard('admin')->user();
        $notifications = $admin->unreadNotifications;
        // dd($notifications);

        return view('admin.notifications', compact('notifications'));
    }

    // public function markAsRead($id)
    // {
    //     $admin = Auth::guard('admin')->user();

    //     $notification = $admin->notifications()->findOrFail($id);

    //     if ($notification) {
    //         $notification->markAsRead();
    //     }

    //     return redirect()->back()->with('success', 'Notification marked as read.');

    //     // $notification = auth()->user()->notifications()->findOrFail($id);
    //     // $notification->markAsRead();
    //     // return redirect()->back()->with('success', 'Notification marked as read.');
    // }


    // Mark notification as read
    public function markAsRead($id)
    {
        //  $admin = Auth::guard('admin')->user();
        $admin = Admin::find(1);
        $notification = $admin->notifications()->find($id);

        if ($notification) {
            $notification->markAsRead();
            return redirect()->back()->with('success', 'Notification marked as read!');
        }

        return redirect()->back()->with('error', 'Notification not found.');
    }

    public function deleteNotification($id)
    {
        $admin = Admin::find(1);
        $notification = $admin->notifiations()->find($id);

        if ($notification) {
            $notification->delete();
            return redirect()->back()->with('success', 'Notification deleted successfully!');
        }

        return redirect()->back()->with('error', 'Notification not found.');
    }


    public function users()
    {
        return view('admin.users');
    }
}
