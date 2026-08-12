<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Köszönjük');
$page_description = 'A ' . SITE_NAME . ' fiókkérelmét megkaptuk.';
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
        Köszönjük, hogy regisztrált a <?= e(SITE_NAME) ?>.
        Csapatunk hamarosan felveszi Önnel a kapcsolatot a fiók beállításának befejezéséhez — tartsa közel a telefonját.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
