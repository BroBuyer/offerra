<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'name' => 'Coinbase', 'alt' => 'Coinbase — rakan kongsi infrastruktur kripto'],
    ['file' => 'partner-2.svg', 'name' => 'TradingView', 'alt' => 'TradingView — rakan kongsi carta'],
    ['file' => 'partner-3.svg', 'name' => 'MetaTrader', 'alt' => 'MetaTrader — rakan kongsi terminal perdagangan'],
    ['file' => 'partner-4.svg', 'name' => 'Visa', 'alt' => 'Visa — rakan kongsi infrastruktur pembayaran'],
    ['file' => 'partner-5.svg', 'name' => 'Mastercard', 'alt' => 'Mastercard — rakan kongsi infrastruktur pembayaran'],
    ['file' => 'partner-6.svg', 'name' => 'PayPal', 'alt' => 'PayPal — rakan kongsi infrastruktur pembayaran'],
    ['file' => 'partner-7.svg', 'name' => 'SWIFT Network', 'alt' => 'SWIFT Network — rakan kongsi rangkaian perbankan'],
    ['file' => 'partner-8.svg', 'name' => 'Cloudflare', 'alt' => 'Cloudflare — rakan kongsi keselamatan dan CDN'],
];
?>
<ul class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> rakan kongsi infrastruktur dan pembayaran yang dipercayai">
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
