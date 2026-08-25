<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Επικοινωνία ' . SITE_NAME . ' ᐉ Είμαστε εδώ για να βοηθήσουμε';
$page_description = 'Έχετε ερώτηση για το ' . SITE_NAME . ' ή για τον λογαριασμό σας;';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Επικοινωνία</span>
    <h1>Είμαστε εδώ για να βοηθήσουμε</h1>
    <p class="kpnq92g">Έχετε ερώτηση για το <?= e(SITE_NAME) ?> ή για τον λογαριασμό σας; Η ομάδα υποστήριξης θα χαρεί να βοηθήσει. Γράψτε μας και θα απαντήσουμε το συντομότερο δυνατό.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Πριν μας γράψετε</h2>
    <p>Οι περισσότερες ερωτήσεις έχουν ήδη απάντηση στον ιστότοπο και ο έλεγχος πρώτα είναι συνήθως ταχύτερος από την αναμονή απάντησης.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Συχνές ερωτήσεις</a> — κόστη, αναλήψεις, επαλήθευση και ελάχιστα ποσά.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Πώς λειτουργεί</a> — τι συμβαίνει μετά την εγγραφή, βήμα προς βήμα.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Τιμές</a> — τι είναι δωρεάν και πού μπορεί να εμφανιστεί κόστος.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Ξεκινήστε — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Πώς να επικοινωνήσετε μαζί μας</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Κανάλι</th><th scope="col">Καλύτερο για</th><th scope="col">Απάντηση</th></tr></thead>
      <tbody>
        <tr><td>Υποστήριξη μέσω email — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Ερωτήσεις λογαριασμού, επαλήθευση, αναλήψεις</td><td>Συνήθως απαντάμε εντός μίας εργάσιμης ημέρας.</td></tr>
        <tr><td>Αίτημα επανάκλησης</td><td>Ό,τι εξηγείται ευκολότερα στο τηλέφωνο</td><td>Ώρες υποστήριξης: Δευτέρα έως Παρασκευή, 9:00–18:00</td></tr>
        <tr><td>Αναφορά κατάχρησης — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Υποκλοπή ταυτότητας, κατάχρηση επωνυμίας, ύποπτα μηνύματα</td><td>Εξετάζεται κατά την παραλαβή</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Τι να περιμένετε όταν επικοινωνήσετε</h2>
    <h3>Ποιο κανάλι να χρησιμοποιήσετε</h3>
    <p>Το email είναι η σωστή επιλογή για οτιδήποτε με συνημμένο: ελέγχους ταυτότητας, ερωτήματα ανάληψης, ερωτήσεις για κατάσταση λογαριασμού. Η φόρμα επανάκλησης είναι για όλα τα υπόλοιπα, γιατί οι περισσότερες ερωτήσεις λογαριασμού λύνονται ταχύτερα σε δύο λεπτά συνομιλίας παρά σε τέσσερα μηνύματα.</p>
    <h4>Εκτός ωρών υποστήριξης</h4>
    <p>Τα μηνύματα το βράδυ ή το σαββατοκύριακο μένουν στην ουρά και απαντώνται πρώτα την επόμενη εργάσιμη, με τη σειρά που έφτασαν.</p>
    <h3>Στοιχεία που αξίζει να συμπεριλάβετε</h3>
    <p>Το καταχωρισμένο email και η κατά προσέγγιση ημερομηνία αρκούν για να βρεθεί ο λογαριασμός. Μην στέλνετε ποτέ κωδικό, πλήρη αριθμό κάρτας ή κωδικό μίας χρήσης: κανείς από την ομάδα μας δεν θα σας τα ζητήσει ποτέ.</p>
    <h4>Αν κάτι δεν φαίνεται σωστό</h4>
    <p>Αναφέρετέ το την ίδια ημέρα. Οτιδήποτε αφορά πληρωμή που δεν αναγνωρίζετε αντιμετωπίζεται αμέσως, εκτός της συνήθους ουράς.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
