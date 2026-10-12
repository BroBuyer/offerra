<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Επικοινωνία | ' . SITE_NAME . ' - Υποστήριξη και βοήθεια';
$page_description = 'Επικοινωνία με ' . SITE_NAME . '. Εξυπηρέτηση πελατών ' . geo_in() . '.';
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
              Έχεις ερωτήσεις για το AI του <?= e(SITE_NAME) ?> ή θέλεις περισσότερες πληροφορίες;
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
              <h2>Πώς μπορούμε να σε βοηθήσουμε;</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'UGtwg';
  $form_wrap_class = 'nUhMtLLaP newRegForm';
  $form_field_classes = ['osJgdw QrEaG', 'osJgdw QrEaG', 'osJgdw oNPrnptc', 'osJgdw dTEhz', 'osJgdw Skpcff'];
  $form_submit = 'Εγγραφή';
  $form_phone_id = 'BRSfanM';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
