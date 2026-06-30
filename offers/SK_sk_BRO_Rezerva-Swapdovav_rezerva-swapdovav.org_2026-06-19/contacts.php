<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktujte podporu ' . SITE_NAME . ' alebo náš tím. Sme k dispozícii 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Sme tu, aby sme vám pomohli</h1>
      <p class="lead">Profesionálna podpora 24/7 pre otázky o účte, obchodovaní a technických záležitostiach.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Podpora e-mailom</h3>
          <p style="margin-bottom: 1rem;">Pre všeobecné otázky a podporu účtu:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Čas odozvy</h3>
          <p>Väčšina požiadaviek dostane odpoveď do niekoľkých hodín. Urgentné obchodné záležitosti majú prioritu.</p>
        </article>
        <article class="feature-card">
          <h3>Pripravení začať?</h3>
          <p style="margin-bottom: 1rem;">Otvorte si účet za pár minút — bez nutnosti volať.</p>
          <a href="sign.php" class="btn btn-primary">Vytvoriť účet</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
