<?php

/**
 * Delete leftover /var/www/offers/{domain} for archived offers (wrong-host teardown bug).
 *
 *   php scripts/cleanup-archived-origin-files.php dry-run
 *   php scripts/cleanup-archived-origin-files.php run
 */
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Support\SecretValue;
use phpseclib3\Net\SSH2;

$mode = $argv[1] ?? 'dry-run';
$doRun = $mode === 'run';

function offerHost(Offer $o): string
{
    $meta = is_array($o->infra_meta) ? $o->infra_meta : [];
    $h = trim((string) ($meta['deploy_host'] ?? ''));
    if ($h !== '') {
        return $h;
    }
    $p = trim((string) ($o->deploy_panel_name ?? ''));

    return filter_var($p, FILTER_VALIDATE_IP) ? $p : '';
}

$offers = Offer::query()
    ->whereIn('status', ['archived', 'teardown_failed'])
    ->orderBy('id')
    ->get(['id', 'domain', 'status', 'infra_meta', 'deploy_panel_name']);

echo 'archived_rows='.$offers->count().PHP_EOL;

$byHost = [];
$noHost = 0;
foreach ($offers as $o) {
    $h = offerHost($o);
    if ($h === '') {
        $noHost++;
        continue;
    }
    $byHost[$h][] = $o;
}
echo 'no_host='.$noHost.' hosts='.count($byHost).PHP_EOL;

$origins = OriginServer::query()->get()->keyBy('host');
$stats = ['present' => 0, 'absent' => 0, 'deleted' => 0, 'ssh_fail' => 0, 'no_origin' => 0];

foreach ($byHost as $host => $hostOffers) {
    $srv = $origins->get($host);
    if (! $srv || ! $srv->hasSshCredentials()) {
        echo "NO_ORIGIN host={$host} offers=".count($hostOffers)."\n";
        $stats['no_origin'] += count($hostOffers);
        continue;
    }

    try {
        $ssh = new SSH2($srv->host, (int) ($srv->port ?: 22), 15);
        $ssh->setTimeout(300);
        if (! $ssh->login((string) $srv->username, SecretValue::normalize((string) $srv->password))) {
            echo "SSH_FAIL host={$host}\n";
            $stats['ssh_fail'] += count($hostOffers);
            continue;
        }
    } catch (Throwable $e) {
        echo "SSH_ERR host={$host} ".$e->getMessage()."\n";
        $stats['ssh_fail'] += count($hostOffers);
        continue;
    }

    $listFile = '/tmp/arch_domains_'.md5($host).'.txt';
    $ssh->exec('rm -f '.$listFile);
    $domains = array_map(fn ($o) => strtolower(trim($o->domain)), $hostOffers);
    foreach (array_chunk($domains, 100) as $chunk) {
        $b64 = base64_encode(implode("\n", $chunk)."\n");
        $ssh->exec("echo {$b64} | base64 -d >> {$listFile}");
    }

    $scan = <<<'EOS'
<?php
$domains = file('/tmp/LIST', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($domains as $d) {
  $d = trim($d);
  if ($d === '' || str_contains($d, '/') || str_contains($d, '..')) continue;
  $p = "/var/www/offers/{$d}";
  echo (is_dir($p) ? "PRESENT" : "ABSENT")." {$d}\n";
}
EOS;
    $scan = str_replace('/tmp/LIST', $listFile, $scan);
    $out = (string) $ssh->exec('echo '.base64_encode($scan).' | base64 -d > /tmp/arch_scan.php && php /tmp/arch_scan.php');

    $present = [];
    foreach (explode("\n", $out) as $line) {
        $line = trim($line);
        if (str_starts_with($line, 'PRESENT ')) {
            $present[] = trim(substr($line, 8));
            $stats['present']++;
        } elseif (str_starts_with($line, 'ABSENT ')) {
            $stats['absent']++;
        }
    }

    echo "host={$host} present=".count($present).'/'.count($hostOffers)."\n";

    if ($present !== [] && $doRun) {
        $delList = '/tmp/arch_del_'.md5($host).'.txt';
        $ssh->exec('rm -f '.$delList);
        foreach (array_chunk($present, 80) as $chunk) {
            $b64 = base64_encode(implode("\n", $chunk)."\n");
            $ssh->exec("echo {$b64} | base64 -d >> {$delList}");
        }
        $del = <<<'EOS'
<?php
$domains = file('/tmp/DELLIST', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$n = 0;
foreach ($domains as $d) {
  $d = trim(strtolower($d));
  if ($d === '' || !preg_match('/^[a-z0-9.-]+$/', $d)) continue;
  $p = "/var/www/offers/{$d}";
  if (is_dir($p)) {
    // recursive delete
    $it = new RecursiveDirectoryIterator($p, FilesystemIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($files as $f) {
      $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname());
    }
    rmdir($p);
    $n++;
    echo "RM {$d}\n";
  }
}
echo "REMOVED {$n}\n";
EOS;
        $del = str_replace('/tmp/DELLIST', $delList, $del);
        $dout = (string) $ssh->exec('echo '.base64_encode($del).' | base64 -d > /tmp/arch_del.php && php /tmp/arch_del.php');
        if (preg_match('/REMOVED\s+(\d+)/', $dout, $m)) {
            $stats['deleted'] += (int) $m[1];
        }
        echo "  deleted_on_{$host}: ".trim(substr($dout, -80))."\n";
    }

    $ssh->disconnect();
}

echo "\n=== summary mode={$mode} ===\n";
foreach ($stats as $k => $v) {
    echo "{$k}={$v}\n";
}
if (! $doRun) {
    echo "Re-run with: php scripts/cleanup-archived-origin-files.php run\n";
}
