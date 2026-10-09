<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Älykäs tekoälysijoittaminen ' . geo_in();
$page_description = 'Automatisoitu kaupankäynti ' . geo_in() . '. Aloita ' . money_min() . ' summalla tekoälyteknologiallamme. Turvallinen, läpinäkyvä ja helppo.';
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
              <h1><?= e(SITE_NAME) ?> -alusta</h1>
              <p>
                Mikä tekee palvelusta <?= e(SITE_NAME) ?> ainutlaatuisen? Tässä on mahdollisuutesi sijoittaa fiksummin
                <?= e(geo_in()) ?>. Luotettava tekoälypohjainen kaupankäyntialustamme auttaa sinua tekemään perusteltuja päätöksiä
                ja hallitsemaan riskiä luottavaisin mielin. Tutustu <?= e(SITE_NAME) ?> -tekoälyn mahdollisuuksiin.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Yli 2 804 tyytyväisen käyttäjän antama arvio: 4,7 tähteä</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Arvio 4,7 / 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Rekisteröidy palveluun <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Rekisteröidy';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Kun syötät tietosi ja napsautat ”Rekisteröidy”
                    vahvistat, että hyväksyt
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">tietosuojakäytännön</a> ja
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">käyttöehdot</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Maksutavat" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Yli 2 804 tyytyväisen käyttäjän antama arvio: 4,7 tähteä</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Arvio 4,7 / 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Tuottolaskuri">
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
          <h2 class="calc-widget__title">Laske mahdollinen tuotto</h2>
          <p class="calc-widget__subtitle">
            Valitse summa ja ajanjakso nähdäksesi potentiaalin
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Talletat:</label>
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
                <label class="calc-widget__label" for="calc-days">Sijoitusjakso:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>päivää</span>
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
                  <span>1 päivästä</span>
                  <span>Enintään 3 kuukautta</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Voit ansaita</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Tuotto</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Tulo</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Pyydä henkilökohtainen laskelma
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Sulje">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Jätä yhteystietosi, niin eräs asiantuntijoistamme ottaa sinuun yhteyttä
              mahdollisimman pian.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Rekisteröidy';
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
                Pääsysi <?= e(geo_from()) ?> maailman johtaviin kryptokaupankäyntialustoihin.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Korttikuvake 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> käyttää kehittynyttä tekoälyä ja koneoppimista
                    löytääkseen uusia mahdollisuuksia rahoitusmarkkinoilla.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Korttikuvake 2" />
                </div>
                <div class="text">
                  <p>
                    Kryptosijoittajat <?= e(geo_in()) ?> saavat pääsyn suurimpiin pörsseihin
                    alalla ja voivat käydä kauppaa johtavilla valuutoilla, kuten Bitcoinilla ja Ethereumilla, sekä
                    laajalla valikoimalla altcoineja ja stablecoineja.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Luotetut kumppanimme</h2>
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
          <h2>Miksi valita <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Etukuvake 1" />
              </div>
              <div class="text">
                <h3>Turvallisuus <?= e(geo_in()) ?></h3>
                <p>
                  Arvostettuna alustana asetamme turvallisuuden etusijalle. Käytämme SSL:ää,
                  pankkitason salausta ja kaksivaiheista tunnistautumista varmistaaksemme, että <?= e(SITE_NAME) ?> on luotettava ja tietosi
                  ovat suojattuja.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Etukuvake 2" />
              </div>
              <div class="text">
                <h3>Tehokkaat tekoälyalgoritmit</h3>
                <p>
                  Mukautuvat botimme käyttävät kehittyneitä tekoälystrategioita ja toteuttavat ne itse. Sinä
                  määrität linjan ja pidät täyden hallinnan riskistä, markkinoista ja tavoitteista, jotta
                  voit keskittyä kokonaiskuvaan.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Etukuvake 3" />
              </div>
              <div class="text">
                <h3>Läpinäkyvät maksut. Ei piilokuluja.</h3>
                <p>
                  Kaikki maksumme ovat läpinäkyviä, emmekä koskaan veloita sijoittajilta <?= e(geo_in()) ?> palvelun
                  <?= e(SITE_NAME) ?> käytöstä. Kaupankäyntiin tallettamasi rahat ovat kokonaan sinun, ja voit käyttää
                  niitä haluamallasi tavalla. Emme pidä mitään itsellämme. Aloita vain <?= e(money_min()) ?> summalla ja säilytä täysi hallinta
                  sijoituksistasi.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Etukuvake 4" />
              </div>
              <div class="text">
                <h3>Intuitiivinen käyttöliittymä</h3>
                <p>
                  Intuitiivinen ja selkeä kojelautamme yhdistää toiminnallisuuden, tarkkuuden ja
                  helppokäyttöisyyden — aloittelijoille ja kokeneille kauppiaille.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Miten <?= e(SITE_NAME) ?> toimii?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listakuvake 1" />
              <p>
                Oma ohjelmistomme seuraa useita kaupankäyntialustoja samanaikaisesti ja
                tunnistaa hyödynnettävissä olevat hintaerot.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listakuvake 2" />
              <p>
                <?= e(SITE_NAME) ?> ostaa halvalla yhdeltä markkinapaikalta ja myy kalliimmalla toisella
                hyödyntäen arbitragemahdollisuuksia. Tämä lähestymistapa voi tuottaa voittoa
                keräämällä tuottoa pienistä kurssimuutoksista.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listakuvake 3" />
              <p>Katso, miten <?= e(SITE_NAME) ?> voi parantaa kaupankäyntikokemustasi.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Rekisteröidy palveluun <?= e(SITE_NAME) ?> — rakennetaan yhdessä rahoituksen tulevaisuutta <?= e(geo_in()) ?>!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> tarjoaa laajan valikoiman työkaluja kryptovarojen kaupankäyntiin <?= e(geo_in()) ?>. Alusta
                yhdistää suuret kansainväliset pörssit ja tarjoaa pääsyn lukuisiin
                kryptovaluuttoihin — johtajista kuten Bitcoinista muihin kuten XRP:hen. Lisäksi voit
                hyötyä kurssivaihteluista.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Rekisteröidy';
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
              <h3>Matti, 37, Helsinki</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Arvio 1"
                />
              </div>
              <p class="review-text">
                Aloitin <?= e(money_min()) ?> summalla, ja nyt nostan <?= e(currency_symbol() . '2,000') ?> kuukaudessa!
              </p>
            </div>
            <div class="review">
              <h3>Anna, 42, Tampere</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Arvio 2"
                />
              </div>
              <p class="review-text">Yksinkertainen alusta: kaikki on läpinäkyvää ja käytännöllistä.</p>
            </div>
            <div class="review">
              <h3>Jukka, 45, Turku</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Arvio 3"
                />
              </div>
              <p class="review-text">Paras ratkaisu passiiviseen tuloon.</p>
            </div>
            <div class="review">
              <h3>Sofia, 34, Oulu</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Arvio 4"
                />
              </div>
              <p class="review-text">Vakaa tuotto, myös lomalla.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kryptovaluuttatarjonta palvelussa <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Hyöty 1"
                />
                <h3>Avain kryptokaupankäyntiin</h3>
                <p>
                  Huippuluokan ohjelmistomme on kaupankäyntijärjestelmämme perusta. Se on
                  suunniteltu hyödyntämään pieniä hintaeroja suurten krypto-
                  pörssien välillä.
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
                  alt="Hyöty 2"
                />
                <h3>Globaali omaisuuskauppa</h3>
                <p>
                  Osakekurssit ja muut omaisuuserät liikkuvat jatkuvasti; <?= e(SITE_NAME) ?> tarjoaa
                  työkalut reagoida nopeasti markkinaliikkeisiin ja parantaa mahdollisuuksia vakaaseen
                  tuottoon.
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
                  alt="Hyöty 3"
                />
                <h3>Valuuttakauppa</h3>
                <p>
                  Valuuttakurssit muuttuvat jatkuvasti ja luovat kaupankäyntimahdollisuuksia. <?= e(SITE_NAME) ?>
                  auttaa sinua hyötymään jopa pienimmistä liikkeistä valuuttamarkkinoilla.
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
                  alt="Hyöty 4"
                />
                <h3><?= e(SITE_NAME) ?> ja Bitcoin</h3>
                <p>
                  Bitcoin on edelleen markkinajohtaja ja näkyvin, taloudellisesti vakain
                  kryptovaluutta. Tunnistamalla ja hyödyntämällä markkinoiden volatiliteettia systemaattisesti
                  <?= e(SITE_NAME) ?> helpottaa tasaisen tuoton saavuttamista.
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
              <h2>Alustan tiedot</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Yksityisyys</h3>
                  <p><?= e(SITE_NAME) ?> noudattaa sovellettavia tietosuojasäännöksiä <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Varat</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash ja muut johtavat kryptovaluutat.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Alustan tyyppi</h3>
                  <p>
                    <?= e(SITE_NAME) ?> tarjoaa sijoittajille <?= e(geo_in()) ?> mahdollisuuden hyötyä
                    johtavien kryptovaluuttojen, mukaan lukien altcoinit kuten XRP, kurssivaihteluista.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Maat</h3>
                  <p>Alustamme on saatavilla maailmanlaajuisesti, myös <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Talletusvaihtoehdot</h3>
                  <p>Luottokortit, PayPal ja pankkisiirto.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Kustannukset</h3>
                  <p>Pääsy palveluun <?= e(SITE_NAME) ?> on maksuton <?= e(geo_from()) ?>.</p>
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
              <h2>Onko <?= e(SITE_NAME) ?> luotettava?</h2>
              <p>
                <?= e(SITE_NAME) ?> tekee yhteistyötä ensiluokkaisten välittäjien kanssa, jotka ovat poikkeuksellisen luotettavia ja
                kokeneita. Käytämme pankkitason turvatoimia, kuten TLS/SSL-salausta
                ja kaksivaiheista tunnistautumista (2FA), suojataksemme varasi ja tietosi. Hinnoittelumme
                on täysin läpinäkyvää ilman piilokuluja. Noudatamme
                sovellettavia säädöksiä.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Luotettavuuskaavio" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Tekoäly- ja koneoppimisjärjestelmämme tuottavat reaaliaikaista markkina-analyysia
                ja käytännön kaupankäyntinäkemyksiä tulostesi optimointiin.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Kopiointikauppa</h3>
                  <p>
                    Parhaat kauppiaat ovat parhaita syystä. Palvelussa <?= e(SITE_NAME) ?> voit seurata
                    ja kopioida heidän kauppojaan — hyödyntää heidän kokemustaan ja strategiaansa.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Osakkeiden murto-osat</h3>
                  <p>
                    Laajentamalla salkkuasi saat pääsyn laadukkaisiin varoihin myös
                    rajoitetulla pääomalla.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Koulutusmateriaali</h3>
                  <p>
                    Parantaaksesi kaupankäyntitaitojasi tarjoamme koulutusmateriaalia: oppaita,
                    webinaareja ja ohjeita.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobiilisovellus</h3>
                  <p>Käy kauppaa milloin ja missä tahansa.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tuki ympäri vuorokauden</h3>
                  <p>Asiakaspalvelumme on käytettävissä 24 tuntia vuorokaudessa, 7 päivää viikossa.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tekoälypohjainen kaupankäynti</h3>
                  <p>
                    Kehittyneiden tekoäly- ja koneoppimisalgoritmiemme ansiosta
                    <?= e(SITE_NAME) ?> analysoi jatkuvasti uusimpia markkinatietoja. Näin markkinamahdollisuudet
                    suurimmalla tuottopotentiaalilla tunnistetaan nopeasti.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Muokattavat strategiat</h3>
                  <p>
                    Kun olet määrittänyt riskiprofiilisi ja sijoitustavoitteesi, voit hyödyntää niitä
                    kaupankäyntistrategiasi hiomiseen moniomaisuusalustallamme.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Pääsy monipuolisiin varoihin</h3>
                  <p>
                    Vaikka olemme erikoistuneet kryptovaluuttoihin, tuemme myös kaupankäyntiä
                    valuutoilla, osakkeilla, muilla arvopapereilla ja hyödykkeillä.
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
              <h2>Voit käydä kauppaa kotoa, analysoida markkinoita ja seurata positioitasi.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Rekisteröidy';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Voit käydä kauppaa kotoa, analysoida markkinoita ja seurata positioitasi.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Rekisteröidy nyt" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
