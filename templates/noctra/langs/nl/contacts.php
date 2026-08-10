<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Neem contact op met ' . SITE_NAME . '-support — hulp bij account, trading en techniek 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Praat met support</h1>
      <p class="lead">Vragen over account, trading en techniek — de klok rond.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mailsupport</h3>
          <p style="margin-bottom: 1rem;">Voor account- en algemene vragen:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Reactietijd</h3>
          <p>De meeste tickets worden binnen enkele uren afgehandeld. Live trading-problemen krijgen voorrang.</p>
        </article>
        <article class="feature-card">
          <h3>Liever zelf doen?</h3>
          <p style="margin-bottom: 1rem;">Open in minuten een account — geen belletje nodig.</p>
          <a href="sign.php" class="btn btn-primary">Account aanmaken</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
