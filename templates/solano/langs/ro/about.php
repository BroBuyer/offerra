<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Despre noi ' . SITE_NAME;
$page_description = 'Un singur cont, o imagine clară a capitalului — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platforma</span>
    <h1>Un singur cont, o imagine clară a totului</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> aduce soldul, strategia și performanța într-un singur panou transparent, astfel încât fiecare decizie să fie informată și fiecare cifră să fie la vedere.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Oamenii din spatele contului dumneavoastră</h2>
    <p>În spatele interfeței sunt analiști care studiază piețele zilnic, ingineri care țin platforma în funcțiune și specialiști de suport care răspund în limba dumneavoastră.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Analiști de piață care evaluează condițiile zilnic, nu o dată pe trimestru.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingineri disponibili pentru platformă, cu monitorizare non-stop.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Specialiști de suport care se ocupă de onboarding, verificare și retrageri.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Reglementare, risc și ce nu promitem</h2>
    <p>Investițiile implică riscuri și nicio platformă nu le elimină. Ce poate face o platformă este să fie clară: să publice termenii, să țină banii clienților la parteneri reglementați și să documenteze cum funcționează retragerile.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Verificarea identității înainte ca fondurile să se poată mișca în cont.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Retragerile revin prin aceeași metodă folosită la depunere.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Termeni, informare privind riscurile și politică de confidențialitate publicate integral.</span></li>
    </ul>
    <p class="jkkyl">Investițiile implică riscuri, inclusiv posibila pierdere a unei părți sau a întregului capital investit. Valoarea investițiilor poate scădea sau crește, iar dumneavoastră puteți primi înapoi mai puțin decât ați depus. Nu ar trebui să investiți bani pe care nu vi-i puteți permite să-i pierdeți.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Începeți — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Trimiteți un mesaj</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Cum a fost construită platforma</h2>
    <ol class="nxlk2qu">
      <li><h3>Punctul de plecare</h3><p>Un grup mic de analiști și ingineri auzeau mereu aceeași plângere: instrumentele există, dar nimeni nu le explică.</p></li>
      <li><h3>Prima versiune funcțională</h3><p>Prima versiune făcea un singur lucru: să arate un sold și o poziție pe înțeles. Restul a fost scos până când acea parte a fost clară.</p></li>
      <li><h3>Aducerea părții umane</h3><p>Automatizarea răspunde la ce și când; oamenii la de ce. Au fost adăugați specialiști de suport, ca fiecare membru să aibă pe cineva de întrebat.</p></li>
      <li><h3>Deschiderea către mai multe piețe</h3><p>Metode de plată locale, limbi locale și ore de suport locale.</p></li>
      <li><h3>Unde suntem acum</h3><p>Aceleași principii la o scară mai mare: cifre transparente, oameni pe care îi puteți contacta, fără surprize în literele mici.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Pentru ce suntem aici</h2>
    <p>Majoritatea celor care vor să investească nu încep niciodată, pentru că fiecare cale pare gândită pentru cineva care cunoaște deja vocabularul. Am construit opusul: un singur cont, un limbaj clar și un specialist cu care puteți vorbi cu adevărat.</p>
    <p>Fără jargon acolo unde ajunge o frază simplă, fără comisioane care apar abia după ce banii s-au mișcat și fără promisiuni de randament pe care nimeni nu le poate garanta onest.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Utilizatori activi</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Volum tranzacționat</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Suport</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
