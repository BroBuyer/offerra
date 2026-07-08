<?php require_once __DIR__ . '/config.php'; ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a href="<?= page_url() ?>" class="logo" aria-label="<?= e(SITE_NAME) ?> home">
      <svg class="logo-mark" width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
        <rect width="28" height="28" rx="8" fill="currentColor"/>
        <path d="M8 18L14 8L20 18" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M10 16H18" stroke="#fff" stroke-width="2.2" stroke-linecap="round"/>
      </svg>
      <span class="logo-text"><?= e(SITE_NAME) ?></span>
    </a>

    <nav class="nav-desktop" aria-label="Main navigation">
      <a href="<?= page_url() ?>" class="<?= $active_page === 'home' ? 'is-active' : '' ?>">Home</a>
      <a href="product.php" class="<?= $active_page === 'product' ? 'is-active' : '' ?>">Product</a>
      <a href="offer.php" class="<?= $active_page === 'offer' ? 'is-active' : '' ?>">Offer</a>
      <a href="contacts.php" class="<?= $active_page === 'contacts' ? 'is-active' : '' ?>">Contact</a>
      <a href="faq.php" class="<?= $active_page === 'faq' ? 'is-active' : '' ?>">FAQ</a>
    </nav>

    <div class="header-actions">
      <a href="sign.php" class="btn btn-primary btn-sm">Get Started</a>

      <?php
      // Supported languages are determined by existing `langs/{code}` folders.
      $langsRoot = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'langs';
      $supported = [];
      if (is_dir($langsRoot)) {
        foreach (scandir($langsRoot) ?: [] as $entry) {
          if (!is_dir($langsRoot . DIRECTORY_SEPARATOR . $entry)) continue;
          $code = strtolower((string) $entry);
          if (preg_match('/^[a-z]{2}$/', $code)) {
            $supported[] = $code;
          }
        }
      }
      $supported = array_values(array_unique(array_merge(['en'], $supported)));
      sort($supported);
      $current = active_lang();
      $current = in_array($current, $supported, true) ? $current : 'en';
      ?>

      <div class="lang-switcher" data-lang-switcher>
        <select id="lang-switcher" name="lang-switcher" aria-label="Language">
          <?php foreach ($supported as $code): ?>
            <option value="<?= e($code) ?>" <?= $code === $current ? 'selected' : '' ?>>
              <?= strtoupper(e($code)) ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <button class="menu-toggle" type="button" data-menu-toggle aria-label="Open menu" aria-expanded="false">
        <span></span><span></span>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" data-mobile-nav aria-label="Mobile navigation" hidden>
    <a href="<?= page_url() ?>">Home</a>
    <a href="product.php">Product</a>
    <a href="offer.php">Offer</a>
    <a href="contacts.php">Contact</a>
    <a href="faq.php">FAQ</a>
    <a href="sign.php" class="btn btn-primary">Get Started</a>
  </nav>

  <script>
    (() => {
      const supported = <?=
        json_encode($supported, JSON_UNESCAPED_UNICODE);
      ?>;
      const select = document.getElementById('lang-switcher');
      if (!select) return;

      const currentLangFromPath = () => {
        const parts = window.location.pathname.split('/').filter(Boolean);
        const first = parts[0];
        if (first && supported.includes(first)) return first;
        return 'en';
      };

      const applyRedirect = (nextLang) => {
        const parts = window.location.pathname.split('/').filter(Boolean);
        const first = parts[0];
        const hasLangSeg = first && supported.includes(first);
        const rest = hasLangSeg ? parts.slice(1) : parts;
        const isIndex = rest.length === 0;

        let newPath = '/';
        if (nextLang === 'en') {
          newPath = isIndex ? '/' : `/${rest.join('/')}`;
        } else {
          newPath = isIndex ? `/${nextLang}/` : `/${nextLang}/${rest.join('/')}`;
        }

        const suffix = window.location.search + window.location.hash;
        window.location.href = newPath + suffix;
      };

      const cur = currentLangFromPath();
      if (supported.includes(cur)) select.value = cur;

      select.addEventListener('change', (e) => {
        const next = e.target.value;
        if (next && next !== select.value) applyRedirect(next);
        if (next && next === select.value) applyRedirect(next);
      });
    })();
  </script>
</header>
