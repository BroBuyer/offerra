<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Podmínky | Uživatelská smlouva s ' . SITE_NAME;
$page_description = 'Přečtěte si podmínky platformy, pravidla obchodování a politiky podpory ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Podmínky', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="navigační cesta" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Domů</a>
            <span class="breadcrumb-item">Podmínky</span>
        </nav>
        <h1>Podmínky používání</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Úvod</h2>
    <p>Tato stránka informuje o obchodních službách třetích stran. Pokračováním akceptujete tyto podmínky a zásady ochrany soukromí. Podmínky se mohou aktualizovat.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Oprávnění uživatele</h2>
    <p>Musíte mít alespoň 18 let a být právně oprávněni přijmout tyto podmínky podle místního práva. Vylučujeme odpovědnost za nesprávné použití platformy.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Omezení přístupu</h2>
    <p>Přístup může být omezen v určitých regionech nebo při regulačních omezeních. Některé služby mohou být na konkrétních místech nedostupné.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Přiměřené použití</h2>
    <p>Neoprávněné použití je zakázáno, včetně nezákonné činnosti, porušení práv, škodlivého obsahu nebo botů. Porušení mohou vést k pozastavení účtu.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Duševní vlastnictví</h2>
    <p>Celý obsah, ochranné známky a práva duševního vlastnictví patří nám nebo spřízněným subjektům. Použití stránky je osobní; kopírování nebo úprava obsahu není povolena.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Vyloučení odpovědnosti</h2>
    <p>Služby a stránka se poskytují «jak jsou». Nepřijímáme odpovědnost za chyby, ztráty ani škody vyplývající z použití.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Obsah třetích stran</h2>
    <p>Mohou se objevit obsahy nebo odkazy třetích stran bez záruky přesnosti nebo dostupnosti; ověřte si sami.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Externí odkazy</h2>
    <p>Externí odkazy jsou pro pohodlí. Nepodporujeme ani nekontrolujeme tyto stránky a vylučujeme odpovědnost za jejich obsah.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Další ustanovení</h2>
    <p>Můžeme aktualizovat služby a podmínky. Tyto podmínky tvoří celou smlouvu. Neuplatnění práv neznamená vzdání se.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
