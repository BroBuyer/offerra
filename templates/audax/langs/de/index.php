<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Intelligentes KI-Investieren ' . geo_in();
$page_description = 'Automatisiertes Trading ' . geo_in() . '. Starten Sie mit ' . money_min() . ' dank unserer KI-Technologie. Sicher, transparent und einfach.';
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
              <h1>Plattform <?= e(SITE_NAME) ?></h1>
              <p>
                Was macht <?= e(SITE_NAME) ?> besonders? Hier können Sie klüger investieren
                <?= e(geo_in()) ?>. Unsere verlässliche, KI-gestützte Trading-Plattform hilft Ihnen, fundiert zu entscheiden
                und Risiken bewusst zu steuern. Entdecken Sie, was die KI von <?= e(SITE_NAME) ?> leistet.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Mit 4,7 Sternen bewertet von mehr als 2.804 zufriedenen Nutzern</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Bewertung 4,7 von 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Bei <?= e(SITE_NAME) ?> registrieren</h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Jetzt registrieren';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Mit der Eingabe Ihrer Daten und dem Klick auf «Jetzt registrieren»
                    bestätigen Sie, dass Sie der
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Datenschutzerklärung</a> und den
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Nutzungsbedingungen</a> zustimmen.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Zahlungsmethoden" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Mit 4,7 Sternen bewertet von mehr als 2.804 zufriedenen Nutzern</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Bewertung 4,7 von 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Gewinnrechner">
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
          <h2 class="calc-widget__title">Mögliche Gewinne berechnen</h2>
          <p class="calc-widget__subtitle">
            Wählen Sie Betrag und Laufzeit, um Ihre möglichen Gewinne zu schätzen
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Ihre Einzahlung:</label>
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
                <label class="calc-widget__label" for="calc-days">Anlagedauer:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>Tage</span>
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
                  <span>Ab 1 Tag</span>
                  <span>Bis 3 Monate</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Sie können verdienen</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Rendite</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Ertrag</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Persönliche Berechnung anfordern
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Schließen">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Hinterlassen Sie Ihre Kontaktdaten: einer unserer Spezialisten meldet sich so
              bald wie möglich.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Jetzt registrieren';
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
                Ihr Zugang <?= e(geo_from()) ?> zu den führenden Krypto-Trading-Plattformen.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kartensymbol 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> nutzt fortschrittliche künstliche Intelligenz und maschinelles Lernen, um
                    neue Chancen an den Finanzmärkten zu erkennen.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kartensymbol 2" />
                </div>
                <div class="text">
                  <p>
                    Anleger in Krypto-Assets <?= e(geo_in()) ?> erhalten Zugang zu den größten Handelsplätzen der
                    Branche und können Leitwerte wie Bitcoin und Ethereum handeln, ebenso wie
                    ein breites Spektrum an Altcoins und Stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Unsere Partner</h2>
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
          <h2>Warum <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Vorteilssymbol 1" />
              </div>
              <div class="text">
                <h3>Sicherheit <?= e(geo_in()) ?></h3>
                <p>
                  Als etablierte Plattform stellen wir Sicherheit an erste Stelle. Wir setzen SSL,
                  Verschlüsselung auf Bankniveau und 2FA ein, damit <?= e(SITE_NAME) ?> verlässlich bleibt und Ihre Daten
                  geschützt sind.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Vorteilssymbol 2" />
              </div>
              <div class="text">
                <h3>Leistungsstarke KI-Algorithmen</h3>
                <p>
                  Unsere anpassungsfähigen Bots setzen fortschrittliche KI-Strategien um und führen sie selbstständig aus. Sie
                  legen den Ansatz fest und behalten die Kontrolle über Risiko, Märkte und Ziele, damit
                  Sie den Überblick behalten.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Vorteilssymbol 3" />
              </div>
              <div class="text">
                <h3>Transparente Gebühren. Keine versteckten Kosten.</h3>
                <p>
                  Alle Gebühren sind transparent; Anleger <?= e(geo_in()) ?> zahlen nichts extra für die Nutzung von
                  <?= e(SITE_NAME) ?>. Das Geld, das Sie fürs Trading einzahlen, bleibt vollständig Ihres: Sie nutzen es
                  wie Sie möchten. Wir behalten nichts ein. Starten Sie schon ab <?= e(money_min()) ?> und behalten Sie die volle Kontrolle
                  über Ihre Anlagen.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Vorteilssymbol 4" />
              </div>
              <div class="text">
                <h3>Intuitive Benutzeroberfläche</h3>
                <p>
                  Unser klares Dashboard verbindet Funktion, Präzision und
                  einfache Bedienung — für Einsteiger und erfahrene Trader.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Wie funktioniert <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listensymbol 1" />
              <p>
                Unsere eigene Software überwacht gleichzeitig mehrere Trading-Plattformen und
                erkennt nutzbare Preisunterschiede.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listensymbol 2" />
              <p>
                <?= e(SITE_NAME) ?> kauft an einem Markt günstig und verkauft an einem anderen teurer,
                und nutzt so Arbitragechancen. Dieser Ansatz kann Gewinn erzeugen, indem
                er Renditen aus kleinen Kursbewegungen sammelt.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Listensymbol 3" />
              <p>Entdecken Sie, wie <?= e(SITE_NAME) ?> Ihr Trading verbessern kann.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Registrieren Sie sich bei <?= e(SITE_NAME) ?> — und gestalten wir gemeinsam die Zukunft der Finanzen <?= e(geo_in()) ?>.
              </h2>
              <p>
                <?= e(SITE_NAME) ?> bietet ein breites Spektrum an Werkzeugen für den Handel mit Krypto-Assets <?= e(geo_in()) ?>. Die Plattform
                bindet die großen internationalen Handelsplätze ein und öffnet den Zugang zu zahlreichen
                Kryptowährungen — von Leitwerten wie Bitcoin bis zu anderen wie XRP. Außerdem können Sie
                von Kursschwankungen profitieren.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Jetzt registrieren';
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
              <h3>Lukas, 37, Berlin</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bewertung 1"
                />
              </div>
              <p class="review-text">
                Ich habe mit <?= e(money_min()) ?> angefangen und hebe jetzt <?= e(currency_symbol() . '2,000') ?> im Monat ab.
              </p>
            </div>
            <div class="review">
              <h3>Anna, 42, München</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bewertung 2"
                />
              </div>
              <p class="review-text">Einfache Plattform: alles transparent und nachvollziehbar.</p>
            </div>
            <div class="review">
              <h3>Julia, 45, Hamburg</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bewertung 3"
                />
              </div>
              <p class="review-text">Die beste Lösung für passives Einkommen.</p>
            </div>
            <div class="review">
              <h3>Felix, 34, Köln</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Bewertung 4"
                />
              </div>
              <p class="review-text">Stabile Erträge, auch im Urlaub.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Das Krypto-Angebot von <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Vorteil 1"
                />
                <h3>Der Schlüssel zum Krypto-Trading</h3>
                <p>
                  Unsere moderne Software ist das Fundament des Trading-Systems. Sie ist
                  darauf ausgelegt, kleine Preisunterschiede zwischen den großen Krypto-
                  Handelsplätzen zu nutzen.
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
                  alt="Vorteil 2"
                />
                <h3>Globaler Handel mit Vermögenswerten</h3>
                <p>
                  Aktienkurse und andere Assets bewegen sich ständig; <?= e(SITE_NAME) ?> liefert die
                  Werkzeuge, um zügig auf Marktbewegungen zu reagieren und die Chancen auf solide
                  Renditen zu verbessern.
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
                  alt="Vorteil 3"
                />
                <h3>Forex-Trading</h3>
                <p>
                  Wechselkurse ändern sich laufend und eröffnen Handelsgelegenheiten. <?= e(SITE_NAME) ?>
                  hilft Ihnen, auch kleinste Bewegungen am Devisenmarkt zu nutzen.
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
                  alt="Vorteil 4"
                />
                <h3><?= e(SITE_NAME) ?> und Bitcoin</h3>
                <p>
                  Bitcoin bleibt der Marktführer und die sichtbarste, finanziell stabilste
                  Kryptowährung. Indem Volatilität systematisch erkannt und genutzt wird,
                  erleichtert <?= e(SITE_NAME) ?> gleichmäßigere Erträge.
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
              <h2>Angaben zur Plattform</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Datenschutz</h3>
                  <p><?= e(SITE_NAME) ?> hält die geltenden Datenschutzvorschriften <?= e(geo_in()) ?> ein.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Assets</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash und weitere führende Kryptowährungen.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Plattformtyp</h3>
                  <p>
                    <?= e(SITE_NAME) ?> bietet Anlegern <?= e(geo_in()) ?> die Möglichkeit, von Kursbewegungen
                    führender Kryptowährungen zu profitieren, einschließlich Altcoins wie XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Länder</h3>
                  <p>Unsere Plattform ist weltweit verfügbar, auch <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Einzahlungsmöglichkeiten</h3>
                  <p>Kreditkarten, PayPal und Banküberweisung.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Kosten</h3>
                  <p>Der Zugang zu <?= e(SITE_NAME) ?> ist <?= e(geo_from()) ?> kostenlos.</p>
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
              <h2>Ist <?= e(SITE_NAME) ?> verlässlich?</h2>
              <p>
                <?= e(SITE_NAME) ?> arbeitet mit erstklassigen Brokern, die besonders verlässlich und
                erfahren sind. Wir setzen Sicherheitsmaßnahmen auf Bankniveau ein, etwa TLS/SSL-Verschlüsselung
                und Zwei-Faktor-Authentifizierung (2FA), um Ihre Assets und Daten zu schützen. Unsere
                Preisstruktur ist vollständig transparent, ohne versteckte Kosten. Wir halten uns an die
                geltenden Vorschriften.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Verlässlichkeitsgrafik" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Unsere Systeme für künstliche Intelligenz und maschinelles Lernen erzeugen Marktanalysen
                in Echtzeit und konkrete Trading-Hinweise, um Ihre Ergebnisse zu verbessern.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy Trading</h3>
                  <p>
                    Die besten Trader sind das aus einem Grund. Mit <?= e(SITE_NAME) ?> können Sie ihren Trades
                    folgen und sie kopieren — und so von Erfahrung und Strategie profitieren.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Bruchstücke von Aktien</h3>
                  <p>
                    Mit einem breiteren Portfolio gelangen Sie auch mit begrenztem Kapital an
                    hochwertige Assets.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Lernangebote</h3>
                  <p>
                    Um Ihre Trading-Fähigkeiten zu schärfen, bieten wir Lernangebote: Tutorials,
                    Webinare und Leitfäden.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobile App</h3>
                  <p>Handeln Sie jederzeit, überall.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Support rund um die Uhr</h3>
                  <p>Unser Kundenservice ist 24 Stunden am Tag, 7 Tage die Woche erreichbar.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>KI-gestütztes Trading</h3>
                  <p>
                    Dank unserer fortschrittlichen Algorithmen für künstliche Intelligenz und maschinelles Lernen
                    wertet <?= e(SITE_NAME) ?> laufend die aktuellen Marktdaten aus. So werden Marktchancen
                    mit dem größten Renditepotenzial rasch erkannt.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Anpassbare Strategien</h3>
                  <p>
                    Sobald Risikoprofil und Anlageziele feststehen, können Sie sie nutzen, um
                    Ihre Trading-Strategie auf unserer Multi-Asset-Plattform zu schärfen.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Zugang zu vielfältigen Assets</h3>
                  <p>
                    Obwohl wir uns auf Kryptowährungen konzentrieren, unterstützen wir auch den Handel mit
                    Devisen, Aktien, anderen Wertpapieren und Rohstoffen.
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
              <h2>Sie können von zu Hause handeln, Märkte analysieren und Positionen verfolgen.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Jetzt registrieren';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Sie können von zu Hause handeln, Märkte analysieren und Positionen verfolgen.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Jetzt registrieren" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
