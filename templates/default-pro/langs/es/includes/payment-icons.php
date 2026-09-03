<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "registro de cuenta form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'pagos seguros';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — metodo de pago aceptado en ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — metodo de pago aceptado en ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — metodo de pago aceptado en ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — metodo de pago aceptado en ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — metodo de pago aceptado en ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Transferencia bancaria y SEPA — aceptado en ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Metodos de pago aceptados para <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Pagos seguros aceptados</p>
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
