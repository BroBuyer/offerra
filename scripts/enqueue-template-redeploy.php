<?php

/**
 * Queue a full origin redeploy for every live offer of one template.
 *
 *   php scripts/enqueue-template-redeploy.php audax
 */
use App\Models\Offer;
use App\Services\DeployService;

require __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$template = strtolower(trim((string) ($argv[1] ?? '')));
if ($template === '' || ! preg_match('/^[a-z0-9-]+$/', $template)) {
    fwrite(STDERR, "usage: php scripts/enqueue-template-redeploy.php {template}\n");
    exit(1);
}

$deploy = $app->make(DeployService::class);
$queued = 0;
$skipped = 0;

$offers = Offer::query()
    ->with('user')
    ->where('template', $template)
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->orderBy('id')
    ->get();

foreach ($offers as $offer) {
    if (! $offer->user) {
        $skipped++;
        echo "skip {$offer->domain}: no user\n";
        continue;
    }

    try {
        $deploy->enqueueDeploy($offer->user, $offer);
        $queued++;
        echo "queued {$offer->domain}\n";
    } catch (Throwable $e) {
        $skipped++;
        echo "skip {$offer->domain}: {$e->getMessage()}\n";
    }
}

echo "queued={$queued} skipped={$skipped} total={$offers->count()}\n";
