<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ďakujeme');
$page_description = 'Vaša žiadosť o účet u ' . SITE_NAME . ' bola prijatá.';
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
      <h1>Ste vnútri.</h1>
      <p class="lead thanks-lead">
        Ďakujeme za registraci u <?= e(SITE_NAME) ?>.
        Náš tím sa čoskoro ozve a dokončí nastavenie účtu — majte telefón poruke.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
