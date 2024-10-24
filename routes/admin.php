<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'loginView'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::group(['middleware' => ['admin.notifications']], function () {
                Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
                Route::get('/projects', 'projects')->name('admin.projects');
                Route::get('/message', 'message')->name('admin.message');
                Route::get('/notification', 'notification')->name('admin.notification');
                Route::patch('/notifications/{id}/read', 'markAsRead')->name('admin.notifications.read');
                Route::get('/user/active', 'activeUsers')->name('admin.active.users');
                Route::get('/user/all', 'showAllUser')->name('admin.all.users');
                Route::get('/user/{uuid}', 'showUser')->name('admin.user');
                Route::get('/user/unactive', 'unactiveUsers')->name('admin.unactive.users');
                Route::get('/user/activated', 'activatedUser')->name('admin.activated.users');
                Route::post('/user/{id}/activate', 'activate')->name('admin.activate');
                Route::post('/user/{id}/deactivate', 'deactivate')->name('admin.deactivate');
                Route::delete('/user/delete/{id}', 'deleteUser')->name('admin.deleteUser');
                Route::post('/activate-asset/{assetId}', 'markAsActive')->name('admin.activate-asset');
                Route::post('/notifications/{id}/read', 'markAsRead')->name('admin.notifications.read');
                Route::delete('/notifications/{id}', 'deleteNotification')->name('admin.notifications.delete');
                Route::post('/unactivate-asset/{assetId}', 'unmarkAsActive')->name('admin.unactivate-asset');
                Route::get('/profile', 'profile')->name('admin.profile');
                Route::put('/update-profile', 'updateProfile')->name('admin.updateProfile');
                Route::get('/users', 'users')->name('admin.users');
            });
        });
        Route::view('/user/blocked', 'admin.blocked-users')->name('admin.blocked.users');
    });
});
