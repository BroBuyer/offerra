<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'name' => 'Coinbase', 'alt' => 'Coinbase — kriptovalūtu infrastruktūras partneris'],
    ['file' => 'partner-2.svg', 'name' => 'TradingView', 'alt' => 'TradingView — grafiku partneris'],
    ['file' => 'partner-3.svg', 'name' => 'MetaTrader', 'alt' => 'MetaTrader — tirdzniecības termināļa partneris'],
    ['file' => 'partner-4.svg', 'name' => 'Visa', 'alt' => 'Visa — maksājumu infrastruktūras partneris'],
    ['file' => 'partner-5.svg', 'name' => 'Mastercard', 'alt' => 'Mastercard — maksājumu infrastruktūras partneris'],
    ['file' => 'partner-6.svg', 'name' => 'PayPal', 'alt' => 'PayPal — maksājumu infrastruktūras partneris'],
    ['file' => 'partner-7.svg', 'name' => 'SWIFT Network', 'alt' => 'SWIFT Network — banku tīkla partneris'],
    ['file' => 'partner-8.svg', 'name' => 'Cloudflare', 'alt' => 'Cloudflare — drošības un CDN partneris'],
];
?>
<ul class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> uzticami infrastruktūras un maksājumu partneri">
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
