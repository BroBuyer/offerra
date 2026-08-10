<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Plattform');
$page_description = 'Se hvordan ' . SITE_NAME . ' holder investering enkelt med AI-innsikter, tydelige priser og et rolig handelsmiljø.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Plattform</p>
      <h1>Alt du trenger. Ingenting du ikke trenger.</h1>
      <p class="lead">Et fokusert arbeidsområde for krypto- og multi-asset-investering — veiledet av AI, designet for klarhet.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI som blir i bakgrunnen</h2>
        <p class="lead">
          Innsikter vises når de hjelper — korte, lesbare og enkle å handle på. Du bekrefter alltid hver handel selv.
        </p>
        <ul class="feature-list">
          <li>Markedssammendrag på klart språk</li>
          <li>Foreslåtte overvåkningslister for nybegynnere</li>
          <li>Påminnelser før du dimensjonerer en posisjon</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Åpne konto</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
