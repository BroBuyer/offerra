<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Product | ' . SITE_NAME . ' - AI trading platform';
$page_description = SITE_NAME . ': Advanced AI platform for cryptocurrencies in ' . geo_country_name() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              With <?= e(SITE_NAME) ?> you can use digital analytics to drive strong wealth growth in
              <?= e(geo_country_name()) ?>
            </h1>
            <p>
              Thanks to our top-tier artificial intelligence and advanced algorithms, <?= e(SITE_NAME) ?>
              continuously analyzes global markets. This enables our platform to quickly identify
              the most profitable opportunities. Now is the time to take a step toward success with
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Start now</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>We are your all-in-one digital trading platform</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Benefit 1"
                  />
                </div>
                <h3>Cryptocurrency management</h3>
                <p>Easily manage all your digital assets in one place.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="Benefit 2"
                  />
                </div>
                <h3>Access information about all your assets from one platform and interface</h3>
                <p>Optimize your financial management with a clear overview.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="Benefit 3"
                  />
                </div>
                <h3>Capital markets</h3>
                <p>Always stay ahead of the market with real-time data and insights.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="Benefit 4"
                  />
                </div>
                <h3>Mobile access</h3>
                <p>
                  Our fully optimized mobile site lets you track your portfolio anytime, anywhere.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="Benefit 5"
                  />
                </div>
                <h3>Live statistics</h3>
                <p>
                  Track your returns and analytics with exceptional precision, every second of the
                  day.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              Download the app today and manage your finances in real time from your smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Register</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Discover the cutting-edge AI analytics of the <?= e(SITE_NAME) ?> platform and intuitive asset
            trading interface in <?= e(geo_country_name()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Feature 1" />
              </div>
              <div class="text">
                <h4>Portfolio</h4>
                <p>
                  Strengthen your financial profile with our proven and innovative trading
                  strategies.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Feature 2" />
              </div>
              <div class="text">
                <h4>Crypto analysis</h4>
                <p>
                  Leverage the latest generation of <?= e(SITE_NAME) ?> artificial intelligence and its
                  advanced machine learning algorithms to quickly identify profitable opportunities.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Feature 3" />
              </div>
              <div class="text">
                <h4>Easy buying</h4>
                <p>
                  We offer advanced features and support for a simple and intuitive way to trade
                  cryptocurrencies. No hidden fees and ultra-fast execution. This is your
                  opportunity to maximize your trading profits with the power of AI!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Feature 4" />
              </div>
              <div class="text">
                <h4>Digital assets</h4>
                <p>
                  Take the opportunity to maximize profits from asset trading, whether
                  cryptocurrencies or other assets. Build a diversified portfolio with our software
                  and machine learning algorithms. Now is the time to take that step and start your
                  trading journey!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
