<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('O platformi');
$page_description = 'Poglejte, kako' . SITE_NAME . 'ohranja jasno trgovanje z vpogledi AI, viri z nizko zakasnitvijo in mirnim delovnim prostorom.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">O tem</p>
      <h1>Institucionalna arhitektura umetne inteligence, ki je dostopna</h1>
      <p class="lead">Osredotočen delovni prostor za trgovanje s kriptovalutami in več sredstvi – voden z umetno inteligenco, zasnovan za jasnost.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI, ki ostane uporaben</h2>
        <p class="lead">
          Vpogledi se pojavijo, ko pomagajo – kratki, berljivi in ​​na podlagi njih je enostavno ukrepati.
          Vsako trgovanje vedno potrdite sami.
        </p>
        <ul class="feature-bullets">
          <li>Tržni povzetki v preprostem jeziku</li>
          <li>Predlagani seznami za opazovanje za začetnike</li>
          <li>Opomniki, preden določite velikost pozicije</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Odpri račun</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
