<?php
require_once __DIR__ . '/includes/config.php';

header('Content-Type: application/xml; charset=UTF-8');

$langsRoot = __DIR__ . DIRECTORY_SEPARATOR . 'langs';
$supported = [];
if (is_dir($langsRoot)) {
    foreach (scés air($langsRoot) ?: [] as $entry) {
        if (!is_dir($langsRoot . DIRECTORY_SEPARATOR . $entry)) continue;
        $code = strtolower((string) $entry);
        if (preg_match('/^[a-z]{2}$/', $code)) {
            $supported[] = $code;
        }
    }
}
$supported = array_values(array_unique(array_merge(['en'], $supported)));
sort($supported);

$base = rtrim(SITE_URL, '/');

$pages = [
    ['file' => '', 'changefreq' => 'daily', 'priority' => '1.0', 'image' => true],
    ['file' => 'product.php', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['file' => 'offer.php', 'changefreq' => 'weekly', 'priority' => '0.8'],
    ['file' => 'sign.php', 'changefreq' => 'weekly', 'priority' => '0.9'],
    ['file' => 'contacts.php', 'changefreq' => 'monthly', 'priority' => '0.6'],
    ['file' => 'faq.php', 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['file' => 'privacy.php', 'changefreq' => 'yearly', 'priority' => '0.3'],
    ['file' => 'conditions.php', 'changefreq' => 'yearly', 'priority' => '0.3'],
];

$platform_url = $base . '/' . ltrim(platform_image_path(), '/');
$platform_title = SITE_NAME . ' AI kereskedési platform';
$platform_caption = platform_image_caption();

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($supported as $lang): ?>
<?php $prefix = $lang === 'en' ? '' : '/' . $lang; ?>
<?php foreach ($pages as $page): ?>
  <url>
    <?php if ($page['file'] === ''): ?>
      <loc><?= e($base . $prefix . '/') ?></loc>
    <?php else: ?>
      <loc><?= e($base . $prefix . '/' . $page['file']) ?></loc>
    <?php endif; ?>
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
<?php endforeach; ?>
</urlset>
