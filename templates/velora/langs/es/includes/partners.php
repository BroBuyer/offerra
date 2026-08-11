<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'name' => 'Coinbase', 'alt' => 'Coinbase — crypto infrastructure partner'],
    ['file' => 'partner-2.svg', 'name' => 'Binance', 'alt' => 'Binance — market infrastructure partner'],
    ['file' => 'partner-3.svg', 'name' => 'CoinDesk', 'alt' => 'CoinDesk — market media partner'],
    ['file' => 'partner-4.svg', 'name' => 'TradingView', 'alt' => 'TradingView — charting partner'],
    ['file' => 'partner-5.svg', 'name' => 'Deloitte', 'alt' => 'Deloitte — audit and advisory partner'],
    ['file' => 'partner-6.svg', 'name' => 'Ledger', 'alt' => 'Ledger — hardware security partner'],
    ['file' => 'partner-7.svg', 'name' => 'Decrypt', 'alt' => 'Decrypt — crypto media partner'],
    ['file' => 'partner-8.svg', 'name' => 'Nansen', 'alt' => 'Nansen — on-chain analytics partner'],
];
?>
<ul class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> trusted infrastructure and payment partners">
  <?php foreach ($partners as $partner): ?>
    <li class="partner-chip" role="listitem">
      <img
        class="partner-logo"
        src="<?= asset_version('static/img/partners/' . $partner['file']) ?>"
        alt="<?= e($partner['alt']) ?>"
        title="<?= e($partner['name']) ?>"
        width="28"
        height="28"
        loading="lazy"
        decoding="async"
      >
      <span><?= e($partner['name']) ?></span>
    </li>
  <?php endforeach; ?>
</ul>
