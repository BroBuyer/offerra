<?php

/**
 * Probe origin 178.16.55.76 hardware and fill cpu/ram/disk on origin_servers.
 * Run on panel: php scripts/fill-origin-specs-76.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\OriginServer;
use App\Support\SecretValue;

$host = '178.16.55.76';
$os = OriginServer::query()->where('host', $host)->first();
if ($os === null) {
    fwrite(STDERR, "OriginServer {$host} not found\n");
    exit(1);
}

$password = SecretValue::normalize((string) $os->password);
$user = trim((string) ($os->username ?: 'root')) ?: 'root';
$port = (int) ($os->port ?: 22);

if ($password === '') {
    fwrite(STDERR, "No SSH password for {$host}\n");
    exit(1);
}

$remote = <<<'BASH'
CPU=$(grep -m1 'model name' /proc/cpuinfo | cut -d: -f2- | xargs)
THREADS=$(nproc)
RAM_GB=$(awk '/MemTotal/{printf "%d", $2/1024/1024}' /proc/meminfo)
DISK_GB=$(df -BG --output=size / | tail -1 | tr -dc '0-9')
ROTA=$(lsblk -dno ROTA,TYPE | awk '$2=="disk"{print $1; exit}')
if [ "$ROTA" = "0" ]; then DTYPE=SSD; else DTYPE=HDD; fi
echo "CPU_MODEL=$CPU"
echo "THREADS=$THREADS"
echo "RAM_GB=$RAM_GB"
echo "DISK_GB=$DISK_GB"
echo "DISK_TYPE=$DTYPE"
echo "---"
lscpu | egrep 'Model name|CPU\(s\)|Thread|Core|Socket' || true
free -h | head -2
df -h /
lsblk -d -o NAME,SIZE,ROTA,TYPE,MODEL | head -6
BASH;

$cmd = sprintf(
    'SSHPASS=%s sshpass -e ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o ConnectTimeout=15 -p %d %s@%s %s',
    escapeshellarg($password),
    $port,
    escapeshellarg($user),
    escapeshellarg($host),
    escapeshellarg($remote),
);

echo "Probing {$user}@{$host}:{$port}…\n";
exec($cmd.' 2>&1', $lines, $code);
$out = implode("\n", $lines)."\n";
echo $out;

if ($code !== 0) {
    fwrite(STDERR, "SSH probe failed (exit {$code})\n");
    exit(1);
}

$vals = [];
foreach ($lines as $line) {
    if (preg_match('/^(CPU_MODEL|THREADS|RAM_GB|DISK_GB|DISK_TYPE)=(.*)$/', $line, $m)) {
        $vals[$m[1]] = trim($m[2]);
    }
}

$cpuModel = $vals['CPU_MODEL'] ?? '';
$threads = $vals['THREADS'] ?? '';
$ramGb = (int) ($vals['RAM_GB'] ?? 0);
$diskGb = (int) ($vals['DISK_GB'] ?? 0);
$diskType = $vals['DISK_TYPE'] ?? 'SSD';

$cpu = trim($cpuModel.($threads !== '' ? " ({$threads} thr)" : ''));
$ram = $ramGb > 0 ? "{$ramGb} GB" : '';
if ($diskGb >= 900) {
    $disk = "1 TB {$diskType}";
} elseif ($diskGb >= 450) {
    $disk = "500 GB {$diskType}";
} elseif ($diskGb > 0) {
    $disk = "{$diskGb} GB {$diskType}";
} else {
    $disk = '';
}

$os->forceFill([
    'cpu' => $cpu !== '' ? $cpu : $os->cpu,
    'ram' => $ram !== '' ? $ram : $os->ram,
    'disk' => $disk !== '' ? $disk : $os->disk,
])->save();

echo "UPDATED #{$os->id}\n";
echo "cpu={$os->cpu}\n";
echo "ram={$os->ram}\n";
echo "disk={$os->disk}\n";
