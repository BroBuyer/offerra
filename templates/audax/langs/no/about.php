<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Team | ' . SITE_NAME . ' - Ekspertteamet vårt';
$page_description = 'Møt teamet bak ' . SITE_NAME . '.';
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
            <h1>Teamet vårt</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Bilde av CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Administrerende direktør (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Bilde av partneren" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner og visepresident for forretningsutvikling</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Bilde av CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner og finansdirektør (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Bilde av managing partner" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Managing partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Bilde av CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Teknologidirektør (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Bilde av produktdirektøren" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Produktdirektør</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kryptosupport</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Kundeservice og support</h3>
              <p>
                Bak <?= e(SITE_NAME) ?> står erfarne fagfolk. Målet vårt var å
                skape et trygt miljø der brukere trygt kan kjøpe kryptovaluta som
                Bitcoin. Teamets erfaring bekrefter at <?= e(SITE_NAME) ?> er
                pålitelig. Spørsmål? Din personlige kontoansvarlige er tilgjengelig.
              </p>
            </div>
            <div class="half right">
              <h3>Supporttider</h3>
              <p>
                Ved problemer eller spørsmål er kundeservice hos <?= e(SITE_NAME) ?>
                tilgjengelig døgnet rundt. Hvis vi ikke kan svare med en gang, tar teamet kontakt så
                raskt som mulig.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>De stoler på oss</h2>
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
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
