<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Plattform');
$page_description = 'Se hur ' . SITE_NAME . ' håller investeringar enkla med AI-insikter, tydliga priser och en lugn handelsmiljö.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Plattform</p>
      <h1>Allt du behöver. Inget du inte behöver.</h1>
      <p class="lead">En fokuserad arbetsyta för krypto- och multi-tillgångsinvestering — vägledd av AI, utformad för tydlighet.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI som stannar i bakgrunden</h2>
        <p class="lead">
          Insikter visas när de hjälper — korta, läsbara och lätta att agera på. Du bekräftar alltid varje affär själv.
        </p>
        <ul class="feature-list">
          <li>Marknadssammanfattningar på begripligt språk</li>
          <li>Föreslagna bevakningslistor för nybörjare</li>
          <li>Påminnelser innan du dimensionerar en position</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Öppna konto</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
