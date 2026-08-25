<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zašto mi ' . SITE_NAME;
$page_description = 'Zašto ljudi biraju započeti s ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Zašto ova platforma</span>
    <h1>Zašto ljudi biraju početi ovdje</h1>
    <p class="kpnq92g">Nije prodajni govor: konkretni, provjerljivi razlozi — i dijelovi koji ne odgovaraju svima.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Bez proračunskih tablica. Bez ekrana. Bez sumnji u posljednjem trenutku</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Tradicionalni broker</th><th scope="col">Trgovati samostalno</th></tr></thead>
      <tbody>
        <tr><td>Izvršenje naloga s AI-jem</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ograničeno radno vrijeme</td><td style="color:var(--muted)">ručno</td></tr>
        <tr><td>Nadzor 24/7 na svim tržištima</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papirologija</td><td style="color:var(--muted)">Samostalno</td></tr>
        <tr><td>Usmjeravanje naloga u manje od sekunde</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">samo po razini</td><td style="color:var(--muted)">ručno</td></tr>
        <tr><td>Izvješća u više valuta</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ograničeno radno vrijeme</td><td style="color:var(--muted)">Samostalno</td></tr>
        <tr><td>Otvaranje računa bez papirologije</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papirologija</td><td style="color:var(--muted)">ručno</td></tr>
        <tr><td>Arbitraža između burzi</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">samo po razini</td><td style="color:var(--muted)">Samostalno</td></tr>
        <tr><td>Dodijeljeni osobni menadžer</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ograničeno radno vrijeme</td><td style="color:var(--muted)">ručno</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ono što dobivate, a samostalan pristup ne daje</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Izvršenje u manje od sekunde na svakom povezanom tržištu.</b> <?= e(SITE_NAME) ?> održava stalne API veze niske latencije sa svakom podržanom burzom. Kad model generira signal, nalog se šalje, izvršava i bilježi na vašoj ploči prije sljedećeg ticka.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Radi 24/7, u svakoj tržišnoj sesiji.</b> Kriptovalute ne odmaraju, i <?= e(SITE_NAME) ?> također ne. Motor nastavlja analizirati parove tijekom vikenda i praznika kako vam prilika ne bi promakla.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Izvješća u više valuta.</b> Svaki saldo, svaka operacija i svaka isplata prikazuju se u vašoj lokalnoj valuti. Bez skrivenih koraka konverzije u bilo kojem trenutku.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Odvojeni kapital.</b> Vaša sredstva ostaju na vašem računu. <?= e(SITE_NAME) ?> ih nikada ne čuva: motor ima dopuštenje samo za slanje naloga.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Sigurnost na razini banke.</b> TLS enkripcija na cijeloj platformi, dvofaktorska provjera prema zadanim postavkama i tromjesečne revizije infrastrukture od strane trećih strana. Potvrde operacija zabilježene na blockchainu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Tri klase imovine, jedna platforma.</b> Većina maloprodajnih platformi ograničava vas na jedno tržište. <?= e(SITE_NAME) ?> trguje kriptovalutama, kotiranim dionicama i glavnim valutnim parovima s iste ploče.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Unaprijed definirani limiti rizika za svaku poziciju.</b> Stop-loss, maksimalno dopušteni gubitak i limiti alokacije kapitala konfiguriraju se po klasi imovine. Motor automatski zatvara svaku operaciju koja premaši prag, a događaj se bilježi u vašoj revizijskoj povijesti.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Za koga vjerojatno nije</h2>
    <p>Jasno reći štedi vrijeme svima. Ako vas neka točka opisuje, drugi put bolje odgovara.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Trebate zajamčeni prinos. Nijedna poštena platforma to ne nudi, ni mi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Želite ulagati novac koji si ne možete priuštiti izgubiti.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Trgujete profesionalnim volumenom s vlastitom infrastrukturom izvršenja.</span></li>
    </ul>
    <p class="jkkyl">Ulaganje uključuje rizik, uključujući mogući gubitak dijela ili cijelog kapitala. Vrijednost ulaganja može rasti ili padati, i moguće je da vratite manje nego što ste uložili. Ne ulažite novac koji si ne možete priuštiti izgubiti.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Započnite — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
