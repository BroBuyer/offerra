<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Investimento IA intelligente ' . geo_in();
$page_description = 'Trading automatizzato ' . geo_in() . '. Inizia con ' . money_min() . ' grazie alla nostra tecnologia di IA. Sicuro, trasparente e semplice.';
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
              <h1>Piattaforma <?= e(SITE_NAME) ?></h1>
              <p>
                Cosa distingue <?= e(SITE_NAME) ?>? È l’occasione di investire in modo più intelligente
                <?= e(geo_in()) ?>. La nostra piattaforma di trading affidabile, assistita dall’IA, ti aiuta a decidere con consapevolezza
                e a gestire il rischio. Scopri cosa può offrirti l’IA di <?= e(SITE_NAME) ?>.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Valutato 4,7 stelle da oltre 2.804 utenti soddisfatti</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Valutazione 4,7 su 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Iscriviti a <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Iscriviti';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Inserendo i tuoi dati personali e cliccando sul pulsante «Iscriviti»,
                    confermi di accettare l’
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Informativa sulla privacy</a> e i
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Termini di utilizzo</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Metodi di pagamento" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Valutato 4,7 stelle da oltre 2.804 utenti soddisfatti</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Valutazione 4,7 su 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Calcolatore di guadagni">
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
          <h2 class="calc-widget__title">Calcola i tuoi potenziali guadagni</h2>
          <p class="calc-widget__subtitle">
            Scegli l’importo e la durata dell’investimento per stimare i tuoi potenziali guadagni
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Il tuo deposito:</label>
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
                <label class="calc-widget__label" for="calc-days">Durata dell’investimento:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>giorni</span>
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
                  <span>Da 1 giorno</span>
                  <span>Fino a 3 mesi</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Puoi guadagnare</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Redditività</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Guadagni</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Richiedi un calcolo personalizzato
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Chiudi">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Lascia i tuoi recapiti: uno dei nostri specialisti ti ricontatterà il prima
              possibile.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Iscriviti';
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
                Il tuo accesso <?= e(geo_from()) ?> alle principali piattaforme di trading crypto.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Icona 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> si avvale dell’intelligenza artificiale e dell’apprendimento automatico per
                    individuare nuove opportunità sui mercati finanziari.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Icona 2" />
                </div>
                <div class="text">
                  <p>
                    Gli investitori in criptoattività <?= e(geo_in()) ?> accedono alle più grandi piattaforme di scambio del
                    settore e possono negoziare asset di riferimento come Bitcoin ed Ethereum, oltre a un
                    ampio ventaglio di altcoin e stablecoin.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>I nostri partner di fiducia</h2>
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
          <h2>Perché scegliere <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Icona vantaggio 1" />
              </div>
              <div class="text">
                <h3>Sicurezza <?= e(geo_in()) ?></h3>
                <p>
                  Come piattaforma riconosciuta, mettiamo la sicurezza al primo posto. Usiamo SSL,
                  crittografia di livello bancario e 2FA per garantire l’affidabilità di <?= e(SITE_NAME) ?> e la protezione
                  dei tuoi dati.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Icona vantaggio 2" />
              </div>
              <div class="text">
                <h3>Algoritmi di IA potenti</h3>
                <p>
                  I nostri bot si adattano, applicano strategie di IA avanzate e le eseguono in autonomia. Tu
                  definisci l’approccio e mantieni il controllo su rischio, mercati e obiettivi, così da
                  concentrarti sull’essenziale.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Icona vantaggio 3" />
              </div>
              <div class="text">
                <h3>Commissioni trasparenti. Nessun costo nascosto.</h3>
                <p>
                  Tutte le commissioni sono trasparenti e non addebitiamo mai agli investitori <?= e(geo_in()) ?> l’uso di
                  <?= e(SITE_NAME) ?>. Il denaro che depositi per fare trading è interamente tuo: lo usi
                  come preferisci. Non ne tratteniamo nulla. Inizia già da <?= e(money_min()) ?> e resta in pieno controllo
                  dei tuoi investimenti.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Icona vantaggio 4" />
              </div>
              <div class="text">
                <h3>Interfaccia intuitiva</h3>
                <p>
                  La nostra dashboard semplice e intuitiva unisce funzionalità, rigore e
                  facilità d’uso, per principianti e trader esperti.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Come funziona <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icona elenco 1" />
              <p>
                Il nostro software proprietario monitora in parallelo più piattaforme di trading e
                individua gli scostamenti di prezzo sfruttabili.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icona elenco 2" />
              <p>
                <?= e(SITE_NAME) ?> acquista al ribasso su un mercato e rivende a un prezzo più alto su un altro,
                sfruttando le opportunità di arbitraggio. Questo approccio può generare un profitto
                accumulando i rendimenti dei piccoli movimenti di prezzo.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Icona elenco 3" />
              <p>Scopri come <?= e(SITE_NAME) ?> può migliorare la tua esperienza di trading.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Unisciti a <?= e(SITE_NAME) ?> e costruiamo insieme il futuro della finanza <?= e(geo_in()) ?>!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> offre un’ampia gamma di strumenti per negoziare criptoattività <?= e(geo_in()) ?>. La piattaforma
                integra le principali piazze di scambio mondiali e dà accesso a numerose
                criptovalute, dai leader come Bitcoin ad altre come XRP. Ti consente anche
                di cogliere le variazioni di prezzo.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Iscriviti';
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
              <h3>Marco, 37 anni, Milano</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valutazione 1"
                />
              </div>
              <p class="review-text">
                Ho iniziato con <?= e(money_min()) ?> e ora prelevo <?= e(currency_symbol() . '2,000') ?> al mese!
              </p>
            </div>
            <div class="review">
              <h3>Chiara, 42 anni, Roma</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valutazione 2"
                />
              </div>
              <p class="review-text">Piattaforma semplice: tutto è trasparente e concreto.</p>
            </div>
            <div class="review">
              <h3>Giulia, 45 anni, Torino</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valutazione 3"
                />
              </div>
              <p class="review-text">La soluzione migliore per un reddito passivo.</p>
            </div>
            <div class="review">
              <h3>Luca, 34 anni, Napoli</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Valutazione 4"
                />
              </div>
              <p class="review-text">Guadagni stabili, anche quando sono in vacanza.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>L’offerta crypto di <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Vantaggio 1"
                />
                <h3>La chiave del trading crypto</h3>
                <p>
                  Il nostro software di ultima generazione è il cuore del sistema di trading. È
                  progettato per sfruttare i piccoli scostamenti di prezzo tra le principali piazze
                  di scambio di criptovalute.
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
                  alt="Vantaggio 2"
                />
                <h3>Trading di asset su scala globale</h3>
                <p>
                  I corsi azionari e degli altri asset evolvono in continuazione; <?= e(SITE_NAME) ?> fornisce gli
                  strumenti per reagire in fretta ai movimenti di mercato e migliorare le probabilità di rendimenti
                  solidi.
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
                  alt="Vantaggio 3"
                />
                <h3>Trading Forex</h3>
                <p>
                  I tassi di cambio cambiano senza sosta e creano opportunità. <?= e(SITE_NAME) ?>
                  ti aiuta a cogliere anche i più piccoli movimenti del mercato valutario.
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
                  alt="Vantaggio 4"
                />
                <h3><?= e(SITE_NAME) ?> e Bitcoin</h3>
                <p>
                  Bitcoin resta il leader di mercato, la criptovaluta più visibile e più stabile
                  dal punto di vista finanziario. Riconoscendo e sfruttando in modo sistematico la volatilità,
                  <?= e(SITE_NAME) ?> facilita rendimenti più regolari.
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
              <h2>Informazioni sulla piattaforma</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privacy</h3>
                  <p><?= e(SITE_NAME) ?> rispetta la normativa applicabile in materia di privacy <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Asset</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash e altre criptovalute principali.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tipo di piattaforma</h3>
                  <p>
                    <?= e(SITE_NAME) ?> offre agli investitori <?= e(geo_in()) ?> la possibilità di cogliere le variazioni di prezzo
                    delle principali criptovalute, compresi altcoin come XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Paesi</h3>
                  <p>La nostra piattaforma è disponibile in tutto il mondo, anche <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Opzioni di deposito</h3>
                  <p>Carte di credito, PayPal e bonifico.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Costi</h3>
                  <p>L’accesso a <?= e(SITE_NAME) ?> è gratuito <?= e(geo_from()) ?>.</p>
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
              <h2><?= e(SITE_NAME) ?> è affidabile?</h2>
              <p>
                <?= e(SITE_NAME) ?> collabora con broker di prim’ordine, particolarmente affidabili ed
                esperti. Applichiamo misure di sicurezza di livello bancario, come la crittografia TLS/SSL
                e l’autenticazione a due fattori (2FA), per proteggere i tuoi asset e i tuoi dati. La nostra
                struttura tariffaria è del tutto trasparente, senza costi nascosti. Rispettiamo la
                normativa applicabile.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Grafico di affidabilità" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                I nostri sistemi di intelligenza artificiale e apprendimento automatico producono un’analisi di mercato
                in tempo reale e raccomandazioni di trading concrete per ottimizzare i risultati.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Trading in copia</h3>
                  <p>
                    I trader migliori lo sono per un motivo. Con <?= e(SITE_NAME) ?> puoi seguire
                    e copiare le loro posizioni per sfruttarne esperienza e strategia.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Azioni frazionate</h3>
                  <p>
                    Diversificando il portafoglio accedi ad asset di qualità anche con un
                    capitale limitato.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Risorse formative</h3>
                  <p>
                    Per progredire proponiamo risorse formative: tutorial,
                    webinar e guide.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>App mobile</h3>
                  <p>Fai trading in qualsiasi momento, ovunque tu sia.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Assistenza 24 ore su 24</h3>
                  <p>Il nostro servizio clienti è disponibile 24 ore su 24, 7 giorni su 7.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading assistito dall’IA</h3>
                  <p>
                    Grazie ai nostri algoritmi avanzati di intelligenza artificiale e apprendimento automatico,
                    <?= e(SITE_NAME) ?> analizza in continuazione gli ultimi dati di mercato. Le opportunità
                    con il maggiore potenziale di rendimento vengono così individuate in tempi rapidi.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Strategie personalizzabili</h3>
                  <p>
                    Una volta definiti profilo di rischio e obiettivi, puoi usarli per
                    affinare la strategia di trading sulla nostra piattaforma multi-asset.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Accesso ad asset diversificati</h3>
                  <p>
                    Pur specializzandoci nelle criptovalute, supportiamo anche il trading
                    di valute, azioni, altri titoli e materie prime.
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
              <h2>Puoi fare trading da casa, analizzare i mercati e seguire le tue posizioni.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Iscriviti';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Puoi fare trading da casa, analizzare i mercati e seguire le tue posizioni.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Iscriviti" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
