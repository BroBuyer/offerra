<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Adatvédelmi irányelvek');
$page_description = 'Tudja meg, hogyan gyűjti, használja és védi a ' . SITE_NAME . ' a személyes adatait.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Adatvédelmi irányelvek</h1>
      <p class="lead">Utolsó frissítés: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ez az Adatvédelmi irányelv leírja, hogyan gyűjti és dolgozza fel a <?= e(SITE_NAME) ?> („mi”, „minket”) a személyes adatokat, amikor weboldalunkat és szolgáltatásainkat használja.</p>

      <h2>Milyen adatokat gyűjtünk</h2>
      <p>Gyűjthetjük: nevet, e-mail címet, telefonszámot, lakóhely országát, IP-címet, valamint az űrlapokon vagy támogatási kérelmeken megadott információkat.</p>

      <h2>Hogyan használjuk az adatait</h2>
      <ul>
        <li>Fiókja létrehozásához és kezeléséhez</li>
        <li>Kereskedési platformhozzáférés és ügyféltámogatás biztosításához</li>
        <li>Jogi és szabályozási kötelezettségek teljesítéséhez</li>
        <li>Szolgáltatásaink fejlesztéséhez és csalás megelőzéséhez</li>
      </ul>

      <h2>Adatbiztonság</h2>
      <p>Technikai és szervezési intézkedéseket alkalmazunk, beleértve az SSL titkosítást és a hozzáférés-vezérlést az adatai védelme érdekében.</p>

      <h2>Az Ön jogai</h2>
      <p>Joghatóságától függően joga lehet hozzáférni, helyesbíteni vagy törölni személyes adatait. Lépjen kapcsolatba: <?= e(SUPPORT_EMAIL) ?> e jogok gyakorlásához.</p>

      <h2>Kapcsolat</h2>
      <p>Kérdése van ezzel az irányelvvel kapcsolatban? Írjon e-mailt: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
