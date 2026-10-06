<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Abre tu cuenta ' . SITE_NAME;
$page_description = 'Crea tu cuenta ' . SITE_NAME . ' ' . geo_in() . ' y empieza con ' . money_min() . '. El registro lleva menos de un minuto.';
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
              <h1>Abre tu cuenta <?= e(SITE_NAME) ?></h1>
              <p>
                Rellena el formulario: un especialista te contactará para abrir la cuenta. El
                mínimo para empezar es de <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Únete';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Al introducir tus datos personales y pulsar el botón «Únete»,
                confirmas que aceptas los
                <a href="<?= page_url('conditions.php') ?>">Términos y condiciones</a> y la
                <a href="<?= page_url('privacy.php') ?>">Política de privacidad</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
