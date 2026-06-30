<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politica de confidențialitate');
$page_description = 'Află cum ' . SITE_NAME . ' colectează, utilizează și protejează datele tale personale.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politica de confidențialitate</h1>
      <p class="lead">Ultima actualizare: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Această Politică descrie modul în care <?= e(SITE_NAME) ?> colectează și prelucrează informațiile personale atunci când utilizezi site-ul și serviciile noastre.</p>

      <h2>Informații pe care le colectăm</h2>
      <p>Putem colecta: nume, adresă de email, număr de telefon, țara de reședință, adresă IP și informații furnizate prin formulare sau solicitări de asistență.</p>

      <h2>Cum utilizăm informațiile</h2>
      <ul>
        <li>Pentru a crea și gestiona contul tău</li>
        <li>Pentru a oferi acces la platformă și asistență clienți</li>
        <li>Pentru a respecta obligațiile legale și de reglementare</li>
        <li>Pentru a îmbunătăți serviciile și a preveni fraudele</li>
      </ul>

      <h2>Securitatea datelor</h2>
      <p>Aplicăm măsuri tehnice și organizatorice, inclusiv criptare SSL și controale de acces, pentru a proteja datele tale.</p>

      <h2>Drepturile tale</h2>
      <p>În funcție de jurisdicția ta, poți avea dreptul de a accesa, corecta sau șterge datele tale personale. Contactează <?= e(SUPPORT_EMAIL) ?> pentru a exercita aceste drepturi.</p>

      <h2>Contact</h2>
      <p>Întrebări despre această politică? Scrie la <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
