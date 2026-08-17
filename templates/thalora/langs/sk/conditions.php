<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Podmienky | Používateľská zmluva s ' . SITE_NAME;
$page_description = 'Prečítajte si podmienky platformy, pravidlá obchodovania a politiky podpory ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Podmienky', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="navigačná cesta" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Domov</a>
            <span class="breadcrumb-item">Podmienky</span>
        </nav>
        <h1>Podmienky používania</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Úvod</h2>
    <p>Táto stránka informuje o obchodných službách tretích strán. Pokračovaním akceptujete tieto podmienky a zásady ochrany súkromia. Podmienky sa môžu aktualizovať.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Oprávnenie používateľa</h2>
    <p>Musíte mať aspoň 18 rokov a byť právne oprávnení prijať tieto podmienky podľa miestneho práva. Vylučujeme zodpovednosť za nesprávne použitie platformy.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Obmedzenia prístupu</h2>
    <p>Prístup môže byť obmedzený v určitých regiónoch alebo pri regulačných obmedzeniach. Niektoré služby môžu byť na konkrétnych miestach nedostupné.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Primerané použitie</h2>
    <p>Neoprávnené použitie je zakázané, vrátane nezákonnej činnosti, porušenia práv, škodlivého obsahu alebo botov. Porušenia môžu viesť k pozastaveniu účtu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Duševné vlastníctvo</h2>
    <p>Celý obsah, ochranné známky a práva duševného vlastníctva patria nám alebo spriazneným subjektom. Použitie stránky je osobné; kopírovanie alebo úprava obsahu nie je povolená.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Vylúčenie zodpovednosti</h2>
    <p>Služby a stránka sa poskytujú «ako sú». Neprijímame zodpovednosť za chyby, straty ani škody vyplývajúce z použitia.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Obsah tretích strán</h2>
    <p>Môžu sa objaviť obsahy alebo odkazy tretích strán bez záruky presnosti alebo dostupnosti; overte si sami.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Externé odkazy</h2>
    <p>Externé odkazy sú na pohodlie. Nepodporujeme ani nekontrolujeme tieto stránky a vylučujeme zodpovednosť za ich obsah.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Ďalšie ustanovenia</h2>
    <p>Môžeme aktualizovať služby a podmienky. Tieto podmienky tvoria celú zmluvu. Neuplatnenie práv neznamená vzdanie sa.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
