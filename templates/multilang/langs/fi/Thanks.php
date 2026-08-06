<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kiitos');
$page_description = 'Tilipyyntösi palvelussa ' . SITE_NAME . ' on vastaanotettu.';
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
      <h1>Valmista!</h1>
      <p class="lead thanks-lead">
        Kiitos rekisteröitymisestäsi palveluun <?= e(SITE_NAME) ?>.
        Tiimimme ottaa sinuun pian yhteyttä tilisi käyttöönoton viimeistelemiseksi. Pidä puhelin lähelläsi.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
