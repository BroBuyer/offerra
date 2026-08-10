<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Voettekstnavigatie">
        <a href="<?= page_url() ?>">Home</a>
        <a href="product.php">Platform</a>
        <a href="offer.php">Prijzen</a>
        <a href="contacts.php">Contact</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Privacy</a>
        <a href="conditions.php">Voorwaarden</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> is niet verantwoordelijk voor verlies of schade door het gebruik van informatie op deze site. Handelen op financiële markten brengt risico’s met zich mee. Investeer alleen middelen die u kunt missen. FX, CFD’s en cryptovaluta zijn mogelijk niet geschikt voor alle beleggers. Overweeg advies van een gekwalificeerde professional vóór u handelt.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Alle rechten voorbehouden.</p>
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
