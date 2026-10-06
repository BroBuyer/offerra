<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Denunciar un abuso | ' . SITE_NAME;
$page_description = 'Denuncia un abuso o una actividad sospechosa en ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Denunciar un abuso</h1>
            <p class="bold-title">1. Denuncia de un abuso</p>
            <p>
              1.1. Si has encontrado contenido inapropiado en nuestro sitio, infórmanos
              a través del formulario de contacto.
            </p>
            <p>Contáctanos: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. En esta sección puedes describir cualquier conducta abusiva o contenido
              que infrinja nuestras normas.
            </p>
            <p>
              1.3. Tu denuncia es importante. Facilita datos precisos para que podamos
              investigar correctamente los hechos.
            </p>
            <p>Al enviar una denuncia también aceptas nuestra política de privacidad.</p>
            <p class="bold-title">2. Quién puede denunciar</p>
            <p>
              2.1. Si has sido víctima de un abuso o constatas una conducta inapropiada, tienes
              el derecho a denunciarlo.
            </p>
            <p>2.1.1. Debes tener al menos 18 años para presentar una denuncia.</p>
            <p>2.1.2. La denuncia debe ser veraz y estar basada en hechos.</p>
            <p>2.1.3. El uso del formulario de denuncia debe ser lícito en tu país.</p>
            <p>2.2. No somos responsables de denuncias falsas o dolosas.</p>
            <p class="bold-title">3. Procedimiento de denuncia</p>
            <p>3.1. Nos reservamos el derecho de examinar todas las denuncias de abuso.</p>
            <p>3.2. Si una denuncia se considera fundada, adoptaremos las medidas necesarias.</p>
            <p class="bold-title">4. Actividades prohibidas al denunciar</p>
            <p>4.1. El uso del formulario con fines dolosos no está permitido.</p>
            <p>4.1.1. Las denuncias falsas o engañosas no están permitidas.</p>
            <p>4.1.2. Acosar a otros usuarios a través del sistema de denuncia no está permitido.</p>
            <p>4.1.3. El uso de robots o de automatización para enviar denuncias está prohibido.</p>
            <p>4.1.4. Cualquier intento de manipular el sistema de denuncia será objeto de investigación.</p>
            <p>4.1.5. El uso del sistema para difundir información falsa está prohibido.</p>
            <p>4.1.6. Cualquier intento de obstaculizar una investigación no está permitido.</p>
            <p>4.1.7. El uso del sistema para proferir amenazas no está permitido.</p>
            <p>4.1.8. Cualquier actividad ilícita ligada a la denuncia será sancionada.</p>
            <p>4.1.9. Cualquier intento de eludir las normas de denuncia no está permitido.</p>
            <p>4.1.10. Cualquier intento de abuso del sistema de denuncia se toma en serio.</p>
            <p class="bold-title">5. Derechos de propiedad intelectual al denunciar</p>
            <p>
              5.1. Los contenidos que transmites al denunciar un abuso no te confieren ningún derecho de propiedad.
            </p>
            <p>5.2. Los usuarios no adquieren derechos sobre los contenidos del sitio al presentar una denuncia.</p>
            <p>5.3. Las denuncias se usan exclusivamente con fines de investigación.</p>
            <p>5.4. Los terceros no pueden copiar ni modificar las denuncias.</p>
            <p class="bold-title">6. Limitación de responsabilidad al denunciar</p>
            <p>6.1. Al presentar una denuncia asumes la responsabilidad de su contenido.</p>
            <p>6.2. No somos responsables de las consecuencias de las denuncias presentadas.</p>
            <p>6.3. Cualquier pérdida derivada de una denuncia es responsabilidad del usuario.</p>
            <p>6.4. No aceptamos ninguna responsabilidad por los daños causados por denuncias.</p>
            <p>
              6.5. Los problemas técnicos ligados al sistema de denuncia no recaen en nuestra responsabilidad.
            </p>
            <p class="bold-title">7. Información sobre el procedimiento de denuncia</p>
            <p>
              7.1. Al usar el sistema de denuncia aceptas que podamos contactarte para obtener más información.
            </p>
            <p>7.2. Las denuncias se tratan de forma confidencial.</p>
            <p>7.3. Se recomienda a los usuarios conservar una copia de sus denuncias.</p>
            <p class="bold-title">8. Enlaces y recursos complementarios</p>
            <p>8.1. Para saber más sobre cómo denunciar un abuso, consulta nuestras políticas.</p>
            <p>8.2. Los enlaces a fuentes externas no constituyen una aprobación por nuestra parte.</p>
            <p>8.3. Te recomendamos verificar cada fuente antes de usarla.</p>
            <p class="bold-title">9. Disposiciones generales sobre las denuncias</p>
            <p>
              9.1. Nos reservamos el derecho de modificar, suspender o interrumpir el procedimiento de denuncia
              en cualquier momento.
            </p>
            <p>
              9.2. Las condiciones de este procedimiento pueden evolucionar en cualquier momento. El uso continuado
              del servicio de denuncia tras dichos cambios vale como aceptación de las nuevas condiciones.
            </p>
            <p>9.3. Al presentar una denuncia, el usuario acepta plenamente estas condiciones.</p>
            <p>
              9.4. Cualquier acuerdo o declaración, escrita u oral, que no entre en los
              puntos específicos de estas condiciones es jurídicamente nulo y no vincula a ninguna de las partes.
            </p>
            <p>
              9.5. Cualquier derecho conferido por estas condiciones y no ejercido, por consentimiento,
              negligencia o imposibilidad, se considera renunciado. El ejercicio parcial o total de un derecho
              no excluye ni limita su ejercicio posterior.
            </p>
            <p>
              9.6. Si un tribunal competente declara nula una disposición de estas condiciones, esta se
              considerará nula. El resto de las condiciones permanece, no obstante, plenamente vigente.
            </p>
            <p>
              9.7. Se entiende que estas condiciones permiten la gestión del sitio por terceros,
              que pueden ceder sus derechos y obligaciones. El usuario no puede ceder
              sus derechos y obligaciones a un tercero.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
