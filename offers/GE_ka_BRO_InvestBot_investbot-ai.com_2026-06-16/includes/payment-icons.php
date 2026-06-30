<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "account registration form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'უსაფრთხო გადახდები';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — გადახდის მეთოდი, მიღებულია ' . SITE_NAME . '-ზე'],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — გადახდის მეთოდი, მიღებულია ' . SITE_NAME . '-ზე'],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — გადახდის მეთოდი, მიღებულია ' . SITE_NAME . '-ზე'],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — გადახდის მეთოდი, მიღებულია ' . SITE_NAME . '-ზე'],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay — გადახდის მეთოდი, მიღებულია ' . SITE_NAME . '-ზე'],
    ['file' => 'banktransfer.svg','alt' => 'საბანკო გადარიცხვა და SEPA — მიღებულია ' . SITE_NAME . '-ზე'],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="მიღებული გადახდის მეთოდები: <?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">მიღებულია უსაფრთხო გადახდები</p>
  <?php endif; ?>
  <ul class="payment-icons-list">
    <?php foreach ($methods as $method): ?>
      <li>
        <img
          src="<?= asset('assets/img/payments/' . $method['file']) ?>"
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
        src="<?= asset('assets/img/payments/ssl-secured.svg') ?>"
        alt="256-ბიტიანი SSL დაშიფვრა — უსაფრთხო მონაცემთა გადაცემა <?= e(SITE_NAME) ?>-ზე"
        title="SSL დაცული"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
