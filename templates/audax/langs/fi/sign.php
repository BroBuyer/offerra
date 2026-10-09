<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Avaa ' . SITE_NAME . ' -tilisi';
$page_description = 'Luo ' . SITE_NAME . ' -tilisi ' . geo_in() . ' ja aloita ' . money_min() . ' summalla. Rekisteröityminen kestää alle minuutin.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$page_css = [];
$page_js = [];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h1>Avaa <?= e(SITE_NAME) ?> -tilisi</h1>
              <p>
                Täytä lomake, niin asiantuntija ottaa sinuun yhteyttä tilin luomiseksi. 
                Aloittamiseen vaadittava vähimmäissumma on <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Rekisteröidy';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Kun syötät tietosi ja napsautat ”Rekisteröidy”
                vahvistat, että hyväksyt
                <a href="<?= page_url('conditions.php') ?>">käyttöehdot</a> ja
                <a href="<?= page_url('privacy.php') ?>">tietosuojakäytännön</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
