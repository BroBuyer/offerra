<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Confidențialitate | Protecția datelor la ' . SITE_NAME;
$page_description = 'Aflați cum ' . SITE_NAME . ' vă protejează datele în Politica de confidențialitate.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Politica de confidențialitate', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="fir de navigare"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Acasă</a>
  <span class="breadcrumb-item">Politica de confidențialitate</span>
</nav>
<h1>Angajamentul nostru de a vă proteja confidențialitatea</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Ultima actualizare: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («noi»), protecția datelor personale este o prioritate. Această declarație explică modul în care colectăm, folosim și protejăm informațiile.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Transparență în prelucrarea datelor</p>
    <p>
      Urmărim claritatea prelucrării datelor. Contactați-ne la      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Scopul utilizării datelor</p>
    <p>Folosim informațiile pentru a oferi servicii, a îmbunătăți platforma și a respecta obligațiile legale.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Accesul la datele dvs.</p>
    <p>Puteți oricând solicita acces, corectare sau ștergerea datelor personale.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Practici de securitate</p>
    <p>Aplicăm măsuri solide de securitate, fără a putea garanta protecție absolută.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informațiile pe care le colectăm</h2>
    <p>Colectăm, de exemplu, adrese IP, date despre dispozitiv, tipuri de browser și informații pe care ni le furnizați direct.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Temeiuri de prelucrare</h2>
    <p>Prelucrarea se bazează pe consimțământ, interese legitime și respectarea legislației aplicabile.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Partajarea datelor</h2>
    <p>Datele dvs. pot fi partajate cu parteneri de încredere, furnizori și autorități, când legea o cere.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookie-uri</h2>
    <p>Cookie-urile susțin funcționarea site-ului și analiza utilizării; le puteți dezactiva dacă doriți.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Perioada de păstrare</h2>
    <p>Păstrăm informațiile doar cât este necesar pentru scopurile indicate.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Transferuri internaționale</h2>
    <p>Datele pot fi transferate peste granițe, cu garanții adecvate.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Linkuri către alte site-uri</h2>
    <p>Nu ne asumăm responsabilitatea pentru site-urile externe legate din platformă sau pentru practicile lor.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Actualizări ale acestei politici</h2>
    <p>Această politică de confidențialitate se poate actualiza.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Drepturile dvs.</h2>
    <p>Aveți dreptul de acces, rectificare, ștergere, restricționare a prelucrării, portabilitate, retragere a consimțământului și depunere a unei plângeri.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
