<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="フッターナビゲーション">
        <a href="<?= page_url() ?>">ホーム</a>
        <a href="product.php">プラットフォーム</a>
        <a href="offer.php">料金</a>
        <a href="contacts.php">お問い合わせ</a>
        <a href="faq.php">よくある質問</a>
        <a href="privacy.php">プライバシー</a>
        <a href="conditions.php">利用規約</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> は、本サイトの情報の利用から生じるいかなる損失または損害についても責任を負いません。金融市場の取引にはリスクが伴います。失っても差し支えない資金のみを投資してください。FX、CFD、暗号資産はすべての投資家に適しているとは限りません。取引前に有資格の専門家に相談することを検討してください。
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. 無断転載を禁じます。</p>
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
