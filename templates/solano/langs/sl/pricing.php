<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Cene ' . SITE_NAME;
$page_description = 'Enostavno, pregledno oblikovanje cen — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Cene</span>
    <h1>Enostavno in pregledno oblikovanje cen.</h1>
    <p class="kpnq92g">Začetek uporabe<?= e(SITE_NAME) ?>je brezplačen. Za odprtje računa ni skritih stroškov in vložite le tisto, kar se odločite za naložbo: platforma in njena orodja so vključena.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kje se lahko pojavijo stroški</h2>
    <p>To so edine točke, kjer denar zapusti vaše stanje za kaj drugega kot naložbo, ki ste jo izbrali.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Postavka</th><th scope="col">Zaračunal </th><th scope="col">Opomba</th></tr></thead>
      <tbody>
        <tr><td>Odpiranje računa</td><td>—</td><td>Brezplačno.</td></tr>
        <tr><td>Dostop do platforme</td><td>—</td><td>Vključeno, brez naročnine.</td></tr>
        <tr><td>Tržna širina</td><td>Posrednik</td><td>Običajna razlika med nakupno in prodajno ceno.</td></tr>
        <tr><td>Omrežna/bančna provizija</td><td>Ponudnik plačil</td><td>Odvisno od metode, ki jo izberete.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapital je ogrožen. Vlagajte samo tisto, kar si lahko privoščite izgubiti.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Odprite svoj račun</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kaj je vključeno</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Brezplačna nastavitev računa: brez registracije ali licenčnine.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Brez skritih stroškov pri pologih, dvigih ali vzdrževanju računa.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Veljajo lahko samo standardni razmiki posrednika ali stroški omrežja.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Začnite z minimalnim pologom in ga povečujte po lastni želji.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kako so številke videti v praksi</h2>
    <h3>Prvi depozit, korak za korakom</h3>
    <p>Prvi depozit je celotna slika stroškov na enem mestu: znesek, ki ga pošljete, razpon, ko je pretvorjen, in nič drugega, dokler se ne odločite trgovati. Ob koncu meseca ni nobene provizije za račun in ni nobenih stroškov za pustite stanje tam, kjer je.</p>
    <h4>Kaj se zgodi na isti dan</h4>
    <p>Stanje se prikaže, ko je plačilo počiščeno, strokovnjak pa pregleda načrt, preden se kar koli odpre. Nič ni samodejno nameščeno v vašem imenu.</p>
    <h3>Dvigi in koliko stanejo</h3>
    <p>Dvigi se vrnejo na način plačila, s katerega je denar prispel: to je zahteva, ne prednost, zato račun ostane vaš. Obdelava je z naše strani brezplačna; edini odbitek, ki ga lahko vidite, je tisti, ki ga uporabi vaša banka ali izdajatelj kartice.</p>
    <h4>Čas, ki ga lahko načrtujete</h4>
    <p>Zahtevki oddani na delovni dan se pregledajo še isti dan. Vračilo kartice je običajno poravnano v treh do petih delovnih dneh, bančno nakazilo v dveh.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
