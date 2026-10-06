<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Team | ' . SITE_NAME . ' - Il nostro team di esperti';
$page_description = 'Scopri il team dietro ' . SITE_NAME . '.';
$page_canonical = page_url('about.php');
$active_page = 'about';
$page_css = ['team-mob.min.css', 'team-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>Il nostro team</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto del CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Amministratore delegato (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto del socio" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Socio e vicepresidente dello sviluppo commerciale</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto del CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Socio e direttore finanziario (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto del socio accomandatario" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Socio accomandatario</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto del CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Direttore tecnico (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto della direttrice prodotto" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Direttrice prodotto</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Supporto crypto</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Servizio clienti e assistenza</h3>
              <p>
                Il team di <?= e(SITE_NAME) ?> riunisce professionisti esperti. Il nostro obiettivo era
                creare un ambiente sicuro, in cui ciascuno possa acquistare criptovalute come
                Bitcoin in tutta serenità. L’esperienza del nostro team conferma che <?= e(SITE_NAME) ?> è
                affidabile. Una domanda? Il tuo consulente dedicato è a disposizione.
              </p>
            </div>
            <div class="half right">
              <h3>Orari di assistenza</h3>
              <p>
                In caso di problemi o domande, il servizio clienti <?= e(SITE_NAME) ?> è a tua disposizione
                24 ore su 24. Se non possiamo rispondere subito, il team ti ricontatterà il prima
                possibile.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Si fidano di noi</h2>
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
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
