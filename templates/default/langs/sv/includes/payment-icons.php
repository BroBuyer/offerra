<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'sikre betalinger';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — akseptert betalingsmetode hos ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — akseptert betalingsmetode hos ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — akseptert betalingsmetode hos ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — akseptert betalingsmetode hos ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — akseptert betalingsmetode hos ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankoverschrijving og SEPA — geaccepteerd bij ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Aksepterte betalingsmetoder for <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Aksepterte sikre betalinger</p>
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
        alt="256-bits SSL-kryptering – sikker dataoverføring hos <?= e(SITE_NAME) ?>"
        title="SSL-säkrat"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
