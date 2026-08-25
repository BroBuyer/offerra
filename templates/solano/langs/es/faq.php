<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ faq';
$page_description = SITE_NAME;
$page_canonical = page_url('faq.php');
$active_page = 'faq';
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
    <span class="gao17">Preguntas</span>
    <h1>Preguntas, respondidas con claridad</h1>
    <p class="dv060">Lo que la gente pregunta antes de abrir una cuenta, y las respuestas que te daríamos por teléfono.</p>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>02</b><i></i></div>
    <h2>Preguntas sobre el dinero</h2>
    <div class="rw94vcl" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Cuánto cuesta abrir una cuenta en <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Abrir una cuenta es gratuito. No hay comisión de registro ni suscripción: solo aportas el capital que decides invertir.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Es <?= e(SITE_NAME) ?> una estafa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No, pero como en cualquier inversión existe riesgo real y ninguna plataforma honesta lo elimina. <?= e(SITE_NAME) ?> opera de forma transparente, cumple con la normativa aplicable en España y nunca promete rentabilidades garantizadas; desconfía de cualquier sitio que sí lo haga.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Con qué rapidez puedo retirar mi dinero?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Las solicitudes se procesan en días hábiles y el dinero vuelve al método con el que depositaste. Las transferencias bancarias tardan más que las tarjetas o los monederos electrónicos.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Hay un importe mínimo para empezar?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sí, y es deliberadamente bajo (<?= e(money_min()) ?>) para que puedas empezar con poco e ir aumentando después. La cifra exacta se muestra antes de confirmar nada.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>03</b><i></i></div>
    <h2>Cuenta y seguridad</h2>
    <div class="rw94vcl" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Cómo funciona el inicio de sesión en <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Accedes con tu correo electrónico y contraseña desde la web, sin necesidad de instalar nada. Si olvidas tu contraseña, puedes restablecerla desde la misma pantalla de acceso, y la verificación en dos pasos añade una capa extra de protección.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Por qué necesitáis mis documentos de identidad?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">La verificación es obligatoria antes de que una cuenta pueda mover dinero. También evita que otra persona abra una cuenta en tu nombre.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Necesito experiencia previa para empezar?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No. La mayoría de los miembros empiezan sin ninguna. Un especialista te guía en los primeros pasos y un saldo de demostración te permite practicar.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Puedo usar la plataforma desde el móvil?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sí, la plataforma funciona en el navegador del móvil, sin nada que instalar.</p></div>
      </details>
    </div>
    <div class="exet93j">
      <a class="rs0voj6 ggca24u" href="/#ej3hu">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="rs0voj6 krccqy8" href="<?= page_url('contacts.php') ?>">Enviar mensaje</a>
    </div>
  </div>
</section>

<section class="yscafry" data-u="sec">
  <div class="nrzt44">
    <div class="kor48"><b>01</b><i></i></div>
    <h2>Preguntas frecuentes.</h2>
    <div class="rw94vcl">
      <details open><summary>¿Cuál es el depósito mínimo para comenzar?</summary><p>Puedes abrir y financiar tu cuenta a partir de <?= e(money_min()) ?> mínimo. Eres libre de añadir más fondos según avanza tu plan de inversión.</p></details>
      <details><summary>¿Cómo funcionan los retiros?</summary><p>Solicita un retiro cuando quieras desde tu panel de control. Los fondos se devuelven a tu método de pago elegido, sujeto a los tiempos de procesamiento estándar.</p></details>
      <details><summary>¿Está mi dinero protegido?</summary><p>Las cuentas están protegidas con seguridad estándar de la industria y verificación robusta. Como en toda inversión, tu capital está en riesgo y su valor puede subir o bajar.</p></details>
      <details><summary>¿Cuánto tardo en empezar a invertir?</summary><p>La mayoría de miembros completan el registro en pocos minutos. Una vez que tu primer depósito se procese, puedes activar tu plan de inversión inmediatamente.</p></details>
      <details><summary>¿Hay comisiones ocultas?</summary><p>Los costes se muestran de forma transparente antes de comprometerte. Siempre verás qué se aplica a tu plan — sin sorpresas ni cargos inesperados.</p></details>
      <details><summary>¿Cuál es la edad mínima para registrarse?</summary><p>Debes tener al menos 18 años para abrir una cuenta e invertir. Se puede requerir verificación para confirmar tu edad e identidad.</p></details>
      <details><summary>¿Qué métodos de pago aceptáis?</summary><p>Se aceptan métodos comunes como tarjetas de débito y crédito, transferencias bancarias y billeteras digitales seleccionadas. Las opciones exactas se muestran en el paso de depósito.</p></details>
      <details><summary>¿Cuál es el horario de atención al cliente?</summary><p>Nuestro equipo de soporte está disponible de lunes a viernes, de 9:00 a 18:00, y responde a cada consulta en un día hábil.</p></details>
      <details><summary>¿Cómo se gestionan los impuestos?</summary><p>Cualquier impuesto sobre ganancias de inversión depende de las normas de tu país y es tu responsabilidad. Te recomendamos mantener tus propios registros y consultar a un asesor fiscal cualificado.</p></details>
      <details><summary>¿Qué es la verificación KYC y por qué es obligatoria?</summary><p>KYC (Conoce a tu Cliente) es una verificación estándar de tu identidad. Ayuda a mantener las cuentas seguras y es parte habitual de abrir una cuenta de inversión.</p></details>
      <details><summary>¿Necesito experiencia en inversión?</summary><p>No. Cada miembro cuenta con un analista financiero personal que te guía en cada paso, así que no necesitas conocimientos previos sobre los mercados.</p></details>
      <details><summary>¿Quién gestiona mis inversiones?</summary><p>Un analista financiero dedicado, respaldado por herramientas de inteligencia artificial, trabajando conforme a tus objetivos y nivel de riesgo. El analista combina experiencia profesional con tecnología — las decisiones siguen siendo humanas.</p></details>
      <details><summary>¿Es la plataforma conforme a la normativa?</summary><p>Sí — cumple con los estándares financieros y de ciberseguridad nacionales, con protección de cuentas y verificación integrada.</p></details>
      <details><summary>¿Puedo añadir más dinero a mi cuenta después?</summary><p>Sí. Puedes incrementar tu saldo cuando quieras y ajustar tu plan con tu analista conforme evolucionen tus objetivos de inversión.</p></details>
    </div>
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
