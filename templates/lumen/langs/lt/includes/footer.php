<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Poraštės navigacija">
        <a href="<?= page_url() ?>">Pradžia</a>
        <a href="product.php">Platformaa</a>
        <a href="offer.php">Kainodara</a>
        <a href="contacts.php">Susisiekite</a>
        <a href="faq.php">DUK</a>
        <a href="privacy.php">Privatumas</a>
        <a href="conditions.php">Sąlygos</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?>nėra atsakinga už jokius nuostolius ar žalą, atsiradusią naudojant šioje svetainėje esančią informaciją. Prekyba finansų rinkose yra susijusi su rizika. Investuokite tik tas lėšas, kurias galite sau leisti prarasti. FX, CFD ir kriptovaliutos gali būti tinkamos ne visiems investuotojams. Prieš prekybą apsvarstykite galimybę pasikonsultuoti su kvalifikuotu specialistu.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Visos teisės saugomos.</p>
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
