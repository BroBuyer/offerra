<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gebruiksvoorwaarden');
$page_description = 'Lees de voorwaarden voor het gebruik van het tradingplatform en de website van ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Gebruiksvoorwaarden</h1>
      <p class="lead">Laatst bijgewerkt: <?= date('d-m-Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Door <?= e(SITE_NAME) ?> te bezoeken gaat u akkoord met deze Gebruiksvoorwaarden. Als u het niet eens bent, gebruik onze diensten dan niet.</p>

      <h2>Geschiktheid</h2>
      <p>U moet minstens 18 jaar oud zijn en wettelijk mogen handelen in financiële instrumenten in uw rechtsgebied.</p>

      <h2>Risicodisclosure</h2>
      <p>Handelen in cryptovaluta, forex, CFD's en andere financiële instrumenten brengt een aanzienlijk risico op verlies met zich mee. Resultaten uit het verleden bieden geen garantie voor de toekomst. Handel alleen met kapitaal dat u kunt missen.</p>

      <h2>Accountverantwoordelijkheden</h2>
      <p>U bent verantwoordelijk voor de vertrouwelijkheid van uw inloggegevens en voor alle activiteit op uw account.</p>

      <h2>Beschikbaarheid van de dienst</h2>
      <p>We streven naar continue beschikbaarheid, maar garanderen geen ononderbroken toegang. Onderhoud, marktomstandigheden of technische problemen kunnen de dienst beïnvloeden.</p>

      <h2>Beperking van aansprakelijkheid</h2>
      <p><?= e(SITE_NAME) ?> is niet aansprakelijk voor handelsverliezen of schade door het gebruik van informatie op deze site. Vraag waar passend onafhankelijk financieel advies.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
