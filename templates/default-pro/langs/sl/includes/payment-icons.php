<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'varno plačilo';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — sprejeto plačilo na ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — sprejeto plačilo na ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — sprejeto plačilo na ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — sprejeto plačilo na ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — sprejeto plačilo na ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bančno nakazilo in SEPA — sprejeto na ' . SITE_NAME],
];
?>
<div class="payment-icons <?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Sprejeti načini plačila za <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Sprejeta varna plačila</p>
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
        alt="256-bitno šifriranje SSL — varen prenos podatkov na <?= e(SITE_NAME) ?>"
        title="SSL varnost"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
