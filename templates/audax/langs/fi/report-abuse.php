<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ilmoita väärinkäytöksestä | ' . SITE_NAME;
$page_description = 'Ilmoita väärinkäytöksestä tai epäilyttävästä toiminnasta sivustolla ' . SITE_NAME . '.';
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
            <h1>Ilmoita väärinkäytöstä</h1>
            <p class="bold-title">1. Väärinkäytöksen ilmoittaminen</p>
            <p>
              1.1. Jos olet törmännyt sopimattomaan sisältöön verkkosivustollamme, ilmoita siitä
               meille yhteydenottolomakkeen kautta.
            </p>
            <p>Ota yhteyttä: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Tässä osiossa voit kertoa väärinkäytöksestä tai sisällöstä,
              joka rikkoo sääntöjämme.
            </p>
            <p>
              1.3. Ilmoituksesi on meille tärkeä. Anna tarkat tiedot, jotta voimme
              tutkia tapauksen asianmukaisesti.
            </p>
            <p>Lähettämällä ilmoituksen hyväksyt myös tietosuojakäytäntömme.</p>
            <p class="bold-title">2. Kuka voi ilmoittaa</p>
            <p>
              2.1. Jos olet joutunut väärinkäytön kohteeksi tai olet huomannut sopimatonta käytöstä, sinulla on
              oikeus ilmoittaa siitä.
            </p>
            <p>2.1.1. Ilmoituksen lähettämiseen sinun on oltava vähintään 18-vuotias.</p>
            <p>2.1.2. Ilmoituksen on oltava totuudenmukainen ja perustuttava faktoihin.</p>
            <p>2.1.3. Ilmoituslomakkeen käytön on oltava laillista maassasi.</p>
            <p>2.2. Emme ole vastuussa vääristä tai pahantahtoisista ilmoituksista.</p>
            <p class="bold-title">3. Ilmoitusmenettely</p>
            <p>3.1. Pidätämme oikeuden tutkia kaikki väärinkäytösilmoitukset.</p>
            <p>3.2. Jos ilmoitus katsotaan perustelluksi, ryhdymme tarvittaviin toimenpiteisiin.</p>
            <p class="bold-title">4. Kielletty toiminta ilmoittaessa</p>
            <p>4.1. Lomakkeen käyttö pahantahtoisiin tarkoituksiin ei ole sallittua.</p>
            <p>4.1.1. Väärien tai harhaanjohtavien ilmoitusten lähettäminen ei ole sallittua.</p>
            <p>4.1.2. Muiden käyttäjien häirintä ilmoitusjärjestelmän kautta ei ole sallittua.</p>
            <p>4.1.3. Bottien tai automaation käyttö ilmoitusten lähettämiseen on kielletty.</p>
            <p>4.1.4. Jokainen yritys manipuloida ilmoitusjärjestelmää tutkitaan.</p>
            <p>4.1.5. Järjestelmän käyttö väärän tiedon levittämiseen on kielletty.</p>
            <p>4.1.6. Tutkinnan estämiseen tähtäävät yritykset eivät ole sallittuja.</p>
            <p>4.1.7. Järjestelmän käyttö uhkailuun ei ole sallittua.</p>
            <p>4.1.8. Ilmoittamiseen liittyvä laiton toiminta voi johtaa seuraamuksiin.</p>
            <p>4.1.9. Ilmoitusohjeiden kiertämiseen tähtäävät yritykset eivät ole sallittuja.</p>
            <p>4.1.10. Ilmoitusjärjestelmän väärinkäyttö otetaan vakavasti.</p>
            <p class="bold-title">5. Immateriaalioikeudet ilmoittaessa</p>
            <p>
              5.1. Väärinkäytöstä ilmoittaessasi lähettämäsi sisältö ei anna sinulle omistusoikeuksia.
            </p>
            <p>5.2. Ilmoituksen lähettäminen ei anna käyttäjille oikeuksia verkkosivuston sisältöön.</p>
            <p>5.3. Ilmoituksia käytetään yksinomaan tutkintatarkoituksiin.</p>
            <p>5.4. Kolmannet osapuolet eivät saa kopioida tai muuttaa ilmoituksia.</p>
            <p class="bold-title">6. Vastuun rajoitus ilmoittaessa</p>
            <p>6.1. Lähettämällä ilmoituksen otat vastuun sen sisällöstä.</p>
            <p>6.2. Emme ole vastuussa lähetettyjen ilmoitusten seurauksista.</p>
            <p>6.3. Ilmoituksesta aiheutuva vahinko on käyttäjän vastuulla.</p>
            <p>6.4. Emme vastaa ilmoituksista aiheutuneesta vahingosta.</p>
            <p>
              6.5. Ilmoitusjärjestelmän tekniset ongelmat eivät ole vastuullamme.
            </p>
            <p class="bold-title">7. Tietoa ilmoitusmenettelystä</p>
            <p>
              7.1. Käyttämällä ilmoitusjärjestelmää hyväksyt, että voimme ottaa sinuun yhteyttä lisätietojen saamiseksi.
            </p>
            <p>7.2. Ilmoituksia käsitellään luottamuksellisesti.</p>
            <p>7.3. Suosittelemme säilyttämään kopion ilmoituksistasi.</p>
            <p class="bold-title">8. Lisälinkit ja resurssit</p>
            <p>8.1. Lisätietoa väärinkäytöksen ilmoittamisesta löydät säännöistämme.</p>
            <p>8.2. Linkit ulkoisiin lähteisiin eivät tarkoita suositustamme.</p>
            <p>8.3. Suosittelemme tarkistamaan jokaisen lähteen ennen käyttöä.</p>
            <p class="bold-title">9. Yleiset säännökset ilmoituksista</p>
            <p>
              9.1. Pidätämme oikeuden muuttaa, keskeyttää tai lopettaa ilmoitusmenettelyn
              milloin tahansa.
            </p>
            <p>
              9.2. Tämän menettelyn ehdot voivat muuttua milloin tahansa. Ilmoituspalvelun käytön jatkaminen
              muutosten jälkeen merkitsee uusien ehtojen hyväksymistä.
            </p>
            <p>9.3. Lähettämällä ilmoituksen hyväksyt nämä ehdot kokonaisuudessaan.</p>
            <p>
              9.4. Kaikki sopimukset tai lausunnot, kirjalliset tai suulliset, jotka eivät kuulu näiden ehtojen
              nimenomaisiin kohtiin, ovat mitättömiä eivätkä sido kumpaakaan osapuolta.
            </p>
            <p>
              9.5. Oikeus, jota näiden ehtojen nojalla ei käytetä — olipa syynä suostumus,
              laiminlyönti tai kyvyttömyys — katsotaan luovutetuksi. Oikeuden osittainen tai täysi käyttö
              ei sulje pois eikä rajoita myöhempää käyttöä.
            </p>
            <p>
              9.6. Jos toimivaltainen tuomioistuin toteaa jonkin näiden ehtojen määräyksen pätemättömäksi, se
              katsotaan mitättömäksi. Muut ehdot pysyvät kuitenkin täysimääräisesti voimassa.
            </p>
            <p>
              9.7. Myönnetään, että nämä ehdot mahdollistavat verkkosivuston ylläpidon kolmansien osapuolten toimesta,
              jotka voivat siirtää oikeuksiaan ja velvoitteitaan. Käyttäjä ei saa siirtää
              oikeuksiaan ja velvoitteitaan toiselle osapuolelle.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
