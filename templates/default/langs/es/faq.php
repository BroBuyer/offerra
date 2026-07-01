<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Respuestas a preguntas sobre trading, funcionalidades, seguridad, comisiones y como empezar con ' . SITE_NAME . '.';
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
      <p class="lead">Todo lo que necesitas saber antes de empezar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Como puedo empezar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Crea tu cuenta, verifica tu correo y deposita al menos <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Obtendras acceso inmediato a graficos, herramientas y guia de onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Es <?= e(SITE_NAME) ?> segura y fiable?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizamos cifrado SSL, autenticacion en dos pasos y procesadores de pago verificados. La seguridad esta integrada en todos los niveles de la plataforma.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cuales son las comisiones?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Las comisiones son transparentes y se muestran antes de confirmar cada operacion. Sin cargos ocultos en depositos ni retiros.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Puedo usar trading automatizado?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Si. Configura bots asistidos por IA segun tu perfil de riesgo o opera manualmente; puedes cambiar de modo cuando quieras.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Como funcionan los retiros?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicitas el retiro desde tu panel. El procesamiento suele tardar de 1 a 3 dias laborables segun el metodo de pago elegido.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Tienes mas preguntas?</p>
        <a href="contacts.php" class="btn btn-outline">Contactar con soporte</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
