<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Team | ' . SITE_NAME . ' - Unser Expertenteam';
$page_description = 'Lernen Sie das Team hinter ' . SITE_NAME . '.';
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
            <h1>Unser Team</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto des CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Vorstandsvorsitzender (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto des Partners" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner und Vice President Business Development</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto des CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner und Finanzvorstand (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto des geschäftsführenden Partners" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Geschäftsführender Partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto des CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Technischer Vorstand (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto der Produkt Director" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Produkt Director</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Krypto-Support</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Kundenservice und Support</h3>
              <p>
                Hinter <?= e(SITE_NAME) ?> stehen erfahrene Fachleute. Unser Ziel war es,
                ein sicheres Umfeld zu schaffen, in dem Nutzer Kryptowährungen wie
                Bitcoin ruhig kaufen können. Die Berufserfahrung unseres Teams bestätigt, dass <?= e(SITE_NAME) ?>
                verlässlich ist. Fragen? Ihr persönlicher Betreuer steht Ihnen zur Verfügung.
              </p>
            </div>
            <div class="half right">
              <h3>Supportzeiten</h3>
              <p>
                Bei Problemen oder Fragen steht Ihnen der Kundenservice von <?= e(SITE_NAME) ?>
                rund um die Uhr zur Verfügung. Können wir nicht sofort antworten, meldet sich das Team so
                bald wie möglich.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Sie vertrauen uns</h2>
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
