<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Motor de operaciones con IA premium para mercados globales');
$page_description = SITE_NAME . ' — una forma más inteligente y clara de acceder a los mercados globales con herramientas de IA estructuradas para cripto, forex y acciones.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: una forma más inteligente y clara de acceder a <span class="text-accent">los mercados globales</span></h1>

          <p class="hero-desc">
            ¿Nuevo en las operaciones? <?= e(SITE_NAME) ?> ofrece herramientas de IA estructuradas, pensadas para que tu recorrido sea transparente.
            Explora cripto, forex y acciones sin el caos técnico.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Empieza a operar — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Descubre las funciones</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Protegido por el protocolo SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Ruta guiada para principiantes
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Crea tu cuenta</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Tarda menos de 3 minutos. Sin comisiones de configuración.';
            $form_submit = 'Crear cuenta gratuita';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">Activos negociables</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Rápido</div>
            <div class="stat-label">Configuración de la cuenta</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">Soporte</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Seguro</div>
            <div class="stat-label">Procesamiento de datos</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Espacio de trabajo inteligente</div>

          <h2 class="section-title">
            Gráficos profesionales.<br>
            <span class="text-accent">Diseñado para decisiones sencillas.</span>
          </h2>

          <p class="section-subtitle">
            Sigue precios en vivo y actúa desde una interfaz limpia, pensada para reducir la carga cognitiva y evitar las operaciones emocionales.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Gráficos mejorados con IA en tiempo real
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Sistema de ejecución de mercado con un solo toque
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Ver funciones de la plataforma</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Ejecución instantánea disponible</h4>
                <p>
                  Para enrutar esta orden de inmediato y capturar el nivel de precio activo, activa tu terminal seguro de <?= e(SITE_NAME) ?>.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Crear cuenta segura
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Panel BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                EN VIVO
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0,15% Hoy
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Vender</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Capacidades de la plataforma</div>
        <h2 class="section-title">Todo lo que necesitas para operar con confianza en <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Seguridad, velocidad e inteligencia neuronal del mercado en una presentación clara</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Seguridad de nivel bancario</h3>
          <p>Cifrado SSL, procesamiento de datos seguro y una arquitectura de cuenta totalmente protegida.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Análisis de mercado con IA</h3>
          <p>Cálculos de machine learning en tiempo real, enfocados en detectar cambios de mercado relevantes.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Canales de baja latencia</h3>
          <p>Infraestructura ágil orientada a un procesamiento rápido de órdenes durante periodos de alta actividad.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Activos en tiempo real</div>
          <h2 class="section-title">Panel unificado de <?= e(SITE_NAME) ?> para métricas globales</h2>
          <p class="section-subtitle">
            Sigue los movimientos de los activos en tiempo real, supervisa el impulso y usa el análisis de IA automatizado para identificar patrones rápidamente.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Eficiencia operativa:</strong>
              En las operaciones tradicionales hay que vigilar manualmente cientos de indicadores.
              Los algoritmos de <?= e(SITE_NAME) ?> procesan miles de cambios de precio cada milisegundo,
              creando modelos matemáticos claros para que detectes los movimientos con antelación.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Accede a los mercados</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Activo</span>
              <span style="text-align:right; padding-right:16px;">Precio</span>
              <span style="text-align:right;">Cambio 24h</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Proceso de onboarding</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> hace que empezar sea sin estrés</h2>
        <p class="section-subtitle">¿Sin experiencia previa con cripto? Nuestra guía automatizada te guía en cada paso.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Registro seguro</h3>
            <p>Introduce tus datos de contacto básicos a través de nuestro sistema de formulario altamente cifrado.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Configuración guiada por IA</h3>
            <p>La plataforma presenta opciones de interfaz adaptadas a tus preferencias.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Financiación segura</h3>
            <p>Activa tu rango de operaciones mediante circuitos de pago estándar y fiables.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Implementar señales</h3>
            <p>Empieza a interactuar con los mercados globales usando flujos de datos neuronales en vivo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

        <div>
          <div class="section-label">Acceso móvil</div>
          <h2 class="section-title">Tu cartera, en tu bolsillo</h2>
          <p class="section-subtitle">
            El motor completo de <?= e(SITE_NAME) ?> comprimido en una experiencia móvil rápida con sensación nativa.
            Sigue activos, ejecuta operaciones y sigue señales de IA desde cualquier lugar.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Alertas push para movimientos de precio críticos
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Inicio de sesión biométrico con almacenamiento local cifrado
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Suite completa de gráficos optimizada para el tacto
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Descubre la experiencia de la app</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Marco equilibrado</div>
        <h2 class="section-title">Parámetros operativos transparentes</h2>
        <p class="section-subtitle">
          Creemos en la honestidad absoluta. Esto es lo que distingue a nuestro sistema — y dónde suelen situarse los límites de la industria.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Ventajas clave</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Panel minimalista optimizado para la velocidad de ejecución institucional.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Analítica neuronal en funcionamiento 24/7 para todos los activos.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Cero márgenes ocultos en transacciones ni comisiones de gestión sorpresa.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Arquitectura de cuenta criptográfica SSL directa.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Integración guiada en minutos, no en días.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Otras plataformas</div>
          <h3>Límites comunes del sector</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Paneles saturados de publicidad que ralentizan las decisiones.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Informes estáticos al final del día en lugar de análisis continuo en vivo.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Spreads ocultos, comisiones de retiro y precios poco claros.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Infraestructura compartida y desactualizada con protección de datos irregular.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Verificación lenta y llena de trámites que puede tardar días.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        La comparación refleja patrones típicos de las operaciones minoristas y es solo ilustrativa; las ofertas de la competencia pueden variar.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Funciones clave de la plataforma de un vistazo</h2>
        <p class="section-subtitle">Revisa los parámetros funcionales incluidos en tu marco de acceso a la cuenta.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Función</th>
              <th>Detalle funcional</th>
              <th class="cap-table-center">Incluido</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Marco de operaciones con IA</strong></td>
              <td>Procesamiento algorítmico que ofrece cálculos macro-estructurales dinámicos.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluido">✓</span></td>
            </tr>
            <tr>
              <td><strong>Fuentes agregadas</strong></td>
              <td>Gráficos consolidados en tiempo real para índices globales y tokens modernos.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluido">✓</span></td>
            </tr>
            <tr>
              <td><strong>Estabilidad multiplataforma</strong></td>
              <td>Renderizado totalmente adaptable en móviles, escritorio y tabletas.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluido">✓</span></td>
            </tr>
            <tr>
              <td><strong>Cobertura multi-asset</strong></td>
              <td>Acceso unificado a cripto, forex e índices de renta variable desde una sola capa de cuenta.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluido">✓</span></td>
            </tr>
            <tr>
              <td><strong>Alertas de riesgo automatizadas</strong></td>
              <td>Notificaciones configurables que detectan volatilidad inusual antes de que afecte a tus posiciones.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluido">✓</span></td>
            </tr>
            <tr>
              <td><strong>Bóveda de datos cifrados</strong></td>
              <td>Datos personales y de cuenta aislados mediante controles de acceso criptográficos en capas.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluido">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>Soporte humano 24/7</strong></td>
              <td>Operadores técnicos en vivo listos para responder tus preguntas de configuración al instante.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluido">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Depósitos</div>
      <h2 class="section-title">Financia tu cuenta con métodos que ya conoces</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Tarjetas, monederos electrónicos y transferencias bancarias — todo protegido con cifrado SSL de 256 bits.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Métodos de depósito y financiación aceptados">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>Transferencia bancaria</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Protegido por SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Infraestructura fiable</div>
        <h2 class="section-title">Con socios de nivel industrial</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Comentarios de usuarios</div>
        <h2 class="section-title">Lo que dicen los traders sobre <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Comentarios honestos de nuestra comunidad global multi-mercado.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrellas">★★★★★</div>
            <p class="review-text">
              Como principiante, la cripto me intimidaba. <?= e(SITE_NAME) ?> hizo que el panel fuera tan intuitivo que me sentí seguro en minutos. El análisis de IA es clarísimo.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Operador minorista verificado · Reino Unido</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrellas">★★★★★</div>
            <p class="review-text">
              La interfaz limpia me ahorra horas. El filtrado con IA del ruido del mercado hasta las tendencias principales cambió la forma en que gestiono mis posiciones a diario.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Analista de activos cripto · Canadá</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrellas">★★★★★</div>
            <p class="review-text">
              La ejecución de baja latencia, junto con alertas inteligentes, me permite ajustar objetivos al instante sin tener que lanzar varios programas.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Gestor de portafolio privado · Alemania</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrellas">★★★★★</div>
            <p class="review-text">
              El soporte respondió en dos minutos mientras configuraba la verificación. Un marco de servicio excepcional, de nivel institucional.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Trader algorítmico · Francia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?>: impulsa a los traders con una arquitectura de IA de nivel institucional
        </h2>

        <p class="seo-intro">
          La interacción moderna con los activos exige una claridad total. Cuando los frameworks de datos están cargados
          de banners promocionales o con capas de interfaz pesadas, el rendimiento del usuario disminuye.
          <?= e(SITE_NAME) ?> resuelve la complejidad sistémica mediante un entorno core elegante y reactivo,
          optimizado para la ejecución estratégica a largo plazo. Cada módulo de la plataforma, desde el onboarding hasta
          la ejecución en vivo, se construye con el mismo principio: eliminar el ruido para que los datos subyacentes hablen
          por sí solos — sin renunciar a la profundidad que esperan los participantes con experiencia.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Activos crypto para operaciones <span>avanzados</span></h3>
            <p>
              La liquidez de blockchain cambia rápidamente, por lo que la infraestructura de baja latencia se vuelve crítica.
              <?= e(SITE_NAME) ?> conecta nodos personalizados con los principales centros de activos digitales,
              proporcionando bucles de feedback de precios en tiempo real.
              Las métricas visuales claras transforman estructuras multi-cadena caóticas en canales de datos organizados y legibles.
            </p>
            <p>
              Más allá de los flujos de precio, la plataforma contextualiza los cambios de volumen y la profundidad de liquidez
              para que los picos repentinos sean más fáciles de interpretar — no solo señales reactivas.
              Esta consistencia es especialmente importante en sesiones volátiles, cuando herramientas fragmentadas
              ralentizan las decisiones justo cuando más se necesita claridad.
            </p>
          </div>

          <div class="seo-block">
            <h3>Análisis neuronal del mercado <span>en profundidad</span></h3>
            <p>
              Los algoritmos automatizados analizan los datos de mercado entrantes para calcular cambios estructurales en forex
              y materias primas internacionales. <?= e(SITE_NAME) ?> transforma cálculos complejos en tendencias de datos claras
              que apoyan el juicio independiente en lugar de reemplazarlo.
            </p>
            <p>
              Como los modelos se ejecutan de forma continua en lugar de con un calendario fijo, los cambios de impulso aparecen
              cuando ocurren, en lugar de en un resumen con retraso. El resultado es una capa de investigación que apoya el juicio
              independiente y mantiene la decisión final en manos del usuario.
            </p>
          </div>

          <div class="seo-block">
            <h3>Configuración de cuenta <span>sin fricción</span></h3>
            <p>
              El cumplimiento no tiene por qué ser complicado. Nuestro proceso de registro estructurado protege la configuración privada
              mediante verificaciones seguras diseñadas para durar menos de tres minutos desde el inicio hasta el acceso al terminal.
            </p>
            <p>
              Cada campo del recorrido explica por qué se solicita, para que los principiantes nunca tengan que adivinar
              el propósito de un paso de verificación. Una vez enviado, los controles de identidad cifrados se ejecutan en segundo plano
              mientras el resto del panel permanece completamente accesible.
            </p>
          </div>

          <div class="seo-block">
            <h3>Controles de riesgo de calidad <span>institucional</span></h3>
            <p>
              El dimensionamiento de posiciones, los límites de exposición y los indicadores automáticos de volatilidad condensan
              herramientas históricamente reservadas para equipos profesionales en simples interruptores — para que los participantes nuevos
              hereden la disciplina diaria de traders con experiencia.
            </p>
            <p>
              Las alertas se pueden configurar por activo, para que la atención se dirija solo a los mercados que realmente lo merecen.
              Este enfoque centrado ayuda a evitar la fatiga de alertas, que a menudo lleva a ignorar notificaciones
              en plataformas menos selectivas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
        <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Centro de soporte</div>
        <h2 class="section-title">Preguntas frecuentes</h2>
        <p class="section-subtitle">Respuestas inmediatas y procedurales sobre el registro y el acceso a la plataforma.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>¿Cómo empiezo con <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Rellena el formulario de registro de arriba, sigue nuestro onboarding seguro paso a paso
              y activa la configuración de tu cuenta mediante nuestro sistema estructurado de procesamiento de pagos.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>¿Necesito experiencia avanzada en cripto?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              No. <?= e(SITE_NAME) ?> ofrece un modo de panel para principiantes, explicaciones analíticas automatizadas
              y espacios de trabajo simplificados para ayudar a los nuevos traders a operar con seguridad.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>¿Cuál es el requisito mínimo para operar?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              La activación base estándar es de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Esto sirve como capital operativo para las operaciones y permanece bajo tu control manual.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>¿Hay comisiones operativas ocultas?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              No. <?= e(SITE_NAME) ?> funciona con total transparencia de precios.
              No aplicamos márgenes de acceso inesperados a la plataforma ni cálculos de retiros ocultos.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>¿Cómo funciona el componente de inteligencia IA?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Los sistemas neuronales evalúan marcadores estadísticos profundos de volatilidad en múltiples capas del mercado,
              convirtiendo datos en bruto en líneas de tendencia simplificadas para una evaluación más fácil.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>¿Mis datos personales están completamente protegidos?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Sí. Cada flujo de la cuenta está protegido con SSL seguro y con protocolos criptográficos robustos
              para aislar completamente los rangos de datos privados.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2>¿Listo para experimentar la claridad de <?= e(SITE_NAME) ?>?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Únete a un sistema moderno optimizado para operaciones rápidas, protección de datos y acceso transparente.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Crea tu cuenta</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Crear cuenta gratuita';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
