<?php

declare(strict_types=1);

if ($argc < 2) {
    fwrite(STDERR, "Usage: render-offer-php.php <absolute-path-to.php> [request-uri] [http-host]\n");
    exit(1);
}

$file = $argv[1];
$requestUri = $argv[2] ?? '/index.php';
$httpHost = $argv[3] ?? '127.0.0.1';

if (! is_file($file)) {
    fwrite(STDERR, "File not found: {$file}\n");
    exit(1);
}

if (! defined('OFFERRA_PREVIEW')) {
    define('OFFERRA_PREVIEW', true);
}

putenv('OFFERRA_PREVIEW=1');
$_ENV['OFFERRA_PREVIEW'] = '1';

error_reporting(0);
ini_set('display_errors', '0');
ini_set('log_errors', '0');

$sessionDir = sys_get_temp_dir().DIRECTORY_SEPARATOR.'offerra-preview-sessions';
if (! is_dir($sessionDir)) {
    @mkdir($sessionDir, 0777, true);
}

if (is_dir($sessionDir) && is_writable($sessionDir)) {
    ini_set('session.save_path', $sessionDir);
}

$_SERVER['HTTP_HOST'] = $httpHost;
$_SERVER['REQUEST_URI'] = $requestUri;
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['HTTPS'] = (str_contains($httpHost, 'localhost') || str_starts_with($httpHost, '127.0.0.1.'))
    ? 'off'
    : 'on';

chdir(dirname($file));
require basename($file);
