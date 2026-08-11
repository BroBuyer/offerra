<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Chi siamo');
$page_description = 'Scopri come ' . SITE_NAME . ' rende il trading più chiaro con insight IA, feed a bassa latenza e uno spazio di lavoro più calmo.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Chi siamo</p>
      <h1>Un’architettura IA “istituzionale” resa semplice</h1>
      <p class="lead">Uno spazio di lavoro focalizzato per il trading crypto e multi-asset — guidato dall’IA, pensato per la chiarezza.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>Un’IA davvero utile</h2>
        <p class="lead">
          Gli insight compaiono quando servono: brevi, leggibili e facili da usare.
          Confermi ogni operazione tu stesso.
        </p>
        <ul class="feature-bullets">
          <li>Riepiloghi di mercato in linguaggio semplice</li>
          <li>Liste di watch suggerite per chi è alle prime armi</li>
          <li>Promemoria prima di dimensionare una posizione</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Apri un account</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
