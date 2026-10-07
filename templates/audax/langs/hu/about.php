<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Csapat | ' . SITE_NAME . ' - Szakértő csapatunk';
$page_description = 'Ismerd meg a csapatot a ' . SITE_NAME . '.';
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
            <h1>Csapatunk</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="CEO fotó" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Vezérigazgató (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Partner fotó" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner és üzletfejlesztési alelnök</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="CFO fotó" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner és pénzügyi igazgató (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Ügyvezető partner fotó" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Ügyvezető partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="CTO fotó" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Műszaki igazgató (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Termékigazgató fotó" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Termékigazgató</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kriptotámogatás</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Ügyfélszolgálat és támogatás</h3>
              <p>
                A <?= e(SITE_NAME) ?> mögött tapasztalt szakemberek állnak. Célunk az volt, hogy
                biztonságos környezetet hozzunk létre, ahol a felhasználók biztonságosan vásárolhatnak kriptovalutát, például
                Bitcoint. A csapat szakmai tapasztalata megerősíti, hogy a <?= e(SITE_NAME) ?>
                megbízható. Van kérdésed? Személyes számlakezelőd a rendelkezésedre áll.
              </p>
            </div>
            <div class="half right">
              <h3>Támogatási idő</h3>
              <p>
                Probléma vagy kérdés esetén a <?= e(SITE_NAME) ?> ügyfélszolgálata
                nonstop elérhető. Ha nem válaszolunk azonnal, a csapat a lehető
                leghamarabb jelentkezik.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Bíznak bennünk</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com logó" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger logó" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt logó" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen logó" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
