<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "hesap kaydı form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'güvenli ödeme';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — kabul edilen ödeme yöntemi, ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — kabul edilen ödeme yöntemi, ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — kabul edilen ödeme yöntemi, ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — kabul edilen ödeme yöntemi, ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — kabul edilen ödeme yöntemi, ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Banka transferi ve SEPA — kabul edilen yöntem, ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label=" için kabul edilen ödeme yöntemleri <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Güvenli ödemeler kabul edilir</p>
  <?php endif; ?>
  <ul class="payment-icons-list">
    <?php foreach ($methods as $method): ?>
      <li>
        <img
          src="<?= asset('static/img/payments/' . $method['file']) ?>"
          alt="<?= e($method['alt']) ?>"
          title="<?= e(strtok($method['alt'], ' —')) ?>"
          width="48"
          height="32"
          loading="lazy"
          decoding="async"
        >
      </li>
    <?php endforeach; ?>
    <li>
      <img
        src="<?= asset('static/img/payments/ssl-secured.svg') ?>"
        alt="256 bit SSL şifreleme — güvenli veri aktarımı, <?= e(SITE_NAME) ?>"
        title="SSL Güvenli"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
