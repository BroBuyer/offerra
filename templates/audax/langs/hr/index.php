<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Pametno AI ulaganje ' . geo_in();
$page_description = 'Automatsko trgovanje ' . geo_in() . '. Počni s ' . money_min() . ' uz našu AI. Sigurno, transparentno i jednostavno.';
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
                Što <?= e(SITE_NAME) ?> čini jedinstvenom? Ovdje možeš pametnije ulagati
                <?= e(geo_in()) ?>. Naša pouzdana trgovačka platforma pokretana AI-jem pomaže donositi informirane odluke
                i sigurno upravljati rizikom. Otkrij mogućnosti <?= e(SITE_NAME) ?> AI-ja.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Ocijenjeno s 4,7 zvjezdica od više od 2804 zadovoljnih korisnika</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Ocjena 4,7 od 5"
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
                    Unosom podataka i klikom na „Registracija“
                    potvrđuješ da prihvaćaš
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">pravila privatnosti</a> i
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">uvjete korištenja</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Načini plaćanja" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Ocijenjeno s 4,7 zvjezdica od više od 2804 zadovoljnih korisnika</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Ocjena 4,7 od 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Kalkulator dobiti">
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
          <h2 class="calc-widget__title">Izračunaj moguću dobit</h2>
          <p class="calc-widget__subtitle">
            Odaberi iznos i razdoblje da vidiš potencijal
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Uplaćuješ:</label>
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
                <label class="calc-widget__label" for="calc-days">Razdoblje ulaganja:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dana</span>
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
                  <span>Od 1 dana</span>
                  <span>Do 3 mjeseca</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Možeš zaraditi</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Profitabilnost</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Prihod</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Zatraži individualni izračun
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Zatvori">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Ostavi kontakt i naš stručnjak javit će ti se što
              prije.
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
                Tvoj pristup <?= e(geo_from()) ?> vodećim svjetskim kriptotrgovačkim platformama.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ikona kartice 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> koristi naprednu umjetnu inteligenciju i strojno učenje kako bi
                    pronalazila nove prilike na financijskim tržištima.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ikona kartice 2" />
                </div>
                <div class="text">
                  <p>
                    Ulagatelji u kriptoimovinu <?= e(geo_in()) ?> dobivaju pristup najvećim burzama u
                    sektoru i mogu trgovati vodećim valutama poput Bitcoina i Ethereuma te
                    širokim rasponom altcoina i stablecoina.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Naši partneri</h2>
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
          <h2>Zašto <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ikona prednosti 1" />
              </div>
              <div class="text">
                <h3>Sigurnost <?= e(geo_in()) ?></h3>
                <p>
                  Kao ugledna platforma, sigurnost stavljamo na prvo mjesto. Koristimo SSL,
                  enkripciju na bankarskoj razini i 2FA, kako bi <?= e(SITE_NAME) ?> bila pouzdana, a tvoji podaci
                  zaštićeni.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Ikona prednosti 2" />
              </div>
              <div class="text">
                <h3>Moćni AI algoritmi</h3>
                <p>
                  Naši prilagodljivi botovi koriste napredne AI strategije i izvršavaju ih sami. Ti
                  postavljaš pristup i zadržavaš kontrolu nad rizikom, tržištima i ciljevima, kako bi
                  mogao pratiti cjelinu.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ikona prednosti 3" />
              </div>
              <div class="text">
                <h3>Transparentne naknade. Nema skrivenih troškova.</h3>
                <p>
                  Sve su naknade transparentne i ulagatelji <?= e(geo_in()) ?> ne plaćaju ništa dodatno za korištenje
                  <?= e(SITE_NAME) ?>. Novac uplaćen za trgovanje u potpunosti je tvoj i možeš ga koristiti
                  kako želiš. Ništa ne zadržavamo. Počni već od <?= e(money_min()) ?> i zadrži punu kontrolu
                  nad ulaganjima.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ikona prednosti 4" />
              </div>
              <div class="text">
                <h3>Intuitivno sučelje</h3>
                <p>
                  Naša pregledna nadzorna ploča spaja funkcionalnost, preciznost i
                  jednostavnost — za početnike i iskusne tradere.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Kako <?= e(SITE_NAME) ?> funkcionira?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona popisa 1" />
              <p>
                Naš softver istodobno prati više trgovačkih platformi i
                traži razlike u cijenama koje se mogu iskoristiti.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona popisa 2" />
              <p>
                <?= e(SITE_NAME) ?> kupuje jeftino na jednom tržištu i prodaje skuplje na drugom,
                i koristi arbitražu. Ovaj pristup može donijeti dobit
                kumuliranjem prinosa iz malih pomaka cijena.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona popisa 3" />
              <p>Pogledaj kako <?= e(SITE_NAME) ?> može poboljšati tvoje trgovanje.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Pridruži se <?= e(SITE_NAME) ?> — i zajedno oblikujmo budućnost financija <?= e(geo_in()) ?>!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> nudi širok raspon alata za trgovanje kriptoimovinom <?= e(geo_in()) ?>. Platforma
                povezuje velike međunarodne burze i daje pristup nizu
                kriptovaluta — od lidera poput Bitcoina do drugih poput XRP-a. Osim toga možeš
                zarađivati na oscilacijama cijena.
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
                  alt="Ocjena 1"
                />
              </div>
              <p class="review-text">
                Počeo sam s <?= e(money_min()) ?>, a sada povlačim <?= e(currency_symbol() . '2,000') ?> mjesečno!
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
                  alt="Ocjena 2"
                />
              </div>
              <p class="review-text">Jednostavna platforma: sve je pregledno i konkretno.</p>
            </div>
            <div class="review">
              <h3>Ana, 45, Rijeka</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocjena 3"
                />
              </div>
              <p class="review-text">Najbolje rješenje za pasivni prihod.</p>
            </div>
            <div class="review">
              <h3>Luka, 34, Zadar</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Ocjena 4"
                />
              </div>
              <p class="review-text">Stabilna dobit i na odmoru.</p>
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
                  Naš moderni softver temelj je trgovačkog sustava. Osmišljen je
                  tako da koristi male razlike u cijenama između velikih kripto
                  burzi.
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
                <h3>Globalno trgovanje imovinom</h3>
                <p>
                  Cijene dionica i druge imovine stalno se mijenjaju; <?= e(SITE_NAME) ?> daje
                  alate za brzu reakciju na tržište i veću šansu za solidan
                  prinos.
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
                <h3>Trgovanje valutama</h3>
                <p>
                  Tečajevi se stalno mijenjaju i stvaraju prilike. <?= e(SITE_NAME) ?>
                  pomaže iskoristiti i najmanje pomake na valutnom tržištu.
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
                <h3><?= e(SITE_NAME) ?> i Bitcoin</h3>
                <p>
                  Bitcoin je i dalje lider tržišta te najvidljivija, financijski stabilna
                  kriptovaluta. Sustavnim prepoznavanjem i korištenjem volatilnosti
                  <?= e(SITE_NAME) ?> olakšava postizanje redovitog prinosa.
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
                  <h3>Privatnost</h3>
                  <p><?= e(SITE_NAME) ?> poštuje važeće propise o privatnosti <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Imovina</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash i druge vodeće kriptovalute.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Vrsta platforme</h3>
                  <p>
                    <?= e(SITE_NAME) ?> daje ulagateljima <?= e(geo_in()) ?> priliku da zarade na oscilacijama cijena
                    glavnih kriptovaluta uključujući altcoine poput XRP-a.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Zemlje</h3>
                  <p>Naša je platforma dostupna globalno, i <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Opcije uplate</h3>
                  <p>Kreditne kartice, PayPal i bankovni transfer.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Troškovi</h3>
                  <p>Pristup <?= e(SITE_NAME) ?> besplatan je <?= e(geo_from()) ?>.</p>
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
              <h2>Je li <?= e(SITE_NAME) ?> pouzdana?</h2>
              <p>
                <?= e(SITE_NAME) ?> surađuje s brokerima prve klase koji su iznimno pouzdani i
                iskusni. Primjenjujemo sigurnost na bankarskoj razini, npr. TLS/SSL enkripciju
                i dvofaktorsku autentifikaciju (2FA), kako bismo zaštitili imovinu i podatke. Naša cjenovna
                struktura potpuno je transparentna, bez skrivenih troškova. Poštujemo
                važeće propise.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Grafikon pouzdanosti" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Naši sustavi umjetne inteligencije i strojnog učenja daju analizu tržišta
                u stvarnom vremenu i konkretne trgovačke uvide za bolje rezultate.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Najbolji traderi to nisu slučajno. S <?= e(SITE_NAME) ?> možeš pratiti
                    i kopirati njihove trgovine — i koristiti njihovo iskustvo i strategiju.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Djelomične dionice</h3>
                  <p>
                    Proširenjem portfelja i s ograničenim kapitalom dobivaš pristup
                    kvalitetnoj imovini.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Edukativni materijali</h3>
                  <p>
                    Za razvoj trgovačkih vještina nudimo materijale: vodiče,
                    webinare i priručnike.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilna aplikacija</h3>
                  <p>Trguj bilo kada i bilo gdje.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Podrška nonstop</h3>
                  <p>Korisnička služba dostupna je 24 sata dnevno, 7 dana u tjednu.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trgovanje pokretano AI-jem</h3>
                  <p>
                    Zahvaljujući naprednim algoritmima umjetne inteligencije i strojnog učenja
                    <?= e(SITE_NAME) ?> kontinuirano analizira najnovije tržišne podatke. Tako se brzo prepoznaju
                    prilike s najvećim potencijalom prinosa.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Prilagodljive strategije</h3>
                  <p>
                    Kad postaviš rizični profil i investicijske ciljeve, možeš ih koristiti za
                    poboljšanje strategije na našoj platformi više klasa imovine.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Pristup različitoj imovini</h3>
                  <p>
                    Iako se specijaliziramo za kriptovalute, podržavamo i trgovanje
                    valutama, dionicama, drugim vrijednosnim papirima i robama.
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
              <h2>Možeš trgovati od kuće, analizirati tržišta i pratiti pozicije.</h2>
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
              <h2>Možeš trgovati od kuće, analizirati tržišta i pratiti pozicije.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Registriraj se sada" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
