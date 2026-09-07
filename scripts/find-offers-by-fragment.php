<?php

/**
 * Find offers by domain fragment.
 *
 * Usage on prod:
 *   php scripts/find-offers-by-fragment.php rendorerza
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;

$fragment = (string) ($argv[1] ?? '');
if (trim($fragment) === '') {
    fwrite(STDERR, "Usage: php scripts/find-offers-by-fragment.php <fragment>\n");
    exit(1);
}

$offers = Offer::query()
    ->where('domain', 'like', '%'.$fragment.'%')
    ->orderBy('id')
    ->limit(50)
    ->get(['id', 'user_id', 'domain', 'status', 'deploy_panel_name', 'infra_meta', 'archived_at']);

foreach ($offers as $offer) {
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $deployHost = trim((string) ($meta['deploy_host'] ?? ''));
    echo $offer->id."\t".$offer->domain."\tstatus=".$offer->status
        ."\tdeploy_panel_name=".$offer->deploy_panel_name
        ."\tinfra_meta.deploy_host=".$deployHost
        ."\tarchived_at=".($offer->archived_at ? $offer->archived_at->toDateTimeString() : '')
        .PHP_EOL;
}

echo 'total_found='.$offers->count().PHP_EOL;

