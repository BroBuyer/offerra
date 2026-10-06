<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Team | ' . SITE_NAME . ' - Ons expertteam';
$page_description = 'Maak kennis met het team achter ' . SITE_NAME . '.';
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
            <h1>Ons team</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto van de CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Algemeen directeur (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto van de partner" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner en vicepresident business development</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto van de CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner en financieel directeur (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto van de managing partner" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Beherend vennoot</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto van de CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Technisch directeur (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto van de productdirecteur" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Productdirecteur</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Crypto-support</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Klantenservice en support</h3>
              <p>
                Achter <?= e(SITE_NAME) ?> staan ervaren professionals. Ons doel was
                een veilige omgeving te creëren waarin gebruikers cryptovaluta zoals
                Bitcoin rustig kunnen kopen. De ervaring van ons team bevestigt dat <?= e(SITE_NAME) ?>
                betrouwbaar is. Vragen? Je persoonlijke accountmanager staat voor je klaar.
              </p>
            </div>
            <div class="half right">
              <h3>Supporttijden</h3>
              <p>
                Bij problemen of vragen staat de klantenservice van <?= e(SITE_NAME) ?>
                dag en nacht voor je klaar. Kunnen we niet meteen antwoorden, dan neemt het team zo
                snel mogelijk contact op.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Zij vertrouwen ons</h2>
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
