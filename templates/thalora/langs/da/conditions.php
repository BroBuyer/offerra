<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Vilkår og betingelser | Brugeraftale med ' . SITE_NAME;
$page_description = 'Læs platformvilkår, handelsregler og supportpolitikker for ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Vilkår og betingelser', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="navigationssti" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Hjem</a>
            <span class="breadcrumb-item">Vilkår og betingelser</span>
        </nav>
        <h1>Vilkår og betingelser</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Indledning</h2>
    <p>Dette website præsenterer tredjeparts handelstjenester. Ved at fortsætte accepterer du disse vilkår og privatlivspolitikken. Vilkårene kan opdateres.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Vilkår for brug</h2>
    <p>Du skal være mindst 18 år og lovligt berettiget til at acceptere disse vilkår efter lokal lov. Vi fraskriver os ansvar ved forkert brug af platformen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Adgangsbegrænsninger</h2>
    <p>Adgang kan begrænses i visse regioner eller ved regulatoriske begrænsninger. Nogle tjenester kan være utilgængelige visse steder.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Korrekt brug</h2>
    <p>Uautoriseret brug er forbudt, herunder ulovlig aktivitet, krænkelse af rettigheder, spredning af skadeligt indhold eller bots. Brud kan føre til kontosuspension.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Immaterielle rettigheder</h2>
    <p>Alt indhold, varemærker og immaterielle rettigheder tilhører os eller vores tilknyttede selskaber. Brugen er personlig; kopiering eller ændring af indhold er ikke tilladt.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Ansvarsfraskrivelse</h2>
    <p>Tjenesterne og sitet tilbydes «som de er». Vi tager ikke ansvar for fejl, tab eller skade som følge af brug.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Tredjepartsindhold</h2>
    <p>Tredjepartsindhold eller links kan vises uden garanti for nøjagtighed eller tilgængelighed; tjek selv.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Eksterne links</h2>
    <p>Eksterne links gives for bekvemmelighed. Vi støtter eller styrer ikke disse sites og tager ikke ansvar for indholdet.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Tillægsvilkår</h2>
    <p>Vi kan opdatere tjenester og vilkår. Disse vilkår udgør hele aftalen. At undlade at håndhæve en ret indebærer ikke frafald.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
