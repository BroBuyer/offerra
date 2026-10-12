<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'პროდუქტი | ' . SITE_NAME . ' - AI ტრეიდინგ პლატფორმა';
$page_description = SITE_NAME . ' : მოწინავე AI პლატფორმა კრიპტოვალუტებისთვის ' . geo_in() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
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
              <?= e(SITE_NAME) ?>-ზე შეგიძლია ციფრული ანალიტიკა გამოიყენო კაპიტალის ზრდისთვის
              <?= e(geo_in()) ?>
            </h1>
            <p>
              მაღალი დონის ხელოვნური ინტელექტისა და მოწინავე ალგორითმების წყალობით <?= e(SITE_NAME) ?>
              მუდმივად აანალიზებს გლობალურ ბაზრებს. ასე პლატფორმა სწრაფად პოულობს
              ყველაზე მომგებიან შესაძლებლობებს. ახლაა დრო, გადადგა ნაბიჯი წარმატებისკენ
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">დაიწყე ახლავე</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>შენი ციფრული ტრეიდინგ პლატფორმა ყველაფრისთვის ერთ ადგილას</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="სარგებელი 1"
                  />
                </div>
                <h3>კრიპტოვალუტის მართვა</h3>
                <p>მარტივად მართე ყველა ციფრული აქტივი ერთ ადგილას.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="სარგებელი 2"
                  />
                </div>
                <h3>ნახე ინფორმაცია ყველა აქტივზე ერთი პლატფორმიდან და ინტერფეისიდან</h3>
                <p>მოაწესრიგე ფინანსები მკაფიო მიმოხილვით.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="სარგებელი 3"
                  />
                </div>
                <h3>კაპიტალის ბაზრები</h3>
                <p>იყავი ბაზარზე წინ — რეალური დროის მონაცემებითა და ინსაითებით.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="სარგებელი 4"
                  />
                </div>
                <h3>მობილური წვდომა</h3>
                <p>
                  სრულად ოპტიმიზებული მობილური საიტი გაძლევს საშუალებას, პორტფელი ნებისმიერ დროს და ადგილას აკონტროლო.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="სარგებელი 5"
                  />
                </div>
                <h3>ცოცხალი სტატისტიკა</h3>
                <p>
                  აკონტროლე შემოსავალი და ანალიტიკა განსაკუთრებული სიზუსტით, ყოველ წამს
                  დღის განმავლობაში.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              ჩამოტვირთე აპი დღესვე და მართე ფინანსები რეალურ დროში სმარტფონიდან.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">რეგისტრაცია</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            გაეცანი <?= e(SITE_NAME) ?> პლატფორმის უახლეს AI ანალიტიკას და ინტუიციურ
            ტრეიდინგ ინტერფეისს აქტივებისთვის <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="ფუნქცია 1" />
              </div>
              <div class="text">
                <h4>პორტფელი</h4>
                <p>
                  გააძლიერე შენი ფინანსური პროფილი ჩვენი გამოცდილი და ინოვაციური ტრეიდინგ
                  სტრატეგიებით.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="ფუნქცია 2" />
              </div>
              <div class="text">
                <h4>კრიპტოანალიზი</h4>
                <p>
                  გამოიყენე <?= e(SITE_NAME) ?>-ის უახლესი თაობის ხელოვნური ინტელექტი და მისი
                  მოწინავე მანქანური სწავლების ალგორითმები, რომ სწრაფად იპოვო მომგებიანი შესაძლებლობები.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="ფუნქცია 3" />
              </div>
              <div class="text">
                <h4>მარტივი ყიდვა</h4>
                <p>
                  გთავაზობთ მოწინავე ფუნქციებს და მხარდაჭერას კრიპტოვალუტებით ვაჭრობისთვის
                  მარტივად და ინტუიციურად. ფარული საკომისიოები არ არის, შესრულება მყისიერია. ეს არის
                  შენი შანსი, მაქსიმუმამდე გაზარდო ტრეიდინგის მოგება AI-ის ძალით!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="ფუნქცია 4" />
              </div>
              <div class="text">
                <h4>ციფრული აქტივები</h4>
                <p>
                  ისარგებლე შესაძლებლობით, მაქსიმუმამდე გაზარდო მოგება აქტივებით ვაჭრობიდან — იქნება ეს
                  კრიპტოვალუტა თუ სხვა ინსტრუმენტები. ააშენე დივერსიფიცირებული პორტფელი ჩვენი პროგრამით
                  და მანქანური სწავლების ალგორითმებით. ახლაა დრო, გადადგა ნაბიჯი და დაიწყო
                  შენი ტრეიდინგი!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
