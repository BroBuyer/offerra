<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Προσφορά | ' . SITE_NAME . ' - Ξεκίνα το ταξίδι σου';
$page_description = 'Ξεκίνα συναλλαγές στο ' . SITE_NAME . '. Κάνε εγγραφή δωρεάν τώρα.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
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
              Δημιούργησε σήμερα λογαριασμό στο <?= e(SITE_NAME) ?>. Ο προσωπικός πίνακας χαρτοφυλακίου σου είναι
              έτοιμος!
            </h1>
            <p>
              Σε λιγότερο από 5 λεπτά μπορείς να δημιουργήσεις δωρεάν λογαριασμό, να καταθέσεις και να ξεκινήσεις
              συναλλαγές. Ξεκίνα σήμερα: εδώ είναι η ευκαιρία σου να χτίσεις σταθερό οικονομικό μέλλον.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Εγγραφή</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Πώς λειτουργεί</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Εικονίδιο δημιουργίας λογαριασμού" />
                <h3>Δημιουργία λογαριασμού</h3>
                <p>
                  Μπορείς να δημιουργήσεις λογαριασμό σε λίγα δευτερόλεπτα. Αποκτάς άμεσα πρόσβαση στα
                  εργαλεία συναλλαγών μας και στις ευκαιρίες που σε περιμένουν.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Εικονίδιο κατάθεσης" />
                <h3>Κατάθεση κεφαλαίων</h3>
                <p>Κατάθεσε κεφάλαια για να ξεκινήσεις συναλλαγές.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Εικονίδιο αγοράς και πώλησης" />
                <h3>Ξεκίνα αγορές και πωλήσεις</h3>
                <p>
                  Ενίσχυσε το χαρτοφυλάκιό σου με σιγουριά. Μπες στην αγορά χωρίς
                  δισταγμό!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Μην το χάσεις! Γίνε μέλος χιλιάδων traders που πετυχαίνουν!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Παρακολούθησε το χαρτοφυλάκιό σου με συνεχείς ενημερώσεις υπολοίπου και κέρδη σε πραγματικό χρόνο.</h3>
            </div>
            <div class="half right">
              <p>
                Μην χάσεις καμία λεπτομέρεια με την εις βάθος ανάλυση του <?= e(SITE_NAME) ?> για
                μοτίβα συναλλαγών και συνεχώς ενημερωμένα δεδομένα. Μπορείς να παρακολουθείς όλα τα βασικά στατιστικά
                — υπόλοιπο, κέρδη και διακυμάνσεις τιμών. Με αυτά τα ισχυρά εργαλεία
                μεγιστοποιείς τις αποδόσεις σου και παίρνεις τεκμηριωμένες επενδυτικές αποφάσεις. Το μέλλον
                είναι τώρα: ξεκίνα σήμερα!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Ξεκίνα τώρα</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
