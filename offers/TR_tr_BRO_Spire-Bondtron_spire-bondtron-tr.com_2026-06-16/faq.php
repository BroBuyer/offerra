<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('SSS');
$page_description = SITE_NAME . ' ile işlem, özellikler, güvenlik, komisyonlar ve başlangıç hakkında yanıtlar.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">SSS</p>
      <h1>Sık sorulan sorular</h1>
      <p class="lead">Başlamadan önce bilmeniz gereken her şey.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Nasıl başlayabilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hesap oluşturun, e-postanızı doğrulayın ve minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?> yatırın. Grafiklere, araçlara ve giriş rehberlerine anında erişim kazanırsınız.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> güvenli ve güvenilir mi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL şifreleme, 2FA ve doğrulanmış ödeme işlemcileri kullanıyoruz. Güvenlik platformun her katmanına entegre edilmiştir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Komisyonlar nedir?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Komisyonlar şeffaftır ve herhangi bir işlemi onaylamadan önce gösterilir. Yatırım veya çekimlerde gizli ücret yoktur.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Otomatik işlem kullanabilir miyim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Evet. Risk profilinize göre yapay zeka destekli botlar yapılandırabilir veya manuel işlem yapabilirsiniz — istediğiniz zaman değiştirebilirsiniz.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Çekimler nasıl çalışır?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Hesap alanınızdan çekim talep edin. İşlem genellikle ödeme yöntemine bağlı olarak 1–3 iş günü sürer.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Hâlâ sorularınız mı var?</p>
        <a href="contacts.php" class="btn btn-outline">Destekle iletişime geçin</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
