<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'De ce noi ' . SITE_NAME;
$page_description = 'De ce oamenii aleg să înceapă cu ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">De ce această platformă</span>
    <h1>De ce oamenii aleg să înceapă aici</h1>
    <p class="kpnq92g">Nu un discurs de vânzare: motive concrete, verificabile — plus părțile care nu se potrivesc tuturor.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Fără tabele. Fără ecrane aglomerate. Fără îndoieli de ultim moment</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platformă</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Broker tradițional</th><th scope="col">Tranzacționare pe cont propriu</th></tr></thead>
      <tbody>
        <tr><td>Executarea ordinelor de către AI</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ore limitate</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Acoperire 24/7 pe toate piețele</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">birocrație</td><td style="color:var(--muted)">Singur</td></tr>
        <tr><td>Dirijarea ordinelor sub o secundă</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">doar pe niveluri</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Raportare în mai multe valute</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ore limitate</td><td style="color:var(--muted)">Singur</td></tr>
        <tr><td>Deschiderea contului fără hârtii</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">birocrație</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Arbitraj între burse</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">doar pe niveluri</td><td style="color:var(--muted)">Singur</td></tr>
        <tr><td>Manager personal dedicat</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ore limitate</td><td style="color:var(--muted)">manual</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ce obțineți, pe care un aranjament pe cont propriu nu vi-l dă</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Executare sub o secundă pe fiecare piață conectată.</b> <?= e(SITE_NAME) ?> menține conexiuni API permanente, cu latență redusă, cu fiecare bursă acceptată. Când modelul generează un semnal, ordinul este trimis, executat și înregistrat pe panou înainte de următorul tick.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Rulează 24/7, în fiecare sesiune de piață.</b> Crypto nu se odihnește, iar <?= e(SITE_NAME) ?> nici el. Motorul analizează perechile și în weekenduri și sărbători, ca o oportunitate să nu fie ratată.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Raportare în mai multe valute.</b> Fiecare sold, fiecare tranzacție și fiecare retragere sunt afișate în moneda locală. Fără pași de conversie ascunși, nicăieri.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Capital segregat.</b> Fondurile rămân în contul dumneavoastră. <?= e(SITE_NAME) ?> nu le deține niciodată: motorul are doar permisiunea de a trimite ordine.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Securitate de nivel bancar.</b> Criptare TLS pe întreaga platformă, verificare în doi pași implicită și audituri trimestriale ale infrastructurii, de către terți. Confirmările tranzacțiilor sunt înregistrate on-chain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Trei clase de active, o singură platformă.</b> Majoritatea platformelor de retail vă limitează la o singură piață. <?= e(SITE_NAME) ?> tranzacționează criptomonede, acțiuni cotate și principalele perechi valutare din același panou.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Limite de risc prestabilite pe fiecare poziție.</b> Stop-loss, pierderea maximă acceptată și plafoanele de alocare a capitalului sunt configurate pe clasa de active. Motorul închide automat orice tranzacție care depășește un prag, iar evenimentul este înregistrat în istoricul de audit.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Pentru cine probabil nu este</h2>
    <p>Sinceritatea economisește timp tuturor. Dacă ceva din cele de mai jos vă descrie, o altă cale vi se va potrivi mai bine.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Aveți nevoie de randamente garantate. Nicio platformă onestă nu le oferă, iar noi nici atât.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Doriți să investiți bani de care nu vă puteți lipsi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tranzacționați la volum profesional, cu propria infrastructură de executare.</span></li>
    </ul>
    <p class="jkkyl">Investițiile implică riscuri, inclusiv posibila pierdere a unei părți sau a întregului capital investit. Valoarea investițiilor poate scădea sau crește, iar dumneavoastră puteți primi înapoi mai puțin decât ați depus. Nu ar trebui să investiți bani pe care nu vi-i puteți permite să-i pierdeți.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Începeți — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
