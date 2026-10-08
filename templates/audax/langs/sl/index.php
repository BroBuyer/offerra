<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Pametno AI vlaganje ' . geo_in();
$page_description = 'Samodejno trgovanje ' . geo_in() . '. Začni z ' . money_min() . ' z našo AI. Varno, pregledno in preprosto.';
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
              <h1>Platforma <?= e(SITE_NAME) ?></h1>
              <p>
                Kaj <?= e(SITE_NAME) ?> dela edinstveno? Tu lahko vlagaš pametneje
                <?= e(geo_in()) ?>. Naša zanesljiva trgovalna platforma z AI pomaga sprejemati informirane odločitve
                in samozavestno upravljati tveganje. Odkrij možnosti <?= e(SITE_NAME) ?> AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Ocena 4,7 zvezdic od več kot 2804 zadovoljnih uporabnikov</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Ocena 4,7 od 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Pridruži se <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Registracija';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Z vnosom podatkov in klikom na „Registracija“
                    potrjuješ, da sprejemaš
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">politiko zasebnosti</a> in
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">pogoje uporabe</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Načini plačila" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Ocena 4,7 zvezdic od več kot 2804 zadovoljnih uporabnikov</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Ocena 4,7 od 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Kalkulator dobička">
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
          <h2 class="calc-widget__title">Izračunaj možni dobiček</h2>
          <p class="calc-widget__subtitle">
            Izberi znesek in obdobje, da vidiš potencial
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Vplačaš:</label>
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
                <label class="calc-widget__label" for="calc-days">Obdobje naložbe:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dni</span>
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
                  <span>Od 1 dneva</span>
                  <span>Do 3 mesece</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Lahko zaslužiš</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Donosnost</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Prihodek</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Zahtevaj individualni izračun
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Zapri">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Pusti kontakt in specialist se ti oglasi čim
              prej.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Registracija';
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
                Tvoj dostop <?= e(geo_from()) ?> do vodilnih svetovnih kriptotrgovalnih.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ikona kartice 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> uporablja napredno umetno inteligenco in strojno učenje, da
                    poišče nove priložnosti na finančnih trgih.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ikona kartice 2" />
                </div>
                <div class="text">
                  <p>
                    Vlagatelji v kriptoimetje <?= e(geo_in()) ?> dobijo dostop do največjih borz v
                    sektorju in lahko trgujejo z vodilnimi valutami, kot sta Bitcoin in Ethereum, ter
                    širokim naborom altcoinov in stablecoinov.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Naši partnerji</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logotip Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logotip Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logotip CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logotip TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logotip Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logotip Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logotip Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logotip Nansen" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Zakaj <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ikona prednosti 1" />
              </div>
              <div class="text">
                <h3>Varnost <?= e(geo_in()) ?></h3>
                <p>
                  Kot ugledna platforma varnost postavljamo na prvo mesto. Uporabljamo SSL,
                  šifriranje na bančni ravni in 2FA, da je <?= e(SITE_NAME) ?> zanesljiva, tvoji podatki pa
                  zaščiteni.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Ikona prednosti 2" />
              </div>
              <div class="text">
                <h3>Močni AI algoritmi</h3>
                <p>
                  Naši prilagodljivi boti uporabljajo napredne AI strategije in jih izvajajo sami. Ti
                  nastaviš pristop in obdržiš nadzor nad tveganjem, trgi in cilji, da
                  lahko spremljaš celoto.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ikona prednosti 3" />
              </div>
              <div class="text">
                <h3>Pregledne provizije. Brez skritih stroškov.</h3>
                <p>
                  Vse provizije so pregledne in vlagatelji <?= e(geo_in()) ?> ne plačajo nič dodatnega za uporabo
                  <?= e(SITE_NAME) ?>. Denar, vplačan za trgovanje, je v celoti tvoj in ga lahko uporabiš
                  po želji. Ničesar ne zadržimo. Začni že z <?= e(money_min()) ?> in obdrži poln nadzor
                  nad naložbami.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ikona prednosti 4" />
              </div>
              <div class="text">
                <h3>Intuitiven vmesnik</h3>
                <p>
                  Naša pregledna nadzorna plošča združuje funkcionalnost, natančnost in
                  enostavnost — za začetnike in izkušene traderje.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Kako <?= e(SITE_NAME) ?> deluje?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona seznama 1" />
              <p>
                Naša programska oprema hkrati spremlja več trgovalnih platform in
                išče razlike v cenah, ki jih je mogoče izkoristiti.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona seznama 2" />
              <p>
                <?= e(SITE_NAME) ?> kupuje poceni na enem trgu in proda dražje na drugem
                ter izkorišča arbitražo. Ta pristop lahko prinese dobiček
                s kopičenjem donosov iz majhnih premikov cen.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona seznama 3" />
              <p>Poglej, kako <?= e(SITE_NAME) ?> lahko izboljša tvoje trgovanje.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Pridruži se <?= e(SITE_NAME) ?> — in skupaj oblikujmo prihodnost financ <?= e(geo_in()) ?>!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> ponuja širok nabor orodij za trgovanje s kriptoimetjem <?= e(geo_in()) ?>. Platforma
                povezuje velike mednarodne borze in omogoča dostop do niza
                kriptovalut — od vodilnih, kot je Bitcoin, do drugih, kot je XRP. Poleg tega lahko
                zaslužiš na nihanjih cen.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Registracija';
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
              <h3>Marko, 37, Zagreb</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 1"
                />
              </div>
              <p class="review-text">
                Začel sem z <?= e(money_min()) ?>, zdaj pa dvigujem <?= e(currency_symbol() . '2,000') ?> mesečno!
              </p>
            </div>
            <div class="review">
              <h3>Ivana, 42, Split</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 2"
                />
              </div>
              <p class="review-text">Preprosta platforma: vse je pregledno in konkretno.</p>
            </div>
            <div class="review">
              <h3>Ana, 45, Rijeka</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 3"
                />
              </div>
              <p class="review-text">Najboljša rešitev za pasivni prihodek.</p>
            </div>
            <div class="review">
              <h3>Luka, 34, Zadar</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocena 4"
                />
              </div>
              <p class="review-text">Stabilen dobiček tudi na dopustu.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kriptonudba na <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Prednost 1"
                />
                <h3>Ključ kriptotrgovanja</h3>
                <p>
                  Naša sodobna programska oprema je temelj trgovalnega sistema. Zasnovana je
                  tako, da izkorišča majhne razlike v cenah med velikimi kripto
                  borzami.
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
                  alt="Prednost 2"
                />
                <h3>Globalno trgovanje z imetjem</h3>
                <p>
                  Cene delnic in drugega imetja se nenehno spreminjajo; <?= e(SITE_NAME) ?> ponuja
                  orodja za hitro odzivanje na trg in večjo možnost solidnega
                  donosa.
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
                  alt="Prednost 3"
                />
                <h3>Trgovanje z valutami</h3>
                <p>
                  Tečaji se nenehno spreminjajo in ustvarjajo priložnosti. <?= e(SITE_NAME) ?>
                  pomaga izkoristiti tudi najmanjše premike na valutnem trgu.
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
                  alt="Prednost 4"
                />
                <h3><?= e(SITE_NAME) ?> in Bitcoin</h3>
                <p>
                  Bitcoin ostaja vodilni na trgu ter najbolj vidna, finančno stabilna
                  kriptovaluta. S sistematičnim prepoznavanjem in izkoriščanjem volatilnosti
                  <?= e(SITE_NAME) ?> olajša doseganje rednega donosa.
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
              <h2>Informacije o platformi</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Zasebnost</h3>
                  <p><?= e(SITE_NAME) ?> spoštuje veljavne predpise o zasebnosti <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Imetje</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash in druge vodilne kriptovalute.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Vrsta platforme</h3>
                  <p>
                    <?= e(SITE_NAME) ?> vlagateljem <?= e(geo_in()) ?> omogoča zaslužek na nihanjih cen
                    glavnih kriptovalut, vključno z altcoini, kot je XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Države</h3>
                  <p>Naša platforma je na voljo globalno, tudi <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Možnosti vplačila</h3>
                  <p>Kreditne kartice, PayPal in bančno nakazilo.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Stroški</h3>
                  <p>Dostop do <?= e(SITE_NAME) ?> je brezplačen <?= e(geo_from()) ?>.</p>
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
              <h2>Je <?= e(SITE_NAME) ?> zanesljiva?</h2>
              <p>
                <?= e(SITE_NAME) ?> sodeluje z brokerji prvega razreda, ki so izjemno zanesljivi in
                izkušeni. Uveljavljamo varnost na bančni ravni, npr. šifriranje TLS/SSL
                in dvostopenjsko overitev (2FA), da zaščitimo imetje in podatke. Naša cenovna
                struktura je popolnoma pregledna, brez skritih stroškov. Spoštujemo
                veljavne predpise.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Grafikon zanesljivosti" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Naši sistemi umetne inteligence in strojnega učenja ponujajo analizo trga
                v realnem času in konkretne trgovalne vpoglede za boljše rezultate.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Najboljši traderji to niso slučajno. Z <?= e(SITE_NAME) ?> lahko spremljaš
                    in kopiraš njihove posle — ter uporabiš njihove izkušnje in strategijo.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Delne delnice</h3>
                  <p>
                    Z razširitvijo portfelja tudi z omejenim kapitalom dobiš dostop do
                    kakovostnega imetja.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Izobraževalna gradiva</h3>
                  <p>
                    Za razvoj trgovalnih veščin ponujamo gradiva: vodiče,
                    webinarje in priročnike.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilna aplikacija</h3>
                  <p>Trguj kadarkoli in kjerkoli.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Podpora nonstop</h3>
                  <p>Podpora strankam je na voljo 24 ur na dan, 7 dni v tednu.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trgovanje z AI</h3>
                  <p>
                    Zahvaljujoč naprednim algoritmom umetne inteligence in strojnega učenja
                    <?= e(SITE_NAME) ?> nenehno analizira najnovejše tržne podatke. Tako se hitro prepoznajo
                    priložnosti z največjim potencialom donosa.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Prilagodljive strategije</h3>
                  <p>
                    Ko nastaviš profil tveganja in naložbene cilje, jih lahko uporabiš za
                    izboljšanje strategije na naši platformi več razredov imetja.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Dostop do raznolikega imetja</h3>
                  <p>
                    Čeprav se specializiramo za kriptovalute, podpiramo tudi trgovanje
                    z valutami, delnicami, drugimi vrednostnimi papirji in blagom.
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
              <h2>Lahko trguješ od doma, analiziraš trge in spremljaš pozicije.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Registracija';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Lahko trguješ od doma, analiziraš trge in spremljaš pozicije.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Registriraj se zdaj" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
