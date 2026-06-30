<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plataforma de trading');
$page_description = 'Operá cripto, forex y mercados globales con ' . SITE_NAME . '. Análisis en tiempo real, señales asistidas por IA y una plataforma diseñada para velocidad y claridad.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">Plataforma de trading con IA</p>
        <h1>Operá de forma más inteligente.<br><span class="text-accent">Actuá más rápido.</span></h1>
        <p class="lead">
          Un nuevo estándar para el trading de cripto y multi-mercado. Seguridad avanzada, comisiones transparentes,
          insights guiados por IA y una interfaz esencial.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL protegido
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Asistencia 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Ejecución rápida
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Empezá a operar — mín. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Abrí tu cuenta en 2 minutos';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Estadísticas de la plataforma">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Monedas disponibles</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Usuarios verificados</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Volumen de trading</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Países compatibles</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Vista previa de la plataforma de trading">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Plataforma de trading</p>
        <h2>Gráficos profesionales.<br>Optimizada para móvil.</h2>
        <p class="lead">
          Una interfaz limpia, como un exchange moderno — datos BTC/USDT en tiempo real, seguimiento del portafolio
          y ejecución con un toque. Diseñada para darte confianza desde el primer acceso.
        </p>
        <ul class="platform-points">
          <li>Gráficos de velas en tiempo real</li>
          <li>Portafolio y P/L de un vistazo</li>
          <li>Panel de cuenta seguro</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Probá la plataforma</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Por qué <?= e(SITE_NAME) ?></p>
        <h2>Todo lo que necesitás para operar con confianza</h2>
        <p class="lead">Seguridad, velocidad e inteligencia — reunidas en una plataforma clara pensada para traders modernos.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Seguridad de nivel bancario</h3>
          <p>Cifrado SSL, 2FA y gestión segura de fondos protegen tus datos y tu capital en cada etapa.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Señales de mercado con IA</h3>
          <p>Insights precisos en tiempo real para identificar oportunidades y tomar decisiones más rápidas e informadas.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Trading automatizado</h3>
          <p>Bots asistidos por IA trabajan 24/7 para ejecutar estrategias de forma eficiente, mientras vos mantenés el control.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Acceso multi-mercado</h3>
          <p>Operá en cripto, forex, acciones y materias primas desde una única interfaz.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Ejecución de baja latencia</h3>
          <p>Infraestructura optimizada para una ejecución estable de órdenes incluso en momentos de alta demanda.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interfaz limpia</h3>
          <p>Diseño esencial que reduce las distracciones: más foco en la estrategia, menos en la navegación.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercados en vivo</p>
        <h2>Operá Bitcoin, Ethereum y mucho más</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Precios en tiempo real, indicadores avanzados y una vista profesional de los mercados que te interesan.
        </p>
        <a href="sign.php" class="btn btn-primary">Accedé a los mercados</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Precios de mercado en tiempo real">
        <div class="exchange-panel-header">
          <span>Mercados</span>
          <span class="live-dot">Live</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Cómo empezar</p>
        <h2>Del registro a la primera operación en pocos minutos</h2>
        <p class="lead">Un recorrido guiado — sin complejidad, sin incertidumbre.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Creá tu cuenta</h3>
          <p>Registrate con tus datos y obtené acceso inmediato y seguro a la plataforma.</p>
        </article>
        <article class="step-card">
          <h3>Verificá tu correo</h3>
          <p>Confirmá la dirección para desbloquear el acceso completo a la plataforma.</p>
        </article>
        <article class="step-card">
          <h3>Depositá en tu cuenta</h3>
          <p>Depositá un mínimo de <?= MIN_DEPOSIT ?> <?= CURRENCY ?> mediante transferencia, tarjeta o billetera electrónica.</p>
        </article>
        <article class="step-card">
          <h3>Configurá la estrategia</h3>
          <p>Definí nivel de riesgo y preferencias — manual o con automatización asistida por IA.</p>
        </article>
        <article class="step-card">
          <h3>Empezá a operar</h3>
          <p>Entrá al mercado con gráficos en vivo, herramientas y soporte cuando lo necesites.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Abrí tu cuenta ahora</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Depósitos</p>
      <h2 style="margin-bottom: 0.75rem;">Depositá con métodos que ya conocés</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Tarjetas, billeteras electrónicas y transferencias — protegidos con cifrado SSL.</p>
      <?php
      $payment_context = 'depósitos y financiamiento de cuenta';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infraestructura confiable</p>
        <h2>Construida con socios de nivel industrial</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Reseñas</p>
        <h2>Lo que dicen los traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">El registro fue rapidísimo, comisiones transparentes y asistencia que realmente responde. Experiencia fluida y confiable — una plataforma que sigo usando con gusto.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Trader independiente</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Por fin probé el trading de cripto acá — sin arrepentimientos. Configuración rápida y explicaciones claras. Excelente opción, sobre todo si estás empezando.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Entusiasta de cripto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Estable y confiable. Apertura de cuenta simple, términos claros y equipo competente. Una experiencia de trading sorprendentemente cómoda.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operador de activos digitales</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">El trading ya no parece tan complicado. Registro simple, comisiones claras y soporte cuando hace falta. Como principiante, marca una diferencia real.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Inversora privada</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Preguntas frecuentes</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cómo puedo empezar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Creá una cuenta con tus datos básicos, completá un breve paso de verificación y depositá el mínimo de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Desbloquearás el acceso completo a la plataforma — gráficos en vivo, herramientas de trading e incorporación guiada.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Mis fondos y mis datos están seguros?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizamos cifrado SSL, autenticación de dos factores y procesos seguros a través de proveedores confiables. Tus datos personales se gestionan con estrictas políticas de seguridad en cada nivel.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cuándo puedo retirar las ganancias?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicitá retiros en cualquier momento desde tu área personal. El procesamiento suele tardar de 1 a 3 días hábiles. Las comisiones y los plazos siempre se muestran por adelantado — sin sorpresas.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Se necesita experiencia en trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Absolutamente no. La incorporación guiada, tutoriales simples y herramientas asistidas por IA te ayudan a aprender a tu ritmo. Ya sea que estés empezando o seas experto, la asistencia está disponible 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿En qué mercados puedo operar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Accedé a criptomonedas, forex, acciones globales y materias primas desde una única interfaz. Datos en tiempo real, análisis integrados y soporte para estrategias manuales o automatizadas.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Plataforma</p>
        <h2>Funciones principales de un vistazo</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Motor de trading con IA</div>
          <div class="specs-value">Análisis de mercado avanzado basado en machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Métodos de depósito</div>
          <div class="specs-value">Tarjetas, transferencias, PayPal, billeteras electrónicas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Acceso desde dispositivos</div>
          <div class="specs-value">Web, tablet y móvil — totalmente responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Precisión de las señales</div>
          <div class="specs-value">Hasta un 85% en las estrategias con IA compatibles</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercados</div>
          <div class="specs-value">Cripto, forex, acciones, materias primas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Incorporación</div>
          <div class="specs-value">Configuración rápida con verificación guiada</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Asistencia</div>
          <div class="specs-value">Soporte profesional 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contactanos</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Confiable</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Una plataforma pensada para quienes empiezan</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Incorporación guiada, asistencia dedicada y herramientas claras para operar con mayor tranquilidad.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>¿Listo para operar en una plataforma pensada para la claridad?</h2>
        <p class="lead">Sumate a traders privados y empresas que compran, venden y gestionan activos digitales con confianza.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Creá tu cuenta gratis';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
