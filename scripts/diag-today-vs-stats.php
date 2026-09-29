<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OfferStat;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;

$today = now()->format('Y-m-d');
$tz = 'Europe/Kyiv';

echo "=== IMPORTANT ===\n";
echo "Dashboard «Ліди сьогодні (TG)» = UI stub (скоро), NEVER shows real numbers.\n";
echo "Check offer_stats / Stats page instead.\n\n";

echo "=== Keitaro report TODAY only {$today} ===\n";

$settingsList = UserSetting::query()
    ->whereNotNull('keitaro_api_key')
    ->where('keitaro_api_key', '!=', '')
    ->orderBy('user_id')
    ->get();

$byCampaign = [];
$pulled = [];

foreach ($settingsList as $settings) {
    $base = rtrim((string) ($settings->keitaro_url ?: 'https://clickmetrics38.com'), '/');
    $key = (string) $settings->keitaro_api_key;
    $fp = $base.'|'.$key;
    if (isset($pulled[$fp])) {
        continue;
    }
    $pulled[$fp] = true;

    echo "pull user={$settings->user_id} {$base}\n";

    $res = Http::withHeaders([
        'Api-Key' => $key,
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->timeout(120)->post("{$base}/admin_api/v1/report/build", [
        'range' => [
            'from' => $today,
            'to' => $today,
            'timezone' => $tz,
        ],
        'dimensions' => ['campaign_id'],
        'measures' => ['leads', 'sales'],
    ]);

    if ($res->failed()) {
        echo "  FAIL HTTP {$res->status()} ".$res->body()."\n";
        continue;
    }

    $rows = $res->json('rows') ?? $res->json() ?? [];
    if (! is_array($rows)) {
        echo "  unexpected json\n";
        continue;
    }

    // Some KT builds nest under 'rows'
    if (isset($rows['rows']) && is_array($rows['rows'])) {
        $rows = $rows['rows'];
    }

    $n = 0;
    $sumL = 0;
    $sumS = 0;
    foreach ($rows as $row) {
        if (! is_array($row)) {
            continue;
        }
        $cid = (int) ($row['campaign_id'] ?? 0);
        if ($cid <= 0) {
            continue;
        }
        $leads = (int) ($row['leads'] ?? 0);
        $sales = (int) ($row['sales'] ?? 0);
        if ($leads === 0 && $sales === 0) {
            continue;
        }
        $n++;
        $sumL += $leads;
        $sumS += $sales;
        $prev = $byCampaign[$cid] ?? ['leads' => 0, 'sales' => 0];
        $byCampaign[$cid] = [
            'leads' => max($prev['leads'], $leads),
            'sales' => max($prev['sales'], $sales),
        ];
    }
    echo "  campaigns_with_conv={$n} leads_sum={$sumL} sales_sum={$sumS}\n";
}

$ktLeads = array_sum(array_column($byCampaign, 'leads'));
$ktSales = array_sum(array_column($byCampaign, 'sales'));
echo "KT today unique campaigns=".count($byCampaign)." leads={$ktLeads} sales={$ktSales}\n";

echo "\n=== match to offers / current offer_stats ===\n";
$matched = 0;
$statsLeads = 0;
$statsDeps = 0;
$examples = [];

foreach ($byCampaign as $cid => $tot) {
    $offer = Offer::query()->where('keitaro_campaign_id', $cid)->first(['id', 'domain', 'user_id']);
    if (! $offer) {
        continue;
    }
    $matched++;
    $st = OfferStat::query()->where('offer_id', $offer->id)->first();
    $statsLeads += (int) ($st->leads_count ?? 0);
    $statsDeps += (int) ($st->deposits_count ?? 0);
    if (count($examples) < 12) {
        $examples[] = sprintf(
            'KT=%d today L=%d S=%d | stats L=%d S=%d last_lead=%s | #%d %s',
            $cid,
            $tot['leads'],
            $tot['sales'],
            (int) ($st->leads_count ?? 0),
            (int) ($st->deposits_count ?? 0),
            $st?->last_lead_at?->format('Y-m-d H:i:s') ?? 'null',
            $offer->id,
            $offer->domain,
        );
    }
}

echo "offers matched to today's KT conv={$matched}\n";
echo "(note: stats L/S are LIFETIME totals, not today-only)\n";
foreach ($examples as $line) {
    echo $line."\n";
}

echo "\n=== honest answer ===\n";
echo "1) Dashboard TG card: stub, ignore it.\n";
echo "2) Backfill wrote LIFETIME counts from KT, stamped last_* = now — NOT a today-only ledger.\n";
echo "3) Today's conversions exist in KT report above; live S2S after token fix will increment from now.\n";
