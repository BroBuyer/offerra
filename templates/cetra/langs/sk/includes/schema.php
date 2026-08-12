<?php
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => SITE_NAME,
  'url' => SITE_URL,
  'description' => SITE_NAME . ' — investičná platforma s AI a vykonávaním v reálnom čase.',
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
