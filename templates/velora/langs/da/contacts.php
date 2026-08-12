<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Kontakt ' . SITE_NAME . '-support — hjælp til konto, handel og teknik døgnet rundt.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Tal med support</h1>
      <p class="lead">Spørgsmål om konto, handel og teknik — dækket hele døgnet.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-mailsupport</h3>
          <p style="margin-bottom: 1rem;">Til konto- og generelle henvendelser:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Svartid</h3>
          <p>De fleste sager besvares inden for få timer. Problemer med live handel prioriteres.</p>
        </article>
        <article class="feature-card">
          <h3>Vil du helst gøre det selv?</h3>
          <p style="margin-bottom: 1rem;">Åbn en konto på få minutter — uden opkald.</p>
          <a href="sign.php" class="btn btn-primary">Opret konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
