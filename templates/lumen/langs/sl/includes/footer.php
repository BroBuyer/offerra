<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Krmarjenje po nogi">
        <a href="<?= page_url() ?>">domov</a>
        <a href="product.php">Platformaa</a>
        <a href="offer.php">Cene</a>
        <a href="contacts.php">Kontakt</a>
        <a href="faq.php">pogosta vprašanja</a>
        <a href="privacy.php">Zasebnost</a>
        <a href="conditions.php">Pogoji</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
 <?= e(SITE_NAME) ?> ni odgovoren za kakršno koli izgubo ali škodo, ki bi nastala zaradi uporabe informacij na tej strani. Trgovanje na finančnih trgih vključuje tveganje. Vlagajte le sredstva, ki si jih lahko privoščite izgubiti. FX, CFD-ji in kriptovalute morda niso primerni za vse vlagatelje. Pred trgovanjem poiščite nasvet kvalificiranega strokovnjaka.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Vse pravice pridržane.</p>
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
