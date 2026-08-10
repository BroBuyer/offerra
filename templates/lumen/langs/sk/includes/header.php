<?php require_once __DIR__ . '/config.php'; ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> domov">
      <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
      <span class="logo-text"><?= e(SITE_NAME) ?></span>
    </a>

    <nav class="nav-desktop" aria-label="Hlavná navigácia">
      <a href="<?= page_url() ?>" class="<?= $active_page === 'home' ? 'is-active' : '' ?>">Domov</a>
      <a href="product.php" class="<?= $active_page === 'product' ? 'is-active' : '' ?>">Platforma</a>
      <a href="offer.php" class="<?= $active_page === 'offer' ? 'is-active' : '' ?>">Cenník</a>
      <a href="faq.php" class="<?= $active_page === 'faq' ? 'is-active' : '' ?>">FAQ</a>
      <a href="contacts.php" class="<?= $active_page === 'contacts' ? 'is-active' : '' ?>">Kontakt</a>
    </nav>

    <div class="header-actions">
      <a href="sign.php" class="btn btn-primary btn-sm">Otvoriť účet</a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-label="Otvoriť menu" aria-expanded="false">
        <span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="Mobilná navigácia" hidden>
    <a href="<?= page_url() ?>">Domov</a>
    <a href="product.php">Platforma</a>
    <a href="offer.php">Cenník</a>
    <a href="faq.php">FAQ</a>
    <a href="contacts.php">Kontakt</a>
    <a href="sign.php" class="btn btn-primary">Otvoriť účet</a>
  </nav>
</header>

<div class="market-tape" aria-hidden="true">
  <div class="container market-tape-inner">
    <span class="tape-item"><strong>BTC</strong> <span data-price="btc">—</span> <span class="tape-up" data-change="btc">—</span></span>
    <span class="tape-item"><strong>ETH</strong> <span data-price="eth">—</span> <span class="tape-up" data-change="eth">—</span></span>
    <span class="tape-item"><strong>SOL</strong> <span data-price="sol">—</span> <span class="tape-down" data-change="sol">—</span></span>
    <span class="tape-item"><strong>XRP</strong> <span data-price="xrp">—</span> <span class="tape-up" data-change="xrp">—</span></span>
    <span class="tape-item"><strong>EUR/USD</strong> <span class="tape-up">+0.12%</span></span>
    <span class="tape-item"><strong>GBP/USD</strong> <span class="tape-down">-0.08%</span></span>
    <span class="tape-item"><strong>Trhy</strong> 24/7</span>
  </div>
</div>
