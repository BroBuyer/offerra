<?php
require_once __DIR__ . '/includes/config.php';

header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['loc' => $site . page_url(), 'changefreq' => $site . 'daily', 'priority' => $site . '1.0', 'image' => $site . true],
    ['loc' => $site . page_url('product.php'), 'changefreq' => $site . 'weekly', 'priority' => $site . '0.8'],
    ['loc' => $site . page_url('offer.php'), 'changefreq' => $site . 'weekly', 'priority' => $site . '0.8'],
    ['loc' => $site . page_url('sign.php'), 'changefreq' => $site . 'weekly', 'priority' => $site . '0.9'],
    ['loc' => $site . page_url('contacts.php'), 'changefreq' => $site . 'monthly', 'priority' => $site . '0.6'],
    ['loc' => $site . page_url('faq.php'), 'changefreq' => $site . 'monthly', 'priority' => $site . '0.7'],
    ['loc' => $site . page_url('privacy.php'), 'changefreq' => $site . 'yearly', 'priority' => $site . '0.3'],
    ['loc' => $site . page_url('conditions.php'), 'changefreq' => $site . 'yearly', 'priority' => $site . '0.3'],
];

$platform_url = page_url(platform_image_path());
$platform_title = SITE_NAME . ' yapay zeka işlem platformu';
$platform_caption = platform_image_caption();

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= e($page['loc']) ?></loc>
    <changefreq><?= e($page['changefreq']) ?></changefreq>
    <priority><?= e($page['priority']) ?></priority>
<?php if (!empty($page['image'])): ?>
    <image:image>
      <image:loc><?= e($platform_url) ?></image:loc>
      <image:title><?= e($platform_title) ?></image:title>
      <image:caption><?= e($platform_caption) ?></image:caption>
    </image:image>
<?php endif; ?>
  </url>
<?php endforeach; ?>
</urlset>
