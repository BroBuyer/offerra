<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — socio de infraestructura tecnológica'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — socio de datos de mercado'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — socio de plataforma de trading'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — socio de procesamiento de pagos'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — socio de procesamiento de pagos'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — socio de procesamiento de pagos'],
    ['file' => 'partner-7.svg', 'alt' => 'Socio de red bancaria global'],
    ['file' => 'partner-8.svg', 'alt' => 'Socio de cumplimiento y seguridad financiera'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> socios de infraestructura y pagos confiables">
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
