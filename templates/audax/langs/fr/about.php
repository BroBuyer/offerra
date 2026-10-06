<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Équipe | ' . SITE_NAME . ' - Notre équipe d’experts';
$page_description = 'Découvrez l’équipe derrière ' . SITE_NAME . '.';
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
            <h1>Notre équipe</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Photo du CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Directeur général (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Partner photo" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Associé et vice-président du développement commercial</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="CFO photo" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Associé et directeur financier (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Associé gérant photo" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Associé gérant</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="CTO photo" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Directeur technique (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Directrice produit photo" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Directrice produit</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Accompagnement crypto</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Service client et assistance</h3>
              <p>
                L’équipe de <?= e(SITE_NAME) ?> réunit des professionnels expérimentés. Notre objectif était de
                créer un environnement sûr, où chacun peut acheter des cryptomonnaies comme
                Bitcoin en toute sérénité. L’expérience de notre équipe confirme que <?= e(SITE_NAME) ?> est
                fiable. Une question ? Votre conseiller dédié est à votre disposition.
              </p>
            </div>
            <div class="half right">
              <h3>Horaires d’assistance</h3>
              <p>
                En cas de problème ou de question, le service client <?= e(SITE_NAME) ?> est à votre disposition
                24 h/24. Si nous ne pouvons pas répondre immédiatement, notre équipe vous recontactera dès que
                possible.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Ils nous font confiance</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com Logo" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance Logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Coindesk Logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView Logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte Logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger Logo" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt Logo" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen Logo" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
