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
      <?php
      $supported = multilang_supported_codes();
      $current = active_lang();
      $current = in_array($current, $supported, true) ? $current : 'en';
      ?>

      <div class="lang-switcher" data-lang-switcher>
        <button
          type="button"
          class="lang-switcher__trigger"
          aria-haspopup="listbox"
          aria-expanded="false"
          aria-label="Language"
        >
          <img
            class="lang-switcher__flag"
            src="https://flagcdn.com/24x18/<?= e(lang_flag_code($current)) ?>.png"
            width="24"
            height="18"
            alt=""
            loading="lazy"
            decoding="async"
          >
          <span class="lang-switcher__code"><?= strtoupper(e($current)) ?></span>
          <svg class="lang-switcher__chevron" width="12" height="12" viewBox="0 0 12 12" aria-hidden="true">
            <path d="M2.5 4.5L6 8l3.5-3.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <ul class="lang-switcher__menu" role="listbox" hidden>
          <?php foreach ($supported as $code): ?>
            <li role="presentation">
              <button
                type="button"
                class="lang-switcher__option<?= $code === $current ? ' is-active' : '' ?>"
                role="option"
                data-lang="<?= e($code) ?>"
                aria-selected="<?= $code === $current ? 'true' : 'false' ?>"
              >
                <img
                  class="lang-switcher__flag"
                  src="https://flagcdn.com/24x18/<?= e(lang_flag_code($code)) ?>.png"
                  width="24"
                  height="18"
                  alt=""
                  loading="lazy"
                  decoding="async"
                >
                <span class="lang-switcher__label"><?= e(lang_display_name($code)) ?></span>
                <span class="lang-switcher__code"><?= strtoupper(e($code)) ?></span>
              </button>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <a href="sign.php" class="btn btn-primary btn-sm">Get Started</a>

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

    <div class="lang-switcher lang-switcher--mobile" data-lang-switcher>
      <p class="lang-switcher__mobile-title">Language</p>
      <ul class="lang-switcher__mobile-grid" role="listbox">
        <?php foreach ($supported as $code): ?>
          <li role="presentation">
            <button
              type="button"
              class="lang-switcher__mobile-option<?= $code === $current ? ' is-active' : '' ?>"
              role="option"
              data-lang="<?= e($code) ?>"
              aria-selected="<?= $code === $current ? 'true' : 'false' ?>"
            >
              <img
                class="lang-switcher__flag"
                src="https://flagcdn.com/24x18/<?= e(lang_flag_code($code)) ?>.png"
                width="24"
                height="18"
                alt=""
                loading="lazy"
                decoding="async"
              >
              <span><?= e(lang_display_name($code)) ?></span>
            </button>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <a href="sign.php" class="btn btn-primary">Get Started</a>
  </nav>

  <script>
    (() => {
      const supported = <?= json_encode($supported, JSON_UNESCAPED_UNICODE) ?>;

      const buildPath = (nextLang) => {
        const parts = window.location.pathname.split('/').filter(Boolean);
        const first = parts[0];
        const hasLangSeg = first && supported.includes(first);
        const rest = hasLangSeg ? parts.slice(1) : parts;
        const isIndex = rest.length === 0;

        if (nextLang === 'en') {
          return isIndex ? '/' : `/${rest.join('/')}`;
        }

        return isIndex ? `/${nextLang}/` : `/${nextLang}/${rest.join('/')}`;
      };

      const redirect = (nextLang) => {
        if (!nextLang || !supported.includes(nextLang)) return;
        const suffix = window.location.search + window.location.hash;
        window.location.href = buildPath(nextLang) + suffix;
      };

      document.querySelectorAll('[data-lang-switcher]').forEach((root) => {
        const trigger = root.querySelector('.lang-switcher__trigger');
        const menu = root.querySelector('.lang-switcher__menu');

        if (trigger && menu) {
          const closeMenu = () => {
            menu.hidden = true;
            trigger.setAttribute('aria-expanded', 'false');
          };

          trigger.addEventListener('click', (event) => {
            event.stopPropagation();
            const open = menu.hidden;
            document.querySelectorAll('.lang-switcher__menu').forEach((item) => {
              if (item !== menu) item.hidden = true;
            });
            document.querySelectorAll('.lang-switcher__trigger').forEach((item) => {
              if (item !== trigger) item.setAttribute('aria-expanded', 'false');
            });
            menu.hidden = !open;
            trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
          });

          document.addEventListener('click', (event) => {
            if (!root.contains(event.target)) closeMenu();
          });

          document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') closeMenu();
          });
        }

        root.querySelectorAll('[data-lang]').forEach((button) => {
          button.addEventListener('click', () => redirect(button.dataset.lang));
        });
      });
    })();
  </script>
</header>
