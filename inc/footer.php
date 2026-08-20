    <style>
    @media (max-width: 767px) {
        footer .footer-contact {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            gap: 10px !important;
            width: 100% !important;
            text-align: center !important;
        }

        footer .footer-contact h3 {
            margin: 0 !important;
            font-size: 22px !important;
            line-height: 28px !important;
        }

        footer .footer-contact address {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            gap: 10px !important;
            width: 100% !important;
            font-size: 14px !important;
            line-height: 22px !important;
        }

        footer .footer-contact address p {
            margin: 0 !important;
        }

        footer .footericons {
            justify-content: center !important;
            width: 100% !important;
        }

        footer .footericons-wrapper {
            justify-content: center !important;
            width: 100% !important;
        }

        footer .mainherit {
            align-items: center !important;
            width: 100% !important;
            text-align: center !important;
        }

        footer .footerterms {
            justify-content: center !important;
            width: 100% !important;
        }

        footer .myfooterline {
            text-align: center !important;
        }
    }
    </style>
</div>
    <footer class="bg-[rgba(6,19,30,1)] text-white py-12 md:py-20 relative overflow-hidden">
        <div class="footer-side-image absolute right-0 top-[8%]">
            <img src="/assets/images/footersideimg.webp" class="w-[80px] h-[118px] opacity-100 rotate-0" alt="footer side image" />
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row justify-between items-center items-start gap-8 lg:gap-12 mb-12 md:mb-16">
                <div class="perfectwork w-full">
                    <p class="perfectfonts font-reckless font-normal text-[24px] leading-[32px] tracking-[-0.03em] mb-4">
                        <span class="text-[#D8B4FE]"><?php echo !empty($isSpanishSite) ? 'La alianza' : 'The Perfect'; ?></span>
                        <span class="text-[#FDBA74]"> <?php echo !empty($isSpanishSite) ? 'perfecta' : 'Partnership'; ?></span>
                    </p>
                    <h2 class="text-[30px] md:text-[34px] leading-[38px] md:leading-[42px] tracking-[-0.01em] max-w-[720px]">
                        <?php echo !empty($isSpanishSite) ? 'IA avanzada + inteligencia humana<br class="hidden sm:block"> real = satisfacción del cliente garantizada' : 'Where advanced AI meets real human intelligence,<br class="hidden sm:block"> customer satisfaction follows.'; ?>
                    </h2>
                </div>
                <div class="flex flex-col lg:items-end gap-6 w-full lg:w-auto">
                    <button onclick="window.location.href='/contact'" class="footerbtn bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] 
                        text-white font-bold py-4 px-8 rounded-lg shadow-lg 
                        relative overflow-hidden group tracking-wide 
                        w-full sm:w-auto text-sm sm:text-[14px]
                        transition-all duration-300 ease-in-out transform hover:-translate-y-0.5 hover:shadow-2xl">

                            <!-- Text with subtle scale on hover -->
                            <span class="myfootbtnfont text-[16px] leading-[24px] tracking-[-0.02em] relative z-10 group-hover:scale-105 transition-transform duration-300 ease-in-out">
                                <?php echo !empty($isSpanishSite) ? 'Mejore su experiencia del cliente hoy' : 'Upgrade Your Customer Experience Today!'; ?>
                            </span>

                            <!-- Overlay effect -->
                            <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-30 transition-opacity duration-300 rounded-lg"></div>
                    </button>

                    <div class="footlogo flex justify-center lg:justify-end w-full">
                        <div class="midfootlogo flex justify-center items-center gap-[28px] w-[446px] h-[64px]">
                            <img src="/assets/images/footerlogo1.webp" alt="Trusted Partner SOC 2 Type 2" loading="lazy">
                            <img src="/assets/images/footerlogo2.webp" alt="Trusted Partner PCI DSS" loading="lazy">
                            <img src="/assets/images/footerlogo3.webp" alt="Trusted Partner Hippa Complaint" loading="lazy">
                            <img src="/assets/images/footerlogo4.webp" alt="Trusted Partner GDPR" loading="lazy">
                            <img src="/assets/images/footerlogo5.webp" alt="Trusted Partner ISO 2701 2022" loading="lazy">
                            <img src="/assets/images/footerlogo6.webp" alt="Trusted Partner ISO 2701 2022" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800/50 mb-10 md:mb-16"></div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-12 items-start">
                <div class="footer-contact text-left">
                    <h3 class="font-reckless text-white text-[24px] leading-[32px] mb-4"><?php echo !empty($isSpanishSite) ? 'Contacto:' : 'Contact:'; ?></h3>
                    <address class="not-italic text-gray-300 text-[16px] leading-[28px] space-y-3">
                        <p>250 Consumers Rd suite 810,<br>Toronto, ON M2J 4V6</p>
                        <p><a href="mailto:info@empireonecx.com" class="hover:text-white transition whitespace-nowrap">info@empireonecx.com</a></p>
                        <p><a href="tel:+18002332843" class="hover:text-white transition whitespace-nowrap">+1 (800) 233 2843</a></p>
                    </address>
                </div>
                <div class="footermenu flex flex-col sm:flex-row justify-center text-left gap-8 sm:gap-16 lg:mx-auto lg:min-w-[360px]">
                    <div>
                        <ul class="text-[24px] leading-[35px] tracking-[-0.02em]
                                space-y-3 sm:space-y-4 text-gray-300">
                            <li><a href="<?php echo !empty($isSpanishSite) ? '/es/' : '/'; ?>" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Inicio' : 'Home'; ?></a></li>
                            <li><a href="/about-us" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Sobre nosotros' : 'About Us'; ?></a></li>
                            <li><a href="/solutions/" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Soluciones' : 'Solutions'; ?></a></li>
                            <li><a href="/industries/" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Industrias' : 'Industries'; ?></a></li>
                        </ul>
                    </div>

                    <div>
                        <ul class="text-[24px] leading-[35px] tracking-[-0.02em]
                                space-y-3 sm:space-y-4 text-gray-300">
                            <li><a href="/case-study" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Casos de éxito' : 'Case Studies'; ?></a></li>
                            <li><a href="/insights/" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Recursos' : 'Insights'; ?></a></li>
                            <li><a href="https://careers.empireonecx.com/" target="_blank" rel="noopener noreferrer" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Carreras' : 'Careers'; ?></a></li>
                            <li><a href="/contact" class="hover:text-white transition whitespace-nowrap"><?php echo !empty($isSpanishSite) ? 'Contacto' : 'Contact'; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col gap-6 md:gap-8 lg:items-end">
                    <div class="footericons-wrapper flex justify-start lg:justify-end">
                        <div class="footericons flex gap-5 sm:gap-6">
                            <a href="https://www.facebook.com/profile.php?id=100089467625882" target="_blank" rel="noopener noreferrer" class="text-white hover:text-[#7A76FF] transition-colors duration-300 text-xl sm:text-4xl">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/empireonebposolutions/?viewAsMember=true" target="_blank" rel="noopener noreferrer" class="text-white hover:text-[#CB46FA] transition-colors duration-300 text-xl sm:text-4xl">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.youtube.com/@empireonebposolutions" target="_blank" rel="noopener noreferrer" class="text-white hover:text-[#FF0000] transition-colors duration-300 text-xl sm:text-4xl">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.instagram.com/empireonebposolutions?igsh=NXJzY3dwN3phaHpq" target="_blank" rel="noopener noreferrer" class="text-white hover:text-[#CB46FA] transition-colors duration-300 text-xl sm:text-4xl">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mainherit [font-family:'helvetica',Arial,sans-serif] font-normal text-[16px] leading-[30px] tracking-normal
                                flex flex-col items-start lg:items-end gap-4">

                        <div class="footerterms flex flex-wrap justify-start lg:justify-end gap-3 sm:gap-4 md:gap-6">
                            <a href="/termsandconditions" class="text-white text-[16px] hover:text-white/70 transition whitespace-nowrap">
                                <?php echo !empty($isSpanishSite) ? 'Términos y condiciones' : 'Terms and Conditions'; ?>
                            </a>
                            <span class="text-white/70 hidden sm:inline">|</span>
                            <a href="/privacy-policy" class="text-white text-[16px] hover:text-white/70 transition whitespace-nowrap nopadright">
                                <?php echo !empty($isSpanishSite) ? 'Política de privacidad' : 'Privacy policy'; ?>
                            </a>
                            <?php if (!empty($enableCookieConsent)): ?>
                                <span class="text-white/70 hidden sm:inline">|</span>
                                <button type="button" class="eocx-cookie-preferences-link whitespace-nowrap" data-cookie-preferences>
                                    <?php echo !empty($isSpanishSite) ? 'Preferencias de cookies' : 'Cookie Preferences'; ?>
                                </button>
                            <?php endif; ?>
                        </div>

                        <p class="mycenter myfooterline text-white text-left lg:text-right w-full" style="font-size: 14px;">
                            © <?= date('Y'); ?> EmpireOneCX <?php echo !empty($isSpanishSite) ? 'Todos los derechos reservados.' : 'All Rights Reserved.'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "EmpireOneCX",
    "url": "https://empireonecx.com",
    "logo": "https://empireonecx.com/assets/images/Empireone-logo.webp",
    "sameAs": [
    "https://www.facebook.com/profile.php?id=100089467625882",
    "https://www.linkedin.com/company/empireonebposolutions/",
    "https://www.youtube.com/@empireonebposolutions",
    "https://www.instagram.com/empireonebposolutions"
    ]
    }
    </script>
    <script defer src="/assets/js/main.js?v=20260612-2"></script>
    <script defer src="/assets/js/sweetalert.js"></script>
<script>
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
</script>

<script>
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
</script>
<script>
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
</script>
<script>
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
</script>
<script>
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
</script>
<?php if (!empty($enableCookieConsent)): ?>
<script src="/assets/js/cookie-consent.js?v=20260619-1"></script>
<?php endif; ?>
<script>
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
</script>
</body>
</html>
