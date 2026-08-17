<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kayıt ' . SITE_NAME;
$page_description = 'Hesabınızı ' . SITE_NAME . ' ile açın';
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Şimdi başlayın</span>
    <h1>Hesabınızı açın</h1>
    <p class="kpnq92g">Başlamak için birkaç ayrıntı, ardından bir uzman devralır. Bu adımda ödeme alınmaz.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Sonra ne olur</h2>
    <ol class="nxlk2qu">
      <li><h3>Formu gönderirsiniz</h3><p>Birkaç dakika sürer ve hiçbir maliyeti yoktur.</p></li>
      <li><h3>Bir uzman arar</h3><p>Bilgilerinizi doğrular, soruları yanıtlar ve sonraki adımı açıklar. Yatırım için baskı yoktur.</p></li>
      <li><h3>Doğrulama yapar ve bir tutar seçersiniz</h3><p>Ancak o zaman para hareket eder ve yalnızca sizin seçtiğiniz tutar.</p></li>
    </ol>
    <p class="jkkyl">Yatırım, yatırdığınız sermayenin bir kısmının veya tamamının kaybı olasılığı dahil risk içerir. Yatırımların değeri düşebilir veya yükselebilir ve başlangıçta koyduğunuzdan daha azını geri alabilirsiniz. Kaybetmeyi göze alamayacağınız parayı yatırmamalısınız.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Başlayın — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">SSS</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Neye ihtiyacınız var</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gerçekten okuduğunuz bir e-posta adresi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Bir uzmanın size ulaşabilmesi için bir telefon numarası.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sonraki doğrulama adımı için bir kimlik belgesi.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Formu gönderdikten sonra ne olur</h2>
    <h3>Doğrulama görüşmesi</h3>
    <p>Bir uzman gönderdiğiniz bilgileri doğrulamak, soruları yanıtlamak ve sizin için makul bir başlangıç tutarının ne olduğunu kararlaştırmak için arar. Görüşme bir satış senaryosu değil, bir konuşmadır: gerçekçi olmayan beklentilerle açılan hesap kimseye yaramaz.</p>
    <h4>Ne kadar sürer</h4>
    <p>Genellikle on ila on beş dakikalık bir görüşme. Belirli bir saatte aranmayı tercih ederseniz formda belirtin; o saat dikkate alınır.</p>
    <h3>Kimlik kontrolleri açıklandı</h3>
    <p>İlk yatırımdan önce fotoğraflı kimlik ve adresinizi gösteren güncel bir belge istenir. Bu, düzenlemeye tabi her finansal hizmetin aynı şartıdır ve bir çekimin yalnızca size dönmesi içindir.</p>
    <h4>Neler kabul edilir</h4>
    <p>Pasaport veya nüfus cüzdanı ve son üç ay içinde düzenlenmiş bir fatura veya banka ekstresi. Telefonda çekilmiş net bir fotoğraf yeterlidir.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Hesabınızı açın</h2>
      <p class="pt6joj">Birkaç dakikada başlayın.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Şimdi başlayın';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
