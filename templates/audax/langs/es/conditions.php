<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Condiciones de uso | ' . SITE_NAME;
$page_description = 'Condiciones de uso de la plataforma ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Condiciones de uso</h1>
            <p class="bold-title">1. Introducción</p>
            <p>1.1. La aceptación de estas condiciones es necesaria para usar nuestros servicios.</p>
            <p>1.2. Estas condiciones constituyen un acuerdo jurídicamente vinculante.</p>
            <p>1.3. El uso continuado del sitio vale como aceptación de las condiciones.</p>
            <p>
              1.4. Para cualquier pregunta puedes escribirnos a
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Derecho de uso</p>
            <p>2.1. Debes tener al menos 18 años para usar los servicios.</p>
            <p>2.1.1. Debes residir en un país en el que los servicios sean lícitos.</p>
            <p>2.1.2. No debes figurar en ninguna lista de sanciones.</p>
            <p>2.1.3. Debes tener capacidad jurídica para contratar.</p>
            <p>2.2. No somos responsables de un uso por parte de personas no aptas.</p>
            <p class="bold-title">3. Cuenta de usuario</p>
            <p>3.1. Eres responsable de la seguridad de tu cuenta.</p>
            <p>3.2. No comuniques la contraseña a terceros.</p>
            <p class="bold-title">4. Actividades prohibidas</p>
            <p>4.1. El uso de los servicios con fines ilícitos no está permitido.</p>
            <p>4.1.1. El blanqueo de capitales está estrictamente prohibido.</p>
            <p>4.1.2. Cualquier fraude se denunciará a las autoridades competentes.</p>
            <p>4.1.3. El uso de robots o software de automatización no está permitido.</p>
            <p>4.1.4. Cualquier intento de manipular el sistema será objeto de investigación.</p>
            <p>4.1.5. La difusión de información falsa está prohibida.</p>
            <p>4.1.6. Cualquier intento de obstaculizar una investigación no está permitido.</p>
            <p>4.1.7. Las amenazas hacia otros usuarios están prohibidas.</p>
            <p>4.1.8. Cualquier actividad ilícita será sancionada.</p>
            <p>4.1.9. Cualquier intento de eludir las normas no está permitido.</p>
            <p>4.1.10. Cualquier intento de abuso del sistema se toma en serio.</p>
            <p class="bold-title">5. Propiedad intelectual</p>
            <p>5.1. El conjunto de los contenidos del sitio es nuestra propiedad intelectual.</p>
            <p>5.2. Los usuarios no adquieren derechos sobre los contenidos del sitio.</p>
            <p>5.3. Los contenidos no pueden copiarse sin autorización.</p>
            <p>5.4. Los terceros no están autorizados a modificar los contenidos.</p>
            <p class="bold-title">6. Limitación de responsabilidad</p>
            <p>6.1. El uso de los servicios se realiza bajo tu propio riesgo.</p>
            <p>6.2. No somos responsables de las pérdidas ligadas al uso de los servicios.</p>
            <p>6.3. Cualquier pérdida ligada al uso del sitio es responsabilidad del usuario.</p>
            <p>6.4. No aceptamos ninguna responsabilidad por los daños ligados al uso del sitio.</p>
            <p>6.5. Los problemas técnicos no recaen en nuestra responsabilidad.</p>
            <p class="bold-title">7. Información</p>
            <p>7.1. Al usar los servicios aceptas ser contactado.</p>
            <p>7.2. La información se trata de forma confidencial.</p>
            <p>7.3. Se recomienda a los usuarios conservar sus justificantes.</p>
            <p class="bold-title">8. Enlaces y recursos complementarios</p>
            <p>8.1. Para más información consulta nuestras políticas.</p>
            <p>8.2. Los enlaces externos no constituyen una aprobación.</p>
            <p>8.3. Recomendamos verificar las fuentes antes de usarlas.</p>
            <p class="bold-title">9. Disposiciones generales</p>
            <p>9.1. Nos reservamos el derecho de modificar los servicios en cualquier momento.</p>
            <p>9.2. Las condiciones pueden evolucionar en cualquier momento.</p>
            <p>9.3. Al usar los servicios aceptas estas condiciones.</p>
            <p>9.4. Los acuerdos orales no son válidos.</p>
            <p>9.5. Los derechos no ejercidos no se consideran renunciados.</p>
            <p>
              9.6. Si una disposición se declara nula, las demás permanecen vigentes.
            </p>
            <p>9.7. Los servicios pueden ser gestionados por proveedores externos.</p>
            <p>
              9.8. El derecho aplicable <?= e(geo_in()) ?> rige estas condiciones. Cualquier controversia se someterá al
              tribunal competente <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
