<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Miért mi, ' . SITE_NAME;
$page_description = 'Miért a(z) ' . SITE_NAME . ' mellett döntenek';
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Miért ez a platform</span>
    <h1>Miért itt kezdenek az emberek</h1>
    <p class="kpnq92g">Nem eladási szöveg: konkrét, ellenőrizhető okok — és az, ami nem mindenkinek való.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Nincsenek táblázatok. Nincsenek zsúfolt képernyők. Nincs utolsó pillanatos kétely</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platform</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Hagyományos bróker</th><th scope="col">Önálló kereskedés</th></tr></thead>
      <tbody>
        <tr><td>MI-megbízás-végrehajtás</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">korlátozott órák</td><td style="color:var(--muted)">kézzel</td></tr>
        <tr><td>24/7 lefedettség minden piacon</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papírmunka</td><td style="color:var(--muted)">Csináld magad</td></tr>
        <tr><td>Másodperctöredéknyi megbízásirányítás</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">csak csomag szerint</td><td style="color:var(--muted)">kézzel</td></tr>
        <tr><td>Többvalutás jelentés</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">korlátozott órák</td><td style="color:var(--muted)">Csináld magad</td></tr>
        <tr><td>Papírmentes fióknyitás</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papírmunka</td><td style="color:var(--muted)">kézzel</td></tr>
        <tr><td>Tőzsdék közötti arbitrázs</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">csak csomag szerint</td><td style="color:var(--muted)">Csináld magad</td></tr>
        <tr><td>Dedikált személyes menedzser</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">korlátozott órák</td><td style="color:var(--muted)">kézzel</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Amit kap, amit a csináld-magad beállítás nem ad</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Másodperctöredéknyi végrehajtás minden csatlakoztatott piacon.</b> <?= e(SITE_NAME) ?> tartós, alacsony késleltetésű API-kapcsolatokat tart fenn minden támogatott tőzsdével. Amikor a modell jelet ad, a megbízás elküldésre, teljesítésre és az irányítópulton naplózásra kerül a következő tick előtt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">24/7 működik, minden piaci szekcióban.</b> A kriptó nem pihen, és a(z) <?= e(SITE_NAME) ?> sem. A motor hétvégéken és ünnepnapokon is elemzi a párokat, hogy egy lehetőség se maradjon ki.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Többvalutás jelentés.</b> Minden egyenleg, minden ügylet és minden kifizetés a helyi valutájában jelenik meg. Nincs rejtett átváltási lépés.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Elkülönített tőke.</b> Az Ön forrásai a saját fiókjában maradnak. <?= e(SITE_NAME) ?> soha nem tartja őket: a motor csak megbízások küldésére jogosult.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Banki szintű biztonság.</b> TLS-titkosítás a teljes platformon, alapértelmezett kétlépcsős hitelesítés és negyedéves harmadik fél infrastruktúra-auditok. Kereskedési bizonylatok a láncon rögzítve.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Három eszközosztály, egy platform.</b> A legtöbb lakossági platform egyetlen piacra korlátozza. <?= e(SITE_NAME) ?> kriptovalutákkal, tőzsdei részvényekkel és a főbb devizapárokkal kereskedik ugyanarról az irányítópultról.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Előre beállított kockázati limitek minden pozíción.</b> A stop-loss, a maximálisan elfogadott veszteség és a tőkeallokációs plafonok eszközosztályonként vannak beállítva. A motor automatikusan lezár minden küszöböt átlépő ügyletet, és az esemény bekerül az auditnaplóba.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Kinek valószínűleg nem való</h2>
    <p>A nyíltság mindenkinek időt spórol. Ha a következők bármelyike Önre illik, más út jobban megfelel.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Garantált hozamra van szüksége. Egyetlen tisztességes platform sem kínál ilyet, mi sem.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Olyan pénzt szeretne befektetni, amely nélkül nem boldogul.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Szakmai volumenben kereskedik, saját végrehajtási infrastruktúrával.</span></li>
    </ul>
    <p class="jkkyl">A befektetés kockázattal jár, beleértve a befektetett tőke egy részének vagy egészének esetleges elvesztését. A befektetések értéke csökkenhet és növekedhet is, és kevesebbet kaphat vissza, mint amennyit eredetileg betett. Ne fektessen be olyan pénzt, amelynek elvesztését nem engedheti meg magának.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Kezdés — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
