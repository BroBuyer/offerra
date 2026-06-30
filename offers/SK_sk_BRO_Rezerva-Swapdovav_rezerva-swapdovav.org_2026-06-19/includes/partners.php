<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partner technologickej infraštruktúry'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — partner trhových dát'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — partner obchodnej platformy'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — partner spracovania platieb'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — partner spracovania platieb'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — partner spracovania platieb'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner globálnej bankovej siete'],
    ['file' => 'partner-8.svg', 'alt' => 'Partner finančnej compliance a bezpečnosti'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> partneri infraštruktúry a spoľahlivých platieb">
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
