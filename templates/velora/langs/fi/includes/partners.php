<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'name' => 'Coinbase', 'alt' => 'Coinbase — kryptoinfrastruktuurikumppani'],
    ['file' => 'partner-2.svg', 'name' => 'TradingView', 'alt' => 'TradingView — kaaviokumppani'],
    ['file' => 'partner-3.svg', 'name' => 'MetaTrader', 'alt' => 'MetaTrader — kaupankäyntiterminaalikumppani'],
    ['file' => 'partner-4.svg', 'name' => 'Visa', 'alt' => 'Visa — maksuinfrastruktuurikumppani'],
    ['file' => 'partner-5.svg', 'name' => 'Mastercard', 'alt' => 'Mastercard — maksuinfrastruktuurikumppani'],
    ['file' => 'partner-6.svg', 'name' => 'PayPal', 'alt' => 'PayPal — maksuinfrastruktuurikumppani'],
    ['file' => 'partner-7.svg', 'name' => 'SWIFT Network', 'alt' => 'SWIFT Network — pankkiverkkokumppani'],
    ['file' => 'partner-8.svg', 'name' => 'Cloudflare', 'alt' => 'Cloudflare — tietoturva- ja CDN-kumppani'],
];
?>
<ul class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> luotetut infrastruktuuri- ja maksukumppanit">
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
