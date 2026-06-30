<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('შეთავაზება');
$page_description = 'აირჩიეთ ' . SITE_NAME . '-ის გეგმა — დაიწყეთ მინიმალური ' . MIN_DEPOSIT . ' ' . CURRENCY . ' დეპოზიტით და გახსენით სრული წვდომა პლატფორმაზე.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'მთავარი', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'შეთავაზება', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">შეთავაზება</p>
      <h1>მიიღეთ პორტფელის ტრეკერი — უფასოდ რეგისტრაციასთან ერთად</h1>
      <p class="lead">დაიწყეთ <?= MIN_DEPOSIT ?> <?= CURRENCY ?>-ით. გაზარდეთ, როცა მზად იქნებით.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">საბაზისო წვდომა</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> მინიმალური დეპოზიტი · სრული პლატფორმა · AI სიგნალები · მხარდაჭერა 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">რას მოიცავს</div>
          <div class="specs-value">ცოცხალი გრაფიკები, მრავალბაზრიანი ტრეიდინგი, პორტფელის ტრეკერი, სახელმძღვანელო onboarding</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">დეპოზიტები</div>
          <div class="specs-value">ბარათი, საბანკო გადარიცხვა, PayPal, ელექტრონული საფულე</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">გატანა</div>
          <div class="specs-value">ნებისმიერ დროს · 1–3 სამუშაო დღე · საკომისიოები წინასწარ ჩანს</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">მოწყობილობები</div>
          <div class="specs-value">ვებ, ტაბლეტი, მობილური — ჩამოტვირთვის გარეშე</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'მოითხოვეთ შეთავაზება ახლა';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
