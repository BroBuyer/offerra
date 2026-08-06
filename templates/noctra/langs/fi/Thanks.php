<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kiitos');
$page_description = SITE_NAME . '-tilipyyntösi on vastaanotettu.';
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
      <h1>Olet mukana.</h1>
      <p class="lead thanks-lead">
        Kiitos, että rekisteröidyit <?= e(SITE_NAME) ?>-palveluun.
        Tiimimme ottaa pian yhteyttä tilisi käyttöönoton viimeistelemiseksi — pidä puhelin lähellä.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
