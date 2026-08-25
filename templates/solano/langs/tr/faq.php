<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'SSS ' . SITE_NAME;
$page_description = 'Sorular, yanıtlandı — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Sorular</span>
    <h1>Sorular, net yanıtlandı</h1>
    <p class="kpnq92g">Hesap açmadan önce insanların sordukları ve telefonda da vereceğimiz yanıtlar.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Parayla ilgili sorular</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name"><?= e(SITE_NAME) ?> bir dolandırıcılık mı?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Hayır: <?= e(SITE_NAME) ?> doğrulama kontrolleriyle çalışır, koşullarını ve risk bildirimini tam yayımlar ve çekimler her zaman orijinal ödeme yöntemine döner. Bununla birlikte her yatırım gerçek risk taşır ve hiçbir ciddi platform garantili getiri vaat etmez — bunu yapanlara karşı dikkatli olun.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hesap açmak ne kadar tutar?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Hesap açmak ücretsizdir. Kayıt ücreti ve abonelik yoktur; yalnızca yatırmayı seçtiğiniz tutarı koyarsınız.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Çekimler ne kadar sürer?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Talepler iş günlerinde işlenir ve yatırım yaptığınız yönteme döner. Banka havaleleri kart veya e-cüzdanlardan daha uzun sürer.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Minimum tutar var mı?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Evet, ve kasıtlı olarak düşüktür, şu tutardan: <?= e(money_min()) ?>, böylece küçük başlayıp sonra ekleyebilirsiniz. Tam rakam herhangi bir şeyi onaylamadan önce gösterilir.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Sıkça sorulan sorular</h2>
    <div class="fjl4d">
      <details open><summary>Başlamak için minimum yatırım tutarı nedir?</summary><p>Hesabınızı şu tutardan açıp fonlayabilirsiniz: <?= e(money_min()) ?> minimum. Yatırım planınız ilerledikçe daha fazla fon eklemekte serbestsiniz.</p></details>
      <details><summary>Çekimler nasıl çalışır?</summary><p>Panelinizden istediğiniz zaman çekim talep edin. Fonlar olağan işlem süreleriyle seçtiğiniz ödeme yöntemine döner.</p></details>
      <details><summary>Param güvende tutuluyor mu?</summary><p>Hesaplar profesyonel düzeyde güvenlik ve kimlik kontrolleriyle korunur. Her yatırımda olduğu gibi sermayeniz risk altındadır ve değerler düşebilir veya yükselebilir.</p></details>
      <details><summary>Yatırıma başlamak ne kadar sürer?</summary><p>Çoğu üye kaydı birkaç dakikada tamamlar. İlk yatırımınız işlendikten sonra bir planı hemen etkinleştirebilirsiniz.</p></details>
      <details><summary>Gizli ücretler var mı?</summary><p>Tüm maliyetler taahhüt etmeden önce şeffaf gösterilir. Planınıza neyin uygulandığını her zaman görürsünüz — sürpriz yok.</p></details>
      <details><summary>Kayıt için minimum yaş nedir?</summary><p>Hesap açmak ve yatırım yapmak için en az 18 yaşında olmalısınız. Yaşınızı ve kimliğinizi doğrulamak için doğrulama istenebilir.</p></details>
      <details><summary>Hangi ödeme yöntemleri kabul edilir?</summary><p>Banka ve kredi kartları, banka havaleleri, seçili e-cüzdanlar ve kripto paralar gibi yaygın yöntemler kabul edilir. Tam seçenekler yatırım adımında gösterilir.</p></details>
      <details><summary>Müşteri desteği ne zaman kullanılabilir?</summary><p>Destek ekibimiz Pazartesi–Cuma, 09:00–18:00 saatlerinde hizmet verir ve her talebe bir iş günü içinde yanıt vermeyi taahhüt eder.</p></details>
      <details><summary>Kazanç vergileri nasıl ele alınır?</summary><p>Yatırım kazançları üzerindeki vergiler ülkenizin kurallarına bağlıdır ve sizin sorumluluğunuzdadır. Kendi kayıtlarınızı tutmanızı ve nitelikli bir vergi danışmanına danışmanızı öneririz.</p></details>
      <details><summary>KYC doğrulaması nedir ve neden gereklidir?</summary><p>KYC (Know Your Customer) kimliğinizin standart bir kontrolüdür. Hesapları güvende tutmaya yardımcı olur ve bir yatırım hesabı açmanın rutin parçasıdır.</p></details>
      <details><summary>Önceden yatırım deneyimine ihtiyacım var mı?</summary><p>Hayır. Her üyenin her adımda sizi yönlendiren kişisel bir finans analisti vardır; piyasalara dair önceden bilgi gerekmez.</p></details>
      <details><summary>Yatırımlarımı kim yönetir?</summary><p>Yapay zekâ araçlarıyla desteklenen, hedefleriniz ve risk düzeyiniz etrafında çalışan özel bir finans analisti. Analist mesleki uzmanlığı teknolojiyle birleştirir — kararlar insanda kalır.</p></details>
      <details><summary>Platform düzenleyici standartları karşılıyor mu?</summary><p>Evet — hesap koruması ve doğrulama yerleşik olmak üzere ulusal finansal ve siber güvenlik standartlarını karşılar.</p></details>
      <details><summary>Daha sonra hesabıma daha fazla fon ekleyebilir miyim?</summary><p>Evet. Hesabınızı istediğiniz zaman doldurabilir ve hedefleriniz geliştikçe analistinizle planınızı ayarlayabilirsiniz.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Hesap ve güvenlik</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name"><?= e(SITE_NAME) ?> üzerinde oturum açma nasıl çalışır?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Kayıtlı e-posta ve şifrenizle siteden veya mobil tarayıcıdan oturum açarsınız. İki adımlı doğrulamayı açtıysanız ekstra bir kod istenir; şifrenizi unutursanız oturum açma ekranından sıfırlayabilirsiniz.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kimlik belgelerime neden ihtiyacınız var?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Bir hesap fon hareket ettirmeden önce doğrulama gerekir. Ayrıca başkasının sizin adınıza hesap açmasını da engeller.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Önceden deneyime ihtiyacım var mı?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Hayır. Çoğu üye hiç deneyimsiz başlar. Bir uzman ilk adımları sizinle geçer ve demo bakiye pratik yapmanızı sağlar.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Telefonda kullanabilir miyim?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Evet, platform kurulacak bir şey olmadan mobil tarayıcıda çalışır.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Başlayın — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Mesaj gönderin</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
