<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead(t('thanks_title'));
$page_description = t('thanks_title') . ' — ' . SITE_NAME;
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
require __DIR__ . '/includes/head.php';
?>
<header class="ra-header">
  <div class="ra-shell ra-header__inner">
    <a class="ra-brand" href="<?= page_url() ?>"><?= e(SITE_NAME) ?></a>
  </div>
</header>
<main class="ra-thanks">
  <div class="ra-shell">
    <h1><?= te('thanks_h1') ?></h1>
    <p><?= te('thanks_text') ?></p>
    <a class="btn btn-cta" href="<?= page_url() ?>"><?= te('back_home') ?></a>
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
