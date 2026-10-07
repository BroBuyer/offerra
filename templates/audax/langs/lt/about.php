<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Komanda | ' . SITE_NAME . ' - Mūsų ekspertų komanda';
$page_description = 'Susipažinkite su komanda už ' . SITE_NAME . '.';
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
            <h1>Mūsų komanda</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="CEO nuotrauka" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Generalinis direktorius (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Partnerio nuotrauka" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partneris ir verslo plėtros viceprezidentas</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="CFO nuotrauka" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partneris ir finansų direktorius (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Valdančiojo partnerio nuotrauka" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Valdantysis partneris</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="CTO nuotrauka" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Technologijų direktorius (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Produkto direktoriaus nuotrauka" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Produkto direktorius</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kriptovaliutų palaikymas</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Klientų aptarnavimas ir pagalba</h3>
              <p>
                Už <?= e(SITE_NAME) ?> stovi patyrę specialistai. Mūsų tikslas buvo
                sukurti saugią aplinką, kurioje naudotojai galėtų saugiai pirkti kriptovaliutas, tokias kaip
                Bitcoin. Komandos patirtis patvirtina, kad <?= e(SITE_NAME) ?> yra
                patikima. Turite klausimų? Jūsų asmeninis paskyros vadybininkas pasiruošęs padėti.
              </p>
            </div>
            <div class="half right">
              <h3>Pagalbos valandos</h3>
              <p>
                Kilus problemoms ar klausimams <?= e(SITE_NAME) ?> klientų aptarnavimas
                prieinamas visą parą. Jei negalėsime atsakyti iš karto, komanda susisieks kaip
                įmanoma greičiau.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Jie mumis pasitiki</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com logotipas" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger logotipas" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt logotipas" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen logotipas" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
