<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Uvjeti | Korisnički ugovor s ' . SITE_NAME;
$page_description = 'Pročitajte uvjete platforme, pravila trgovanja i politike podrške ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Uvjeti', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="putanja navigacije" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Početna</a>
            <span class="breadcrumb-item">Uvjeti</span>
        </nav>
        <h1>Uvjeti korištenja</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Uvod</h2>
    <p>Ova stranica predstavlja trgovačke usluge trećih strana. Nastavkom prihvaćate ove uvjete i politiku privatnosti. Uvjeti se mogu ažurirati.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Pravo korištenja</h2>
    <p>Morate imati najmanje 18 godina i biti zakonski ovlašteni prihvatiti ove uvjete prema lokalnom pravu. Isključujemo odgovornost za nepravilno korištenje platforme.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Ograničenja pristupa</h2>
    <p>Pristup može biti ograničen u određenim regijama ili uz regulatorna ograničenja. Neke usluge možda nisu dostupne na određenim mjestima.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Ispravno korištenje</h2>
    <p>Neovlašteno korištenje je zabranjeno, uključujući nezakonite aktivnosti, povredu prava, štetni sadržaj ili botove. Kršenja mogu dovesti do obustave računa.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Intelektualno vlasništvo</h2>
    <p>Sav sadržaj, žigovi i prava intelektualnog vlasništva pripadaju nama ili povezanim subjektima. Korištenje stranice je osobno; kopiranje ili izmjena sadržaja nije dopuštena.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Isključenje odgovornosti</h2>
    <p>Usluge i stranica pružaju se «kakve jesu». Ne prihvaćamo odgovornost za pogreške, gubitke ni štete nastale korištenjem.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Sadržaj trećih strana</h2>
    <p>Mogu se pojaviti sadržaji ili poveznice trećih strana bez jamstva točnosti ili dostupnosti; provjerite sami.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Vanjske poveznice</h2>
    <p>Vanjske poveznice dane su radi praktičnosti. Ne podržavamo niti kontroliramo te stranice i isključujemo odgovornost za njihov sadržaj.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Dodatne odredbe</h2>
    <p>Možemo ažurirati usluge i uvjete. Ovi uvjeti čine cjelokupni ugovor. Neizvršavanje prava ne znači odricanje.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
