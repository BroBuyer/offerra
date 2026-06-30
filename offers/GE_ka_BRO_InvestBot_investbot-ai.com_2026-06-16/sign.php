<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('რეგისტრაცია');
$page_description = 'შექმენით ანგარიში ' . SITE_NAME . '-ზე და დაიწყეთ ტრეიდინგი კრიპტო, ფორექს და გლობალურ ბაზრებზე AI-ით დახმარებული ინსტრუმენტებით.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'მთავარი', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'რეგისტრაცია', 'item' => page_url('sign.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">დაიწყეთ ახლა</p>
      <h1>გახსენით ტრეიდინგის ანგარიში</h1>
      <p class="lead">შეუერთდით ათასობით ტრეიდერს. მინიმალური დეპოზიტი <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px; margin-inline: auto;">
      <div class="form-card form-card-accent">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'შეიყვანეთ თქვენი მონაცემები ქვემოთ';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
