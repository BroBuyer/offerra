<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> home">
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
          <p>Un environnement d’analytique moderne avec un suivi clair des données sur les actifs mondiaux.</p>
        </div>

        <div class="footer-links-col">
          <h4>Plateforme</h4>
          <ul>
            <li><a href="<?= e(page_url()) ?>#platform">Interface</a></li>
            <li><a href="<?= e(page_url()) ?>#features">Fonctionnalités</a></li>
            <li><a href="<?= e(page_url()) ?>#markets">Aperçu des marchés</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Pages</h4>
          <ul>
            <li><a href="product.php">À propos</a></li>
            <li><a href="contacts.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="sign.php">S’inscrire</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4>Juridique</h4>
          <ul>
            <li><a href="conditions.php">Conditions d’utilisation</a></li>
            <li><a href="privacy.php">Politique de confidentialité</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p class="disclaimer">
        <strong>⚠️ Avertissement sur le risque :</strong>
        Le trading d’actifs numériques et d’instruments mondiaux implique une forte volatilité des marchés.
        Gardez le contrôle total de vos paramètres de stratégie. Les métriques automatisées sur <?= e(SITE_NAME) ?>
        servent strictement d’outils d’analyse.
      </p>
      <div class="footer-meta-links">
        <span>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</span>
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
