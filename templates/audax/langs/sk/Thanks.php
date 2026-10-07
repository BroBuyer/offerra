<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ďakujeme | ' . SITE_NAME;
$page_description = 'Vašu žiadosť prijal tím ' . SITE_NAME . '.';
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
            <h1>Ďakujeme — ozveme sa</h1>
            <p>
              Vašu žiadosť prijal tím <?= e(SITE_NAME) ?>. Špecialista
              sa čoskoro ozve, aby vám pomohol začať.
            </p>
            <p>
              Medzitým si môžete prečítať viac o tom,
              <a href="<?= page_url('product.php') ?>">ako platforma funguje</a> alebo si prezrieť
              <a href="<?= page_url('faq.php') ?>">často kladené otázky</a>.
            </p>
            <p><a href="<?= page_url() ?>">Na úvodnú stránku</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
