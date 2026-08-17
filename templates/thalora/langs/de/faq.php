<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Trading-FAQ | Einzahlung & Sicherheit | ' . SITE_NAME;
$page_description = 'Klare Antworten zu Registrierung, Mindesteinzahlung, Sicherheit der Mittel, Auszahlungen und Marktzugang auf ' . SITE_NAME . '.';
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
            aria-label="Navigationspfad"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
<a href="<?= page_url() ?>" class="breadcrumb-item">Startseite</a>
<span class="breadcrumb-item">FAQ</span>
          </nav>
        </div>
      </div>
      <!-- contact -->
<section class="py-8" id="faq">
  <div class="container-base grid gap-6 md:gap-10">
    <h1>Häufig gestellte Fragen</h1>
    <div class="grid gap-3 md:gap-6" data-accordion>
        <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(1)"
          >
            <span class="h3 text-left transition-colors">Welche Schritte braucht es, um zu handeln?</span>
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
              <p>Der Einstieg ist einfach. Registrieren Sie sich mit den wichtigsten Angaben, bestätigen Sie Ihre E-Mail und zahlen Sie mindestens <?= e(money_min()) ?> ein. Dann stehen Live-Charts, Trading-Tools, Marktanalyse und Support bereit. Keine Vorerfahrung nötig — Tutorials führen Sie Schritt für Schritt.</p>
            </div>
          </div>
        </div>
        <div id="accordion-2" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(2)"
          >
            <span class="h3 text-left transition-colors">Ist <?= e(SITE_NAME) ?> zuverlässig im Umgang mit meinem Geld und meinen Daten?</span>
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
              <p>Bei <?= e(SITE_NAME) ?> hat der Schutz Ihrer Daten und Mittel Vorrang. Sitzungen sind SSL-verschlüsselt, Zwei-Faktor-Authentifizierung ist verfügbar, Datenschutzpraktiken sind klar beschrieben. Finanztransaktionen laufen über vertrauenswürdige Partner und interne Protokolle. Wir streben Zuverlässigkeit an, Renditen können jedoch nicht garantiert werden.</p>
            </div>
          </div>
        </div>
        <div id="accordion-3" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(3)"
          >
            <span class="h3 text-left transition-colors">Wie schnell kann ich auszahlen?</span>
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
              <p>Auszahlungen können Sie jederzeit im Konto-Portal beantragen. Die Bearbeitung dauert in der Regel 1–3 Werktage, je nach Methode. Gebühren und voraussichtliche Zeiten sehen Sie vor der Bestätigung. Bei Nachfragen hilft unser Support.</p>
            </div>
          </div>
        </div>
        <div id="accordion-4" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(4)"
          >
            <span class="h3 text-left transition-colors">Wie erkenne ich, ob die Plattform zu meinen Trading-Anforderungen passt?</span>
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
              <p>Wir empfehlen den Start mit der Mindesteinzahlung, um die Funktionen kennenzulernen. <?= e(SITE_NAME) ?> eignet sich für Einsteiger und erfahrene Trader: benutzerfreundliche Oberfläche, optionale KI-Tools und Support rund um die Uhr. Sie behalten die volle Kontrolle über Orders, Limits und Risiko.</p>
            </div>
          </div>
        </div>
        <div id="accordion-5" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(5)"
          >
            <span class="h3 text-left transition-colors">Brauche ich Trading-Erfahrung, um zu starten?</span>
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
              <p>Keine Vorerfahrung nötig. Die Plattform ist von Anfang an benutzerfreundlich: Onboarding, Tutorials und KI-gestützte Tools. Sie lernen in Ihrem Tempo — von Kernmärkten bis zu fortgeschrittener Analyse und Automatisierung.</p>
            </div>
          </div>
        </div>
        <div id="accordion-7" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(7)"
          >
            <span class="h3 text-left transition-colors">Welche Märkte kann ich mit <?= e(SITE_NAME) ?>?</span>
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
              <p>In einer Oberfläche folgen Sie führenden Kryptowährungen, Forex in Echtzeit, globalen Aktien und Rohstoffen. Ohne App-Wechsel konzentrieren Sie sich auf Analyse und Entscheidungen.</p>
            </div>
          </div>
        </div>
        <div id="accordion-8" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(8)"
          >
            <span class="h3 text-left transition-colors">Wie funktionieren die KI-Analysen?</span>
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
              <p><?= e(SITE_NAME) ?> bietet KI-Tools, die Handelssignale ordnen, auffällige Kursbewegungen markieren und beim Marktmonitoring helfen. Sie unterstützen Ihre Wahl, ersetzen aber weder Strategie noch Garantie. Sie entscheiden, wann Sie handeln und wie viel Sie einsetzen.</p>
            </div>
          </div>
        </div>
        <div id="accordion-9" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(9)"
          >
            <span class="h3 text-left transition-colors">Wie lange dauert es von der Registrierung zum ersten Trade?</span>
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
              <p>Kontoeröffnung und Verifizierung dauern in der Regel nur wenige Minuten. Bis zum ersten Trade hängt es von der Einzahlung und der Zahlungsmethode ab. Die Startseite zeigt einen klaren Schritt-für-Schritt-Leitfaden ohne versteckte Schritte.</p>
            </div>
          </div>
        </div>
        <div id="accordion-10" class="group border-primary rounded-custom border transition-all">
          <button
            class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
            onclick="toggleAccordion(10)"
          >
            <span class="h3 text-left transition-colors">Gibt es Support bei Kontofragen?</span>
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
              <p>Unser Team ist über Kontakt oder FAQ erreichbar bei Zugang, Einzahlungen, Auszahlungen oder Funktionen. Die Hilfe ist operativ, keine Anlageberatung.</p>
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
            <h2>Wie können wir Ihnen helfen?</h2>
          </div>
        






<?php
  $form_id = "lead-form-faq";
  $form_heading = null;
  $form_submit = 'Konto erstellen';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
