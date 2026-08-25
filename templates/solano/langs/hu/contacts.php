<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kapcsolat — ' . SITE_NAME . ' ᐉ Segítünk';
$page_description = 'Kérdése van a(z) ' . SITE_NAME . ' platformról vagy a fiókjáról?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kapcsolat</span>
    <h1>Segítünk</h1>
    <p class="kpnq92g">Kérdése van a(z) <?= e(SITE_NAME) ?> platformról vagy a fiókjáról? Támogató csapatunk örömmel segít. Írjon nekünk, és amint tudunk, válaszolunk.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Mielőtt írna nekünk</h2>
    <p>A legtöbb kérdésre már van válasz az oldalon, és előbb megnézni általában gyorsabb, mint a válaszra várni.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">GYIK</a> — költségek, kifizetések, ellenőrzés és minimális összegek.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Hogyan működik</a> — mi történik a regisztráció után, lépésről lépésre.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Árak</a> — mi ingyenes, és hol jelenhet meg költség.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Kezdés — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Hogyan léphet kapcsolatba velünk</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Csatorna</th><th scope="col">Mire a legjobb</th><th scope="col">Válasz</th></tr></thead>
      <tbody>
        <tr><td>E-mailes támogatás — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Fiókkérdések, ellenőrzés, kifizetések</td><td>Általában egy munkanapon belül válaszolunk.</td></tr>
        <tr><td>Visszahívás kérése</td><td>Bármi, ami telefonon könnyebben elmagyarázható</td><td>Támogatási órák: hétfőtől péntekig, 9:00–18:00</td></tr>
        <tr><td>Visszaélés bejelentése — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Megszemélyesítés, márka-visszaélés, gyanús üzenetek</td><td>Beérkezéskor átnézve</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Mire számíthat, ha kapcsolatba lép</h2>
    <h3>Melyik csatornát használja</h3>
    <p>Az e-mail a megfelelő választás mindenhez, ami melléklettel jár: személyazonosság-ellenőrzés, kifizetési kérdések, kivonattal kapcsolatos ügyek. A visszahívási űrlap a többire való, mert a fiókkérdések többsége két perc beszélgetéssel gyorsabban megoldódik, mint négy üzenettel.</p>
    <h4>A támogatási órákon kívül</h4>
    <p>Az este vagy hétvégén küldött üzenetek a sorban maradnak, és a következő munkanap elején válaszolunk rájuk, érkezési sorrendben.</p>
    <h3>Részletek, amelyeket érdemes megadni</h3>
    <p>A regisztrált e-mail és a hozzávetőleges dátum elég a fiók megtalálásához. Soha ne küldjön jelszót, teljes kártyaszámot vagy egyszeri kódot: csapatunk tagja soha nem kéri ezeket.</p>
    <h4>Ha valami nem tűnik rendben</h4>
    <p>Jelentse még aznap. Bármit, ami fel nem ismert fizetéssel jár, azonnal kezelünk, a szokásos soron kívül.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
