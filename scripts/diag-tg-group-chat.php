<?php

/**
 * Audit TG_GROUP_CHAT_ID on origin configs vs user_settings.tg_group_chat_id.
 * Usage: php scripts/diag-tg-group-chat.php [--fix-queue]
 */
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\PushOfferConfigJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Facades\DB;
use phpseclib3\Net\SSH2;

$fixQueue = in_array('--fix-queue', $argv, true);

echo "=== user_settings tg_group_chat_id ===\n";
$wantByUser = [];
$groups = [];
foreach (User::query()->with('settings')->orderBy('id')->get() as $u) {
    $s = $u->settings;
    $personal = trim((string) ($s->tg_chat_id ?? ''));
    $group = trim((string) ($s->tg_group_chat_id ?? ''));
    $wantByUser[(int) $u->id] = $group;
    $groups[$group !== '' ? $group : '(empty)'][] = "#{$u->id} {$u->name}";
    echo "#{$u->id} {$u->name} tg_chat_id={$personal} tg_group_chat_id={$group}\n";
}

echo "\n=== group id uniqueness ===\n";
foreach ($groups as $gid => $users) {
    echo "{$gid} => ".implode(', ', $users)."\n";
}

$uniqueNonEmpty = array_values(array_filter(array_keys($groups), fn ($k) => $k !== '(empty)'));
if (count($uniqueNonEmpty) > 1) {
    echo "WARN: users have DIFFERENT group chat ids — will enforce each offer to ITS owner's settings value.\n";
} elseif (count($uniqueNonEmpty) === 1) {
    echo "OK: all users share the same group chat id: {$uniqueNonEmpty[0]}\n";
} else {
    echo "WARN: no tg_group_chat_id set on any user!\n";
}

$offers = Offer::query()
    ->with('user.settings')
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->orderBy('id')
    ->get();

echo "\noffers_to_check=".$offers->count()."\n";
echo "deploy_pending=".DB::table('jobs')->where('queue', 'deploy')->count()."\n";

$byHost = [];
$noHost = 0;
foreach ($offers as $offer) {
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $host = trim((string) ($meta['deploy_host'] ?? ''));
    if ($host === '') {
        $noHost++;
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
    'no_host' => $noHost,
    'queued_fix' => 0,
];

$mismatchSamples = [];
$haveValues = [];

foreach ($byHost as $host => $hostOffers) {
    $origin = $origins->get($host);
    if (! $origin) {
        $stats['no_origin'] += count($hostOffers);
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

    $listFile = '/tmp/tg_domains_'.md5($host).'.txt';
    $ssh->exec('rm -f '.$listFile);
    $domains = array_map(fn ($o) => $o->domain, $hostOffers);
    foreach (array_chunk($domains, 80) as $chunk) {
        $b64 = base64_encode(implode("\n", $chunk)."\n");
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
  if (!preg_match("/TG_GROUP_CHAT_ID',\s*'([^']*)'/", $c, $m)) {
    echo "MISSING {$d}\n";
    continue;
  }
  echo "VAL {$d} {$m[1]}\n";
}
EOS;
    $remotePhp = str_replace('/tmp/LISTFILE', $listFile, $remotePhp);
    $out = $ssh->exec('echo '.base64_encode($remotePhp).' | base64 -d > /tmp/tg_scan.php && php /tmp/tg_scan.php');
    $ssh->disconnect();

    $valByDomain = [];
    foreach (explode("\n", (string) $out) as $line) {
        $line = trim($line);
        if ($line === '') {
            continue;
        }
        if (str_starts_with($line, 'NOCFG ')) {
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
        if (preg_match('/^VAL\s+(\S+)\s+(.*)$/', $line, $m)) {
            $valByDomain[$m[1]] = trim($m[2]);
        }
    }

    foreach ($hostOffers as $offer) {
        if (! isset($valByDomain[$offer->domain])) {
            continue;
        }
        $stats['checked']++;
        $have = (string) $valByDomain[$offer->domain];
        $want = (string) ($wantByUser[(int) $offer->user_id] ?? '');
        $haveValues[$have !== '' ? $have : '(empty)'] = ($haveValues[$have !== '' ? $have : '(empty)'] ?? 0) + 1;

        if ($have === $want) {
            $stats['ok']++;
        } else {
            $stats['mismatch']++;
            if (count($mismatchSamples) < 20) {
                $mismatchSamples[] = "#{$offer->id} u{$offer->user_id} {$offer->domain} have={$have} want={$want}";
            }
            if ($fixQueue) {
                PushOfferConfigJob::dispatch($offer->id)->onQueue('deploy');
                $stats['queued_fix']++;
            }
        }
    }
}

echo "\n=== values found on landers ===\n";
arsort($haveValues);
foreach ($haveValues as $v => $n) {
    echo "{$v} => {$n}\n";
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
