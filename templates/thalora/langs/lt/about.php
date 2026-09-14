<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Apie ' . SITE_NAME . ' | Išsamios prekybos platformos įžvalgos';
$page_description = 'Atraskite ' . SITE_NAME . ' misiją, technologiją ir įsipareigojimą siekti saugios prekybos patirties.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Apie mus', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="duonos trupinys"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Namai</a>
            <span class="breadcrumb-item">Kas Mes Esame</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Mūsų tapatybė</h1>
                      <p class="lead">Platforma, funkcijos ir atsakinga prekyba.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?>sujungia prieigą prie rinkos su analitinėmis priemonėmis vienoje supaprastintoje platformoje.</p>
            <p>Mes sutelkiame dėmesį į patikimas saugumo priemones ir skaidrius, lengvai suprantamus procesus.</p>
            <p>Atminkite, kad prekyba kelia riziką ir grąža negali būti garantuota.</p>
            <p>Mūsų priėmimas yra paprastas: užregistruokite savo paskyrą, patvirtinkite savo el. paštą, įneškite mažiausiai<?= e(money_min()) ?>, tada pasiekite savo prietaisų skydelį. Perjunkite rankinį ir pagalbinį režimus, nustatykite ribas ir valdykite riziką, kad atitiktų jūsų profilį.</p>            <p>Pagalba gali padėti iškilus klausimams apie sąskaitas, mokėjimus, išėmimus ir platformos funkcijas. Ji neteikia asmeninių patarimų dėl investavimo. Jei turite skubių klausimų aktyvių sandorių metu, pateikite savo paskyros el. pašto adresą ir prietaisų skydelio būseną.</p>            <p>Tiek naujokai, tiek patyrę prekybininkai randa aiškią aplinką: vienoje pusėje yra mokymo programos ir pradinės instrukcijos, kitoje – pažangūs valdikliai ir veiklos stebėjimas. Matuojame<?= e(SITE_NAME) ?>pagal patirties kokybę – ne agresyvi rinkodara. Prieš registruodamiesi peržiūrėkite DUK, sąlygas ir privatumo politiką, kad suprastumėte riziką, atsiėmimo laiką ir paskyros reikalavimus.</p>            <p>At <?= e(SITE_NAME) ?>, rasite vadovaujamas darbo eigas, stebėjimo įrankius ir veiklos palaikymą, orientuotą į skaidrius paskyros ir mokėjimo procesus, nežadant konkrečių rinkos rezultatų.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Prisiregistruokite šiandien</a>
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
            <h2>Kaip mes galime jums padėti šiandien?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Sukurti paskyrą';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
