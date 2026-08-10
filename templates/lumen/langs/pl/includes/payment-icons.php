<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'bezpieczna płatność';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — akceptowana metoda płatności w ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — akceptowana metoda płatności w ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — akceptowana metoda płatności w ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — akceptowana metoda płatności w ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — akceptowana metoda płatności w ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Przelew bankowy i SEPA — akceptowane w ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Akceptowane metody płatności dla <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Akceptowane bezpieczne płatności</p>
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
        alt="Szyfrowanie SSL 256-bit — bezpieczny transfer danych w <?= e(SITE_NAME) ?>"
        title="SSL zabezpieczony"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
