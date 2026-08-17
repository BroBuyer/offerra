<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Personvern | Databeskyttelse hos ' . SITE_NAME;
$page_description = 'Se hvordan ' . SITE_NAME . ' beskytter dataene dine med personvernerklæringen vår.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Personvernerklæring', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigasjonssti"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Hjem</a>
  <span class="breadcrumb-item">Personvernerklæring</span>
</nav>
<h1>Vårt engasjement for personvernet ditt</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Sist oppdatert: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («vi»), er vern av personopplysninger en prioritet. Denne erklæringen forklarer hvordan vi samler inn, bruker og beskytter informasjonen din.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Åpenhet i databehandling</p>
    <p>
      Vi sikter mot åpenhet om databehandlingen. Kontakt oss på      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Formål med databruk</p>
    <p>Vi bruker informasjonen din til å levere tjenester, forbedre plattformen og oppfylle lovkrav.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Tilgang til dataene dine</p>
    <p>Du kan når som helst be om innsyn, retting eller sletting av personopplysningene dine.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Sikkerhetspraksis</p>
    <p>Vi bruker robuste sikkerhetstiltak, uten å kunne garantere absolutt beskyttelse.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informasjon vi samler inn</h2>
    <p>Vi samler inn blant annet IP-adresser, enhetsdata, nettlesertyper og opplysninger du gir oss direkte.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Behandlingsgrunnlag</h2>
    <p>Behandlingen bygger på samtykke, berettigede interesser og etterlevelse av gjeldende lover.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Deling av data</h2>
    <p>Opplysningene dine kan deles med pålitelige partnere, leverandører og myndigheter når loven krever det.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Informasjonskapsler</h2>
    <p>Informasjonskapsler støtter nettstedets funksjon og bruksanalyse; du kan slå dem av om du ønsker.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Lagringstid</h2>
    <p>Vi lagrer informasjonen bare så lenge det er nødvendig for de beskrevne formålene.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Internasjonale overføringer</h2>
    <p>Data kan overføres over landegrenser, med egnede garantier.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Lenker til andre nettsteder</h2>
    <p>Vi tar ikke ansvar for eksterne nettsteder som lenkes fra plattformen, eller for deres praksis.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Oppdateringer av denne erklæringen</h2>
    <p>Denne personvernerklæringen kan oppdateres.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Dine rettigheter</h2>
    <p>Du har rett til innsyn, retting, sletting, begrensning av behandling, dataportabilitet, å trekke samtykke og å klage.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
