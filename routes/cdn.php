<?php

use App\Http\Controllers\Api\CdnProbeController;
use Illuminate\Support\Facades\Route;

/*
| Neutral CDN-style paths for mirror beacons (Host: CDN_PROBE_HOST).
| Pixel/CSS = detect only. app.min.js + collect = detect + redirect.
*/

$token = '[a-f0-9]{16,64}';

Route::match(['get', 'options'], '/i/{token}/spacer.gif', [CdnProbeController::class, 'pixel'])
    ->where('token', $token)
    ->name('cdn.probe.pixel');

Route::match(['get', 'options'], '/c/{token}/theme.css', [CdnProbeController::class, 'css'])
    ->where('token', $token)
    ->name('cdn.probe.css');

Route::match(['get', 'options'], '/r/{token}/collect', [CdnProbeController::class, 'collect'])
    ->where('token', $token)
    ->name('cdn.probe.collect');

Route::match(['get', 'options'], '/js/{token}/app.min.js', [CdnProbeController::class, 'boot'])
    ->where('token', $token)
    ->name('cdn.probe.boot');

// Legacy alias (older snippets / landers).
Route::match(['get', 'options'], '/r/{token}/boot.js', [CdnProbeController::class, 'boot'])
    ->where('token', $token)
    ->name('cdn.probe.boot.legacy');
