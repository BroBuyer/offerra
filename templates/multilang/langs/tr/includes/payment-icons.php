<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'guvenli odemeler';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — ' . SITE_NAME . ' uzerinde kabul edilen odeme yontemi'],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — ' . SITE_NAME . ' uzerinde kabul edilen odeme yontemi'],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — ' . SITE_NAME . ' uzerinde kabul edilen odeme yontemi'],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — ' . SITE_NAME . ' uzerinde kabul edilen odeme yontemi'],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — ' . SITE_NAME . ' uzerinde kabul edilen odeme yontemi'],
    ['file' => 'banktransfer.svg','alt' => 'Banka havalesi ve SEPA — ' . SITE_NAME . ' uzerinde kabul edilir'],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="<?= e($payment_context) ?> icin kabul edilen odeme yontemleri">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Kabul edilen guvenli odemeler</p>
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
        alt="256 bit SSL sifreleme — <?= e(SITE_NAME) ?> uzerinde guvenli veri aktarimi"
        title="SSL ile guvenli"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
