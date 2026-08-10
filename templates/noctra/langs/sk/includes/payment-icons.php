<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'bezpečnú platbu';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — prijímaná platobná metóda na ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — prijímaná platobná metóda na ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — prijímaná platobná metóda na ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — prijímaná platobná metóda na ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — prijímaná platobná metóda na ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankový prevod a SEPA — prijímané na ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Prijímané platobné metódy pre <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Prijímame zabezpečené platby</p>
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
        alt="256-bitové SSL šifrovanie — bezpečný prenos dát na <?= e(SITE_NAME) ?>"
        title="SSL zabezpečené"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
