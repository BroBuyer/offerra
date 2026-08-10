<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'güvenli ödeme';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — ' . SITE_NAME . ' üzerinde kabul edilen ödeme yöntemi'],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — ' . SITE_NAME . ' üzerinde kabul edilen ödeme yöntemi'],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — ' . SITE_NAME . ' üzerinde kabul edilen ödeme yöntemi'],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — ' . SITE_NAME . ' üzerinde kabul edilen ödeme yöntemi'],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — ' . SITE_NAME . ' üzerinde kabul edilen ödeme yöntemi'],
    ['file' => 'banktransfer.svg','alt' => 'Banka havalesi ve SEPA — ' . SITE_NAME . ' üzerinde kabul edilir'],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="<?= e($payment_context) ?> için kabul edilen ödeme yöntemleri">
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
        alt="256-bit SSL şifreleme — <?= e(SITE_NAME) ?> üzerinde güvenli veri aktarımı"
        title="SSL güvenli"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
