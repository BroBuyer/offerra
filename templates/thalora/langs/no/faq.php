<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Handels-FAQ | Innskudd og sikkerhet | ' . SITE_NAME;
$page_description = 'Tydelige svar om registrering, minsteinnskudd, fondsikkerhet, uttak og markedstilgang på ' . SITE_NAME . '.';
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
            aria-label="navigasjonssti"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
<a href="<?= page_url() ?>" class="breadcrumb-item">Hjem</a>
<span class="breadcrumb-item">FAQ</span>
          </nav>
        </div>
      </div>
      <!-- contact -->
<section class="py-8" id="faq">
  <div class="container-base grid gap-6 md:gap-10">
    <h1>Ofte stilte spørsmål</h1>
    <div class="grid gap-3 md:gap-6" data-accordion>
        <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(1)"
          >
            <span class="h3 text-left transition-colors">Hvilke steg trengs for å starte handel?</span>
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
              <p>Det er enkelt. Registrer deg med de viktigste opplysningene, bekreft e-posten og sett inn minst <?= e(money_min()) ?>. Da låser du opp alle funksjoner: livediagrammer, handelsverktøy, markedsanalyse og dedikert support. Ingen erfaring kreves — grundige veiledninger tar deg gjennom hvert steg.</p>
            </div>
          </div>
        </div>
        <div id="accordion-2" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(2)"
          >
            <span class="h3 text-left transition-colors">Er <?= e(SITE_NAME) ?> pålitelig til å håndtere pengene og opplysningene mine?</span>
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
              <p>Hos <?= e(SITE_NAME) ?> er vern av data og midler en prioritet. Økter er sikret med SSL-kryptering, tofaktorautentisering er tilgjengelig, og personvernpraksis er tydelig beskrevet. Finansielle transaksjoner går via pålitelige partnere og interne protokoller. Vi sikter mot pålitelighet, men avkastning kan ikke garanteres.</p>
            </div>
          </div>
        </div>
        <div id="accordion-3" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(3)"
          >
            <span class="h3 text-left transition-colors">Hvor raskt kan jeg ta ut midler?</span>
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
              <p>Uttak kan forespørres når som helst fra kontoportalen. Behandling tar vanligvis 1 til 3 virkedager, avhengig av metode. Gebyrer og estimerte tider vises før bekreftelse. Trenger du oppfølging, er supportteamet klart.</p>
            </div>
          </div>
        </div>
        <div id="accordion-4" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(4)"
          >
            <span class="h3 text-left transition-colors">Hvordan vet jeg om plattformen passer mine handelsbehov?</span>
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
              <p>Vi anbefaler å starte med minsteinnskuddet for å bli kjent med funksjonene. <?= e(SITE_NAME) ?> passer både nybegynnere og erfarne tradere, med et brukervennlig grensesnitt, valgfrie AI-verktøy og kundesupport 24/7. Du beholder full kontroll over ordrer, grenser og risikoinnstillinger.</p>
            </div>
          </div>
        </div>
        <div id="accordion-5" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(5)"
          >
            <span class="h3 text-left transition-colors">Må jeg ha handelserfaring før jeg starter?</span>
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
              <p>Ingen tidligere erfaring kreves. Plattformen er enkel fra start, med onboarding, veiledninger og AI-forsterkede verktøy. Du lærer i ditt tempo — fra kjernemarkeder til mer avansert analyse og automatisering.</p>
            </div>
          </div>
        </div>
        <div id="accordion-7" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(7)"
          >
            <span class="h3 text-left transition-colors">Hvilke markeder kan jeg følge med <?= e(SITE_NAME) ?>?</span>
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
              <p>I ett grensesnitt følger du ledende kryptovalutaer, forex i sanntid, globale aksjer og råvarer. Ingen hopping mellom apper: du kan fokusere på analyse og beslutninger.</p>
            </div>
          </div>
        </div>
        <div id="accordion-8" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(8)"
          >
            <span class="h3 text-left transition-colors">Hvordan fungerer AI-analysen?</span>
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
              <p><?= e(SITE_NAME) ?> tilbyr AI-verktøy som organiserer signaler, markerer vesentlige prisbevegelser og hjelper med overvåking. De støtter valgene dine uten å erstatte strategien eller garantere et resultat. Du bestemmer når du handler og hvor mye du allokerer.</p>
            </div>
          </div>
        </div>
        <div id="accordion-9" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(9)"
          >
            <span class="h3 text-left transition-colors">Hvor lang tid tar det vanligvis fra registrering til første handel?</span>
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
              <p>Kontoåpning og verifisering tar vanligvis bare noen minutter. Tiden til første handel avhenger av innskuddsbehandling og betalingsmetode. Forsiden har en tydelig steg-for-steg-guide uten skjulte ledd.</p>
            </div>
          </div>
        </div>
        <div id="accordion-10" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(10)"
          >
            <span class="h3 text-left transition-colors">Finnes det support for kontospørsmål?</span>
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
              <p>Teamet nås via Kontakt eller FAQ for tilgang til konto, innskudd, uttak eller funksjoner. Hjelpen er operativ, ikke investeringsråd.</p>
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
            <h2>Hvordan kan vi hjelpe deg?</h2>
          </div>
        






<?php
  $form_id = "lead-form-faq";
  $form_heading = null;
  $form_submit = 'Opprett konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
