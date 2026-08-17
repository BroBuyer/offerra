<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Termeni de utilizare ᐉ ' . SITE_NAME;
$page_description = 'Termeni de utilizare pentru ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Informații juridice</span>
    <h1>Termeni de utilizare</h1>
    <p class="rmct9">Regulile care se aplică atunci când accesați sau folosiți <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Ultima actualizare: ianuarie 2025</p>

    <h2>1. Acceptarea termenilor</h2>
    <p>Prin accesarea sau folosirea site-ului și a serviciilor <?= e(SITE_NAME) ?>, sunteți de acord să fiți ținut de acești Termeni de utilizare. Dacă nu sunteți de acord, nu folosiți serviciile.</p>

    <h2>2. Eligibilitate</h2>
    <p>Trebuie să aveți cel puțin 18 ani (sau vârsta majoratului în jurisdicția dumneavoastră) și să fiți capabil din punct de vedere legal să încheiați un contract obligatoriu. Serviciile nu sunt oferite rezidenților din jurisdicții restricționate, unde o astfel de ofertă ar fi ilegală.</p>

    <h2>3. Înregistrarea contului</h2>
    <p>Sunteți de acord să furnizați informații corecte, actuale și complete la înregistrare și să le mențineți actualizate. Sunteți responsabil pentru păstrarea confidențialității datelor de autentificare și pentru toată activitatea din cont.</p>

    <h2>4. Servicii</h2>
    <p><?= e(SITE_NAME) ?> furnizează instrumente tehnologice și informații educaționale legate de investițiile online. Nu suntem consilierul dumneavoastră financiar. Nimic de pe acest site nu constituie consiliere de investiții personalizată, consiliere fiscală sau o solicitare de a cumpăra sau vinde vreun instrument financiar.</p>

    <h2>5. Comisioane</h2>
    <p>Comisioanele, spread-urile și taxele aplicabile sunt prezentate pe platformă sau în tariful aplicabil. Sunteți responsabil pentru orice impozit care decurge din activitățile dumneavoastră.</p>

    <h2>6. Conduită interzisă</h2>
    <ul>
      <li>Folosirea serviciilor pentru spălare de bani, finanțarea terorismului, manipularea pieței sau orice scop ilegal.</li>
      <li>Impersonarea altei persoane sau furnizarea de informații de identitate false.</li>
      <li>Tentative de a interfera, compromite sau decompila orice parte a platformei.</li>
      <li>Folosirea de instrumente automatizate pentru a accesa serviciile altfel decât este permis expres.</li>
    </ul>

    <h2>7. Proprietate intelectuală</h2>
    <p>Tot conținutul, mărcile, software-ul și materialele de pe site sunt proprietatea <?= e(SITE_NAME) ?> sau a licențiatorilor săi și sunt protejate de legile aplicabile privind proprietatea intelectuală. Vi se acordă o licență limitată, neexclusivă și revocabilă de a folosi serviciile în scopul lor destinat.</p>

    <h2>8. Servicii ale terților</h2>
    <p>Platforma poate conține linkuri către servicii ale terților sau se poate integra cu acestea. Nu suntem responsabili pentru aceste servicii, nici pentru disponibilitatea, acuratețea sau conținutul lor.</p>

    <h2>9. Declarații de declinare</h2>
    <p>Serviciile sunt furnizate „ca atare” și „în măsura disponibilității”, fără garanții de niciun fel. Tranzacționarea implică un risc substanțial de pierdere. Consultați <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Informare privind riscurile</a> pentru detalii suplimentare.</p>

    <h2>10. Limitarea răspunderii</h2>
    <p>În măsura maximă permisă de lege, <?= e(SITE_NAME) ?> nu răspunde pentru daune indirecte, incidentale, speciale, consecutive sau punitive, nici pentru pierderea de profituri sau venituri, care decurg din folosirea serviciilor.</p>

    <h2>11. Despăgubire</h2>
    <p>Sunteți de acord să despăgubiți și să exonerați <?= e(SITE_NAME) ?>, afiliații și personalul de orice pretenție sau cerere care decurge din încălcarea acestor Termeni sau din folosirea abuzivă a serviciilor.</p>

    <h2>12. Suspendare și încetare</h2>
    <p>Putem suspenda sau înceta accesul la servicii oricând, cu sau fără preaviz, dacă considerăm că ați încălcat acești Termeni sau legea aplicabilă.</p>

    <h2>13. Legea aplicabilă</h2>
    <p>Acești Termeni sunt guvernați de legile aplicabile la sediul <?= e(SITE_NAME) ?>, fără a ține seama de principiile conflictului de legi.</p>

    <h2>14. Modificări</h2>
    <p>Putem modifica acești Termeni din când în când. Continuarea folosirii serviciilor după modificări constituie acceptarea Termenilor revizuiți.</p>

    <h2>15. Contact</h2>
    <p>Întrebările despre acești Termeni pot fi trimise prin pagina de contact.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Înapoi acasă</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
