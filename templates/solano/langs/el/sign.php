<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Εγγραφή ' . SITE_NAME;
$page_description = 'Ανοίξτε λογαριασμό στο ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Ξεκινήστε τώρα</span>
    <h1>Ανοίξτε λογαριασμό</h1>
    <p class="kpnq92g">Λίγα στοιχεία για αρχή και στη συνέχεια αναλαμβάνει ένας ειδικός. Σε αυτό το βήμα δεν λαμβάνεται πληρωμή.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Τι ακολουθεί</h2>
    <ol class="nxlk2qu">
      <li><h3>Στέλνετε τη φόρμα</h3><p>Διαρκεί λίγα λεπτά και δεν κοστίζει τίποτα.</p></li>
      <li><h3>Ένας ειδικός σας καλεί</h3><p>Επιβεβαιώνουν τα στοιχεία σας, απαντούν σε ερωτήσεις και εξηγούν το επόμενο βήμα. Χωρίς πίεση για κατάθεση.</p></li>
      <li><h3>Επαληθεύετε και επιλέγετε ποσό</h3><p>Μόνο τότε μετακινούνται χρήματα, και μόνο το ποσό που επιλέγετε.</p></li>
    </ol>
    <p class="jkkyl">Η επένδυση ενέχει κίνδυνο, συμπεριλαμβανομένης της πιθανής απώλειας μέρους ή του συνόλου του κεφαλαίου. Η αξία των επενδύσεων μπορεί να μειωθεί ή να αυξηθεί και ενδέχεται να λάβετε πίσω λιγότερα από όσα καταθέσατε αρχικά. Δεν πρέπει να επενδύετε χρήματα που δεν μπορείτε να αντέξετε να χάσετε.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Ξεκινήστε — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Συχνές ερωτήσεις</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Τι θα χρειαστείτε</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Μια διεύθυνση email που όντως διαβάζετε.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Έναν αριθμό τηλεφώνου, ώστε να σας βρει ένας ειδικός.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ένα έγγραφο ταυτότητας, για το βήμα επαλήθευσης αργότερα.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Τι συμβαίνει μετά την αποστολή της φόρμας</h2>
    <h3>Η κλήση επαλήθευσης</h3>
    <p>Ένας ειδικός καλεί για να επιβεβαιώσει τα στοιχεία που υποβάλατε, να απαντήσει σε ερωτήσεις και να συμφωνήσει ποιο είναι ένα λογικό αρχικό ποσό για εσάς. Η κλήση είναι συνομιλία, όχι σενάριο πωλήσεων: ένας λογαριασμός που ανοίγει με μη ρεαλιστικές προσδοκίες δεν ωφελεί κανέναν.</p>
    <h4>Πόσο διαρκεί</h4>
    <p>Συνήθως μία κλήση δέκα έως δεκαπέντε λεπτών. Αν προτιμάτε να σας καλέσουν σε συγκεκριμένη ώρα, αναφέρετέ το στη φόρμα και η ώρα τηρείται.</p>
    <h3>Οι έλεγχοι ταυτότητας εξηγούνται</h3>
    <p>Πριν από την πρώτη κατάθεση θα σας ζητηθεί ταυτότητα με φωτογραφία και πρόσφατο έγγραφο που δείχνει τη διεύθυνσή σας. Είναι η ίδια απαίτηση κάθε ρυθμιζόμενης χρηματοοικονομικής υπηρεσίας — ώστε η ανάληψη να επιστρέφει μόνο σε εσάς.</p>
    <h4>Τι γίνεται δεκτό</h4>
    <p>Διαβατήριο ή δελτίο ταυτότητας και λογαριασμός κοινής ωφέλειας ή κίνηση λογαριασμού των τελευταίων τριών μηνών. Αρκεί καθαρή φωτογραφία από το τηλέφωνο.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Ανοίξτε λογαριασμό</h2>
      <p class="pt6joj">Ξεκινήστε σε λίγα λεπτά.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Ξεκινήστε τώρα';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
