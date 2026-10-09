<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Smart AI-investering ' . geo_in();
$page_description = 'Automatiserad handel ' . geo_in() . '. Börja med ' . money_min() . ' med vår AI. Säkert, transparent och enkelt.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1><?= e(SITE_NAME) ?>-plattformen</h1>
              <p>
                Vad gör <?= e(SITE_NAME) ?> unik? Här kan du investera smartare
                <?= e(geo_in()) ?>. Vår tillförlitliga AI-drivna handelsplattform hjälper dig att fatta välgrundade beslut
                och hantera risk tryggt. Upptäck möjligheterna med <?= e(SITE_NAME) ?>-AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Betygsatt 4,7 stjärnor av mer än 2 804 nöjda användare</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Betyg 4,7 av 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Registrera dig hos <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Registrera dig';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    När du anger dina uppgifter och klickar på „Registrera dig“
                    bekräftar du att du godkänner
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">integritetspolicyn</a> och
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">användarvillkoren</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Betalningsmetoder" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Betygsatt 4,7 stjärnor av mer än 2 804 nöjda användare</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Betyg 4,7 av 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Vinstkalkylator">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Beräkna möjlig vinst</h2>
          <p class="calc-widget__subtitle">
            Välj belopp och period för att se potentialen
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Du sätter in:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Investeringsperiod:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dagar</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>Från 1 dag</span>
                  <span>Upp till 3 månader</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Du kan tjäna</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Avkastning</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Intäkt</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Begär en personlig beräkning
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Stäng">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Lämna dina kontaktuppgifter så hör en av våra specialister av sig så
              snart som möjligt.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Registrera dig';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Din åtkomst <?= e(geo_from()) ?> till världens ledande krypto-handelsplattformar.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kortikon 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> använder avancerad artificiell intelligens och maskininlärning för att
                    hitta nya möjligheter på de finansiella marknaderna.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kortikon 2" />
                </div>
                <div class="text">
                  <p>
                    Investerare i kryptotillgångar <?= e(geo_in()) ?> får tillgång till de största börserna i
                    sektorn och kan handla ledande valutor som Bitcoin och Ethereum samt
                    ett brett urval av altcoins och stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Våra partners</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com-logotyp" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance-logotyp" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk-logotyp" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView-logotyp" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte-logotyp" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger-logotyp" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt-logotyp" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen-logotyp" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Varför <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Fördelsikon 1" />
              </div>
              <div class="text">
                <h3>Säkerhet <?= e(geo_in()) ?></h3>
                <p>
                  Som en etablerad plattform sätter vi säkerheten först. Vi använder SSL,
                  kryptering på banknivå och 2FA så att <?= e(SITE_NAME) ?> är tillförlitlig och dina data
                  skyddas.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Fördelsikon 2" />
              </div>
              <div class="text">
                <h3>Kraftfulla AI-algoritmer</h3>
                <p>
                  Våra anpassningsbara bottar använder avancerade AI-strategier och utför dem själva. Du
                  sätter inriktningen och behåller kontrollen över risk, marknader och mål, så att
                  du kan hålla helheten.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Fördelsikon 3" />
              </div>
              <div class="text">
                <h3>Transparenta avgifter. Inga dolda kostnader.</h3>
                <p>
                  Alla avgifter är transparenta, och investerare <?= e(geo_in()) ?> betalar inget extra för att använda
                  <?= e(SITE_NAME) ?>. Pengarna du sätter in för handel är helt dina, och du kan använda dem
                  som du vill. Vi behåller ingenting. Börja med bara <?= e(money_min()) ?> och behåll full kontroll
                  över dina investeringar.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Fördelsikon 4" />
              </div>
              <div class="text">
                <h3>Intuitivt användargränssnitt</h3>
                <p>
                  Vår överskådliga instrumentpanel kombinerar funktionalitet, precision och
                  enkelhet — för nybörjare och erfarna handlare.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Hur fungerar <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 1" />
              <p>
                Vår egen programvara övervakar flera handelsplattformar samtidigt och
                hittar prisskillnader som kan utnyttjas.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 2" />
              <p>
                <?= e(SITE_NAME) ?> köper billigt på en marknad och säljer dyrare på en annan
                och utnyttjar arbitragemöjligheter. Upplägget kan ge vinst genom att
                samla avkastning från små kursrörelser.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 3" />
              <p>Se hur <?= e(SITE_NAME) ?> kan förbättra din handel.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Registrera dig hos <?= e(SITE_NAME) ?> — och låt oss forma framtidens finans <?= e(geo_in()) ?> tillsammans.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> erbjuder ett brett spektrum av verktyg för handel med kryptotillgångar <?= e(geo_in()) ?>. Plattformen
                kopplar ihop de stora internationella börserna och ger tillgång till en rad
                kryptovalutor — från ledare som Bitcoin till andra som XRP. Dessutom kan du
                tjäna på kursrörelser.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Registrera dig';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>Erik, 37, Stockholm</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Betyg 1"
                />
              </div>
              <p class="review-text">
                Jag började med <?= e(money_min()) ?> och tar nu ut <?= e(currency_symbol() . '2,000') ?> i månaden.
              </p>
            </div>
            <div class="review">
              <h3>Anna, 42, Göteborg</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Betyg 2"
                />
              </div>
              <p class="review-text">Enkel plattform: allt är transparent och konkret.</p>
            </div>
            <div class="review">
              <h3>Lars, 45, Malmö</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Betyg 3"
                />
              </div>
              <p class="review-text">Den bästa lösningen för passiv inkomst.</p>
            </div>
            <div class="review">
              <h3>Sofia, 34, Uppsala</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Betyg 4"
                />
              </div>
              <p class="review-text">Stabil avkastning, även på semestern.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kryptoutbudet hos <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fördel 1"
                />
                <h3>Nyckeln till krypto-handel</h3>
                <p>
                  Vår moderna programvara är grunden för handelssystemet. Den är
                  gjord för att utnyttja små prisskillnader mellan de stora krypto-
                  börserna.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fördel 2"
                />
                <h3>Global handel med tillgångar</h3>
                <p>
                  Aktiekurser och andra tillgångar rör sig hela tiden; <?= e(SITE_NAME) ?> ger dig
                  verktygen att reagera snabbt på marknaden och öka chansen till en solid
                  avkastning.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fördel 3"
                />
                <h3>Valutahandel</h3>
                <p>
                  Valutakurser ändras hela tiden och skapar möjligheter. <?= e(SITE_NAME) ?>
                  hjälper dig att utnyttja även de minsta rörelserna på valutamarknaden.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fördel 4"
                />
                <h3><?= e(SITE_NAME) ?> och Bitcoin</h3>
                <p>
                  Bitcoin är fortfarande marknadsledaren och den mest synliga, finansiellt stabila
                  kryptovalutan. Genom att systematiskt fånga och utnyttja volatilitet
                  gör <?= e(SITE_NAME) ?> en jämnare avkastning lättare.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Plattformsinformation</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Integritet</h3>
                  <p><?= e(SITE_NAME) ?> följer gällande integritetsregler <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tillgångar</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash och andra ledande kryptovalutor.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Plattformstyp</h3>
                  <p>
                    <?= e(SITE_NAME) ?> ger investerare <?= e(geo_in()) ?> möjlighet att tjäna på kursrörelser
                    i ledande kryptovalutor, inklusive altcoins som XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Länder</h3>
                  <p>Vår plattform är tillgänglig globalt, även <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Insättningsalternativ</h3>
                  <p>Kreditkort, PayPal och banköverföring.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Kostnader</h3>
                  <p>Åtkomst till <?= e(SITE_NAME) ?> är gratis <?= e(geo_from()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2>Är <?= e(SITE_NAME) ?> tillförlitlig?</h2>
              <p>
                <?= e(SITE_NAME) ?> samarbetar med förstklassiga mäklare som är särskilt tillförlitliga och
                erfarna. Vi använder säkerhet på banknivå, som TLS/SSL-kryptering
                och tvåfaktorsautentisering (2FA), för att skydda tillgångar och data. Vår prisstruktur
                är helt transparent, utan dolda kostnader. Vi följer
                gällande regler.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Tillförlitlighetsgraf" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Våra system för artificiell intelligens och maskininlärning levererar marknadsanalys
                i realtid och konkreta handelsinsikter så att du kan förbättra dina resultat.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Kopieringshandel</h3>
                  <p>
                    De bästa handlarna är det av en anledning. Med <?= e(SITE_NAME) ?> kan du följa
                    och kopiera deras affärer — och dra nytta av erfarenheten och strategin.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktiefraktioner</h3>
                  <p>
                    Med en bredare portfölj får du även med begränsat kapital tillgång till
                    kvalitetstillgångar.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Utbildningsmaterial</h3>
                  <p>
                    För att skärpa dina handelsfärdigheter erbjuder vi utbildningsmaterial: handledningar,
                    webbinarier och guider.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilapp</h3>
                  <p>Handla när som helst, var som helst.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Support dygnet runt</h3>
                  <p>Kundservice är tillgänglig 24 timmar om dygnet, 7 dagar i veckan.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI-driven handel</h3>
                  <p>
                    Tack vare avancerade algoritmer för artificiell intelligens och maskininlärning
                    analyserar <?= e(SITE_NAME) ?> ständigt de senaste marknadsdata. Så fångas marknadsmöjligheter
                    med den största avkastningspotentialen snabbt upp.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Anpassningsbara strategier</h3>
                  <p>
                    När riskprofil och investeringsmål är satta kan du använda dem för att
                    skärpa handelsstrategin på vår plattform för flera tillgångar.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tillgång till olika tillgångar</h3>
                  <p>
                    Även om vi är specialiserade på kryptovaluta stöder vi också handel med
                    valuta, aktier, andra värdepapper och råvaror.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>Du kan handla hemifrån, analysera marknader och följa dina positioner.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Registrera dig';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Du kan handla hemifrån, analysera marknader och följa dina positioner.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Registrera dig nu" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
