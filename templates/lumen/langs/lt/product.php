<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platformaa');
$page_description = 'Sužinokite, kaip ' . SITE_NAME . ' paprastai investuoja, naudodamiesi AI įžvalgomis, aiškiomis kainomis ir ramia prekybos darbo vieta.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platformaa</p>
      <h1>Viskas ko reikia. Nieko tu nedarai.</h1>
      <p class="lead">Tikslinga darbo sritis, skirta kriptovaliutų ir kelių turtų investavimui – vadovaujama AI, sukurta siekiant aiškumo.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI, kuris lieka fone</h2>
        <p class="lead">
          Įžvalgos pasirodo tada, kai jos padeda – trumpos, įskaitomos ir lengvai įgyvendinamos. Jūs visada patvirtinate kiekvieną sandorį patys.
        </p>
        <ul class="feature-list">
          <li>Rinkos santraukos paprasta kalba</li>
          <li>Siūlomi stebėjimo sąrašai pradedantiesiems</li>
          <li>Priminimai prieš nustatydami pozicijos dydį</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Atidaryti sąskaitą</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
