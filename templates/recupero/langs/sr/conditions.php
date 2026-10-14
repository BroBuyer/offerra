<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title(t('terms_title'));
$page_description = t('terms_desc');
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <h1><?= te('terms_title') ?></h1>
      <p class="meta"><?= te('legal_updated') ?></p>

      <h2><?= te('terms_h1') ?></h2>
      <p><?= te('terms_p1') ?></p>

      <h2><?= te('terms_h2') ?></h2>
      <p><?= te('terms_p2') ?></p>

      <h2><?= te('terms_h3') ?></h2>
      <p><?= te('terms_p3') ?></p>

      <h2><?= te('terms_h4') ?></h2>
      <p><?= te('terms_p4') ?></p>

      <h2><?= te('terms_h5') ?></h2>
      <p><?= te('terms_p5') ?></p>

      <h2><?= te('terms_h6') ?></h2>
      <ul>
        <li><?= te('terms_li1') ?></li>
        <li><?= te('terms_li2') ?></li>
        <li><?= te('terms_li3') ?></li>
        <li><?= te('terms_li4') ?></li>
      </ul>

      <h2><?= te('terms_h7') ?></h2>
      <p><?= te('terms_p7') ?></p>

      <h2><?= te('terms_h8') ?></h2>
      <p><?= te('terms_p8') ?></p>

      <h2><?= te('terms_h9') ?></h2>
      <p><?= te('terms_p9') ?></p>

      <h2><?= te('terms_h10') ?></h2>
      <p><?= te('terms_p10') ?></p>

      <h2><?= te('terms_h11') ?></h2>
      <p><?= te('terms_p11') ?></p>

      <h2><?= te('terms_h12') ?></h2>
      <p><?= te('terms_p12') ?></p>

      <h2><?= te('terms_h13') ?></h2>
      <p><?= te('terms_p13') ?></p>

      <h2><?= te('terms_h14') ?></h2>
      <p><?= te('terms_p14') ?></p>

      <h2><?= te('terms_h15') ?></h2>
      <p><?= te('terms_p15') ?></p>

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
