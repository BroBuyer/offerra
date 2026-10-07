<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Smart AI-investering ' . geo_in();
$page_description = 'Automatisert trading ' . geo_in() . '. Start med ' . money_min() . ' med AI-teknologien vår. Trygt, transparent og enkelt.';
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
                Hva gjør <?= e(SITE_NAME) ?> unik? Her kan du investere smartere
                <?= e(geo_in()) ?>. Vår pålitelige AI-drevne tradingplattform hjelper deg å ta informerte valg
                og styre risiko med trygghet. Oppdag mulighetene med <?= e(SITE_NAME) ?>-AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Vurdert til 4,7 stjerner av mer enn 2 804 fornøyde brukere</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Vurdering 4,7 av 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Registrer deg hos <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Registrer deg';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Ved å fylle inn opplysningene dine og klikke på «Registrer deg»,
                    bekrefter du at du godtar
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">personvernerklæringen</a> og
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">bruksvilkårene</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Betalingsmetoder" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Vurdert til 4,7 stjerner av mer enn 2 804 fornøyde brukere</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Vurdering 4,7 av 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Gevinstkalkulator">
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
          <h2 class="calc-widget__title">Beregn mulig gevinst</h2>
          <p class="calc-widget__subtitle">
            Velg beløp og periode for å se potensialet
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Du setter inn:</label>
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
                <label class="calc-widget__label" for="calc-days">Investeringsperiode:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dager</span>
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
                  <span>Fra 1 dag</span>
                  <span>Opptil 3 måneder</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Du kan tjene</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Avkastning</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Inntekt</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Be om en personlig beregning
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Lukk">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Legg igjen kontaktinformasjonen din, så tar en av våre spesialister kontakt så
              raskt som mulig.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Registrer deg';
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
                Din tilgang <?= e(geo_from()) ?> til verdens ledende krypto-tradingplattformer.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kortikon 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> bruker avansert kunstig intelligens og maskinlæring for å
                    finne nye muligheter i finansmarkedene.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kortikon 2" />
                </div>
                <div class="text">
                  <p>
                    Investorer i kryptoaktiva <?= e(geo_in()) ?> får tilgang til de største børsene i
                    sektoren og kan handle ledende valutaer som Bitcoin og Ethereum, i tillegg til
                    et bredt utvalg av altcoins og stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Våre partnere</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com-logo" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance-logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk-logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView-logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte-logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger-logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt-logo" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen-logo" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Hvorfor <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Fordelikon 1" />
              </div>
              <div class="text">
                <h3>Sikkerhet <?= e(geo_in()) ?></h3>
                <p>
                  Som en etablert plattform setter vi sikkerhet først. Vi bruker SSL,
                  kryptering på banknivå og 2FA, slik at <?= e(SITE_NAME) ?> er pålitelig og dataene dine
                  er beskyttet.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Fordelikon 2" />
              </div>
              <div class="text">
                <h3>Kraftige AI-algoritmer</h3>
                <p>
                  Våre tilpasningsdyktige boter bruker avanserte AI-strategier og utfører dem selv. Du
                  bestemmer tilnærmingen og beholder kontrollen over risiko, markeder og mål, slik at
                  du kan holde oversikten.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Fordelikon 3" />
              </div>
              <div class="text">
                <h3>Transparente gebyrer. Ingen skjulte kostnader.</h3>
                <p>
                  Alle gebyrer er transparente, og investorer <?= e(geo_in()) ?> betaler ingenting ekstra for å bruke
                  <?= e(SITE_NAME) ?>. Pengene du setter inn til trading er helt dine, og du kan bruke dem
                  som du vil. Vi holder ingenting tilbake. Start med bare <?= e(money_min()) ?> og behold full kontroll
                  over investeringene dine.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Fordelikon 4" />
              </div>
              <div class="text">
                <h3>Intuitivt brukergrensesnitt</h3>
                <p>
                  Det oversiktlige dashbordet vårt kombinerer funksjonalitet, presisjon og
                  enkelhet — for nybegynnere og erfarne tradere.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Hvordan fungerer <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 1" />
              <p>
                Vår egen programvare overvåker flere tradingplattformer samtidig og
                finner prisforskjeller som kan utnyttes.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 2" />
              <p>
                <?= e(SITE_NAME) ?> kjøper billig i ett marked og selger dyrere i et annet,
                og utnytter arbitragemuligheter. Tilnærmingen kan gi gevinst ved å
                samle avkastning fra små kursbevegelser.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 3" />
              <p>Se hvordan <?= e(SITE_NAME) ?> kan forbedre tradingen din.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Registrer deg hos <?= e(SITE_NAME) ?> — og la oss forme fremtiden for finans <?= e(geo_in()) ?> sammen.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> tilbyr et bredt spekter av verktøy for handel i kryptoaktiva <?= e(geo_in()) ?>. Plattformen
                knytter sammen de store internasjonale børsene og gir tilgang til en rekke
                kryptovalutaer — fra ledere som Bitcoin til andre som XRP. I tillegg kan du
                tjene på kursbevegelser.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Registrer deg';
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
              <h3>Lars, 37, Oslo</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Vurdering 1"
                />
              </div>
              <p class="review-text">
                Jeg startet med <?= e(money_min()) ?> og tar nå ut <?= e(currency_symbol() . '2,000') ?> i måneden.
              </p>
            </div>
            <div class="review">
              <h3>Ingrid, 42, Bergen</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Vurdering 2"
                />
              </div>
              <p class="review-text">Enkel plattform: alt er transparent og konkret.</p>
            </div>
            <div class="review">
              <h3>Anders, 45, Trondheim</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Vurdering 3"
                />
              </div>
              <p class="review-text">Den beste løsningen for passiv inntekt.</p>
            </div>
            <div class="review">
              <h3>Silje, 34, Stavanger</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Vurdering 4"
                />
              </div>
              <p class="review-text">Stabil avkastning, også på ferie.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kryptotilbudet hos <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fordel 1"
                />
                <h3>Nøkkelen til krypto-trading</h3>
                <p>
                  Den moderne programvaren vår er grunnlaget for tradingsystemet. Den er
                  laget for å utnytte små prisforskjeller mellom de store krypto-
                  børsene.
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
                  alt="Fordel 2"
                />
                <h3>Global handel i aktiva</h3>
                <p>
                  Aksjekurser og andre aktiva beveger seg hele tiden; <?= e(SITE_NAME) ?> gir deg
                  verktøyene til å reagere raskt på markedet og øke sjansen for solid
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
                  alt="Fordel 3"
                />
                <h3>Valutahandel</h3>
                <p>
                  Valutakurser endrer seg kontinuerlig og skaper muligheter. <?= e(SITE_NAME) ?>
                  hjelper deg å utnytte selv de minste bevegelsene i valutamarkedet.
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
                  alt="Fordel 4"
                />
                <h3><?= e(SITE_NAME) ?> og Bitcoin</h3>
                <p>
                  Bitcoin er fortsatt markedslederen og den mest synlige, finansielt stabile
                  kryptovalutaen. Ved å fange opp og utnytte volatilitet systematisk,
                  gjør <?= e(SITE_NAME) ?> jevnere avkastning enklere.
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
              <h2>Plattforminformasjon</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Personvern</h3>
                  <p><?= e(SITE_NAME) ?> følger gjeldende personvernregler <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktiva</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash og andre ledende kryptovalutaer.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Plattformtype</h3>
                  <p>
                    <?= e(SITE_NAME) ?> gir investorer <?= e(geo_in()) ?> muligheten til å tjene på kursbevegelser
                    i ledende kryptovalutaer, inkludert altcoins som XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Land</h3>
                  <p>Plattformen vår er tilgjengelig globalt, også <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Innskuddsmuligheter</h3>
                  <p>Kredittkort, PayPal og bankoverføring.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Kostnader</h3>
                  <p>Tilgang til <?= e(SITE_NAME) ?> er gratis <?= e(geo_from()) ?>.</p>
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
              <h2>Er <?= e(SITE_NAME) ?> pålitelig?</h2>
              <p>
                <?= e(SITE_NAME) ?> samarbeider med førsteklasses meglere som er svært pålitelige og
                erfarne. Vi bruker sikkerhet på banknivå, som TLS/SSL-kryptering
                og tofaktorautentisering (2FA), for å beskytte aktiva og data. Prisstrukturen
                vår er helt transparent, uten skjulte kostnader. Vi følger
                gjeldende regler.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Pålitelighetsgraf" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Systemene våre for kunstig intelligens og maskinlæring leverer markedsanalyse
                i sanntid og konkrete tradinginnsikter for å forbedre resultatene dine.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Kopihandel</h3>
                  <p>
                    De beste traderne er det av en grunn. Med <?= e(SITE_NAME) ?> kan du følge
                    og kopiere handlene deres — og dra nytte av erfaringen og strategien.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aksjefraksjoner</h3>
                  <p>
                    Med en bredere portefølje får du også med begrenset kapital tilgang til
                    kvalitetsaktiva.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Læringsmateriell</h3>
                  <p>
                    For å skjerpe tradingferdighetene tilbyr vi læringsmateriell: veiledninger,
                    webinarer og guider.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilapp</h3>
                  <p>Handle når som helst, hvor som helst.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Support døgnet rundt</h3>
                  <p>Kundeservice er tilgjengelig 24 timer i døgnet, 7 dager i uken.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI-drevet trading</h3>
                  <p>
                    Takket være avanserte algoritmer for kunstig intelligens og maskinlæring
                    analyserer <?= e(SITE_NAME) ?> hele tiden de nyeste markedsdataene. Slik fanges markedsmuligheter
                    med størst avkastningspotensial opp raskt.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tilpassbare strategier</h3>
                  <p>
                    Når risikoprofil og investeringsmål er satt, kan du bruke dem til å
                    skjerpe tradingstrategien på fleraktivaplattformen vår.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tilgang til ulike aktiva</h3>
                  <p>
                    Selv om vi er spesialisert på kryptovaluta, støtter vi også handel i
                    valuta, aksjer, andre verdipapirer og råvarer.
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
              <h2>Du kan handle hjemmefra, analysere markeder og følge posisjonene dine.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Registrer deg';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Du kan handle hjemmefra, analysere markeder og følge posisjonene dine.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Registrer deg nå" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
