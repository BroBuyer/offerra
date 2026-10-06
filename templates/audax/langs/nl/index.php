<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Slim investeren met AI ' . geo_in();
$page_description = 'Geautomatiseerd traden ' . geo_in() . '. Start met ' . money_min() . ' dankzij onze AI-technologie. Veilig, transparant en eenvoudig.';
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
              <h1>Platform <?= e(SITE_NAME) ?></h1>
              <p>
                Wat maakt <?= e(SITE_NAME) ?> bijzonder? Hier kun je slimmer investeren
                <?= e(geo_in()) ?>. Ons betrouwbare, AI-gestuurde tradingplatform helpt je om weloverwogen te beslissen
                en risicobewust te sturen. Ontdek wat de AI van <?= e(SITE_NAME) ?> voor je doet.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Beoordeeld met 4,7 sterren door meer dan 2.804 tevreden gebruikers</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Beoordeling 4,7 van 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Meld je aan bij <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Meld je aan';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Door je gegevens in te vullen en op «Meld je aan» te klikken,
                    bevestig je dat je akkoord gaat met het
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Privacybeleid</a> en de
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Gebruiksvoorwaarden</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Betaalmethoden" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Beoordeeld met 4,7 sterren door meer dan 2.804 tevreden gebruikers</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Beoordeling 4,7 van 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Winstcalculator">
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
          <h2 class="calc-widget__title">Bereken mogelijke winst</h2>
          <p class="calc-widget__subtitle">
            Kies bedrag en looptijd om je mogelijke winst te schatten
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Jouw storting:</label>
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
                <label class="calc-widget__label" for="calc-days">Beleggingsduur:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dagen</span>
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
                  <span>Vanaf 1 dag</span>
                  <span>Tot 3 maanden</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Je kunt verdienen</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Rendement</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Opbrengst</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Vraag een persoonlijke berekening aan
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Sluiten">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Laat je contactgegevens achter: een van onze specialisten neemt zo
              snel mogelijk contact met je op.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Meld je aan';
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
                Jouw toegang <?= e(geo_from()) ?> tot de toonaangevende crypto-tradingplatforms.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kaartpictogram 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> gebruikt geavanceerde kunstmatige intelligentie en machine learning om
                    nieuwe kansen op de financiële markten te herkennen.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kaartpictogram 2" />
                </div>
                <div class="text">
                  <p>
                    Beleggers in crypto-assets <?= e(geo_in()) ?> krijgen toegang tot de grootste handelsplatforms van de
                    sector en kunnen leidende munten zoals Bitcoin en Ethereum verhandelen, net als
                    een breed scala aan altcoins en stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Onze partners</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logo Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logo Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logo CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logo TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logo Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logo Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logo Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logo Nansen" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Waarom <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Voordeelpictogram 1" />
              </div>
              <div class="text">
                <h3>Veiligheid <?= e(geo_in()) ?></h3>
                <p>
                  Als gevestigd platform zetten we veiligheid op de eerste plaats. We gebruiken SSL,
                  versleuteling op bankniveau en 2FA, zodat <?= e(SITE_NAME) ?> betrouwbaar blijft en je gegevens
                  beschermd zijn.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Voordeelpictogram 2" />
              </div>
              <div class="text">
                <h3>Krachtige AI-algoritmen</h3>
                <p>
                  Onze aanpasbare bots zetten geavanceerde AI-strategieën in en voeren ze zelfstandig uit. Jij
                  bepaalt de aanpak en houdt de controle over risico, markten en doelen, zodat
                  je het overzicht houdt.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Voordeelpictogram 3" />
              </div>
              <div class="text">
                <h3>Transparante tarieven. Geen verborgen kosten.</h3>
                <p>
                  Alle tarieven zijn transparant; beleggers <?= e(geo_in()) ?> betalen niets extra voor het gebruik van
                  <?= e(SITE_NAME) ?>. Het geld dat je stort voor trading blijft volledig van jou: je gebruikt het
                  zoals je wilt. Wij houden niets in. Start al vanaf <?= e(money_min()) ?> en houd de volledige controle
                  over je beleggingen.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Voordeelpictogram 4" />
              </div>
              <div class="text">
                <h3>Intuïtieve gebruikersinterface</h3>
                <p>
                  Ons overzichtelijke dashboard combineert functionaliteit, precisie en
                  eenvoud — voor beginners en ervaren traders.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Hoe werkt <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Lijstpictogram 1" />
              <p>
                Onze eigen software volgt tegelijk meerdere tradingplatforms en
                herkent bruikbare prijsverschillen.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Lijstpictogram 2" />
              <p>
                <?= e(SITE_NAME) ?> koopt goedkoop op de ene markt en verkoopt duurder op een andere,
                en benut zo arbitragekansen. Deze aanpak kan winst opleveren door
                rendement uit kleine koersbewegingen te verzamelen.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Lijstpictogram 3" />
              <p>Ontdek hoe <?= e(SITE_NAME) ?> je trading kan verbeteren.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Meld je aan bij <?= e(SITE_NAME) ?> — en laten we samen de toekomst van finance <?= e(geo_in()) ?> vormgeven.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> biedt een breed scala aan tools voor het handelen in crypto-assets <?= e(geo_in()) ?>. Het platform
                koppelt de grote internationale handelsplaatsen en opent toegang tot tal van
                cryptovaluta — van leiders zoals Bitcoin tot andere zoals XRP. Daarnaast kun je
                profiteren van koersschommelingen.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Meld je aan';
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
              <h3>Daan, 37, Amsterdam</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Beoordeling 1"
                />
              </div>
              <p class="review-text">
                Ik begon met <?= e(money_min()) ?> en neem nu <?= e(currency_symbol() . '2,000') ?> per maand op.
              </p>
            </div>
            <div class="review">
              <h3>Emma, 42, Rotterdam</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Beoordeling 2"
                />
              </div>
              <p class="review-text">Eenvoudig platform: alles is transparant en concreet.</p>
            </div>
            <div class="review">
              <h3>Sanne, 45, Utrecht</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Beoordeling 3"
                />
              </div>
              <p class="review-text">De beste oplossing voor passief inkomen.</p>
            </div>
            <div class="review">
              <h3>Tim, 34, Den Haag</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Beoordeling 4"
                />
              </div>
              <p class="review-text">Stabiele opbrengsten, ook in de vakantie.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Het crypto-aanbod van <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Voordeel 1"
                />
                <h3>De sleutel tot crypto-trading</h3>
                <p>
                  Onze moderne software is de basis van het tradingsysteem. Ze is
                  ontworpen om kleine prijsverschillen tussen de grote crypto-
                  handelsplaatsen te benutten.
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
                  alt="Voordeel 2"
                />
                <h3>Wereldwijde handel in assets</h3>
                <p>
                  Aandelenkoersen en andere assets bewegen voortdurend; <?= e(SITE_NAME) ?> levert de
                  tools om snel op marktbewegingen te reageren en de kans op solide
                  rendement te vergroten.
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
                  alt="Voordeel 3"
                />
                <h3>Forex-trading</h3>
                <p>
                  Wisselkoersen veranderen continu en creëren kansen. <?= e(SITE_NAME) ?>
                  helpt je ook de kleinste bewegingen op de valutamarkt te benutten.
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
                  alt="Voordeel 4"
                />
                <h3><?= e(SITE_NAME) ?> en Bitcoin</h3>
                <p>
                  Bitcoin blijft de marktleider en de zichtbaarste, financieel meest stabiele
                  cryptovaluta. Door volatiliteit systematisch te herkennen en te benutten,
                  maakt <?= e(SITE_NAME) ?> gelijkmatigere opbrengsten makkelijker.
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
              <h2>Gegevens over het platform</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privacy</h3>
                  <p><?= e(SITE_NAME) ?> houdt zich aan de geldende privacyregels <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Assets</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash en andere toonaangevende cryptovaluta.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Platformtype</h3>
                  <p>
                    <?= e(SITE_NAME) ?> biedt beleggers <?= e(geo_in()) ?> de kans om te profiteren van koersbewegingen
                    van toonaangevende cryptovaluta, inclusief altcoins zoals XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Landen</h3>
                  <p>Ons platform is wereldwijd beschikbaar, ook <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Stortingsmogelijkheden</h3>
                  <p>Creditcards, PayPal en bankoverschrijving.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Kosten</h3>
                  <p>Toegang tot <?= e(SITE_NAME) ?> is <?= e(geo_in()) ?> gratis.</p>
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
              <h2>Is <?= e(SITE_NAME) ?> betrouwbaar?</h2>
              <p>
                <?= e(SITE_NAME) ?> werkt met eersteklas brokers die bijzonder betrouwbaar en
                ervaren zijn. We zetten beveiliging op bankniveau in, zoals TLS/SSL-versleuteling
                en tweefactorauthenticatie (2FA), om je assets en gegevens te beschermen. Onze
                prijsstructuur is volledig transparant, zonder verborgen kosten. We houden ons aan de
                geldende regels.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Betrouwbaarheidsgrafiek" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Onze systemen voor kunstmatige intelligentie en machine learning leveren marktanalyse
                in realtime en concrete tradinginzichten om je resultaten te verbeteren.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    De beste traders zijn dat niet toevallig. Met <?= e(SITE_NAME) ?> kun je hun trades
                    volgen en kopiëren — en zo profiteren van hun ervaring en strategie.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Fracties van aandelen</h3>
                  <p>
                    Met een breder portfolio krijg je ook met beperkt kapitaal toegang tot
                    kwaliteitsassets.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Leermateriaal</h3>
                  <p>
                    Om je tradingvaardigheden te scherpen, bieden we leermateriaal: tutorials,
                    webinars en gidsen.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobiele app</h3>
                  <p>Handel altijd, overal.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Support dag en nacht</h3>
                  <p>Onze klantenservice is 24 uur per dag, 7 dagen per week bereikbaar.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI-gestuurd trading</h3>
                  <p>
                    Dankzij onze geavanceerde algoritmen voor kunstmatige intelligentie en machine learning
                    analyseert <?= e(SITE_NAME) ?> voortdurend de nieuwste marktgegevens. Zo worden marktkansen
                    met het grootste rendements­potentieel snel herkend.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aanpasbare strategieën</h3>
                  <p>
                    Zodra risicoprofiel en beleggingsdoelen vastliggen, kun je ze gebruiken om
                    je tradingstrategie op ons multi-assetplatform te scherpen.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Toegang tot diverse assets</h3>
                  <p>
                    Hoewel we ons op cryptovaluta richten, ondersteunen we ook de handel in
                    valuta, aandelen, andere effecten en grondstoffen.
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
              <h2>Je kunt thuis handelen, markten analyseren en posities volgen.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Meld je aan';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Je kunt thuis handelen, markten analyseren en posities volgen.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Meld je nu aan" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
