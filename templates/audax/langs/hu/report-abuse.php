<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Visszaélés bejelentése | ' . SITE_NAME;
$page_description = 'Visszaélés vagy gyanús tevékenység bejelentése: ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Visszaélés bejelentése</h1>
            <p class="bold-title">1. Visszaélés bejelentése</p>
            <p>
              1.1. Ha nem megfelelő tartalmat találsz a weboldalunkon, jelezd
              nekünk a kapcsolati űrlapon.
            </p>
            <p>Kapcsolat: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Ebben a részben információt adhatsz visszaélésről vagy tartalomról,
              amely sérti az irányelveinket.
            </p>
            <p>
              1.3. A bejelentésed fontos számunkra. Adj meg konkrét részleteket, hogy
              megfelelően kivizsgálhassuk az esetet.
            </p>
            <p>A bejelentés elküldésével elfogadod az adatvédelmi tájékoztatót is.</p>
            <p class="bold-title">2. Ki tehet bejelentést</p>
            <p>
              2.1. Ha visszaélés áldozata lettél, vagy nem megfelelő magatartást észleltél, jogod
              van ezt bejelenteni.
            </p>
            <p>2.1.1. Bejelentést csak 18 év feletti személy tehet.</p>
            <p>2.1.2. A bejelentésnek igaznak és tényeken alapulónak kell lennie.</p>
            <p>2.1.3. Az űrlap használatának a te országodban jogszerűnek kell lennie.</p>
            <p>2.2. Nem vállalunk felelősséget hamis vagy rosszindulatú bejelentésekért.</p>
            <p class="bold-title">3. Bejelentési eljárás</p>
            <p>3.1. Fenntartjuk a jogot minden visszaélés-bejelentés kivizsgálására.</p>
            <p>3.2. Ha a bejelentést megalapozottnak találjuk, megtesszük a szükséges intézkedéseket.</p>
            <p class="bold-title">4. Tiltott tevékenységek bejelentéskor</p>
            <p>4.1. Az űrlap rosszindulatú használata nem megengedett.</p>
            <p>4.1.1. Hamis vagy félrevezető bejelentés nem megengedett.</p>
            <p>4.1.2. Más felhasználók zaklatása a bejelentési rendszeren keresztül nem megengedett.</p>
            <p>4.1.3. Botok vagy automatizálás használata a bejelentéshez tilos.</p>
            <p>4.1.4. A bejelentési rendszer manipulálásának minden kísérletét kivizsgáljuk.</p>
            <p>4.1.5. A rendszer használata hamis információ terjesztésére tilos.</p>
            <p>4.1.6. A vizsgálat akadályozása nem megengedett.</p>
            <p>4.1.7. A rendszer használata fenyegetésre nem megengedett.</p>
            <p>4.1.8. A bejelentéssel kapcsolatos minden jogellenes tevékenység szankciót von maga után.</p>
            <p>4.1.9. A bejelentési szabályok megkerülése nem megengedett.</p>
            <p>4.1.10. A bejelentési rendszerrel való visszaélést komolyan vesszük.</p>
            <p class="bold-title">5. Szellemi tulajdon bejelentéskor</p>
            <p>
              5.1. A bejelentéskor küldött tartalom nem ad tulajdonjogot.
            </p>
            <p>5.2. Bejelentéssel a felhasználók nem szereznek jogot a webhely tartalmára.</p>
            <p>5.3. A bejelentések kizárólag vizsgálati célra szolgálnak.</p>
            <p>5.4. Harmadik felek a bejelentéseket nem másolhatják és nem módosíthatják.</p>
            <p class="bold-title">6. Felelősségkorlátozás bejelentéskor</p>
            <p>6.1. A bejelentés elküldésével felelősséget vállalsz a tartalmáért.</p>
            <p>6.2. Nem vállalunk felelősséget a beküldött bejelentések következményeiért.</p>
            <p>6.3. A bejelentésből eredő minden veszteség a felhasználót terheli.</p>
            <p>6.4. Nem vállalunk felelősséget a bejelentések okozta károkért.</p>
            <p>
              6.5. A bejelentési rendszer technikai problémái nem a mi felelősségünk.
            </p>
            <p class="bold-title">7. Információ a bejelentési eljárásról</p>
            <p>
              7.1. A bejelentési rendszer használatával beleegyezel, hogy további információért kapcsolatba léphessünk veled.
            </p>
            <p>7.2. A bejelentéseket bizalmasan kezeljük.</p>
            <p>7.3. A felhasználóknak javasoljuk, hogy őrizzék meg a bejelentés másolatát.</p>
            <p class="bold-title">8. További hivatkozások és források</p>
            <p>8.1. A visszaélés bejelentéséről bővebben az irányelveinkben olvashatsz.</p>
            <p>8.2. A külső forrásokra mutató hivatkozások nem jelentenek ajánlást.</p>
            <p>8.3. Javasoljuk, hogy minden forrást ellenőrizz használat előtt.</p>
            <p class="bold-title">9. Általános rendelkezések a bejelentésekről</p>
            <p>
              9.1. Fenntartjuk a jogot a bejelentési eljárás módosítására, felfüggesztésére vagy megszüntetésére
              bármikor.
            </p>
            <p>
              9.2. Ennek az eljárásnak a feltételei bármikor változhatnak. A bejelentési
              szolgáltatás további használata a változások után az új feltételek elfogadását jelenti.
            </p>
            <p>9.3. A bejelentéssel a felhasználó teljes mértékben elfogadja ezeket a feltételeket.</p>
            <p>
              9.4. Bármely írásbeli vagy szóbeli megállapodás vagy nyilatkozat, amely nem tartozik
              ezeknek a feltételeknek a konkrét pontjai alá, érvénytelen, és egyik felet sem köti.
            </p>
            <p>
              9.5. Az ezekben a feltételekben biztosított, de nem gyakorolt jog — hozzájárulás,
              mulasztás vagy képtelenség miatt — lemondottnak minősül. A jog részleges vagy teljes gyakorlása
              nem zárja ki és nem korlátozza a későbbi gyakorlást.
            </p>
            <p>
              9.6. Ha az illetékes bíróság e feltételek valamely rendelkezését érvénytelennek nyilvánítja, az
              érvénytelennek tekintendő. A feltételek többi része azonban teljes mértékben hatályban marad.
            </p>
            <p>
              9.7. Elismert, hogy ezek a feltételek lehetővé teszik a webhely üzemeltetését harmadik
              felek számára, akik átruházhatják jogaikat és kötelezettségeiket. A felhasználó nem ruházhatja át
              jogait és kötelezettségeit más félre.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
