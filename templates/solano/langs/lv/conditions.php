<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Lietošanas noteikumi ᐉ ' . SITE_NAME;
$page_description = 'Lietošanas noteikumi ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridiskā informācija</span>
    <h1>Lietošanas noteikumi</h1>
    <p class="rmct9">Noteikumi, kas piemērojami, kad piekļūstat <?= e(SITE_NAME) ?> vai to izmantojat.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Pēdējoreiz atjaunināts: 2025. gada janvāris</p>

    <h2>1. Noteikumu pieņemšana</h2>
    <p>Piekļūstot <?= e(SITE_NAME) ?> vietnei un pakalpojumiem, jūs piekrītat šiem lietošanas noteikumiem. Ja nepiekrītat, pakalpojumus nelietojiet.</p>

    <h2>2. Tiesīgums</h2>
    <p>Jums jābūt vismaz 18 gadus vecam (vai pilngadīgam jūsu jurisdikcijā) un juridiski spējīgam noslēgt saistošu līgumu. Pakalpojumi netiek piedāvāti ierobežotu jurisdikciju iedzīvotājiem, kur tas būtu nelikumīgi.</p>

    <h2>3. Konta reģistrācija</h2>
    <p>Piekrītat sniegt precīzu, aktuālu un pilnīgu informāciju reģistrācijā un to uzturēt aktuālu. Jūs esat atbildīgi par pieteikšanās datu konfidencialitāti un visu aktivitāti kontā.</p>

    <h2>4. Pakalpojumi</h2>
    <p><?= e(SITE_NAME) ?> sniedz tehnoloģiskos rīkus un izglītojošu informāciju par tiešsaistes ieguldīšanu. Mēs neesam jūsu finanšu konsultants. Nekas vietnē nav personalizēts ieguldījumu vai nodokļu padoms vai aicinājums pirkt vai pārdot finanšu instrumentu.</p>

    <h2>5. Komisijas</h2>
    <p>Piemērojamās komisijas, spredi un komisijas maksas ir norādītas platformā vai tarifu tabulā. Jūs esat atbildīgi par nodokļiem no savas darbības.</p>

    <h2>6. Aizliegtā rīcība</h2>
    <ul>
      <li>Pakalpojumu izmantošana naudas atmazgāšanai, terorisma finansēšanai, tirgus manipulācijai vai jebkādam nelikumīgam mērķim.</li>
      <li>Uzdošanās par citu personu vai nepatiesu identitātes datu sniegšana.</li>
      <li>Mēģinājumi traucēt, kompromitēt vai veikt reverse-engineering jebkurai platformas daļai.</li>
      <li>Automatizētu rīku izmantošana piekļuvei pakalpojumiem citādi, nekā skaidri atļauts.</li>
    </ul>

    <h2>7. Intelektuālais īpašums</h2>
    <p>Viss saturs, preču zīmes, programmatūra un materiāli vietnē ir <?= e(SITE_NAME) ?> vai licences sniedzēju īpašums un ir aizsargāti ar intelektuālā īpašuma tiesībām. Jums tiek piešķirta ierobežota, neekskluzīva, atsaucama licence izmantot pakalpojumus paredzētajam mērķim.</p>

    <h2>8. Trešo pušu pakalpojumi</h2>
    <p>Platforma var saturēt saites uz trešo pušu pakalpojumiem vai ar tiem integrēties. Par šiem pakalpojumiem, pieejamību, precizitāti vai saturu neatbildam.</p>

    <h2>9. Atrunas</h2>
    <p>Pakalpojumi tiek sniegti „tādi, kādi ir” un „kā pieejami” bez jebkādām garantijām. Tirdzniecība ietver būtisku zaudējumu risku. Skatiet mūsu <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Risku informācija</a> papildu informācijai.</p>

    <h2>10. Atbildības ierobežojums</h2>
    <p>Maksimālajā likumā atļautajā apjomā <?= e(SITE_NAME) ?> neatbild par netiešiem, nejaušiem, īpašiem, sekas zaudējumiem vai soda zaudējumiem, kā arī par peļņas vai ieņēmumu zaudējumu no pakalpojumu izmantošanas.</p>

    <h2>11. Atlīdzināšana</h2>
    <p>Piekrītat atlīdzināt un atbrīvot <?= e(SITE_NAME) ?>, saistītos uzņēmumus un darbiniekus no prasībām, kas izriet no šo noteikumu pārkāpuma vai pakalpojumu ļaunprātīgas izmantošanas.</p>

    <h2>12. Apturēšana un izbeigšana</h2>
    <p>Piekļuvi pakalpojumiem varam jebkurā laikā apturēt vai izbeigt, ar paziņojumu vai bez tā, ja uzskatām, ka esat pārkāpuši šos noteikumus vai likumu.</p>

    <h2>13. Piemērojamās tiesības</h2>
    <p>Šos noteikumus regulē <?= e(SITE_NAME) ?> mītnes vietas tiesības, neatkarīgi no kolīziju normām.</p>

    <h2>14. Izmaiņas</h2>
    <p>Šos noteikumus varam laiku pa laikam grozīt. Turpmāka pakalpojumu izmantošana pēc izmaiņām nozīmē pārskatīto noteikumu pieņemšanu.</p>

    <h2>15. Kontakti</h2>
    <p>Jautājumus par šiem noteikumiem varat nosūtīt caur kontaktu lapu.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Atpakaļ uz sākumu</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
