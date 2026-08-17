<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privatnost | Zaštita podataka u ' . SITE_NAME;
$page_description = 'Saznajte kako ' . SITE_NAME . ' štiti vaše podatke u politici privatnosti.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Politika privatnosti', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="putanja navigacije"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Početna</a>
  <span class="breadcrumb-item">Politika privatnosti</span>
</nav>
<h1>Naša predanost zaštiti vaše privatnosti</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Zadnje ažuriranje: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («mi»), zaštita vaših osobnih podataka je prioritet. Ova izjava objašnjava kako prikupljamo, koristimo i štitimo vaše informacije.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparentnost obrade podataka</p>
    <p>
      Težimo jasnoći obrade podataka. Kontaktirajte nas na      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Svrha korištenja podataka</p>
    <p>Koristimo vaše informacije za pružanje usluga, unaprjeđenje platforme i ispunjavanje zakonskih obveza.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Pristup vašim podacima</p>
    <p>U svakom trenutku možete zatražiti pristup, ispravak ili brisanje osobnih podataka.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Prakse sigurnosti</p>
    <p>Primjenjujemo solidne mjere sigurnosti, bez mogućnosti jamstva apsolutne zaštite.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informacije koje prikupljamo</h2>
    <p>Prikupljamo npr. IP adrese, podatke o uređaju, vrste preglednika te informacije koje nam izravno date.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Osnove obrade</h2>
    <p>Obrada se temelji na privoli, legitimnim interesima i poštovanju važećeg prava.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Dijeljenje podataka</h2>
    <p>Vaši podaci mogu se dijeliti s pouzdanim partnerima, pružateljima usluga i tijelima kada to zahtijeva zakon.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Kolačići</h2>
    <p>Kolačići podržavaju rad stranice i analizu korištenja; možete ih onemogućiti ako želite.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Razdoblje pohrane</h2>
    <p>Informacije čuvamo samo onoliko dugo koliko je potrebno za navedene svrhe.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Međunarodni prijenosi</h2>
    <p>Podaci se mogu prenositi preko granica, uz odgovarajuće zaštite.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Poveznice na druge stranice</h2>
    <p>Ne preuzimamo odgovornost za vanjske stranice povezane s platforme niti za njihove prakse.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Ažuriranja ove politike</h2>
    <p>Ova politika privatnosti može se ažurirati.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Vaša prava</h2>
    <p>Imate pravo na pristup, ispravak, brisanje, ograničenje obrade, prenosivost podataka, povlačenje privole i podnošenje pritužbe.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
