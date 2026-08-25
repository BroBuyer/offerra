<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privātuma politika ᐉ ' . SITE_NAME;
$page_description = 'Kā ' . SITE_NAME . ' vāc, izmanto un aizsargā jūsu personas datus.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridiskā informācija</span>
    <h1>Privātuma politika</h1>
    <p class="etpy2">Kā <?= e(SITE_NAME) ?> vāc, izmanto un aizsargā jūsu personas datus.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Pēdējoreiz atjaunināts: 2025. gada janvāris</p>

    <h2>1. Ievads</h2>
    <p><?= e(SITE_NAME) ?> („mēs”, „mūs”, „mūsu”) apņemas aizsargāt apmeklētāju un klientu privātumu. Šī privātuma politika skaidro, kādus personas datus vācam, kāpēc un kā tos apstrādājam, kad izmantojat mūsu vietni un pakalpojumus.</p>

    <h2>2. Kādus datus vācam</h2>
    <ul>
      <li><strong>Identitātes dati</strong> — vārds, dzimšanas datums, valsts izdots personu apliecinošs dokuments identitātes verifikācijai un KYC/AML atbilstībai.</li>
      <li><strong>Kontaktinformācija</strong> — e-pasta adrese, tālruņa numurs, pasta adrese.</li>
      <li><strong>Finanšu dati</strong> — maksājumu dati, darījumu vēsture, informācija par līdzekļu avotu.</li>
      <li><strong>Tehniskie dati</strong> — IP adrese, pārlūka veids, ierīču identifikatori, sīkdatnes un lietošanas analitika.</li>
    </ul>

    <h2>3. Kā izmantojam datus</h2>
    <ul>
      <li>Lai verificētu identitāti un izpildītu regulatīvās saistības.</li>
      <li>Lai sniegtu, uzturētu un uzlabotu platformu un pakalpojumus.</li>
      <li>Lai apstrādātu maksājumus un atklātu krāpniecisku darbību.</li>
      <li>Lai sazinātos ar jums par kontu, atjauninājumiem un atbalsta pieprasījumiem.</li>
      <li>Lai sūtītu mārketinga komunikāciju ar jūsu piekrišanu (varat atteikties jebkurā laikā).</li>
    </ul>

    <h2>4. Juridiskais pamats</h2>
    <p>Personas datus apstrādājam uz viena vai vairākiem no šiem pamatiem: līguma izpilde, juridiskas saistības izpilde, mūsu leģitīmās intereses vai jūsu piekrišana.</p>

    <h2>5. Kopīgošana un izpaušana</h2>
    <p>Personas datus varam kopīgot ar regulētiem maksājumu sniedzējiem, KYC/AML partneriem, mākoņa infrastruktūras sniedzējiem, profesionāliem konsultantiem un kompetentajām iestādēm, kur to prasa likums. Personas datus nepārdodam.</p>

    <h2>6. Starptautiskie pārsūtījumi</h2>
    <p>Ja dati tiek pārsūtīti ārpus jūsu jurisdikcijas, nodrošinām atbilstošas garantijas, tostarp standarta līguma klauzulas.</p>

    <h2>7. Datu glabāšana</h2>
    <p>Datus glabājam tik ilgi, cik nepieciešams pakalpojumiem un juridiskajām, regulatīvajām un grāmatvedības prasībām — parasti vismaz piecus gadus pēc konta slēgšanas.</p>

    <h2>8. Jūsu tiesības</h2>
    <p>Saskaņā ar piemērojamo tiesību aktu varat pieprasīt piekļuvi, labošanu, dzēšanu, ierobežošanu vai pārnesamību un varat iebilst pret noteiktu apstrādi. Tiesības īstenojiet zemāk norādītajā adresē.</p>

    <h2>9. Sīkdatnes</h2>
    <p>Izmantojam būtiskas un analitiskas sīkdatnes vietnes darbībai un lietošanas izpratnei. Sīkdatnes pārvaldāt pārlūka iestatījumos.</p>

    <h2>10. Drošība</h2>
    <p>Piemērojam administratīvus, tehniskus un fiziskus pasākumus pret neatļautu piekļuvi, izpaušanu, grozīšanu vai iznīcināšanu. Neviena sistēma nav pilnīgi droša, un absolūtu drošību negarantējam.</p>

    <h2>11. Izmaiņas</h2>
    <p>Šo politiku varam laiku pa laikam atjaunināt. Jaunākā versija vienmēr ir šajā lapā ar atjaunināšanas datumu.</p>

    <h2>12. Kontakti</h2>
    <p>Par privātuma jautājumiem vai tiesību īstenošanu sazinieties ar <?= e(SITE_NAME) ?> datu aizsardzības komandu caur kontaktu lapu.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Atpakaļ uz sākumu</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
