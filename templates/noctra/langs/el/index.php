<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Πλατφόρμα συναλλαγών AI');
$page_description = 'Συναλλάξτε crypto και άλλες αγορές στο ' . SITE_NAME . ' — ασφαλής λογαριασμός, ξεκάθαρες τιμές, χρήσιμα εργαλεία AI και γρήγορη εκτέλεση εντολών.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Spreads</strong> από 0,1</span>
      <span class="tape-item"><strong>Ταχύτητα</strong> κάτω από 40 ms</span>
      <span class="tape-item"><strong>Αγορές</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Πλατφόρμα συναλλαγών με AI</div>
        <h1>Συναλλάξτε crypto και άλλες αγορές.<br><span class="text-accent">Ξεκινήστε με <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Απλή πλατφόρμα για crypto και multi-asset συναλλαγές — ισχυρή ασφάλεια, ξεκάθαρες τιμές,
          χρήσιμες πληροφορίες AI και διεπαφή εύκολη στην παρακολούθηση.
        </p>
        <div class="hero-badges" aria-label="Κύρια σημεία πλατφόρμας">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Ασφαλής κρυπτογραφημένη σύνδεση (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Υποστήριξη πελατών 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Γρήγορη εκτέλεση εντολών
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Ξεκινήστε σήμερα — ελάχ. κατάθεση <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Δημιουργία λογαριασμού</span>
          <span class="live-pill">Ασφαλές</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Εγγραφή σε λιγότερο από 2 λεπτά';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Ζωντανές αγορές</p>
        <h2>Δείτε τιμές σε πραγματικό χρόνο. Ξεκινήστε όταν είστε έτοιμοι.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Παρακολουθήστε Bitcoin, Ethereum και άλλα βασικά ζεύγη σε ξεκάθαρο πάνελ —
          ανοίξτε λογαριασμό και κάντε την πρώτη σας συναλλαγή.
        </p>
        <a href="sign.php" class="btn btn-primary">Άνοιγμα πρόσβασης στην αγορά</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Ζωντανές τιμές αγοράς">
        <div class="exchange-panel-header">
          <span>Αγορές</span>
          <span class="live-dot">Live</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="Προεπισκόπηση πλατφόρμας συναλλαγών">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Πλατφόρμα</p>
        <h2>Ξεκάθαρα γραφήματα.<br>Έτοιμοι για συναλλαγές.</h2>
        <p class="lead">
          Οθόνη συναλλαγών για κινητό με ζωντανά γραφήματα, κέρδη &amp; ζημίες
          και απλές εντολές με ένα πάτημα — εύκολη από την πρώτη σύνδεση.
        </p>
        <ul class="platform-points">
          <li>Ζωντανά γραφήματα και τιμές αγοράς</li>
          <li>Υπόλοιπο χαρτοφυλακίου με μια ματιά</li>
          <li>Ασφαλές πάνελ λογαριασμού με 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Ανοίξτε την πλατφόρμα</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Χαρακτηριστικά</p>
        <h2>Τι παίρνετε με <?= e(SITE_NAME) ?></h2>
        <p class="lead">Ασφάλεια, ταχύτητα και ξεκάθαρα εργαλεία — χωρίς γεμάτη οθόνη.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Ισχυρή ασφάλεια λογαριασμού</h3>
            <p>Κρυπτογράφηση SSL, σύνδεση 2FA και προστατευμένες ροές κεφαλαίων κρατούν χρήματα και δεδομένα πιο ασφαλή.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Πληροφορίες αγοράς AI</h3>
            <p>Χρήσιμα σήματα για χρόνο και τάσεις — χρήσιμα όταν οι τιμές κινούνται γρήγορα.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Αυτοματισμός όταν τον θέλετε</h3>
            <p>Προαιρετικά bots ακολουθούν τους κανόνες σας όλο το 24ωρο — εσείς κρατάτε τον έλεγχο.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Πολλές αγορές σε ένα μέρος</h3>
            <p>Crypto, forex, μετοχές και εμπορεύματα από μία απλή πλατφόρμα.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Γρήγορη διαχείριση εντολών</h3>
            <p>Για αξιόπιστη τοποθέτηση εντολών ακόμα και σε πολυσύχναστες αγορές.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Καθαρή, απλή διάταξη</h3>
            <p>Λιγότερος οπτικός θόρυβος — περισσότερος χώρος για το γράφημα και την επόμενη εντολή.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Ξεκινώντας</p>
        <h2>Πέντε βήματα στην πρώτη σας συναλλαγή</h2>
        <p class="lead">Ξεκάθαρη διαδρομή από εγγραφή σε ζωντανές αγορές.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Ανοίξτε λογαριασμό</h3>
            <p>Υποβάλετε τα στοιχεία σας και αποκτήστε ασφαλή πρόσβαση.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Επιβεβαίωση email</h3>
            <p>Επαληθεύστε τη διεύθυνσή σας για πλήρες περιβάλλον συναλλαγών.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Προσθήκη κεφαλαίου</h3>
            <p>Κατάθεση από <?= MIN_DEPOSIT ?> <?= CURRENCY ?> με κάρτα, τραπεζική μεταφορά ή ηλεκτρονικό πορτοφολί.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Επιλέξτε πώς συναλλάζετε</h3>
            <p>Χειροκίνητα ή με εργαλεία AI και όρια που ορίζετε εσείς.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Live συναλλαγές</h3>
            <p>Χρησιμοποιήστε γραφήματα, εργαλεία και υποστήριξη 24/7 όταν χρειάζεστε βοήθεια.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Ξεκινήστε τώρα</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Πληρωμές</p>
      <h2 style="margin-bottom: 0.75rem;">Κατάθεση με μεθόδους που ήδη γνωρίζετε</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Κάρτες, πορτοφολιά και τραπεζικές μεταφορές — κρυπτογράφηση end to end.</p>
      <?php
      $payment_context = 'χρηματοδότηση λογαριασμού και καταθέσεις';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Υποδομή</p>
        <h2>Συνεργάτες υποδομής</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Κριτικές</p>
        <h2>Τι λένε οι traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Η εγγραφή ήταν γρήγορη, τα τέλη ξεκάθαρα και η υποστήριξη απάντησε. Πλατφόρμα που μπορώ να μείνω.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Ανεξάρτητος trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Δοκίμασα crypto εδώ μετά από άλλες εφαρμογές — η ρύθμιση ήταν ξεκάθαρη και τα γραφήματα έχουν νόημα.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Crypto-trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Οι εντολές περνούν αξιόπιστα, οι όροι απλοί και η ομάδα γνωρίζει το προϊόν. Σταθερή πλατφόρμα.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader ψηφιακών περιουσιακών στοιχείων</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Ως αρχάριος χρειαζόμουν ξεκάθαρη εξήγηση. Εγγραφή, τέλη και βοήθεια — αυτό αρκούσε.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Ιδιώτης επενδυτής</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Πριν χρηματοδοτήσετε τον λογαριασμό σας</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς ξεκινώ;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Δημιουργήστε λογαριασμό, ολοκληρώστε σύντομη επαλήθευση και καταθέστε από <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Έτσι ξεκλειδώνετε γραφήματα, εργαλεία και καθοδηγούμενη εκκίνηση.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πώς προστατεύονται χρήματα και δεδομένα μου;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Χρησιμοποιούμε SSL, 2FA και αξιόπιστους παρόχους πληρωμών με αυστηρές πολιτικές δεδομένων.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Πόσο διαρκούν οι αναλήψεις;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ζητήστε ανάληψη ανά πάσα στιγμή. Οι περισσότερες μέθοδοι σε 1–3 εργάσιμες ημέρες με τέλη εκ των προτέρων.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Χρειάζομαι προηγούμενη εμπειρία;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Όχι. Καθοδηγούμενα βήματα και εργαλεία AI σας βοηθούν με τον ρυθμό σας, με υποστήριξη 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ποιες αγορές είναι διαθέσιμες;
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Κρυπτονομίσματα, forex, μετοχές και εμπορεύματα — χειροκίνητα ή αυτοματοποιημένα — από μία διεπαφή.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Επισκόπηση</p>
        <h2>Η πλατφόρμα με μια ματιά</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Εργαλεία AI</div>
          <div class="specs-value">Ανάλυση αγοράς με machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Χρηματοδότηση</div>
          <div class="specs-value">Κάρτες, τραπεζικές μεταφορές, PayPal, ηλεκτρονικά πορτοφολιά</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Συσκευές</div>
          <div class="specs-value">Web, tablet, κινητό — πλήρως responsive</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Ποιότητα σημάτων AI</div>
          <div class="specs-value">Έως 85% σε υποστηριζόμενες στρατηγικές*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Αγορές</div>
          <div class="specs-value">Crypto, forex, μετοχές, εμπορεύματα</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Γρήγορη ρύθμιση με καθοδηγούμενη επαλήθευση</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Υποστήριξη</div>
          <div class="specs-value">Υποστήριξη 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Επικοινωνήστε μαζί μας</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Βαθμολογία</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> πίνακας βαθμολογίας</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> κριτικές · Με βάση <strong>1,842</strong> βαθμολογίες
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Έτοιμοι για πιο ξεκάθαρες συναλλαγές;</h2>
        <p class="lead">Γίνετε μέλος traders που θέλουν ζωντανές αγορές, ξεκάθαρα τέλη και εύχρηστη πλατφόρμα.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Άνοιγμα λογαριασμού</span>
          <span class="live-pill">Δωρεάν</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Δημιουργήστε δωρεάν λογαριασμό';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
