<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Piattaforma');
$page_description = 'Scopri come ' . SITE_NAME . ' semplifica l’investimento con insight IA, prezzi chiari e uno spazio di trading calmo.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Piattaforma</p>
      <h1>Tutto ciò che ti serve. Niente di superfluo.</h1>
      <p class="lead">Uno spazio focalizzato per investimenti crypto e multi-asset — guidato dall’IA, progettato per la chiarezza.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>IA che resta in secondo piano</h2>
        <p class="lead">
          Gli insight compaiono quando servono — brevi, leggibili e facili da usare. Confermi sempre tu ogni operazione.
        </p>
        <ul class="feature-list">
          <li>Sintesi di mercato in linguaggio semplice</li>
          <li>Watchlist suggerite per principianti</li>
          <li>Promemoria prima di dimensionare una posizione</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Apri account</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
