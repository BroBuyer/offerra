<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plataforma de trading con IA');
$page_description = 'Opera con crypto y otros mercados en ' . SITE_NAME . ' — cuenta segura, precios claros, herramientas de IA útiles y ejecución rápida de órdenes.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Spreads</strong> desde 0,1</span>
      <span class="tape-item"><strong>Velocidad</strong> bajo 40 ms</span>
      <span class="tape-item"><strong>Mercados</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Plataforma de trading con IA</div>
        <h1>Opera con crypto y otros mercados.<br><span class="text-accent">Empieza con <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Una plataforma sencilla para trading de crypto y varios activos — buena seguridad, precios claros,
          ideas útiles con IA y una interfaz fácil de seguir.
        </p>
        <div class="hero-badges" aria-label="Ventajas de la plataforma">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Conexión cifrada segura (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Atención al cliente disponible 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Ejecución rápida de órdenes
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Empieza hoy — depósito mín. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Crear cuenta</span>
          <span class="live-pill">Seguro</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Regístrate en menos de 2 minutos';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercados en vivo</p>
        <h2>Mira los precios en tiempo real. Empieza cuando estés listo.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Sigue Bitcoin, Ethereum y otros pares importantes en un panel claro —
          luego abre tu cuenta y coloca tu primera operación.
        </p>
        <a href="sign.php" class="btn btn-primary">Abrir acceso a mercados</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Precios de mercado en vivo">
        <div class="exchange-panel-header">
          <span>Mercados</span>
          <span class="live-dot">En vivo</span>
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

  <section class="platform-section" id="platform" aria-label="Vista previa de la plataforma de trading">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Plataforma</p>
        <h2>Gráficos claros.<br>Listo para operar.</h2>
        <p class="lead">
          Una pantalla de trading pensada para el móvil con gráficos en vivo, ganancias y pérdidas,
          y órdenes con un toque — fácil de entender desde el primer acceso.
        </p>
        <ul class="platform-points">
          <li>Gráficos y precios de mercado en vivo</li>
          <li>Saldo de la cartera de un vistazo</li>
          <li>Panel de cuenta seguro con 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Abrir la plataforma</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funciones</p>
        <h2>Lo que obtienes con <?= e(SITE_NAME) ?></h2>
        <p class="lead">Seguridad, velocidad y herramientas claras — sin una pantalla saturada.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Seguridad sólida de la cuenta</h3>
            <p>Cifrado SSL, acceso en dos pasos y flujos de fondos protegidos para cuidar mejor tu dinero y tus datos.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Ideas de mercado con IA</h3>
            <p>Señales útiles que señalan el momento y las tendencias — útiles cuando los precios se mueven rápido.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automatización cuando la quieras</h3>
            <p>Los bots opcionales pueden seguir tus reglas todo el día — tú sigues al mando.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Varios mercados en un solo sitio</h3>
            <p>Crypto, forex, acciones y materias primas desde una plataforma sencilla.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Gestión rápida de órdenes</h3>
            <p>Hecha para colocar órdenes con fiabilidad incluso cuando el mercado está agitado.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Diseño limpio y simple</h3>
            <p>Menos ruido visual — más espacio para el gráfico y tu siguiente orden.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Primeros pasos</p>
        <h2>Cinco pasos hasta tu primera operación</h2>
        <p class="lead">Un camino claro desde el registro hasta los mercados en vivo.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Abre una cuenta</h3>
            <p>Envía tus datos y obtén acceso seguro a la plataforma.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Confirma el correo</h3>
            <p>Verifica tu dirección para desbloquear el entorno de trading completo.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Añade fondos</h3>
            <p>Deposita desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?> con tarjeta, transferencia bancaria o monedero electrónico.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Elige cómo operar</h3>
            <p>Opera a mano o usa herramientas asistidas por IA con límites claros que tú defines.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Opera en vivo</h3>
            <p>Usa gráficos, herramientas y soporte 24/7 cuando necesites ayuda.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Empezar ahora</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Pagos</p>
      <h2 style="margin-bottom: 0.75rem;">Deposita con métodos que ya conoces</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Tarjetas, monederos y transferencias — cifrados de extremo a extremo.</p>
      <?php
      $payment_context = 'financiación de cuenta y depósitos';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infraestructura</p>
        <h2>Socios de infraestructura</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Opiniones</p>
        <h2>Lo que dicen los traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">El registro fue rápido, las comisiones claras y el soporte respondió. Parece una plataforma con la que quedarme.</p>
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
          <p class="review-text">Probé crypto aquí tras saltar entre apps — el inicio fue claro y el diseño de gráficos por fin tiene sentido.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Trader de crypto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Las órdenes se ejecutan con fiabilidad, los términos están en lenguaje sencillo y el equipo conoce el producto. Una plataforma sólida.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader de activos digitales</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Como principiante necesitaba claridad más que fuegos artificiales. Registro, comisiones y ayuda cuando me atasqué — eso bastó.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Inversora particular</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Antes de financiar tu cuenta</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cómo empiezo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Crea una cuenta, completa una verificación breve y deposita desde <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Eso desbloquea gráficos, herramientas y una guía de inicio.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cómo se protegen mi dinero y mis datos?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Usamos cifrado SSL, autenticación en dos pasos y proveedores de pago de confianza bajo políticas de datos estrictas.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Cuánto tardan los retiros?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicita cobros en cualquier momento desde el panel. La mayoría de métodos se liquidan en 1–3 días laborables, con las comisiones visibles de antemano.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Necesito experiencia previa en trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              No. Pasos guiados y herramientas asistidas por IA te ayudan a aprender a tu ritmo, con soporte 24/7 disponible.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            ¿Qué mercados hay disponibles?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Criptomonedas, forex, acciones globales y materias primas — manual o automatizado — desde una sola interfaz.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Resumen</p>
        <h2>La plataforma de un vistazo</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Herramientas de IA</div>
          <div class="specs-value">Análisis de mercado con ideas de aprendizaje automático</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiación</div>
          <div class="specs-value">Tarjetas, transferencias bancarias, PayPal, monederos electrónicos</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivos</div>
          <div class="specs-value">Web, tablet, móvil — totalmente adaptable</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Calidad de señales IA</div>
          <div class="specs-value">Hasta el 85 % en estrategias compatibles*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercados</div>
          <div class="specs-value">Crypto, forex, acciones, materias primas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Inicio</div>
          <div class="specs-value">Configuración rápida con verificación guiada</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Soporte</div>
          <div class="specs-value">Soporte 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contáctanos</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Valorada</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Puntuación de <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> opiniones · Basado en <strong>1.842</strong> valoraciones
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>¿Listo para una forma más clara de operar?</h2>
        <p class="lead">Únete a traders que quieren mercados en vivo, comisiones claras y una plataforma fácil de usar.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Abrir cuenta</span>
          <span class="live-pill">Gratis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Crea tu cuenta gratis';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
