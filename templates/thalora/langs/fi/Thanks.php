<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kiitos');
$page_description = 'Olemme vastaanottaneet tilipyyntösi palvelussa ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="thanks-page">
    <div class="container-base" style="max-width: 560px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Olet mukana.</h1>
      <p>Kiitos rekisteröitymisestä palveluun <?= e(SITE_NAME) ?>. Tiimimme ottaa pian yhteyttä tilin avaamisen viimeistelemiseksi — pidä puhelin lähellä.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
