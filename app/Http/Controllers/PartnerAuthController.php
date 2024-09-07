<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class PartnerAuthController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.partner-forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::broker('partners')->sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.partner-reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $status = Password::broker('partners')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($partner, $password) {
                $partner->forceFill([
                    'password' => Hash::make($password),
                ])->save();

                // event(new PasswordReset($partner));
                event(new Registered($partner));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('partner.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function showVerifyEmail()
    {
        return view('auth.partner-verify-email');
    }

    public function sendVerificationEmail(Request $request)
    {
        $request->user('partner')->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }

    // public function verifyEmail(Request $request)

}
