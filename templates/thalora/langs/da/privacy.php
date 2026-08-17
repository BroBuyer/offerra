<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privatliv | Databeskyttelse hos ' . SITE_NAME;
$page_description = 'Se, hvordan ' . SITE_NAME . ' beskytter dine data med vores privatlivspolitik.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Privatlivspolitik', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigationssti"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Hjem</a>
  <span class="breadcrumb-item">Privatlivspolitik</span>
</nav>
<h1>Vores engagement for dit privatliv</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Sidst opdateret: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («vi»), er beskyttelse af personoplysninger en prioritet. Denne erklæring forklarer, hvordan vi indsamler, bruger og beskytter dine oplysninger.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Åbenhed i databehandling</p>
    <p>
      Vi sigter efter åbenhed om databehandlingen. Kontakt os på      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Formål med databrug</p>
    <p>Vi bruger dine oplysninger til at levere tjenester, forbedre platformen og opfylde lovkrav.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Adgang til dine data</p>
    <p>Du kan når som helst bede om indsigt, rettelse eller sletning af dine personoplysninger.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Sikkerhedspraksis</p>
    <p>Vi bruger robuste sikkerhedstiltag, uden at kunne garantere absolut beskyttelse.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Oplysninger vi indsamler</h2>
    <p>Vi indsamler blandt andet IP-adresser, enhedsdata, browsertyper og oplysninger, du giver os direkte.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Behandlingsgrundlag</h2>
    <p>Behandlingen bygger på samtykke, berettigede interesser og overholdelse af gældende love.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Deling af data</h2>
    <p>Dine oplysninger kan deles med pålidelige partnere, leverandører og myndigheder, når loven kræver det.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookies</h2>
    <p>Cookies understøtter sitets funktion og brugsanalyse; du kan slå dem fra, hvis du ønsker det.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Opbevaringstid</h2>
    <p>Vi gemmer oplysningerne kun så længe, det er nødvendigt til de beskrevne formål.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Internationale overførsler</h2>
    <p>Data kan overføres over landegrænser, med egnede garantier.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Links til andre websites</h2>
    <p>Vi tager ikke ansvar for eksterne websites, der linkes fra platformen, eller for deres praksis.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Opdateringer af denne erklæring</h2>
    <p>Denne privatlivspolitik kan opdateres.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Dine rettigheder</h2>
    <p>Du har ret til indsigt, rettelse, sletning, begrænsning af behandling, dataportabilitet, at trække samtykke og at klage.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
