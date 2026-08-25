<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Rólunk — ' . SITE_NAME;
$page_description = 'Egy fiók, tiszta kép a tőkéjéről — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">A platform</span>
    <h1>Egy fiók, tiszta kép mindenről</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> egyetlen átlátható irányítópultra hozza az egyenleget, a stratégiát és a teljesítményt, hogy minden döntés megalapozott legyen, és minden szám látható maradjon.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>A fiókja mögött álló emberek</h2>
    <p>A felület mögött elemzők állnak, akik naponta vizsgálják a piacokat, mérnökök, akik üzemeltetik a platformot, és támogatási szakértők, akik az Ön nyelvén válaszolnak.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Piaci elemzők, akik naponta vizsgálják a feltételeket, nem negyedévente egyszer.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Mérnökök a platformhoz, éjjel-nappali felügyelettel.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Támogatási szakértők az onboardingra, az ellenőrzésre és a kifizetésekre.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Szabályozás, kockázat és amit nem ígérünk</h2>
    <p>A befektetés kockázattal jár, és egyetlen platform sem szünteti meg. Amit egy platform tehet: világos legyen Önnel — közzéteszi a feltételeket, az ügyfélpénzt szabályozott partnereknél tartja, és dokumentálja a kifizetéseket.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Személyazonosság-ellenőrzés, mielőtt összeg mozdulna a fiókban.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>A kifizetések ugyanarra a módra térnek vissza, mint a befizetés.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Feltételek, kockázati tájékoztató és adatvédelmi irányelvek teljes egészében közzétéve.</span></li>
    </ul>
    <p class="jkkyl">A befektetés kockázattal jár, beleértve a befektetett tőke egy részének vagy egészének esetleges elvesztését. A befektetések értéke csökkenhet és növekedhet is, és kevesebbet kaphat vissza, mint amennyit eredetileg betett. Ne fektessen be olyan pénzt, amelynek elvesztését nem engedheti meg magának.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Kezdés — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Üzenet küldése</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hogyan épült a platform</h2>
    <ol class="nxlk2qu">
      <li><h3>A kiindulópont</h3><p>Elemzők és mérnökök kis csoportja ugyanazt a panaszt hallotta: az eszközök megvannak, de senki sem magyarázza el őket.</p></li>
      <li><h3>Első működő verzió</h3><p>Az első verzió egy dolgot csinált: közérthetően mutatta az egyenleget és a pozíciót. Minden mást eltávolítottunk, amíg ez tiszta nem lett.</p></li>
      <li><h3>Az emberi oldal bevonása</h3><p>Az automatizálás a mire és a mikorra válaszol; az emberek a miértre. Támogatási szakértők kerültek be, hogy minden tagnak legyen kit megkérdeznie.</p></li>
      <li><h3>Nyitás további piacokra</h3><p>Helyi fizetési módok, helyi nyelvek és helyi támogatási órák.</p></li>
      <li><h3>Hol tartunk most</h3><p>Ugyanazok az elvek nagyobb léptékben: átlátható számok, elérhető emberek, nincsenek meglepetések a kisbetűs részben.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Miért vagyunk itt</h2>
    <p>A legtöbb ember, aki be szeretne fektetni, soha nem kezd bele, mert minden út úgy tűnik, valakinek készült, aki már ismeri a szókincset. Mi az ellenkezőjét építettük: egy fiók, tiszta nyelv, és egy szakértő, akivel tényleg beszélhet.</p>
    <p>Nincs zsargon ott, ahol egy egyszerű mondat elég, nincsenek díjak, amelyek csak a pénz mozgása után jelennek meg, és nincsenek hozamígéretek, amelyeket senki sem garantálhat tisztességesen.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktív felhasználók</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Kereskedett volumen</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Támogatás</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
