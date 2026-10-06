<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>O teu parceiro para um trading fiável</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="Rodapé">
              <a href="<?= page_url('product.php') ?>">Produto</a>
              <a href="<?= page_url('offer.php') ?>">Oferta</a>
              <a href="<?= page_url('about.php') ?>">Equipa</a>
              <a href="<?= page_url('contacts.php') ?>">Contacto</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="Aviso legal">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">Denunciar um abuso</a>
              <a href="<?= page_url('privacy.php') ?>">Política de privacidade</a>
              <a href="<?= page_url('conditions.php') ?>">Termos de utilização</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. Todos os direitos reservados.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="Logótipo TradingView"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="Logótipo X"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="Logótipo YouTube"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('Introduz um número de telefone válido', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('Indicativo internacional inválido', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('O número de telefone é demasiado curto', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('O número de telefone é demasiado longo', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('Introduz o teu número de telefone', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('Sessão expirada. Recarrega a página e tenta novamente.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('Ocorreu um erro. Tenta novamente mais tarde.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('Erro de ligação. Verifica a tua ligação à internet e tenta novamente.', JSON_UNESCAPED_UNICODE) ?>
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
