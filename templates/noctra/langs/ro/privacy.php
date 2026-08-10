<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politică de confidențialitate');
$page_description = 'Află cum ' . SITE_NAME . ' colectează, folosește și protejează datele tale personale.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politică de confidențialitate</h1>
      <p class="lead">Ultima actualizare: <?= date('j.n.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Această Politică de confidențialitate descrie cum <?= e(SITE_NAME) ?> („noi”) colectează și prelucrează informații personale când folosești site-ul și serviciile noastre.</p>

      <h2>Informațiile pe care le colectăm</h2>
      <p>Putem colecta: nume, adresă de e-mail, număr de telefon, țara de reședință, adresa IP și informațiile pe care le furnizezi prin formulare sau solicitări de suport.</p>

      <h2>Cum folosim informațiile</h2>
      <ul>
        <li>Pentru a crea și gestiona contul</li>
        <li>Pentru a oferi acces la platforma de trading și suport clienți</li>
        <li>Pentru a respecta obligațiile legale și de reglementare</li>
        <li>Pentru a îmbunătăți serviciile și a preveni frauda</li>
      </ul>

      <h2>Securitatea datelor</h2>
      <p>Implementăm măsuri tehnice și organizaționale, inclusiv criptare SSL și controale de acces, pentru a-ți proteja datele.</p>

      <h2>Drepturile tale</h2>
      <p>În funcție de jurisdicție, poți avea dreptul de a accesa, corecta sau șterge datele personale. Contactează <?= e(SUPPORT_EMAIL) ?> pentru a exercita aceste drepturi.</p>

      <h2>Contact</h2>
      <p>Întrebări despre această politică? Scrie la <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
