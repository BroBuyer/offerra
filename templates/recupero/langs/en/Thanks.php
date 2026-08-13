<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead('Thank you');
$page_description = 'Thank you — ' . SITE_NAME;
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
    <h1>You're in.</h1>
    <p>Thank you for signing up with <?= e(SITE_NAME) ?>. Our team will contact you shortly — keep your phone nearby.</p>
    <a class="btn btn-cta" href="<?= page_url() ?>">Back to home</a>
  </div>
</main>
<footer class="ra-footer">
  <div class="ra-shell ra-footer__inner">
    <p><?= e(SITE_NAME) ?> ©<?= date('Y') ?>. All rights reserved.</p>
    <p>
      <a href="<?= page_url('conditions.php') ?>">Terms of Use</a>
      <a href="<?= page_url('privacy.php') ?>">Privacy Policy</a>
    </p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
