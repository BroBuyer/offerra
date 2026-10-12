<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' hesabını aç';
$page_description = SITE_NAME . ' hesabını ' . geo_in() . ' oluştur ve ' . money_min() . ' ile başla. Kayıt bir dakikadan kısa sürer.';
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
              <h1><?= e(SITE_NAME) ?> hesabını aç</h1>
              <p>
                Formu doldur, bir uzman hesabını kurmak için seninle iletişime geçsin. 
                Başlamak için minimum tutar <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Hemen kayıt ol';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Bilgilerini girip «Hemen kayıt ol» düğmesine tıkladığında
                kabul ettiğini onaylarsın:
                <a href="<?= page_url('conditions.php') ?>">şartlar ve koşullar</a> ile
                <a href="<?= page_url('privacy.php') ?>">Gizlilik Politikası</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
