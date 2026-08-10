<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('SSS');
$page_description = '' . SITE_NAME . ' üzerinde fonlama, güvenlik, yapay zekâ içgörüleri ve başlangıç hakkında yanıtlar.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">SSS</p>
      <h1>Hesabınızı fonlamadan önce</h1>
      <p class="lead">Erişim, güvenlik ve platformda yapay zekânın katkısı hakkında net yanıtlar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Nasıl başlarım?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Bir hesap oluşturun, kısa bir doğrulamayı tamamlayın ve <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tutarından yatırın. Grafikler, araçlar ve rehberli onboarding hemen ardından açılır.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Yapay zekâ işlem yapmama nasıl yardımcı olur?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> sade dille kısa piyasa içgörüleri sunar. Harekete geçip geçmeyeceğine her zaman siz karar verirsiniz.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hesabım nasıl güvende?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Bağlantılar SSL şifreleme kullanır. Gereksiz izin istemeyiz — giriş bilgilerinizi gizli tutun.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Gizli ücretler var mı?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ücretler onaydan önce gösterilir. Şartlara uyulduğunda yatırımlarda veya çekimlerde sürpriz yoktur.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
