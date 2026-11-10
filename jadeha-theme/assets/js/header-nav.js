/**
 * Header Navigation & Mobile Menu Handler
 * Synchronizes active states and mobile menu interaction
 */
document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Drawer Toggle with Hamburger -> Close Icon swap
  const mobileBtn = document.getElementById('mobile-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const iconHamburger = mobileBtn ? mobileBtn.querySelector('.icon-hamburger') : null;
  const iconClose = mobileBtn ? mobileBtn.querySelector('.icon-close') : null;

  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('hidden');
      if (isOpen) {
        mobileMenu.classList.add('hidden');
        if (iconHamburger) iconHamburger.classList.remove('hidden');
        if (iconClose) iconClose.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      } else {
        mobileMenu.classList.remove('hidden');
        if (iconHamburger) iconHamburger.classList.add('hidden');
        if (iconClose) iconClose.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
      }
    });
  }

  // 1b. Mobile Folder Accordion Toggle
  document.querySelectorAll('.mobile-folder-toggle').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const folder = btn.closest('.mobile-folder');
      if (!folder) return;
      const subnav = folder.querySelector('.mobile-subnav');
      const arrow = folder.querySelector('.folder-arrow');
      if (subnav) {
        const isCollapsed = subnav.classList.contains('hidden');
        if (isCollapsed) {
          subnav.classList.remove('hidden');
          subnav.classList.add('flex');
          if (arrow) arrow.classList.add('rotate-180');
        } else {
          subnav.classList.add('hidden');
          subnav.classList.remove('flex');
          if (arrow) arrow.classList.remove('rotate-180');
        }
      }
    });
  });

  // 2. Auto-detect Active Header & Mobile Menu Links
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  const portfolioPages = ['portfolio.html', 'fashion.html', 'couples.html', 'portraits.html', 'branding.html', 'maternity.html', 'boudoir.html'];

  document.querySelectorAll('.main-navigation a, #mobile-menu a').forEach(link => {
    const href = link.getAttribute('href');
    if (!href || href.startsWith('javascript:')) return;

    if (href === currentPath || (currentPath === '' && href === 'index.html') || (href.endsWith(currentPath) && currentPath !== '')) {
      link.classList.add('active');
      const folder = link.closest('.nav-item.folder, .mobile-folder');
      if (folder) {
        const parentLink = folder.querySelector(':scope > a, :scope > span, .mobile-folder-toggle, .folder-toggle');
        if (parentLink) parentLink.classList.add('active');
        // Auto-expand mobile folder if on active child page
        const subnav = folder.querySelector('.mobile-subnav');
        const arrow = folder.querySelector('.folder-arrow');
        if (subnav) {
          subnav.classList.remove('hidden');
          subnav.classList.add('flex');
          if (arrow) arrow.classList.add('rotate-180');
        }
      }
    }
  });

  // Highlight Portfolio in top nav & mobile menu when viewing any portfolio category
  if (portfolioPages.includes(currentPath)) {
    document.querySelectorAll('.main-navigation a[href*="portfolio"], #mobile-menu a[href*="portfolio"]').forEach(a => {
      a.classList.add('active');
    });
  }

  // 3. Scroll-aware Header Hide/Show (Exact Jade Ha behavior)
  let lastScrollY = window.scrollY;
  const siteHeader = document.querySelector('.site-header');

  window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;
    if (!siteHeader) return;

    if (currentScrollY > 100 && currentScrollY > lastScrollY) {
      // Scrolling down -> hide header
      siteHeader.classList.add('hide-header');
    } else {
      // Scrolling up or near top -> show header
      siteHeader.classList.remove('hide-header');
    }
    lastScrollY = currentScrollY;
  }, { passive: true });

  // 4. Dynamic Auto-Fit Gallery Rows (Ensures equal heights & 0 white gaps even if images are swapped)
  function initGalleryAutoFit() {
    const rows = document.querySelectorAll('.flex.w-full.m-0.p-0.items-stretch');
    rows.forEach(row => {
      const items = Array.from(row.children).filter(el => el.querySelector('img'));
      if (items.length <= 1) return;

      const imgs = items.map(item => item.querySelector('img'));

      function recalculateWidths() {
        const ratios = imgs.map(img => {
          if (img.naturalWidth && img.naturalHeight) {
            return img.naturalWidth / img.naturalHeight;
          }
          return 1;
        });

        const totalRatio = ratios.reduce((sum, r) => sum + r, 0);
        if (totalRatio > 0) {
          items.forEach((item, idx) => {
            const pct = (ratios[idx] / totalRatio) * 100;
            item.style.width = pct.toFixed(4) + '%';
          });
        }
      }

      imgs.forEach(img => {
        if (img.complete && img.naturalWidth > 0) {
          // If already loaded
        } else {
          img.addEventListener('load', recalculateWidths, { once: true });
        }
      });

      // Also run if all images already loaded from cache
      if (imgs.every(img => img.complete && img.naturalWidth > 0)) {
        recalculateWidths();
      }
    });
  }

  initGalleryAutoFit();
});

