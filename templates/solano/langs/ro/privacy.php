<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Politica de confidențialitate ᐉ ' . SITE_NAME;
$page_description = 'Cum ' . SITE_NAME . ' colectează, folosește și protejează datele dumneavoastră personale.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Informații juridice</span>
    <h1>Politica de confidențialitate</h1>
    <p class="etpy2">Cum <?= e(SITE_NAME) ?> colectează, folosește și protejează datele dumneavoastră personale.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Ultima actualizare: ianuarie 2025</p>

    <h2>1. Introducere</h2>
    <p><?= e(SITE_NAME) ?> („noi”, „nouă”, „al nostru”) se angajează să protejeze confidențialitatea vizitatorilor și a clienților. Această Politică de confidențialitate explică ce date personale colectăm, de ce le colectăm și cum le prelucrăm atunci când folosiți site-ul și serviciile noastre.</p>

    <h2>2. Informațiile pe care le colectăm</h2>
    <ul>
      <li><strong>Date de identitate</strong> — nume, data nașterii, act de identitate eliberat de autorități pentru verificarea identității și conformitatea KYC/AML.</li>
      <li><strong>Date de contact</strong> — adresă de e-mail, număr de telefon, adresă poștală.</li>
      <li><strong>Date financiare</strong> — detalii de plată, istoricul tranzacțiilor, informații despre sursa fondurilor.</li>
      <li><strong>Date tehnice</strong> — adresă IP, tip de browser, identificatori de dispozitiv, cookie-uri și analitică de utilizare.</li>
    </ul>

    <h2>3. Cum folosim datele dumneavoastră</h2>
    <ul>
      <li>Pentru verificarea identității și îndeplinirea obligațiilor de reglementare.</li>
      <li>Pentru a furniza, menține și îmbunătăți platforma și serviciile.</li>
      <li>Pentru a procesa plăți și a detecta activități frauduloase.</li>
      <li>Pentru a comunica cu dumneavoastră despre cont, actualizări și solicitări de suport.</li>
      <li>Pentru a trimite comunicări de marketing atunci când v-ați dat consimțământul (vă puteți dezabona oricând).</li>
    </ul>

    <h2>4. Temeiul juridic</h2>
    <p>Prelucrăm datele personale pe unul sau mai multe dintre următoarele temeiuri: executarea unui contract, respectarea unei obligații legale, interesele noastre legitime sau consimțământul dumneavoastră.</p>

    <h2>5. Partajare și divulgare</h2>
    <p>Putem partaja date personale cu furnizori de plăți reglementați, parteneri de verificare KYC/AML, furnizori de infrastructură cloud, consilieri profesioniști și autorități competente, acolo unde legea o cere. Nu vindem date personale.</p>

    <h2>6. Transferuri internaționale</h2>
    <p>Atunci când datele personale sunt transferate în afara jurisdicției dumneavoastră, ne asigurăm că există garanții adecvate, inclusiv clauze contractuale standard.</p>

    <h2>7. Păstrarea datelor</h2>
    <p>Păstrăm datele personale atât timp cât este necesar pentru a furniza servicii și a îndeplini cerințe legale, de reglementare și contabile — de obicei cel puțin cinci ani după închiderea unui cont.</p>

    <h2>8. Drepturile dumneavoastră</h2>
    <p>În conformitate cu legea aplicabilă, puteți solicita accesul, corectarea, ștergerea, restricționarea sau portabilitatea datelor personale și puteți obiecta la anumite prelucrări. Pentru a exercita aceste drepturi, contactați-ne la adresa de mai jos.</p>

    <h2>9. Cookie-uri</h2>
    <p>Folosim cookie-uri esențiale și de analiză pentru a opera site-ul și a înțelege utilizarea. Puteți gestiona cookie-urile din setările browserului.</p>

    <h2>10. Securitate</h2>
    <p>Aplicăm măsuri administrative, tehnice și fizice menite să protejeze datele personale împotriva accesului neautorizat, divulgării, modificării sau distrugerii. Niciun sistem nu este perfect sigur și nu putem garanta securitatea absolută.</p>

    <h2>11. Modificări</h2>
    <p>Putem actualiza această Politică din când în când. Cea mai recentă versiune va fi întotdeauna disponibilă pe această pagină, cu data actualizării.</p>

    <h2>12. Contact</h2>
    <p>Pentru întrebări de confidențialitate sau pentru a vă exercita drepturile, contactați echipa de protecție a datelor <?= e(SITE_NAME) ?> prin pagina de contact.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Înapoi acasă</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
