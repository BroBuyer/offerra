<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Echipă | ' . SITE_NAME . ' - Echipa noastră de specialiști';
$page_description = 'Cunoaște echipa din spatele ' . SITE_NAME . '.';
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
            <h1>Echipa noastră</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Director general (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto partener" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partener și vicepreședinte dezvoltare business</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partener și director financiar (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto partener administrator" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Partener administrator</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Director tehnic (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto director de produs" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Director de produs</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Suport criptomonede</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Serviciu clienți și suport</h3>
              <p>
                În spatele <?= e(SITE_NAME) ?> stau profesioniști experimentați. Scopul nostru a fost să
                creăm un mediu sigur în care utilizatorii pot cumpăra în siguranță criptomonede precum
                Bitcoin. Experiența echipei confirmă că <?= e(SITE_NAME) ?> este
                de încredere. Ai întrebări? Managerul tău personal de cont îți stă la dispoziție.
              </p>
            </div>
            <div class="half right">
              <h3>Program de suport</h3>
              <p>
                În caz de probleme sau întrebări, serviciul clienți <?= e(SITE_NAME) ?> este
                disponibil non-stop. Dacă nu răspundem imediat, echipa te va contacta cât
                mai curând posibil.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Au încredere în noi</h2>
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
