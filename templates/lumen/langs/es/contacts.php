<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contacto');
$page_description = 'Contacta con el soporte de ' . SITE_NAME . ' — ayudamos con depósitos, verificación y primeros pasos.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contacto</p>
      <h1>Estamos para ayudarte</h1>
      <p class="lead">Dudas sobre tu cuenta, depósitos o herramientas de IA — escríbenos cuando quieras.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Soporte</h2>
        <p class="prose">Escríbenos a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. El tiempo de respuesta suele ser de pocas horas.</p>
        <a href="sign.php" class="btn btn-primary">Abrir una cuenta</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
