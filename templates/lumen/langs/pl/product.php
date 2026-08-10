<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platforma');
$page_description = 'Zobacz, jak ' . SITE_NAME . ' upraszcza inwestowanie dzięki wnioskom AI, jasnym cenom i spokojnemu środowisku handlu.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platforma</p>
      <h1>Wszystko, czego potrzebujesz. Nic zbędnego.</h1>
      <p class="lead">Skoncentrowana przestrzeń do inwestycji crypto i multi-asset — prowadzona przez AI, zaprojektowana dla przejrzystości.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI w tle</h2>
        <p class="lead">
          Wnioski pojawiają się, gdy pomagają — krótkie, czytelne i łatwe do zastosowania. Każdą transakcję potwierdzasz sam.
        </p>
        <ul class="feature-list">
          <li>Podsumowania rynku w prostym języku</li>
          <li>Sugerowane listy obserwacyjne dla początkujących</li>
          <li>Przypomnienia przed określeniem wielkości pozycji</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Otwórz konto</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
