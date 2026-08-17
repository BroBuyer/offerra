<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Handels-FAQ | Indbetaling og sikkerhed | ' . SITE_NAME;
$page_description = 'Tydelige svar om tilmelding, minimumsindbetaling, fondsikkerhed, udbetalinger og markedsadgang på ' . SITE_NAME . '.';
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
            aria-label="navigationssti"
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
    <h1>Ofte stillede spørgsmål</h1>
    <div class="grid gap-3 md:gap-6" data-accordion>
        <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(1)"
          >
            <span class="h3 text-left transition-colors">Hvilke trin skal der til for at starte handel?</span>
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
              <p>Det er enkelt. Tilmeld dig med de vigtigste oplysninger, bekræft e-mailen og indbetal mindst <?= e(money_min()) ?>. Så låser du alle funktioner op: livediagrammer, handelsværktøjer, markedsanalyse og dedikeret support. Ingen erfaring kræves — grundige vejledninger tager dig gennem hvert trin.</p>
            </div>
          </div>
        </div>
        <div id="accordion-2" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(2)"
          >
            <span class="h3 text-left transition-colors">Er <?= e(SITE_NAME) ?> pålidelig til at håndtere mine penge og oplysninger?</span>
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
              <p>Hos <?= e(SITE_NAME) ?> er beskyttelse af data og midler en prioritet. Sessioner er sikret med SSL-kryptering, tofaktorgodkendelse er tilgængelig, og privatlivspraksis er tydeligt beskrevet. Finansielle transaktioner går via pålidelige partnere og interne protokoller. Vi sigter efter pålidelighed, men afkast kan ikke garanteres.</p>
            </div>
          </div>
        </div>
        <div id="accordion-3" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(3)"
          >
            <span class="h3 text-left transition-colors">Hvor hurtigt kan jeg hæve midler?</span>
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
              <p>Udbetalinger kan anmodes når som helst fra kontoportalen. Behandling tager typisk 1 til 3 hverdage, afhængigt af metoden. Gebyrer og estimerede tider vises før bekræftelse. Har du brug for opfølgning, er supportteamet klar.</p>
            </div>
          </div>
        </div>
        <div id="accordion-4" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(4)"
          >
            <span class="h3 text-left transition-colors">Hvordan ved jeg, om platformen passer til mine handelsbehov?</span>
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
              <p>Vi anbefaler at starte med minimumsindbetalingen for at lære funktionerne at kende. <?= e(SITE_NAME) ?> passer både til begyndere og erfarne tradere, med en brugervenlig grænseflade, valgfrie AI-værktøjer og kundesupport 24/7. Du beholder fuld kontrol over ordrer, grænser og risikoindstillinger.</p>
            </div>
          </div>
        </div>
        <div id="accordion-5" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(5)"
          >
            <span class="h3 text-left transition-colors">Skal jeg have handelserfaring, før jeg starter?</span>
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
              <p>Ingen tidligere erfaring kræves. Platformen er enkel fra start, med onboarding, vejledninger og AI-forstærkede værktøjer. Du lærer i dit tempo — fra kernemarkeder til mere avanceret analyse og automatisering.</p>
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
              <p>I én grænseflade følger du førende kryptovalutaer, forex i realtid, globale aktier og råvarer. Ingen hopping mellem apps: du kan fokusere på analyse og beslutninger.</p>
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
              <p><?= e(SITE_NAME) ?> tilbyder AI-værktøjer, der organiserer signaler, markerer væsentlige prisbevægelser og hjælper med overvågning. De understøtter dine valg uden at erstatte strategien eller garantere et resultat. Du bestemmer, hvornår du handler, og hvor meget du allokerer.</p>
            </div>
          </div>
        </div>
        <div id="accordion-9" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(9)"
          >
            <span class="h3 text-left transition-colors">Hvor lang tid tager det typisk fra registrering til første handel?</span>
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
              <p>Kontoåbning og verifikation tager typisk kun et par minutter. Tiden til første handel afhænger af indbetalingsbehandling og betalingsmetode. Forsiden har en tydelig trin-for-trin-guide uden skjulte led.</p>
            </div>
          </div>
        </div>
        <div id="accordion-10" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(10)"
          >
            <span class="h3 text-left transition-colors">Findes der support til kontospørgsmål?</span>
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
              <p>Teamet nås via Kontakt eller FAQ for adgang til konto, indbetalinger, udbetalinger eller funktioner. Hjælpen er operationel, ikke investeringsråd.</p>
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
            <h2>Hvordan kan vi hjælpe dig?</h2>
          </div>
        






<?php
  $form_id = "lead-form-faq";
  $form_heading = null;
  $form_submit = 'Opret konto';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
