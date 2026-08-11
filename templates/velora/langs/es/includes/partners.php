<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'name' => 'Coinbase', 'alt' => 'Coinbase — crypto infrastructure partner'],
    ['file' => 'partner-2.svg', 'name' => 'TradingView', 'alt' => 'TradingView — charting partner'],
    ['file' => 'partner-3.svg', 'name' => 'MetaTrader', 'alt' => 'MetaTrader — trading terminal partner'],
    ['file' => 'partner-4.svg', 'name' => 'Visa', 'alt' => 'Visa — payment infrastructure partner'],
    ['file' => 'partner-5.svg', 'name' => 'Mastercard', 'alt' => 'Mastercard — payment infrastructure partner'],
    ['file' => 'partner-6.svg', 'name' => 'PayPal', 'alt' => 'PayPal — payment infrastructure partner'],
    ['file' => 'partner-7.svg', 'name' => 'SWIFT Network', 'alt' => 'SWIFT Network — banking network partner'],
    ['file' => 'partner-8.svg', 'name' => 'Cloudflare', 'alt' => 'Cloudflare — security and CDN partner'],
];
?>
<ul class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> trusted infrastructure and payment partners">
  <?php foreach ($partners as $partner): ?>
    <li class="partner-chip" role="listitem">
      <img
        class="partner-logo"
        src="<?= asset_version('static/img/partners/' . $partner['file']) ?>"
        alt="<?= e($partner['alt']) ?>"
        title="<?= e($partner['name']) ?>"
        width="28"
        height="28"
        loading="lazy"
        decoding="async"
      >
      <span><?= e($partner['name']) ?></span>
    </li>
  <?php endforeach; ?>
</ul>
