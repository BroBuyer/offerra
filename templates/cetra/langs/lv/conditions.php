<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Lietošanas noteikumi');
$page_description = 'Noteikumi, kas piemērojami, kad piekļūstat vai izmantojat ' . SITE_NAME . '.';
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
    <nav class="nav-links" aria-label="Galvenā">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Kā tas darbojas</a>
      <a href="<?= page_url() ?>#markets">Tirgi</a>
      <a href="<?= page_url() ?>#faq">Bieži uzdotie jautājumi</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Sākt</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Lietošanas noteikumi</h1>
      <p class="lede">Noteikumi, kas piemērojami, kad piekļūstat vai izmantojat <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Pēdējoreiz atjaunināts: 2025. gada janvāris</p>

      <h2>1. Noteikumu pieņemšana</h2>
      <p>Piekļūstot vai izmantojot <?= e(SITE_NAME) ?> vietni un pakalpojumus, jūs piekrītat būt saistītiem ar šiem Lietošanas noteikumiem. Ja nepiekrītat, neizmantojiet pakalpojumus.</p>

      <h2>2. Atbilstība</h2>
      <p>Jums jābūt vismaz 18 gadus vecam (vai pilngadības vecumam jūsu jurisdikcijā) un juridiskai spējai noslēgt saistošu līgumu. Pakalpojumi netiek piedāvāti ierobežotu jurisdikciju iedzīvotājiem, kur šāds piedāvājums būtu nelikumīgs.</p>

      <h2>3. Konta reģistrācija</h2>
      <p>Jūs piekrītat sniegt precīzu, aktuālu un pilnīgu informāciju reģistrācijas laikā un uzturēt šo informāciju atjauninātu. Jūs esat atbildīgs par savu akreditācijas datu konfidencialitāti un par visu darbību savā kontā.</p>

      <h2>4. Pakalpojumi</h2>
      <p><?= e(SITE_NAME) ?> nodrošina tehnoloģiskos rīkus un izglītojošu informāciju saistībā ar tiešsaistes ieguldījumiem. Mēs neesam jūsu finanšu konsultants. Nekas šajā vietnē nav personalizēts ieguldījumu padoms, nodokļu padoms vai aicinājums pirkt vai pārdot jebkuru finanšu instrumentu.</p>

      <h2>5. Komisijas</h2>
      <p>Piemērojamās komisijas, starpības un maksas ir atklātas platformā vai piemērojamajā komisiju grafikā. Jūs esat atbildīgs par jebkādiem nodokļiem, kas izriet no jūsu darbībām.</p>

      <h2>6. Aizliegtā rīcība</h2>
      <ul>
        <li>Pakalpojumu izmantošana naudas atmazgāšanai, terorisma finansēšanai, tirgus manipulācijai vai jebkādam nelikumīgam mērķim.</li>
        <li>Uzdoties par citu personu vai sniegt nepatiesu identitātes informāciju.</li>
        <li>Mēģināt iejaukties, apdraudēt vai veikt reversās inženierijas jebkurai platformas daļai.</li>
        <li>Izmantot automatizētus rīkus, lai piekļūtu pakalpojumiem citādi, nekā ir skaidri atļauts.</li>
      </ul>

      <h2>7. Intelektuālais īpašums</h2>
      <p>Viss saturs, preču zīmes, programmatūra un materiāli vietnē ir <?= e(SITE_NAME) ?> vai tās licenču devēju īpašums un ir aizsargāti ar piemērojamiem intelektuālā īpašuma likumiem. Jums tiek piešķirta ierobežota, neekskluzīva un atsaucama licence izmantot pakalpojumus to paredzētajam mērķim.</p>

      <h2>8. Trešo pušu pakalpojumi</h2>
      <p>Platformā var būt saites uz trešo pušu pakalpojumiem vai to integrācija. Mēs neesam atbildīgi par šādiem pakalpojumiem, to pieejamību, precizitāti vai saturu.</p>

      <h2>9. Atbildības atrunas</h2>
      <p>Pakalpojumi tiek sniegti «kā ir» un «kā pieejami» bez jebkāda veida garantijām. Tirdzniecība ietver būtisku zaudējumu risku. Skatiet mūsu <a href="<?= page_url('conditions.php') ?>">Risku informācija</a> lai uzzinātu sīkāku informāciju.</p>

      <h2>10. Atbildības ierobežojums</h2>
      <p>Ciktāl to atļauj likums, <?= e(SITE_NAME) ?> nav atbildīga par jebkādiem netiešiem, nejaušiem, īpašiem, izrietošiem vai soda zaudējumiem, vai peļņas vai ieņēmumu zaudējumiem, kas izriet no jūsu pakalpojumu izmantošanas.</p>

      <h2>11. Atlīdzināšana</h2>
      <p>Jūs piekrītat atlīdzināt un atbrīvot no atbildības <?= e(SITE_NAME) ?>, tās saistītos uzņēmumus un personālu no jebkādas prasības, kas izriet no šo Noteikumu pārkāpuma vai pakalpojumu ļaunprātīgas izmantošanas.</p>

      <h2>12. Apturēšana un izbeigšana</h2>
      <p>Mēs varam jebkurā laikā apturēt vai izbeigt piekļuvi pakalpojumiem ar vai bez iepriekšēja brīdinājuma, ja uzskatām, ka esat pārkāpis šos Noteikumus vai piemērojamo likumu.</p>

      <h2>13. Piemērojamais likums</h2>
      <p>Šos Noteikumus regulē <?= e(SITE_NAME) ?> mītnes vietā piemērojamie likumi, neņemot vērā kolīziju tiesību principus.</p>

      <h2>14. Izmaiņas</h2>
      <p>Mēs varam laiku pa laikam mainīt šos Noteikumus. Pakalpojumu turpmāka izmantošana pēc izmaiņām nozīmē pārskatīto Noteikumu pieņemšanu.</p>

      <h2>15. Kontakti</h2>
      <p>Jautājumus par šiem Noteikumiem varat nosūtīt caur mūsu <a href="<?= page_url('contacts.php') ?>">kontaktu lapu</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Atpakaļ uz sākumlapu</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Visas tiesības aizsargātas ·
      <a href="<?= page_url('privacy.php') ?>">Privātuma politika</a> ·
      <a href="<?= page_url('conditions.php') ?>">Lietošanas noteikumi</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
