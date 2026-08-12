<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kullanım Koşulları');
$page_description = ' ' . SITE_NAME . ' işlem platformu ve web sitesi kullanım koşullarını okuyun.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Kullanım Koşulları</h1>
      <p class="lead">Son güncelleme: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p> <?= e(SITE_NAME) ?> erişerek bu Kullanım Koşullarını kabul etmiş olursunuz. Kabul etmiyorsanız lütfen hizmetlerimizi kullanmayın.</p>

      <h2>Uygunluk</h2>
      <p>En az 18 yaşında olmalı ve yargı alanınızda finansal enstrümanlarla işlem yapmaya yasal olarak izinli olmalısınız.</p>

      <h2>Risk açıklaması</h2>
      <p>Kripto paralar, forex, CFD'ler ve diğer finansal enstrümanlarla işlem yapmak önemli kayıp riski taşır. Geçmiş performans gelecekteki sonuçları garanti etmez. Yalnızca kaybetmeyi göze alabileceğiniz sermayeyle işlem yapın.</p>

      <h2>Hesap sorumlulukları</h2>
      <p>Hesap kimlik bilgilerinizin gizliliğini korumaktan ve hesabınız altındaki tüm faaliyetlerden siz sorumlusunuz.</p>

      <h2>Hizmet kullanılabilirliği</h2>
      <p>Sürekli kullanılabilirlik için çaba gösteririz ancak kesintisiz erişimi garanti etmeyiz. Bakım, piyasa koşulları veya teknik sorunlar hizmeti etkileyebilir.</p>

      <h2>Sorumluluk sınırlaması</h2>
      <p><?= e(SITE_NAME) ?>, bu sitedeki bilgilerin kullanımından kaynaklanan işlem kayıpları veya zararlardan sorumlu değildir. Uygun olduğunda bağımsız finansal danışmanlık alın.</p>

      <h2>İletişim</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
