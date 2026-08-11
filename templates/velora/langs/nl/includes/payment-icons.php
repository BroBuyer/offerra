<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "accountregistratie form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'veilige checkout';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — geaccepteerde betaalmethode op ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — geaccepteerde betaalmethode op ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — geaccepteerde betaalmethode op ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — geaccepteerde betaalmethode op ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — geaccepteerde betaalmethode op ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankoverschrijving en SEPA — geaccepteerd op ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Geaccepteerde betaalmethoden voor <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Veilige betalingen geaccepteerd</p>
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
        alt="256-bits SSL-encryptie — veilige gegevensoverdracht op <?= e(SITE_NAME) ?>"
        title="SSL beveiligd"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
