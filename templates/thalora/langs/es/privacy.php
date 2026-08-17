<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privacidad | Protección de datos en ' . SITE_NAME;
$page_description = 'Descubre cómo ' . SITE_NAME . ' protege tus datos con nuestra política de privacidad.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Política de privacidad', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="ruta de navegación"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Inicio</a>
  <span class="breadcrumb-item">Política de privacidad</span>
</nav>
<h1>Nuestro compromiso con tu privacidad</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Última actualización: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («nosotros»), la protección de tus datos personales es una prioridad. Esta declaración explica cómo recopilamos, usamos y protegemos tu información.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparencia en el tratamiento de datos</p>
    <p>
      Buscamos claridad sobre el tratamiento de datos. Contáctanos en      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Finalidad del uso de datos</p>
    <p>Usamos tu información para prestar servicios, mejorar la plataforma y cumplir obligaciones legales.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Acceso a tus datos</p>
    <p>Puedes solicitar en cualquier momento acceso, corrección o eliminación de tus datos personales.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Prácticas de seguridad</p>
    <p>Aplicamos medidas de seguridad sólidas, sin poder garantizar una protección absoluta.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Información que recopilamos</h2>
    <p>Recopilamos, entre otros, direcciones IP, datos del dispositivo, tipos de navegador y la información que nos facilites.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Bases del tratamiento</h2>
    <p>El tratamiento se basa en el consentimiento, en nuestros intereses legítimos y en el cumplimiento de las leyes aplicables.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Cesión de datos</h2>
    <p>Tus datos pueden compartirse con partners de confianza, proveedores y autoridades cuando la ley lo exija.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookies</h2>
    <p>Las cookies permiten el funcionamiento del sitio y el análisis de uso; puedes desactivarlas si lo deseas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Periodo de conservación</h2>
    <p>Conservamos la información solo el tiempo necesario para las finalidades descritas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Transferencias internacionales</h2>
    <p>Los datos pueden transferirse fuera del país, con las garantías adecuadas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Enlaces a otros sitios</h2>
    <p>No asumimos responsabilidad por los sitios externos enlazados desde la plataforma ni por sus prácticas.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Actualizaciones de esta política</h2>
    <p>Esta política de privacidad puede actualizarse.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Tus derechos</h2>
    <p>Tienes derecho a acceder, rectificar, suprimir, limitar el tratamiento, transferir los datos, retirar el consentimiento y presentar una reclamación.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
