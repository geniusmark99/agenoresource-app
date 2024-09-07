<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class PartnerController extends Controller
{


    public function dashboard()
    {
        return view('partner.auth.dashboard');
    }

    public function index()
    {
        return view('partner.home');
    }

    public function registerForm()
    {
        return view('partner.auth.register');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {

        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Partner::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        dd($request);


        // $partner = Partner::create([
        //     'firstname' => $request->firstname,
        //     'lastname' => $request->lastname,
        //     'company_name' => $request->company_name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($partner));
        // Auth::login($partner);
        // return redirect(route('partner.dashboard', absolute: false));
    }

    public function loginForm()
    {
        return view('partner.auth.login');
    }

    public function show()
    {
        // return view('partner.auth.register');
        echo 'SHOW';
    }

    public function verify()
    {
        // return view('partner.auth.verify');

        echo 'VERIFY';
    }

    public function forgotPasswordForm()
    {
        return view('partner.auth.forget-password');
    }

    public function resetPasswordForm()
    {
        // return view('partner.auth.forget-password');
        echo 'RESET PASSWORD';
    }

    public function sendResetLinkEmail()
    {
        echo "SEND RESET LINK EMAIL";
    }

    public function resetPassword()
    {
        echo "SEND RESET PASSWORD EMAIL";
    }



    public function partner()
    {
        return view('guests.partner');
    }

    public function partnerLogin()
    {
        return view('guests.partnerLogin');
    }

    public function partnerPricing()
    {
        return view('guests.partnerPricing');
    }


    public function partnerForget()
    {
        return view('guests.partnerForget');
    }
}
