<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plataforma de trading con IA');
$page_description = 'Opera criptomonedas, forex y mercados globales con ' . SITE_NAME . '. Analisis en tiempo real, senales asistidas por IA y una plataforma disenada para velocidad y claridad.';
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
        <h1>Opera con mas inteligencia.<br><span class="text-accent">Reacciona mas rapido.</span></h1>
        <p class="lead">
          Un nuevo estandar para trading cripto y multiactivo. Seguridad avanzada, comisiones transparentes,
          insights impulsados por IA y una interfaz que no limita tu ritmo.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Protegido con SSL
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Soporte 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Ejecucion rapida
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Empezar a operar — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Abre tu cuenta en 2 minutos';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Estadisticas de la plataforma">
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
        <div class="stat-label">Paises compatibles</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Resumen de la plataforma de trading">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Plataforma de trading</p>
        <h2>Graficos profesionales.<br>Optimizada para movil.</h2>
        <p class="lead">
          Interfaz limpia inspirada en los exchanges modernos: datos BTC/USDT en tiempo real, gestion de cartera
          y operativa en un clic. Disenada para darte confianza desde el primer acceso.
        </p>
        <ul class="platform-points">
          <li>Graficos de velas en tiempo real</li>
          <li>Cartera y P/L de un vistazo</li>
          <li>Panel de cuenta seguro</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Probar la plataforma</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Por que <?= e(SITE_NAME) ?></p>
        <h2>Todo lo que necesitas para operar con confianza</h2>
        <p class="lead">Seguridad, velocidad e inteligencia en una plataforma clara disenada para traders modernos.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Seguridad de nivel bancario</h3>
          <p>El cifrado SSL, 2FA y la custodia segura protegen tus datos y tu capital en cada etapa.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Senales de mercado con IA</h3>
          <p>Insights precisos en tiempo real para detectar oportunidades y tomar decisiones mas rapidas e informadas.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Trading automatizado</h3>
          <p>Los bots asistidos por IA trabajan 24/7 para ejecutar estrategias con eficiencia, mientras mantienes el control.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Acceso multiactivo</h3>
          <p>Opera criptomonedas, forex, acciones y materias primas en un unico entorno unificado.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Ejecucion de baja latencia</h3>
          <p>Infraestructura optimizada para una ejecucion estable incluso en periodos de alta volatilidad.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interfaz limpia</h3>
          <p>El diseno minimalista reduce distracciones para que te centres en la estrategia, no en la navegacion.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercados en tiempo real</p>
        <h2>Opera Bitcoin, Ethereum y mas activos</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Precios en tiempo real, indicadores avanzados y una vision profesional de los mercados que te interesan.
        </p>
        <a href="sign.php" class="btn btn-primary">Entrar en los mercados</a>
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
        <p class="eyebrow">Como empezar</p>
        <h2>De la inscripcion a tu primera operacion en minutos</h2>
        <p class="lead">Un proceso claro, sin complejidad innecesaria.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Crea tu cuenta</h3>
          <p>Registrate con tus datos y accede al instante de forma segura a la plataforma.</p>
        </article>
        <article class="step-card">
          <h3>Verifica tu correo</h3>
          <p>Confirma tu direccion y desbloquea el entorno completo de trading.</p>
        </article>
        <article class="step-card">
          <h3>Deposita fondos</h3>
          <p>Ingresa al menos <?= MIN_DEPOSIT ?> <?= CURRENCY ?> mediante transferencia bancaria, tarjeta o monedero electronico.</p>
        </article>
        <article class="step-card">
          <h3>Configura tu estrategia</h3>
          <p>Define tu nivel de riesgo y tus preferencias, de forma manual o con automatizacion asistida por IA.</p>
        </article>
        <article class="step-card">
          <h3>Empieza a operar</h3>
          <p>Entra al mercado con graficos en tiempo real, herramientas profesionales y soporte cuando lo necesites.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Abrir cuenta ahora</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Depositos</p>
      <h2 style="margin-bottom: 0.75rem;">Ingresa fondos con metodos en los que ya confias</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Tarjetas, monederos electronicos y transferencias bancarias, protegidos con cifrado SSL.</p>
      <?php
      $payment_context = 'depositos y financiacion de cuenta';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infraestructura fiable</p>
        <h2>Desarrollado con socios lideres del sector</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Resenas</p>
        <h2>Lo que opinan los traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">El registro me llevo solo unos minutos, las comisiones son transparentes y el soporte realmente responde. Una experiencia fluida y fiable: una plataforma en la que quiero seguir operando.</p>
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
          <p class="review-text">Por fin probe aqui el trading cripto y no me arrepiento en absoluto. Configuracion rapida y todo explicado con claridad. Una gran eleccion, especialmente para empezar.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Entusiasta cripto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Estable y fiable. Abrir la cuenta es sencillo, las condiciones son claras y el equipo sabe lo que hace. Una experiencia de trading sorprendentemente comoda.</p>
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
          <p class="review-text">Operar ya no parece tan complicado. Registro sencillo, comisiones claras y soporte cuando lo necesito. Para quien empieza, marca una diferencia clave.</p>
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
            Como puedo empezar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Crea tu cuenta con tus datos basicos, completa una verificacion breve y deposita al menos <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Accederas a toda la plataforma: graficos en tiempo real, herramientas de trading y onboarding asistido.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Estan seguros mi dinero y mis datos?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizamos cifrado SSL, autenticacion en dos pasos y procesamiento seguro mediante proveedores de confianza. Tratamos tus datos personales conforme a estrictos protocolos de seguridad en todos los niveles.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cuando puedo retirar mis beneficios?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Puedes solicitar un retiro en cualquier momento desde tu panel. El procesamiento suele tardar de 1 a 3 dias laborables. Comisiones y plazos se muestran siempre por adelantado, sin sorpresas.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Necesito experiencia en trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              En absoluto. El onboarding asistido, las guias simples y las herramientas con IA te ayudan a aprender a tu ritmo. Tanto si empiezas como si ya tienes experiencia, el soporte esta disponible 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            En que mercados puedo operar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Accede a criptomonedas, forex, acciones globales y materias primas desde una sola interfaz. Datos en tiempo real, analisis integrados y soporte para estrategias manuales y automatizadas.
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
        <h2>Capacidades clave de un vistazo</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Motor de trading con IA</div>
          <div class="specs-value">Analisis de mercado avanzado con aprendizaje automatico</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Metodos de financiacion</div>
          <div class="specs-value">Tarjetas de pago, transferencias bancarias, PayPal, monederos electronicos</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Acceso por dispositivo</div>
          <div class="specs-value">Web, tablet y movil, totalmente responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Precision de senales</div>
          <div class="specs-value">Hasta un 85 % en estrategias de IA compatibles</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercados</div>
          <div class="specs-value">Cripto, forex, acciones, materias primas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Configuracion rapida de cuenta con verificacion asistida</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Soporte</div>
          <div class="specs-value">Soporte profesional 24/7: <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contactanos</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Fiable</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Valoracion de <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> resenas · Basado en <strong>1&nbsp;842</strong> valoraciones
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Listo para operar en una plataforma creada para la claridad?</h2>
        <p class="lead">Unete a traders privados y empresas que compran, venden y gestionan activos digitales con confianza.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Crea tu cuenta gratis';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
