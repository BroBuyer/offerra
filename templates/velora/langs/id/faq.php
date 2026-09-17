<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Jawapan tentang pembiayaan, keamanan, cerapan AI dan cara bermula di ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Pertanyaan umum</h1>
      <p class="lead">Jawapan terus tentang pendaftaran, keamanan dan bagaimana AI membantu di platform.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Bagaimana saya bermula?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Buat akun, lengkapkan verifikasi singkat, dan deposit dari <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Carta, alat dan pendaftaran berpandu dibuka serta-merta selepas itu. Anda juga bisa bersembang dengan Lisa di sudut.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Bagaimana AI membantu saya berdagang?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> memaparkan cerapan pasar singkat dalam bahasa mudah. Anda sentiasa memutuskan sama ada untuk bertindak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Bagaimana akun saya dilindungi?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sambungan menggunakan penyulitan SSL. Kami tidak pernah meminta kebenaran yang tidak perlu — pastikan log masuk anda pribadi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Adakah terdapat yuran tersembunyi?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yuran dipaparkan sebelum anda mengesahkan. Tiada caj mengejut pada deposit atau pengeluaran ketika terma dipatuhi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Siapakah Lisa dalam widget sembang?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa ialah pembantu pendaftaran kami. Dia membimbing anda melalui kuiz singkat dan membantu anda mengkirim permintaan akun yang selamat.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
