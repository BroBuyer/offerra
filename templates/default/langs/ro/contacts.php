<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contactează suportul ' . SITE_NAME . ' o il nostro team commerciale. Siamo disponibili 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Suntem aici să te ajutăm</h1>
      <p class="lead">Suport profesional 24/7 pentru întrebări despre cont, tranzacționare și aspecte tehnice.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Supporto email</h3>
          <p style="margin-bottom: 1rem;">Per richieste generali e assistenza account:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Tempi di risposta</h3>
          <p>Răspundem la majoritatea solicitărilor în câteva ore. Problemele urgente legate de tranzacționare au prioritate.</p>
        </article>
        <article class="feature-card">
          <h3>Pronto a iniziare?</h3>
          <p style="margin-bottom: 1rem;">Deschide-ți contul în câteva minute, fără apeluri telefonice.</p>
          <a href="sign.php" class="btn btn-primary">Crea account</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
