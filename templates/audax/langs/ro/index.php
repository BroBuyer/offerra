<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Investiții AI inteligente ' . geo_in();
$page_description = 'Tranzacționare automată ' . geo_in() . '. Începe cu ' . money_min() . ' folosind AI-ul nostru. Sigur, transparent și simplu.';
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
                Ce face <?= e(SITE_NAME) ?> unică? Aici poți investi mai inteligent
                <?= e(geo_in()) ?>. Platforma noastră de tranzacționare cu AI te ajută să iei decizii informate
                și să gestionezi riscul cu încredere. Descoperă posibilitățile <?= e(SITE_NAME) ?> AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Evaluată cu 4,7 stele de peste 2804 utilizatori mulțumiți</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Notă 4,7 din 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Alătură-te <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Înregistrare';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Completând datele și apăsând „Înregistrare“
                    confirmi că accepți
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">politica de confidențialitate</a> și
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">termenii de utilizare</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Metode de plată" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Evaluată cu 4,7 stele de peste 2804 utilizatori mulțumiți</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Notă 4,7 din 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Calculator de profit">
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
          <h2 class="calc-widget__title">Calculează profitul posibil</h2>
          <p class="calc-widget__subtitle">
            Alege suma și perioada ca să vezi potențialul
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Depui:</label>
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
                <label class="calc-widget__label" for="calc-days">Perioada de investiție:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>zile</span>
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
                  <span>De la 1 zi</span>
                  <span>Până la 3 luni</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Poți câștiga</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Rentabilitate</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Venit</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Solicită un calcul personalizat
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Închide">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Lasă datele de contact și un specialist te va contacta cât
              mai curând posibil.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Înregistrare';
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
                Accesul tău <?= e(geo_from()) ?> către principalele platforme de tranzacționare crypto din lume.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Pictogramă card 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> folosește inteligență artificială avansată și învățare automată pentru a
                    identifica noi oportunități pe piețele financiare.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Pictogramă card 2" />
                </div>
                <div class="text">
                  <p>
                    Investitorii în criptoactive <?= e(geo_in()) ?> au acces la cele mai mari burse din
                    sector și pot tranzacționa monede de top precum Bitcoin și Ethereum, plus
                    o gamă largă de altcoin-uri și stablecoin-uri.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Partenerii noștri</h2>
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
          <h2>De ce <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Pictogramă avantaj 1" />
              </div>
              <div class="text">
                <h3>Securitate <?= e(geo_in()) ?></h3>
                <p>
                  Ca platformă de încredere, punem securitatea pe primul loc. Folosim SSL,
                  criptare la nivel bancar și 2FA, ca <?= e(SITE_NAME) ?> să fie de încredere, iar datele tale
                  protejate.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Pictogramă avantaj 2" />
              </div>
              <div class="text">
                <h3>Algoritmi AI puternici</h3>
                <p>
                  Boții noștri adaptabili folosesc strategii AI avansate și le execută autonom. Tu
                  stabilești abordarea și păstrezi controlul asupra riscului, piețelor și obiectivelor, ca să
                  te poți concentra pe imaginea de ansamblu.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Pictogramă avantaj 3" />
              </div>
              <div class="text">
                <h3>Comisioane transparente. Fără costuri ascunse.</h3>
                <p>
                  Toate comisioanele sunt transparente, iar investitorii <?= e(geo_in()) ?> nu plătesc nimic extra pentru utilizarea
                  <?= e(SITE_NAME) ?>. Banii depuși pentru tranzacționare sunt în întregime ai tăi și îi poți folosi
                  cum vrei. Nu reținem nimic. Începe de la <?= e(money_min()) ?> și păstrează controlul deplin
                  asupra investițiilor.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Pictogramă avantaj 4" />
              </div>
              <div class="text">
                <h3>Interfață intuitivă</h3>
                <p>
                  Panoul nostru clar combină funcționalitatea, rigoarea și
                  simplitatea — pentru începători și traderi experimentați.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Cum funcționează <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Pictogramă listă 1" />
              <p>
                Software-ul nostru monitorizează simultan mai multe platforme de tranzacționare și
                identifică diferențe de preț care pot fi valorificate.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Pictogramă listă 2" />
              <p>
                <?= e(SITE_NAME) ?> cumpără ieftin pe o piață și vinde mai scump pe alta,
                și folosește arbitrajul. Această abordare poate aduce profit
                prin cumularea randamentelor din mici mișcări de preț.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Pictogramă listă 3" />
              <p>Vezi cum <?= e(SITE_NAME) ?> îți poate îmbunătăți tranzacționarea.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Alătură-te <?= e(SITE_NAME) ?> — și împreună modelăm viitorul finanțelor <?= e(geo_in()) ?>!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> oferă o gamă largă de instrumente pentru tranzacționarea criptoactivelor <?= e(geo_in()) ?>. Platforma
                integrează burse globale majore și oferă acces la numeroase
                criptomonede — de la lideri precum Bitcoin până la altele precum XRP. În plus poți
                câștiga din fluctuațiile de preț.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Înregistrare';
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
                  alt="Evaluare 1"
                />
              </div>
              <p class="review-text">
                Am început cu <?= e(money_min()) ?>, iar acum retrag <?= e(currency_symbol() . '2,000') ?> lunar!
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
                  alt="Evaluare 2"
                />
              </div>
              <p class="review-text">Platformă simplă: totul e clar și practic.</p>
            </div>
            <div class="review">
              <h3>Ana, 45, Rijeka</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Evaluare 3"
                />
              </div>
              <p class="review-text">Cea mai bună soluție pentru venit pasiv.</p>
            </div>
            <div class="review">
              <h3>Luka, 34, Zadar</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Evaluare 4"
                />
              </div>
              <p class="review-text">Profit stabil, chiar și în vacanță.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Oferta crypto pe <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Avantaj 1"
                />
                <h3>Cheia tranzacționării crypto</h3>
                <p>
                  Software-ul nostru modern stă la baza sistemului de tranzacționare. Este conceput
                  să valorifice mici diferențe de preț între bursele crypto
                  majore.
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
                  alt="Avantaj 2"
                />
                <h3>Tranzacționare globală de active</h3>
                <p>
                  Prețurile acțiunilor și ale altor active se schimbă constant; <?= e(SITE_NAME) ?> oferă
                  instrumentele pentru a reacționa rapid la piață și a crește șansa unui
                  randament solid.
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
                  alt="Avantaj 3"
                />
                <h3>Tranzacționare valutară</h3>
                <p>
                  Cursurile se schimbă constant și creează oportunități. <?= e(SITE_NAME) ?>
                  te ajută să valorifici chiar și cele mai mici mișcări pe piața valutară.
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
                  alt="Avantaj 4"
                />
                <h3><?= e(SITE_NAME) ?> și Bitcoin</h3>
                <p>
                  Bitcoin rămâne liderul pieței și cea mai vizibilă criptomonedă, stabilă
                  financiar. Recunoscând și folosind sistematic volatilitatea pieței,
                  <?= e(SITE_NAME) ?> facilitează un randament constant.
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
              <h2>Informații despre platformă</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Confidențialitate</h3>
                  <p><?= e(SITE_NAME) ?> respectă reglementările aplicabile privind confidențialitatea <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Active</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash și alte criptomonede de top.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tipul platformei</h3>
                  <p>
                    <?= e(SITE_NAME) ?> oferă investitorilor <?= e(geo_in()) ?> ocazia de a câștiga din fluctuațiile de preț
                    ale criptomonedelor majore, inclusiv altcoin-uri precum XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Țări</h3>
                  <p>Platforma noastră este disponibilă global, inclusiv <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Opțiuni de depunere</h3>
                  <p>Carduri de credit, PayPal și transfer bancar.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Costuri</h3>
                  <p>Accesul la <?= e(SITE_NAME) ?> este gratuit <?= e(geo_from()) ?>.</p>
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
              <h2>Este <?= e(SITE_NAME) ?> de încredere?</h2>
              <p>
                <?= e(SITE_NAME) ?> colaborează cu brokeri de primă clasă, deosebit de de încredere și
                experimentați. Aplicăm măsuri de securitate la nivel bancar, precum criptare TLS/SSL
                și autentificare în doi pași (2FA), ca să protejăm activele și datele. Structura noastră de
                prețuri este complet transparentă, fără costuri ascunse. Respectăm
                reglementările aplicabile.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Grafic de fiabilitate" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Sistemele noastre de inteligență artificială și învățare automată oferă analiză de piață
                în timp real și insight-uri practice de tranzacționare pentru rezultate mai bune.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Cei mai buni traderi nu sunt așa din întâmplare. Cu <?= e(SITE_NAME) ?> poți urmări
                    și copia tranzacțiile lor — și folosi experiența și strategia lor.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Acțiuni fracționate</h3>
                  <p>
                    Extinzând portofoliul, chiar și cu capital limitat, obții acces la
                    active de calitate.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Resurse educaționale</h3>
                  <p>
                    Pentru a-ți dezvolta abilitățile de tranzacționare oferim materiale: tutoriale,
                    webinarii și ghiduri.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aplicație mobilă</h3>
                  <p>Tranzacționează oricând, oriunde.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Suport non-stop</h3>
                  <p>Serviciul clienți este disponibil 24 de ore pe zi, 7 zile pe săptămână.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tranzacționare cu AI</h3>
                  <p>
                    Datorită algoritmilor avansați de inteligență artificială și învățare automată,
                    <?= e(SITE_NAME) ?> analizează continuu cele mai recente date de piață. Astfel sunt identificate rapid
                    oportunitățile cu cel mai mare potențial de randament.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Strategii personalizabile</h3>
                  <p>
                    După ce îți definești profilul de risc și obiectivele de investiție, le poți folosi pentru a
                    îmbunătăți strategia pe platforma noastră multi-asset.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Acces la active diverse</h3>
                  <p>
                    Deși suntem specializați pe criptomonede, susținem și tranzacționarea
                    valutelor, acțiunilor, altor valori mobiliare și mărfurilor.
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
              <h2>Poți tranzacționa de acasă, analiza piețele și urmări pozițiile.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Înregistrare';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Poți tranzacționa de acasă, analiza piețele și urmări pozițiile.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Înregistrează-te acum" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
