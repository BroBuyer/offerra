<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Åbn din ' . SITE_NAME . '-konto';
$page_description = 'Opret din ' . SITE_NAME . '-konto ' . geo_in() . ' og start med ' . money_min() . '. Tilmeldingen tager under et minut.';
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
              <h1>Åbn din <?= e(SITE_NAME) ?>-konto</h1>
              <p>
                Udfyld formularen, så tager en specialist kontakt for at oprette kontoen. 
                Minimum for at starte er <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Tilmeld dig';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Når du indtaster dine oplysninger og klikker på „Tilmeld dig“,
                bekræfter du, at du accepterer
                <a href="<?= page_url('conditions.php') ?>">vilkårene og betingelserne</a> og
                <a href="<?= page_url('privacy.php') ?>">privatlivspolitikken</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
