<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'პასუხები ტრეიდინგზე, ფუნქციებზე, უსაფრთხოებაზე, საკომისიოებზე და ' . SITE_NAME . '-თან დაწყებაზე.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>ხშირად დასმული კითხვები</h1>
      <p class="lead">ყველაფერი, რაც უნდა იცოდეთ დაწყებამდე.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            როგორ დავიწყო?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              შექმენით ანგარიში, დაადასტურეთ ელფოსტა და შეიტანეთ მინიმუმ <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. მყისიერად მიიღებთ წვდომას გრაფიკებზე, ინსტრუმენტებსა და საწყის სახელმძღვანელოებზე.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> უსაფრთხო და სანდოა?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ვიყენებთ SSL დაშიფვრას, 2FA-ს და დადასტურებულ გადახდის პროცესორებს. უსაფრთხოება პლატფორმის ყველა დონეზეა ჩაშენებული.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            რა საკომისიოებია?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              საკომისიოები გამჭვირვალეა და ნაჩვენებია ნებისმიერი ოპერაციის დადასტურებამდე. დეპოზიტებსა და გატანაზე ფარული ხარჯები არ არის.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            შემიძლია ავტომატური ტრეიდინგის გამოყენება?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              დიახ. შეგიძლიათ დააყენოთ ბოტები AI დახმარებით თქვენი რისკის პროფილის მიხედვით, ან ივაჭაროთ ხელით — ნებისმიერ დროს შეგიძლიათ შეცვალოთ.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            როგორ მუშაობს გატანა?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              მოითხოვეთ გატანა პირადი ანგარიშიდან. დამუშავებას ჩვეულებრივ 1–3 სამუშაო დღე სჭირდება გადახდის მეთოდის მიხედვით.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">კიდევ გაქვთ კითხვები?</p>
        <a href="contacts.php" class="btn btn-outline">დაუკავშირდით მხარდაჭერას</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
