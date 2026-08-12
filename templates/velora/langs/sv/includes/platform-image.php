<?php
/**
 * Plattform showcase image — optimized for Google Images indexing.
 */
require_once __DIR__ . '/config.php';

$platform_path = platform_image_path();
$platform_img = asset_version($platform_path);
$platform_alt = platform_image_alt();
$platform_caption = platform_image_caption();
$as_phone = $as_phone ?? false;
?>
<figure class="platform-figure<?= $as_phone ? ' app-phone-wrap' : '' ?>" itemscope itemtype="https://schema.org/ImageObject">
  <meta itemprop="name" content="<?= e(SITE_NAME) ?> AI-handelsplattform">
  <meta itemprop="description" content="<?= e($platform_alt) ?>">
  <meta itemprop="contentUrl" content="<?= e(page_url($platform_path)) ?>">
  <div class="platform-figure-media">
    <img
      src="<?= e($platform_img) ?>"
      alt="<?= e($platform_alt) ?>"
      title="<?= e(page_title('AI-handelsplattform')) ?>"
      width="320"
      height="640"
      class="platform-figure-img<?= $as_phone ? ' app-phone-image' : '' ?>"
      loading="<?= $as_phone ? 'lazy' : 'eager' ?>"
      <?= $as_phone ? '' : 'fetchpriority="high"' ?>
      decoding="async"
      itemprop="image"
    >
  </div>
  <figcaption class="platform-figure-caption" itemprop="caption">
    <?= e($platform_caption) ?>
  </figcaption>
</figure>
<?php unset($as_phone); ?>
