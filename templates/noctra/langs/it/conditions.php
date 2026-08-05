<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termini di utilizzo');
$page_description = 'Leggi i termini e le condizioni per l\'uso della piattaforma di trading e del sito ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termini di utilizzo</h1>
      <p class="lead">Ultimo aggiornamento: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Accedendo a <?= e(SITE_NAME) ?> accetti questi Termini di utilizzo. Se non sei d'accordo, non usare i nostri servizi.</p>

      <h2>Idoneità</h2>
      <p>Devi avere almeno 18 anni ed essere legalmente autorizzato a operare con strumenti finanziari nella tua giurisdizione.</p>

      <h2>Avvertenza sui rischi</h2>
      <p>Il trading di criptovalute, forex, CFD e altri strumenti finanziari comporta un rischio sostanziale di perdita. Le performance passate non garantiscono risultati futuri. Opera solo con capitali che puoi permetterti di perdere.</p>

      <h2>Responsabilità dell'account</h2>
      <p>Sei responsabile di mantenere riservate le credenziali del tuo account e di tutta l'attività svolta sotto il tuo account.</p>

      <h2>Disponibilità del servizio</h2>
      <p>Miriamo a una disponibilità continua ma non garantiamo un accesso ininterrotto. Manutenzione, condizioni di mercato o problemi tecnici possono influire sul servizio.</p>

      <h2>Limitazione di responsabilità</h2>
      <p><?= e(SITE_NAME) ?> non è responsabile di perdite di trading o danni derivanti dall'uso delle informazioni presenti su questo sito. Rivolgiti a una consulenza finanziaria indipendente se opportuno.</p>

      <h2>Contatti</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
