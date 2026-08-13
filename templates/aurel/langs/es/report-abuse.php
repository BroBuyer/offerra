<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Denunciar abuso ᐉ ' . SITE_NAME;
$page_description = 'Denunciar abuso — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Confianza y seguridad</span>
    <h1>Denunciar abuso</h1>
    <p class="rmct9">Ayúdanos a mantener <?= e(SITE_NAME) ?> seguro. Denuncia fraude sospechoso, suplantación de identidad o mal uso de nuestra plataforma o marca.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Qué denunciar</h2>
    <p>Por favor, denuncia cualquiera de lo siguiente a nuestro equipo de Confianza y Seguridad:</p>
    <ul>
      <li>Correos de phishing, sitios web fraudulentos o aplicaciones falsas que se hacen pasar por <?= e(SITE_NAME) ?>.</li>
      <li>Cuentas de redes sociales, anuncios o canales de mensajería que hacen un mal uso de nuestro nombre, logotipo o marcas registradas.</li>
      <li>Sospecha de toma de control de cuenta, acceso no autorizado o robo de identidad.</li>
      <li>Solicitudes de pago sospechosas, "agentes de recuperación" o terceros que afirmen actuar en nuestro nombre.</li>
      <li>Abuso de mercado, preocupaciones sobre blanqueo de capitales o cualquier actividad ilegal vinculada a nuestros servicios.</li>
      <li>Comportamiento abusivo, amenazador o acosador hacia nuestro personal o usuarios.</li>
    </ul>

    <h2>Cómo denunciar</h2>
    <p>Envíanos un informe detallado a través de cualquiera de los canales que aparecen a continuación. Si es posible, incluye:</p>
    <ul>
      <li>La fecha y la hora del incidente.</li>
      <li>URLs, capturas de pantalla, encabezados de mensaje, direcciones de remitente o números de teléfono.</li>
      <li>La información de tu cuenta (si la denuncia afecta a tu cuenta).</li>
      <li>Cualquier otro contexto que pueda ayudarnos a investigar.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>Correo electrónico de Confianza y Seguridad</b>
        <span>Utilice la página de contacto para comunicarse con nuestro equipo de Confianza y Seguridad. Los informes se clasifican en un plazo de un día hábil.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Divulgación de seguridad</b>
        <span>Para la divulgación responsable de vulnerabilidades de seguridad que afecten a nuestros sistemas, póngase en contacto con nosotros antes de compartir públicamente los detalles.</span>
      </div>
    </div>

    <h2>¿Qué ocurre a continuación?</h2>
    <p>Revisamos cada informe. Dependiendo de la naturaleza del problema, podemos ponernos en contacto con usted para obtener más información, coordinar con proveedores de pagos o plataformas de alojamiento para eliminar contenido fraudulento, o derivar asuntos a las autoridades encargadas de la aplicación de la ley o a los reguladores. Tratamos los informes de forma confidencial y, cuando sea legalmente posible, protegemos la identidad de los denunciantes.</p>

    <h2>Asuntos urgentes</h2>
    <p>Si cree que ha sido víctima de un delito, póngase en contacto con la autoridad encargada de la aplicación de la ley local además de informarnos a nosotros. Si sospecha que su cuenta ha sido comprometida, cambie su contraseña inmediatamente y notifíquenos de inmediato.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Contacte con Confianza y Seguridad</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Volver a la página de inicio</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
