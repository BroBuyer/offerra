<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Uvjeti korištenja | ' . SITE_NAME;
$page_description = 'Uvjeti korištenja platforme ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Uvjeti korištenja</h1>
            <p class="bold-title">1. Uvod</p>
            <p>1.1. Za korištenje usluga potrebno je prihvaćanje ovih uvjeta.</p>
            <p>1.2. Ovi uvjeti čine pravno obvezujući sporazum.</p>
            <p>1.3. Daljnje korištenje web-stranice znači prihvaćanje uvjeta.</p>
            <p>
              1.4. Za pitanja možeš nas kontaktirati na
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Pravo korištenja</p>
            <p>2.1. Usluge mogu koristiti samo osobe starije od 18 godina.</p>
            <p>2.1.1. Moraš živjeti u zemlji u kojoj su usluge zakonite.</p>
            <p>2.1.2. Ne smiješ biti na popisu sankcija.</p>
            <p>2.1.3. Moraš imati poslovnu sposobnost za sklapanje ugovora.</p>
            <p>2.2. Nismo odgovorni za korištenje od strane neovlaštenih korisnika.</p>
            <p class="bold-title">3. Korisnički račun</p>
            <p>3.1. Odgovoran si za sigurnost svog računa.</p>
            <p>3.2. Ne dijeli lozinku s trećim stranama.</p>
            <p class="bold-title">4. Zabranjene aktivnosti</p>
            <p>4.1. Korištenje usluga u nezakonite svrhe nije dopušteno.</p>
            <p>4.1.1. Pranje novca strogo je zabranjeno.</p>
            <p>4.1.2. Prijevara će biti prijavljena nadležnim tijelima.</p>
            <p>4.1.3. Korištenje botova ili softvera za automatizaciju nije dopušteno.</p>
            <p>4.1.4. Svaki pokušaj manipulacije sustavom bit će istražen.</p>
            <p>4.1.5. Širenje netočnih informacija zabranjeno je.</p>
            <p>4.1.6. Pokušaji ometanja istraga nisu dopušteni.</p>
            <p>4.1.7. Prijetnje drugim korisnicima zabranjene su.</p>
            <p>4.1.8. Svaka nezakonita aktivnost bit će sankcionirana.</p>
            <p>4.1.9. Pokušaji zaobilaženja pravila nisu dopušteni.</p>
            <p>4.1.10. Svaku zlouporabu sustava shvaćamo ozbiljno.</p>
            <p class="bold-title">5. Intelektualno vlasništvo</p>
            <p>5.1. Sav sadržaj web-stranice naše je intelektualno vlasništvo.</p>
            <p>5.2. Korisnici ne stječu prava na sadržaj web-stranice.</p>
            <p>5.3. Sadržaj se ne smije kopirati bez dopuštenja.</p>
            <p>5.4. Treće strane ne smiju mijenjati sadržaj.</p>
            <p class="bold-title">6. Ograničenje odgovornosti</p>
            <p>6.1. Usluge koristiš na vlastitu odgovornost.</p>
            <p>6.2. Nismo odgovorni za gubitke koji proizlaze iz korištenja usluga.</p>
            <p>6.3. Svaki gubitak od korištenja web-stranice ide na teret korisnika.</p>
            <p>6.4. Ne prihvaćamo odgovornost za štetu uzrokovanu korištenjem web-stranice.</p>
            <p>6.5. Tehnički problemi nisu naša odgovornost.</p>
            <p class="bold-title">7. Informacije</p>
            <p>7.1. Korištenjem usluga slažeš se s kontaktiranjem.</p>
            <p>7.2. S informacijama postupamo povjerljivo.</p>
            <p>7.3. Korisnicima savjetujemo čuvanje evidencije.</p>
            <p class="bold-title">8. Poveznice i dodatni izvori</p>
            <p>8.1. Više informacija pronađi u našim pravilima.</p>
            <p>8.2. Vanjske poveznice nisu preporuka.</p>
            <p>8.3. Preporučujemo provjeru izvora prije korištenja.</p>
            <p class="bold-title">9. Opće odredbe</p>
            <p>9.1. Zadržavamo pravo izmijeniti usluge u bilo koj trenutku.</p>
            <p>9.2. Uvjeti se mogu promijeniti u bilo koje vrijeme.</p>
            <p>9.3. Korištenjem usluga prihvaćaš ove uvjete.</p>
            <p>9.4. Usmeni sporazumi nisu važeći.</p>
            <p>9.5. Neiskorištena prava ne smatraju se odricanjem.</p>
            <p>
              9.6. Ako se odredba proglasi nevažećom, ostale ostaju na snazi.
            </p>
            <p>9.7. Uslugama mogu upravljati vanjski pružatelji.</p>
            <p>
              9.8. Na ove uvjete primjenjuje se pravo <?= e(geo_in()) ?>. Svi sporovi predaju se
              nadležnom sudu <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
