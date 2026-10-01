<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kontakt');
$page_description = 'Obrnite se na podporo ' . SITE_NAME . ' — pomagamo pri financiranju, preverjanju in začetku.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kontakt</p>
      <h1>Tukaj smo, da pomagamo</h1>
      <p class="lead">Vprašanja o vašem računu, depozitih ali orodjih AI – stopite v stik kadar koli.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Podpora</h2>
        <p class="prose">Pišite nam na {email}. Običajni odzivni čas je manj kot nekaj ur.</p>
        <a href="sign.php" class="btn btn-primary">Odpri račun</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
