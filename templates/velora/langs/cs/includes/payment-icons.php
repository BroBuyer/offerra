<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "registraci účtu form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'bezpečnou platbu';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — akceptovaná platební metoda na ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — akceptovaná platební metoda na ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — akceptovaná platební metoda na ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — akceptovaná platební metoda na ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — akceptovaná platební metoda na ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankovní převod a SEPA — akceptováno na ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Akceptované platební metody pro <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Akceptovány bezpečné platby</p>
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
        alt="256bitové SSL šifrování — bezpečný přenos dat na <?= e(SITE_NAME) ?>"
        title="Zabezpečeno SSL"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
