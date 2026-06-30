<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — ტექნოლოგიური ინფრასტრუქტურის პარტნიორი'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — ბაზრის მონაცემების პარტნიორი'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — ტრეიდინგის პლატფორმის პარტნიორი'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — გადახდების დამუშავების პარტნიორი'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — გადახდების დამუშავების პარტნიორი'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — გადახდების დამუშავების პარტნიორი'],
    ['file' => 'partner-7.svg', 'alt' => 'გლობალური საბანკო ქსელის პარტნიორი'],
    ['file' => 'partner-8.svg', 'alt' => 'ფინანსური შესაბამისობისა და უსაფრთხოების პარტნიორი'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> სანდო ინფრასტრუქტურისა და გადახდების პარტნიორები">
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
