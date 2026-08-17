<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Om ' . SITE_NAME . ' | Handelsplattformen i detalj';
$page_description = 'Oppdag oppdraget, teknologien og forpliktelsen til ' . SITE_NAME . ' for en sikker handelsopplevelse.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Om oss', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigasjonssti"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Hjem</a>
            <span class="breadcrumb-item">Hvem vi er</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Vår identitet</h1>
                      <p class="lead">Plattform, funksjoner og ansvarlig handel.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> forener markedstilgang og analyseverktøy på én strømlinjeformet plattform.</p>
            <p>Vi fokuserer på robuste sikkerhetstiltak og åpne, lettfattelige prosesser.</p>
            <p>Handel innebærer risiko, og avkastning kan ikke garanteres.</p>
            <p>Onboardingen er enkel: opprett konto, bekreft e-post, sett inn minst <?= e(money_min()) ?>, og gå til dashbordet. Bytt mellom manuelt og assistert modus, sett grenser og styr risiko etter profilen din.</p>            <p>Support hjelper med kontoer, betalinger, uttak og plattformfunksjoner. Den gir ikke personlige investeringsråd. Ved hast i en aktiv handel, oppgi konto-e-post og dashbordstatus.</p>            <p>Nykommere og erfarne tradere møter et tydelig miljø: veiledninger på den ene siden, avanserte kontroller og ytelsessporing på den andre. Vi måler <?= e(SITE_NAME) ?> etter opplevelseskvalitet — ikke aggressiv markedsføring. Før du registrerer deg, les FAQ, vilkår og personvern: risiko, uttakstider og kontokrav.</p>            <p>At <?= e(SITE_NAME) ?>, finner du guidede flyter, overvåkingsverktøy og operativ støtte sentrert om åpne konto- og betalingsprosesser, uten å love markedresultater.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Registrer deg i dag</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>Hvordan kan vi hjelpe deg?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Opprett konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
