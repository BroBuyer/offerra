<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partner technologické infrastruktury'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — partner tržních dat'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — partner obchodní platformy'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — partner zpracování plateb'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — partner zpracování plateb'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — partner zpracování plateb'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner globální bankovní sítě'],
    ['file' => 'partner-8.svg', 'alt' => 'Partner pro compliance a finanční bezpečnost'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> spolehliví partneři infrastruktury a plateb">
  <?php foreach ($partners as $partner): ?>
    <div class="partners-grid-item" role="listitem">
      <img
        src="<?= asset('assets/img/partners/' . $partner['file']) ?>"
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
