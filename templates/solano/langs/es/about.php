<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Acerca de ' . SITE_NAME;
$page_description = 'Una cuenta, una visión clara de tu capital — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">La plataforma</span>
    <h1>Una cuenta, una visión clara de todo</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> reúne tu saldo, tu estrategia y tu rendimiento en un único panel transparente, para que cada decisión esté informada y cada cifra esté a la vista.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Las personas detrás de tu cuenta</h2>
    <p>Detrás de la interfaz hay analistas que estudian los mercados a diario, ingenieros que mantienen la plataforma en funcionamiento y especialistas de soporte que responden en tu idioma.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Analistas de mercado que revisan las condiciones a diario, no una vez al trimestre.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingenieros disponibles para la plataforma, con supervisión permanente.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Especialistas de soporte que gestionan el alta, la verificación y los reintegros.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Normativa, riesgo y lo que no prometemos</h2>
    <p>Invertir conlleva riesgo y ninguna plataforma lo elimina. Lo que sí puede hacer una plataforma es ser clara contigo: publicar sus condiciones, mantener el dinero de los clientes con socios regulados y documentar cómo funcionan los reintegros.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Verificación de identidad antes de poder mover fondos en la cuenta.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Los reintegros se devuelven al mismo método utilizado en el ingreso.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Condiciones, aviso de riesgo y política de privacidad publicados en su totalidad.</span></li>
    </ul>
    <p class="jkkyl">Invertir conlleva riesgo, incluida la posible pérdida de parte o de todo el capital. El valor de las inversiones puede subir o bajar, y es posible que recuperes menos de lo que invertiste. No inviertas dinero que no puedas permitirte perder.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Empezar — <?= e(money_min()) ?> mín.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Enviar mensaje</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Cómo se construyó la plataforma</h2>
    <ol class="nxlk2qu">
      <li><h3>El punto de partida</h3><p>Un pequeño grupo de analistas e ingenieros escuchaba siempre la misma queja: las herramientas existen, pero nadie las explica.</p></li>
      <li><h3>Primera versión funcional</h3><p>La primera versión hacía una sola cosa: mostrar un saldo y una posición en términos sencillos. Todo lo demás se eliminó hasta que esa parte quedó clara.</p></li>
      <li><h3>Incorporando el lado humano</h3><p>La automatización responde qué y cuándo; las personas responden por qué. Se sumaron especialistas de soporte para que cada miembro tenga a quién preguntar.</p></li>
      <li><h3>Apertura a más mercados</h3><p>Métodos de pago locales, idiomas locales y horarios de soporte locales.</p></li>
      <li><h3>Dónde estamos ahora</h3><p>Los mismos principios a mayor escala: cifras transparentes, personas accesibles, sin sorpresas en la letra pequeña.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Para qué estamos aquí</h2>
    <p>La mayoría de las personas que quieren invertir nunca empiezan, porque cada camino parece pensado para alguien que ya conoce el vocabulario. Nosotros construimos lo contrario: una sola cuenta, lenguaje claro y un especialista con quien realmente puedes hablar.</p>
    <p>Sin jerga donde basta una frase sencilla, sin comisiones que aparecen solo después de mover el dinero, y sin promesas de rentabilidad que nadie puede garantizar honestamente.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Usuarios activos</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Volumen negociado</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Soporte</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
