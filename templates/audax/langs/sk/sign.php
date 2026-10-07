<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Otvorte účet ' . SITE_NAME;
$page_description = 'Otvorte účet ' . SITE_NAME . ' ' . geo_in() . ' a začnite s ' . money_min() . '. Registrácia trvá menej ako minútu.';
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
              <h1>Otvorte účet <?= e(SITE_NAME) ?></h1>
              <p>
                Vyplňte formulár a špecialista sa spojí, aby účet otvoril. 
                Minimum na začiatok je <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Registrovať sa';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Vyplnením údajov a kliknutím na „Registrovať sa“
                potvrdzujete, že súhlasíte s
                <a href="<?= page_url('conditions.php') ?>">obchodnými podmienkami</a> a
                <a href="<?= page_url('privacy.php') ?>">zásadami ochrany osobných údajov</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
