<?php
require_once __DIR__ . '/includes/config.php';

header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['loc' => page_url(), 'changefreq' => 'daily', 'priority' => '1.0', 'image' => true],
    ['loc' => page_url('product.php'), 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => page_url('offer.php'), 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['loc' => page_url('sign.php'), 'changefreq' => 'weekly', 'priority' => '0.9'],
    ['loc' => page_url('contacts.php'), 'changefreq' => 'monthly', 'priority' => '0.6'],
    ['loc' => page_url('faq.php'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => page_url('privacy.php'), 'changefreq' => 'yearly', 'priority' => '0.3'],
    ['loc' => page_url('conditions.php'), 'changefreq' => 'yearly', 'priority' => '0.3'],
];

$platform_url = page_url(platform_image_path());
$platform_title = SITE_NAME . ' Platform Perdagangan AI';
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
