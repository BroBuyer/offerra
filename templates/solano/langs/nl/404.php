<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pagina niet gevonden ᐉ ' . SITE_NAME;
$page_description = 'Pagina niet gevonden — ' . SITE_NAME;
$page_canonical = page_url("404.php");
$active_page = "404";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Error 404</span>
    <h1>Pagina niet gevonden</h1>
    <p class="kpnq92g">Deze link bestaat niet. <a href="<?= page_url() ?>">Terug naar start</a>.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Start</a>
      <a class="qou73xg ec2hno" href="<?= page_url('sign.php') ?>">Open uw account</a>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
