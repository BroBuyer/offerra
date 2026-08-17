<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ceny ' . SITE_NAME;
$page_description = 'Jednoduché a transparentné ceny — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Jednoduché a transparentné ceny.</h1>
    <p class="kpnq92g">Začať s <?= e(SITE_NAME) ?> je zadarmo. Žiadne skryté poplatky za otvorenie účtu a vkladáte len to, čo sa rozhodnete investovať: platforma a nástroje sú v cene.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kde sa môžu objaviť náklady</h2>
    <p>To sú jediné miesta, kde peniaze opúšťajú zostatok kvôli niečomu inému ako zvolenej investícii.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Položka</th><th scope="col">Účtuje</th><th scope="col">Poznámka</th></tr></thead>
      <tbody>
        <tr><td>Otvorenie účtu</td><td>—</td><td>Zadarmo.</td></tr>
        <tr><td>Prístup k platforme</td><td>—</td><td>V cene, bez predplatného.</td></tr>
        <tr><td>Trhový spread</td><td>Broker</td><td>Obvyklý rozdiel medzi nákupnou a predajnou cenou.</td></tr>
        <tr><td>Sieťový / bankový poplatok</td><td>Poskytovateľ platieb</td><td>Závisí od zvolenej metódy.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapitál je v riziku. Investujte len to, čo si môžete dovoliť stratiť.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Otvorte účet</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Čo je v cene</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Založenie účtu zadarmo: bez registračných a licenčných poplatkov.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Žiadne skryté poplatky za vklady, výbery ani vedenie účtu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Môžu platiť len štandardný spread brokera alebo sieťové náklady.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Začnite od minimálneho vkladu a škálujte vlastným tempom.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Ako čísla vyzerajú v praxi</h2>
    <h3>Prvý vklad krok za krokom</h3>
    <p>Prvý vklad je celý obraz nákladov na jednom mieste: suma, ktorú pošlete, spread pri konverzii a nič ďalšie, kým sa nerozhodnete obchodovať. Žiadny mesačný poplatok za účet a žiadny poplatok za to, že zostatok necháte byť.</p>
    <h4>Čo sa stane v ten istý deň</h4>
    <p>Zostatok sa objaví po pripísaní platby a špecialista s vami prejde plán, kým sa čokoľvek otvorí. Nič sa nezadáva automaticky vo vašom mene.</p>
    <h3>Výbery a čo stoja</h3>
    <p>Výbery sa vracajú metódou, ktorou peniaze prišli: to je požiadavka, nie preferencia, aby účet ostal váš. Spracovanie je z našej strany zadarmo; jediná zrážka môže byť od vašej banky alebo vydavateľa karty.</p>
    <h4>Termíny, s ktorými môžete počítať</h4>
    <p>Žiadosti v pracovný deň sa posudzujú v ten istý deň. Návraty na kartu zvyčajne do troch až piatich pracovných dní, prevody do dvoch.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
