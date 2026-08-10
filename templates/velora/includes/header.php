<?php require_once __DIR__ . '/config.php'; ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> home">
      <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
      <span class="logo-text"><?= e(SITE_NAME) ?></span>
    </a>

    <?php
    $home = page_url();
    $isHome = ($active_page ?? '') === 'home';
    $sec = static fn (string $hash): string => $isHome ? $hash : $home . $hash;
    ?>

    <nav class="nav-desktop" aria-label="Main navigation">
      <a href="<?= e($sec('#security')) ?>">Security</a>
      <a href="<?= e($sec('#reviews')) ?>">Reviews</a>
      <a href="faq.php" class="<?= ($active_page ?? '') === 'faq' ? 'is-active' : '' ?>">FAQ</a>
      <a href="product.php" class="<?= ($active_page ?? '') === 'product' ? 'is-active' : '' ?>">About</a>
      <a href="contacts.php" class="<?= ($active_page ?? '') === 'contacts' ? 'is-active' : '' ?>">Contact</a>
    </nav>

    <div class="header-actions">
      <button type="button" class="theme-toggle" id="themeToggle" aria-label="Switch theme">Dark</button>
      <a href="<?= e($sec('#signup')) ?>" class="btn btn-primary btn-sm">Start trading</a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-label="Open menu" aria-expanded="false">
        <span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="Mobile navigation" hidden>
    <a href="<?= e($sec('#security')) ?>">Security</a>
    <a href="<?= e($sec('#reviews')) ?>">Reviews</a>
    <a href="faq.php">FAQ</a>
    <a href="product.php">About</a>
    <a href="contacts.php">Contact</a>
    <a href="<?= e($sec('#signup')) ?>" class="btn btn-primary">Start trading</a>
  </nav>
</header>
