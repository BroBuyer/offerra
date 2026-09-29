<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\OriginServer;
use phpseclib3\Net\SSH2;

$domains = ['neovalor.org', 'groeix.net', 'orven-logrel.live', 'clairtermelance-fr.live', 'boostforteoark.online'];
$hosts = ['91.224.92.157', '91.224.92.44', '91.224.92.30'];

foreach ($hosts as $host) {
    $s = OriginServer::query()->where('host', $host)->first();
    if (! $s || ! $s->hasSshCredentials()) {
        echo "skip {$host}\n";
        continue;
    }
    echo "=== {$host} ===\n";
    $ssh = new SSH2($host, (int) ($s->port ?: 22), 12);
    $ssh->setTimeout(60);
    if (! $ssh->login((string) $s->username, (string) $s->password)) {
        echo "login fail\n";
        continue;
    }
    foreach ($domains as $d) {
        $cmd = 'f=/var/www/offers/'.$d.'/public_html/includes/config.php; '
            .'if [ -f "$f" ]; then echo '.$d.':$(grep -c OFFERRA_GEO_CLICK_URL "$f" || true):$(grep -c form_ip_country "$f" || true); '
            .'else echo '.$d.':MISSING; fi';
        echo trim((string) $ssh->exec($cmd))."\n";
    }
    $ssh->disconnect();
}
