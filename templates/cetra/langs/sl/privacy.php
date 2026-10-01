<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Politika zasebnosti');
$page_description = 'Kako ' . SITE_NAME . ' zbira, uporablja in varuje vaše osebne podatke.';
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
    <nav class="nav-links" aria-label="Glavni">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Kako deluje</a>
      <a href="<?= page_url() ?>#markets">Trgi</a>
      <a href="<?= page_url() ?>#faq">Pogosto zastavljena vprašanja</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Začnite</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Pravne informacije</span>
      <h1>Politika zasebnosti</h1>
      <p class="lede">Kako <?= e(SITE_NAME) ?> zbira, uporablja in varuje vaše osebne podatke.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Zadnja posodobitev: januar 2025</p>

      <h2>1. Uvod</h2>
      <p><?= e(SITE_NAME) ?> ("mi", "naš", "naš") se zavezuje k varovanju zasebnosti obiskovalcev in strank. Ta pravilnik o zasebnosti pojasnjuje, katere osebne podatke zbiramo, zakaj jih zbiramo in kako jih obdelujemo, ko uporabljate naše spletno mesto in storitve.</p>

      <h2>2. Podatki, ki jih zbiramo</h2>
      <ul>
        <li>Podatki o identiteti — ime, datum rojstva, osebni dokumenti, ki jih je izdal državni organ za registracijo in skladnost z KYC/AML.</li>
        <li>Kontaktni podatki — elektronski naslov, telefonska številka, poštni naslov.</li>
        <li>Finančni podatki — podrobnosti plačila, zgodovina transakcij, podatki o viru sredstev.</li>
        <li>Tehnični podatki — naslov IP, vrsta brskalnika, identifikatorji naprav, piškotki in analitika uporabe.</li>
      </ul>

      <h2>3. Kako uporabljamo vaše podatke</h2>
      <ul>
        <li>Za preverjanje identitete in izpolnjevanje regulativnih obveznosti.</li>
        <li>Za zagotavljanje, vzdrževanje in izboljšanje naše platforme in storitev.</li>
        <li>Za obdelavo plačil in odkrivanje goljufive dejavnosti.</li>
        <li>Za komunikacijo z vami o vašem računu, posodobitvah in zahtevah za podporo.</li>
        <li>Za pošiljanje trženjskih sporočil, ko ste v to privolili (kadar koli se lahko odjavite).</li>
      </ul>

      <h2>4. Pravna podlaga</h2>
      <p>Osebne podatke obdelujemo na podlagi ene ali več naslednjih zakonitih podlag: izpolnjevanje pogodbe, izpolnjevanje zakonske obveznosti, naši zakoniti interesi ali vaše soglasje.</p>

      <h2>5. Deljenje in razkritje</h2>
      <p>Osebne podatke lahko delimo z reguliranimi ponudniki plačil, partnerji za preverjanje KYC/AML, ponudniki infrastrukture v oblaku, strokovnimi svetovalci in pristojnimi organi, kadar to zahteva zakon. Osebnih podatkov ne prodajamo.</p>

      <h2>6. Mednarodni transferji</h2>
      <p>Ko se osebni podatki prenesejo izven vaše jurisdikcije, zagotovimo ustrezne zaščitne ukrepe, vključno s standardnimi pogodbenimi klavzulami.</p>

      <h2>7. Hramba podatkov</h2>
      <p>Osebne podatke hranimo tako dolgo, kot je potrebno za zagotavljanje storitev in izpolnjevanje zakonskih, regulativnih in računovodskih zahtev – običajno vsaj pet let po zaprtju računa.</p>

      <h2>8. Vaše pravice</h2>
      <p>V skladu z veljavno zakonodajo lahko zahtevate dostop, popravek, izbris, omejitev ali prenosljivost vaših osebnih podatkov in lahko nasprotujete določeni obdelavi. Za uveljavljanje teh pravic nas kontaktirajte na spodnji naslov.</p>

      <h2>9. Piškotki</h2>
      <p>Za delovanje strani in razumevanje uporabe uporabljamo bistvene in analitične piškotke. Piškotke lahko upravljate v nastavitvah brskalnika.</p>

      <h2>10. Varnost</h2>
      <p>Uporabljamo upravne, tehnične in fizične zaščitne ukrepe, namenjene zaščiti osebnih podatkov pred nepooblaščenim dostopom, razkritjem, spreminjanjem ali uničenjem. Noben sistem ni popolnoma varen in ne moremo zagotoviti absolutne varnosti.</p>

      <h2>11. Spremembe</h2>
      <p>Ta pravilnik lahko občasno posodobimo. Najnovejša različica bo vedno na voljo na tej strani s posodobljenim datumom.</p>

      <h2>12. Kontakt</h2>
      <p>Za vprašanja glede zasebnosti ali za uveljavljanje svojih pravic se obrnite na skupino za varstvo podatkov <?= e(SITE_NAME) ?> prek našega<a href="<?= page_url('contacts.php') ?>">kontaktna stran</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Nazaj na dom</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Vse pravice pridržane ·
      <a href="<?= page_url('privacy.php') ?>">Zasebnost</a> ·
      <a href="<?= page_url('conditions.php') ?>">Pogoji</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
