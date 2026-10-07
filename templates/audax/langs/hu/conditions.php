<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Felhasználási feltételek | ' . SITE_NAME;
$page_description = 'A platform felhasználási feltételei: ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Felhasználási feltételek</h1>
            <p class="bold-title">1. Bevezetés</p>
            <p>1.1. A szolgáltatások használatához el kell fogadnod ezeket a feltételeket.</p>
            <p>1.2. Ezek a feltételek jogilag kötelező megállapodást alkotnak.</p>
            <p>1.3. A webhely további használata a feltételek elfogadását jelenti.</p>
            <p>
              1.4. Kérdés esetén itt érhetsz el minket:
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Használati jog</p>
            <p>2.1. A szolgáltatásokat csak 18 év feletti személyek használhatják.</p>
            <p>2.1.1. Olyan országban kell élned, ahol a szolgáltatások jogszerűek.</p>
            <p>2.1.2. Nem szerepelhetsz szankciós listán.</p>
            <p>2.1.3. Rendelkezned kell szerződéskötési képességgel.</p>
            <p>2.2. Nem vállalunk felelősséget jogosulatlan felhasználók használatáért.</p>
            <p class="bold-title">3. Felhasználói fiók</p>
            <p>3.1. Te felelsz a fiókod biztonságáért.</p>
            <p>3.2. Ne oszd meg a jelszavad harmadik féllel.</p>
            <p class="bold-title">4. Tiltott tevékenységek</p>
            <p>4.1. A szolgáltatások jogellenes célú használata nem megengedett.</p>
            <p>4.1.1. A pénzmosás szigorúan tilos.</p>
            <p>4.1.2. A csalást bejelentjük az illetékes hatóságoknak.</p>
            <p>4.1.3. Botok vagy automatizáló szoftver használata nem megengedett.</p>
            <p>4.1.4. A rendszer manipulálásának minden kísérletét kivizsgáljuk.</p>
            <p>4.1.5. Hamis információ terjesztése tilos.</p>
            <p>4.1.6. A vizsgálatok akadályozása nem megengedett.</p>
            <p>4.1.7. Más felhasználók fenyegetése tilos.</p>
            <p>4.1.8. Minden jogellenes tevékenység szankciót von maga után.</p>
            <p>4.1.9. A szabályok megkerülése nem megengedett.</p>
            <p>4.1.10. A rendszerrel való visszaélést komolyan vesszük.</p>
            <p class="bold-title">5. Szellemi tulajdon</p>
            <p>5.1. A webhely minden tartalma a mi szellemi tulajdonunk.</p>
            <p>5.2. A felhasználók nem szereznek jogot a webhely tartalmára.</p>
            <p>5.3. A tartalom engedély nélkül nem másolható.</p>
            <p>5.4. Harmadik felek a tartalmat nem módosíthatják.</p>
            <p class="bold-title">6. Felelősségkorlátozás</p>
            <p>6.1. A szolgáltatásokat saját felelősségedre használod.</p>
            <p>6.2. Nem vállalunk felelősséget a szolgáltatások használatából eredő veszteségekért.</p>
            <p>6.3. A webhely használatából eredő minden veszteség a felhasználót terheli.</p>
            <p>6.4. Nem vállalunk felelősséget a webhely használata okozta károkért.</p>
            <p>6.5. A technikai problémák nem a mi felelősségünk.</p>
            <p class="bold-title">7. Információk</p>
            <p>7.1. A szolgáltatások használatával beleegyezel a kapcsolatfelvételbe.</p>
            <p>7.2. Az információkat bizalmasan kezeljük.</p>
            <p>7.3. A felhasználóknak javasoljuk a nyilvántartás megőrzését.</p>
            <p class="bold-title">8. Hivatkozások és további források</p>
            <p>8.1. További információt az irányelveinkben találsz.</p>
            <p>8.2. A külső hivatkozások nem jelentenek ajánlást.</p>
            <p>8.3. Javasoljuk a források ellenőrzését használat előtt.</p>
            <p class="bold-title">9. Általános rendelkezések</p>
            <p>9.1. Fenntartjuk a jogot a szolgáltatások bármikori módosítására.</p>
            <p>9.2. A feltételek bármikor változhatnak.</p>
            <p>9.3. A szolgáltatások használatával elfogadod ezeket a feltételeket.</p>
            <p>9.4. A szóbeli megállapodások nem érvényesek.</p>
            <p>9.5. A nem gyakorolt jogok nem minősülnek lemondottnak.</p>
            <p>
              9.6. Ha egy rendelkezést érvénytelennek nyilvánítanak, a többi hatályban marad.
            </p>
            <p>9.7. A szolgáltatásokat külső szolgáltatók is kezelhetik.</p>
            <p>
              9.8. Ezekre a feltételekre <?= e(geo_in()) ?> joga vonatkozik. Minden vitát az
              illetékes bíróság elé terjesztünk <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
