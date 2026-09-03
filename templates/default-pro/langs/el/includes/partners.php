<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase - συνεργάτης τεχνολογικής υποδομής'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView - συνεργάτης δεδομένων αγοράς'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader - συνεργάτης πλατφόρμας trading'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa - συνεργάτης επεξεργασίας πληρωμών'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard - συνεργάτης επεξεργασίας πληρωμών'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal - συνεργάτης επεξεργασίας πληρωμών'],
    ['file' => 'partner-7.svg', 'alt' => 'Συνεργάτης παγκόσμιου τραπεζικού δικτύου'],
    ['file' => 'partner-8.svg', 'alt' => 'Συνεργάτης για συμμόρφωση και χρηματοοικονομική ασφάλεια'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> ">
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
