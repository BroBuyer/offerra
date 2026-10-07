<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Otevřete účet ' . SITE_NAME;
$page_description = 'Otevřete účet ' . SITE_NAME . ' ' . geo_in() . ' a začněte s ' . money_min() . '. Registrace trvá méně než minutu.';
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
              <h1>Otevřete účet <?= e(SITE_NAME) ?></h1>
              <p>
                Vyplňte formulář a specialista se spojí, aby účet otevřel. 
                Minimum pro začátek je <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Registrovat se';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Vyplněním údajů a kliknutím na „Registrovat se“
                potvrzujete, že souhlasíte s
                <a href="<?= page_url('conditions.php') ?>">obchodními podmínkami</a> a
                <a href="<?= page_url('privacy.php') ?>">zásadami ochrany osobních údajů</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
