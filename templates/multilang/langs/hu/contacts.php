<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kapcsolat');
$page_description = 'Kapcsolat ' . SITE_NAME . ' support or our business team. We are available 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kapcsolat</p>
      <h1>Itt vagyunk, hogy segítsünk</h1>
      <p class="lead">Nonstop professzionális támogatás fiók-, kereskedési és technikai kérdésekhez.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mail support</h3>
          <p style="margin-bottom: 1rem;">For general inquiries és a account assistance:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Response time</h3>
          <p>Most requests are answered within a few hours. Urgent trading issues are prioritised.</p>
        </article>
        <article class="feature-card">
          <h3>Ready to start?</h3>
          <p style="margin-bottom: 1rem;">Open an account in minutes — no call required.</p>
          <a href="sign.php" class="btn btn-primary">Create account</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
