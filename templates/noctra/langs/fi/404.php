<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sivua ei löydy');
$page_description = 'Pyytämääsi sivua ei ole saatavilla. Palaa ' . SITE_NAME . '-palveluun jatkaaksesi.';
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
      <p class="eyebrow" style="justify-content: center;">Sivua ei löydy</p>
      <h1>Tätä sivua ei ole olemassa</h1>
      <p class="lead">
        Linkki voi olla vanhentunut tai kirjoitettu väärin. Palaa etusivulle jatkaaksesi.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Takaisin etusivulle</a>
        <a href="contacts.php" class="btn btn-outline">Ota yhteyttä tukeen</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
