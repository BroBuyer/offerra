<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Handelsinstrumenter | AI-forsterkede funksjoner — ' . SITE_NAME;
$page_description = 'Bruk livediagrammer, AI-innsikter og handelsverktøyene til ' . SITE_NAME . ', med pålitelig sikkerhet.';
$page_canonical = page_url("product.php");
$active_page = "product";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Plattformfunksjoner', 'product.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
<div class="pt-5">
  <div class="container-base">
    <nav
      aria-label="navigasjonssti"
      class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
    >
      <a href="<?= page_url() ?>" class="breadcrumb-item">Hjemmeside</a>
      <span class="breadcrumb-item">Plattformfunksjoner</span>
    </nav>
  </div>
</div>
      <!-- analytics -->
     <div class="py-8 md:py-10">
  <div class="container-base grid gap-6 lg:grid-cols-2">
    <div
      class="border-primary rounded-custom flex flex-col justify-between gap-6 lg:min-h-[540px] lg:overflow-hidden lg:border lg:p-8"
    >
      <h1 class="relative z-20">AI-forsterket handel og analyse</h1>
      <p class="relative z-20">
        Få omfattende markeds- og porteføljeinnsikt med analysen til <?= e(SITE_NAME) ?>. Sanntidsdiagrammer, integrerte indikatorer og AI-analyse for informerte valg.      </p>
    </div>
    <div class="relative grid min-h-[355px] content-end">
      <div
        class="text-primary teal:text-secondary absolute top-0 right-0 z-10 w-[750px] max-lg:-translate-x-[15px] max-lg:-translate-y-[100px] max-lg:rotate-11 lg:w-[1357px]"
      >
        <svg
          viewBox="0 0 1357 562"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M26.8496 536.475C160.35 367.475 181.35 256.475 516.85 319.475C852.35 382.475 1122.35 318.976 1301.85 41.4756"
            stroke="url(#paint0_linear_4078_12306)"
            stroke-width="50"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M1192.13 40.0415L1318.82 27.0977L1331.51 151.281"
            stroke="url(#paint1_linear_4078_12306)"
            stroke-width="50"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <defs>
            <linearGradient
              id="paint0_linear_4078_12306"
              x1="1004.64"
              y1="-173.14"
              x2="1004.64"
              y2="649.868"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="currentColor" />
              <stop offset="1" stop-color="currentColor" />
            </linearGradient>
            <linearGradient
              id="paint1_linear_4078_12306"
              x1="1140.15"
              y1="74.6015"
              x2="1350.8"
              y2="53.0807"
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
              alt="<?= e(SITE_NAME) ?> mobile app showing portfolio overview"
              class="offer-phone"
              width="400"
              height="660"
              loading="lazy"
              decoding="async"
            />
          </picture>
        </div>
      </div>
      <div class="bg-before-custom relative z-30 grid grid-cols-2 gap-3 md:gap-6">
        <a class="btn btn-black col-span-full" href="<?= page_url('sign.php') ?>">Registrer deg</a>
        <a class="btn btn-black btn-square" href="<?= page_url('sign.php') ?>">
          <img src="<?= asset('static/img/svg/google-play.svg') ?>" alt="Last ned på Google Play" />
        </a>
        <a class="btn btn-black btn-square" href="<?= page_url('sign.php') ?>">
          <img src="<?= asset('static/img/svg/app-store.svg') ?>" alt="Last ned i App Store" />
        </a>
      </div>
    </div>
  </div>
</div>
      <!-- product seo depth -->
<div class="py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-8 max-w-4xl">
    <p class="text-lg"><?= e(SITE_NAME) ?> tilbyr en integrert plattform: handelsverktøy, bred markedsovervåking og assistert automatisering. Se funksjoner og daglige fordeler nedenfor.</p>    <p>Plattformen gir tilgang til flere markeder — kryptovaluta, forex, aksjer og råvarer — med livepriser. Styr ordrer og risiko fra ett dashbord, uten å hoppe mellom apper.</p>    <p>Analyseverktøyene slår sammen sanntidsdata og AI-innsikter for å fange trender og vesentlige bevegelser. De støtter beslutningene; du styrer strategi, volum og grenser. Grensesnittet sikter mot enkelhet og effektiv utførelse.</p>    <p>Sikkerhet og pålitelighet er grunnlaget: krypterte tilkoblinger, sterkt kontovern og tydelige innskudd. Passer nybegynnere og eksperter, og skalerer fra grunnleggende bruk til avansert handel uten å bytte plattform.</p>    <div class="grid gap-6 md:grid-cols-2">
            <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-3">Markeder og handelsinstrumenter</h2>
        <p>Følg digitale valutaer, forex, aksjer og råvarer med integrerte verktøy, overvåkningslister og varsler. <?= e(SITE_NAME) ?> knytter analysen til ordre- og porteføljeforvaltning.</p>
      </div>
                  <div class="border-primary rounded-custom border p-4 md:p-6">
        <h2 class="h3 mb-3">Åpenhet, sikkerhet og kontroll</h2>
        <p>Sikre tilkoblinger, verifiserte prosedyrer, åpne innskudd og uttak. Gebyrene vises før bekreftelse.</p>
      </div>
          </div>
  </div>
</div>
      <!-- overview -->
<div class="py-8 md:py-10">
  <div class="container-base grid items-center gap-3 md:gap-6 lg:grid-cols-2">
    <div class="grid gap-6 md:gap-10">
      <h2>Nettleserbasert handelsplattform</h2>
      <div class="grid grid-cols-2 gap-x-8 gap-y-6">
        <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
          <div class="w-20 sm:w-[104px]">
            <svg viewBox="0 0 104 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="104" y="7" width="105" height="104" rx="52" transform="rotate(90 104 7)" fill="var(--color-primary)" />
              <rect x="47" y="32" width="10" height="57" rx="5" fill="white" />
              <rect x="80" y="55" width="10" height="57" rx="5" transform="rotate(90 80 55)" fill="white" />
              <rect x="28.1655" y="43.5295" width="10" height="57" rx="5" transform="rotate(-45 28.1655 43.5295)" fill="white" />
              <rect x="67.7637" y="36.4583" width="10" height="57" rx="5" transform="rotate(45 67.7637 36.4583)" fill="white" />
            </svg>
          </div>
          <div class="grid gap-2 md:gap-3">
            <p class="h3">Finansmarkeder</p>
            <p>Umiddelbar tilgang til alle funksjoner</p>
          </div>
        </div>
        <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
          <div class="w-20 sm:w-[104px]">
            <svg viewBox="0 0 104 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M98.4048 14.7125C99.4448 12.6232 102.114 11.4462 103.304 13.4537C103.746 14.1989 104 15.0689 104 15.9983V107.399C104 110.16 101.761 112.399 99 112.399H5C2.23862 112.399 7.67312e-05 110.16 0 107.399V88.131C0 87.3872 0.165963 86.6527 0.485793 85.9812L15.612 54.2197C17.3025 50.6701 22.2396 50.3703 24.3472 53.6893L27.8057 59.1359C29.8804 62.4032 34.7211 62.1757 36.4803 58.7282L52.3147 27.6971C53.9817 24.4303 58.4818 24.0103 60.7246 26.9122L75.0723 45.4768C77.3284 48.3959 81.8607 47.9501 83.5047 44.6473L98.4048 14.7125Z" fill="var(--color-primary)" />
            </svg>
          </div>
          <div class="grid gap-2 md:gap-3">
            <p class="h3">Markedsinnsikt</p>
            <p>Rask tilgang til komplette datahistorikker</p>
          </div>
        </div>
        <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
          <div class="w-20 sm:w-[104px]">
            <svg viewBox="0 0 104 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M50.3823 93.6408C51.431 93.2822 52.569 93.2822 53.6177 93.6408L91.4723 106.585C95.3711 107.918 99.1184 104.228 97.8455 100.309L85.451 62.1533C85.1167 61.1243 85.1252 60.0146 85.4753 58.9909L98.6494 20.4629C99.9825 16.5641 96.2924 12.8168 92.3736 14.0897L53.5447 26.703C52.5407 27.0291 51.4593 27.0291 50.4552 26.703L11.6263 14.0897C7.70755 12.8167 4.01741 16.5641 5.35053 20.4628L18.5246 58.9909C18.8747 60.0146 18.8832 61.1243 18.549 62.1533L6.15449 100.309C4.88151 104.228 8.62886 107.918 12.5276 106.585L50.3823 93.6408Z" fill="var(--color-primary)" />
            </svg>
          </div>
          <div class="grid gap-2 md:gap-3">
            <p class="h3">Optimalisert for mobil</p>
            <p>En smidig mobilopplevelse, uansett hvor du er</p>
          </div>
        </div>
        <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
          <div class="w-20 sm:w-[104px]">
            <svg viewBox="0 0 104 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="66.999" width="104" height="53" rx="19" fill="var(--color-primary)" />
              <circle cx="52" cy="28" r="28" fill="var(--color-primary)" />
            </svg>
          </div>
          <div class="grid gap-2 md:gap-3">
            <p class="h3">Kryptovalutaforvaltning</p>
            <p>Forvalt hele porteføljen enkelt</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-center">
            <picture>
        <source type="image/avif" srcset="<?= asset('static/img/responsive/orange/phone-4-1033.avif') ?>" />
        <source type="image/webp" srcset="<?= asset('static/img/responsive/orange/phone-4-1033.webp') ?>" />
        <img
          src="<?= asset('static/img/responsive/orange/phone-4-1033.webp') ?>"
          alt="<?= e(SITE_NAME) ?> — handelsplattform på mobil"
          class="w-full h-auto max-w-[340px] mx-auto drop-shadow-xl"
          width="340"
          height="560"
          loading="lazy"
          decoding="async"
        />
      </picture>
    </div>
  </div>
</div>
      <!-- stats -->
<div class="py-8 md:py-10">
  <div
    class="stats-cards container-base grid gap-3 md:grid-cols-2 md:gap-6 xl:grid-cols-4"
  >
    <div
      class="rounded-custom grid content-start gap-5 border p-4 md:p-6"
    >
      <p class="h2 lowercase">70+</p>
      <p class="h3">Støttede valutaer</p>
    </div>
    <div
      class="rounded-custom grid content-start gap-5 border p-4 md:p-6"
    >
      <p class="h2 lowercase">42m</p>
      <p class="h3">Verifiserte brukere</p>
    </div>
    <div
      class="rounded-custom grid content-start gap-5 border p-4 md:p-6"
    >
      <p class="h2 lowercase"><?= e(currency_symbol()) ?>440m</p>
      <p class="h3">Transaksjonsvolum</p>
    </div>
    <div
      class="rounded-custom grid content-start gap-5 border p-4 md:p-6"
    >
      <p class="h2 lowercase">100+</p>
      <p class="h3">Støttede land</p>
    </div>
  </div>
</div>
      <!-- capabilities -->
<div class="py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-10">
    <h2>Digitale funksjoner</h2>
    <div class="grid gap-6 lg:grid-cols-2">
      <div class="flex gap-3 md:gap-6">
        <div class="border-primary inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-[5px] border md:h-[60px] md:w-[60px] md:rounded-[10px]">
          <span class="h-7 w-7 md:h-[42px] md:w-[42px]">
            <svg viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.3199 1.32873C14.9512 -0.442766 17.4565 -0.442763 18.0878 1.32873L18.8827 3.55947C19.3231 4.7951 20.8137 5.27942 21.8962 4.5386L23.8505 3.20117C25.4025 2.13907 27.4294 3.61164 26.8988 5.41588L26.2308 7.68786C25.8607 8.94633 26.782 10.2143 28.0932 10.2513L30.4604 10.318C32.3403 10.371 33.1145 12.7536 31.6248 13.9015L29.7489 15.3469C28.7098 16.1475 28.7098 17.7148 29.7489 18.5154L31.6248 19.9608C33.1145 21.1086 32.3403 23.4913 30.4604 23.5443L28.0932 23.611C26.782 23.648 25.8607 24.9159 26.2308 26.1744L26.8988 28.4464C27.4294 30.2506 25.4025 31.7232 23.8505 30.6611L21.8962 29.3236C20.8137 28.5828 19.3231 29.0672 18.8827 30.3028L18.0878 32.5335C17.4565 34.305 14.9512 34.305 14.3199 32.5335L13.5249 30.3028C13.0846 29.0672 11.594 28.5828 10.5115 29.3236L8.55711 30.6611C7.00512 31.7232 4.97831 30.2506 5.50883 28.4464L6.17688 26.1744C6.54692 24.9159 5.62568 23.648 4.31446 23.611L1.94724 23.5443C0.0673637 23.4913 -0.706807 21.1086 0.782898 19.9608L2.6588 18.5154C3.69788 17.7148 3.69788 16.1475 2.6588 15.3469L0.782897 13.9015C-0.706808 12.7536 0.0673671 10.371 1.94724 10.318L4.31447 10.2513C5.62569 10.2143 6.54692 8.94632 6.17688 7.68786L5.50883 5.41587C4.97831 3.61163 7.00512 2.13907 8.55712 3.20117L10.5115 4.53861C11.594 5.27942 13.0846 4.7951 13.5249 3.55947L14.3199 1.32873Z" fill="var(--color-primary)" />
            </svg>
          </span>
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Viktige investeringsfunksjoner</p>
          <p>Kompetanse vist gjennom konkrete prosjekter og kreative tilnærminger.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div class="border-primary inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-[5px] border md:h-[60px] md:w-[60px] md:rounded-[10px]">
          <span class="h-7 w-7 md:h-[42px] md:w-[42px]">
            <svg viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.3199 1.32873C14.9512 -0.442766 17.4565 -0.442763 18.0878 1.32873L18.8827 3.55947C19.3231 4.7951 20.8137 5.27942 21.8962 4.5386L23.8505 3.20117C25.4025 2.13907 27.4294 3.61164 26.8988 5.41588L26.2308 7.68786C25.8607 8.94633 26.782 10.2143 28.0932 10.2513L30.4604 10.318C32.3403 10.371 33.1145 12.7536 31.6248 13.9015L29.7489 15.3469C28.7098 16.1475 28.7098 17.7148 29.7489 18.5154L31.6248 19.9608C33.1145 21.1086 32.3403 23.4913 30.4604 23.5443L28.0932 23.611C26.782 23.648 25.8607 24.9159 26.2308 26.1744L26.8988 28.4464C27.4294 30.2506 25.4025 31.7232 23.8505 30.6611L21.8962 29.3236C20.8137 28.5828 19.3231 29.0672 18.8827 30.3028L18.0878 32.5335C17.4565 34.305 14.9512 34.305 14.3199 32.5335L13.5249 30.3028C13.0846 29.0672 11.594 28.5828 10.5115 29.3236L8.55711 30.6611C7.00512 31.7232 4.97831 30.2506 5.50883 28.4464L6.17688 26.1744C6.54692 24.9159 5.62568 23.648 4.31446 23.611L1.94724 23.5443C0.0673637 23.4913 -0.706807 21.1086 0.782898 19.9608L2.6588 18.5154C3.69788 17.7148 3.69788 16.1475 2.6588 15.3469L0.782897 13.9015C-0.706808 12.7536 0.0673671 10.371 1.94724 10.318L4.31447 10.2513C5.62569 10.2143 6.54692 8.94632 6.17688 7.68786L5.50883 5.41587C4.97831 3.61163 7.00512 2.13907 8.55712 3.20117L10.5115 4.53861C11.594 5.27942 13.0846 4.7951 13.5249 3.55947L14.3199 1.32873Z" fill="var(--color-primary)" />
            </svg>
          </span>
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Kryptokjøp</p>
          <p>Et trygt og enkelt miljø for å kjøpe kryptovaluta. Rask behandling, lave gebyrer. Begynn å handle med en gang.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div class="border-primary inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-[5px] border md:h-[60px] md:w-[60px] md:rounded-[10px]">
          <span class="h-7 w-7 md:h-[42px] md:w-[42px]">
            <svg viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.3199 1.32873C14.9512 -0.442766 17.4565 -0.442763 18.0878 1.32873L18.8827 3.55947C19.3231 4.7951 20.8137 5.27942 21.8962 4.5386L23.8505 3.20117C25.4025 2.13907 27.4294 3.61164 26.8988 5.41588L26.2308 7.68786C25.8607 8.94633 26.782 10.2143 28.0932 10.2513L30.4604 10.318C32.3403 10.371 33.1145 12.7536 31.6248 13.9015L29.7489 15.3469C28.7098 16.1475 28.7098 17.7148 29.7489 18.5154L31.6248 19.9608C33.1145 21.1086 32.3403 23.4913 30.4604 23.5443L28.0932 23.611C26.782 23.648 25.8607 24.9159 26.2308 26.1744L26.8988 28.4464C27.4294 30.2506 25.4025 31.7232 23.8505 30.6611L21.8962 29.3236C20.8137 28.5828 19.3231 29.0672 18.8827 30.3028L18.0878 32.5335C17.4565 34.305 14.9512 34.305 14.3199 32.5335L13.5249 30.3028C13.0846 29.0672 11.594 28.5828 10.5115 29.3236L8.55711 30.6611C7.00512 31.7232 4.97831 30.2506 5.50883 28.4464L6.17688 26.1744C6.54692 24.9159 5.62568 23.648 4.31446 23.611L1.94724 23.5443C0.0673637 23.4913 -0.706807 21.1086 0.782898 19.9608L2.6588 18.5154C3.69788 17.7148 3.69788 16.1475 2.6588 15.3469L0.782897 13.9015C-0.706808 12.7536 0.0673671 10.371 1.94724 10.318L4.31447 10.2513C5.62569 10.2143 6.54692 8.94632 6.17688 7.68786L5.50883 5.41587C4.97831 3.61163 7.00512 2.13907 8.55712 3.20117L10.5115 4.53861C11.594 5.27942 13.0846 4.7951 13.5249 3.55947L14.3199 1.32873Z" fill="var(--color-primary)" />
            </svg>
          </span>
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Markedsanalyse</p>
          <p>Forstå priser og trender for informerte investeringsbeslutninger.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div class="border-primary inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-[5px] border md:h-[60px] md:w-[60px] md:rounded-[10px]">
          <span class="h-7 w-7 md:h-[42px] md:w-[42px]">
            <svg viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.3199 1.32873C14.9512 -0.442766 17.4565 -0.442763 18.0878 1.32873L18.8827 3.55947C19.3231 4.7951 20.8137 5.27942 21.8962 4.5386L23.8505 3.20117C25.4025 2.13907 27.4294 3.61164 26.8988 5.41588L26.2308 7.68786C25.8607 8.94633 26.782 10.2143 28.0932 10.2513L30.4604 10.318C32.3403 10.371 33.1145 12.7536 31.6248 13.9015L29.7489 15.3469C28.7098 16.1475 28.7098 17.7148 29.7489 18.5154L31.6248 19.9608C33.1145 21.1086 32.3403 23.4913 30.4604 23.5443L28.0932 23.611C26.782 23.648 25.8607 24.9159 26.2308 26.1744L26.8988 28.4464C27.4294 30.2506 25.4025 31.7232 23.8505 30.6611L21.8962 29.3236C20.8137 28.5828 19.3231 29.0672 18.8827 30.3028L18.0878 32.5335C17.4565 34.305 14.9512 34.305 14.3199 32.5335L13.5249 30.3028C13.0846 29.0672 11.594 28.5828 10.5115 29.3236L8.55711 30.6611C7.00512 31.7232 4.97831 30.2506 5.50883 28.4464L6.17688 26.1744C6.54692 24.9159 5.62568 23.648 4.31446 23.611L1.94724 23.5443C0.0673637 23.4913 -0.706807 21.1086 0.782898 19.9608L2.6588 18.5154C3.69788 17.7148 3.69788 16.1475 2.6588 15.3469L0.782897 13.9015C-0.706808 12.7536 0.0673671 10.371 1.94724 10.318L4.31447 10.2513C5.62569 10.2143 6.54692 8.94632 6.17688 7.68786L5.50883 5.41587C4.97831 3.61163 7.00512 2.13907 8.55712 3.20117L10.5115 4.53861C11.594 5.27942 13.0846 4.7951 13.5249 3.55947L14.3199 1.32873Z" fill="var(--color-primary)" />
            </svg>
          </span>
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Handel med digitale aktiva</p>
          <p>Handle krypto-futures. Utforsk, invester og utvikle porteføljen.</p>
        </div>
      </div>
    </div>
  </div>
</div>
      <!-- registration-2 -->
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
<p class="h2">Start nå</p>
<p>
  Utforsk kryptotrading med <?= e(SITE_NAME) ?>. Tradere i <?= e(geo_country_name()) ?> møter en plattform som forener avansert teknologi, effektivitet og brukervennlige verktøy.</p>
          </div>
        






<?php
  $form_id = "lead-form-product";
  $form_heading = null;
  $form_submit = 'Opprett konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
