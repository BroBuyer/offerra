<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ouvrez votre compte ' . SITE_NAME;
$page_description = 'Créez votre compte ' . SITE_NAME . ' ' . geo_in() . ' et commencez avec ' . money_min() . '. L’inscription prend moins d’une minute.';
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
              <h1>Ouvrez votre compte <?= e(SITE_NAME) ?></h1>
              <p>
                Remplissez le formulaire : un spécialiste vous contactera pour ouvrir votre compte. Le
                minimum pour commencer est de <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Rejoindre';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                En renseignant vos informations personnelles et en cliquant sur le bouton « Rejoindre », vous
                confirmez accepter les
                <a href="<?= page_url('conditions.php') ?>">Conditions générales</a> et la
                <a href="<?= page_url('privacy.php') ?>">Politique de confidentialité</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
