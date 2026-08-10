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
      const overlay = document.getElementById('mockupOverlay');
      const headline = document.getElementById('overlayHeadline');
      const type = btn.getAttribute('data-mock-action') || 'buy';
      if (headline) {
        headline.textContent =
          type.charAt(0).toUpperCase() + type.slice(1) + ' ' + (lang.orderPendingAllocation || 'order pending allocation');
      }
      overlay?.classList.add('show');
    });
  });

  // Live ticker + sliding chart (sample-style)
  const prices = {
    btc: 67420.5,
    eth: 3450.25,
    sol: 184.8,
    bnb: 582.4,
    xrp: 0.592,
    ada: 0.485,
    dot: 6.75,
  };

  function formatPrice(key, value) {
    if (key === 'xrp' || key === 'ada') {
      return '$' + value.toFixed(4);
    }
    return (
      '$' +
      value.toLocaleString('en-US', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
      })
    );
  }

  function simulateMarketTicker() {
    const chartTrack = document.getElementById('mockupChartTrack');
    const chartBars = chartTrack ? Array.from(chartTrack.querySelectorAll('.chart-bar')) : [];

    if (chartTrack && chartBars.length) {
      const previousLast = parseInt(chartBars[chartBars.length - 1].style.height || '60', 10);
      let nextLast = previousLast + (Math.random() > 0.54 ? 1 : -1) * (Math.floor(Math.random() * 14) + 4);
      nextLast = Math.max(25, Math.min(95, nextLast));
      const isMockUp = nextLast >= previousLast;
      const btcDrift = isMockUp
        ? Math.abs(nextLast - previousLast) * 1.85
        : -Math.abs(nextLast - previousLast) * 1.85;
      prices.btc += btcDrift;

      const newBar = document.createElement('div');
      newBar.className = 'chart-bar ' + (isMockUp ? '' : 'down') + ' new-point';
      newBar.style.height = nextLast + '%';
      chartTrack.appendChild(newBar);

      const firstBar = chartBars[0];
      const gap = parseFloat(getComputedStyle(chartTrack).gap) || 8;
      const shift = firstBar.getBoundingClientRect().width + gap;
      chartTrack.classList.add('is-sliding');
      chartTrack.style.transform = 'translateX(-' + shift + 'px)';

      window.setTimeout(() => {
        chartTrack.classList.remove('is-sliding');
        chartTrack.style.transform = 'translateX(0)';
        firstBar.remove();
        newBar.classList.remove('new-point');
      }, 920);

      const mockupPrice = document.getElementById('mockupPrice');
      const mockupChange = document.getElementById('mockupChange');
      if (mockupPrice) {
        mockupPrice.textContent = formatPrice('btc', prices.btc);
        mockupPrice.style.color = isMockUp ? 'var(--color-success)' : 'var(--color-danger)';
        setTimeout(() => {
          mockupPrice.style.color = 'var(--color-text-main)';
        }, 800);
      }
      if (mockupChange) {
        const pct = isMockUp
          ? 0.15 + Math.abs(nextLast - previousLast) / 120
          : -(0.08 + Math.abs(nextLast - previousLast) / 140);
        mockupChange.textContent =
          (pct >= 0 ? '+' : '') + pct.toFixed(2) + '% ' + (lang.mockupToday || 'Today');
        mockupChange.style.color = pct >= 0 ? 'var(--color-success)' : 'var(--color-danger)';
      }
    }

    const tickers = ['btc', 'eth', 'sol', 'bnb', 'xrp', 'ada', 'dot'];
    const chosen = tickers[Math.floor(Math.random() * tickers.length)];
    const driftPercent = Math.random() * 0.1 - 0.05;
    prices[chosen] += prices[chosen] * (driftPercent / 100);

    const rowPrice = document.getElementById('t-' + chosen + '-p');
    const rowChange = document.getElementById('t-' + chosen + '-c');
    if (rowPrice && rowChange) {
      rowPrice.textContent = formatPrice(chosen, prices[chosen]);
      const isUp = driftPercent >= 0;
      const flashColor = isUp ? 'var(--color-success)' : 'var(--color-danger)';
      const rowEl = rowPrice.closest('.market-row');

      rowPrice.style.color = flashColor;
      rowChange.style.color = flashColor;

      if (rowEl) {
        rowEl.classList.remove('row-pulse-up', 'row-pulse-down');
        void rowEl.offsetWidth;
        rowEl.classList.add(isUp ? 'row-pulse-up' : 'row-pulse-down');
      }

      const activeChange = parseFloat(rowChange.textContent) + driftPercent;
      rowChange.textContent = (activeChange >= 0 ? '+' : '') + activeChange.toFixed(2) + '%';
      rowChange.className = activeChange >= 0 ? 'chg-up' : 'chg-down';

      setTimeout(() => {
        rowPrice.style.color = 'var(--color-text-main)';
        rowChange.style.color = '';
        if (rowEl) rowEl.classList.remove('row-pulse-up', 'row-pulse-down');
      }, 600);
    }
  }

  if (document.getElementById('mockupChartTrack') || document.getElementById('t-btc-p')) {
    setInterval(simulateMarketTicker, 3000);
  }
})();
