<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prečo my ' . SITE_NAME;
$page_description = 'Prečo ľudia začínajú s ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Prečo táto platforma</span>
    <h1>Prečo ľudia začínajú tu</h1>
    <p class="kpnq92g">Žiadny predajný pitch: konkrétne, overiteľné dôvody — aj to, čo nesedí každému.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Žiadne tabuľky. Žiadne preplnené obrazovky. Žiadne pochybnosti na poslednú chvíľu</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Tradičný broker</th><th scope="col">Obchodovanie na vlastnú päsť</th></tr></thead>
      <tbody>
        <tr><td>Vykonávanie príkazov AI</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">obmedzené hodiny</td><td style="color:var(--muted)">ručne</td></tr>
        <tr><td>Pokrytie 24/7 na všetkých trhoch</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papierovanie</td><td style="color:var(--muted)">Sami</td></tr>
        <tr><td>Smerovanie príkazov pod sekundu</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">len podľa tarifu</td><td style="color:var(--muted)">ručne</td></tr>
        <tr><td>Viac mien v reportoch</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">obmedzené hodiny</td><td style="color:var(--muted)">Sami</td></tr>
        <tr><td>Otvorenie účtu bez papierov</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papierovanie</td><td style="color:var(--muted)">ručne</td></tr>
        <tr><td>Arbitráž medzi burzami</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">len podľa tarifu</td><td style="color:var(--muted)">Sami</td></tr>
        <tr><td>Vyhradený osobný manažér</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">obmedzené hodiny</td><td style="color:var(--muted)">ručne</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Čo získate, čo nastavenie urob-si-sám nedá</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Vykonanie pod sekundu na každom pripojenom trhu.</b> <?= e(SITE_NAME) ?> udržuje trvalé API spojenia s nízkou latenciou ku každej podporovanej burze. Keď model vygeneruje signál, príkaz je odoslaný, vyplnený a zapísaný na paneli ešte pred ďalším tikom.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Beží 24/7, v každej trhovej seanse.</b> Krypto nespí a <?= e(SITE_NAME) ?> tiež nie. Engine analyzuje páry aj cez víkendy a sviatky, aby príležitosť neunikla.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Viac mien v reportoch.</b> Každý zostatok, každý obchod aj výber je v miestnej mene. Žiadne skryté kroky konverzie.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Oddelený kapitál.</b> Vaše prostriedky zostávajú na vašom účte. <?= e(SITE_NAME) ?> ich nikdy nedrží: engine má len oprávnenie odosielať príkazy.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Zabezpečenie na úrovni bánk.</b> Šifrovanie TLS naprieč platformou, dvojfázové overenie v predvolenom nastavení a štvrťročné audity infraštruktúry treťou stranou. Potvrdenia obchodov on-chain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Tri triedy aktív, jedna platforma.</b> Väčšina retailových platforiem vás obmedzí na jeden trh. <?= e(SITE_NAME) ?> obchoduje kryptomeny, kótované akcie aj hlavné menové páry z toho istého panela.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Prednastavené limity rizika na každej pozícii.</b> Stop-loss, maximálna prijateľná strata a stropy alokácie kapitálu sa nastavujú podľa triedy aktív. Engine automaticky uzavrie obchod, ktorý prekročí prah, a udalosť sa zapíše do auditnej histórie.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Pre koho to pravdepodobne nie je</h2>
    <p>Priamosť šetrí čas. Ak vás opisuje niečo z nasledujúceho, iná cesta bude lepšia.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Chcete garantované výnosy. Žiadna poctivá platforma ich neponúka a my tiež nie.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Chcete investovať peniaze, bez ktorých sa nezaobídete.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Obchodujete v profesionálnom objeme s vlastnou exekučnou infraštruktúrou.</span></li>
    </ul>
    <p class="jkkyl">Investovanie nesie riziko, vrátane možnej straty časti alebo všetkého kapitálu. Hodnota investícií môže klesať aj stúpať a môžete získať späť menej, ako ste vložili. Nemali by ste investovať peniaze, ktorých stratu si nemôžete dovoliť.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začať — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
