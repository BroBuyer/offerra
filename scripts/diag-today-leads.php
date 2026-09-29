<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OfferStat;
use App\Models\User;
use App\Services\KeitaroClient;
use App\Services\SalesPostbackService;
use Illuminate\Support\Facades\Http;

echo "=== today leads/deps in offer_stats ===\n";
$start = now()->startOfDay();
$leadsToday = OfferStat::query()
    ->where('last_lead_at', '>=', $start)
    ->orderByDesc('last_lead_at')
    ->with(['offer:id,domain,user_id,keitaro_campaign_id,brand'])
    ->get();

$sumLeads = (int) OfferStat::query()->where('last_lead_at', '>=', $start)->sum('leads_count');
// sum of leads_count is lifetime totals for rows touched today — wrong.
// Better: count rows with last_lead_at today + show recent timestamps.

echo "rows_with_last_lead_today=".$leadsToday->count()."\n";
$depsToday = OfferStat::query()
    ->where('last_deposit_at', '>=', $start)
    ->orderByDesc('last_deposit_at')
    ->with(['offer:id,domain,user_id,keitaro_campaign_id,brand'])
    ->get();
echo "rows_with_last_dep_today=".$depsToday->count()."\n";

// Distinguish backfill stamp (~02:49) vs live later hits
$liveLeads = $leadsToday->filter(fn ($s) => $s->last_lead_at && $s->last_lead_at->format('H:i') !== '02:49');
$backfillish = $leadsToday->filter(fn ($s) => $s->last_lead_at && $s->last_lead_at->format('H:i:s') === '02:49:15');

echo "last_lead_at==02:49:15 (likely backfill)=".$backfillish->count()."\n";
echo "last_lead_at other times today=".$liveLeads->count()."\n";

echo "\n-- latest 15 lead stamps today --\n";
foreach ($leadsToday->take(15) as $st) {
    $o = $st->offer;
    echo "{$st->last_lead_at} leads={$st->leads_count} #{$st->offer_id} {$o?->domain} user={$o?->user_id} KT={$o?->keitaro_campaign_id}\n";
}

echo "\n-- latest 10 dep stamps today --\n";
foreach ($depsToday->take(10) as $st) {
    $o = $st->offer;
    echo "{$st->last_deposit_at} deps={$st->deposits_count} #{$st->offer_id} {$o?->domain} user={$o?->user_id}\n";
}

echo "\n=== quick S2S sample (5 per user) ===\n";
$postbacks = app(SalesPostbackService::class);
$users = User::query()->with('settings')->orderBy('id')->get();
$ok = 0;
$bad = 0;
foreach ($users as $user) {
    $s = $user->settings;
    if (! $s || ! filled($s->keitaro_api_key)) {
        continue;
    }
    $token = $postbacks->ensureToken($s);
    $marker = '/api/v1/postback/'.$token;
    $offers = Offer::query()
        ->where('user_id', $user->id)
        ->whereNotNull('keitaro_campaign_id')
        ->where('keitaro_campaign_id', '>', 0)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderByDesc('id')
        ->limit(5)
        ->get(['id', 'domain', 'keitaro_campaign_id']);

    $baseUrl = rtrim($s->keitaro_url ?? 'https://clickmetrics38.com', '/');
    echo "user #{$user->id} {$user->name}\n";
    foreach ($offers as $offer) {
        $cid = (int) $offer->keitaro_campaign_id;
        $response = Http::withHeaders([
            'Api-Key' => $s->keitaro_api_key,
            'Accept' => 'application/json',
        ])->timeout(20)->get("{$baseUrl}/admin_api/v1/campaigns/{$cid}");
        if ($response->failed()) {
            echo "  HTTP {$response->status()} #{$offer->id} KT={$cid}\n";
            $bad++;
            continue;
        }
        $found = false;
        foreach ($response->json('postbacks') ?? [] as $row) {
            $url = (string) ($row['url'] ?? '');
            if (str_contains($url, $marker)) {
                $found = true;
                break;
            }
        }
        if ($found) {
            $ok++;
            echo "  OK  #{$offer->id} {$offer->domain} KT={$cid}\n";
        } else {
            $bad++;
            echo "  BAD #{$offer->id} {$offer->domain} KT={$cid}\n";
        }
    }
}
echo "sample ok={$ok} bad={$bad}\n";
