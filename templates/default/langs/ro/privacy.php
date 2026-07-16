<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politica de confidențialitate');
$page_description = 'Scopri come ' . SITE_NAME . ' raccoglie, utilizza e protegge i tuoi dati personali.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politica de confidențialitate</h1>
      <p class="lead">Ultimo aggiornamento: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prezenta Politică de confidențialitate descrie cum <?= e(SITE_NAME) ?> („noi”) colectează și prelucrează datele personale în timpul utilizării site-ului și serviciilor noastre.</p>

      <h2>Quali informazioni raccogliamo</h2>
      <p>Possiamo raccogliere: nome, indirizzo email, numero di telefono, paese di residenza, indirizzo IP e informazioni fornite tramite moduli o richieste di supporto.</p>

      <h2>Come utilizziamo le tue informazioni</h2>
      <ul>
        <li>Pentru a crea și gestiona contul tău</li>
        <li>Per fornirti accesso alla piattaforma di trading e all'assistenza clienti</li>
        <li>Per adempiere a obblighi legali e normativi</li>
        <li>Per migliorare i nostri servizi e prevenire le frodi</li>
      </ul>

      <h2>Sicurezza dei dati</h2>
      <p>Aplicăm măsuri tehnice și organizatorice, inclusiv criptare SSL și control al accesului, pentru a-ți proteja datele.</p>

      <h2>I tuoi diritti</h2>
      <p>În funcție de jurisdicția ta, poți avea dreptul de acces, rectificare sau ștergere a datelor personale. Pentru a exercita aceste drepturi, contactează <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>Contact</h2>
      <p>Hai domande su questa informativa? Scrivici a <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
