<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'biztonságos fizetés';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — elfogadott fizetési mód a(z) ' . SITE_NAME . ' oldalon'],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — elfogadott fizetési mód a(z) ' . SITE_NAME . ' oldalon'],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — elfogadott fizetési mód a(z) ' . SITE_NAME . ' oldalon'],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — elfogadott fizetési mód a(z) ' . SITE_NAME . ' oldalon'],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — elfogadott fizetési mód a(z) ' . SITE_NAME . ' oldalon'],
    ['file' => 'banktransfer.svg','alt' => 'Banki átutalás és SEPA — elfogadva a(z) ' . SITE_NAME . ' oldalon'],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Elfogadott fizetési módok: <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Biztonságos fizetések elfogadva</p>
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
        alt="256 bites SSL titkosítás — biztonságos adatátvitel a(z) <?= e(SITE_NAME) ?> oldalon"
        title="SSL védett"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
