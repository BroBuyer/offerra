<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — partenaire infrastructure crypto'],
    ['file' => 'partner-2.svg', 'alt' => 'Binance — partenaire infrastructure de marché'],
    ['file' => 'partner-3.svg', 'alt' => 'CoinDesk — partenaire média de marché'],
    ['file' => 'partner-4.svg', 'alt' => 'TradingView — partenaire graphiques'],
    ['file' => 'partner-5.svg', 'alt' => 'Deloitte — partenaire audit et conseil'],
    ['file' => 'partner-6.svg', 'alt' => 'Ledger — partenaire sécurité matérielle'],
    ['file' => 'partner-7.svg', 'alt' => 'Decrypt — partenaire média crypto'],
    ['file' => 'partner-8.svg', 'alt' => 'Nansen — partenaire analytique on-chain'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> — partenaires d'infrastructure et de paiement de confiance">
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
