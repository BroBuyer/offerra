<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pogosta vprašanja ' . SITE_NAME;
$page_description = 'Vprašanja, odgovori — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Vprašanja</span>
    <h1>Vprašanja, jasen odgovor</h1>
    <p class="kpnq92g">Kaj ljudje vprašajo, preden odprejo račun, in odgovore, ki bi vam jih dali po telefonu.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Vprašanja o denarju</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Je <?= e(SITE_NAME) ?> prevara?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ne: <?= e(SITE_NAME) ?> deluje s preverjanji preverjanja, objavlja svoje pogoje in razkritje tveganj v celoti, dvigi pa se vedno vrnejo na prvotno plačilno sredstvo. Kljub temu vsaka naložba nosi resnično tveganje in nobena resna platforma ne obljublja zajamčenih donosov – bodite previdni pri vseh, ki to obljubljajo.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Koliko stane odprtje računa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Odpiranje računa je brezplačno. Prijavnine in naročnine ni; vložite le znesek, ki ga želite vložiti.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kako dolgo trajajo dvigi?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Zahtevki se obdelujejo ob delovnih dneh in se vrnejo na način, s katerim ste položili. Bančna nakazila trajajo dlje kot plačila s karticami ali e-denarnicami.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ali obstaja minimalni znesek?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Da, in je namerno nizka, od <?= e(money_min()) ?>, tako da lahko začnete z majhnimi in pozneje dodate več. Natančna številka se prikaže, preden kar koli potrdite.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Pogosta vprašanja</h2>
    <div class="fjl4d">
      <details open><summary>Kakšen je minimalni depozit za začetek?</summary><p>Svoj račun lahko odprete in financirate iz <?= e(money_min()) ?> najmanj. Prosto lahko dodajate več sredstev, ko vaš naložbeni načrt napreduje.</p></details>
      <details><summary>Kako potekajo dvigi?</summary><p>Zahtevajte dvig kadar koli na nadzorni plošči. Sredstva se vrnejo na vaš izbrani način plačila z običajnimi časi obdelave.</p></details>
      <details><summary>Je moj denar varno shranjen?</summary><p>Računi so zaščiteni s profesionalnim varnostnim preverjanjem in preverjanjem identitete. Kot pri vsaki naložbi je vaš kapital ogrožen in vrednosti se lahko znižajo in povečajo.</p></details>
      <details><summary>Koliko časa traja, da začnete investirati?</summary><p>Večina članov opravi registracijo v nekaj minutah. Ko je vaš prvi depozit obdelan, lahko takoj aktivirate načrt.</p></details>
      <details><summary>Ali obstajajo skriti stroški?</summary><p>Vsi stroški so pregledno prikazani, preden se zavežete. Vedno boste videli, kaj velja za vaš načrt, brez presenečenj.</p></details>
      <details><summary>Kakšna je najnižja starost za registracijo?</summary><p>Za odprtje računa in vlaganje morate imeti vsaj 18 let. Za potrditev vaše starosti in identitete bo morda zahtevano preverjanje.</p></details>
      <details><summary>Kateri načini plačila so sprejeti?</summary><p>Sprejemajo se običajni načini, kot so debetne in kreditne kartice, bančna nakazila, izbrane e-denarnice in kriptovalute. Točne možnosti so prikazane v koraku depozita.</p></details>
      <details><summary>Kdaj je na voljo podpora strankam?</summary><p>Naša skupina za podporo je na voljo od ponedeljka do petka od 9.00 do 18.00 in se zavezuje, da bo na vsako poizvedbo odgovorila v enem delovnem dnevu.</p></details>
      <details><summary>Kako se obravnavajo davki na dobiček?</summary><p>Davki na naložbene dobičke so odvisni od pravil v vaši državi in ​​so vaša odgovornost. Priporočamo, da vodite lastne evidence in se pogovorite s kvalificiranim davčnim svetovalcem.</p></details>
      <details><summary>Kaj je preverjanje KYC in zakaj je potrebno?</summary><p>KYC (Know Your Customer) je standardno preverjanje vaše identitete. Pomaga ohranjati varnost računov in je rutinski del odpiranja investicijskega računa.</p></details>
      <details><summary>Ali potrebujem predhodne naložbene izkušnje?</summary><p>Ne. Vsak član ima osebnega finančnega analitika, ki vas vodi na vsakem koraku, zato ne potrebujete predznanja o trgih.</p></details>
      <details><summary>Kdo upravlja moje naložbe?</summary><p>Predan finančni analitik, podprt z orodji umetne inteligence, dela okoli vaših ciljev in stopnje tveganja. Analitik združuje strokovno znanje in izkušnje s tehnologijo – odločitve ostajajo človeške.</p></details>
      <details><summary>Ali platforma izpolnjuje regulativne standarde?</summary><p>Da — izpolnjuje nacionalne finančne standarde in standarde kibernetske varnosti, z vgrajeno zaščito računa in preverjanjem.</p></details>
      <details><summary>Ali lahko pozneje dodam več sredstev na svoj račun?</summary><p>ja Svoj račun lahko kadar koli napolnite in svoj načrt prilagodite skupaj z analitikom, ko se vaši cilji razvijajo.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Račun in varnost</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kako deluje prijava na <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Prijavite se z registriranim e-poštnim naslovom in geslom s spletne strani ali iz mobilnega brskalnika. Če ste vklopili preverjanje v dveh korakih, boste morali vnesti dodatno kodo; če pozabite geslo, ga lahko ponastavite na samem prijavnem zaslonu.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Zakaj potrebujete moje osebne dokumente?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Preverjanje je potrebno, preden lahko račun prenese sredstva. Prav tako preprečuje, da bi nekdo drug odprl račun v vašem imenu.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ali potrebujem predhodne izkušnje?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ne. Večina članov začne z nič. Specialist vas vodi skozi prve korake, demo tehtnica pa vam omogoča vajo.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ali ga lahko uporabljam na telefonu?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Da, platforma deluje v mobilnem brskalniku brez namestitve ničesar.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začetek — <?= e(money_min()) ?> od</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Pošlji sporočilo</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
