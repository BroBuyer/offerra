<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — socio de infraestructura crypto'],
    ['file' => 'partner-2.svg', 'alt' => 'Binance — socio de infraestructura de mercado'],
    ['file' => 'partner-3.svg', 'alt' => 'CoinDesk — socio de medios de mercado'],
    ['file' => 'partner-4.svg', 'alt' => 'TradingView — socio de gráficos'],
    ['file' => 'partner-5.svg', 'alt' => 'Deloitte — socio de auditoría y asesoría'],
    ['file' => 'partner-6.svg', 'alt' => 'Ledger — socio de seguridad hardware'],
    ['file' => 'partner-7.svg', 'alt' => 'Decrypt — socio de medios crypto'],
    ['file' => 'partner-8.svg', 'alt' => 'Nansen — socio de analítica on-chain'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> — socios de confianza en infraestructura y pagos">
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
