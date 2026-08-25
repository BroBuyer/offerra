<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pagină negăsită ᐉ ' . SITE_NAME;
$page_description = 'Pagină negăsită — ' . SITE_NAME;
$page_canonical = page_url("404.php");
$active_page = "404";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Eroare 404</span>
    <h1>Pagină negăsită</h1>
    <p class="kpnq92g">Acest link nu există. <a href="<?= page_url() ?>">Înapoi acasă</a>.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Acasă</a>
      <a class="qou73xg ec2hno" href="<?= page_url('sign.php') ?>">Deschideți contul</a>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
