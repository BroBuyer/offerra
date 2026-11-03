<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title(t('meta_title_home'));
$page_description = t('meta_desc_home');
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<header class="ra-header">
  <div class="ra-shell ra-header__inner">
    <a class="ra-brand" href="<?= page_url() ?>"><?= e(SITE_NAME) ?></a>
    <a class="btn btn-cta ra-header__cta" href="#signup"><?= te('cta_start') ?></a>
  </div>
</header>

<main>
  <section class="ra-hero" id="signup">
    <div class="ra-shell ra-hero__grid">
      <div class="ra-hero__copy">
        <h1>
          <span class="ra-hero__line"><?= te('hero_line1') ?></span>
          <span class="ra-hero__accent"><?= te('hero_line2') ?></span>
        </h1>
        <figure class="ra-hero__media">
          <img
            src="<?= asset('static/img/hero/post.png') ?>"
            alt="<?= te('hero_img_alt') ?>"
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
          $form_heading = t('form_heading_access');
          $form_submit = t('cta_start');
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="ra-steps" aria-label="<?= te('steps_aria') ?>">
    <div class="ra-shell ra-steps__grid">
      <article class="ra-step">
        <img src="<?= asset('static/img/features/keycap-1.webp') ?>" alt="" width="64" height="64" />
        <div>
          <p class="ra-step__label"><?= te('step1_label') ?></p>
          <p><?= th('step1_text') ?></p>
        </div>
      </article>
      <article class="ra-step">
        <img src="<?= asset('static/img/features/keycap-2.webp') ?>" alt="" width="64" height="64" />
        <div>
          <p class="ra-step__label"><?= te('step2_label') ?></p>
          <p><?= th('step2_text') ?></p>
        </div>
      </article>
    </div>
  </section>

  <section class="ra-why" id="why">
    <div class="ra-shell">
      <h2><?= te('why_title') ?></h2>
      <div class="ra-why__grid">
        <article class="ra-feature">
          <img src="<?= asset('static/img/features/chart.png') ?>" alt="" width="72" height="72" />
          <h3><?= te('feat1_title') ?></h3>
          <p><?= te('feat1_text') ?></p>
        </article>
        <article class="ra-feature">
          <img src="<?= asset('static/img/features/robot.png') ?>" alt="" width="72" height="72" />
          <h3><?= te('feat2_title') ?></h3>
          <p><?= te('feat2_text') ?></p>
        </article>
        <article class="ra-feature">
          <img src="<?= asset('static/img/features/user-with-laptop.png') ?>" alt="" width="72" height="72" />
          <h3><?= te('feat3_title') ?></h3>
          <p><?= te('feat3_text') ?></p>
        </article>
      </div>
    </div>
  </section>

  <section class="ra-devices" id="devices">
    <div class="ra-shell ra-devices__grid">
      <div class="ra-devices__copy">
        <h2><?= te('devices_title') ?></h2>
        <a class="btn btn-cta" href="#signup-bottom"><?= te('cta_start') ?></a>
      </div>
      <figure class="ra-devices__media">
        <img
          src="<?= asset('static/img/devices/macbook.png') ?>"
          alt="<?= te('devices_img_alt') ?>"
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
      <h2><?= te('reviews_title') ?></h2>
      <div class="ra-reviews__grid">
        <article class="ra-review">
          <img src="<?= asset('static/img/avatars/user-001.png') ?>" alt="" width="64" height="64" />
          <h3>John Smith</h3>
          <p class="ra-review__meta">London, UK</p>
          <p><?= te('review1_text') ?></p>
        </article>
        <article class="ra-review">
          <img src="<?= asset('static/img/avatars/user-002.png') ?>" alt="" width="64" height="64" />
          <h3>James Brown</h3>
          <p class="ra-review__meta">Toronto, Canada</p>
          <p><?= te('review2_text') ?></p>
        </article>
        <article class="ra-review">
          <img src="<?= asset('static/img/avatars/user-003.png') ?>" alt="" width="64" height="64" />
          <h3>Sarah Johnson</h3>
          <p class="ra-review__meta">Sydney, Australia</p>
          <p><?= te('review3_text') ?></p>
        </article>
      </div>
    </div>
  </section>

  <section class="ra-bottom-cta" id="signup-bottom">
    <div class="ra-shell ra-bottom-cta__inner">
      <div class="ra-card ra-card--wide">
        <?php
        $form_id = 'bottom-form';
        $form_heading = t('form_heading_habits');
        $form_submit = t('cta_start');
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<footer class="ra-footer">
  <div class="ra-shell ra-footer__inner">
    <p><?= e(SITE_NAME) ?> ©<?= date('Y') ?>. <?= te('footer_rights') ?></p>
    <p>
      <a href="<?= page_url('conditions.php') ?>"><?= te('link_terms') ?></a>
      <a href="<?= page_url('privacy.php') ?>"><?= te('link_privacy') ?></a>
    </p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
