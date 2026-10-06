<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Open je ' . SITE_NAME . '-account';
$page_description = 'Open je ' . SITE_NAME . '-account ' . geo_in() . ' en start met ' . money_min() . '. Registreren duurt minder dan een minuut.';
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
              <h1>Open je <?= e(SITE_NAME) ?>-account</h1>
              <p>
                Vul het formulier in: een specialist neemt contact op om je account te openen. Het
                minimum om te starten is <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Meld je aan';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Door je gegevens in te vullen en op «Meld je aan» te klikken,
                bevestig je dat je akkoord gaat met de
                <a href="<?= page_url('conditions.php') ?>">Algemene voorwaarden</a> en het
                <a href="<?= page_url('privacy.php') ?>">Privacybeleid</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
