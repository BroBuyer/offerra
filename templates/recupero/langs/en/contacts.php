<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Contact');
$page_description = 'Contact ' . SITE_NAME . '.';
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
      <h1>Contact</h1>
      <p class="meta">We usually reply within one business day.</p>
      <p>Email: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></p>
      <p style="margin-top:28px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Back to home</a></p>
    </div>
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
