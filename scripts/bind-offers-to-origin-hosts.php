<?php

/**
 * Bind offers.infra_meta.deploy_host (+ deploy_panel_name) from where files
 * actually live on origin servers, so Origin Servers "Офферів" counter works.
 *
 * Run: php scripts/bind-offers-to-origin-hosts.php [--dry] [--host=IP]
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Services\OriginServerSync;
use phpseclib3\Net\SSH2;

$dry = in_array('--dry', $argv, true);
$onlyHost = null;
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--host=')) {
        $onlyHost = trim(substr($arg, 7));
    }
}

$sync = app(OriginServerSync::class);

$servers = OriginServer::query()->orderBy('id')->get();
$domainHosts = []; // domain => list of hosts that have files

echo "servers:\n";
foreach ($servers as $server) {
    $host = trim((string) $server->host);
    if ($onlyHost !== null && $host !== $onlyHost) {
        continue;
    }
    if ($host === '' || ! filled($server->username) || ! filled($server->password)) {
        echo "  skip {$host}\n";
        continue;
    }

    echo "  scan {$host} ... ";
    try {
        $ssh = new SSH2($host, (int) ($server->port ?: 22), 12);
        $ssh->setTimeout(120);
        if (! $ssh->login((string) $server->username, (string) $server->password)) {
            echo "LOGIN_FAIL\n";
            continue;
        }
        $out = trim((string) $ssh->exec(
            'ls -1 /var/www/offers 2>/dev/null | while read d; do '.
            'if [ -f "/var/www/offers/$d/public_html/index.php" ] || [ -f "/var/www/offers/$d/public_html/manifest.json" ]; then '.
            'echo "$d"; fi; done'
        ));
        $ssh->disconnect();

        $n = 0;
        foreach (preg_split("/\r\n|\n|\r/", $out) ?: [] as $domain) {
            $domain = strtolower(trim($domain));
            if ($domain === '' || str_starts_with($domain, '_')) {
                continue;
            }
            $domainHosts[$domain] ??= [];
            if (! in_array($host, $domainHosts[$domain], true)) {
                $domainHosts[$domain][] = $host;
                $n++;
            }
        }
        echo "domains={$n}\n";
    } catch (Throwable $e) {
        echo 'ERR '.$e->getMessage()."\n";
    }
}

echo 'map_size='.count($domainHosts)."\n";

// owner default deploy hosts
$ownerDefault = [];
foreach (\App\Models\UserSetting::query()->whereNotNull('deploy_host')->get(['user_id', 'deploy_host']) as $row) {
    $h = $sync->normalizeHost((string) $row->deploy_host);
    if ($h !== '') {
        $ownerDefault[(int) $row->user_id] = $h;
    }
}

$updated = 0;
$skipped = 0;
$missing = 0;
$byHost = [];

$offers = Offer::query()
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->orderBy('id')
    ->get(['id', 'domain', 'infra_meta', 'deploy_panel_name', 'user_id', 'status']);

foreach ($offers as $offer) {
    $domain = strtolower(trim((string) $offer->domain));
    if ($domain === '' || ! isset($domainHosts[$domain])) {
        $missing++;
        continue;
    }

    $hosts = $domainHosts[$domain];
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $current = $sync->normalizeHost((string) ($meta['deploy_host'] ?? ''));
    if ($current === '') {
        $panel = $sync->normalizeHost((string) ($offer->deploy_panel_name ?? ''));
        $current = filter_var($panel, FILTER_VALIDATE_IP) ? $panel : '';
    }

    // Choose target host
    if ($current !== '' && in_array($current, $hosts, true)) {
        $host = $current; // already correct-ish
    } elseif (count($hosts) === 1) {
        $host = $hosts[0];
    } else {
        $pref = $ownerDefault[(int) $offer->user_id] ?? '';
        $host = ($pref !== '' && in_array($pref, $hosts, true)) ? $pref : $hosts[0];
    }

    if ($current === $host) {
        $skipped++;
        $byHost[$host] = ($byHost[$host] ?? 0) + 1;
        continue;
    }

    $meta['deploy_host'] = $host;
    if (! $dry) {
        $offer->forceFill([
            'infra_meta' => $meta,
            'deploy_panel_name' => $host,
        ])->save();
    }

    $updated++;
    $byHost[$host] = ($byHost[$host] ?? 0) + 1;
}

echo 'dry='.($dry ? '1' : '0')."\n";
echo "updated={$updated} already_ok={$skipped} not_on_scanned_disk={$missing}\n";
echo "bound_by_host:\n";
ksort($byHost);
foreach ($byHost as $h => $c) {
    echo "  {$h}: {$c}\n";
}

echo "--- offerCountsByHost now ---\n";
// Re-query after saves
$counts = $sync->offerCountsByHost();
ksort($counts);
foreach ($counts as $h => $c) {
    echo "  {$h}: {$c}\n";
}

echo "DONE\n";
