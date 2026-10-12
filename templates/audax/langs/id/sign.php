<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Buka akun ' . SITE_NAME . ' kamu';
$page_description = 'Buat akun ' . SITE_NAME . ' kamu ' . geo_in() . ' dan mulai dengan ' . money_min() . '. Pendaftaran kurang dari satu menit.';
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
              <h1>Buka akun <?= e(SITE_NAME) ?> kamu</h1>
              <p>
                Isi formulir dan spesialis akan menghubungi kamu untuk siapkan akun kamu. 
                Minimum untuk mulai adalah <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Daftar';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Dengan memasukkan informasi pribadi kamu dan mengklik tombol "Daftar", kamu
                mengonfirmasi bahwa kamu setuju dengan
                <a href="<?= page_url('conditions.php') ?>">Syarat Penggunaan</a> dan
                <a href="<?= page_url('privacy.php') ?>">Kebijakan Privasi</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
