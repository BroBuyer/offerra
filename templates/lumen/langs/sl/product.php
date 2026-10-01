<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platformaa');
$page_description = 'Oglejte si, kako ' . SITE_NAME . ' ohranja preprosto vlaganje z vpogledi umetne inteligence, jasnimi cenami in mirnim delovnim prostorom trgovanja.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platformaa</p>
      <h1>Vse, kar potrebujete. Nič, kar ne.</h1>
      <p class="lead">Osredotočen delovni prostor za vlaganje v kriptovalute in več sredstev – voden z umetno inteligenco, zasnovan za jasnost.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI, ki ostane v ozadju</h2>
        <p class="lead">
          Vpogledi se pojavijo, ko pomagajo – kratki, berljivi in ​​na podlagi njih je enostavno ukrepati. Vsako trgovanje vedno potrdite sami.
        </p>
        <ul class="feature-list">
          <li>Tržni povzetki v preprostem jeziku</li>
          <li>Predlagani seznami za opazovanje za začetnike</li>
          <li>Opomniki, preden določite velikost pozicije</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Odpri račun</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
