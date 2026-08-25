<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gracias ᐉ ' . SITE_NAME;
$page_description = 'Su solicitud ha sido recibida por el equipo de ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Mensaje recibido</span>
      <h1>Gracias — nos pondremos en contacto</h1>
      <p>Su solicitud ha sido recibida por el equipo de <?= e(SITE_NAME) ?>. Un especialista se pondrá en contacto en breve para ayudarle a comenzar. Mientras tanto, siéntase libre de explorar la plataforma.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Volver a la página de inicio</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Explorar la plataforma</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
