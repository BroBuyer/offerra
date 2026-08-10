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
