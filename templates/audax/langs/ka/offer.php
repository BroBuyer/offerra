<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'შეთავაზება | ' . SITE_NAME . ' - დაიწყე შენი გზა';
$page_description = 'დაიწყე ტრეიდინგი პლატფორმაზე ' . SITE_NAME . '. რეგისტრაცია ახლავე უფასოდ.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              შექმენი ანგარიში დღესვე <?= e(SITE_NAME) ?>-ზე. შენი პირადი პორტფელის დაფა
              მზადაა!
            </h1>
            <p>
              5 წუთზე ნაკლებში შეგიძლია შექმნა უფასო ანგარიში, შეიტანო დეპოზიტი და დაიწყო
              ტრეიდინგი. დაიწყე დღეს: ეს შენი შანსია, ააშენო მყარი ფინანსური მომავალი.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">რეგისტრაცია</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>როგორ მუშაობს</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="ანგარიშის შექმნის ხატულა" />
                <h3>ანგარიშის შექმნა</h3>
                <p>
                  ანგარიშის შექმნას რამდენიმე წამი სჭირდება. მყისიერად მიიღებ წვდომას
                  ტრეიდინგ ინსტრუმენტებზე და შესაძლებლობებზე, რომლებიც გელოდება.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="დეპოზიტის ხატულა" />
                <h3>თანხის შეტანა</h3>
                <p>შეიტანე თანხა და დაიწყე ტრეიდინგი.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="ყიდვა-გაყიდვის ხატულა" />
                <h3>დაიწყე ყიდვა და გაყიდვა</h3>
                <p>
                  გააძლიერე პორტფელი თავდაჯერებულად. გადადგი ნაბიჯი ბაზარზე
                  ყოყმანის გარეშე!
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>არ გამოტოვო! შეუერთდი ათასობით წარმატებულ ტრეიდერს!</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>აკონტროლე პორტფელი ბალანსის მუდმივი განახლებებით და რეალური დროის მოგებით.</h3>
            </div>
            <div class="half right">
              <p>
                არ გამოტოვო არცერთი დეტალი <?= e(SITE_NAME) ?>-ის ღრმა ანალიზით
                ტრეიდინგ მოდელებსა და მუდმივად განახლებად მონაცემებზე. შეგიძლია აკონტროლო ყველა მთავარი მაჩვენებელი
                — ბალანსი, მოგება და ფასის რყევები. ამ ძლიერი ინსტრუმენტებით
                მაქსიმუმამდე ზრდი შემოსავალს და იღებ გააზრებულ საინვესტიციო გადაწყვეტილებებს. მომავალი
                ახლაა: დაიწყე დღეს!
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">დაიწყე ახლავე</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
