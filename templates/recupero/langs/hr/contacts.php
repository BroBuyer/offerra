<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title(t('contact_title'));
$page_description = t('contact_title') . ' ' . SITE_NAME . '.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';
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
      <h1><?= te('contact_title') ?></h1>
      <p class="meta"><?= te('contact_meta') ?></p>
      <p><?= te('contact_email_label') ?> <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></p>
      <p style="margin-top:28px"><a class="btn btn-ghost" href="<?= page_url() ?>"><?= te('back_home_arrow') ?></a></p>
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
