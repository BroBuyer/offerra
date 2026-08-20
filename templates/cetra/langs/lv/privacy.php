<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Privātuma politika');
$page_description = 'Kā ' . SITE_NAME . ' vāc, izmanto un aizsargā jūsu personas datus.';
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
    <nav class="nav-links" aria-label="Galvenā">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Kā tas darbojas</a>
      <a href="<?= page_url() ?>#markets">Tirgi</a>
      <a href="<?= page_url() ?>#faq">Bieži uzdotie jautājumi</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Sākt</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Juridiskā informācija</span>
      <h1>Privātuma politika</h1>
      <p class="lede">Kā <?= e(SITE_NAME) ?> vāc, izmanto un aizsargā jūsu personas datus.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Pēdējoreiz atjaunināts: 2025. gada janvāris</p>

      <h2>1. Ievads</h2>
      <p><?= e(SITE_NAME) ?> ("mēs", "mūsu") ir apņēmusies aizsargāt apmeklētāju un klientu privātumu. Šī Privātuma politika skaidro, kādus personas datus mēs vācam, kāpēc tos vācam un kā tos apstrādājam, kad izmantojat mūsu vietni un pakalpojumus.</p>

      <h2>2. Informācija, ko mēs vācam</h2>
      <ul>
        <li>Identitātes dati — vārds, dzimšanas datums, valdības izdoti identifikācijas dokumenti reģistrācijai un KYC/AML atbilstībai.</li>
        <li>Kontaktinformācija — e-pasta adrese, tālruņa numurs, pasta adrese.</li>
        <li>Finanšu dati — maksājumu informācija, darījumu vēsture, informācija par līdzekļu izcelsmi.</li>
        <li>Tehniskie dati — IP adrese, pārlūkprogrammas veids, ierīces identifikatori, sīkdatnes un lietošanas analītika.</li>
      </ul>

      <h2>3. Kā mēs izmantojam jūsu datus</h2>
      <ul>
        <li>Lai verificētu identitāti un izpildītu regulatīvās saistības.</li>
        <li>Lai nodrošinātu, uzturētu un uzlabotu mūsu platformu un pakalpojumus.</li>
        <li>Lai apstrādātu maksājumus un atklātu krāpniecisku darbību.</li>
        <li>Lai sazinātos ar jums par jūsu kontu, atjauninājumiem un atbalsta pieprasījumiem.</li>
        <li>Lai sūtītu mārketinga komunikācijas, kad esat piekritis (varat atteikties jebkurā laikā).</li>
      </ul>

      <h2>4. Juridiskais pamats</h2>
      <p>Mēs apstrādājam personas datus, pamatojoties uz vienu vai vairākiem no šādiem likumīgiem pamatiem: līguma izpilde, juridiskas saistības izpilde, mūsu leģitīmās intereses vai jūsu piekrišana.</p>

      <h2>5. Kopīgošana un izpaušana</h2>
      <p>Mēs varam kopīgot personas datus ar regulētiem maksājumu sniedzējiem, KYC/AML verificēšanas partneriem, mākoņinfrastruktūras sniedzējiem, profesionāliem konsultantiem un kompetentajām iestādēm, kad to prasa likums. Mēs nepārdodam personas datus.</p>

      <h2>6. Starptautiskās pārsūtīšanas</h2>
      <p>Kad personas dati tiek pārsūtīti ārpus jūsu jurisdikcijas, mēs nodrošinām, ka ir spēkā atbilstoši aizsardzības pasākumi, tostarp standarta līguma klauzulas.</p>

      <h2>7. Datu glabāšana</h2>
      <p>Mēs glabājam personas datus tik ilgi, cik nepieciešams pakalpojumu sniegšanai un juridisko, regulatīvo un grāmatvedības prasību izpildei — parasti vismaz piecus gadus pēc konta slēgšanas.</p>

      <h2>8. Jūsu tiesības</h2>
      <p>Saskaņā ar piemērojamo likumu jūs varat pieprasīt piekļuvi, labošanu, dzēšanu, ierobežošanu vai pārnesamību saviem personas datiem un varat iebilst pret noteiktu apstrādi. Lai īstenotu šīs tiesības, sazinieties ar mums zemāk norādītajā adresē.</p>

      <h2>9. Sīkdatnes</h2>
      <p>Mēs izmantojam būtiskās un analītiskās sīkdatnes, lai darbinātu vietni un izprastu izmantošanu. Sīkdatnes varat pārvaldīt pārlūkprogrammas iestatījumos.</p>

      <h2>10. Drošība</h2>
      <p>Mēs piemērojam administratīvus, tehniskus un fiziskus aizsardzības pasākumus, kas izstrādāti, lai aizsargātu personas datus pret nesankcionētu piekļuvi, izpaušanu, grozīšanu vai iznīcināšanu. Neviena sistēma nav pilnīgi droša, un mēs nevaram garantēt absolūtu drošību.</p>

      <h2>11. Izmaiņas</h2>
      <p>Mēs varam laiku pa laikam atjaunināt šo Politiku. Jaunākā versija vienmēr būs pieejama šajā lapā ar atjaunināto datumu.</p>

      <h2>12. Kontakti</h2>
      <p>Par privātuma jautājumiem vai tiesību īstenošanu sazinieties ar <?= e(SITE_NAME) ?> Datu aizsardzības komandu caur mūsu <a href="<?= page_url('contacts.php') ?>">kontaktu lapu</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Atpakaļ uz sākumlapu</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Visas tiesības aizsargātas ·
      <a href="<?= page_url('privacy.php') ?>">Privātuma politika</a> ·
      <a href="<?= page_url('conditions.php') ?>">Lietošanas noteikumi</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
