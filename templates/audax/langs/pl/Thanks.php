<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Dziękujemy | ' . SITE_NAME;
$page_description = 'Twoje zgłoszenie otrzymał zespół ' . SITE_NAME . '.';
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
            <h1>Dziękujemy — skontaktujemy się</h1>
            <p>
              Twoje zgłoszenie otrzymał zespół <?= e(SITE_NAME) ?>. Specjalista
              wkrótce się skontaktuje, by pomóc Ci zacząć.
            </p>
            <p>
              Tymczasem możesz przeczytać więcej o tym,
              <a href="<?= page_url('product.php') ?>">jak działa platforma</a> albo przejrzeć
              <a href="<?= page_url('faq.php') ?>">często zadawane pytania</a>.
            </p>
            <p><a href="<?= page_url() ?>">Na stronę główną</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
