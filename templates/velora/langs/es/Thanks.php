<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Gracias');
$page_description = 'Hemos recibido tu solicitud de cuenta ' . SITE_NAME . '.';
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
      <h1>¡Ya estás dentro!</h1>
      <p class="lead thanks-lead">
        Gracias por registrarte con <?= e(SITE_NAME) ?>.
        Nuestro equipo se pondrá en contacto contigo pronto para finalizar la configuración de tu cuenta — mantén el teléfono a mano.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
