<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Atidarykite ' . SITE_NAME . ' paskyrą';
$page_description = 'Atidarykite ' . SITE_NAME . ' paskyrą ' . geo_in() . ' ir pradėkite nuo ' . money_min() . '. Registracija trunka mažiau nei minutę.';
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
              <h1>Atidarykite <?= e(SITE_NAME) ?> paskyrą</h1>
              <p>
                Užpildykite formą, ir specialistas susisieks, kad atidarytų paskyrą. 
                Minimali suma pradžiai yra <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Registruotis';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Pateikdami savo duomenis ir spustelėdami „Registruotis“
                patvirtinate, kad sutinkate su
                <a href="<?= page_url('conditions.php') ?>">taisyklėmis ir sąlygomis</a> ir
                <a href="<?= page_url('privacy.php') ?>">privatumo politika</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
