<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "口座登録 form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? '安全な決済';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — ご利用可能な支払い方法（' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — ご利用可能な支払い方法（' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — ご利用可能な支払い方法（' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — ご利用可能な支払い方法（' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — ご利用可能な支払い方法（' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => '銀行振込およびSEPA — ご利用可能（' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="ご利用可能な支払い方法： <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">安全な決済に対応</p>
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
        alt="256-bit SSL encryption — secure data transfer on <?= e(SITE_NAME) ?>"
        title="SSL Secured"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
