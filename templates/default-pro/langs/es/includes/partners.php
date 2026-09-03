<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — technology infrastructure partner'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — market data partner'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — trading platform partner'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — payment processing partner'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — payment processing partner'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — payment processing partner'],
    ['file' => 'partner-7.svg', 'alt' => 'Global banking network partner'],
    ['file' => 'partner-8.svg', 'alt' => 'Financial security compliance partner'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> socios fiables de infraestructura y pagos">
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
