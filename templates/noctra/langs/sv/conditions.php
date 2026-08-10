<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Användarvillkor');
$page_description = 'Läs villkoren för användning av ' . SITE_NAME . '-handelsplattformen och webbplatsen.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Användarvillkor</h1>
      <p class="lead">Senast uppdaterad: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Genom att använda <?= e(SITE_NAME) ?> godkänner du dessa användarvillkor. Om du inte godkänner dem, använd inte våra tjänster.</p>

      <h2>Behörighet</h2>
      <p>Du måste vara minst 18 år och lagligt tillåten att handla finansiella instrument i din jurisdiktion.</p>

      <h2>Riskinformation</h2>
      <p>Handel med kryptovalutor, forex, CFD:er och andra finansiella instrument innebär betydande risk för förlust. Tidigare resultat garanterar inte framtida. Handla endast med kapital du har råd att förlora.</p>

      <h2>Kontoansvar</h2>
      <p>Du ansvarar för att hålla dina inloggningsuppgifter konfidentiella och för all aktivitet på ditt konto.</p>

      <h2>Tjänstetillgänglighet</h2>
      <p>Vi strävar efter kontinuerlig tillgänglighet men garanterar inte oavbruten åtkomst. Underhåll, marknadsförhållanden eller tekniska problem kan påverka tjänsten.</p>

      <h2>Ansvarsbegränsning</h2>
      <p><?= e(SITE_NAME) ?> ansvarar inte för handelsförluster eller skador till följd av användning av information på denna webbplats. Sök oberoende finansiell rådgivning där det är lämpligt.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
