<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Mail;


Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/services', 'services')->name('services');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactUs')->name('contact.us');
    Route::get('/assets', 'assets')->name('assets');
    Route::get('/assets/search', 'searchAsset')->name('assets.search');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::view('/pricing-testing', 'pricing-testing');
    Route::view('/term-and-conditions', 'guests.term-conditions')->name('terms');
    Route::view('/privacy', 'guests.privacy')->name('privacy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/post-assets', [ProfileController::class, 'postAsset'])->name('post.assets');
    Route::get('/assets/{slug}', [GuestController::class, 'showAsset'])->name('assets.show');
    Route::post('/post-sale-assets', [ProfileController::class, 'postSaleAsset'])->name('post.sale.assets');
    Route::get('/assets/{id}/edit', [ProfileController::class, 'postSaleAssetEdit'])->name('post.assets.edit');
    Route::post('/assets/{id}/update', [ProfileController::class, 'postSaleAssetUpdate'])->name('post.assets.update');


    Route::get('/choose-plan', [ProfileController::class, 'choosePlan'])->name('user.plan');
    Route::get('/my-assets', [ProfileController::class, 'myAsset'])->name('user.asset');
    Route::get('/notification', [ProfileController::class, 'notification'])->name('user.notification');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/delete-govt-id', [ProfileController::class, 'destroyGovtId'])->name('destroy.govtid');
    Route::delete('/destroy-cac-document', [ProfileController::class, 'destroyCacDocument'])->name('destroy.cac_document');
});




require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
