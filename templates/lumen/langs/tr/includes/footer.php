<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Alt bilgi gezinmesi">
        <a href="<?= page_url() ?>">Ana sayfa</a>
        <a href="product.php">Platform</a>
        <a href="offer.php">Fiyatlandırma</a>
        <a href="contacts.php">İletişim</a>
        <a href="faq.php">SSS</a>
        <a href="privacy.php">Gizlilik</a>
        <a href="conditions.php">Şartlar</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> bu sitedeki bilgilerin kullanımından doğan kayıp veya zararlardan sorumlu değildir. Finansal piyasalarda işlem yapmak risk içerir. Yalnızca kaybetmeyi göze alabileceğiniz fonları yatırın. Döviz, CFD’ler ve kripto paralar tüm yatırımcılar için uygun olmayabilir. İşlem yapmadan önce nitelikli bir uzmana danışmayı düşünün.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tüm hakları saklıdır.</p>
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
