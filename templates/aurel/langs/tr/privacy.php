<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gizlilik Politikası ᐉ ' . SITE_NAME;
$page_description = SITE_NAME . ' kişisel bilgilerinizi nasıl toplar, kullanır ve korur.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Yasal bilgiler</span>
    <h1>Gizlilik Politikası</h1>
    <p class="rmct9"><?= e(SITE_NAME) ?> kişisel bilgilerinizi nasıl toplar, kullanır ve korur.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Son güncelleme: Ocak 2025</p>

    <h2>1. Giriş</h2>
    <p><?= e(SITE_NAME) ?> (“biz”, “bize”, “bizim”) ziyaretçi ve müşterilerin gizliliğini korumaya kararlıdır. Bu Gizlilik Politikası, web sitemizi ve hizmetlerimizi kullandığınızda hangi kişisel verileri topladığımızı, neden topladığımızı ve nasıl işlediğimizi açıklar.</p>

    <h2>2. Topladığımız bilgiler</h2>
    <ul>
      <li><strong>Kimlik verileri</strong> — kimlik doğrulama ve KYC/AML uyumu için ad, doğum tarihi, resmi kimlik belgesi.</li>
      <li><strong>İletişim verileri</strong> — e-posta adresi, telefon numarası, posta adresi.</li>
      <li><strong>Finansal veriler</strong> — ödeme ayrıntıları, işlem geçmişi, fon kaynağı bilgileri.</li>
      <li><strong>Teknik veriler</strong> — IP adresi, tarayıcı türü, cihaz tanımlayıcıları, çerezler ve kullanım analitikleri.</li>
    </ul>

    <h2>3. Verilerinizi nasıl kullanırız</h2>
    <ul>
      <li>Kimliği doğrulamak ve düzenleyici yükümlülükleri yerine getirmek için.</li>
      <li>Platformumuzu ve hizmetlerimizi sağlamak, sürdürmek ve iyileştirmek için.</li>
      <li>Ödemeleri işlemek ve dolandırıcılık faaliyetlerini tespit etmek için.</li>
      <li>Hesabınız, güncellemeler ve destek talepleri hakkında sizinle iletişim kurmak için.</li>
      <li>Onay verdiğinizde pazarlama iletişimi göndermek için (istediğiniz zaman vazgeçebilirsiniz).</li>
    </ul>

    <h2>4. Yasal dayanak</h2>
    <p>Kişisel verileri şu yasal dayanaklardan birine veya birkaçına göre işleriz: bir sözleşmenin ifası, yasal bir yükümlülüğe uyum, meşru menfaatlerimiz veya onayınız.</p>

    <h2>5. Paylaşım ve ifşa</h2>
    <p>Kişisel verileri, yasanın gerektirdiği durumlarda düzenlemeye tabi ödeme sağlayıcıları, KYC/AML doğrulama ortakları, bulut altyapı sağlayıcıları, profesyonel danışmanlar ve yetkili makamlarla paylaşabiliriz. Kişisel veri satmayız.</p>

    <h2>6. Uluslararası aktarımlar</h2>
    <p>Kişisel veriler yargı alanınız dışına aktarıldığında, standart sözleşme maddeleri dahil uygun güvencelerin mevcut olmasını sağlarız.</p>

    <h2>7. Veri saklama</h2>
    <p>Kişisel verileri hizmet sağlamak ve yasal, düzenleyici ve muhasebe gereksinimlerini karşılamak için gerektiği süre boyunca saklarız — tipik olarak hesap kapanışından sonra en az beş yıl.</p>

    <h2>8. Haklarınız</h2>
    <p>Geçerli yasaya tabi olarak kişisel verilerinize erişim, düzeltme, silme, kısıtlama veya taşınabilirlik talep edebilir ve belirli işlemlere itiraz edebilirsiniz. Bu hakları kullanmak için aşağıdaki adresten bizimle iletişime geçin.</p>

    <h2>9. Çerezler</h2>
    <p>Siteyi işletmek ve kullanımı anlamak için zorunlu ve analitik çerezler kullanırız. Çerezleri tarayıcı ayarlarınızdan yönetebilirsiniz.</p>

    <h2>10. Güvenlik</h2>
    <p>Kişisel verileri yetkisiz erişim, ifşa, değişiklik veya imhaya karşı korumak üzere tasarlanmış idari, teknik ve fiziksel güvenceler uygularız. Hiçbir sistem mükemmel güvenli değildir ve mutlak güvenlik garanti edemeyiz.</p>

    <h2>11. Değişiklikler</h2>
    <p>Bu Politikayı zaman zaman güncelleyebiliriz. En son sürüm her zaman güncellenmiş tarihle bu sayfada mevcut olacaktır.</p>

    <h2>12. İletişim</h2>
    <p>Gizlilik soruları veya haklarınızı kullanmak için <?= e(SITE_NAME) ?> Veri Koruma ekibine iletişim sayfamız üzerinden ulaşın.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Ana sayfaya dön</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
