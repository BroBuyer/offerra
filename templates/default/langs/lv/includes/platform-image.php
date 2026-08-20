<?php
/**
 * Platforma showcase image — optimized for Google Images indexing.
 */
require_once __DIR__ . '/config.php';

$platform_path = platform_image_path();
$platform_img = asset($platform_path);
$platform_alt = platform_image_alt();
$platform_caption = platform_image_caption();
?>
<figure class="platform-figure" itemscope itemtype="https://schema.org/ImageObject">
  <meta itemprop="name" content="<?= e(SITE_NAME) ?> — AI tirdzniecības platforma">
  <meta itemprop="description" content="<?= e($platform_alt) ?>">
  <meta itemprop="contentUrl" content="<?= e(page_url($platform_path)) ?>">
  <div class="platform-figure-media">
    <img
      src="<?= e($platform_img) ?>"
      alt="<?= e($platform_alt) ?>"
      title="<?= e(page_title('AI Tirdzniecības platforma')) ?>"
      width="494"
      height="968"
      class="platform-figure-img"
      loading="eager"
      fetchpriority="high"
      decoding="async"
      itemprop="image"
    >
  </div>
  <figcaption class="platform-figure-caption" itemprop="caption">
    <?= e($platform_caption) ?>
  </figcaption>
</figure>
