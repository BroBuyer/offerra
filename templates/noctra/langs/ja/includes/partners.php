<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — crypto infrastructure partner'],
    ['file' => 'partner-2.svg', 'alt' => 'Binance — market infrastructure partner'],
    ['file' => 'partner-3.svg', 'alt' => 'CoinDesk — market media partner'],
    ['file' => 'partner-4.svg', 'alt' => 'TradingView — charting partner'],
    ['file' => 'partner-5.svg', 'alt' => 'Deloitte — audit and advisory partner'],
    ['file' => 'partner-6.svg', 'alt' => 'Ledger — hardware security partner'],
    ['file' => 'partner-7.svg', 'alt' => 'Decrypt — crypto media partner'],
    ['file' => 'partner-8.svg', 'alt' => 'Nansen — on-chain analytics partner'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> の信頼できるインフラおよび決済パートナー">
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
