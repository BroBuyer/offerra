<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Pravila privatnosti');
$page_description = 'Kako ' . SITE_NAME . ' prikuplja, koristi i štiti vaše osobne podatke.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Glavna">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Kako funkcionira</a>
      <a href="<?= page_url() ?>#markets">Tržišta</a>
      <a href="<?= page_url() ?>#faq">Često postavljana pitanja</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Započni</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Pravne informacije</span>
      <h1>Pravila privatnosti</h1>
      <p class="lede">Kako <?= e(SITE_NAME) ?> prikuplja, koristi i štiti vaše osobne podatke.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Zadnja aktualizacija: siječanj 2025</p>

      <h2>1. Uvod</h2>
      <p><?= e(SITE_NAME) ?> („mi”, „naš”) obvezuje se štititi privatnost posjetitelja i klijenata. Ova Pravila privatnosti objašnjavaju koje osobne podatke prikupljamo, zašto i kako ih obrađujemo kada koristite našu web-stranicu i usluge.</p>

      <h2>2. Informacije koje prikupljamo</h2>
      <ul>
        <li>Podaci o identitetu — ime, datum rođenja, osobne isprave izdane od države za registraciju i KYC/AML usklađenost.</li>
        <li>Kontaktni podaci — adresa e-pošte, broj telefona, poštanska adresa.</li>
        <li>Financijski podaci — detalji plaćanja, povijest transakcija, informacije o izvoru sredstava.</li>
        <li>Tehnički podaci — IP adresa, vrsta preglednika, identifikatori uređaja, kolačići i analitika korištenja.</li>
      </ul>

      <h2>3. Kako koristimo vaše podatke</h2>
      <ul>
        <li>Za potvrdu identiteta i ispunjavanje regulatornih obveza.</li>
        <li>Za pružanje, održavanje i poboljšanje naše platforme i usluga.</li>
        <li>Za obradu plaćanja i otkrivanje prijevarnih aktivnosti.</li>
        <li>Za komunikaciju s vama o računu, ažuriranjima i zahtjevima za podršku.</li>
        <li>Za slanje marketinških poruka kada ste pristali (možete se odjaviti bilo kada).</li>
      </ul>

      <h2>4. Pravna osnova</h2>
      <p>Osobne podatke obrađujemo na temelju jedne ili više sljedećih zakonitih osnova: izvršenje ugovora, poštivanje pravne obveze, naši legitimni interesi ili vaša privola.</p>

      <h2>5. Dijeljenje i otkrivanje</h2>
      <p>Osobne podatke možemo dijeliti s reguliranim pružateljima plaćanja, partnerima za KYC/AML verificaciju, pružateljima cloud infrastrukture, profesionalnim savjetnicima i nadležnim tijelima kada to zahtijeva zakon. Ne prodajemo osobne podatke.</p>

      <h2>6. Međunarodni prijenosi</h2>
      <p>Kada se osobni podaci prenose izvan vaše jurisdikcije, osiguravamo odgovarajuće zaštitne mjere, uključujući standardne ugovorne klauzule.</p>

      <h2>7. Zadržavanje podataka</h2>
      <p>Osobne podatke zadržavamo onoliko koliko je potrebno za pružanje usluga i ispunjavanje pravnih, regulatornih i računovodstvenih zahtjeva — tipično najmanje pet godina nakon zatvaranja računa.</p>

      <h2>8. Vaša prava</h2>
      <p>U skladu s primjenjivim pravom možete zatražiti pristup, ispravak, brisanje, ograničenje ili prenosivost osobnih podataka te se usprotiviti određenoj obradi. Za ostvarivanje tih prava kontaktirajte nas na niže navedenoj adresi.</p>

      <h2>9. Kolačići</h2>
      <p>Koristimo bitne i analitičke kolačiće za rad stranice i razumijevanje korištenja. Kolačićima možete upravljati u postavkama preglednika.</p>

      <h2>10. Sigurnost</h2>
      <p>Primjenjujemo administrativne, tehničke i fizičke zaštitne mjere osmišljene za zaštitu osobnih podataka od neovlaštenog pristupa, otkrivanja, izmjene ili uništenja. Nijedan sustav nije savršeno siguran i ne možemo garantirati apsolutnu sigurnost.</p>

      <h2>11. Izmjene</h2>
      <p>Ova Pravila možemo s vremena na vrijeme ažurirati. Najnovija verzija uvijek će biti dostupna na ovoj stranici s ažuriranim datumom.</p>

      <h2>12. Kontakt</h2>
      <p>Za pitanja privatnosti ili ostvarivanje prava kontaktirajte tim zaštite podataka <?= e(SITE_NAME) ?> putem naše <a href="<?= page_url('contacts.php') ?>">stranice za kontakt</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Natrag na početnu</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Sva prava pridržana ·
      <a href="<?= page_url('privacy.php') ?>">Privatnost</a> ·
      <a href="<?= page_url('conditions.php') ?>">Uvjeti</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
