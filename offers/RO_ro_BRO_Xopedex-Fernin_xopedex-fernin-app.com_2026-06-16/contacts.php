<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contactează asistența ' . SITE_NAME . ' sau echipa noastră. Suntem disponibili 24/7.';
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
      <p class="lead">Asistență profesională 24/7 pentru întrebări despre cont, tranzacționare și aspecte tehnice.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Asistență prin email</h3>
          <p style="margin-bottom: 1rem;">Pentru solicitări generale și suport pentru cont:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Timp de răspuns</h3>
          <p>Majoritatea solicitărilor primesc răspuns în câteva ore. Urgențele legate de tranzacționare au prioritate.</p>
        </article>
        <article class="feature-card">
          <h3>Pregătit să începi?</h3>
          <p style="margin-bottom: 1rem;">Deschide un cont în câteva minute — fără apeluri necesare.</p>
          <a href="sign.php" class="btn btn-primary">Creează cont</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
