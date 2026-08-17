<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Seite nicht gefunden ᐉ ' . SITE_NAME;
$page_description = 'Seite nicht gefunden — ' . SITE_NAME;
$page_canonical = page_url("404.php");
$active_page = "404";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Fehler 404</span>
    <h1>Seite nicht gefunden</h1>
    <p class="kpnq92g">Dieser Link existiert nicht. <a href="<?= page_url() ?>">Zurück zur Startseite</a>.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Startseite</a>
      <a class="qou73xg ec2hno" href="<?= page_url('sign.php') ?>">Konto eröffnen</a>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
