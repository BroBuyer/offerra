<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'pagos seguros';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — método de pago aceptado en ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — método de pago aceptado en ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — método de pago aceptado en ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — método de pago aceptado en ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — método de pago aceptado en ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Transferencia bancaria y SEPA — aceptados en ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Métodos de pago aceptados para <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Pagos seguros aceptados</p>
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
        alt="Cifrado SSL de 256 bits — transferencia segura de datos en <?= e(SITE_NAME) ?>"
        title="SSL protegido"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
