<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — kryptoinfrastruktuurikumppani'],
    ['file' => 'partner-2.svg', 'alt' => 'Binance — markkinainfrastruktuurikumppani'],
    ['file' => 'partner-3.svg', 'alt' => 'CoinDesk — markkinamediakumppani'],
    ['file' => 'partner-4.svg', 'alt' => 'TradingView — kaaviokumppani'],
    ['file' => 'partner-5.svg', 'alt' => 'Deloitte — tilintarkastus- ja neuvontakumppani'],
    ['file' => 'partner-6.svg', 'alt' => 'Ledger — laitteistoturvakumppani'],
    ['file' => 'partner-7.svg', 'alt' => 'Decrypt — kryptomediakumppani'],
    ['file' => 'partner-8.svg', 'alt' => 'Nansen — ketjuanalytiikkakumppani'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> luotetut infrastruktuuri- ja maksukumppanit">
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
