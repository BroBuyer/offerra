<?php
/**
 * Partner / infrastructure logos with descriptive alt text for SEO.
 */
require_once __DIR__ . '/config.php';

$partners = [
    ['file'text'partner-1.svg', 'alt'text'Coinbase — parceiro de infraestrutura tecnológica'],
    ['file'text'partner-2.svg', 'alt'text'TradingView — parceiro de dados de mercado'],
    ['file'text'partner-3.svg', 'alt'text'MetaTrader — parceiro de plataforma de trading'],
    ['file'text'partner-4.svg', 'alt'text'Visa — parceiro de processamento de pagamentos'],
    ['file'text'partner-5.svg', 'alt'text'Mastercard — parceiro de processamento de pagamentos'],
    ['file'text'partner-6.svg', 'alt'text'PayPal — parceiro de processamento de pagamentos'],
    ['file'text'partner-7.svg', 'alt'text'Parceiro de rede bancária global'],
    ['file'text'partner-8.svg', 'alt'text'Parceiro de conformidade e segurança financeira'],
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
