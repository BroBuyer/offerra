<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Adatvédelmi irányelvek');
$page_description = 'Tudja meg, hogyan ' . SITE_NAME . ' gyűjti, használja és védi személyes adatait.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Adatvédelmi irányelvek</h1>
      <p class="lead">Utolsó frissítés: <?= date('Y. m. d.') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ez az Adatvédelmi irányelv leírja, hogyan <?= e(SITE_NAME) ?> („mi”) gyűjt és kezel személyes adatokat a weboldalunk és szolgáltatásaink használatakor.</p>

      <h2>Milyen adatokat gyűjtünk</h2>
      <p>Gyűjthetünk: nevet, e-mail-címet, telefonszámot, lakóhely szerinti országot, IP-címet, valamint az űrlapokon vagy támogatási kérésekben megadott adatokat.</p>

      <h2>Hogyan használjuk az adatokat</h2>
      <ul>
        <li>Fiók létrehozásához és kezeléséhez</li>
        <li>Kereskedési platform-hozzáférés és ügyfélszolgálat biztosításához</li>
        <li>Jogi és szabályozási kötelezettségek teljesítéséhez</li>
        <li>Szolgáltatásaink fejlesztéséhez és a csalások megelőzéséhez</li>
      </ul>

      <h2>Adatbiztonság</h2>
      <p>Technikai és szervezési intézkedéseket alkalmazunk, beleértve az SSL titkosítást és a hozzáférés-szabályozást az adatai védelmére.</p>

      <h2>Az Ön jogai</h2>
      <p>Joghatóságától függően joga lehet személyes adataihoz való hozzáféréshez, javításhoz vagy törléshez. Kapcsolat: <?= e(SUPPORT_EMAIL) ?> e jogok gyakorlásához.</p>

      <h2>Kapcsolat</h2>
      <p>Kérdése van ezzel az irányelvvel kapcsolatban? Írjon ide: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
