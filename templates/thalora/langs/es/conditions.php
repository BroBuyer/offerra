<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Términos y condiciones | Acuerdo de usuario con ' . SITE_NAME;
$page_description = 'Consulta los términos de la plataforma, las reglas de trading y las políticas de asistencia de ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Términos y condiciones', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="ruta de navegación" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Inicio</a>
            <span class="breadcrumb-item">Términos y condiciones</span>
        </nav>
        <h1>Términos y condiciones</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Introducción</h2>
    <p>Este sitio presenta servicios de trading de terceros. Al continuar, aceptas estos términos y nuestra política de privacidad. Los términos pueden actualizarse.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Elegibilidad</h2>
    <p>Debes tener al menos 18 años y estar legalmente autorizado a aceptar estos términos, según la ley local. Declinamos responsabilidad en caso de uso indebido de la plataforma.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Limitaciones de acceso</h2>
    <p>El acceso puede restringirse en ciertas regiones o ante límites regulatorios. Algunos servicios pueden no estar disponibles en determinados lugares.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Uso adecuado</h2>
    <p>El uso no autorizado está prohibido, incluidas actividades ilícitas, infracción de derechos, difusión de contenido dañino o bots. Las infracciones pueden conllevar la suspensión de la cuenta.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Propiedad intelectual</h2>
    <p>Todo el contenido, las marcas y los derechos de propiedad intelectual nos pertenecen a nosotros o a nuestros afiliados. El uso del sitio es personal; copiar o modificar el contenido no está permitido.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Limitación de responsabilidad</h2>
    <p>Los servicios y el sitio se ofrecen «tal cual». No aceptamos responsabilidad por errores, pérdidas o daños derivados del uso.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Contenido de terceros</h2>
    <p>Pueden aparecer contenidos o enlaces de terceros sin garantía de exactitud o disponibilidad; verifícalos por tu cuenta.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Enlaces externos</h2>
    <p>Los enlaces externos se ofrecen por comodidad. No respaldamos ni controlamos esos sitios y declinamos responsabilidad por su contenido.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Disposiciones adicionales</h2>
    <p>Podemos actualizar servicios y términos. Estos términos constituyen el acuerdo completo. No ejercer un derecho no implica renuncia.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
