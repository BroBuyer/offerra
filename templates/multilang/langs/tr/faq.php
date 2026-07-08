<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = SITE_NAME . ' ile isleme baslama, ozellikler, guvenlik, ucretler ve hesap acilisi hakkindaki sorularin yanitlari.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Sikca sorulan sorular</h1>
      <p class="lead">Baslamadan once bilmeniz gereken her sey.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Nasil baslayabilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hesabinizi olusturun, e-postanizi dogrulayin ve en az <?= MIN_DEPOSIT ?> <?= CURRENCY ?> yatirin. Grafiklere, araclara ve baslangic rehberine aninda erisim kazanin.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> guvenli ve guvenilir mi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL sifreleme, iki asamali dogrulama ve dogrulanmis odeme altyapisi kullaniyoruz. Guvenlik, platformun tum katmanlarina entegredir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ucretler nasil uygulanir?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ucretler seffaftir ve her islemi onaylamadan once gosterilir. Yatirim ve cekimlerde gizli masraf yoktur.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Otomatik islem ozelliklerini kullanabilir miyim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Evet. Risk profilinize uygun yapay zeka destekli botlari ayarlayabilir veya manuel islem yapabilirsiniz; modlar arasinda istediginiz an gecis yapabilirsiniz.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cekim islemleri nasil calisir?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Cekim talebinizi panelinizden olusturursunuz. Secilen odeme yontemine bagli olarak isleme alma genellikle 1-3 is gunu surer.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Baska sorunuz mu var?</p>
        <a href="contacts.php" class="btn btn-outline">Destek ekibiyle iletisime gecin</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
