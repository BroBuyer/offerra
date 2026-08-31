<?php require_once __DIR__ . '/config.php'; ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> ホーム">
      <svg class="logo-mark" width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
        <rect width="28" height="28" rx="8" fill="currentColor"/>
        <path d="M8 18L14 8L20 18" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M10 16H18" stroke="#fff" stroke-width="2.2" stroke-linecap="round"/>
      </svg>
      <span class="logo-text"><?= e(SITE_NAME) ?></span>
    </a>

    <nav class="nav-desktop" aria-label="メインナビゲーション">
      <a href="<?= page_url() ?>" class="<?= $active_page === 'home' ? 'is-active' : '' ?>">ホーム</a>
      <a href="product.php" class="<?= $active_page === 'product' ? 'is-active' : '' ?>">製品</a>
      <a href="offer.php" class="<?= $active_page === 'offer' ? 'is-active' : '' ?>">オファー</a>
      <a href="contacts.php" class="<?= $active_page === 'contacts' ? 'is-active' : '' ?>">お問い合わせ</a>
      <a href="faq.php" class="<?= $active_page === 'faq' ? 'is-active' : '' ?>">FAQ</a>
    </nav>

    <div class="header-actions">
      <a href="sign.php" class="btn btn-primary btn-sm">今すぐ始める</a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-label="メニューを開く" aria-expanded="false">
        <span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="モバイルナビゲーション" hidden>
    <a href="<?= page_url() ?>">ホーム</a>
    <a href="product.php">製品</a>
    <a href="offer.php">オファー</a>
    <a href="contacts.php">お問い合わせ</a>
    <a href="faq.php">FAQ</a>
    <a href="sign.php" class="btn btn-primary">今すぐ始める</a>
  </nav>
</header>
