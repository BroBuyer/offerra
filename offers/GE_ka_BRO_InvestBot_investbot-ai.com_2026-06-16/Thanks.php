<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('მადლობა');
$page_description = 'თქვენი ' . SITE_NAME . '-ის ანგარიშის მოთხოვნა მიღებულია.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>ყველაფერი მზადაა!</h1>
      <p class="lead thanks-lead">
        მადლობა, რომ დარეგისტრირდით <?= e(SITE_NAME) ?>-ში.
        ჩვენი გუნდი მალე დაგიკავშირდებათ ანგარიშის დასაყენებლად. ტელეფონი ხელთ გქონდეთ.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
