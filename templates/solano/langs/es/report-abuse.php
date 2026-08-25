<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' ᐉ report-abuse';
$page_description = SITE_NAME;
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
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

<section class="muju5x">
  <div class="nrzt44">
    <span class="odwy4o">Confianza y seguridad</span>
    <h1>Denunciar abuso</h1>
    <p class="etpy2">Ayúdanos a mantener <?= e(SITE_NAME) ?> segura. Denuncia fraude sospechoso, suplantación de identidad o mal uso de nuestra plataforma o marca.</p>
  </div>
</section>

<section class="qou9n">
  <div class="nrzt44">
    <h2>Qué denunciar</h2>
    <p>Por favor, denuncia cualquiera de lo siguiente a nuestro equipo de Confianza y Seguridad:</p>
    <ul>
      <li>Correos electrónicos de phishing, sitios web fraudulentos o aplicaciones falsas que suplantan a <?= e(SITE_NAME) ?>.</li>
      <li>Cuentas de redes sociales, anuncios o canales de mensajería que hagan mal uso de nuestro nombre, logo o marcas comerciales.</li>
      <li>Presunta toma de control de cuenta, acceso no autorizado o robo de identidad.</li>
      <li>Solicitudes de pago sospechosas, «agentes de recuperación» o terceros que afirmen actuar en nuestro nombre.</li>
      <li>Abuso de mercado, preocupaciones sobre blanqueo de capitales o cualquier actividad ilegal relacionada con nuestros servicios.</li>
      <li>Comportamiento abusivo, amenazante o acosador hacia nuestro personal o usuarios.</li>
    </ul>

    <h2>Cómo denunciar</h2>
    <p>Envíanos un informe detallado a través de cualquiera de los canales siguientes. Cuando sea posible, incluye:</p>
    <ul>
      <li>La fecha y la hora del incidente.</li>
      <li>URLs, capturas de pantalla, encabezados de mensajes, direcciones de remitente o números de teléfono.</li>
      <li>La información de tu cuenta (si la denuncia concierne a tu cuenta).</li>
      <li>Cualquier otro contexto que pueda ayudarnos en la investigación.</li>
    </ul>

    <div class="ww7ttb">
      <div class="prxev6">
        <div class="focixy"><i class="okdbx wxk5s5"></i></div>
        <b>Correo electrónico de Confianza y Seguridad</b>
        <span>Utilice la página de contacto para comunicarse con nuestro equipo de Confianza y Seguridad. Los reportes se clasifican en el plazo de un día laboral.</span>
      </div>
      <div class="prxev6">
        <div class="focixy"><i class="okdbx sqyd85a"></i></div>
        <b>Divulgación de seguridad</b>
        <span>Para la divulgación responsable de vulnerabilidades de seguridad que afecten nuestros sistemas, póngase en contacto con nosotros antes de compartir públicamente los detalles.</span>
      </div>
    </div>

    <h2>Qué ocurre a continuación</h2>
    <p>Revisamos todo reporte. Dependiendo de la naturaleza del problema, podemos ponernos en contacto con usted para obtener más información, coordinarnos con proveedores de pagos o plataformas de alojamiento para eliminar contenido fraudulento, o remitir asuntos a las autoridades encargadas de la aplicación de la ley o a organismos reguladores. Tratamos los reportes de forma confidencial y, cuando es legalmente posible, protegemos la identidad de los denunciantes.</p>

    <h2>Asuntos urgentes</h2>
    <p>Si cree que ha sido víctima de un delito, póngase en contacto con la autoridad local encargada de la aplicación de la ley además de reportar el asunto ante nosotros. Si sospecha que su cuenta ha sido comprometida, cambie su contraseña inmediatamente y notifíquenos de inmediato.</p>

    <p style="margin-top:36px">
      <a class="rs0voj6 ggca24u" href="<?= page_url('contacts.php') ?>">Contactar con Confianza y Seguridad</a>
      <a class="rs0voj6 krccqy8" href="<?= page_url() ?>" style="margin-left:8px">← Volver a la página de inicio</a>
    </p>
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
