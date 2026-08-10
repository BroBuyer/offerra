<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Fußzeilen-Navigation">
        <a href="<?= page_url() ?>">Startseite</a>
        <a href="product.php">Plattform</a>
        <a href="offer.php">Preise</a>
        <a href="contacts.php">Kontakt</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Datenschutz</a>
        <a href="conditions.php">Bedingungen</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> haftet nicht für Verluste oder Schäden aus der Nutzung von Informationen auf dieser Website. Der Handel an den Finanzmärkten ist mit Risiken verbunden. Investieren Sie nur Geld, dessen Verlust Sie verkraften können. Devisen, CFDs und Kryptowährungen eignen sich möglicherweise nicht für alle Anleger. Ziehen Sie vor dem Handel eine Beratung durch einen qualifizierten Fachmann in Betracht.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Alle Rechte vorbehalten.</p>
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
