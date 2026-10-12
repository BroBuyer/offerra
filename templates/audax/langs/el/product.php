<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Προϊόν | ' . SITE_NAME . ' - Πλατφόρμα συναλλαγών AI';
$page_description = SITE_NAME . ' : προηγμένη πλατφόρμα AI για κρυπτονομισμάτα ' . geo_in() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Με το <?= e(SITE_NAME) ?> μπορείς να αξιοποιήσεις ψηφιακή ανάλυση για ισχυρή ανάπτυξη περιουσίας
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Χάρη στην κορυφαία τεχνητή νοημοσύνη και τους προηγμένους αλγόριθμους, το <?= e(SITE_NAME) ?>
              αναλύει συνεχώς τις παγκόσμιες αγορές. Η πλατφόρμα εντοπίζει έτσι γρήγορα
              τις πιο υποσχόμενες ευκαιρίες. Τώρα είναι η ώρα για ένα βήμα προς την επιτυχία με
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Ξεκίνα τώρα</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Η ολοκληρωμένη ψηφιακή πλατφόρμα συναλλαγών σου</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Πλεονέκτημα 1"
                  />
                </div>
                <h3>Διαχείριση κρυπτονομισμάτων</h3>
                <p>Διαχειρίσου εύκολα όλα τα ψηφιακά σου στοιχεία σε ένα μέρος.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="Πλεονέκτημα 2"
                  />
                </div>
                <h3>Δες πληροφορίες για όλα τα στοιχεία σου από μία πλατφόρμα και μία διεπαφή</h3>
                <p>Βελτίωσε τη διαχείριση των οικονομικών σου με σαφή εικόνα.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="Πλεονέκτημα 3"
                  />
                </div>
                <h3>Αγορές κεφαλαίου</h3>
                <p>Μείνε μπροστά από την αγορά — με δεδομένα και πληροφορίες σε πραγματικό χρόνο.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="Πλεονέκτημα 4"
                  />
                </div>
                <h3>Πρόσβαση από κινητό</h3>
                <p>
                  Το πλήρως βελτιστοποιημένο mobile site μας σου επιτρέπει να παρακολουθείς το χαρτοφυλάκιο οποτεδήποτε, οπουδήποτε.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="Πλεονέκτημα 5"
                  />
                </div>
                <h3>Ζωντανά στατιστικά</h3>
                <p>
                  Παρακολούθησε τις αποδόσεις και την ανάλυσή σου με εξαιρετική ακρίβεια, κάθε δευτερόλεπτο της
                  ημέρας.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              Κατέβασε την εφαρμογή σήμερα και διαχειρίσου τα οικονομικά σου σε πραγματικό χρόνο από το smartphone σου.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Εγγραφή</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Ανακάλυψε την κορυφαία ανάλυση AI της πλατφόρμας <?= e(SITE_NAME) ?> και τη διαισθητική
            διεπαφή συναλλαγών περιουσιακών στοιχείων <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Δυνατότητα 1" />
              </div>
              <div class="text">
                <h4>Χαρτοφυλάκιο</h4>
                <p>
                  Ενίσχυσε το οικονομικό σου προφίλ με τις δοκιμασμένες και καινοτόμες
                  στρατηγικές συναλλαγών μας.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Δυνατότητα 2" />
              </div>
              <div class="text">
                <h4>Ανάλυση crypto</h4>
                <p>
                  Αξιοποίησε τη νεότερη γενιά τεχνητής νοημοσύνης του <?= e(SITE_NAME) ?> και τους
                  προηγμένους αλγόριθμους μηχανικής μάθησης για γρήγορο εντοπισμό κερδοφόρων ευκαιριών.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Δυνατότητα 3" />
              </div>
              <div class="text">
                <h4>Εύκολη αγορά</h4>
                <p>
                  Προσφέρουμε προηγμένες δυνατότητες και υποστήριξη για απλές και διαισθητικές συναλλαγές
                  κρυπτονομισμάτων. Χωρίς κρυφές χρεώσεις, υπερταχεία εκτέλεση. Αυτή είναι η
                  ευκαιρία σου να μεγιστοποιήσεις τα κέρδη συναλλαγών με τη δύναμη του AI!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Δυνατότητα 4" />
              </div>
              <div class="text">
                <h4>Ψηφιακά περιουσιακά στοιχεία</h4>
                <p>
                  Αξιοποίησε την ευκαιρία να μεγιστοποιήσεις κέρδη από συναλλαγές περιουσιακών στοιχείων, είτε
                  κρυπτονομισμάτων είτε άλλων μέσων. Φτιάξε διαφοροποιημένο χαρτοφυλάκιο με το λογισμικό μας
                  και τους αλγόριθμους μηχανικής μάθησης. Τώρα είναι η ώρα για αυτό το βήμα και να ξεκινήσεις
                  τις συναλλαγές σου!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
