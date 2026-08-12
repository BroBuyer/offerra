<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('YZ ve gerçek zamanlı yürütme | Resmi site');
$page_description = SITE_NAME . ' — piyasaları analiz eden ve emirleri gerçek zamanlı yürüten, yeni bir gelir kaynağı oluşturmak için yanınızda kişisel bir analistle YZ teknolojisi.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">İçeriğe atla</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Ana">
 <a href="#platform">Ürün</a>
 <a href="#how">Nasıl çalışır.</a>
 <a href="#markets">Gerçek zamanlı piyasalar</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Hesabınızı açın</a>
 <button class="nav-toggle" aria-label="Menüyü aç" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">Gerçek zamanlı YZ + insan analizi</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — şimdi yatırım yapın, sermayenizin büyümesini izleyin</h1>
 <p class="hero-sub">Bir yapay zeka motoru piyasaları tarar ve emirleri saniyenin kesirlerinde yürütür; kişisel analistiniz her kararı profilinize uyarlar. Deneyim gerekmez — baştan sona rehberlik edilirsiniz.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Düzenlemeye tabi</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Ayrılmış fonlar</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 müşteri</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> değerlendirme</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>SSL ile korunur</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>7/24 destek</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Hızlı yürütme</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Şimdi başlayın — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> dk.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Hesabınızı açın</h2>
 <p class="sub">Birkaç dakikada başlayın.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Başlamak istiyorum';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Temel göstergeler">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Aktif kullanıcılar</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>İşlem hacmi</span></div>
 <div class="stat"><b>99,1%</b><span>Sinyal kullanılabilirliği</span></div>
 <div class="stat"><b>24/7</b><span>Destek</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">İçeride <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Hesabınızı gerçek zamanlı takip edin</h2>
 <p class="lede">Analistinizin yürüttüğü her emir burada kaydedilir — girişler, çıkışlar ve her çift için doğrulanmış sonuçlar, canlı.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Her cihazda gerçek zamanlı mum grafikleri ve derinlik</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tek dokunuşla emir gönderimi ve anında onay</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sizi takip eden izleme listeleri ve fiyat uyarıları</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Şimdi başla</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — gerçek zamanlı kripto grafiklerle mobil işlem</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platform</span><h2 id="features-title">İhtiyacınız olan her şey, tek hızlı platformda.</h2><p class="lede">Grafik izlemeye, emir zamanlamaya gerek yok. <?= e(SITE_NAME) ?> motoru kripto borsalarında, küresel hisse API’lerinde ve başlıca forex çiftlerinde gerçek zamanlı emir defterlerini izler — modeller avantajlı bir kurulum bulduğu anda emirleri tetikler.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Bağlı her piyasada saniyenin kesirlerinde yürütme</h3><p><?= e(SITE_NAME) ?> desteklenen her borsayla düşük gecikmeli API bağlantıları tutar. Model sinyal verdiğinde emir bir sonraki tick’ten önce yönlendirilir, yürütülür ve panonuza kaydedilir.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Tüm seanslarda günde 24 saat aktif</h3><p>Kripto piyasası asla uyumaz — <?= e(SITE_NAME) ?> motoru da. Hafta sonları ve tatillerde çiftleri taramaya devam eder; böylece bir pencereyi kaçırmazsınız.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Çoklu para biriminde raporlar</h3><p>Her bakiye, her emir, her çekim yerel para biriminizde görünür. Gizli dönüşüm adımı yok.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Ayrılmış sermaye</h3><p>Fonlarınız kendi hesabınızda kalır. <?= e(SITE_NAME) ?> asla saklama yapmaz — motor yalnızca emir yönlendirme iznine sahiptir.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Banka düzeyinde güvenlik</h3><p>Platform genelinde TLS şifreleme, varsayılan iki faktörlü kimlik doğrulama ve üç aylık üçüncü taraf altyapı denetimleri. İşlem makbuzları blockchain’de kaydedilir.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Üç varlık sınıfı, bir platform</h3><p>Çoğu perakende platform tek piyasayla sınırlıdır. <?= e(SITE_NAME) ?> aynı panelde kripto, borsada işlem gören hisseler ve başlıca forex çiftlerini yönetir.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Her pozisyonda önceden ayarlanmış risk limitleri</h3><p>Stop-loss, maksimum drawdown ve sermaye tahsis limitleri varlık sınıfına göre yapılandırılır. Motor limiti aşan her işlemi otomatik kapatır ve olay denetim geçmişinize kaydedilir.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Gerçek zamanlı piyasalar</span>
 <h2 id="markets-title">Bitcoin, Ethereum ve daha fazlasıyla işlem yapın</h2>
 <p class="lede">Gerçek zamanlı fiyatlar, gelişmiş göstergeler ve sizi ilgilendiren piyasalara profesyonel bakış.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Piyasa erişimi istiyorum</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Piyasalar</span><span class="mkt-live"><i></i>Canlı</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Nasıl çalışır</span><h2 id="how-title">Nasıl çalışır.</h2><p class="lede">En son teknoloji ve gerçek bir insan analist, gerçek zamanlı birlikte çalışarak yeni bir gelir kaynağı oluşturmanıza yardımcı olur — her adımda rehberlikle.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Hesabınızı oluşturun</h3><p>Yalnızca e-posta ile dakikalar içinde kaydolun.</p></div>
 <div class="step"><div class="n">2</div><h3>E-postanızı onaylayın</h3><p>Hesabınızı korumak için adresinizi doğrulayın.</p></div>
 <div class="step"><div class="n">3</div><h3>Hesabınıza para yatırın</h3><p>Şu tutardan fon ekleyin: <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> kendi yönteminizle.</p></div>
 <div class="step"><div class="n">4</div><h3>Stratejinizi belirleyin</h3><p>Hedeflerinizi seçin; analistiniz planı kişiselleştirir.</p></div>
 <div class="step"><div class="n">5</div><h3>İşleme başlayın</h3><p>Rehberli sinyalleri izleyin ve kendi temponuzda büyüyün.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Yatırımlar</span><h2 id="payment-title">Zaten bildiğiniz yöntemlerle yatırın</h2><p class="lede">Güvenli, tanıdık kanallar üzerinden yatırın ve çekin — gizli ücret yok.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Banka havalesi</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Üyeler ne diyor</span><h2 id="reviews-title">Yatırımcılarımız ne diyor</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>“Analistim her şeyi net açıkladı. Hedeflerimi bir kez belirledim ve şimdi sermayemin nasıl büyüdüğünü tam olarak görüyorum — her harekette endişelenmeden.”</p><div class="who"><div class="ini">A</div><div><b>Ayşe Yılmaz</b><span>İstanbul</span></div></div></div>
 <div class="card"><p>“Daha önce hiç yatırım yapmamıştım — analistim stratejiyi yönetti ve her adımı açıkladı. Boş vaat yok, baskı yok ve çekimler beklendiği gibi geliyor.”</p><div class="who"><div class="ini">M</div><div><b>Mehmet Kaya</b><span>Ankara</span></div></div></div>
 <div class="card"><p>“Denemek için küçük başladım. Şeffaflık ve destek devam etme güveni verdi.”</p><div class="who"><div class="ini">E</div><div><b>Elif Demir</b><span>İzmir</span></div></div></div>
 <div class="card"><p>“Analizler bana geliyor — dakikalar içinde onaylıyor veya ayarlıyorum. İşimi bozmadan rutinime mükemmel uyuyor.”</p><div class="who"><div class="ini">A</div><div><b>Ahmet Şahin</b><span>Bursa</span></div></div></div>
 <div class="card"><p>“Beni ikna eden şeffaflıktı: her karar açıklanıyor ve herhangi bir şey olmadan önce gerekçeyi görüyorum.”</p><div class="who"><div class="ini">Z</div><div><b>Zeynep Çelik</b><span>Antalya</span></div></div></div>
 <div class="card"><p>“Destek gerçek ve her zaman erişilebilir. İlk analizim uygulamalıydı ve platform o zamandan beri istikrarlı ve öngörülebilir.”</p><div class="who"><div class="ini">E</div><div><b>Emre Yıldız</b><span>Adana</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platform</span><h2 id="capabilities-title">Temel özellikler, özetle</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">YZ motoru</div>
 <div class="spec-v">Makine öğrenmesiyle gelişmiş piyasa analizi</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Yatırım yöntemleri</div>
 <div class="spec-v">Kredi kartı, banka havalesi, PayPal, dijital cüzdanlar</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Çok platformlu erişim</div>
 <div class="spec-v">Web, tablet ve mobil — tamamen duyarlı</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Sinyal doğruluğu</div>
 <div class="spec-v">Desteklenen YZ stratejilerinde %85’e kadar</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Piyasalar</div>
 <div class="spec-v">Kripto paralar, forex, hisse senetleri ve emtialar</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Kayıt</div>
 <div class="spec-v">Rehberli doğrulama ile hızlı hesap açılışı</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Destek</div>
 <div class="spec-v">Günün her saati profesyonel destek — <a href="<?= page_url('contacts.php') ?>">Mesaj gönder</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Sorular</span><h2 id="faq-title">Sıkça sorulan sorular.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Minimum yatırım nedir?</summary><p>Hesabınızı minimum yatırımdan açın ve finanse edin. Planınız ilerledikçe zamanla bakiye ekleyebilirsiniz.</p></details>
 <details><summary>Çekimler nasıl çalışır?</summary><p>Panelden istediğiniz zaman çekim talep edin. Fonlar standart işlem sürelerine uyarak seçtiğiniz ödeme yöntemine döner.</p></details>
 <details><summary>Param güvende mi?</summary><p>Hesaplar sektör standardı güvenlik ve sıkı doğrulama ile korunur. Her yatırımda olduğu gibi sermayeniz risk altındadır ve değerler düşebilir veya yükselebilir.</p></details>
 <details><summary>Ne kadar hızlı başlayabilirim?</summary><p>Çoğu üye kaydı birkaç dakikada tamamlar. İlk yatırımınız onaylandığında bir plan hemen etkinleşir.</p></details>
 <details><summary>Gizli ücretler var mı?</summary><p>Maliyetler taahhüt etmeden önce şeffaf gösterilir. Planınıza neyin uygulandığını her zaman bilirsiniz — sürpriz yok.</p></details>
 <details><summary>Kayıt için minimum yaş nedir?</summary><p>Hesap açmak ve yatırım yapmak için en az 18 yaşında olmalısınız. Yaş ve kimliği doğrulamak için doğrulama gerekebilir.</p></details>
 <details><summary>Hangi ödeme yöntemleri desteklenir?</summary><p>Banka ve kredi kartları, banka havalesi, seçili e-cüzdanlar ve kripto paralar gibi yaygın yöntemler desteklenir. Tam seçenekler yatırım adımında görünür.</p></details>
 <details><summary>Müşteri desteği ne zaman kullanılabilir?</summary><p>Destek ekibimiz Pazartesi–Cuma 09:00–18:00 çalışır ve her talebe bir iş günü içinde yanıt vermeyi taahhüt eder.</p></details>
 <details><summary>Vergiler nasıl ele alınır?</summary><p>Yatırım kazançları üzerindeki vergiler ülkenizin kurallarına bağlıdır ve sizin sorumluluğunuzdadır. Kayıt tutmanızı ve nitelikli bir vergi danışmanına danışmanızı öneririz.</p></details>
 <details><summary>KYC nedir ve neden zorunludur?</summary><p>KYC (Know Your Customer) standart bir kimlik kontrolüdür. Hesapları güvende tutar ve her yatırım hesabı açılışının bir parçasıdır.</p></details>
 <details><summary>Deneyime ihtiyacım var mı?</summary><p>Hayır. Her üye her adımda rehberlik eden kişisel bir finans analisti alır; önceden piyasa bilgisi gerekmez.</p></details>
 <details><summary>Yatırımlarım kim yönetir?</summary><p>YZ araçlarıyla desteklenen, hedefleriniz ve risk düzeyiniz etrafında çalışan özel bir finans analisti. Analist mesleki uzmanlığı teknolojiyle birleştirir — kararlar insan kalır.</p></details>
 <details><summary>Platform düzenlemeye tabi mi?</summary><p>Evet — ulusal finansal ve siber güvenlik standartlarını karşılar; hesap koruması ve sıkı doğrulama yerleşiktir.</p></details>
 <details><summary>Daha sonra fon ekleyebilir miyim?</summary><p>Evet. Hesabınızı istediğiniz zaman finanse edebilir ve hedefleriniz geliştikçe analistinizle planınızı ayarlayabilirsiniz.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">GÜVENİLİR</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> İncelemeler</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> inceleme · Dayanak <b style="color:var(--text,#fff)">2.334</b> değerlendirme</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Şimdi başlayın</span>
 <h2 id="signup-title" class="cta-h">Hesabınızı açın.</h2>
 <p class="lede">Size nasıl ulaşacağımızı söyleyin; bir uzman ilk adımda yardımcı olsun.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Hesabınızı açın</h3>
 <p class="sub">Birkaç dakikada başlayın.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Başlamak istiyorum';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>YZ hızı, insan kararı. Sermaye risk altında — sorumlu yatırım yapın.</p>
 </div>
 <div><h4>Ürün</h4><div class="foot-links">
 <a href="#platform">Hesabınızı gerçek zamanlı takip edin</a><a href="#markets">Gerçek zamanlı piyasalar</a><a href="#how">Nasıl çalışır.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Şirket</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Hakkımızda</a><a href="<?= page_url('offer.php') ?>">Fiyatlar</a><a href="<?= page_url('contacts.php') ?>">İletişim</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Gizlilik</a><a href="<?= page_url('conditions.php') ?>">Şartlar</a><a href="<?= page_url('conditions.php') ?>">Risk açıklaması</a><a href="<?= page_url('contacts.php') ?>">Kötüye kullanımı bildir</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Tüm hakları saklıdır. Yatırım, sermaye kaybı olasılığı dahil risk içerir. · Yatırım, yatırılan sermayenin bir kısmının veya tamamının kaybı olasılığı dahil risk içerir. Yatırımların değeri artabilir veya azalabilir ve başlangıçta koyduğunuzdan daha azını geri alabilirsiniz. Kaybetmeyi göze alamayacağınız parayı yatırmayın.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('tr-TR',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' ₺';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Lütfen bekleyin\u2026";
 var MSG_ERR = "Bilgileriniz \u015fu anda g\u00f6nderilemedi. L\u00fctfen tekrar deneyin.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'tr',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Deneyiminizi iyileştirmek için çerez kullanıyoruz.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Anladım</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
