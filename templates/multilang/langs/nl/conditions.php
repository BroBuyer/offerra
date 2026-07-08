<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gebruiksvoorwaarden');
$page_description = 'Bekijk de gebruiksvoorwaarden van het handelsplatform en de website van ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Gebruiksvoorwaarden</h1>
      <p class="lead">Laatst bijgewerkt: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Door toegang te krijgen tot <?= e(SITE_NAME) ?> gaat u akkoord met deze gebruiksvoorwaarden. Als u niet akkoord gaat, gebruik onze diensten dan niet.</p>

      <h2>Geschiktheid</h2>
      <p>U moet ouder zijn dan 18 jaar en juridisch bevoegd zijn om financiele instrumenten te verhandelen in uw jurisdictie.</p>

      <h2>Risicowaarschuwing</h2>
      <p>Handelen in cryptovaluta, forex, CFD's en andere financiele instrumenten brengt een aanzienlijk risico op verlies met zich mee. Resultaten uit het verleden bieden geen garantie voor toekomstige prestaties. Handel alleen met kapitaal dat u kunt missen.</p>

      <h2>Verantwoordelijkheid voor account</h2>
      <p>U bent verantwoordelijk voor de vertrouwelijkheid van uw inloggegevens en voor alle activiteiten die via uw account plaatsvinden.</p>

      <h2>Beschikbaarheid van de dienst</h2>
      <p>Wij streven naar continue beschikbaarheid, maar kunnen ononderbroken toegang niet garanderen. Onderhoud, marktomstandigheden of technische problemen kunnen de dienst beinvloeden.</p>

      <h2>Beperking van aansprakelijkheid</h2>
      <p><?= e(SITE_NAME) ?> is niet aansprakelijk voor handelsverliezen of schade die voortvloeit uit het gebruik van informatie op deze website. Raadpleeg indien nodig een onafhankelijke financieel adviseur.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
