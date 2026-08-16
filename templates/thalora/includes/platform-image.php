<?php
require_once __DIR__ . '/config.php';

$platform_path = platform_image_path();
$platform_img = asset($platform_path);
$platform_alt = platform_image_alt();
$platform_caption = platform_image_caption();
?>
<figure class="platform-figure" itemscope itemtype="https://schema.org/ImageObject">
  <meta itemprop="name" content="<?= e(SITE_NAME) ?> trading platform">
  <meta itemprop="description" content="<?= e($platform_alt) ?>">
  <meta itemprop="contentUrl" content="<?= e(page_url($platform_path)) ?>">
  <picture>
    <source type="image/avif" srcset="<?= asset('static/img/responsive/orange/phone-1-640.avif') ?> 640w, <?= asset('static/img/responsive/orange/phone-1-960.avif') ?> 960w" sizes="(max-width: 640px) 92vw, 500px">
    <source type="image/webp" srcset="<?= asset('static/img/responsive/orange/phone-1-640.webp') ?> 640w, <?= asset('static/img/responsive/orange/phone-1-960.webp') ?> 960w" sizes="(max-width: 640px) 92vw, 500px">
    <img
      src="<?= e($platform_img) ?>"
      alt="<?= e($platform_alt) ?>"
      title="<?= e(page_title('Trading platform')) ?>"
      width="500"
      height="822"
      class="w-full max-w-[500px] h-auto"
      loading="eager"
      decoding="async"
      itemprop="image"
    >
  </picture>
  <figcaption class="sr-only" itemprop="caption"><?= e($platform_caption) ?></figcaption>
</figure>
