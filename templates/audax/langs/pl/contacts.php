<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kontakt | ' . SITE_NAME . ' - Wsparcie i pomoc';
$page_description = 'Kontakt z ' . SITE_NAME . '. Obsługa klienta ' . geo_in() . '.';
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
              Masz pytania o <?= e(SITE_NAME) ?> AI albo chcesz wiedzieć więcej?
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
              <h2>Jak możemy Ci pomóc?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'UGtwg';
  $form_wrap_class = 'nUhMtLLaP newRegForm';
  $form_field_classes = ['osJgdw QrEaG', 'osJgdw QrEaG', 'osJgdw oNPrnptc', 'osJgdw dTEhz', 'osJgdw Skpcff'];
  $form_submit = 'Zarejestruj się';
  $form_phone_id = 'BRSfanM';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
