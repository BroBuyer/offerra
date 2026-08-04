<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contact the ' . SITE_NAME . ' desk — account, trading, and technical support available 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Talk to the desk</h1>
      <p class="lead">Account, execution, and technical questions — covered around the clock.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Email desk</h3>
          <p style="margin-bottom: 1rem;">For account and general requests:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Response window</h3>
          <p>Most tickets clear within a few hours. Live trading issues are prioritised.</p>
        </article>
        <article class="feature-card">
          <h3>Prefer self-serve?</h3>
          <p style="margin-bottom: 1rem;">Open access in minutes — no call required.</p>
          <a href="sign.php" class="btn btn-primary">Create account</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
