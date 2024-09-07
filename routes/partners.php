<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PartnerAuthController;


Route::controller(PartnerController::class)->group(function () {
    Route::name('partner.')->group(function () {
        Route::prefix('partner')->group(function () {
            // GET
            Route::get('/', 'index')->name('home');
            Route::get('/become-a-partner', 'index')->name('home');
            Route::get('/register', 'registerForm')->name('register');
            Route::get('/login', 'loginForm')->name('login');
            Route::get('/forget-password', 'forgotPasswordForm')->name('forget.password');

            Route::get('/dashboard', 'dashboard')
                ->middleware(['auth', 'verified'])->name('dashboard');

            // partner.dashboard
            // Route::get('/verify-email',  'show')->name('verify-email');
            // Route::get('/verify-email/{id}/{hash}',  'verify')->name('verify-email.verify');
            // Route::get('/reset-password/{token}', 'resetPasswordForm')->name('reset-password');

            // POST
            Route::post('/register', 'register')->name('register.store');

            // Route::post('/email/verification-notification', 'sendVerificationEmail')->name('resend.verification');
            // Route::post('/forgot-password', 'sendResetLinkEmail');
            // Route::post('/reset-password', 'resetPassword');


        });
    });
});
