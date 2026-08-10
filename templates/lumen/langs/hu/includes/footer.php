<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <a href="<?= page_url() ?>" class="logo logo-footer">
        <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
        <span class="logo-text"><?= e(SITE_NAME) ?></span>
      </a>

      <nav class="footer-nav" aria-label="Lábléc navigáció">
        <a href="<?= page_url() ?>">Kezdőlap</a>
        <a href="product.php">Platform</a>
        <a href="offer.php">Árak</a>
        <a href="contacts.php">Kapcsolat</a>
        <a href="faq.php">GYIK</a>
        <a href="privacy.php">Adatvédelem</a>
        <a href="conditions.php">Feltételek</a>
      </nav>
    </div>

    <div class="footer-risk">
      <p>
        <?= e(SITE_NAME) ?> nem vállal felelősséget az oldalon található információk használatából eredő veszteségekért vagy károkért. A pénzügyi piacokon való kereskedés kockázattal jár. Csak olyan összeget fektessen be, amelynek elvesztését megengedheti magának. Az FX, a CFD-k és a kriptovaluták nem feltétlenül alkalmasak minden befektetőnek. Kereskedés előtt fontolja meg szakképzett tanácsadó megkeresését.
      </p>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Minden jog fenntartva.</p>
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
