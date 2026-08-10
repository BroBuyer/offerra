<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Nawigacja stopki">
        <a href="<?= page_url() ?>">Strona główna</a>
        <a href="product.php">Platforma</a>
        <a href="offer.php">Cennik</a>
        <a href="contacts.php">Kontakt</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Prywatność</a>
        <a href="conditions.php">Regulamin</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> nie ponosi odpowiedzialności za straty ani szkody wynikające z korzystania z informacji na tej stronie. Handel na rynkach finansowych wiąże się z ryzykiem. Inwestuj tylko środki, których utratę możesz zaakceptować. FX, CFD i kryptowaluty mogą nie być odpowiednie dla wszystkich inwestorów. Przed handlem rozważ konsultację z wykwalifikowanym doradcą.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Wszelkie prawa zastrzeżone.</p>
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
