<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Producto | ' . SITE_NAME . ' - Plataforma de trading IA';
$page_description = SITE_NAME . ' : plataforma de IA avanzada para las criptomonedas ' . geo_in() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Con <?= e(SITE_NAME) ?>, el análisis digital te ayuda a hacer crecer el patrimonio
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Gracias a una inteligencia artificial de primer nivel y a algoritmos avanzados, <?= e(SITE_NAME) ?>
              analiza de forma continua los mercados globales. La plataforma identifica así con rapidez
              las oportunidades más prometedoras. Es el momento de dar el paso hacia el éxito con
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Empieza</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Tu plataforma de trading digital todo en uno</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Ventaja 1"
                  />
                </div>
                <h3>Gestión de criptomonedas</h3>
                <p>Gestiona con facilidad todos tus activos digitales en un solo lugar.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="Ventaja 2"
                  />
                </div>
                <h3>Consulta la información de todos tus activos desde una única plataforma y una única interfaz</h3>
                <p>Optimiza la gestión financiera con una visión de conjunto clara.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="Ventaja 3"
                  />
                </div>
                <h3>Mercados de capitales</h3>
                <p>Mantente un paso por delante gracias a datos y análisis en tiempo real.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="Ventaja 4"
                  />
                </div>
                <h3>Acceso móvil</h3>
                <p>
                  Nuestro sitio móvil completamente optimizado te permite seguir la cartera en cualquier momento, estés donde estés.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="Ventaja 5"
                  />
                </div>
                <h3>Estadísticas en directo</h3>
                <p>
                  Sigue rendimientos y análisis con una precisión excepcional, cada segundo del
                  día.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              Descarga la app hoy y gestiona tus finanzas en tiempo real desde el smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Regístrate</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Descubre el análisis de IA de vanguardia de la plataforma <?= e(SITE_NAME) ?> y una interfaz de trading
            de activos intuitiva <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Función 1" />
              </div>
              <div class="text">
                <h4>Cartera</h4>
                <p>
                  Refuerza tu perfil financiero con nuestras estrategias de trading contrastadas e
                  innovadoras.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Función 2" />
              </div>
              <div class="text">
                <h4>Análisis cripto</h4>
                <p>
                  Aprovecha la última generación de inteligencia artificial <?= e(SITE_NAME) ?> y sus
                  algoritmos avanzados de aprendizaje automático para identificar con rapidez las oportunidades rentables.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Función 3" />
              </div>
              <div class="text">
                <h4>Compra simplificada</h4>
                <p>
                  Ofrecemos funciones avanzadas y acompañamiento para negociar las criptomonedas
                  de forma sencilla e intuitiva. Sin costes ocultos, ejecución ultrarrápida. Es tu
                  ocasión de maximizar las ganancias de trading con la potencia de la IA.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Función 4" />
              </div>
              <div class="text">
                <h4>Activos digitales</h4>
                <p>
                  Aprovecha la ocasión de maximizar los beneficios del trading de activos, ya sean
                  criptomonedas u otros instrumentos. Construye una cartera diversificada con nuestro software
                  y nuestros algoritmos de aprendizaje automático. Es el momento de dar el paso y empezar
                  tu recorrido de trading.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
