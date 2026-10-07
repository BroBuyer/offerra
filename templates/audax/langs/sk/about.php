<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tím | ' . SITE_NAME . ' - Náš tím odborníkov';
$page_description = 'Spoznajte tím za ' . SITE_NAME . '.';
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
            <h1>Náš tím</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Generálny riaditeľ (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto partnera" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner a viceprezident pre rozvoj biznisu</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner a finančný riaditeľ (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto riadiaceho partnera" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Riadiaci partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Technický riaditeľ (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto produktového riaditeľa" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Produktový riaditeľ</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kryptopodpora</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Zákaznícky servis a podpora</h3>
              <p>
                Za <?= e(SITE_NAME) ?> stoja skúsení odborníci. Naším cieľom bolo
                vytvoriť bezpečné prostredie, kde používatelia môžu bezpečne kupovať kryptomeny, ako je
                Bitcoin. Skúsenosť tímu potvrdzuje, že <?= e(SITE_NAME) ?> je
                spoľahlivá. Máte otázky? Váš osobný správca účtu je k dispozícii.
              </p>
            </div>
            <div class="half right">
              <h3>Hodiny podpory</h3>
              <p>
                V prípade problémov alebo otázok je zákaznícky servis <?= e(SITE_NAME) ?>
                k dispozícii nonstop. Ak neodpovieme hneď, tím sa ozve čo
                najskôr.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Dôverujú nám</h2>
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
