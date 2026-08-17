<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Over ' . SITE_NAME . ' | Het handelsplatform in detail';
$page_description = 'Ontdek de missie, technologie en inzet van ' . SITE_NAME . ' voor een veilige handelservaring.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Over ons', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigatiepad"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
            <span class="breadcrumb-item">Wie we zijn</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Onze identiteit</h1>
                      <p class="lead">Platform, functies en verantwoord handelen.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> combineert markttoegang en analysetools op één gestroomlijnd platform.</p>
            <p>We focussen op stevige beveiliging en transparante, begrijpelijke processen.</p>
            <p>Handelen brengt risico’s met zich mee en rendementen kunnen niet worden gegarandeerd.</p>
            <p>Onboarding is eenvoudig: maak een account, bevestig je e-mail, stort minstens <?= e(money_min()) ?>, en ga naar het dashboard. Wissel tussen handmatig en ondersteund, stel limieten in en beheer risico volgens je profiel.</p>            <p>Support helpt bij accounts, betalingen, opnames en platformfuncties. Het geeft geen persoonlijk beleggingsadvies. Bij spoed tijdens een actieve trade: vermeld het account-e-mailadres en de dashboardstatus.</p>            <p>Nieuwkomers en ervaren traders vinden een duidelijke omgeving: tutorials aan de ene kant, geavanceerde bediening en prestatie-tracking aan de andere. We meten <?= e(SITE_NAME) ?> op ervaringskwaliteit — niet op agressieve marketing. Lees vóór registratie de FAQ, voorwaarden en privacy: risico’s, opnametijden en accountvereisten.</p>            <p>At <?= e(SITE_NAME) ?>, vind je begeleide flows, monitoringtools en operationele support gericht op transparante account- en betalingsprocessen, zonder marktresultaten te beloven.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Meld je vandaag aan</a>
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
            <h2>Hoe kunnen we je helpen?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Account aanmaken';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
