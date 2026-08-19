<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title(t('sign_title'));
$page_description = t('sign_desc');
$page_canonical = page_url('sign.php');
$active_page = 'sign';
require __DIR__ . '/includes/head.php';
?>
<header class="ra-header">
  <div class="ra-shell ra-header__inner">
    <a class="ra-brand" href="<?= page_url() ?>"><?= e(SITE_NAME) ?></a>
  </div>
</header>
<main class="ra-bottom-cta" style="padding-top:40px;padding-bottom:64px">
  <div class="ra-shell ra-bottom-cta__inner">
    <div class="ra-card ra-card--wide">
      <?php
      $form_id = 'sign-form';
      $form_heading = t('form_heading_access');
      $form_submit = t('cta_start');
      require __DIR__ . '/includes/form.php';
      ?>
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
