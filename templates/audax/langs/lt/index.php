<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Išmanios DI investicijos ' . geo_in();
$page_description = 'Automatinė prekyba ' . geo_in() . '. Pradėkite nuo ' . money_min() . ' su mūsų DI technologija. Saugu, skaidru ir paprasta.';
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
                Kas daro <?= e(SITE_NAME) ?> išskirtinę? Čia galite investuoti išmaniau
                <?= e(geo_in()) ?>. Mūsų patikima DI valdoma prekybos platforma padeda priimti pagrįstus sprendimus
                ir užtikrintai valdyti riziką. Atraskite <?= e(SITE_NAME) ?> DI galimybes.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Įvertinta 4,7 žvaigždutėmis daugiau nei 2 804 patenkintų naudotojų</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Įvertinimas 4,7 iš 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Registruokitės <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Registruotis';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Pateikdami savo duomenis ir spustelėdami „Registruotis“
                    patvirtinate, kad sutinkate su
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">privatumo politika</a> ir
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">naudojimo sąlygomis</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Mokėjimo būdai" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Įvertinta 4,7 žvaigždutėmis daugiau nei 2 804 patenkintų naudotojų</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Įvertinimas 4,7 iš 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Pelno skaičiuoklė">
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
          <h2 class="calc-widget__title">Apskaičiuokite galimą pelną</h2>
          <p class="calc-widget__subtitle">
            Pasirinkite sumą ir laikotarpį, kad pamatytumėte potencialą
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Jūs įnešate:</label>
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
                <label class="calc-widget__label" for="calc-days">Investavimo laikotarpis:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dienos</span>
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
                  <span>Nuo 1 dienos</span>
                  <span>Iki 3 mėnesių</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Galite uždirbti</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Pelningumas</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Pajamos</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Prašyti individualaus skaičiavimo
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Uždaryti">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Palikite kontaktus, ir mūsų specialistas susisieks su jumis kaip
              įmanoma greičiau.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Registruotis';
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
                Jūsų prieiga <?= e(geo_from()) ?> prie pirmaujančių pasaulio kriptovaliutų prekybos platformų.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kortelės piktograma 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> naudoja pažangų dirbtinį intelektą ir mašininį mokymąsi, kad
                    rastų naujas galimybes finansų rinkose.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kortelės piktograma 2" />
                </div>
                <div class="text">
                  <p>
                    Kriptoturto investuotojai <?= e(geo_in()) ?> gauna prieigą prie didžiausių biržų
                    sektoriuje ir gali prekiauti lyderiaujančiomis valiutomis, tokiomis kaip Bitcoin ir Ethereum, taip pat
                    plačiu altkoinų ir stabelkoinų asortimentu.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Mūsų partneriai</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com logotipas" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt logotipas" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen logotipas" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Kodėl <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Privalumo piktograma 1" />
              </div>
              <div class="text">
                <h3>Saugumas <?= e(geo_in()) ?></h3>
                <p>
                  Kaip patikima platforma, saugumą laikome prioritetu. Naudojame SSL,
                  bankinio lygio šifravimą ir 2FA, kad <?= e(SITE_NAME) ?> būtų patikima, o jūsų duomenys
                  būtų apsaugoti.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Privalumo piktograma 2" />
              </div>
              <div class="text">
                <h3>Galingi DI algoritmai</h3>
                <p>
                  Mūsų prisitaikantys botai taiko pažangias DI strategijas ir jas vykdo savarankiškai. Jūs
                  nustatote požiūrį ir išlaikote kontrolę dėl rizikos, rinkų ir tikslų, kad
                  galėtumėte matyti visumą.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Privalumo piktograma 3" />
              </div>
              <div class="text">
                <h3>Skaidrūs mokesčiai. Jokių paslėptų išlaidų.</h3>
                <p>
                  Visi mokesčiai skaidrūs, o investuotojai <?= e(geo_in()) ?> nieko papildomai nemoka už
                  <?= e(SITE_NAME) ?> naudojimą. Pinigai, kuriuos įnešate prekybai, yra visiškai jūsų, ir galite juos naudoti
                  kaip norite. Mes nieko neišlaikome. Pradėkite vos nuo <?= e(money_min()) ?> ir išlaikykite visą kontrolę
                  savo investicijoms.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Privalumo piktograma 4" />
              </div>
              <div class="text">
                <h3>Intuityvi naudotojo sąsaja</h3>
                <p>
                  Mūsų aiški valdymo sritis derina funkcionalumą, tikslumą ir
                  paprastumą — pradedantiesiems ir patyrusiems prekiautojams.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Kaip veikia <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Sąrašo piktograma 1" />
              <p>
                Mūsų programinė įranga vienu metu stebi kelias prekybos platformas ir
                randa kainų skirtumus, kuriuos galima išnaudoti.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Sąrašo piktograma 2" />
              <p>
                <?= e(SITE_NAME) ?> perka pigiau vienoje rinkoje ir parduoda brangiau kitoje,
                išnaudodama arbitražo galimybes. Toks požiūris gali duoti pelną
                kaupiant grąžą iš nedidelių kainų pokyčių.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Sąrašo piktograma 3" />
              <p>Sužinokite, kaip <?= e(SITE_NAME) ?> gali pagerinti jūsų prekybą.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Registruokitės <?= e(SITE_NAME) ?> — ir kartu formuluokime finansų ateitį <?= e(geo_in()) ?>.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> siūlo platų įrankių spektrą kriptoturto prekybai <?= e(geo_in()) ?>. Platforma
                sujungia didžiausias tarptautines biržas ir suteikia prieigą prie daugelio
                kriptovaliutų — nuo lyderių, tokių kaip Bitcoin, iki kitų, tokių kaip XRP. Be to, galite
                uždirbti iš kainų svyravimų.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Registruotis';
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
              <h3>Tomas, 37, Vilnius</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Įvertinimas 1"
                />
              </div>
              <p class="review-text">
                Pradėjau nuo <?= e(money_min()) ?>, o dabar kas mėnesį išsiimu <?= e(currency_symbol() . '2,000') ?>.
              </p>
            </div>
            <div class="review">
              <h3>Ieva, 42, Kaunas</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Įvertinimas 2"
                />
              </div>
              <p class="review-text">Paprasta platforma: viskas skaidru ir konkretu.</p>
            </div>
            <div class="review">
              <h3>Andrius, 45, Klaipėda</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Įvertinimas 3"
                />
              </div>
              <p class="review-text">Geriausias sprendimas pasyvioms pajamoms.</p>
            </div>
            <div class="review">
              <h3>Rasa, 34, Šiauliai</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Įvertinimas 4"
                />
              </div>
              <p class="review-text">Stabilus pelnas net atostogaujant.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kriptovaliutų pasiūla <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Privalumas 1"
                />
                <h3>Kriptovaliutų prekybos raktas</h3>
                <p>
                  Mūsų šiuolaikinė programinė įranga yra prekybos sistemos pagrindas. Ji
                  sukurta išnaudoti nedidelius kainų skirtumus tarp didžiųjų kriptovaliutų
                  biržų.
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
                  alt="Privalumas 2"
                />
                <h3>Pasaulinė turto prekyba</h3>
                <p>
                  Akcijų kainos ir kitas turtas nuolat kinta; <?= e(SITE_NAME) ?> suteikia
                  įrankius greitai reaguoti į rinką ir padidinti tvirtos
                  grąžos tikimybę.
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
                  alt="Privalumas 3"
                />
                <h3>Valiutų prekyba</h3>
                <p>
                  Valiutų kursai nuolat keičiasi ir kuria galimybes. <?= e(SITE_NAME) ?>
                  padeda pasinaudoti net mažiausiais valiutų rinkos judesiais.
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
                  alt="Privalumas 4"
                />
                <h3><?= e(SITE_NAME) ?> ir Bitcoin</h3>
                <p>
                  Bitcoin vis dar yra rinkos lyderis ir labiausiai matoma, finansiškai stabili
                  kriptovaliuta. Sistemingai atpažįstant ir išnaudojant kintamumą,
                  <?= e(SITE_NAME) ?> palengvina nuoseklią grąžą.
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
              <h2>Platformos informacija</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privatumas</h3>
                  <p><?= e(SITE_NAME) ?> laikosi galiojančių privatumo taisyklių <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Turtas</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash ir kitos pagrindinės kriptovaliutos.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Platformos tipas</h3>
                  <p>
                    <?= e(SITE_NAME) ?> suteikia investuotojams <?= e(geo_in()) ?> galimybę uždirbti iš kainų
                    svyravimų pagrindinėse kriptovaliutose, įskaitant altkoinus, tokius kaip XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Šalys</h3>
                  <p>Mūsų platforma prieinama visame pasaulyje, taip pat <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Įnašo būdai</h3>
                  <p>Kreditinės kortelės, PayPal ir banko pavedimas.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Išlaidos</h3>
                  <p>Prieiga prie <?= e(SITE_NAME) ?> nemokama <?= e(geo_from()) ?>.</p>
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
              <h2>Ar <?= e(SITE_NAME) ?> patikima?</h2>
              <p>
                <?= e(SITE_NAME) ?> bendradarbiauja su aukščiausios klasės brokeriais, kurie yra ypač patikimi ir
                patyrę. Taikome bankinio lygio saugumą, pavyzdžiui, TLS/SSL šifravimą
                ir dviejų veiksnių autentifikavimą (2FA), kad apsaugotume turtą ir duomenis. Mūsų kainodara
                yra visiškai skaidri, be paslėptų išlaidų. Laikomės
                galiojančių taisyklių.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Patikimumo grafikas" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Mūsų dirbtinio intelekto ir mašininio mokymosi sistemos teikia rinkos analizę
                realiuoju laiku ir konkrečias prekybos įžvalgas rezultatams pagerinti.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Kopijuojamoji prekyba</h3>
                  <p>
                    Geriausi prekiautojai tokie neatsitiktinai. Su <?= e(SITE_NAME) ?> galite sekti
                    ir kopijuoti jų sandorius — ir pasinaudoti patirtimi bei strategija.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Akcijų dalys</h3>
                  <p>
                    Išplėtę portfelį, net ir su ribotu kapitalu gaunate prieigą prie
                    kokybiško turto.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mokomoji medžiaga</h3>
                  <p>
                    Prekybos įgūdžiams tobulinti siūlome mokomąją medžiagą: vadovus,
                    seminarus ir gaires.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobilioji programėlė</h3>
                  <p>Prekiaukite bet kada, bet kur.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Pagalba visą parą</h3>
                  <p>Klientų aptarnavimas prieinamas 24 valandas per parą, 7 dienas per savaitę.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>DI valdoma prekyba</h3>
                  <p>
                    Dėl pažangių dirbtinio intelekto ir mašininio mokymosi algoritmų
                    <?= e(SITE_NAME) ?> nuolat analizuoja naujausius rinkos duomenis. Taip greitai aptinkamos rinkos
                    galimybės su didžiausiu grąžos potencialu.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Pritaikomos strategijos</h3>
                  <p>
                    Nustačius rizikos profilį ir investavimo tikslus, jais galite
                    tobulinti prekybos strategiją mūsų kelių turto klasių platformoje.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Prieiga prie įvairaus turto</h3>
                  <p>
                    Nors specializuojamės kriptovaliutose, taip pat palaikome prekybą
                    valiutomis, akcijomis, kitais vertybiniais popieriais ir žaliavomis.
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
              <h2>Galite prekiauti iš namų, analizuoti rinkas ir stebėti pozicijas.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Registruotis';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Galite prekiauti iš namų, analizuoti rinkas ir stebėti pozicijas.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Registruokitės dabar" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
