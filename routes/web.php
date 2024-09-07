<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\TestController;



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
    Route::view('/term-and-conditions', 'guests.term-conditions')->name('terms');
    Route::view('/privacy', 'guests.privacy')->name('privacy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/assets/{slug}', [GuestController::class, 'showAsset'])->middleware(['auth', 'track.view'])->name('assets.show');

Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::view('/test-upload-image', 'test-image-upload');
        Route::get('/post-test-upload-image/{assetId}', 'testCloudinaryUpload')
            ->name('cloudinary-image-upload');
        Route::get('/upload-asset-image/{assetId}', 'uploadAssetImage')->name('upload.image');
        Route::get('/post-assets', 'postAsset')->name('post.assets');
        Route::post('/post-sale-assets', 'postSaleAsset')->name('post.sale.assets');
        Route::get('/assets/{id}/edit', 'postSaleAssetEdit')->name('post.assets.edit');
        Route::post('/assets/{id}/update', 'postSaleAssetUpdate')->name('post.assets.update');
        Route::get('/choose-plan', 'choosePlan')->name('user.plan');
        Route::get('/my-assets', 'myAsset')->name('user.asset');
        Route::get('/notification', 'notification')->name('user.notification');
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
        Route::delete('/delete-govt-id', 'destroyGovtId')->name('destroy.govtid');
        Route::post('/upload-documents', 'uploadNinCac')->name('upload.documents');
        Route::post('/upload-govtid', 'uploadGovtId')->name('upload.govtid');
        Route::post('/upload-cac-documents', 'uploadCacDocument')->name('upload.cac_document');

        Route::delete('/delete-nin-cac/{type}', 'deleteNinCac')->name('delete.nin_cac');
        Route::delete('/destroy-cac-document', 'destroyCacDocument')->name('destroy.cac_document');
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/partners.php';
require __DIR__ . '/admin.php';
