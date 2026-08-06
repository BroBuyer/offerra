<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — teknologiainfrastruktuurikumppani'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — markkinadatakumppani'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — kaupankäyntialustakumppani'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — maksunkäsittelykumppani'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — maksunkäsittelykumppani'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — maksunkäsittelykumppani'],
    ['file' => 'partner-7.svg', 'alt' => 'Kansainvälinen pankkiverkostokumppani'],
    ['file' => 'partner-8.svg', 'alt' => 'Rahoitusturvallisuuden compliance-kumppani'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> luotetut infra- ja maksukumppanit">
  <?php foreach ($partners as $partner): ?>
    <div class="partners-grid-item" role="listitem">
      <img
        src="<?= asset('static/img/partners/' . $partner['file']) ?>"
        alt="<?= e($partner['alt']) ?>"
        title="<?= e(strtok($partner['alt'], ' —')) ?>"
        width="147"
        height="56"
        loading="lazy"
        decoding="async"
      >
    </div>
  <?php endforeach; ?>
</div>
