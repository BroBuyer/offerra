<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Podpora | Pomoc tímu ' . SITE_NAME;
$page_description = 'Kontaktujte tím ' . SITE_NAME . ' pri účtoch, vkladoch, výberoch a otázkach o platforme.';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Kontakt', 'contacts.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="navigačná cesta"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Domov</a>
            <span class="breadcrumb-item">Kontakt</span>
          </nav>
        </div>
      </div>
      <!-- contact -->
      <div class="py-8 md:py-10">
        <div class="container-base grid items-center gap-6 md:gap-10">
<h1>Kontakt</h1>
  <p class="lead max-w-3xl justify-self-center text-center md:text-left">Tím <?= e(SITE_NAME) ?> odpovedá na otázky o účtoch, vkladoch, výberoch, grafoch a nástrojoch AI. Pomoc ide oficiálnymi kanálmi — bez osobných investičných odporúčaní či záruk zisku.</p>
<div class="grid gap-4 text-center md:gap-6 md:text-left max-w-3xl justify-self-center">
  <h3>Napíšte nám pre ďalšiu pomoc</h3>  <p>Pred kontaktom majte po ruke e-mail účtu, tému (registrácia, platba, technické) a snímky obrazovky, ak treba. Čím jasnejšie detaily, tým rýchlejšie riešenie.</p>  <p>Žiadosti o aktívne obchody alebo čakajúce výbery majú prioritu, keď je to možné. Pre bezpečnosť nikdy nepožiadame o celé heslo ani kódy 2FA v nevyžiadaných e-mailoch.</p>  <p>Ak ste sa ešte neregistrovali, otvorte účet v niekoľkých minútach na stránke registrácie a vráťte sa sem. Pozrite aj FAQ o poplatkoch, bezpečnosti a dostupných trhoch.</p>  <p>Uveďte jasný predmet (napr. «Výber čaká», «Problém 2FA», «Otázka o poplatku»). Väčšina dopytov dostane prvú odpoveď do niekoľkých hodín; veľký objem alebo kontroly platieb môžu predĺžiť čas.</p></div>
            <a class="h3 inline-flex flex-wrap items-center justify-center gap-4 justify-self-center text-center" href="mailto:<?= e(SUPPORT_EMAIL) ?>">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="56"
                height="56"
                viewBox="0 0 56 56"
                fill="none"
              >
                <path
                  d="M44.3334 9.33325H11.6667C9.81023 9.33325 8.02976 10.0708 6.717 11.3835C5.40425 12.6963 4.66675 14.4767 4.66675 16.3333V39.6666C4.66675 41.5231 5.40425 43.3036 6.717 44.6163C8.02976 45.9291 9.81023 46.6666 11.6667 46.6666H44.3334C46.1899 46.6666 47.9704 45.9291 49.2832 44.6163C50.5959 43.3036 51.3334 41.5231 51.3334 39.6666V16.3333C51.3334 14.4767 50.5959 12.6963 49.2832 11.3835C47.9704 10.0708 46.1899 9.33325 44.3334 9.33325ZM44.3334 13.9999L29.1667 24.4299C28.812 24.6347 28.4097 24.7425 28.0001 24.7425C27.5905 24.7425 27.1881 24.6347 26.8334 24.4299L11.6667 13.9999H44.3334Z"
                  fill="url(#paint0_linear_10004_4431)"
                ></path>
                <defs>
                  <linearGradient
                    id="paint0_linear_10004_4431"
                    x1="52.6135"
                    y1="24.2296"
                    x2="9.26888"
                    y2="23.6538"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="var(--color-primary-light)"></stop>
                    <stop
                      offset="0.5"
                      stop-color="var(--color-primary-lighter)"
                    ></stop>
                    <stop offset="1" stop-color="var(--color-primary)"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <span><?= e(SUPPORT_EMAIL) ?></span>
            </a>
          </div>
        </div>
      </div>
      <!-- support -->
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
            <h2>Ako vám môžeme pomôcť?</h2>
          </div>
<?php
  $form_id = "lead-form-contacts";
  $form_heading = null;
  $form_submit = 'Vytvoriť účet';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
