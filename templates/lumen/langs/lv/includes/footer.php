<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Kājenes navigācija">
        <a href="<?= page_url() ?>">Sākums</a>
        <a href="product.php">Platformaa</a>
        <a href="offer.php">Cenas</a>
        <a href="contacts.php">Kontakti</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Privātums</a>
        <a href="conditions.php">Noteikumi</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> nav atbildīgs par zaudējumiem vai kaitējumu, kas radies, izmantojot informāciju šajā vietnē. Finanšu tirgu tirdzniecība ir saistīta ar risku. Ieguldiet tikai līdzekļus, kurus varat atļauties zaudēt. FX, CFD un kriptovalūtas var nebūt piemērotas visiem ieguldītājiem. Pirms tirdzniecības apsveriet konsultāciju ar kvalificētu speciālistu.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Visas tiesības aizsargātas.</p>
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
