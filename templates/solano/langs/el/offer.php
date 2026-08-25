<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Γιατί εμείς ' . SITE_NAME;
$page_description = 'Γιατί οι άνθρωποι ξεκινούν με το ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Γιατί αυτή η πλατφόρμα</span>
    <h1>Γιατί οι άνθρωποι ξεκινούν εδώ</h1>
    <p class="kpnq92g">Όχι πωλητική παρουσίαση: συγκεκριμένοι, επαληθεύσιμοι λόγοι — και όσα δεν ταιριάζουν σε όλους.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Χωρίς υπολογιστικά φύλλα. Χωρίς γεμάτες οθόνες. Χωρίς αμφιβολίες της τελευταίας στιγμής</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Πλατφόρμα</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Παραδοσιακός broker</th><th scope="col">Συναλλαγές μόνοι σας</th></tr></thead>
      <tbody>
        <tr><td>Εκτέλεση εντολών με τεχνητή νοημοσύνη</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">περιορισμένο ωράριο</td><td style="color:var(--muted)">χειροκίνητα</td></tr>
        <tr><td>Κάλυψη 24/7 σε όλες τις αγορές</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">γραφειοκρατία</td><td style="color:var(--muted)">Μόνοι σας</td></tr>
        <tr><td>Δρομολόγηση εντολών κάτω από ένα δευτερόλεπτο</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">μόνο ανά επίπεδο</td><td style="color:var(--muted)">χειροκίνητα</td></tr>
        <tr><td>Αναφορές σε πολλά νομίσματα</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">περιορισμένο ωράριο</td><td style="color:var(--muted)">Μόνοι σας</td></tr>
        <tr><td>Άνοιγμα λογαριασμού χωρίς χαρτιά</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">γραφειοκρατία</td><td style="color:var(--muted)">χειροκίνητα</td></tr>
        <tr><td>Αρμπιτράζ μεταξύ χρηματιστηρίων</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">μόνο ανά επίπεδο</td><td style="color:var(--muted)">Μόνοι σας</td></tr>
        <tr><td>Αποκλειστικός προσωπικός διαχειριστής</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">περιορισμένο ωράριο</td><td style="color:var(--muted)">χειροκίνητα</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Τι αποκτάτε που μια ρύθμιση «μόνοι σας» δεν δίνει</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Εκτέλεση κάτω από ένα δευτερόλεπτο σε κάθε συνδεδεμένη αγορά.</b> <?= e(SITE_NAME) ?> διατηρεί μόνιμες συνδέσεις API χαμηλής καθυστέρησης με κάθε υποστηριζόμενο χρηματιστήριο. Όταν το μοντέλο παράγει σήμα, η εντολή αποστέλλεται, εκτελείται και καταγράφεται στον πίνακα ελέγχου πριν από το επόμενο tick.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Λειτουργεί 24/7, σε κάθε συνεδρία αγοράς.</b> Τα κρυπτονομίσματα δεν ξεκουράζονται, ούτε το <?= e(SITE_NAME) ?>. Η μηχανή συνεχίζει να αναλύει ζεύγη τα σαββατοκύριακα και τις αργίες, ώστε να μην χάνεται ευκαιρία.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Αναφορές σε πολλά νομίσματα.</b> Κάθε υπόλοιπο, κάθε συναλλαγή και κάθε ανάληψη εμφανίζεται στο τοπικό σας νόμισμα. Χωρίς κρυφά βήματα μετατροπής σε κανένα σημείο.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Διαχωρισμένο κεφάλαιο.</b> Τα κεφάλαιά σας παραμένουν στον δικό σας λογαριασμό. <?= e(SITE_NAME) ?> δεν τα κρατά ποτέ: η μηχανή έχει μόνο άδεια αποστολής εντολών.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Ασφάλεια επιπέδου τράπεζας.</b> Κρυπτογράφηση TLS σε όλη την πλατφόρμα, επαλήθευση δύο βημάτων από προεπιλογή και τριμηνιαίοι έλεγχοι υποδομής από τρίτους. Αποδείξεις συναλλαγών καταγεγραμμένες on-chain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Τρεις κατηγορίες περιουσιακών στοιχείων, μία πλατφόρμα.</b> Οι περισσότερες πλατφόρμες λιανικής σας περιορίζουν σε μία αγορά. <?= e(SITE_NAME) ?> πραγματοποιεί συναλλαγές σε κρυπτονομίσματα, εισηγμένες μετοχές και τα κύρια ζεύγη νομισμάτων από τον ίδιο πίνακα ελέγχου.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Προκαθορισμένα όρια κινδύνου σε κάθε θέση.</b> Το stop-loss, η μέγιστη αποδεκτή ζημία και τα ανώτατα όρια κατανομής κεφαλαίου ρυθμίζονται ανά κατηγορία περιουσιακών στοιχείων. Η μηχανή κλείνει αυτόματα κάθε συναλλαγή που υπερβαίνει ένα όριο και το συμβάν καταγράφεται στο ιστορικό ελέγχου σας.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Για ποιον πιθανώς δεν είναι</h2>
    <p>Η ευθύτητα εξοικονομεί χρόνο. Αν σας περιγράφει κάτι από τα παρακάτω, μια άλλη διαδρομή θα σας ταιριάζει καλύτερα.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Θέλετε εγγυημένες αποδόσεις. Καμία έντιμη πλατφόρμα δεν τις προσφέρει, ούτε εμείς.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Θέλετε να επενδύσετε χρήματα χωρίς τα οποία δεν μπορείτε.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Συναλλάσσεστε σε επαγγελματικό όγκο με δική σας υποδομή εκτέλεσης.</span></li>
    </ul>
    <p class="jkkyl">Η επένδυση ενέχει κίνδυνο, συμπεριλαμβανομένης της πιθανής απώλειας μέρους ή του συνόλου του κεφαλαίου. Η αξία των επενδύσεων μπορεί να μειωθεί ή να αυξηθεί και ενδέχεται να λάβετε πίσω λιγότερα από όσα καταθέσατε αρχικά. Δεν πρέπει να επενδύετε χρήματα που δεν μπορείτε να αντέξετε να χάσετε.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Ξεκινήστε — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
