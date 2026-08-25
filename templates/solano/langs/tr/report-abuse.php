<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kötüye kullanımı bildirin ᐉ ' . SITE_NAME;
$page_description = 'Kötüye kullanımı bildirin — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Güven ve güvenlik</span>
    <h1>Kötüye kullanımı bildirin</h1>
    <p class="etpy2"><?= e(SITE_NAME) ?> platformunu güvende tutmamıza yardımcı olun. Şüpheli dolandırıcılık, kimliğe bürünme veya platformumuzun ya da markamızın kötüye kullanımını bildirin.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Neyi bildirmelisiniz</h2>
    <p>Aşağıdakilerden herhangi birini Güven ve Güvenlik ekibimize bildirin:</p>
    <ul>
      <li><?= e(SITE_NAME) ?> gibi görünen oltalama e-postaları, sahte web siteleri veya sahte uygulamalar.</li>
      <li>Adımızı, logomuzu veya ticari markalarımızı kötüye kullanan sosyal medya hesapları, reklamlar veya mesaj kanalları.</li>
      <li>Şüpheli hesap ele geçirme, yetkisiz erişim veya kimlik hırsızlığı.</li>
      <li>Şüpheli ödeme talepleri, “kurtarma acenteleri” veya bizim adımıza hareket ettiğini iddia eden üçüncü taraflar.</li>
      <li>Piyasa kötüye kullanımı, kara para aklama endişeleri veya hizmetlerimize bağlı herhangi bir yasa dışı faaliyet.</li>
      <li>Personelimize veya kullanıcılarımıza yönelik aşağılayıcı, tehditkâr veya taciz edici davranış.</li>
    </ul>

    <h2>Nasıl bildirilir</h2>
    <p>Aşağıdaki kanallardan herhangi biriyle ayrıntılı bir bildirim gönderin. Mümkünse şunları ekleyin:</p>
    <ul>
      <li>Olayın tarih ve saati.</li>
      <li>URL’ler, ekran görüntüleri, mesaj başlıkları, gönderen adresleri veya telefon numaraları.</li>
      <li>Hesap bilgileriniz (bildirim hesabınızla ilgiliyse).</li>
      <li>Soruşturmamıza yardımcı olabilecek diğer bağlam.</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>Güven ve Güvenlik e-postası</b>
        <span>Güven ve Güvenlik ekibimize ulaşmak için iletişim sayfasını kullanın. Bildirimler bir iş günü içinde önceliklendirilir.</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Güvenlik bildirimi</b>
        <span>Sistemlerimizi etkileyen güvenlik açıklarının sorumlu açıklaması için ayrıntıları kamuya paylaşmadan önce bizimle iletişime geçin.</span>
      </div>
    </div>

    <h2>Sonra ne olur?</h2>
    <p>Her bildirimi inceleriz. Konunun niteliğine göre daha fazla bilgi için sizinle iletişime geçebilir, sahte içeriği kaldırmak için ödeme sağlayıcıları veya barındırma platformlarıyla çalışabilir ya da konuları kolluk veya düzenleyicilere iletebiliriz. Bildirimleri gizli tutar ve yasal olarak mümkün olduğunda bildirenlerin kimliğini koruruz.</p>

    <h2>Acil konular</h2>
    <p>Bir suçun mağduru olduğunuzu düşünüyorsanız bize söylemenin yanı sıra yerel kolluk makamınızla da iletişime geçin. Hesabınızın ele geçirildiğinden şüpheleniyorsanız şifrenizi hemen değiştirin ve bizi derhal bilgilendirin.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Güven ve Güvenlik ile iletişime geçin</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Ana sayfaya dön</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
