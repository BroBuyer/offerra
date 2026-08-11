<?php
require_once __DIR__ . '/includes/config.php';

header('Content-Type: text/plain; charset=UTF-8');

echo "User-agent: *\n";
echo "Allow: /\n";
echo "Disallow: /Thanks.php\n";
echo "Disallow: /integration/\n";
echo "\n";
echo 'Sitemap: ' . page_url('sitemap.xml') . "\n";
