(function () {
  var KEY = 'vespera_theme';
  var root = document.documentElement;

  function preferred() {
    try {
      var saved = localStorage.getItem(KEY);
      if (saved === 'light' || saved === 'dark') return saved;
    } catch (e) {}
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  }

  function apply(mode) {
    root.setAttribute('data-theme-mode', mode);
    try { localStorage.setItem(KEY, mode); } catch (e) {}
    var btn = document.getElementById('theme-toggle');
    if (btn) {
      var next = mode === 'dark' ? 'light' : 'dark';
      btn.setAttribute('aria-label', btn.getAttribute('data-label-' + next) || 'Toggle theme');
    }
  }

  apply(preferred());

  document.addEventListener('DOMContentLoaded', function () {
    apply(preferred());
    var btn = document.getElementById('theme-toggle');
    if (!btn) return;
    btn.addEventListener('click', function () {
      var cur = root.getAttribute('data-theme-mode') === 'dark' ? 'dark' : 'light';
      apply(cur === 'dark' ? 'light' : 'dark');
    });
  });
})();
