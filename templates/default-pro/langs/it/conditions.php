<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termini di utilizzo');
$page_description = 'Read the terms and conditions for using the ' . SITE_NAME . ' trading platform and website.';
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
      <p>Accedendo a <?= e(SITE_NAME) ?> accetti i presenti termini di utilizzo. Se non sei d'accordo, non utilizzare i nostri servizi.</p>

      <h2>Idoneita</h2>
      <p>Devi avere almeno 18 anni ed essere legalmente autorizzato a negoziare strumenti finanziari nella tua giurisdizione.</p>

      <h2>Avvertenza sui rischi</h2>
      <p>Il trading di criptovalute, forex, CFD e altri strumenti finanziari comporta un rischio significativo di perdita. Le performance passate non garantiscono risultati futuri. Opera solo con capitale che puoi permetterti di perdere.</p>

      <h2>Responsabilita dell'account</h2>
      <p>Sei responsabile della riservatezza delle tue credenziali di accesso e di tutte le attivita svolte tramite il tuo account.</p>

      <h2>Disponibilita del servizio</h2>
      <p>Ci impegniamo a garantire continuita operativa, ma non possiamo assicurare accesso ininterrotto. Manutenzione, condizioni di mercato o problemi tecnici possono influire sul servizio.</p>

      <h2>Limitazione di responsabilita</h2>
      <p><?= e(SITE_NAME) ?> non e responsabile per perdite di trading o danni derivanti dall'uso delle informazioni presenti su questo sito. Se necessario, consulta un consulente finanziario indipendente.</p>

      <h2>Contatti</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
