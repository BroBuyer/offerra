<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Deschide un cont ' . SITE_NAME;
$page_description = 'Deschide un cont ' . SITE_NAME . ' ' . geo_in() . ' și începe cu ' . money_min() . '. Înregistrarea durează mai puțin de un minut.';
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
              <h1>Deschide un cont <?= e(SITE_NAME) ?></h1>
              <p>
                Completează formularul și un specialist te va contacta ca să deschidă contul. 
                Minimul pentru start este <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Înregistrare';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Completând datele și apăsând „Înregistrare“
                confirmi că accepți
                <a href="<?= page_url('conditions.php') ?>">termenii și condițiile</a> și
                <a href="<?= page_url('privacy.php') ?>">politica de confidențialitate</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
