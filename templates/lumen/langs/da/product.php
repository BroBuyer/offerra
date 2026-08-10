<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platform');
$page_description = 'Se, hvordan ' . SITE_NAME . ' holder investering enkel med AI-indsigter, klare priser og et roligt handelsmiljø.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platform</p>
      <h1>Alt, hvad du har brug for. Intet overflødigt.</h1>
      <p class="lead">Et fokuseret arbejdsområde til krypto- og multi-asset-investering — vejledt af AI, designet til klarhed.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI, der bliver i baggrunden</h2>
        <p class="lead">
          Indsigter vises, når de hjælper — korte, læsbare og nemme at handle på. Du bekræfter altid hver handel selv.
        </p>
        <ul class="feature-list">
          <li>Markedsoversigter på klart sprog</li>
          <li>Foreslåede overvågningslister til begyndere</li>
          <li>Påmindelser, før du dimensionerer en position</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Åbn konto</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
