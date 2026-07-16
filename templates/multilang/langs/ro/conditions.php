<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termenii de utilizare');
$page_description = 'Consultă termenii de utilizare ai platformei de tranzacționare și ale site-ului ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termenii de utilizare</h1>
      <p class="lead">Ultimo aggiornamento: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Accedendo a <?= e(SITE_NAME) ?> accetti i presenti termini di utilizzo. Se non sei d'accordo, non utilizzare i nostri servizi.</p>

      <h2>Idoneita</h2>
      <p>Trebuie să ai cel puțin 18 ani și să fii autorizat legal să tranzacționezi instrumente financiare în jurisdicția ta.</p>

      <h2>Avvertenza sui rischi</h2>
      <p>Tranzacționarea criptomonedelor, forex, CFD și a altor instrumente financiare implică un risc semnificativ de pierdere. Performanțele trecute nu garantează rezultate viitoare. Operează doar cu capital pe care ți-l permiți să îl pierzi.</p>

      <h2>Responsabilita dell'account</h2>
      <p>Ești responsabil pentru confidențialitatea credențialelor de acces și pentru toate activitățile efectuate prin contul tău.</p>

      <h2>Disponibilita del servizio</h2>
      <p>Ci impegniamo a garantire continuita operativa, ma non possiamo assicurare accesso ininterrotto. Manutenzione, condizioni di mercato o problemi tecnici possono influire sul servizio.</p>

      <h2>Limitazione di responsabilita</h2>
      <p><?= e(SITE_NAME) ?> nu este responsabil pentru pierderi de tranzacționare sau daune rezultate din utilizarea informațiilor de pe acest site. Dacă este necesar, consultă un consilier financiar independent.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
