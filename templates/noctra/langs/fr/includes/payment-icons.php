<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'paiement sécurisé';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — moyen de paiement accepté sur ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — moyen de paiement accepté sur ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — moyen de paiement accepté sur ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — moyen de paiement accepté sur ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — moyen de paiement accepté sur ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Virement bancaire et SEPA — acceptés sur ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Moyens de paiement acceptés pour <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Paiements sécurisés acceptés</p>
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
        alt="Chiffrement SSL 256 bits — transfert de données sécurisé sur <?= e(SITE_NAME) ?>"
        title="SSL sécurisé"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
