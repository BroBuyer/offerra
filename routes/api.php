<?php

use App\Http\Controllers\Api\TelemetryController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post', 'options'], '/v1/telemetry/{token}', [TelemetryController::class, 'ping'])
    ->where('token', '[a-f0-9]{16,64}')
    ->name('api.telemetry.ping');
