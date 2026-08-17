<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Σχετικά με το ' . SITE_NAME . ' | Πλήρης παρουσίαση της πλατφόρμας συναλλαγών';
$page_description = 'Ανακαλύψτε την αποστολή, την τεχνολογία και τη δέσμευση για ασφαλή εμπειρία συναλλαγών στο ' . SITE_NAME . '.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Σχετικά με εμάς', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="μονοπάτι πλοήγησης"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Αρχική</a>
            <span class="breadcrumb-item">Ποιοι είμαστε</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Η ταυτότητά μας</h1>
                      <p class="lead">Πλατφόρμα, δυνατότητες και υπεύθυνες συναλλαγές.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> συνδυάζει πρόσβαση στις αγορές και εργαλεία ανάλυσης σε μία ενιαία, απλή πλατφόρμα.</p>
            <p>Εστιάζουμε σε ισχυρά μέτρα ασφάλειας και διαφανείς, εύκολα κατανοητές διαδικασίες.</p>
            <p>Λάβετε υπόψη ότι οι συναλλαγές ενέχουν κινδύνους και οι αποδόσεις δεν μπορούν να διασφαλιστούν.</p>
            <p>Το onboarding είναι απλό: δημιουργήστε λογαριασμό, επιβεβαιώστε το email, καταθέστε τουλάχιστον <?= e(money_min()) ?>, και αποκτήστε πρόσβαση στον πίνακα ελέγχου. Εναλλάξτε χειροκίνητη και υποστηριζόμενη λειτουργία, ορίστε όρια και διαχειριστείτε τον κίνδυνο σύμφωνα με το προφίλ σας.</p>            <p>Η υποστήριξη βοηθά σε ερωτήματα για λογαριασμούς, πληρωμές, αναλήψεις και λειτουργίες της πλατφόρμας. Δεν παρέχει εξατομικευμένες επενδυτικές συμβουλές. Για επείγοντα θέματα κατά τη διάρκεια ενεργών συναλλαγών, δηλώστε το email του λογαριασμού και την κατάσταση του πίνακα ελέγχου.</p>            <p>Αρχάριοι και έμπειροι επενδυτές βρίσκουν ένα σαφές περιβάλλον: οδηγούς και αρχική καθοδήγηση από τη μία, προηγμένα στοιχεία ελέγχου και παρακολούθηση απόδοσης από την άλλη. Μετράμε το <?= e(SITE_NAME) ?> με βάση την ποιότητα εμπειρίας — όχι με επιθετικό μάρκετινγκ. Πριν εγγραφείτε, διαβάστε τις Συχνές ερωτήσεις, τους όρους και την πολιτική απορρήτου: κίνδυνοι, χρόνοι ανάληψης και απαιτήσεις λογαριασμού.</p>            <p>At <?= e(SITE_NAME) ?> θα βρείτε καθοδηγούμενες ροές εργασίας, εργαλεία παρακολούθησης και λειτουργική υποστήριξη με έμφαση σε διαφανείς διαδικασίες λογαριασμού και πληρωμών, χωρίς υποσχέσεις συγκεκριμένων αποτελεσμάτων αγοράς.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Εγγραφή σήμερα</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>Πώς μπορούμε να σας βοηθήσουμε σήμερα;</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Δημιουργία λογαριασμού';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
