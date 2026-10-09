<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Öppna ditt ' . SITE_NAME . '-konto';
$page_description = 'Skapa ditt ' . SITE_NAME . '-konto ' . geo_in() . ' och börja med ' . money_min() . '. Registreringen tar under en minut.';
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
              <h1>Öppna ditt <?= e(SITE_NAME) ?>-konto</h1>
              <p>
                Fyll i formuläret så tar en specialist kontakt för att skapa kontot. 
                Minimum för att starta är <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Registrera dig';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                När du anger dina uppgifter och klickar på „Registrera dig“
                bekräftar du att du godkänner
                <a href="<?= page_url('conditions.php') ?>">villkoren</a> och
                <a href="<?= page_url('privacy.php') ?>">integritetspolicyn</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
