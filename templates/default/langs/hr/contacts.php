<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontaktirajte podršku ' . SITE_NAME . ' ili naš poslovni tim. Dostupni smo 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Ovdje smo da pomognemo</h1>
      <p class="lead">Profesionalna podrška 24 sata dnevno za pitanja o računu, trgovanju i tehničkim poteškoćama.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Podrška putem e-pošte</h3>
          <p style="margin-bottom: 1rem;">Za opće upite i pomoć oko računa:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Vrijeme odgovora</h3>
          <p>Većina zahtjeva dobiva odgovor u roku od nekoliko sati. Hitna pitanja o trgovanju imaju prioritet.</p>
        </article>
        <article class="feature-card">
          <h3>Spremni za početak?</h3>
          <p style="margin-bottom: 1rem;">Otvorite račun u nekoliko minuta — bez potrebe za pozivom.</p>
          <a href="sign.php" class="btn btn-primary">Stvorite račun</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
