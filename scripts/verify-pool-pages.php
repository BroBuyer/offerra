<?php

/**
 * Render the pages touched by the origin-pool refactor as the admin user and
 * report HTTP status + the Inertia props that the React pages depend on.
 *
 *   php scripts/verify-pool-pages.php
 */

require __DIR__.'/../vendor/autoload.php';

use App\Models\User;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$app = require __DIR__.'/../bootstrap/app.php';

// Boot the framework so Eloquent has a connection before the first request.
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

/** @var Kernel $kernel */
$kernel = $app->make(Kernel::class);

$admin = User::query()->where('role', User::ROLE_ADMIN)->first();

if (! $admin) {
    echo "no admin user\n";
    exit(1);
}

echo "admin: #{$admin->id} {$admin->email}\n\n";

$pages = ['/origin-servers', '/settings', '/offers', '/offers/create'];

foreach ($pages as $uri) {
    auth()->login($admin);

    $response = $kernel->handle(Request::create($uri, 'GET'));
    $status = $response->getStatusCode();
    $body = (string) $response->getContent();

    echo str_pad($uri, 18).' -> '.$status."\n";

    if ($status !== 200) {
        echo '  body: '.substr(strip_tags($body), 0, 600)."\n\n";

        continue;
    }

    // Inertia ships the page object in the root element's data-page attribute.
    if (! preg_match('/data-page="([^"]*)"/', $body, $m)) {
        echo "  no data-page in HTML (render failed?)\n\n";

        continue;
    }

    $payload = json_decode(html_entity_decode($m[1], ENT_QUOTES), true);
    $props = $payload['props'] ?? [];
    echo '  component: '.($payload['component'] ?? '?')."\n";
    echo '  props: '.implode(', ', array_keys($props))."\n";

    if ($uri === '/origin-servers') {
        echo '  poolSummary: '.json_encode($props['poolSummary'] ?? null)."\n";
        echo '  roles: '.json_encode($props['roles'] ?? null)."\n";
        $first = $props['servers'][0] ?? null;
        if ($first) {
            echo '  server[0] keys: '.implode(', ', array_keys($first))."\n";
            echo '  server[0]: '.json_encode([
                'host' => $first['host'] ?? null,
                'role' => $first['role'] ?? null,
                'max_offers' => $first['max_offers'] ?? null,
                'free_capacity' => $first['free_capacity'] ?? null,
                'accepts_new_offers' => $first['accepts_new_offers'] ?? null,
                'offers_count' => $first['offers_count'] ?? null,
            ])."\n";
        }
    }

    if ($uri === '/settings') {
        $settings = $props['settings'] ?? [];
        $leaked = array_filter(
            array_keys(is_array($settings) ? $settings : []),
            fn ($k) => str_starts_with($k, 'deploy_') || str_starts_with($k, 'origin_health'),
        );
        echo '  leftover deploy_/origin_health props: '.($leaked === [] ? 'none' : implode(', ', $leaked))."\n";
    }

    if ($uri === '/offers') {
        echo '  canDeploy: '.json_encode($props['canDeploy'] ?? null)."\n";
        // deploy_ready is merged into each offer row, not the page props.
        echo '  offers[0].deploy_ready: '
            .json_encode($props['offers']['data'][0]['deploy_ready'] ?? null)."\n";
    }

    if ($uri === '/offers/create') {
        echo '  canProvisionInfrastructure: '.json_encode($props['canProvisionInfrastructure'] ?? null)."\n";
    }

    echo "\n";
}

echo "done\n";
