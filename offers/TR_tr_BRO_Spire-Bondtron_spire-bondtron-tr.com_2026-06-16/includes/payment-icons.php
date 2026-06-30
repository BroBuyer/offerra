<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'güvenli ödemeler';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — ' . SITE_NAME . ' kabul edilen ödeme yöntemi'],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — ' . SITE_NAME . ' kabul edilen ödeme yöntemi'],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — ' . SITE_NAME . ' kabul edilen ödeme yöntemi'],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — ' . SITE_NAME . ' kabul edilen ödeme yöntemi'],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — ' . SITE_NAME . ' kabul edilen ödeme yöntemi'],
    ['file' => 'banktransfer.svg','alt' => 'Banka havalesi ve SEPA — ' . SITE_NAME . ' kabul edilir'],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="<?= e($payment_context) ?> için kabul edilen ödeme yöntemleri">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Kabul edilen güvenli ödemeler</p>
  <?php endif; ?>
  <ul class="payment-icons-list">
    <?php foreach ($methods as $method): ?>
      <li>
        <img
          src="<?= asset('assets/img/payments/' . $method['file']) ?>"
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
        src="<?= asset('assets/img/payments/ssl-secured.svg') ?>"
        alt="256 bit SSL şifreleme — <?= e(SITE_NAME) ?> üzerinde güvenli veri aktarımı"
        title="SSL korumalı"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
