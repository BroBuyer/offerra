<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ sign-up';
$page_description = SITE_NAME;
$page_canonical = page_url('sign.php');
$active_page = 'sign';
require __DIR__ . '/includes/head.php';
?>
<header class="dx8ngh3">
  <div class="nrzt44 yd4epmn">
    <a class="jfbcnp" href="<?= page_url() ?>"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="28" height="28" decoding="async" title="<?= e(SITE_NAME) ?>" loading="eager"><?= e(SITE_NAME) ?></a>
    <nav class="gjm518" aria-label="Principal">
      <button class="nnzfxkg" type="button" aria-label="Cerrar menú">&times;</button>
      <a href="<?= page_url('product.php') ?>">Cómo funciona</a>
      <a href="#iei3g">Mercados en vivo</a>
      <a href="<?= page_url('offer.php') ?>">Por qué nosotros</a>
      <a href="<?= page_url('pricing.php') ?>">Pricing</a>
      <a href="<?= page_url('faq.php') ?>">FAQ</a>
      <a href="<?= page_url('blog.php') ?>">Blog</a>
      <a href="<?= page_url('about.php') ?>">About</a>
      <span class="iiao6"><details><summary>Legal</summary><ul><li><a href="<?= page_url('privacy.php') ?>">Privacidad</a></li><li><a href="<?= page_url('conditions.php') ?>">Términos</a></li><li><a href="<?= page_url('risk-disclosure.php') ?>">Aviso de riesgo</a></li><li><a href="<?= page_url('report-abuse.php') ?>">Denunciar abuso</a></li><li><a href="<?= page_url('privacy.php') ?>">Política de cookies</a></li><li><a href="<?= page_url('conditions.php') ?>">Política de retiradas</a></li><li><a href="<?= page_url('conditions.php') ?>">Depósitos y retiradas</a></li><li><a href="<?= page_url('conditions.php') ?>">KYC y prevención de blanqueo</a></li><li><a href="<?= page_url('conditions.php') ?>">Licencias</a></li></ul></details></span><a class="rs0voj6 ggca24u sstr1ao" href="#jsyo6">Abre tu cuenta</a>
    </nav>
    <div class="hdhwxf" hidden></div>
    <div class="eesqjj4">
      <a class="rs0voj6 ggca24u" href="#jsyo6">Abre tu cuenta</a>
      <button class="vuppvr" aria-label="Abrir menú" aria-expanded="false" type="button">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
      </button>
    </div>
  </div>
</header>
<main id="top">


<section class="irywg3">
  <div class="nrzt44">
    <span class="gao17">Empieza ahora</span>
    <h1>Abre tu cuenta</h1>
    <p class="dv060">Unos pocos datos para empezar, y después un especialista se encarga del resto. No se realiza ningún cobro en este paso.</p>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>02</b><i></i></div>
    <h2>Qué ocurre después</h2>
    <ol class="nil55">
      <li><h3>Envías el formulario</h3><p>Lleva alrededor de un minuto y no cuesta nada.</p></li>
      <li><h3>Un especialista te llama</h3><p>Confirma tus datos, responde tus dudas y te explica el siguiente paso. Sin presión para depositar.</p></li>
      <li><h3>Verificas tu identidad y eliges un importe</h3><p>Solo entonces se mueve dinero, y solo la cantidad que tú elijas.</p></li>
    </ol>
    <p class="ompcol">Invertir implica riesgo, incluida la posible pérdida de parte o de todo el capital invertido. El valor de las inversiones puede subir o bajar, y podrías recuperar menos de lo que aportaste inicialmente. No inviertas dinero que no puedas permitirte perder.</p>
    <div class="exet93j">
      <a class="rs0voj6 ggca24u" href="/#ej3hu">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="rs0voj6 krccqy8" href="<?= page_url('faq.php') ?>">Preguntas frecuentes.</a>
    </div>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44 kosim">
    <h2>Qué ocurre después de enviar el formulario</h2>
    <h3>The verification call</h3>
    <p>A specialist calls to confirm the details you submitted, answer questions and agree what a sensible starting amount looks like for you. The call is a conversation, not a sales script — an account that is opened on unrealistic expectations is no use to anybody.</p>
    <h4>How long it takes</h4>
    <p>Usually one call of ten to fifteen minutes. If you would rather be called at a specific time, say so in the form and that time is respected.</p>
    <h3>Identity checks explained</h3>
    <p>Before the first deposit you will be asked for a photo ID and a recent document showing your address. This is the same requirement any regulated financial service has, and it exists so that a withdrawal can only ever return to you.</p>
    <h4>What is accepted</h4>
    <p>A passport or national ID card, and a utility bill or bank statement issued within the last three months. A clear photo taken on a phone is fine.</p>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>01</b><i></i></div>
    <h2>Qué necesitas</h2>
    <ul class="yrffsy1">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un correo electrónico que realmente revises.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un número de teléfono, para que un especialista pueda contactarte.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un documento de identidad, para la verificación posterior.</span></li>
    </ul>
  </div>
</section>


</main>
<footer class="jpbm9">
  <div class="nrzt44">
    <div class="zrxvw">
      <div>
        <a class="jfbcnp" href="<?= page_url() ?>"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="28" height="28" decoding="async" title="<?= e(SITE_NAME) ?>" loading="eager"><?= e(SITE_NAME) ?></a>
        <p>Invierte con disciplina y haz crecer tu patrimonio. Capital en riesgo — invierte de forma responsable.</p>
      </div>
      <div data-u="footcol"><h2 class="ublsk0">Soporte</h2><ul class="nxy95">
        <li><a href="<?= page_url('contacts.php') ?>">Enviar mensaje</a></li><li><a href="<?= page_url('faq.php') ?>">Preguntas frecuentes.</a></li><li><a href="<?= page_url('report-abuse.php') ?>">Denunciar abuso</a></li>
      </ul></div>
      <div data-u="footcol"><h2 class="ublsk0">Empresa</h2><ul class="nxy95">
        <li><a href="<?= page_url('about.php') ?>">About</a></li><li><a href="<?= page_url('pricing.php') ?>">Pricing</a></li><li><a href="<?= page_url('contacts.php') ?>">Contacto</a></li><li><a href="<?= page_url('sign.php') ?>">Abre tu cuenta</a></li>
      </ul></div>
      <div data-u="footcol"><h2 class="ublsk0">Producto</h2><ul class="nxy95">
        <li><a href="<?= page_url('product.php') ?>">Cómo funciona.</a></li><li><a href="#iei3g">Mercados en vivo</a></li><li><a href="<?= page_url('offer.php') ?>">Por qué nosotros</a></li><li><a href="<?= page_url('faq.php') ?>">FAQ</a></li>
      </ul></div>
    </div>
    <div class="nfphf">
      <div class="vmfqj">
        <a href="<?= page_url('blog.php') ?>">Blog</a><a href="<?= page_url('privacy.php') ?>">Privacidad</a><a href="<?= page_url('conditions.php') ?>">Condiciones de uso</a><a href="<?= page_url('risk-disclosure.php') ?>">Divulgación de riesgos</a><a href="<?= page_url('report-abuse.php') ?>">Denunciar abuso</a>
      </div>
      © <span id="okm3tz"></span> <?= e(SITE_NAME) ?>. Todos los derechos reservados. Invertir implica riesgo, incluida la posible pérdida de capital. · Invertir implica riesgo, incluida la posible pérdida de parte o de todo el capital invertido. El valor de las inversiones puede subir o bajar, y podrías recuperar menos de lo que aportaste inicialmente. No inviertas dinero que no puedas permitirte perder.
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
