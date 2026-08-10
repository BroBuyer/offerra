<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Navigare subsol">
        <a href="<?= page_url() ?>">Acasă</a>
        <a href="product.php">Platformă</a>
        <a href="offer.php">Tarife</a>
        <a href="contacts.php">Contact</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Confidențialitate</a>
        <a href="conditions.php">Termeni</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> nu răspunde pentru pierderi sau daune rezultate din utilizarea informațiilor de pe acest site. Tranzacționarea pe piețele financiare implică riscuri. Investiți doar fonduri pe care vi le puteți permite să le pierdeți. FX, CFD-urile și criptomonedele pot să nu fie potrivite pentru toți investitorii. Luați în considerare sfatul unui profesionist calificat înainte de a tranzacționa.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Toate drepturile rezervate.</p>
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
