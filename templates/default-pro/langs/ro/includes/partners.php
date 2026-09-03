<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase - partner infrastruttura tecnologica'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView - partner dati di mercato'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader - partner piattaforma di trading'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa - partner elaborazione pagamenti'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard - partner elaborazione pagamenti'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal - partner elaborazione pagamenti'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner rete bancaria globale'],
    ['file' => 'partner-8.svg', 'alt' => 'Partener pentru conformitate și securitate financiară'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> ">
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
