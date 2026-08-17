<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'A(z) ' . SITE_NAME . ' | A kereskedési platform részletei';
$page_description = 'Ismerje meg a(z) ' . SITE_NAME . ' küldetését, technológiáját és elkötelezettségét a biztonságos kereskedési élmény iránt.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Rólunk', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigációs útvonal"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Kezdőlap</a>
            <span class="breadcrumb-item">Kik vagyunk</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Azonosságunk</h1>
                      <p class="lead">Platform, funkciók és felelős kereskedés.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> a piaci hozzáférést és az elemzőeszközöket egyetlen, áttekinthető platformon egyesíti.</p>
            <p>Szilárd biztonsági intézkedésekre és átlátható, könnyen érthető folyamatokra összpontosítunk.</p>
            <p>A kereskedés kockázattal jár, hozamot nem lehet garantálni.</p>
            <p>Az onboarding egyszerű: hozzon létre fiókot, erősítse meg e-mailjét, töltsön fel legalább <?= e(money_min()) ?> összeget, majd lépjen az irányítópultra. Váltson kézi és támogatott mód között, állítson limiteket, és kezelje a kockázatot a profiljához igazítva.</p>            <p>A támogatás fiókok, fizetések, kifizetések és platformfunkciók ügyében segít. Személyes befektetési tanácsot nem ad. Aktív ügylet közbeni sürgős esetben adja meg a fiók e-mailjét és az irányítópult állapotát.</p>            <p>Kezdők és tapasztalt kereskedők tiszta környezetet találnak: útmutatók az egyik oldalon, haladó vezérlés és teljesítménykövetés a másikon. A(z) <?= e(SITE_NAME) ?> minőségét a tapasztalat minősége méri — nem az agresszív marketing. Regisztráció előtt olvassa el a GYIK-et, a feltételeket és az adatvédelmet: kockázatok, kifizetési idők és fiókkövetelmények.</p>            <p>At <?= e(SITE_NAME) ?> oldalon vezetett folyamatokat, figyelőeszközöket és operatív támogatást talál az átlátható fiók- és fizetési folyamatokra — konkrét piaci eredmények ígérete nélkül.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Regisztráljon ma</a>
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
            <h2>Miben segíthetünk?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Fiók létrehozása';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
