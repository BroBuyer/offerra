<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Termini e condizioni | Accordo utente con ' . SITE_NAME;
$page_description = 'Consulta i termini della piattaforma, le regole di trading e le policy di assistenza di ' . SITE_NAME . '.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Termini e condizioni', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="percorso di navigazione" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Home</a>
            <span class="breadcrumb-item">Termini e condizioni</span>
        </nav>
        <h1>Termini e condizioni</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Introduzione</h2>
    <p>Questo sito presenta servizi di trading di terzi. Proseguendo, accetti questi termini e la nostra informativa sulla privacy. I termini possono essere aggiornati.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Idoneità</h2>
    <p>Devi avere almeno 18 anni ed essere legalmente autorizzato ad accettare questi termini, secondo il diritto locale. Decliniamo ogni responsabilità in caso di uso improprio della piattaforma.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Limitazioni di accesso</h2>
    <p>L’accesso può essere limitato in alcune regioni o in presenza di vincoli regolamentari. Alcuni servizi possono non essere disponibili in determinati luoghi.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Uso appropriato</h2>
    <p>L’uso non autorizzato è vietato, comprese attività illecite, violazione di diritti, diffusione di contenuti dannosi o bot. Le infrazioni possono comportare la sospensione del conto.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Proprietà intellettuale</h2>
    <p>Tutti i contenuti, i marchi e i diritti di proprietà intellettuale appartengono a noi o ai nostri affiliati. L’uso del sito è personale; copiare o modificare i contenuti non è consentito.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Limitazione di responsabilità</h2>
    <p>I servizi e il sito sono forniti «così come sono». Non accettiamo responsabilità per errori, perdite o danni derivanti dall’uso.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Contenuti di terzi</h2>
    <p>Possono comparire contenuti o link di terzi senza garanzia di esattezza o disponibilità; verificali in modo indipendente.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Link esterni</h2>
    <p>I link esterni sono forniti per comodità. Non approviamo né controlliamo questi siti e decliniamo ogni responsabilità per i loro contenuti.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Disposizioni aggiuntive</h2>
    <p>Possiamo aggiornare servizi e termini. Questi termini costituiscono l’intero accordo. Il mancato esercizio di un diritto non implica rinuncia.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
