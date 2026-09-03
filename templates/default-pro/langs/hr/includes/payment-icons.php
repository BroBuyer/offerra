<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "registracija računa form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'sigurna naplata';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — prihvaćeni način plaćanja na ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — prihvaćeni način plaćanja na ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — prihvaćeni način plaćanja na ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — prihvaćeni način plaćanja na ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — prihvaćeni način plaćanja na ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankovni transfer i SEPA — prihvaćeno na ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Prihvaćeni načini plaćanja za <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Prihvaćena sigurna plaćanja</p>
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
