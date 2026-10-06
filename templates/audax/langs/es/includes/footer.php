<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>Tu socio para un trading fiable</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Pie de página">
              <a href="<?= page_url('product.php') ?>">Producto</a>
              <a href="<?= page_url('offer.php') ?>">Oferta</a>
              <a href="<?= page_url('about.php') ?>">Equipo</a>
              <a href="<?= page_url('contacts.php') ?>">Contacto</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Aviso legal">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Denunciar un abuso</a>
              <a href="<?= page_url('privacy.php') ?>">Política de privacidad</a>
              <a href="<?= page_url('conditions.php') ?>">Condiciones de uso</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Todos los derechos reservados.</p>
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
  valPhoneInvalid: <?= json_encode('Introduce un número de teléfono válido', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Prefijo internacional no válido', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('El número de teléfono es demasiado corto', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('El número de teléfono es demasiado largo', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Introduce tu número de teléfono', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sesión caducada. Recarga la página e inténtalo de nuevo.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Se ha producido un error. Inténtalo de nuevo más tarde.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Error de conexión. Comprueba tu conexión a internet e inténtalo de nuevo.', JSON_UNESCAPED_UNICODE) ?>
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
