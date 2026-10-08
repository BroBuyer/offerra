<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Lietošanas noteikumi | ' . SITE_NAME;
$page_description = 'Platformas lietošanas noteikumi ' . SITE_NAME . '.';
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
            <h1>Lietošanas noteikumi</h1>
            <p class="bold-title">1. Ievads</p>
            <p>1.1. Pakalpojumu izmantošanai ir nepieciešama šo noteikumu pieņemšana.</p>
            <p>1.2. Šie noteikumi ir juridiski saistoša vienošanās.</p>
            <p>1.3. Turpmāka vietnes izmantošana nozīmē noteikumu pieņemšanu.</p>
            <p>
              1.4. Jautājumu gadījumā sazinieties ar mums
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Lietošanas tiesības</p>
            <p>2.1. Pakalpojumus var izmantot tikai personas, kas sasniegušas 18 gadu vecumu.</p>
            <p>2.1.1. Jums jādzīvo valstī, kurā pakalpojumi ir likumīgi.</p>
            <p>2.1.2. Jūs nedrīkstat būt sankciju sarakstā.</p>
            <p>2.1.3. Jums jābūt tiesībspējai slēgt līgumus.</p>
            <p>2.2. Mēs neesam atbildīgi par neatbilstošu lietotāju izmantošanu.</p>
            <p class="bold-title">3. Lietotāja konts</p>
            <p>3.1. Jūs esat atbildīgs par sava konta drošību.</p>
            <p>3.2. Nedalieties ar paroli ar trešajām personām.</p>
            <p class="bold-title">4. Aizliegtas darbības</p>
            <p>4.1. Pakalpojumu izmantošana nelikumīgiem mērķiem nav atļauta.</p>
            <p>4.1.1. Naudas atmazgāšana ir stingri aizliegta.</p>
            <p>4.1.2. Par krāpšanu tiks ziņots kompetentajām iestādēm.</p>
            <p>4.1.3. Botu vai automatizācijas programmatūras izmantošana nav atļauta.</p>
            <p>4.1.4. Jebkurš mēģinājums manipulēt ar sistēmu tiks izmeklēts.</p>
            <p>4.1.5. Nepatiesas informācijas izplatīšana ir aizliegta.</p>
            <p>4.1.6. Mēģinājumi kavēt izmeklēšanu nav atļauti.</p>
            <p>4.1.7. Draudi citiem lietotājiem ir aizliegti.</p>
            <p>4.1.8. Jebkura nelikumīga darbība tiks sodīta.</p>
            <p>4.1.9. Mēģinājumi apiet noteikumus nav atļauti.</p>
            <p>4.1.10. Jebkuru sistēmas ļaunprātīgu izmantošanu uztveram nopietni.</p>
            <p class="bold-title">5. Intelektuālais īpašums</p>
            <p>5.1. Viss vietnes saturs ir mūsu intelektuālais īpašums.</p>
            <p>5.2. Lietotāji neiegūst tiesības uz vietnes saturu.</p>
            <p>5.3. Saturs nedrīkst tikt kopēts bez atļaujas.</p>
            <p>5.4. Trešās personas nedrīkst mainīt saturu.</p>
            <p class="bold-title">6. Atbildības ierobežojums</p>
            <p>6.1. Pakalpojumus izmantojat uz savu atbildību.</p>
            <p>6.2. Mēs neesam atbildīgi par zaudējumiem, kas izriet no pakalpojumu izmantošanas.</p>
            <p>6.3. Jebkurš zaudējums no vietnes izmantošanas ir lietotāja atbildība.</p>
            <p>6.4. Mēs neuzņemamies atbildību par zaudējumiem, ko izraisījusi vietnes izmantošana.</p>
            <p>6.5. Tehniskas problēmas nav mūsu atbildība.</p>
            <p class="bold-title">7. Informācija</p>
            <p>7.1. Izmantojot pakalpojumus, jūs piekrītat, ka ar jums sazināsies.</p>
            <p>7.2. Ar informāciju rīkojamies konfidenciāli.</p>
            <p>7.3. Lietotājiem iesakām saglabāt uzskaiti.</p>
            <p class="bold-title">8. Saites un papildu avoti</p>
            <p>8.1. Vairāk informācijas skatiet mūsu noteikumos.</p>
            <p>8.2. Ārējās saites nav ieteikums.</p>
            <p>8.3. Iesakām pārbaudīt avotus pirms izmantošanas.</p>
            <p class="bold-title">9. Vispārīgi noteikumi</p>
            <p>9.1. Mēs paturam tiesības jebkurā laikā mainīt pakalpojumus.</p>
            <p>9.2. Noteikumi var mainīties jebkurā laikā.</p>
            <p>9.3. Izmantojot pakalpojumus, jūs pieņemat šos noteikumus.</p>
            <p>9.4. Mutiskas vienošanās nav spēkā.</p>
            <p>9.5. Neizmantotas tiesības netiek uzskatītas par atsauktām.</p>
            <p>
              9.6. Ja punkts tiek atzīts par nederīgu, pārējie paliek spēkā.
            </p>
            <p>9.7. Pakalpojumus var pārvaldīt ārējie sniedzēji.</p>
            <p>
              9.8. Šiem noteikumiem piemērojamas tiesības <?= e(geo_in()) ?>. Visi strīdi tiek iesniegti
              kompetentajai tiesai <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
