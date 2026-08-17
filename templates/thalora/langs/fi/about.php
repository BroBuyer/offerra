<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Tietoa: ' . SITE_NAME . ' | Kaupankäyntialusta yksityiskohtaisesti';
$page_description = 'Tutustu tehtävään, teknologiaan ja sitoumukseen turvalliseen kaupankäyntikokemukseen palvelussa ' . SITE_NAME . '.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Tietoa meistä', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigointipolku"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Etusivu</a>
            <span class="breadcrumb-item">Keitä olemme</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Identiteettimme</h1>
                      <p class="lead">Alusta, ominaisuudet ja vastuullinen kaupankäynti.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> yhdistää markkinapääsyn ja analytiikkatyökalut yhdelle, selkeälle alustalle.</p>
            <p>Painotamme vankkoja tietoturvatoimia ja läpinäkyviä, helposti ymmärrettäviä prosesseja.</p>
            <p>Kaupankäyntiin liittyy riski, eikä tuottoja voida taata.</p>
            <p>Käyttöönotto on yksinkertainen: luo tili, vahvista sähköposti, talleta vähintään <?= e(money_min()) ?>, ja siirry koontinäyttöön. Vaihda manuaalisen ja avustetun tilan välillä, aseta rajat ja hallitse riskiä profiilisi mukaan.</p>            <p>Tuki auttaa tileissä, maksuissa, nostoissa ja alustan toiminnoissa. Se ei anna henkilökohtaista sijoitusneuvontaa. Kiireellisessä asiassa aktiivisen kaupan aikana ilmoita tilin sähköposti ja koontinäytön tila.</p>            <p>Aloittelijat ja kokeneet kauppiaat löytävät selkeän ympäristön: oppaat yhdellä puolella, edistyneet hallintatyökalut ja suorituskyvyn seuranta toisella. Mittaamme <?= e(SITE_NAME) ?>-palvelua kokemuksen laadulla — emme aggressiivisella markkinoinnilla. Ennen rekisteröitymistä lue UKK, ehdot ja tietosuoja: riskit, nostoajat ja tilivaatimukset.</p>            <p>At <?= e(SITE_NAME) ?> löydät ohjatut työnkulut, seurantatyökalut ja operatiivisen tuen, joka keskittyy läpinäkyviin tili- ja maksuprosesseihin ilman lupauksia tietyistä markkinatuloksista.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Rekisteröidy tänään</a>
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
            <h2>Miten voimme auttaa?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Luo tili';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
