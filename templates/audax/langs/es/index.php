<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Inversión inteligente con IA ' . geo_in();
$page_description = 'Trading automatizado ' . geo_in() . '. Empieza con ' . money_min() . ' gracias a nuestra tecnología de IA. Seguro, transparente y sencillo.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1>Plataforma <?= e(SITE_NAME) ?></h1>
              <p>
                ¿Qué distingue a <?= e(SITE_NAME) ?>? Es la ocasión de invertir con más inteligencia
                <?= e(geo_in()) ?>. Nuestra plataforma de trading fiable, asistida por IA, te ayuda a decidir con criterio
                y a gestionar el riesgo. Descubre lo que la IA de <?= e(SITE_NAME) ?> puede aportarte.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Valorada con 4,7 estrellas por más de 2.804 usuarios satisfechos</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Valoración 4,7 de 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Únete a <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Únete';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Al introducir tus datos personales y pulsar el botón «Únete»,
                    confirmas que aceptas los
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Política de privacidad</a> y los
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Condiciones de uso</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Métodos de pago" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Valorada con 4,7 estrellas por más de 2.804 usuarios satisfechos</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Valoración 4,7 de 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Calculadora de ganancias">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Calcula tus ganancias potenciales</h2>
          <p class="calc-widget__subtitle">
            Elige el importe y la duración de tu inversión para estimar tus ganancias potenciales
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Tu depósito:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Duración de la inversión:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>días</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>Desde 1 día</span>
                  <span>Hasta 3 meses</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Puedes ganar</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Rentabilidad</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Ganancias</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Solicitar un cálculo personalizado
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Cerrar">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Deja tus datos de contacto: uno de nuestros especialistas se pondrá en contacto contigo lo antes
              posible.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Únete';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Tu acceso <?= e(geo_from()) ?> a las principales plataformas de trading cripto.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Icono 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> se sirve de la inteligencia artificial y del aprendizaje automático para
                    identificar nuevas oportunidades en los mercados financieros.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Icono 2" />
                </div>
                <div class="text">
                  <p>
                    Los inversores en criptoactivos <?= e(geo_in()) ?> acceden a las mayores plataformas de intercambio del
                    sector y pueden negociar activos de referencia como Bitcoin y Ethereum, además de un
                    amplio abanico de altcoins y stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Nuestros partners de confianza</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logo Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logo Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logo CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logo TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logo Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logo Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logo Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logo Nansen" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>¿Por qué elegir <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Icono de ventaja 1" />
              </div>
              <div class="text">
                <h3>Seguridad <?= e(geo_in()) ?></h3>
                <p>
                  Como plataforma reconocida, situamos la seguridad en primer lugar. Usamos SSL,
                  cifrado de nivel bancario y 2FA para garantizar la fiabilidad de <?= e(SITE_NAME) ?> y la protección
                  de tus datos.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Icono de ventaja 2" />
              </div>
              <div class="text">
                <h3>Algoritmos de IA potentes</h3>
                <p>
                  Nuestros bots se adaptan, aplican estrategias de IA avanzadas y las ejecutan de forma autónoma. Tú
                  defines el enfoque y mantienes el control sobre el riesgo, los mercados y los objetivos, para
                  concentrarte en lo esencial.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Icono de ventaja 3" />
              </div>
              <div class="text">
                <h3>Comisiones transparentes. Sin costes ocultos.</h3>
                <p>
                  Todas las comisiones son transparentes y nunca cobramos a los inversores <?= e(geo_in()) ?> por usar
                  <?= e(SITE_NAME) ?>. El dinero que depositas para hacer trading es enteramente tuyo: lo usas
                  como prefieras. No retenemos nada. Empieza ya desde <?= e(money_min()) ?> y conserva el control total
                  de tus inversiones.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Icono de ventaja 4" />
              </div>
              <div class="text">
                <h3>Interfaz intuitiva</h3>
                <p>
                  Nuestro panel sencillo e intuitivo combina funcionalidad, rigor y
                  facilidad de uso, para principiantes y traders con experiencia.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>¿Cómo funciona <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icono de lista 1" />
              <p>
                Nuestro software propietario supervisa en paralelo varias plataformas de trading e
                identifica las diferencias de precio aprovechables.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icono de lista 2" />
              <p>
                <?= e(SITE_NAME) ?> compra a la baja en un mercado y vende a un precio más alto en otro,
                aprovechando las oportunidades de arbitraje. Este enfoque puede generar un beneficio
                acumulando los rendimientos de los pequeños movimientos de precio.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icono de lista 3" />
              <p>Descubre cómo <?= e(SITE_NAME) ?> puede mejorar tu experiencia de trading.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Únete a <?= e(SITE_NAME) ?> y construyamos juntos el futuro de las finanzas <?= e(geo_in()) ?>.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> ofrece una amplia gama de herramientas para negociar criptoactivos <?= e(geo_in()) ?>. La plataforma
                integra las principales plazas de intercambio mundiales y da acceso a numerosas
                criptomonedas, desde líderes como Bitcoin hasta otras como XRP. También te permite
                aprovechar las variaciones de precio.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Únete';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>Carlos, 37 años, Madrid</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valoración 1"
                />
              </div>
              <p class="review-text">
                Empecé con <?= e(money_min()) ?> y ahora retiro <?= e(currency_symbol() . '2,000') ?> al mes.
              </p>
            </div>
            <div class="review">
              <h3>Laura, 42 años, Barcelona</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valoración 2"
                />
              </div>
              <p class="review-text">Plataforma sencilla: todo es transparente y concreto.</p>
            </div>
            <div class="review">
              <h3>Ana, 45 años, Valencia</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valoración 3"
                />
              </div>
              <p class="review-text">La mejor solución para un ingreso pasivo.</p>
            </div>
            <div class="review">
              <h3>Javier, 34 años, Sevilla</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valoración 4"
                />
              </div>
              <p class="review-text">Ganancias estables, incluso cuando estoy de vacaciones.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>La oferta cripto de <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Ventaja 1"
                />
                <h3>La clave del trading cripto</h3>
                <p>
                  Nuestro software de última generación es el corazón del sistema de trading. Está
                  diseñado para aprovechar las pequeñas diferencias de precio entre las principales plazas
                  de intercambio de criptomonedas.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Ventaja 2"
                />
                <h3>Trading de activos a escala global</h3>
                <p>
                  Los precios de las acciones y de otros activos evolucionan sin cesar; <?= e(SITE_NAME) ?> proporciona las
                  herramientas para reaccionar con rapidez a los movimientos de mercado y mejorar las probabilidades de rendimientos
                  sólidos.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Ventaja 3"
                />
                <h3>Trading Forex</h3>
                <p>
                  Los tipos de cambio cambian sin tregua y crean oportunidades. <?= e(SITE_NAME) ?>
                  te ayuda a aprovechar incluso los movimientos más pequeños del mercado de divisas.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Ventaja 4"
                />
                <h3><?= e(SITE_NAME) ?> y Bitcoin</h3>
                <p>
                  Bitcoin sigue siendo el líder de mercado, la criptomoneda más visible y más estable
                  desde el punto de vista financiero. Al reconocer y aprovechar de forma sistemática la volatilidad,
                  <?= e(SITE_NAME) ?> facilita rendimientos más regulares.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Información de la plataforma</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privacidad</h3>
                  <p><?= e(SITE_NAME) ?> cumple la normativa aplicable en materia de privacidad <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Activos</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash y otras criptomonedas principales.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tipo de plataforma</h3>
                  <p>
                    <?= e(SITE_NAME) ?> ofrece a los inversores <?= e(geo_in()) ?> la posibilidad de aprovechar las variaciones de precio
                    de las principales criptomonedas, incluidos altcoins como XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Países</h3>
                  <p>Nuestra plataforma está disponible en todo el mundo, también <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Opciones de depósito</h3>
                  <p>Tarjetas de crédito, PayPal y transferencia bancaria.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Costes</h3>
                  <p>El acceso a <?= e(SITE_NAME) ?> es gratuito <?= e(geo_from()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2>¿Es fiable <?= e(SITE_NAME) ?>?</h2>
              <p>
                <?= e(SITE_NAME) ?> colabora con brókers de primer nivel, especialmente fiables y
                con amplia experiencia. Aplicamos medidas de seguridad de nivel bancario, como el cifrado TLS/SSL
                y la autenticación en dos factores (2FA), para proteger tus activos y tus datos. Nuestra
                estructura de precios es del todo transparente, sin costes ocultos. Cumplimos la
                normativa aplicable.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Gráfico de fiabilidad" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Nuestros sistemas de inteligencia artificial y aprendizaje automático generan un análisis de mercado
                en tiempo real y recomendaciones de trading concretas para optimizar los resultados.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Los mejores traders lo son por un motivo. Con <?= e(SITE_NAME) ?> puedes seguir
                    y copiar sus operaciones para aprovechar su experiencia y su estrategia.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Acciones fraccionadas</h3>
                  <p>
                    Al diversificar la cartera accedes a activos de calidad incluso con un
                    capital limitado.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Recursos formativos</h3>
                  <p>
                    Para avanzar ofrecemos recursos formativos: tutoriales,
                    webinarios y guías.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>App móvil</h3>
                  <p>Opera en cualquier momento, estés donde estés.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Asistencia 24 horas</h3>
                  <p>Nuestro servicio de atención al cliente está disponible 24 horas al día, 7 días a la semana.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading asistido por IA</h3>
                  <p>
                    Gracias a nuestros algoritmos avanzados de inteligencia artificial y aprendizaje automático,
                    <?= e(SITE_NAME) ?> analiza de forma continua los últimos datos de mercado. Las oportunidades
                    con mayor potencial de rentabilidad se identifican así con rapidez.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Estrategias personalizables</h3>
                  <p>
                    Una vez definidos el perfil de riesgo y los objetivos, puedes usarlos para
                    afinar la estrategia de trading en nuestra plataforma multi-activo.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Acceso a activos diversificados</h3>
                  <p>
                    Aunque nos especializamos en criptomonedas, también damos soporte al trading
                    de divisas, acciones, otros valores y materias primas.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>Puedes operar desde casa, analizar los mercados y seguir tus posiciones.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Únete';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Puedes operar desde casa, analizar los mercados y seguir tus posiciones.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Regístrate" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
