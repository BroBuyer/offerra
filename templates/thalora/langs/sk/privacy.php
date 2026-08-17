<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Súkromie | Ochrana údajov v ' . SITE_NAME;
$page_description = 'Zistite, ako ' . SITE_NAME . ' chráni vaše údaje v zásadách ochrany súkromia.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Zásady ochrany súkromia', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigačná cesta"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Domov</a>
  <span class="breadcrumb-item">Zásady ochrany súkromia</span>
</nav>
<h1>Náš záväzok chrániť vaše súkromie</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Naposledy aktualizované: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («my»), ochrana vašich osobných údajov je priorita. Toto vyhlásenie vysvetľuje, ako zbierame, používame a chránime vaše informácie.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparentnosť spracovania údajov</p>
    <p>
      Usilujeme o jasnosť spracovania údajov. Kontaktujte nás na      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Účel použitia údajov</p>
    <p>Vaše informácie používame na poskytovanie služieb, zlepšovanie platformy a plnenie zákonných povinností.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Prístup k vašim údajom</p>
    <p>Kedykoľvek môžete požiadať o prístup, opravu alebo vymazanie osobných údajov.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Bezpečnostné praktiky</p>
    <p>Uplatňujeme solídne bezpečnostné opatrenia, bez možnosti záruky absolútnej ochrany.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informácie, ktoré zbierame</h2>
    <p>Zbierame napr. IP adresy, údaje o zariadení, typy prehliadačov a informácie, ktoré nám priamo poskytnete.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Základy spracovania</h2>
    <p>Spracovanie sa opiera o súhlas, oprávnené záujmy a dodržiavanie platného práva.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Zdieľanie údajov</h2>
    <p>Vaše údaje môžu byť zdieľané s dôveryhodnými partnermi, poskytovateľmi a orgánmi, keď to vyžaduje zákon.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Súbory cookie</h2>
    <p>Cookie podporujú fungovanie stránky a analýzu použitia; môžete ich vypnúť, ak chcete.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Doba uchovávania</h2>
    <p>Informácie uchovávame len tak dlho, ako je potrebné na uvedené účely.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Medzinárodné prenosy</h2>
    <p>Údaje môžu byť prenášané cez hranice, s primeranými zárukami.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Odkazy na iné stránky</h2>
    <p>Neneseme zodpovednosť za externé stránky prepojené z platformy ani za ich praktiky.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Aktualizácie týchto zásad</h2>
    <p>Tieto zásady ochrany súkromia sa môžu aktualizovať.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Vaše práva</h2>
    <p>Máte právo na prístup, opravu, vymazanie, obmedzenie spracovania, prenosnosť údajov, odvolanie súhlasu a podanie sťažnosti.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
