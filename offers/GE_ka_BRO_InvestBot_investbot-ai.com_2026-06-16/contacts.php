<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('კონტაქტი');
$page_description = 'დაუკავშირდით ' . SITE_NAME . '-ის მხარდაჭერას ან ჩვენს გუნდს. ხელმისაწვდომი ვართ 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">კონტაქტი</p>
      <h1>ჩვენ აქ ვართ დასახმარებლად</h1>
      <p class="lead">პროფესიონალური მხარდაჭერა 24/7 ანგარიშის, ტრეიდინგისა და ტექნიკური საკითხებისთვის.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>ელფოსტით მხარდაჭერა</h3>
          <p style="margin-bottom: 1rem;">ზოგადი მოთხოვნებისა და ანგარიშის მხარდაჭერისთვის:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>პასუხის დრო</h3>
          <p>უმეტეს მოთხოვნას პასუხი რამდენიმე საათში ეცემა. ტრეიდინგთან დაკავშირებულ სასწრაფო საკითხებს პრიორიტეტი აქვს.</p>
        </article>
        <article class="feature-card">
          <h3>მზად ხართ დასაწყებად?</h3>
          <p style="margin-bottom: 1rem;">გახსენით ანგარიში რამდენიმე წუთში — ზარის გარეშე.</p>
          <a href="sign.php" class="btn btn-primary">შექმენით ანგარიში</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
