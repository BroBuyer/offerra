<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Eröffnen Sie Ihr ' . SITE_NAME . '-Konto';
$page_description = 'Eröffnen Sie Ihr ' . SITE_NAME . '-Konto ' . geo_in() . ' und starten Sie mit ' . money_min() . '. Die Registrierung dauert unter einer Minute.';
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
              <h1>Eröffnen Sie Ihr <?= e(SITE_NAME) ?>-Konto</h1>
              <p>
                Füllen Sie das Formular aus: ein Spezialist kontaktiert Sie zur Kontoeröffnung. Das
                Minimum zum Start beträgt <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Jetzt registrieren';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Mit der Eingabe Ihrer Daten und dem Klick auf «Jetzt registrieren»
                bestätigen Sie, dass Sie den
                <a href="<?= page_url('conditions.php') ?>">Allgemeinen Geschäftsbedingungen</a> und der
                <a href="<?= page_url('privacy.php') ?>">Datenschutzerklärung</a> zustimmen.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
