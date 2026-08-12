<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Fonlama, güvenlik, AI içgörüleri ve başlangıç hakkında yanıtlar — ' . SITE_NAME . ' platformunda.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Sık sorulan sorular</h1>
      <p class="lead">Kayıt, güvenlik ve AI'nın platformda nasıl yardımcı olduğu hakkında net yanıtlar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Nasıl başlarım?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hesap oluşturun, kısa bir doğrulama tamamlayın ve <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Grafikler, araçlar ve rehberli katılım hemen ardından açılır. Köşedeki Lisa ile de sohbet edebilirsiniz.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            AI işlem yapmama nasıl yardımcı olur?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?>, sade dilde kısa piyasa içgörüleri sunar. Harekete geçip geçmeyeceğine her zaman siz karar verirsiniz.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hesabım nasıl güvence altına alınır?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Bağlantılar SSL şifreleme kullanır. Gereksiz izinler asla istemeyiz — giriş bilgilerinizi gizli tutun.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Gizli ücretler var mı?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ücretler onaylamadan önce gösterilir. Koşullara uyulduğunda yatırım veya çekimlerde sürpriz ücret yoktur.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Sohbet widget'ındaki Lisa kim?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa katılım asistanımızdır. Kısa bir quiz boyunca size rehberlik eder ve güvenli bir hesap talebi göndermenize yardımcı olur.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
