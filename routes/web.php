<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use Doctrine\DBAL\Schema\View;

Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::view('/test', 'test');
    Route::get('/services', 'services')->name('services');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/assets', 'assets')->name('assets');
    Route::get('/assets/{id}', 'assetsmore')->name('assetsmore');
    Route::get('/blog', 'assets')->name('blog');
    Route::get('/pricing', 'pricing')->name('pricing');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/post-assets', [ProfileController::class, 'postAsset'])->name('post.assets');
    Route::get('/notification', [ProfileController::class, 'notification'])->name('user.notification');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
