<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prijavi zlouporabu ᐉ ' . SITE_NAME;
$page_description = 'Prijavi zlouporabu — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Povjerenje i sigurnost</span>
    <h1>Prijavi zlouporabu</h1>
    <p class="rmct9">Pomozite nam održati <?= e(SITE_NAME) ?> sigurnim. Prijavite sumnjivu prevaru, krađu identiteta ili zlouporabu naše platforme ili brenda.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Što prijaviti</h2>
    <p>Molimo prijavite bilo što od sledećeg našem timu za poverenje i sigurnost:</p>
    <ul>
      <li>Phishing e-poruke, prevarne web stranice ili lažne aplikacije koje se predstavljaju kao <?= e(SITE_NAME) ?>.</li>
      <li>Računi na društvenim mrežama, oglasi ili kanali poruka koji zloupotrebljavaju naše ime, logo ili registrovane marke.</li>
      <li>Sumnja na preuzimanje računa, neovlašten pristup ili krađu identiteta.</li>
      <li>Sumnjivi zahtjevi za plaćanje, "agenti oporavka" ili treće strane koje tvrde da djeluju u naše ime.</li>
      <li>Zloporaba tržišta, zabrinutost oko pranja novca ili bilo koja ilegalna aktivnost povezana s našim uslugama.</li>
      <li>Uvredljivo, preteće ili uznemiravajuće ponašanje prema našem osoblju ili korisnicima.</li>
    </ul>

    <h2>Kako prijaviti</h2>
    <p>Pošaljite nam detaljno izveštaj putem bilo kojeg kanala u nastavku. Ako je moguće, uključite:</p>
    <ul>
      <li>Datum i vreme incidenta.</li>
      <li>URL-ove, snimke zaslona, zaglavlja poruka, adrese pošiljatelja ili telefonske brojeve.</li>
      <li>Podatke o vašem računu (ako se prijava odnosi na vaš račun).</li>
      <li>Bilo koji drugi kontekst koji može pomoći našoj istragi.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-pošta poverenja i sigurnosti</b>
        <span>Koristite stranicu za kontakt kako biste došli do našeg tima za poverenje i sigurnost. Izvješća se razvrstavaju u roku od jednog radnog dana.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Objava sigurnosti</b>
        <span>Za odgovornu objavu sigurnosnih ranjivosti koje utječu na naše sisteme, kontaktirajte nas pre javnog dijeljenja detalja.</span>
      </div>
    </div>

    <h2>Što slijedi?</h2>
    <p>Pregledavamo svako izveštaj. Ovisno o prirodi problema, možemo vas kontaktirati za više informacija, koordinirati s pružaocima plaćanja ili hosting platformama radi uklanjanja prevarnog sadržaja ili proslijediti slučajeve nadležnim tijelima ili regulatorima. Izvješća tretiramo poverljivo i, kad je zakonski moguće, štitimo identitet podnositelja.</p>

    <h2>Hitne stvari</h2>
    <p>Ako smatrate da ste žrtva kaznenog djela, kontaktirajte lokalno policijsko tijelo i obaveštenjate nas. Ako sumnjate da je račun kompromitiran, odmah promijenite lozinku i odmah nas obaveštenjate.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Kontaktirajte poverenje i sigurnost</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Natrag na početnu stranicu</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
