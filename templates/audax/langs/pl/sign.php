<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Otwórz konto ' . SITE_NAME;
$page_description = 'Otwórz konto ' . SITE_NAME . ' ' . geo_in() . ' i zacznij od ' . money_min() . '. Rejestracja trwa poniżej minuty.';
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
              <h1>Otwórz konto <?= e(SITE_NAME) ?></h1>
              <p>
                Wypełnij formularz, a specjalista skontaktuje się, by otworzyć konto. 
                Minimum na start to <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'Zarejestruj się';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                Wypełniając dane i klikając „Zarejestruj się”
                potwierdzasz, że akceptujesz
                <a href="<?= page_url('conditions.php') ?>">regulamin</a> i
                <a href="<?= page_url('privacy.php') ?>">politykę prywatności</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
