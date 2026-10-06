<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Preguntas frecuentes | ' . SITE_NAME . ' - FAQ';
$page_description = 'Preguntas frecuentes sobre ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';
$page_css = ['faq-mob.min.css', 'faq-desk.min.css'];
$page_js = ['faq.min.js'];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <h1>Preguntas frecuentes</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>¿Qué es <?= e(SITE_NAME) ?> y cómo funciona?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Nos preguntan a menudo: «¿Qué es exactamente <?= e(SITE_NAME) ?>?» Es una plataforma de trading
                avanzada, impulsada por inteligencia artificial. Usar la IA de <?= e(SITE_NAME) ?> es
                sencillo: regístrate, ingresa en la cuenta (mín. <?= e(money_min()) ?>) y la plataforma
                empieza a operar. En cualquier momento puedes ingresar más o retirar los fondos.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>¿Cuál es el depósito mínimo en <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                El depósito mínimo es de <?= e(money_min()) ?>. Con este importe puedes probar la plataforma y
                empezar a operar sin una gran inversión. Si quieres, puedes ingresar más
                o retirar las ganancias en cualquier momento.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>¿En qué mercados opera <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> está activa en varios mercados financieros, en particular criptomonedas
                (Bitcoin, Ethereum, XRP, Litecoin, Dash, etc.), acciones, divisas (Forex) y
                otros activos financieros.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>¿Es fiable <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Preguntarse si <?= e(SITE_NAME) ?> es legítima es del todo lícito. Lo
                confirmamos: <?= e(SITE_NAME) ?> es una plataforma de trading plenamente legal y fiable <?= e(geo_in()) ?>. No
                es una estafa ni un fraude. La seguridad de los fondos de los usuarios es nuestra prioridad
                absoluta y los retiros se procesan con rapidez (en un plazo de 24&ndash;48 horas).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>¿Cómo funciona <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> usa inteligencia artificial avanzada para analizar los mercados en tiempo
                real e identificar oportunidades de trading rentables. Los numerosos comentarios positivos sobre
                <?= e(SITE_NAME) ?> que se encuentran en internet confirman la eficacia de este enfoque.
                El sistema gestiona el capital de forma automática, de modo que puedes aspirar a un rendimiento potencial
                incluso sin un conocimiento profundo de los mercados.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>¿Cómo podemos ayudarte?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Únete';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
