<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Politika zasebnosti ᐉ ' . SITE_NAME;
$page_description = 'Kako ' . SITE_NAME . ' zbira, uporablja in varuje vaše osebne podatke.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Pravne informacije</span>
    <h1>Politika zasebnosti</h1>
    <p class="etpy2">Kako <?= e(SITE_NAME) ?> zbira, uporablja in ščiti vaše osebne podatke.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Zadnja posodobitev: januar 2025</p>

    <h2>1. Uvod</h2>
    <p><?= e(SITE_NAME) ?>("mi", "nas", "naš") se zavezuje k varovanju zasebnosti obiskovalcev in strank. Ta pravilnik o zasebnosti pojasnjuje, katere osebne podatke zbiramo, zakaj jih zbiramo in kako jih obdelujemo, ko uporabljate naše spletno mesto in storitve.</p>

    <h2>2. Podatki, ki jih zbiramo</h2>
    <ul>
      <li><strong>Podatki o identiteti</strong>— ime, datum rojstva, osebni dokument, ki ga je izdal državni organ za preverjanje identitete in skladnost z KYC/AML.</li>
      <li><strong>Kontaktni podatki</strong>— elektronski naslov, telefonska številka, poštni naslov.</li>
      <li><strong>Finančni podatki</strong>— podrobnosti o plačilu, zgodovino transakcij, informacije o viru sredstev.</li>
      <li><strong>Tehnični podatki</strong>— Naslov IP, vrsta brskalnika, identifikatorji naprav, piškotki in analitika uporabe.</li>
    </ul>

    <h2>3. Kako uporabljamo vaše podatke</h2>
    <ul>
      <li>Za preverjanje identitete in izpolnjevanje regulativnih obveznosti.</li>
      <li>Za zagotavljanje, vzdrževanje in izboljšanje naše platforme in storitev.</li>
      <li>Za obdelavo plačil in odkrivanje goljufive dejavnosti.</li>
      <li>Za komunikacijo z vami o vašem računu, posodobitvah in zahtevah za podporo.</li>
      <li>Za pošiljanje tržnih sporočil, ko ste privolili (kadar koli se lahko odjavite).</li>
    </ul>

    <h2>4. Pravna podlaga</h2>
    <p>Osebne podatke obdelujemo na eni ali več od naslednjih pravnih podlag: izpolnjevanje pogodbe, izpolnjevanje zakonske obveznosti, naši zakoniti interesi ali vaše soglasje.</p>

    <h2>5. Deljenje in razkritje</h2>
    <p>Osebne podatke lahko delimo z reguliranimi ponudniki plačil, partnerji za preverjanje KYC/AML, ponudniki infrastrukture v oblaku, strokovnimi svetovalci in pristojnimi organi, kjer to zahteva zakon. Osebnih podatkov ne prodajamo.</p>

    <h2>6. Mednarodni transferji</h2>
    <p>Kadar se osebni podatki prenašajo izven vaše jurisdikcije, zagotavljamo, da so vzpostavljeni ustrezni zaščitni ukrepi, vključno s standardnimi pogodbenimi klavzulami.</p>

    <h2>7. Hramba podatkov</h2>
    <p>Osebne podatke hranimo tako dolgo, kot je potrebno za zagotavljanje storitev in izpolnjevanje zakonskih, regulativnih in računovodskih zahtev – običajno vsaj pet let po zaprtju računa.</p>

    <h2>8. Vaše pravice</h2>
    <p>V skladu z veljavno zakonodajo lahko zahtevate dostop, popravek, izbris, omejitev ali prenosljivost vaših osebnih podatkov in lahko ugovarjate določeni obdelavi. Za uveljavljanje teh pravic nas kontaktirajte na spodnji naslov.</p>

    <h2>9. Piškotki</h2>
    <p>Za delovanje strani in razumevanje uporabe uporabljamo bistvene in analitične piškotke. Piškotke lahko upravljate v nastavitvah brskalnika.</p>

    <h2>10. Varnost</h2>
    <p>Uporabljamo upravne, tehnične in fizične zaščitne ukrepe, namenjene zaščiti osebnih podatkov pred nepooblaščenim dostopom, razkritjem, spreminjanjem ali uničenjem. Noben sistem ni popolnoma varen in ne moremo zagotoviti absolutne varnosti.</p>

    <h2>11. Spremembe</h2>
    <p>Ta pravilnik lahko občasno posodobimo. Najnovejša različica bo vedno na voljo na tej strani s posodobljenim datumom.</p>

    <h2>12. Kontakt</h2>
    <p>Za vprašanja glede zasebnosti ali za uveljavljanje svojih pravic se obrnite na ekipo za varstvo podatkov <?= e(SITE_NAME) ?> prek naše kontaktne strani.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Nazaj na dom</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
