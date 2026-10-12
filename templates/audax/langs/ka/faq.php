<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'ხშირად დასმული კითხვები | ' . SITE_NAME . ' - FAQ';
$page_description = 'ხშირად დასმული კითხვები პლატფორმაზე ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';
$page_css = ['faq-mob.min.css', 'faq-desk.min.css'];
$page_js = ['faq.min.js'];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <h1>ხშირად დასმული კითხვები</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>რა არის <?= e(SITE_NAME) ?> და როგორ მუშაობს?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                ბევრი კითხულობს: «რა არის <?= e(SITE_NAME) ?> სინამდვილეში?» ეს არის მოწინავე ტრეიდინგ პლატფორმა
                ხელოვნური ინტელექტის (AI) ძალით. <?= e(SITE_NAME) ?> AI-ის გამოყენება
                მარტივია: გაიარე რეგისტრაცია, შეიტანე თანხა ანგარიშზე (მინ. <?= e(money_min()) ?>) და პლატფორმა
                იწყებს ტრეიდინგს. ნებისმიერ დროს შეგიძლია დამატებით შეიტანო ან გამოიტანო თანხა.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>რა არის მინიმალური დეპოზიტი <?= e(SITE_NAME) ?>-ზე?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                მინიმალური დეპოზიტი არის <?= e(money_min()) ?>. ამ თანხით შეგიძლია სცადო პლატფორმა და
                დაიწყო ტრეიდინგი დიდი კაპიტალის გარეშე. სურვილისამებრ ნებისმიერ დროს შეგიძლია დამატებით შეიტანო
                ან გამოიტანო მოგება.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>რომელ ბაზრებზე ვაჭრობს <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> აქტიურია სხვადასხვა ფინანსურ ბაზარზე, მათ შორის კრიპტოვალუტებზე
                (Bitcoin, Ethereum, XRP, Litecoin, Dash და სხვა), აქციებზე, ვალუტებზე (ფორექსი) და
                სხვა ფინანსურ აქტივებზე.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>სანდოა თუ არა <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                კითხვა, სანდოა თუ არა <?= e(SITE_NAME) ?>, სრულიად გამართლებულია. ჩვენ
                ვადასტურებთ: <?= e(SITE_NAME) ?> არის სრულად ლეგალური და სანდო ტრეიდინგ პლატფორმა <?= e(geo_in()) ?>. ეს
                არ არის თაღლითობა. მომხმარებელთა თანხების უსაფრთხოება ჩვენი უმაღლესი
                პრიორიტეტია და გამოტანები სწრაფად მუშავდება (24&ndash;48 საათში).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>როგორ მუშაობს <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> იყენებს მოწინავე ხელოვნურ ინტელექტს (AI), რომ ბაზრები რეალურ დროში გააანალიზოს
                და მომგებიანი ტრეიდინგ შესაძლებლობები იპოვოს. მრავალი დადებითი გამოცდილება
                <?= e(SITE_NAME) ?>-ზე ინტერნეტში ადასტურებს, რომ ეს მიდგომა მუშაობს.
                სისტემა ავტომატურად მართავს შენს კაპიტალს, ამიტომ შეგიძლია პოტენციური შემოსავალი მიიღო
                ბაზრის ღრმა ცოდნის გარეშეც.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>რით შეგვიძლია დაგეხმარო?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'რეგისტრაცია';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
