<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Alatunnisteen navigointi">
        <a href="<?= page_url() ?>">Etusivu</a>
        <a href="product.php">Alusta</a>
        <a href="offer.php">Hinnoittelu</a>
        <a href="contacts.php">Yhteystiedot</a>
        <a href="faq.php">UKK</a>
        <a href="privacy.php">Tietosuoja</a>
        <a href="conditions.php">Ehdot</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> ei vastaa tämän sivuston tietojen käytöstä aiheutuvista tappioista tai vahingoista. Rahoitusmarkkinoilla kaupankäyntiin liittyy riski. Sijoita vain varoja, joiden menetyksen voit sietää. Valuutat, CFD:t ja kryptovaluutat eivät välttämättä sovi kaikille sijoittajille. Harkitse pätevän ammattilaisen neuvoa ennen kaupankäyntiä.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Kaikki oikeudet pidätetään.</p>
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
