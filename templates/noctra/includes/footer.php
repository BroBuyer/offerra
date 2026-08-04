<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <svg class="logo-mark" width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
          <rect width="28" height="28" rx="8" fill="currentColor"/>
          <path d="M8 18L14 8L20 18" stroke="#111827" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M10 16H18" stroke="#111827" stroke-width="2.2" stroke-linecap="round"/>
        </svg>
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Footer navigation">
        <a href="<?= page_url() ?>">Home</a>
        <a href="product.php">Product</a>
        <a href="offer.php">Offer</a>
        <a href="contacts.php">Contact</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Privacy</a>
        <a href="conditions.php">Terms</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> is not responsible for any loss or damage arising from the use of information on this site.
        Trading financial markets involves risk. Only invest funds you can afford to lose. FX, CFDs, and cryptocurrencies
        may not be suitable for all investors. Consider seeking advice from a qualified professional before trading.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>


<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>
