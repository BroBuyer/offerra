<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Συχνές ερωτήσεις | ' . SITE_NAME . ' - FAQ';
$page_description = 'Συχνές ερωτήσεις για το ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';
$page_css = ['faq-mob.min.css', 'faq-desk.min.css'];
$page_js = ['faq.min.js'];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <h1>Συχνές ερωτήσεις</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Τι είναι το <?= e(SITE_NAME) ?> και πώς λειτουργεί;</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Πολλοί ρωτούν: «Τι ακριβώς είναι το <?= e(SITE_NAME) ?>;» Είναι προηγμένη πλατφόρμα συναλλαγών
                με τεχνητή νοημοσύνη (AI). Η χρήση του AI του <?= e(SITE_NAME) ?> είναι
                απλή: κάνε εγγραφή, κατάθεσε χρήματα στον λογαριασμό σου (ελάχ. <?= e(money_min()) ?>) και η πλατφόρμα
                ξεκινά συναλλαγές. Οποτεδήποτε μπορείς να καταθέσεις περισσότερα ή να κάνεις ανάληψη.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Ποιο είναι το ελάχιστο ποσό κατάθεσης στο <?= e(SITE_NAME) ?>;</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Η ελάχιστη κατάθεση είναι <?= e(money_min()) ?>. Με αυτό το ποσό μπορείς να δοκιμάσεις την πλατφόρμα και
                να ξεκινήσεις χωρίς μεγάλο κεφάλαιο. Αν θέλεις, μπορείς ανά πάσα στιγμή να καταθέσεις επιπλέον
                ή να αναλάβεις κέρδη.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Σε ποιες αγορές συναλλάσσεται το <?= e(SITE_NAME) ?>;</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Το <?= e(SITE_NAME) ?> δραστηριοποιείται σε διάφορες χρηματοπιστωτικές αγορές, συμπεριλαμβανομένων κρυπτονομισμάτων
                (Bitcoin, Ethereum, XRP, Litecoin, Dash και άλλα), μετοχών, νομισμάτων (Forex) και
                άλλων χρηματοοικονομικών μέσων.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Είναι αξιόπιστο το <?= e(SITE_NAME) ?>;</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Το ερώτημα αν το <?= e(SITE_NAME) ?> είναι νόμιμο είναι απόλυτα δικαιολογημένο. Εμείς
                επιβεβαιώνουμε: το <?= e(SITE_NAME) ?> είναι πλήρως νόμιμη και αξιόπιστη πλατφόρμα συναλλαγών <?= e(geo_in()) ?>. Δεν
                πρόκειται για απάτη. Η ασφάλεια των κεφαλαίων των χρηστών μας είναι η κορυφαία
                προτεραιότητα και οι αναλήψεις διεκπεραιώνονται γρήγορα (εντός 24&ndash;48 ωρών).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Πώς λειτουργεί το <?= e(SITE_NAME) ?>;</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Το <?= e(SITE_NAME) ?> χρησιμοποιεί προηγμένη τεχνητή νοημοσύνη (AI) για ανάλυση αγορών σε
                πραγματικό χρόνο και εντοπισμό κερδοφόρων ευκαιριών. Πολλές θετικές εμπειρίες με το
                <?= e(SITE_NAME) ?> που θα βρεις online επιβεβαιώνουν την αποτελεσματικότητα αυτής της προσέγγισης.
                Το σύστημα διαχειρίζεται αυτόματα το κεφάλαιό σου, ώστε να μπορείς να στοχεύεις σε πιθανές αποδόσεις
                ακόμα και χωρίς βαθιά γνώση της αγοράς.
              </p>
            </article>
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
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Εγγραφή';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
