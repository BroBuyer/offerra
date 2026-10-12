<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — ჭკვიანი ინვესტიცია ხელოვნური ინტელექტით ' . geo_in();
$page_description = 'ავტომატური ტრეიდინგი ' . geo_in() . '. დაიწყე ' . money_min() . ' ჩვენი AI ტექნოლოგიით. უსაფრთხო, გამჭვირვალე და მარტივი.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1><?= e(SITE_NAME) ?> პლატფორმა</h1>
              <p>
                რით არის <?= e(SITE_NAME) ?> განსაკუთრებული? ეს შენი შანსია, უფრო ჭკვიანურად დააბანდო
                <?= e(geo_in()) ?>. ჩვენი სანდო, ხელოვნურ ინტელექტზე დაფუძნებული ტრეიდინგ პლატფორმა გეხმარება გააზრებული გადაწყვეტილებების მიღებაში
                და რისკის თავდაჯერებულად მართვაში. აღმოაჩინე <?= e(SITE_NAME) ?> AI-ის შესაძლებლობები.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>4,7 ვარსკვლავი 2 804-ზე მეტი კმაყოფილი მომხმარებლისგან</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="შეფასება 4,7 / 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>რეგისტრაცია — <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'რეგისტრაცია';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    პირადი მონაცემების შეყვანით და ღილაკზე „რეგისტრაცია“ დაჭერით
                    ადასტურებ, რომ ეთანხმები
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">კონფიდენციალურობის პოლიტიკას</a> და
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">გამოყენების პირობებს</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="გადახდის მეთოდები" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>4,7 ვარსკვლავი 2 804-ზე მეტი კმაყოფილი მომხმარებლისგან</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="შეფასება 4,7 / 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="მოგების კალკულატორი">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">გამოიანგარიშე შესაძლო მოგება</h2>
          <p class="calc-widget__subtitle">
            აირჩიე თანხა და ვადა, რომ ნახო შენი პოტენციური მოგება
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">დეპოზიტი:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">ინვესტიციის პერიოდი:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>დღე</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>1 დღიდან</span>
                  <span>3 თვემდე</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">შეგიძლია გამოიმუშაო</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">მომგებიანობა</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">შემოსავალი</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            მოითხოვე პირადი გაანგარიშება
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="დახურვა">
              &times;
            </button>
            <h3 class="calc-modal__title">
              დატოვე საკონტაქტო მონაცემები და ჩვენი სპეციალისტი დაგიკავშირდება
              რაც შეიძლება მალე.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'რეგისტრაცია';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                შენი წვდომა <?= e(geo_from()) ?> მსოფლიოს წამყვან კრიპტო ტრეიდინგ პლატფორმებზე.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="ბარათის ხატულა 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> იყენებს მოწინავე ხელოვნურ ინტელექტს და მანქანურ სწავლებას,
                    რომ ფინანსურ ბაზრებზე ახალი შესაძლებლობები იპოვოს.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="ბარათის ხატულა 2" />
                </div>
                <div class="text">
                  <p>
                    კრიპტოინვესტორები <?= e(geo_in()) ?> იღებენ წვდომას უდიდეს ბირჟებზე
                    სექტორში და შეუძლიათ ვაჭრობა წამყვანი ვალუტებით, როგორიცაა Bitcoin და Ethereum, ასევე
                    ალტკოინებისა და სტეიბლკოინების ფართო სპექტრით.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>ჩვენი სანდო პარტნიორები</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com-ის ლოგო" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger-ის ლოგო" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt-ის ლოგო" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen-ის ლოგო" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>რატომ აირჩიო <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="უპირატესობის ხატულა 1" />
              </div>
              <div class="text">
                <h3>უსაფრთხოება <?= e(geo_in()) ?></h3>
                <p>
                  სანდო პლატფორმად უსაფრთხოებას პირველ ადგილზე ვაყენებთ. ვიყენებთ SSL-ს,
                  საბანკო დონის დაშიფვრას და 2FA-ს, რომ <?= e(SITE_NAME) ?> იყოს საიმედო და შენი მონაცემები
                  დაცული იყოს.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="უპირატესობის ხატულა 2" />
              </div>
              <div class="text">
                <h3>ძლიერი AI ალგორითმები</h3>
                <p>
                  ჩვენი ადაპტირებადი ბოტები იყენებენ მოწინავე AI სტრატეგიებს და ასრულებენ მათ დამოუკიდებლად. შენ
                  განსაზღვრავ მიდგომას და ინარჩუნებ სრულ კონტროლს რისკზე, ბაზრებსა და მიზნებზე, რომ
                  საერთო სურათზე კონცენტრირდე.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="უპირატესობის ხატულა 3" />
              </div>
              <div class="text">
                <h3>გამჭვირვალე საკომისიოები. ფარული ხარჯები არ არის.</h3>
                <p>
                  ყველა საკომისიო გამჭვირვალეა და ინვესტორებს <?= e(geo_in()) ?> არასოდეს ვახდევინებთ
                  <?= e(SITE_NAME) ?>-ის გამოყენებას. ტრეიდინგისთვის შეტანილი თანხა მთლიანად შენია და შეგიძლია გამოიყენო
                  როგორც გინდა. ჩვენ არაფერს ვიტოვებთ. დაიწყე მხოლოდ <?= e(money_min()) ?>-ით და შეინარჩუნე სრული კონტროლი
                  შენს ინვესტიციებზე.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="უპირატესობის ხატულა 4" />
              </div>
              <div class="text">
                <h3>ინტუიციური ინტერფეისი</h3>
                <p>
                  ინტუიციური და მარტივი დაფა აერთიანებს ფუნქციონალს, სიზუსტეს და
                  მარტივ გამოყენებას — დამწყებებისთვისაც და გამოცდილი ტრეიდერებისთვისაც.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>როგორ მუშაობს <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="სიის ხატულა 1" />
              <p>
                ჩვენი საკუთარი პროგრამა ერთდროულად აკვირდება რამდენიმე ტრეიდინგ პლატფორმას და
                პოულობს ფასთა სხვაობებს, რომელთა გამოყენებაც შეიძლება.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="სიის ხატულა 2" />
              <p>
                <?= e(SITE_NAME) ?> ყიდულობს იაფად ერთ ბაზარზე და ყიდის უფრო ძვირად მეორეზე —
                არბიტრაჟის შესაძლებლობების გამოყენებით. ეს მიდგომა შეიძლება მოგებას იძლეოდეს
                მცირე ფასის ცვლილებებიდან დაგროვილი შემოსავლით.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="სიის ხატულა 3" />
              <p>ნახე, როგორ გააუმჯობესებს <?= e(SITE_NAME) ?> შენს ტრეიდინგ გამოცდილებას.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                რეგისტრაცია <?= e(SITE_NAME) ?>-ზე — ერთად ჩამოვაყალიბოთ ფინანსების მომავალი <?= e(geo_in()) ?>!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> გთავაზობს კრიპტოაქტივების ტრეიდინგის ფართო ინსტრუმენტებს <?= e(geo_in()) ?>. პლატფორმა
                აერთიანებს მსხვილ საერთაშორისო ბირჟებს და გაძლევს წვდომას მრავალ
                კრიპტოვალუტაზე — Bitcoin-ის მსგავსი ლიდერებიდან XRP-მდე. გარდა ამისა,
                შეგიძლია ისარგებლო ფასის რყევებით.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'რეგისტრაცია';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>გიორგი, 37, თბილისი</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="შეფასება 1"
                />
              </div>
              <p class="review-text">
                დავიწყე <?= e(money_min()) ?>-ით და ახლა ყოველთვიურად ვიღებ <?= e(currency_symbol() . '2,000') ?>!
              </p>
            </div>
            <div class="review">
              <h3>ნინო, 42, ბათუმი</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="შეფასება 2"
                />
              </div>
              <p class="review-text">მარტივი პლატფორმა: ყველაფერი გამჭვირვალე და პრაქტიკულია.</p>
            </div>
            <div class="review">
              <h3>ლუკა, 45, ქუთაისი</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="შეფასება 3"
                />
              </div>
              <p class="review-text">საუკეთესო გადაწყვეტა პასიური შემოსავლისთვის.</p>
            </div>
            <div class="review">
              <h3>ანა, 34, რუსთავი</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="შეფასება 4"
                />
              </div>
              <p class="review-text">სტაბილური მოგება, შვებულებაშიც კი.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>კრიპტოვალუტის შეთავაზება <?= e(SITE_NAME) ?>-ზე</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="სარგებელი 1"
                />
                <h3>კრიპტო ტრეიდინგის გასაღები</h3>
                <p>
                  ჩვენი თანამედროვე პროგრამა ტრეიდინგ სისტემის საფუძველია. ის
                  შექმნილია მცირე ფასთა სხვაობების გამოსაყენებლად მსხვილ კრიპტო
                  ბირჟებს შორის.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="სარგებელი 2"
                />
                <h3>გლობალური აქტივებით ვაჭრობა</h3>
                <p>
                  აქციების ფასები და სხვა აქტივები მუდმივად იცვლება; <?= e(SITE_NAME) ?> გაძლევს
                  ინსტრუმენტებს, რომ სწრაფად უპასუხო ბაზრის მოძრაობებს და გაზარდო შანსი სტაბილური
                  შემოსავლის.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="სარგებელი 3"
                />
                <h3>ფორექს ტრეიდინგი</h3>
                <p>
                  ვალუტის კურსები მუდმივად იცვლება და ტრეიდინგის შესაძლებლობებს ქმნის. <?= e(SITE_NAME) ?>
                  გეხმარება ისარგებლო სავალუტო ბაზრის თუნდაც ყველაზე მცირე მოძრაობებით.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="სარგებელი 4"
                />
                <h3><?= e(SITE_NAME) ?> და Bitcoin</h3>
                <p>
                  Bitcoin კვლავ ბაზრის ლიდერია და ყველაზე თვალსაჩინო, ფინანსურად სტაბილური
                  კრიპტოვალუტა. ბაზრის ვოლატილობის სისტემატური ამოცნობითა და გამოყენებით
                  <?= e(SITE_NAME) ?> გიმარტივებს სტაბილური შემოსავლის მიღებას.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>პლატფორმის ინფორმაცია</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>კონფიდენციალურობა</h3>
                  <p><?= e(SITE_NAME) ?> იცავს მოქმედ კონფიდენციალურობის წესებს <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>აქტივები</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash და სხვა წამყვანი კრიპტოვალუტები.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>პლატფორმის ტიპი</h3>
                  <p>
                    <?= e(SITE_NAME) ?> ინვესტორებს <?= e(geo_in()) ?> აძლევს შესაძლებლობას ისარგებლონ
                    წამყვანი კრიპტოვალუტების, მათ შორის XRP-ის მსგავსი ალტკოინების, ფასის რყევებით.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>ქვეყნები</h3>
                  <p>ჩვენი პლატფორმა ხელმისაწვდომია მსოფლიოში, მათ შორის <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>დეპოზიტის ვარიანტები</h3>
                  <p>საკრედიტო ბარათები, PayPal და საბანკო გადარიცხვა.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>ხარჯები</h3>
                  <p><?= e(SITE_NAME) ?>-ზე წვდომა უფასოა <?= e(geo_from()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2>სანდოა თუ არა <?= e(SITE_NAME) ?>?</h2>
              <p>
                <?= e(SITE_NAME) ?> თანამშრომლობს პირველკლასელ ბროკერებთან, რომლებიც განსაკუთრებით სანდო და
                გამოცდილები არიან. ვიყენებთ საბანკო დონის უსაფრთხოებას — TLS/SSL დაშიფვრას
                და ორფაქტორიან ავთენტიფიკაციას (2FA), რომ დავიცვათ შენი აქტივები და მონაცემები. ჩვენი
                ფასები სრულად გამჭვირვალეა, ფარული ხარჯების გარეშე. ვიცავთ
                მოქმედ რეგულაციებს.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="სანდოობის გრაფიკი" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                ჩვენი ხელოვნური ინტელექტისა და მანქანური სწავლების სისტემები ქმნიან რეალურ დროში ბაზრის
                ანალიზს და პრაქტიკულ ტრეიდინგ ინსაითებს შენი შედეგების გასაუმჯობესებლად.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>კოპირებით ტრეიდინგი</h3>
                  <p>
                    საუკეთესო ტრეიდერები შემთხვევით არ არიან საუკეთესოები. <?= e(SITE_NAME) ?>-ზე შეგიძლია მიჰყვე
                    და დააკოპირო მათი გარიგებები — გამოიყენო მათი გამოცდილება და სტრატეგია.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>წილის ნაწილები</h3>
                  <p>
                    პორტფელის გაფართოებით შეგიძლია მიიღო წვდომა ხარისხიან აქტივებზე თუნდაც
                    შეზღუდული კაპიტალით.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>სასწავლო მასალა</h3>
                  <p>
                    ტრეიდინგ უნარების გასაუმჯობესებლად გთავაზობთ სასწავლო მასალას: გაკვეთილებს,
                    ვებინარებს და სახელმძღვანელოებს.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>მობილური აპლიკაცია</h3>
                  <p>ივაჭრე ნებისმიერ დროს, ნებისმიერ ადგილას.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>მხარდაჭერა 24/7</h3>
                  <p>ჩვენი მხარდაჭერა ხელმისაწვდომია 24 საათი, კვირაში 7 დღე.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI-ზე დაფუძნებული ტრეიდინგი</h3>
                  <p>
                    მოწინავე ხელოვნური ინტელექტისა და მანქანური სწავლების ალგორითმების წყალობით
                    <?= e(SITE_NAME) ?> მუდმივად აანალიზებს უახლეს საბაზრო მონაცემებს. ასე ბაზრის
                    შესაძლებლობები უდიდესი შემოსავლის პოტენციალით სწრაფად ვლინდება.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>მორგებადი სტრატეგიები</h3>
                  <p>
                    როცა განსაზღვრავ შენს რისკპროფილს და საინვესტიციო მიზნებს, შეგიძლია გამოიყენო ისინი
                    ტრეიდინგ სტრატეგიის გასაუმჯობესებლად ჩვენს მრავალაქტივიან პლატფორმაზე.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>წვდომა მრავალფეროვან აქტივებზე</h3>
                  <p>
                    მიუხედავად იმისა, რომ სპეციალიზებული ვართ კრიპტოვალუტებში, ასევე გთავაზობთ ვაჭრობას
                    ვალუტებით, აქციებით, სხვა ფასიანი ქაღალდებით და სასაქონლო აქტივებით.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>შეგიძლია ივაჭრო სახლიდან, გააანალიზო ბაზრები და აკონტროლო პოზიციები.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'რეგისტრაცია';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>შეგიძლია ივაჭრო სახლიდან, გააანალიზო ბაზრები და აკონტროლო პოზიციები.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="რეგისტრაცია ახლავე" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
