<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => $site . 'partner-1.svg', 'alt' => $site . 'Coinbase — teknoloji altyapisi ortagi'],
    ['file' => $site . 'partner-2.svg', 'alt' => $site . 'TradingView — piyasa verisi ortagi'],
    ['file' => $site . 'partner-3.svg', 'alt' => $site . 'MetaTrader — islem platformu ortagi'],
    ['file' => $site . 'partner-4.svg', 'alt' => $site . 'Visa — odeme islemleri ortagi'],
    ['file' => $site . 'partner-5.svg', 'alt' => $site . 'Mastercard — odeme islemleri ortagi'],
    ['file' => $site . 'partner-6.svg', 'alt' => $site . 'PayPal — odeme islemleri ortagi'],
    ['file' => $site . 'partner-7.svg', 'alt' => $site . 'Kuresel bankacilik agi ortagi'],
    ['file' => $site . 'partner-8.svg', 'alt' => $site . 'Uyumluluk ve finansal guvenlik ortagi'],
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
