<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Åpne ' . SITE_NAME . '-kontoen din';
$page_description = 'Åpne ' . SITE_NAME . '-kontoen din ' . geo_in() . ' og start med ' . money_min() . '. Registrering tar under ett minutt.';
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
              <h1>Åpne <?= e(SITE_NAME) ?>-kontoen din</h1>
              <p>
                Fyll ut skjemaet, så tar en spesialist kontakt for å åpne kontoen. 
                Minimum for å starte er <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Registrer deg';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Ved å fylle inn opplysningene dine og klikke på «Registrer deg»,
                bekrefter du at du godtar
                <a href="<?= page_url('conditions.php') ?>">vilkårene og betingelsene</a> og
                <a href="<?= page_url('privacy.php') ?>">personvernerklæringen</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
