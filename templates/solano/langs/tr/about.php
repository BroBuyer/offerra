<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hakkımızda ' . SITE_NAME;
$page_description = 'Tek hesap, sermayenize net bakış — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platform</span>
    <h1>Tek hesap, her şeye net bakış</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> bakiyenizi, stratejinizi ve performansınızı tek, şeffaf bir panele getirir; böylece her karar bilinçli, her rakam görünür olur.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Hesabınızın arkasındaki insanlar</h2>
    <p>Arayüzün arkasında piyasaları her gün inceleyen analistler, platformu ayakta tutan mühendisler ve dilinizde yanıt veren destek uzmanları vardır.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Koşulları üç ayda bir değil, her gün gözden geçiren piyasa analistleri.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Platform için hazır mühendisler, günün her saati izleme ile.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Kayıt, doğrulama ve çekimleri yürüten destek uzmanları.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Düzenleme, risk ve vaat etmediklerimiz</h2>
    <p>Yatırım risk içerir ve hiçbir platform bunu kaldırmaz. Bir platformun yapabileceği, sizinle açık olmaktır: koşullarını yayımlamak, müşteri parasını düzenlemeye tabi ortaklarda tutmak ve çekimlerin nasıl çalıştığını belgelemek.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Hesaptaki fonlar hareket etmeden önce kimlik doğrulaması.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Çekimler yatırımda kullanılan aynı yönteme döner.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Koşullar, risk bildirimi ve gizlilik politikası tam yayımlanır.</span></li>
    </ul>
    <p class="jkkyl">Yatırım, yatırdığınız sermayenin bir kısmının veya tamamının kaybı olasılığı dahil risk içerir. Yatırımların değeri düşebilir veya yükselebilir ve başlangıçta koyduğunuzdan daha azını geri alabilirsiniz. Kaybetmeyi göze alamayacağınız parayı yatırmamalısınız.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Başlayın — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Mesaj gönderin</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Platform nasıl inşa edildi</h2>
    <ol class="nxlk2qu">
      <li><h3>Başlangıç noktası</h3><p>Küçük bir analist ve mühendis grubu aynı şikâyeti duymaya devam etti: araçlar var, ama kimse onları açıklamıyor.</p></li>
      <li><h3>İlk çalışan sürüm</h3><p>İlk sürüm bir şey yaptı: bakiyeyi ve pozisyonu sade dille göstermek. O kısım netleşene kadar geri kalanı çıkarıldı.</p></li>
      <li><h3>İnsan tarafını katmak</h3><p>Otomasyon neyi ve ne zamanı yanıtlar; insanlar nedeni. Her üyenin soracak birinin olması için destek uzmanları eklendi.</p></li>
      <li><h3>Daha fazla piyasaya açılmak</h3><p>Yerel ödeme yöntemleri, yerel diller ve yerel destek saatleri.</p></li>
      <li><h3>Şu an neredeyiz</h3><p>Aynı ilkeler, daha büyük ölçekte: şeffaf rakamlar, ulaşabileceğiniz insanlar, küçük yazılarda sürpriz yok.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Burada ne içiniz</h2>
    <p>Yatırım yapmak isteyen çoğu insan hiç başlamaz, çünkü her yol sözlüğü zaten bilen biri için tasarlanmış gibi durur. Tersini kurduk: tek hesap, net dil ve gerçekten konuşabileceğiniz bir uzman.</p>
    <p>Sade bir cümlenin yettiği yerde jargon yok, para hareket ettikten sonra çıkan ücret yok ve kimsenin dürüstçe garanti edemeyeceği getiri vaadi yok.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktif kullanıcılar</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>İşlem hacmi</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Destek</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
