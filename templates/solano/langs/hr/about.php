<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'O ' . SITE_NAME;
$page_description = 'Jedan račun, jasan pregled vašeg kapitala — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platforma</span>
    <h1>Jedan račun, jasan pregled svega</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> objedinjuje vaš saldo, strategiju i prinos u jednoj transparentnoj ploči, kako bi svaka odluka bila informirana, a svaka brojka vidljiva.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Ljudi iza vašeg računa</h2>
    <p>Iza sučelja stoje analitičari koji dnevno proučavaju tržišta, inženjeri koji održavaju platformu u radu i stručnjaci podrške koji odgovaraju na vašem jeziku.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tržišni analitičari koji dnevno pregledavaju uvjete, ne jednom kvartalno.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inženjeri dostupni platformi, uz stalni nadzor.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Stručnjaci podrške koji upravljaju otvaranjem, provjerom i isplatama.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Propisi, rizik i ono što ne obećavamo</h2>
    <p>Ulaganje uključuje rizik i nijedna platforma ga ne uklanja. Ono što platforma može učiniti jest biti jasna s vama: objaviti uvjete, držati novac klijenata kod reguliranih partnera i dokumentirati kako isplate funkcioniraju.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Provjera identiteta prije nego što se sredstva mogu premjestiti s računa.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Isplate vraćaju se na isti način korišten za uplatu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Uvjeti, upozorenje o riziku i pravila privatnosti objavljeni u cijelosti.</span></li>
    </ul>
    <p class="jkkyl">Ulaganje uključuje rizik, uključujući mogući gubitak dijela ili cijelog kapitala. Vrijednost ulaganja može rasti ili padati, i moguće je da vratite manje nego što ste uložili. Ne ulažite novac koji si ne možete priuštiti izgubiti.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Započnite — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Pošalji poruku</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kako je platforma izgrađena</h2>
    <ol class="nxlk2qu">
      <li><h3>Polazna točka</h3><p>Mala skupina analitičara i inženjera stalno je čula istu pritužbu: alati postoje, ali ih nitko ne objašnjava.</p></li>
      <li><h3>Prva funkcionalna verzija</h3><p>Prva verzija radila je samo jednu stvar: prikazati saldo i poziciju jednostavnim riječima. Sve ostalo uklonjeno je dok taj dio nije postao jasan.</p></li>
      <li><h3>Uključivanje ljudskog faktora</h3><p>Automatizacija odgovara što i kada; ljudi odgovaraju zašto. Dodani su stručnjaci podrške kako bi svaki član imao kome se obratiti.</p></li>
      <li><h3>Otvaranje prema više tržišta</h3><p>Lokalni načini plaćanja, lokalni jezici i lokalno radno vrijeme podrške.</p></li>
      <li><h3>Gdje smo sada</h3><p>Isti principi u većem opsegu: transparentne brojke, dostupni ljudi, bez iznenađenja u sitnim slovima.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Zašto smo ovdje</h2>
    <p>Većina ljudi koji žele ulagati nikada ne započne, jer svaki put čini se namijenjen onima koji već poznaju terminologiju. Mi smo izgradili suprotno: jedan račun, jasan jezik i stručnjak s kojim stvarno možete razgovarati.</p>
    <p>Bez žargona gdje dovoljna jednostavna rečenica, bez naknada koje se pojave tek nakon premještanja novca i bez obećanja prinosa koje nitko ne može iskreno garantirati.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktivni korisnici</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Obujam trgovanja</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Podrška</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
