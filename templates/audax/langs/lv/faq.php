<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Bieži uzdotie jautājumi | ' . SITE_NAME . ' - FAQ';
$page_description = 'Bieži uzdotie jautājumi par ' . SITE_NAME . '.';
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
          <h1>Bieži uzdotie jautājumi</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Kas ir <?= e(SITE_NAME) ?> un kā tas darbojas?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Daudzi jautā: „Kas īsti ir <?= e(SITE_NAME) ?>?“ Tā ir progresīva tirdzniecības platforma
                ar mākslīgo intelektu. <?= e(SITE_NAME) ?> AI lietošana ir
                vienkārša: reģistrējieties, iemaksājiet naudu kontā (min. <?= e(money_min()) ?>), un platforma
                sāk tirgot. Jebkurā brīdī varat iemaksāt vairāk vai izņemt.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kāds ir minimālais depozīts <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimālais depozīts ir <?= e(money_min()) ?>. Ar šo summu varat izmēģināt platformu un
                sākt bez liela kapitāla. Ja vēlaties, jebkurā laikā varat iemaksāt vairāk
                vai izņemt peļņu.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kādos tirgos <?= e(SITE_NAME) ?> tirgo?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> darbojas dažādos finanšu tirgos, tostarp kriptovalūtās
                (Bitcoin, Ethereum, XRP, Litecoin, Dash u. c.), akcijās, valūtās (Forex) un
                citos finanšu instrumentos.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Vai <?= e(SITE_NAME) ?> ir uzticama?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Jautājums, vai <?= e(SITE_NAME) ?> ir uzticama, ir pilnībā pamatots. Apstiprinām:
                <?= e(SITE_NAME) ?> ir pilnībā likumīga un uzticama tirdzniecības platforma <?= e(geo_in()) ?>. Tā nav
                krāpšana. Lietotāju līdzekļu drošība ir mūsu augstākā
                prioritāte, un izmaksas tiek apstrādātas ātri (24&ndash;48 stundu laikā).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Kā <?= e(SITE_NAME) ?> darbojas?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> izmanto progresīvu mākslīgo intelektu, lai analizētu tirgus reāllaikā
                un atrastu ienesīgas iespējas. Daudzas pozitīvas <?= e(SITE_NAME) ?>
                pieredzes, ko atrodat tiešsaistē, apstiprina, ka šī pieeja darbojas.
                Sistēma kapitālu pārvalda automātiski, tāpēc arī bez dziļām tirgus zināšanām
                varat tiekties pēc potenciāla ienesīguma.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Kā varam palīdzēt?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Reģistrēties';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
