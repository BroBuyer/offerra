<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\CloudflareClient;
use Illuminate\Support\Facades\Http;

$user = User::query()->where('email', 'admin@offerra.local')->firstOrFail();
$settings = $user->settings;

echo "=== ADMIN OFFERS AVAIL ===\n";
$stats = Offer::query()->where('user_id', $user->id)
    ->selectRaw("availability_status, count(*) c")
    ->groupBy('availability_status')
    ->pluck('c', 'availability_status');
echo json_encode($stats)."\n";

$errors = Offer::query()->where('user_id', $user->id)
    ->where('availability_status', 'down')
    ->whereNotNull('availability_error')
    ->selectRaw('availability_error, count(*) c')
    ->groupBy('availability_error')
    ->orderByDesc('c')
    ->limit(15)
    ->get();
echo "=== TOP ERRORS ===\n";
foreach ($errors as $row) {
    echo $row->c."\t".$row->availability_error."\n";
}

$samples = Offer::query()->where('user_id', $user->id)
    ->orderByDesc('id')
    ->limit(8)
    ->get(['id', 'domain', 'status', 'deploy_panel_name', 'template', 'availability_status', 'availability_error', 'infra_meta', 'cloudflare_account_name']);

echo "=== SAMPLES ===\n";
foreach ($samples as $o) {
    $meta = is_array($o->infra_meta) ? $o->infra_meta : [];
    echo "#{$o->id} {$o->domain} status={$o->status} tpl={$o->template} panel={$o->deploy_panel_name}"
        ." avail={$o->availability_status} err=".($o->availability_error ?: '-')
        ." dns=".($meta['dns'] ?? '-')
        ." zone=".($meta['cloudflare_zone_id'] ?? '-')
        ."\n";
}

$token = CloudflareClient::normalizeApiToken($settings->cloudflare_api_token);
echo "=== CF TOKEN === ".($token !== '' ? 'yes' : 'no')."\n";

// DNS A for sample domains
echo "=== PUBLIC DNS A ===\n";
foreach ($samples->take(5) as $o) {
    $a = [];
    $records = @dns_get_record($o->domain, DNS_A) ?: [];
    foreach ($records as $r) {
        if (! empty($r['ip'])) {
            $a[] = $r['ip'];
        }
    }
    echo $o->domain.' → '.( $a ? implode(',', $a) : 'NONE' )."\n";
}

// Cloudflare zone A for 3 domains
echo "=== CF API A (first 3) ===\n";
$cf = app(CloudflareClient::class);
foreach ($samples->take(3) as $o) {
    try {
        $zone = $cf->findZone($settings, $o->domain);
        if ($zone === null) {
            echo "{$o->domain}: NO_ZONE\n";
            continue;
        }
        $zoneId = $zone['zone_id'];
        $base = 'https://api.cloudflare.com/client/v4';
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
        ])->timeout(30)->get("{$base}/zones/{$zoneId}/dns_records", [
            'type' => 'A',
            'name' => $o->domain,
            'per_page' => 5,
        ]);
        $rows = $resp->json('result') ?? [];
        $ips = [];
        foreach ($rows as $row) {
            $ips[] = ($row['content'] ?? '?').( ! empty($row['proxied']) ? '(proxied)' : '(dns)' );
        }
        echo "{$o->domain}: zone={$zoneId} A=".($ips ? implode(',', $ips) : 'NONE')
            ." ns=".implode(',', $zone['nameservers'] ?? [])."\n";
    } catch (Throwable $e) {
        echo "{$o->domain}: CF_ERR ".$e->getMessage()."\n";
    }
}

// Check origin .44 for a few webroots
echo "=== ORIGIN .44 PATHS ===\n";
$pass = (string) $settings->deploy_password;
$userSsh = $settings->deploy_username ?: 'root';
$port = (int) ($settings->deploy_port ?: 22);
$host = $settings->deploy_host;
$domains = $samples->take(5)->pluck('domain')->all();
$list = implode(' ', array_map('escapeshellarg', $domains));
$remote = 'for d in '.$list.'; do '
    .'p="/var/www/offers/$d/public_html"; '
    .'if [ -f "$p/index.php" ] || [ -f "$p/index.html" ]; then echo "OK $d"; '
    .'elif [ -d "/var/www/offers/$d" ]; then echo "DIR $d ($(ls /var/www/offers/$d 2>/dev/null | head -3 | xargs))"; '
    .'else echo "MISS $d"; fi; done; '
    .'echo SITES=$(ls -1 /var/www/offers 2>/dev/null | wc -l)';
$cmd = sprintf(
    'SSHPASS=%s sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=15 -p %d %s@%s %s',
    escapeshellarg($pass),
    $port,
    escapeshellarg($userSsh),
    escapeshellarg($host),
    escapeshellarg($remote),
);
passthru($cmd.' 2>&1');
