<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Atveriet kontu ' . SITE_NAME;
$page_description = 'Atveriet kontu ' . SITE_NAME . ' ' . geo_in() . ' un sāciet ar ' . money_min() . '. Reģistrācija aizņem mazāk nekā minūti.';
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
              <h1>Atveriet <?= e(SITE_NAME) ?> kontu</h1>
              <p>
                Aizpildiet veidlapu, un speciālists sazināsies, lai atvērtu kontu. 
                Minimums sākumam ir <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Reģistrēties';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Ievadot datus un noklikšķinot uz „Reģistrēties“
                apliecināt, ka piekrītat
                <a href="<?= page_url('conditions.php') ?>">noteikumiem un nosacījumiem</a> un
                <a href="<?= page_url('privacy.php') ?>">privātuma politikai</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
