<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Öppna ditt konto | Börja handla hos ' . SITE_NAME;
$page_description = 'Öppna snabbt ditt ' . SITE_NAME . '-konto för att låsa upp avancerade AI-handelsfunktioner.';
$page_canonical = page_url("sign.php");
$active_page = "sign";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Logga in / Registrera', 'sign.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
<div class="pt-5">
  <div class="container-base">
    <nav
      aria-label="sökväg"
      class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
    >
      <a href="<?= page_url() ?>" class="breadcrumb-item">Hem</a>
      <span class="breadcrumb-item">Logga in / Registrera</span>
    </nav>
  </div>
</div>
      <!-- registration-1 -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <div
              class="text-primary teal:text-secondary absolute top-36 right-8 -z-10 max-lg:hidden"
            >
              <svg
                width="729"
                height="419"
                viewBox="0 0 729 419"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M22.873 408.674C151.969 116.052 291.571 115.647 383.641 203.172C435.153 252.141 536.754 245.195 591.295 177.036C607.403 156.905 640.07 124.561 696.873 42.2554"
                  stroke="url(#paint0_linear_4024_13698)"
                  stroke-width="50"
                />
                <path
                  d="M584.873 61.9606C631.345 47.5267 703.873 25.0002 703.873 25.0002V158.981"
                  stroke="url(#paint1_linear_4024_13698)"
                  stroke-width="50"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_4024_13698"
                    x1="539.758"
                    y1="-116.611"
                    x2="539.758"
                    y2="492.611"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_4024_13698"
                    x1="644.373"
                    y1="25.0002"
                    x2="644.373"
                    y2="160.521"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
<h1>Öppna ditt <?= e(SITE_NAME) ?>-konto redan idag</h1>
<h2>Handla på en reglerad plattform™</h2>
<p>
  Betrodd av enskilda handlare och företag för säker köp, försäljning och hantering av kryptovaluta.</p>
          </div>
        






<?php
  $form_id = "lead-form-sign";
  $form_heading = null;
  $form_submit = 'Skapa konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
