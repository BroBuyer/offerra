<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OfferStat;
use App\Models\OriginServer;
use App\Services\OfferGeoClickService;
use Illuminate\Support\Facades\Http;
use phpseclib3\Net\SSH2;

$domains = array_slice($argv, 1);
if ($domains === []) {
    $domains = ['eisenvermolt.site', 'eisenvermolt.cyou', 'blitzkapitenz.live'];
}

$svc = app(OfferGeoClickService::class);

echo "APP_URL=".config('app.url')."\n\n";

foreach ($domains as $domain) {
    $domain = strtolower(trim($domain));
    echo "==== {$domain} ====\n";
    $offer = Offer::query()->where('domain', $domain)->with(['user.settings', 'stats'])->first();
    if (! $offer) {
        echo "OFFER NOT FOUND\n\n";
        continue;
    }

    $st = $offer->stats;
    echo "offer#{$offer->id} user={$offer->user_id} status={$offer->status} geo={$offer->geo}\n";
    echo "stats clicks={$st?->clicks_geo_count} last_click={$st?->last_click_geo_at} leads={$st?->leads_count} last_lead={$st?->last_lead_at}\n";

    $settings = $offer->user?->settings;
    if (! $settings) {
        echo "NO USER SETTINGS\n\n";
        continue;
    }
    $url = $svc->clickUrl($settings);
    echo "panel_geo_url={$url}\n";

    // Check config on origin
    $host = is_array($offer->infra_meta) ? ($offer->infra_meta['deploy_host'] ?? null) : null;
    echo "deploy_host=".($host ?: 'null')."\n";

    if ($host) {
        $origin = OriginServer::query()->where('host', $host)->first();
        if (! $origin) {
            // try match by IP in name/host
            $origin = OriginServer::query()->where('host', 'like', "%{$host}%")->first();
        }
        if ($origin) {
            try {
                $ssh = new SSH2($origin->host, (int) ($origin->port ?: 22), 12);
                $ssh->setTimeout(40);
                if (! $ssh->login($origin->username, $origin->password)) {
                    echo "SSH login failed\n";
                } else {
                    $cfg = "/var/www/offers/{$domain}/public_html/includes/config.php";
                    $cmd = "if [ -f {$cfg} ]; then grep -E 'OFFERRA_GEO_CLICK|CRM_COUNTRY|form_ip_country' {$cfg} | head -20; else echo NO_CONFIG; fi";
                    echo "--- origin config ---\n".$ssh->exec($cmd)."\n";
                }
                $ssh->disconnect();
            } catch (Throwable $e) {
                echo "SSH err: ".$e->getMessage()."\n";
            }
        } else {
            echo "origin server row not found for host={$host}\n";
        }
    }

    // Simulate geo-click as DE (same as lander beacon)
    $probe = $url.'?d='.rawurlencode($domain).'&c=de&v='.bin2hex(random_bytes(16));
    echo "probe {$probe}\n";
    try {
        $r = Http::timeout(10)
            ->withHeaders(['User-Agent' => 'OfferraGeoClick/1.0'])
            ->get($probe);
        echo "probe_status={$r->status()} body=".substr($r->body(), 0, 200)."\n";
    } catch (Throwable $e) {
        echo "probe_err=".$e->getMessage()."\n";
    }

    $offer->refresh();
    $offer->load('stats');
    echo "after_probe clicks={$offer->stats?->clicks_geo_count} last={$offer->stats?->last_click_geo_at}\n\n";
}
