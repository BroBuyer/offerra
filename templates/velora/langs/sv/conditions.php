<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Användarvillkor');
$page_description = 'Läs villkoren för användning av ' . SITE_NAME . ' handelsplattform och webbplats.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Användarvillkor</h1>
      <p class="lead">Senast uppdaterad: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Genom att använda <?= e(SITE_NAME) ?> godkänner du dessa användarvillkor. Om du inte godkänner, använd inte våra tjänster.</p>

      <h2>Behörighet</h2>
      <p>Du måste vara minst 18 år och lagligt tillåten att handla finansiella instrument i din jurisdiktion.</p>

      <h2>Riskupplysning</h2>
      <p>Handel med kryptovalutor, forex, CFD:er och andra finansiella instrument innebär betydande risk för förlust. Tidigare resultat garanterar inte framtida resultat. Handla endast med kapital du har råd att förlora.</p>

      <h2>Kontoansvar</h2>
      <p>Du ansvarar för att hålla dina inloggningsuppgifter konfidentiella och för all aktivitet under ditt konto.</p>

      <h2>Tjänstens tillgänglighet</h2>
      <p>Vi strävar efter kontinuerlig tillgänglighet men garanterar inte oavbruten åtkomst. Underhåll, marknadsförhållanden eller tekniska problem kan påverka tjänsten.</p>

      <h2>Ansvarsbegränsning</h2>
      <p><?= e(SITE_NAME) ?> ansvarar inte för handelsförluster eller skador som uppstår från användning av information på denna webbplats. Sök oberoende finansiell rådgivning vid behov.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
