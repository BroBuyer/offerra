<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'O ' . SITE_NAME;
$page_description = 'En račun, jasen pogled na vaš kapital — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platforma</span>
    <h1>En račun, jasen pogled na vse</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?>prinaša vaše ravnovesje, vašo strategijo in vašo uspešnost na eno pregledno nadzorno ploščo, tako da je vsaka odločitev informirana in vsaka številka na vidiku.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Ljudje, ki stojijo za vašim računom</h2>
    <p>Za vmesnikom stojijo analitiki, ki vsak dan preučujejo trge, inženirji, ki skrbijo za delovanje platforme, in strokovnjaki za podporo, ki odgovarjajo v vašem jeziku.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tržni analitiki, ki dnevno pregledujejo razmere, ne enkrat na četrtletje.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inženirji na voljo za platformo z 24-urnim nadzorom.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Strokovnjaki za podporo, ki skrbijo za vkrcanje, preverjanje in dvige.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulacija, tveganje in česa ne obljubljamo</h2>
    <p>Vlaganje vključuje tveganje in nobena platforma ga ne odpravi. Kaj lahko stori platforma, je, da vam je jasno: objavite svoje pogoje, zadržite denar strank pri reguliranih partnerjih in dokumentirajte, kako potekajo dvigi.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Preverjanje identitete, preden lahko sredstva preidejo na račun.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Dvigi se vrnejo na isto metodo, uporabljeno za polog.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Pogoji, razkritje tveganja in politika zasebnosti objavljeni v celoti.</span></li>
    </ul>
    <p class="jkkyl">Naložba vključuje tveganje, vključno z možno izgubo dela ali celotnega kapitala, ki ga vložite. Vrednost naložb se lahko zniža ali poveča, povrnjeno pa lahko dobite manj, kot ste prvotno vložili. Ne vlagajte denarja, ki si ga ne morete privoščiti izgubiti.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začetek —<?= e(money_min()) ?> od</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Pošlji sporočilo</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kako je bila platforma zgrajena</h2>
    <ol class="nxlk2qu">
      <li><h3>Izhodišče</h3><p>Majhna skupina analitikov in inženirjev je ves čas poslušala isto pritožbo: orodja obstajajo, a jih nihče ne razloži.</p></li>
      <li><h3>Prva delovna verzija</h3><p>Prva različica je naredila eno stvar: prikazala ravnotežje in položaj v preprostih izrazih. Vse ostalo je bilo odstranjeno, dokler ta del ni bil jasen.</p></li>
      <li><h3>Vnašanje človeške plati</h3><p>Avtomatizacija odgovarja, kaj in kdaj; ljudje odgovorijo zakaj. Dodani so bili strokovnjaki za podporo, tako da lahko vsak član koga vpraša.</p></li>
      <li><h3>Odpiranje na več trgov</h3><p>Lokalni načini plačila, lokalni jeziki in ure lokalne podpore.</p></li>
      <li><h3>Kje smo zdaj</h3><p>Ista načela v večjem obsegu: pregledne številke, ljudje, ki jih lahko dosežete, brez presenečenj v drobnem tisku.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Za kaj smo tukaj</h2>
    <p>Večina ljudi, ki želijo vlagati, nikoli ne začne, saj je videti, da je vsaka pot zasnovana za nekoga, ki že pozna besedišče. Zgradili smo nasprotje: en račun, jasen jezik in strokovnjak, s katerim se lahko dejansko pogovarjate.</p>
    <p>Brez žargona, kjer bi zadostoval preprost stavek, brez provizij, ki se prikažejo šele, ko se denar premakne, in brez obljub o vračilu, ki jih nihče ne more pošteno jamčiti.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktivni uporabniki</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Obseg trgovanja</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Podpora</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
