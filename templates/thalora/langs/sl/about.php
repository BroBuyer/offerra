<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'O ' . SITE_NAME . ' | Celovit vpogled v trgovalno platformo';
$page_description = 'Odkrijte ' . SITE_NAME . '-jevo poslanstvo, tehnologijo in predanost varni izkušnji trgovanja.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('O nas', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="potek strani"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Domov</a>
            <span class="breadcrumb-item">Kdo smo</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Naša identiteta</h1>
                      <p class="lead">Platforma, funkcije in odgovorno trgovanje.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> združuje dostop do trga z analitičnimi orodji na eni, poenostavljeni platformi.</p>
            <p>Osredotočeni smo na robustne varnostne ukrepe in pregledne, lahko razumljive postopke.</p>
            <p>Zavedajte se, da trgovanje nosi tveganje in donosa ni mogoče zagotoviti.</p>
            <p>Naše uvajanje je preprosto: registrirajte svoj račun, potrdite svojo e-pošto, položite najmanj <?= e(money_min()) ?>, nato odprite svojo nadzorno ploščo. Preklapljajte med ročnim in podprtim načinom, nastavite omejitve in upravljajte tveganja, da ustrezajo vašemu profilu.</p>            <p>Podpora je na voljo za pomoč pri vprašanjih o računih, plačilih, dvigih in funkcijah platforme. Ne ponuja prilagojenih naložbenih nasvetov. Za nujne pomisleke med aktivnim trgovanjem navedite e-poštni naslov računa in stanje nadzorne plošče.</p>            <p>Tako novinci kot izkušeni trgovci najdejo jasno okolje: vadnice in začetna navodila na eni strani, napredne kontrole in sledenje uspešnosti na drugi strani. Merimo <?= e(SITE_NAME) ?> po kvaliteti izkušenj — ne agresivno trženje. Pred registracijo preglejte pogosta vprašanja, pogoje in pravilnike o zasebnosti, da boste razumeli tveganja, čas dviga in zahteve računa.</p>            <p>At <?= e(SITE_NAME) ?>, boste našli vodene poteke dela, orodja za spremljanje in operativno podporo, ki so osredotočeni na pregleden račun in plačilne postopke, ne da bi obljubljali posebne tržne rezultate.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Prijavite se danes</a>
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
            <h2>Kako vam lahko danes pomagamo?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Ustvari račun';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
