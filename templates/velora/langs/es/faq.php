<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Preguntas frecuentes');
$page_description = 'Respuestas sobre financiación, seguridad, insights de IA y cómo empezar con ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Preguntas frecuentes</h1>
      <p class="lead">Respuestas directas sobre registro, seguridad y cómo la IA ayuda en la plataforma.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            ¿Cómo empiezo?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Crea una cuenta, completa una verificación breve y deposita desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Los gráficos, las herramientas y el onboarding guiado se desbloquean al instante. También puedes chatear con Lisa en la esquina.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cómo me ayuda la IA a operar?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> muestra insights de mercado breves en lenguaje sencillo. Tú decides siempre si actuar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cómo se protege mi cuenta?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Las conexiones usan cifrado SSL. Nunca pedimos permisos innecesarios — mantén tu inicio de sesión privado.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Hay comisiones ocultas?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Las comisiones se muestran antes de confirmar. No hay cargos sorpresa en depósitos o retiros si se cumplen los términos.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Quién es Lisa en el chat?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa es nuestra asistente de onboarding. Te guía con un breve cuestionario y te ayuda a enviar una solicitud de cuenta segura.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
