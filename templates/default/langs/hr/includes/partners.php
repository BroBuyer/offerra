<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partner za tehnološku infrastrukturu'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — partner za tržišne podatke'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — partner za trgovačku platformu'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — partner za obradu plaćanja'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — partner za obradu plaćanja'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — partner za obradu plaćanja'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner globalne bankovne mreže'],
    ['file' => 'partner-8.svg', 'alt' => 'Partner za financijsku sigurnost i usklađenost'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> pouzdani partneri za infrastrukturu i plaćanja">
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
