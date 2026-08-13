<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Condiciones de Uso ᐉ ' . SITE_NAME;
$page_description = 'Condiciones de uso de ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Legal</span>
    <h1>Condiciones de Uso</h1>
    <p class="rmct9">Las normas que se aplican cuando accede o utiliza <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Última actualización: enero de 2025</p>

    <h2>1. Aceptación de las Condiciones</h2>
    <p>Al acceder o utilizar el sitio web y los servicios de <?= e(SITE_NAME) ?>, usted acepta estar vinculado por estas Condiciones de Uso. Si no está de acuerdo, no utilice los servicios.</p>

    <h2>2. Elegibilidad</h2>
    <p>Debe tener al menos 18 años de edad (o la edad de mayoría en su jurisdicción) y ser legalmente capaz de celebrar un contrato vinculante. Los servicios no se ofrecen a residentes de jurisdicciones restringidas donde tal ofrecimiento sería ilegal.</p>

    <h2>3. Registro de Cuenta</h2>
    <p>Usted acepta proporcionar información precisa, actual y completa durante el registro y mantener esta información actualizada. Usted es responsable de mantener la confidencialidad de sus credenciales y de todas las actividades en su cuenta.</p>

    <h2>4. Servicios</h2>
    <p><?= e(SITE_NAME) ?> proporciona herramientas tecnológicas e información educativa relacionada con la inversión en línea. No somos su asesor financiero. Nada en este sitio constituye asesoramiento de inversión personalizado, asesoramiento fiscal o una solicitud para comprar o vender ningún instrumento financiero.</p>

    <h2>5. Comisiones</h2>
    <p>Las comisiones, diferenciales y comisiones aplicables se divulgan dentro de la plataforma o en la tabla de comisiones aplicable. Usted es responsable de cualquier impuesto que surja de sus actividades.</p>

    <h2>6. Conducta Prohibida</h2>
    <ul>
      <li>Utilizar los servicios para blanqueo de capitales, financiación del terrorismo, manipulación del mercado o cualquier propósito ilegal.</li>
      <li>Suplantar a otra persona o proporcionar información de identidad falsa.</li>
      <li>Intentar interferir con, comprometer o descodificar ninguna parte de la plataforma.</li>
      <li>Utilizar herramientas automatizadas para acceder a los servicios de forma distinta a la expresamente permitida.</li>
    </ul>

    <h2>7. Propiedad Intelectual</h2>
    <p>Todo contenido, marcas registradas, software y materiales en el sitio web son propiedad de <?= e(SITE_NAME) ?> o de sus licenciantes y están protegidos por las leyes de propiedad intelectual aplicables. Se le otorga una licencia limitada, no exclusiva y revocable para utilizar los servicios para su propósito previsto.</p>

    <h2>8. Servicios de Terceros</h2>
    <p>La plataforma puede contener enlaces a o integrarse con servicios de terceros. No somos responsables de tales servicios ni de su disponibilidad, precisión o contenido.</p>

    <h2>9. Descargos de Responsabilidad</h2>
    <p>Los servicios se proporcionan "tal cual" y "según disponibilidad" sin garantías de ningún tipo. El trading implica un riesgo sustancial de pérdida. Consulte nuestra <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Declaración de Riesgos</a> para más detalles.</p>

    <h2>10. Limitación de Responsabilidad</h2>
    <p>En la máxima medida permitida por la ley, <?= e(SITE_NAME) ?> no será responsable de daños indirectos, incidentales, especiales, consecuentes o punitivos, ni de ninguna pérdida de beneficios o ingresos, que resulten de su uso de los servicios.</p>

    <h2>11. Indemnización</h2>
    <p>Usted se compromete a indemnizar y mantener indemnes a <?= e(SITE_NAME) ?>, sus filiales y personal de cualquier reclamación o demanda que surja de su incumplimiento de estas Condiciones o su uso indebido de los servicios.</p>

    <h2>12. Suspensión y Terminación</h2>
    <p>Podemos suspender o terminar el acceso a los servicios en cualquier momento, con o sin previo aviso, si creemos que ha incumplido estas Condiciones o la ley aplicable.</p>

    <h2>13. Ley Aplicable</h2>
    <p>Estas Condiciones se rigen por las leyes aplicables en la sede de <?= e(SITE_NAME) ?>, sin consideración a los principios de conflicto de leyes.</p>

    <h2>14. Cambios</h2>
    <p>Podemos enmendar estas Condiciones de tiempo en tiempo. El uso continuado de los servicios después de cambios constituye aceptación de las Condiciones revisadas.</p>

    <h2>15. Contacto</h2>
    <p>Las preguntas sobre estas Condiciones pueden enviarse a través de nuestra página de contacto.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Volver a la página de inicio</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
