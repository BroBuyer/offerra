<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Villkor | Användaravtal hos ' . SITE_NAME;
$page_description = 'Läs plattformsvillkor, handelsregler och supportpolicy hos ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Villkor', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="sökväg" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Hem</a>
            <span class="breadcrumb-item">Villkor</span>
        </nav>
        <h1>Användarvillkor</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Inledning</h2>
    <p>Den här webbplatsen informerar om tredjeparts handelstjänster. Genom att fortsätta godkänner du dessa villkor och vår integritetspolicy. Villkoren kan uppdateras.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Behörighet</h2>
    <p>Du måste vara minst 18 år och lagligt berättigad att godkänna dessa villkor enligt lokal lag. Vi ansvarar inte för felaktig användning av plattformen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Begränsningar av åtkomst</h2>
    <p>Åtkomst kan begränsas i vissa regioner eller vid regulatoriska restriktioner. Vissa tjänster kan vara otillgängliga på särskilda platser.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Korrekt användning</h2>
    <p>Obehörig användning är förbjuden, inklusive olaglig verksamhet, rättighetsintrång, skadligt innehåll eller bottar. Överträdelser kan leda till att kontot stängs av.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Immateriella rättigheter</h2>
    <p>Allt innehåll, varumärken och immateriella rättigheter tillhör oss eller våra koncernbolag. Användningen är personlig; kopiering eller ändring av innehåll är inte tillåten.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Ansvarsfriskrivning</h2>
    <p>Tjänsterna och webbplatsen tillhandahålls «i befintligt skick». Vi tar inget ansvar för fel, förluster eller skador som uppstår vid användning.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Tredjepartsinnehåll</h2>
    <p>Tredjepartsinnehåll eller länkar kan förekomma utan garanti för riktighet eller tillgänglighet; kontrollera själv.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Externa länkar</h2>
    <p>Externa länkar erbjuds för bekvämlighet. Vi stöder eller styr inte dessa webbplatser och ansvarar inte för deras innehåll.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Ytterligare villkor</h2>
    <p>Vi kan uppdatera tjänster och villkor. Dessa villkor utgör hela avtalet. Att inte hävda en rättighet innebär inte avstående.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
