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

// Simulated live ticker (exchange feel without external deps)
const TICKERS = {
  btc: { base: 67420, vol: 0.003 },
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

    const priceEl = document.querySelector(`[data-price="${key}"]`);
    const changeEl = document.querySelector(`[data-change="${key}"]`);

    if (priceEl) priceEl.textContent = formatPrice(key, cfg.base);
    if (changeEl) {
      changeEl.textContent = (up ? '+' : '') + pct + '%';
      changeEl.classList.toggle('up', up);
      changeEl.classList.toggle('down', !up);
    }
  });
}

if (document.querySelector('[data-ticker-list]')) {
  updateTickers();
  setInterval(updateTickers, 3200);
}

// Review initials
document.querySelectorAll('.review-avatar').forEach((el) => {
  const name = el.closest('.review-author')?.querySelector('.review-name')?.textContent?.trim();
  if (name && !el.textContent.trim()) {
    const parts = name.split(/\s+/).slice(0, 2);
    el.textContent = parts.map((w) => w[0]?.toUpperCase() || '').join('');
  }
});
