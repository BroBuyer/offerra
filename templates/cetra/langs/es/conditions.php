<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Términos de uso');
$page_description = 'Las normas que se aplican cuando accedes o utilizas ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Principal">
      <a href="<?= page_url() ?>#platform">Plataforma</a>
      <a href="<?= page_url() ?>#how">Cómo funciona</a>
      <a href="<?= page_url() ?>#markets">Mercados</a>
      <a href="<?= page_url() ?>#faq">Preguntas frecuentes</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Empezar</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Términos de uso</h1>
      <p class="lede">Las normas que se aplican cuando accedes o utilizas <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Última actualización: enero de 2025</p>

      <h2>1. Aceptación de los Términos</h2>
      <p>Al acceder o utilizar el sitio y los servicios de <?= e(SITE_NAME) ?>, aceptas quedar vinculado por estos Términos de uso. Si no estás de acuerdo, no utilices los servicios.</p>

      <h2>2. Elegibilidad</h2>
      <p>Debes tener al menos 18 años (o la mayoría de edad en tu jurisdicción) y capacidad jurídica para celebrar un contrato vinculante. Los servicios no se ofrecen a residentes en jurisdicciones restringidas donde dicha oferta sería ilegal.</p>

      <h2>3. Registro de cuenta</h2>
      <p>Aceptas proporcionar información precisa, actual y completa durante el registro y mantenerla actualizada. Eres responsable de la confidencialidad de tus credenciales y de todas las actividades en tu cuenta.</p>

      <h2>4. Servicios</h2>
      <p><?= e(SITE_NAME) ?> proporciona herramientas tecnológicas e información educativa relacionada con la inversión en línea. No somos tu asesor financiero. Nada en este sitio constituye asesoramiento de inversión personalizado, asesoramiento fiscal ni una solicitud para comprar o vender ningún instrumento financiero.</p>

      <h2>5. Comisiones</h2>
      <p>Las comisiones, márgenes y tasas aplicables se divulgan en la plataforma o en el calendario de tarifas aplicable. Eres responsable de cualquier impuesto derivado de tus actividades.</p>

      <h2>6. Conducta prohibida</h2>
      <ul>
        <li>Usar los servicios para blanqueo de capitales, financiación del terrorismo, manipulación de mercado o cualquier fin ilegal.</li>
        <li>Suplantar a otra persona o proporcionar información de identidad falsa.</li>
        <li>Intentar interferir, comprometer o realizar ingeniería inversa de cualquier parte de la plataforma.</li>
        <li>Usar herramientas automatizadas para acceder a los servicios de forma distinta a la expresamente permitida.</li>
      </ul>

      <h2>7. Propiedad intelectual</h2>
      <p>Todo el contenido, marcas registradas, software y materiales del sitio son propiedad de <?= e(SITE_NAME) ?> o de sus licenciantes y están protegidos por las leyes de propiedad intelectual aplicables. Se te concede una licencia limitada, no exclusiva y revocable para usar los servicios con el fin previsto.</p>

      <h2>8. Servicios de terceros</h2>
      <p>La plataforma puede contener enlaces a o integrar servicios de terceros. No somos responsables de dichos servicios, de su disponibilidad, precisión o contenido.</p>

      <h2>9. Exenciones de responsabilidad</h2>
      <p>Los servicios se proporcionan «tal cual» y «según disponibilidad» sin garantías de ningún tipo. La negociación implica un riesgo sustancial de pérdida. Consulta nuestra <a href="<?= page_url('conditions.php') ?>">Divulgación de riesgos</a> para más detalles.</p>

      <h2>10. Limitación de responsabilidad</h2>
      <p>En la máxima medida permitida por la ley, <?= e(SITE_NAME) ?> no será responsable de daños indirectos, incidentales, especiales, consecuentes o punitivos, ni de ninguna pérdida de beneficios o ingresos, resultantes de tu uso de los servicios.</p>

      <h2>11. Indemnización</h2>
      <p>Aceptas indemnizar y eximir de responsabilidad a <?= e(SITE_NAME) ?>, sus afiliados y personal de cualquier reclamación resultante de tu incumplimiento de estos Términos o del uso indebido de los servicios.</p>

      <h2>12. Suspensión y rescisión</h2>
      <p>Podemos suspender o rescindir el acceso a los servicios en cualquier momento, con o sin previo aviso, si creemos que has incumplido estos Términos o la ley aplicable.</p>

      <h2>13. Ley aplicable</h2>
      <p>Estos Términos se rigen por las leyes aplicables en la sede de <?= e(SITE_NAME) ?>, sin consideración de los principios de conflicto de leyes.</p>

      <h2>14. Cambios</h2>
      <p>Podemos modificar estos Términos de vez en cuando. El uso continuado de los servicios tras los cambios constituye aceptación de los Términos revisados.</p>

      <h2>15. Contacto</h2>
      <p>Las dudas sobre estos Términos pueden enviarse a través de nuestra <a href="<?= page_url('contacts.php') ?>">página de contacto</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Volver a la página de inicio</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos los derechos reservados ·
      <a href="<?= page_url('privacy.php') ?>">Privacidad</a> ·
      <a href="<?= page_url('conditions.php') ?>">Términos</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
