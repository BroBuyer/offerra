<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contact ' . SITE_NAME . ' support — we help with funding, verification, and getting started.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>We’re here to help</h1>
      <p class="lead">Questions about your account, deposits, or AI tools — reach out anytime.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Support</h2>
        <p class="prose">Email us at <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Typical response time is under a few hours.</p>
        <a href="sign.php" class="btn btn-primary">Open an account</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
