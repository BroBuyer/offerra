<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Viedas AI investīcijas ' . geo_in();
$page_description = 'Automātiska tirdzniecība ' . geo_in() . '. Sāciet ar ' . money_min() . ' ar mūsu AI. Droši, caurspīdīgi un vienkārši.';
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
              <h1><?= e(SITE_NAME) ?> platforma</h1>
              <p>
                Kas padara <?= e(SITE_NAME) ?> unikālu? Šeit varat investēt gudrāk
                <?= e(geo_in()) ?>. Mūsu uzticamā tirdzniecības platforma ar AI palīdz pieņemt informētus lēmumus
                un pārliecinoši pārvaldīt risku. Atklājiet <?= e(SITE_NAME) ?> AI iespējas.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Vērtējums 4,7 zvaigznes no vairāk nekā 2804 apmierinātiem lietotājiem</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Vērtējums 4,7 no 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Pievienojieties <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Reģistrēties';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Ievadot datus un noklikšķinot uz „Reģistrēties“
                    apliecināt, ka piekrītat
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">privātuma politikai</a> un
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">lietošanas noteikumiem</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Maksājumu veidi" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Vērtējums 4,7 zvaigznes no vairāk nekā 2804 apmierinātiem lietotājiem</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Vērtējums 4,7 no 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Peļņas kalkulators">
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
          <h2 class="calc-widget__title">Aprēķiniet iespējamo peļņu</h2>
          <p class="calc-widget__subtitle">
            Izvēlieties summu un periodu, lai redzētu potenciālu
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Iemaksājat:</label>
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
                <label class="calc-widget__label" for="calc-days">Ieguldījuma periods:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dienas</span>
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
                  <span>No 1 dienas</span>
                  <span>Līdz 3 mēnešiem</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Varat nopelnīt</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Ienesīgums</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Ieņēmumi</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Pieprasīt individuālu aprēķinu
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Aizvērt">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Atstājiet kontaktus, un speciālists sazināsies ar jums iespējami
              ātri.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Reģistrēties';
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
                Jūsu piekļuve <?= e(geo_from()) ?> pasaules vadošajām kriptotirdzniecības platformām.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kartes ikona 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> izmanto progresīvu mākslīgo intelektu un mašīnmācīšanos, lai
                    atrastu jaunas iespējas finanšu tirgos.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kartes ikona 2" />
                </div>
                <div class="text">
                  <p>
                    Kriptoaktīvu investori <?= e(geo_in()) ?> iegūst piekļuvi lielākajām biržām
                    sektorā un var tirgot vadošās valūtas, piemēram, Bitcoin un Ethereum, kā arī
                    plašu altkoinu un steiblkoinu klāstu.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Mūsu partneri</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com logotips" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance logotips" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk logotips" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView logotips" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte logotips" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger logotips" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt logotips" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen logotips" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Kāpēc <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Priekšrocības ikona 1" />
              </div>
              <div class="text">
                <h3>Drošība <?= e(geo_in()) ?></h3>
                <p>
                  Kā uzticama platforma drošību liekam pirmajā vietā. Izmantojam SSL,
                  bankas līmeņa šifrēšanu un 2FA, lai <?= e(SITE_NAME) ?> būtu uzticama un jūsu dati
                  aizsargāti.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Priekšrocības ikona 2" />
              </div>
              <div class="text">
                <h3>Spēcīgi AI algoritmi</h3>
                <p>
                  Mūsu pielāgojamie boti izmanto progresīvas AI stratēģijas un tās izpilda autonomi. Jūs
                  nosakāt pieeju un saglabājat kontroli pār risku, tirgiem un mērķiem, lai
                  varētu sekot kopainai.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Priekšrocības ikona 3" />
              </div>
              <div class="text">
                <h3>Caurspīdīgas komisijas. Bez slēptām izmaksām.</h3>
                <p>
                  Visas komisijas ir caurspīdīgas, un investori <?= e(geo_in()) ?> nemaksā neko papildus par
                  <?= e(SITE_NAME) ?> lietošanu. Tirdzniecībai iemaksātā nauda ir pilnībā jūsu, un to varat izmantot
                  kā vēlaties. Mēs neko nepaturam. Sāciet jau no <?= e(money_min()) ?> un saglabājiet pilnīgu kontroli
                  pār ieguldījumiem.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Priekšrocības ikona 4" />
              </div>
              <div class="text">
                <h3>Intuitīva saskarne</h3>
                <p>
                  Mūsu pārskatāmais panelis apvieno funkcionalitāti, precizitāti un
                  vienkāršību — iesācējiem un pieredzējušiem treideriem.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Kā <?= e(SITE_NAME) ?> darbojas?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Saraksta ikona 1" />
              <p>
                Mūsu programmatūra vienlaikus uzrauga vairākas tirdzniecības platformas un
                meklē cenu atšķirības, ko var izmantot.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Saraksta ikona 2" />
              <p>
                <?= e(SITE_NAME) ?> pērk lēti vienā tirgū un pārdod dārgāk citā
                un izmanto arbitrāžu. Šī pieeja var nest peļņu,
                uzkrājot ienesīgumu no nelielām cenu izmaiņām.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Saraksta ikona 3" />
              <p>Skatiet, kā <?= e(SITE_NAME) ?> var uzlabot jūsu tirdzniecību.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Pievienojieties <?= e(SITE_NAME) ?> — un kopā veidosim finanšu nākotni <?= e(geo_in()) ?>!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> piedāvā plašu rīku klāstu kriptoaktīvu tirdzniecībai <?= e(geo_in()) ?>. Platforma
                savieno lielās starptautiskās biržas un sniedz piekļuvi virknei
                kriptovalūtu — no līderiem, piemēram, Bitcoin, līdz citām, piemēram, XRP. Turklāt varat
                pelnt no cenu svārstībām.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Reģistrēties';
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
                  alt="Vērtējums 1"
                />
              </div>
              <p class="review-text">
                Sāku ar <?= e(money_min()) ?>, bet tagad izņemu <?= e(currency_symbol() . '2,000') ?> mēnesī!
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
                  alt="Vērtējums 2"
                />
              </div>
              <p class="review-text">Vienkārša platforma: viss ir skaidrs un praktisks.</p>
            </div>
            <div class="review">
              <h3>Ana, 45, Rijeka</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Vērtējums 3"
                />
              </div>
              <p class="review-text">Labākais risinājums pasīvajiem ienākumiem.</p>
            </div>
            <div class="review">
              <h3>Luka, 34, Zadar</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Vērtējums 4"
                />
              </div>
              <p class="review-text">Stabila peļņa arī atvaļinājumā.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kripto piedāvājums <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Priekšrocība 1"
                />
                <h3>Kriptotirdzniecības atslēga</h3>
                <p>
                  Mūsu moderna programmatūra ir tirdzniecības sistēmas pamats. Tā ir veidota
                  tā, lai izmantotu nelielas cenu atšķirības starp lielajām kripto
                  biržām.
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
                  alt="Priekšrocība 2"
                />
                <h3>Globāla aktīvu tirdzniecība</h3>
                <p>
                  Akciju un citu aktīvu cenas nemitīgi mainās; <?= e(SITE_NAME) ?> sniedz
                  rīkus, lai ātri reaģētu uz tirgu un palielinātu iespēju uz stabilu
                  ienesīgumu.
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
                  alt="Priekšrocība 3"
                />
                <h3>Valūtu tirdzniecība</h3>
                <p>
                  Kursi nemitīgi mainās un rada iespējas. <?= e(SITE_NAME) ?>
                  palīdz izmantot pat vismazākās valūtas tirgus kustības.
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
                  alt="Priekšrocība 4"
                />
                <h3><?= e(SITE_NAME) ?> un Bitcoin</h3>
                <p>
                  Bitcoin joprojām ir tirgus līderis un visredzamākā, finansiāli stabilā
                  kriptovalūta. Sistemātiski atpazīstot un izmantojot svārstīgumu,
                  <?= e(SITE_NAME) ?> atvieglo regulāru ienesīgumu.
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
              <h2>Informācija par platformu</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privātums</h3>
                  <p><?= e(SITE_NAME) ?> ievēro spēkā esošos privātuma noteikumus <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aktīvi</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash un citas vadošās kriptovalūtas.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Platformas veids</h3>
                  <p>
                    <?= e(SITE_NAME) ?> investoriem <?= e(geo_in()) ?> dod iespēju pelnīt no cenu svārstībām
                    galvenajām kriptovalūtām, tostarp altkoiniem, piemēram, XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Valstis</h3>
                  <p>Mūsu platforma ir pieejama globāli, arī <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Iemaksas iespējas</h3>
                  <p>Kredītkartes, PayPal un bankas pārskaitījums.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Izmaksas</h3>
                  <p>Piekļuve <?= e(SITE_NAME) ?> ir bezmaksas <?= e(geo_from()) ?>.</p>
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
              <h2>Vai <?= e(SITE_NAME) ?> ir uzticama?</h2>
              <p>
                <?= e(SITE_NAME) ?> sadarbojas ar pirmās klases brokeriem, kas ir izcili uzticami un
                pieredzējuši. Īstenojam bankas līmeņa drošību, piemēram, TLS/SSL šifrēšanu
                un divfaktoru autentifikāciju (2FA), lai aizsargātu aktīvus un datus. Mūsu cenu
                struktūra ir pilnībā caurspīdīga, bez slēptām izmaksām. Ievērojam
                piemērojamos noteikumus.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Uzticamības grafiks" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Mūsu mākslīgā intelekta un mašīnmācīšanās sistēmas sniedz tirgus analīzi
                reāllaikā un praktiskus tirdzniecības ieskatus labākiem rezultātiem.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Labākie treideri tādi nav nejauši. Ar <?= e(SITE_NAME) ?> varat sekot
                    un kopēt viņu darījumus — un izmantot viņu pieredzi un stratēģiju.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Daļējas akcijas</h3>
                  <p>
                    Paplašinot portfeli, arī ar ierobežotu kapitālu iegūstat piekļuvi
                    kvalitatīviem aktīviem.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Izglītojoši materiāli</h3>
                  <p>
                    Tirdzniecības prasmju attīstībai piedāvājam materiālus: pamācības,
                    vebinārus un rokasgrāmatas.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilā lietotne</h3>
                  <p>Tirgojiet jebkurā laikā un vietā.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Atbalsts nonstop</h3>
                  <p>Klientu atbalsts ir pieejams 24 stundas diennaktī, 7 dienas nedēļā.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tirdzniecība ar AI</h3>
                  <p>
                    Pateicoties progresīviem mākslīgā intelekta un mašīnmācīšanās algoritmiem,
                    <?= e(SITE_NAME) ?> nepārtraukti analizē jaunākos tirgus datus. Tā ātri tiek atpazītas
                    iespējas ar vislielāko ienesīguma potenciālu.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Pielāgojamas stratēģijas</h3>
                  <p>
                    Kad definējat riska profilu un ieguldījumu mērķus, tos varat izmantot, lai
                    uzlabotu stratēģiju mūsu vairāku aktīvu klases platformā.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Piekļuve dažādiem aktīviem</h3>
                  <p>
                    Lai gan specializējamies kriptovalūtās, atbalstām arī
                    valūtu, akciju, citu vērtspapīru un preču tirdzniecību.
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
              <h2>Varat tirgot no mājām, analizēt tirgus un sekot pozīcijām.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Reģistrēties';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Varat tirgot no mājām, analizēt tirgus un sekot pozīcijām.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Reģistrējieties tagad" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
