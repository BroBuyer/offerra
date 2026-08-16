<?php
require_once __DIR__ . '/includes/config.php';

$page_title = SITE_NAME . ' | Piattaforma di trading IA di primo livello';
$page_description = 'Opera su crypto, forex e mercati globali con ' . SITE_NAME . ': analisi basate sull’IA e una piattaforma intuitiva pensata per i clienti di ' . geo_country_name() . '.';
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
          <h1 id="heading-style-h1">Fai trading in trasparenza. Mantieni il controllo di ogni decisione.</h1>
            <p>Accedi a criptovalute, forex e asset globali da un’unica piattaforma. <?= e(SITE_NAME) ?> combina analisi in tempo reale, automazione assistita e supporto esperto per aiutarti a muoverti sui mercati con strumenti chiari e processi costanti.</p>
        </div>
        






<?php
  $form_id = "lead-form-hero";
  $form_heading = null;
  $form_submit = 'Crea account';
  require __DIR__ . '/includes/form.php';
?>

          </div>
    </div>
<div class="py-8 md:py-10">
  <div class="stats-cards container-base grid gap-3 md:grid-cols-2 md:gap-6 xl:grid-cols-4">
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">70+</p>
      <p class="h3">Valute supportate</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">42m</p>
      <p class="h3">Utenti verificati</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase"><?= e(currency_symbol()) ?>440m</p>
      <p class="h3">Volume delle transazioni</p>
    </div>
    <div class="rounded-custom grid content-start gap-5 border p-4 md:p-6">
      <p class="h2 lowercase">100+</p>
      <p class="h3">Paesi serviti</p>
    </div>
  </div>
</div>
    <!-- features -->
<div class="py-8 md:py-10">
  <div class="container-base grid items-center gap-3 md:gap-6 lg:grid-cols-2">
    <div class="grid gap-6 max-lg:order-2 md:gap-10">
      <h2>Perché scegliere <?= e(SITE_NAME) ?></h2>
      <p class="md:text-lg">
        Preferita dai trader crypto di oggi, questa piattaforma definisce un nuovo standard. Uniamo sicurezza solida, piena trasparenza, IA avanzata e un’interfaccia intuitiva per un trading consapevole.      </p>
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
              <p class="h3">Sicurezza affidabile</p>
              <p>Protezioni solide tutelano in modo continuo i tuoi dati personali e i tuoi investimenti.</p>
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
              <p class="h3">Trading personalizzato</p>
              <p>Adatta i metodi di trading ai tuoi obiettivi e alle tue preferenze.</p>
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
              <p class="h3">Soluzioni IA intelligenti</p>
              <p>Insight di trading precisi per decisioni consapevoli.</p>
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
              <p class="h3">Soluzioni di trading automatizzato</p>
              <p>Bot basati sull’IA operano in continuo per approcci di trading più strutturati, guidati dai segnali.</p>
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
              <p class="h3">Interfaccia intuitiva</p>
              <p>Un’interfaccia semplice, pensata per fare trading in modo chiaro fin dal primo utilizzo.</p>
            </div>
          </div>
        </div>
      </div>
      <p class="h3">
        Arricchisci il tuo percorso finanziario con <?= e(SITE_NAME) ?>.
      </p>
      <a class="btn btn-black" href="<?= page_url('sign.php') ?>">Registrati ora</a>
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
      <h2>Trading senza sforzo!</h2>
      <p class="text-lg">
        Fai trading delle principali criptovalute come Bitcoin, Ethereum e Dogecoin, con semplicità e fiducia.      </p>
      <a class="btn btn-black max-md:hidden" href="<?= page_url('sign.php') ?>">Inizia ora</a>
    </div>
    <div class="grid gap-3 md:gap-6" data-trading></div>
    <a class="btn btn-black md:hidden" href="<?= page_url('sign.php') ?>">Inizia ora</a>
  </div>
</div>
<section class="feature-section">
  <div class="container">
    <div class="feature-header">
      <h2>
        Una piattaforma di trading globale <span>progettata per crescere</span>      </h2>
      <p>
        Accedi a più mercati finanziari tramite un sistema pensato per velocità, precisione e prestazioni globali affidabili.      </p>
    </div>
    <div class="feature-grid">
      <div class="feature-card">
        <div class="accent"></div>
        <h3>Accesso multi-mercato</h3>
        <p>
          Fai trading di criptovalute, forex, azioni e materie prime su un’unica piattaforma, senza cambiare app.        </p>
      </div>
      <div class="feature-card featured">
        <div class="accent"></div>
        <h3>Esecuzione rapida degli ordini</h3>
        <p>
          Una piattaforma ottimizzata per un’esecuzione rapida e affidabile degli ordini sui mercati globali.        </p>
      </div>
      <div class="feature-card">
        <div class="accent"></div>
        <h3>Analisi in tempo reale</h3>
        <p>
          Dati di mercato in diretta, indicatori avanzati e insight per decidere in modo rapido e informato.        </p>
      </div>
    </div>
  </div>
</section>
    <!-- partners -->
    <div class="py-8 md:py-10">
      <div class="container-base grid gap-6 md:gap-10">
        <h2>I nostri partner</h2>
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
      <h2>Come funziona <?= e(SITE_NAME) ?>: dalla registrazione al trading</h2>
      <p class="rounded-custom sm:border sm:p-8">
        Un percorso in sei passaggi: registrazione, verifica, deposito, configurazione della strategia e uso degli strumenti di mercato. La dashboard mostra in modo chiaro tempi, opzioni e controlli.      </p>
    </div>
    <div class="grid gap-6 lg:grid-cols-2">
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          1
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Crea il tuo account</p>
          <p>Registrati con i tuoi dati di base per accedere in sicurezza alla piattaforma ufficiale <?= e(SITE_NAME) ?>. Questo passaggio rapido apre la dashboard principale.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          2
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Conferma la tua identità</p>
          <p>Conferma l’email per sbloccare tutte le funzioni: grafici in diretta, strumenti di analisi e risorse per un avvio strutturato.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          3
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Accedi alla piattaforma di trading</p>
          <p>Deposita sul conto almeno <?= e(money_min()) ?>. Puoi scegliere un importo più alto in base ai tuoi obiettivi; tutte le opzioni di pagamento e i costi sono visibili prima della conferma.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          4
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Deposita fondi</p>
          <p>Scegli bonifico, e-wallet o carta. Tempi e commissioni sono trasparenti, per un controllo completo del finanziamento.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          5
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Definisci la tua strategia</p>
          <p>Regola i parametri di rischio, i mercati preferiti e l’approccio di trading. <?= e(SITE_NAME) ?>: l’assistenza IA seleziona segnali e monitoraggio di mercato senza sostituire le tue scelte.</p>
        </div>
      </div>
      <div class="flex gap-3 md:gap-6">
        <div
          class="h2 bg-primary rounded-custom inline-flex h-[75px] w-[75px] shrink-0 items-center justify-center text-white md:h-[135px] md:w-[135px]">
          6
        </div>
        <div class="grid content-start gap-2 md:gap-4">
          <p class="h3">Esplora i mercati disponibili</p>
          <p>Quando il conto è attivo e configurato, monitora i prezzi in diretta, pianifica i trade e usa la piattaforma integrata per criptovalute e altri asset.</p>
        </div>
      </div>
    </div>
    <div class="grid gap-6 md:grid-cols-2">
      <a class="btn btn-black" href="<?= page_url('sign.php') ?>">Inizia a fare trading</a>
    </div>
  </div>
</div>
    <!-- payments -->
    <div class="py-8 md:py-10">
      <div class="container-base grid items-center gap-6 lg:grid-cols-2">
        <p class="text-lg">
          <?= e(SITE_NAME) ?> supporta diversi metodi di pagamento per clienti in tutto il mondo.        </p>
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
              data-prev="reviews" aria-label="slide precedente">
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
              aria-label="slide successiva">
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
                  A fantastic piattaforma di trading is <?= e(SITE_NAME) ?>! The
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
      <h2 class="text-2xl font-bold">Recensioni degli utenti</h2>
      <div class="inline-flex gap-4 max-md:hidden">
            <button class="text-primary hover:text-primary-dark -scale-x-100 cursor-pointer transition-colors"
              data-prev="reviews" aria-label="slide precedente">
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
              aria-label="slide successiva">
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
              <?= e(SITE_NAME) ?> ha superato le mie aspettative. La registrazione era semplice, i costi sono chiari e il supporto è rapido. Nel complesso, una piattaforma affidabile e fluida che uso volentieri.            </p>
            <div class="flex items-center gap-4">
              <div class="initials">FE</div>
              <p class="font-bold">Specialista del cambio</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Ho scelto <?= e(SITE_NAME) ?> per il trading crypto e ne sono soddisfatto. L’avvio è stato semplice e trasparente. Una scelta di fiducia, soprattutto per chi inizia.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">IM</div>
              <p class="font-bold">Analista dei mercati di investimento</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Trovo <?= e(SITE_NAME) ?> una piattaforma affidabile e costante. L’apertura del conto è stata semplice, i termini sono trasparenti e il supporto competente. Fare trading qui è confortevole.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">OT</div>
              <p class="font-bold">Trader online</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border flex flex-col justify-between gap-6 p-6 md:p-10 w-full swiper-border" style="border: 1px solid #ddd; border-radius: 20px;">
                <p>
                  Fare trading di criptovalute con <?= e(SITE_NAME) ?> è accessibile. La registrazione era facile, i costi comprensibili e l’aiuto disponibile quando serve. Da nuovo trader, ha fatto la differenza.                </p>
            <div class="flex items-center gap-4">
              <div class="initials">FA</div>
              <p class="font-bold">Analista finanziario</p>
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
    <h2>Domande frequenti</h2>
    <div class="grid gap-3 md:gap-6" data-accordion>
      <div id="accordion-1" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(1)">
          <span class="h3 text-left transition-colors">Quali sono i passaggi per iniziare a fare trading?</span>
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
            <p>È semplice. Registrati con i dati essenziali, conferma l’email e versa sul conto un minimo di <?= e(money_min()) ?>. Così sblocchi tutte le funzioni: grafici in diretta, strumenti di trading, analisi di mercato e supporto dedicato. Non serve esperienza: tutorial completi ti guidano in ogni passaggio.</p>
          </div>
        </div>
      </div>
      <div id="accordion-2" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(2)">
          <span class="h3 text-left transition-colors"><?= e(SITE_NAME) ?> è affidabile per gestire i miei soldi e le mie informazioni?</span>
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
            <p>In <?= e(SITE_NAME) ?> la protezione di dati e fondi è una priorità. Le sessioni sono cifrate in SSL, è disponibile l’autenticazione a due fattori e le pratiche sulla privacy sono spiegate in modo chiaro. Le transazioni finanziarie passano da partner di fiducia e protocolli interni. Puntiamo all’affidabilità, ma i rendimenti non possono essere garantiti.</p>
          </div>
        </div>
      </div>
      <div id="accordion-3" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(3)">
          <span class="h3 text-left transition-colors">Quanto tempo ci vuole per prelevare i fondi?</span>
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
            <p>I prelievi si possono richiedere in qualsiasi momento dal portale del conto. L’elaborazione richiede di solito da 1 a 3 giorni lavorativi, in base al metodo scelto. Commissioni e tempi stimati sono visibili prima della conferma. Se ti serve un aggiornamento, il team di supporto è disponibile.</p>
          </div>
        </div>
      </div>
      <div id="accordion-4" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(4)">
          <span class="h3 text-left transition-colors">Come faccio a sapere se questa piattaforma è adatta alle mie esigenze di trading?</span>
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
            <p>Consigliamo di iniziare con il deposito minimo per conoscere le funzioni. <?= e(SITE_NAME) ?> è adatta a principianti e trader esperti, con un’interfaccia semplice, strumenti IA opzionali e supporto 24/7. Mantieni il pieno controllo di ordini, limiti e impostazioni di rischio.</p>
          </div>
        </div>
      </div>
      <div id="accordion-5" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(5)">
          <span class="h3 text-left transition-colors">Serve esperienza di trading per iniziare?</span>
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
            <p>Non serve esperienza precedente. La piattaforma è semplice fin dall’inizio, con onboarding, tutorial e strumenti potenziati dall’IA. Impari al tuo ritmo: dai mercati di base fino ad analisi e automazione più avanzate.</p>
          </div>
        </div>
      </div>
      <div id="accordion-7" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(7)">
          <span class="h3 text-left transition-colors">Quali mercati posso seguire con <?= e(SITE_NAME) ?>?</span>
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
            <p>In un’unica interfaccia segui le principali criptovalute, il forex in tempo reale, le azioni globali e le materie prime. Niente più app da gestire: concentri l’attenzione su analisi e decisioni.</p>
          </div>
        </div>
      </div>
      <div id="accordion-8" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(8)">
          <span class="h3 text-left transition-colors">Come funzionano le analisi IA?</span>
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
            <p><?= e(SITE_NAME) ?> offre strumenti IA che organizzano i segnali, segnalano i movimenti di prezzo rilevanti e aiutano il monitoraggio. Supportano le tue scelte, senza sostituire la strategia né garantire un risultato. Decidi tu quando agire e quanto allocare.</p>
          </div>
        </div>
      </div>
      <div id="accordion-9" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(9)">
          <span class="h3 text-left transition-colors">Quanto tempo passa dalla registrazione al primo trade?</span>
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
            <p>Apertura conto e verifica richiedono in genere pochi minuti. Il tempo prima del primo trade dipende dall’elaborazione del deposito e dal metodo di pagamento. La home mostra una guida chiara, senza passaggi nascosti.</p>
          </div>
        </div>
      </div>
      <div id="accordion-10" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(10)">
          <span class="h3 text-left transition-colors">C’è supporto per le domande sull’account?</span>
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
            <p>Il team è raggiungibile dalla pagina Contatti o dalle FAQ per accesso al conto, depositi, prelievi o funzioni. L’aiuto è operativo, non una consulenza di investimento.</p>
          </div>
        </div>
      </div>
      <div id="accordion-6" class="group border-primary rounded-custom border transition-all">
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 px-4 py-5 md:px-8 md:py-10"
          onclick="toggleAccordion(6)">
          <span class="h3 text-left transition-colors">Informazioni sulla piattaforma</span>
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
            <p style="margin-bottom:16px;"><?= e(SITE_NAME) ?> è una piattaforma internazionale pensata per prestazioni costanti, esecuzione rapida e pieno controllo dell’ambiente di trading. Invece di gestire più servizi, riunisce le funzioni chiave in un unico flusso.</p>
            <p style="margin-bottom:16px;">Dall’accesso al mercato all’esecuzione e all’analisi, ogni elemento è pensato per funzionare senza attriti. Ti concentri sulle decisioni, non sul cambio di strumento.</p>
            <p style="margin-bottom:10px; font-weight:500;">Opera su più mercati finanziari da un’unica piattaforma:</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Criptovalute principali e emergenti</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Mercati forex con prezzi in diretta</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Azioni globali e opzioni azionarie</li>
              <li><span style="color:var(--color-primary);">•</span> Materie prime per diversificare le opportunità</li>
            </ul>
            <p style="margin-bottom:16px;">La performance è prioritaria. Il sistema è ottimizzato per un’esecuzione a bassa latenza e un funzionamento affidabile nei momenti di forte attività, così da reagire ai prezzi senza ritardi tecnici.</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Elaborazione rapida e affidabile degli ordini sui mercati</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Flusso continuo di dati di mercato</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Analisi e indicatori di mercato preinstallati</li>
              <li><span style="color:var(--color-primary);">•</span> Trading manuale e automatizzato</li>
            </ul>
            <p style="margin-bottom:16px;">Sicurezza e affidabilità operativa sono priorità a tutti i livelli. La piattaforma segue gli standard di settore e protegge in modo continuo informazioni e operazioni finanziarie.</p>
            <ul class="pl-5" style="margin-bottom:22px;">
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Comunicazioni completamente cifrate</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Verifica dell’identità e protocolli di sicurezza a più livelli</li>
              <li style="margin-bottom:8px;"><span style="color:var(--color-primary);">•</span> Processi di transazione monitorati e convalidati</li>
              <li><span style="color:var(--color-primary);">•</span> Infrastruttura progettata per una connettività globale affidabile</li>
            </ul>
            <p style="margin-bottom:16px;">Diamo lo stesso peso all’esperienza utente. Il design è volutamente semplice e intuitivo, così i trader si concentrano sulle strategie.</p>
            <p style="margin-bottom:16px;">Questo mix di funzionalità solide e semplicità rende <?= e(SITE_NAME) ?> ideale per principianti e trader esperti. Chi inizia progredisce in fretta, senza una curva di apprendimento troppo ripida; i profili avanzati restano liberi di eseguire tattiche complesse.</p>
            <p><?= e(SITE_NAME) ?> offre scalabilità, affidabilità e alte prestazioni su un’unica piattaforma, per un accesso sicuro e organizzato ai mercati finanziari internazionali.</p>
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
          <h2>Opera su una piattaforma regolamentata™</h2>
          <p>
            La fiducia di trader privati e aziende per l’acquisto, la vendita e la gestione sicura delle criptovalute.          </p>
        </div>
        
<?php
  $form_id = "lead-form-hero-2";
  $form_heading = null;
  $form_submit = 'Crea account';
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
          Funzionalità chiave della <span style='color:var(--color-primary);'><?= e(SITE_NAME) ?> piattaforma di trading</span>        </h2>
      <p style="margin-top:14px;color:#6b7280;font-size:17px;">
        Funzioni pensate per guadagnare in velocità, precisione e fiducia.      </p>
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
          Quadro tecnico        </div>
        <div class="row-text" style="color:#6b7280;">
          Tecnologia di trading avanzata basata sull’IA        </div>
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
          Metodi di finanziamento        </div>
        <div class="row-text" style="color:#6b7280;">
          Carte, bonifici, opzioni PayPal        </div>
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
          Accessibilità della piattaforma        </div>
        <div class="row-text" style="color:#6b7280;">
          Funziona su più dispositivi        </div>
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
          Efficienza        </div>
        <div class="row-text" style="color:#6b7280;">
          Fino all’85% di precisione        </div>
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
          Strumenti disponibili        </div>
        <div class="row-text" style="color:#6b7280;">
          Forex, azioni, criptovalute, materie prime e altro        </div>
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
          Guida all’apertura del conto        </div>
        <div class="row-text" style="color:#6b7280;">
          Onboarding rapido e fluido        </div>
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
          Supporto clienti          <span style="font-weight:400;color:#6b7280;margin-left:10px;">
            Assistenza professionale 24/7          </span>
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
          Contatta il supporto        </a>
      </div>
    </div>
  </div>
</section>
<div class="md:border-primary-light md:rounded-[20px] md:border md:px-20 md:py-8">
  <div class="border-primary-light grid justify-items-center gap-6 rounded-[20px] border px-4 py-5 md:gap-4 md:px-8 md:py-6 text-center md:text-left">
    <h2 class="h3 flex flex-wrap items-center justify-center md:justify-start gap-x-4 gap-y-3">
      Cosa dicono gli utenti di <?= e(SITE_NAME) ?>      <span class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-2 py-1 text-sm leading-none text-white uppercase">
        Affidabile      </span>
    </h2>
    <div class="flex flex-wrap items-center justify-center md:justify-start gap-2.5 text-center md:text-left">
      <strong class="leading-none text-emerald-600">
        4.7      </strong>
      <span class="leading-none text-amber-500" role="img"
        aria-label="4.7 Punteggio (su 5)">
        ★★★★★      </span>
      <span class="flex flex-wrap justify-center md:justify-start gap-1 text-sm text-gray-400">
        <span>
          <strong>124</strong> recensioni clienti ·
        </span>
        <span>
          Basato su <strong>337</strong> valutazioni ·
        </span>
        <span>
          Punteggio (su 5)        </span>
      </span>
    </div>
    <p class="text-center md:text-left">
      Una piattaforma intuitiva, con strumenti di automazione avanzati e molte risorse formative.    </p>
  </div>
</div>
      </div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
