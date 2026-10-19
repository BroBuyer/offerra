(function () {
  function animateValue(el) {
    if (el.dataset.done) return;
    var target = parseFloat(el.dataset.count || '0');
    var decimals = (el.dataset.decimals || '0') | 0;
    var prefix = el.dataset.prefix || '';
    var suffix = el.dataset.suffix || '';
    var duration = 1400;
    var start = null;
    function frame(ts) {
      if (!start) start = ts;
      var p = Math.min(1, (ts - start) / duration);
      var eased = 1 - Math.pow(1 - p, 3);
      var val = target * eased;
      var num = decimals ? val.toFixed(decimals) : Math.round(val).toLocaleString();
      el.textContent = prefix + num + suffix;
      if (p < 1) requestAnimationFrame(frame);
      else el.dataset.done = '1';
    }
    requestAnimationFrame(frame);
  }

  function animateCounters(root) {
    (root || document).querySelectorAll('[data-count]').forEach(animateValue);
  }

  function fillBars(root) {
    (root || document).querySelectorAll('.earn-wc-bar, .win-fill').forEach(function (bar) {
      bar.classList.add('animated');
      if (bar.classList.contains('win-fill')) {
        var rate = parseFloat(bar.dataset.rate || '0');
        bar.style.width = Math.min(100, rate) + '%';
      }
    });
  }

  function observeEarn() {
    var kpis = document.querySelectorAll('.earn-kpi');
    var earners = document.querySelectorAll('.earn-earner-card');
    var winSection = document.querySelector('.earn-winrate-section');
    var strip = document.getElementById('earnKpis');

    if (!('IntersectionObserver' in window)) {
      kpis.forEach(function (k) { k.classList.add('in'); });
      earners.forEach(function (e) { e.classList.add('in'); });
      animateCounters(strip);
      fillBars();
      return;
    }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var t = entry.target;
        if (t.id === 'earnKpis' || t.classList.contains('earn-kpi-strip')) {
          t.querySelectorAll('.earn-kpi').forEach(function (k, i) {
            setTimeout(function () { k.classList.add('in'); }, i * 80);
          });
          animateCounters(t);
        }
        if (t.classList.contains('earn-winrate-section')) fillBars(t);
        if (t.classList.contains('earn-earner-card')) t.classList.add('in');
        io.unobserve(t);
      });
    }, { threshold: 0.05, rootMargin: '0px 0px -8% 0px' });

    if (strip) {
      io.observe(strip);
      var rect = strip.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        strip.querySelectorAll('.earn-kpi').forEach(function (k) { k.classList.add('in'); });
        animateCounters(strip);
      }
    }
    if (winSection) io.observe(winSection);
    earners.forEach(function (e) { io.observe(e); });
  }

  function revealOnScroll() {
    var nodes = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window)) {
      nodes.forEach(function (n) { n.classList.add('in'); });
      return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.12 });
    nodes.forEach(function (n) { io.observe(n); });
  }

  function liveStats() {
    var latency = document.getElementById('live-latency');
    var orders = document.getElementById('live-orders');
    var clock = document.getElementById('live-clock');
    function tick() {
      if (latency) latency.textContent = (8 + Math.floor(Math.random() * 18)) + ' ms';
      if (orders) orders.textContent = (1100 + Math.floor(Math.random() * 500)).toLocaleString();
      if (clock) {
        var d = new Date();
        clock.textContent = d.toISOString().replace('T', ' ').slice(0, 19) + ' UTC';
      }
    }
    tick();
    setInterval(tick, 2200);
  }

  function countdown() {
    var root = document.getElementById('countdown');
    if (!root) return;
    var end = Date.now() + ((2 * 24 + 13) * 3600 + 4 * 60 + 43) * 1000;
    var els = {
      d: root.querySelector('[data-cd="d"]'),
      h: root.querySelector('[data-cd="h"]'),
      m: root.querySelector('[data-cd="m"]'),
      s: root.querySelector('[data-cd="s"]'),
    };
    function pad(n) { return String(n).padStart(2, '0'); }
    function tick() {
      var diff = Math.max(0, end - Date.now());
      var s = Math.floor(diff / 1000);
      var d = Math.floor(s / 86400); s %= 86400;
      var h = Math.floor(s / 3600); s %= 3600;
      var m = Math.floor(s / 60); s %= 60;
      if (els.d) els.d.textContent = pad(d);
      if (els.h) els.h.textContent = pad(h);
      if (els.m) els.m.textContent = pad(m);
      if (els.s) els.s.textContent = pad(s);
    }
    tick();
    setInterval(tick, 1000);
  }

  function faq() {
    document.querySelectorAll('.faq-item button').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.faq-item');
        var open = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function (i) { i.classList.remove('open'); });
        if (!open) item.classList.add('open');
      });
    });
  }

  function quiz() {
    var form = document.getElementById('fit-quiz');
    if (!form) return;
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var target = document.getElementById('lead-form');
      if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }

  function neuralCanvas() {
    var canvas = document.getElementById('neural-canvas');
    if (!canvas || !canvas.getContext) return;
    var ctx = canvas.getContext('2d');
    var nodes = [];
    var dpr = Math.min(window.devicePixelRatio || 1, 2);
    var linkDist = 160;

    function resize() {
      canvas.width = window.innerWidth * dpr;
      canvas.height = window.innerHeight * dpr;
      canvas.style.width = window.innerWidth + 'px';
      canvas.style.height = window.innerHeight + 'px';
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      nodes = [];
      var count = Math.min(90, Math.floor(window.innerWidth / 16) + 30);
      for (var i = 0; i < count; i++) {
        // Bias nodes toward the right half like the sample
        var biasRight = Math.random() > 0.35;
        nodes.push({
          x: biasRight
            ? window.innerWidth * (0.35 + Math.random() * 0.65)
            : Math.random() * window.innerWidth,
          y: Math.random() * window.innerHeight,
          vx: (Math.random() - 0.5) * 0.28,
          vy: (Math.random() - 0.5) * 0.28,
          r: 1.2 + Math.random() * 1.4,
        });
      }
    }

    function draw() {
      var dark = document.documentElement.getAttribute('data-theme-mode') === 'dark';
      var w = window.innerWidth;
      var h = window.innerHeight;
      ctx.clearRect(0, 0, w, h);
      ctx.strokeStyle = dark ? 'rgba(45,212,191,0.35)' : 'rgba(15,118,110,0.22)';
      ctx.fillStyle = dark ? 'rgba(94,234,212,0.75)' : 'rgba(15,118,110,0.5)';
      ctx.lineWidth = 1;
      for (var i = 0; i < nodes.length; i++) {
        var a = nodes[i];
        a.x += a.vx; a.y += a.vy;
        if (a.x < 0 || a.x > w) a.vx *= -1;
        if (a.y < 0 || a.y > h) a.vy *= -1;
        ctx.beginPath();
        ctx.arc(a.x, a.y, a.r, 0, Math.PI * 2);
        ctx.fill();
        for (var j = i + 1; j < nodes.length; j++) {
          var b = nodes[j];
          var dx = a.x - b.x, dy = a.y - b.y;
          var dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < linkDist) {
            ctx.globalAlpha = (1 - dist / linkDist) * (dark ? 0.7 : 0.5);
            ctx.beginPath();
            ctx.moveTo(a.x, a.y);
            ctx.lineTo(b.x, b.y);
            ctx.stroke();
            ctx.globalAlpha = 1;
          }
        }
      }
      requestAnimationFrame(draw);
    }

    resize();
    window.addEventListener('resize', resize);
    draw();
  }

  function navDrawer() {
    var btn = document.getElementById('nav-burger');
    var drawer = document.getElementById('nav-drawer');
    if (!btn || !drawer) return;

    function setOpen(open) {
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      drawer.hidden = !open;
      document.body.classList.toggle('nav-open', open);
    }

    btn.addEventListener('click', function () {
      setOpen(btn.getAttribute('aria-expanded') !== 'true');
    });
    drawer.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () { setOpen(false); });
    });
    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') setOpen(false);
    });
    window.addEventListener('resize', function () {
      if (window.matchMedia('(min-width: 720px)').matches) setOpen(false);
    });
  }

  function langSwitch() {
    var sel = document.getElementById('lang-switch');
    if (!sel) return;
    sel.addEventListener('change', function () {
      var next = sel.value;
      var page = sel.dataset.page || 'home';
      document.cookie = 'vespera_lang=' + encodeURIComponent(next) + ';path=/;max-age=' + (365 * 86400) + ';SameSite=Lax';
      var base = (document.body && document.body.dataset.previewBase) || '';
      var slug = page === 'home' ? '' : page + '/';
      if (next === 'en') {
        window.location.href = base + '/' + slug;
      } else {
        window.location.href = base + '/' + next + '/' + slug;
      }
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    revealOnScroll();
    observeEarn();
    liveStats();
    countdown();
    faq();
    quiz();
    neuralCanvas();
    langSwitch();
    navDrawer();
  });
})();
