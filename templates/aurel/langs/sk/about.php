<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'O nás ' . SITE_NAME;
$page_description = 'Jeden účet, jasný prehľad o kapitáli — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platforma</span>
    <h1>Jeden účet, jasný prehľad o všetkom</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> spája zostatok, stratégiu aj výkon do jedného transparentného panela, aby každé rozhodnutie bolo informované a každé číslo na očiach.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Ľudia za vaším účtom</h2>
    <p>Za rozhraním sú analytici, ktorí denne študujú trhy, inžinieri, ktorí držia platformu v chode, a špecialisti podpory, ktorí odpovedajú vo vašom jazyku.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Trhoví analytici, ktorí podmienky posudzujú denne, nie raz za štvrťrok.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inžinieri k dispozícii pre platformu, s nepretržitým monitoringom.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Špecialisti podpory na onboarding, overenie a výbery.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulácia, riziko a čo nesľubujeme</h2>
    <p>Investovanie nesie riziko a žiadna platforma ho neodstráni. Platforma môže byť jasná: zverejniť podmienky, držať klientske peniaze u regulovaných partnerov a zdokumentovať výbery.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Overenie identity, kým sa na účte pohnú prostriedky.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Výbery sa vracajú tou istou metódou ako vklad.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Podmienky, upozornenie na riziká a zásady ochrany súkromia zverejnené v plnom znení.</span></li>
    </ul>
    <p class="jkkyl">Investovanie nesie riziko, vrátane možnej straty časti alebo všetkého kapitálu. Hodnota investícií môže klesať aj stúpať a môžete získať späť menej, ako ste vložili. Nemali by ste investovať peniaze, ktorých stratu si nemôžete dovoliť.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začať — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Odoslať správu</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Ako platforma vznikla</h2>
    <ol class="nxlk2qu">
      <li><h3>Východiskový bod</h3><p>Malá skupina analytikov a inžinierov stále počúvala to isté: nástroje existujú, ale nikto ich nevysvetlí.</p></li>
      <li><h3>Prvá funkčná verzia</h3><p>Prvá verzia robila jedno: ukázať zostatok a pozíciu zrozumiteľne. Všetko ostatné išlo preč, kým to nebolo jasné.</p></li>
      <li><h3>Ľudská stránka</h3><p>Automatizácia odpovedá na čo a kedy; ľudia na prečo. Špecialisti podpory pribudli, aby sa každý člen mal koho spýtať.</p></li>
      <li><h3>Otvorenie ďalším trhom</h3><p>Miestne platobné metódy, jazyky a hodiny podpory.</p></li>
      <li><h3>Kde sme teraz</h3><p>Tie isté princípy vo väčšom meradle: transparentné čísla, ľudia, ktorých zastihnete, žiadne prekvapenia v drobnom písmene.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Prečo tu sme</h2>
    <p>Väčšina ľudí, ktorí chcú investovať, nikdy nezačne, pretože každá cesta vyzerá navrhnutá pre niekoho, kto už pozná slovník. Postavili sme opak: jeden účet, jasný jazyk a špecialista, s ktorým naozaj hovoríte.</p>
    <p>Žiadny žargón tam, kde stačí obyčajná veta, žiadne poplatky, ktoré sa objavia až po pohybe peňazí, a žiadne sľuby výnosov, ktoré nikto poctivo negarantuje.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktívni používatelia</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Obchodovaný objem</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Podpora</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
