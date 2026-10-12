<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gizlilik Politikası | ' . SITE_NAME;
$page_description = SITE_NAME . ' için Gizlilik Politikası.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Gizlilik Politikası</h1>
            <p>
              Kişisel verilerin ve varlıkların bizim için son derece önemli. Onları korumaya
              tamamen bağlıyız.
            </p>
            <p>
              <?= e(SITE_NAME) ?> işlem faaliyetlerin için gerekli verileri toplar ve saklar. Bu verilerin
              nasıl toplandığı ve saklandığı aşağıdaki Gizlilik Politikasında açıklanır.
            </p>
            <p>Politikamız şu ilkelere dayanır:</p>
            <p class="circle">
              Azami şeffaflık sağlamak amacıyla, kişisel verilerini nasıl topladığımızı ve
              sakladığımızı açıklarız:
            </p>
            <p>
              Verilerini nasıl topladığımızı ve işlediğimizi anlamanı istiyoruz; böylece bilinçli
              kararlar verebilirsin. Bu web sitesinde veri işleme için net kurallar ve süreçler uygularız.
              Politikamız, veri kullanımı hakkında sana açık ve somut bilgi verdiğimiz yöntemleri ayrıntılı olarak açıklar.
              Kontrol sende.
            </p>
            <p>
              Gerekli gördüğümüzde seni hemen bilgilendiririz. Şeffaflık bizim için
              temel öneme sahiptir.
            </p>
            <p>
              Uzman ekibimiz, süreçlerimizin her yönüne ilişkin sorularını yanıtlamak için her zaman hazırdır; buna
              <?= e(geo_in()) ?> mevzuatı ve AB
              düzenlemeleri kapsamındaki yükümlülüklerimiz de dahildir. Bize şu adresten ulaşabilirsin:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Kişisel verileri Gizlilik Politikamızda
              belirtilen amaçlar dışında kullanmayız.
            </p>
            <p>
              Kişisel verileri aşağıdaki amaçlarla işleyebiliriz; bunlar arasında <?= e(SITE_NAME) ?> hizmetlerinin düzgün
              çalışması ve işlem yapan üyeleri üçüncü taraf
              işlem platformlarına bağlamak da vardır. Ayrıca web sitesi özelliklerini ve hizmetlerini
              sürdürmek ve geliştirmek; haklarımızı korumak; yasal ve diğer
              yükümlülükleri yerine getirmek için işleme gerekebilir. Son olarak bu veriler, gerektiğinde idari
              ve müşteri olarak sana sunulan hizmetlerle ilgili diğer iş süreçleri için kullanılır.
            </p>
            <p>
              Tercihlerine ve ihtiyaçlarına uygun, daha kaliteli hizmet sunmak için <?= e(SITE_NAME) ?>
              kişisel verileri kullanır.
            </p>
            <p class="circle">
              Kişisel verilerini korumak ve bunlarla ilgili
              haklarını güvence altına almak için gerekli araçları kullanmak amacıyla:
            </p>
            <p>
              İstediğin zaman bize ulaşarak tüm kişisel verilerine erişebilirsin. Gerekirse bunları
              değiştirebilir veya silebiliriz. Ayrıca bu verileri sana veya belirlediğin üçüncü bir tarafa aktarma taleplerini işleriz.
              Bu hizmeti ve desteği sunuyoruz; böylece gizlilik ve kontrol haklarını
              tam olarak kullanabilirsin.
            </p>
            <p class="circle">Kişisel verilerini koru:</p>
            <p>
              Güvenlik sistemlerimiz yüksek kalitededir ve banka düzeyinde önlemler içerir. Mutlak koruma
              garanti edilemese de sistemlerimizi sürekli en üst düzeyde tutmaya ve mevcut önlemleri güçlendirmeye
              bağlıyız.
            </p>
            <p>
              Kapsamlı ve ayrıntılı bir Gizlilik Politikamız ve birinci sınıf güvenlik sistemlerimiz vardır.
            </p>
            <p class="bold-title">1. Uygulama kapsamı</p>
            <p>
              Bu politika, gerçek kişilere ait tüm verilerin toplanması, işlenmesi ve
              açıklanmasına ilişkin prosedürlerimizi açıklar.
            </p>
            <p>
              Politikamızın hükümleri, tanımlanabilen veya tanımlanmış tüm gerçek kişiler için geçerlidir.
              Özellikle bize emanet edilen, erişebildiğimiz ve/veya birleştirebildiğimiz verilerle
              bağlantılı olarak tanımlanabilen her gerçek kişi için.
            </p>
            <p>
              Gizlilik Politikasında tanımlandığı şekilde veri işleme; özellikle kişisel verilerin saklanması,
              yönetilmesi ve düzenlenmesini kapsar.
            </p>
            <p>
              18 yaşından küçük kişiler hakkında bilgi toplamayız ve toplamaya çalışmayız. 18 yaşından küçüklerin platformumuzu herhangi bir
              amaçla kullanmasına da izin vermeyiz. Bir kullanıcının 18 yaşından küçük olduğunu fark edersek bu verileri
              derhal sileriz.
            </p>
            <p class="bold-title">2. Hangi kişisel verileri topluyoruz?</p>
            <p>
              Kayıt sırasında hizmetlerimizi kullanman için gerekli kişisel verileri toplarız. Gerekirse
              doğrulama için kişisel veri isteyebiliriz; örneğin
              hesap sahipliğini teyit etmek için. Hizmetlerimizin en yüksek kalitede kalması için platform kullanımın ve
              ilgili üçüncü taraf hizmetler hakkında bilgi toplar ve analiz ederiz.
              ilgili üçüncü taraf hizmetler hakkında bilgi toplar ve analiz ederiz.
            </p>
            <p class="bold-title">
              3. Hiçbir koşulda kişisel verilerini şirkete vermek zorunda değilsin.
            </p>
            <p>
              Verilerini vermek zorunda olmasan da vermeme kararın
              hizmetlerimizin sunumunda kısıtlamalara yol açabilir. Ayrıca platform kullanımında
              kısıtlamalara neden olabilir.
            </p>
            <p class="bold-title">
              4. Hangi kişisel verileri topluyoruz? Web sitemize eriştiğinde aşağıdaki
              kişisel verileri toplayabiliriz:
            </p>
            <p>
              Seni kişisel olarak tanımlayan veriler toplamayız. Hesap etkinliğin, kullanıcı IP adresleri, erişim tarih ve saatleri gibi bilgiler toplarız.
              hesap etkinliğin, kullanıcı IP adresleri ve erişim tarihleri ile saatleri gibi bilgiler toplarız. Bakım,
              güvenlik ve destek için sistem hata raporları, tarayıcı bilgileri ve hesabına erişmek için kullandığın
              cihaz türünü saklarız. Hesabında ayarlı dili de kaydederiz.
            </p>
            <p>
              Kişisel veri toplama açısından yalnızca hizmetlerimiz aracılığıyla üçüncü taraf bir işlem platformuna bağlanırken
              verdiğin bilgileri toplar ve saklarız.
            </p>
            <p>
              Üçüncü taraf platformlara verdiğin kişisel veriler şunları içerebilir:
              ad soyad, adres, telefon numarası ve e-posta adresi.
            </p>
            <p class="bold-title">
              5. Şirket kişisel verilerime neden ihtiyaç duyuyor ve işleme yasal mı?
            </p>
            <p>
              Şirket kişisel verilerini yalnızca politikada belirtilen
              amaçlar için toplar, saklar ve işler. Belirtilen tüm kullanımlar ve işlemeler
              geçerli <?= e(geo_in()) ?> mevzuatı ve AB düzenlemelerine uygundur.
            </p>
            <p>
              Şirket verilerini yalnızca <?= e(geo_in()) ?> geçerli
              düzenlemelere uygun olarak yönetir, işler veya aktarır. İlgili hukuki dayanaklar aşağıda listelenmiştir:
            </p>
            <p class="circle">
              Şirketin kişisel verilerini saklaması ve işlemesi için onay verdin.
              Verilerini şirkete göndererek bunları uygun üçüncü taraf
              işlem platformuna iletmemize yetki verirsin. Ayrıca kişisel verilerinin bir veya daha fazla amaçla
              işlenmesine onay verdin.
            </p>
            <p class="circle">
              Hizmetleri geliştirmek, hukuki talepleri ileri sürmek veya savunmak ve meşru menfaatleri korumak için şirketin verilerini saklaması ve
              işlemesi gerekebilir.
              kişisel verilerini işlemesi gerekebilir.
            </p>
            <p class="circle">Yasal yükümlülükleri yerine getirmek için veri işleme gereklidir.</p>
            <p>
              Şirketin yapmak zorunda olduğu veri işleme hakkında daha fazla bilgi istersen
              bize e-postayla ulaşabilirsin.
            </p>
            <p>
              Aşağıda belirli amaçların ve kişisel verilerini işlememize yetki veren hukuki dayanakların listesini bulursun.
              kişisel verilerini işlememize yetki veren hukuki dayanakların listesini bulursun.
            </p>
            <p class="green">Amaç</p>
            <p class="green">Hukuki dayanak</p>
            <p>
              1. Dijital işleme erişimini kolaylaştırmak için ve yalnızca talebin üzerine kişisel verilerini üçüncü taraf platformlarla paylaşırız. Verilerin
              yalnızca talebin ve takdirin doğrultusunda toplanabilir
              ve üçüncü taraflarla paylaşılabilir.
            </p>
            <p>
              Kişisel verilerinin bir veya daha fazla amaçla işlenmesine onay verdin.
            </p>
            <p>
              2. Hizmetlerimizle ilgili taleplerine, endişelerine ve sorularına hızlı ve etkili yanıt verebilmemiz için
              gerekli bilgileri bize ilet.
            </p>
            <p>
              Şirketin veya belirtilen bir üçüncü tarafın meşru menfaatlerinin korunması için
              kişisel verilerin işlenmesi gereklidir.
            </p>
            <p>
              3. Yasal ve idari yükümlülüklerimizi yerine getirmek için kişisel verilerin işlenmesi gereklidir.
            </p>
            <p>Yasal yükümlülüklerimizi yerine getirmek için belirli kişisel verileri işlemek zorundayız.</p>
            <p>
              4. Hizmetlerimizi geliştirmek için anonimleştirilmiş verilere ihtiyaç duyar ve kullanımı,
              hata raporları dahil — izlememiz gerekir.
            </p>
            <p>
              Şirketin ve dış hizmet sağlayıcıların meşru menfaatlerinin korunması için
              kişisel verilerin işlenmesi ve saklanması gereklidir.
            </p>
            <p>5. Dolandırıcılığı ve hizmetimizin kötüye kullanımını önlemek için gereklidir.</p>
            <p>
              Şirketin ve üçüncü taraf hizmet sağlayıcıların meşru menfaatlerinin güvence altına alınması için
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Hizmetimizin gereklilikleri bizi iş geliştirme, stratejik kararlar, izleme, mevzuata uyum ve
              diğer iş faaliyetleri için veri işlemeyi izlemeye ve yürütmeye zorlar.
              diğer iş faaliyetleri için veri işlemeyi izlemeye ve yürütmeye zorlar.
            </p>
            <p>
              Şirketin ve dış hizmet sağlayıcıların meşru menfaatlerini korumak amacıyla
              kişisel verilerin işlenmesi ve saklanması gereklidir.
            </p>
            <p>
              7. Hizmet yelpazemizde ve stratejik planlamada kararları desteklemek için istatistik ve veri analizi araçları kullanırız.
              hizmet yelpazemizde ve stratejik planlamada kararları desteklemek için istatistik ve veri analizi araçları kullanırız.
            </p>
            <p>
              Şirketin ve dış hizmet sağlayıcılarımızın meşru menfaatlerinin korunması için
              kişisel verilerin işlenmesi ve saklanması gereklidir.
            </p>
            <p>
              8. Şirketin ve üçüncü taraf hizmet sağlayıcıların hak, mülkiyet ve menfaatlerini korumak için gerekli ölçüde, tüm yerel yasalar ve
              şirketin ve üçüncü taraf hizmet sağlayıcıların hak, mülkiyet ve menfaatlerini korumak için gerekli ölçüde, tüm yerel yasalar ve
              geçerli düzenlemeler, sözleşmeler ve kendi koşul ve yönergelerimiz uyarınca kişisel verileri işleyebiliriz. Bu tür işleme yalnızca gerekli ve
              belirlenmiş prosedürlere göre yapılır.
              belirlenmiş prosedürlere göre yapılır.
            </p>
            <p>
              Şirketin ve her bir dış hizmet sağlayıcının meşru menfaatlerinin korunması için
              kişisel verilerin işlenmesi ve saklanması gereklidir.
            </p>
            <p class="bold-title">6. Kişisel verilerin üçüncü taraflarla paylaşılması</p>
            <p>
              IP adreslerinin saklanması ve işlenmesi, anketler ve kullanıcı analizi ile
              diğer ilgili hizmetler için şirket anonimleştirilmiş kişisel verileri
              dış hizmet sağlayıcılarla paylaşabilir.
            </p>
            <p>
              Talebin üzerine verdiğin bazı kişisel verileri dış
              hizmet sağlayıcılarla paylaşırız. Bu durumda verilerinin işlenmesi söz konusu
              şirketin gizlilik politikasına tabidir. Bu, çeşitli dijital işlem platformlarını kapsayabilir.
            </p>
            <p>
              Müşteri hizmetlerimizi geliştirmek ve hizmetlerimizi genel olarak optimize etmek amacıyla
              şirket kişisel verileri bağlı şirketleri ve iş ortaklarıyla paylaşabilir.
            </p>
            <p>
              Yasal olarak gerekli olduğunda veya şirketin ve ilgili üçüncü tarafların hak ve mülkiyetini korumak için
              verileri ilgili yasal veya denetim makamlarıyla paylaşabiliriz.
            </p>
            <p>
              Şirket satışı, yatırım alınması veya kredi başvurusu gibi kritik işlemler kapsamında
              ilgili veriler yasal ve uygun şekilde paylaşılabilir. Bu, birleşmeler, yeniden yapılandırmalar,
              ilgili veriler yasal ve uygun şekilde paylaşılabilir. Bu, birleşmeler, yeniden yapılandırmalar,
              konsolidasyonlar veya yasaya uygun şekilde şirketin iflası için de geçerlidir.
            </p>
            <p class="bold-title">7. Çerezler ve üçüncü taraf hizmetler</p>
            <p>
              Web sitesi analizi ve reklam ajanslarıyla iş birliğinde çerezler ve diğer
              benzer teknolojiler yasa ve yaygın uygulamaya uygun kullanılabilir.
            </p>
            <p>
              Bir web sitesini ziyaret ettiğinde cihazında saklanan küçük metin dosyaları olan çerezler,
              tarama davranışın, tercihlerin ve diğer veriler hakkında bilgi toplamak için kullanılır. Bunların
              amaçları kullanıcı deneyimini kişiselleştirmek ve geliştirmektir. Ayarlarını ve tercihlerini hatırlamamıza
              ve hizmet teklifimizi buna göre uyarlamamıza yardımcı olurlar. Ayrıca
              stratejik planlama için istatistik toplamak amacıyla da kullanılırlar.
            </p>
            <p>
              Genel olarak bu web sitesi iki çerez türü kullanır: oturum çerezleri,
              yalnızca tarayıcı oturumun süresince saklanan ve tarayıcıyı kapattığında silinen oturum çerezleri;
              ve oturumun bittikten sonra tarayıcında kalan kalıcı çerezler.
              sonrakiler web sitesinin seni geri dönen ziyaretçi olarak tanımasını ve kullanımı kolaylaştırmasını sağlar.
            </p>
            <p class="bold-title">Çerez türleri:</p>
            <p>Çerezler amaca göre gerektiğinde kullanılabilir:</p>
            <p class="green">Çerez türü</p>
            <p>Bu çerezler kesinlikle gereklidir</p>
            <p class="green">Amaç</p>
            <p>
              Seni müşteri olarak tanımak için çerezler kullanılır; böylece istediğin bilgi,
              ayarlar ve hizmetleri sunabiliriz.
              Ayrıca sitemizde gezinmeyi kolaylaştırır ve erişimi sağlarlar.
            </p>
            <p>
              Cihazının içerik indirip akış yapabilmesi için çerez kullanırız. Ayrıca
              sayfalara dönüşü mümkün kılarlar.
            </p>
            <p class="green">Ek bilgi</p>
            <p>
              Web sitesine hızlı ve kolay erişim için çerezler,
              belirli kişisel verileri saklar ve işler.
              giriş yaptığında seni hatırlamasını istemen halinde.
            </p>
            <p>Oturum çerezleri web tarayıcısını kapattığında silinir.</p>
            <p class="green">Çerez türü</p>
            <p>İşlevsel çerezler</p>
            <p class="green">Amaç</p>
            <p>
              Çerezlerle ayarlarını ve tercihlerini güvenle saklayıp uygulayabiliriz.
              Sitemizi ziyaret ettiğinde seni tanımamızı da sağlarlar.
            </p>
            <p class="green">Ek bilgi</p>
            <p>
              Kalıcı çerezler tarayıcı oturumundan sonra da saklanır ve
              son kullanma tarihine kadar etkin kalır.
            </p>
            <p class="green">Çerez türü</p>
            <p>Performans çerezleri</p>
            <p class="green">Amaç</p>
            <p>
              Hizmetlerimizi geliştirmek için çerezlerle istatistiksel veri toplarız. Bu çerezler
              web sitesi performansı ve kullanımı hakkında bilgi verir.
            </p>
            <p class="green">Ek bilgi</p>
            <p>
              Çerezlerle saklanan tüm bilgiler anonimdir ve kişilerin tanımlanmasını sağlamaz.
            </p>
            <p>
              Oturum çerezleri tarayıcıyı kapattığında silinir; kalıcı çerezler ise son kullanma tarihine kadar veya sen manuel silene kadar
              süresiz etkin kalabilir.
            </p>
            <p>Çerezler engellenir veya silinir</p>
            <p>
              Çerezleri kaldırmak veya engellemek istersen bunu
              tarayıcı ayarlarından yapmalısın. En yaygın tarayıcılar için ayrıntılı talimatlar aşağıdaki bağlantılarda.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Çerezleri engellemek bazı site özelliklerinin amaçlandığı gibi çalışmamasına neden olabilir.
            </p>
            <p class="bold-title">Kişisel verileri ne kadar saklarız</p>
            <p>
              Kişisel verilerin, bu politikada belirtildiği gibi gerekli süreçler için kesinlikle gerekli olduğu sürece saklanır.
              Yerel yasalar, düzenlemeler veya şirket içi politikalar
              yerel yasalar, düzenlemeler veya şirket içi politikalar daha uzun saklamayı gerektirirse süre uzatılabilir.
            </p>
            <p>
              Kişisel verilerin talebin ve takdirin doğrultusunda üçüncü taraf
              işlem platformlarıyla 12 ay süreyle paylaşılır. Bu süre dolduktan sonra onayınla
              veriler ek 12 ay daha paylaşılır.
            </p>
            <p>
              Prosedürlerimiz, tüm kişisel verilerin hâlâ gerekli olup olmadığını değerlendirmek için
              düzenli inceleme öngörür.
            </p>
            <p class="bold-title">
              9. Kişisel verilerin üçüncü ülkelere veya uluslararası kuruluşlara aktarılması
            </p>
            <p>
              Hizmetlerimizi sunmak ve/veya güvenlik nedenleriyle gerekli olduğunda kişisel verileri
              başka ülkelere (senin ülken dışında) ve uluslararası kuruluşlara
              kapsamlı güvenlik protokolleriyle aktarabiliriz. Veri koruma önlemlerini
              bilgilerini korumak ve yasal yollara erişimini sağlamak için en yüksek standartlarda uygularız.
              ve kanuni haklarına her zaman.
            </p>
            <p>
              Avrupa Ekonomik Alanı (AEA) kapsamındaki tüm sakinler veri koruma ve garantilerden yararlanır.
            </p>
            <p class="circle">
              Veri aktarımları her zaman AB yargı yetkisi ve denetimi altında,
              45. maddenin 3. fıkrasında öngörülen veri koruma standartları ve protokollerine uygun olarak gerçekleşir.
              27 Nisan 2016 tarihli Avrupa Parlamentosu ve Konseyi (AB) 2016/679 sayılı Yönetmeliği
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Kamu kurumları veya otoriteler arasındaki veri aktarımları
              46. maddenin 2. fıkrası kapsamında yapılır. Bu, hukuken bağlayıcı ve uygulanabilir bir anlaşmadır.
            </p>
            <p class="circle">
              GDPR kapsamında 46. maddenin 2. fıkrasının c bendi uyarınca Avrupa Komisyonu standart sözleşme maddeleri
              veri aktarım koşullarını belirler; bu aktarımlar bunlara uygun yapılır.
              Hükümleri şu adreste inceleyebilirsin:
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Kişisel verilerini üçüncü ülkelere aktarım sırasında korumak için şirketin aldığı özel güvenlik önlemleri hakkında daha fazla bilgi için
              e-postayla talep gönderebilirsin
              e-postayla şu adrese: <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Kişisel verilerin korunması</p>
            <p>
              Kişisel veriler, referans prosedürlere uygun en yüksek düzeyde teknik ve organizasyonel önlemlerle korunur.
              Bu prosedürler yasadışı veya öngörülemeyen olaylardan kaynaklanan veri tahribini önlemede etkilidir; ayrıca
              yasadışı veya öngörülemeyen olaylardan kaynaklanan veri tahribini önlemede etkilidir; ayrıca
              kaybını veya değiştirilmesini de önler.
            </p>
            <p>
              En yüksek özeni ve en sıkı veri koruma standartları ile yasaya uygun prosedürleri uygulasak da hiçbir koşulda kişisel verilerinin
              hatasız olduğu garanti edilemez. Bu nedenle
              kişisel veriler kazara, maddi olmayan veya dolaylı zarar görürse veya ifşa edilirse sorumluluk kabul edemeyiz.
              kişisel veriler kazara, maddi olmayan veya dolaylı zarar görürse veya ifşa edilirse sorumluluk kabul edemeyiz.
              Buna iletim hataları, üçüncü tarafların yetkisiz erişimi veya benzeri nedenlerle ifşalar gibi kontrolümüz dışındaki durumlar dahildir.
              iletim hataları, üçüncü tarafların yetkisiz erişimi veya benzer nedenlerle ifşalar gibi kontrolümüz dışındaki durumlar dahildir.
            </p>
            <p>
              Denetim makamlarından veya
              yasal yetkili kamu kurumlarından hukuken bağlayıcı talepler aldığımızda kişisel verilerini bu kurumlara iletmek zorunda kalabiliriz.
              Yasal yükümlülük nedeniyle iletildikten sonra bu kurumların verilerini nasıl işlediği, sakladığı veya koruduğu üzerinde kontrolümüz yoktur.
              Yasal yükümlülük nedeniyle iletildikten sonra bu kurumların verilerini nasıl işlediği, sakladığı veya koruduğu üzerinde kontrolümüz yoktur.
            </p>
            <p>
              Kişisel bilgiler dahil internet üzerinden iletilen her şey belirli bir dinleme riski taşır ve %100 güvenli değildir. Şirket çevrimiçi gönderilen
              verilerin güvenliğini garanti edemez.
              verilerin güvenliğini garanti edemez.
            </p>
            <p class="bold-title">11. Üçüncü taraf web sitelerine bağlantılar</p>
            <p>
              Bu web sitesinde üçüncü taraf uygulama ve sitelere bağlantılar bulursun.
              Lütfen bunların şirketle bağlantılı olmadığını veya şirketin kontrolünde olmadığını ve
              bu üçüncü taraflar için geçerli olmadığını unutma. Kişisel verileri toplama ve işleme konusunda kendi prosedür ve önceliklerine göre hareket ederler; bu nedenle
              Gizlilik Politikamızın bu üçüncü taraflar için geçerli olmadığını unut. Kişisel verileri toplama ve işleme konusunda kendi prosedür ve önceliklerine göre hareket ederler; bu nedenle
              bu faaliyetlerden sorumluluk kabul etmeyiz. Kendi takdirinle kullan.
            </p>
            <p>
              Kişisel veri vermeden önce ziyaret ettiğin şirket veya hizmetin Gizlilik Politikasını kontrol et.
              Kişisel veri vermeden önce ziyaret ettiğin şirket veya hizmetin Gizlilik Politikasını kontrol et. Toplama, kullanma ve
              işleme kurallarının tercihlerinle uyumlu olup olmadığını doğrula. Veri paylaşmaya karar verirsen
              doğrudan hizmet sağlayıcıyla paylaş.
            </p>
            <p class="bold-title">12. Politika güncellemeleri</p>
            <p>
              Bu politikayı istediğimiz zaman güncelleme veya değiştirme hakkını saklı tutarız.
              Değişiklikleri web sitesi ve ilgili kanallar aracılığıyla bildiririz. Gizlilik Politikasının güncellenmiş sürümü
              Gizlilik Politikasının güncellenmiş sürümü web sitesinde yayımlanır; aksi belirtilmedikçe revize politika yayımlandığı anda yürürlüğe girer.
              web sitesinde yayımlanır; aksi belirtilmedikçe revize politika yayımlandığı anda yürürlüğe girer.
            </p>
            <p class="bold-title">13. Kişisel verilerle ilgili hakların</p>
            <p>
              Tüm kişisel verilerinin kullanımı üzerinde tam kontrol ve son söz sende; buna doğruluğu doğrulama, hataları düzeltme ve silme veya
              veri işlememizi hem kapsam hem de nitelik bakımından kısıtlama hakkı dahildir.
              veri işlememizi hem kapsam hem de nitelik bakımından kısıtlama hakkı dahildir.
            </p>
            <p>Bu sayfada AEA sakinleri kendileriyle ilgili bilgileri bulabilir:</p>
            <p>
              Kişisel verilerin burada açıklanan haklarla korunur. Aşağıdaki adrese e-posta göndererek bu hakları
              hemen kullanabilirsin.
            </p>
            <p>Haklarına erişim</p>
            <p>
              Verdiğin kişisel veriler doğruysa istediğin zaman erişebilirsin. İşlediğimiz tüm
              işlediğimiz kişisel veriler elimizde olduğundan doğrulanabilir.
            </p>
            <p>
              Doğrulama için kişisel verilerini istediğin zaman talep edebilirsin; sana
              elektronik ortamda sunulur. Zaten verilen kopyanın ötesinde
              zaten verilen kopyanın ötesinde işlenmiş verilerinin ek kopyalarını istersen makul bir ücret alınabilir.
            </p>
            <p>
              Yasa ve Gizlilik Politikasıyla tanınan haklar üçüncü tarafların haklarını zedeleyemez. Şirket,
              üçüncü tarafların hak ve özgürlüklerini ihlal edecekse kişisel verilere erişimi reddetme veya kısıtlama hakkını saklı tutar.
              üçüncü tarafların hak ve özgürlüklerini ihlal edecekse kişisel verilere erişimi reddetme veya kısıtlama hakkını saklı tutar.
            </p>
            <p>Hataları düzeltme hakkı</p>
            <p>
              Kişisel verilerindeki eksiklik veya yanlış bilgiden kaynaklanan hataları sen veya şirket, uygun işleme için
              düzeltebilir.
            </p>
            <p>Verilerin silinmesi hakkı</p>
            <p>
              Aşağıdaki durumlarda kişisel verilerinin silinmesini talep etme hakkın vardır:
              1) onayın olmadan veya yasal sınırlar dışında işlendiyse; 2)
              silinmesini istemen ve şirketin saklama yükümlülüğü olmaması halinde; 3)
              saklama yükümlülüğü olmaması halinde; 3) işlemeye itiraz edersen veya onayını geri çekersen — işlem yasal olsa ve menfaatlerimize veya üçüncü tarafların menfaatlerine dayansa bile; ve 4)
              yasa
              bizi silmeye zorluyorsa.
            </p>
            <p>
              Silme hakkı, AB veya üye devlet mevzuatının saklamayı gerektirdiği durumlarda uygulanmaz.
              Hukuki talepleri ileri sürmek veya savunmak için veriler gerekliyse de
              geçerli değildir.
            </p>
            <p>Veri işlemenin kısıtlanması hakkı</p>
            <p>
              Kişisel verilerinin işlenmesinin kısıtlanmasını talep etme hakkın vardır; eğer
              hatalı olduklarına inanıyorsan.
            </p>
            <p>
              Kişisel verilerinin kullanımının kısıtlanmasını istersen işlemeyi şu durumlar dışında kısıtlarız:
              1) AB veya bir üye devletinde geçerli mevzuat buna engel oluyorsa; 2)
              onayınla, hukuki talepleri savunmak veya ileri sürmek için gerekliyse;
              3) başka bir gerçek kişinin haklarını korumak için.
            </p>
            <p>Veri taşınabilirliği hakkı</p>
            <p>
              Verdiğin kişisel verilere erişme ve bunları kontrol etme hakkın,
              toplamaya onay verdiğin ölçüde ve işleme
              otomatik sistemlerle yapılıyorsa geçerlidir.
            </p>
            <p>
              Tüm kişisel verilerinin başka bir şirkete veya kuruluşa, teknik olarak mümkün olduğu ölçüde aktarılmasını talep edebilirsin.
              Bu hak verilerini silme hakkını etkilemez.
              Kullanımı başka bir gerçek kişinin hak veya özgürlüklerini ihlal edecekse
              uygulanmaz.
            </p>
            <p>Veri işlemeye itiraz hakkı</p>
            <p>
              Şirketin meşru menfaatlerimizi veya hizmet sağlayıcı olarak hareket eden üçüncü bir tarafın menfaatlerini koruma hakkına halel getirmeksizin
              işlemeye itiraz etme ve durdurulmasını talep etme hakkın vardır.
              Hukuki talepleri savunmak veya ileri sürmek için işlemenin acilen devam etmesi gerekiyorsa bu hak uygulanmaz;
              bu durumlarda kişisel verilerini
              işlemeye devam edebiliriz.
            </p>
            <p>
              Kişisel verilerinin doğrudan pazarlama amacıyla işlenmesine istediğin zaman itiraz edebilirsin.
            </p>
            <p>
              Onayı geri çekme hakkı
            </p>
            <p>
              Kişisel verilerinin işlenmesine verdiğin onayı istediğin zaman,
              derhal geçerli olmak üzere geri çekebilirsin. Geri çekme, geri çekmeden önce yapılan
              işleme etki etmez.
            </p>
            <p>
              Herhangi bir nedenle memnun değilsen yasal, denetim veya başka bir denetim kuruluna
              şikâyet etme hakkın vardır.
            </p>
            <p>
              Kişisel verilerinin işlenmesiyle ilgili hak ve özgürlüklerinin
              ihlal edildiğine inanıyorsan AB üye devletlerinde bu amaçla denetim kurumları vardır.
              Uygun görürsen bu kurumlara şikâyet edebilirsin.
            </p>
            <p>
              Bölüm 13, kişisel verilerle ilgili haklarının AB veya üye devlet yasalarıyla
              sınırlandırılabileceği durumları açıklar.
            </p>
            <p>
              Kişisel verilerin ve işlenmesi hakkındaki talebini aldığımızda bu politikanın 13. Bölümünde belirtildiği gibi talep edilen bilgilere erişim sağlarız.
              talep edilen bilgilere erişim sağlarız.
              Talebin kapsamına
              ve niteliğine bağlı olarak bu süreyi en fazla iki ay uzatabiliriz. Gerekirse talebi aldıktan sonra bir ay içinde uzatmayı bildiririz.
              uzatmayı bildiririz.
            </p>
            <p>
              Yasa veya bu politikanın 13. Bölümüne aykırı olmadıkça talep edilen bilgileri elektronik olarak ve ücretsiz göndeririz.
              Yasa veya bu politikanın 13. Bölümüne aykırı olmadıkça talep edilen bilgileri elektronik olarak ve ücretsiz göndeririz. Talebin dayanaksız, aşırı veya tekrarlayıcı sayılması halinde makul ücret alma veya talebi reddetme hakkını saklı tutarız.
              Talebin dayanaksız, aşırı veya tekrarlayıcı sayılması halinde makul ücret alma veya talebi reddetme hakkını saklı tutarız.
            </p>
            <p>
              Kişisel veri talebi yapan kişi hakkında makul şüphe varsa
              Kişisel veri talebi yapan kişi hakkında makul şüphe varsa veri güvenliğini korumak için ek kimlik doğrulaması isteme hakkını saklı tutarız.
              veri güvenliğini korumak için ek kimlik doğrulaması isteme hakkını saklı tutarız.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
