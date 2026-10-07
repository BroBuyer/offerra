<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zespół | ' . SITE_NAME . ' - Nasz zespół ekspertów';
$page_description = 'Poznaj zespół stojący za ' . SITE_NAME . '.';
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
            <h1>Nasz zespół</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Zdjęcie CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Dyrektor generalny (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Zdjęcie partnera" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner i wiceprezes ds. rozwoju biznesu</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Zdjęcie CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner i dyrektor finansowy (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Zdjęcie partnera zarządzającego" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Partner zarządzający</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Zdjęcie CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Dyrektor ds. technologii (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Zdjęcie dyrektora produktu" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Dyrektor produktu</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Wsparcie krypto</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Obsługa klienta i wsparcie</h3>
              <p>
                Za <?= e(SITE_NAME) ?> stoją doświadczeni specjaliści. Naszym celem było
                stworzyć bezpieczne środowisko, w którym użytkownicy mogą bezpiecznie kupować kryptowaluty, takie jak
                Bitcoin. Doświadczenie zespołu potwierdza, że <?= e(SITE_NAME) ?> jest
                niezawodna. Pytania? Twój osobisty opiekun konta jest do dyspozycji.
              </p>
            </div>
            <div class="half right">
              <h3>Godziny wsparcia</h3>
              <p>
                W razie problemów lub pytań obsługa klienta <?= e(SITE_NAME) ?> jest
                dostępna całodobowo. Jeśli nie będziemy mogli odpowiedzieć od razu, zespół skontaktuje się tak
                szybko, jak to możliwe.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Ufają nam</h2>
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
