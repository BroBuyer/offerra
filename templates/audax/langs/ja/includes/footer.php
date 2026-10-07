<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>信頼できる取引のパートナー</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="フッター">
              <a href="<?= page_url('product.php') ?>">サービス</a>
              <a href="<?= page_url('offer.php') ?>">キャンペーン</a>
              <a href="<?= page_url('about.php') ?>">チーム</a>
              <a href="<?= page_url('contacts.php') ?>">お問い合わせ</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="法務">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">不正利用の報告</a>
              <a href="<?= page_url('privacy.php') ?>">プライバシーポリシー</a>
              <a href="<?= page_url('conditions.php') ?>">利用規約</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. 無断転載を禁じます。</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingViewロゴ"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="Xロゴ"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTubeロゴ"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('有効な電話番号を入力してください', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('国番号が正しくありません', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('電話番号が短すぎます', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('電話番号が長すぎます', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('電話番号を入力してください', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('セッションの有効期限が切れました。ページを再読み込みして、もう一度お試しください。', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('問題が発生しました。しばらくしてからもう一度お試しください。', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('接続エラーです。インターネット接続を確認してもう一度お試しください。', JSON_UNESCAPED_UNICODE) ?>
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
