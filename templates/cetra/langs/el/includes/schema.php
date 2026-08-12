<?php
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => SITE_NAME,
  'url' => SITE_URL,
  'description' => SITE_NAME . ' — πλατφόρμα επενδύσεων με ΤΝ και εκτέλεση σε πραγματικό χρόνο.',
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
