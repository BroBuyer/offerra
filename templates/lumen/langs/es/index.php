<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plataforma de inversión con IA');
$page_description = 'Una plataforma de inversión sencilla impulsada por IA — mercados claros, decisiones guiadas y apertura de cuenta rápida en ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introducción">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Invierte con claridad.<br><span class="text-accent">Que la IA lo mantenga simple.</span></h1>
        <p class="lead">
          Una plataforma moderna que explica los mercados en lenguaje sencillo, destaca ideas útiles de IA y te ayuda a operar sin ruido innecesario.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Empezar desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Cómo funciona</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Pensado para principiantes</p>
        <h2>Tres pasos. Luego operas.</h2>
        <p class="lead">Sin jerga de terminal — un camino claro desde el registro hasta tu primera posición.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Abre tu cuenta</h3>
          <p>Comparte unos datos. La verificación es breve y guiada.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Deposita con seguridad</h3>
          <p>Deposita desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?> con métodos de pago de confianza.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Opera con ayuda de IA</h3>
          <p>Sigue ideas en lenguaje claro y coloca órdenes cuando estés listo.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">IA que aporta valor</p>
        <h2>Señales que sí entiendes</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> convierte el ruido del mercado en avisos cortos y legibles — menos adivinar, más decidir.
        </p>
        <ul class="feature-list">
          <li>Pistas claras de compra / mantener / vigilar</li>
          <li>Recordatorios de riesgo antes de confirmar</li>
          <li>Una interfaz que se mantiene calmada bajo presión</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Probar la plataforma</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Ejemplo de idea">
        <p class="insight-panel__label">Idea en vivo</p>
        <p class="insight-panel__title">BTC / USD · momentum estable</p>
        <p class="insight-panel__body">
          La volatilidad se enfría. La IA sugiere observar la próxima sesión antes de aumentar el tamaño — tú controlas cada orden.
        </p>
        <div class="insight-panel__meta">
          <span>Alta confianza</span>
          <span>Actualizado ahora</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Empezar</p>
        <h2>Crea tu cuenta en <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Únete a una plataforma premium y simple — con guía de IA desde el primer día.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Ábrela en menos de 2 minutos';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Infraestructura de confianza</p>
        <h2>Socios de infraestructura</h2>
        <p class="lead">Pagos y acceso a mercados a través de proveedores consolidados.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Respuestas rápidas</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            ¿Necesito experiencia en trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              No. <?= e(SITE_NAME) ?> está pensado para inversores primerizos — los consejos de IA están en lenguaje sencillo.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cuál es el depósito mínimo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Puedes empezar desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Las comisiones se ven antes de confirmar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Hay soporte?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sí — nuestro equipo está disponible las 24 horas para depósitos y configuración de cuenta.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Ver el FAQ completo →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
