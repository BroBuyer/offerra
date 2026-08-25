<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Felhasználási feltételek ᐉ ' . SITE_NAME;
$page_description = 'A(z) ' . SITE_NAME . ' felhasználási feltételei';
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Jogi információk</span>
    <h1>Felhasználási feltételek</h1>
    <p class="etpy2">A szabályok, amelyek a(z) <?= e(SITE_NAME) ?> elérésekor vagy használatakor érvényesek.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Utolsó frissítés: 2025. január</p>

    <h2>1. A feltételek elfogadása</h2>
    <p>A(z) <?= e(SITE_NAME) ?> weboldalának és szolgáltatásainak elérésével vagy használatával elfogadja ezeket a Felhasználási feltételeket. Ha nem ért egyet, ne használja a szolgáltatásokat.</p>

    <h2>2. Jogosultság</h2>
    <p>Legalább 18 évesnek kell lennie (vagy a nagykorúság korának az Ön joghatóságában), és jogképességgel kell rendelkeznie kötelező szerződés megkötéséhez. A szolgáltatásokat nem kínáljuk korlátozott joghatóságok lakosainak, ahol az ilyen ajánlat jogellenes lenne.</p>

    <h2>3. Fiókregisztráció</h2>
    <p>Elfogadja, hogy a regisztráció során pontos, aktuális és teljes információkat ad meg, és ezeket naprakészen tartja. Ön felelős a hitelesítő adatok titkosságáért és a fiókján végzett minden tevékenységért.</p>

    <h2>4. Szolgáltatások</h2>
    <p><?= e(SITE_NAME) ?> technológiai eszközöket és oktató jellegű információkat nyújt az online befektetéssel kapcsolatban. Nem vagyunk az Ön pénzügyi tanácsadója. Semmi ezen az oldalon nem minősül személyre szabott befektetési tanácsnak, adótanácsnak, illetve pénzügyi eszköz vételére vagy eladására való felhívásnak.</p>

    <h2>5. Díjak</h2>
    <p>Az alkalmazandó díjak, spreadek és jutalékok a platformon vagy az érvényes díjtáblázatban kerülnek közzétételre. Ön felelős a tevékenységeiből eredő adókért.</p>

    <h2>6. Tiltott magatartás</h2>
    <ul>
      <li>A szolgáltatások használata pénzmosásra, terrorizmusfinanszírozásra, piaci manipulációra vagy bármely jogellenes célra.</li>
      <li>Más személy megszemélyesítése vagy hamis személyazonosító adatok megadása.</li>
      <li>Kísérlet a platform bármely részébe való beavatkozásra, kompromittálására vagy reverse engineeringjére.</li>
      <li>Automatizált eszközök használata a szolgáltatások elérésére a kifejezetten engedélyezettől eltérő módon.</li>
    </ul>

    <h2>7. Szellemi tulajdon</h2>
    <p>Az oldalon található összes tartalom, védjegy, szoftver és anyag a(z) <?= e(SITE_NAME) ?> vagy licencadóinak tulajdona, és a vonatkozó szellemitulajdon-jogok védik. Korlátozott, nem kizárólagos, visszavonható licencet kap a szolgáltatások rendeltetésszerű használatára.</p>

    <h2>8. Harmadik felek szolgáltatásai</h2>
    <p>A platform tartalmazhat harmadik felek szolgáltatásaira mutató hivatkozásokat vagy integrációkat. Nem vagyunk felelősek az ilyen szolgáltatásokért, elérhetőségükért, pontosságukért vagy tartalmukért.</p>

    <h2>9. Felelősségkizárások</h2>
    <p>A szolgáltatások „ahogy van” és „ahogy elérhető” alapon, bármilyen garancia nélkül kerülnek nyújtásra. A kereskedés jelentős veszteségkockázattal jár. Lásd a <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Kockázati tájékoztató</a> további részleteit.</p>

    <h2>10. Felelősségkorlátozás</h2>
    <p>A törvény által megengedett maximális mértékben a(z) <?= e(SITE_NAME) ?> nem felel közvetett, járulékos, különleges, következményes vagy büntető jellegű károkért, sem a szolgáltatások használatából eredő elmaradt nyereségért vagy bevételért.</p>

    <h2>11. Kártalanítás</h2>
    <p>Elfogadja, hogy kártalanítja és mentesíti a(z) <?= e(SITE_NAME) ?> platformot, kapcsolt vállalkozásait és munkatársait a Feltételek megszegéséből vagy a szolgáltatások helytelen használatából eredő bármely igény alól.</p>

    <h2>12. Felfüggesztés és megszüntetés</h2>
    <p>Bármikor felfüggeszthetjük vagy megszüntethetjük a szolgáltatásokhoz való hozzáférést, értesítéssel vagy anélkül, ha úgy véljük, megszegte ezeket a Feltételeket vagy a vonatkozó jogot.</p>

    <h2>13. Irányadó jog</h2>
    <p>Ezeket a Feltételeket a(z) <?= e(SITE_NAME) ?> székhelyén alkalmazandó jogok szabályozzák, a jogválasztási elvek figyelmen kívül hagyásával.</p>

    <h2>14. Változások</h2>
    <p>Ezeket a Feltételeket időről időre módosíthatjuk. A szolgáltatások változások utáni további használata a módosított Feltételek elfogadását jelenti.</p>

    <h2>15. Kapcsolat</h2>
    <p>Ezekkel a Feltételekkel kapcsolatos kérdéseket a kapcsolati oldalon küldheti el.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Vissza a kezdőlapra</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
