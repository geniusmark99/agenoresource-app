<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;





Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'loginView'])
        ->name('admin.login');
    Route::post('login', [AdminController::class, 'login']);
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('admin.dashboard');
        Route::get('/projects', [AdminController::class, 'projects'])
            ->name('admin.projects');

        Route::get('/message', [AdminController::class, 'message'])
            ->name('admin.message');

        Route::get('/user/active', [AdminController::class, 'activeUsers'])
            ->name('admin.active.users');
        Route::get('/user/unactive', [AdminController::class, 'unactiveUsers'])
            ->name('admin.unactive.users');

        Route::get('/profile', [AdminController::class, 'profile'])
            ->name('admin.profile');


        Route::get('/users', [AdminController::class, 'users'])
            ->name('admin.users');
    });
});