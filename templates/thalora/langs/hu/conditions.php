<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Feltételek | Felhasználói megállapodás a(z) ' . SITE_NAME;
$page_description = 'Olvassa el a(z) ' . SITE_NAME . ' platformfeltételeit, kereskedési szabályait és támogatási irányelveit.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Feltételek', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="navigációs útvonal" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Kezdőlap</a>
            <span class="breadcrumb-item">Feltételek</span>
        </nav>
        <h1>Felhasználási feltételek</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Bevezetés</h2>
    <p>Ez az oldal harmadik felek kereskedési szolgáltatásairól tájékoztat. A folytatással elfogadja ezeket a feltételeket és az adatvédelmi irányelveket. A feltételek frissülhetnek.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Felhasználói jogosultság</h2>
    <p>Legalább 18 évesnek kell lennie, és a helyi jog szerint jogosultnak ezeknek a feltételeknek az elfogadására. Kizárjuk a felelősséget a platform nem megfelelő használatáért.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Hozzáférési korlátozások</h2>
    <p>A hozzáférés bizonyos régiókban vagy szabályozási korlátozásoknál korlátozott lehet. Egyes szolgáltatások adott helyeken nem érhetők el.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Megfelelő használat</h2>
    <p>Az engedély nélküli használat tilos, beleértve a jogellenes tevékenységet, a jogok megsértését, a káros tartalmat vagy a botokat. A jogsértés fiókfelfüggesztést eredményezhet.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Szellemi tulajdon</h2>
    <p>Minden tartalom, védjegy és szellemi tulajdon minket vagy kapcsolt vállalkozásainkat illeti. Az oldalhasználat személyes; a tartalom másolása vagy módosítása nem megengedett.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Felelősségkizárás</h2>
    <p>A szolgáltatások és az oldal «ahogy van» alapon elérhetők. Nem vállalunk felelősséget a használatból eredő hibákért, veszteségekért vagy károkért.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Harmadik felek tartalma</h2>
    <p>Harmadik felek tartalma vagy linkjei megjelenhetnek pontosság- vagy elérhetőségi garancia nélkül; ellenőrizze maga.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Külső linkek</h2>
    <p>A külső linkek a kényelemért vannak. Nem támogatjuk és nem ellenőrizzük ezeket az oldalakat, és kizárjuk a felelősséget a tartalmukért.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. További rendelkezések</h2>
    <p>A szolgáltatásokat és a feltételeket frissíthetjük. Ezek a feltételek alkotják a teljes megállapodást. A jogok nem gyakorlása nem jelent lemondást.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
