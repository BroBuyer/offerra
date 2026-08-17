<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'GYIK — ' . SITE_NAME;
$page_description = 'Kérdések, megválaszolva — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kérdések</span>
    <h1>Kérdések, világosan megválaszolva</h1>
    <p class="kpnq92g">Amit a fióknyitás előtt kérdeznek — és a válaszok, amelyeket telefonon is adnánk.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kérdések a pénzről</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Csalás a(z) <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nem: a(z) <?= e(SITE_NAME) ?> ellenőrzéssel működik, a feltételeket és a kockázati tájékoztatót teljes egészében közzéteszi, a kifizetések pedig mindig az eredeti fizetési módra térnek vissza. Minden befektetés valós kockázattal jár, és egyetlen komoly platform sem ígér garantált hozamot — óvakodjon attól, aki ilyet tesz.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Mennyibe kerül a fióknyitás?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">A fióknyitás ingyenes. Nincs regisztrációs díj és nincs előfizetés; csak annyit helyez be, amennyit befektetni kíván.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Mennyi ideig tartanak a kifizetések?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">A kérelmeket munkanapokon dolgozzuk fel, és a befizetési módra térnek vissza. A banki átutalás tovább tart, mint a kártya vagy az e-pénztárca.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Van minimális összeg?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Igen, és szándékosan alacsony, <?= e(money_min()) ?> összegtől, hogy kicsiben kezdhessen, és később hozzáadhasson. A pontos összeg a megerősítés előtt látható.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Gyakran ismételt kérdések</h2>
    <div class="fjl4d">
      <details open><summary>Mennyi a minimális befizetés a kezdéshez?</summary><p>Fiókját megnyithatja és feltöltheti <?= e(money_min()) ?> minimumtól. További forrásokat bármikor hozzáadhat, ahogy a befektetési terve halad.</p></details>
      <details><summary>Hogyan működnek a kifizetések?</summary><p>Kérjen kifizetést bármikor az irányítópultról. Az összeg a választott fizetési módra tér vissza a szokásos feldolgozási időkkel.</p></details>
      <details><summary>Biztonságban van a pénzem?</summary><p>A fiókokat professzionális szintű biztonság és személyazonosság-ellenőrzés védi. Mint minden befektetésnél, tőkéje kockázatnak van kitéve, és az értékek csökkenhetnek vagy növekedhetnek.</p></details>
      <details><summary>Mennyi időbe telik elkezdeni a befektetést?</summary><p>A legtöbb tag néhány perc alatt befejezi a regisztrációt. Az első befizetés feldolgozása után a tervet azonnal aktiválhatja.</p></details>
      <details><summary>Vannak rejtett díjak?</summary><p>Minden költség átláthatóan megjelenik, mielőtt elköteleződik. Mindig látja, mi vonatkozik a tervére — meglepetések nélkül.</p></details>
      <details><summary>Mi a minimális életkor a regisztrációhoz?</summary><p>Legalább 18 évesnek kell lennie fiók nyitásához és befektetéshez. Az életkor és a személyazonosság megerősítéséhez ellenőrzés kérhető.</p></details>
      <details><summary>Mely fizetési módokat fogadják el?</summary><p>Elfogadjuk a szokásos módokat: debit- és hitelkártya, banki átutalás, kiválasztott e-pénztárcák és kriptovaluták. A pontos lehetőségek a befizetési lépésnél jelennek meg.</p></details>
      <details><summary>Mikor érhető el az ügyfélszolgálat?</summary><p>Támogató csapatunk hétfőtől péntekig, 9:00–18:00 között érhető el, és vállalja, hogy minden megkeresésre egy munkanapon belül válaszol.</p></details>
      <details><summary>Hogyan kezelik a nyereségadót?</summary><p>A befektetési nyereség adója az Ön országa szabályaitól függ, és az Ön felelőssége. Javasoljuk a saját nyilvántartást és minősített adótanácsadó megkeresését.</p></details>
      <details><summary>Mi a KYC-ellenőrzés, és miért szükséges?</summary><p>A KYC (Know Your Customer) szabványos személyazonosság-ellenőrzés. Segít biztonságban tartani a fiókokat, és a befektetési számla nyitásának rutin része.</p></details>
      <details><summary>Szükségem van előzetes befektetési tapasztalatra?</summary><p>Nem. Minden tagnak személyes pénzügyi elemzője van, aki minden lépésnél vezeti, így előzetes piaci tudás nem szükséges.</p></details>
      <details><summary>Ki kezeli a befektetéseimet?</summary><p>Dedikált pénzügyi elemző MI-eszközökkel, az Ön céljai és kockázati szintje köré dolgozva. Az elemző a szakmai szakértelmet a technológiával ötvözi — a döntések emberiek maradnak.</p></details>
      <details><summary>Megfelel a platform a szabályozási szabványoknak?</summary><p>Igen — megfelel a nemzeti pénzügyi és kiberbiztonsági szabványoknak, beépített fiókvédelemmel és ellenőrzéssel.</p></details>
      <details><summary>Hozzáadhatok később további forrásokat a fiókomhoz?</summary><p>Igen. Fiókját bármikor feltöltheti, és elemzőjével igazíthatja a tervét, ahogy céljai változnak.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Fiók és biztonság</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hogyan működik a bejelentkezés a(z) <?= e(SITE_NAME) ?> platformon?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">A regisztrált e-mailjével és jelszavával jelentkezik be a weboldalról vagy mobilböngészőből. Ha bekapcsolta a kétlépcsős hitelesítést, extra kódot kérünk; elfelejtett jelszót a bejelentkezési képernyőről állíthatja vissza.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Miért van szükség a személyazonosító okmányaimra?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Az ellenőrzés szükséges, mielőtt a fiók összegeket mozgatna. Azt is megakadályozza, hogy valaki az Ön nevében nyisson fiókot.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Szükségem van előzetes tapasztalatra?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nem. A legtöbb tag anélkül kezd. Egy szakértő végigvezeti az első lépéseken, a demoegyenleg pedig gyakorlást tesz lehetővé.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Használhatom telefonon?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Igen, a platform mobilböngészőben működik, telepítés nélkül.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Kezdés — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Üzenet küldése</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
