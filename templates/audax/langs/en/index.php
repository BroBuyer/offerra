<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' - Smart AI investing in ' . geo_country_name();
$page_description = 'Automated trading in ' . geo_country_name() . '. Start with ' . money_min() . ' using our AI technology. Secure, transparent, and simple.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1><?= e(SITE_NAME) ?> Platform</h1>
              <p>
                What makes <?= e(SITE_NAME) ?> unique? This is your opportunity to invest smarter in
                <?= e(geo_country_name()) ?>. Our reliable AI-powered trading platform helps you make informed decisions
                and manage risk with confidence. Discover the possibilities of <?= e(SITE_NAME) ?> AI.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Rated 4.7 stars by more than 2,804 satisfied users</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Rated 4.7 out of 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Join <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Join Now';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    By entering your personal information and clicking the "Join Now" button, you
                    confirm that you agree to the
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Privacy Policy</a> and the
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Terms of Use</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Payment methods" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Rated 4.7 stars by more than 2,804 satisfied users</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Rated 4.7 out of 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Profit calculator">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Calculate possible profits</h2>
          <p class="calc-widget__subtitle">
            Choose how much and for how long you want to invest to find out your potential profits
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">You deposit:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Period of investment:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>days</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>From 1 day</span>
                  <span>To 3 months</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">You can earn</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Profitability</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Revenue</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Request a Personalized Calculation
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Close">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Leave your contact details and one of our specialists will get in touch with you as
              soon as possible.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Join Now';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Your access from <?= e(geo_country_name()) ?> to the world&rsquo;s leading crypto trading platforms.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Card icon 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> uses advanced artificial intelligence and machine learning to
                    identify new opportunities in financial markets.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Card icon 2" />
                </div>
                <div class="text">
                  <p>
                    Crypto asset investors in <?= e(geo_country_name()) ?> gain access to the largest exchanges in the
                    sector and can trade leading currencies such as Bitcoin and Ethereum, as well as
                    a wide range of altcoins and stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Our trusted partners</h2>
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

      <section class="advantages cards-img">
        <div class="container">
          <h2>Why choose <?= e(SITE_NAME) ?> in <?= e(geo_country_name()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Advantage icon 1" />
              </div>
              <div class="text">
                <h3>Security in <?= e(geo_country_name()) ?></h3>
                <p>
                  As a reputable platform, we place the highest value on security. We use SSL,
                  bank-level encryption, and 2FA to ensure <?= e(SITE_NAME) ?> is reliable and your data
                  is protected.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Advantage icon 2" />
              </div>
              <div class="text">
                <h3>Powerful AI algorithms</h3>
                <p>
                  Our adaptable bots use advanced AI strategies and execute them autonomously. You
                  set the approach and retain full control over risk level, markets, and goals, so
                  you can focus on the bigger picture.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Advantage icon 3" />
              </div>
              <div class="text">
                <h3>Transparent fees. No hidden costs.</h3>
                <p>
                  All our fees are transparent and we never charge investors in <?= e(geo_country_name()) ?> for using
                  <?= e(SITE_NAME) ?>. The money you deposit for trading is entirely yours and you can use
                  it as you wish. We retain nothing. Start with just <?= e(money_min()) ?> and keep full control
                  over your investments.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Advantage icon 4" />
              </div>
              <div class="text">
                <h3>Intuitive user interface</h3>
                <p>
                  Our intuitive and simple dashboard combines functionality, sophistication, and
                  ease of use for beginners and experienced traders.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>How does <?= e(SITE_NAME) ?> work?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="List icon 1" />
              <p>
                Our proprietary software simultaneously monitors multiple trading platforms and
                identifies price differences that can be exploited.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="List icon 2" />
              <p>
                <?= e(SITE_NAME) ?> buys low on one market and sells at a higher price on another,
                exploiting arbitrage opportunities. This approach can generate profit by
                accumulating returns from small price changes.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="List icon 3" />
              <p>Discover how <?= e(SITE_NAME) ?> can improve your trading experience.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Join <?= e(SITE_NAME) ?> and let&rsquo;s shape the future of finance in <?= e(geo_country_name()) ?> together!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> offers a wide range of tools for trading crypto assets in <?= e(geo_country_name()) ?>. It
                integrates major global exchange platforms and provides access to numerous
                cryptocurrencies, from leaders like Bitcoin to others like XRP. In addition, it
                lets you profit from price fluctuations.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Join Now';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>Marko, 37, Zagreb</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 1"
                />
              </div>
              <p class="review-text">
                I started with <?= e(money_min()) ?>, and now I withdraw &euro;2,000 monthly!
              </p>
            </div>
            <div class="review">
              <h3>Ivana, 42, Split</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 2"
                />
              </div>
              <p class="review-text">Simple platform, everything is transparent and practical.</p>
            </div>
            <div class="review">
              <h3>Ana, 45, Rijeka</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 3"
                />
              </div>
              <p class="review-text">The best solution for passive income.</p>
            </div>
            <div class="review">
              <h3>Luka, 34, Zadar</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 4"
                />
              </div>
              <p class="review-text">Stable profits, even when I&rsquo;m on vacation.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Cryptocurrency offering on <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Benefit 1"
                />
                <h3>The key to crypto trading</h3>
                <p>
                  Our state-of-the-art software forms the foundation of our trading system. It is
                  designed to exploit small price differences between major cryptocurrency
                  exchanges.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Benefit 2"
                />
                <h3>Global asset trading</h3>
                <p>
                  Stock prices and other assets constantly fluctuate; <?= e(SITE_NAME) ?> provides the
                  tools needed to react quickly to exchange movements and improve chances of solid
                  returns.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Benefit 3"
                />
                <h3>Forex trading</h3>
                <p>
                  Exchange rates constantly change and create trading opportunities. <?= e(SITE_NAME) ?>
                  helps you profit even from the smallest movements in the currency market.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Benefit 4"
                />
                <h3><?= e(SITE_NAME) ?> and Bitcoin</h3>
                <p>
                  Bitcoin remains the market leader and the most visible and financially stable
                  cryptocurrency. By systematically recognizing and responding to market volatility,
                  <?= e(SITE_NAME) ?> makes it easier to achieve consistent returns.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Platform information</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privacy</h3>
                  <p><?= e(SITE_NAME) ?> complies with applicable privacy regulations in <?= e(geo_country_name()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Assets</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash, and other major cryptocurrencies.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Platform type</h3>
                  <p>
                    <?= e(SITE_NAME) ?> offers investors in <?= e(geo_country_name()) ?> the opportunity to profit from price
                    fluctuations of major cryptocurrencies, including altcoins such as XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Countries</h3>
                  <p>Our platform is available globally, including in <?= e(geo_country_name()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Deposit options</h3>
                  <p>Credit cards, PayPal, and bank transfer.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Costs</h3>
                  <p>Access to <?= e(SITE_NAME) ?> is free from <?= e(geo_country_name()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2>Is <?= e(SITE_NAME) ?> reliable?</h2>
              <p>
                <?= e(SITE_NAME) ?> works with first-class brokers who are exceptionally reliable and
                highly experienced. We implement bank-level security measures, such as TLS/SSL
                encryption and two-factor authentication (2FA), to protect your assets and data. Our
                pricing structure is fully transparent, with no hidden costs. We comply with
                applicable regulations.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Reliability chart" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Our artificial intelligence and machine learning systems generate real-time market
                analysis and offer practical trading insights to optimize your results.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy Trading</h3>
                  <p>
                    The best traders are the best for a reason. With <?= e(SITE_NAME) ?> you can follow
                    and copy their trades to benefit from their experience and strategy.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Fractional shares</h3>
                  <p>
                    By expanding your portfolio you can gain access to high-quality assets even with
                    limited capital.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Educational resources</h3>
                  <p>
                    To improve your trading skills, we offer educational resources: tutorials,
                    webinars, and guides.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobile app</h3>
                  <p>Trade anytime, anywhere.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>24/7 support</h3>
                  <p>Our customer service is available 24 hours a day, 7 days a week.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI-powered trading</h3>
                  <p>
                    Thanks to our advanced artificial intelligence and machine learning algorithms,
                    <?= e(SITE_NAME) ?> continuously analyzes the latest market data. This allows market
                    opportunities with the greatest return potential to be identified quickly.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Customizable strategies</h3>
                  <p>
                    Once you define your risk profile and investment goals, you can use them to
                    improve your trading strategy on our multi-asset platform.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Access to diverse assets</h3>
                  <p>
                    Although we specialize in cryptocurrencies, we also offer support for trading
                    currencies, stocks, other securities, and commodities.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>You can trade from home, analyze markets, and track your positions.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Join Now';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>You can trade from home, analyze markets, and track your positions.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Register now" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
