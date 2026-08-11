<?php require_once __DIR__ . '/config.php'; ?>
<header class="header site-header" data-header>
  <div class="container" style="display:flex;align-items:center;justify-content:space-between;gap:20px;min-height:94px;">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> etusivu">
      <div class="logo-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" style="width:60%;height:60%;">
          <path d="M14 46 L26 32 L38 38 L50 16" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
          <circle cx="26" cy="32" r="4.5" fill="#FFFFFF"/>
          <circle cx="38" cy="38" r="4.5" fill="#FFFFFF"/>
          <circle cx="50" cy="16" r="6.5" fill="#0B0F19"/>
          <circle cx="50" cy="16" r="3.5" fill="#FFFFFF"/>
        </svg>
      </div>
      <span><?= e(SITE_NAME) ?></span>
    </a>

    <?php
    $home = page_url();
    $isHome = ($active_page ?? '') === 'home';
    $sec = static fn (string $hash): string => $isHome ? $hash : $home . $hash;
    ?>

    <nav class="nav nav-desktop" id="mainNav" aria-label="Päänavigaatio">
      <a href="<?= e($sec('#security')) ?>" class="nav-link">Turvallisuus</a>
      <a href="<?= e($sec('#reviews')) ?>" class="nav-link">Arvostelut</a>
      <a href="<?= e($sec('#faq')) ?>" class="nav-link">FAQ</a>
      <a href="product.php" class="nav-link<?= ($active_page ?? '') === 'product' ? ' is-active' : '' ?>">Tietoa meistä</a>
      <a href="contacts.php" class="nav-link<?= ($active_page ?? '') === 'contacts' ? ' is-active' : '' ?>">Yhteystiedot</a>
    </nav>

    <div style="display:flex;gap:14px;align-items:center;">
      <button class="theme-toggle" id="themeToggle" type="button" aria-label="Vaihda vaaleaan teemaan">☀️ Vaalea</button>
      <a href="<?= e($sec('#signup')) ?>" class="btn btn-primary header-cta-btn">Aloita kaupankäynti</a>
      <button class="burger menu-toggle" id="burgerBtn" type="button" data-menu-toggle aria-label="Avaa valikko" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="Mobiilinavigaatio" hidden>
    <a href="<?= e($sec('#security')) ?>">Turvallisuus</a>
    <a href="<?= e($sec('#reviews')) ?>">Arvostelut</a>
    <a href="<?= e($sec('#faq')) ?>">FAQ</a>
    <a href="product.php">Tietoa meistä</a>
    <a href="contacts.php">Yhteystiedot</a>
    <a href="<?= e($sec('#signup')) ?>" class="btn btn-primary">Aloita kaupankäynti</a>
  </nav>
</header>
