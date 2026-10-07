<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prijavi zlouporabu | ' . SITE_NAME;
$page_description = 'Prijavi zlouporabu ili sumnjivu aktivnost na ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Prijavi zlouporabu</h1>
            <p class="bold-title">1. Prijava zlouporabe</p>
            <p>
              1.1. Ako na web-stranici naiđeš na neprikladan sadržaj, prijavi to
              nama putem kontaktnog obrasca.
            </p>
            <p>Kontakt: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. U ovom dijelu možeš navesti informacije o zlouporabi ili sadržaju
              koji krši naša pravila.
            </p>
            <p>
              1.3. Tvoja je prijava važna. Navedi konkretne pojedinosti kako bismo mogli
              adekvatno istražiti slučaj.
            </p>
            <p>Slanjem prijave prihvaćaš i naša pravila privatnosti.</p>
            <p class="bold-title">2. Tko može prijaviti</p>
            <p>
              2.1. Ako si postao žrtva zlouporabe ili si primijetio neprikladno ponašanje, imaš
              pravo to prijaviti.
            </p>
            <p>2.1.1. Prijavu mogu podnijeti samo osobe starije od 18 godina.</p>
            <p>2.1.2. Prijava mora biti istinita i utemeljena na činjenicama.</p>
            <p>2.1.3. Korištenje obrasca mora biti zakonito u tvojoj zemlji.</p>
            <p>2.2. Nismo odgovorni za lažne ili zlonamjerne prijave.</p>
            <p class="bold-title">3. Postupak prijave</p>
            <p>3.1. Zadržavamo pravo istražiti sve prijave zlouporabe.</p>
            <p>3.2. Ako se prijava smatra opravdanom, poduzet ćemo potrebne mjere.</p>
            <p class="bold-title">4. Zabranjene aktivnosti pri prijavi</p>
            <p>4.1. Korištenje obrasca u zlonamjerne svrhe nije dopušteno.</p>
            <p>4.1.1. Lažne ili obmanjujuće prijave nisu dopuštene.</p>
            <p>4.1.2. Uznemiravanje drugih korisnika putem sustava prijava nije dopušteno.</p>
            <p>4.1.3. Korištenje botova ili automatizacije za slanje prijava zabranjeno je.</p>
            <p>4.1.4. Svaki pokušaj manipulacije sustavom prijava bit će istražen.</p>
            <p>4.1.5. Korištenje sustava za širenje netočnih informacija zabranjeno je.</p>
            <p>4.1.6. Pokušaji ometanja istrage nisu dopušteni.</p>
            <p>4.1.7. Korištenje sustava za prijetnje nije dopušteno.</p>
            <p>4.1.8. Svaka nezakonita aktivnost povezana s prijavama bit će sankcionirana.</p>
            <p>4.1.9. Pokušaji zaobilaženja pravila prijave nisu dopušteni.</p>
            <p>4.1.10. Svaku zlouporabu sustava prijava shvaćamo ozbiljno.</p>
            <p class="bold-title">5. Intelektualno vlasništvo pri prijavi</p>
            <p>
              5.1. Sadržaj poslan uz prijavu ne daje ti vlasnička prava.
            </p>
            <p>5.2. Podnošenjem prijave korisnici ne stječu prava na sadržaj web-stranice.</p>
            <p>5.3. Prijave se koriste isključivo u svrhu istrage.</p>
            <p>5.4. Treće strane ne smiju kopirati ni mijenjati prijave.</p>
            <p class="bold-title">6. Ograničenje odgovornosti pri prijavi</p>
            <p>6.1. Slanjem prijave preuzimaš odgovornost za njezin sadržaj.</p>
            <p>6.2. Nismo odgovorni za posljedice podnesenih prijava.</p>
            <p>6.3. Svaki gubitak koji proizlazi iz prijave ide na teret korisnika.</p>
            <p>6.4. Ne prihvaćamo odgovornost za štetu uzrokovanu prijavama.</p>
            <p>
              6.5. Tehnički problemi sustava prijava nisu naša odgovornost.
            </p>
            <p class="bold-title">7. Informacije o postupku prijave</p>
            <p>
              7.1. Korištenjem sustava prijava slažeš se da te možemo kontaktirati zbog dodatnih informacija.
            </p>
            <p>7.2. S prijavama postupamo povjerljivo.</p>
            <p>7.3. Korisnicima savjetujemo da zadrže kopiju prijava.</p>
            <p class="bold-title">8. Dodatne poveznice i izvori</p>
            <p>8.1. Više o prijavi zlouporabe pronađi u našim pravilima.</p>
            <p>8.2. Poveznice na vanjske izvore nisu naša preporuka.</p>
            <p>8.3. Savjetujemo da svaki izvor provjeriš prije korištenja.</p>
            <p class="bold-title">9. Opće odredbe o prijavama</p>
            <p>
              9.1. Zadržavamo pravo izmijeniti, obustaviti ili ukinuti postupak prijave
              u bilo koj trenutku.
            </p>
            <p>
              9.2. Uvjeti ovog postupka mogu se promijeniti u bilo koj trenutku. Daljnje korištenje
              usluge prijava nakon takvih izmjena znači prihvaćanje novih uvjeta.
            </p>
            <p>9.3. Podnošenjem prijave korisnik u potpunosti prihvaća ove uvjete.</p>
            <p>
              9.4. Svaki sporazum ili izjava, pisani ili usmeni, koji ne spada pod
              konkretne točke ovih uvjeta, pravno je nevažeći i ne obvezuje nijednu stranu.
            </p>
            <p>
              9.5. Pravo dano ovim uvjetima koje se ne koristi — zbog pristanka,
              nemara ili nemogućnosti — smatra se odricanjem. Djelomično ili potpuno korištenje prava
              ne isključuje ni ne ograničava kasnije korištenje.
            </p>
            <p>
              9.6. Ako nadležni sud proglasi odredbu ovih uvjeta ništavom, ona će se
              smatrati ništavom. Ostatak uvjeta ipak ostaje u potpunosti na snazi.
            </p>
            <p>
              9.7. Prihvaća se da ovi uvjeti omogućuju trećim stranama vođenje web-stranice
              i prijenos prava i obveza. Korisnik ne smije prenijeti
              svoja prava i obveze na drugu stranu.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
