<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'მადლობა | ' . SITE_NAME;
$page_description = 'შენი მოთხოვნა მიიღო ' . SITE_NAME . '-ის გუნდმა.';
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
            <h1>მადლობა — დაგიკავშირდებით</h1>
            <p>
              შენი მოთხოვნა მიიღო <?= e(SITE_NAME) ?>-ის გუნდმა. სპეციალისტი
              მალე დაგიკავშირდება, რომ დაგეხმაროს დაწყებაში.
            </p>
            <p>
              ამასობაში შეგიძლია წაიკითხო მეტი
              <a href="<?= page_url('product.php') ?>">როგორ მუშაობს პლატფორმა</a> ან ნახო
              <a href="<?= page_url('faq.php') ?>">ხშირად დასმული კითხვები</a>.
            </p>
            <p><a href="<?= page_url() ?>">მთავარ გვერდზე დაბრუნება</a></p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
