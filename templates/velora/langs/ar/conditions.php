<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termini di utilizzo');
$page_description = 'Leggi i termini e le condizioni per utilizzare la piattaforma di trading e il sito web ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termini di utilizzo</h1>
      <p class="lead">Last updated: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Accedendo a <?= e(SITE_NAME) ?> accetti questi Termini di utilizzo. Se non li accetti, non utilizzare i nostri servizi.</p>

      <h2>Requisiti</h2>
      <p>Devi avere almeno 18 anni ed essere legalmente autorizzato a negoziare strumenti finanziari nella tua giurisdizione.</p>

      <h2>Informativa sui rischi</h2>
      <p>Il trading di criptovalute, forex, CFD e altri strumenti finanziari comporta un rischio significativo di perdita. Le performance passate non garantiscono risultati futuri. Negozi solo con capitali che puoi permetterti di perdere.</p>

      <h2>Responsabilità dell’account</h2>
      <p>Sei responsabile di mantenere riservate le credenziali del tuo account e di tutte le attività svolte tramite il tuo account.</p>

      <h2>Disponibilità del servizio</h2>
      <p>Ci impegniamo per garantire una disponibilità continua, ma non possiamo assicurare l’accesso senza interruzioni. Manutenzione, condizioni di mercato o problemi tecnici possono influire sul servizio.</p>

      <h2>Limitazione di responsabilità</h2>
      <p><?= e(SITE_NAME) ?> non è responsabile di perdite di trading o danni derivanti dall’uso delle informazioni su questo sito. Se necessario, richiedi una consulenza finanziaria indipendente.</p>

      <h2>Contatti</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
