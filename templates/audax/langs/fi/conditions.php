<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Käyttöehdot | ' . SITE_NAME;
$page_description = 'Käyttöehdot alustalle ' . SITE_NAME . '.';
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
            <h1>Käyttöehdot</h1>
            <p class="bold-title">1. Johdanto</p>
            <p>1.1. Palveluidemme käyttö edellyttää näiden ehtojen hyväksymistä.</p>
            <p>1.2. Nämä ehdot muodostavat oikeudellisesti sitovan sopimuksen.</p>
            <p>1.3. Verkkosivuston käytön jatkaminen merkitsee ehtojen hyväksymistä.</p>
            <p>
              1.4. Kysymyksissä voit ottaa meihin yhteyttä
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Käyttöoikeus</p>
            <p>2.1. Palveluiden käyttöön sinun on oltava vähintään 18-vuotias.</p>
            <p>2.1.1. Sinun on asuttava maassa, jossa palvelut ovat laillisia.</p>
            <p>2.1.2. Et saa olla pakotelistalla.</p>
            <p>2.1.3. Sinulla on oltava oikeustoimikelpoisuus sopimusten tekemiseen.</p>
            <p>2.2. Emme ole vastuussa sopimattomien henkilöiden käytöstä.</p>
            <p class="bold-title">3. Käyttäjätili</p>
            <p>3.1. Vastaat tilisi turvallisuudesta.</p>
            <p>3.2. Älä jaa salasanaasi kolmansille osapuolille.</p>
            <p class="bold-title">4. Kielletty toiminta</p>
            <p>4.1. Palveluiden käyttö laittomiin tarkoituksiin ei ole sallittua.</p>
            <p>4.1.1. Rahanpesu on ehdottomasti kielletty.</p>
            <p>4.1.2. Petoksesta ilmoitetaan toimivaltaisille viranomaisille.</p>
            <p>4.1.3. Bottien tai automaatio-ohjelmistojen käyttö ei ole sallittua.</p>
            <p>4.1.4. Jokainen yritys manipuloida järjestelmää tutkitaan.</p>
            <p>4.1.5. Väärän tiedon levittäminen on kielletty.</p>
            <p>4.1.6. Tutkintojen estämiseen tähtäävät yritykset eivät ole sallittuja.</p>
            <p>4.1.7. Uhkailu muita käyttäjiä kohtaan on kielletty.</p>
            <p>4.1.8. Laiton toiminta voi johtaa seuraamuksiin.</p>
            <p>4.1.9. Ohjeiden kiertämiseen tähtäävät yritykset eivät ole sallittuja.</p>
            <p>4.1.10. Järjestelmän väärinkäyttö otetaan vakavasti.</p>
            <p class="bold-title">5. Immateriaalioikeudet</p>
            <p>5.1. Kaikki verkkosivuston sisältö on immateriaalioikeuksiemme suojaa.</p>
            <p>5.2. Käyttäjät eivät saa oikeuksia verkkosivuston sisältöön.</p>
            <p>5.3. Sisältöä ei saa kopioida ilman lupaa.</p>
            <p>5.4. Kolmannet osapuolet eivät saa muuttaa sisältöä.</p>
            <p class="bold-title">6. Vastuun rajoitus</p>
            <p>6.1. Palveluiden käyttö tapahtuu omalla vastuullasi.</p>
            <p>6.2. Emme ole vastuussa palveluiden käytöstä aiheutuvista vahingoista.</p>
            <p>6.3. Verkkosivuston käytöstä aiheutuva vahinko on käyttäjän vastuulla.</p>
            <p>6.4. Emme vastaa verkkosivuston käytöstä aiheutuneesta vahingosta.</p>
            <p>6.5. Tekniset ongelmat eivät ole vastuullamme.</p>
            <p class="bold-title">7. Tiedot</p>
            <p>7.1. Käyttämällä palveluita hyväksyt, että sinuun voidaan ottaa yhteyttä.</p>
            <p>7.2. Tietoja käsitellään luottamuksellisesti.</p>
            <p>7.3. Suosittelemme pitämään kirjaa tapahtumista.</p>
            <p class="bold-title">8. Linkit ja lisäresurssit</p>
            <p>8.1. Lisätietoa löydät säännöistämme.</p>
            <p>8.2. Ulkoiset linkit eivät tarkoita suositustamme.</p>
            <p>8.3. Suosittelemme tarkistamaan lähteet ennen käyttöä.</p>
            <p class="bold-title">9. Yleiset säännökset</p>
            <p>9.1. Pidätämme oikeuden muuttaa palveluita milloin tahansa.</p>
            <p>9.2. Ehdot voivat muuttua milloin tahansa.</p>
            <p>9.3. Käyttämällä palveluita hyväksyt nämä ehdot.</p>
            <p>9.4. Suulliset sopimukset eivät ole päteviä.</p>
            <p>9.5. Käyttämättä jätettyä oikeutta ei katsota luovutetuksi.</p>
            <p>
              9.6. Jos määräys todetaan pätemättömäksi, muut määräykset pysyvät voimassa.
            </p>
            <p>9.7. Palveluita voivat ylläpitää ulkoiset palveluntarjoajat.</p>
            <p>
              9.8. Näihin ehtoihin sovelletaan lakia <?= e(geo_in()) ?>. Kaikki riidat viedään
              toimivaltaiseen tuomioistuimeen <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
