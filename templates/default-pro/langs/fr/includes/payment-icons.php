<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "inscription de compte form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'pagamento seguro';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file'text'visa.svg',        'alt'text'Visa — método de pagamento aceite em ' . SITE_NAME],
    ['file'text'mastercard.svg',  'alt'text'Mastercard — método de pagamento aceite em ' . SITE_NAME],
    ['file'text'paypal.svg',      'alt'text'PayPal — método de pagamento aceite em ' . SITE_NAME],
    ['file'text'applepay.svg',    'alt'text'Apple Pay — método de pagamento aceite em ' . SITE_NAME],
    ['file'text'googlepay.svg',   'alt'text'Google Pay — método de pagamento aceite em ' . SITE_NAME],
    ['file'text'banktransfer.svg','alt'text'Transferência bancária e SEPA — aceites em ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Métodos de pagamento aceites para <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Pagamentos seguros aceites</p>
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
