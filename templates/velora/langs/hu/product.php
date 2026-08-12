<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('A platformról');
$page_description = 'Nézze meg, hogyan tartja átláthatóvá a kereskedést a ' . SITE_NAME . ' — AI betekintésekkel, alacsony késleltetésű feedekkel és nyugodt munkaterülettel.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Rólunk</p>
      <h1>Intézményi AI architektúra, közelítve hozzáférhetővé</h1>
      <p class="lead">Fókuszált munkaterület kriptó és többeszközös kereskedéshez — AI vezetésével, tisztaságra tervezve.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI, amely hasznos marad</h2>
        <p class="lead">
          A betekintések akkor jelennek meg, amikor segítenek — röviden, olvashatóan és könnyen alkalmazhatóan.
          Minden ügyletet Ön erősít meg.
        </p>
        <ul class="feature-bullets">
          <li>Piaci összefoglalók érthető nyelven</li>
          <li>Javasolt figyelőlisták kezdőknek</li>
          <li>Emlékeztetők pozícióméretezés előtt</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Fiók megnyitása</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
