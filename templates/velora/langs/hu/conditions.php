<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Felhasználási feltételek');
$page_description = 'Olvassa el a ' . SITE_NAME . ' kereskedési platform és weboldal használatának feltételeit.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Felhasználási feltételek</h1>
      <p class="lead">Utolsó frissítés: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>A <?= e(SITE_NAME) ?> elérésével elfogadja ezeket a Felhasználási feltételeket. Ha nem ért egyet, kérjük, ne használja szolgáltatásainkat.</p>

      <h2>Jogosultság</h2>
      <p>Legalább 18 évesnek kell lennie, és jogosultnak kell lennie pénzügyi instrumentumok kereskedésére az Ön joghatóságában.</p>

      <h2>Kockázati közzététel</h2>
      <p>A kriptovaluták, forex, CFD-k és más pénzügyi instrumentumok kereskedése jelentős veszteségkockázattal jár. A múltbeli teljesítmény nem garantálja a jövőbeli eredményeket. Csak olyan tőkével kereskedjen, amelynek elvesztését megengedheti magának.</p>

      <h2>Fiókfelelősség</h2>
      <p>Ön felelős fiókja hitelesítő adatainak bizalmas kezeléséért és a fiókja alatt végzett minden tevékenységért.</p>

      <h2>Szolgáltatás elérhetősége</h2>
      <p>Törekszünk a folyamatos elérhetőségre, de nem garantáljuk a megszakítás nélküli hozzáférést. A karbantartás, piaci feltételek vagy technikai problémák befolyásolhatják a szolgáltatást.</p>

      <h2>Felelősség korlátozása</h2>
      <p><?= e(SITE_NAME) ?> nem felelős kereskedési veszteségekért vagy az oldalon található információk használatából eredő károkért. Szükség esetén kérjen független pénzügyi tanácsot.</p>

      <h2>Kapcsolat</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
