<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Termeni de utilizare');
$page_description = 'Regulile care se aplică când accesezi sau folosești ' . SITE_NAME . '.';
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
    <nav class="nav-links" aria-label="Principal">
      <a href="<?= page_url() ?>#platform">Platformă</a>
      <a href="<?= page_url() ?>#how">Cum funcționează</a>
      <a href="<?= page_url() ?>#markets">Piețe</a>
      <a href="<?= page_url() ?>#faq">Întrebări frecvente</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Începe</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Termeni de utilizare</h1>
      <p class="lede">Regulile care se aplică când accesezi sau folosești <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Ultima actualizare: ianuarie 2025</p>

      <h2>1. Acceptarea Termenilor</h2>
      <p>Accesând sau folosind site-ul și serviciile <?= e(SITE_NAME) ?>, ești de acord să fii legat de acești Termeni de utilizare. Dacă nu ești de acord, nu folosi serviciile.</p>

      <h2>2. Eligibilitate</h2>
      <p>Trebuie să ai cel puțin 18 ani (sau vârsta majoratului în jurisdicția ta) și capacitate juridică de a încheia un contract obligatoriu. Serviciile nu sunt oferite rezidenților din jurisdicții restricționate unde o astfel de ofertă ar fi ilegală.</p>

      <h2>3. Înregistrarea contului</h2>
      <p>Ești de acord să furnizezi informații exacte, actuale și complete la înregistrare și să le menții actualizate. Ești responsabil pentru confidențialitatea acreditărilor și pentru toată activitatea din cont.</p>

      <h2>4. Servicii</h2>
      <p><?= e(SITE_NAME) ?> oferă instrumente tehnologice și informații educaționale legate de investițiile online. Nu suntem consilierul tău financiar. Nimic pe acest site nu constituie sfaturi de investiții personalizate, sfaturi fiscale sau o solicitare de a cumpăra sau vinde un instrument financiar.</p>

      <h2>5. Comisioane</h2>
      <p>Comisioanele, spread-urile și taxele aplicabile sunt dezvăluite pe platformă sau în tariful aplicabil. Ești responsabil pentru orice taxe care rezultă din activitățile tale.</p>

      <h2>6. Conduită interzisă</h2>
      <ul>
        <li>Folosirea serviciilor pentru spălarea banilor, finanțarea terorismului, manipularea pieței sau orice scop ilegal.</li>
        <li>Impersonarea altei persoane sau furnizarea de informații false de identitate.</li>
        <li>Încercarea de a interfera, compromite sau face reverse-engineering oricărei părți a platformei.</li>
        <li>Folosirea unor instrumente automate pentru a accesa serviciile altfel decât este expres permis.</li>
      </ul>

      <h2>7. Proprietate intelectuală</h2>
      <p>Tot conținutul, mărcile, software-ul și materialele de pe site sunt proprietatea <?= e(SITE_NAME) ?> sau a licențiatorilor săi și sunt protejate de legile aplicabile privind proprietatea intelectuală. Ți se acordă o licență limitată, neexclusivă, revocabilă de a folosi serviciile în scopul lor destinat.</p>

      <h2>8. Servicii terțe</h2>
      <p>Platforma poate conține linkuri către sau integra servicii terțe. Nu suntem responsabili pentru astfel de servicii, disponibilitatea, acuratețea sau conținutul lor.</p>

      <h2>9. Declarații de declinare</h2>
      <p>Serviciile sunt furnizate „ca atare” și „în funcție de disponibilitate” fără garanții de niciun fel. Tranzacționarea implică un risc substanțial de pierdere. Vezi <a href="<?= page_url('conditions.php') ?>">Dezvăluirea riscurilor</a> pentru detalii.</p>

      <h2>10. Limitarea răspunderii</h2>
      <p>În măsura maximă permisă de lege, <?= e(SITE_NAME) ?> nu va fi răspunzător pentru daune indirecte, incidente, speciale, consecutive sau punitive ori pentru orice pierdere de profituri sau venituri rezultând din utilizarea serviciilor.</p>

      <h2>11. Despăgubire</h2>
      <p>Ești de acord să despăgubești și să exonerezi <?= e(SITE_NAME) ?>, afiliații și personalul său de orice pretenție rezultând din încălcarea acestor Termeni sau din utilizarea greșită a serviciilor.</p>

      <h2>12. Suspendare și încetare</h2>
      <p>Putem suspenda sau înceta accesul la servicii oricând, cu sau fără notificare, dacă considerăm că ai încălcat acești Termeni sau legea aplicabilă.</p>

      <h2>13. Legea aplicabilă</h2>
      <p>Acești Termeni sunt guvernați de legile aplicabile la sediul <?= e(SITE_NAME) ?>, fără a ține seama de principiile conflictului de legi.</p>

      <h2>14. Modificări</h2>
      <p>Putem modifica acești Termeni din când în când. Utilizarea continuă a serviciilor după modificări constituie acceptarea Termenilor revizuiți.</p>

      <h2>15. Contact</h2>
      <p>Întrebările despre acești Termeni pot fi trimise prin <a href="<?= page_url('contacts.php') ?>">pagina de contact</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Înapoi la pagina principală</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Toate drepturile rezervate ·
      <a href="<?= page_url('privacy.php') ?>">Confidențialitate</a> ·
      <a href="<?= page_url('conditions.php') ?>">Termeni</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
