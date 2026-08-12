<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('O platforme');
$page_description = 'Pozrite sa, ako ' . SITE_NAME . ' udržiava obchodovanie prehľadné vďaka AI insightom, nízkolatenčným feedom a pokojnému pracovnému prostrediu.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">O nás</p>
      <h1>Inštitucionálna AI architektúra, prístupná pre každého</h1>
      <p class="lead">Zamerané pracovné prostredie pre krypto a multi-asset obchodovanie — vedené AI, navrhnuté pre jasnosť.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI, ktorá zostáva užitočná</h2>
        <p class="lead">
          Insight sa objaví, keď pomáha — krátky, čitateľný a ľahko použiteľný.
          Každý obchod vždy potvrdzujete sami.
        </p>
        <ul class="feature-bullets">
          <li>Trhové súhrny v jednoduchom jazyku</li>
          <li>Navrhované watchlisty pre začiatočníkov</li>
          <li>Pripomienky pred dimenzovaním pozície</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otvoriť účet</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
