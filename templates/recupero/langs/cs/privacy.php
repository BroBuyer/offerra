<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title(t('privacy_title'));
$page_description = t('privacy_desc');
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="ra-header">
  <div class="ra-shell ra-header__inner">
    <a class="ra-brand" href="<?= page_url() ?>"><?= e(SITE_NAME) ?></a>
  </div>
</header>
<main class="ra-legal">
  <div class="ra-shell">
    <div class="ra-card">
      <h1><?= te('privacy_title') ?></h1>
      <p class="meta"><?= te('legal_updated') ?></p>

      <h2><?= te('privacy_h1') ?></h2>
      <p><?= te('privacy_p1') ?></p>

      <h2><?= te('privacy_h2') ?></h2>
      <ul>
        <li><?= te('privacy_li1') ?></li>
        <li><?= te('privacy_li2') ?></li>
        <li><?= te('privacy_li3') ?></li>
        <li><?= te('privacy_li4') ?></li>
      </ul>

      <h2><?= te('privacy_h3') ?></h2>
      <ul>
        <li><?= te('privacy_li5') ?></li>
        <li><?= te('privacy_li6') ?></li>
        <li><?= te('privacy_li7') ?></li>
        <li><?= te('privacy_li8') ?></li>
        <li><?= te('privacy_li9') ?></li>
      </ul>

      <h2><?= te('privacy_h4') ?></h2>
      <p><?= te('privacy_p4') ?></p>

      <h2><?= te('privacy_h5') ?></h2>
      <p><?= te('privacy_p5') ?></p>

      <h2><?= te('privacy_h6') ?></h2>
      <p><?= te('privacy_p6') ?></p>

      <h2><?= te('privacy_h7') ?></h2>
      <p><?= te('privacy_p7') ?></p>

      <h2><?= te('privacy_h8') ?></h2>
      <p><?= te('privacy_p8') ?></p>

      <h2><?= te('privacy_h9') ?></h2>
      <p><?= te('privacy_p9') ?></p>

      <h2><?= te('privacy_h10') ?></h2>
      <p><?= te('privacy_p10') ?></p>

      <h2><?= te('privacy_h11') ?></h2>
      <p><?= te('privacy_p11') ?></p>

      <h2><?= te('privacy_h12') ?></h2>
      <p><?= te('privacy_p12') ?></p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>"><?= te('back_home_arrow') ?></a></p>
    </div>
  </div>
</main>
<footer class="ra-footer">
  <div class="ra-shell ra-footer__inner">
    <p><?= e(SITE_NAME) ?> ©<?= date('Y') ?>. <?= te('footer_rights') ?></p>
    <p>
      <a href="<?= page_url('conditions.php') ?>"><?= te('link_terms') ?></a>
      <a href="<?= page_url('privacy.php') ?>"><?= te('link_privacy') ?></a>
    </p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
