<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contatti | ' . SITE_NAME . ' - Assistenza e supporto';
$page_description = 'Contatta ' . SITE_NAME . '. Servizio clienti ' . geo_in() . '.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';
$page_css = ['kontakt-mob.min.css', 'kontakt-desk.min.css'];
$page_js = [];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap bg-or">
            <h1>
              Hai domande sull’IA di <?= e(SITE_NAME) ?> o desideri più informazioni?
            </h1>
            <address>
              <img src="<?= asset('static/images/mail-icon.svg') ?>" alt="" /><a href="mailto:support@<?= e(site_domain()) ?>"
                >support@<?= e(site_domain()) ?></a
              >
            </address>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Come possiamo aiutarti?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'UGtwg';
  $form_wrap_class = 'nUhMtLLaP newRegForm';
  $form_field_classes = ['osJgdw QrEaG', 'osJgdw QrEaG', 'osJgdw oNPrnptc', 'osJgdw dTEhz', 'osJgdw Skpcff'];
  $form_submit = 'Iscriviti';
  $form_phone_id = 'BRSfanM';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
