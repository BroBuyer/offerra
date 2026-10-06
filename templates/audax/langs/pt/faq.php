<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Perguntas frequentes | ' . SITE_NAME . ' - FAQ';
$page_description = 'Perguntas frequentes sobre ' . SITE_NAME . '.';
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
          <h1>Perguntas frequentes</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>O que é a <?= e(SITE_NAME) ?> e como funciona?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Perguntam-nos frequentemente: «O que é exatamente a <?= e(SITE_NAME) ?>?» É uma plataforma de trading
                avançada, impulsionada por inteligência artificial. Usar a IA da <?= e(SITE_NAME) ?> é
                simples: regista-te, deposita na conta (mín. <?= e(money_min()) ?>) e a plataforma
                começa a operar. A qualquer momento podes depositar mais ou levantar os fundos.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Qual é o depósito mínimo na <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                O depósito mínimo é de <?= e(money_min()) ?>. Com este montante podes experimentar a plataforma e
                começar a operar sem um grande investimento. Se quiseres, podes depositar mais
                ou levantar os ganhos a qualquer momento.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Em que mercados opera a <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                A <?= e(SITE_NAME) ?> está ativa em vários mercados financeiros, em particular criptomoedas
                (Bitcoin, Ethereum, XRP, Litecoin, Dash, etc.), ações, divisas (Forex) e
                outros ativos financeiros.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>A <?= e(SITE_NAME) ?> é fiável?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Perguntar se a <?= e(SITE_NAME) ?> é legítima é perfeitamente lícito. Confirmamo-lo:
                a <?= e(SITE_NAME) ?> é uma plataforma de trading plenamente legal e fiável <?= e(geo_in()) ?>. Não
                é um esquema nem uma fraude. A segurança dos fundos dos utilizadores é a nossa prioridade
                absoluta e os levantamentos são processados com rapidez (no prazo de 24&ndash;48 horas).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Como funciona a <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                A <?= e(SITE_NAME) ?> usa inteligência artificial avançada para analisar os mercados em tempo
                real e identificar oportunidades de trading rentáveis. Os numerosos comentários positivos sobre a
                <?= e(SITE_NAME) ?> que se encontram na internet confirmam a eficácia desta abordagem.
                O sistema gere o capital de forma automática, de modo a que possas aspirar a um rendimento potencial
                mesmo sem um conhecimento aprofundado dos mercados.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Como podemos ajudar-te?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Junta-te';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
