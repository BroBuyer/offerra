<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politica de confidențialitate');
$page_description = 'Aflați cum ' . SITE_NAME . ' colectează, folosește și protejează datele dvs. personale.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politica de confidențialitate</h1>
      <p class="lead">Ultima actualizare: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Această Politică de confidențialitate descrie modul în care <?= e(SITE_NAME) ?> („noi”) colectează și procesează informații personale când utilizați site-ul și serviciile noastre.</p>

      <h2>Informații pe care le colectăm</h2>
      <p>Putem colecta: nume, adresă de e-mail, număr de telefon, țara de reședință, adresă IP și informații pe care le furnizați prin formulare sau cereri de suport.</p>

      <h2>Cum folosim informațiile dvs.</h2>
      <ul>
        <li>Pentru a crea și gestiona contul dvs.</li>
        <li>Pentru a oferi acces la platforma de tranzacționare și suport clienți</li>
        <li>Pentru a respecta obligațiile legale și de reglementare</li>
        <li>Pentru a îmbunătăți serviciile noastre și a preveni frauda</li>
      </ul>

      <h2>Securitatea datelor</h2>
      <p>Implementăm măsuri tehnice și organizatorice, inclusiv criptare SSL și controale de acces, pentru a proteja datele dvs.</p>

      <h2>Drepturile dvs.</h2>
      <p>În funcție de jurisdicție, puteți avea drepturi de acces, corectare sau ștergere a datelor personale. Contactați <?= e(SUPPORT_EMAIL) ?> pentru a exercita aceste drepturi.</p>

      <h2>Contact</h2>
      <p>Întrebări despre această politică? Trimiteți e-mail la <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
