<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tietosuojakäytäntö | ' . SITE_NAME;
$page_description = 'Tietosuojakäytäntö palvelulle ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Tietosuojakäytäntö</h1>
            <p>
              Henkilötietosi ja varallisuutesi ovat meille erittäin tärkeitä. Olemme täysin
              sitoutuneita suojelemaan niitä.
            </p>
            <p>
              <?= e(SITE_NAME) ?> kerää ja tallentaa kaupankäyntisi kannalta olennaiset tiedot. Miten
              niitä kerätään ja tallennetaan, kuvataan seuraavassa tietosuojakäytännössä.
            </p>
            <p>Käytäntömme perustuu seuraaviin periaatteisiin:</p>
            <p class="circle">
              Tavoitteena on maksimaalinen avoimuus siitä, miten keräämme ja
              tallennamme henkilötietojasi:
            </p>
            <p>
              Haluamme, että ymmärrät, miten keräämme ja käsittelemme tietojasi, jotta voit tehdä
              tietoon perustuvia päätöksiä. Sovellemme selkeitä ohjeita ja prosesseja tietojen käsittelyyn
              tällä verkkosivustolla. Käytäntömme kuvaa yksityiskohtaisesti menetelmät, joilla annamme
              sinulle selkeää ja konkreettista tietoa tietojen käytöstä. Sinä päätät.
            </p>
            <p>
              Ilmoitamme sinulle heti, kun katsomme sen tarpeelliseksi. Avoimuus on
              meille perustavanlaatuista.
            </p>
            <p>
              Asiantuntijatiimimme on aina tavoitettavissa vastaamaan kysymyksiisi kaikista
              prosessiemme osa-alueista, mukaan lukien velvoitteet lain <?= e(geo_in()) ?> ja EU-
              säädösten nojalla. Voit ottaa meihin yhteyttä:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Emme saa käyttää henkilötietoja muuhun kuin tietosuojakäytännössämme
              määriteltyyn tarkoitukseen.
            </p>
            <p>
              Voimme käsitellä henkilötietoja seuraaviin tarkoituksiin, muun muassa varmistaaksemme
              <?= e(SITE_NAME) ?>-palveluiden asianmukaisen toiminnan ja yhdistääksemme käyttäjiä kolmannen osapuolen
              kaupankäyntialustoihin. Lisäksi käsittely voi olla tarpeen verkkosivuston ominaisuuksien ja palveluiden
              ylläpitämiseksi ja parantamiseksi; oikeuksiemme suojaamiseksi sekä lainsäädännön ja muiden
              velvoitteiden täyttämiseksi. Lopuksi tietoja käytetään tarvittaessa hallinnollisiin
              ja muihin liiketoimintaan liittyviin tehtäviin palveluissasi asiakkaana.
            </p>
            <p>
              Tarjotaksemme parempia palveluita mieltymystesi ja tarpeidesi mukaan <?= e(SITE_NAME) ?>
              käyttää henkilötietoja.
            </p>
            <p class="circle">
              Käyttääksemme olennaisia työkaluja henkilötietojesi suojaamiseen ja oikeuksiesi
              turvaamiseen:
            </p>
            <p>
              Voit milloin tahansa ottaa meihin yhteyttä ja saada pääsyn kaikkiin tietoihisi. Voimme myös
              muuttaa tai poistaa niitä tarvittaessa. Lisäksi käsittelemme pyyntöjä siirtää nämä
              tiedot sinulle tai nimittämällesi kolmannelle osapuolelle. Tarjoamme tämän palvelun, jotta voit
              täysimääräisesti käyttää tietosuoja- ja hallintaoikeuksiasi.
            </p>
            <p class="circle">Suojaa henkilötietosi:</p>
            <p>
              Turvajärjestelmämme ovat korkealaatuisia ja sisältävät pankkitason toimenpiteitä. Vaikka
              absoluuttista suojaa ei voida taata, sitoudumme pitämään järjestelmät
              jatkuvasti korkeimmalla tasolla ja vahvistamaan jo käyttöön otettuja toimenpiteitä.
            </p>
            <p>
              Meillä on kattava tietosuojakäytäntö ja ensiluokkaiset turvajärjestelmät.
            </p>
            <p class="bold-title">1. Soveltamisala</p>
            <p>
              Tämä käytäntö kuvaa menettelytapamme kaikkien luonnollisten henkilöiden
              tietojen keräämiseen, käsittelyyn ja luovuttamiseen.
            </p>
            <p>
              Käytäntömme säännökset koskevat kaikkia luonnollisia henkilöitä, jotka voidaan tunnistaa tai on
              tunnistettu. Erityisesti jokaista luonnollista henkilöä, joka voidaan tunnistaa yhteydessä
               meille uskottuihin tietoihin, joihin meillä on pääsy ja/tai joita voimme yhdistää.
            </p>
            <p>
              Tietojen käsittely tietosuojakäytännön mukaan sisältää erityisesti henkilötietojen
              tallentamisen, hallinnoinnin ja organisoinnin.
            </p>
            <p>
              Emme kerää emmekä yritä kerätä tietoja alle 18-vuotiaista
              henkilöistä. Alle 18-vuotiaat eivät myöskään saa käyttää alustaamme mihinkään
              tarkoitukseen. Jos huomaamme, että käyttäjä on alle 18-vuotias, poistamme tiedot välittömästi.
            </p>
            <p class="bold-title">2. Mitä henkilötietoja keräämme?</p>
            <p>
              Rekisteröityessä keräämme palveluidemme käyttöön tarvittavat henkilötiedot. Tarvittaessa
              voimme myös pyytää tietoja vahvistusta varten, esimerkiksi
              tilin omistajuuden vahvistamiseksi. Parantaaksemme ja ylläpitääksemme palveluidemme korkeinta laatua
              keräämme ja analysoimme tietoja alustan käytöstäsi ja
              siihen liittyvistä kolmannen osapuolen palveluista.
            </p>
            <p class="bold-title">
              3. Et missään olosuhteissa ole velvollinen antamaan henkilötietojasi yhtiölle.
            </p>
            <p>
              Vaikka et ole velvollinen antamaan tietojasi, päätös olla antamatta niitä
              voi rajoittaa palveluitamme. Se voi myös johtaa
              rajoituksiin alustan käytössä.
            </p>
            <p class="bold-title">
              4. Mitä henkilötietoja keräämme? Kun vierailet verkkosivustolla, voimme kerätä seuraavia
              henkilötietoja:
            </p>
            <p>
              Emme kerää tietoja, jotka tunnistavat sinut henkilökohtaisesti. Keräämme muun muassa
              tilisi toimintaa, IP-osoitteita sekä käyttöpäivämääriä ja -aikoja. Ylläpitoa,
              turvallisuutta ja tukea varten tallennamme järjestelmävirheraportteja, selaintietoja ja sen laitteen tyypin,
              jolla kirjaudut tilillesi. Tallennamme myös tilillesi asetetun kielen.
            </p>
            <p>
              Henkilötietojen osalta keräämme ja tallennamme yksinomaan
              tiedot, jotka annat yhdistäessäsi kolmannen osapuolen kaupankäyntialustaan palveluidemme kautta.
            </p>
            <p>
              Kolmannen osapuolen alustoille antamasi henkilötiedot voivat sisältää:
              koko nimen, osoitteen, puhelinnumeron ja sähköpostiosoitteen.
            </p>
            <p class="bold-title">
              5. Miksi yhtiö tarvitsee tietojani ja onko käsittely laillista?
            </p>
            <p>
              Yhtiö kerää, tallentaa ja käsittelee henkilötietojasi yksinomaan
              käytännössä määriteltyihin tarkoituksiin. Kaikki mainitut käytöt ja käsittely tapahtuvat
              sovellettavan lain <?= e(geo_in()) ?> ja EU-säädösten mukaisesti.
            </p>
            <p>
              Yhtiö hallinnoi, käsittelee tai siirtää tietojasi vain
              sovellettavien sääntöjen <?= e(geo_in()) ?> mukaisesti. Asiaa koskevat oikeusperusteet on lueteltu alla:
            </p>
            <p class="circle">
              Olet antanut suostumuksen siihen, että yhtiö tallentaa ja käsittelee henkilötietojasi.
              Antamalla tietosi yhtiölle valtuutat meidät välittämään ne asianmukaiselle
              kolmannen osapuolen kaupankäyntialustalle. Lisäksi olet antanut suostumuksen
              henkilötietojesi käsittelyyn yhteen tai useampaan tarkoitukseen.
            </p>
            <p class="circle">
              Palveluiden parantamiseksi, oikeudellisten vaatimusten esittämiseksi tai puolustamiseksi ja oikeutettujen
              etujen suojelemiseksi yhtiön voi olla tarpeen tallentaa ja
              käsitellä henkilötietojasi.
            </p>
            <p class="circle">Lakisääteisten velvoitteiden täyttämiseksi tietojen käsittely on tarpeen.</p>
            <p>
              Jos haluat lisätietoa käsittelystä, johon yhtiö on velvollinen,
              voit ottaa meihin yhteyttä sähköpostitse.
            </p>
            <p>
              Alta löydät erityiset tarkoitukset ja oikeusperusteen, joka valtuuttaa meidät
              käsittelemään henkilötietojasi.
            </p>
            <p class="green">Tarkoitus</p>
            <p class="green">Oikeusperuste</p>
            <p>
              1. Helpottaaksemme pääsyäsi digitaaliseen kaupankäyntiin ja — yksinomaan pyynnöstäsi —
              jaamme henkilötietojasi kolmannen osapuolen alustoille. Tietojasi voidaan kerätä
              ja jakaa kolmansille osapuolille yksinomaan pyynnöstäsi ja harkintasi mukaan.
            </p>
            <p>
              Olet antanut suostumuksen henkilötietojesi käsittelyyn yhteen tai useampaan tarkoitukseen.
            </p>
            <p>
              2. Anna tarvittavat tiedot, jotta voimme vastata nopeasti ja
              tehokkaasti pyyntöihisi, huoliisi ja kysymyksiisi palveluistamme.
            </p>
            <p>
              Yhtiön tai nimetyn kolmannen osapuolen oikeutettujen etujen turvaamiseksi
              henkilötietojen käsittely on tarpeen.
            </p>
            <p>
              3. Lainsäädännön ja hallinnollisten velvoitteidemme täyttämiseksi henkilötietojen käsittely on tarpeen.
            </p>
            <p>Lakisääteisten velvoitteidemme täyttämiseksi meidän on käsiteltävä tiettyjä henkilötietoja.</p>
            <p>
              4. Palveluiden parantamiseksi tarvitsemme anonymisoituja tietoja ja seurattava käyttöä,
              mukaan lukien virheraportit.
            </p>
            <p>
              Yhtiön ja ulkoisten palveluntarjoajien oikeutettujen etujen suojelemiseksi
              henkilötietojen käsittely ja tallentaminen on tarpeen.
            </p>
            <p>5. Tämä on tarpeen petosten ja palvelun väärinkäytön estämiseksi.</p>
            <p>
              Yhtiön ja kolmannen osapuolen palveluntarjoajien oikeutettujen etujen varmistamiseksi
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Palvelumme vaatimukset velvoittavat meitä seuraamaan ja käsittelemään tietoja
              liiketoiminnan kehittämiseksi, strategisiksi päätöksiksi, valvontaan, sääntelyn noudattamiseen ja
              muihin liiketoimintaan liittyviin tehtäviin.
            </p>
            <p>
              Yhtiön ja ulkoisten palveluntarjoajien oikeutettujen etujen suojelemiseksi
              henkilötietojen käsittely ja tallentaminen on tarpeen.
            </p>
            <p>
              7. Käytämme tilastollisia ja data-analyysityökaluja tukemaan päätöksiä laajassa
              palveluvalikoimassamme ja strategisessa suunnittelussa.
            </p>
            <p>
              Yhtiön ja ulkoisten palveluntarjoajiemme oikeutettujen etujen suojelemiseksi
              henkilötietojen käsittely ja tallentaminen on tarpeen.
            </p>
            <p>
              8. Siinä määrin kuin on tarpeen suojella yhtiön ja kolmannen osapuolen palveluntarjoajien
              oikeuksia, omaisuutta ja etuja, kaikkien paikallisten lakien ja
              sovellettavien sääntöjen, sopimusten sekä omien ehtojemme ja ohjeidemme mukaisesti voimme käsitellä
              henkilötietoja. Tällainen käsittely tapahtuu yksinomaan tarpeellisten ja
              vahvistettujen menettelytapojen mukaisesti.
            </p>
            <p>
              Yhtiön ja kunkin ulkoisen
              palveluntarjoajan oikeutettujen etujen suojelemiseksi henkilötietojen käsittely ja tallentaminen on tarpeen.
            </p>
            <p class="bold-title">6. Henkilötietojen jakaminen kolmansille osapuolille</p>
            <p>
              IP-osoitteiden tallentamiseksi ja käsittelyksi, kyselyihin ja käyttäjäanalyysiin
              ja muihin liittyviin palveluihin yhtiö voi jakaa anonymisoituja tietoja
              ulkoisten palveluntarjoajien kanssa.
            </p>
            <p>
              Pyynnöstäsi jaamme joitakin antamiasi henkilötietoja ulkoisten
              palveluntarjoajien kanssa. Tällöin tietojesi käsittelyä koskee kyseisen
              yhtiön tietosuojakäytäntö. Tämä voi koskea erilaisia digitaalisia kaupankäyntialustoja.
            </p>
            <p>
              Parantaaksemme asiakaspalvelua ja optimoidaksemme palveluita yleisesti
              yhtiö voi jakaa henkilötietoja sidosyhtiöidensä ja liikekumppaneidensa kanssa.
            </p>
            <p>
              Kun laki niin edellyttää tai suojellaksemme yhtiön ja siihen liittyvien
              kolmansien osapuolten oikeuksia ja omaisuutta, voimme jakaa tietoja asianomaisille oikeudellisille tai valvontaviranomaisille.
            </p>
            <p>
              Kriittisten liiketoimintojen, kuten yhtiön myynnin,
              sijoituksen hankinnan tai luottohakemuksen yhteydessä asiaankuuluvia tietoja voidaan jakaa
              laillisesti ja asianmukaisesti. Tämä koskee myös fuusioita, uudelleenjärjestelyjä,
              konsolidointeja tai yhtiön maksukyvyttömyyttä lain mukaisesti.
            </p>
            <p class="bold-title">7. Evästeet ja kolmannen osapuolen palvelut</p>
            <p>
              Verkkosivuston analyysiä varten ja yhteistyössä mainostoimistojen kanssa evästeitä ja muita
              vastaavia tekniikoita voidaan käyttää lain ja yleisen käytännön mukaisesti.
            </p>
            <p>
              Evästeet — pieniä tekstitiedostoja, jotka tallennetaan laitteellesi verkkosivustoa vieraillessasi — keräävät
              tietoa selauskäyttäytymisestäsi, mieltymyksistäsi ja muista tiedoista. Niiden
              tarkoitus on personoida ja parantaa käyttökokemustasi. Ne auttavat muistamaan
              asetuksesi ja mieltymyksesi ja mukauttamaan tarjontaamme. Niitä käytetään myös
              verkkosivuston analyysiin ja tilastojen keräämiseen suunnittelua varten.
            </p>
            <p>
              Verkkosivusto käyttää yleensä kahta evästetyyppiä: istuntoevästeitä, jotka tallennetaan
              vain selainistunnon ajaksi ja poistetaan, kun suljet selaimen;
              ja pysyviä evästeitä, jotka jäävät selaimeen istunnon päättymisen jälkeen. Jälkimmäiset
              mahdollistavat verkkosivuston tunnistaa sinut palaavana kävijänä ja helpottavat käyttöä.
            </p>
            <p class="bold-title">Evästetyypit:</p>
            <p>Evästeitä voidaan käyttää tarpeen mukaan tarkoituksen mukaan:</p>
            <p class="green">Evästetyyppi</p>
            <p>Nämä evästeet ovat ehdottoman välttämättömiä</p>
            <p class="green">Tarkoitus</p>
            <p>
              Evästeillä tunnistamme sinut asiakkaana, jotta voimme toimittaa pyytämäsi
              tiedot, asetukset ja palvelut.
              Ne myös helpottavat navigointia verkkosivustollamme ja pääsyä siihen.
            </p>
            <p>
              Käytämme evästeitä, jotta laitteesi voi ladata ja suoratoistaa sisältöä. Ne myös
              mahdollistavat pääsyn olennaisiin toimintoihin ja paluun aiemmin vierailluille sivuille.
            </p>
            <p class="green">Lisätietoja</p>
            <p>
              Nopean ja yksinkertaisen pääsyn varmistamiseksi evästeet tallentavat ja käsittelevät tiettyjä
              henkilötietoja, kuten käyttäjänimen ja viimeisen kirjautumispäivän, jos pyydät verkkosivustoa
              muistamaan sinut kirjautuessasi.
            </p>
            <p>Istuntoevästeet poistetaan, kun suljet verkkoselaimen.</p>
            <p class="green">Evästetyyppi</p>
            <p>Toiminnalliset evästeet</p>
            <p class="green">Tarkoitus</p>
            <p>
              Evästeiden avulla voimme turvallisesti tallentaa ja soveltaa asetuksiasi ja mieltymyksiäsi.
              Ne myös mahdollistavat tunnistaa sinut seuraavalla vierailulla.
            </p>
            <p class="green">Lisätietoja</p>
            <p>
              Pysyvät evästeet säilyvät selainistunnon jälkeen ja pysyvät aktiivisina
              voimassaolopäivään asti.
            </p>
            <p class="green">Evästetyyppi</p>
            <p>Suorituskykyevästeet</p>
            <p class="green">Tarkoitus</p>
            <p>
              Parantaaksemme palveluita keräämme tilastotietoja evästeillä. Ne
              antavat tietoa verkkosivuston suorituskyvystä ja käytöstä.
            </p>
            <p class="green">Lisätietoja</p>
            <p>
              Evästeiden kautta tallennettu tieto on anonyymia eikä mahdollista yksilöiden tunnistamista.
            </p>
            <p>
              Istuntoevästeet poistetaan selaimen sulkemisen yhteydessä, kun taas pysyvät
              evästeet pysyvät aktiivisina voimassaolopäivään asti tai toistaiseksi, ellei poista niitä manuaalisesti.
            </p>
            <p>Evästeet estetään tai poistetaan</p>
            <p>
              Jos haluat poistaa tai estää evästeet, tee se
              selaimen asetuksissa. Alla olevista linkeistä löydät yksityiskohtaiset ohjeet yleisimmille selaimille.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Evästeiden estäminen voi estää joitakin verkkosivuston toimintoja toimimasta tarkoitetulla tavalla.
            </p>
            <p class="bold-title">Kuinka kauan säilytämme henkilötietoja</p>
            <p>
              Henkilötietoja säilytetään vain niin kauan kuin on ehdottoman tarpeen
              vaadittuihin prosesseihin, kuten tämän käytännön muissa osioissa todetaan. Säilytystä voidaan pidentää, jos
              paikalliset säännöt tai yhtiön sisäiset käytännöt niin edellyttävät.
            </p>
            <p>
              Henkilötietojasi jaetaan pyynnöstäsi ja harkintasi mukaan kolmannen osapuolen
              kaupankäyntialustoille 12 kuukauden ajan. Kun jakso päättyy ja suostumuksellasi
              tietoja jaetaan vielä 12 kuukautta.
            </p>
            <p>
              Menettelytapamme edellyttävät kaikkien henkilötietojen säännöllistä arviointia sen selvittämiseksi, tarvitaanko
              niitä edelleen.
            </p>
            <p class="bold-title">
              9. Henkilötietojen siirto kolmansiin maihin tai kansainvälisiin järjestöihin
            </p>
            <p>
              Kun se on tarpeen palveluiden tarjoamiseksi ja/tai turvallisuussyistä, voimme siirtää
              henkilötietoja muihin maihin (oman maasi ulkopuolelle) ja kansainvälisiin järjestöihin
              kattavien turvallisuusprotokollien mukaisesti. Toteutamme tietosuojatoimenpiteitä
              korkeimmalla tasolla suojellaksemme tietojasi ja varmistaaksemme pääsysi oikeussuojakeinoihin
              ja lakisääteisiin oikeuksiin kaikkina aikoina.
            </p>
            <p>
              Euroopan talousalueella (ETA) kaikilla asukkailla on tietosuojaa ja takeita.
            </p>
            <p class="circle">
              Tietojen siirrot tapahtuvat aina EU:n lainkäyttövallan ja valvonnan alaisuudessa
              tietosuojastandardien ja -protokollien mukaisesti, jotka on säädetty asetuksen 45 artiklan 3 kohdassa
              Euroopan parlamentin ja neuvoston asetuksessa (EU) 2016/679, annettu 27. huhtikuuta 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Kaikki julkisten elinten väliset tietojen siirrot tapahtuvat asetuksen
              46 artiklan 2 kohdan mukaisesti. Se on oikeudellisesti sitova ja täytäntöönpanokelpoinen sopimus.
            </p>
            <p class="circle">
              Euroopan komission vakiomuotoiset sopimuslausekkeet GDPR:n 46 artiklan 2 kohdan c alakohdan mukaisesti määrittävät
              tietojen siirron edellytykset, ja tällaiset siirrot tapahtuvat niiden
              mukaisesti. Voit tutustua määräyksiin osoitteessa
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Lisätietoa yhtiön toteuttamista erityisistä turvallisuustoimenpiteistä
              henkilötietojesi suojaamiseksi siirron aikana kolmansiin maihin saat lähettämällä pyynnön
              sähköpostitse osoitteeseen <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Henkilötietojen suojaus</p>
            <p>
              Henkilötietoja suojataan teknisin ja organisatorisin toimenpitein korkeimmalla
              tasolla viiteproseduurien mukaisesti. Nämä menettelyt estävät tehokkaasti
              tietojen tuhoutumisen laittomien tai odottamattomien tapahtumien seurauksena sekä
              niiden katoamisen tai muuttumisen.
            </p>
            <p>
              Vaikka noudatamme suurinta mahdollista huolellisuutta ja tiukimpia
              tietosuojastandardeja ja lakia, emme missään olosuhteissa voi taata,
              että henkilötietosi olisivat virheettömiä. Siksi emme voi vastata, jos
              henkilötiedot vahingoittuvat vahingossa, aineettomasti tai välillisesti tai luovutetaan.
              Tämä koskee tilanteita, joihin emme voi vaikuttaa, kuten luovutusta siirtovirheiden,
              kolmansien osapuolten luvattoman pääsyn tai muiden vastaavien syiden vuoksi.
            </p>
            <p>
              Kun saamme oikeudellisesti sitovia pyyntöjä valvontaviranomaisilta tai muilta
              lakisääteisin valtuuksin toimivilta viranomaisilta, voimme olla velvollisia välittämään
              henkilötietojasi näille elimille. Kun tiedot on luovutettu lakisääteisen velvoitteen perusteella, meillä ei ole
              valtaa siihen, miten nämä elimet käsittelevät, tallentavat tai suojaavat tietojasi.
            </p>
            <p>
              Kaikki internetin kautta lähetetty, mukaan lukien henkilötiedot, sisältää tietyn
              salakuunteluriskin eikä ole 100 % turvallista. Yhtiö ei voi taata
              verkossa lähetettyjen tietojen turvallisuutta.
            </p>
            <p class="bold-title">11. Linkit kolmansien osapuolten verkkosivustoille</p>
            <p>
              Tältä verkkosivustolta löydät linkkejä kolmansien osapuolten sovelluksiin ja sivustoihin. Huomaa,
              etteivät ne liity yhtiöön eivätkä ole sen hallinnassa, ja että
              tietosuojakäytäntömme ei koske niitä. Ne toimivat omien
              menettelytapojensa ja prioriteettiensa mukaisesti henkilötietojen keräämisessä ja käsittelyssä, joten
              emme vastaa näistä toiminnoista. Käytä niitä oman harkintasi mukaan.
            </p>
            <p>
              Tarkista aina yhtiön tai palvelun tietosuojakäytäntö, kun vierailet niiden verkkosivustolla,
              ennen henkilötietojen antamista. Varmista, vastaavatko niiden säännöt keräämisestä, käytöstä ja
              käsittelystä mieltymyksiäsi. Jos päätät jakaa tietoja, jaa ne
              suoraan palveluntarjoajalle.
            </p>
            <p class="bold-title">12. Käytännön päivitykset</p>
            <p>
              Pidätämme oikeuden päivittää tai muuttaa tätä käytäntöä milloin tahansa. Ilmoitamme sinulle
              muutoksista verkkosivuston ja asianomaisten kanavien kautta. Tietosuojakäytännön päivitetty versio
              julkaistaan verkkosivustolla, ja tarkistettu käytäntö tulee voimaan
              välittömästi julkaisun yhteydessä, ellei toisin ilmoiteta.
            </p>
            <p class="bold-title">13. Oikeutesi henkilötietoihin</p>
            <p>
              Sinulla on hallinta ja viimeinen sana kaikkien henkilötietojesi käytöstä. Tämä
              sisältää oikeuden tarkistaa oikeellisuus, korjata virheet sekä oikeuden poistaa tiedot tai
              rajoittaa käsittelyämme — sekä laajuudeltaan että luonteeltaan.
            </p>
            <p>Tältä sivulta ETA-alueen asukkaat löytävät heitä koskevat tiedot:</p>
            <p>
              Henkilötietojasi suojaavat tässä kuvatut oikeudet. Lähettämällä sähköpostia
              alla olevaan osoitteeseen voit käyttää näitä oikeuksia välittömästi.
            </p>
            <p>Pääsy oikeuksiisi</p>
            <p>
              Jos antamasi henkilötiedot ovat oikein, voit milloin tahansa saada niihin pääsyn. Kaikki
              käsittelemämme henkilötiedot ovat saatavillamme ja siten tarkistettavissa.
            </p>
            <p>
              Voit milloin tahansa pyytää henkilötietojasi tarkistusta varten, ja ne toimitetaan
              sinulle sähköisessä muodossa. Jos pyydät lisäkopioita
              käsitellyistä tiedoistasi jo toimitetun kopion lisäksi, voimme periä kohtuullisen maksun.
            </p>
            <p>
              Laissa ja tietosuojakäytännössä tunnustetut oikeudet eivät saa vaarantaa kolmansien
              osapuolten oikeuksia. Yhtiö pidättää oikeuden kieltäytyä antamasta pääsyä henkilötietoihin tai rajoittaa sitä,
              jos se loukkaisi kolmansien osapuolten oikeuksia ja vapauksia.
            </p>
            <p>Oikeus virheiden oikaisuun</p>
            <p>
              Kaikki virheet henkilötiedoissasi, olipa syynä puute tai virheellinen tieto,
              voit korjata itse tai yhtiö voi korjata ne asianmukaisen käsittelyn varmistamiseksi.
            </p>
            <p>Oikeus tietojen poistamiseen</p>
            <p>
              Sinulla on oikeus pyytää henkilötietojesi poistamista seuraavissa
              tilanteissa: 1) jos niitä käsiteltiin ilman suostumustasi tai lain rajojen ulkopuolella; 2)
              pyynnöstäsi, jos haluat ne poistettavaksi ja yhtiöllä ei ole lakisääteistä velvollisuutta
              säilyttää niitä; 3) jos vastustat käsittelyä tai peruutat suostumuksesi, vaikka se olisi
              laillista ja perustuisi meidän tai kolmansien osapuolten etuihin; ja 4) jos laki
              velvoittaa meidät poistamaan ne.
            </p>
            <p>
              Poisto-oikeus ei koske tilanteita, joissa EU:n tai
              jäsenvaltioiden lainsäädäntö velvoittaa säilyttämään tietoja. Se ei myöskään koske tilanteita, joissa tietoja tarvitaan
              oikeudellisten vaatimusten esittämiseen tai puolustamiseen.
            </p>
            <p>Oikeus rajoittaa tietojen käsittelyä</p>
            <p>
              Sinulla on oikeus pyytää henkilötietojesi käsittelyn rajoittamista, jos
              katsot niiden sisältävän virheitä.
            </p>
            <p>
              Jos pyydät henkilötietojesi käytön rajoittamista, rajoitamme käsittelyä, paitsi
              seuraavissa tapauksissa: 1) jos sovellettava lainsäädäntö Euroopan unionissa tai jossakin sen
              jäsenvaltioista estää sen; 2) suostumuksellasi, jos se on tarpeen oikeudellisten vaatimusten puolustamiseksi tai esittämiseksi;
              3) toisen luonnollisen henkilön oikeuksien suojelemiseksi.
            </p>
            <p>Oikeus siirtää tiedot</p>
            <p>
              Sinulla on oikeus päästä käsiksi antamiisi henkilötietoihin ja hallita niitä siinä
              määrin kuin olet antanut suostumuksen niiden keräämiseen ja jos käsittely
              tapahtuu automatisoiduissa järjestelmissä.
            </p>
            <p>
              Sinulla on oikeus pyytää kaikkien henkilötietojesi siirtoa toiselle yhtiölle tai
              organisaatiolle teknisesti mahdollisissa rajoissa. Tämä oikeus ei vaikuta
              oikeuteesi poistaa tietosi. Se ei koske tilanteita, joissa käyttö loukkaisi
              toisen luonnollisen henkilön oikeuksia tai vapauksia.
            </p>
            <p>Oikeus vastustaa tietojen käsittelyä</p>
            <p>
              Rajoittamatta yhtiön oikeutta turvata oikeutettuja etujamme tai
              kolmannen osapuolen palveluntarjoajana toimivan osapuolen etuja, sinulla on oikeus vastustaa
              käsittelyä ja pyytää sen lopettamista. Tätä oikeutta ei sovelleta, jos on kiireellinen
              oikeudellinen tarve jatkaa käsittelyä — joko oikeudellisten vaatimusten puolustamiseksi tai
              esittämiseksi. Tällöin voimme jatkaa henkilötietojesi käsittelyä.
            </p>
            <p>
              Voit milloin tahansa vastustaa henkilötietojesi käsittelyä suoramarkkinointia varten.
            </p>
            <p>
              Oikeus peruuttaa suostumus
            </p>
            <p>
              Voit milloin tahansa peruuttaa suostumuksesi henkilötietojesi käsittelyyn
              välitöine vaikutuksin. Peruutuksella ei ole takautuvaa vaikutusta käsittelyyn, jota on harjoitettu
              ennen peruutustasi.
            </p>
            <p>
              Jos olet jostain syystä tyytymätön, sinulla on oikeus tehdä valitus
              oikeudelliselle, valvonta- tai muulle valvontaelimelle.
            </p>
            <p>
              Jos katsot, että oikeutesi ja vapautesi henkilötietojesi käsittelyssä
              on loukattu, Euroopan unionin jäsenvaltioilla on tähän tarkoitukseen valvonta- ja
              valvontaelimiä. Voit tehdä valituksen näille elimille, jos katsot sen asianmukaiseksi.
            </p>
            <p>
              Kohta 13 kuvaa tilanteet, joissa oikeutesi henkilötietoihin voivat olla
              rajoitettuja Euroopan unionin tai jäsenvaltioiden lakien nojalla.
            </p>
            <p>
              Kun saamme pyyntösi henkilötiedoistasi ja niiden käsittelystä, annamme
              sinulle pyydetyn tiedon tämän käytännön kohdan 13 mukaisesti.
              Voimme pidentää tätä määräaikaa enintään kahdella kuukaudella pyynnön laajuuden
              ja luonteen mukaan. Tarvittaessa ilmoitamme sinulle pidennyksestä
              kuukauden kuluessa pyynnön vastaanottamisesta.
            </p>
            <p>
              Lähetämme pyydetyt tiedot sähköisesti ja maksutta, ellei
              se ole lain tai tämän käytännön kohdan 13 määräysten vastaista. Pidätämme oikeuden
              periä kohtuullisen maksun tai hylätä pyynnön, jos se katsotaan perusteettomaksi, liialliseksi tai toistuvaksi.
            </p>
            <p>
              Pidätämme oikeuden pyytää lisähenkilöllisyyden vahvistusta, jos on
              perusteltua epäilyä henkilöstä, joka tekee henkilötietopyynnön, jotta
              voimme suojella ja varmistaa tietoturvan.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
