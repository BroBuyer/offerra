<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file' => 'partner-1.svg', 'alt' => 'Coinbase — parceiro de infraestrutura tecnológica'],
    ['file' => 'partner-2.svg', 'alt' => 'TradingView — parceiro de dados de mercado'],
    ['file' => 'partner-3.svg', 'alt' => 'MetaTrader — parceiro de plataforma de trading'],
    ['file' => 'partner-4.svg', 'alt' => 'Visa — parceiro de processamento de pagamentos'],
    ['file' => 'partner-5.svg', 'alt' => 'Mastercard — parceiro de processamento de pagamentos'],
    ['file' => 'partner-6.svg', 'alt' => 'PayPal — parceiro de processamento de pagamentos'],
    ['file' => 'partner-7.svg', 'alt' => 'Parceiro de rede bancária global'],
    ['file' => 'partner-8.svg', 'alt' => 'Parceiro de conformidade e segurança financeira'],
];
?>
<div class="partners-grid" role="list" aria-label="<?= e(SITE_NAME) ?> parceiros de infraestrutura e pagamentos de confiança">
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
