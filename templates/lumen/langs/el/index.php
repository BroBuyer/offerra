<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Πλατφόρμα επενδύσεων με ΤΝ');
$page_description = 'Μια απλή επενδυτική πλατφόρμα με τεχνητή νοημοσύνη — καθαρές αγορές, καθοδηγούμενες αποφάσεις και γρήγορο άνοιγμα λογαριασμού στο ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Εισαγωγή">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Επενδύστε με σαφήνεια.<br><span class="text-accent">Αφήστε το AI να το κρατά απλό.</span></h1>
        <p class="lead">
          Μια σύγχρονη επενδυτική πλατφόρμα που εξηγεί τις αγορές με απλή γλώσσα, αναδεικνύει χρήσιμες πληροφορίες ΤΝ και σας βοηθά να τοποθετείτε εντολές χωρίς περιττό θόρυβο.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Ξεκινήστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Δείτε πώς λειτουργεί</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Φτιαγμένη για αρχάριους</p>
        <h2>Τρία βήματα. Μετά διαπραγματεύεστε.</h2>
        <p class="lead">Χωρίς jargon τερματικού — μια καθαρή διαδρομή από την εγγραφή στην πρώτη θέση.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Ανοίξτε τον λογαριασμό σας</h3>
          <p>Μοιραστείτε λίγα στοιχεία. Η επαλήθευση είναι σύντομη και καθοδηγούμενη.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Χρηματοδοτήστε με ασφάλεια</h3>
          <p>Καταθέστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?> με αξιόπιστες μεθόδους πληρωμής.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Διαπραγματευτείτε με βοήθεια ΤΝ</h3>
          <p>Ακολουθήστε πληροφορίες σε απλή γλώσσα και τοποθετήστε εντολές όταν είστε έτοιμοι.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">ΤΝ που πραγματικά βοηθά</p>
        <h2>Σήματα που καταλαβαίνετε πραγματικά</h2>
        <p class="lead">
          Το <?= e(SITE_NAME) ?> μετατρέπει τον θόρυβο της αγοράς σε σύντομα, ευανάγνωστα μηνύματα — λιγότερες εικασίες, περισσότερες αποφάσεις.
        </p>
        <ul class="feature-list">
          <li>Καθαρά σήματα αγορά / διατήρηση / παρακολούθηση</li>
          <li>Υπενθυμίσεις κινδύνου πριν την επιβεβαίωση</li>
          <li>Διεπαφή που παραμένει ήρεμη υπό πίεση</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Δοκιμάστε την πλατφόρμα</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Παράδειγμα πληροφορίας">
        <p class="insight-panel__label">Ζωντανή πληροφορία</p>
        <p class="insight-panel__title">BTC / USD · σταθερή ορμή</p>
        <p class="insight-panel__body">
          Η μεταβλητότητα υποχωρεί. Η ΤΝ προτείνει να παρακολουθήσετε την επόμενη συνεδρία πριν αυξήσετε το μέγεθος — εσείς ελέγχετε κάθε εντολή.
        </p>
        <div class="insight-panel__meta">
          <span>Υψηλή εμπιστοσύνη</span>
          <span>Ενημερώθηκε μόλις τώρα</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Ξεκινήστε</p>
        <h2>Δημιουργήστε τον λογαριασμό <?= e(SITE_NAME) ?> σας</h2>
        <p class="lead lead-light">
          Γίνετε μέλος μιας πλατφόρμας με premium αίσθηση που παραμένει απλή — καθοδήγηση ΤΝ από την πρώτη μέρα.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Άνοιγμα σε λιγότερο από 2 λεπτά';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Αξιόπιστες υποδομές</p>
        <h2>Συνεργάτες υποδομής</h2>
        <p class="lead">Πληρωμές και πρόσβαση στις αγορές μέσω καθιερωμένων παρόχων.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Συχνές ερωτήσεις</p>
        <h2>Γρήγορες απαντήσεις</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Χρειάζομαι εμπειρία συναλλαγών;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Όχι. Το <?= e(SITE_NAME) ?> είναι φτιαγμένο για αρχάριους επενδυτές — οι συμβουλές ΤΝ είναι σε απλή γλώσσα.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ποια είναι η ελάχιστη κατάθεση;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Μπορείτε να ξεκινήσετε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Τα τέλη παραμένουν ορατά πριν την επιβεβαίωση.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Υπάρχει διαθέσιμη υποστήριξη;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ναι — η ομάδα μας είναι διαθέσιμη όλο το εικοσιτετράωρο για χρηματοδοτήσεις και ρύθμιση λογαριασμού.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Διαβάστε τις πλήρεις Συχνές ερωτήσεις →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
