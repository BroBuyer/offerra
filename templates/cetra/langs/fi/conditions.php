<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Käyttöehdot');
$page_description = 'Säännöt, joita sovelletaan, kun käytät ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Etusivu">
      <a href="<?= page_url() ?>#platform">Alusta</a>
      <a href="<?= page_url() ?>#how">Miten se toimii</a>
      <a href="<?= page_url() ?>#markets">Markkinat</a>
      <a href="<?= page_url() ?>#faq">Usein kysytyt kysymykset</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Aloita</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Käyttöehdot</h1>
      <p class="lede">Säännöt, joita sovelletaan, kun käytät <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Viimeksi päivitetty: tammikuu 2025</p>

      <h2>1. Ehtojen hyväksyminen</h2>
      <p>Käyttämällä <?= e(SITE_NAME) ?>-sivustoa ja -palveluita hyväksyt nämä käyttöehdot. Jos et hyväksy, älä käytä palveluita.</p>

      <h2>2. Kelpoisuus</h2>
      <p>Sinun on oltava vähintään 18-vuotias (tai täysi-ikäinen oikeudenkäyttöalueellasi) ja oikeustoimikelpoinen sitovan sopimuksen tekemiseen. Palveluita ei tarjota rajoitettujen oikeudenkäyttöalueiden asukkaille, joissa tällainen tarjonta olisi laitonta.</p>

      <h2>3. Tilin rekisteröinti</h2>
      <p>Sitoudut antamaan tarkat, ajantasaiset ja täydelliset tiedot rekisteröinnissä ja pitämään ne ajan tasalla. Olet vastuussa tunnustietojesi luottamuksellisuudesta ja kaikesta toiminnasta tililläsi.</p>

      <h2>4. Palvelut</h2>
      <p><?= e(SITE_NAME) ?> tarjoaa teknologisia työkaluja ja koulutuksellista tietoa liittyen verkkosijoittamiseen. Emme ole taloudellinen neuvonantajasi. Mikään tällä sivustolla ei ole henkilökohtaista sijoitusneuvontaa, veroneuvontaa tai kehotusta ostaa tai myydä rahoitusinstrumenttia.</p>

      <h2>5. Maksut</h2>
      <p>Sovellettavat maksut, spreadit ja palkkiot ilmoitetaan alustalla tai sovellettavassa hinnastossa. Olet vastuussa toiminnastasi aiheutuvista veroista.</p>

      <h2>6. Kielletty käyttäytyminen</h2>
      <ul>
        <li>Palveluiden käyttäminen rahanpesuun, terrorismin rahoittamiseen, markkinoiden manipulointiin tai muuhun laittomaan tarkoitukseen.</li>
        <li>Toisen henkilön tekeytyminen tai väärien henkilöllisyystietojen antaminen.</li>
        <li>Yritys häiritä, kompromettoida tai reverse-engineeröidä alustan mitään osaa.</li>
        <li>Automatisoitujen työkalujen käyttäminen palveluihin pääsyyn muuten kuin nimenomaisesti sallitulla tavalla.</li>
      </ul>

      <h2>7. Immateriaalioikeudet</h2>
      <p>Kaikki sivuston sisältö, tavaramerkit, ohjelmistot ja materiaalit ovat <?= e(SITE_NAME) ?>:n tai sen lisenssinantajien omaisuutta ja suojattu sovellettavilla immateriaalioikeuslaeilla. Saat rajoitetun, ei-yksinomaisen, peruutettavissa olevan lisenssin käyttää palveluita niiden tarkoitettuun käyttöön.</p>

      <h2>8. Kolmannen osapuolen palvelut</h2>
      <p>Alusta voi sisältää linkkejä kolmannen osapuolen palveluihin tai integroida niitä. Emme ole vastuussa tällaisista palveluista, niiden saatavuudesta, tarkkuudesta tai sisällöstä.</p>

      <h2>9. Vastuuvapauslausekkeet</h2>
      <p>Palvelut tarjotaan ”sellaisenaan” ja ”saatavuuden mukaan” ilman minkäänlaisia takuita. Kaupankäyntiin liittyy merkittävä tappioriski. Katso <a href="<?= page_url('conditions.php') ?>">Riskitiedote</a> lisätietoja.</p>

      <h2>10. Vastuunrajoitus</h2>
      <p>Lain sallimassa enimmäismäärässä <?= e(SITE_NAME) ?> ei ole vastuussa epäsuorista, satunnaisista, erityisistä, välillisistä tai rangaistusluonteisista vahingoista eikä voiton tai liikevaihdon menetyksestä, joka johtuu palveluiden käytöstä.</p>

      <h2>11. Vahingonkorvaus</h2>
      <p>Sitoudut korvaamaan ja pitämään <?= e(SITE_NAME) ?>:n, sen tytäryhtiöt ja henkilöstön vahingoittomina kaikista vaatimuksista, jotka johtuvat näiden ehtojen rikkomisesta tai palveluiden väärinkäytöstä.</p>

      <h2>12. Keskeytys ja irtisanominen</h2>
      <p>Voimme keskeyttää tai lopettaa pääsyn palveluihin milloin tahansa, ilmoituksella tai ilman, jos katsomme, että olet rikkonut näitä ehtoja tai sovellettavaa lakia.</p>

      <h2>13. Sovellettava laki</h2>
      <p>Näihin ehtoihin sovelletaan <?= e(SITE_NAME) ?>:n kotipaikan lakeja ilman lainvalintasääntöjen huomioon ottamista.</p>

      <h2>14. Muutokset</h2>
      <p>Voimme muuttaa näitä ehtoja ajoittain. Palveluiden jatkuva käyttö muutosten jälkeen merkitsee tarkistettujen ehtojen hyväksymistä.</p>

      <h2>15. Yhteystiedot</h2>
      <p>Kysymykset näistä ehdoista voi lähettää <a href="<?= page_url('contacts.php') ?>">yhteystietosivun</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Takaisin etusivulle</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Kaikki oikeudet pidätetään ·
      <a href="<?= page_url('privacy.php') ?>">Tietosuoja</a> ·
      <a href="<?= page_url('conditions.php') ?>">Ehdot</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
