<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "kontoregistrering form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'sikker betaling';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — accepteret betalingsmetode på ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — accepteret betalingsmetode på ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — accepteret betalingsmetode på ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — accepteret betalingsmetode på ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — accepteret betalingsmetode på ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankoverførsel og SEPA — accepteret på ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Accepterede betalingsmetoder til <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Sikre betalinger accepteres</p>
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
        alt="256-bit SSL encryption — secure data transfer on <?= e(SITE_NAME) ?>"
        title="SSL Sikkerd"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
