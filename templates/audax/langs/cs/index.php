<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Chytré investování s AI ' . geo_in();
$page_description = 'Automatický trading ' . geo_in() . '. Začněte s ' . money_min() . ' díky naší AI. Bezpečně, přehledně a jednoduše.';
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
                Co dělá <?= e(SITE_NAME) ?> výjimečnou? Tady můžete investovat chytřeji
                <?= e(geo_in()) ?>. Naše spolehlivá obchodní platforma poháněná AI pomáhá dělat informovaná rozhodnutí
                a jistě řídit riziko. Objevte možnosti <?= e(SITE_NAME) ?> AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Hodnoceno 4,7 hvězdičkami více než 2804 spokojenými uživateli</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Hodnocení 4,7 z 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Přidejte se k <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Registrovat se';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Vyplněním údajů a kliknutím na „Registrovat se“
                    potvrzujete, že souhlasíte se
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">zásadami ochrany osobních údajů</a> a
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">podmínkami použití</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Platební metody" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Hodnoceno 4,7 hvězdičkami více než 2804 spokojenými uživateli</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Hodnocení 4,7 z 5"
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
          <h2 class="calc-widget__title">Spočítejte možný zisk</h2>
          <p class="calc-widget__subtitle">
            Zvolte částku a období, abyste viděli potenciál
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Vkládáte:</label>
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
                <label class="calc-widget__label" for="calc-days">Období investice:</label>
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
                  <span>Od 1 dne</span>
                  <span>Do 3 měsíců</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Můžete vydělat</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Ziskovost</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Příjem</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Požádat o individuální výpočet
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Zavřít">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Zanechte kontakt a náš specialista se s vámi spojí co
              nejdříve.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Registrovat se';
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
                Váš přístup <?= e(geo_from()) ?> k předním světovým kryptoobchodním platformám.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ikona karty 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> používá pokročilou umělou inteligenci a strojové učení, aby
                    nacházela nové příležitosti na finančních trzích.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ikona karty 2" />
                </div>
                <div class="text">
                  <p>
                    Investoři do kryptoaktiv <?= e(geo_in()) ?> získají přístup k největším burzám v
                    sektoru a mohou obchodovat přední měny jako Bitcoin a Ethereum i
                    širokou škálu altcoinů a stablecoinů.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Naši partneři</h2>
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
          <h2>Proč <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ikona výhody 1" />
              </div>
              <div class="text">
                <h3>Zabezpečení <?= e(geo_in()) ?></h3>
                <p>
                  Jako zavedená platforma klademe bezpečnost na první místo. Používáme SSL,
                  šifrování na bankovní úrovni a 2FA, aby <?= e(SITE_NAME) ?> byla spolehlivá a vaše data
                  chráněná.
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
                  Naši přizpůsobiví boti používají pokročilé strategie AI a provádějí je sami. Vy
                  nastavíte přístup a ponecháte si kontrolu nad rizikem, trhy a cíli, abyste
                  mohli sledovat celek.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ikona výhody 3" />
              </div>
              <div class="text">
                <h3>Transparentní poplatky. Žádné skryté náklady.</h3>
                <p>
                  Všechny poplatky jsou transparentní a investoři <?= e(geo_in()) ?> neplatí nic navíc za používání
                  <?= e(SITE_NAME) ?>. Peníze vložené na trading jsou zcela vaše a můžete je použít
                  jak chcete. Nic si nenecháváme. Začněte už od <?= e(money_min()) ?> a mějte plnou kontrolu
                  nad investicemi.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ikona výhody 4" />
              </div>
              <div class="text">
                <h3>Intuitivní rozhraní</h3>
                <p>
                  Náš přehledný dashboard kombinuje funkčnost, přesnost a
                  jednoduchost — pro začátečníky i zkušené tradery.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Jak <?= e(SITE_NAME) ?> funguje?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona seznamu 1" />
              <p>
                Náš software zároveň sleduje více obchodních platforem a
                hledá cenové rozdíly, které lze využít.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona seznamu 2" />
              <p>
                <?= e(SITE_NAME) ?> kupuje levně na jednom trhu a prodává dráž na jiném,
                a využívá arbitráž. Tento přístup může přinést zisk
                kumulací výnosů z malých pohybů cen.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikona seznamu 3" />
              <p>Podívejte se, jak <?= e(SITE_NAME) ?> může zlepšit váš trading.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Přidejte se k <?= e(SITE_NAME) ?> — a společně tvořme budoucnost financí <?= e(geo_in()) ?>.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> nabízí širokou škálu nástrojů k obchodování kryptoaktiv <?= e(geo_in()) ?>. Platforma
                propojuje velké mezinárodní burzy a dává přístup k řadě
                kryptoměn — od lídrů jako Bitcoin po další jako XRP. Navíc můžete
                vydělávat na výkyvech cen.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Registrovat se';
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
              <h3>Jan, 37, Praha</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnocení 1"
                />
              </div>
              <p class="review-text">
                Začal jsem s <?= e(money_min()) ?> a teď vybíráme <?= e(currency_symbol() . '2,000') ?> měsíčně.
              </p>
            </div>
            <div class="review">
              <h3>Petra, 42, Brno</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnocení 2"
                />
              </div>
              <p class="review-text">Jednoduchá platforma: vše je přehledné a konkrétní.</p>
            </div>
            <div class="review">
              <h3>Tomáš, 45, Ostrava</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnocení 3"
                />
              </div>
              <p class="review-text">Nejlepší řešení pro pasivní příjem.</p>
            </div>
            <div class="review">
              <h3>Lucie, 34, Plzeň</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Hodnocení 4"
                />
              </div>
              <p class="review-text">Stabilní zisk i na dovolené.</p>
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
                <h3>Klíč ke kryptotradingu</h3>
                <p>
                  Náš moderní software je základem obchodního systému. Je
                  navržen tak, aby využíval malé cenové rozdíly mezi velkými krypto
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
                <h3>Globální obchodování s aktivy</h3>
                <p>
                  Ceny akcií a dalších aktiv se neustále mění; <?= e(SITE_NAME) ?> dává
                  nástroje k rychlé reakci na trh a vyšší šanci na solidní
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
                <h3>Obchodování s měnami</h3>
                <p>
                  Kurzy se neustále mění a vytvářejí příležitosti. <?= e(SITE_NAME) ?>
                  pomáhá využít i ty nejmenší pohyby na měnovém trhu.
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
                  Bitcoin je stále lídrem trhu a nejviditelnější, finančně stabilní
                  kryptoměnou. Systematickým zachycením a využitím volatility
                  <?= e(SITE_NAME) ?> usnadňuje dosažení pravidelného výnosu.
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
              <h2>Informace o platformě</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Soukromí</h3>
                  <p><?= e(SITE_NAME) ?> dodržuje platné předpisy o ochraně soukromí <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktiva</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash a další přední kryptoměny.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Typ platformy</h3>
                  <p>
                    <?= e(SITE_NAME) ?> dává investorům <?= e(geo_in()) ?> možnost vydělávat na výkyvech cen
                    hlavních kryptoměn včetně altcoinů jako XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Země</h3>
                  <p>Naše platforma je dostupná globálně, také <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Možnosti vkladu</h3>
                  <p>Kreditní karty, PayPal a bankovní převod.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Náklady</h3>
                  <p>Přístup k <?= e(SITE_NAME) ?> je zdarma <?= e(geo_from()) ?>.</p>
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
              <h2>Je <?= e(SITE_NAME) ?> spolehlivá?</h2>
              <p>
                <?= e(SITE_NAME) ?> spolupracuje s makléři první třídy, kteří jsou výjimečně spolehliví a
                zkušení. Používáme zabezpečení na bankovní úrovni, například šifrování TLS/SSL
                a dvoufaktorové ověření (2FA), abychom chránili aktiva a data. Naše cenová
                struktura je plně transparentní, bez skrytých nákladů. Dodržujeme
                platné předpisy.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Graf spolehlivosti" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Naše systémy umělé inteligence a strojového učení poskytují analýzu trhu
                v reálném čase a konkrétní obchodní postřehy ke zlepšení výsledků.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Nejlepší tradeři jsou takoví z nějakého důvodu. S <?= e(SITE_NAME) ?> můžete sledovat
                    a kopírovat jejich obchody — a využít jejich zkušenosti a strategii.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Zlomky akcií</h3>
                  <p>
                    Rozšířením portfolia získáte i s omezeným kapitálem přístup ke
                    kvalitním aktivům.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Výukové materiály</h3>
                  <p>
                    Pro rozvoj obchodních dovedností nabízíme materiály: návody,
                    webináře a příručky.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilní aplikace</h3>
                  <p>Obchodujte kdykoli a kdekoli.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Podpora nonstop</h3>
                  <p>Zákaznický servis je k dispozici 24 hodin denně, 7 dní v týdnu.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading poháněný AI</h3>
                  <p>
                    Díky pokročilým algoritmům umělé inteligence a strojového učení
                    <?= e(SITE_NAME) ?> neustále analyzuje nejnovější tržní data. Díky tomu se rychle zachytí
                    příležitosti s největším potenciálem výnosu.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Přizpůsobitelné strategie</h3>
                  <p>
                    Jakmile nastavíte rizikový profil a investiční cíle, můžete je použít k
                    vylepšení strategie na naší platformě více tříd aktiv.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Přístup k různým aktivům</h3>
                  <p>
                    I když se specializujeme na kryptoměny, podporujeme také obchodování
                    měn, akcií, dalších cenných papírů a komodit.
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
              <h2>Můžete obchodovat z domova, analyzovat trhy a sledovat pozice.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Registrovat se';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Můžete obchodovat z domova, analyzovat trhy a sledovat pozice.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Registrovat se nyní" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
