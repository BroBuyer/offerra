<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "konta reģistrācija form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'droša norēķināšanās';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — pieņemta maksājumu metode ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — pieņemta maksājumu metode ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — pieņemta maksājumu metode ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — pieņemta maksājumu metode ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — pieņemta maksājumu metode ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankas pārskaitījums un SEPA — pieņemts ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Pieņemtās maksājumu metodes <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Pieņemti droši maksājumi</p>
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
        alt="256 bitu SSL šifrēšana — droša datu pārsūtīšana <?= e(SITE_NAME) ?>"
        title="SSL aizsargāts"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
