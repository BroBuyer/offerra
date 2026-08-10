<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Köszönjük');
$page_description = 'A ' . SITE_NAME . ' számlakérelmét megkaptuk.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Bent van.</h1>
      <p class="lead thanks-lead">
        Köszönjük a regisztrációt a <?= e(SITE_NAME) ?> oldalon. Csapatunk hamarosan felveszi a kapcsolatot a beállítás befejezéséhez — tartsa kéznél a telefonját.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
