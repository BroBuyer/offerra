<?php require_once __DIR__ . '/config.php'; ?>
<a class="skip-link" href="#main">Hopp til innhold</a>
<header>
      <div class="container">
        <div class="header-wrap mob">
          <div class="logo">
            <a href="<?= page_url('index.php') ?>" class="logo-text"
              ><img src="<?= asset('static/images/logo.svg') ?>" width="32" height="32" alt="" /><?= e(SITE_NAME) ?></a
            >
          </div>

          <button type="button" class="hamburger" aria-label="Åpne meny" aria-expanded="false">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </button>
        </div>

        <div class="header-wrap desk">
          <div class="logo">
            <a href="<?= page_url('index.php') ?>" class="logo-text"
              ><img src="<?= asset('static/images/logo.svg') ?>" width="32" height="32" alt="" /><?= e(SITE_NAME) ?></a
            >
          </div>
          <nav class="menu" aria-label="Nettsted">
            <a href="<?= page_url('product.php') ?>">Produkt</a>
            <a href="<?= page_url('offer.php') ?>">Kampanje</a>
            <a href="<?= page_url('about.php') ?>">Team</a>
            <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
            <a href="<?= page_url('faq.php') ?>">FAQ</a>
          </nav>

          <div class="header-btn">
            <a href="<?= page_url('index.php') ?>#form" class="orange-btn scroll">Registrer deg</a>
          </div>
        </div>
      </div>
      <div class="mobile-menu__wrap" style="display: none">
        <nav class="menu" aria-label="Mobilmeny">
          <a href="<?= page_url('product.php') ?>">Produkt</a>
          <a href="<?= page_url('offer.php') ?>">Kampanje</a>
          <a href="<?= page_url('about.php') ?>">Team</a>
          <a href="<?= page_url('contacts.php') ?>">Kontakt</a>
          <a href="<?= page_url('faq.php') ?>">FAQ</a>
        </nav>
        <div class="header-btn__wrap">
          <a href="<?= page_url('index.php') ?>#form" class="orange-btn scroll">Registrer deg</a>
        </div>
      </div>
      <div
        class="tv-ticker-wrapper"
        data-chart-ticker
        data-tv-script="https://widgets.tradingview-widget.com/w/en/tv-ticker-tape.js"
        data-tv-symbols="BINANCE:BTCUSDT,BINANCE:ETHUSDT,BINANCE:XRPUSDT,BINANCE:SOLUSDT,BINANCE:BTCUSD,BINANCE:ETHUSD,KRAKEN:BTCEUR,OANDA:XAUUSD"
        data-tv-item-size="compact"
        data-tv-theme="light"
        data-tv-transparent="false"
        data-tv-hide-chart="false"
      >
        <div class="tv-ticker-host" data-chart-ticker-host aria-hidden="true"></div>
        <div class="tv-ticker-placeholder" aria-hidden="true">
          <span class="tv-ticker-spinner"></span>
          <span class="tv-ticker-loading-text">Laster…</span>
        </div>
        <div class="tv-ticker-blocker"></div>
      </div>
    </header>
