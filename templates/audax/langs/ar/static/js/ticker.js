(() => {
  // Locale tape bundles may 404; retry with /w/en/.
  const TV_TAPE_FALLBACK_RE =
    /^https:\/\/widgets\.tradingview-widget\.com\/w\/([a-z]{2})\/(tv-ticker-tape\.js)(.*)$/i;

  const tradingViewTapeEnFallback = (url) => {
    const m = url.match(TV_TAPE_FALLBACK_RE);
    if (!m || (m[1] && m[1].toLowerCase() === "en")) return "";
    return `https://widgets.tradingview-widget.com/w/en/${m[2]}${m[3] || ""}`;
  };

  const scriptSelectorFor = (url) =>
    `script[data-tv-ticker-script="${CSS?.escape ? CSS.escape(url) : url}"]`;

  const revealQueues = new Map();

  const flushReveals = (url) => {
    const queue = revealQueues.get(url);
    if (!queue) return;
    while (queue.length > 0) {
      queue.shift()();
    }
  };

  const attachTapeAttempt = (url) => {
    const script = document.createElement("script");
    script.type = "module";
    script.async = true;
    script.src = url;
    script.dataset.tvTickerScript = url;
    script.addEventListener(
      "load",
      () => {
        script.dataset.loaded = "true";
        flushReveals(url);
      },
      { once: true }
    );
    script.addEventListener(
      "error",
      () => {
        script.remove();
        const fb = tradingViewTapeEnFallback(url);
        if (fb) {
          const queue = revealQueues.get(url) || [];
          revealQueues.delete(url);
          revealQueues.set(fb, (revealQueues.get(fb) || []).concat(queue));
          attachTapeAttempt(fb);
        } else {
          revealQueues.delete(url);
        }
      },
      { once: true }
    );
    document.head.appendChild(script);
  };

  const loadTradingViewTape = (url, onLoaded) => {
    if (!revealQueues.has(url)) revealQueues.set(url, []);
    revealQueues.get(url).push(onLoaded);

    const existing =
      typeof document.querySelector === "function"
        ? document.querySelector(scriptSelectorFor(url))
        : null;

    if (existing instanceof HTMLScriptElement) {
      if (existing.dataset.loaded === "true") {
        flushReveals(url);
        return;
      }
      existing.addEventListener(
        "load",
        () => flushReveals(url),
        { once: true }
      );
      return;
    }

    attachTapeAttempt(url);
  };

  const mountTicker = (root) => {
    if (root.dataset.chartTickerReady === "1") return;

    const host = root.querySelector("[data-chart-ticker-host]");
    const scriptSrc = root.dataset.tvScript;
    const symbols = root.dataset.tvSymbols;

    if (!(host instanceof HTMLElement) || !scriptSrc || !symbols) return;

    root.dataset.chartTickerReady = "1";

    const themeAttr = root.dataset.tvTheme || "dark";

    const ticker = document.createElement("tv-ticker-tape");
    ticker.setAttribute("symbols", symbols);
    ticker.setAttribute("item-size", root.dataset.tvItemSize || "compact");
    ticker.setAttribute("theme", themeAttr);
    ticker.style.colorScheme = themeAttr;

    if (root.dataset.tvTransparent === "true") {
      ticker.setAttribute("transparent", "");
    }

    if (root.dataset.tvHideChart === "true") {
      ticker.setAttribute("hide-chart", "");
    }

    host.replaceChildren(ticker);

    // Before the quotes arrive the tape paints a skeleton whose cell dividers
    // read as stray vertical lines, and the closed shadow root gives us nothing
    // to wait on. Hold the neutral placeholder long enough that the strip
    // usually reveals with real prices instead.
    const revealTicker = () => {
      window.setTimeout(() => {
        root.classList.add("is-ready");
      }, 1600);
    };

    if (window.customElements?.get("tv-ticker-tape")) {
      revealTicker();
      return;
    }

    loadTradingViewTape(scriptSrc, revealTicker);
  };

  const loadTickers = () => {
    window.setTimeout(() => {
      document.querySelectorAll("[data-chart-ticker]").forEach((el) => {
        if (el instanceof HTMLElement) mountTicker(el);
      });
    }, 1200);
  };

  if (document.readyState === "complete") {
    loadTickers();
    return;
  }

  window.addEventListener("load", loadTickers, { once: true });
})();
