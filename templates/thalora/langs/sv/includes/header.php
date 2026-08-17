<?php require_once __DIR__ . '/config.php'; ?>
  <header class="relative z-50 pt-3.5 md:pt-6">
    <div class="container-base">
      <div class="rounded-custom flex min-h-[70px] items-center justify-between gap-8 border bg-white px-4.5 py-3 md:px-8">
        <a class="font-special inline-flex max-w-60 gap-1.5 text-xl leading-none uppercase header-nav-logo" href="<?= page_url() ?>">
          <span class="text-primary inline-block header-logo">
            <img src="<?= asset('static/img/favicon.svg') ?>" class="footer-logo" alt="<?= e(SITE_NAME) ?>">
          </span>
          <?= e(SITE_NAME) ?>
        </a>
<nav class="hiddens grow justify-center lg:flex">
  <ul class="flex flex-row flex-wrap justify-center gap-x-4 gap-y-2 md:gap-x-5 lg:gap-x-7">
    <li>
      <a class="data-active:text-primary" href="<?= page_url() ?>"<?= $active_page === 'home' ? ' data-active aria-current="page"' : '' ?>>Hem</a>
    </li>
    <li>
      <a class="data-active:text-primary" href="<?= page_url('product.php') ?>"<?= $active_page === 'product' ? ' data-active aria-current="page"' : '' ?>>Plattformsöversikt</a>
    </li>
    <li>
      <a class="data-active:text-primary" href="<?= page_url('offer.php') ?>"<?= $active_page === 'offer' ? ' data-active aria-current="page"' : '' ?>>Kampanjer</a>
    </li>
    <li>
      <a class="data-active:text-primary" href="<?= page_url('contacts.php') ?>"<?= $active_page === 'contacts' ? ' data-active aria-current="page"' : '' ?>>Kontakt</a>
    </li>
    <li>
      <a class="data-active:text-primary" href="<?= page_url('faq.php') ?>"<?= $active_page === 'faq' ? ' data-active aria-current="page"' : '' ?>>Supportcenter</a>
    </li>
  </ul>
</nav>
        <div class="flex items-center gap-4 max-md:hidden mobmenu">
          <a class="group inline-flex h-[50px] items-center justify-between rounded-full border-2" href="<?= page_url('sign.php') ?>">
            <span class="inline-block p-3.5 text-sm">Registrera</span>
            <span class="group-hover:bg-primary inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full bg-black text-white transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                <path d="M19.7071 8.07088C20.0976 7.68035 20.0976 7.04719 19.7071 6.65666L13.3431 0.292702C12.9526 -0.0978227 12.3195 -0.0978227 11.9289 0.292702C11.5384 0.683226 11.5384 1.31639 11.9289 1.70692L17.5858 7.36377L11.9289 13.0206C11.5384 13.4111 11.5384 14.0443 11.9289 14.4348C12.3195 14.8254 12.9526 14.8254 13.3431 14.4348L19.7071 8.07088ZM0 8.36377H19V6.36377H0V8.36377Z" fill="currentColor" />
              </svg>
            </span>
          </a>
          <a class="inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full border-2" href="<?= page_url('sign.php') ?>" aria-label="Logga in">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29" fill="none">
              <path d="M1 13.7998C0.447715 13.7998 -4.82823e-08 14.2475 0 14.7998C4.82823e-08 15.3521 0.447715 15.7998 1 15.7998L1 13.7998ZM17.8071 15.5069C18.1976 15.1164 18.1976 14.4832 17.8071 14.0927L11.4431 7.72874C11.0526 7.33821 10.4195 7.33821 10.0289 7.72874C9.63841 8.11926 9.63841 8.75243 10.0289 9.14295L15.6858 14.7998L10.0289 20.4567C9.63841 20.8472 9.63841 21.4803 10.0289 21.8709C10.4195 22.2614 11.0526 22.2614 11.4431 21.8709L17.8071 15.5069ZM1 15.7998L17.1 15.7998L17.1 13.7998L1 13.7998L1 15.7998Z" fill="currentColor" />
              <path d="M12.5 1H21C22.6569 1 24 2.34315 24 4V24.45C24 26.1069 22.6569 27.45 21 27.45H12.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
          </a>
        </div>
        <button class="menu-icon" data-menu-icon aria-label="öppna meny">
          <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="3" width="38" height="4" rx="2" fill="currentColor" />
            <rect y="15" width="38" height="4" rx="2" fill="currentColor" />
            <rect y="27" width="38" height="4" rx="2" fill="currentColor" />
          </svg>
        </button>
      </div>
    </div>
    <nav class="mobile-menu" data-mobile-menu>
      <ul class="flex flex-col flex-wrap items-center justify-center gap-y-8">
        <li><a href="<?= page_url() ?>">Hem</a></li>
        <li><a href="<?= page_url('product.php') ?>">Plattformsöversikt</a></li>
        <li><a href="<?= page_url('offer.php') ?>">Kampanjer</a></li>
        <li><a href="<?= page_url('contacts.php') ?>">Kontakt</a></li>
        <li><a href="<?= page_url('faq.php') ?>">Supportcenter</a></li>
      </ul>
      <div class="flex items-center gap-4 md:hidden">
        <a class="group inline-flex h-[50px] items-center justify-between rounded-full border-2" href="<?= page_url('sign.php') ?>">
          <span class="inline-block p-3.5 text-sm">Registrera</span>
          <span class="group-hover:bg-primary inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full bg-black text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
              <path d="M19.7071 8.07088C20.0976 7.68035 20.0976 7.04719 19.7071 6.65666L13.3431 0.292702C12.9526 -0.0978227 12.3195 -0.0978227 11.9289 0.292702C11.5384 0.683226 11.5384 1.31639 11.9289 1.70692L17.5858 7.36377L11.9289 13.0206C11.5384 13.4111 11.5384 14.0443 11.9289 14.4348C12.3195 14.8254 12.9526 14.8254 13.3431 14.4348L19.7071 8.07088ZM0 8.36377H19V6.36377H0V8.36377Z" fill="currentColor" />
            </svg>
          </span>
        </a>
        <a class="inline-flex h-[50px] w-[50px] shrink-0 items-center justify-center rounded-full border-2" href="<?= page_url('sign.php') ?>" aria-label="Logga in">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29" fill="none">
            <path d="M1 13.7998C0.447715 13.7998 -4.82823e-08 14.2475 0 14.7998C4.82823e-08 15.3521 0.447715 15.7998 1 15.7998L1 13.7998ZM17.8071 15.5069C18.1976 15.1164 18.1976 14.4832 17.8071 14.0927L11.4431 7.72874C11.0526 7.33821 10.4195 7.33821 10.0289 7.72874C9.63841 8.11926 9.63841 8.75243 10.0289 9.14295L15.6858 14.7998L10.0289 20.4567C9.63841 20.8472 9.63841 21.4803 10.0289 21.8709C10.4195 22.2614 11.0526 22.2614 11.4431 21.8709L17.8071 15.5069ZM1 15.7998L17.1 15.7998L17.1 13.7998L1 13.7998L1 15.7998Z" fill="currentColor" />
            <path d="M12.5 1H21C22.6569 1 24 2.34315 24 4V24.45C24 26.1069 22.6569 27.45 21 27.45H12.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
        </a>
      </div>
    </nav>
  </header>
