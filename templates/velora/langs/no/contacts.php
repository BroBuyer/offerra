<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Kontakt ' . SITE_NAME . '-support — hjelp med konto, handel og teknikk døgnåpent.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Snakk med support</h1>
      <p class="lead">Spørsmål om konto, handel og teknikk — dekket hele døgnet.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-postsupport</h3>
          <p style="margin-bottom: 1rem;">For konto- og generelle henvendelser:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Responstid</h3>
          <p>De fleste saker besvares innen noen timer. Problemer med live handel prioriteres.</p>
        </article>
        <article class="feature-card">
          <h3>Vil du helst gjøre det selv?</h3>
          <p style="margin-bottom: 1rem;">Åpne en konto på få minutter — uten telefonsamtale.</p>
          <a href="sign.php" class="btn btn-primary">Opprett konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
