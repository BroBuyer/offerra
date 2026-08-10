// Mobile menu
const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileNav = document.querySelector('[data-mobile-nav]');

if (menuToggle && mobileNav) {
  menuToggle.addEventListener('click', () => {
    const open = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!open));
    mobileNav.hidden = open;
  });

  document.addEventListener('click', (e) => {
    if (!menuToggle.contains(e.target) && !mobileNav.contains(e.target)) {
      menuToggle.setAttribute('aria-expanded', 'false');
      mobileNav.hidden = true;
    }
  });
}

// FAQ accordion
document.querySelectorAll('[data-faq] .faq-item').forEach((item) => {
  const trigger = item.querySelector('.faq-trigger');
  const content = item.querySelector('.faq-content');

  trigger?.addEventListener('click', () => {
    const isOpen = item.classList.contains('is-open');

    document.querySelectorAll('[data-faq] .faq-item').forEach((other) => {
      other.classList.remove('is-open');
      other.querySelector('.faq-trigger')?.setAttribute('aria-expanded', 'false');
      const c = other.querySelector('.faq-content');
      if (c) c.style.maxHeight = '0';
    });

    if (!isOpen) {
      item.classList.add('is-open');
      trigger.setAttribute('aria-expanded', 'true');
      if (content) content.style.maxHeight = content.scrollHeight + 'px';
    }
  });
});

// Scroll reveal
const revealEls = document.querySelectorAll('[data-reveal]');
if (revealEls.length && 'IntersectionObserver' in window) {
  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-in');
          io.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -8% 0px' },
  );
  revealEls.forEach((el) => io.observe(el));
} else {
  revealEls.forEach((el) => el.classList.add('is-in'));
}

// Sticky header tone on scroll
const header = document.querySelector('[data-header]');
if (header) {
  const onScroll = () => {
    header.classList.toggle('is-scrolled', window.scrollY > 12);
  };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
}

// Simulated live tape (same idea as noctra)
const TICKERS = {
  btc: { base: 95780, vol: 0.003 },
  eth: { base: 3520, vol: 0.004 },
  sol: { base: 148.5, vol: 0.006 },
  xrp: { base: 0.62, vol: 0.005 },
};

function formatPrice(key, value) {
  if (key === 'xrp') return '$' + value.toFixed(4);
  if (key === 'sol') return '$' + value.toFixed(2);
  return '$' + value.toLocaleString('en-US', { maximumFractionDigits: 0 });
}

function updateTickers() {
  Object.entries(TICKERS).forEach(([key, cfg]) => {
    const delta = (Math.random() - 0.48) * cfg.base * cfg.vol;
    cfg.base = Math.max(cfg.base * 0.999, cfg.base + delta);
    const pct = ((delta / cfg.base) * 100).toFixed(2);
    const up = delta >= 0;

    document.querySelectorAll(`[data-price="${key}"]`).forEach((priceEl) => {
      priceEl.textContent = formatPrice(key, cfg.base);
    });

    document.querySelectorAll(`[data-change="${key}"]`).forEach((changeEl) => {
      changeEl.textContent = (up ? '+' : '') + pct + '%';
      changeEl.classList.toggle('tape-up', up);
      changeEl.classList.toggle('tape-down', !up);
    });
  });
}

if (document.querySelector('.market-tape')) {
  updateTickers();
  setInterval(updateTickers, 3200);
}
