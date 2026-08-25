<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Precios ' . SITE_NAME;
$page_description = 'Precios simples y transparentes — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Precios</span>
    <h1>Precios simples y transparentes.</h1>
    <p class="kpnq92g">Empezar con <?= e(SITE_NAME) ?> es gratis. No hay comisiones ocultas por abrir una cuenta, y solo aportas lo que decidas invertir: la plataforma y sus herramientas están incluidas.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Dónde pueden aparecer costes</h2>
    <p>Estos son los únicos puntos donde el dinero sale de tu saldo por algo que no sea una inversión elegida por ti.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Concepto</th><th scope="col">Lo cobra</th><th scope="col">Nota</th></tr></thead>
      <tbody>
        <tr><td>Apertura de cuenta</td><td>—</td><td>Gratis.</td></tr>
        <tr><td>Acceso a la plataforma</td><td>—</td><td>Incluido, sin suscripción.</td></tr>
        <tr><td>Spread de mercado</td><td>Bróker</td><td>La diferencia habitual entre precio de compra y de venta.</td></tr>
        <tr><td>Comisión de red / banco</td><td>Proveedor de pago</td><td>Depende del método que elijas.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">El capital está en riesgo. Invierte solo lo que puedas permitirte perder.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Abrir una cuenta</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Qué está incluido</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Alta de cuenta gratuita: sin tasas de registro ni de licencia.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sin cargos ocultos en ingresos, retiros ni mantenimiento de cuenta.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Solo pueden aplicarse spreads habituales del bróker o costes de red.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Empieza desde el depósito mínimo y escala a tu ritmo.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Cómo se ven las cifras en la práctica</h2>
    <h3>Un primer ingreso, paso a paso</h3>
    <p>El primer ingreso resume todo el coste en un solo sitio: el importe que envías, el spread al convertirlo, y nada más hasta que decidas operar. No hay cuota de cuenta a fin de mes ni cargo por dejar el saldo donde está.</p>
    <h4>Qué ocurre el mismo día</h4>
    <p>El saldo aparece cuando se confirma el pago, y un especialista recorre el plan antes de abrir nada. Nada se coloca automáticamente en tu nombre.</p>
    <h3>Retiros y lo que cuestan</h3>
    <p>Los retiros vuelven al método de pago con el que llegó el dinero: es un requisito, no una preferencia, para que la cuenta siga siendo tuya. El procesamiento es gratuito por nuestra parte; la única deducción posible es la de tu banco o emisor de tarjeta.</p>
    <h4>Plazos con los que puedes contar</h4>
    <p>Las solicitudes en día laborable se revisan el mismo día. Las devoluciones a tarjeta suelen liquidarse en tres a cinco días laborables, las transferencias en dos.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
