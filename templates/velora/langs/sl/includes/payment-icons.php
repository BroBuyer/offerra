<?php
/**
 * Payment method icons — reusable block with SEO-friendly alt text.
 * @param string $context Optional context label for aria (e.g. "registracija računa form")
 */
require_once __DIR__ . '/config.php';

$payment_context = $payment_context ?? 'varna blagajna';
$payment_compact = $payment_compact ?? false;

$methods = [
    ['file' => 'visa.svg',        'alt' => 'Visa — sprejet način plačila na' . SITE_NAME],
    ['file' => 'mastercard.svg',  'alt' => 'Mastercard — sprejet način plačila na' . SITE_NAME],
    ['file' => 'paypal.svg',      'alt' => 'PayPal — sprejet način plačila' . SITE_NAME],
    ['file' => 'applepay.svg',    'alt' => 'Apple Pay — vklopljeno sprejeto plačilno sredstvo' . SITE_NAME],
    ['file' => 'googlepay.svg',   'alt' => 'Google Pay – vklopljeno sprejeto plačilno sredstvo' . SITE_NAME],
    ['file' => 'banktransfer.svg','alt' => 'Bančno nakazilo in SEPA — sprejeto dne' . SITE_NAME],
];
?>
<div class="payment-icons<?= $payment_compact ? ' payment-icons--compact' : '' ?>" role="group" aria-label="Podprti načini plačila za<?= e($payment_context) ?>">
  <?php if (!$payment_compact): ?>
    <p class="payment-icons-label">Sprejem varnih plačil</p>
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
        alt="256-bitno šifriranje SSL — vključen varen prenos podatkov<?= e(SITE_NAME) ?>"
        title="Zaščiteno s SSL"
        width="32"
        height="32"
        loading="lazy"
        decoding="async"
      >
    </li>
  </ul>
</div>
