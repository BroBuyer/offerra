<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contacto ' . SITE_NAME . ' ᐉ Estamos aquí para ayudarte';
$page_description = '¿Tienes alguna pregunta sobre ' . SITE_NAME . ' o tu cuenta?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contacto</span>
    <h1>Estamos aquí para ayudarte</h1>
    <p class="kpnq92g">¿Tienes alguna pregunta sobre <?= e(SITE_NAME) ?> o tu cuenta? Nuestro equipo de soporte estará encantado de ayudarte. Escríbenos y te responderemos lo antes posible.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Antes de escribirnos</h2>
    <p>La mayoría de las preguntas ya tienen respuesta en el sitio, y comprobarlo primero suele ser más rápido que esperar una respuesta.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Preguntas frecuentes</a> — costes, reintegros, verificación e importes mínimos.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Cómo funciona</a> — qué ocurre después de registrarte, paso a paso.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Precios</a> — qué es gratuito y dónde puede aparecer un coste.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Empezar — <?= e(money_min()) ?> mín.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Cómo contactar con nosotros</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Channel</th><th scope="col">Best for</th><th scope="col">Response</th></tr></thead>
      <tbody>
        <tr><td>Soporte por correo electrónico — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Preguntas sobre la cuenta, verificación, reintegros</td><td>Normalmente respondemos en un día laborable.</td></tr>
        <tr><td>Callback request</td><td>Cualquier cosa más fácil de explicar hablando</td><td>Horario de soporte: lunes a viernes, 9:00–18:00</td></tr>
        <tr><td>Abuse report — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/denunciar-abuso</a></td><td>Suplantación de identidad, uso indebido de la marca, mensajes sospechosos</td><td>Reviewed on receipt</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Qué esperar al ponerte en contacto</h2>
    <h3>Qué canal usar</h3>
    <p>El correo electrónico es adecuado para cualquier cosa con un documento adjunto: verificaciones de identidad, consultas sobre reintegros, dudas sobre un extracto. El formulario de devolución de llamada sirve para todo lo demás, porque la mayoría de las preguntas sobre la cuenta se resuelven más rápido en dos minutos de conversación que en cuatro mensajes.</p>
    <h4>Fuera del horario de atención</h4>
    <p>Los mensajes enviados por la tarde-noche o el fin de semana quedan en cola y se responden a primera hora del siguiente día laborable, por orden de llegada.</p>
    <h3>Datos que conviene incluir</h3>
    <p>El correo electrónico registrado y la fecha aproximada de lo que consultas son suficientes para localizar la cuenta. Nunca envíes una contraseña, un número de tarjeta completo ni un código de un solo uso: ningún miembro de nuestro equipo te lo pedirá jamás.</p>
    <h4>Si algo no parece correcto</h4>
    <p>Denúncialo el mismo día. Cualquier situación relacionada con un pago que no reconozcas se atiende de inmediato, sin esperar la cola habitual.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
