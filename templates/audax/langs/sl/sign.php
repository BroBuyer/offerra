<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Odpri račun ' . SITE_NAME;
$page_description = 'Odpri račun ' . SITE_NAME . ' ' . geo_in() . ' in začni z ' . money_min() . '. Registracija traja manj kot minuto.';
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
              <h1>Odpri račun <?= e(SITE_NAME) ?></h1>
              <p>
                Izpolni obrazec in specialist se oglasi, da odpre račun. 
                Minimum za začetek je <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Registracija';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Z vnosom podatkov in klikom na „Registracija“
                potrjuješ, da sprejemaš
                <a href="<?= page_url('conditions.php') ?>">pogoje in določila</a> ter
                <a href="<?= page_url('privacy.php') ?>">politiko zasebnosti</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
