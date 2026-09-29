<?php

/**
 * Audit panel S2S tokens vs Keitaro campaign postbacks.
 * Usage: php scripts/diag-s2s-tokens.php [--sample=30] [--fix]
 */
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OfferStat;
use App\Models\User;
use App\Models\UserSetting;
use App\Services\KeitaroClient;
use App\Services\SalesPostbackService;
use Illuminate\Support\Facades\Http;

$sample = 30;
$fix = false;
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--sample=')) {
        $sample = max(5, (int) substr($arg, 9));
    }
    if ($arg === '--fix') {
        $fix = true;
    }
}

$appUrl = rtrim((string) config('app.url'), '/');
echo "APP_URL={$appUrl}\n";
echo "now=".now()->toDateTimeString()."\n\n";

$postbacks = app(SalesPostbackService::class);
$keitaro = app(KeitaroClient::class);

echo "=== user sales_postback_token ===\n";
$users = User::query()->with('settings')->orderBy('id')->get();
foreach ($users as $user) {
    $s = $user->settings;
    if (! $s) {
        echo "#{$user->id} {$user->email} NO_SETTINGS\n";
        continue;
    }
    $tok = trim((string) ($s->sales_postback_token ?? ''));
    $kt = filled($s->keitaro_api_key) ? 'kt=yes' : 'kt=no';
    $url = $tok !== '' ? $postbacks->postbackUrl($s) : '(no token)';
    echo "#{$user->id} {$user->name} <{$user->email}> tok_len=".strlen($tok)." {$kt}\n";
    echo "  url={$url}\n";
}

echo "\n=== recent offer_stats leads/deps ===\n";
$recentLeads = OfferStat::query()
    ->whereNotNull('last_lead_at')
    ->orderByDesc('last_lead_at')
    ->limit(10)
    ->with('offer:id,domain,user_id,keitaro_campaign_id')
    ->get();
if ($recentLeads->isEmpty()) {
    echo "(no last_lead_at at all)\n";
} else {
    foreach ($recentLeads as $st) {
        echo "lead offer#{$st->offer_id} {$st->offer?->domain} KT={$st->offer?->keitaro_campaign_id} last={$st->last_lead_at} count={$st->leads_count}\n";
    }
}
$recentDeps = OfferStat::query()
    ->whereNotNull('last_deposit_at')
    ->orderByDesc('last_deposit_at')
    ->limit(5)
    ->with('offer:id,domain,user_id,keitaro_campaign_id')
    ->get();
echo "deps:\n";
if ($recentDeps->isEmpty()) {
    echo "(no last_deposit_at)\n";
} else {
    foreach ($recentDeps as $st) {
        echo "dep offer#{$st->offer_id} {$st->offer?->domain} last={$st->last_deposit_at} count={$st->deposits_count}\n";
    }
}

echo "\n=== sample Keitaro campaign postbacks ===\n";
$stats = [
    'checked' => 0,
    'ok' => 0,
    'missing_panel' => 0,
    'wrong_token' => 0,
    'wrong_host' => 0,
    'old_host_hint' => 0,
    'status_incomplete' => 0,
    'load_failed' => 0,
    'no_kt' => 0,
];

$hostHost = parse_url($appUrl, PHP_URL_HOST) ?: '';

foreach ($users as $user) {
    $s = $user->settings;
    if (! $s || ! filled($s->keitaro_api_key)) {
        continue;
    }

    $token = $postbacks->ensureToken($s);
    $marker = '/api/v1/postback/'.$token;
    $desiredStatuses = $postbacks->panelPostbackStatuses();

    $offers = Offer::query()
        ->where('user_id', $user->id)
        ->whereNotNull('keitaro_campaign_id')
        ->where('keitaro_campaign_id', '>', 0)
        ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
        ->orderByDesc('id')
        ->limit($sample)
        ->get(['id', 'domain', 'keitaro_campaign_id']);

    echo "\n-- user #{$user->id} {$user->name} sample={$offers->count()} token=...".substr($token, -6)." --\n";

    $seen = [];
    foreach ($offers as $offer) {
        $cid = (int) $offer->keitaro_campaign_id;
        if (isset($seen[$cid])) {
            continue;
        }
        $seen[$cid] = true;
        $stats['checked']++;

        $baseUrl = rtrim($s->keitaro_url ?? 'https://clickmetrics38.com', '/');
        try {
            $response = Http::withHeaders([
                'Api-Key' => $s->keitaro_api_key,
                'Accept' => 'application/json',
            ])->timeout(25)->get("{$baseUrl}/admin_api/v1/campaigns/{$cid}");
        } catch (Throwable $e) {
            $stats['load_failed']++;
            echo "  FAIL #{$offer->id} KT={$cid} {$e->getMessage()}\n";
            continue;
        }

        if ($response->failed()) {
            $stats['load_failed']++;
            echo "  HTTP {$response->status()} #{$offer->id} KT={$cid}\n";
            continue;
        }

        $postbacksRaw = $response->json('postbacks') ?? [];
        if (! is_array($postbacksRaw)) {
            $postbacksRaw = [];
        }

        $panelRows = [];
        $anyPostbackHost = [];
        foreach ($postbacksRaw as $row) {
            if (! is_array($row)) {
                continue;
            }
            $url = trim((string) ($row['url'] ?? ''));
            if ($url === '') {
                continue;
            }
            if (preg_match('#https?://([^/]+)/api/v1/postback/([a-f0-9]+)#i', $url, $m)) {
                $anyPostbackHost[] = strtolower($m[1]);
                $rowTok = strtolower($m[2]);
                $panelRows[] = [
                    'url' => $url,
                    'host' => strtolower($m[1]),
                    'token' => $rowTok,
                    'statuses' => $row['statuses'] ?? [],
                ];
            }
        }

        if ($panelRows === []) {
            $stats['missing_panel']++;
            echo "  MISS #{$offer->id} {$offer->domain} KT={$cid} postbacks=".count($postbacksRaw)."\n";
            if ($fix) {
                $r = $keitaro->ensureSalesS2sPostback($s, $cid);
                echo "    fix => ".json_encode($r)."\n";
            }
            continue;
        }

        $best = $panelRows[0];
        foreach ($panelRows as $pr) {
            if ($pr['token'] === strtolower($token)) {
                $best = $pr;
                break;
            }
        }

        $issues = [];
        if ($best['token'] !== strtolower($token)) {
            $stats['wrong_token']++;
            $issues[] = 'wrong_token(have='.substr($best['token'], -6).')';
        }
        if ($hostHost !== '' && $best['host'] !== strtolower($hostHost)) {
            $stats['wrong_host']++;
            $issues[] = 'wrong_host('.$best['host'].')';
        }
        $st = is_array($best['statuses']) ? array_map('strtolower', $best['statuses']) : [];
        if (! empty(array_diff($desiredStatuses, $st))) {
            $stats['status_incomplete']++;
            $issues[] = 'statuses=['.implode(',', $st).']';
        }

        if ($issues === []) {
            $stats['ok']++;
            echo "  OK   #{$offer->id} {$offer->domain} KT={$cid}\n";
        } else {
            echo "  BAD  #{$offer->id} {$offer->domain} KT={$cid} ".implode(' ', $issues)."\n";
            echo "       url={$best['url']}\n";
            if ($fix) {
                $r = $keitaro->ensureSalesS2sPostback($s, $cid);
                echo "    fix => ".json_encode($r)."\n";
            }
        }
    }
}

echo "\n=== summary ===\n";
foreach ($stats as $k => $v) {
    echo "{$k}={$v}\n";
}

echo "\nNote: Dashboard «Ліди сьогодні (TG)» is a UI stub (скоро) — not wired to offer_stats.\n";
echo "Leads land in offer_stats via S2S; Telegram from SalesPostback is only for SALE/DEP.\n";
