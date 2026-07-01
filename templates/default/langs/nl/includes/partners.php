<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partner voor technologische infrastructuur'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — partner voor marktdata'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — partner van het handelsplatform'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — partner voor betalingsverwerking'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — partner voor betalingsverwerking'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — partner voor betalingsverwerking'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner van wereldwijd banknetwerk'],
    ['file' => 'partner-8.svg', 'alt' => 'Partner voor compliance en financiele veiligheid'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> vertrouwde infrastructuur- en betalingspartners">
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
