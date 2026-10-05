<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Open your ' . SITE_NAME . ' account';
$page_description = 'Create your ' . SITE_NAME . ' account in ' . geo_country_name() . ' and start with ' . money_min() . '. Registration takes under a minute.';
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
              <h1>Open your <?= e(SITE_NAME) ?> account</h1>
              <p>
                Fill in the form and a specialist will contact you to set up your account. The
                minimum to get started is <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Join Now';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                By entering your personal information and clicking the "Join Now" button, you
                confirm that you agree to the
                <a href="<?= page_url('conditions.php') ?>">Terms and Conditions</a> and the
                <a href="<?= page_url('privacy.php') ?>">Privacy Policy</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
