<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gracias | ' . SITE_NAME;
$page_description = 'Tu solicitud ha sido recibida por el equipo de ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
$page_noindex = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Gracias — nos pondremos en contacto</h1>
            <p>
              Tu solicitud ha sido recibida por el equipo de <?= e(SITE_NAME) ?>. Un especialista
              se pondrá en contacto contigo en breve para ayudarte a empezar.
            </p>
            <p>
              Mientras tanto puedes saber más sobre el
              <a href="<?= page_url('product.php') ?>">funcionamiento de la plataforma</a> o consultar las
              <a href="<?= page_url('faq.php') ?>">preguntas frecuentes</a>.
            </p>
            <p><a href="<?= page_url() ?>">Volver al inicio</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
