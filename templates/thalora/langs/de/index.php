<?php
require_once __DIR__ . '/includes/config.php';

$page_title = SITE_NAME . ' | Führende KI-gestützte Handelsplattform';
$page_description = 'Handeln Sie Krypto, Forex und globale Märkte mit ' . SITE_NAME . ': KI-gestützte Analytik und eine intuitive Plattform für Kunden in ' . geo_country_name() . '.';
$page_canonical = page_url();
$active_page = "home";


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- hero -->
    <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 lg:grid-cols-2">
        <div
          class="border-primary rounded-custom relative flex flex-col justify-between gap-6 lg:overflow-hidden lg:border lg:p-8">
          <div class="text-primary teal:text-secondary absolute top-36 right-8 -z-10 max-lg:hidden">
            <svg width="729" height="419" viewBox="0 0 729 419" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.873 408.674C151.969 116.052 291.571 115.647 383.641 203.172C435.153 252.141 536.754 245.195 591.295 177.036C607.403 156.905 640.07 124.561 696.873 42.2554"
                stroke="url(#paint0_linear_4024_13698)" stroke-width="50" />
              <path d="M584.873 61.9606C631.345 47.5267 703.873 25.0002 703.873 25.0002V158.981"
                stroke="url(#paint1_linear_4024_13698)" stroke-width="50" stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_4024_13698" x1="539.758" y1="-116.611" x2="539.758" y2="492.611"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
                <linearGradient id="paint1_linear_4024_13698" x1="644.373" y1="25.0002" x2="644.373" y2="160.521"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h1 id="heading-style-h1">Handeln Sie transparent. Behalten Sie die Kontrolle über jede Entscheidung.</h1>
            <p>Greifen Sie über eine Plattform auf Kryptowährungen, Forex und globale Vermögenswerte zu. <?= e(SITE_NAME) ?> verbindet Live-Analytik, unterstützte Automatisierung und Experten-Support, damit Sie Märkte mit klaren Tools und verlässlichen Abläufen navigieren.</p>
        </div>
        






<?php
  $form_id = "lead-form-hero";
  $form_heading = null;
  $form_submit = 'Konto erstellen';
  require __DIR__ . '/includes/form.php';
?>

          </div>
    </div>
<div class="py-8 md:py-10">
  <div class="stats-cards container-base grid gap-3 md:grid-cols-2 md:gap-6 xl:grid-cols-4">
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">70+</p>
      <p class="h3">Unterstützte Währungen</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">42m</p>
      <p class="h3">Verifizierte Nutzer</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase"><?= e(currency_symbol()) ?>440m</p>
      <p class="h3">Transaktionsumsatz</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">100+</p>
      <p class="h3">Betreute Länder</p>
    </div>
  </div>
</div>
    <!-- features -->
<div class="py-8 md:py-10">
  <div class="container-base grid items-center gap-3 md:gap-6 lg:grid-cols-2">
    <div class="grid gap-6 max-lg:order-2 md:gap-10">
      <h2>Warum <?= e(SITE_NAME) ?></h2>
      <p class="md:text-lg">
        Von heutigen Krypto-Tradern bevorzugt, setzt diese Plattform einen neuen Standard. Wir verbinden starke Sicherheit, volle Transparenz, fortschrittliche KI und eine intuitive Oberfläche für sicheres Handeln.      </p>
      <div class="rounded-custom border bg-white p-4 md:p-6 overflow-x-auto">
        <div class="grid grid-cols-2 gap-x-8 gap-y-6 max-sm:flex">
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 116" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M84.1948 0H19.8052C8.86709 0 0 8.82387 0 19.7087V66.5623C0 79.0055 6.21657 90.6344 16.5858 97.5883L37.4393 111.573C46.2404 117.476 57.7596 117.476 66.5607 111.573L87.4142 97.5883C97.7834 90.6344 104 79.0055 104 66.5623V19.7087C104 8.82386 95.1329 0 84.1948 0ZM14.4176 15.6155C15.6562 14.0036 17.6087 12.9638 19.8052 12.9638H84.1948C86.3915 12.9638 88.3441 14.0038 89.5827 15.6159C88.342 14.0245 86.4001 13 84.2174 13H19.7826C17.6001 13 15.6583 14.0243 14.4176 15.6155ZM20.5685 84.188C21.58 85.1557 22.6816 86.0435 23.8662 86.8379L44.7196 100.823C49.1202 103.774 54.8798 103.774 59.2804 100.823L80.1338 86.8379C81.3187 86.0432 82.4207 85.1552 83.4324 84.1872C82.426 85.1462 81.3307 86.0265 80.1535 86.8147L59.2855 100.788C54.8818 103.737 49.1182 103.737 44.7145 100.788L23.8465 86.8147C22.6697 86.0267 21.5747 85.1468 20.5685 84.188Z"
                  fill="var(--color-primary)" />
                <path d="M32 52.7692L47.3821 68L76 41" stroke="white" stroke-width="13" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Zuverlässige Sicherheit</p>
              <p>Starke Schutzmaßnahmen sichern Ihre persönlichen Daten und Anlagen durchgehend.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 116" fill="none">
                <rect y="67" width="104" height="49" rx="19" fill="var(--color-primary)" />
                <circle cx="52" cy="28" r="28" fill="var(--color-primary)" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Personalisiertes Trading</p>
              <p>Passen Sie Ihre Handelsmethoden an Ihre Ziele und Vorlieben an.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 120" fill="none">
                <rect y="8" width="104" height="104" rx="10" fill="var(--color-primary)" />
                <path
                  d="M71.1659 38C71.1659 36.8954 72.0613 36 73.1659 36H77.2539C78.3584 36 79.2539 36.8954 79.2539 38V82.5995C79.2539 83.704 78.3584 84.5995 77.2539 84.5995H73.1659C72.0613 84.5995 71.1659 83.704 71.1659 82.5995V38Z"
                  fill="white" />
                <path
                  d="M38.6817 37.4427C38.9297 36.588 39.7126 36 40.6025 36H49.8143C50.6982 36 51.4773 36.5802 51.7305 37.4271L65.0644 82.0266C65.4479 83.3094 64.4871 84.5995 63.1482 84.5995H59.1996C58.3156 84.5995 57.5364 84.0191 57.2833 83.1721L53.6987 71.1751C53.4456 70.328 52.6664 69.7477 51.7824 69.7477H39.072C38.1781 69.7477 37.3928 70.3408 37.1483 71.2007L33.7516 83.1465C33.5072 84.0063 32.7218 84.5995 31.8279 84.5995H27.6627C26.3306 84.5995 25.3708 83.3216 25.742 82.0422L38.6817 37.4427ZM48.9665 63.5206C50.2868 63.5206 51.2448 62.2638 50.895 60.9907L47.0696 47.069C46.5239 45.083 43.6951 45.1188 43.1998 47.1179L39.7507 61.0397C39.4383 62.3009 40.3926 63.5206 41.692 63.5206H48.9665Z"
                  fill="white" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Intelligente KI-Lösungen</p>
              <p>Präzise Handelseinblicke für fundierte Entscheidungen.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 120" fill="none">
                <rect x="104" y="7" width="105" height="104" rx="52" transform="rotate(90 104 7)"
                  fill="var(--color-primary)" />
                <rect x="47" y="32" width="10" height="57" rx="5" fill="white" />
                <rect x="80" y="55" width="10" height="57" rx="5" transform="rotate(90 80 55)" fill="white" />
                <rect x="28.1655" y="43.5295" width="10" height="57" rx="5" transform="rotate(-45 28.1655 43.5295)"
                  fill="white" />
                <rect x="67.7634" y="36.4583" width="10" height="57" rx="5" transform="rotate(45 67.7634 36.4583)"
                  fill="white" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Automatisierte Trading-Lösungen</p>
              <p>KI-gesteuerte Bots laufen durchgehend und ermöglichen strukturiertere, signalbasierte Ansätze.</p>
            </div>
          </div>
          <div class="grid content-start gap-4 max-sm:w-[170px] max-sm:shrink-0 md:gap-6">
            <div class="w-20 sm:w-[104px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105 120" fill="none">
                <path
                  d="M49.0009 2.61563C50.0285 -0.871874 54.9715 -0.871877 55.9991 2.61563L65.0336 33.2782C65.5829 35.1427 67.4995 36.2486 69.39 35.7918L100.479 28.2795C104.015 27.425 106.487 31.7031 103.978 34.3362L81.9235 57.4865C80.5825 58.8942 80.5825 61.1058 81.9235 62.5135L103.978 85.6638C106.487 88.2969 104.015 92.575 100.479 91.7205L69.39 84.2083C67.4995 83.7514 65.5829 84.8573 65.0336 86.7218L55.9991 117.384C54.9715 120.872 50.0285 120.872 49.0009 117.384L39.9664 86.7218C39.4171 84.8573 37.5005 83.7514 35.61 84.2083L4.52099 91.7205C0.984987 92.575 -1.48655 88.2969 1.02189 85.6638L23.0765 62.5135C24.4175 61.1058 24.4175 58.8942 23.0765 57.4865L1.02189 34.3362C-1.48655 31.7031 0.984985 27.425 4.52099 28.2795L35.61 35.7918C37.5005 36.2486 39.4171 35.1427 39.9664 33.2782L49.0009 2.61563Z"
                  fill="var(--color-primary)" />
              </svg>
            </div>
            <div class="grid gap-2 md:gap-3">
              <p class="h3">Intuitive Oberfläche</p>
              <p>Eine leicht bedienbare Oberfläche für klares Trading von Anfang an.</p>
            </div>
          </div>
        </div>
      </div>
      <p class="h3">
        Stärken Sie Ihren finanziellen Weg mit <?= e(SITE_NAME) ?>.
      </p>
      <a class="btn btn-black" href="<?= page_url('sign.php') ?>">Jetzt registrieren</a>
    </div>
      <div class="flex items-center justify-center max-lg:order-1">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
  </div>
</div>
    <!-- trading -->
<div class="py-8 md:py-10">
  <div class="container-base grid items-center gap-6 lg:grid-cols-2">
    <div class="grid gap-6 md:gap-10">
      <h2>Müheloses Trading!</h2>
      <p class="text-lg">
        Handeln Sie führende Kryptowährungen wie Bitcoin, Ethereum und Dogecoin — einfach und mit Zuversicht.      </p>
      <a class="btn btn-black max-md:hidden" href="<?= page_url('sign.php') ?>">Jetzt starten</a>
    </div>
    <div class="grid gap-3 md:gap-6" data-trading></div>
    <a class="btn btn-black md:hidden" href="<?= page_url('sign.php') ?>">Jetzt starten</a>
  </div>
</div>
<section class="feature-section">
  <div class="container">
    <div class="feature-header">
      <h2>
        Eine globale Handelsplattform <span>für Wachstum gebaut</span>      </h2>
      <p>
        Zugang zu mehreren Finanzmärkten über ein System für Geschwindigkeit, Präzision und zuverlässige globale Leistung.      </p>
    </div>
    <div class="feature-grid">
      <div class="feature-card">
        <div class="accent"></div>
        <h3>Zugang zu mehreren Märkten</h3>
        <p>
          Handeln Sie Kryptowährungen, Forex, Aktien und Rohstoffe auf einer Plattform — ohne App-Wechsel.        </p>
      </div>
      <div class="feature-card featured">
        <div class="accent"></div>
        <h3>Schnelle Orderausführung</h3>
        <p>
          Optimierte Plattform für schnelle, zuverlässige Orderausführung auf globalen Märkten.        </p>
      </div>
      <div class="feature-card">
        <div class="accent"></div>
        <h3>Echtzeit-Analytik</h3>
        <p>
          Live-Marktdaten, fortschrittliche Indikatoren und Einblicke für schnelle, fundierte Entscheidungen.        </p>
      </div>
    </div>
  </div>
</section>
    <!-- partners -->
    <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 md:gap-10">
        <h2>Unsere Partner</h2>
        <div class="grid grid-cols-2 gap-3 md:grid-cols-4 md:gap-6">
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-1.svg') ?>" alt="partner 1" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-2.svg') ?>" alt="partner 2" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-3.svg') ?>" alt="partner 3" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-4.svg') ?>" alt="partner 4" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-5.svg') ?>" alt="partner 5" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-6.svg') ?>" alt="partner 6" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-7.svg') ?>" alt="partner 7" width="294"
            height="113" data-lazy />
          <img class="aspect-294/113 w-full" src="<?= asset('static/img/svg/partner-8.svg') ?>" alt="partner 8" width="294"
            height="113" data-lazy />
        </div>
      </div>
    </div>
    <!-- steps -->
<div class="py-8 md:py-10" id="how-it-works">
  <div class="container-base grid gap-6 md:gap-10">
    <div class="grid items-center gap-6 lg:grid-cols-2">
      <h2>So funktioniert <?= e(SITE_NAME) ?>: von der Registrierung zum Trading</h2>
      <p class="rounded-custom sm:border sm:p-8">
        Ein klarer Sechs-Schritte-Prozess: Registrierung, Verifizierung, Einzahlung, Strategiekonfiguration und Markt-Tools. Das Dashboard zeigt Zeiten, Optionen und Steuerung klar an.      </p>
    </div>
    <div class="grid gap-6 lg:grid-cols-2">
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          1
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Konto erstellen</p>
          <p>Registrieren Sie sich mit wenigen Angaben für sicheren Zugang zur offiziellen <?= e(SITE_NAME) ?>-Plattform. Dieser kurze Schritt öffnet Ihr Haupt-Dashboard.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          2
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Identität bestätigen</p>
          <p>Bestätigen Sie Ihre E-Mail, um alle Funktionen freizuschalten: Live-Charts, Analysetools und Ressourcen für einen strukturierten Start.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          3
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Zur Handelsplattform</p>
          <p>Zahlen Sie mindestens <?= e(money_min()) ?> auf Ihr Konto ein. Höhere Beträge sind möglich; alle Zahlungsoptionen und Gebühren sehen Sie vor der Bestätigung.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          4
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Guthaben hinzufügen</p>
          <p>Wählen Sie Überweisung, E-Wallet oder Karte. Laufzeiten und Gebühren sind transparent — Sie behalten die Kontrolle.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          5
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Strategie festlegen</p>
          <p>Passen Sie Risiko, bevorzugte Märkte und Handelsansatz an. <?= e(SITE_NAME) ?>: KI-Unterstützung kuratiert Signale und Marktbeobachtung, ohne Ihre Entscheidungen zu ersetzen.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          6
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Verfügbare Märkte entdecken</p>
          <p>Wenn Ihr Konto aktiv und eingerichtet ist, verfolgen Sie Live-Kurse, planen Sie Trades und nutzen Sie die integrierte Plattform für Krypto und andere Assets.</p>
        </div>
      </div>
    </div>
    <div class="grid gap-6 md:grid-cols-2">
      <a class="btn btn-black" href="<?= page_url('sign.php') ?>">Trading starten</a>
    </div>
  </div>
</div>
    <!-- payments -->
    <div class="py-8 md:py-10">
      <div class="container-base grid items-center gap-6 lg:grid-cols-2">
        <p class="text-lg">
          <?= e(SITE_NAME) ?> unterstützt verschiedene Zahlungsmethoden für Kunden weltweit.        </p>
        <div class="flex flex-wrap justify-center gap-3 md:gap-6">
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-1.svg') ?>" alt="payment 1" width="135" height="94"
              data-lazy />
          </div>
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-2.svg') ?>" alt="payment 2" width="135" height="94"
              data-lazy />
          </div>
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-3.svg') ?>" alt="payment 3" width="135" height="94"
              data-lazy />
          </div>
          <div class="max-sm:w-[74px]">
            <img class="aspect-135/94" src="<?= asset('static/img/svg/payment-4.svg') ?>" alt="payment 4" width="135" height="94"
              data-lazy />
          </div>
        </div>
      </div>
    </div>
    <!-- reviews -->
    <!-- <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 md:gap-10">
        <div class="grid items-end gap-6 md:grid-cols-2">
          <h2><?= e(SITE_NAME) ?>™ reviews</h2>
          <div class="inline-flex justify-end gap-8 max-md:hidden">
            <button class="text-primary hover:text-primary-dark -scale-x-100 cursor-pointer transition-colors"
              data-prev="reviews" aria-label="vorherige Folie">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
            <button class="text-primary hover:text-primary-dark cursor-pointer transition-colors" data-next="reviews"
              aria-label="nächste Folie">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
          </div>
        </div>
        <div class="grid gap-1.5 overflow-hidden" data-slider="reviews">
          <div class="-ml-6">
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  A fantastic-Handelsplattform is <?= e(SITE_NAME) ?>! The
                  registration process is straightforward, fees are
                  transparent, and the support team is highly professional,
                  making the trading experience smooth and efficient. I am
                  very satisfied with the service and would recommend it to
                  anyone interested in trading.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="1"></p>
                  <p class="h3" data-reviewer="1">
                    James Mitchell, Manchester
                  </p>
                </div>
              </div>
            </div>
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  Finally decided to try cryptocurrency and chose <?= e(SITE_NAME) ?>                  — very pleased with the choice. Registration was
                  straightforward and completed in minutes, with transparent
                  pricing from the outset. It feels like a dependable
                  platform, particularly for those new to the space.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="2"></p>
                  <p class="h3" data-reviewer="2">James Mikel, Bristol</p>
                </div>
              </div>
            </div>
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  A dependable partner in the cryptocurrency trading sector.
                  Straightforward account setup, transparent conditions and
                  knowledgeable assistance. Trading on this platform is
                  genuinely enjoyable.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="3"></p>
                  <p class="h3" data-reviewer="3">
                    Elizabeth Thornton, Manchester
                  </p>
                </div>
              </div>
            </div>
            <div class="basis-full pl-6 md:basis-1/2">
              <div
                class="border-primary rounded-custom flex h-full flex-col justify-between gap-4 border px-4 py-6 md:gap-6 md:px-8 md:py-10">
                <p>
                  Thanks to <?= e(SITE_NAME) ?>, I've found crypto trading
                  straightforward and accessible. The registration process was
                  smooth, and I appreciate the clarity around fees. As someone
                  new to trading, I feel well-supported and confident using
                  this platform.
                </p>
                <div class="flex items-center gap-3.5 md:gap-7">
                  <p class="initials" data-initials="4"></p>
                  <p class="h3" data-reviewer="4">
                    Eleanor Blackwell, Manchester
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="paggination md:hidden" data-paggination="reviews"></div>
        </div>
      </div>
    </div> -->
<div class="py-8 md:py-10">
  <div class="container-base grid gap-6 md:gap-10" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    <div class="flex items-center justify-between gap-6 mb-6 reviews-flex-block">
      <h2 class="text-2xl font-bold">Nutzerbewertungen</h2>
      <div class="inline-flex gap-4 max-md:hidden">
            <button class="text-primary hover:text-primary-dark -scale-x-100 cursor-pointer transition-colors"
              data-prev="reviews" aria-label="vorherige Folie">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
            <button class="text-primary hover:text-primary-dark cursor-pointer transition-colors" data-next="reviews"
              aria-label="nächste Folie">
              <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="61.6562" y="29.209" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(45 61.6562 29.209)" fill="currentColor" />
                <rect x="64.9287" y="32.4824" width="4.62857" height="23.1428" rx="1"
                  transform="rotate(135 64.9287 32.4824)" fill="currentColor" />
                <rect x="62.4502" y="30.168" width="4.62857" height="60.1714" rx="1"
                  transform="rotate(90 62.4502 30.168)" fill="currentColor" />
              </svg>
            </button>
      </div>
    </div>
      <div class="swiper" data-slider="reviews">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
            <p>
              <?= e(SITE_NAME) ?> hat meine Erwartungen übertroffen. Die Anmeldung war einfach, Gebühren klar, Support schnell. Insgesamt eine zuverlässige, flüssige Plattform, die ich gern nutze.            </p>
            <div class="flex items-center gap-4">
              <div class="initials">FE</div>
              <p class="font-bold">Devisenspezialist</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Ich habe <?= e(SITE_NAME) ?> für den Krypto-Handel und bin zufrieden. Der Start war klar und transparent. Eine vertrauenswürdige Wahl, besonders für Einsteiger.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">IM</div>
              <p class="font-bold">Analyst für Investmentmärkte</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Ich finde <?= e(SITE_NAME) ?> als zuverlässige, konsistente Plattform. Die Kontoeröffnung war einfach, Bedingungen transparent, Support kompetent. Das Trading hier ist angenehm.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">OT</div>
              <p class="font-bold">Online-Trader</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Kryptowährungen handeln mit <?= e(SITE_NAME) ?> zugänglich. Die Registrierung war leicht, Gebühren verständlich, Hilfe da, wenn nötig. Als neuer Trader merke ich einen echten Unterschied.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">FA</div>
              <p class="font-bold">Finanzanalyst</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  (function () {
    var started = false;
    function loadCss(href) {
      if (document.querySelector('link[href="' + href + '"]')) return;
      var l = document.createElement('link');
      l.rel = 'stylesheet';
      l.href = href;
      document.head.appendChild(l);
    }
    function loadScript(src) {
      return new Promise(function (resolve) {
        if (window.Swiper) { resolve(); return; }
        var s = document.createElement('script');
        s.src = src;
        s.async = true;
        s.onload = function () { resolve(); };
        s.onerror = function () { resolve(); };
        document.head.appendChild(s);
      });
    }
    function initSwiper() {
      if (started || !window.Swiper) return;
      var sliderEl = document.querySelector('[data-slider="reviews"]');
      if (!sliderEl) return;
      started = true;
      new Swiper(sliderEl, {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
          nextEl: '[data-next="reviews"]',
          prevEl: '[data-prev="reviews"]',
        },
        pagination: {
          el: '[data-pagination="reviews"], .swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          768: { slidesPerView: 2, spaceBetween: 30 },
          1024: { slidesPerView: 3, spaceBetween: 30 }
        }
      });
    }
    function boot() {
      if (started) return;
      loadCss(<?= json_encode(asset('static/vendor/carousel/r-carousel.min.css')) ?>);
      loadScript(<?= json_encode(asset('static/vendor/carousel/r-carousel.min.js')) ?>).then(initSwiper);
    }
    var target = document.querySelector('[data-slider="reviews"]');
    if (!target) return;
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        if (entries.some(function (e) { return e.isIntersecting; })) {
          io.disconnect();
          boot();
        }
      }, { rootMargin: '200px 0px' });
      io.observe(target);
    } else {
      if (document.readyState === 'complete') boot();
      else window.addEventListener('load', boot);
    }
  })();
</script>
    <!-- faq -->
<section class="py-8" id="faq">
  <div class="container-base grid gap-6 md:gap-10">
    <h2>Häufig gestellte Fragen</h2>
    <div class="grid gap-3 md:gap-6" data-accordion>
      <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(1)">
          <span class="h3 text-left transition-colors">Welche Schritte braucht es, um zu handeln?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(2)">
          <span class="h3 text-left transition-colors">Ist <?= e(SITE_NAME) ?> zuverlässig im Umgang mit meinem Geld und meinen Daten?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(3)">
          <span class="h3 text-left transition-colors">Wie schnell kann ich auszahlen?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(4)">
          <span class="h3 text-left transition-colors">Wie erkenne ich, ob die Plattform zu meinen Trading-Anforderungen passt?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(5)">
          <span class="h3 text-left transition-colors">Brauche ich Trading-Erfahrung, um zu starten?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(7)">
          <span class="h3 text-left transition-colors">Welche Märkte kann ich mit <?= e(SITE_NAME) ?>?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(8)">
          <span class="h3 text-left transition-colors">Wie funktionieren die KI-Analysen?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(9)">
          <span class="h3 text-left transition-colors">Wie lange dauert es von der Registrierung zum ersten Trade?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
          onclick="toggleAccordion(10)">
          <span class="h3 text-left transition-colors">Gibt es Support bei Kontofragen?</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
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
      <div id="accordion-6" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(6)">
          <span class="h3 text-left transition-colors">Über die Plattform</span>
          <span class="w-[26px] shrink-0 transition-transform group-data-active:rotate-180 md:w-10">
            <svg viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="22.7905" y="32.6563" width="4.62857" height="23.1428" rx="1"
                transform="rotate(135 22.7905 32.6563)" fill="currentColor" />
              <rect x="19.5176" y="35.9287" width="4.62857" height="23.1428" rx="1"
                transform="rotate(-135 19.5176 35.9287)" fill="currentColor" />
              <rect x="22" y="33" width="5" height="28" rx="1" transform="rotate(-180 22 33)" fill="currentColor" />
            </svg>
          </span>
        </button>
        <div id="content-6" class="max-h-0 overflow-hidden transition-all">
          <div class="px-4 pb-5 md:px-8 md:pb-8">
            <p style="margin-bottom:16px;"><?= e(SITE_NAME) ?> ist eine internationale Handelsplattform für Nutzer, die konstante Leistung, schnelle Ausführung und volle Kontrolle wollen. Statt getrennter Dienste vereint sie alle Kernfunktionen in einem Ablauf.</p>
            <p style="margin-bottom:16px;">Von Marktzugang über Orderausführung bis Analyse greift jedes Element ineinander. Sie konzentrieren sich auf Handelsentscheidungen, nicht auf Tool-Wechsel.</p>
            <p style="margin-bottom:10px; font-weight:500;">Handeln Sie auf einer Plattform an mehreren Finanzmärkten:</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Führende und aufstrebende Kryptowährungen</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Forex-Märkte mit Live-Kursen</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Globale Aktien und Aktienoptionen</li>
              <li><span style="color:var(--color-primary);">•</span> Rohstoffe zur Erweiterung der Möglichkeiten</li>
            </ul>
            <p style="margin-bottom:16px;">Leistung hat Vorrang. Das System ist auf niedrige Latenz und zuverlässigen Betrieb in Stoßzeiten ausgelegt, damit Sie auf Kurse ohne technische Verzögerung reagieren.</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Schnelle, zuverlässige Orderverarbeitung über Märkte hinweg</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Kontinuierlicher Strom von Marktdaten</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Vorinstallierte Analytik und Marktindikatoren</li>
              <li><span style="color:var(--color-primary);">•</span> Manuelles und automatisiertes Trading</li>
            </ul>
            <p style="margin-bottom:16px;">Sicherheit und Betriebssicherheit sind auf allen Ebenen Priorität. Die Plattform hält Branchenstandards ein und schützt Nutzerdaten und Finanzvorgänge durchgehend.</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Vollständig verschlüsselte Datenkommunikation</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Identitätsprüfung und mehrschichtige Sicherheitsprotokolle</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Überwachte und validierte Transaktionsprozesse</li>
              <li><span style="color:var(--color-primary);">•</span> Infrastruktur für zuverlässige globale Konnektivität</li>
            </ul>
            <p style="margin-bottom:16px;">Die Nutzererfahrung zählt ebenso. Das Design ist bewusst klar und intuitiv, damit Trader sich auf ihre Strategie konzentrieren.</p>
            <p style="margin-bottom:16px;">Diese Mischung aus robuster Funktion und Einfachheit macht <?= e(SITE_NAME) ?> ideal für Einsteiger und erfahrene Trader. Anfänger kommen schnell voran ohne steile Lernkurve; Fortgeschrittene behalten die Freiheit für komplexe Taktiken.</p>
            <p><?= e(SITE_NAME) ?> liefert Skalierbarkeit, Zuverlässigkeit und hohe Leistung auf einer Plattform — für sicheren, geordneten Zugang zu internationalen Finanzmärkten.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- registration-1 -->
    <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 lg:grid-cols-2">
        <div
          class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8">
          <div class="text-primary teal:text-secondary absolute top-36 right-8 -z-10 max-lg:hidden">
            <svg width="729" height="419" viewBox="0 0 729 419" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.873 408.674C151.969 116.052 291.571 115.647 383.641 203.172C435.153 252.141 536.754 245.195 591.295 177.036C607.403 156.905 640.07 124.561 696.873 42.2554"
                stroke="url(#paint0_linear_4024_13698)" stroke-width="50" />
              <path d="M584.873 61.9606C631.345 47.5267 703.873 25.0002 703.873 25.0002V158.981"
                stroke="url(#paint1_linear_4024_13698)" stroke-width="50" stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_4024_13698" x1="539.758" y1="-116.611" x2="539.758" y2="492.611"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
                <linearGradient id="paint1_linear_4024_13698" x1="644.373" y1="25.0002" x2="644.373" y2="160.521"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="currentColor" />
                  <stop offset="1" stop-color="currentColor" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h2>Handeln Sie auf einer regulierten Plattform™</h2>
          <p>
            Vertrauen von Einzeltradern und Unternehmen beim sicheren Kauf, Verkauf und der Verwaltung von Kryptowährungen.          </p>
        </div>
        
<?php
  $form_id = "lead-form-hero-2";
  $form_heading = null;
  $form_submit = 'Konto erstellen';
  require __DIR__ . '/includes/form.php';
?>

      </div>
    </div>
<!-- specifications -->
<section class="py-8 md:py-20">
  <section style="padding:60px 0;" class="md:!py-[100px]">
    <div style="
      max-width:90%;
      margin:0 auto;
      padding:0 16px;
      box-sizing:border-box;
    ">
      <div style="
        max-width:700px;
        margin-bottom:50px;
      ">
        <h2 style="
          font-size:clamp(24px, 6vw, 44px);
          font-weight:700;
          line-height:1.2;
          letter-spacing:-0.02em;
          word-break:break-word;
          overflow-wrap:break-word;
        ">
          Kernfunktionen der <span style='color:var(--color-primary);'><?= e(SITE_NAME) ?>-Handelsplattform</span>        </h2>
      <p style="margin-top:14px;color:#6b7280;font-size:17px;">
        Funktionen, die Tempo, Präzision und Sicherheit im Trading steigern.      </p>
    </div>
    <div style="
      border-radius:16px;
      overflow:hidden;
      border:1px solid #eee;
    ">
      <div style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
        transition:.2s;
      " onmouseover="this.style.background='#f9f9fb'" class="row-block" onmouseout="this.style.background='transparent'">
        <div style="display:flex;align-items:center;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">🤖</span>
          Technischer Rahmen        </div>
        <div class="row-text" style="color:#6b7280;">
          Fortschrittliche KI-basierte Handelstechnologie        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">💳</span>
          Einzahlungsmethoden        </div>
        <div class="row-text" style="color:#6b7280;">
          Karten, Überweisungen, PayPal-Optionen        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">📱</span>
          Plattformzugang        </div>
        <div class="row-text" style="color:#6b7280;">
          Funktioniert auf mehreren Geräten        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">🚀</span>
          Effizienz        </div>
        <div class="row-text" style="color:#6b7280;">
          Bis zu 85 % Präzision        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">📊</span>
          Verfügbare Instrumente        </div>
        <div class="row-text" style="color:#6b7280;">
          Forex, Aktien, Kryptowährungen, Rohstoffe und mehr        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr 2fr;
        padding:22px 24px;
        border-bottom:1px solid #eee;
        align-items:center;
      ">
        <div style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">✍️</span>
          Leitfaden zur Kontoeröffnung        </div>
        <div class="row-text" style="color:#6b7280;">
          Schnelles, reibungsloses Onboarding        </div>
      </div>
      <div class="row-block" style="
        display:grid;
        grid-template-columns: 1fr auto;
        padding:26px 24px;
        align-items:center;
        background:var(--color-primary-lightest);
      ">
        <div class="customer-block" style="display:flex;gap:10px;font-weight:600;">
          <span style="color:var(--color-primary);">📞</span>
          Kundensupport          <span style="font-weight:400;color:#6b7280;margin-left:10px;">
            Professioneller Support rund um die Uhr          </span>
        </div>
        <a href="<?= page_url('contacts.php') ?>" class="row-contact-btn" style="
          background:var(--color-primary);
          color:#fff;
          padding:10px 20px;
          border-radius:8px;
          text-decoration:none;
          transition:.2s;
        "
        onmouseover="this.style.background='var(--color-primary-dark)'"
        onmouseout="this.style.background='var(--color-primary)'">
          Support kontaktieren        </a>
      </div>
    </div>
  </div>
</section>
<div class="md:border-primary-light md:rounded-[20px] md:border md:px-20 md:py-8">
  <div class="border-primary-light grid justify-items-center gap-6 rounded-[20px] border px-4 py-5 md:gap-4 md:px-8 md:py-6 text-center md:text-left">
    <h2 class="h3 flex flex-wrap items-center justify-center md:justify-start gap-x-4 gap-y-3">
      Was Nutzer von <?= e(SITE_NAME) ?> sagen      <span class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-2 py-1 text-sm leading-none text-white uppercase">
        Vertrauenswürdig      </span>
    </h2>
    <div class="flex flex-wrap items-center justify-center md:justify-start gap-2.5 text-center md:text-left">
      <strong class="leading-none text-emerald-600">
        4.7      </strong>
      <span class="leading-none text-amber-500" role="img"
        aria-label="4.7 Bewertung (von 5)">
        ★★★★★      </span>
      <span class="flex flex-wrap justify-center md:justify-start gap-1 text-sm text-gray-400">
        <span>
          <strong>124</strong> Kundenbewertungen ·
        </span>
        <span>
          Basierend auf <strong>337</strong> Bewertungen ·
        </span>
        <span>
          Bewertung (von 5)        </span>
      </span>
    </div>
    <p class="text-center md:text-left">
      Eine intuitive Handelsplattform mit fortschrittlicher Automatisierung und umfangreichen Lernmaterialien.    </p>
  </div>
</div>
      </div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
