<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Adatvédelmi irányelvek ᐉ ' . SITE_NAME;
$page_description = 'Hogyan gyűjti, használja és védi a(z) ' . SITE_NAME . ' az Ön személyes adatait.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Jogi információk</span>
    <h1>Adatvédelmi irányelvek</h1>
    <p class="etpy2">Hogyan gyűjti, használja és védi a(z) <?= e(SITE_NAME) ?> az Ön személyes adatait.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Utolsó frissítés: 2025. január</p>

    <h2>1. Bevezetés</h2>
    <p><?= e(SITE_NAME) ?> („mi”, „minket”, „miénk”) elkötelezett a látogatók és ügyfelek adatainak védelme mellett. Ez az Adatvédelmi irányelv elmagyarázza, milyen személyes adatokat gyűjtünk, miért és hogyan kezeljük őket, amikor weboldalunkat és szolgáltatásainkat használja.</p>

    <h2>2. Az általunk gyűjtött információk</h2>
    <ul>
      <li><strong>Személyazonosító adatok</strong> — név, születési dátum, államilag kiállított igazolvány a személyazonosság-ellenőrzéshez és a KYC/AML-megfeleléshez.</li>
      <li><strong>Kapcsolattartási adatok</strong> — e-mail-cím, telefonszám, postacím.</li>
      <li><strong>Pénzügyi adatok</strong> — fizetési adatok, tranzakciós előzmények, a források származására vonatkozó információk.</li>
      <li><strong>Technikai adatok</strong> — IP-cím, böngészőtípus, eszközazonosítók, sütik és használati elemzések.</li>
    </ul>

    <h2>3. Hogyan használjuk adatait</h2>
    <ul>
      <li>A személyazonosság ellenőrzésére és a szabályozási kötelezettségek teljesítésére.</li>
      <li>Platformunk és szolgáltatásaink nyújtására, fenntartására és fejlesztésére.</li>
      <li>Fizetések feldolgozására és csalárd tevékenység felismerésére.</li>
      <li>Az Önnel való kommunikációra a fiókjáról, a frissítésekről és a támogatási kérésekről.</li>
      <li>Marketingkommunikáció küldésére, ha hozzájárult (bármikor leiratkozhat).</li>
    </ul>

    <h2>4. Jogi alap</h2>
    <p>A személyes adatokat a következő jogszerű alapok egyike vagy többike alapján kezeljük: szerződés teljesítése, jogi kötelezettség teljesítése, jogos érdekeink vagy az Ön hozzájárulása.</p>

    <h2>5. Megosztás és közzététel</h2>
    <p>Személyes adatokat megoszthatunk szabályozott fizetési szolgáltatókkal, KYC/AML-ellenőrző partnerekkel, felhőinfrastruktúra-szolgáltatókkal, szakmai tanácsadókkal és illetékes hatóságokkal, ha a törvény megköveteli. Személyes adatokat nem értékesítünk.</p>

    <h2>6. Nemzetközi továbbítások</h2>
    <p>Ha személyes adatokat az Ön joghatóságán kívülre továbbítunk, megfelelő garanciákat biztosítunk, beleértve a standard szerződéses záradékokat.</p>

    <h2>7. Adatmegőrzés</h2>
    <p>A személyes adatokat addig őrizzük, amíg a szolgáltatások nyújtásához, valamint a jogi, szabályozási és számviteli követelmények teljesítéséhez szükséges — jellemzően legalább öt évig a fiók lezárása után.</p>

    <h2>8. Az Ön jogai</h2>
    <p>A vonatkozó jog függvényében kérheti személyes adataihoz való hozzáférést, helyesbítést, törlést, korlátozást vagy hordozhatóságot, és bizonyos kezelés ellen tiltakozhat. E jogok gyakorlásához vegye fel velünk a kapcsolatot az alábbi címen.</p>

    <h2>9. Sütik</h2>
    <p>Alapvető és analitikai sütiket használunk az oldal működtetéséhez és a használat megértéséhez. A sütiket a böngészőbeállításokban kezelheti.</p>

    <h2>10. Biztonság</h2>
    <p>Adminisztratív, technikai és fizikai védelmet alkalmazunk a személyes adatok jogosulatlan hozzáférése, közzététele, módosítása vagy megsemmisítése ellen. Egyetlen rendszer sem tökéletesen biztonságos, és nem garantálhatunk abszolút biztonságot.</p>

    <h2>11. Változások</h2>
    <p>Ezt az irányelvet időről időre frissíthetjük. A legújabb verzió mindig elérhető ezen az oldalon a frissített dátummal.</p>

    <h2>12. Kapcsolat</h2>
    <p>Adatvédelmi kérdésekben vagy jogai gyakorlásához lépjen kapcsolatba a(z) <?= e(SITE_NAME) ?> adatvédelmi csapatával a kapcsolati oldalon.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Vissza a kezdőlapra</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
