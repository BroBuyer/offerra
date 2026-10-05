<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Team | ' . SITE_NAME . ' - Our expert team';
$page_description = 'Meet the team behind ' . SITE_NAME . '.';
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
            <h1>Our team</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="CEO photo" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Chief Executive Officer (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Partner photo" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Partner and Vice President of Business Development</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="CFO photo" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Partner and Chief Financial Officer (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Managing Partner photo" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Managing Partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="CTO photo" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Chief Technology Officer (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Product Director photo" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Product Director</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Cryptocurrency support</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Customer service and support</h3>
              <p>
                The team behind <?= e(SITE_NAME) ?> consists of experienced professionals. Our goal was to
                create a secure environment where users can safely buy cryptocurrencies such as
                Bitcoin. The professional experience of our team confirms that <?= e(SITE_NAME) ?> is
                reliable. Have questions? Your personal account manager is at your disposal.
              </p>
            </div>
            <div class="half right">
              <h3>Support hours</h3>
              <p>
                In case of problems or questions, <?= e(SITE_NAME) ?> customer service is available to you
                24/7. If we cannot respond immediately, our team will contact you as soon as
                possible.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>They trust us</h2>
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
