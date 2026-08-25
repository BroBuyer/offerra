<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pravila privatnosti ᐉ ' . SITE_NAME;
$page_description = 'Kako ' . SITE_NAME . ' prikuplja, koristi i štiti vaše osobne podatke.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Pravne informacije</span>
    <h1>Pravila privatnosti</h1>
    <p class="etpy2">Kako <?= e(SITE_NAME) ?> prikuplja, koristi i štiti vaše osobne podatke.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Zadnje ažuriranje: siječanj 2025.</p>

    <h2>1. Uvod</h2>
    <p><?= e(SITE_NAME) ?> ("mi", "nas", "naš") obvezujemo se štititi privatnost posjetitelja i klijenata. Ova pravila privatnosti objašnjavaju koje osobne podatke prikupljamo, zašto ih prikupljamo i kako ih obrađujemo kada koristite našu web stranicu i usluge.</p>

    <h2>2. Podaci koje prikupljamo</h2>
    <ul>
      <li><strong>Identifikacijski podaci</strong> — ime, datum rođenja, službena identifikacija izdana od strane države za provjeru identiteta i usklađenost s KYC/AML propisima.</li>
      <li><strong>Kontakt podaci</strong> — e-pošta, telefonski broj, poštanska adresa.</li>
      <li><strong>Financijski podaci</strong> — podaci o plaćanju, povijest transakcija, informacije o porijeklu sredstava.</li>
      <li><strong>Tehnički podaci</strong> — IP adresa, vrsta preglednika, identifikatori uređaja, kolačići i analitika korištenja.</li>
    </ul>

    <h2>3. Kako koristimo vaše podatke</h2>
    <ul>
      <li>za provjeru identiteta i ispunjavanje regulatornih obveza;</li>
      <li>za pružanje, održavanje i poboljšanje naše platforme i usluga;</li>
      <li>za obradu plaćanja i otkrivanje prijevarnih aktivnosti;</li>
      <li>za komunikaciju s vama o računu, ažuriranjima i zahtjevima za podršku;</li>
      <li>za slanje marketinških poruka kada ste dali privolu (možete se odjaviti u bilo kojem trenutku).</li>
    </ul>

    <h2>4. Pravna osnova</h2>
    <p>Osobne podatke obrađujemo na temelju jedne ili više sljedećih pravnih osnova: izvršenje ugovora, ispunjavanje zakonske obveze, naši legitimni interesi ili vaša privola.</p>

    <h2>5. Dijeljenje i objava</h2>
    <p>Osobne podatke možemo dijeliti s reguliranim pružateljima plaćanja, KYC/AML partnerima za provjeru, pružateljima cloud infrastrukture, profesionalnim savjetnicima i nadležnim tijelima kada to zakon zahtijeva. Ne prodajemo osobne podatke.</p>

    <h2>6. Međunarodni prijenosi</h2>
    <p>Kada se osobni podaci prenose izvan vaše jurisdikcije, osiguravamo odgovarajuće zaštite, uključujući standardne ugovorne klauzule.</p>

    <h2>7. Zadržavanje podataka</h2>
    <p>Osobne podatke zadržavamo onoliko dugo koliko je potrebno za pružanje usluga i ispunjavanje zakonskih, regulatornih i računovodstvenih obveza — obično najmanje pet godina nakon zatvaranja računa.</p>

    <h2>8. Vaša prava</h2>
    <p>U skladu s primjenjivim zakonom možete zatražiti pristup, ispravak, brisanje, ograničenje ili prenosivost svojih osobnih podataka te se usprotiviti određenim obradama. Za ostvarivanje tih prava kontaktirajte nas putem adrese u nastavku.</p>

    <h2>9. Kolačići</h2>
    <p>Koristimo nužne i analitičke kolačiće za rad stranice i razumijevanje korištenja. Kolačićima možete upravljati u postavkama preglednika.</p>

    <h2>10. Sigurnost</h2>
    <p>Primjenjujemo administrativne, tehničke i fizičke mjere za zaštitu osobnih podataka od neovlaštenog pristupa, otkrivanja, izmjene ili uništenja. Nijedan sustav nije savršeno siguran i ne možemo jamčiti apsolutnu sigurnost.</p>

    <h2>11. Promjene</h2>
    <p>Ova pravila možemo povremeno ažurirati. Najnovija verzija uvijek je dostupna na ovoj stranici s ažuriranim datumom.</p>

    <h2>12. Kontakt</h2>
    <p>Za pitanja o privatnosti ili ostvarivanje prava kontaktirajte tim za zaštitu podataka <?= e(SITE_NAME) ?> putem naše stranice za kontakt.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Natrag na početnu stranicu</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
