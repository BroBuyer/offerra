<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partener infrastructură tehnologică'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — partener date de piață'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — partener platformă de tranzacționare'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — partener procesare plăți'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — partener procesare plăți'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — partener procesare plăți'],
    ['file' => 'partner-7.svg', 'alt' => 'Partener rețea bancară globală'],
    ['file' => 'partner-8.svg', 'alt' => 'Partener conformitate și securitate financiară'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> parteneri infrastructură și plăți de încredere">
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
