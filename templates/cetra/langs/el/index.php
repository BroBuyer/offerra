<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('ΤΝ και εκτέλεση σε πραγματικό χρόνο | Επίσημος ιστότοπος');
$page_description = SITE_NAME . ' — τεχνολογία ΤΝ που αναλύει αγορές και εκτελεί εντολές σε πραγματικό χρόνο, με προσωπικό αναλυτή δίπλα σας για τη δημιουργία νέας πηγής εισοδήματος.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Μετάβαση στο περιεχόμενο</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Κύρια">
 <a href="#platform">Προϊόν</a>
 <a href="#how">Πώς λειτουργεί.</a>
 <a href="#markets">Αγορές σε πραγματικό χρόνο</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Ανοίξτε τον λογαριασμό σας</a>
 <button class="nav-toggle" aria-label="Άνοιγμα μενού" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">ΤΝ σε πραγματικό χρόνο + ανθρώπινη ανάλυση</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — επενδύστε τώρα και δείτε το κεφάλαιό σας να αυξάνεται</h1>
 <p class="hero-sub">Μια μηχανή τεχνητής νοημοσύνης σαρώνει τις αγορές και εκτελεί εντολές σε κλάσματα δευτερολέπτου, ενώ ο προσωπικός σας αναλυτής προσαρμόζει κάθε απόφαση στο προφίλ σας. Δεν απαιτείται εμπειρία — καθοδηγείστε από την αρχή έως το τέλος.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Ρυθμιζόμενο</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Διαχωρισμένα κεφάλαια</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 πελάτες</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> αξιολόγηση</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Προστασία SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Υποστήριξη 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Γρήγορη εκτέλεση</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Ξεκινήστε τώρα — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> λεπ.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Ανοίξτε τον λογαριασμό σας</h2>
 <p class="sub">Ξεκινήστε σε λίγα λεπτά.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Θέλω να ξεκινήσω';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Βασικοί δείκτες">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Ενεργοί χρήστες</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Όγκος συναλλαγών</span></div>
 <div class="stat"><b>99,1%</b><span>Διαθεσιμότητα σημάτων</span></div>
 <div class="stat"><b>24/7</b><span>Υποστήριξη</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Μέσα <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Παρακολουθήστε τον λογαριασμό σας σε πραγματικό χρόνο</h2>
 <p class="lede">Κάθε εντολή που εκτελεί ο αναλυτής σας καταγράφεται εδώ — είσοδοι, έξοδοι και επαληθευμένα αποτελέσματα για κάθε ζεύγος, ζωντανά.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Διαγράμματα κηροπήγιου και βάθος σε πραγματικό χρόνο, σε οποιαδήποτε συσκευή</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Υποβολή εντολών με ένα πάτημα και άμεση επιβεβαίωση</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Λίστες παρακολούθησης και ειδοποιήσεις τιμών που σας ακολουθούν</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Ξεκινήστε τώρα</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — κινητό trading με διαγράμματα crypto σε πραγματικό χρόνο</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Η πλατφόρμα</span><h2 id="features-title">Όλα όσα χρειάζεστε, σε μία γρήγορη πλατφόρμα.</h2><p class="lede">Χωρίς διαγράμματα να παρακολουθείτε, χωρίς εντολές να χρονομετράτε. Η μηχανή του <?= e(SITE_NAME) ?> παρακολουθεί order books σε πραγματικό χρόνο σε ανταλλακτήρια crypto, API μετοχών παγκοσμίως και κύρια ζεύγη forex — και πυροδοτεί εντολές τη στιγμή που τα μοντέλα βρίσκουν ευνοϊκή διάταξη.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Εκτέλεση σε κλάσματα δευτερολέπτου σε κάθε συνδεδεμένη αγορά</h3><p>Το <?= e(SITE_NAME) ?> διατηρεί συνδέσεις API χαμηλής καθυστέρησης με κάθε υποστηριζόμενο ανταλλακτήριο. Όταν το μοντέλο εκπέμπει σήμα, η εντολή δρομολογείται, εκτελείται και καταγράφεται στον πίνακα ελέγχου πριν από το επόμενο tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Ενεργό 24 ώρες την ημέρα, σε όλες τις συνεδρίες</h3><p>Η αγορά crypto δεν κοιμάται ποτέ — ούτε η μηχανή του <?= e(SITE_NAME) ?>. Συνεχίζει να σαρώνει ζεύγη τα σαββατοκύριακα και τις αργίες, ώστε να μην χάσετε ποτέ ένα παράθυρο.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Αναφορές σε πολλαπλά νομίσματα</h3><p>Κάθε υπόλοιπο, κάθε εντολή, κάθε ανάληψη εμφανίζεται στο τοπικό σας νόμισμα. Κανένα κρυφό βήμα μετατροπής.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Διαχωρισμένο κεφάλαιο</h3><p>Τα κεφάλαιά σας παραμένουν στον δικό σας λογαριασμό. Το <?= e(SITE_NAME) ?> δεν έχει ποτέ φύλαξη — η μηχανή έχει μόνο άδεια δρομολόγησης εντολών.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Ασφάλεια τραπεζικού επιπέδου</h3><p>Κρυπτογράφηση TLS σε όλη την πλατφόρμα, έλεγχος ταυτότητας δύο παραγόντων από προεπιλογή και τριμηνιαίοι έλεγχοι υποδομής από τρίτους. Αποδείξεις συναλλαγών καταγεγραμμένες στο blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Τρεις κατηγορίες περιουσιακών στοιχείων, μία πλατφόρμα</h3><p>Οι περισσότερες πλατφόρμες λιανικής περιορίζονται σε μία αγορά. Το <?= e(SITE_NAME) ?> διαχειρίζεται crypto, εισηγμένες μετοχές και κύρια ζεύγη forex στον ίδιο πίνακα ελέγχου.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Προκαθορισμένα όρια κινδύνου σε κάθε θέση</h3><p>Stop-loss, μέγιστο drawdown και όρια κατανομής κεφαλαίου ρυθμίζονται ανά κατηγορία περιουσιακών στοιχείων. Η μηχανή εξέρχεται αυτόματα από κάθε συναλλαγή που υπερβαίνει όριο και το συμβάν καταγράφεται στο ιστορικό ελέγχου.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Αγορές σε πραγματικό χρόνο</span>
 <h2 id="markets-title">Συναλλαγές σε Bitcoin, Ethereum και άλλα</h2>
 <p class="lede">Τιμές σε πραγματικό χρόνο, προηγμένοι δείκτες και επαγγελματική εικόνα των αγορών που σας ενδιαφέρουν.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Θέλω πρόσβαση στις αγορές</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Αγορές</span><span class="mkt-live"><i></i>Ζωντανά</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Πώς λειτουργεί</span><h2 id="how-title">Πώς λειτουργεί.</h2><p class="lede">Τεχνολογία αιχμής και πραγματικός ανθρώπινος αναλυτής, που συνεργάζονται σε πραγματικό χρόνο, για να σας βοηθήσουν να χτίσετε νέα πηγή εισοδήματος — με καθοδήγηση σε κάθε βήμα.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Δημιουργήστε τον λογαριασμό σας</h3><p>Εγγραφείτε σε λίγα λεπτά μόνο με το e-mail σας.</p></div>
 <div class="step"><div class="n">2</div><h3>Επιβεβαιώστε το e-mail</h3><p>Επαληθεύστε τη διεύθυνση για προστασία του λογαριασμού.</p></div>
 <div class="step"><div class="n">3</div><h3>Καταθέστε στον λογαριασμό σας</h3><p>Προσθέστε κεφάλαια από <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> με τον τρόπο σας.</p></div>
 <div class="step"><div class="n">4</div><h3>Ορίστε τη στρατηγική σας</h3><p>Επιλέξτε στόχους· ο αναλυτής εξατομικεύει το σχέδιο.</p></div>
 <div class="step"><div class="n">5</div><h3>Ξεκινήστε συναλλαγές</h3><p>Ακολουθήστε καθοδηγούμενα σήματα και αναπτυχθείτε με τον δικό σας ρυθμό.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Καταθέσεις</span><h2 id="payment-title">Καταθέστε με μεθόδους που ήδη γνωρίζετε</h2><p class="lede">Καταθέστε και αναλάβετε μέσω ασφαλών, οικείων καναλιών — χωρίς κρυφές χρεώσεις.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Τραπεζική μεταφορά</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Τι λένε τα μέλη</span><h2 id="reviews-title">Τι λένε οι επενδυτές μας</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>«Ο αναλυτής μου μου εξήγησε τα πάντα καθαρά. Όρισα τους στόχους μου μία φορά και τώρα βλέπω ακριβώς πώς αυξάνεται το κεφάλαιό μου — χωρίς άγχος σε κάθε κίνηση.»</p><div class="who"><div class="ini">Ε</div><div><b>Ελένη Παπαδοπούλου</b><span>Αθήνα</span></div></div></div>
 <div class="card"><p>«Δεν είχα επενδύσει ποτέ πριν — ο αναλυτής μου ανέλαβε τη στρατηγική και εξήγησε κάθε βήμα. Χωρίς κενές υποσχέσεις, χωρίς πίεση, και οι αναλήψεις έρχονται όπως αναμένεται.»</p><div class="who"><div class="ini">Γ</div><div><b>Γιώργος Νικολάου</b><span>Θεσσαλονίκη</span></div></div></div>
 <div class="card"><p>«Ξεκίνησα με λίγα για δοκιμή. Η διαφάνεια και η υποστήριξη μου έδωσαν σιγουριά να συνεχίσω.»</p><div class="who"><div class="ini">Μ</div><div><b>Μαρία Γεωργίου</b><span>Πάτρα</span></div></div></div>
 <div class="card"><p>«Οι αναλύσεις έρχονται σε μένα — εγκρίνω ή προσαρμόζω σε λεπτά. Ταιριάζει τέλεια στην καθημερινότητά μου χωρίς να εμποδίζει τη δουλειά.»</p><div class="who"><div class="ini">Ν</div><div><b>Νίκος Δημητρίου</b><span>Ηράκλειο</span></div></div></div>
 <div class="card"><p>«Με έπεισε η διαφάνεια: κάθε απόφαση εξηγείται και βλέπω το σκεπτικό πριν συμβεί οτιδήποτε.»</p><div class="who"><div class="ini">Σ</div><div><b>Σοφία Ιωάννου</b><span>Λάρισα</span></div></div></div>
 <div class="card"><p>«Η υποστήριξη είναι πραγματική και πάντα διαθέσιμη. Η πρώτη μου ανάλυση ήταν πρακτική και η πλατφόρμα παραμένει σταθερή και προβλέψιμη έκτοτε.»</p><div class="who"><div class="ini">Α</div><div><b>Ανδρέας Παπαδάκης</b><span>Βόλος</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Πλατφόρμα</span><h2 id="capabilities-title">Κύρια χαρακτηριστικά, συνοπτικά</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Μηχανή ΤΝ</div>
 <div class="spec-v">Προηγμένη ανάλυση αγοράς με μηχανική μάθηση</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Μέθοδοι κατάθεσης</div>
 <div class="spec-v">Πιστωτική κάρτα, τραπεζική μεταφορά, PayPal, ψηφιακά πορτοφόλια</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Πρόσβαση σε πολλαπλές πλατφόρμες</div>
 <div class="spec-v">Web, tablet και κινητό — πλήρως responsive</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Ακρίβεια σημάτων</div>
 <div class="spec-v">Έως 85% στις υποστηριζόμενες στρατηγικές ΤΝ</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Αγορές</div>
 <div class="spec-v">Κρυπτονομίσματα, forex, μετοχές και εμπορεύματα</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Εγγραφή</div>
 <div class="spec-v">Γρήγορο άνοιγμα λογαριασμού με καθοδηγούμενη επαλήθευση</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Υποστήριξη</div>
 <div class="spec-v">Επαγγελματική υποστήριξη όλο το εικοσιτετράωρο — <a href="<?= page_url('contacts.php') ?>">Αποστολή μηνύματος</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Ερωτήσεις</span><h2 id="faq-title">Συχνές ερωτήσεις.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Ποια είναι η ελάχιστη κατάθεση;</summary><p>Ανοίξτε και χρηματοδοτήστε τον λογαριασμό από την ελάχιστη κατάθεση. Μπορείτε να προσθέτετε υπόλοιπο με την πάροδο του χρόνου καθώς προχωρά το σχέδιό σας.</p></details>
 <details><summary>Πώς λειτουργούν οι αναλήψεις;</summary><p>Ζητήστε ανάληψη οποιαδήποτε στιγμή από τον πίνακα ελέγχου. Τα κεφάλαια επιστρέφουν στη μέθοδο πληρωμής που επιλέξατε, τηρώντας τους τυπικούς χρόνους επεξεργασίας.</p></details>
 <details><summary>Είναι ασφαλή τα χρήματά μου;</summary><p>Οι λογαριασμοί προστατεύονται με ασφάλεια βιομηχανικού προτύπου και αυστηρή επαλήθευση. Όπως σε κάθε επένδυση, το κεφάλαιό σας διατρέχει κίνδυνο και οι αξίες μπορεί να πέσουν ή να ανέβουν.</p></details>
 <details><summary>Πόσο γρήγορα μπορώ να ξεκινήσω;</summary><p>Τα περισσότερα μέλη ολοκληρώνουν την εγγραφή σε λίγα λεπτά. Μόλις επιβεβαιωθεί η πρώτη κατάθεση, ενεργοποιείται αμέσως ένα σχέδιο.</p></details>
 <details><summary>Υπάρχουν κρυφές χρεώσεις;</summary><p>Τα κόστη εμφανίζονται με διαφάνεια πριν δεσμευτείτε. Ξέρετε πάντα ακριβώς τι ισχύει για το σχέδιό σας — χωρίς εκπλήξεις.</p></details>
 <details><summary>Ποια είναι η ελάχιστη ηλικία εγγραφής;</summary><p>Πρέπει να είστε τουλάχιστον 18 ετών για να ανοίξετε λογαριασμό και να επενδύσετε. Μπορεί να απαιτηθεί επαλήθευση για επιβεβαίωση ηλικίας και ταυτότητας.</p></details>
 <details><summary>Ποιες μέθοδοι πληρωμής υποστηρίζονται;</summary><p>Συνηθισμένες μέθοδοι όπως χρεωστικές και πιστωτικές κάρτες, τραπεζική μεταφορά, επιλεγμένα e-wallets και κρυπτονομίσματα υποστηρίζονται. Οι ακριβείς επιλογές εμφανίζονται στο βήμα κατάθεσης.</p></details>
 <details><summary>Πότε είναι διαθέσιμη η υποστήριξη πελατών;</summary><p>Η ομάδα υποστήριξής μας λειτουργεί Δευτέρα έως Παρασκευή, 9π.μ.–6μ.μ., και δεσμεύεται να απαντά σε κάθε αίτημα εντός μίας εργάσιμης ημέρας.</p></details>
 <details><summary>Πώς αντιμετωπίζονται οι φόροι;</summary><p>Οι φόροι επί επενδυτικών κερδών εξαρτώνται από τους κανόνες της χώρας σας και αποτελούν ευθύνη σας. Συνιστούμε τήρηση αρχείων και συμβουλή εξειδικευμένου φορολογικού συμβούλου.</p></details>
 <details><summary>Τι είναι το KYC και γιατί είναι υποχρεωτικό;</summary><p>Το KYC (Know Your Customer) είναι τυπικός έλεγχος ταυτότητας. Διατηρεί τους λογαριασμούς ασφαλείς και αποτελεί μέρος του ανοίγματος κάθε επενδυτικού λογαριασμού.</p></details>
 <details><summary>Χρειάζομαι εμπειρία;</summary><p>Όχι. Κάθε μέλος λαμβάνει προσωπικό χρηματοοικονομικό αναλυτή που καθοδηγεί σε κάθε βήμα, οπότε δεν απαιτείται προηγούμενη γνώση αγορών.</p></details>
 <details><summary>Ποιος διαχειρίζεται τις επενδύσεις μου;</summary><p>Αφοσιωμένος χρηματοοικονομικός αναλυτής, υποστηριζόμενος από εργαλεία ΤΝ, που εργάζεται γύρω από τους στόχους και το επίπεδο κινδύνου σας. Ο αναλυτής συνδυάζει επαγγελματική τεχνογνωσία με τεχνολογία — οι αποφάσεις παραμένουν ανθρώπινες.</p></details>
 <details><summary>Είναι ρυθμιζόμενη η πλατφόρμα;</summary><p>Ναι — πληροί εθνικά χρηματοοικονομικά πρότυπα και πρότυπα κυβερνοασφάλειας, με προστασία λογαριασμού και αυστηρή επαλήθευση ενσωματωμένες.</p></details>
 <details><summary>Μπορώ να προσθέσω κεφάλαια αργότερα;</summary><p>Ναι. Μπορείτε να χρηματοδοτείτε τον λογαριασμό οποιαδήποτε στιγμή και να προσαρμόζετε το σχέδιο με τον αναλυτή καθώς εξελίσσονται οι στόχοι σας.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">ΑΞΙΟΠΙΣΤΟ</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Κριτικές</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> κριτικές · Βάσει <b style="color:var(--text,#fff)">2.334</b> αξιολογήσεων</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Ξεκινήστε τώρα</span>
 <h2 id="signup-title" class="cta-h">Ανοίξτε τον λογαριασμό σας.</h2>
 <p class="lede">Πείτε μας πώς να σας προσεγγίσουμε και ένας ειδικός θα βοηθήσει στο πρώτο βήμα.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Ανοίξτε τον λογαριασμό σας</h3>
 <p class="sub">Ξεκινήστε σε λίγα λεπτά.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Θέλω να ξεκινήσω';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>Ταχύτητα ΤΝ, ανθρώπινη απόφαση. Το κεφάλαιο διατρέχει κίνδυνο — επενδύστε υπεύθυνα.</p>
 </div>
 <div><h4>Προϊόν</h4><div class="foot-links">
 <a href="#platform">Παρακολουθήστε τον λογαριασμό σας σε πραγματικό χρόνο</a><a href="#markets">Αγορές σε πραγματικό χρόνο</a><a href="#how">Πώς λειτουργεί.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Εταιρεία</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Σχετικά</a><a href="<?= page_url('offer.php') ?>">Τιμές</a><a href="<?= page_url('contacts.php') ?>">Επικοινωνία</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Απόρρητο</a><a href="<?= page_url('conditions.php') ?>">Όροι</a><a href="<?= page_url('conditions.php') ?>">Αποκάλυψη κινδύνων</a><a href="<?= page_url('contacts.php') ?>">Αναφορά κατάχρησης</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Με την επιφύλαξη παντός δικαιώματος. Η επένδυση ενέχει κίνδυνο, συμπεριλαμβανομένης πιθανής απώλειας κεφαλαίου. · Η επένδυση ενέχει κίνδυνο, συμπεριλαμβανομένης πιθανής απώλειας μέρους ή όλου του επενδυμένου κεφαλαίου. Η αξία των επενδύσεων μπορεί να αυξηθεί ή να μειωθεί και μπορεί να λάβετε πίσω λιγότερα από όσα τοποθετήσατε αρχικά. Μην επενδύετε χρήματα που δεν μπορείτε να αντέξετε να χάσετε.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('el-GR',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' €';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Παρακαλώ περιμένετε\u2026";
 var MSG_ERR = "\u0394\u03b5\u03bd \u03ae\u03c4\u03b1\u03bd \u03b4\u03c5\u03bd\u03b1\u03c4\u03ae \u03b7 \u03b1\u03c0\u03bf\u03c3\u03c4\u03bf\u03bb\u03ae \u03c4\u03c9\u03bd \u03c3\u03c4\u03bf\u03b9\u03c7\u03b5\u03af\u03c9\u03bd \u03c3\u03b1\u03c2 \u03c4\u03ce\u03c1\u03b1. \u0394\u03bf\u03ba\u03b9\u03bc\u03ac\u03c3\u03c4\u03b5 \u03be\u03b1\u03bd\u03ac.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'gr',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Χρησιμοποιούμε cookies για να βελτιώσουμε την εμπειρία σας.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Κατάλαβα</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
