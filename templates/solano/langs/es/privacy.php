<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Política de Privacidad ᐉ ' . SITE_NAME;
$page_description = 'Cómo ' . SITE_NAME . ' recopila, utiliza y protege su información personal.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Información legal</span>
    <h1>Política de Privacidad</h1>
    <p class="rmct9">Cómo <?= e(SITE_NAME) ?> recopila, utiliza y protege su información personal.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Última actualización: enero de 2025</p>

    <h2>1. Introducción</h2>
    <p><?= e(SITE_NAME) ?> ("nosotros", "nos", "nuestro") se compromete a proteger la privacidad de los visitantes y clientes. Esta Política de Privacidad explica qué datos personales recopilamos, por qué los recopilamos y cómo los tratamos cuando utiliza nuestro sitio web y servicios.</p>

    <h2>2. Información que recopilamos</h2>
    <ul>
      <li><strong>Datos de identidad</strong> — nombre, fecha de nacimiento, identificación oficial expedida por el Estado para verificación de identidad y cumplimiento de normativa KYC/AML.</li>
      <li><strong>Datos de contacto</strong> — dirección de correo electrónico, número de teléfono, dirección postal.</li>
      <li><strong>Datos financieros</strong> — detalles de pago, historial de transacciones, información sobre origen de fondos.</li>
      <li><strong>Datos técnicos</strong> — dirección IP, tipo de navegador, identificadores de dispositivo, cookies y análisis de uso.</li>
    </ul>

    <h2>3. Cómo utilizamos sus datos</h2>
    <ul>
      <li>Para verificar la identidad y cumplir con las obligaciones normativas.</li>
      <li>Para proporcionar, mantener y mejorar nuestra plataforma y servicios.</li>
      <li>Para procesar pagos y detectar actividades fraudulentas.</li>
      <li>Para comunicarnos con usted respecto a su cuenta, actualizaciones y solicitudes de soporte.</li>
      <li>Para enviar comunicaciones de marketing cuando usted haya consentido (puede optar por no participar en cualquier momento).</li>
    </ul>

    <h2>4. Base jurídica</h2>
    <p>Procesamos datos personales en virtud de una o más de las siguientes bases legales: ejecución de un contrato, cumplimiento de una obligación legal, nuestros intereses legítimos, o su consentimiento.</p>

    <h2>5. Intercambio y divulgación</h2>
    <p>Podemos compartir datos personales con proveedores de pagos regulados, socios de verificación KYC/AML, proveedores de infraestructura en la nube, asesores profesionales, y autoridades competentes cuando la ley lo requiera. No vendemos datos personales.</p>

    <h2>6. Transferencias internacionales</h2>
    <p>Cuando los datos personales se transfieren fuera de su jurisdicción, nos aseguramos de que las garantías apropiadas estén en lugar, incluidas las cláusulas contractuales estándar.</p>

    <h2>7. Retención de datos</h2>
    <p>Conservamos datos personales durante el tiempo necesario para prestar servicios y cumplir requisitos legales, regulatorios y contables — típicamente al menos cinco años después del cierre de una cuenta.</p>

    <h2>8. Sus derechos</h2>
    <p>Sujeto a la ley aplicable, usted puede solicitar acceso, corrección, eliminación, restricción o portabilidad de sus datos personales, y puede oponerse a ciertos tratamientos. Para ejercer estos derechos, contáctenos a través de la dirección que se indica a continuación.</p>

    <h2>9. Cookies</h2>
    <p>Utilizamos cookies esenciales y analíticas para operar el sitio y comprender el uso. Puede gestionar las cookies a través de la configuración de su navegador.</p>

    <h2>10. Seguridad</h2>
    <p>Aplicamos salvaguardas administrativas, técnicas y físicas diseñadas para proteger los datos personales contra acceso no autorizado, divulgación, alteración o destrucción. Ningún sistema es perfectamente seguro, y no podemos garantizar una seguridad absoluta.</p>

    <h2>11. Cambios</h2>
    <p>Podemos actualizar esta Política de vez en cuando. La versión más reciente siempre estará disponible en esta página con la fecha actualizada.</p>

    <h2>12. Contacto</h2>
    <p>Para preguntas sobre privacidad o para ejercer sus derechos, contacte al equipo de Protección de Datos «N» a través de nuestra página de contacto.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Volver a la página de inicio</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
