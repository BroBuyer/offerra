<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platform pelaburan AI');
$page_description = 'Platform pelaburan mudah dikuasakan AI — pasaran yang jelas, keputusan berpandu dan pembukaan akaun pantas di ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Pengenalan">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Labur dengan kejelasan.<br><span class="text-accent">Biarkan AI memudahkannya.</span></h1>
        <p class="lead">
          Platform pelaburan moden yang menjelaskan pasaran dalam bahasa mudah, menonjolkan insight AI yang berguna, dan membantu anda membuat dagangan tanpa kekacauan.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Mula dari <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Lihat cara ia berfungsi</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Dibina untuk pemula</p>
        <h2>Tiga langkah. Kemudian anda sudah berdagang.</h2>
        <p class="lead">Tiada jargon terminal — hanya laluan jelas dari pendaftaran ke posisi pertama.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Buka akaun anda</h3>
          <p>Kongsi beberapa butiran. Pengesahan singkat dan berpandu.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Deposit dengan selamat</h3>
          <p>Deposit dari <?= MIN_DEPOSIT ?> <?= CURRENCY ?> dengan kaedah pembayaran yang dipercayai.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Berdagang dengan bantuan AI</h3>
          <p>Ikuti insight dalam bahasa mudah dan letakkan pesanan apabila anda bersedia.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI yang kekal berguna</p>
        <h2>Isyarat yang benar-benar anda fahami</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> menukar hingar pasaran kepada petunjuk pendek yang mudah dibaca — supaya anda kurang meneka dan lebih banyak memutuskan.
        </p>
        <ul class="feature-list">
          <li>Petunjuk beli / pegang / pantau yang jelas</li>
          <li>Peringatan risiko sebelum anda sahkan</li>
          <li>Antara muka yang kekal tenang di bawah tekanan</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Cuba platform</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Contoh insight">
        <p class="insight-panel__label">Insight langsung</p>
        <p class="insight-panel__title">BTC / USD · momentum stabil</p>
        <p class="insight-panel__body">
          Volatiliti semakin mereda. AI mencadangkan pantau sesi seterusnya sebelum menambah saiz — anda kekal mengawal setiap pesanan.
        </p>
        <div class="insight-panel__meta">
          <span>Keyakinan tinggi</span>
          <span>Dikemas kini sebentar tadi</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Mulakan</p>
        <h2>Cipta <?= e(SITE_NAME) ?> akaun anda</h2>
        <p class="lead lead-light">
          Sertai platform yang terasa premium tetapi kekal mudah — panduan AI disertakan dari hari pertama.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Buka dalam masa kurang 2 minit';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Infrastruktur dipercayai</p>
        <h2>Rakan kongsi infrastruktur</h2>
        <p class="lead">Pembayaran dan akses pasaran melalui penyedia yang mapan.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Soalan lazim</p>
        <h2>Jawapan pantas</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Adakah saya perlukan pengalaman dagangan?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Tidak. <?= e(SITE_NAME) ?> dibina untuk pelabur kali pertama — tip AI ditulis dalam bahasa mudah.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Apakah deposit minimum?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Anda boleh mula dari <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Yuran kekal kelihatan sebelum anda sahkan.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Adakah sokongan tersedia?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ya — pasukan kami tersedia sepanjang masa untuk membantu pembiayaan dan penyediaan akaun.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Baca soalan lazim penuh →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
