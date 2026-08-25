<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ how-it-works';
$page_description = SITE_NAME;
$page_canonical = page_url('product.php');
$active_page = 'product';
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
    <span class="gao17">Cómo funciona</span>
    <h1>Del primer clic a tu primera posición</h1>
    <p class="dv060">Todo el recorrido, de principio a fin, sin nada dado por hecho. Configurarlo lleva minutos y tú decides cada importe en el camino.</p>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44 kosim">
    <h2>Lo que más se pregunta</h2>
    <h3>Quién está al otro lado</h3>
    <p>Cada cuenta tiene asignado un único especialista, no un equipo rotativo, así que la persona con la que hablas en el tercer mes es la misma que preparó todo en el primero. Repasa el plan contigo, explica qué hace cada paso y responde a tus preguntas en lenguaje claro.</p>
    <h4>Lo que no hará</h4>
    <p>No ejecutará nada sin tu instrucción y no te presionará para aumentar tu saldo. Si alguna llamada te da esa sensación, dilo: no es así como debe funcionar el servicio.</p>
    <h3>Seguir lo que ocurre después</h3>
    <p>El panel muestra el saldo, las posiciones abiertas y cada movimiento de entrada y salida, con las mismas cifras que aparecen en el extracto. Nada se resume en un único número que oculte el detalle.</p>
    <h4>Cómo retirar tu dinero</h4>
    <p>Una retirada se solicita desde el mismo panel y regresa al método con el que pagaste. No hay periodo mínimo de permanencia ni ningún cargo por nuestra parte por solicitarla.</p>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>03</b><i></i></div>
    <h2>Qué ocurre después de registrarte</h2>
    <p>El registro es la parte pequeña. Esto es todo lo demás, en el orden en que ocurre realmente.</p>
    <ul class="yrffsy1">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un especialista te contacta para confirmar tus datos y responder tus dudas.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Verificas tu identidad, un paso estándar antes de mover cualquier dinero.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Eliges un importe inicial. Nadie lo decide por ti.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Puedes practicar con un saldo de demostración antes de operar en real.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Las retiradas vuelven a tu método de depósito, con un plazo de procesamiento indicado.</span></li>
    </ul>
    <div class="exet93j">
      <a class="rs0voj6 ggca24u" href="/#ej3hu">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="rs0voj6 krccqy8" href="<?= page_url('faq.php') ?>">Preguntas frecuentes.</a>
    </div>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>01</b><i></i></div>
    <h2>Cómo funciona.</h2>
    <p>IA moderna y un analista humano real, trabajando juntos, para ayudarte a construir un ingreso adicional, guiado en cada paso.</p>
    <ol class="nil55" itemscope itemtype="https://schema.org/HowTo">
      <meta itemprop="name" content="Cómo funciona."/>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Crea tu cuenta</h3><p itemprop="text">Regístrate en minutos con solo tu correo electrónico.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Verifica tu correo</h3><p itemprop="text">Confirma tu dirección para proteger tu cuenta.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Deposita fondos</h3><p itemprop="text">Ingresa desde <?= e(money_min()) ?> como depósito mínimo, a tu manera.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Define tu estrategia</h3><p itemprop="text">Elige tus objetivos; tu analista adapta el plan.</p></li>
      <li itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <h3 itemprop="name">Empieza a invertir</h3><p itemprop="text">Sigue las señales guiadas y crece a tu propio ritmo.</p></li>
    </ol>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>02</b><i></i></div>
    <h2>Qué puedes invertir</h2>
    <p>Una sola cuenta cubre varias clases de activos, así que no tendrás que abrir una segunda plataforma en cuanto crezcan tus intereses.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="ir9vo8m">
      <thead><tr><th scope="col">Asset class</th><th scope="col">Examples</th><th scope="col">Good to know</th></tr></thead>
      <tbody>
        <tr><td>Cryptocurrency</td><td>BTC, ETH, SOL, XRP</td><td>Trades around the clock, including weekends.</td></tr>
        <tr><td>Currencies</td><td>EUR/USD, GBP/USD</td><td>Follows the main session hours.</td></tr>
        <tr><td>Indices</td><td>S&P 500, DAX</td><td>Broad exposure without picking single companies.</td></tr>
        <tr><td>Commodities</td><td>Gold, oil</td><td>Often used to balance a portfolio.</td></tr>
      </tbody>
    </table></div>
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
