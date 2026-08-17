<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Koşullar | Kullanıcı sözleşmesi — ' . SITE_NAME;
$page_description = 'Platform koşullarını, işlem kurallarını ve destek politikalarını ' . SITE_NAME . ' için inceleyin.';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Koşullar', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="gezinme yolu" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">Ana sayfa</a>
            <span class="breadcrumb-item">Koşullar</span>
        </nav>
        <h1>Kullanım Koşulları</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Giriş</h2>
    <p>Bu site üçüncü taraf işlem hizmetleri hakkında bilgi verir. Devam ederek bu koşulları ve gizlilik politikasını kabul edersiniz. Koşullar güncellenebilir.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. Kullanıcı uygunluğu</h2>
    <p>En az 18 yaşında olmalı ve yerel hukuka göre bu koşulları kabul etmeye yetkili olmalısınız. Platformun uygunsuz kullanımından sorumluluk kabul etmeyiz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Erişim sınırlamaları</h2>
    <p>Erişim bazı bölgelerde veya düzenleyici kısıtlamalarda sınırlanabilir. Bazı hizmetler belirli yerlerde kullanılamayabilir.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Uygun kullanım</h2>
    <p>Yetkisiz kullanım yasaktır; yasadışı faaliyet, hak ihlali, zararlı içerik veya botlar dahildir. İhlaller hesap askıya alınmasına yol açabilir.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Fikri mülkiyet</h2>
    <p>Tüm içerik, markalar ve fikri mülkiyet bize veya bağlı kuruluşlara aittir. Site kullanımı kişiseldir; içeriğin kopyalanması veya değiştirilmesi izinli değildir.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Sorumluluk reddi</h2>
    <p>Hizmetler ve site «olduğu gibi» sunulur. Kullanımdan doğan hata, kayıp veya zararlardan sorumluluk kabul etmeyiz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Üçüncü taraf içeriği</h2>
    <p>Üçüncü taraf içerik veya bağlantılar doğruluk veya erişilebilirlik garantisi olmadan görünebilir; kendiniz doğrulayın.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Harici bağlantılar</h2>
    <p>Harici bağlantılar kolaylık içindir. Bu siteleri onaylamaz veya kontrol etmeyiz ve içeriklerinden sorumluluk kabul etmeyiz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. Ek hükümler</h2>
    <p>Hizmetleri ve koşulları güncelleyebiliriz. Bu koşullar tam sözleşmeyi oluşturur. Hakların kullanılmaması feragat anlamına gelmez.</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
