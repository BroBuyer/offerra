<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\FunnelAlertEvent;
use App\Models\FunnelAlertSetting;
use App\Models\OfferStat;
use App\Services\FunnelAlertService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

echo "APP_URL=".config('app.url')."\n";
echo "now=".now()->toDateTimeString()."\n\n";

$alerts = app(FunnelAlertService::class);
$settings = FunnelAlertSetting::current();
$token = $alerts->ensureWebhookToken($settings);
$url = $alerts->postbackUrl($settings);

echo "=== funnel alert settings ===\n";
echo "postback_url={$url}\n";
echo "token_len=".strlen($token)." token_tail=".substr($token, -8)."\n";
echo "telegram_configured=".(filled($settings->tg_bot_token) && (filled($settings->tg_chat_id) || filled($settings->tg_group_chat_id)) ? 'yes' : 'no')."\n";

echo "\n=== funnel_alert_events today ===\n";
$start = now()->startOfDay();
$today = FunnelAlertEvent::query()->where('created_at', '>=', $start)->orderByDesc('id')->get();
echo "count_today=".$today->count()."\n";

$byHour = FunnelAlertEvent::query()
    ->where('created_at', '>=', $start)
    ->selectRaw("to_char(created_at, 'HH24') as h, count(*) as c")
    ->groupBy('h')
    ->orderBy('h')
    ->get();
// postgres to_char — if mysql use DATE_FORMAT. Detect driver.
$driver = DB::connection()->getDriverName();
echo "db_driver={$driver}\n";

if ($driver === 'pgsql') {
    $byHour = DB::table('funnel_alert_events')
        ->where('created_at', '>=', $start)
        ->selectRaw("to_char(created_at, 'HH24') as h, count(*)::int as c")
        ->groupBy('h')
        ->orderBy('h')
        ->get();
} else {
    $byHour = DB::table('funnel_alert_events')
        ->where('created_at', '>=', $start)
        ->selectRaw("DATE_FORMAT(created_at, '%H') as h, count(*) as c")
        ->groupBy('h')
        ->orderBy('h')
        ->get();
}

foreach ($byHour as $row) {
    echo "  hour={$row->h} count={$row->c}\n";
}

echo "\n-- latest 15 events --\n";
$latest = FunnelAlertEvent::query()->orderByDesc('id')->limit(15)->get();
foreach ($latest as $e) {
    echo "#{$e->id} {$e->created_at} brand={$e->brand} geo={$e->geo} lang={$e->lang} offer_found=".($e->offer_found ? '1' : '0')." notified=".($e->telegram_sent_at ? '1' : '0')."\n";
}

$last24 = FunnelAlertEvent::query()->where('created_at', '>=', now()->subDay())->count();
$last1h = FunnelAlertEvent::query()->where('created_at', '>=', now()->subHour())->count();
echo "\nlast_1h={$last1h} last_24h={$last24}\n";

echo "\n=== live offer_stats after S2S fix (last_lead not backfill stamp) ===\n";
$liveLeads = OfferStat::query()
    ->where('last_lead_at', '>=', $start)
    ->where(function ($q) {
        $q->whereTime('last_lead_at', '!=', '02:49:15')
            ->whereTime('last_lead_at', '!=', '10:31:02');
    })
    ->orderByDesc('last_lead_at')
    ->limit(15)
    ->with('offer:id,domain,brand,user_id')
    ->get();
echo "recent_non_backfill_leads_rows=".$liveLeads->count()." (showing up to 15)\n";
foreach ($liveLeads as $st) {
    echo "{$st->last_lead_at} leads={$st->leads_count} #{$st->offer_id} {$st->offer?->domain}\n";
}

$anyAfterNoon = OfferStat::query()
    ->where('last_lead_at', '>=', now()->startOfDay()->setTime(11, 0))
    ->count();
echo "leads_with_last_lead_at>=11:00 today={$anyAfterNoon}\n";

echo "\n=== probe funnel postback endpoint (dry synthetic) ===\n";
$probeBrand = 'OfferraProbe'.now()->format('His');
try {
    $res = Http::timeout(15)
        ->withToken($token)
        ->acceptJson()
        ->post($url, [
            'brand' => $probeBrand,
            'geo' => 'DE',
            'lang' => 'de',
            'external_id' => 'probe-'.bin2hex(random_bytes(8)),
        ]);
    echo "probe_http={$res->status()} body=".substr($res->body(), 0, 200)."\n";
    $created = FunnelAlertEvent::query()->where('brand', $probeBrand)->first();
    echo "probe_event=".($created ? "id={$created->id} ok" : 'NOT_CREATED')."\n";
    if ($created) {
        $created->delete();
        echo "probe_event_deleted\n";
    }
} catch (Throwable $e) {
    echo "probe_err=".$e->getMessage()."\n";
}

echo "\n=== laravel log funnel/postback hints (tail grep) ===\n";
$log = storage_path('logs/laravel.log');
if (is_file($log)) {
    $lines = [];
    $fp = fopen($log, 'r');
    if ($fp) {
        fseek($fp, -min(filesize($log), 500000), SEEK_END);
        while (($line = fgets($fp)) !== false) {
            if (stripos($line, 'funnel') !== false || stripos($line, 'SalesPostback') !== false || stripos($line, 'postback') !== false) {
                $lines[] = rtrim($line);
            }
        }
        fclose($fp);
    }
    $tail = array_slice($lines, -20);
    foreach ($tail as $l) {
        echo $l."\n";
    }
    if ($tail === []) {
        echo "(no recent funnel/postback lines in last ~500KB of log)\n";
    }
} else {
    echo "no laravel.log\n";
}
