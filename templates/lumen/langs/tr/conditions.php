<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kullanım Koşulları');
$page_description = SITE_NAME . ' işlem platformu ve web sitesinin kullanım koşullarını okuyun.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Kullanım Koşulları</h1>
      <p class="lead">Son güncelleme: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p><?= e(SITE_NAME) ?> sitesine erişerek bu Kullanım Koşullarını kabul etmiş olursunuz. Kabul etmiyorsanız hizmetlerimizi kullanmayın.</p>

      <h2>Uygunluk</h2>
      <p>En az 18 yaşında olmalı ve bulunduğunuz yargı bölgesinde finansal araçlarla işlem yapmaya yasal olarak yetkili olmalısınız.</p>

      <h2>Risk bildirimi</h2>
      <p>Kripto para, döviz, CFD ve diğer finansal araçlarda işlem yapmak önemli zarar riski içerir. Geçmiş performans gelecek sonuçları garanti etmez. Yalnızca kaybetmeyi göze alabileceğiniz sermayeyle işlem yapın.</p>

      <h2>Hesap sorumlulukları</h2>
      <p>Hesap bilgilerinizin gizliliğinden ve hesabınızdaki tüm etkinliklerden siz sorumlusunuz.</p>

      <h2>Hizmetin kullanılabilirliği</h2>
      <p>Kesintisiz kullanılabilirlik için çaba gösteririz ancak bunu garanti etmeyiz. Bakım, piyasa koşulları veya teknik sorunlar hizmeti etkileyebilir.</p>

      <h2>Sorumluluk sınırlaması</h2>
      <p><?= e(SITE_NAME) ?> bu sitedeki bilgilerin kullanımından doğan işlem kayıpları veya zararlardan sorumlu değildir. Uygun olduğunda bağımsız mali tavsiye alın.</p>

      <h2>İletişim</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
