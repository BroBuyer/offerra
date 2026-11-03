<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: application/xml; charset=UTF-8');
$pages = ['', 'sign.php', 'privacy.php', 'conditions.php', 'contacts.php'];
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $p): ?>
  <url><loc><?= e(page_url($p)) ?></loc></url>
<?php endforeach; ?>
</urlset>
