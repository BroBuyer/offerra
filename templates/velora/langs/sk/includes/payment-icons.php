<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "registráciu účtu form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'bezpečnú platbu';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — akceptovaná platobná metóda na ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — akceptovaná platobná metóda na ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — akceptovaná platobná metóda na ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — akceptovaná platobná metóda na ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — akceptovaná platobná metóda na ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bankový prevod a SEPA — akceptované na ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Akceptované platobné metódy pre <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Akceptované bezpečné platby</p>
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
        alt="256-bitové SSL šifrovanie — bezpečný prenos údajov na <?= e(SITE_NAME) ?>"
        title="Zabezpečené SSL"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
