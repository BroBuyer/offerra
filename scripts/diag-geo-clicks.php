<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OfferStat;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\OfferGeoClickService;
use Illuminate\Support\Facades\Http;

echo 'APP_URL='.config('app.url').PHP_EOL;

$svc = app(OfferGeoClickService::class);
foreach (User::with('settings')->orderBy('id')->get() as $u) {
    $s = $u->settings;
    $tok = $s ? trim((string) ($s->geo_click_token ?? '')) : '';
    echo "user#{$u->id} {$u->name} token=".($tok !== '' ? 'yes:'.substr($tok, 0, 8).'…' : 'NO');
    if ($s) {
        echo ' url='.$svc->clickUrl($s);
    }
    echo PHP_EOL;
}

$totalClicks = (int) OfferStat::query()->sum('clicks_geo_count');
$withClicks = OfferStat::query()->where('clicks_geo_count', '>', 0)->count();
$withLeads = OfferStat::query()->where('leads_count', '>', 0)->count();
echo "stats clicks_sum={$totalClicks} offers_with_clicks={$withClicks} offers_with_leads={$withLeads}\n";

// Probe a few live landers for OFFERRA_GEO_CLICK_URL in config.php via origin SSH list? easier: fetch homepage and check beacon, or check panel-generated local folder
$samples = Offer::query()
    ->whereNotIn('status', ['archived', 'archiving'])
    ->whereHas('stats', fn ($q) => $q->where('leads_count', '>', 0))
    ->orderByDesc('id')
    ->limit(5)
    ->get(['id', 'domain', 'user_id', 'folder']);

echo "--- sample landers ---\n";
foreach ($samples as $o) {
    $domain = $o->domain;
    // try fetch config.php (often blocked) or index for geo click string
    $urls = [
        "https://{$domain}/includes/config.php",
        "https://{$domain}/",
    ];
    $found = 'no';
    foreach ($urls as $url) {
        try {
            $r = Http::timeout(8)->withOptions(['verify' => false])->get($url);
            $body = (string) $r->body();
            if (str_contains($body, 'OFFERRA_GEO_CLICK_URL') || str_contains($body, 'geo-click')) {
                $found = 'YES in '.$url.' status='.$r->status();
                if (preg_match('/OFFERRA_GEO_CLICK_URL[^\n]{0,200}/', $body, $m)) {
                    $found .= ' | '.$m[0];
                }
                break;
            }
            if ($r->status() === 200 && str_contains($url, 'config')) {
                $found = 'config 200 but no GEO_CLICK define';
                break;
            }
        } catch (Throwable $e) {
            $found = 'err '.$e->getMessage();
        }
    }
    echo "#{$o->id} {$domain} user={$o->user_id} → {$found}\n";
}

// Check local offer folder on panel if exists
$local = Offer::query()->where('domain', 'neovalor.org')->first();
if ($local) {
    $path = base_path('offers/'.$local->folder.'/includes/config.php');
    echo 'local_config_exists='.(is_file($path) ? 'yes' : 'no')." path={$path}\n";
    if (is_file($path)) {
        $c = file_get_contents($path);
        echo 'local_has_geo_click='.(str_contains($c, 'OFFERRA_GEO_CLICK_URL') ? 'yes' : 'no')."\n";
    }
}
