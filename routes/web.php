<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainBalanceController;
use App\Http\Controllers\DomainPurchaseController;
use App\Http\Controllers\DomainSearchController;
use App\Http\Controllers\MirrorDomainController;
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
    Route::get('/offers/archive', [OfferController::class, 'archiveIndex'])->name('offers.archive.index');
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');
    Route::post('/offers/{offer}/deploy', [OfferController::class, 'deploy'])->name('offers.deploy');
    Route::post('/offers/{offer}/archive', [OfferController::class, 'archive'])->name('offers.archive');
    Route::post('/offers/{offer}/archive/retry', [OfferController::class, 'retryArchive'])->name('offers.archive.retry');
    Route::post('/offers/{offer}/provision', [OfferController::class, 'provision'])->name('offers.provision');
    Route::patch('/offers/{offer}', [OfferController::class, 'update'])->name('offers.update');
    Route::patch('/offers/{offer}/indexing', [OfferController::class, 'updateIndexing'])->name('offers.indexing');
    Route::get('/mirrors', [MirrorDomainController::class, 'index'])->name('mirrors.index');
    Route::patch('/mirrors/{mirror}', [MirrorDomainController::class, 'update'])->name('mirrors.update');
    Route::delete('/mirrors/{mirror}', [MirrorDomainController::class, 'destroy'])->name('mirrors.destroy');

    Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
    Route::get('/preview/{template}/{path?}', [TemplatePreviewController::class, 'show'])
        ->where('path', '.*')
        ->name('templates.preview');
    Route::post('/domains/search', [DomainSearchController::class, 'store'])->name('domains.search');
    Route::post('/domains/purchase', [DomainPurchaseController::class, 'store'])->name('domains.purchase');
    Route::get('/domains/balance', [DomainBalanceController::class, 'show'])->name('domains.balance');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::patch('/settings', [SettingsController::class, 'update'])->name('settings.update');
    Route::post('/settings/test-deploy', [SettingsController::class, 'testDeploy'])->name('settings.test-deploy');
    Route::post('/settings/test-hestia-api', [SettingsController::class, 'testHestiaApi'])->name('settings.test-hestia-api');
    Route::post('/settings/gsc-verification', [SettingsController::class, 'storeGscVerification'])->name('settings.gsc-verification.store');
    Route::delete('/settings/gsc-verification', [SettingsController::class, 'destroyGscVerification'])->name('settings.gsc-verification.destroy');

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
