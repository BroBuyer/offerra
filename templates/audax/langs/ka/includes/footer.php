<footer>
      <div class="container">
        <div class="footer-wrap">
          <div class="logo two-col">
            <a href="<?= page_url('index.php') ?>" class="logo-text"><?= e(SITE_NAME) ?></a>
            <p>შენი სანდო პარტნიორი ტრეიდინგში</p>
          </div>
          <div class="footer-menu two-col">
            <nav class="main" aria-label="ფუტერი">
              <a href="<?= page_url('product.php') ?>">პროდუქტი</a>
              <a href="<?= page_url('offer.php') ?>">შეთავაზება</a>
              <a href="<?= page_url('about.php') ?>">გუნდი</a>
              <a href="<?= page_url('contacts.php') ?>">კონტაქტი</a>
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
            </nav>
            <nav class="legal" aria-label="იურიდიული">
              <a href="<?= page_url('faq.php') ?>">FAQ</a>
              <a href="<?= page_url('report-abuse.php') ?>">შეატყობინე ბოროტად გამოყენება</a>
              <a href="<?= page_url('privacy.php') ?>">კონფიდენციალურობის პოლიტიკა</a>
              <a href="<?= page_url('conditions.php') ?>">გამოყენების პირობები</a>
            </nav>
          </div>
          <p class="copyright">&copy; 2026 <?= e(SITE_NAME) ?>. ყველა უფლება დაცულია.</p>
          <div class="soc-links">
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/1-logo.svg') ?>" width="22" height="12" alt="TradingView-ის ლოგო"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/x-logo.svg') ?>" width="22" height="12" alt="X-ის ლოგო"
            /></a>
            <a href="<?= page_url('index.php') ?>#form" class="scroll"
              ><img src="<?= asset('static/images/yt-logo.svg') ?>" width="22" height="12" alt="YouTube-ის ლოგო"
            /></a>
          </div>
        </div>
      </div>
    </footer>
<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>
<script>
window.APP_LANG = {
  valPhoneInvalid: <?= json_encode('შეიყვანე სწორი ტელეფონის ნომერი', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneCountry: <?= json_encode('არასწორი ქვეყნის კოდი', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneShort: <?= json_encode('ტელეფონის ნომერი ძალიან მოკლეა', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneLong: <?= json_encode('ტელეფონის ნომერი ძალიან გრძელია', JSON_UNESCAPED_UNICODE) ?>,
  valPhoneRequired: <?= json_encode('შეიყვანე შენი ტელეფონის ნომერი', JSON_UNESCAPED_UNICODE) ?>,
  valSessionExpired: <?= json_encode('სესია ამოიწურა. განაახლე გვერდი და სცადე თავიდან.', JSON_UNESCAPED_UNICODE) ?>,
  valGenericError: <?= json_encode('რაღაც არასწორად წავიდა. სცადე მოგვიანებით.', JSON_UNESCAPED_UNICODE) ?>,
  valConnectionError: <?= json_encode('კავშირის შეცდომა. შეამოწმე ინტერნეტი და სცადე თავიდან.', JSON_UNESCAPED_UNICODE) ?>
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
