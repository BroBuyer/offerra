<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ziņot par ļaunprātīgu izmantošanu | ' . SITE_NAME;
$page_description = 'Ziņojiet par ļaunprātīgu izmantošanu vai aizdomīgu darbību vietnē ' . SITE_NAME . '.';
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
            <h1>Ziņot par ļaunprātīgu izmantošanu</h1>
            <p class="bold-title">1. Ziņošana par ļaunprātīgu izmantošanu</p>
            <p>
              1.1. Ja vietnē sastopaties ar neatbilstošu saturu, ziņojiet
              mums, izmantojot kontaktformu.
            </p>
            <p>Kontakti: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Šajā sadaļā varat sniegt informāciju par ļaunprātīgu rīcību vai saturu,
              kas pārkāpj mūsu noteikumus.
            </p>
            <p>
              1.3. Jūsu ziņojums mums ir svarīgs. Norādiet konkrētas detaļas, lai mēs varētu
              pienācīgi izmeklēt gadījumu.
            </p>
            <p>Iesniedzot ziņojumu, jūs piekrītat arī mūsu privātuma politikai.</p>
            <p class="bold-title">2. Kas var ziņot</p>
            <p>
              2.1. Ja esat kļuvis par ļaunprātīgas izmantošanas upuri vai pamanījis neatbilstošu rīcību, jums ir
              tiesības par to ziņot.
            </p>
            <p>2.1.1. Ziņojumu var iesniegt tikai personas, kas sasniegušas 18 gadu vecumu.</p>
            <p>2.1.2. Ziņojumam jābūt patiesam un balstītam uz faktiem.</p>
            <p>2.1.3. Formas izmantošanai jābūt likumīgai jūsu valstī.</p>
            <p>2.2. Mēs neesam atbildīgi par nepatiesiem vai ļaunprātīgiem ziņojumiem.</p>
            <p class="bold-title">3. Ziņošanas kārtība</p>
            <p>3.1. Mēs paturam tiesības izmeklēt visus ziņojumus par ļaunprātīgu izmantošanu.</p>
            <p>3.2. Ja ziņojums tiek uzskatīts par pamatotu, mēs veiksim nepieciešamos pasākumus.</p>
            <p class="bold-title">4. Aizliegtas darbības, ziņojot</p>
            <p>4.1. Formas izmantošana ļaunprātīgiem mērķiem nav atļauta.</p>
            <p>4.1.1. Nepatiesi vai maldinoši ziņojumi nav atļauti.</p>
            <p>4.1.2. Citu lietotāju uzmākšanās, izmantojot ziņošanas sistēmu, nav atļauta.</p>
            <p>4.1.3. Botu vai automatizācijas izmantošana ziņojumu iesniegšanai ir aizliegta.</p>
            <p>4.1.4. Jebkurš mēģinājums manipulēt ar ziņošanas sistēmu tiks izmeklēts.</p>
            <p>4.1.5. Sistēmas izmantošana nepatiesas informācijas izplatīšanai ir aizliegta.</p>
            <p>4.1.6. Mēģinājumi kavēt izmeklēšanu nav atļauti.</p>
            <p>4.1.7. Sistēmas izmantošana draudiem nav atļauta.</p>
            <p>4.1.8. Jebkura nelikumīga darbība saistībā ar ziņojumiem tiks sodīta.</p>
            <p>4.1.9. Mēģinājumi apiet ziņošanas noteikumus nav atļauti.</p>
            <p>4.1.10. Jebkuru ziņošanas sistēmas ļaunprātīgu izmantošanu uztveram nopietni.</p>
            <p class="bold-title">5. Intelektuālais īpašums, ziņojot</p>
            <p>
              5.1. Saturs, ko iesniedzat kopā ar ziņojumu, jums nepiešķir īpašumtiesības.
            </p>
            <p>5.2. Iesniedzot ziņojumu, lietotāji neiegūst tiesības uz vietnes saturu.</p>
            <p>5.3. Ziņojumi tiek izmantoti tikai izmeklēšanas nolūkos.</p>
            <p>5.4. Trešās personas nedrīkst kopēt vai mainīt ziņojumus.</p>
            <p class="bold-title">6. Atbildības ierobežojums, ziņojot</p>
            <p>6.1. Iesniedzot ziņojumu, jūs uzņematies atbildību par tā saturu.</p>
            <p>6.2. Mēs neesam atbildīgi par iesniegto ziņojumu sekām.</p>
            <p>6.3. Jebkurš zaudējums, kas izriet no ziņojuma, ir lietotāja atbildība.</p>
            <p>6.4. Mēs neuzņemamies atbildību par zaudējumiem, ko izraisījuši ziņojumi.</p>
            <p>
              6.5. Tehniskas problēmas saistībā ar ziņošanas sistēmu nav mūsu atbildība.
            </p>
            <p class="bold-title">7. Informācija par ziņošanas kārtību</p>
            <p>
              7.1. Izmantojot ziņošanas sistēmu, jūs piekrītat, ka varam ar jums sazināties papildu informācijas dēļ.
            </p>
            <p>7.2. Ar ziņojumiem rīkojamies konfidenciāli.</p>
            <p>7.3. Lietotājiem iesakām saglabāt ziņojumu kopiju.</p>
            <p class="bold-title">8. Papildu saites un avoti</p>
            <p>8.1. Vairāk par ziņošanu par ļaunprātīgu izmantošanu skatiet mūsu noteikumos.</p>
            <p>8.2. Saites uz ārējiem avotiem nav mūsu ieteikums.</p>
            <p>8.3. Iesakām pārbaudīt katru avotu pirms tā izmantošanas.</p>
            <p class="bold-title">9. Vispārīgi noteikumi par ziņojumiem</p>
            <p>
              9.1. Mēs paturam tiesības mainīt, apturēt vai izbeigt ziņošanas kārtību
              jebkurā laikā.
            </p>
            <p>
              9.2. Šīs kārtības noteikumi var mainīties jebkurā laikā. Turpmāka
              ziņošanas pakalpojuma izmantošana pēc šādām izmaiņām nozīmē jauno noteikumu pieņemšanu.
            </p>
            <p>9.3. Iesniedzot ziņojumu, lietotājs pilnībā pieņem šos noteikumus.</p>
            <p>
              9.4. Jebkura vienošanās vai paziņojums, rakstisks vai mutisks, kas neietilpst
              šajos konkrētajos punktos, ir juridiski nederīgs un nesaista nevienu pusi.
            </p>
            <p>
              9.5. Tiesības, kas piešķirtas ar šiem noteikumiem un netiek izmantotas — piekrišanas,
              nolaidības vai nespējas dēļ — uzskatāmas par atsauktām. Tiesību daļēja vai pilnīga izmantošana
              neizslēdz un neierobežo to turpmāku izmantošanu.
            </p>
            <p>
              9.6. Ja kompetenta tiesa atzīst šo noteikumu punktu par spēkā neesošu, tas
              uzskatāms par spēkā neesošu. Pārējie noteikumi tomēr paliek pilnībā spēkā.
            </p>
            <p>
              9.7. Tiek atzīts, ka šie noteikumi ļauj trešajām personām pārvaldīt vietni
              un nodot tiesības un pienākumus. Lietotājs nedrīkst nodot
              savas tiesības un pienākumus citai pusei.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
