<?php

/**
 * Audit EGO (or user) lander TG_CHAT_ID / TG_GROUP_CHAT_ID / bot token fingerprint
 * vs user_settings. Fix via PushOfferConfigJob.
 *
 *   php scripts/diag-ego-tg-chat.php
 *   php scripts/diag-ego-tg-chat.php --fix-queue
 *   php scripts/diag-ego-tg-chat.php --user=2
 */
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Jobs\PushOfferConfigJob;
use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;
use App\Support\SecretValue;
use Illuminate\Support\Facades\DB;
use phpseclib3\Net\SSH2;

$fixQueue = in_array('--fix-queue', $argv, true);
$userId = null;
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--user=')) {
        $userId = (int) substr($arg, 7);
    }
}

$user = $userId
    ? User::query()->with('settings')->findOrFail($userId)
    : User::query()->with('settings')
        ->where(function ($q) {
            $q->where('email', 'like', '%ego%')
                ->orWhere('name', 'like', '%EGO%')
                ->orWhere('name', 'like', '%ego%');
        })
        ->orderBy('id')
        ->first();

if (! $user) {
    // fallback: list users and pick non-admin non-jel
    $all = User::query()->with('settings')->orderBy('id')->get();
    echo "EGO user not found by name/email. Users:\n";
    foreach ($all as $u) {
        $s = $u->settings;
        echo "#{$u->id} {$u->name} <{$u->email}> tg_chat=".trim((string) ($s->tg_chat_id ?? ''))." tg_group=".trim((string) ($s->tg_group_chat_id ?? ''))."\n";
    }
    exit(1);
}

$settings = $user->settings;
if (! $settings) {
    fwrite(STDERR, "No settings for user {$user->id}\n");
    exit(1);
}

$wantChat = trim((string) ($settings->tg_chat_id ?? ''));
$wantGroup = trim((string) ($settings->tg_group_chat_id ?? ''));
$wantToken = SecretValue::normalize((string) ($settings->tg_bot_token ?? ''));
$tokenFp = $wantToken !== '' ? substr($wantToken, 0, 10).'…'.substr($wantToken, -6) : '(empty)';

echo "user=#{$user->id} {$user->name} <{$user->email}>\n";
echo "want TG_CHAT_ID={$wantChat}\n";
echo "want TG_GROUP_CHAT_ID={$wantGroup}\n";
echo "want TG_BOT_TOKEN fp={$tokenFp}\n";

// also show other users for comparison
echo "\n=== all users tg ===\n";
foreach (User::query()->with('settings')->orderBy('id')->get() as $u) {
    $s = $u->settings;
    $tok = SecretValue::normalize((string) ($s->tg_bot_token ?? ''));
    $fp = $tok !== '' ? substr($tok, 0, 10).'…'.substr($tok, -6) : '(empty)';
    echo "#{$u->id} {$u->name} chat=".trim((string) ($s->tg_chat_id ?? ''))." group=".trim((string) ($s->tg_group_chat_id ?? ''))." token={$fp}\n";
}

$offers = Offer::query()
    ->where('user_id', $user->id)
    ->whereNotIn('status', ['archived', 'archiving', 'teardown_failed'])
    ->orderBy('id')
    ->get();

echo "\nlive_offers=".$offers->count()."\n";

$byHost = [];
$noHost = 0;
foreach ($offers as $offer) {
    $meta = is_array($offer->infra_meta) ? $offer->infra_meta : [];
    $host = trim((string) ($meta['deploy_host'] ?? $offer->deploy_panel_name ?? ''));
    if ($host === '') {
        $noHost++;
        continue;
    }
    $byHost[$host][] = $offer;
}
echo "no_host={$noHost} hosts=".count($byHost)."\n";

$origins = OriginServer::query()->get()->keyBy('host');

$stats = [
    'checked' => 0,
    'ok' => 0,
    'mismatch_chat' => 0,
    'mismatch_group' => 0,
    'mismatch_token' => 0,
    'missing' => 0,
    'no_config' => 0,
    'ssh_fail' => 0,
    'no_origin' => 0,
    'queued_fix' => 0,
];

$chatValues = [];
$groupValues = [];
$tokenValues = [];
$samples = [];

foreach ($byHost as $host => $hostOffers) {
    $origin = $origins->get($host);
    if (! $origin || ! filled($origin->password)) {
        echo "NO_ORIGIN/SSH host={$host} offers=".count($hostOffers)."\n";
        $stats['no_origin'] += count($hostOffers);
        continue;
    }

    try {
        $ssh = new SSH2($origin->host, (int) ($origin->port ?: 22), 15);
        $ssh->setTimeout(180);
        if (! $ssh->login((string) $origin->username, SecretValue::normalize((string) $origin->password))) {
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

    $listFile = '/tmp/ego_tg_domains_'.md5($host).'.txt';
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
  $chat = null; $group = null; $token = null;
  if (preg_match("/TG_CHAT_ID',\s*'([^']*)'/", $c, $m)) $chat = $m[1];
  if (preg_match("/TG_GROUP_CHAT_ID',\s*'([^']*)'/", $c, $m)) $group = $m[1];
  if (preg_match("/TG_BOT_TOKEN',\s*'([^']*)'/", $c, $m)) $token = $m[1];
  if ($chat === null && $group === null && $token === null) { echo "MISSING {$d}\n"; continue; }
  $t = (string)$token;
  $fp = $t === '' ? '(empty)' : (substr($t,0,10).'…'.substr($t,-6));
  echo "VAL {$d} chat=".($chat??'(null)')." group=".($group??'(null)')." token={$fp}\n";
}
EOS;
    $remotePhp = str_replace('/tmp/LISTFILE', $listFile, $remotePhp);
    $out = $ssh->exec('echo '.base64_encode($remotePhp).' | base64 -d > /tmp/ego_tg_scan.php && php /tmp/ego_tg_scan.php');
    $ssh->disconnect();

    $byDomain = [];
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
            $stats['missing']++;
            $stats['checked']++;
            $d = trim(substr($line, 8));
            if ($fixQueue) {
                $offer = collect($hostOffers)->first(fn ($o) => $o->domain === $d);
                if ($offer) {
                    PushOfferConfigJob::dispatch($offer->id)->onQueue('deploy');
                    $stats['queued_fix']++;
                }
            }
            continue;
        }
        if (preg_match('/^VAL\s+(\S+)\s+chat=(.*?)\s+group=(.*?)\s+token=(.*)$/', $line, $m)) {
            $byDomain[$m[1]] = [
                'chat' => $m[2],
                'group' => $m[3],
                'token_fp' => $m[4],
            ];
        }
    }

    $wantTokenFp = $wantToken !== '' ? substr($wantToken, 0, 10).'…'.substr($wantToken, -6) : '(empty)';

    foreach ($hostOffers as $offer) {
        if (! isset($byDomain[$offer->domain])) {
            continue;
        }
        $stats['checked']++;
        $have = $byDomain[$offer->domain];
        $chatValues[$have['chat']] = ($chatValues[$have['chat']] ?? 0) + 1;
        $groupValues[$have['group']] = ($groupValues[$have['group']] ?? 0) + 1;
        $tokenValues[$have['token_fp']] = ($tokenValues[$have['token_fp']] ?? 0) + 1;

        $badChat = $have['chat'] !== $wantChat && $have['chat'] !== '(null)';
        // also treat wrong chat even if null when want is set
        if ($have['chat'] === '(null)' && $wantChat !== '') {
            $badChat = true;
        }
        $badGroup = $have['group'] !== $wantGroup && ! ($have['group'] === '(null)' && $wantGroup === '');
        if ($have['group'] === '(null)' && $wantGroup !== '') {
            $badGroup = true;
        }
        $badToken = $have['token_fp'] !== $wantTokenFp;

        $ok = ! $badChat && ! $badGroup && ! $badToken;
        if ($ok) {
            $stats['ok']++;
            continue;
        }
        if ($badChat) {
            $stats['mismatch_chat']++;
        }
        if ($badGroup) {
            $stats['mismatch_group']++;
        }
        if ($badToken) {
            $stats['mismatch_token']++;
        }
        if (count($samples) < 25) {
            $samples[] = "#{$offer->id} {$offer->domain} chat={$have['chat']} group={$have['group']} token={$have['token_fp']}"
                .($badChat ? ' [CHAT]' : '')
                .($badGroup ? ' [GROUP]' : '')
                .($badToken ? ' [TOKEN]' : '');
        }
        if ($fixQueue) {
            PushOfferConfigJob::dispatch($offer->id)->onQueue('deploy');
            $stats['queued_fix']++;
        }
    }
}

echo "\n=== TG_CHAT_ID values on landers ===\n";
arsort($chatValues);
foreach ($chatValues as $v => $n) {
    echo "{$v} => {$n}\n";
}
echo "\n=== TG_GROUP_CHAT_ID values ===\n";
arsort($groupValues);
foreach ($groupValues as $v => $n) {
    echo "{$v} => {$n}\n";
}
echo "\n=== TG_BOT_TOKEN fingerprints ===\n";
arsort($tokenValues);
foreach ($tokenValues as $v => $n) {
    echo "{$v} => {$n}\n";
}

echo "\n=== summary ===\n";
foreach ($stats as $k => $v) {
    echo "{$k}={$v}\n";
}
echo 'deploy_pending='.DB::table('jobs')->where('queue', 'deploy')->count().PHP_EOL;

if ($samples !== []) {
    echo "\nmismatch samples:\n";
    foreach ($samples as $line) {
        echo $line."\n";
    }
}

if (! $fixQueue && (($stats['mismatch_chat'] + $stats['mismatch_group'] + $stats['mismatch_token'] + $stats['missing']) > 0)) {
    echo "\nRe-run with --fix-queue to PushOfferConfigJob for mismatches.\n";
}
