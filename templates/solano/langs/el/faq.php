<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Συχνές ερωτήσεις ' . SITE_NAME;
$page_description = 'Ερωτήσεις, με απαντήσεις — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Ερωτήσεις</span>
    <h1>Ερωτήσεις, με σαφείς απαντήσεις</h1>
    <p class="kpnq92g">Τι ρωτούν οι άνθρωποι πριν ανοίξουν λογαριασμό — και οι απαντήσεις που θα σας δίναμε και στο τηλέφωνο.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Ερωτήσεις για τα χρήματα</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Είναι το <?= e(SITE_NAME) ?> απάτη;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Όχι: το <?= e(SITE_NAME) ?> λειτουργεί με ελέγχους επαλήθευσης, δημοσιεύει πλήρως τους όρους και τη γνωστοποίηση κινδύνων και οι αναλήψεις επιστρέφουν πάντα στην αρχική μέθοδο πληρωμής. Κάθε επένδυση όμως ενέχει πραγματικό κίνδυνο και καμία σοβαρή πλατφόρμα δεν υπόσχεται εγγυημένες αποδόσεις — να είστε επιφυλακτικοί με όποιον το κάνει.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Πόσο κοστίζει το άνοιγμα λογαριασμού;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Το άνοιγμα λογαριασμού είναι δωρεάν. Χωρίς τέλος εγγραφής και χωρίς συνδρομή· καταθέτετε μόνο το ποσό που επιλέγετε να επενδύσετε.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Πόσο διαρκούν οι αναλήψεις;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Τα αιτήματα επεξεργάζονται τις εργάσιμες ημέρες και επιστρέφονται στη μέθοδο κατάθεσης. Οι τραπεζικές μεταφορές διαρκούν περισσότερο από τις κάρτες ή τα ηλεκτρονικά πορτοφόλια.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Υπάρχει ελάχιστο ποσό;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ναι, και είναι σκόπιμα χαμηλό, από <?= e(money_min()) ?>, ώστε να ξεκινήσετε με μικρό ποσό και να προσθέσετε αργότερα. Το ακριβές ποσό εμφανίζεται πριν επιβεβαιώσετε οτιδήποτε.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Συχνές ερωτήσεις</h2>
    <div class="fjl4d">
      <details open><summary>Ποια είναι η ελάχιστη κατάθεση για να ξεκινήσετε;</summary><p>Μπορείτε να ανοίξετε και να χρηματοδοτήσετε τον λογαριασμό σας από <?= e(money_min()) ?> τουλάχιστον. Μπορείτε να προσθέσετε περισσότερα κεφάλαια καθώς προχωρά το επενδυτικό σας πλάνο.</p></details>
      <details><summary>Πώς λειτουργούν οι αναλήψεις;</summary><p>Ζητήστε ανάληψη οποιαδήποτε στιγμή από τον πίνακα ελέγχου. Τα κεφάλαια επιστρέφουν στη μέθοδο πληρωμής που επιλέξατε, με τους συνήθεις χρόνους επεξεργασίας.</p></details>
      <details><summary>Τα χρήματά μου φυλάσσονται με ασφάλεια;</summary><p>Οι λογαριασμοί προστατεύονται με ασφάλεια επαγγελματικού επιπέδου και ελέγχους ταυτότητας. Όπως σε κάθε επένδυση, το κεφάλαιό σας ενέχει κίνδυνο και οι αξίες μπορεί να μειωθούν ή να αυξηθούν.</p></details>
      <details><summary>Πόσος χρόνος χρειάζεται για να ξεκινήσετε να επενδύετε;</summary><p>Τα περισσότερα μέλη ολοκληρώνουν την εγγραφή σε λίγα λεπτά. Μόλις επεξεργαστεί η πρώτη κατάθεση, μπορείτε να ενεργοποιήσετε πλάνο αμέσως.</p></details>
      <details><summary>Υπάρχουν κρυφές χρεώσεις;</summary><p>Όλα τα κόστη εμφανίζονται με διαφάνεια πριν δεσμευτείτε. Βλέπετε πάντα τι ισχύει για το πλάνο σας, χωρίς εκπλήξεις.</p></details>
      <details><summary>Ποια είναι η ελάχιστη ηλικία για εγγραφή;</summary><p>Πρέπει να είστε τουλάχιστον 18 ετών για να ανοίξετε λογαριασμό και να επενδύσετε. Ενδέχεται να ζητηθεί επαλήθευση για επιβεβαίωση ηλικίας και ταυτότητας.</p></details>
      <details><summary>Ποιες μέθοδοι πληρωμής γίνονται δεκτές;</summary><p>Γίνονται δεκτές συνήθεις μέθοδοι όπως χρεωστικές και πιστωτικές κάρτες, τραπεζικές μεταφορές, επιλεγμένα ηλεκτρονικά πορτοφόλια και κρυπτονομίσματα. Οι ακριβείς επιλογές εμφανίζονται στο βήμα της κατάθεσης.</p></details>
      <details><summary>Πότε είναι διαθέσιμη η υποστήριξη πελατών;</summary><p>Η ομάδα υποστήριξης είναι διαθέσιμη Δευτέρα έως Παρασκευή, 9:00–18:00, και δεσμεύεται να απαντά σε κάθε ερώτημα εντός μίας εργάσιμης ημέρας.</p></details>
      <details><summary>Πώς αντιμετωπίζονται οι φόροι επί των κερδών;</summary><p>Οι φόροι επί των επενδυτικών κερδών εξαρτώνται από τους κανόνες της χώρας σας και αποτελούν δική σας ευθύνη. Συνιστούμε να τηρείτε δικά σας αρχεία και να απευθύνεστε σε εξειδικευμένο φορολογικό σύμβουλο.</p></details>
      <details><summary>Τι είναι η επαλήθευση KYC και γιατί απαιτείται;</summary><p>Το KYC (Know Your Customer) είναι τυπικός έλεγχος ταυτότητας. Βοηθά στην ασφάλεια των λογαριασμών και αποτελεί συνήθη μέρος του ανοίγματος επενδυτικού λογαριασμού.</p></details>
      <details><summary>Χρειάζομαι προηγούμενη επενδυτική εμπειρία;</summary><p>Όχι. Κάθε μέλος έχει προσωπικό χρηματοοικονομικό αναλυτή που σας καθοδηγεί σε κάθε βήμα, επομένως δεν χρειάζεστε προηγούμενη γνώση των αγορών.</p></details>
      <details><summary>Ποιος διαχειρίζεται τις επενδύσεις μου;</summary><p>Αποκλειστικός χρηματοοικονομικός αναλυτής, με εργαλεία τεχνητής νοημοσύνης, σύμφωνα με τους στόχους και το επίπεδο κινδύνου σας. Συνδυάζει επαγγελματική τεχνογνωσία με την τεχνολογία — οι αποφάσεις παραμένουν ανθρώπινες.</p></details>
      <details><summary>Πληροί η πλατφόρμα τα κανονιστικά πρότυπα;</summary><p>Ναι — πληροί τα εθνικά χρηματοοικονομικά πρότυπα και τα πρότυπα κυβερνοασφάλειας, με ενσωματωμένη προστασία λογαριασμού και επαλήθευση.</p></details>
      <details><summary>Μπορώ να προσθέσω περισσότερα κεφάλαια αργότερα;</summary><p>Ναι. Μπορείτε να ενισχύσετε τον λογαριασμό ανά πάσα στιγμή και να προσαρμόσετε το πλάνο με τον αναλυτή σας καθώς αλλάζουν οι στόχοι.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Λογαριασμός και ασφάλεια</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Πώς λειτουργεί η σύνδεση στο <?= e(SITE_NAME) ?>;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Συνδέεστε με το καταχωρισμένο email και τον κωδικό από τον ιστότοπο ή από φυλλομετρητή κινητού. Αν έχετε ενεργοποιήσει επαλήθευση δύο βημάτων, θα σας ζητηθεί επιπλέον κωδικός· αν ξεχάσετε τον κωδικό, μπορείτε να τον επαναφέρετε από την ίδια την οθόνη σύνδεσης.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Γιατί χρειάζεστε τα έγγραφα ταυτότητάς μου;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Η επαλήθευση απαιτείται πριν ένας λογαριασμός μπορέσει να μετακινήσει κεφάλαια. Επίσης εμποδίζει κάποιον άλλο να ανοίξει λογαριασμό στο όνομά σας.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Χρειάζομαι προηγούμενη εμπειρία;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Όχι. Τα περισσότερα μέλη ξεκινούν χωρίς εμπειρία. Ένας ειδικός σας καθοδηγεί στα πρώτα βήματα και ένα υπόλοιπο επίδειξης σας επιτρέπει να εξασκηθείτε.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Μπορώ να το χρησιμοποιήσω σε τηλέφωνο;</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ναι, η πλατφόρμα λειτουργεί σε φυλλομετρητή κινητού χωρίς εγκατάσταση.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Ξεκινήστε — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Αποστολή μηνύματος</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
