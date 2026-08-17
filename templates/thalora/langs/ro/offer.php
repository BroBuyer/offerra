<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Soluții de tranzacționare | Servicii bazate pe AI — ' . SITE_NAME;
$page_description = 'Profitați de onboarding personalizat, supravegherea portofoliului, securitate criptată și asistență de piață de la ' . SITE_NAME . '.';
$page_canonical = page_url("offer.php");
$active_page = "offer";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Promoții', 'offer.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="fir de navigare"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
<a href="<?= page_url() ?>" class="breadcrumb-item">Acasă</a>
<span class="breadcrumb-item">Detaliile ofertei</span>
          </nav>
        </div>
      </div>
      <!-- tracker -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom flex flex-col justify-between gap-6 lg:min-h-[540px] lg:overflow-hidden lg:border lg:p-8"
          >
 <h1 class="relative z-20">Începeți parcursul cu <?= e(SITE_NAME) ?>: urmărirea pieței, analiză și suport</h1>
<p class="relative z-20">
  Înregistrați-vă, confirmați identitatea și alimentați contul în câțiva pași. Urmărirea portofoliului, asistență AI și un parcurs ghidat de la prima autentificare la panou.</p>
          </div>
          <div class="relative grid min-h-[355px] content-end">
            <div
              class="text-primary teal:text-secondary absolute top-0 right-0 z-10 w-[1000px] max-md:translate-y-[50px] lg:w-[1486px]"
            >
              <svg
                viewBox="0 0 1486 736"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M25.0068 710.675C118.007 414.175 206.507 299.5 535.507 343.5C864.507 387.5 820.077 177.675 990.007 177.675C1092.51 177.675 1124.51 362 1449.51 33.5"
                  stroke="url(#paint0_linear_41_6213)"
                  stroke-width="50"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M1333.01 25.1989L1460.36 24.9999L1460.56 149.829"
                  stroke="url(#paint1_linear_41_6213)"
                  stroke-width="50"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_41_6213"
                    x1="1117.44"
                    y1="-260.101"
                    x2="1117.44"
                    y2="865.799"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_41_6213"
                    x1="1277.84"
                    y1="54.3839"
                    x2="1489.58"
                    y2="54.0531"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="currentColor" />
                    <stop offset="1" stop-color="currentColor" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div
              class="absolute left-[5%] z-20 max-lg:max-w-[230px] md:left-[10%] lg:top-5"
            >
              <div class="offer-visual">
                                <picture>
                  <source type="image/avif" srcset="<?= asset('static/img/responsive/orange/phone-3-1033.avif') ?>" />
                  <source type="image/webp" srcset="<?= asset('static/img/responsive/orange/phone-3-1033.webp') ?>" />
                  <img
                    src="<?= asset('static/img/responsive/orange/phone-3-1033.webp') ?>"
                    alt="<?= e(SITE_NAME) ?> trading app"
                    class="offer-phone"
                    width="400"
                    height="660"
                    loading="lazy"
                    decoding="async"
                  />
                </picture>
              </div>
            </div>
            <div
              class="bg-before-custom relative z-30 grid grid-cols-2 gap-3 md:gap-6"
            >
              <a class="btn btn-black col-span-full" href="<?= page_url('sign.php') ?>">Înregistrare</a>
              <a class="btn btn-black btn-square" href="<?= page_url('sign.php') ?>">
                <img src="<?= asset('static/img/svg/google-play.svg') ?>" alt="Descarcă din Google Play" />
              </a>
              <a class="btn btn-black btn-square" href="<?= page_url('sign.php') ?>">
                <img src="<?= asset('static/img/svg/app-store.svg') ?>" alt="Descarcă din App Store" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- offer seo depth -->
<div class="py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-8">
    <p class="text-lg max-w-4xl">Oferim onboarding ghidat, acces deplin la instrumentele de piață și asistență continuă. Un drum clar și transparent de la înregistrare la tranzacționarea zilnică, fără scurtături.</p>    <p class="max-w-4xl">Un depozit minim deblochează toate funcțiile. Explorați strategii AI, gestionați riscul și urmăriți portofoliul.</p>    <p class="max-w-4xl">Verificați întotdeauna taxele, timpii de retragere și pașii de verificare pe platformă. Păstrați controlul operațional: limitele, mărimea poziției și opțiunile manuale rămân disponibile și când alertele automate sunt active.</p>    <p class="max-w-4xl">Suportul explică cum funcționează <?= e(SITE_NAME) ?> și starea tranzacțiilor; nu oferă sfaturi personalizate. Piețele implică risc: evaluați expunerea și tranzacționați doar cu bani pe care vi-i puteți permite să-i pierdeți.</p>    <div class="grid gap-4 md:grid-cols-3">
            <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-2">Onboarding fără efort</h2>
        <p>Creare de cont fără efort, confirmarea identității și acces clar la panou.</p>
      </div>
            <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-2">AI și piețe</h2>
        <p>Analitică integrată, semnale automate și acces la mai multe piețe pe o singură platformă.</p>
      </div>
            <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-2">Suport clienți clar</h2>
        <p>Taxe și reguli de retragere clare; asistență dedicată pentru conturi și tranzacții.</p>
      </div>
          </div>
  </div>
</div>
      <!-- workflow -->
<div class="relative z-40 py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-10">
    <h2>Principii de funcționare</h2>
    <div class="relative grid gap-x-4 gap-y-6 lg:grid-cols-3">
      <div class="backline"></div>
    <div class="border-primary h3 rounded-custom relative z-10 flex items-center justify-center border bg-white p-4 text-center md:p-6">
      Creați profilul    </div>
    <div class="border-primary h3 rounded-custom relative z-10 flex items-center justify-center border bg-white p-4 text-center md:p-6">
      Alimentați contul    </div>
    <div class="border-primary h3 rounded-custom relative z-10 flex items-center justify-center border bg-white p-4 text-center md:p-6">
      Tranzacționați cu încredere    </div>
        </div>
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
<h2>Platforma oficială <?= e(SITE_NAME) ?> pentru tranzacționare metodică</h2>
<p>
  <?= e(SITE_NAME) ?> este gândită pentru persoane și echipe care gestionează monede și active digitale: instrumente clare, criptare SSL și asistență rapidă. O singură platformă pentru analiză, tranzacționare și gestionarea portofoliului.</p>
          </div>
        






<?php
  $form_id = "lead-form-offer";
  $form_heading = null;
  $form_submit = 'Creează cont';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
