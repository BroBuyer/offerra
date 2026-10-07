<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tim | ' . SITE_NAME . ' - Naš stručni tim';
$page_description = 'Upoznaj tim iza ' . SITE_NAME . '.';
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
            <h1>Naš tim</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto CEO-a" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Glavni izvršni direktor (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto partnera" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner i potpredsjednik za razvoj poslovanja</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto CFO-a" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner i financijski direktor (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto upravljajućeg partnera" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Upravljajući partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto CTO-a" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Tehnički direktor (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto direktora proizvoda" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Direktor proizvoda</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kriptopodška</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Korisnička služba i podrška</h3>
              <p>
                Iza <?= e(SITE_NAME) ?> stoje iskusni stručnjaci. Cilj nam je bio
                stvoriti sigurno okruženje u kojem korisnici mogu sigurno kupovati kriptovalute poput
                Bitcoina. Iskustvo tima potvrđuje da je <?= e(SITE_NAME) ?>
                pouzdana. Imaš pitanja? Tvoj osobni upravitelj računa na raspolaganju je.
              </p>
            </div>
            <div class="half right">
              <h3>Sati podrške</h3>
              <p>
                U slučaju problema ili pitanja korisnička služba <?= e(SITE_NAME) ?> je
                dostupna nonstop. Ako ne odgovorimo odmah, tim će se javiti što
                prije.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Vjeruju nam</h2>
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
