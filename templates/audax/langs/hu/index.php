<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Okos AI-befektetés ' . geo_in();
$page_description = 'Automatikus kereskedés ' . geo_in() . '. Kezdd ' . money_min() . ' összeggel AI-technológiánkkal. Biztonságos, átlátható és egyszerű.';
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
              <h1><?= e(SITE_NAME) ?> platform</h1>
              <p>
                Mi teszi egyedivé a <?= e(SITE_NAME) ?> platformot? Itt okosabban fektethetsz be
                <?= e(geo_in()) ?>. Megbízható, AI-alapú kereskedési platformunk segít megalapozott döntéseket hozni
                és magabiztosan kezelni a kockázatot. Fedezd fel a <?= e(SITE_NAME) ?> AI lehetőségeit.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>4,7 csillagra értékelték több mint 2804 elégedett felhasználó</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Értékelés: 4,7 / 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Csatlakozz a <?= e(SITE_NAME) ?> platformhoz</h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Regisztráció';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Az adatok megadásával és a „Regisztráció” gombra kattintással
                    elfogadod az
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">adatvédelmi tájékoztatót</a> és a
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">felhasználási feltételeket</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Fizetési módok" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>4,7 csillagra értékelték több mint 2804 elégedett felhasználó</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Értékelés: 4,7 / 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Nyereségkalkulátor">
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
          <h2 class="calc-widget__title">Számold ki a lehetséges nyereséget</h2>
          <p class="calc-widget__subtitle">
            Válaszd ki az összeget és az időszakot, hogy lásd a potenciált
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Befizetésed:</label>
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
                <label class="calc-widget__label" for="calc-days">Befektetési időszak:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>nap</span>
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
                  <span>1 naptól</span>
                  <span>3 hónapig</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Ennyit kereshetsz</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Jövedelmezőség</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Bevétel</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Egyedi kalkuláció kérése
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Bezárás">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Hagyd meg az elérhetőséged, és szakértőnk felveszi veled a kapcsolatot a
              lehető leghamarabb.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Regisztráció';
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
                Hozzáférésed <?= e(geo_from()) ?> a világ vezető kriptokereskedési platformjaihoz.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kártyaikon 1" />
                </div>
                <div class="text">
                  <p>
                    A <?= e(SITE_NAME) ?> fejlett mesterséges intelligenciát és gépi tanulást használ, hogy
                    új lehetőségeket találjon a pénzügyi piacokon.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kártyaikon 2" />
                </div>
                <div class="text">
                  <p>
                    A kriptoeszköz-befektetők <?= e(geo_in()) ?> hozzáférést kapnak a szektor legnagyobb
                    tőzsdéihez, és kereskedhetnek vezető valutákkal, például Bitcoinnal és Ethereummal, valamint
                    széles altcoin- és stablecoin-kínálattal.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Megbízható partnereink</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com logó" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt logó" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen logó" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Miért a <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Előny ikon 1" />
              </div>
              <div class="text">
                <h3>Biztonság <?= e(geo_in()) ?></h3>
                <p>
                  Megbízható platformként a biztonságot helyezzük előtérbe. SSL-t,
                  banki szintű titkosítást és 2FA-t használunk, hogy a <?= e(SITE_NAME) ?> megbízható legyen, és az adataid
                  védettek legyenek.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Előny ikon 2" />
              </div>
              <div class="text">
                <h3>Erős AI-algoritmusok</h3>
                <p>
                  Alkalmazkodó botjaink fejlett AI-stratégiákat használnak, és önállóan hajtják végre. Te
                  állítod be a megközelítést, és megtartod az irányítást a kockázat, a piacok és a célok felett, hogy
                  az egészre összpontosíthass.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Előny ikon 3" />
              </div>
              <div class="text">
                <h3>Átlátható díjak. Nincs rejtett költség.</h3>
                <p>
                  Minden díj átlátható, és a befektetők <?= e(geo_in()) ?> nem fizetnek extra díjat a
                  <?= e(SITE_NAME) ?> használatáért. A kereskedésre befizetett pénz teljesen a tiéd, és úgy használhatod,
                  ahogy szeretnéd. Semmit nem tartunk vissza. Kezdd akár <?= e(money_min()) ?> összeggel, és tartsd meg a teljes
                  irányítást a befektetéseid felett.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Előny ikon 4" />
              </div>
              <div class="text">
                <h3>Intuitív felület</h3>
                <p>
                  Áttekinthető irányítópultunk a funkcionalitást, a pontosságot és
                  az egyszerűséget ötvözi — kezdőknek és tapasztalt tradereknek.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Hogyan működik a <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listaikon 1" />
              <p>
                Szoftverünk egyszerre több kereskedési platformot figyel, és
                kihasználható árkülönbségeket keres.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listaikon 2" />
              <p>
                A <?= e(SITE_NAME) ?> olcsón vásárol az egyik piacon, és drágábban ad el egy másikon,
                és arbitrázst használ. Ez a megközelítés nyereséget hozhat
                a kis ármozgások hozamának felhalmozásával.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listaikon 3" />
              <p>Nézd meg, hogyan javíthatja a <?= e(SITE_NAME) ?> a kereskedésed.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Csatlakozz a <?= e(SITE_NAME) ?> platformhoz — formáljuk együtt a pénzügyek jövőjét <?= e(geo_in()) ?>!
              </h2>
              <p>
                A <?= e(SITE_NAME) ?> széles eszközkínálatot ad kriptoeszközök kereskedéséhez <?= e(geo_in()) ?>. A platform
                összeköti a nagy nemzetközi tőzsdéket, és hozzáférést ad számos
                kriptovalutához — a vezetőktől, mint a Bitcoin, másokig, például az XRP-ig. Emellett
                az áringadozásokon is kereshetsz.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Regisztráció';
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
              <h3>Péter, 37, Budapest</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Értékelés 1"
                />
              </div>
              <p class="review-text">
                <?= e(money_min()) ?> összeggel kezdtem, és most havi <?= e(currency_symbol() . '2,000') ?> összeget veszek ki.
              </p>
            </div>
            <div class="review">
              <h3>Anna, 42, Debrecen</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Értékelés 2"
                />
              </div>
              <p class="review-text">Egyszerű platform: minden átlátható és konkrét.</p>
            </div>
            <div class="review">
              <h3>Gábor, 45, Szeged</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Értékelés 3"
                />
              </div>
              <p class="review-text">A legjobb megoldás passzív jövedelemre.</p>
            </div>
            <div class="review">
              <h3>Eszter, 34, Pécs</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Értékelés 4"
                />
              </div>
              <p class="review-text">Stabil nyereség még nyaraláskor is.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kriptokínálat a <?= e(SITE_NAME) ?> platformon</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Előny 1"
                />
                <h3>A kriptokereskedés kulcsa</h3>
                <p>
                  Modern szoftverünk a kereskedési rendszer alapja. Úgy
                  terveztük, hogy a nagy kriptotőzsdék közötti kis
                  árkülönbségeket használja ki.
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
                  alt="Előny 2"
                />
                <h3>Globális eszközkereskedés</h3>
                <p>
                  A részvényárak és más eszközök folyamatosan változnak; a <?= e(SITE_NAME) ?> adja a
                  eszközöket a gyors piaci reakcióhoz és a szilárd
                  hozam esélyének növeléséhez.
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
                  alt="Előny 3"
                />
                <h3>Devizakereskedés</h3>
                <p>
                  Az árfolyamok folyamatosan változnak, és lehetőségeket teremtenek. A <?= e(SITE_NAME) ?>
                  segít kihasználni a devizapiac legkisebb mozgásait is.
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
                  alt="Előny 4"
                />
                <h3><?= e(SITE_NAME) ?> és a Bitcoin</h3>
                <p>
                  A Bitcoin továbbra is a piacvezető, a legismertebb és pénzügyileg stabil
                  kriptovaluta. A volatilitás rendszeres felismerésével és kihasználásával
                  a <?= e(SITE_NAME) ?> megkönnyíti a rendszeres hozam elérését.
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
              <h2>Platforminformáció</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Adatvédelem</h3>
                  <p>A <?= e(SITE_NAME) ?> betartja a hatályos adatvédelmi szabályokat <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Eszközök</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash és más vezető kriptovaluták.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Platformtípus</h3>
                  <p>
                    A <?= e(SITE_NAME) ?> lehetőséget ad a befektetőknek <?= e(geo_in()) ?>, hogy az áringadozásokon
                    keressenek a vezető kriptovalutákon, köztük altcoinokon, például az XRP-n.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Országok</h3>
                  <p>Platformunk világszerte elérhető, <?= e(geo_in()) ?> is.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Befizetési lehetőségek</h3>
                  <p>Bankkártya, PayPal és banki átutalás.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Költségek</h3>
                  <p>A <?= e(SITE_NAME) ?> elérése ingyenes <?= e(geo_from()) ?>.</p>
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
              <h2>Megbízható a <?= e(SITE_NAME) ?>?</h2>
              <p>
                A <?= e(SITE_NAME) ?> első osztályú brókerekkel dolgozik, akik kiemelkedően megbízhatóak és
                tapasztaltak. Banki szintű biztonságot alkalmazunk, például TLS/SSL-titkosítást
                és kétfaktoros hitelesítést (2FA), hogy védjük az eszközeidet és adataidat. Díjszerkezetünk
                teljesen átlátható, rejtett költségek nélkül. Betartjuk a
                hatályos szabályokat.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Megbízhatósági grafikon" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Mesterségesintelligencia- és gépi tanulási rendszereink valós idejű piaci
                elemzést és gyakorlati kereskedési meglátásokat adnak az eredmények javításához.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    A legjobb traderek nem véletlenül a legjobbak. A <?= e(SITE_NAME) ?> platformon követheted
                    és másolhatod a kötéseiket — hogy használd a tapasztalatukat és stratégiájukat.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Törtrészvények</h3>
                  <p>
                    A portfólió bővítésével korlátozott tőkével is hozzáférhetsz
                    minőségi eszközökhöz.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Oktatóanyagok</h3>
                  <p>
                    A kereskedési készségek fejlesztéséhez anyagokat adunk: útmutatókat,
                    webináriumokat és kézikönyveket.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilalkalmazás</h3>
                  <p>Kereskedj bármikor, bárhol.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Nonstop támogatás</h3>
                  <p>Ügyfélszolgálatunk a nap 24 órájában, a hét 7 napján elérhető.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI-alapú kereskedés</h3>
                  <p>
                    Fejlett mesterségesintelligencia- és gépi tanulási algoritmusainknak köszönhetően
                    a <?= e(SITE_NAME) ?> folyamatosan elemzi a legfrissebb piaci adatokat. Így gyorsan azonosíthatók
                    a legnagyobb hozampotenciállal bíró lehetőségek.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Testreszabható stratégiák</h3>
                  <p>
                    Ha beállítottad a kockázati profilt és a befektetési célokat, ezekkel
                    finomíthatod a stratégiát több eszközosztályt kezelő platformunkon.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Hozzáférés különféle eszközökhöz</h3>
                  <p>
                    Bár a kriptovalutákra szakosodtunk, támogatjuk a
                    devizák, részvények, más értékpapírok és árualapú termékek kereskedését is.
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
              <h2>Otthonról kereskedhetsz, elemezheted a piacokat, és követheted a pozíciókat.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Regisztráció';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Otthonról kereskedhetsz, elemezheted a piacokat, és követheted a pozíciókat.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Regisztrálj most" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
