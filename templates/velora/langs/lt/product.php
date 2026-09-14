<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Apie platformą');
$page_description = 'Pažiūrėkite, kaip' . SITE_NAME . 'Prekybą užtikrina aiškia AI įžvalga, mažos delsos sklaidos kanalai ir rami darbo vieta.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Apie</p>
      <h1>Institucinė AI architektūra, prieinama</h1>
      <p class="lead">Tikslinga darbo sritis kriptovaliutų ir kelių turtų prekybai – vadovaujama AI, sukurta siekiant aiškumo.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI, kuris išlieka naudingas</h2>
        <p class="lead">
          Įžvalgos pasirodo tada, kai jos padeda – trumpos, įskaitomos ir lengvai įgyvendinamos.
          Jūs visada patvirtinate kiekvieną sandorį patys.
        </p>
        <ul class="feature-bullets">
          <li>Rinkos santraukos paprasta kalba</li>
          <li>Siūlomi stebėjimo sąrašai pradedantiesiems</li>
          <li>Priminimai prieš nustatydami pozicijos dydį</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Atidaryti sąskaitą</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
