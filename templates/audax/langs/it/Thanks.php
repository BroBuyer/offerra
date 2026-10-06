<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Grazie | ' . SITE_NAME;
$page_description = 'La tua richiesta è stata ricevuta dal team ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'Thanks';
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
            <h1>Grazie — ti ricontatteremo</h1>
            <p>
              La tua richiesta è stata ricevuta dal team <?= e(SITE_NAME) ?>. Uno specialista
              ti ricontatterà a breve per aiutarti a iniziare.
            </p>
            <p>
              Nel frattempo puoi saperne di più sul
              <a href="<?= page_url('product.php') ?>">funzionamento della piattaforma</a> o consultare le
              <a href="<?= page_url('faq.php') ?>">domande frequenti</a>.
            </p>
            <p><a href="<?= page_url() ?>">Torna alla home</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
