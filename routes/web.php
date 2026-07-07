<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TemplatePreviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');
    Route::post('/offers/{offer}/deploy', [OfferController::class, 'deploy'])->name('offers.deploy');
    Route::patch('/offers/{offer}', [OfferController::class, 'update'])->name('offers.update');
    Route::patch('/offers/{offer}/indexing', [OfferController::class, 'updateIndexing'])->name('offers.indexing');
    Route::post('/offers/{offer}/verification', [OfferController::class, 'storeVerification'])->name('offers.verification.store');
    Route::delete('/offers/{offer}/verification', [OfferController::class, 'destroyVerification'])->name('offers.verification.destroy');
    Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
    Route::get('/preview/{template}/{path?}', [TemplatePreviewController::class, 'show'])
        ->where('path', '.*')
        ->name('templates.preview');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::patch('/settings', [SettingsController::class, 'update'])->name('settings.update');
    Route::post('/settings/test-deploy', [SettingsController::class, 'testDeploy'])->name('settings.test-deploy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('admin')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::post('/users/{user}/reset-password', [UserController::class, 'resetPassword'])
            ->name('users.reset-password');
    });
});

require __DIR__.'/auth.php';
