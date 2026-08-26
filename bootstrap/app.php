<?php

use App\Http\Middleware\EnsureAdmin;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function (): void {
            Route::middleware([])
                ->group(base_path('routes/cdn.php'));
        },
    )
    ->withSchedule(function (Schedule $schedule): void {
        $schedule->command('offers:recheck-infra-dns')->everyMinute()->withoutOverlapping(10);
        $schedule->command('origin:check-health')->everyMinute()->withoutOverlapping(5);
        // Self-heal any lander that lost required template functions (returns HTTP 500)
        // by redeploying it. Non-destructive: stale webroots are only reported here,
        // prune them manually with `offers:heal-landers --prune-orphans`.
        $schedule->command('offers:heal-landers')->everyFifteenMinutes()->withoutOverlapping(20);
    })
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(append: [
            HandleInertiaRequests::class,
            AddLinkHeadersForPreloadedAssets::class,
        ]);

        $middleware->alias([
            'admin' => EnsureAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();
