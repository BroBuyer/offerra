<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Kontakt ' . SITE_NAME . '-support — hjälp med konto, handel och teknik dygnet runt.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Prata med support</h1>
      <p class="lead">Frågor om konto, handel och teknik — täckt dygnet runt.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-postsupport</h3>
          <p style="margin-bottom: 1rem;">För konto- och allmänna förfrågningar:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Svarstid</h3>
          <p>De flesta ärenden besvaras inom några timmar. Problem med livehandel prioriteras.</p>
        </article>
        <article class="feature-card">
          <h3>Föredrar du att göra det själv?</h3>
          <p style="margin-bottom: 1rem;">Öppna ett konto på några minuter — inget samtal krävs.</p>
          <a href="sign.php" class="btn btn-primary">Skapa konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
