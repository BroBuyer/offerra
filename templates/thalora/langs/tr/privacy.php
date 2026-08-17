<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Gizlilik | Veri koruması — ' . SITE_NAME;
$page_description = '' . SITE_NAME . ' verilerinizi gizlilik politikasında nasıl korur, öğrenin.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Gizlilik Politikası', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="gezinme yolu"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">Ana sayfa</a>
  <span class="breadcrumb-item">Gizlilik Politikası</span>
</nav>
<h1>Gizliliğinizi koruma taahhüdümüz</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">Son güncelleme: 08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> («biz») için kişisel verilerinizin korunması önceliktir. Bu beyan bilgileri nasıl topladığımızı, kullandığımızı ve koruduğumuzu açıklar.</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Veri işlemede şeffaflık</p>
    <p>
      Veri işlemede açıklığa çalışırız. Bize ulaşın:      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Veri kullanım amacı</p>
    <p>Bilgilerinizi hizmet sunmak, platformu geliştirmek ve yasal yükümlülükleri yerine getirmek için kullanırız.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Verilerinize erişim</p>
    <p>Kişisel verilerinize erişim, düzeltme veya silme talebinde istediğiniz zaman bulunabilirsiniz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">Güvenlik uygulamaları</p>
    <p>Sağlam güvenlik önlemleri uygularız, ancak mutlak koruma vaat edemeyiz.</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. Topladığımız bilgiler</h2>
    <p>IP adresleri, cihaz bilgileri, tarayıcı türleri ve doğrudan verdiğiniz veriler dahil bilgi toplarız.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. İşleme dayanakları</h2>
    <p>İşleme rıza, meşru menfaatler ve yürürlükteki hukuka dayanır.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. Veri paylaşımı</h2>
    <p>Bilgileriniz yasal zorunlulukta güvenilir ortaklar, hizmet sağlayıcılar ve yetkililerle paylaşılabilir.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Çerezler</h2>
    <p>Çerezler site işlevini ve kullanım analizini destekler; isterseniz kapatabilirsiniz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. Saklama süresi</h2>
    <p>Bilgileri yalnızca belirtilen amaçlar için gerekli süre boyunca saklarız.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. Uluslararası aktarımlar</h2>
    <p>Veriler uygun güvencelerle sınır ötesine aktarılabilir.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. Diğer sitelere bağlantılar</h2>
    <p>Platformdan bağlanan harici siteler veya uygulamaları için sorumluluk üstlenmeyiz.</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. Bu politikanın güncellemeleri</h2>
    <p>Bu gizlilik politikası güncellenebilir.</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">Yasal haklarınız</h2>
    <p>Erişim, düzeltme, silme, işlemeyi sınırlama, veri taşınabilirliği, rızayı geri çekme ve şikâyet haklarınız vardır.</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
