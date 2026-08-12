<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('IA y ejecución en tiempo real | Sitio oficial');
$page_description = SITE_NAME . ' — tecnología de IA que analiza mercados y ejecuta órdenes en tiempo real, con un analista personal a tu lado para construir una nueva fuente de ingresos.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Saltar al contenido</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Principal">
 <a href="#platform">Producto</a>
 <a href="#how">Cómo funciona.</a>
 <a href="#markets">Mercados en tiempo real</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Abre tu cuenta</a>
 <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">IA en tiempo real + análisis humano</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — invierte ahora, mira crecer tu capital</h1>
 <p class="hero-sub">Un motor de inteligencia artificial escanea los mercados y ejecuta órdenes en fracciones de segundo, mientras tu analista personal ajusta cada decisión a tu perfil. Sin experiencia necesaria — te guían de principio a fin.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulado</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Fondos segregados</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 clientes</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> valoración</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Protegido por SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Soporte 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Ejecución rápida</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Empieza ahora — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> mín.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Abre tu cuenta</h2>
 <p class="sub">Empieza en pocos minutos.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Quiero empezar';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Indicadores clave">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Usuarios activos</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Volumen negociado</span></div>
 <div class="stat"><b>99,1%</b><span>Disponibilidad de las señales</span></div>
 <div class="stat"><b>24/7</b><span>Soporte</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Dentro de <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Sigue tu cuenta en tiempo real</h2>
 <p class="lede">Cada orden ejecutada por tu analista se registra aquí — entradas, salidas y resultados verificados en cada par, transmitidos en vivo.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gráficos de velas y profundidad en tiempo real, en cualquier dispositivo</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Envío de órdenes con un toque y confirmación instantánea</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Listas de seguimiento y alertas de precio que te acompañan</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Empezar ahora</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — trading móvil con gráficos de criptomonedas en tiempo real</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">La plataforma</span><h2 id="features-title">Todo lo que necesitas, en una sola plataforma rápida.</h2><p class="lede">Sin gráficos que vigilar, sin órdenes que cronometrar. El motor de <?= e(SITE_NAME) ?> monitoriza los libros de órdenes en tiempo real en exchanges de criptomonedas, APIs de acciones globales y los principales pares de forex — y dispara órdenes en el instante en que los modelos encuentran una configuración ventajosa.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Ejecución en fracciones de segundo en cada plaza conectada</h3><p><?= e(SITE_NAME) ?> mantiene conexiones API de baja latencia con cada exchange compatible. Cuando el modelo emite una señal, la orden se enruta, se ejecuta y se registra en tu panel antes del siguiente tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Activa las 24 horas, en todas las sesiones</h3><p>El mercado crypto nunca duerme, y el motor de <?= e(SITE_NAME) ?> tampoco. Sigue escaneando pares durante fines de semana y festivos, para que nunca pierdas una ventana.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Informes en múltiples monedas</h3><p>Cada saldo, cada orden, cada retiro aparece en tu moneda local. Ningún paso oculto de conversión.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Capital segregado</h3><p>Tus fondos permanecen en tu propia cuenta. <?= e(SITE_NAME) ?> nunca tiene la custodia — el motor solo tiene permiso para enrutar órdenes.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Seguridad de nivel bancario</h3><p>Cifrado TLS en toda la plataforma, autenticación en dos pasos por defecto y auditorías trimestrales de infraestructura por terceros. Recibos de operaciones registrados en blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Tres clases de activos, una sola plataforma</h3><p>La mayoría de las plataformas minoristas se limitan a un solo mercado. <?= e(SITE_NAME) ?> opera cripto, acciones cotizadas y los principales pares de forex en el mismo panel.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Límites de riesgo predefinidos en cada posición</h3><p>Stop-loss, drawdown máximo y límites de asignación de capital se configuran por clase de activo. El motor sale automáticamente de cualquier operación que cruce un límite, y el evento se registra en tu historial de auditoría.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Mercados en tiempo real</span>
 <h2 id="markets-title">Opera Bitcoin, Ethereum y mucho más</h2>
 <p class="lede">Precios en tiempo real, indicadores avanzados y una visión profesional de los mercados que te interesan.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Quiero acceso a los mercados</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Mercados</span><span class="mkt-live"><i></i>En directo</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Cómo funciona</span><h2 id="how-title">Cómo funciona.</h2><p class="lede">Tecnología de punta y un analista humano de verdad, trabajando juntos en tiempo real, para ayudarte a construir una nueva fuente de ingresos — con orientación en cada etapa.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Crea tu cuenta</h3><p>Regístrate en minutos usando solo tu correo.</p></div>
 <div class="step"><div class="n">2</div><h3>Confirma tu correo</h3><p>Verifica tu dirección para proteger tu cuenta.</p></div>
 <div class="step"><div class="n">3</div><h3>Deposita en tu cuenta</h3><p>Añade fondos a partir de <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> a tu manera.</p></div>
 <div class="step"><div class="n">4</div><h3>Define tu estrategia</h3><p>Elige tus objetivos; tu analista personaliza el plan.</p></div>
 <div class="step"><div class="n">5</div><h3>Empieza a operar</h3><p>Sigue las señales guiadas y crece a tu ritmo.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Depósitos</span><h2 id="payment-title">Deposita con métodos que ya conoces</h2><p class="lede">Deposita y retira por canales seguros y familiares — sin comisiones ocultas.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Transferencia bancaria</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Lo que dicen los miembros</span><h2 id="reviews-title">Lo que dicen nuestros inversores</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>« Mi analista me lo explicó todo con claridad. Definí mis objetivos una sola vez, y ahora sigo exactamente cómo crece mi capital — sin ansiedad en cada movimiento. »</p><div class="who"><div class="ini">C</div><div><b>Carla Mendoza</b><span>Madrid</span></div></div></div>
 <div class="card"><p>« Nunca había invertido antes — mi analista cuidó la estrategia y explicó cada paso. Sin promesas vacías, sin presión, y los retiros llegan cuando se espera. »</p><div class="who"><div class="ini">P</div><div><b>Pablo Ruiz</b><span>Barcelona</span></div></div></div>
 <div class="card"><p>« Empecé con poco para probar. La transparencia y el soporte me dieron seguridad para seguir construyendo. »</p><div class="who"><div class="ini">L</div><div><b>Lucía Torres</b><span>Valencia</span></div></div></div>
 <div class="card"><p>« Los análisis me llegan — apruebo o ajusto en minutos. Encaja perfectamente en mi rutina, sin interferir en el trabajo. »</p><div class="who"><div class="ini">J</div><div><b>Javier Ortega</b><span>Sevilla</span></div></div></div>
 <div class="card"><p>« Lo que me conquistó fue la transparencia: cada decisión se explica, y veo el razonamiento antes de que ocurra nada. »</p><div class="who"><div class="ini">M</div><div><b>María Gómez</b><span>Bilbao</span></div></div></div>
 <div class="card"><p>« El soporte es de verdad y siempre accesible. Mi primer análisis fue práctico, y la plataforma ha sido firme y predecible desde entonces. »</p><div class="who"><div class="ini">M</div><div><b>Miguel Navarro</b><span>Málaga</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Plataforma</span><h2 id="capabilities-title">Funciones principales, en resumen</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Motor de IA</div>
 <div class="spec-v">Análisis avanzado de mercado con aprendizaje automático</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Formas de depósito</div>
 <div class="spec-v">Tarjeta de crédito, transferencia bancaria, PayPal, monederos digitales</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Acceso multiplataforma</div>
 <div class="spec-v">Web, tablet y móvil — totalmente responsive</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Precisión de las señales</div>
 <div class="spec-v">Hasta el 85% en las estrategias de IA compatibles</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Mercados</div>
 <div class="spec-v">Criptomonedas, forex, acciones y materias primas</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Registro</div>
 <div class="spec-v">Apertura de cuenta rápida con verificación guiada</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Soporte</div>
 <div class="spec-v">Atención profesional las 24 horas — <a href="<?= page_url('contacts.php') ?>">Enviar mensaje</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Dudas</span><h2 id="faq-title">Preguntas frecuentes.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>¿Cuál es el depósito mínimo?</summary><p>Abre y financia tu cuenta a partir del depósito mínimo. Puedes añadir saldo con el tiempo a medida que avanza tu plan.</p></details>
 <details><summary>¿Cómo funcionan los retiros?</summary><p>Solicita un retiro en cualquier momento desde el panel. Los fondos vuelven al método de pago elegido, respetando los plazos estándar de procesamiento.</p></details>
 <details><summary>¿Mi dinero está seguro?</summary><p>Las cuentas están protegidas con seguridad de nivel industrial y verificación rigurosa. Como en toda inversión, tu capital está en riesgo y los valores pueden bajar tanto como subir.</p></details>
 <details><summary>¿Con qué rapidez puedo empezar?</summary><p>La mayoría de los miembros completa el registro en pocos minutos. En cuanto se confirma tu primer depósito, se activa un plan de inmediato.</p></details>
 <details><summary>¿Hay comisiones ocultas?</summary><p>Los costes se muestran con transparencia antes de que te comprometas. Siempre sabrás exactamente qué se aplica a tu plan — ningún cargo sorpresa.</p></details>
 <details><summary>¿Cuál es la edad mínima para registrarse?</summary><p>Debes tener al menos 18 años para abrir una cuenta e invertir. Puede exigirse una verificación para confirmar tu edad e identidad.</p></details>
 <details><summary>¿Qué métodos de pago se admiten?</summary><p>Se admiten métodos habituales como tarjeta de débito y crédito, transferencia bancaria, monederos electrónicos seleccionados y criptomonedas. Las opciones exactas aparecen en el paso de depósito.</p></details>
 <details><summary>¿Cuándo está disponible el soporte al cliente?</summary><p>Nuestro equipo de soporte atiende de lunes a viernes, de 9:00 a 18:00, y se compromete a responder cada solicitud en un día hábil.</p></details>
 <details><summary>¿Cómo se tratan los impuestos?</summary><p>Los impuestos sobre ganancias de inversión dependen de las normas de tu país y son tu responsabilidad. Recomendamos guardar registros y consultar a un asesor fiscal cualificado.</p></details>
 <details><summary>¿Qué es el KYC y por qué es obligatorio?</summary><p>El KYC (Conozca a su cliente) es una verificación estándar de tu identidad. Mantiene las cuentas seguras y forma parte de la apertura de cualquier cuenta de inversión.</p></details>
 <details><summary>¿Necesito tener experiencia?</summary><p>No. Cada miembro recibe un analista financiero personal que le orienta en cada paso, así que no hace falta conocimiento previo de los mercados.</p></details>
 <details><summary>¿Quién gestiona mis inversiones?</summary><p>Un analista financiero dedicado, respaldado por herramientas de IA, trabajando en torno a tus objetivos y nivel de riesgo. El analista combina experiencia profesional con tecnología — las decisiones siguen siendo humanas.</p></details>
 <details><summary>¿La plataforma está regulada?</summary><p>Sí — cumple los estándares financieros y de ciberseguridad nacionales, con protección de cuenta y verificación rigurosa integradas.</p></details>
 <details><summary>¿Puedo añadir saldo después?</summary><p>Sí. Puedes aportar a tu cuenta en cualquier momento y ajustar tu plan con tu analista a medida que evolucionan tus objetivos.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">DE CONFIANZA</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Valoraciones</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> valoraciones · Basado en <b style="color:var(--text,#fff)">2.334</b> clasificaciones</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Empieza ahora</span>
 <h2 id="signup-title" class="cta-h">Abre tu cuenta.</h2>
 <p class="lede">Dinos cómo contactarte y un especialista te ayudará a dar el primer paso.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Abre tu cuenta</h3>
 <p class="sub">Empieza en pocos minutos.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Quiero empezar';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>Velocidad de IA, decisión humana. Capital en riesgo — invierte con responsabilidad.</p>
 </div>
 <div><h4>Producto</h4><div class="foot-links">
 <a href="#platform">Sigue tu cuenta en tiempo real</a><a href="#markets">Mercados en tiempo real</a><a href="#how">Cómo funciona.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Empresa</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Sobre nosotros</a><a href="<?= page_url('offer.php') ?>">Precios</a><a href="<?= page_url('contacts.php') ?>">Contacto</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privacidad</a><a href="<?= page_url('conditions.php') ?>">Términos</a><a href="<?= page_url('conditions.php') ?>">Divulgación de riesgos</a><a href="<?= page_url('contacts.php') ?>">Denunciar abuso</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Todos los derechos reservados. Invertir implica riesgo, incluida la posible pérdida de capital. · Invertir implica riesgo, incluida la posible pérdida de parte o de todo el capital invertido. El valor de las inversiones puede subir o bajar, y puedes recuperar menos de lo que aportaste. No inviertas dinero que no puedas permitirte perder.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('es-ES',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Espere, por favor\u2026";
 var MSG_ERR = "No se pudieron enviar tus datos ahora. Int\u00e9ntalo de nuevo.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'es',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Usamos cookies para mejorar tu experiencia.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Entendido</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
