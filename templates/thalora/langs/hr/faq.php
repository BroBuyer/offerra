<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'FAQ trgovanja | Uplata i sigurnost | ' . SITE_NAME;
$page_description = 'Jasni odgovori o registraciji, minimalnoj uplati, sigurnosti sredstava, isplatama i pristupu tržištima na ' . SITE_NAME . '.';
$page_canonical = page_url("faq.php");
$active_page = "faq";
$schema_extra = ['breadcrumb' => schema_breadcrumb('FAQ', 'faq.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="putanja navigacije"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
<a href="<?= page_url() ?>" class="breadcrumb-item">Početna</a>
<span class="breadcrumb-item">FAQ</span>
          </nav>
        </div>
      </div>
      <!-- contact -->
<section class="py-8" id="faq">
  <div class="container-base grid gap-6 md:gap-10">
    <h1>Često postavljana pitanja</h1>
    <div class="grid gap-3 md:gap-6" data-accordion>
        <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(1)"
          >
            <span class="h3 text-left transition-colors">Koji su koraci za početak trgovanja?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-1" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Početak je jednostavan. Registrirajte se ključnim podacima, potvrdite e-poštu i uplatite najmanje <?= e(money_min()) ?>. Otključavate sve značajke: grafikone uživo, alate za trgovanje, analizu tržišta i podršku. Iskustvo nije potrebno — cjeloviti vodiči vode vas korak po korak.</p>
            </div>
          </div>
        </div>
        <div id="accordion-2" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(2)"
          >
            <span class="h3 text-left transition-colors">Je li <?= e(SITE_NAME) ?> pouzdana u rukovanju mojim novcem i podacima?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-2" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>U <?= e(SITE_NAME) ?> zaštita podataka i sredstava je prioritet. Sesije su SSL-šifrirane, dostupna je dvofaktorska autentifikacija, a praksa privatnosti jasno je opisana. Financijske transakcije idu preko pouzdanih partnera i internih protokola. Težimo pouzdanosti, ali povrati se ne mogu garantirati.</p>
            </div>
          </div>
        </div>
        <div id="accordion-3" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(3)"
          >
            <span class="h3 text-left transition-colors">Koliko brzo mogu povući sredstva?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-3" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Isplate možete zatražiti u bilo koj trenutku iz portala računa. Obrada obično traje 1–3 radna dana, ovisno o metodi. Naknade i predviđeni rokovi vidljivi su prije potvrde. Ako trebate pratiti isplatu, tim podrške je dostupan.</p>
            </div>
          </div>
        </div>
        <div id="accordion-4" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(4)"
          >
            <span class="h3 text-left transition-colors">Kako znati odgovara li platforma mojim potrebama trgovanja?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-4" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Preporučujemo početak s minimalnom uplatom kako biste upoznali značajke. <?= e(SITE_NAME) ?> odgovara i početnicima i iskusnim traderima: jednostavno sučelje, opcionalni AI alati i podrška 24/7. Zadržavate punu kontrolu nad nalozima, limitima i rizikom.</p>
            </div>
          </div>
        </div>
        <div id="accordion-5" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(5)"
          >
            <span class="h3 text-left transition-colors">Je li potrebno iskustvo u trgovanju prije početka?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-5" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Prethodno iskustvo nije potrebno. Platforma je jednostavna od starta: onboarding, vodiči i alati pojačani AI-jem. Učite svojim tempom — od temeljnih tržišta do napredne analize i automatizacije.</p>
            </div>
          </div>
        </div>
        <div id="accordion-7" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(7)"
          >
            <span class="h3 text-left transition-colors">Koja tržišta mogu pratiti uz <?= e(SITE_NAME) ?>?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-7" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>U jednom sučelju pratite vodeće kriptovalute, forex u stvarnom vremenu, globalne dionice i robe. Bez skakanja između aplikacija usredotočite se na analizu i odluke.</p>
            </div>
          </div>
        </div>
        <div id="accordion-8" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(8)"
          >
            <span class="h3 text-left transition-colors">Kako funkcionira AI analitika?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-8" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p><?= e(SITE_NAME) ?> nudi AI alate koji organiziraju signale, označavaju značajne pomake cijene i pomažu u praćenju tržišta. Podržavaju vaš izbor, bez zamjene strategije ili jamstva ishoda. Vi odlučujete kada djelovati i koliko alocirati.</p>
            </div>
          </div>
        </div>
        <div id="accordion-9" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(9)"
          >
            <span class="h3 text-left transition-colors">Koliko obično prođe od registracije do prve trgovine?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-9" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Otvaranje računa i verifikacija obično traju nekoliko minuta. Vrijeme do prve trgovine ovisi o uplati i načinu plaćanja. Početna stranica pokazuje jasan vodič korak po korak, bez skrivenih faza.</p>
            </div>
          </div>
        </div>
        <div id="accordion-10" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(10)"
          >
            <span class="h3 text-left transition-colors">Postoji li podrška za pitanja o računu?</span>
            <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
              <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1" transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
                <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1" transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
                <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
              </svg>
            </span>
          </button>
          <div id="content-10" class="max-h-0 overflow-hidden transition-all">
            <div class="px-4 pb-5 md:px-8 md:pb-8">
              <p>Tim je dostupan putem Kontakta ili FAQ-a za pristup računu, uplate, isplate ili značajke. Pomoć je operativna, nije investicijski savjet.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
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
            <h2>Kako vam možemo pomoći?</h2>
          </div>
        






<?php
  $form_id = "lead-form-faq";
  $form_heading = null;
  $form_submit = 'Stvorite račun';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
