<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Gizlilik Politikası');
$page_description = SITE_NAME . ' kişisel verilerinizi nasıl toplar, kullanır ve korur.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Ana">
      <a href="<?= page_url() ?>#platform">Platform</a>
      <a href="<?= page_url() ?>#how">Nasıl çalışır</a>
      <a href="<?= page_url() ?>#markets">Piyasalar</a>
      <a href="<?= page_url() ?>#faq">Sıkça sorulan sorular</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Başla</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Yasal bilgiler</span>
      <h1>Gizlilik Politikası</h1>
      <p class="lede"><?= e(SITE_NAME) ?> kişisel verilerinizi nasıl toplar, kullanır ve korur.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Son güncelleme: Ocak 2025</p>

      <h2>1. Giriş</h2>
      <p><?= e(SITE_NAME) ?> (“biz”, “bizim”) ziyaretçi ve müşterilerin gizliliğini korumaya kararlıdır. Bu Gizlilik Politikası, web sitemizi ve hizmetlerimizi kullandığınızda hangi kişisel verileri topladığımızı, neden ve nasıl işlediğimizi açıklar.</p>

      <h2>2. Topladığımız bilgiler</h2>
      <ul>
        <li>Kimlik verileri — kayıt ve KYC/AML uyumu için ad, doğum tarihi, devlet tarafından verilen kimlik belgeleri.</li>
        <li>İletişim verileri — e-posta adresi, telefon numarası, posta adresi.</li>
        <li>Finansal veriler — ödeme ayrıntıları, işlem geçmişi, fon kaynağı bilgileri.</li>
        <li>Teknik veriler — IP adresi, tarayıcı türü, cihaz tanımlayıcıları, çerezler ve kullanım analitikleri.</li>
      </ul>

      <h2>3. Verilerinizi nasıl kullanırız</h2>
      <ul>
        <li>Kimliği doğrulamak ve düzenleyici yükümlülükleri yerine getirmek için.</li>
        <li>Platformumuzu ve hizmetlerimizi sağlamak, sürdürmek ve iyileştirmek için.</li>
        <li>Ödemeleri işlemek ve dolandırıcılık faaliyetlerini tespit etmek için.</li>
        <li>Hesabınız, güncellemeler ve destek talepleri hakkında sizinle iletişim kurmak için.</li>
        <li>Onay verdiğinizde pazarlama iletişimi göndermek için (istediğiniz zaman abonelikten çıkabilirsiniz).</li>
      </ul>

      <h2>4. Yasal dayanak</h2>
      <p>Kişisel verileri şu yasal dayanaklardan birine veya birkaçına göre işleriz: bir sözleşmenin ifası, yasal bir yükümlülüğe uyum, meşru menfaatlerimiz veya onayınız.</p>

      <h2>5. Paylaşım ve ifşa</h2>
      <p>Kişisel verileri yasanın gerektirdiği durumlarda düzenlemeye tabi ödeme sağlayıcıları, KYC/AML doğrulama ortakları, bulut altyapı sağlayıcıları, profesyonel danışmanlar ve yetkili makamlarla paylaşabiliriz. Kişisel veri satmayız.</p>

      <h2>6. Uluslararası aktarımlar</h2>
      <p>Kişisel veriler yargı alanınız dışına aktarıldığında, standart sözleşme maddeleri dahil uygun güvencelerin mevcut olmasını sağlarız.</p>

      <h2>7. Veri saklama</h2>
      <p>Kişisel verileri hizmet sağlamak ve yasal, düzenleyici ve muhasebe gereksinimlerini karşılamak için gerektiği süre boyunca saklarız — tipik olarak hesap kapanışından sonra en az beş yıl.</p>

      <h2>8. Haklarınız</h2>
      <p>Geçerli yasaya tabi olarak kişisel verilerinize erişim, düzeltme, silme, kısıtlama veya taşınabilirlik talep edebilir ve belirli işlemlere itiraz edebilirsiniz. Bu hakları kullanmak için aşağıdaki adresten bizimle iletişime geçin.</p>

      <h2>9. Çerezler</h2>
      <p>Siteyi işletmek ve kullanımı anlamak için temel ve analitik çerezler kullanırız. Çerezleri tarayıcı ayarlarınızdan yönetebilirsiniz.</p>

      <h2>10. Güvenlik</h2>
      <p>Kişisel verileri yetkisiz erişim, ifşa, değişiklik veya imhaya karşı korumak için tasarlanmış idari, teknik ve fiziksel güvenceler uygularız. Hiçbir sistem mükemmel güvenli değildir ve mutlak güvenlik garanti edemeyiz.</p>

      <h2>11. Değişiklikler</h2>
      <p>Bu Politikayı zaman zaman güncelleyebiliriz. En son sürüm her zaman güncellenmiş tarihle bu sayfada mevcut olacaktır.</p>

      <h2>12. İletişim</h2>
      <p>Gizlilik soruları veya haklarınızı kullanmak için <?= e(SITE_NAME) ?> Veri Koruma ekibine <a href="<?= page_url('contacts.php') ?>">iletişim sayfamız</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Ana sayfaya dön</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tüm hakları saklıdır ·
      <a href="<?= page_url('privacy.php') ?>">Gizlilik</a> ·
      <a href="<?= page_url('conditions.php') ?>">Şartlar</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
