<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contacto');
$page_description = 'Contacta con el soporte de ' . SITE_NAME . ' — te ayudamos con financiación, verificación y el inicio.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contacto</p>
      <h1>Estamos aquí para ayudarte</h1>
      <p class="lead">Preguntas sobre tu cuenta, depósitos o herramientas de IA — escríbenos cuando quieras.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Soporte</h2>
        <p class="prose">Escríbenos a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Normalmente respondemos en unas pocas horas.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'O déjanos tus datos';
          $form_submit = 'Enviar solicitud';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
