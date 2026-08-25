<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pagina non trovata ᐉ ' . SITE_NAME;
$page_description = 'Pagina non trovata — ' . SITE_NAME;
$page_canonical = page_url("404.php");
$active_page = "404";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Errore 404</span>
    <h1>Pagina non trovata</h1>
    <p class="kpnq92g">Questo link non esiste. <a href="<?= page_url() ?>">Torna alla home</a>.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Home</a>
      <a class="qou73xg ec2hno" href="<?= page_url('sign.php') ?>">Apri il tuo conto</a>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
