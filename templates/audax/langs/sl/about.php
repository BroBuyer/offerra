<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ekipa | ' . SITE_NAME . ' - Naša strokovna ekipa';
$page_description = 'Spoznaj ekipo za ' . SITE_NAME . '.';
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
            <h1>Naša ekipa</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Izvršni direktor (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto partnerja" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner in podpredsednik za poslovni razvoj</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner in finančni direktor (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto upravljajočega partnerja" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Upravljajoči partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Tehnični direktor (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto direktorja izdelka" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Direktor izdelka</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kriptopodpora</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Podpora strankam</h3>
              <p>
                Za <?= e(SITE_NAME) ?> stojijo izkušeni strokovnjaki. Cilj nam je bil
                ustvariti varno okolje, v katerem lahko uporabniki varno kupujejo kriptovalute, kot je
                Bitcoin. Izkušnje ekipe potrjujejo, da je <?= e(SITE_NAME) ?>
                zanesljiva. Imaš vprašanja? Tvoj osebni upravitelj računa je na voljo.
              </p>
            </div>
            <div class="half right">
              <h3>Ure podpore</h3>
              <p>
                Ob težavah ali vprašanjih je podpora strankam <?= e(SITE_NAME) ?>
                na voljo nonstop. Če ne odgovorimo takoj, se ekipa oglasi čim
                prej.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Zaupajo nam</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logotip Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logotip Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logotip CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logotip TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logotip Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logotip Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logotip Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logotip Nansen" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
