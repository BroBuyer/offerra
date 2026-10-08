<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Smart AI-investering ' . geo_in();
$page_description = 'Automatiseret handel ' . geo_in() . '. Start med ' . money_min() . ' med vores AI. Sikkert, gennemsigtigt og enkelt.';
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
              <h1><?= e(SITE_NAME) ?>-platformen</h1>
              <p>
                Hvad gør <?= e(SITE_NAME) ?> unik? Her kan du investere klogere
                <?= e(geo_in()) ?>. Vores pålidelige AI-drevne handelsplatform hjælper dig med at træffe informerede valg
                og styre risiko med tryghed. Opdag mulighederne med <?= e(SITE_NAME) ?>-AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Bedømt til 4,7 stjerner af mere end 2.804 tilfredse brugere</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Bedømmelse 4,7 ud af 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Tilmeld dig <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Tilmeld dig';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Når du indtaster dine oplysninger og klikker på „Tilmeld dig“,
                    bekræfter du, at du accepterer
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">privatlivspolitikken</a> og
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">brugsvilkårene</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Betalingsmetoder" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Bedømt til 4,7 stjerner af mere end 2.804 tilfredse brugere</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Bedømmelse 4,7 ud af 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Gevinstberegner">
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
            Vælg beløb og periode for at se potentialet
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Du indbetaler:</label>
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
                  <span data-calc="days_value">45</span> <span>dage</span>
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
                  <span>Op til 3 måneder</span>
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
                  <div class="calc-widget__stat-label">Afkast</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Indtægt</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Anmod om en personlig beregning
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Luk">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Efterlad dine kontaktoplysninger, så tager en af vores specialister fat så
              hurtigt som muligt.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Tilmeld dig';
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
                Din adgang <?= e(geo_from()) ?> til verdens førende krypto-handelsplatforme.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kortikon 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> bruger avanceret kunstig intelligens og maskinlæring til at
                    finde nye muligheder på de finansielle markeder.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kortikon 2" />
                </div>
                <div class="text">
                  <p>
                    Investorer i kryptoaktiver <?= e(geo_in()) ?> får adgang til de største børser i
                    sektoren og kan handle førende valutaer som Bitcoin og Ethereum samt
                    et bredt udvalg af altcoins og stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Vores partnere</h2>
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
                <h3>Sikkerhed <?= e(geo_in()) ?></h3>
                <p>
                  Som en etableret platform sætter vi sikkerhed først. Vi bruger SSL,
                  kryptering på bankniveau og 2FA, så <?= e(SITE_NAME) ?> er pålidelig, og dine data
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
                  Vores tilpasningsdygtige bots bruger avancerede AI-strategier og udfører dem selv. Du
                  fastlægger tilgangen og beholder kontrollen over risiko, markeder og mål, så
                  du kan holde overblikket.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Fordelikon 3" />
              </div>
              <div class="text">
                <h3>Gennemsigtige gebyrer. Ingen skjulte omkostninger.</h3>
                <p>
                  Alle gebyrer er gennemsigtige, og investorer <?= e(geo_in()) ?> betaler intet ekstra for at bruge
                  <?= e(SITE_NAME) ?>. Pengene, du indbetaler til handel, er helt dine, og du kan bruge dem
                  som du vil. Vi holder intet tilbage. Start med bare <?= e(money_min()) ?>, og behold fuld kontrol
                  over dine investeringer.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Fordelikon 4" />
              </div>
              <div class="text">
                <h3>Intuitiv brugergrænseflade</h3>
                <p>
                  Vores overskuelige dashboard kombinerer funktionalitet, præcision og
                  enkelhed — for begyndere og erfarne tradere.
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
                Vores egen software overvåger flere handelsplatforme samtidig og
                finder prisforskelle, der kan udnyttes.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 2" />
              <p>
                <?= e(SITE_NAME) ?> køber billigt på ét marked og sælger dyrere på et andet
                og udnytter arbitragemuligheder. Tilgangen kan give gevinst ved at
                samle afkast fra små kursbevægelser.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listeikon 3" />
              <p>Se, hvordan <?= e(SITE_NAME) ?> kan forbedre din handel.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Tilmeld dig <?= e(SITE_NAME) ?> — og lad os forme fremtidens finans <?= e(geo_in()) ?> sammen.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> tilbyder et bredt spektrum af værktøjer til handel med kryptoaktiver <?= e(geo_in()) ?>. Platformen
                knytter de store internationale børser sammen og giver adgang til en række
                kryptovalutaer — fra ledere som Bitcoin til andre som XRP. Derudover kan du
                tjene på kursbevægelser.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Tilmeld dig';
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
              <h3>Mads, 37, København</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bedømmelse 1"
                />
              </div>
              <p class="review-text">
                Jeg startede med <?= e(money_min()) ?> og hæver nu <?= e(currency_symbol() . '2,000') ?> om måneden.
              </p>
            </div>
            <div class="review">
              <h3>Anna, 42, Aarhus</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bedømmelse 2"
                />
              </div>
              <p class="review-text">Enkel platform: alt er gennemsigtigt og konkret.</p>
            </div>
            <div class="review">
              <h3>Lars, 45, Odense</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bedømmelse 3"
                />
              </div>
              <p class="review-text">Den bedste løsning til passiv indkomst.</p>
            </div>
            <div class="review">
              <h3>Sofie, 34, Aalborg</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bedømmelse 4"
                />
              </div>
              <p class="review-text">Stabilt afkast, også på ferie.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kryptotilbuddet hos <?= e(SITE_NAME) ?></h2>
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
                <h3>Nøglen til krypto-handel</h3>
                <p>
                  Vores moderne software er grundlaget for handelssystemet. Den er
                  lavet til at udnytte små prisforskelle mellem de store krypto-
                  børser.
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
                <h3>Global handel med aktiver</h3>
                <p>
                  Aktiekurser og andre aktiver bevæger sig hele tiden; <?= e(SITE_NAME) ?> giver dig
                  værktøjerne til at reagere hurtigt på markedet og øge chancen for et solidt
                  afkast.
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
                  Valutakurser ændrer sig hele tiden og skaber muligheder. <?= e(SITE_NAME) ?>
                  hjælper dig med at udnytte selv de mindste bevægelser på valutamarkedet.
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
                  Bitcoin er stadig markedslederen og den mest synlige, finansielt stabile
                  kryptovaluta. Ved systematisk at fange og udnytte volatilitet
                  gør <?= e(SITE_NAME) ?> et jævnere afkast lettere.
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
              <h2>Platforminformation</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privatliv</h3>
                  <p><?= e(SITE_NAME) ?> følger gældende privatlivsregler <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktiver</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash og andre førende kryptovalutaer.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Platformtype</h3>
                  <p>
                    <?= e(SITE_NAME) ?> giver investorer <?= e(geo_in()) ?> mulighed for at tjene på kursbevægelser
                    i førende kryptovalutaer, herunder altcoins som XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Lande</h3>
                  <p>Vores platform er tilgængelig globalt, også <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Indbetalingsmuligheder</h3>
                  <p>Kreditkort, PayPal og bankoverførsel.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Omkostninger</h3>
                  <p>Adgang til <?= e(SITE_NAME) ?> er gratis <?= e(geo_from()) ?>.</p>
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
              <h2>Er <?= e(SITE_NAME) ?> pålidelig?</h2>
              <p>
                <?= e(SITE_NAME) ?> samarbejder med førsteklasses mæglere, der er særdeles pålidelige og
                erfarne. Vi bruger sikkerhed på bankniveau, som TLS/SSL-kryptering
                og tofaktorgodkendelse (2FA), for at beskytte aktiver og data. Vores prisstruktur
                er helt gennemsigtig, uden skjulte omkostninger. Vi følger
                gældende regler.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Pålidelighedsgraf" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Vores systemer til kunstig intelligens og maskinlæring leverer markedsanalyse
                i realtid og konkrete handelsindsigter, så du kan forbedre dine resultater.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Kopihandel</h3>
                  <p>
                    De bedste tradere er det af en grund. Med <?= e(SITE_NAME) ?> kan du følge
                    og kopiere deres handler — og drage nytte af erfaringen og strategien.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktiefraktioner</h3>
                  <p>
                    Med en bredere portefølje får du også med begrænset kapital adgang til
                    kvalitetsaktiver.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Læringsmateriale</h3>
                  <p>
                    For at skærpe dine handelsfærdigheder tilbyder vi læringsmateriale: vejledninger,
                    webinarer og guides.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilapp</h3>
                  <p>Handl når som helst, hvor som helst.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Support døgnet rundt</h3>
                  <p>Kundeservice er tilgængelig 24 timer i døgnet, 7 dage om ugen.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI-drevet handel</h3>
                  <p>
                    Takket være avancerede algoritmer til kunstig intelligens og maskinlæring
                    analyserer <?= e(SITE_NAME) ?> hele tiden de nyeste markedsdata. Så fanges markedsmuligheder
                    med det største afkastpotentiale hurtigt op.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tilpasningsbare strategier</h3>
                  <p>
                    Når risikoprofil og investeringsmål er sat, kan du bruge dem til at
                    skærpe handelsstrategien på vores fleraktiv-platform.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Adgang til forskellige aktiver</h3>
                  <p>
                    Selvom vi er specialiseret i kryptovaluta, understøtter vi også handel med
                    valuta, aktier, andre værdipapirer og råvarer.
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
              <h2>Du kan handle hjemmefra, analysere markeder og følge dine positioner.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Tilmeld dig';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Du kan handle hjemmefra, analysere markeder og følge dine positioner.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Tilmeld dig nu" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
