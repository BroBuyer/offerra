<?php

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Offer;
use App\Models\OriginServer;
use App\Models\User;

$user = User::query()->where('email', 'admin@offerra.local')->firstOrFail();
$domains = Offer::query()->where('user_id', $user->id)->orderByDesc('id')->limit(15)->pluck('domain')->all();

$oldIp = '62.60.130.233';
$old = OriginServer::query()->where('host', $oldIp)->first();
echo "old_origin_233=".($old ? ('#'.$old->id.' ssh='.($old->hasSshCredentials()?'yes':'no')) : 'NOT_IN_REGISTRY')."\n";

// TCP 80/443 to 233
foreach ([80, 443, 22] as $port) {
    $errno = 0; $errstr = '';
    $fp = @fsockopen($oldIp, $port, $errno, $errstr, 5);
    echo "tcp {$oldIp}:{$port}=".($fp ? 'open' : "closed/{$errstr}")."\n";
    if ($fp) {
        fclose($fp);
    }
}

// Also check .44 tcp
foreach ([80, 443, 22] as $port) {
    $errno = 0; $errstr = '';
    $fp = @fsockopen('91.224.92.44', $port, $errno, $errstr, 5);
    echo "tcp 91.224.92.44:{$port}=".($fp ? 'open' : "closed/{$errstr}")."\n";
    if ($fp) {
        fclose($fp);
    }
}

// Sample HTTPS via CF for one domain
$d = $domains[0] ?? null;
if ($d) {
    $ch = curl_init('https://'.$d.'/');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 12,
        CURLOPT_CONNECTTIMEOUT => 6,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HEADER => true,
        CURLOPT_NOBODY => true,
        CURLOPT_SSL_VERIFYPEER => true,
    ]);
    $resp = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err = curl_error($ch);
    curl_close($ch);
    echo "https {$d} http={$code} err=".($err ?: '-')."\n";
    if (is_string($resp)) {
        foreach (explode("\n", $resp) as $line) {
            if (stripos($line, 'cf-ray') !== false || stripos($line, 'HTTP/') === 0 || stripos($line, 'server:') === 0) {
                echo '  '.trim($line)."\n";
            }
        }
    }
}

echo "sample_domains=".implode(', ', array_slice($domains, 0, 5))."\n";
