<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — Technologie-Infrastrukturpartner'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — Marktdatenpartner'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — Trading-Plattformpartner'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — Zahlungsabwicklungspartner'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — Zahlungsabwicklungspartner'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — Zahlungsabwicklungspartner'],
    ['file' => 'partner-7.svg', 'alt' => 'Partner globales Banknetzwerk'],
    ['file' => 'partner-8.svg', 'alt' => 'Partner für Compliance und Finanzsicherheit'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> — vertrauenswürdige Infrastruktur- und Zahlungspartner">
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
