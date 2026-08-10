<?php require_once __DIR__ . '/config.php'; ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> hjem">
      <img class="logo-mark" src="<?= asset('static/img/logo.svg') ?>" width="28" height="28" alt="">
      <span class="logo-text"><?= e(SITE_NAME) ?></span>
    </a>

    <nav class="nav-desktop" aria-label="Hovednavigasjon">
      <a href="<?= page_url() ?>" class="<?= $active_page === 'home' ? 'is-active' : '' ?>">Hjem</a>
      <a href="product.php" class="<?= $active_page === 'product' ? 'is-active' : '' ?>">Plattform</a>
      <a href="offer.php" class="<?= $active_page === 'offer' ? 'is-active' : '' ?>">Priser</a>
      <a href="faq.php" class="<?= $active_page === 'faq' ? 'is-active' : '' ?>">FAQ</a>
      <a href="contacts.php" class="<?= $active_page === 'contacts' ? 'is-active' : '' ?>">Kontakt</a>
    </nav>

    <div class="header-actions">
      <a href="sign.php" class="btn btn-primary btn-sm">Åpne konto</a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-label="Åpne meny" aria-expanded="false">
        <span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="Mobilnavigasjon" hidden>
    <a href="<?= page_url() ?>">Hjem</a>
    <a href="product.php">Plattform</a>
    <a href="offer.php">Priser</a>
    <a href="faq.php">FAQ</a>
    <a href="contacts.php">Kontakt</a>
    <a href="sign.php" class="btn btn-primary">Åpne konto</a>
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
    <span class="tape-item"><strong>Markeder</strong> 24/7</span>
  </div>
</div>
