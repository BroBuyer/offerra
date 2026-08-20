<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privātuma pārskats | Datu aizsardzība ' . SITE_NAME;
$page_description = 'Saprotiet, kā ' . SITE_NAME . ' aizsargā jūsu datus mūsu detalizētajā privātuma politikā.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Privātuma politika', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigācijas ceļš"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Sākums</a>
  <span class="breadcrumb-item">Privātuma politika</span>
</nav>
<h1>Mūsu apņemšanās aizsargāt jūsu privātumu</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Pēdējoreiz atjaunināts: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> (“Mēs”), jūsu personas datu aizsardzība ir prioritāte. Šis paziņojums skaidro, kā mēs vācam, izmantojam un aizsargājam jūsu informāciju.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Caurspīdīgums datu apstrādē</p>
    <p>
      Mēs tiecamies uz atklātību par datu apstrādi. Sazinieties ar mums      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Datu izmantošanas mērķis</p>
    <p>Mēs izmantojam jūsu informāciju, lai sniegtu pakalpojumus, uzlabotu platformu un izpildītu juridiskās saistības.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Piekļuve jūsu datiem</p>
    <p>Jebkurā laikā varat pieprasīt piekļuvi, labošanu vai dzēšanu saviem personas datiem.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Drošības prakses</p>
    <p>Mēs piemērojam robustus drošības pasākumus, taču nevaram solīt absolūtu personas datu aizsardzību.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informācija, ko vācam</h2>
    <p>Mēs vācam informāciju, tostarp IP adreses, ierīču datus, pārlūkprogrammu tipus un jebkādus datus, ko sniedzat tieši.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Apstrādes pamatojums</h2>
    <p>Jūsu datu apstrāde balstās uz jūsu piekrišanu, leģitīmām interesēm un atbilstību piemērojamajiem tiesību aktiem.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Datu koplietošana</h2>
    <p>Jūsu dati var tikt kopīgoti ar uzticamiem partneriem, pakalpojumu sniedzējiem un tiesību aizsardzības iestādēm, ja to prasa likums.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Sīkdatņu izmantošana</h2>
    <p>Sīkdatnes atbalsta vietnes funkcionalitāti un lietotāju analīzi, taču tās varat atslēgt, ja vēlaties.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Datu glabāšanas periods</h2>
    <p>Mēs glabājam jūsu informāciju tikai tik ilgi, cik nepieciešams norādīto mērķu izpildei.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Starptautiska datu pārsūtīšana</h2>
    <p>Dati var tikt pārsūtīti pāri robežām ar atbilstošiem aizsardzības pasākumiem.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Saites uz citām vietnēm</h2>
    <p>Mēs neuzņemamies atbildību par ārējām vietnēm, kas saistītas caur mūsu platformu, vai to praksēm.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Šīs politikas atjauninājumi</h2>
    <p>Šī privātuma politika var tikt laiku pa laikam atjaunināta.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Jūsu likumīgās tiesības</h2>
    <p>Jums ir tiesības piekļūt, labot, dzēst, ierobežot datu apstrādi, pārvietot personas datus, atsaukt piekrišanu un vajadzības gadījumā iesniegt sūdzības.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
