<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Otvori račun ' . SITE_NAME;
$page_description = 'Otvori račun ' . SITE_NAME . ' ' . geo_in() . ' i počni s ' . money_min() . '. Registracija traje manje od minute.';
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
              <h1>Otvori račun <?= e(SITE_NAME) ?></h1>
              <p>
                Ispuni obrazac i stručnjak će se javiti da otvori račun. 
                Minimum za početak je <?= e(money_min()) ?>.
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
                Unosom podataka i klikom na „Registracija“
                potvrđuješ da prihvaćaš
                <a href="<?= page_url('conditions.php') ?>">opće uvjete poslovanja</a> i
                <a href="<?= page_url('privacy.php') ?>">pravila privatnosti</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
