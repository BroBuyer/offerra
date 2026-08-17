<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Τιμές ' . SITE_NAME;
$page_description = 'Απλές, διαφανείς τιμές — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Απλές, διαφανείς τιμές.</h1>
    <p class="kpnq92g">Η έναρξη με το <?= e(SITE_NAME) ?> είναι δωρεάν. Δεν υπάρχουν κρυφές χρεώσεις για άνοιγμα λογαριασμού και καταθέτετε μόνο ό,τι επιλέγετε να επενδύσετε: η πλατφόρμα και τα εργαλεία περιλαμβάνονται.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Πού μπορεί να εμφανιστούν κόστη</h2>
    <p>Αυτά είναι τα μόνα σημεία όπου χρήματα φεύγουν από το υπόλοιπό σας για κάτι άλλο εκτός από επένδυση που έχετε επιλέξει.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Στοιχείο</th><th scope="col">Χρεώνει</th><th scope="col">Σημείωση</th></tr></thead>
      <tbody>
        <tr><td>Άνοιγμα λογαριασμού</td><td>—</td><td>Δωρεάν.</td></tr>
        <tr><td>Πρόσβαση στην πλατφόρμα</td><td>—</td><td>Περιλαμβάνεται, χωρίς συνδρομή.</td></tr>
        <tr><td>Spread αγοράς</td><td>Broker</td><td>Η συνήθης διαφορά μεταξύ τιμής αγοράς και πώλησης.</td></tr>
        <tr><td>Τέλος δικτύου / τράπεζας</td><td>Πάροχος πληρωμών</td><td>Εξαρτάται από τη μέθοδο που επιλέγετε.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Το κεφάλαιο ενέχει κίνδυνο. Επενδύστε μόνο ό,τι μπορείτε να αντέξετε να χάσετε.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Ανοίξτε λογαριασμό</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Τι περιλαμβάνεται</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Δωρεάν δημιουργία λογαριασμού: χωρίς τέλη εγγραφής ή άδειας.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Χωρίς κρυφές χρεώσεις σε καταθέσεις, αναλήψεις ή τήρηση λογαριασμού.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Μπορεί να ισχύουν μόνο τα τυπικά spread του broker ή κόστη δικτύου.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ξεκινήστε από την ελάχιστη κατάθεση και κλιμακώστε με τον δικό σας ρυθμό.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Πώς φαίνονται τα νούμερα στην πράξη</h2>
    <h3>Η πρώτη κατάθεση, βήμα προς βήμα</h3>
    <p>Η πρώτη κατάθεση είναι ολόκληρη η εικόνα κόστους σε ένα σημείο: το ποσό που στέλνετε, το spread κατά τη μετατροπή και τίποτα άλλο μέχρι να αποφασίσετε να συναλλαγείτε. Δεν υπάρχει μηνιαίο τέλος λογαριασμού ούτε χρέωση επειδή αφήνετε το υπόλοιπο ως έχει.</p>
    <h4>Τι συμβαίνει την ίδια ημέρα</h4>
    <p>Το υπόλοιπο εμφανίζεται μόλις εκκαθαριστεί η πληρωμή και ένας ειδικός σας καθοδηγεί στο πλάνο πριν ανοίξει οτιδήποτε. Τίποτα δεν τοποθετείται αυτόματα για λογαριασμό σας.</p>
    <h3>Αναλήψεις και τι κοστίζουν</h3>
    <p>Οι αναλήψεις επιστρέφουν στη μέθοδο πληρωμής από την οποία ήρθαν τα χρήματα: αυτό είναι απαίτηση, όχι προτίμηση, ώστε ο λογαριασμός να παραμένει δικός σας. Η επεξεργασία είναι δωρεάν από την πλευρά μας· η μόνη κράτηση που μπορεί να δείτε είναι αυτή της δικής σας τράπεζας ή εκδότη κάρτας.</p>
    <h4>Χρόνοι με τους οποίους μπορείτε να προγραμματίσετε</h4>
    <p>Αιτήματα σε εργάσιμη ημέρα εξετάζονται την ίδια ημέρα. Οι επιστροφές σε κάρτα συνήθως εκκαθαρίζονται σε τρεις έως πέντε εργάσιμες ημέρες, οι τραπεζικές μεταφορές σε δύο.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
