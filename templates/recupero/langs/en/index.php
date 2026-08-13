<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Official Platform for AI Assisted Trading');
$page_description = "Don't miss the opportunity to use the " . SITE_NAME . " platform, and start generating income today!";
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<header class="ra-header">
  <div class="ra-shell ra-header__inner">
    <a class="ra-brand" href="<?= page_url() ?>"><?= e(SITE_NAME) ?></a>
    <a class="btn btn-cta ra-header__cta" href="#signup">Start now</a>
  </div>
</header>

<main>
  <section class="ra-hero" id="signup">
    <div class="ra-shell ra-hero__grid">
      <div class="ra-hero__copy">
        <h1>
          <span class="ra-hero__line">Don't miss the opportunity to use the <?= e(SITE_NAME) ?> platform,</span>
          <span class="ra-hero__accent">and start generating income today!</span>
        </h1>
        <figure class="ra-hero__media">
          <img
            src="<?= asset('static/img/hero/post.png') ?>"
            alt="<?= e(SITE_NAME) ?> platform"
            width="720"
            height="480"
            decoding="async"
            fetchpriority="high"
          />
        </figure>
      </div>

      <div class="ra-hero__form">
        <div class="ra-card">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Sign up and get instant access';
          $form_submit = 'Start now';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="ra-steps" aria-label="How it works">
    <div class="ra-shell ra-steps__grid">
      <article class="ra-step">
        <img src="<?= asset('static/img/features/keycap-1.webp') ?>" alt="" width="64" height="64" />
        <div>
          <p class="ra-step__label">Step 1</p>
          <p><strong>REGISTER</strong> and wait for your personal manager's call.</p>
        </div>
      </article>
      <article class="ra-step">
        <img src="<?= asset('static/img/features/keycap-2.webp') ?>" alt="" width="64" height="64" />
        <div>
          <p class="ra-step__label">Step 2</p>
          <p>Make the required initial minimum <strong>DEPOSIT</strong> and start earning profits.</p>
        </div>
      </article>
    </div>
  </section>

  <section class="ra-why" id="why">
    <div class="ra-shell">
      <h2>Why is <?= e(SITE_NAME) ?> so successful?</h2>
      <div class="ra-why__grid">
        <article class="ra-feature">
          <img src="<?= asset('static/img/features/chart.png') ?>" alt="" width="72" height="72" />
          <h3>Comprehensive Algorithm</h3>
          <p>The <?= e(SITE_NAME) ?> algorithm analyzes over fifty aspects when searching for new transactions.</p>
        </article>
        <article class="ra-feature">
          <img src="<?= asset('static/img/features/robot.png') ?>" alt="" width="72" height="72" />
          <h3>Real-time Market Analysis</h3>
          <p><?= e(SITE_NAME) ?> updates every second to offer the best possible online business opportunities.</p>
        </article>
        <article class="ra-feature">
          <img src="<?= asset('static/img/features/user-with-laptop.png') ?>" alt="" width="72" height="72" />
          <h3>Works with Patterns</h3>
          <p>Our algorithm is specially tuned to execute transaction patterns that emerge in financial markets.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="ra-devices" id="devices">
    <div class="ra-shell ra-devices__grid">
      <div class="ra-devices__copy">
        <h2>The software works on all available devices and operating systems</h2>
        <a class="btn btn-cta" href="#signup-bottom">Start now</a>
      </div>
      <figure class="ra-devices__media">
        <img
          src="<?= asset('static/img/devices/macbook.png') ?>"
          alt="<?= e(SITE_NAME) ?> on desktop and mobile"
          width="640"
          height="400"
          loading="lazy"
          decoding="async"
        />
      </figure>
    </div>
  </section>

  <section class="ra-reviews" id="reviews">
    <div class="ra-shell">
      <h2>What our users experienced with <?= e(SITE_NAME) ?></h2>
      <div class="ra-reviews__grid">
        <article class="ra-review">
          <img src="<?= asset('static/img/avatars/user-001.png') ?>" alt="" width="64" height="64" />
          <h3>John Smith</h3>
          <p class="ra-review__meta">London, UK</p>
          <p>“The first online trading solution that really works for me. I started with just $250 and now I earn more than I do at my job.”</p>
        </article>
        <article class="ra-review">
          <img src="<?= asset('static/img/avatars/user-002.png') ?>" alt="" width="64" height="64" />
          <h3>James Brown</h3>
          <p class="ra-review__meta">Toronto, Canada</p>
          <p>“I tried many software solutions to start trading, but they were all big failures. I didn't give up and finally made money with <?= e(SITE_NAME) ?>. Thank you!”</p>
        </article>
        <article class="ra-review">
          <img src="<?= asset('static/img/avatars/user-003.png') ?>" alt="" width="64" height="64" />
          <h3>Sarah Johnson</h3>
          <p class="ra-review__meta">Sydney, Australia</p>
          <p>“It's incredible! I was able to turn $250 into thousands of dollars with no online trading experience. How is that possible?!”</p>
        </article>
      </div>
    </div>
  </section>

  <section class="ra-bottom-cta" id="signup-bottom">
    <div class="ra-shell ra-bottom-cta__inner">
      <div class="ra-card ra-card--wide">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Sign up to achieve better financial habits';
        $form_submit = 'Start now';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<footer class="ra-footer">
  <div class="ra-shell ra-footer__inner">
    <p><?= e(SITE_NAME) ?> ©<?= date('Y') ?>. All rights reserved.</p>
    <p>
      <a href="<?= page_url('conditions.php') ?>">Terms of Use</a>
      <a href="<?= page_url('privacy.php') ?>">Privacy Policy</a>
    </p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
