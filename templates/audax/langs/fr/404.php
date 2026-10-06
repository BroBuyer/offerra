<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Page introuvable | ' . SITE_NAME;
$page_description = 'Page introuvable — ' . SITE_NAME;
$page_canonical = page_url('404.php');
$active_page = '404';
$page_css = ['legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
$page_noindex = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Page introuvable</h1>
            <p>Ce lien n’existe pas. <a href="<?= page_url() ?>">Retour à l’accueil</a>.</p>
            <p>
              Vous pouvez aussi <a href="<?= page_url('sign.php') ?>">ouvrir un compte</a> ou
              <a href="<?= page_url('contacts.php') ?>">nous contacter</a>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
