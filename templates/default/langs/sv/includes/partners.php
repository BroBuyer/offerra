<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partner for teknologisk infrastruktur'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — partner for markedsdata'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — partner for handelsplattformen'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — partner for betalingsbehandling'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — partner for betalingsbehandling'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — partner for betalingsbehandling'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner i globalt banknettverk'],
    ['file' => 'partner-8.svg', 'alt' => 'Partner for compliance og finansiell säkerhet'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> pålitelige infrastruktur- og betalingspartnere">
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
