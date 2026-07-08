<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gracias');
$page_description = 'Hemos recibido tu solicitud de cuenta en ' . SITE_NAME . '.';
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
      <h1>Listo!</h1>
      <p class="lead thanks-lead">
        Gracias por registrarte en <?= e(SITE_NAME) ?>.
        Nuestro equipo se pondra en contacto contigo en breve para completar la configuracion de tu cuenta. Ten tu telefono a mano.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
