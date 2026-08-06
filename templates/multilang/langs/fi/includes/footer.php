<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <svg class="logo-mark" width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
          <rect width="28" height="28" rx="8" fill="currentColor"/>
          <path d="M8 18L14 8L20 18" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M10 16H18" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round"/>
        </svg>
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Alatunnisteen navigointi">
        <a href="<?= page_url() ?>">Etusivu</a>
        <a href="product.php">Tuote</a>
        <a href="offer.php">Tarjous</a>
        <a href="contacts.php">Yhteystiedot</a>
        <a href="faq.php">UKK</a>
        <a href="privacy.php">Tietosuoja</a>
        <a href="conditions.php">Ehdot</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> ei ole vastuussa mistään menetyksestä tai vahingosta, joka aiheutuu tämän sivuston tietojen käytöstä.
        Rahoitusmarkkinoilla kaupankäyntiin liittyy riski. Sijoita vain varoja, jotka voit hävitä. Valuuttakauppa, CFD:t ja kryptovaluutat
        eivät välttämättä sovi kaikille sijoittajille. Harkitse pätevän ammattilaisen neuvonnan hankkimista ennen kaupankäyntiä.
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
