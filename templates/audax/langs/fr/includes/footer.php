<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Votre partenaire pour un trading fiable</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Pied de page">
              <a href="<?= page_url('product.php') ?>">Produit</a>
              <a href="<?= page_url('offer.php') ?>">Offre</a>
              <a href="<?= page_url('about.php') ?>">Équipe</a>
              <a href="<?= page_url('contacts.php') ?>">Contact</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Mentions légales">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Signaler un abus</a>
              <a href="<?= page_url('privacy.php') ?>">Politique de confidentialité</a>
              <a href="<?= page_url('conditions.php') ?>">Conditions d’utilisation</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Tous droits réservés.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="Logo TradingView"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="Logo X"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="Logo YouTube"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Saisissez un numéro de téléphone valide', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Indicatif pays invalide', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('Le numéro de téléphone est trop court', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('Le numéro de téléphone est trop long', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Saisissez votre numéro de téléphone', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Session expirée. Veuillez recharger la page et réessayer.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Une erreur s’est produite. Veuillez réessayer plus tard.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Erreur de connexion. Vérifiez votre connexion internet et réessayez.', JSON_UNESCAPED_UNICODE) ?>
};
</script>
<script src="<?= asset('static/js/main.min.js') ?>" defer></script>
<script src="<?= asset('static/js/ticker.js') ?>" defer></script>
<?php foreach (($page_js ?? []) as $__js): ?>
<script src="<?= asset('static/js/' . $__js) ?>" defer></script>
<?php endforeach; ?>
<?php if (!empty($page_has_form)): ?>
<script src="<?= asset('static/js/intlTelInput.min.js') ?>"></script>
<script src="<?= asset_version('integration/validation.js') ?>"></script>
<?php endif; ?>
<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>
</body>
</html>
