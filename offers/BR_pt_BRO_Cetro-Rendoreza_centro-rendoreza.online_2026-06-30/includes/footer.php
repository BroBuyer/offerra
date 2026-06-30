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

      <nav class="footer-nav" aria-label="Navegação do rodapé">
        <a href="<?= page_url() ?>">Início</a>
        <a href="product.php">Produto</a>
        <a href="offer.php">Oferta</a>
        <a href="contacts.php">Contactos</a>
        <a href="faq.php">FAQ</a>
        <a href="privacy.php">Privacidade</a>
        <a href="conditions.php">Termos</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        A <?= e(SITE_NAME) ?> não se responsabiliza por perdas ou danos resultantes da utilização da informação neste site.
        Operar nos mercados financeiros envolve riscos. Invista apenas fundos que possa perder. FX, CFDs e criptomoedas
        podem não ser adequados para todos os investidores. Considere procurar aconselhamento de um profissional qualificado antes de operar.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos os direitos reservados.</p>
      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= asset('integration/validation.js') ?>"></script>
<script src="<?= asset('static/js/main.js') ?>"></script>
</body>
</html>
