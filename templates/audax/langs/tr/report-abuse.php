<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kötüye kullanımı bildir | ' . SITE_NAME;
$page_description = 'Kötüye kullanım veya şüpheli etkinliği bildir: ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Kötüye kullanım bildir</h1>
            <p class="bold-title">1. Kötüye kullanım bildirimi</p>
            <p>
              1.1. Web sitemizde uygunsuz içerikle karşılaştıysan bunu
               iletişim formumuz aracılığıyla bize bildir.
            </p>
            <p>Bize ulaş: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Bu bölümde kötüye kullanım veya
              politikalarımızı ihlal eden içerik hakkında bilgi verebilirsin.
            </p>
            <p>
              1.3. Bildirimin bizim için önemli. Olayı uygun şekilde inceleyebilmemiz için
              lütfen ayrıntılı bilgi ver.
            </p>
            <p>Bildirimi göndererek Gizlilik Politikamızı da kabul etmiş olursun.</p>
            <p class="bold-title">2. Kim bildirebilir</p>
            <p>
              2.1. Kötüye kullanıma uğradıysan veya uygunsuz davranış fark ettiysen
              bunu bildirme hakkın vardır.
            </p>
            <p>2.1.1. Bildirim göndermek için en az 18 yaşında olmalısın.</p>
            <p>2.1.2. Bildirimin doğru ve gerçeklere dayalı olmalı.</p>
            <p>2.1.3. Bildirim formunun kullanımı ülkende yasal olmalı.</p>
            <p>2.2. Yanlış veya kötü niyetli bildirimlerden sorumlu değiliz.</p>
            <p class="bold-title">3. Bildirim süreci</p>
            <p>3.1. Tüm kötüye kullanım bildirimlerini inceleme hakkını saklı tutarız.</p>
            <p>3.2. Bildirim geçerli sayılırsa gerekli önlemleri alırız.</p>
            <p class="bold-title">4. Bildirim sırasında yasak faaliyetler</p>
            <p>4.1. Formun kötü niyetli amaçlarla kullanılmasına izin verilmez.</p>
            <p>4.1.1. Yanlış veya yanıltıcı bildirim göndermek yasaktır.</p>
            <p>4.1.2. Bildirim sistemi üzerinden diğer kullanıcıları taciz etmek yasaktır.</p>
            <p>4.1.3. Bildirim göndermek için bot veya otomasyon kullanmak yasaktır.</p>
            <p>4.1.4. Bildirim sistemini manipüle etme girişimleri incelenir.</p>
            <p>4.1.5. Sistemi yanlış bilgi yaymak için kullanmak yasaktır.</p>
            <p>4.1.6. İncelemeyi engelleme girişimlerine izin verilmez.</p>
            <p>4.1.7. Sistemi tehdit etmek için kullanmak yasaktır.</p>
            <p>4.1.8. Bildirimle ilgili yasadışı faaliyetler yaptırıma tabi olabilir.</p>
            <p>4.1.9. Bildirim kurallarını aşma girişimlerine izin verilmez.</p>
            <p>4.1.10. Bildirim sisteminin kötüye kullanılması ciddiye alınır.</p>
            <p class="bold-title">5. Bildirim sırasında fikri mülkiyet hakları</p>
            <p>
              5.1. Kötüye kullanım bildirirken gönderdiğin içerik sana mülkiyet hakkı vermez.
            </p>
            <p>5.2. Bildirim göndererek web sitesi içeriği üzerinde hak kazanmazsın.</p>
            <p>5.3. Bildirimler yalnızca inceleme amacıyla kullanılır.</p>
            <p>5.4. Üçüncü taraflar bildirimleri kopyalayamaz veya değiştiremez.</p>
            <p class="bold-title">6. Bildirimde sorumluluğun sınırlandırılması</p>
            <p>6.1. Bildirimi göndererek içeriğinden sorumlu olduğunu kabul edersin.</p>
            <p>6.2. Gönderilen bildirimlerin sonuçlarından sorumlu değiliz.</p>
            <p>6.3. Bildirimden doğan zarar kullanıcının sorumluluğundadır.</p>
            <p>6.4. Bildirimlerden kaynaklanan zararlardan sorumluluk kabul etmeyiz.</p>
            <p>
              6.5. Bildirim sistemindeki teknik sorunlar bizim sorumluluğumuzda değildir.
            </p>
            <p class="bold-title">7. Bildirim süreci hakkında bilgi</p>
            <p>
              7.1. Bildirim sistemini kullanarak ek bilgi için seninle iletişime geçmemizi kabul edersin.
            </p>
            <p>7.2. Bildirimler gizli tutulur.</p>
            <p>7.3. Bildirimlerinin bir kopyasını saklamanı öneririz.</p>
            <p class="bold-title">8. Ek bağlantılar ve kaynaklar</p>
            <p>8.1. Kötüye kullanım bildirimi hakkında daha fazla bilgi için politikalarımıza bak.</p>
            <p>8.2. Dış kaynaklara verilen bağlantılar onayımız anlamına gelmez.</p>
            <p>8.3. Kullanmadan önce her kaynağı doğrulamanı öneririz.</p>
            <p class="bold-title">9. Bildirimlere ilişkin genel hükümler</p>
            <p>
              9.1. Bildirim sürecini değiştirme, askıya alma veya sonlandırma hakkını
              istediğimiz zaman saklı tutarız.
            </p>
            <p>
              9.2. Bu bildirim sürecinin koşulları her an değişebilir. Değişikliklerden sonra bildirim hizmetini kullanmaya devam etmen
              yeni koşulları kabul ettiğin anlamına gelir.
            </p>
            <p>9.3. Bildirim göndererek bu koşulları tamamen kabul etmiş olursun.</p>
            <p>
              9.4. Bu koşulların açık maddeleri kapsamına girmeyen yazılı veya sözlü
              her türlü anlaşma veya beyan hukuken geçersizdir ve tarafları bağlamaz.
            </p>
            <p>
              9.5. Bu koşullarla tanınan ve kullanılmayan bir hak — rıza,
              ihmal veya acizlik nedeniyle olsun — feragat edilmiş sayılır. Bir hakkın kısmen veya tamamen kullanılması
              sonradan kullanılmasını dışlamaz veya sınırlamaz.
            </p>
            <p>
              9.6. Yetkili bir mahkeme bu koşulların bir hükmünü geçersiz sayarsa bu hüküm
              geçersiz kabul edilir. Diğer hükümler ise tam olarak yürürlükte kalır.
            </p>
            <p>
              9.7. Bu koşulların, hak ve yükümlülüklerini devredebilen üçüncü taraflarca web sitesinin
              işletilmesini mümkün kıldığı kabul edilir. Kullanıcı hak ve yükümlülüklerini
              başka bir tarafa devredemez.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
