<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Adatvédelem | Adatvédelem a(z) ' . SITE_NAME;
$page_description = 'Tudja meg, hogyan védi a(z) ' . SITE_NAME . ' az adatait az adatvédelmi irányelvekben.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Adatvédelmi irányelvek', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="navigációs útvonal"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Kezdőlap</a>
  <span class="breadcrumb-item">Adatvédelmi irányelvek</span>
</nav>
<h1>Elkötelezettségünk az adatvédelem iránt</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Utolsó frissítés: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («mi») számára a személyes adatok védelme prioritás. Ez a nyilatkozat leírja, hogyan gyűjtjük, használjuk és védjük az információit.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Átláthatóság az adatkezelésben</p>
    <p>
      Az adatkezelés átláthatóságára törekszünk. Keressen minket:      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Az adatfelhasználás célja</p>
    <p>Az információit szolgáltatásnyújtásra, a platform fejlesztésére és jogi kötelezettségek teljesítésére használjuk.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Hozzáférés az adataihoz</p>
    <p>Bármikor kérheti személyes adataihoz a hozzáférést, javítást vagy törlést.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Biztonsági gyakorlatok</p>
    <p>Szilárd biztonsági intézkedéseket alkalmazunk, de abszolút védelmet nem ígérhetünk.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Információk, amelyeket gyűjtünk</h2>
    <p>Többek között IP-címeket, eszközadatokat, böngészőtípusokat és az Ön által közvetlenül megadott adatokat gyűjtünk.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. A feldolgozás jogalapja</h2>
    <p>Az adatkezelés hozzájáruláson, jogos érdeken és a hatályos jog betartásán alapul.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Adatmegosztás</h2>
    <p>Adatai megbízható partnerekkel, szolgáltatókkal és hatóságokkal oszthatók meg, ha a jog megköveteli.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Sütik</h2>
    <p>A sütik támogatják az oldal működését és a használatelemzést; kikapcsolhatja őket, ha szeretné.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Megőrzési idő</h2>
    <p>Az információkat csak a megjelölt célokhoz szükséges ideig őrizzük.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Nemzetközi adattovábbítás</h2>
    <p>Az adatok határokon át is továbbíthatók, megfelelő biztosítékokkal.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Linkek más oldalakra</h2>
    <p>Nem vállalunk felelősséget a platformról linkelt külső oldalakért vagy azok gyakorlatáért.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. A szabályzat frissítései</h2>
    <p>Ez az adatvédelmi irányelv frissülhet.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Az Ön jogai</h2>
    <p>Joga van hozzáféréshez, helyesbítéshez, törléshez, a feldolgozás korlátozásához, adathordozhatósághoz, a hozzájárulás visszavonásához és panasz benyújtásához.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
