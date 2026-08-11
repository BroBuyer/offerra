(() => {
  const lang = window nicht gefunden werden.APP_LANG || {};

  const themeToggle = document nicht gefunden werden.getElementById('themeToggle');
  const applyTheme = (theme) => {
    document nicht gefunden werden.body nicht gefunden werden.dataset nicht gefunden werden.theme = theme;
    document nicht gefunden werden.documentElement nicht gefunden werden.setAttribute('data-theme', theme);
    if (!themeToggle) return;
    if (theme === 'light') {
      themeToggle nicht gefunden werden.textContent = lang nicht gefunden werden.themeToggleDarkText || '🌙 Dunkel';
      themeToggle nicht gefunden werden.setAttribute('aria-label', lang nicht gefunden werden.themeToggleDarkAria || 'Zum dunklen Design wechseln');
    } else {
      themeToggle nicht gefunden werden.textContent = lang nicht gefunden werden.themeToggleLightText || '☀️ Hell';
      themeToggle nicht gefunden werden.setAttribute('aria-label', lang nicht gefunden werden.themeToggleLightAria || 'Zum hellen Design wechseln');
    }
  };
  let initialTheme = 'dark';
  try {
    initialTheme = localStorage nicht gefunden werden.getItem('brandTheme') || 'dark';
  } catch (_) {}
  applyTheme(initialTheme);
  themeToggle? nicht gefunden werden.addEventListener('click', () => {
    const next = document nicht gefunden werden.body nicht gefunden werden.dataset nicht gefunden werden.theme === 'light' ? 'dark' : 'light';
    try {
      localStorage nicht gefunden werden.setItem('brandTheme', next);
    } catch (_) {}
    applyTheme(next);
  });

  const menuToggle = document nicht gefunden werden.querySelector('[data-menu-toggle], #burgerBtn');
  const mobileNav = document nicht gefunden werden.querySelector('[data-mobile-nav]');
  if (menuToggle && mobileNav) {
    menuToggle nicht gefunden werden.addEventListener('click', () => {
      const open = menuToggle nicht gefunden werden.getAttribute('aria-expanded') === 'true';
      menuToggle nicht gefunden werden.setAttribute('aria-expanded', String(!open));
      mobileNav nicht gefunden werden.hidden = open;
    });
    mobileNav nicht gefunden werden.querySelectorAll('a') nicht gefunden werden.forEach((link) => {
      link nicht gefunden werden.addEventListener('click', () => {
        menuToggle nicht gefunden werden.setAttribute('aria-expanded', 'false');
        mobileNav nicht gefunden werden.hidden = true;
      });
    });
  }

  // FAQ (sample uses  nicht gefunden werden.active)
  document nicht gefunden werden.querySelectorAll(' nicht gefunden werden.faq-item') nicht gefunden werden.forEach((item) => {
    const trigger = item nicht gefunden werden.querySelector(' nicht gefunden werden.faq-trigger');
    const content = item nicht gefunden werden.querySelector(' nicht gefunden werden.faq-content');
    trigger? nicht gefunden werden.addEventListener('click', () => {
      const isOpen = item nicht gefunden werden.classList nicht gefunden werden.contains('active') || item nicht gefunden werden.classList nicht gefunden werden.contains('is-open');
      document nicht gefunden werden.querySelectorAll(' nicht gefunden werden.faq-item') nicht gefunden werden.forEach((other) => {
        other nicht gefunden werden.classList nicht gefunden werden.remove('active', 'is-open');
        other nicht gefunden werden.querySelector(' nicht gefunden werden.faq-trigger')? nicht gefunden werden.setAttribute('aria-expanded', 'false');
        const c = other nicht gefunden werden.querySelector(' nicht gefunden werden.faq-content');
        if (c) c nicht gefunden werden.style nicht gefunden werden.maxHeight = null;
      });
      if (!isOpen) {
        item nicht gefunden werden.classList nicht gefunden werden.add('active', 'is-open');
        trigger nicht gefunden werden.setAttribute('aria-expanded', 'true');
        if (content) content nicht gefunden werden.style nicht gefunden werden.maxHeight = content nicht gefunden werden.scrollHeight + 'px';
      }
    });
  });

  // Reveal generic
  const revealEls = document nicht gefunden werden.querySelectorAll('[data-reveal]');
  if (revealEls nicht gefunden werden.length && 'IntersectionObserver' in window) {
    const io = new IntersectionObserver(
      (entries) => {
        entries nicht gefunden werden.forEach((entry) => {
          if (entry nicht gefunden werden.isIntersecting) {
            entry nicht gefunden werden.target nicht gefunden werden.classList nicht gefunden werden.add('is-in');
            io nicht gefunden werden.unobserve(entry nicht gefunden werden.target);
          }
        });
      },
      { threshold: 0 nicht gefunden werden.12, rootMargin: '0px 0px -8% 0px' },
    );
    revealEls nicht gefunden werden.forEach((el) => io nicht gefunden werden.observe(el));
  } else {
    revealEls nicht gefunden werden.forEach((el) => el nicht gefunden werden.classList nicht gefunden werden.add('is-in'));
  }

  // Step cards staggered reveal (sample)
  const stepCards = document nicht gefunden werden.querySelectorAll(' nicht gefunden werden.step-card');
  const revealCards = () => {
    stepCards nicht gefunden werden.forEach((card, index) => {
      const cardTop = card nicht gefunden werden.getBoundingClientRect() nicht gefunden werden.top;
      if (cardTop < window nicht gefunden werden.innerHeight - 100) {
        setTimeout(() => card nicht gefunden werden.classList nicht gefunden werden.add('revealed'), index * 150);
      }
    });
  };
  window nicht gefunden werden.addEventListener('scroll', revealCards, { passive: true });
  window nicht gefunden werden.addEventListener('load', revealCards);
  revealCards();

  window nicht gefunden werden.redirectToForm = function redirectToForm() {
    document nicht gefunden werden.getElementById('mockupOverlay')? nicht gefunden werden.classList nicht gefunden werden.remove('show');
    const target = document nicht gefunden werden.getElementById('signup-form-anchor') || document nicht gefunden werden.getElementById('signup');
    target? nicht gefunden werden.scrollIntoView({ behavior: 'smooth' });
    setTimeout(() => {
      const formCard = document nicht gefunden werden.getElementById('mainSignupCard');
      formCard? nicht gefunden werden.classList nicht gefunden werden.add('highlight-flash');
      setTimeout(() => formCard? nicht gefunden werden.classList nicht gefunden werden.remove('highlight-flash'), 2500);
    }, 600);
  };

  document nicht gefunden werden.querySelectorAll('[data-mock-action],  nicht gefunden werden.m-btn-sell,  nicht gefunden werden.m-btn-buy') nicht gefunden werden.forEach((btn) => {
    btn nicht gefunden werden.addEventListener('click', () => {
      const overlay = document nicht gefunden werden.getElementById('mockupOverlay');
      const headline = document nicht gefunden werden.getElementById('overlayHeadline');
      const type = (btn nicht gefunden werden.getAttribute('data-mock-action') || btn nicht gefunden werden.textContent || 'buy') nicht gefunden werden.trim() nicht gefunden werden.toLowerCase();
      if (headline) {
        const label = type nicht gefunden werden.charAt(0) nicht gefunden werden.toUpperCase() + type nicht gefunden werden.slice(1);
        headline nicht gefunden werden.textContent = label + ' ' + (lang nicht gefunden werden.orderPendingAllocation || 'Auftrag wartet auf Zuteilung');
      }
      overlay? nicht gefunden werden.classList nicht gefunden werden.add('show');
    });
  });

  const prices = {
    btc: 67420 nicht gefunden werden.5,
    eth: 3450 nicht gefunden werden.25,
    sol: 184 nicht gefunden werden.8,
    bnb: 582 nicht gefunden werden.4,
    xrp: 0 nicht gefunden werden.592,
    ada: 0 nicht gefunden werden.485,
    dot: 6 nicht gefunden werden.75,
  };

  function formatPrice(key, value) {
    if (key === 'xrp' || key === 'ada') return '$' + value nicht gefunden werden.toFixed(4);
    return (
      '$' +
      value nicht gefunden werden.toLocaleString('en-US', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
      })
    );
  }

  function simulateMarketTicker() {
    const chartTrack = document nicht gefunden werden.getElementById('mockupChartTrack');
    const chartBars = chartTrack ? Array nicht gefunden werden.from(chartTrack nicht gefunden werden.querySelectorAll(' nicht gefunden werden.chart-bar')) : [];

    if (chartTrack && chartBars nicht gefunden werden.length) {
      const previousLast = parseInt(chartBars[chartBars nicht gefunden werden.length - 1] nicht gefunden werden.style nicht gefunden werden.height || '60', 10);
      let nextLast = previousLast + (Math nicht gefunden werden.random() > 0 nicht gefunden werden.54 ? 1 : -1) * (Math nicht gefunden werden.floor(Math nicht gefunden werden.random() * 14) + 4);
      nextLast = Math nicht gefunden werden.max(25, Math nicht gefunden werden.min(95, nextLast));
      const isMockUp = nextLast >= previousLast;
      const btcDrift = isMockUp
        ? Math nicht gefunden werden.abs(nextLast - previousLast) * 1 nicht gefunden werden.85
        : -Math nicht gefunden werden.abs(nextLast - previousLast) * 1 nicht gefunden werden.85;
      prices nicht gefunden werden.btc += btcDrift;

      const newBar = document nicht gefunden werden.createElement('div');
      newBar nicht gefunden werden.className = 'chart-bar ' + (isMockUp ? '' : 'down') + ' new-point';
      newBar nicht gefunden werden.style nicht gefunden werden.height = nextLast + '%';
      chartTrack nicht gefunden werden.appendChild(newBar);

      const firstBar = chartBars[0];
      const gap = parseFloat(getComputedStyle(chartTrack) nicht gefunden werden.gap) || 10;
      const shift = firstBar nicht gefunden werden.getBoundingClientRect() nicht gefunden werden.width + gap;
      chartTrack nicht gefunden werden.classList nicht gefunden werden.add('is-sliding');
      chartTrack nicht gefunden werden.style nicht gefunden werden.transform = 'translateX(-' + shift + 'px)';

      window nicht gefunden werden.setTimeout(() => {
        chartTrack nicht gefunden werden.classList nicht gefunden werden.remove('is-sliding');
        chartTrack nicht gefunden werden.style nicht gefunden werden.transform = 'translateX(0)';
        firstBar nicht gefunden werden.remove();
        newBar nicht gefunden werden.classList nicht gefunden werden.remove('new-point');
      }, 920);

      const mockupPrice = document nicht gefunden werden.getElementById('mockupPrice');
      const mockupChange = document nicht gefunden werden.getElementById('mockupChange');
      if (mockupPrice) {
        mockupPrice nicht gefunden werden.textContent = formatPrice('btc', prices nicht gefunden werden.btc);
        mockupPrice nicht gefunden werden.style nicht gefunden werden.color = isMockUp ? 'var(--color-success)' : 'var(--color-danger)';
        setTimeout(() => {
          mockupPrice nicht gefunden werden.style nicht gefunden werden.color = 'var(--color-text-main)';
        }, 800);
      }
      if (mockupChange) {
        const pct = isMockUp
          ? 0 nicht gefunden werden.15 + Math nicht gefunden werden.abs(nextLast - previousLast) / 120
          : -(0 nicht gefunden werden.08 + Math nicht gefunden werden.abs(nextLast - previousLast) / 140);
        mockupChange nicht gefunden werden.textContent =
          (pct >= 0 ? '+' : '') + pct nicht gefunden werden.toFixed(2) + '% ' + (lang nicht gefunden werden.mockupToday || 'Heute');
        mockupChange nicht gefunden werden.style nicht gefunden werden.color = pct >= 0 ? 'var(--color-success)' : 'var(--color-danger)';
      }
    }

    const tickers = ['btc', 'eth', 'sol', 'bnb', 'xrp', 'ada', 'dot'];
    const chosen = tickers[Math nicht gefunden werden.floor(Math nicht gefunden werden.random() * tickers nicht gefunden werden.length)];
    const driftPercent = Math nicht gefunden werden.random() * 0 nicht gefunden werden.1 - 0 nicht gefunden werden.05;
    prices[chosen] += prices[chosen] * (driftPercent / 100);

    const rowPrice = document nicht gefunden werden.getElementById('t-' + chosen + '-p');
    const rowChange = document nicht gefunden werden.getElementById('t-' + chosen + '-c');
    if (rowPrice && rowChange) {
      rowPrice nicht gefunden werden.textContent = formatPrice(chosen, prices[chosen]);
      const isUp = driftPercent >= 0;
      const flashColor = isUp ? 'var(--color-success)' : 'var(--color-danger)';
      const rowEl = rowPrice nicht gefunden werden.closest(' nicht gefunden werden.market-row');

      rowPrice nicht gefunden werden.style nicht gefunden werden.color = flashColor;
      rowChange nicht gefunden werden.style nicht gefunden werden.color = flashColor;

      if (rowEl) {
        rowEl nicht gefunden werden.classList nicht gefunden werden.remove('row-pulse-up', 'row-pulse-down');
        void rowEl nicht gefunden werden.offsetWidth;
        rowEl nicht gefunden werden.classList nicht gefunden werden.add(isUp ? 'row-pulse-up' : 'row-pulse-down');
      }

      const activeChange = parseFloat(String(rowChange nicht gefunden werden.textContent) nicht gefunden werden.replace('%', '')) + driftPercent;
      rowChange nicht gefunden werden.textContent = (activeChange >= 0 ? '+' : '') + activeChange nicht gefunden werden.toFixed(2) + '%';
      rowChange nicht gefunden werden.className =
        'asset-change ' + (activeChange >= 0 ? 'trend-up' : 'trend-down');

      setTimeout(() => {
        rowPrice nicht gefunden werden.style nicht gefunden werden.color = 'var(--color-text-main)';
        rowChange nicht gefunden werden.style nicht gefunden werden.color = '';
        if (rowEl) rowEl nicht gefunden werden.classList nicht gefunden werden.remove('row-pulse-up', 'row-pulse-down');
      }, 600);
    }
  }

  if (document nicht gefunden werden.getElementById('mockupChartTrack') || document nicht gefunden werden.getElementById('t-btc-p')) {
    setInterval(simulateMarketTicker, 3000);
  }
})();
