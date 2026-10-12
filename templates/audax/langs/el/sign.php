<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Άνοιξε τον λογαριασμό σου ' . SITE_NAME;
$page_description = 'Δημιούργησε λογαριασμό ' . SITE_NAME . ' ' . geo_in() . ' και ξεκίνα με ' . money_min() . '. Η εγγραφή διαρκεί λιγότερο από ένα λεπτό.';
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
              <h1>Άνοιξε λογαριασμό <?= e(SITE_NAME) ?></h1>
              <p>
                Συμπλήρωσε τη φόρμα και ένας ειδικός θα επικοινωνήσει μαζί σου για τον λογαριασμό. Το
                ελάχιστο ποσό για να ξεκινήσεις είναι <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Εγγραφή';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Με την εισαγωγή των στοιχείων σου και το κλικ στο «Εγγραφή»,
                επιβεβαιώνεις ότι συμφωνείς με
                <a href="<?= page_url('conditions.php') ?>">Όρους και προϋποθέσεις</a> και
                <a href="<?= page_url('privacy.php') ?>">Πολιτική Απορρήτου</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
