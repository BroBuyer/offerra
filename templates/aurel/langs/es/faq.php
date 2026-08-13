<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Preguntas frecuentes ' . SITE_NAME;
$page_description = 'Preguntas, respondidas — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Preguntas</span>
    <h1>Preguntas, respondidas con claridad</h1>
    <p class="kpnq92g">Lo que la gente pregunta antes de abrir una cuenta, y las respuestas que te daríamos por teléfono.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Preguntas sobre el dinero</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿<?= e(SITE_NAME) ?> es una estafa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No: <?= e(SITE_NAME) ?> opera con controles de verificación, publica sus condiciones y su aviso de riesgo en su totalidad, y los reintegros vuelven siempre al método de pago original. Dicho esto, toda inversión conlleva riesgo real y ninguna plataforma seria promete rentabilidades garantizadas; desconfía de cualquiera que lo haga.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Cuánto cuesta abrir una cuenta?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Abrir una cuenta es gratis. No hay cuota de registro ni suscripción; solo aportas el importe que decidas invertir.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Cuánto tardan los reintegros?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Las solicitudes se procesan en días laborables y se devuelven al método con el que ingresaste. Las transferencias bancarias tardan más que las tarjetas o los monederos electrónicos.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Hay un importe mínimo?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sí, y es deliberadamente bajo, de <?= e(money_min()) ?>, para que puedas empezar poco a poco y ampliar más adelante. La cifra exacta se muestra antes de confirmar nada.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Preguntas frecuentes</h2>
    <div class="fjl4d">
      <details open><summary>¿Cuál es el depósito mínimo para comenzar?</summary><p>Puedes abrir y financiar tu cuenta con <?= e(money_min()) ?> mínimo. Eres libre de añadir más fondos según avance tu plan de inversión.</p></details>
      <details><summary>¿Cómo funcionan los retiros de fondos?</summary><p>Solicita un retiro en cualquier momento desde tu panel de control. Los fondos se devuelven a tu método de pago elegido, con los tiempos de procesamiento habituales.</p></details>
      <details><summary>¿Está mi dinero protegido de forma segura?</summary><p>Las cuentas están protegidas con estándares de seguridad e identificación de nivel profesional. Como en toda inversión, tu capital está expuesto a riesgo y los valores pueden subir o bajar.</p></details>
      <details><summary>¿Cuánto tiempo tarda en empezar a invertir?</summary><p>La mayoría de miembros completan el registro en pocos minutos. Una vez que tu primer depósito se procesa, puedes activar un plan de inmediato.</p></details>
      <details><summary>¿Hay comisiones ocultas?</summary><p>Todos los costes se muestran de forma transparente antes de comprometerme. Siempre verás qué se aplica a tu plan — sin sorpresas.</p></details>
      <details><summary>¿Cuál es la edad mínima para registrarse?</summary><p>Debes tener al menos 18 años para abrir una cuenta e invertir. Se puede solicitar verificación para confirmar tu edad e identidad.</p></details>
      <details><summary>¿Qué métodos de pago se aceptan?</summary><p>Se aceptan métodos comunes como tarjetas de débito y crédito, transferencias bancarias, monederos electrónicos seleccionados y criptomonedas. Las opciones exactas se muestran en el paso de depósito.</p></details>
      <details><summary>¿Cuándo está disponible el servicio de atención al cliente?</summary><p>Nuestro equipo de soporte está disponible de lunes a viernes, de 9:00 a 18:00, y se compromete a responder a cada consulta dentro de un día laborable.</p></details>
      <details><summary>¿Cómo se gestionan los impuestos sobre las ganancias?</summary><p>Los impuestos sobre ganancias de inversión dependen de la normativa de tu país y son tu responsabilidad. Te recomendamos mantener registros propios y consultar a un asesor fiscal cualificado.</p></details>
      <details><summary>¿Qué es la verificación KYC y por qué es obligatoria?</summary><p>KYC (Conozca a su Cliente) es una verificación estándar de tu identidad. Ayuda a mantener las cuentas seguras y es parte rutinaria de abrir una cuenta de inversión.</p></details>
      <details><summary>¿Necesito experiencia previa en inversiones?</summary><p>No. Cada miembro cuenta con un analista financiero personal que te guía en cada paso, así que no necesitas conocimientos previos sobre los mercados.</p></details>
      <details><summary>¿Quién gestiona mis inversiones?</summary><p>Un analista financiero dedicado, apoyado por herramientas de IA, trabajando según tus objetivos y nivel de riesgo. El analista combina experiencia profesional con tecnología — las decisiones siguen siendo humanas.</p></details>
      <details><summary>¿Cumple la plataforma con la normativa?</summary><p>Sí — cumple con los estándares financieros y de ciberseguridad nacionales, con protección de cuenta y verificación integrada. Estamos regulados por la CNMV.</p></details>
      <details><summary>¿Puedo añadir más fondos a mi cuenta después?</summary><p>Sí. Puedes recargar tu cuenta en cualquier momento y ajustar tu plan con tu analista conforme evolucionen tus objetivos.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Cuenta y seguridad</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Cómo funciona el inicio de sesión en <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Accedes con tu correo electrónico registrado y tu contraseña desde la web o desde el navegador del móvil. Si activaste la verificación en dos pasos, se te pedirá un código adicional; si olvidas la contraseña, puedes restablecerla desde la propia pantalla de acceso.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Por qué necesitáis mis documentos de identidad?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">La verificación es obligatoria antes de que una cuenta pueda mover fondos. También impide que otra persona abra una cuenta en tu nombre.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Necesito experiencia previa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No. La mayoría de los miembros empiezan sin ninguna. Un especialista te acompaña en los primeros pasos y un saldo de demostración te permite practicar.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">¿Puedo usarlo desde el móvil?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sí, la plataforma funciona en el navegador del móvil sin necesidad de instalar nada.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Enviar mensaje</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
