<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Kontakt supporten til ' . SITE_NAME . ' eller tradingteamet vårt. Vi er tilgjengelige 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Vi er klare til å hjelpe deg</h1>
      <p class="lead">Profesjonell 24/7-støtte for kontospørsmål, handel og tekniske emner.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-poststøtte</h3>
          <p style="margin-bottom: 1rem;">For generelle spørsmål og hjelp med kontoen din:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Responstid</h3>
          <p>På de fleste forespørsler svarer vi innen noen timer. Hastesaker om handel prioriteres.</p>
        </article>
        <article class="feature-card">
          <h3>Klar til å starte?</h3>
          <p style="margin-bottom: 1rem;">Åpne og konto på få minutter – uten telefonsamtale.</p>
          <a href="sign.php" class="btn btn-primary">Opprett konto</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
