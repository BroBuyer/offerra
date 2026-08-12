<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "registo de conta form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'pagamento seguro';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — método de pagamento aceite em ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — método de pagamento aceite em ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — método de pagamento aceite em ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — método de pagamento aceite em ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — método de pagamento aceite em ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Pankkisiirto e SEPA — aceites em ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Hyväksytyt maksutavat para <?= e($payment_context) ?>">
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
        alt="Encriptação SSL de 256 bits — transferência segura de dados em <?= e(SITE_NAME) ?>"
        title="SSL seguro"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
