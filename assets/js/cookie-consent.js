(function () {
    "use strict";

    const cookieName = "eocx_cookie_consent";
    const cookieMaxAge = 60 * 60 * 24 * 180;
    const defaultConsent = {
        necessary: true,
        analytics: false,
        marketing: false,
        preferences: false
    };

    function readCookie(name) {
        return document.cookie
            .split("; ")
            .find(function (row) {
                return row.indexOf(name + "=") === 0;
            })
            ?.split("=")[1] || "";
    }

    function getConsent() {
        const saved = readCookie(cookieName);
        if (!saved) {
            return null;
        }

        try {
            return Object.assign({}, defaultConsent, JSON.parse(decodeURIComponent(saved)));
        } catch (error) {
            return null;
        }
    }

    function setConsent(consent) {
        const normalized = Object.assign({}, defaultConsent, consent, { necessary: true });
        document.cookie = cookieName + "=" + encodeURIComponent(JSON.stringify(normalized)) + "; Max-Age=" + cookieMaxAge + "; Path=/; SameSite=Lax";
        window.EmpireOneCookieConsent.current = normalized;
        window.dispatchEvent(new CustomEvent("empireone:cookie-consent", { detail: normalized }));
        return normalized;
    }

    function createButton(label, modifier, action) {
        const button = document.createElement("button");
        button.type = "button";
        button.className = "eocx-cookie__btn " + modifier;
        button.textContent = label;
        button.addEventListener("click", action);
        return button;
    }

    function createToggle(id, label, description, checked, disabled) {
        const row = document.createElement("div");
        row.className = "eocx-cookie-option";
        row.innerHTML = `
            <div>
                <strong>${label}</strong>
                <span>${description}</span>
            </div>
            <label class="eocx-cookie-toggle" for="${id}">
                <input id="${id}" type="checkbox"${checked ? " checked" : ""}${disabled ? " disabled" : ""}>
                <span aria-hidden="true"></span>
            </label>
        `;
        return row;
    }

    function buildModal(currentConsent) {
        const modal = document.createElement("div");
        modal.className = "eocx-cookie-modal";
        modal.hidden = true;
        modal.innerHTML = `
            <div class="eocx-cookie-modal__card" role="dialog" aria-modal="true" aria-labelledby="eocx-cookie-title">
                <div class="eocx-cookie-modal__header">
                    <div>
                        <h2 class="eocx-cookie-modal__title" id="eocx-cookie-title">Cookie preferences</h2>
                        <p class="eocx-cookie-modal__text">Choose which optional cookies EmpireOneCX may use. Necessary cookies stay on because they keep the website working.</p>
                    </div>
                    <button class="eocx-cookie-modal__close" type="button" aria-label="Close cookie preferences">x</button>
                </div>
                <div class="eocx-cookie-options"></div>
                <div class="eocx-cookie-modal__actions"></div>
            </div>
        `;

        const options = modal.querySelector(".eocx-cookie-options");
        options.appendChild(createToggle("eocx-cookie-necessary", "Necessary", "Required for basic site functions and saving your cookie choice.", true, true));
        options.appendChild(createToggle("eocx-cookie-analytics", "Analytics", "Helps us understand website performance and improve visitor experience.", currentConsent.analytics, false));
        options.appendChild(createToggle("eocx-cookie-marketing", "Marketing", "Supports campaign measurement, remarketing, and advertising tools if added later.", currentConsent.marketing, false));
        options.appendChild(createToggle("eocx-cookie-preferences", "Preferences", "Remembers optional site choices such as display or regional preferences if added later.", currentConsent.preferences, false));

        const actions = modal.querySelector(".eocx-cookie-modal__actions");
        actions.appendChild(createButton("Save preferences", "eocx-cookie__btn--primary", function () {
            setConsent({
                analytics: modal.querySelector("#eocx-cookie-analytics").checked,
                marketing: modal.querySelector("#eocx-cookie-marketing").checked,
                preferences: modal.querySelector("#eocx-cookie-preferences").checked
            });
            closeModal();
            hideBanner();
        }));
        actions.appendChild(createButton("Accept all", "eocx-cookie__btn--ghost", function () {
            setConsent({ analytics: true, marketing: true, preferences: true });
            closeModal();
            hideBanner();
        }));
        actions.appendChild(createButton("Reject optional", "eocx-cookie__btn--text", function () {
            setConsent(defaultConsent);
            closeModal();
            hideBanner();
        }));

        modal.querySelector(".eocx-cookie-modal__close").addEventListener("click", closeModal);
        modal.addEventListener("click", function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });

        function openModal() {
            const latest = getConsent() || currentConsent;
            modal.querySelector("#eocx-cookie-analytics").checked = !!latest.analytics;
            modal.querySelector("#eocx-cookie-marketing").checked = !!latest.marketing;
            modal.querySelector("#eocx-cookie-preferences").checked = !!latest.preferences;
            modal.hidden = false;
            modal.querySelector(".eocx-cookie-modal__close").focus();
        }

        function closeModal() {
            modal.hidden = true;
        }

        document.addEventListener("keydown", function (event) {
            if (event.key === "Escape" && !modal.hidden) {
                closeModal();
            }
        });

        document.body.appendChild(modal);
        return { open: openModal, close: closeModal };
    }

    function buildBanner(modalApi) {
        const banner = document.createElement("aside");
        banner.className = "eocx-cookie";
        banner.setAttribute("aria-label", "Cookie consent");
        banner.innerHTML = `
            <div class="eocx-cookie__card">
                <p class="eocx-cookie__eyebrow"><i class="fas fa-shield-halved" aria-hidden="true"></i> Privacy choices</p>
                <h2 class="eocx-cookie__title">We respect your privacy</h2>
                <p class="eocx-cookie__text">EmpireOneCX uses necessary cookies to keep the site working. With your permission, we may use analytics or marketing cookies to improve the website. Read our <a href="/privacy-policy">privacy policy</a>.</p>
                <div class="eocx-cookie__actions"></div>
            </div>
        `;

        const actions = banner.querySelector(".eocx-cookie__actions");
        actions.appendChild(createButton("Accept all", "eocx-cookie__btn--primary", function () {
            setConsent({ analytics: true, marketing: true, preferences: true });
            hideBanner();
        }));
        actions.appendChild(createButton("Reject optional", "eocx-cookie__btn--ghost", function () {
            setConsent(defaultConsent);
            hideBanner();
        }));
        actions.appendChild(createButton("Manage preferences", "eocx-cookie__btn--text", modalApi.open));

        document.body.appendChild(banner);
        return banner;
    }

    let banner = null;

    function hideBanner() {
        if (banner) {
            banner.hidden = true;
        }
    }

    function init() {
        const savedConsent = getConsent();
        const currentConsent = savedConsent || defaultConsent;
        window.EmpireOneCookieConsent = {
            current: currentConsent,
            get: getConsent,
            set: setConsent,
            openPreferences: function () {}
        };

        const modalApi = buildModal(currentConsent);
        window.EmpireOneCookieConsent.openPreferences = modalApi.open;

        document.querySelectorAll("[data-cookie-preferences]").forEach(function (trigger) {
            trigger.addEventListener("click", function (event) {
                event.preventDefault();
                modalApi.open();
            });
        });

        if (!savedConsent) {
            banner = buildBanner(modalApi);
        }

        window.dispatchEvent(new CustomEvent("empireone:cookie-consent", { detail: currentConsent }));
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", init);
    } else {
        init();
    }
})();
