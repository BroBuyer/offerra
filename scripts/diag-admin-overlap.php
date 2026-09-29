<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\User;

$user = User::query()->where('email', 'admin@offerra.local')->firstOrFail();
$settings = $user->settings;
$domains = Offer::query()->where('user_id', $user->id)->pluck('domain')->map(fn ($d) => strtolower($d))->all();
file_put_contents('/tmp/bro-domains.txt', implode("\n", $domains)."\n");
echo 'bro_domains='.count($domains)."\n";

$pass = (string) $settings->deploy_password;
$userSsh = $settings->deploy_username ?: 'root';
$port = (int) ($settings->deploy_port ?: 22);
$host = $settings->deploy_host;

$remote = 'ls -1 /var/www/offers 2>/dev/null | tr "A-Z" "a-z"';
$cmd = sprintf(
    'SSHPASS=%s sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=15 -p %d %s@%s %s',
    escapeshellarg($pass),
    $port,
    escapeshellarg($userSsh),
    escapeshellarg($host),
    escapeshellarg($remote),
);
exec($cmd.' 2>/dev/null', $remoteSites, $code);
$remoteSites = array_values(array_filter(array_map('trim', $remoteSites)));
echo 'sites_on_44='.count($remoteSites)."\n";

$onOrigin = array_values(array_intersect($domains, $remoteSites));
$missing = array_values(array_diff($domains, $remoteSites));
echo 'bro_present_on_44='.count($onOrigin)."\n";
echo 'bro_missing_on_44='.count($missing)."\n";
echo "sample_present:\n";
foreach (array_slice($onOrigin, 0, 10) as $d) {
    echo "  $d\n";
}
echo "sample_missing:\n";
foreach (array_slice($missing, 0, 10) as $d) {
    echo "  $d\n";
}

// unique CF A content for a batch of 20 via API
use App\Services\CloudflareClient;
use Illuminate\Support\Facades\Http;

$token = CloudflareClient::normalizeApiToken($settings->cloudflare_api_token);
$cf = app(CloudflareClient::class);
$ips = [];
$noZone = 0;
$checked = 0;
foreach (array_slice($domains, 0, 40) as $domain) {
    $checked++;
    try {
        $zone = $cf->findZone($settings, $domain);
        if ($zone === null) {
            $noZone++;
            continue;
        }
        $zoneId = $zone['zone_id'];
        $resp = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
        ])->timeout(20)->get('https://api.cloudflare.com/client/v4/zones/'.$zoneId.'/dns_records', [
            'type' => 'A',
            'name' => $domain,
            'per_page' => 5,
        ]);
        foreach (($resp->json('result') ?? []) as $row) {
            $ip = (string) ($row['content'] ?? '');
            if ($ip !== '') {
                $ips[$ip] = ($ips[$ip] ?? 0) + 1;
            }
        }
    } catch (Throwable $e) {
        echo "cf_err {$domain}: ".$e->getMessage()."\n";
    }
}
echo "cf_checked={$checked} no_zone={$noZone}\n";
echo "cf_a_ips=".json_encode($ips)."\n";
