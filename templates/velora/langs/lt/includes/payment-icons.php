<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "paskyros registracija form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'saugi kasa';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa – priimtas mokėjimo būdas įjungtas' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard – priimtas mokėjimo būdas įjungtas' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal – priimtas mokėjimo būdas įjungtas' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay – priimtas mokėjimo būdas įjungtas' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => '„Google Pay“ – priimtas mokėjimo metodas įjungtas' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Banko pavedimas ir SEPA – priimami' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Priimami mokėjimo būdai už<?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Priimami saugūs mokėjimai</p>
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
        alt="256 bitų SSL šifravimas – įjungtas saugus duomenų perdavimas<?= e(SITE_NAME) ?>"
        title="SSL apsaugotas"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
