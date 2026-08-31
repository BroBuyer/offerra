<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — 技術インフラパートナー'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — 市場データパートナー'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — 取引プラットフォームパートナー'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — 決済パートナー'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — 決済パートナー'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — 決済パートナー'],
    ['file' => 'partner-7.svg', 'alt' => 'グローバル銀行ネットワークパートナー'],
    ['file' => 'partner-8.svg', 'alt' => '金融セキュリティ・コンプライアンスパートナー'],
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
