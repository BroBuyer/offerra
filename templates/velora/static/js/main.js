(() => {
  const lang = window.APP_LANG || {};

  // Theme
  const themeToggle = document.getElementById('themeToggle');
  const applyTheme = (theme) => {
    document.body.dataset.theme = theme;
    document.documentElement.setAttribute('data-theme', theme);
    if (!themeToggle) return;
    if (theme === 'light') {
      themeToggle.textContent = lang.themeToggleDarkText || 'Dark';
      themeToggle.setAttribute('aria-label', lang.themeToggleDarkAria || 'Switch to dark theme');
    } else {
      themeToggle.textContent = lang.themeToggleLightText || 'Light';
      themeToggle.setAttribute('aria-label', lang.themeToggleLightAria || 'Switch to light theme');
    }
  };
  let initialTheme = 'dark';
  try {
    initialTheme = localStorage.getItem('brandTheme') || 'dark';
  } catch (_) {}
  applyTheme(initialTheme);
  themeToggle?.addEventListener('click', () => {
    const next = document.body.dataset.theme === 'light' ? 'dark' : 'light';
    try {
      localStorage.setItem('brandTheme', next);
    } catch (_) {}
    applyTheme(next);
  });

  // Mobile menu
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const mobileNav = document.querySelector('[data-mobile-nav]');
  if (menuToggle && mobileNav) {
    menuToggle.addEventListener('click', () => {
      const open = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', String(!open));
      mobileNav.hidden = open;
    });
    mobileNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        mobileNav.hidden = true;
      });
    });
  }

  // FAQ
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

  // Reveal
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

  // Mockup overlay
  document.querySelectorAll('[data-mock-action]').forEach((btn) => {
    btn.addEventListener('click', () => {
      document.getElementById('mockupOverlay')?.classList.add('show');
    });
  });

  // Simulated ticker
  const prices = {
    btc: 67420.5,
    eth: 3450.25,
    sol: 184.8,
    bnb: 582.4,
    xrp: 0.592,
    ada: 0.485,
    dot: 6.75,
  };
  const fmt = (key, value) => {
    if (key === 'xrp' || key === 'ada') {
      return '$' + value.toLocaleString('en-US', { minimumFractionDigits: 4, maximumFractionDigits: 4 });
    }
    if (key === 'dot' || key === 'sol') {
      return '$' + value.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    }
    return '$' + value.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  };

  function simulateMarketTicker() {
    const tickers = ['btc', 'eth', 'sol', 'bnb', 'xrp', 'ada', 'dot'];
    const chosen = tickers[Math.floor(Math.random() * tickers.length)];
    const previousLast = prices[chosen];
    const drift = (Math.random() - 0.48) * (chosen === 'btc' ? 120 : chosen === 'eth' ? 18 : 2.4);
    const nextLast = Math.max(0.0001, previousLast + drift);
    prices[chosen] = nextLast;
    const isUp = nextLast >= previousLast;

    const priceEl = document.getElementById('t-' + chosen + '-p');
    const chgEl = document.getElementById('t-' + chosen + '-c');
    if (priceEl) priceEl.textContent = fmt(chosen, nextLast);
    if (chgEl) {
      const pct = (isUp ? 1 : -1) * (0.05 + Math.abs(nextLast - previousLast) / Math.max(previousLast, 1) * 100);
      chgEl.textContent = (pct >= 0 ? '+' : '') + pct.toFixed(2) + '%';
      chgEl.className = pct >= 0 ? 'chg-up' : 'chg-down';
    }

    const chartTrack = document.getElementById('mockupChartTrack');
    if (chartTrack && chosen === 'btc') {
      const btcDrift = isUp ? Math.abs(nextLast - previousLast) * 1.85 : -Math.abs(nextLast - previousLast) * 1.85;
      const height = Math.max(18, Math.min(95, 55 + btcDrift));
      const newBar = document.createElement('div');
      newBar.className = 'chart-bar ' + (isUp ? '' : 'down') + ' new-point';
      newBar.style.height = height + '%';
      chartTrack.appendChild(newBar);
      while (chartTrack.children.length > 14) chartTrack.removeChild(chartTrack.firstChild);

      const mockupPrice = document.getElementById('mockupPrice');
      const mockupChange = document.getElementById('mockupChange');
      if (mockupPrice) {
        mockupPrice.textContent = fmt('btc', prices.btc);
        mockupPrice.style.color = isUp ? 'var(--color-success)' : 'var(--color-danger)';
        setTimeout(() => {
          mockupPrice.style.color = 'var(--color-text-main)';
        }, 800);
      }
      if (mockupChange) {
        const pct = isUp
          ? 0.15 + Math.abs(nextLast - previousLast) / 120
          : -(0.08 + Math.abs(nextLast - previousLast) / 140);
        mockupChange.textContent =
          (pct >= 0 ? '+' : '') + pct.toFixed(2) + '% ' + (lang.mockupToday || 'Today');
        mockupChange.style.color = pct >= 0 ? 'var(--color-success)' : 'var(--color-danger)';
      }
    }
  }

  if (document.getElementById('mockupChartTrack') || document.getElementById('t-btc-p')) {
    setInterval(simulateMarketTicker, 3000);
  }
})();
