<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Vilkår og betingelser | Brukeravtale med ' . SITE_NAME;
$page_description = 'Les plattformvilkår, handelsregler og supportpolicyer for ' . SITE_NAME . '.';
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
        <nav aria-label="navigasjonssti" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Hjem</a>
            <span class="breadcrumb-item">Vilkår og betingelser</span>
        </nav>
        <h1>Vilkår og betingelser</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Innledning</h2>
    <p>Dette nettstedet presenterer tredjeparts handelstjenester. Ved å fortsette godtar du disse vilkårene og personvernerklæringen. Vilkårene kan oppdateres.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Vilkår for bruk</h2>
    <p>Du må være minst 18 år og lovlig berettiget til å godta disse vilkårene etter lokal lov. Vi fraskriver oss ansvar ved feil bruk av plattformen.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Tilgangsbegrensninger</h2>
    <p>Tilgang kan begrenses i visse regioner eller ved regulatoriske begrensninger. Noen tjenester kan være utilgjengelige visse steder.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Korrekt bruk</h2>
    <p>Uautorisert bruk er forbudt, inkludert ulovlig aktivitet, krenkelse av rettigheter, spredning av skadelig innhold eller boter. Brudd kan føre til kontosuspensjon.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Immaterielle rettigheter</h2>
    <p>Alt innhold, merkevarer og immaterielle rettigheter tilhører oss eller våre tilknyttede selskaper. Bruken er personlig; kopiering eller endring av innhold er ikke tillatt.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Ansvarsfraskrivelse</h2>
    <p>Tjenestene og nettstedet tilbys «som de er». Vi tar ikke ansvar for feil, tap eller skade som følger av bruk.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Tredjepartsinnhold</h2>
    <p>Tredjepartsinnhold eller lenker kan vises uten garanti for nøyaktighet eller tilgjengelighet; sjekk selv.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Eksterne lenker</h2>
    <p>Eksterne lenker gis for bekvemmelighet. Vi støtter eller styrer ikke disse nettstedene og tar ikke ansvar for innholdet.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Tilleggsvilkår</h2>
    <p>Vi kan oppdatere tjenester og vilkår. Disse vilkårene utgjør hele avtalen. Å unnlate å håndheve en rett innebærer ikke frafall.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
