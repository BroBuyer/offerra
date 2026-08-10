<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platforma');
$page_description = 'Pozrite sa, ako ' . SITE_NAME . ' drží investovanie jednoduché vďaka AI poznatkom, jasným cenám a pokojnému obchodnému prostrediu.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platforma</p>
      <h1>Všetko, čo potrebujete. Nič navyše.</h1>
      <p class="lead">Zameraný priestor pre krypto a multi-asset investovanie — vedený AI, navrhnutý pre prehľadnosť.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI, ktorá zostáva v pozadí</h2>
        <p class="lead">
          Poznatky sa objavia, keď pomáhajú — krátke, čitateľné a ľahko použiteľné. Každý obchod potvrdzujete sami.
        </p>
        <ul class="feature-list">
          <li>Zhrnutia trhu zrozumiteľným jazykom</li>
          <li>Navrhnuté watchlisty pre začiatočníkov</li>
          <li>Pripomienky pred nastavením veľkosti pozície</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otvoriť účet</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
