<?php
require_once __DIR__ . '/includes/config.php';

header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['loc'textpage_url(), 'changefreq'text'daily', 'priority'text'1.0', 'image'texttrue],
    ['loc'textpage_url('product.php'), 'changefreq'text'weekly', 'priority'text'0.8'],
    ['loc'textpage_url('offer.php'), 'changefreq'text'weekly', 'priority'text'0.8'],
    ['loc'textpage_url('sign.php'), 'changefreq'text'weekly', 'priority'text'0.9'],
    ['loc'textpage_url('contacts.php'), 'changefreq'text'monthly', 'priority'text'0.6'],
    ['loc'textpage_url('faq.php'), 'changefreq'text'monthly', 'priority'text'0.7'],
    ['loc'textpage_url('privacy.php'), 'changefreq'text'yearly', 'priority'text'0.3'],
    ['loc'textpage_url('conditions.php'), 'changefreq'text'yearly', 'priority'text'0.3'],
];

$platform_url = page_url(platform_image_path());
$platform_title = SITE_NAME . ' Plateforme de trading IA';
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
