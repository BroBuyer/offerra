<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Respuestas sobre trading, funciones, seguridad, comisiones y cómo empezar con ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Preguntas frecuentes</h1>
      <p class="lead">Todo lo que necesitás saber antes de empezar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            ¿Cómo puedo empezar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Creá una cuenta, verificá tu correo y depositá un mínimo de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Tendrás acceso inmediato a gráficos, herramientas y guías introductorias.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿<?= e(SITE_NAME) ?> es seguro y confiable?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizamos cifrado SSL, 2FA y procesadores de pago verificados. La seguridad está integrada en cada nivel de la plataforma.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cuáles son las comisiones?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Las comisiones son transparentes y se muestran antes de confirmar cualquier operación. Sin costos ocultos en depósitos o retiros.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Puedo usar trading automático?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sí. Podés configurar bots con asistencia de IA según tu perfil de riesgo, u operar manualmente — podés cambiar en cualquier momento.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cómo funcionan los retiros?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicitá un retiro desde tu área personal. El procesamiento suele tardar de 1 a 3 días hábiles según el método de pago.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">¿Tenés más preguntas?</p>
        <a href="contacts.php" class="btn btn-outline">Contactá a la asistencia</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
