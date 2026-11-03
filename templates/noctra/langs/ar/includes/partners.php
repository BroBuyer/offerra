<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partner infrastruttura crypto'],
    ['file' => 'partner-2.svg', 'alt' => 'Binance — partner infrastruttura di mercato'],
    ['file' => 'partner-3.svg', 'alt' => 'CoinDesk — partner media di mercato'],
    ['file' => 'partner-4.svg', 'alt' => 'TradingView — partner per i grafici'],
    ['file' => 'partner-5.svg', 'alt' => 'Deloitte — partner audit e consulenza'],
    ['file' => 'partner-6.svg', 'alt' => 'Ledger — partner sicurezza hardware'],
    ['file' => 'partner-7.svg', 'alt' => 'Decrypt — partner media crypto'],
    ['file' => 'partner-8.svg', 'alt' => 'Nansen — partner analytics on-chain'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> — partner di fiducia per infrastruttura e pagamenti">
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
