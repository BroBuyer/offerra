<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gebruiksvoorwaarden');
$page_description = 'Lees de voorwaarden voor het gebruik van het ' . SITE_NAME . ' handelsplatform en de website.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Gebruiksvoorwaarden</h1>
      <p class="lead">Laatst bijgewerkt: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Door toegang te krijgen tot <?= e(SITE_NAME) ?> gaat u akkoord met deze gebruiksvoorwaarden. Als u niet akkoord gaat, gebruik dan onze diensten niet.</p>

      <h2>Geschiktheid</h2>
      <p>U moet minstens 18 jaar oud zijn en wettelijk mogen handelen in financiële instrumenten in uw jurisdictie.</p>

      <h2>Risicodisclosure</h2>
      <p>Handelen in cryptocurrencies, forex, CFD’s en andere financiële instrumenten brengt een aanzienlijk risico op verlies met zich mee. Resultaten uit het verleden bieden geen garantie voor de toekomst. Handel alleen met kapitaal dat u kunt veroorloven te verliezen.</p>

      <h2>Accountverantwoordelijkheden</h2>
      <p>U bent verantwoordelijk voor het vertrouwelijk houden van uw accountgegevens en voor alle activiteit onder uw account.</p>

      <h2>Beschikbaarheid van de dienst</h2>
      <p>We streven naar continue beschikbaarheid, maar garanderen geen ononderbroken toegang. Onderhoud, marktomstandigheden of technische problemen kunnen de dienst beïnvloeden.</p>

      <h2>Beperking van aansprakelijkheid</h2>
      <p><?= e(SITE_NAME) ?> is niet aansprakelijk voor handelsverliezen of schade die voortvloeit uit het gebruik van informatie op deze site. Zoek waar gepast onafhankelijk financieel advies.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
