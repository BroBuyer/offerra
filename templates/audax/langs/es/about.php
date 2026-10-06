<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Equipo | ' . SITE_NAME . ' - Nuestro equipo de expertos';
$page_description = 'Conoce al equipo detrás de ' . SITE_NAME . '.';
$page_canonical = page_url('about.php');
$active_page = 'about';
$page_css = ['team-mob.min.css', 'team-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>Nuestro equipo</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto del CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Consejero delegado (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto del socio" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Socio y vicepresidente de desarrollo de negocio</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto del CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Socio y director financiero (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto del socio director" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Socio director</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto del CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Director técnico (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto de la directora de producto" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Directora de producto</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Soporte cripto</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Atención al cliente y asistencia</h3>
              <p>
                El equipo de <?= e(SITE_NAME) ?> reúne a profesionales con experiencia. Nuestro objetivo era
                crear un entorno seguro, en el que cada uno pueda comprar criptomonedas como
                Bitcoin con total tranquilidad. La experiencia de nuestro equipo confirma que <?= e(SITE_NAME) ?> es
                fiable. ¿Una pregunta? Tu asesor dedicado está a tu disposición.
              </p>
            </div>
            <div class="half right">
              <h3>Horario de asistencia</h3>
              <p>
                En caso de problemas o preguntas, el servicio de atención al cliente de <?= e(SITE_NAME) ?> está a tu disposición
                las 24 horas. Si no podemos responder de inmediato, el equipo se pondrá en contacto contigo lo antes
                posible.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Confían en nosotros</h2>
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
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
