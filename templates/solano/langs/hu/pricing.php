<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Árak — ' . SITE_NAME;
$page_description = 'Egyszerű, átlátható árak — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Egyszerű, átlátható árak.</h1>
    <p class="kpnq92g">A kezdés a(z) <?= e(SITE_NAME) ?> platformon ingyenes. Nincs rejtett díj a fióknyitásért, és csak annyit helyez be, amennyit befektetni kíván: a platform és az eszközök benne vannak.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Hol jelenhetnek meg költségek</h2>
    <p>Ezek az egyetlen pontok, ahol a pénz az egyenleget a választott befektetésen kívül másért hagyja el.</p>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Tétel</th><th scope="col">Felszámolja</th><th scope="col">Megjegyzés</th></tr></thead>
      <tbody>
        <tr><td>Fióknyitás</td><td>—</td><td>Ingyenes.</td></tr>
        <tr><td>Platformhozzáférés</td><td>—</td><td>Benne van, előfizetés nélkül.</td></tr>
        <tr><td>Piaci spread</td><td>Bróker</td><td>A szokásos különbség a vételi és az eladási ár között.</td></tr>
        <tr><td>Hálózati / banki díj</td><td>Fizetési szolgáltató</td><td>A választott módtól függ.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">A tőke kockázatnak van kitéve. Csak annyit fektessen be, amennyinek az elvesztését megengedheti magának.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Nyissa meg a fiókját</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Mi van benne</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ingyenes fióklétrehozás: nincs regisztrációs vagy licencdíj.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Nincs rejtett díj a befizetéseken, kifizetéseken vagy a fiókvezetésen.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Csak a szokásos brókeri spread vagy hálózati költség merülhet fel.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kezdjen a minimális befizetéstől, és növeljen a saját tempójában.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Hogyan néznek ki a számok a gyakorlatban</h2>
    <h3>Az első befizetés, lépésről lépésre</h3>
    <p>Az első befizetés a teljes költségkép egy helyen: az elküldött összeg, a spread az átváltáskor, és semmi más, amíg nem dönt a kereskedés mellett. Nincs havi fiókdíj a hónap végén, és nincs díj azért, ha az egyenleget ott hagyja.</p>
    <h4>Mi történik még aznap</h4>
    <p>Az egyenleg a fizetés jóváírása után jelenik meg, és egy szakértő végigveszi a tervet, mielőtt bármi megnyílna. Semmi sem kerül automatikusan az Ön nevében leadásra.</p>
    <h3>Kifizetések és mennyibe kerülnek</h3>
    <p>A kifizetések arra a fizetési módra térnek vissza, ahonnan a pénz érkezett: ez követelmény, nem preferencia, hogy a fiók az Öné maradjon. A feldolgozás a mi oldalunkon ingyenes; az egyetlen levonás a saját bankja vagy kártyakibocsátója díja lehet.</p>
    <h4>Időzítés, amellyel számolhat</h4>
    <p>A munkanapon benyújtott kérelmeket még aznap átnézzük. A kártyás visszautalások általában három–öt munkanapon belül, az átutalások két napon belül teljesülnek.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
