<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('SSS');
$page_description = SITE_NAME . ' üzerinde yatırım, güvenlik, ücretler ve başlangıç hakkında yanıtlar.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">SSS</p>
      <h1>Hesabınıza para yatırmadan önce</h1>
      <p class="lead">Erişim, güvenlik ve platformun işleyişi hakkında net yanıtlar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Nasıl başlarım?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hesap oluşturun, e-postayı doğrulayın ve <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tutarından itibaren yatırın. Grafikler, araçlar ve başlangıç rehberi hemen açılır.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> nasıl güvence altında?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Her hesap işleminde SSL şifreleme, iki faktörlü kimlik doğrulama ve doğrulanmış ödeme sağlayıcıları kullanılır.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ücretler ne durumda?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ücretler onaydan önce gösterilir. Yatırma veya çekmede sürpriz ücret yok.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            İşlemleri otomatikleştirebilir miyim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Evet — risk limitleriyle yapay zekâ destekli botlar kurun veya tamamen manuel kalıp istediğiniz zaman geçiş yapın.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Para çekme nasıl çalışır?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Panodan talep edin. Çoğu yöntem, ödeme yöntemine bağlı olarak 1–3 iş gününde tamamlanır.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Hâlâ sorularınız mı var?</p>
        <a href="contacts.php" class="btn btn-outline">Destekle iletişim</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
