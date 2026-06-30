<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontakt support hos ' . SITE_NAME . ' eller vores team. Vi er tilgængelige 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Vi er her for at hjælpe</h1>
      <p class="lead">Professionel support 24/7 vedrørende konto, handel og tekniske spørgsmål.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mail support</h3>
          <p style="margin-bottom: 1rem;">Til generelle forespørgsler og kontosupport:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Svartider</h3>
          <p>De fleste henvendelser besvares inden for få timer. Akutte handelsrelaterede spørgsmål prioriteres.</p>
        </article>
        <article class="feature-card">
          <h3>Klar til at komme i gang?</h3>
          <p style="margin-bottom: 1rem;">Åbn en konto på få minutter — uden behov for opkald.</p>
          <a href="sign.php" class="btn btn-primary">Opret konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
