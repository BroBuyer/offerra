<?php require_once __DIR__ . '/config.php'; ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> home">
      <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
      <span class="logo-text"><?= e(SITE_NAME) ?></span>
    </a>

    <nav class="nav-desktop" aria-label="Main navigation">
      <a href="<?= page_url() ?>" class="<?= $active_page === 'home' ? 'is-active' : '' ?>">Home</a>
      <a href="product.php" class="<?= $active_page === 'product' ? 'is-active' : '' ?>">Platform</a>
      <a href="offer.php" class="<?= $active_page === 'offer' ? 'is-active' : '' ?>">Pricing</a>
      <a href="faq.php" class="<?= $active_page === 'faq' ? 'is-active' : '' ?>">FAQ</a>
      <a href="contacts.php" class="<?= $active_page === 'contacts' ? 'is-active' : '' ?>">Contact</a>
    </nav>

    <div class="header-actions">
      <a href="sign.php" class="btn btn-primary btn-sm">Open account</a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-label="Open menu" aria-expanded="false">
        <span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="Mobile navigation" hidden>
    <a href="<?= page_url() ?>">Home</a>
    <a href="product.php">Platform</a>
    <a href="offer.php">Pricing</a>
    <a href="faq.php">FAQ</a>
    <a href="contacts.php">Contact</a>
    <a href="sign.php" class="btn btn-primary">Open account</a>
  </nav>
</header>
