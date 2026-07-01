<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Kullanim Kosullari');
$page_description = SITE_NAME . ' islem platformu ve web sitesinin kullanim kosullarini inceleyin.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Kullanim Kosullari</h1>
      <p class="lead">Son guncelleme: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p><?= e(SITE_NAME) ?> platformuna erisim saglayarak bu kullanim kosullarini kabul etmis olursunuz. Kabul etmiyorsaniz hizmetlerimizi kullanmayin.</p>

      <h2>Uygunluk</h2>
      <p>18 yasindan buyuk olmali ve bulundugunuz yargi alaninda finansal enstrumanlarla islem yapmaya yasal olarak yetkili olmalisiniz.</p>

      <h2>Risk uyarisi</h2>
      <p>Kripto varliklar, forex, CFD ve diger finansal enstrumanlarda islem yapmak ciddi kayip riski tasir. Gecmis performans gelecekteki sonuclarin garantisi degildir. Yalnizca kaybetmeyi goze alabileceginiz sermaye ile islem yapin.</p>

      <h2>Hesap sorumlulugu</h2>
      <p>Giris bilgilerinizin gizliliginden ve hesabiniza ait tum aktivitelerden siz sorumlusunuz.</p>

      <h2>Hizmet erisilebilirligi</h2>
      <p>Kesintisiz erisim saglamak icin calisiriz; ancak surekli erisimi garanti edemeyiz. Bakim calismalari, piyasa kosullari veya teknik sorunlar hizmeti etkileyebilir.</p>

      <h2>Sorumlulugun sinirlandirilmasi</h2>
      <p><?= e(SITE_NAME) ?>, bu sitedeki bilgilerin kullanimi nedeniyle olusan islem kayiplari veya zararlardan sorumlu degildir. Gerektiginde bagimsiz bir finansal danismana basvurun.</p>

      <h2>Iletisim</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
