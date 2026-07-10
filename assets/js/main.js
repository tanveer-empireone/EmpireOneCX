// ====================
// MOBILE MENU TOGGLE
// ====================
const menuToggle = document.getElementById('menu-toggle');
const mobileMenuContainer = document.getElementById('mobile-menu-container');
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
const mobileButton = document.getElementById('mobile-button');
const menuIcon = document.getElementById('menu-icon');
const navLinks = document.querySelectorAll('.nav-link');
const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

let isMenuOpen = false;

const openMobileMenu = () => {
  if (!mobileMenuContainer || !mobileMenuOverlay) return;

  mobileMenuContainer.classList.add('open');
  mobileMenuOverlay.classList.add('active');
  document.body.style.overflow = 'hidden';

  if (menuIcon) {
    menuIcon.innerHTML =
      '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
  }
  isMenuOpen = true;
};

const closeMobileMenu = () => {
  if (!mobileMenuContainer || !mobileMenuOverlay) return;

  mobileMenuContainer.classList.remove('open');
  mobileMenuOverlay.classList.remove('active');
  document.body.style.overflow = '';

  if (menuIcon) {
    menuIcon.innerHTML =
      '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
  }
  isMenuOpen = false;
};

// Toggle menu
menuToggle?.addEventListener('click', (e) => {
  e.stopPropagation();
  isMenuOpen ? closeMobileMenu() : openMobileMenu();
});

mobileButton?.addEventListener('click', openMobileMenu);
mobileMenuOverlay?.addEventListener('click', closeMobileMenu);

// Close menu when clicking outside
document.addEventListener('click', (e) => {
  if (
    isMenuOpen &&
    mobileMenuContainer &&
    !mobileMenuContainer.contains(e.target) &&
    e.target !== menuToggle
  ) {
    closeMobileMenu();
  }
});

// Close menu on ESC
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && isMenuOpen) closeMobileMenu();
});

// Close menu on desktop resize
window.addEventListener('resize', () => {
  if (window.innerWidth >= 1024 && isMenuOpen) closeMobileMenu();
});

// ====================
// NAV LINK ACTIVE STATE (COMMENTED OUT)
// ====================
const syncActiveLinks = (sourceLinks, targetLinks, clickedLink) => {
  sourceLinks.forEach(l => l.classList.remove('active'));
  targetLinks.forEach(l => l.classList.remove('active'));

  clickedLink.classList.add('active');

  targetLinks.forEach(l => {
    if (l.textContent.trim() === clickedLink.textContent.trim()) {
      l.classList.add('active');
    }
  });
};

// ====================
// SCROLL ANIMATIONS
// ====================
document.addEventListener("DOMContentLoaded", () => {
  // 1. General reveal animation
  const revealElements = document.querySelectorAll(".animate-reveal");
  if (revealElements.length) {
    const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    if (reduceMotion) {
      revealElements.forEach(element => element.classList.add("is-visible"));
    } else {
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            obs.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.12,
        rootMargin: "0px 0px -8% 0px",
      }
    );

      revealElements.forEach(element => observer.observe(element));
    }
  }

  // 2. Buildwith section animation
  const buildwithSection = document.querySelector(".buildwith");
  if (buildwithSection) {
    const text = buildwithSection.querySelector(".buildwithpara");
    const logos = buildwithSection.querySelectorAll(".buildwithbadges");
    
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Text first
            setTimeout(() => {
              text.classList.add("is-visible");
            }, 150);

            // Logos one by one
            logos.forEach((logo, index) => {
              setTimeout(() => {
                logo.classList.add("is-visible");
              }, 400 + index * 150);
            });

            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    observer.observe(buildwithSection);
  }

  // 3. About section animation
  const aboutLeft = document.querySelector("#about-left");
  if (aboutLeft) {
    const items = [...aboutLeft.children];
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            items.forEach((item, index) => {
              setTimeout(() => {
                item.classList.add("is-visible");
              }, index * 180);
            });
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.35 }
    );
    observer.observe(aboutLeft);
  }

  // 4. Choose us section animation
  const chooseusSection = document.querySelector(".chooseus-section");
  if (chooseusSection) {
    const textItems = chooseusSection.querySelectorAll("h2, p, h4");
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            textItems.forEach((el, index) => {
              setTimeout(() => {
                el.classList.add("is-visible");
              }, index * 120);
            });
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    observer.observe(chooseusSection);
  }

  const scrollElements = document.querySelectorAll(".scroll-animate");
  if (scrollElements.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.1,
        rootMargin: "0px 0px -30% 0px", // 🔥 pehle trigger
      }
    );

    scrollElements.forEach((el) => observer.observe(el));
  }

  // 6. Smart solutions animation
  const smartSolutionsSection = document.querySelector(".smart-solutions");
  if (smartSolutionsSection) {
    const textItems = smartSolutionsSection.querySelectorAll("h2, h4, p");
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            textItems.forEach((el, index) => {
              setTimeout(() => {
                el.classList.add("is-visible");
              }, index * 140);
            });
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    observer.observe(smartSolutionsSection);
  }

  // 7. Leadership section animation
  const leadershipSection = document.querySelector(".leadership-presence");
  if (leadershipSection) {
    const textItems = leadershipSection.querySelectorAll("h3, p, .leadershipbadge");
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            textItems.forEach((el, index) => {
              setTimeout(() => {
                el.classList.add("is-visible");
              }, index * 140);
            });
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    observer.observe(leadershipSection);
  }

  // 8. Corporate social section animation
  const corporateSection = document.querySelector(".corporate-social");
  if (corporateSection) {
    const textItems = corporateSection.querySelectorAll("h1, h3, p, .coptext");
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            textItems.forEach((el, index) => {
              setTimeout(() => {
                el.classList.add("is-visible");
              }, index * 140);
            });
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    observer.observe(corporateSection);
  }

  // 9. Customer service animation
  const customerSection = document.querySelector(".customer-service");
  if (customerSection) {
    const heading = customerSection.querySelector(".customersformat");
    const counters = customerSection.querySelectorAll(".mytexx > div");
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Heading first
            heading.classList.add("is-visible");

            // Counters one by one
            counters.forEach((item, index) => {
              setTimeout(() => {
                item.classList.add("is-visible");
              }, 200 + index * 140);
            });

            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.35 }
    );
    observer.observe(customerSection);
  }
});
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".business-thrive");
  if (!section) return;

  // Reset classes first (important)
  const leftTextItems = Array.from(section.querySelectorAll(".left-side-thrive > *"));
  const rightTextItems = Array.from(section.querySelectorAll(".right-side-thrive > *"));
  
  // Remove existing is-visible classes to reset
  [...leftTextItems, ...rightTextItems].forEach(el => {
    el.classList.remove("is-visible");
  });

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Left text stagger
          leftTextItems.forEach((el, i) => {
            setTimeout(() => {
              el.classList.add("is-visible");
            }, i * 150);
          });

          // Right text stagger
          rightTextItems.forEach((el, i) => {
            setTimeout(() => {
              el.classList.add("is-visible");
            }, i * 150 + leftTextItems.length * 50); // Added slight offset
          });

          obs.unobserve(entry.target);
        } else {
          // Optional: Remove classes when out of view
          [...leftTextItems, ...rightTextItems].forEach(el => {
            el.classList.remove("is-visible");
          });
        }
      });
    },
    { 
      threshold: 0.3,
      rootMargin: "0px 0px -50px 0px" // Adjust this as needed
    }
  );

  observer.observe(section);
});

document.addEventListener("DOMContentLoaded", () => {
  const scrollElements = document.querySelectorAll(".culture-section .scroll-animate");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const elements = Array.from(scrollElements);
          elements.forEach((el, index) => {
            setTimeout(() => el.classList.add("is-visible"), index * 150); // staggered animation
          });
          observer.disconnect(); // run once
        }
      });
    },
    { threshold: 0.3 }
  );

  scrollElements.forEach((el) => observer.observe(el));
});

document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".standout-mainworkset");
  if (!section) return;

  const elements = section.querySelectorAll("p, h2, .about-page-para, ul li");

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        elements.forEach((el, index) => {
          setTimeout(() => {
            el.classList.add("is-visible");
          }, index * 150); // stagger each element for professional feel
        });
        obs.unobserve(entry.target); // only animate once
      }
    });
  }, { threshold: 0.3 });

  observer.observe(section);
});

document.addEventListener("DOMContentLoaded", () => {
  // Text elements
  const textItems = document.querySelectorAll(".cta-left-sidework h2, .cta-left-sidework p, .future-btn a");
  const textObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add("text-visible");
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  textItems.forEach(el => textObserver.observe(el));

  // Images
  const images = document.querySelectorAll(".cta-rightside img");
  const imgObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  images.forEach(img => imgObserver.observe(img));
});

// Animate Leadership Text & Image
const leadershipElements = document.querySelectorAll('.behind-leadership-leftside p, .behind-leadership-leftside h2, .behind-leadership-rightside img');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
    }
  });
}, { threshold: 0.2 });

leadershipElements.forEach(el => observer.observe(el));

// ====================
// COUNTER ANIMATION
// ====================
const counters = document.querySelectorAll('.counter');
if (counters.length) {
  const animateCounter = (el) => {
    const target = parseFloat(el.dataset.target);
    const decimalPlaces = el.dataset.decimal ? parseInt(el.dataset.decimal) : 0;
    const suffix = el.dataset.suffix || '';
    let count = 0;
    const increment = target / 200;

    const update = () => {
      count += increment;
      if (count < target) {
        el.innerText =
          decimalPlaces > 0
            ? count.toFixed(decimalPlaces) + suffix
            : Math.floor(count) + suffix;
        requestAnimationFrame(update);
      } else {
        el.innerText =
          decimalPlaces > 0
            ? target.toFixed(decimalPlaces) + suffix
            : target + suffix;
      }
    };
    update();
  };

  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.6 });

  counters.forEach(counter => counterObserver.observe(counter));
}

// ====================
// TAILWIND CONFIG (SAFE) - YEH BHI ADD KAR DIYA!
// ====================
if (typeof module !== "undefined") {
  module.exports = {
    theme: {
      extend: {
        fontFamily: {
          helvetica: ["Helvetica Neue", "Arial", "sans-serif"],
          reckless: ["Reckless Neue", "Arial", "sans-serif"],
          recklessItalic: ["reckless-italic", "Arial", "sans-serif"],
        },
      },
    },
  };
}
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector("header");
  const progressBar = document.getElementById("top-scroll-progress");
  const scrollThreshold = 50;
  let scrollFrame = 0;

  const updateScrollUi = () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const progress = scrollHeight > 0 ? Math.min(1, scrollTop / scrollHeight) : 0;

    if (header) {
      header.classList.toggle("scrolled", scrollTop > scrollThreshold);
    }

    if (progressBar) {
      progressBar.style.transform = `scaleX(${progress})`;
    }

    scrollFrame = 0;
  };

  const requestScrollUiUpdate = () => {
    if (!scrollFrame) {
      scrollFrame = requestAnimationFrame(updateScrollUi);
    }
  };

  updateScrollUi();
  window.addEventListener("scroll", requestScrollUiUpdate, { passive: true });
  window.addEventListener("resize", requestScrollUiUpdate, { passive: true });
});

const toggle = document.getElementById("countryToggle");
const dropdown = document.getElementById("countryDropdown");
const flag = document.getElementById("selectedFlag");
const code = document.getElementById("selectedCode");

document.querySelectorAll(".mobile-submenu-toggle").forEach(button => {
  button.addEventListener("click", () => {
    const group = button.closest(".mobile-solutions-group, .mobile-industries-group, .mobile-resources-group, .mobile-locations-group");
    if (!group) return;

    const isOpen = group.classList.toggle("is-open");
    button.setAttribute("aria-expanded", isOpen ? "true" : "false");
  });
});

if (toggle && dropdown && flag && code) {
  toggle.addEventListener("click", () => {
    dropdown.classList.toggle("hidden");
  });

  document.querySelectorAll(".country-item").forEach(item => {
    item.addEventListener("click", () => {
      code.textContent = item.dataset.code;
      flag.src = `https://flagcdn.com/w20/${item.dataset.flag}.png`;
      dropdown.classList.add("hidden");
    });
  });

  document.addEventListener("click", (e) => {
    if (!toggle.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.classList.add("hidden");
    }
  });
}


document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll('.line-btn[href*="#"]');

    buttons.forEach(btn => {
        btn.addEventListener("click", function(e) {
            const targetId = new URL(this.href, window.location.href).hash;
            const target = targetId ? document.querySelector(targetId) : null;

            if (!target) {
                return;
            }

            e.preventDefault();

            buttons.forEach(item => {
                item.classList.remove("active");
            });

            this.classList.add("active");

            if (window.lenis) {
                window.lenis.scrollTo(target, {
                    offset: -110,
                    immediate: true,
                });
            } else {
                const targetTop = target.getBoundingClientRect().top + window.scrollY - 110;
                window.scrollTo({
                    top: targetTop,
                    behavior: "auto",
                });
            }

            if (window.history && window.history.replaceState) {
                window.history.replaceState(
                    null,
                    "",
                    window.location.pathname + window.location.search + targetId
                );
            }
        });
    });
});
