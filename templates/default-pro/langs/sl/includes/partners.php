<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partner za tehnološko infrastrukturo'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — partner za tržne podatke'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — trading platform partner'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — partner za obdelavo plačil'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — partner za obdelavo plačil'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — partner za obdelavo plačil'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner globalnega bančnega omrežja'],
    ['file' => 'partner-8.svg', 'alt' => 'Partner za finančno varnost in skladnost'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> zaupanja vredni partnerji za infrastrukturo in plačila">
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
