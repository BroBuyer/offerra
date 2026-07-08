<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'sichere Zahlungen';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — akzeptierte Zahlungsmethode bei ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — akzeptierte Zahlungsmethode bei ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — akzeptierte Zahlungsmethode bei ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — akzeptierte Zahlungsmethode bei ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — akzeptierte Zahlungsmethode bei ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Banküberweisung und SEPA — akzeptiert bei ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Akzeptierte Zahlungsmethoden für <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Akzeptierte sichere Zahlungen</p>
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
        alt="256-Bit-SSL-Verschlüsselung — sichere Datenübertragung bei <?= e(SITE_NAME) ?>"
        title="SSL-gesichert"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
