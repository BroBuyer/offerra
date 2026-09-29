<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Services\CloudflareClient;

$targetIp = $argv[1] ?? '91.224.92.44';
$domains = array_values(array_filter(array_slice($argv, 2)));
if ($domains === []) {
    $domains = ['fynvax-official.com', 'quarfinatrade.online'];
}

$user = User::query()->where('email', 'admin@offerra.local')->firstOrFail();
$settings = $user->settings;
$cf = app(CloudflareClient::class);

$creds = $settings->cloudflareSlotCredentials('backup');
$backup = $settings->replicate();
$backup->cloudflare_api_token = $creds['token'];
$backup->cloudflare_account_id = $creds['account_id'];
$backup->cloudflare_account_name = $creds['name'];

foreach ($domains as $domain) {
    $domain = strtolower(trim($domain));
    $offer = Offer::query()->where('user_id', $user->id)->where('domain', $domain)->first();
    if (! $offer) {
        echo "{$domain}: no offer\n";
        continue;
    }
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $zoneId = trim((string) ($meta['cloudflare_zone_id'] ?? ''));
    if ($zoneId === '') {
        $zone = $cf->findZone($backup, $domain);
        $zoneId = (string) ($zone['zone_id'] ?? '');
    }
    if ($zoneId === '') {
        echo "{$domain}: no zone\n";
        continue;
    }

    echo "{$domain}: zone={$zoneId} → A {$targetIp}\n";
    $cf->ensureRootARecord($backup, $zoneId, $domain, $targetIp);

    $as = [];
    foreach ($cf->listARecords($backup, $zoneId, $domain) as $rec) {
        $as[] = ($rec['content'] ?? '').(isset($rec['proxied']) && $rec['proxied'] ? '(p)' : '');
    }
    echo '  A now: '.implode(', ', $as ?: ['-'])."\n";

    $meta['cloudflare_slot'] = 'backup';
    $meta['cloudflare_zone_id'] = $zoneId;
    $meta['deploy_host'] = $targetIp;
    $meta['cloudflare_dns'] = 'done';
    unset($meta['dns_error']);
    $offer->forceFill([
        'infra_meta' => $meta,
        'deploy_panel_name' => $targetIp,
    ])->save();
    echo "  DB updated (backup slot)\n";
}

echo "DONE\n";
