<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontakt ' . SITE_NAME . ' support. Help for ' . market_audience() . ' on accounts, deposits, and the trading desk.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?= e(SITE_NAME) ?> contact</p>
      <h1>Talk to <?= e(SITE_NAME) ?> support</h1>
      <p class="lead">Help for <?= e(market_audience()) ?> — accounts, tickets, and the <?= e(SITE_NAME) ?> desk, around the clock.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3><?= e(SITE_NAME) ?> email</h3>
          <p style="margin-bottom: 1rem;">Account, deposit, and desk questions for <?= e(market_audience()) ?>:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3><?= e(SITE_NAME) ?> response time</h3>
          <p>Most <?= e(SITE_NAME) ?> tickets are answered within a few hours. Urgent trading issues are prioritised.</p>
        </article>
        <article class="feature-card">
          <h3>Ready to start with <?= e(SITE_NAME) ?>?</h3>
          <p style="margin-bottom: 1rem;">Open a <?= e(SITE_NAME) ?> account in minutes — no call required.</p>
          <a href="sign.php" class="btn btn-primary">Opprett <?= e(SITE_NAME) ?>-konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
