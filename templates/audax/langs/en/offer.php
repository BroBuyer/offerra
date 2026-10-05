<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Offer | ' . SITE_NAME . ' - Start your journey';
$page_description = 'Start trading on ' . SITE_NAME . '. Register now for free.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
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
              Create your account today on <?= e(SITE_NAME) ?>. Your personal portfolio dashboard is
              ready!
            </h1>
            <p>
              In less than 5 minutes you can create your free account, make a deposit, and start
              trading. Start today: this is your opportunity to build a solid financial future.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Sign up</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>How it works</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Account creation icon" />
                <h3>Account creation</h3>
                <p>
                  You can create your account in a few seconds. You will get instant access to our
                  trading tools and the opportunities waiting for you.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Deposit icon" />
                <h3>Deposit funds</h3>
                <p>Simply deposit funds to start trading.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Buy and sell icon" />
                <h3>Start buying and selling</h3>
                <p>
                  Strengthen your portfolio with confidence. Take the leap into the market without
                  hesitation!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Don&rsquo;t miss out! Join thousands of successful traders!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Track your portfolio with constant balance updates and real-time profits.</h3>
            </div>
            <div class="half right">
              <p>
                Don&rsquo;t miss a single detail with <?= e(SITE_NAME) ?>&rsquo;s in-depth analysis of
                trading patterns and constantly updated data. You can track all your key statistics
                such as balance, profits, and price fluctuations. With these powerful tools you
                maximize your returns and make informed, strategic investment decisions. The future
                is now: start today!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Start now</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
