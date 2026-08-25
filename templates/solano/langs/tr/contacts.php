<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'İletişim ' . SITE_NAME . ' ᐉ Yardıma hazırız';
$page_description = SITE_NAME . ' veya hesabınız hakkında bir sorunuz mu var?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">İletişim</span>
    <h1>Yardıma hazırız</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> veya hesabınız hakkında bir sorunuz mu var? Destek ekibimiz yardımcı olmaktan memnuniyet duyar. Bize yazın, mümkün olan en kısa sürede yanıtlarız.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Bize yazmadan önce</h2>
    <p>Çoğu sorunun sitede zaten bir yanıtı vardır; önce bakmak genellikle yanıt beklemaktan daha hızlıdır.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">SSS</a> — maliyetler, çekimler, doğrulama ve minimum tutarlar.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Nasıl çalışır</a> — kayıttan sonra adım adım ne olur.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Fiyatlar</a> — ne ücretsizdir ve maliyet nerede ortaya çıkabilir.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Başlayın — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Bize nasıl ulaşılır</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanal</th><th scope="col">En uygun olduğu yer</th><th scope="col">Yanıt</th></tr></thead>
      <tbody>
        <tr><td>E-posta desteği — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Hesap soruları, doğrulama, çekimler</td><td>Genellikle bir iş günü içinde yanıtlarız.</td></tr>
        <tr><td>Geri arama talebi</td><td>Telefonla anlatmanın daha kolay olduğu her şey</td><td>Destek saatleri: Pazartesi–Cuma, 09:00–18:00</td></tr>
        <tr><td>Kötüye kullanım bildirimi — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Kimliğe bürünme, marka kötüye kullanımı, şüpheli mesajlar</td><td>Alındığında incelenir</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>İletişime geçtiğinizde ne beklemelisiniz</h2>
    <h3>Hangi kanalı kullanmalısınız</h3>
    <p>E-posta, ekli her şey için doğru seçimdir: kimlik kontrolleri, çekim soruları, ekstreyle ilgili sorular. Geri arama formu geri kalanı içindir; çünkü çoğu hesap sorusu dört mesajdan ziyade iki dakikalık bir konuşmada daha hızlı çözülür.</p>
    <h4>Destek saatleri dışında</h4>
    <p>Akşam veya hafta sonu gönderilen mesajlar kuyrukta kalır ve bir sonraki iş gününün ilk işi olarak, geldikleri sırayla yanıtlanır.</p>
    <h3>Eklemeye değer ayrıntılar</h3>
    <p>Kayıtlı e-posta ve sorduğunuz konunun yaklaşık tarihi hesabı bulmaya yeter. Asla şifre, tam kart numarası veya tek kullanımlık kod göndermeyin: ekibimizden hiç kimse bunları sizden istemez.</p>
    <h4>Bir şey doğru görünmüyorsa</h4>
    <p>Aynı gün bildirin. Tanımadığınız bir ödemeyi içeren her şey olağan kuyrukta bekletilmeden hemen ele alınır.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
