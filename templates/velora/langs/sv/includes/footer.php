<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> hem">
            <div class="logo-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" style="width:60%;height:60%;">
                <path d="M14 46 L26 32 L38 38 L50 16" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                <circle cx="26" cy="32" r="4.5" fill="#FFFFFF"/>
                <circle cx="38" cy="38" r="4.5" fill="#FFFFFF"/>
                <circle cx="50" cy="16" r="6.5" fill="#0B0F19"/>
                <circle cx="50" cy="16" r="3.5" fill="#FFFFFF"/>
              </svg>
            </div>
            <span><?= e(SITE_NAME) ?></span>
          </a>
          <p>En modern analysmiljö med tydlig dataspårning över globala tillgångar.</p>
        </div>

        <div class="footer-links-col">
          <h4>Plattform</h4>
          <ul>
            <li><a href="<?= e(page_url()) ?>#platform">Gränssnitt</a></li>
            <li><a href="<?= e(page_url()) ?>#features">Funktioner</a></li>
            <li><a href="<?= e(page_url()) ?>#markets">Marknadsöversikt</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Sidor</h4>
          <ul>
            <li><a href="product.php">Om oss</a></li>
            <li><a href="contacts.php">Kontakt</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="sign.php">Registrera dig</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Juridiskt</h4>
          <ul>
            <li><a href="conditions.php">Användarvillkor</a></li>
            <li><a href="privacy.php">Integritetspolicy</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p class="disclaimer">
        <strong>⚠️ Riskvarning:</strong>
        Handel med digitala tillgångar och globala instrument innebär hög marknadsvolatilitet.
        Behåll full kontroll över dina strategiinställningar. Automatiserade mått på <?= e(SITE_NAME) ?>
        fungerar strikt som analytiska hjälpmedel.
      </p>
      <div class="footer-meta-links">
        <span>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Alla rättigheter förbehållna.</span>
      </div>
    </div>
  </div>
</footer>

<?php require __DIR__ . '/chat-widget.php'; ?>

<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<script src="<?= asset_version('static/js/main.js') ?>"></script>
<script src="<?= asset_version('static/js/chat.js') ?>"></script>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>
