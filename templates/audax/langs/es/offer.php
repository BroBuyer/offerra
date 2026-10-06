<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Oferta | ' . SITE_NAME . ' - Empieza tu recorrido';
$page_description = 'Empieza a operar en ' . SITE_NAME . '. Regístrate gratis ahora.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
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
              Abre hoy tu cuenta en <?= e(SITE_NAME) ?>. El panel de la cartera está
              listo.
            </h1>
            <p>
              En menos de 5 minutos creas la cuenta gratuita, haces un depósito y empiezas a
              operar. Empieza hoy: es la ocasión de construir un futuro financiero sólido.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Regístrate</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Cómo funciona</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Icono de apertura de cuenta" />
                <h3>Apertura de cuenta</h3>
                <p>
                  Puedes crear la cuenta en unos segundos. Accedes de inmediato a nuestras
                  herramientas de trading y a las oportunidades que te esperan.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Icono de depósito" />
                <h3>Deposita fondos</h3>
                <p>Deposita los fondos para empezar a operar.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Icono de compra y venta" />
                <h3>Compra y vende</h3>
                <p>
                  Refuerza la cartera con confianza. Entra en el mercado sin
                  dudar.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>¡No te lo pierdas! Únete a miles de traders que obtienen resultados.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Sigue la cartera con saldos actualizados y ganancias en tiempo real.</h3>
            </div>
            <div class="half right">
              <p>
                No te pierdas ningún detalle gracias al análisis en profundidad de <?= e(SITE_NAME) ?> sobre
                patrones de trading y datos siempre actualizados. Sigue todas las estadísticas clave
                — saldo, beneficios y variaciones de precio. Con estas herramientas
                maximizas los rendimientos y tomas decisiones de inversión con criterio. El futuro
                es ahora: empieza hoy.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Empieza</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
