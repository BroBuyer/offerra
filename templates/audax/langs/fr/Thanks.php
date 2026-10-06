<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Merci | ' . SITE_NAME;
$page_description = 'Votre demande a bien été reçue par l’équipe ' . SITE_NAME . '.';
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
            <h1>Merci — nous vous recontacterons</h1>
            <p>
              Votre demande a bien été reçue par l’équipe <?= e(SITE_NAME) ?>. Un spécialiste
              vous recontactera rapidement pour vous aider à démarrer.
            </p>
            <p>
              En attendant, vous pouvez en savoir plus sur
              <a href="<?= page_url('product.php') ?>">le fonctionnement de la plateforme</a> ou consulter la
              <a href="<?= page_url('faq.php') ?>">foire aux questions</a>.
            </p>
            <p><a href="<?= page_url() ?>">Retour à l’accueil</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
