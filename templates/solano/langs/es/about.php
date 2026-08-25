<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ about';
$page_description = SITE_NAME;
$page_canonical = page_url('about.php');
$active_page = 'about';
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
    <span class="gao17">La plataforma</span>
    <h1>Una sola cuenta, una visión clara de tu dinero trabajando.</h1>
    <p class="dv060"><?= e(SITE_NAME) ?> reúne tu saldo, tu estrategia y tu rendimiento en un único panel transparente, para que cada decisión de inversión esté respaldada por datos claros.</p>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>04</b><i></i></div>
    <h2>Normativa, riesgo y lo que no prometemos</h2>
    <p>Invertir conlleva riesgo y ninguna plataforma lo elimina. Lo que sí puede hacer una plataforma es ser honesta contigo: publicar sus condiciones, mantener el dinero de los clientes con socios de pago regulados y documentar cómo funcionan las retiradas.</p>
    <ul class="yrffsy1">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Verificación de identidad antes de que una cuenta pueda mover dinero.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Las retiradas vuelven al mismo método por el que llegó el depósito.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Términos, aviso de riesgo y política de privacidad publicados en su totalidad.</span></li>
    </ul>
    <p class="ompcol">Invertir implica riesgo, incluida la posible pérdida de parte o de todo el capital invertido. El valor de las inversiones puede subir o bajar, y podrías recuperar menos de lo que aportaste inicialmente. No inviertas dinero que no puedas permitirte perder.</p>
    <div class="exet93j">
      <a class="rs0voj6 ggca24u" href="/#ej3hu">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="rs0voj6 krccqy8" href="<?= page_url('contacts.php') ?>">Enviar mensaje</a>
    </div>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>03</b><i></i></div>
    <h2>Las personas detrás de tu cuenta</h2>
    <p>Detrás de la interfaz hay analistas que viven de leer los mercados, ingenieros que mantienen la plataforma en marcha y especialistas de soporte que responden en tu idioma.</p>
    <ul class="yrffsy1">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Analistas de mercado que revisan las condiciones a diario, no una vez al trimestre.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingenieros de guardia para la plataforma, con supervisión permanente.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Especialistas de soporte que gestionan el registro, la verificación y las retiradas.</span></li>
    </ul>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>01</b><i></i></div>
    <h2>Nuestra misión</h2>
    <p>La mayoría de las personas que quieren invertir nunca empiezan, porque cada camino parece pensado para alguien que ya conoce el vocabulario. Nosotros construimos lo contrario: una sola cuenta, lenguaje claro y un especialista al que realmente puedes contactar.</p>
    <p>Sin jerga donde basta una frase sencilla, sin comisiones que aparecen solo después de mover el dinero, y sin promesas de rentabilidad que nadie puede hacer honestamente.</p>
    <div class="lhjkw4k">
      <div class="bk826hi"><b class="uk56b">19.600</b><span>Usuarios activos</span></div>
      <div class="bk826hi"><b class="uk56b">€4,9B</b><span>Volumen operado</span></div>
      <div class="bk826hi"><b class="uk56b">24/7</b><span>Soporte</span></div>
    </div>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>02</b><i></i></div>
    <h2>Cómo nació la plataforma</h2>
    <ol class="nil55">
      <li><h3>El punto de partida</h3><p>Un pequeño grupo de analistas e ingenieros escuchaba siempre la misma queja: las herramientas existen, pero nadie las explica.</p></li>
      <li><h3>La primera versión funcional</h3><p>La primera versión hacía una sola cosa: mostrar un saldo y una posición en términos claros. Todo lo demás se eliminó hasta que esa parte quedó bien resuelta.</p></li>
      <li><h3>Incorporando el lado humano</h3><p>La automatización responde qué y cuándo; las personas responden por qué. Se incorporaron especialistas de soporte para que cada miembro tuviera a quién preguntar.</p></li>
      <li><h3>Llegando a más mercados</h3><p>Métodos de pago locales, idiomas locales y horarios de soporte locales.</p></li>
      <li><h3>Dónde estamos ahora</h3><p>Los mismos principios, a mayor escala: cifras transparentes, personas accesibles y sin sorpresas en la letra pequeña.</p></li>
    </ol>
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
