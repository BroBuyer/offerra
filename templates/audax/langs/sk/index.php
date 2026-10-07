<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Inteligentné investovanie s AI ' . geo_in();
$page_description = 'Automatický trading ' . geo_in() . '. Začnite s ' . money_min() . ' vďaka našej AI. Bezpečne, prehľadne a jednoducho.';
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
                Čo robí <?= e(SITE_NAME) ?> výnimočnou? Tu môžete investovať múdrejšie
                <?= e(geo_in()) ?>. Naša spoľahlivá obchodná platforma poháňaná AI pomáha robiť informované rozhodnutia
                a isto riadiť riziko. Objavte možnosti <?= e(SITE_NAME) ?> AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Hodnotené 4,7 hviezdičkami viac ako 2804 spokojnými používateľmi</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Hodnotenie 4,7 z 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Pridajte sa k <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Registrovať sa';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Vyplnením údajov a kliknutím na „Registrovať sa“
                    potvrdzujete, že súhlasíte so
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">zásadami ochrany osobných údajov</a> a
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">podmienkami použitia</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Platobné metódy" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Hodnotené 4,7 hviezdičkami viac ako 2804 spokojnými používateľmi</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Hodnotenie 4,7 z 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Kalkulačka zisku">
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
          <h2 class="calc-widget__title">Spočítajte možný zisk</h2>
          <p class="calc-widget__subtitle">
            Zvoľte sumu a obdobie, aby ste videli potenciál
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Vkladáte:</label>
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
                <label class="calc-widget__label" for="calc-days">Obdobie investície:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dní</span>
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
                  <span>Od 1 dňa</span>
                  <span>Do 3 mesiacov</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Môžete zarobiť</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Ziskovosť</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Príjem</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Požiadať o individuálny výpočet
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Zavrieť">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Zanechajte kontakt a náš špecialista sa s vami spojí čo
              najskôr.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Registrovať sa';
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
                Váš prístup <?= e(geo_from()) ?> k predným svetovým kryptoobchodným platformám.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ikona karty 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> používa pokročilú umelú inteligenciu a strojové učenie, aby
                    nachádzala nové príležitosti na finančných trhoch.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ikona karty 2" />
                </div>
                <div class="text">
                  <p>
                    Investori do kryptoaktív <?= e(geo_in()) ?> získajú prístup k najväčším burzám v
                    sektore a môžu obchodovať predné meny ako Bitcoin a Ethereum aj
                    širokú škálu altcoinov a stablecoinov.
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
          <h2>Prečo <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ikona výhody 1" />
              </div>
              <div class="text">
                <h3>Zabezpečenie <?= e(geo_in()) ?></h3>
                <p>
                  Ako zavedená platforma kladieme bezpečnosť na prvé miesto. Používame SSL,
                  šifrovanie na bankovej úrovni a 2FA, aby <?= e(SITE_NAME) ?> bola spoľahlivá a vaše dáta
                  chránené.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Ikona výhody 2" />
              </div>
              <div class="text">
                <h3>Výkonné algoritmy AI</h3>
                <p>
                  Naši prispôsobiví boti používajú pokročilé stratégie AI a vykonávajú ich sami. Vy
                  nastavíte prístup a ponecháte si kontrolu nad rizikom, trhmi a cieľmi, aby ste
                  mohli sledovať celok.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ikona výhody 3" />
              </div>
              <div class="text">
                <h3>Transparentné poplatky. Žiadne skryté náklady.</h3>
                <p>
                  Všetky poplatky sú transparentné a investori <?= e(geo_in()) ?> neplatia nič naviac za používanie
                  <?= e(SITE_NAME) ?>. Peniaze vložené na trading sú úplne vaše a môžete ich použiť
                  ako chcete. Nič si nenechávame. Začnite už od <?= e(money_min()) ?> a majte plnú kontrolu
                  nad investíciami.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ikona výhody 4" />
              </div>
              <div class="text">
                <h3>Intuitívne rozhranie</h3>
                <p>
                  Náš prehľadný dashboard kombinuje funkčnosť, presnosť a
                  jednoduchosť — pre začiatočníkov aj skúsených traderov.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Ako <?= e(SITE_NAME) ?> funguje?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona zoznamu 1" />
              <p>
                Náš softvér zároveň sleduje viacero obchodných platforiem a
                hľadá cenové rozdiely, ktoré možno využiť.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona zoznamu 2" />
              <p>
                <?= e(SITE_NAME) ?> kupuje lacno na jednom trhu a predáva drahšie na inom,
                a využíva arbitráž. Tento prístup môže priniesť zisk
                kumuláciou výnosov z malých pohybov cien.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona zoznamu 3" />
              <p>Pozrite sa, ako <?= e(SITE_NAME) ?> môže zlepšiť váš trading.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Pridajte sa k <?= e(SITE_NAME) ?> — a spoločne tvoríme budúcnosť financií <?= e(geo_in()) ?>.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> ponúka širokú škálu nástrojov na obchodovanie kryptoaktív <?= e(geo_in()) ?>. Platforma
                prepája veľké medzinárodné burzy a dáva prístup k rade
                kryptomien — od lídrov ako Bitcoin po ďalšie ako XRP. Navyše môžete
                zarábať na výkyvoch cien.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Registrovať sa';
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
              <h3>Martin, 37, Bratislava</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnotenie 1"
                />
              </div>
              <p class="review-text">
                Začal som s <?= e(money_min()) ?> a teraz vyberáme <?= e(currency_symbol() . '2,000') ?> mesačne.
              </p>
            </div>
            <div class="review">
              <h3>Zuzana, 42, Košice</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnotenie 2"
                />
              </div>
              <p class="review-text">Jednoduchá platforma: všetko je prehľadné a konkrétne.</p>
            </div>
            <div class="review">
              <h3>Peter, 45, Žilina</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnotenie 3"
                />
              </div>
              <p class="review-text">Najlepšie riešenie pre pasívny príjem.</p>
            </div>
            <div class="review">
              <h3>Lucia, 34, Prešov</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnotenie 4"
                />
              </div>
              <p class="review-text">Stabilný zisk aj na dovolenke.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kryptonabídka na <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Výhoda 1"
                />
                <h3>Kľúč ku kryptotradingu</h3>
                <p>
                  Náš moderný softvér je základom obchodného systému. Je
                  navrhnutý tak, aby využíval malé cenové rozdiely medzi veľkými krypto
                  burzami.
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
                  alt="Výhoda 2"
                />
                <h3>Globálne obchodovanie s aktívami</h3>
                <p>
                  Ceny akcií a ďalších aktív sa neustále menia; <?= e(SITE_NAME) ?> dáva
                  nástroje na rýchlu reakciu na trh a vyššiu šancu na solídny
                  výnos.
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
                  alt="Výhoda 3"
                />
                <h3>Obchodovanie s menami</h3>
                <p>
                  Kurzy sa neustále menia a vytvárajú príležitosti. <?= e(SITE_NAME) ?>
                  pomáha využiť aj tie najmenšie pohyby na menovom trhu.
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
                  alt="Výhoda 4"
                />
                <h3><?= e(SITE_NAME) ?> a Bitcoin</h3>
                <p>
                  Bitcoin je stále lídrom trhu a najviditeľnejšou, finančne stabilnou
                  kryptomenou. Systematickým zachytením a využitím volatility
                  <?= e(SITE_NAME) ?> uľahčuje dosiahnutie pravidelného výnosu.
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
              <h2>Informácie o platforme</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Súkromie</h3>
                  <p><?= e(SITE_NAME) ?> dodržiava platné predpisy o ochrane súkromia <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktíva</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash a ďalšie predné kryptomeny.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Typ platformy</h3>
                  <p>
                    <?= e(SITE_NAME) ?> dáva investorom <?= e(geo_in()) ?> možnosť zarábať na výkyvoch cien
                    hlavných kryptomien vrátane altcoinov ako XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Krajiny</h3>
                  <p>Naša platforma je dostupná globálne, aj <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Možnosti vkladu</h3>
                  <p>Kreditné karty, PayPal a bankový prevod.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Náklady</h3>
                  <p>Prístup k <?= e(SITE_NAME) ?> je zadarmo <?= e(geo_from()) ?>.</p>
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
              <h2>Je <?= e(SITE_NAME) ?> spoľahlivá?</h2>
              <p>
                <?= e(SITE_NAME) ?> spolupracuje s maklérmi prvej triedy, ktorí sú výnimočne spoľahliví a
                skúsení. Používame zabezpečenie na bankovej úrovni, napríklad šifrovanie TLS/SSL
                a dvojfaktorové overenie (2FA), aby sme chránili aktíva a dáta. Naša cenová
                štruktúra je plne transparentná, bez skrytých nákladov. Dodržiavame
                platné predpisy.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Graf spoľahlivosti" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Naše systémy umelej inteligencie a strojového učenia poskytujú analýzu trhu
                v reálnom čase a konkrétne obchodné postrehy na zlepšenie výsledkov.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Najlepší traderi sú takí z nejakého dôvodu. S <?= e(SITE_NAME) ?> môžete sledovať
                    a kopírovať ich obchody — a využiť ich skúsenosti a stratégiu.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Zlomky akcií</h3>
                  <p>
                    Rozšírením portfólia získate aj s obmedzeným kapitálom prístup ku
                    kvalitným aktívam.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Výučbové materiály</h3>
                  <p>
                    Na rozvoj obchodných zručností ponúkame materiály: návody,
                    webináre a príručky.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilná aplikácia</h3>
                  <p>Obchodujte kedykoľvek a kdekoľvek.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Podpora nonstop</h3>
                  <p>Zákaznícky servis je k dispozícii 24 hodín denne, 7 dní v týždni.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading poháňaný AI</h3>
                  <p>
                    Vďaka pokročilým algoritmom umelej inteligencie a strojového učenia
                    <?= e(SITE_NAME) ?> neustále analyzuje najnovšie trhové dáta. Vďaka tomu sa rýchlo zachytia
                    príležitosti s najväčším potenciálom výnosu.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Prispôsobiteľné stratégie</h3>
                  <p>
                    Keď nastavíte rizikový profil a investičné ciele, môžete ich použiť na
                    vylepšenie stratégie na našej platforme viacerých tried aktív.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Prístup k rôznym aktívam</h3>
                  <p>
                    Aj keď sa špecializujeme na kryptomeny, podporujeme aj obchodovanie
                    mien, akcií, ďalších cenných papierov a komodít.
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
              <h2>Môžete obchodovať z domu, analyzovať trhy a sledovať pozície.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Registrovať sa';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Môžete obchodovať z domu, analyzovať trhy a sledovať pozície.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Registrovať sa teraz" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
