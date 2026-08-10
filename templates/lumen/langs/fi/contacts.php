<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Yhteystiedot');
$page_description = 'Ota yhteyttä ' . SITE_NAME . '-tukeen — autamme rahoituksessa, vahvistuksessa ja aloituksessa.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Yhteystiedot</p>
      <h1>Olemme täällä auttamassa</h1>
      <p class="lead">Kysymyksiä tilistä, talletuksista tai tekoälytyökaluista — ota yhteyttä milloin tahansa.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Tuki</h2>
        <p class="prose">Lähetä sähköpostia osoitteeseen <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Tyypillinen vastausaika on muutama tunti.</p>
        <a href="sign.php" class="btn btn-primary">Avaa tili</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
