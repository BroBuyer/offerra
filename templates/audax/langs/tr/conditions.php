<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kullanım Koşulları | ' . SITE_NAME;
$page_description = 'Kullanım Koşulları — ' . SITE_NAME . ' platformu.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Kullanım Koşulları</h1>
            <p class="bold-title">1. Giriş</p>
            <p>1.1. Hizmetlerimizi kullanmak için bu koşulları kabul etmen gerekir.</p>
            <p>1.2. Bu koşullar hukuken bağlayıcı bir sözleşme oluşturur.</p>
            <p>1.3. Web sitesini kullanmaya devam etmen koşulları kabul ettiğin anlamına gelir.</p>
            <p>
              1.4. Soruların için bize şu adresten ulaşabilirsin:
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Kullanım hakkı</p>
            <p>2.1. Hizmetleri kullanmak için en az 18 yaşında olmalısın.</p>
            <p>2.1.1. Hizmetlerin yasal olduğu bir ülkede yaşıyor olmalısın.</p>
            <p>2.1.2. Yaptırım listesinde olmamalısın.</p>
            <p>2.1.3. Sözleşme yapma ehliyetine sahip olmalısın.</p>
            <p>2.2. Uygun olmayan kişilerin kullanımından sorumlu değiliz.</p>
            <p class="bold-title">3. Kullanıcı hesabı</p>
            <p>3.1. Hesabının güvenliğinden sen sorumlusun.</p>
            <p>3.2. Şifreni üçüncü taraflarla paylaşma.</p>
            <p class="bold-title">4. Yasak faaliyetler</p>
            <p>4.1. Hizmetlerin yasadışı amaçlarla kullanılmasına izin verilmez.</p>
            <p>4.1.1. Kara para aklama kesinlikle yasaktır.</p>
            <p>4.1.2. Dolandırıcılık yetkili makamlara bildirilir.</p>
            <p>4.1.3. Bot veya otomasyon yazılımı kullanmak yasaktır.</p>
            <p>4.1.4. Sistemi manipüle etme girişimleri incelenir.</p>
            <p>4.1.5. Yanlış bilgi yaymak yasaktır.</p>
            <p>4.1.6. Soruşturmaları engelleme girişimlerine izin verilmez.</p>
            <p>4.1.7. Diğer kullanıcılara tehdit yasaktır.</p>
            <p>4.1.8. Yasadışı faaliyetler yaptırıma tabi olabilir.</p>
            <p>4.1.9. Kuralları aşma girişimlerine izin verilmez.</p>
            <p>4.1.10. Sistemin kötüye kullanılması ciddiye alınır.</p>
            <p class="bold-title">5. Fikri mülkiyet</p>
            <p>5.1. Web sitesindeki tüm içerik fikri mülkiyetimizdir.</p>
            <p>5.2. Kullanıcılar web sitesi içeriği üzerinde hak kazanmaz.</p>
            <p>5.3. İçerik izinsiz kopyalanamaz.</p>
            <p>5.4. Üçüncü tarafların içeriği değiştirmesine izin verilmez.</p>
            <p class="bold-title">6. Sorumluluğun sınırlandırılması</p>
            <p>6.1. Hizmetleri kendi riskinle kullanırsın.</p>
            <p>6.2. Hizmetlerin kullanımından doğan zararlardan sorumlu değiliz.</p>
            <p>6.3. Web sitesinin kullanımından doğan zarar kullanıcının sorumluluğundadır.</p>
            <p>6.4. Web sitesinin kullanımından kaynaklanan zararlardan sorumluluk kabul etmeyiz.</p>
            <p>6.5. Teknik sorunlar bizim sorumluluğumuzda değildir.</p>
            <p class="bold-title">7. Bilgi</p>
            <p>7.1. Hizmetleri kullanarak seninle iletişime geçilmesini kabul edersin.</p>
            <p>7.2. Bilgiler gizli tutulur.</p>
            <p>7.3. Kayıt tutmanı öneririz.</p>
            <p class="bold-title">8. Bağlantılar ve ek kaynaklar</p>
            <p>8.1. Daha fazla bilgi için politikalarımıza bak.</p>
            <p>8.2. Dış bağlantılar onay anlamına gelmez.</p>
            <p>8.3. Kullanmadan önce kaynakları doğrulamanı öneririz.</p>
            <p class="bold-title">9. Genel hükümler</p>
            <p>9.1. Hizmetleri istediğimiz zaman değiştirme hakkını saklı tutarız.</p>
            <p>9.2. Koşullar her an değişebilir.</p>
            <p>9.3. Hizmetleri kullanarak bu koşulları kabul etmiş olursun.</p>
            <p>9.4. Sözlü anlaşmalar geçerli değildir.</p>
            <p>9.5. Kullanılmayan hak feragat edilmiş sayılmaz.</p>
            <p>
              9.6. Bir hüküm geçersiz sayılırsa diğer hükümler yürürlükte kalır.
            </p>
            <p>9.7. Hizmetler dış sağlayıcılar tarafından yönetilebilir.</p>
            <p>
              9.8. Bu koşullara <?= e(geo_in()) ?> hukuku uygulanır. Tüm uyuşmazlıklar
              <?= e(geo_in()) ?> yetkili mahkemesine sunulur.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
