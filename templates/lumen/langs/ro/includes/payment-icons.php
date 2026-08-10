<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'plată securizată';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — metodă de plată acceptată pe ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — metodă de plată acceptată pe ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — metodă de plată acceptată pe ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — metodă de plată acceptată pe ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — metodă de plată acceptată pe ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Transfer bancar și SEPA — acceptate pe ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Metode de plată acceptate pentru <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Plăți securizate acceptate</p>
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
        alt="Criptare SSL pe 256 biți — transfer securizat de date pe <?= e(SITE_NAME) ?>"
        title="SSL securizat"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
