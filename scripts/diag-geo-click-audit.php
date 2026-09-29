<?php

/**
 * Audit OFFERRA_GEO_CLICK_URL on origin vs current user geo_click_token.
 * Usage: php scripts/diag-geo-click-audit.php [--sample=0] [--fix-queue]
 *   --sample=0  = all live offers (slow SSH); default 0
 *   --fix-queue  = re-queue PushOfferConfigJob for mismatches
 */
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\PushOfferConfigJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\UserSetting;
use App\Services\OfferGeoClickService;
use Illuminate\Support\Facades\DB;
use phpseclib3\Net\SSH2;

$sample = 0;
$fixQueue = false;
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--sample=')) {
        $sample = max(0, (int) substr($arg, 9));
    }
    if ($arg === '--fix-queue') {
        $fixQueue = true;
    }
}

$svc = app(OfferGeoClickService::class);

// Ensure every user with settings has a token
foreach (UserSetting::query()->orderBy('user_id')->get() as $s) {
    $svc->ensureToken($s);
}

$tokensByUser = [];
foreach (UserSetting::query()->get() as $s) {
    $tokensByUser[(int) $s->user_id] = strtolower(trim((string) $s->geo_click_token));
}

$query = Offer::query()
    ->with('user.settings')
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->whereNotNull('infra_meta')
    ->orderBy('id');

if ($sample > 0) {
    $query->limit($sample);
}

$offers = $query->get();
echo "offers_to_check=".$offers->count()."\n";
echo "deploy_jobs_pending=".DB::table('jobs')->where('queue', 'deploy')->count()."\n";
echo "failed_jobs=".DB::table('failed_jobs')->where('payload', 'like', '%PushOfferConfigJob%')->count()."\n\n";

// Group by deploy_host for fewer SSH sessions
$byHost = [];
foreach ($offers as $offer) {
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $host = trim((string) ($meta['deploy_host'] ?? ''));
    if ($host === '') {
        continue;
    }
    $byHost[$host][] = $offer;
}

$origins = OriginServer::query()->get()->keyBy('host');

$stats = [
    'checked' => 0,
    'ok' => 0,
    'mismatch' => 0,
    'missing_define' => 0,
    'no_config' => 0,
    'ssh_fail' => 0,
    'no_origin' => 0,
    'queued_fix' => 0,
    'legacy_registered' => 0,
];

$mismatchSamples = [];

foreach ($byHost as $host => $hostOffers) {
    $origin = $origins->get($host);
    if (! $origin) {
        foreach ($hostOffers as $o) {
            $stats['no_origin']++;
        }
        echo "NO_ORIGIN host={$host} offers=".count($hostOffers)."\n";
        continue;
    }

    try {
        $ssh = new SSH2($origin->host, (int) ($origin->port ?: 22), 15);
        $ssh->setTimeout(120);
        if (! $ssh->login($origin->username, $origin->password)) {
            echo "SSH_FAIL host={$host}\n";
            $stats['ssh_fail'] += count($hostOffers);
            continue;
        }
    } catch (Throwable $e) {
        echo "SSH_ERR host={$host} ".$e->getMessage()."\n";
        $stats['ssh_fail'] += count($hostOffers);
        continue;
    }

    echo "host={$host} offers=".count($hostOffers)."\n";

    // Batch: one remote script that greps all configs
    $domains = array_map(fn ($o) => $o->domain, $hostOffers);
    $listFile = '/tmp/ogc_domains_'.md5($host).'.txt';
    $ssh->exec('rm -f '.$listFile);
    // Write domains via printf to avoid huge command lines in chunks
    foreach (array_chunk($domains, 80) as $chunk) {
        $payload = implode("\n", $chunk)."\n";
        $b64 = base64_encode($payload);
        $ssh->exec("echo {$b64} | base64 -d >> {$listFile}");
    }

    $remotePhp = <<<'EOS'
<?php
$domains = file('/tmp/LISTFILE', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($domains as $d) {
  $d = trim($d);
  $cfg = "/var/www/offers/{$d}/public_html/includes/config.php";
  if (!is_file($cfg)) { echo "NOCFG {$d}\n"; continue; }
  $c = file_get_contents($cfg);
  if (!preg_match("/OFFERRA_GEO_CLICK_URL',\s*'([^']+)'/", $c, $m)) {
    echo "MISSING {$d}\n";
    continue;
  }
  echo "URL {$d} {$m[1]}\n";
}
EOS;
    $remotePhp = str_replace('/tmp/LISTFILE', $listFile, $remotePhp);
    $b64php = base64_encode($remotePhp);
    $out = $ssh->exec("echo {$b64php} | base64 -d > /tmp/ogc_scan.php && php /tmp/ogc_scan.php");
    $ssh->disconnect();

    $urlByDomain = [];
    foreach (explode("\n", (string) $out) as $line) {
        $line = trim($line);
        if ($line === '') {
            continue;
        }
        if (str_starts_with($line, 'NOCFG ')) {
            $d = trim(substr($line, 6));
            $stats['no_config']++;
            $stats['checked']++;
            continue;
        }
        if (str_starts_with($line, 'MISSING ')) {
            $d = trim(substr($line, 8));
            $stats['missing_define']++;
            $stats['checked']++;
            if ($fixQueue) {
                $offer = collect($hostOffers)->first(fn ($o) => $o->domain === $d);
                if ($offer) {
                    PushOfferConfigJob::dispatch($offer->id)->onQueue('deploy');
                    $stats['queued_fix']++;
                }
            }
            continue;
        }
        if (preg_match('/^URL\s+(\S+)\s+(\S+)/', $line, $m)) {
            $urlByDomain[$m[1]] = $m[2];
        }
    }

    foreach ($hostOffers as $offer) {
        if (! isset($urlByDomain[$offer->domain])) {
            continue;
        }
        $stats['checked']++;
        $url = $urlByDomain[$offer->domain];
        $want = $tokensByUser[(int) $offer->user_id] ?? '';
        $have = '';
        if (preg_match('#/geo-click/([a-f0-9]+)#i', $url, $m)) {
            $have = strtolower($m[1]);
        }
        $hostOk = str_contains($url, 'offerra.xyz');
        if ($have !== '' && $have === $want && $hostOk) {
            $stats['ok']++;
        } else {
            $stats['mismatch']++;
            if ($have !== '') {
                $svc->registerLegacyToken($have, (int) $offer->user_id);
                $stats['legacy_registered'] = ($stats['legacy_registered'] ?? 0) + 1;
            }
            if (count($mismatchSamples) < 15) {
                $mismatchSamples[] = "#{$offer->id} {$offer->domain} have=".substr($have, -8).' want='.substr($want, -8).' url='.$url;
            }
            if ($fixQueue) {
                PushOfferConfigJob::dispatch($offer->id)->onQueue('deploy');
                $stats['queued_fix']++;
            }
        }
    }
}

echo "\n=== summary ===\n";
foreach ($stats as $k => $v) {
    echo "{$k}={$v}\n";
}
if ($mismatchSamples !== []) {
    echo "\nmismatch samples:\n";
    foreach ($mismatchSamples as $line) {
        echo $line."\n";
    }
}
