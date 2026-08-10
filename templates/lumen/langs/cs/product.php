<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platforma');
$page_description = 'Podívejte se, jak ' . SITE_NAME . ' drží investování jednoduché díky AI poznatkům, jasným cenám a klidnému obchodnímu prostředí.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platforma</p>
      <h1>Vše, co potřebujete. Nic navíc.</h1>
      <p class="lead">Zaměřený prostor pro krypto a multi-asset investování — vedený AI, navržený pro přehlednost.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI, která zůstává v pozadí</h2>
        <p class="lead">
          Poznatky se objeví, když pomáhají — krátké, čitelné a snadno použitelné. Každý obchod potvrzujete sami.
        </p>
        <ul class="feature-list">
          <li>Shrnutí trhu srozumitelným jazykem</li>
          <li>Navržené watchlisty pro začátečníky</li>
          <li>Připomínky před nastavením velikosti pozice</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otevřít účet</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
