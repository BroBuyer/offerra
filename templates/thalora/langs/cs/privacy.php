<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Soukromí | Ochrana údajů v ' . SITE_NAME;
$page_description = 'Zjistěte, jak ' . SITE_NAME . ' chrání vaše údaje v zásadách ochrany soukromí.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Zásady ochrany soukromí', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigační cesta"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Domů</a>
  <span class="breadcrumb-item">Zásady ochrany soukromí</span>
</nav>
<h1>Náš závazek chránit vaše soukromí</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Naposledy aktualizováno: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («my»), ochrana vašich osobních údajů je priorita. Toto prohlášení vysvětluje, jak sbíráme, používáme a chráníme vaše informace.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparentnost zpracování údajů</p>
    <p>
      Usilujeme o jasnost zpracování údajů. Kontaktujte nás na      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Účel použití údajů</p>
    <p>Vaše informace používáme na poskytování služeb, zlepšování platformy a plnění zákonných povinností.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Přístup k vašim údajům</p>
    <p>Kdykoli můžete požádat o přístup, opravu nebo výmaz osobních údajů.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Bezpečnostní praktiky</p>
    <p>Uplatňujeme solidní bezpečnostní opatření, bez možnosti záruky absolutní ochrany.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informace, které sbíráme</h2>
    <p>Sbíráme např. IP adresy, údaje o zařízení, typy prohlížečů a informace, které nám přímo poskytnete.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Základy zpracování</h2>
    <p>Zpracování se opírá o souhlas, oprávněné zájmy a dodržování platného práva.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Sdílení údajů</h2>
    <p>Vaše údaje mohou být sdíleny s důvěryhodnými partnery, poskytovateli a orgány, když to vyžaduje zákon.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Soubory cookie</h2>
    <p>Cookie podporují fungování stránky a analýzu použití; můžete je vypnout, pokud chcete.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Doba uchovávání</h2>
    <p>Informace uchováváme jen tak dlouho, jak je potřeba na uvedené účely.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Mezinárodní přenosy</h2>
    <p>Údaje mohou být přenášeny přes hranice, s přiměřenými zárukami.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Odkazy na jiné stránky</h2>
    <p>Neneseme odpovědnost za externí stránky propojené z platformy ani za jejich praktiky.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Aktualizace těchto zásad</h2>
    <p>Tyto zásady ochrany soukromí se mohou aktualizovat.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Vaše práva</h2>
    <p>Máte právo na přístup, opravu, výmaz, omezení zpracování, přenositelnost údajů, odvolání souhlasu a podání stížnosti.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
