<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>
      <p>A modern analytics environment with clear data-tracking across global assets.</p>
    </div>

    <div>
      <h4>Platform</h4>
      <nav class="footer-nav" aria-label="Platform links">
        <a href="<?= e(page_url()) ?>#platform">Interface</a>
        <a href="<?= e(page_url()) ?>#features">Features</a>
        <a href="<?= e(page_url()) ?>#markets">Markets overview</a>
      </nav>
    </div>

    <div>
      <h4>Pages</h4>
      <nav class="footer-nav" aria-label="Pages">
        <a href="product.php">About</a>
        <a href="contacts.php">Contact</a>
        <a href="faq.php">FAQ</a>
        <a href="sign.php">Sign up</a>
      </nav>
    </div>

    <div>
      <h4>Legal</h4>
      <nav class="footer-nav" aria-label="Legal">
        <a href="conditions.php">Terms of Use</a>
        <a href="privacy.php">Privacy Policy</a>
      </nav>
    </div>
  </div>

  <div class="container">
    <div class="footer-risk">
      <p>
        <strong>Risk warning:</strong>
        Trading digital assets and global instruments involves high market volatility.
        Keep full control of your strategy settings. Automated metrics on <?= e(SITE_NAME) ?>
        are analytical aids only — not financial advice.
      </p>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<?php require __DIR__ . '/chat-widget.php'; ?>

<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
<script src="<?= asset('static/js/chat.js') ?>"></script>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>
