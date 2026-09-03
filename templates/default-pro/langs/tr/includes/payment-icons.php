<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "hesap kaydı form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'secure checkout';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => $site . 'visa.svg',        'alt' => $site . 'Visa — accepted payment method on ' . SITE_NAME],
    ['file' => $site . 'mastercard.svg',  'alt' => $site . 'Mastercard — accepted payment method on ' . SITE_NAME],
    ['file' => $site . 'paypal.svg',      'alt' => $site . 'PayPal — accepted payment method on ' . SITE_NAME],
    ['file' => $site . 'applepay.svg',    'alt' => $site . 'Apple Pay — accepted payment method on ' . SITE_NAME],
    ['file' => $site . 'googlepay.svg',   'alt' => $site . 'Google Pay — accepted payment method on ' . SITE_NAME],
    ['file' => $site . 'banktransfer.svg','alt' => $site . 'Bank transfer and SEPA — accepted on ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label=" <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Kabul edilen guvenli odemeler</p>
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
        title="SSL Secured"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
