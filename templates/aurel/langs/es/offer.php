<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Por qué nosotros ' . SITE_NAME;
$page_description = 'Por qué las personas eligen empezar con ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Why this platform</span>
    <h1>Why people choose to start here</h1>
    <p class="kpnq92g">Not a sales pitch — the specific, checkable reasons, plus the parts that will not suit everyone.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Sin hojas de cálculo. Sin pantallas. Sin dudas de última hora</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Plataforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Bróker tradicional</th><th scope="col">Operar por tu cuenta</th></tr></thead>
      <tbody>
        <tr><td>Ejecución de órdenes con IA</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horario limitado</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Supervisión 24/7 en todos los mercados</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papeleo</td><td style="color:var(--muted)">Por cuenta propia</td></tr>
        <tr><td>Enrutamiento de órdenes en menos de un segundo</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">solo por nivel</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Informes en múltiples divisas</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horario limitado</td><td style="color:var(--muted)">Por cuenta propia</td></tr>
        <tr><td>Alta de cuenta sin papeleo</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papeleo</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Arbitraje entre exchanges</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">solo por nivel</td><td style="color:var(--muted)">Por cuenta propia</td></tr>
        <tr><td>Gestor personal asignado</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horario limitado</td><td style="color:var(--muted)">manual</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>What you get that a do-it-yourself setup does not</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Ejecución en menos de un segundo en cada mercado conectado.</b> <?= e(SITE_NAME) ?> mantiene conexiones API permanentes de baja latencia con cada exchange soportado. Cuando el modelo genera una señal, la orden se envía, se ejecuta y queda registrada en tu panel antes del siguiente tick.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Funciona 24/7, en cada sesión de mercado.</b> Las criptomonedas no descansan, y <?= e(SITE_NAME) ?> tampoco. El motor sigue analizando pares durante fines de semana y festivos para que nunca se te escape una oportunidad.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Informes en múltiples divisas.</b> Cada saldo, cada operación y cada reintegro se muestra en tu moneda local. Sin pasos de conversión ocultos en ningún momento.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Capital segregado.</b> Tus fondos permanecen en tu propia cuenta. <?= e(SITE_NAME) ?> nunca los custodia: el motor solo tiene permiso para enviar órdenes.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Seguridad de nivel bancario.</b> Cifrado TLS en toda la plataforma, verificación en dos pasos por defecto y auditorías trimestrales de infraestructura por terceros. Recibos de operaciones registrados en blockchain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Tres clases de activos, una sola plataforma.</b> La mayoría de las plataformas minoristas te limitan a un solo mercado. <?= e(SITE_NAME) ?> opera criptomonedas, acciones cotizadas y los principales pares de divisas desde el mismo panel.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Límites de riesgo predefinidos en cada posición.</b> El stop-loss, la pérdida máxima admitida y los topes de asignación de capital se configuran por clase de activo. El motor cierra automáticamente cualquier operación que supere un umbral y el suceso queda registrado en tu historial de auditoría.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Who this is probably not for</h2>
    <p>Being straight about this saves everyone time. If any of the following describes you, a different route will suit you better.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You need guaranteed returns. No honest platform offers them, and neither do we.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You want to invest money you cannot afford to be without.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>You trade at professional volume with your own execution stack.</span></li>
    </ul>
    <p class="jkkyl">Investment involves risk, including the possible loss of some or all of the capital you invest. The value of investments can go down as well as up, and you may receive back less than you originally put in. You should not invest money that you cannot afford to lose.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Empezar — <?= e(money_min()) ?> mín.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
