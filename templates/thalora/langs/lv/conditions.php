<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Noteikumi un nosacījumi | Lietotāja līgums ar ' . SITE_NAME;
$page_description = 'Pārskatiet ' . SITE_NAME . ' platformas noteikumus, tirdzniecības noteikumus un klientu atbalsta politikas.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Noteikumi un nosacījumi', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="navigācijas ceļš" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Sākumlapa</a>
            <span class="breadcrumb-item">Noteikumi un nosacījumi</span>
        </nav>
        <h1>Noteikumi un nosacījumi</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Ievads</h2>
    <p>Šī vietne sniedz informāciju par trešo pušu tirdzniecības pakalpojumiem. Turpinot, jūs piekrītat šiem noteikumiem un mūsu privātuma politikai. Noteikumi var tikt atjaunināti.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Lietotāja atbilstība</h2>
    <p>Jums jābūt vismaz 18 gadus vecam un juridiski tiesīgam pieņemt šos noteikumus saskaņā ar vietējiem tiesību aktiem. Mēs atsakāmies no atbildības par neatbilstošu platformas izmantošanu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Piekļuves ierobežojumi</h2>
    <p>Piekļuve var tikt ierobežota noteiktos reģionos vai tur, kur pastāv regulatīvi ierobežojumi. Daži pakalpojumi var būt nepieejami konkrētās vietās.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Atbilstoša izmantošana</h2>
    <p>Nesankcionēta šīs vietnes izmantošana ir aizliegta, tostarp nelikumīgas darbības, tiesību pārkāpumi, kaitīga satura izplatīšana vai automatizēti boti. Pārkāpumi var izraisīt konta apturēšanu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Intelektuālais īpašums</h2>
    <p>Viss saturs, preču zīmes un intelektuālais īpašums pieder mums vai mūsu saistītajiem uzņēmumiem. Vietnes izmantošana ir personiska; satura kopēšana vai modificēšana nav atļauta.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Atbildības atruna</h2>
    <p>Pakalpojumi un vietne tiek sniegti „kā ir”. Mēs neuzņemamies atbildību par kļūdām, zaudējumiem vai kaitējumu, kas radies izmantošanas rezultātā.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Trešo pušu saturs</h2>
    <p>Var tikt iekļauts trešo pušu saturs vai saites, taču to precizitāte vai pieejamība nav garantēta; lūdzu, pārbaudiet patstāvīgi.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Ārējās saites</h2>
    <p>Ārējās saites tiek piedāvātas ērtībai. Mēs neatbalstām un nekontrolējam šīs vietnes un neuzņemamies atbildību par to saturu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Papildu noteikumi</h2>
    <p>Mēs pēc saviem ieskatiem varam atjaunināt pakalpojumus un noteikumus. Šie noteikumi veido pilnīgu vienošanos. Tiesību neīstenošana nenozīmē atteikšanos no tām.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
