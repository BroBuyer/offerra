<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Acerca de ' . SITE_NAME . ' | La plataforma de trading en detalle';
$page_description = 'Descubre la misión, la tecnología y el compromiso de ' . SITE_NAME . ' con una experiencia de trading segura.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Quiénes somos', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="ruta de navegación"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Inicio</a>
            <span class="breadcrumb-item">Quiénes somos</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Nuestra identidad</h1>
                      <p class="lead">Plataforma, funciones y trading responsable.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> une el acceso al mercado y las herramientas de análisis en una plataforma única y ágil.</p>
            <p>Nos centramos en medidas de seguridad sólidas y procesos transparentes, fáciles de entender.</p>
            <p>El trading conlleva riesgos y los rendimientos no se pueden garantizar.</p>
            <p>El onboarding es sencillo: crea la cuenta, confirma el correo, deposita un mínimo de <?= e(money_min()) ?>, y accede al panel. Pasa del modo manual al asistido, define límites y gestiona el riesgo según tu perfil.</p>            <p>El soporte ayuda con cuentas, pagos, retiros y funciones de la plataforma. No ofrece asesoramiento de inversión personalizado. Si hay urgencia durante una operación activa, indica el correo de la cuenta y el estado del panel.</p>            <p>Principiantes y traders con experiencia encuentran un entorno claro: tutoriales por un lado, controles avanzados y seguimiento de rendimiento por el otro. Medimos <?= e(SITE_NAME) ?> por la calidad de la experiencia — no por marketing agresivo. Antes de registrarte, lee FAQ, términos y privacidad: riesgos, plazos de retiro y requisitos de la cuenta.</p>            <p>At <?= e(SITE_NAME) ?>, encuentras flujos guiados, herramientas de seguimiento y soporte operativo centrado en procesos de cuenta y pago transparentes, sin prometer resultados de mercado.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Regístrate hoy</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>¿Cómo podemos ayudarte?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Crear cuenta';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
