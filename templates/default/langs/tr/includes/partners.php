<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — teknoloji altyapisi ortagi'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — piyasa verisi ortagi'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — islem platformu ortagi'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — odeme islemleri ortagi'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — odeme islemleri ortagi'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — odeme islemleri ortagi'],
    ['file' => 'partner-7.svg', 'alt' => 'Kuresel bankacilik agi ortagi'],
    ['file' => 'partner-8.svg', 'alt' => 'Uyumluluk ve finansal guvenlik ortagi'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> guvenilir altyapi ve odeme ortaklari">
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
