<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Om ' . SITE_NAME . ' | Handelsplatformen i detaljer';
$page_description = 'Opdag missionen, teknologien og forpligtelsen hos ' . SITE_NAME . ' til en sikker handelsoplevelse.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Om os', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigationssti"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Hjem</a>
            <span class="breadcrumb-item">Hvem vi er</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Vores identitet</h1>
                      <p class="lead">Platform, funktioner og ansvarlig handel.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> forener markedsadgang og analyseværktøjer på én strømlinet platform.</p>
            <p>Vi fokuserer på robuste sikkerhedstiltag og åbne, letforståelige processer.</p>
            <p>Handel indebærer risiko, og afkast kan ikke garanteres.</p>
            <p>Onboardingen er enkel: opret konto, bekræft e-mail, indbetal mindst <?= e(money_min()) ?>, og gå til dashboardet. Skift mellem manuelt og assisteret tilstand, sæt grænser og styr risiko efter din profil.</p>            <p>Support hjælper med konti, betalinger, udbetalinger og platformfunktioner. Den giver ikke personlige investeringsråd. Ved hast i en aktiv handel, opgiv konto-e-mail og dashboardstatus.</p>            <p>Nykommere og erfarne tradere møder et tydeligt miljø: vejledninger på den ene side, avancerede kontroller og performance-sporing på den anden. Vi måler <?= e(SITE_NAME) ?> efter oplevelseskvalitet — ikke aggressiv markedsføring. Før du tilmelder dig, læs FAQ, vilkår og privatliv: risiko, udbetalingstider og kontokrav.</p>            <p>At <?= e(SITE_NAME) ?>, finder du guidede flows, overvågningsværktøjer og operativ støtte centreret om åbne konto- og betalingsprocesser, uden at love markedsresultater.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Tilmeld dig i dag</a>
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
            <h2>Hvordan kan vi hjælpe dig?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Opret konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
