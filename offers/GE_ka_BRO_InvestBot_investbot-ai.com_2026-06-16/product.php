<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('პროდუქტი');
$page_description = 'გაეცანით ' . SITE_NAME . '-ის ტრეიდინგის ინსტრუმენტებს — რეალურ დროში ანალიტიკა, AI სიგნალები, მრავალბაზრიანი წვდომა და ავტომატიზებული სტრატეგიები.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'მთავარი', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'პროდუქტი', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">პროდუქტი</p>
      <h1>ციფრული ანალიტიკა ტრეიდერებისთვის</h1>
      <p class="lead">ერთი პლატფორმა. ყველა ბაზარი. ინსტრუმენტები, რომლებიც თქვენს ტემპს ერგება.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>რეალურ დროში გრაფიკები</h3>
          <p>ცოცხალი ფასების ფიდი, გაფართოებული ინდიკატორები და ბაზრის სიღრმე ყველა მხარდაჭერილ აქტივზე.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>AI სიგნალების ძრავა</h3>
          <p>მანქანური სწავლების მოდელები აღნიშნავს მაღალი ალბათობის სეტაპებს შესვლა/გასვლის ნათელი კონტექსტით.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>ავტომატიზაციის სუიტი</h3>
          <p>დააყენეთ ბოტები პერსონალური რისკის პარამეტრებით — დააყენეთ და აკონტროლეთ, ან პარალელურად ივაჭარეთ ხელით.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>რისკის კონტროლი</h3>
          <p>სტოპ-ლოსის, თეიკ-პროფიტისა და პოზიციის ზომის ინსტრუმენტები ყოველ სამუშაო ნაკადში.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>პორტფელის ტრეკერი</h3>
          <p>პოზიციების, P&amp;L-ისა და ალოკაციის ერთიანი ხედი კრიპტოსა და ტრადიციულ ბაზრებს შორის.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>სასწავლო ცენტრი</h3>
          <p>სახელმძღვანელო გაკვეთილები და ბაზრის ახსნები დამწყებთა და საშუალო დონის ტრეიდერებისთვის.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary">სცადეთ <?= e(SITE_NAME) ?> უფასოდ</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
