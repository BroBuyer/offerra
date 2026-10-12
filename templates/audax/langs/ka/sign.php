<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'გახსენი ' . SITE_NAME . '-ის ანგარიში';
$page_description = 'შექმენი ' . SITE_NAME . '-ის ანგარიში ' . geo_in() . ' და დაიწყე ' . money_min() . '-ით. რეგისტრაციას ერთ წუთზე ნაკლები სჭირდება.';
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
              <h1>გახსენი <?= e(SITE_NAME) ?>-ის ანგარიში</h1>
              <p>
                შეავსე ფორმა და სპეციალისტი დაგიკავშირდება ანგარიშის გასახსნელად. 
                დასაწყებად საჭირო მინიმუმი არის <?= e(money_min()) ?>.
              </p>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
                $form_id = 'sign-form';
                $form_wrap_class = 'newRegForm';
                $form_submit = 'რეგისტრაცია';
                include __DIR__ . '/includes/form.php';
              ?>
            </div>
            <div class="form_text_bottom">
              <p>
                პირადი მონაცემების შეყვანით და ღილაკზე „რეგისტრაცია“ დაჭერით
                ადასტურებ, რომ ეთანხმები
                <a href="<?= page_url('conditions.php') ?>">გამოყენების პირობებს</a> და
                <a href="<?= page_url('privacy.php') ?>">კონფიდენციალურობის პოლიტიკას</a>.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
