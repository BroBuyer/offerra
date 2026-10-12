<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Έξυπνες επενδύσεις με AI ' . geo_in();
$page_description = 'Αυτοματοποιημένες συναλλαγές ' . geo_in() . '. Ξεκίνα με ' . money_min() . ' με την τεχνολογία AI μας. Ασφαλές, διαφανές και απλό.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1>Πλατφόρμα <?= e(SITE_NAME) ?></h1>
              <p>
                Τι κάνει το <?= e(SITE_NAME) ?> μοναδικό; Εδώ μπορείς να επενδύεις πιο έξυπνα
                <?= e(geo_in()) ?>. Η αξιόπιστη πλατφόρμα συναλλαγών μας με AI σε βοηθά να παίρνεις τεκμηριωμένες αποφάσεις
                και να διαχειρίζεσαι τον κίνδυνο με σιγουριά. Ανακάλυψε τις δυνατότητες του AI του <?= e(SITE_NAME) ?>.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Βαθμολογία 4,7 αστέρια από πάνω από 2.804 ικανοποιημένους χρήστες</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Βαθμολογία 4,7 στα 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Εγγραφή στο <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Εγγραφή';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Με την εισαγωγή των στοιχείων σου και το κλικ στο «Εγγραφή»,
                    επιβεβαιώνεις ότι συμφωνείς με
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Πολιτική Απορρήτου</a> και
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Όρους χρήσης</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Μέθοδοι πληρωμής" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Βαθμολογία 4,7 αστέρια από πάνω από 2.804 ικανοποιημένους χρήστες</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Βαθμολογία 4,7 στα 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Υπολογιστής κέρδους">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Υπολόγισε πιθανά κέρδη</h2>
          <p class="calc-widget__subtitle">
            Διάλεξε ποσό και διάρκεια για να δεις το δυναμικό σου
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Καταθέτεις:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Διάρκεια επένδυσης:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>ημέρες</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>Από 1 ημέρα</span>
                  <span>Έως 3 μήνες</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Μπορείς να κερδίσεις</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Κερδοφορία</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Έσοδα</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Ζήτησε εξατομικευμένο υπολογισμό
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Κλείσιμο">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Άφησε τα στοιχεία επικοινωνίας σου και κάποιος ειδικός θα επικοινωνήσει μαζί σου
              το συντομότερο δυνατό.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Εγγραφή';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Η πρόσβασή σου <?= e(geo_from()) ?> στις κορυφαίες παγκόσμιες πλατφόρμες κρυπτοσυναλλαγών.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Εικονίδιο κάρτας 1" />
                </div>
                <div class="text">
                  <p>
                    Το <?= e(SITE_NAME) ?> χρησιμοποιεί προηγμένη τεχνητή νοημοσύνη και μηχανική μάθηση για να
                    εντοπίζει νέες ευκαιρίες στις χρηματοπιστωτικές αγορές.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Εικονίδιο κάρτας 2" />
                </div>
                <div class="text">
                  <p>
                    Επενδυτές σε κρυπτοπεριουσιακά στοιχεία <?= e(geo_in()) ?> αποκτούν πρόσβαση στα μεγαλύτερα χρηματιστήρια του
                    τομέα και μπορούν να συναλλάσσονται κορυφαία νομίσματα όπως Bitcoin και Ethereum, καθώς και
                    ευρύ φάσμα altcoin και stablecoin.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Οι αξιόπιστοι συνεργάτες μας</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Λογότυπο Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Λογότυπο Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Λογότυπο CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Λογότυπο TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Λογότυπο Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Λογότυπο Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Λογότυπο Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Λογότυπο Nansen" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Γιατί να επιλέξεις το <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>;</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Εικονίδιο πλεονεκτήματος 1" />
              </div>
              <div class="text">
                <h3>Ασφάλεια <?= e(geo_in()) ?></h3>
                <p>
                  Ως αξιόπιστη πλατφόρμα, δίνουμε απόλυτη προτεραιότητα στην ασφάλεια. Χρησιμοποιούμε SSL,
                  κρυπτογράφηση επιπέδου τράπεζας και 2FA, ώστε το <?= e(SITE_NAME) ?> να είναι αξιόπιστο και τα δεδομένα σου
                  να προστατεύονται.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Εικονίδιο πλεονεκτήματος 2" />
              </div>
              <div class="text">
                <h3>Ισχυροί αλγόριθμοι AI</h3>
                <p>
                  Τα προσαρμοστικά bots μας εφαρμόζουν προηγμένες στρατηγικές AI αυτόνομα. Εσύ
                  ορίζεις την προσέγγιση και κρατάς τον πλήρη έλεγχο του κινδύνου, των αγορών και των στόχων, ώστε
                  να εστιάζεις στο συνολικό πλάνο.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Εικονίδιο πλεονεκτήματος 3" />
              </div>
              <div class="text">
                <h3>Διαφανή τέλη. Χωρίς κρυφές χρεώσεις.</h3>
                <p>
                  Όλα τα τέλη μας είναι διαφανή και δεν χρεώνουμε ποτέ επενδυτές <?= e(geo_in()) ?> για τη χρήση του
                  <?= e(SITE_NAME) ?>. Τα χρήματα που καταθέτεις για συναλλαγές είναι εξ ολοκλήρου δικά σου και μπορείς να τα χρησιμοποιήσεις
                  όπως θέλεις. Δεν κρατάμε τίποτα. Ξεκίνα με μόλις <?= e(money_min()) ?> και κράτα τον πλήρη έλεγχο
                  των επενδύσεών σου.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Εικονίδιο πλεονεκτήματος 4" />
              </div>
              <div class="text">
                <h3>Διαισθητική διεπαφή χρήστη</h3>
                <p>
                  Ο διαισθητικός και απλός πίνακας ελέγχου μας συνδυάζει λειτουργικότητα, εξέλιξη και
                  ευκολία χρήσης — για αρχάριους και έμπειρους traders.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Πώς λειτουργεί το <?= e(SITE_NAME) ?>;</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Εικονίδιο λίστας 1" />
              <p>
                Το δικό μας λογισμικό παρακολουθεί ταυτόχρονα πολλές πλατφόρμες συναλλαγών και
                εντοπίζει διαφορές τιμών που μπορούν να αξιοποιηθούν.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Εικονίδιο λίστας 2" />
              <p>
                Το <?= e(SITE_NAME) ?> αγοράζει φθηνά σε μια αγορά και πουλά ακριβότερα σε άλλη,
                αξιοποιώντας ευκαιρίες arbitrage. Αυτή η προσέγγιση μπορεί να αποφέρει κέρδος
                συσσωρεύοντας αποδόσεις από μικρές μεταβολές τιμών.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Εικονίδιο λίστας 3" />
              <p>Δες πώς το <?= e(SITE_NAME) ?> μπορεί να βελτιώσει την εμπειρία συναλλαγών σου.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Κάνε εγγραφή στο <?= e(SITE_NAME) ?> — ας διαμορφώσουμε μαζί το μέλλον των χρημάτων <?= e(geo_in()) ?>!
              </h2>
              <p>
                Το <?= e(SITE_NAME) ?> προσφέρει ευρύ φάσμα εργαλείων για συναλλαγές κρυπτοπεριουσιακών στοιχείων <?= e(geo_in()) ?>. Η πλατφόρμα
                ενσωματώνει μεγάλες παγκόσμιες χρηματιστηριακές πλατφόρμες και δίνει πρόσβαση σε πολυάριθμα
                κρυπτονομίσματα — από ηγέτες όπως το Bitcoin έως άλλα όπως το XRP. Επίσης μπορείς
                να κερδίζεις από τις διακυμάνσεις τιμών.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Εγγραφή';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>Γιώργος, 37, Αθήνα</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Αξιολόγηση 1"
                />
              </div>
              <p class="review-text">
                Ξεκίνησα με <?= e(money_min()) ?> και τώρα αναλαμβάνω <?= e(currency_symbol() . '2,000') ?> κάθε μήνα!
              </p>
            </div>
            <div class="review">
              <h3>Μαρία, 42, Θεσσαλονίκη</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Αξιολόγηση 2"
                />
              </div>
              <p class="review-text">Απλή πλατφόρμα: όλα είναι διαφανή και πρακτικά.</p>
            </div>
            <div class="review">
              <h3>Νίκος, 45, Πάτρα</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Αξιολόγηση 3"
                />
              </div>
              <p class="review-text">Η καλύτερη λύση για παθητικό εισόδημα.</p>
            </div>
            <div class="review">
              <h3>Ελένη, 34, Ηράκλειο</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Αξιολόγηση 4"
                />
              </div>
              <p class="review-text">Σταθερά κέρδη, ακόμα κι όταν είμαι σε διακοπές.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Προσφορά κρυπτονομισμάτων στο <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Πλεονέκτημα 1"
                />
                <h3>Το κλειδί για κρυπτοσυναλλαγές</h3>
                <p>
                  Το σύγχρονο λογισμικό μας αποτελεί τη βάση του συστήματος συναλλαγών. Είναι
                  σχεδιασμένο να αξιοποιεί μικρές διαφορές τιμών μεταξύ μεγάλων
                  κρυπτοχρηματιστηρίων.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Πλεονέκτημα 2"
                />
                <h3>Παγκόσμιες συναλλαγές περιουσιακών στοιχείων</h3>
                <p>
                  Οι τιμές μετοχών και άλλων στοιχείων μεταβάλλονται συνεχώς· το <?= e(SITE_NAME) ?> παρέχει τα
                  εργαλεία για γρήγορη αντίδραση στις κινήσεις της αγοράς και καλύτερες πιθανότητες σταθερής
                  απόδοσης.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Πλεονέκτημα 3"
                />
                <h3>Συναλλαγές Forex</h3>
                <p>
                  Οι ισοτιμίες αλλάζουν συνεχώς και δημιουργούν ευκαιρίες. Το <?= e(SITE_NAME) ?>
                  σε βοηθά να κερδίζεις ακόμα και από τις μικρότερες κινήσεις στην αγορά συναλλάγματος.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Πλεονέκτημα 4"
                />
                <h3><?= e(SITE_NAME) ?> και Bitcoin</h3>
                <p>
                  Το Bitcoin παραμένει ηγέτης της αγοράς και το πιο ορατό, οικονομικά σταθερό
                  κρυπτονόμισμα. Αναγνωρίζοντας και αξιοποιώντας συστηματικά τη μεταβλητότητα της αγοράς,
                  το <?= e(SITE_NAME) ?> διευκολύνει πιο σταθερές αποδόσεις.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Πληροφορίες πλατφόρμας</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Απόρρητο</h3>
                  <p>Το <?= e(SITE_NAME) ?> συμμορφώνεται με την ισχύουσα νομοθεσία απορρήτου <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Περιουσιακά στοιχεία</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash και άλλα κορυφαία κρυπτονομίσματα.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Τύπος πλατφόρμας</h3>
                  <p>
                    Το <?= e(SITE_NAME) ?> προσφέρει σε επενδυτές <?= e(geo_in()) ?> την ευκαιρία να κερδίζουν από
                    τις διακυμάνσεις κορυφαίων κρυπτονομισμάτων, συμπεριλαμβανομένων altcoin όπως το XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Χώρες</h3>
                  <p>Η πλατφόρμα μας είναι διαθέσιμη παγκοσμίως, και <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Επιλογές κατάθεσης</h3>
                  <p>Πιστωτικές κάρτες, PayPal και τραπεζική μεταφορά.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Κόστη</h3>
                  <p>Η πρόσβαση στο <?= e(SITE_NAME) ?> είναι δωρεάν <?= e(geo_from()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2>Είναι αξιόπιστο το <?= e(SITE_NAME) ?>;</h2>
              <p>
                Το <?= e(SITE_NAME) ?> συνεργάζεται με πρώτης κατηγορίας brokers που είναι εξαιρετικά αξιόπιστοι και
                έμπειροι. Εφαρμόζουμε μέτρα ασφαλείας επιπέδου τράπεζας, όπως κρυπτογράφηση TLS/SSL
                και έλεγχο ταυτότητας δύο παραγόντων (2FA), για την προστασία των περιουσιακών σου στοιχείων και των δεδομένων σου. Η
                τιμολογιακή μας πολιτική είναι πλήρως διαφανής, χωρίς κρυφές χρεώσεις. Συμμορφωνόμαστε με
                την ισχύουσα νομοθεσία.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Διάγραμμα αξιοπιστίας" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Τα συστήματα τεχνητής νοημοσύνης και μηχανικής μάθησης παράγουν ανάλυση αγοράς σε πραγματικό χρόνο
                και πρακτικές πληροφορίες συναλλαγών για βελτιστοποίηση των αποτελεσμάτων σου.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Οι καλύτεροι traders είναι οι καλύτεροι για κάποιο λόγο. Με το <?= e(SITE_NAME) ?> μπορείς να ακολουθείς
                    και να αντιγράφεις τις συναλλαγές τους — να αξιοποιείς την εμπειρία και τη στρατηγική τους.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Κλασματικές μετοχές</h3>
                  <p>
                    Επεκτείνοντας το χαρτοφυλάκιό σου αποκτάς πρόσβαση σε ποιοτικά στοιχεία ακόμα και με
                    περιορισμένο κεφάλαιο.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Εκπαιδευτικό υλικό</h3>
                  <p>
                    Για να βελτιώσεις τις δεξιότητες συναλλαγών, προσφέρουμε εκπαιδευτικό υλικό: οδηγούς,
                    webinars και εγχειρίδια.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Εφαρμογή για κινητά</h3>
                  <p>Συναλλαγές οποτεδήποτε, οπουδήποτε.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Υποστήριξη 24/7</h3>
                  <p>Η εξυπηρέτηση πελατών είναι διαθέσιμη 24 ώρες το 24ωρο, 7 ημέρες την εβδομάδα.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Συναλλαγές με AI</h3>
                  <p>
                    Χάρη στους προηγμένους αλγόριθμους τεχνητής νοημοσύνης και μηχανικής μάθησης,
                    το <?= e(SITE_NAME) ?> αναλύει συνεχώς τα τελευταία δεδομένα αγοράς. Έτσι οι ευκαιρίες
                    με το μεγαλύτερο δυναμικό απόδοσης εντοπίζονται γρήγορα.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Προσαρμόσιμες στρατηγικές</h3>
                  <p>
                    Αφού ορίσεις το προφίλ κινδύνου και τους επενδυτικούς στόχους σου, μπορείς να τους χρησιμοποιήσεις για
                    να βελτιώσεις τη στρατηγική συναλλαγών σου στην πολυπεριουσιακή μας πλατφόρμα.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Πρόσβαση σε ποικίλα στοιχεία</h3>
                  <p>
                    Αν και ειδικευόμαστε σε κρυπτονομίσματα, υποστηρίζουμε επίσης συναλλαγές
                    νομισμάτων, μετοχών, άλλων τίτλων και εμπορευμάτων.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>Μπορείς να συναλλάσσεσαι από το σπίτι, να αναλύεις αγορές και να παρακολουθείς τις θέσεις σου.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Εγγραφή';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Μπορείς να συναλλάσσεσαι από το σπίτι, να αναλύεις αγορές και να παρακολουθείς τις θέσεις σου.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Εγγραφή τώρα" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
