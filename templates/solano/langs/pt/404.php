<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Página não encontrada ᐉ ' . SITE_NAME;
$page_description = 'Página não encontrada — ' . SITE_NAME;
$page_canonical = page_url("404.php");
$active_page = "404";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Error 404</span>
    <h1>Página não encontrada</h1>
    <p class="kpnq92g">Esta ligação não existe. <a href="<?= page_url() ?>">Voltar ao início</a>.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Início</a>
      <a class="qou73xg ec2hno" href="<?= page_url('sign.php') ?>">Abra a sua conta</a>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
