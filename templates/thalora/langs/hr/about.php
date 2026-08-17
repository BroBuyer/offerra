<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'O ' . SITE_NAME . ' | Trgovačka platforma u detaljima';
$page_description = 'Upoznajte misiju, tehnologiju i predanost ' . SITE_NAME . ' sigurnom iskustvu trgovanja.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('O nama', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="putanja navigacije"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Početna</a>
            <span class="breadcrumb-item">Tko smo</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Naš identitet</h1>
                      <p class="lead">Platforma, značajke i odgovorno trgovanje.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> spaja pristup tržištu i analitičke alate na jednoj, preglednoj platformi.</p>
            <p>Stavljamo na solidne mjere sigurnosti i transparentne, lako razumljive procese.</p>
            <p>Trgovanje nosi rizik, a povrati se ne mogu garantirati.</p>
            <p>Onboarding je jednostavan: stvorite račun, potvrdite e-poštu, uplatite najmanje <?= e(money_min()) ?>, i uđite na nadzornu ploču. Prebacujte ručni i potpomognuti način, postavljajte limite i upravljajte rizikom prema profilu.</p>            <p>Podrška pomaže kod računa, plaćanja, isplata i funkcija platforme. Ne daje osobni investicijski savjet. Kod hitnog slučaja tijekom aktivne trgovine navedite e-poštu računa i status ploče.</p>            <p>Početnici i iskusni traderi nalaze jasno okruženje: vodiče s jedne strane, napredne kontrole i praćenje rezultata s druge. Mjerimo <?= e(SITE_NAME) ?> kvalitetom iskustva — ne agresivnim marketingom. Prije registracije pročitajte FAQ, uvjete i privatnost: rizike, rokove isplata i zahtjeve računa.</p>            <p>At <?= e(SITE_NAME) ?>, pronaći ćete vođene tokove, alate praćenja i operativnu podršku usmjerenu na transparentne procese računa i plaćanja, bez obećanja konkretnih tržišnih rezultata.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Registrirajte se danas</a>
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
            <h2>Kako vam možemo pomoći?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Stvorite račun';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
