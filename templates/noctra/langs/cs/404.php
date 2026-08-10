<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Stránka nenalezena');
$page_description = 'Požadovaná stránka není dostupná. Vraťte se na ' . SITE_NAME . ' a pokračujte v obchodování.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="not-found">
    <div class="container">
      <div class="not-found-code" aria-hidden="true">404</div>
      <p class="eyebrow" style="justify-content: center;">Stránka nenalezena</p>
      <h1>Tato stránka neexistuje</h1>
      <p class="lead">
        Odkaz může být zastaralý nebo chybně zadaný. Vraťte se na úvodní stránku a pokračujte.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Zpět domů</a>
        <a href="contacts.php" class="btn btn-outline">Kontaktovat podporu</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
