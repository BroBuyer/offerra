<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Despre platformă');
$page_description = 'Vedeți cum ' . SITE_NAME . ' menține tranzacționarea clară, cu insight-uri AI, feed-uri cu latență redusă și un spațiu de lucru calm.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Despre noi</p>
      <h1>Arhitectură AI instituțională, făcută accesibilă</h1>
      <p class="lead">Un spațiu de lucru concentrat pentru tranzacționare cripto și multi-activ — ghidat de AI, conceput pentru claritate.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI care rămâne util</h2>
        <p class="lead">
          Insight-urile apar când ajută — scurt, lizibil și ușor de aplicat.
          Confirmați personal fiecare tranzacție.
        </p>
        <ul class="feature-bullets">
          <li>Rezumate de piață în limbaj simplu</li>
          <li>Watchlist-uri sugerate pentru începători</li>
          <li>Memento-uri înainte de a dimensiona o poziție</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Deschide cont</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
