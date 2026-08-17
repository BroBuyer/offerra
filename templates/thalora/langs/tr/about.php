<?php
require_once __DIR__ . '/includes/config.php';

$page_title = '' . SITE_NAME . ' hakkında | İşlem platformu ayrıntıları';
$page_description = 'Güvenli bir işlem deneyimi için ' . SITE_NAME . ' misyonunu, teknolojisini ve taahhüdünü keşfedin.';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('Hakkımızda', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="gezinme yolu"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">Ana sayfa</a>
            <span class="breadcrumb-item">Biz kimiz</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>Kimliğimiz</h1>
                      <p class="lead">Platform, özellikler ve sorumlu işlem.</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> piyasa erişimini ve analitik araçları tek, sade bir platformda birleştirir.</p>
            <p>Sağlam güvenlik önlemlerine ve şeffaf, kolay anlaşılır süreçlere odaklanırız.</p>
            <p>İşlem risk taşır; getiri garanti edilemez.</p>
            <p>Onboarding basittir: hesap oluşturun, e-postanızı doğrulayın, en az <?= e(money_min()) ?> yatırın ve panele girin. Manuel ve destekli mod arasında geçiş yapın, limitleri ayarlayın ve riski profilinize göre yönetin.</p>            <p>Destek hesaplar, ödemeler, çekimler ve platform işlevlerinde yardımcı olur. Kişisel yatırım tavsiyesi vermez. Aktif işlem sırasında acil durumda hesap e-postasını ve panel durumunu belirtin.</p>            <p>Yeni başlayanlar ve deneyimli yatırımcılar net bir ortam bulur: bir yanda eğitimler, diğer yanda ileri kontroller ve performans takibi. <?= e(SITE_NAME) ?> deneyimin kalitesiyle ölçülür — agresif pazarlamayla değil. Kayıt olmadan önce SSS, koşullar ve gizliliği okuyun: riskler, çekim süreleri ve hesap gereksinimleri.</p>            <p>At <?= e(SITE_NAME) ?> rehberli akışlar, izleme araçları ve şeffaf hesap ile ödeme süreçlerine odaklı operasyonel destek bulursunuz — somut piyasa sonucu vaadi olmadan.</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">Bugün kaydolun</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>Bugün size nasıl yardımcı olabiliriz?</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'Hesap oluştur';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
