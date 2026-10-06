<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Abre a tua conta ' . SITE_NAME;
$page_description = 'Cria a tua conta ' . SITE_NAME . ' ' . geo_in() . ' e começa com ' . money_min() . '. O registo leva menos de um minuto.';
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
              <h1>Abre a tua conta <?= e(SITE_NAME) ?></h1>
              <p>
                Preenche o formulário: um especialista contacta-te para abrir a conta. O
                mínimo para começares é de <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Junta-te';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Ao introduzires os teus dados pessoais e clicares no botão «Junta-te»,
                confirmas que aceitas os
                <a href="<?= page_url('conditions.php') ?>">Termos e condições</a> e a
                <a href="<?= page_url('privacy.php') ?>">Política de privacidade</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
