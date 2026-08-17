<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Navigasi footer">
        <a href="<?= page_url() ?>">Laman utama</a>
        <a href="product.php">Platform</a>
        <a href="offer.php">Harga</a>
        <a href="contacts.php">Hubungi</a>
        <a href="faq.php">Soalan lazim</a>
        <a href="privacy.php">Privasi</a>
        <a href="conditions.php">Terma</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> tidak bertanggungjawab atas sebarang kerugian atau kerosakan yang timbul daripada penggunaan maklumat di laman ini. Dagangan pasaran kewangan melibatkan risiko. Laburkan hanya dana yang anda mampu rugi. FX, CFD dan mata wang kripto mungkin tidak sesuai untuk semua pelabur. Pertimbangkan nasihat profesional yang berkelayakan sebelum berdagang.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Hak cipta terpelihara.</p>
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
