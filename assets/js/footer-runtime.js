// Shared footer runtime extracted to reduce rendered HTML weight.
(function () {
    const links = document.querySelectorAll('.nav-link');
    const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
    const currentPage = currentPath.split('/').pop() || 'home';

    links.forEach(link => {
    const linkPath = (link.getAttribute('href') || '').replace(/\/$/, '') || '/';
    const linkPage = linkPath.split('/').pop() || 'home';

    // pehle sab se active hatao
    link.classList.remove('active');

    // current page se match ho to active lagao
    if (
        linkPath === currentPath ||
        linkPage === currentPage ||
        (linkPath === '/solutions/' && currentPath.startsWith('/solutions/')) ||
        (linkPath === '/industries/' && currentPath.startsWith('/industries/')) ||
        (linkPath === '/global-footprint/' && currentPath.startsWith('/global-footprint/')) ||
        (link.classList.contains('nav-resources-link') && (
            currentPath.startsWith('/insights/') ||
            currentPath.startsWith('/case-study') ||
            currentPath.startsWith('/compliance-security/') ||
            currentPath.startsWith('/faq/')
        ))
    ) {
        link.classList.add('active');
    }
    });

    document.querySelectorAll('.nav-dropdown-menu a, .mobile-solutions-submenu a, .mobile-industries-submenu a, .mobile-resources-submenu a, .mobile-locations-submenu a').forEach(link => {
        const linkPath = (link.getAttribute('href') || '').replace(/\/$/, '') || '/';
        link.classList.toggle('active', linkPath === currentPath);
    });

    document.querySelectorAll('.mobile-resources-link').forEach(link => {
        link.classList.toggle('active',
            currentPath.startsWith('/insights/') ||
            currentPath.startsWith('/case-study') ||
            currentPath.startsWith('/compliance-security/') ||
            currentPath.startsWith('/faq/')
        );
    });
})();

document.addEventListener("DOMContentLoaded", () => {
    const selectors = ".fade-zoom-reveal, .solution-card-reveal, .reveal-left, .reveal-right, .empire-slide-left, .empire-slide-right, .about-side-image";
    const elements = document.querySelectorAll(selectors);

    if (!elements.length) {
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-active");
            } else {
                entry.target.classList.remove("is-active");
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    });

    elements.forEach(el => observer.observe(el));
});

function openPopup(el) {
  document.getElementById('popupTitle').innerText = el.dataset.title;
  document.getElementById('popupText').innerText = el.dataset.text;

  const modal = document.getElementById('popupModal');
  const box = document.getElementById('popupBox');

  modal.classList.remove('hidden');

  setTimeout(() => {
    box.classList.remove('scale-95', 'opacity-0');
    box.classList.add('scale-100', 'opacity-100');
  }, 10);
}

function closePopup() {
  const modal = document.getElementById('popupModal');
  const box = document.getElementById('popupBox');

  box.classList.add('scale-95', 'opacity-0');

  setTimeout(() => {
    modal.classList.add('hidden');
  }, 200);
}

(function () {
    const originalTitle = document.title;
    const titleElement = document.querySelector("title");
    const chatTitlePattern = /^\(?\d+\)?\s+new messages?/i;

    function restorePageTitle() {
        if (chatTitlePattern.test(document.title)) {
            document.title = originalTitle;
        }
    }

    if (titleElement && "MutationObserver" in window) {
        new MutationObserver(restorePageTitle).observe(titleElement, {
            childList: true,
            subtree: true
        });
    }

    window.addEventListener("focus", restorePageTitle);
    window.addEventListener("visibilitychange", restorePageTitle);
    setInterval(restorePageTitle, 1000);
})();

(function () {
    function loadAvaChat() {
        if (document.querySelector('script[data-ava-chatbot]')) return;
        var script = document.createElement('script');
        script.src = '/assets/js/ai-chatbot.js?v=20260805-1';
        script.defer = true;
        script.dataset.avaChatbot = 'true';
        document.body.appendChild(script);
    }

    if ('requestIdleCallback' in window) {
        window.requestIdleCallback(loadAvaChat, { timeout: 2500 });
    } else {
        window.addEventListener('load', function () {
            window.setTimeout(loadAvaChat, 1200);
        });
    }
})();

function toggleFaq(button) {
        const currentItem = button.closest('.faq-item');
        const allItems = document.querySelectorAll('.faq-item');

        // Close other items
        allItems.forEach(item => {
            if (item !== currentItem && item.classList.contains('active')) {
                item.classList.remove('active');
            }
        });

        // Toggle current item
        currentItem.classList.toggle('active');
    }
