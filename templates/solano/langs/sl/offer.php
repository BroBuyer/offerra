<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zakaj mi ' . SITE_NAME;
$page_description = 'Zakaj se ljudje odločijo začeti z ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Zakaj ta platforma</span>
    <h1>Zakaj se ljudje odločijo začeti tukaj</h1>
    <p class="kpnq92g">Ni prodajna predstava: specifični, preverljivi razlogi in deli, ki ne bodo ustrezali vsem.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Brez preglednic. Brez zamašenih zaslonov. Brez dvomov v zadnjem trenutku</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platformaa</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Tradicionalni posrednik</th><th scope="col">Trgujte sami</th></tr></thead>
      <tbody>
        <tr><td>Izvedba naročil AI</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">omejene ure</td><td style="color:var(--muted)">priročnik</td></tr>
        <tr><td>24/7 pokritost na vseh trgih</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papirologijo</td><td style="color:var(--muted)">Naredite sami</td></tr>
        <tr><td>Usmerjanje poddrugega reda</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">samo po stopnji</td><td style="color:var(--muted)">priročnik</td></tr>
        <tr><td>Večvalutno poročanje</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">omejene ure</td><td style="color:var(--muted)">Naredite sami</td></tr>
        <tr><td>Brezpapirno odpiranje računa</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">papirologijo</td><td style="color:var(--muted)">priročnik</td></tr>
        <tr><td>Navzkrižna menjalna arbitraža</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">samo po stopnji</td><td style="color:var(--muted)">Naredite sami</td></tr>
        <tr><td>Predan osebni menedžer</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">omejene ure</td><td style="color:var(--muted)">priročnik</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kaj dobite, česar nastavitev "naredi sam" ne</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Subsekundna izvedba na vsakem povezanem trgu.</b> <?= e(SITE_NAME) ?> ohranja stalne povezave API z nizko zakasnitvijo z vsako podprto borzo. Ko model ustvari signal, se naročilo pošlje, izpolni in zabeleži na nadzorni plošči pred naslednjo kljukico.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Deluje 24/7, skozi vsako tržno sejo.</b> Kripto ne počiva in tudi ne <?= e(SITE_NAME) ?>. Motor še naprej analizira pare ob vikendih in praznikih, tako da priložnosti ne zamudite.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Večvalutno poročanje.</b> Vsako stanje, vsako trgovanje in vsak dvig je prikazan v vaši lokalni valuti. Na nobeni točki ni skritih korakov pretvorbe.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Ločen kapital.</b> Vaša sredstva ostanejo na vašem računu. <?= e(SITE_NAME) ?> nikoli jih ne zadrži: sistem ima samo dovoljenje za pošiljanje naročil.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Varnost bančnega razreda.</b> Šifriranje TLS na celotni platformi, privzeto preverjanje v dveh korakih in četrtletne revizije infrastrukture tretjih oseb. Trgovinski prejemki, prijavljeni v verigi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Trije razredi sredstev, ena platforma.</b> Večina maloprodajnih platform vas omejuje na en trg. <?= e(SITE_NAME) ?> trguje s kriptovalutami, delnicami, ki kotirajo na borzi, in glavnimi valutnimi pari z iste nadzorne plošče.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Vnaprej nastavljene omejitve tveganja za vsako pozicijo.</b> Stopnja izgube, največja dovoljena izguba in omejitev dodelitve kapitala so konfigurirane glede na razred sredstev. Mehanizem samodejno zapre vsako trgovanje, ki preseže prag, in dogodek se zabeleži v vaši zgodovini revizije.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Za koga to verjetno ni</h2>
    <p>Odkritost pri tem vsem prihrani čas. Če vas opisuje kar koli od naslednjega, vam bo bolj ustrezala druga pot.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Potrebujete zajamčene donose. Nobena poštena platforma jih ne ponuja in tudi mi jih ne.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Želite vložiti denar, brez katerega si ne morete privoščiti.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Trgujete s profesionalnim obsegom z lastnim izvršilnim skladom.</span></li>
    </ul>
    <p class="jkkyl">Naložba vključuje tveganje, vključno z možno izgubo dela ali celotnega kapitala, ki ga vložite. Vrednost naložb se lahko zniža ali poveča, povrnjeno pa lahko dobite manj, kot ste prvotno vložili. Ne vlagajte denarja, ki si ga ne morete privoščiti izgubiti.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začetek — <?= e(money_min()) ?> od</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
