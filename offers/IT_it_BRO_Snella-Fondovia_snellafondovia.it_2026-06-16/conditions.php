<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termini di utilizzo');
$page_description = 'Leggi i termini e le condizioni per l’utilizzo del sito e della piattaforma di ' . SITE_NAME . '.';
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
      <p>Accedendo a <?= e(SITE_NAME) ?> accetti i presenti Termini di utilizzo. Se non sei d’accordo, ti invitiamo a non utilizzare i nostri servizi.</p>

      <h2>Idoneità</h2>
      <p>Devi avere almeno 18 anni ed essere legalmente autorizzato a operare su strumenti finanziari nella tua giurisdizione.</p>

      <h2>Avvertenza sui rischi</h2>
      <p>Il trading di criptovalute, forex, CFD e altri strumenti finanziari comporta un rischio significativo di perdita. Le performance passate non garantiscono risultati futuri. Opera solo con capitale che puoi permetterti di perdere.</p>

      <h2>Responsabilità dell’account</h2>
      <p>Sei responsabile di mantenere riservate le credenziali del tuo account e di tutte le attività svolte tramite il tuo account.</p>

      <h2>Disponibilità del servizio</h2>
      <p>Puntiamo a garantire continuità del servizio, ma non assicuriamo un accesso ininterrotto. Manutenzione, condizioni di mercato o problemi tecnici possono influire sulla disponibilità.</p>

      <h2>Limitazione di responsabilità</h2>
      <p><?= e(SITE_NAME) ?> non è responsabile per perdite di trading o danni derivanti dall’uso delle informazioni presenti su questo sito. Se opportuno, richiedi consulenza finanziaria indipendente.</p>

      <h2>Contatti</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
