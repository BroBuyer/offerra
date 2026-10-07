<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Nyisd meg a ' . SITE_NAME . ' számládat';
$page_description = 'Nyiss ' . SITE_NAME . ' számlát ' . geo_in() . ', és kezdj ' . money_min() . ' összeggel. A regisztráció kevesebb mint egy perc.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$page_css = [];
$page_js = [];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h1>Nyisd meg a <?= e(SITE_NAME) ?> számládat</h1>
              <p>
                Töltsd ki az űrlapot, és szakértőnk felveszi a kapcsolatot a számla megnyitásához. 
                A kezdéshez legalább <?= e(money_min()) ?> kell.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Regisztráció';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Az adatok megadásával és a „Regisztráció” gombra kattintással
                elfogadod az
                <a href="<?= page_url('conditions.php') ?>">általános szerződési feltételeket</a> és az
                <a href="<?= page_url('privacy.php') ?>">adatvédelmi tájékoztatót</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
