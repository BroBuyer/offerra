<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Fiyatlar ' . SITE_NAME;
$page_description = 'Basit, şeffaf fiyatlandırma — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Basit, şeffaf fiyatlandırma.</h1>
    <p class="kpnq92g">Başlangıç <?= e(SITE_NAME) ?> ile ücretsizdir. Hesap açmak için gizli ücret yoktur ve yalnızca yatırmayı seçtiğiniz tutarı koyarsınız: platform ve araçları dahildir.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Maliyetler nerede ortaya çıkabilir</h2>
    <p>Paranın, seçtiğiniz bir yatırım dışında bakiyenizden çıktığı tek noktalar bunlardır.</p>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kalem</th><th scope="col">Ücreti alan</th><th scope="col">Not</th></tr></thead>
      <tbody>
        <tr><td>Hesap açılışı</td><td>—</td><td>Ücretsiz.</td></tr>
        <tr><td>Platform erişimi</td><td>—</td><td>Dahil, abonelik yok.</td></tr>
        <tr><td>Piyasa spread’i</td><td>Aracı kurum</td><td>Alış ve satış fiyatı arasındaki olağan fark.</td></tr>
        <tr><td>Ağ / banka ücreti</td><td>Ödeme sağlayıcısı</td><td>Seçtiğiniz yönteme bağlıdır.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Sermaye risk altındadır. Yalnızca kaybetmeyi göze alabileceğiniz tutarı yatırın.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Hesabınızı açın</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Neler dahildir</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ücretsiz hesap kurulumu: kayıt veya lisans ücreti yok.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Yatırım, çekim veya hesap bakımında gizli ücret yok.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Yalnızca standart aracı spread’leri veya ağ maliyetleri uygulanabilir.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Minimum yatırımdan başlayın ve kendi temponuzda ölçekleyin.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Rakamlar pratikte nasıl görünür</h2>
    <h3>İlk yatırım, adım adım</h3>
    <p>İlk yatırım, tüm maliyet tablosunu tek yerde gösterir: gönderdiğiniz tutar, dönüştürüldüğündeki spread ve işlem yapmaya karar verene kadar başka bir şey yok. Ay sonunda bekleyen hesap ücreti yoktur ve bakiyeyi olduğu yerde bırakmanın ücreti yoktur.</p>
    <h4>Aynı gün ne olur</h4>
    <p>Ödeme netleşince bakiye görünür ve herhangi bir şey açılmadan önce bir uzman planı sizinle geçer. Adınıza otomatik olarak hiçbir şey yerleştirilmez.</p>
    <h3>Çekimler ve maliyeti</h3>
    <p>Çekimler paranın geldiği ödeme yöntemine döner: bu bir tercih değil, bir gerekliliktir; böylece hesap sizin kalır. İşlem bizim tarafımızdan ücretsizdir; görebileceğiniz tek kesinti kendi bankanızın veya kartınızın uyguladığıdır.</p>
    <h4>Planlayabileceğiniz süreler</h4>
    <p>İş gününde yapılan talepler aynı gün incelenir. Kart iadeleri genellikle üç ila beş iş günü, banka havaleleri iki iş günü içinde sonuçlanır.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
