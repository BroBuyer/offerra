<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "pendaftaran akaun form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'daftar keluar selamat';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — kaedah pembayaran yang diterima di ' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — kaedah pembayaran yang diterima di ' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — kaedah pembayaran yang diterima di ' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — kaedah pembayaran yang diterima di ' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — kaedah pembayaran yang diterima di ' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Pindahan bank dan SEPA — diterima di ' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Kaedah pembayaran yang diterima untuk <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Pembayaran selamat diterima</p>
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
        alt="Penyulitan SSL 256-bit — pemindahan data selamat di <?= e(SITE_NAME) ?>"
        title="Dilindungi SSL"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
