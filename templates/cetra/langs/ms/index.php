<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('AI dan pelaksanaan masa nyata | Laman rasmi');
$page_description = SITE_NAME . ' — teknologi AI yang menganalisis pasaran dan melaksanakan pesanan secara masa nyata, dengan penganalisis peribadi di sisi anda untuk membina sumber pendapatan baharu.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Langkau ke kandungan</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Utama">
 <a href="#platform">Produk</a>
 <a href="#how">Cara ia berfungsi.</a>
 <a href="#markets">Pasaran masa nyata</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Buka akaun anda</a>
 <button class="nav-toggle" aria-label="Buka menu" aria-expanded="false" aria-controls="navLinks" type="button">
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
 <span class="eyebrow">AI masa nyata + analisis manusia</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — labur sekarang, lihat modal anda berkembang</h1>
 <p class="hero-sub">Enjin kecerdasan buatan mengimbas pasaran dan melaksanakan pesanan dalam pecahan saat, manakala penganalisis peribadi anda menyesuaikan setiap keputusan dengan profil anda. Tiada pengalaman diperlukan — anda dibimbing dari awal hingga akhir.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Dikawal selia</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Dana terasing</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9,600 pelanggan</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> penilaian</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Dilindungi oleh SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Sokongan 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Pelaksanaan pantas</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Mula sekarang — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> min.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Buka akaun anda</h2>
 <p class="sub">Mulakan dalam beberapa minit.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Saya mahu mula';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Penunjuk utama">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Pengguna aktif</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Volum dagangan</span></div>
 <div class="stat"><b>99,1%</b><span>Ketersediaan isyarat</span></div>
 <div class="stat"><b>24/7</b><span>Sokongan</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Di dalam <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Ikuti akaun anda secara masa nyata</h2>
 <p class="lede">Setiap pesanan yang dilaksanakan oleh penganalisis anda direkodkan di sini — kemasukan, keluar dan hasil yang disahkan pada setiap pasangan, disiarkan secara langsung.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Carta candlestick dan kedalaman secara masa nyata, pada mana-mana peranti</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Penghantaran pesanan dengan satu ketikan dan pengesahan serta-merta</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Senarai pantau dan amaran harga yang mengikuti anda</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Mula sekarang</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — dagangan mudah alih dengan carta kripto masa nyata</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platform</span><h2 id="features-title">Semua yang anda perlukan, dalam satu platform yang pantas.</h2><p class="lede">Tiada carta untuk dipantau, tiada pesanan untuk dilitar masa. Enjin <?= e(SITE_NAME) ?> memantau buku pesanan masa nyata di bursa kripto, API ekuiti global dan pasangan forex utama — dan menghantar pesanan pada saat model menemui tetapan yang menguntungkan.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Pelaksanaan dalam pecahan saat di setiap venue yang disambungkan</h3><p><?= e(SITE_NAME) ?> mengekalkan sambungan API berkelewatan rendah dengan setiap bursa yang disokong. Apabila model menghantar isyarat, pesanan dihala, dilaksanakan dan direkodkan pada papan pemuka anda sebelum tick seterusnya.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Aktif 24 jam sehari, merentasi semua sesi</h3><p>Pasaran kripto tidak pernah tidur, dan enjin <?= e(SITE_NAME) ?> juga tidak. Ia terus mengimbas pasangan sepanjang hujung minggu dan cuti supaya anda tidak terlepas sebarang peluang.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Laporan berbilang mata wang</h3><p>Setiap baki, setiap pesanan, setiap pengeluaran dipaparkan dalam mata wang tempatan anda. Tiada langkah penukaran tersembunyi.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Modal terasing</h3><p>Dana anda kekal dalam akaun anda sendiri. <?= e(SITE_NAME) ?> tidak pernah mengambil jagaan — enjin hanya mempunyai kebenaran untuk menghala pesanan.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Keselamatan tahap bank</h3><p>Penyulitan TLS merentasi platform, pengesahan dua faktor secara lalai dan audit infrastruktur pihak ketiga setiap suku tahun. Resit dagangan direkodkan di blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Tiga kelas aset, satu platform</h3><p>Kebanyakan platform runcit terhad kepada satu pasaran. <?= e(SITE_NAME) ?> mengendalikan kripto, ekuiti tersenarai dan pasangan forex utama dalam papan pemuka yang sama.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Had risiko praset pada setiap kedudukan</h3><p>Stop-loss, drawdown maksimum dan had peruntukan modal dikonfigurasi mengikut kelas aset. Enjin secara automatik keluar daripada sebarang dagangan yang melepasi had, dan peristiwa itu direkodkan dalam sejarah audit anda.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Pasaran masa nyata</span>
 <h2 id="markets-title">Dagangkan Bitcoin, Ethereum dan banyak lagi</h2>
 <p class="lede">Harga masa nyata, penunjuk lanjutan dan pandangan profesional tentang pasaran yang penting kepada anda.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Saya mahu akses pasaran</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Pasaran</span><span class="mkt-live"><i></i>Langsung</span></div>
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
 <div class="sec-head"><span class="eyebrow">Cara ia berfungsi</span><h2 id="how-title">Cara ia berfungsi.</h2><p class="lede">Teknologi termaju dan penganalisis manusia sebenar, bekerjasama secara masa nyata, untuk membantu anda membina sumber pendapatan baharu — dengan bimbingan di setiap langkah.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Cipta akaun anda</h3><p>Daftar dalam beberapa minit menggunakan e-mel anda sahaja.</p></div>
 <div class="step"><div class="n">2</div><h3>Sahkan e-mel anda</h3><p>Sahkan alamat anda untuk melindungi akaun anda.</p></div>
 <div class="step"><div class="n">3</div><h3>Deposit ke dalam akaun anda</h3><p>Tambah dana daripada <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> mengikut cara anda.</p></div>
 <div class="step"><div class="n">4</div><h3>Tetapkan strategi anda</h3><p>Pilih matlamat anda; penganalisis anda memperibadikan rancangan itu.</p></div>
 <div class="step"><div class="n">5</div><h3>Mula berdagang</h3><p>Ikuti isyarat berpandu dan berkembang pada kadar anda sendiri.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Deposit</span><h2 id="payment-title">Deposit dengan kaedah yang sudah anda kenali</h2><p class="lede">Deposit dan keluarkan melalui saluran selamat yang biasa — tanpa yuran tersembunyi.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Pindahan bank</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Apa kata ahli</span><h2 id="reviews-title">Apa kata pelabur kami</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>“Penganalisis saya menjelaskan semuanya dengan jelas. Saya menetapkan matlamat sekali sahaja, dan kini saya dapat melihat dengan tepat bagaimana modal saya berkembang — tanpa risau tentang setiap pergerakan.”</p><div class="who"><div class="ini">C</div><div><b>Emma Clarke</b><span>London</span></div></div></div>
 <div class="card"><p>“Saya tidak pernah melabur sebelum ini — penganalisis saya menguruskan strategi dan menjelaskan setiap langkah. Tiada janji kosong, tiada tekanan, dan pengeluaran tiba apabila dijangka.”</p><div class="who"><div class="ini">F</div><div><b>James Wilson</b><span>Manchester</span></div></div></div>
 <div class="card"><p>“Saya bermula dengan jumlah kecil untuk mencuba. Ketelusan dan sokongan memberi saya keyakinan untuk terus membina daripada situ.”</p><div class="who"><div class="ini">B</div><div><b>Sophie Hughes</b><span>Birmingham</span></div></div></div>
 <div class="card"><p>“Analisis sampai kepada saya — saya luluskan atau laraskan dalam beberapa minit. Ia sesuai sepenuhnya dengan rutin saya tanpa mengganggu kerja.”</p><div class="who"><div class="ini">L</div><div><b>Oliver Bennett</b><span>Bristol</span></div></div></div>
 <div class="card"><p>“Apa yang meyakinkan saya ialah ketelusan: setiap keputusan dijelaskan, dan saya melihat rasionalnya sebelum apa-apa berlaku.”</p><div class="who"><div class="ini">G</div><div><b>Charlotte Reid</b><span>Edinburgh</span></div></div></div>
 <div class="card"><p>“Sokongan adalah tulus dan sentiasa tersedia. Analisis pertama saya dilakukan secara praktikal, dan platform ini kekal kukuh dan boleh dijangka sejak itu.”</p><div class="who"><div class="ini">R</div><div><b>William Hayes</b><span>Leeds</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Platform</span><h2 id="capabilities-title">Ciri utama, secara ringkas</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Enjin AI</div>
 <div class="spec-v">Analisis pasaran lanjutan dengan pembelajaran mesin</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Kaedah deposit</div>
 <div class="spec-v">Kad kredit, pindahan bank, PayPal, dompet digital</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Akses berbilang platform</div>
 <div class="spec-v">Web, tablet dan mudah alih — sepenuhnya responsif</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Ketepatan isyarat</div>
 <div class="spec-v">Sehingga 85% pada strategi AI yang disokong</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Pasaran</div>
 <div class="spec-v">Mata wang kripto, forex, saham dan komoditi</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Pendaftaran</div>
 <div class="spec-v">Pembukaan akaun pantas dengan pengesahan berpandu</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Sokongan</div>
 <div class="spec-v">Sokongan profesional sepanjang masa — <a href="<?= page_url('contacts.php') ?>">Hantar mesej</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Soalan</span><h2 id="faq-title">Soalan lazim.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Berapakah deposit minimum?</summary><p>Buka dan biayai akaun anda daripada deposit minimum. Anda boleh menambah baki dari semasa ke semasa mengikut kemajuan rancangan anda.</p></details>
 <details><summary>Bagaimana pengeluaran berfungsi?</summary><p>Minta pengeluaran pada bila-bila masa daripada papan pemuka. Dana dikembalikan kepada kaedah pembayaran yang anda pilih, tertakluk kepada masa pemprosesan standard.</p></details>
 <details><summary>Adakah wang saya selamat?</summary><p>Akaun dilindungi dengan keselamatan piawaian industri dan pengesahan yang teliti. Seperti mana-mana pelaburan, modal anda berisiko dan nilai boleh jatuh serta naik.</p></details>
 <details><summary>Berapa pantas saya boleh mula?</summary><p>Kebanyakan ahli menyelesaikan pendaftaran dalam beberapa minit. Setelah deposit pertama anda disahkan, rancangan diaktifkan dengan segera.</p></details>
 <details><summary>Adakah yuran tersembunyi?</summary><p>Kos ditunjukkan secara telus sebelum anda komited. Anda sentiasa akan tahu dengan tepat apa yang terpakai pada rancangan anda — tiada caj mengejut.</p></details>
 <details><summary>Berapakah umur minimum untuk mendaftar?</summary><p>Anda mestilah sekurang-kurangnya 18 tahun untuk membuka akaun dan melabur. Pengesahan mungkin diperlukan untuk mengesahkan umur dan identiti anda.</p></details>
 <details><summary>Kaedah pembayaran manakah yang disokong?</summary><p>Kaedah biasa seperti kad debit dan kredit, pindahan bank, e-wallet terpilih dan mata wang kripto disokong. Pilihan tepat dipaparkan pada langkah deposit.</p></details>
 <details><summary>Bila sokongan pelanggan tersedia?</summary><p>Pasukan sokongan kami beroperasi Isnin hingga Jumaat, 9 pagi hingga 6 petang, dan komited untuk menjawab setiap permintaan dalam satu hari bekerja.</p></details>
 <details><summary>Bagaimana cukai dikendalikan?</summary><p>Cukai ke atas keuntungan pelaburan bergantung pada peraturan negara anda dan menjadi tanggungjawab anda. Kami mengesyorkan menyimpan rekod dan berunding dengan penasihat cukai yang berkelayakan.</p></details>
 <details><summary>Apakah KYC dan mengapa ia diperlukan?</summary><p>KYC (Kenali Pelanggan Anda) ialah semakan identiti piawai. Ia mengekalkan akaun selamat dan merupakan sebahagian daripada pembukaan mana-mana akaun pelaburan.</p></details>
 <details><summary>Adakah saya perlukan pengalaman?</summary><p>Tidak. Setiap ahli mendapat penganalisis kewangan peribadi yang membimbing mereka di setiap langkah, jadi pengetahuan pasaran terdahulu tidak diperlukan.</p></details>
 <details><summary>Siapa yang menguruskan pelaburan saya?</summary><p>Penganalisis kewangan berdedikasi, disokong oleh alatan AI, bekerja mengikut matlamat dan tahap risiko anda. Penganalisis menggabungkan kepakaran profesional dengan teknologi — keputusan kekal manusia.</p></details>
 <details><summary>Adakah platform ini dikawal selia?</summary><p>Ya — ia memenuhi piawaian kewangan dan keselamatan siber kebangsaan, dengan perlindungan akaun dan pengesahan teliti terbina dalam.</p></details>
 <details><summary>Bolehkah saya menambah dana kemudian?</summary><p>Ya. Anda boleh membiayai akaun anda pada bila-bila masa dan menyesuaikan rancangan anda dengan penganalisis anda mengikut perkembangan matlamat anda.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">DIPERCAYAI</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Ulasan</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> ulasan · Berdasarkan <b style="color:var(--text,#fff)">2.334</b> penilaian</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Mula sekarang</span>
 <h2 id="signup-title" class="cta-h">Buka akaun anda.</h2>
 <p class="lede">Beritahu kami cara menghubungi anda dan seorang pakar akan membantu anda mengambil langkah pertama.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Buka akaun anda</h3>
 <p class="sub">Mulakan dalam beberapa minit.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Saya mahu mula';
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
 <p>Kelajuan AI, keputusan manusia. Modal berisiko — labur dengan bertanggungjawab.</p>
 </div>
 <div><h4>Produk</h4><div class="foot-links">
 <a href="#platform">Ikuti akaun anda secara masa nyata</a><a href="#markets">Pasaran masa nyata</a><a href="#how">Cara ia berfungsi.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Syarikat</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Tentang</a><a href="<?= page_url('offer.php') ?>">Harga</a><a href="<?= page_url('contacts.php') ?>">Hubungi</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privasi</a><a href="<?= page_url('conditions.php') ?>">Terma</a><a href="<?= page_url('conditions.php') ?>">Pendedahan risiko</a><a href="<?= page_url('contacts.php') ?>">Laporkan penyalahgunaan</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Hak cipta terpelihara. Pelaburan melibatkan risiko, termasuk kemungkinan kehilangan modal. · Pelaburan melibatkan risiko, termasuk kemungkinan kehilangan sebahagian atau semua modal yang dilaburkan. Nilai pelaburan boleh naik atau turun, dan anda mungkin menerima kembali kurang daripada yang anda masukkan pada asalnya. Jangan laburkan wang yang anda tidak mampu rugi.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return n.toLocaleString('ms-MY',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)})+' RM';}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Sila tunggu\u2026";
 var MSG_ERR = "Kami tidak dapat menghantar butiran anda sekarang. Sila cuba lagi.";
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
 initialCountry: (hid && hid.value) || 'my',
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
<span style="flex:1;min-width:200px">Kami menggunakan kuki untuk meningkatkan pengalaman anda.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Faham</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
