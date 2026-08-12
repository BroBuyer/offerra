<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Kullanım Şartları');
$page_description = '' . SITE_NAME . ' sitesine eriştiğinizde veya kullandığınızda geçerli kurallar.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <span class="eyebrow">Legal</span>
      <h1>Kullanım Şartları</h1>
      <p class="lede"><?= e(SITE_NAME) ?> sitesine eriştiğinizde veya kullandığınızda geçerli kurallar.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Son güncelleme: Ocak 2025</p>

      <h2>1. Şartların kabulü</h2>
      <p><?= e(SITE_NAME) ?> web sitesine ve hizmetlerine erişerek veya bunları kullanarak bu Kullanım Şartlarına bağlı olmayı kabul edersiniz. Kabul etmiyorsanız hizmetleri kullanmayın.</p>

      <h2>2. Uygunluk</h2>
      <p>En az 18 yaşında (veya yargı alanınızdaki reşit olma yaşında) olmalı ve bağlayıcı bir sözleşme yapma hukuki ehliyetine sahip olmalısınız. Hizmetler, böyle bir teklifin yasa dışı olacağı kısıtlı yargı alanlarının sakinlerine sunulmaz.</p>

      <h2>3. Hesap kaydı</h2>
      <p>Kayıt sırasında doğru, güncel ve eksiksiz bilgi vermeyi ve bu bilgileri güncel tutmayı kabul edersiniz. Kimlik bilgilerinizin gizliliğinden ve hesabınızdaki tüm etkinliklerden siz sorumlusunuz.</p>

      <h2>4. Hizmetler</h2>
      <p><?= e(SITE_NAME) ?> çevrimiçi yatırımla ilgili teknolojik araçlar ve eğitici bilgiler sağlar. Finansal danışmanınız değiliz. Bu sitedeki hiçbir şey kişiselleştirilmiş yatırım tavsiyesi, vergi tavsiyesi veya herhangi bir finansal aracı alım-satım çağrısı oluşturmaz.</p>

      <h2>5. Ücretler</h2>
      <p>Uygulanabilir ücretler, spread’ler ve komisyonlar platformda veya geçerli ücret tarifesinde açıklanır. Faaliyetlerinizden doğan vergilerden siz sorumlusunuz.</p>

      <h2>6. Yasak davranış</h2>
      <ul>
        <li>Hizmetleri kara para aklama, terör finansmanı, piyasa manipülasyonu veya herhangi bir yasa dışı amaç için kullanmak.</li>
        <li>Başka bir kişiyi taklit etmek veya sahte kimlik bilgisi vermek.</li>
        <li>Platformun herhangi bir bölümüne müdahale etmeye, ele geçirmeye veya tersine mühendislik yapmaya çalışmak.</li>
        <li>Hizmetlere açıkça izin verilenden başka şekilde erişmek için otomatik araçlar kullanmak.</li>
      </ul>

      <h2>7. Fikri mülkiyet</h2>
      <p>Sitedeki tüm içerik, ticari markalar, yazılım ve materyaller <?= e(SITE_NAME) ?> veya lisans verenlerinin mülkiyetindedir ve geçerli fikri mülkiyet yasalarıyla korunur. Hizmetleri amaçlanan kullanım için kullanmak üzere sınırlı, münhasır olmayan, geri alınabilir bir lisans verilir.</p>

      <h2>8. Üçüncü taraf hizmetler</h2>
      <p>Platform üçüncü taraf hizmetlere bağlantılar içerebilir veya bunları entegre edebilir. Bu tür hizmetlerden, kullanılabilirliklerinden, doğruluklarından veya içeriklerinden sorumlu değiliz.</p>

      <h2>9. Feragatnameler</h2>
      <p>Hizmetler herhangi bir garanti olmaksızın “olduğu gibi” ve “mevcut olduğu şekilde” sunulur. İşlem yapmak önemli kayıp riski içerir. Ayrıntılar için <a href="<?= page_url('conditions.php') ?>">Risk açıklaması</a> bakın.</p>

      <h2>10. Sorumluluk sınırlaması</h2>
      <p>Yasanın izin verdiği azami ölçüde <?= e(SITE_NAME) ?>, hizmetleri kullanmanızdan doğan dolaylı, arızi, özel, sonuçsal veya cezai zararlardan ya da kâr veya gelir kaybından sorumlu olmaz.</p>

      <h2>11. Tazminat</h2>
      <p>Bu Şartları ihlalinizden veya hizmetleri kötüye kullanmanızdan doğan her türlü talebe karşı <?= e(SITE_NAME) ?>, bağlı kuruluşları ve personelini tazmin etmeyi ve sorumsuz tutmayı kabul edersiniz.</p>

      <h2>12. Askıya alma ve fesih</h2>
      <p>Bu Şartları veya geçerli hukuku ihlal ettiğinize inanırsak, bildirimli veya bildirimsiz olarak hizmetlere erişimi istediğimiz zaman askıya alabilir veya sonlandırabiliriz.</p>

      <h2>13. Geçerli hukuk</h2>
      <p>Bu Şartlar, kanunlar ihtilafı ilkelerine bakılmaksızın <?= e(SITE_NAME) ?> merkezinin geçerli yasalarına tabidir.</p>

      <h2>14. Değişiklikler</h2>
      <p>Bu Şartları zaman zaman değiştirebiliriz. Değişikliklerden sonra hizmetleri kullanmaya devam etmek, revize edilmiş Şartların kabulü anlamına gelir.</p>

      <h2>15. İletişim</h2>
      <p>Bu Şartlarla ilgili sorular <a href="<?= page_url('contacts.php') ?>">iletişim sayfamız</a>.</p>

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
