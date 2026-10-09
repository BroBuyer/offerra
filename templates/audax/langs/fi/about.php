<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tiimi | ' . SITE_NAME . ' - Asiantuntijatiimimme';
$page_description = 'Tutustu tiimiin palvelun ' . SITE_NAME . '.';
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
            <h1>Tiimimme</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Toimitusjohtajan kuva" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Toimitusjohtaja (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Kumppanin kuva" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Kumppani ja liiketoiminnan kehityksen varapuheenjohtaja</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Talousjohtajan kuva" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Kumppani ja talousjohtaja (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Managing partnerin kuva" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Managing partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Teknologiajohtajan kuva" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Teknologiajohtaja (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Tuotepäällikön kuva" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Tuotepäällikkö</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kryptotuki</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Asiakaspalvelu ja tuki</h3>
              <p>
                Palvelun <?= e(SITE_NAME) ?> takana on kokeneita ammattilaisia. Tavoitteemme oli
                luoda turvallinen ympäristö, jossa käyttäjät voivat turvallisesti ostaa kryptovaluuttoja, kuten
                Bitcoinia. Tiimimme ammattitaito vahvistaa, että <?= e(SITE_NAME) ?> on
                luotettava. Kysyttävää? Henkilökohtainen tilinhoitajasi on käytettävissäsi.
              </p>
            </div>
            <div class="half right">
              <h3>Tukiajat</h3>
              <p>
                Ongelmatilanteissa tai kysymyksissä <?= e(SITE_NAME) ?> -asiakaspalvelu on
                käytettävissä ympäri vuorokauden. Jos emme voi vastata heti, tiimimme ottaa sinuun yhteyttä
                mahdollisimman pian.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>He luottavat meihin</h2>
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
