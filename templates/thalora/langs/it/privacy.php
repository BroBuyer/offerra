<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privacy | Protezione dei dati su ' . SITE_NAME;
$page_description = 'Scopri come ' . SITE_NAME . ' protegge i tuoi dati con la nostra informativa sulla privacy.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Informativa sulla privacy', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="percorso di navigazione"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
  <span class="breadcrumb-item">Informativa sulla privacy</span>
</nav>
<h1>Il nostro impegno per proteggere la tua privacy</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Ultimo aggiornamento: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («noi»), la protezione dei dati personali è una priorità. Questa dichiarazione spiega come raccogliamo, usiamo e proteggiamo le tue informazioni.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Trasparenza nel trattamento dei dati</p>
    <p>
      Puntiamo alla chiarezza sul trattamento dei dati. Contattaci a      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Finalità di utilizzo dei dati</p>
    <p>Usiamo le tue informazioni per erogare i servizi, migliorare la piattaforma e rispettare gli obblighi di legge.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Accesso ai tuoi dati</p>
    <p>Puoi in qualsiasi momento chiedere accesso, correzione o cancellazione dei tuoi dati personali.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Pratiche di sicurezza</p>
    <p>Applichiamo misure di sicurezza solide, senza poter garantire una protezione assoluta.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Informazioni raccolte</h2>
    <p>Raccogliamo tra l’altro indirizzi IP, caratteristiche del dispositivo, tipi di browser e i dati che fornisci direttamente.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Basi del trattamento</h2>
    <p>Il trattamento si basa sul consenso, sui nostri interessi legittimi e sul rispetto delle leggi applicabili.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Condivisione dei dati</h2>
    <p>Le tue informazioni possono essere condivise con partner di fiducia, fornitori e autorità quando la legge lo richiede.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookie</h2>
    <p>I cookie garantiscono il funzionamento del sito e l’analisi d’uso; puoi disattivarli se lo desideri.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Periodo di conservazione</h2>
    <p>Conserviamo le informazioni solo per il tempo necessario alle finalità descritte.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Trasferimenti internazionali</h2>
    <p>I dati possono essere trasferiti oltre confine, con garanzie adeguate.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Link ad altri siti</h2>
    <p>Non ci assumiamo la responsabilità dei siti esterni collegati dalla piattaforma né delle loro pratiche.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Aggiornamenti di questa informativa</h2>
    <p>Questa informativa sulla privacy può essere aggiornata.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">I tuoi diritti</h2>
    <p>Hai diritto di accedere, rettificare, cancellare, limitare il trattamento, trasferire i dati, revocare il consenso e presentare un reclamo.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
