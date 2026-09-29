<?php

/**
 * Read-only pool audit: server roles/capacity and offer->host bindings.
 *
 *   php scripts/audit-origin-pool.php
 *   php scripts/audit-origin-pool.php bind-from-cf          # dry run
 *   php scripts/audit-origin-pool.php bind-from-cf --apply  # write infra_meta.deploy_host
 *
 * Offers with neither infra_meta.deploy_host nor an IP in deploy_panel_name are
 * "unbound": the pool would re-allocate them on the next deploy and leave the old
 * files orphaned. bind-from-cf recovers the binding from the live Cloudflare A record.
 */

require __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Services\CloudflareClient;
use App\Services\OriginPool;
use App\Services\OriginServerSync;

$cmd = $argv[1] ?? 'report';
$apply = in_array('--apply', $argv, true);

/** @var OriginPool $pool */
$pool = app(OriginPool::class);
/** @var OriginServerSync $sync */
$sync = app(OriginServerSync::class);

$ACTIVE_EXCLUDED = ['archived', 'archiving', 'teardown_failed'];

function boundHostOf(Offer $offer, OriginServerSync $sync): string
{
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $fromMeta = $sync->normalizeHost((string) ($meta['deploy_host'] ?? ''));
    if ($fromMeta !== '') {
        return $fromMeta;
    }

    $panel = $sync->normalizeHost((string) ($offer->deploy_panel_name ?? ''));

    return filter_var($panel, FILTER_VALIDATE_IP) ? $panel : '';
}

if ($cmd === 'report') {
    echo "=== POOL ===\n";
    echo json_encode($pool->summary(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), "\n\n";

    echo "=== SERVERS ===\n";
    printf("%-18s %-8s %-7s %-7s %-8s %-8s %s\n", 'HOST', 'ROLE', 'ACTIVE', 'SSH', 'OFFERS', 'LIMIT', 'HEALTH');
    $counts = $pool->offerCounts(true);
    foreach (OriginServer::query()->orderBy('host')->get() as $s) {
        $n = $counts[$sync->normalizeHost((string) $s->host)] ?? 0;
        printf(
            "%-18s %-8s %-7s %-7s %-8d %-8s %s\n",
            $s->host,
            $s->role(),
            $s->is_active ? 'yes' : 'no',
            $s->hasSshCredentials() ? 'yes' : 'NO',
            $n,
            $s->max_offers ?: '-',
            $s->healthStatus(),
        );
    }

    echo "\n=== OFFER BINDINGS (active offers) ===\n";
    $bound = 0;
    $unbound = [];
    $unknownHost = [];

    Offer::query()
        ->whereNotIn('status', $ACTIVE_EXCLUDED)
        ->orderBy('id')
        ->select(['id', 'domain', 'status', 'deploy_panel_name', 'infra_meta'])
        ->chunkById(500, function ($chunk) use (&$bound, &$unbound, &$unknownHost, $sync, $pool): void {
            foreach ($chunk as $offer) {
                $host = boundHostOf($offer, $sync);
                if ($host === '') {
                    $unbound[] = $offer->id.' '.$offer->domain.' ('.$offer->status.')';

                    continue;
                }
                $bound++;
                $server = $pool->serverForHost($host);
                if (! $server) {
                    $unknownHost[$host] = ($unknownHost[$host] ?? 0) + 1;
                }
            }
        });

    echo "bound   = {$bound}\n";
    echo 'unbound = '.count($unbound)."\n";
    foreach (array_slice($unbound, 0, 40) as $line) {
        echo "  - {$line}\n";
    }
    if (count($unbound) > 40) {
        echo '  ... +'.(count($unbound) - 40)." more\n";
    }

    if ($unknownHost !== []) {
        echo "\nhosts NOT in Origin Servers registry (offers would fail to deploy):\n";
        foreach ($unknownHost as $h => $n) {
            echo "  - {$h}: {$n} offers\n";
        }
    }

    exit(0);
}

if ($cmd === 'bind-from-cf') {
    /** @var CloudflareClient $cf */
    $cf = app(CloudflareClient::class);

    $offers = Offer::query()
        ->whereNotIn('status', $ACTIVE_EXCLUDED)
        ->with('user.settings')
        ->orderBy('id')
        ->get()
        ->filter(fn (Offer $o) => boundHostOf($o, $sync) === '');

    echo 'unbound offers: '.$offers->count().($apply ? " (applying)\n" : " (dry run)\n");

    $fixed = 0;
    $failed = 0;

    foreach ($offers as $offer) {
        $settings = $offer->user?->settings;
        if (! $settings) {
            echo "  #{$offer->id} {$offer->domain}: no settings\n";
            $failed++;

            continue;
        }

        try {
            $zone = $cf->findZone($settings, $offer->domain);
            $zoneId = $zone['id'] ?? null;
            if (! $zoneId) {
                echo "  #{$offer->id} {$offer->domain}: no CF zone\n";
                $failed++;

                continue;
            }

            $records = $cf->listARecords($settings, $zoneId, strtolower($offer->domain));
            $ip = trim((string) ($records[0]['content'] ?? ''));

            if (! filter_var($ip, FILTER_VALIDATE_IP)) {
                echo "  #{$offer->id} {$offer->domain}: no apex A record\n";
                $failed++;

                continue;
            }

            $server = $pool->serverForHost($ip);
            $known = $server ? 'known' : 'NOT-IN-REGISTRY';
            echo "  #{$offer->id} {$offer->domain} -> {$ip} ({$known})\n";

            if ($apply) {
                $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
                $meta['deploy_host'] = $ip;
                $offer->forceFill([
                    'infra_meta' => $meta,
                    'deploy_panel_name' => $ip,
                ])->save();
            }

            $fixed++;
        } catch (\Throwable $e) {
            echo "  #{$offer->id} {$offer->domain}: ERR ".$e->getMessage()."\n";
            $failed++;
        }
    }

    $pool->forgetCounts();
    echo "\nresolved={$fixed} failed={$failed}".($apply ? " (written)\n" : " (dry run)\n");

    exit(0);
}

echo "unknown command: {$cmd}\n";
exit(1);
