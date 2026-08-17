<?php
require_once __DIR__ . '/config.php';

$platform_path = platform_image_path();
$platform_img = asset($platform_path);
$platform_alt = platform_image_alt();
$platform_caption = platform_image_caption();
?>
<figure class="platform-figure" itemscope itemtype="https://schema.org/ImageObject">
  <meta itemprop="name" content="<?= e(SITE_NAME) ?> kereskedési platform kulcsfunkciói">
  <meta itemprop="description" content="<?= e($platform_alt) ?>">
  <meta itemprop="contentUrl" content="<?= e(page_url($platform_path)) ?>">
  <img
    src="<?= e($platform_img) ?>"
    alt="<?= e($platform_alt) ?>"
    title="<?= e(page_title('Kereskedési platform')) ?>"
    width="500"
    height="822"
    class="w-full max-w-[500px] h-auto"
    loading="eager"
    fetchpriority="high"
    decoding="async"
    itemprop="image"
  >
  <figcaption class="sr-only" itemprop="caption"><?= e($platform_caption) ?></figcaption>
</figure>
