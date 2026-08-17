<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Algemene voorwaarden | Gebruikersovereenkomst met ' . SITE_NAME;
$page_description = 'Bekijk de platformvoorwaarden, handelsregels en supportbeleid van ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Algemene voorwaarden', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="navigatiepad" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
            <span class="breadcrumb-item">Algemene voorwaarden</span>
        </nav>
        <h1>Algemene voorwaarden</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Inleiding</h2>
    <p>Deze site presenteert handelsdiensten van derden. Door verder te gaan, ga je akkoord met deze voorwaarden en ons privacybeleid. Voorwaarden kunnen worden bijgewerkt.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Geschiktheid</h2>
    <p>Je moet minstens 18 jaar zijn en wettelijk bevoegd om deze voorwaarden te aanvaarden, volgens lokaal recht. We wijzen aansprakelijkheid af bij oneigenlijk platformgebruik.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Toegangsbeperkingen</h2>
    <p>Toegang kan beperkt zijn in bepaalde regio’s of bij regelgevende beperkingen. Sommige diensten kunnen op bepaalde locaties niet beschikbaar zijn.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Passend gebruik</h2>
    <p>Ongeautoriseerd gebruik is verboden, inclusief illegale activiteiten, inbreuk op rechten, verspreiding van schadelijke content of bots. Overtredingen kunnen tot accountopschorting leiden.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Intellectueel eigendom</h2>
    <p>Alle content, merken en intellectuele eigendomsrechten zijn van ons of onze affiliates. Gebruik van de site is persoonlijk; kopiëren of wijzigen van content is niet toegestaan.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Aansprakelijkheidsbeperking</h2>
    <p>Diensten en de site worden «as is» aangeboden. We aanvaarden geen verantwoordelijkheid voor fouten, verlies of schade door gebruik.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Content van derden</h2>
    <p>Content of links van derden kunnen verschijnen zonder garantie op juistheid of beschikbaarheid; controleer zelf.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Externe links</h2>
    <p>Externe links zijn ter gemak. We onderschrijven of beheren deze sites niet en wijzen aansprakelijkheid voor hun content af.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Aanvullende voorwaarden</h2>
    <p>We kunnen diensten en voorwaarden bijwerken. Deze voorwaarden vormen de volledige overeenkomst. Het niet uitoefenen van een recht impliceert geen afstand.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
