<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platformă');
$page_description = 'Vedeți cum ' . SITE_NAME . ' menține investițiile simple cu insight-uri AI, prețuri clare și un spațiu de trading calm.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platformă</p>
      <h1>Tot ce aveți nevoie. Nimic superfluu.</h1>
      <p class="lead">Un spațiu concentrat pentru investiții crypto și multi-asset — ghidat de AI, proiectat pentru claritate.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI care rămâne în fundal</h2>
        <p class="lead">
          Insight-urile apar când ajută — scurte, lizibile și ușor de aplicat. Confirmați mereu fiecare tranzacție.
        </p>
        <ul class="feature-list">
          <li>Rezumaturi de piață în limbaj clar</li>
          <li>Liste de urmărire sugerate pentru începători</li>
          <li>Memento-uri înainte de dimensionarea poziției</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Deschide cont</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
