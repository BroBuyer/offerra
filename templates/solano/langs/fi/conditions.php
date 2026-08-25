<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Käyttöehdot ᐉ ' . SITE_NAME;
$page_description = 'Käyttöehdot palvelulle ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Oikeudelliset tiedot</span>
    <h1>Käyttöehdot</h1>
    <p class="etpy2">Säännöt, jotka pätevät, kun käytätte palvelua <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Viimeksi päivitetty: tammikuu 2025</p>

    <h2>1. Ehtojen hyväksyminen</h2>
    <p>Käyttämällä <?= e(SITE_NAME) ?>-sivustoa ja -palveluja hyväksytte nämä käyttöehdot. Jos ette hyväksy, älkää käyttäkö palveluja.</p>

    <h2>2. Kelpoisuus</h2>
    <p>Teidän on oltava vähintään 18-vuotiaita (tai täysi-ikäisiä lainkäyttöalueellanne) ja oikeudellisesti kykeneviä tekemään sitovan sopimuksen. Palveluja ei tarjota rajoitettujen lainkäyttöalueiden asukkaille, joissa tarjous olisi lainvastainen.</p>

    <h2>3. Tilin rekisteröinti</h2>
    <p>Sitoudutte antamaan rekisteröinnissä paikkansapitävät, ajantasaiset ja täydelliset tiedot ja pitämään ne ajan tasalla. Vastuussanne on tunnusten luottamuksellisuus ja kaikki toiminta tilillänne.</p>

    <h2>4. Palvelut</h2>
    <p><?= e(SITE_NAME) ?> tarjoaa teknisiä työkaluja ja oppimateriaalia verkossa sijoittamiseen. Emme ole rahoitusneuvojanne. Mikään tällä sivustolla ei ole räätälöityä sijoitus- tai veroneuvontaa eikä kehotusta ostaa tai myydä rahoitusvälinettä.</p>

    <h2>5. Kulut</h2>
    <p>Sovellettavat kulut, spreadit ja palkkiot ilmoitetaan alustalla tai hinnastossa. Vastuussanne ovat verot toiminnastanne.</p>

    <h2>6. Kielletty toiminta</h2>
    <ul>
      <li>Palvelujen käyttäminen rahanpesuun, terrorismin rahoittamiseen, markkinoiden manipulointiin tai mihin tahansa lainvastaiseen tarkoitukseen.</li>
      <li>Tekeytyminen toiseksi henkilöksi tai väärien identiteettitietojen antaminen.</li>
      <li>Yritykset häiritä, vaarantaa tai reverse-engineeraata mitä tahansa alustan osaa.</li>
      <li>Automatisoitujen työkalujen käyttäminen palveluihin muuten kuin nimenomaisesti sallitusti.</li>
    </ul>

    <h2>7. Immateriaalioikeudet</h2>
    <p>Kaikki sisältö, tavaramerkit, ohjelmistot ja materiaalit sivustolla ovat <?= e(SITE_NAME) ?>:n tai lisenssinantajien omaisuutta ja niitä suojaa immateriaalioikeus. Saatte rajatun, ei-yksinomaisen, peruutettavissa olevan lisenssin käyttää palveluja niiden tarkoitettuun käyttöön.</p>

    <h2>8. Kolmannen osapuolen palvelut</h2>
    <p>Alusta voi sisältää linkkejä kolmannen osapuolen palveluihin tai integroitua niihin. Emme vastaa näistä palveluista emmekä niiden saatavuudesta, tarkkuudesta tai sisällöstä.</p>

    <h2>9. Vastuuvapauslausekkeet</h2>
    <p>Palvelut tarjotaan ”sellaisenaan” ja ”saatavuuden mukaan” ilman minkäänlaisia takuita. Kaupankäyntiin liittyy olennainen tappion riski. Ks. <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Riskitiedote</a> lisätietoja varten.</p>

    <h2>10. Vastuunrajoitus</h2>
    <p>Lain sallimassa enimmäismäärässä <?= e(SITE_NAME) ?> ei vastaa epäsuorista, satunnaisista, erityisistä, välillisistä tai rangaistusluonteisista vahingoista eikä voiton tai tuoton menetyksestä palvelujen käytöstä.</p>

    <h2>11. Vastuuvapautus</h2>
    <p>Sitoudutte korvaamaan ja vapauttamaan <?= e(SITE_NAME) ?>:n, sen tytäryhtiöt ja henkilöstön vaatimuksista, jotka johtuvat näiden ehtojen rikkomisesta tai palvelujen väärinkäytöstä.</p>

    <h2>12. Keskeytys ja päättäminen</h2>
    <p>Voimme keskeyttää tai päättää pääsyn palveluihin milloin tahansa, ilmoituksella tai ilman, jos uskomme teidän rikkoneen näitä ehtoja tai lakia.</p>

    <h2>13. Sovellettava laki</h2>
    <p>Näihin ehtoihin sovelletaan <?= e(SITE_NAME) ?>:n kotipaikan lakia, ilman lainvalintasääntöjä.</p>

    <h2>14. Muutokset</h2>
    <p>Voimme muuttaa näitä ehtoja ajoittain. Palvelujen käytön jatkaminen muutosten jälkeen merkitsee tarkistettujen ehtojen hyväksymistä.</p>

    <h2>15. Yhteystiedot</h2>
    <p>Kysymyksiä näistä ehdoista voi lähettää yhteystietosivulta.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Takaisin etusivulle</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
