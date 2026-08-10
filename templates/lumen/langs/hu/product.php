<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platform');
$page_description = 'Nézze meg, hogyan tartja egyszerűen a befektetést a ' . SITE_NAME . ' MI-elemzésekkel, átlátható árakkal és nyugodt kereskedési felülettel.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platform</p>
      <h1>Minden, amire szüksége van. Semmi felesleges.</h1>
      <p class="lead">Fókuszált munkaterület kripto- és multi-asset befektetéshez — MI-vezetéssel, az átláthatóságra tervezve.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>MI a háttérben</h2>
        <p class="lead">
          Az elemzések akkor jelennek meg, amikor segítenek — rövidek, olvashatók és könnyen alkalmazhatók. Minden trade-et Ön erősít meg.
        </p>
        <ul class="feature-list">
          <li>Piaci összefoglalók közérthető nyelven</li>
          <li>Javasolt figyelőlisták kezdőknek</li>
          <li>Emlékeztetők a pozícióméret előtt</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Számla nyitása</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
