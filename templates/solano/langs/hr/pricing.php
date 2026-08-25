<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Cijene ' . SITE_NAME;
$page_description = 'Jednostavne i transparentne cijene — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Cijene</span>
    <h1>Jednostavne i transparentne cijene.</h1>
    <p class="kpnq92g">Počnite s <?= e(SITE_NAME) ?> je besplatno. Nema skrivenih naknada za otvaranje računa, uplatite samo onoliko koliko odlučite uložiti: platforma i alati su uključeni.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Gdje se mogu pojaviti troškovi</h2>
    <p>Ovo su jedina mjesta gdje novac napušta saldo zbog nečega što nije vaše odabrano ulaganje.</p>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Stavka</th><th scope="col">Naplaćuje</th><th scope="col">Napomena</th></tr></thead>
      <tbody>
        <tr><td>Otvaranje računa</td><td>—</td><td>Besplatno.</td></tr>
        <tr><td>Pristup platformi</td><td>—</td><td>Uključeno, bez pretplate.</td></tr>
        <tr><td>Tržišni spread</td><td>Broker</td><td>Uobičajena razlika između kupovne i prodajne cijene.</td></tr>
        <tr><td>Mrežna / bankovna naknada</td><td>Pružatelj plaćanja</td><td>Ovisi o načinu koji odaberete.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapital je u riziku. Uložite samo onoliko koliko si možete priuštiti izgubiti.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Otvoriti račun</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Što je uključeno</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Besplatno otvaranje računa: bez registracijskih ni licencnih naknada.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Bez skrivenih naknada za uplate, isplate ili održavanje računa.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Mogu se primijeniti samo uobičajeni broker spreadovi ili mrežni troškovi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Počnite od minimalnog depozita i rastite vlastitim tempom.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kako brojke izgledaju u praksi</h2>
    <h3>Prva uplata, korak po korak</h3>
    <p>Prva uplata sažima sve troškove na jednom mjestu: iznos koji šaljete, spread pri konverziji i ništa više dok ne odlučite trgovati. Nema mjesečne naknade za račun niti naknade za ostavljanje salda.</p>
    <h4>Što se događa isti dan</h4>
    <p>Saldo se pojavljuje kad se potvrdi plaćanje, a stručnjak prolazi plan prije otvaranja bilo čega. Ništa se ne postavlja automatski u vaše ime.</p>
    <h3>Isplate i što koštaju</h3>
    <p>Isplate vraćaju se na način plaćanja kojim je novac stigao: to je zahtjev, ne preferencija, kako bi račun ostao vaš. Obrada je besplatna s naše strane; jedino moguće odbitak dolazi od vaše banke ili izdavatelja kartice.</p>
    <h4>Rokovi na koje možete računati</h4>
    <p>Zahtjevi radnim danom pregledavaju se isti dan. Povrati na karticu obično se podmiruju za tri do pet radnih dana, prijenosi za dva.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
