<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registro ' . SITE_NAME;
$page_description = 'Abre tu cuenta en ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Comienza ya</span>
    <h1>Abre tu cuenta</h1>
    <p class="kpnq92g">Unos datos para empezar, y un especialista se ocupa del resto. En este paso no se cobra nada.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Qué ocurre después</h2>
    <ol class="nxlk2qu">
      <li><h3>Envías el formulario</h3><p>Tarda unos minutos y no cuesta nada.</p></li>
      <li><h3>Te llama un especialista</h3><p>Confirma tus datos, responde preguntas y explica el siguiente paso. Sin presión para ingresar.</p></li>
      <li><h3>Verificas y eliges un importe</h3><p>Solo entonces se mueve dinero, y solo la cantidad que tú elijas.</p></li>
    </ol>
    <p class="jkkyl">Invertir conlleva riesgo, incluida la posible pérdida de parte o de todo el capital. El valor de las inversiones puede subir o bajar, y es posible que recuperes menos de lo que invertiste. No inviertas dinero que no puedas permitirte perder.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Preguntas frecuentes</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Qué necesitas</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un correo que realmente consultes.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un teléfono, para que un especialista pueda contactarte.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Un documento de identidad, para la verificación posterior.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Qué ocurre después de enviar el formulario</h2>
    <h3>La llamada de verificación</h3>
    <p>Un especialista llama para confirmar los datos que enviaste, responder preguntas y acordar un importe inicial razonable para ti. Es una conversación, no un guion de venta: una cuenta abierta con expectativas irreales no sirve a nadie.</p>
    <h4>Cuánto tarda</h4>
    <p>Suele ser una llamada de diez a quince minutos. Si prefieres que te llamen a una hora concreta, indícalo en el formulario y se respeta.</p>
    <h3>La verificación de identidad, explicada</h3>
    <p>Antes del primer ingreso te pedirán un documento de identidad con foto y un justificante reciente de domicilio. Es el mismo requisito de cualquier servicio financiero regulado, y existe para que un retiro solo pueda volver a ti.</p>
    <h4>Qué se acepta</h4>
    <p>Pasaporte o DNI, y una factura o extracto bancario de los últimos tres meses. Una foto nítida hecha con el móvil es suficiente.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Abre tu cuenta</h2>
      <p class="pt6joj">Empieza en pocos minutos.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Empezar ahora';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
