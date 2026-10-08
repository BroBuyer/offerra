<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Komanda | ' . SITE_NAME . ' - Mūsu ekspertu komanda';
$page_description = 'Iepazīstiet komandu aiz ' . SITE_NAME . '.';
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
            <h1>Mūsu komanda</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="CEO foto" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Izpilddirektors (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Partnera foto" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partneris un viceprezidents biznesa attīstībā</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="CFO foto" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partneris un finanšu direktors (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Vadošā partnera foto" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Vadošais partneris</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="CTO foto" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Tehniskais direktors (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Produkta direktora foto" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Produkta direktors</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kriptoatbalsts</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Klientu apkalpošana un atbalsts</h3>
              <p>
                Aiz <?= e(SITE_NAME) ?> stāv pieredzējuši profesionāļi. Mūsu mērķis bija
                radīt drošu vidi, kurā lietotāji var droši pirkt kriptovalūtas, piemēram,
                Bitcoin. Komandas pieredze apstiprina, ka <?= e(SITE_NAME) ?> ir
                uzticama. Ir jautājumi? Jūsu personīgais konta pārvaldnieks ir pieejams.
              </p>
            </div>
            <div class="half right">
              <h3>Atbalsta stundas</h3>
              <p>
                Problēmu vai jautājumu gadījumā <?= e(SITE_NAME) ?> klientu atbalsts ir
                pieejams nonstop. Ja neatbildam uzreiz, komanda sazināsies iespējami
                ātri.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Mums uzticas</h2>
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
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
