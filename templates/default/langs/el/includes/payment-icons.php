<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'ασφαλείς πληρωμές';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa - αποδεκτή μέθοδος πληρωμής στην ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard - αποδεκτή μέθοδος πληρωμής στην ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal - αποδεκτή μέθοδος πληρωμής στην ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay - αποδεκτή μέθοδος πληρωμής στην ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay - αποδεκτή μέθοδος πληρωμής στην ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Τραπεζική μεταφορά και SEPA - αποδεκτές στην ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Αποδεκτές μέθοδοι πληρωμής για <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Αποδεκτές ασφαλείς πληρωμές</p>
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
        alt="Κρυπτογράφηση SSL 256 bit - ασφαλής μετάδοση δεδομένων στην <?= e(SITE_NAME) ?>"
        title="Προστασία SSL"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
