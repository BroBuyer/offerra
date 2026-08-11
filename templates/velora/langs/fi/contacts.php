<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Yhteystiedot');
$page_description = 'Ota yhteyttä ' . SITE_NAME . ' -tukeen — autamme rahoituksessa, tunnistautumisessa ja aloittamisessa.';
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
      <p class="lead">Kysymyksiä tilistäsi, talletuksista tai tekoälytyökaluista — ota yhteyttä milloin tahansa.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Tuki</h2>
        <p class="prose">Lähetä sähköpostia osoitteeseen <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Tyypillinen vasteaika on alle muutama tunti.</p>
        <div style="margin-top: 18px;">
          <?php
          $form_id = 'contact-form';
          $form_heading = 'Tai jätä tietosi';
          $form_submit = 'Lähetä pyyntö';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
