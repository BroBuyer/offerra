<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Om ' . SITE_NAME . ' | Handelsplattformen i detalj';
$page_description = 'Upptäck uppdraget, tekniken och åtagandet för en säker handelsupplevelse hos ' . SITE_NAME . '.';
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
            aria-label="sökväg"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Hem</a>
            <span class="breadcrumb-item">Vilka vi är</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Vår identitet</h1>
                      <p class="lead">Plattform, funktioner och ansvarsfull handel.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> förenar marknadsåtkomst och analysverktyg på en enda, strömlinjeformad plattform.</p>
            <p>Vi fokuserar på robusta säkerhetsåtgärder och transparenta, lättbegripliga processer.</p>
            <p>Handel medför risk, och avkastning kan inte garanteras.</p>
            <p>Onboardingen är enkel: skapa konto, bekräfta e-post, sätt in minst <?= e(money_min()) ?>, och gå till instrumentpanelen. Växla mellan manuellt och assisterat läge, sätt gränser och hantera risk efter din profil.</p>            <p>Supporten hjälper med konton, betalningar, uttag och plattformsfunktioner. Den ger inte personlig investeringsrådgivning. Vid brådskande ärenden under en aktiv affär anger du konto-e-post och instrumentpanelens status.</p>            <p>Både nybörjare och erfarna handlare möter en tydlig miljö: guider på ena sidan, avancerade kontroller och prestandauppföljning på den andra. Vi mäter <?= e(SITE_NAME) ?> utifrån upplevelsens kvalitet — inte aggressiv marknadsföring. Innan du registrerar dig, läs FAQ, villkor och integritetspolicy: risker, uttagstider och kontokrav.</p>            <p>At <?= e(SITE_NAME) ?> hittar du guidade arbetsflöden, uppföljningsverktyg och operativt stöd som fokuserar på transparenta konto- och betalningsprocesser, utan löften om specifika marknadsresultat.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Registrera dig idag</a>
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
            <h2>Hur kan vi hjälpa dig?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Skapa konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
