<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — teknoloji altyapısı ortağı'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — piyasa verisi ortağı'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — işlem platformu ortağı'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — ödeme işleme ortağı'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — ödeme işleme ortağı'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — ödeme işleme ortağı'],
    ['file' => 'partner-7.svg', 'alt' => 'Küresel bankacılık ağı ortağı'],
    ['file' => 'partner-8.svg', 'alt' => 'Uyumluluk ve finansal güvenlik ortağı'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> güvenilir altyapı ve ödeme ortakları">
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
