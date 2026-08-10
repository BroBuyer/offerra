<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Felhasználási feltételek');
$page_description = 'Olvassa el a(z) ' . SITE_NAME . ' kereskedési platform és weboldal használati feltételeit.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Felhasználási feltételek</h1>
      <p class="lead">Utolsó frissítés: <?= date('Y. m. d.') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>A(z) <?= e(SITE_NAME) ?> elérésével elfogadja ezeket a Felhasználási feltételeket. Ha nem ért egyet, ne használja szolgáltatásainkat.</p>

      <h2>Jogosultság</h2>
      <p>Legalább 18 évesnek kell lennie, és jogilag jogosultnak pénzügyi eszközök kereskedésére a saját joghatóságában.</p>

      <h2>Kockázatfeltárás</h2>
      <p>A kriptovaluták, a forex, a CFD-k és más pénzügyi eszközök kereskedése jelentős veszteségkockázattal jár. A múltbeli teljesítmény nem garantálja a jövőbeli eredményeket. Csak olyan tőkével kereskedjen, amelyet megengedhet magának elveszíteni.</p>

      <h2>Fiókfelelősség</h2>
      <p>Ön felel a fiókadatok titkosságáért és a fiókja alatti minden tevékenységért.</p>

      <h2>Szolgáltatás elérhetősége</h2>
      <p>Folyamatos elérhetőségre törekszünk, de nem garantálunk megszakítás nélküli hozzáférést. Karbantartás, piaci körülmények vagy technikai problémák befolyásolhatják a szolgáltatást.</p>

      <h2>Felelősségkorlátozás</h2>
      <p><?= e(SITE_NAME) ?> nem felel a kereskedési veszteségekért vagy az oldalon lévő információk használatából eredő károkért. Szükség esetén kérjen független pénzügyi tanácsot.</p>

      <h2>Kapcsolat</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
