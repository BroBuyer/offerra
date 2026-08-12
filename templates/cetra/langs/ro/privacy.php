<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Politica de confidențialitate');
$page_description = 'Cum ' . SITE_NAME . ' colectează, folosește și protejează datele tale personale.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
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
      <span class="eyebrow">Informații legale</span>
      <h1>Politica de confidențialitate</h1>
      <p class="lede">Cum <?= e(SITE_NAME) ?> colectează, folosește și protejează datele tale personale.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Ultima actualizare: ianuarie 2025</p>

      <h2>1. Introducere</h2>
      <p><?= e(SITE_NAME) ?> („noi”, „al nostru”) se angajează să protejeze confidențialitatea vizitatorilor și clienților. Această Politică de confidențialitate explică ce date personale colectăm, de ce și cum le prelucrăm când folosești site-ul și serviciile noastre.</p>

      <h2>2. Informațiile pe care le colectăm</h2>
      <ul>
        <li>Date de identitate — nume, data nașterii, documente de identitate emise de stat pentru înregistrare și conformitate KYC/AML.</li>
        <li>Date de contact — adresă de e-mail, număr de telefon, adresă poștală.</li>
        <li>Date financiare — detalii de plată, istoric de tranzacții, informații despre sursa fondurilor.</li>
        <li>Date tehnice — adresă IP, tip de browser, identificatori de dispozitiv, cookie-uri și analize de utilizare.</li>
      </ul>

      <h2>3. Cum folosim datele tale</h2>
      <ul>
        <li>Pentru a verifica identitatea și a respecta obligațiile de reglementare.</li>
        <li>Pentru a furniza, menține și îmbunătăți platforma și serviciile noastre.</li>
        <li>Pentru a procesa plățile și a detecta activități frauduloase.</li>
        <li>Pentru a comunica cu tine despre cont, actualizări și solicitări de asistență.</li>
        <li>Pentru a trimite comunicări de marketing când ți-ai dat consimțământul (te poți dezabona oricând).</li>
      </ul>

      <h2>4. Temei legal</h2>
      <p>Prelucrăm datele personale pe baza unuia sau mai multora dintre următoarele temeiuri legale: executarea unui contract, respectarea unei obligații legale, interesele noastre legitime sau consimțământul tău.</p>

      <h2>5. Partajare și divulgare</h2>
      <p>Putem partaja date personale cu furnizori de plăți reglementați, parteneri de verificare KYC/AML, furnizori de infrastructură cloud, consilieri profesioniști și autorități competente când legea o cere. Nu vindem date personale.</p>

      <h2>6. Transferuri internaționale</h2>
      <p>Când datele personale sunt transferate în afara jurisdicției tale, asigurăm garanții adecvate, inclusiv clauze contractuale standard.</p>

      <h2>7. Păstrarea datelor</h2>
      <p>Păstrăm datele personale atât timp cât este necesar pentru a furniza servicii și a îndeplini cerințele legale, de reglementare și contabile — de obicei cel puțin cinci ani după închiderea contului.</p>

      <h2>8. Drepturile tale</h2>
      <p>Sub rezerva legii aplicabile, poți solicita accesul, corectarea, ștergerea, restricționarea sau portabilitatea datelor personale și te poți opune anumitor prelucrări. Pentru a exercita aceste drepturi, contactează-ne la adresa de mai jos.</p>

      <h2>9. Cookie-uri</h2>
      <p>Folosim cookie-uri esențiale și analitice pentru a opera site-ul și a înțelege utilizarea. Poți gestiona cookie-urile din setările browserului.</p>

      <h2>10. Securitate</h2>
      <p>Aplicăm măsuri administrative, tehnice și fizice concepute pentru a proteja datele personale împotriva accesului neautorizat, divulgării, modificării sau distrugerii. Niciun sistem nu este perfect sigur și nu putem garanta o securitate absolută.</p>

      <h2>11. Modificări</h2>
      <p>Putem actualiza această Politică din când în când. Cea mai recentă versiune va fi întotdeauna disponibilă pe această pagină cu data actualizată.</p>

      <h2>12. Contact</h2>
      <p>Pentru întrebări de confidențialitate sau pentru a-ți exercita drepturile, contactează echipa de Protecție a Datelor <?= e(SITE_NAME) ?> prin <a href="<?= page_url('contacts.php') ?>">pagina de contact</a>.</p>

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
