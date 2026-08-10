<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktujte podporu ' . SITE_NAME . ' — účet, obchodování a technická pomoc 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Kontaktujte podporu</h1>
      <p class="lead">Dotazy k účtu, obchodování i technice — nonstop.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mailová podpora</h3>
          <p style="margin-bottom: 1rem;">Pro účet a obecné žádosti:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Doba odezvy</h3>
          <p>Většina ticketů se vyřeší během několika hodin. Problémy při živém obchodování mají prioritu.</p>
        </article>
        <article class="feature-card">
          <h3>Raději sami?</h3>
          <p style="margin-bottom: 1rem;">Otevřete účet během minut — bez telefonátu.</p>
          <a href="sign.php" class="btn btn-primary">Vytvořit účet</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
