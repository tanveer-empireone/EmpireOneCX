<?php
http_response_code(404);

$page_title = "404 Page Not Found | EmpireOneCX";
$meta_description = "The page you are looking for could not be found. Search EmpireOneCX, visit a key page, or contact our team for support.";
$metaKeywords = "EmpireOneCX 404, page not found, customer experience outsourcing, BPO support";
$metaRobots = "noindex, follow";

include("inc/header.php");
?>

<style>
.error-page {
    background: #ffffff;
    color: #101014;
}
.error-hero {
    position: relative;
    min-height: 650px;
    padding: 150px 0 80px;
    overflow: hidden;
    color: #fff;
    background: #090910 url("/assets/images/herobgdownimage.webp") center/cover no-repeat;
}
.error-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(9, 9, 16, 0.94) 0%, rgba(25, 18, 39, 0.84) 52%, rgba(9, 9, 16, 0.78) 100%);
}
.error-hero__inner {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: minmax(0, 1.05fr) minmax(320px, 0.95fr);
    gap: 48px;
    align-items: center;
}
.error-kicker {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    color: #fff;
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}
.error-kicker::before {
    content: "";
    width: 34px;
    height: 2px;
    border-radius: 999px;
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 52%, #FE881C 100%);
}
.error-heading {
    margin: 0;
    max-width: 760px;
    font-size: clamp(46px, 7vw, 96px);
    line-height: 0.96;
    font-weight: 600;
    letter-spacing: 0;
}
.error-heading span {
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 52%, #FE881C 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.error-copy {
    max-width: 650px;
    margin: 22px 0 0;
    color: rgba(255, 255, 255, 0.82);
    font-size: 18px;
    line-height: 30px;
}
.error-search {
    margin-top: 32px;
    max-width: 640px;
}
.error-search__bar {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 8px;
    padding: 8px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(12px);
}
.error-search__bar input {
    min-width: 0;
    height: 48px;
    border: 0;
    outline: none;
    border-radius: 7px;
    padding: 0 16px;
    color: #101014;
    background: #fff;
    font-size: 15px;
}
.error-search__bar button,
.error-link-card {
    border-radius: 7px;
}
.error-search__bar button {
    height: 48px;
    border: 0;
    padding: 0 22px;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 52%, #FE881C 100%);
    cursor: pointer;
}
.error-search__results {
    display: none;
    margin: 12px 0 0;
    padding: 10px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.96);
    box-shadow: 0 18px 42px rgba(0, 0, 0, 0.18);
}
.error-search__results.is-visible {
    display: grid;
    gap: 6px;
}
.error-search__results a,
.error-search__empty {
    display: block;
    padding: 10px 12px;
    border-radius: 6px;
    color: #252431;
    font-size: 14px;
    line-height: 20px;
}
.error-search__results a:hover {
    color: #7A76FF;
    background: rgba(122, 118, 255, 0.10);
}
.error-search__empty {
    color: #5f5d6b;
}
.error-panel {
    border: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 14px;
    padding: 24px;
    background: rgba(255, 255, 255, 0.09);
    box-shadow: 0 24px 70px rgba(0, 0, 0, 0.28);
    backdrop-filter: blur(16px);
}
.error-panel h2 {
    margin: 0 0 16px;
    color: #fff;
    font-size: 22px;
    line-height: 30px;
    font-weight: 600;
}
.error-link-grid {
    display: grid;
    gap: 10px;
}
.error-link-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    padding: 14px 16px;
    color: #fff;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.12);
    transition: transform 0.2s ease, border-color 0.2s ease, background 0.2s ease;
}
.error-link-card:hover {
    transform: translateY(-1px);
    border-color: rgba(203, 70, 250, 0.45);
    background: rgba(255, 255, 255, 0.13);
}
.error-link-card span {
    color: rgba(255, 255, 255, 0.7);
}
.error-lead {
    padding: 80px 0 96px;
    background: #f6f6fa;
}
.error-lead__grid {
    display: grid;
    grid-template-columns: minmax(0, 0.72fr) minmax(340px, 1fr);
    gap: 40px;
    align-items: start;
}
.error-lead__copy h2 {
    margin: 0 0 16px;
    color: #101014;
    font-size: clamp(32px, 4vw, 48px);
    line-height: 1.12;
    font-weight: 600;
    letter-spacing: 0;
}
.error-lead__copy p {
    margin: 0 0 18px;
    color: #3c3b47;
    font-size: 17px;
    line-height: 28px;
}
.error-lead__list {
    display: grid;
    gap: 12px;
    margin-top: 26px;
}
.error-lead__list li {
    display: flex;
    gap: 10px;
    color: #2f2e38;
    font-size: 15px;
    line-height: 24px;
}
.error-lead__list li::before {
    content: "";
    width: 9px;
    height: 9px;
    margin-top: 7px;
    flex: 0 0 9px;
    border-radius: 999px;
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 52%, #FE881C 100%);
}
.error-form-card {
    border-radius: 14px;
    padding: 28px;
    background: #fff;
    box-shadow: 0 22px 58px rgba(6, 19, 30, 0.12);
}
.error-form-card .ecx-form-wrap .ecx-label {
    font-size: 15px;
    line-height: 21px;
}
.error-form-card .ecx-form-wrap .ecx-input,
.error-form-card .ecx-form-wrap .ecx-select,
.error-form-card .ecx-phone-wrapper {
    background: #f2f2f6;
}
@media (max-width: 1024px) {
    .error-hero {
        padding-top: 130px;
    }
    .error-hero__inner,
    .error-lead__grid {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 640px) {
    .error-hero {
        min-height: auto;
        padding: 112px 0 58px;
    }
    .error-copy {
        font-size: 16px;
        line-height: 26px;
    }
    .error-search__bar {
        grid-template-columns: 1fr;
    }
    .error-search__bar button {
        width: 100%;
    }
    .error-panel,
    .error-form-card {
        padding: 20px;
    }
    .error-lead {
        padding: 56px 0 70px;
    }
}
</style>

<main class="error-page">
    <section class="error-hero">
        <div class="container mx-auto px-4 error-hero__inner">
            <div>
                <p class="error-kicker">404 page not found</p>
                <h1 class="error-heading">This page took a <span>wrong turn.</span></h1>
                <p class="error-copy">
                    The page may have moved, the URL may be mistyped, or the content may no longer be available. Search the site, jump to a key page, or send our team a note and we will help you find the right path.
                </p>

                <form class="error-search" id="errorSearchForm" role="search">
                    <div class="error-search__bar">
                        <input id="errorSearchInput" type="search" placeholder="Search services, locations, insights..." autocomplete="off" aria-label="Search EmpireOneCX">
                        <button type="submit">Search</button>
                    </div>
                    <div class="error-search__results" id="errorSearchResults" aria-live="polite"></div>
                </form>
            </div>

            <aside class="error-panel" aria-label="Helpful links">
                <h2>Popular pages</h2>
                <div class="error-link-grid">
                    <a class="error-link-card" href="/"><strong>Home</strong><span>Return</span></a>
                    <a class="error-link-card" href="/solutions/"><strong>Solutions</strong><span>Explore</span></a>
                    <a class="error-link-card" href="/global-footprint/"><strong>Global Footprint</strong><span>Locations</span></a>
                    <a class="error-link-card" href="/insights/"><strong>Insights</strong><span>Read</span></a>
                    <a class="error-link-card" href="/contact"><strong>Contact Us</strong><span>Connect</span></a>
                </div>
            </aside>
        </div>
    </section>

    <section class="error-lead">
        <div class="container mx-auto px-4 error-lead__grid">
            <div class="error-lead__copy">
                <h2>Need help finding the right CX or BPO solution?</h2>
                <p>
                    Tell us what you were trying to reach. Our team can point you to the right service page, location page, or build a custom support plan around your goal.
                </p>
                <ul class="error-lead__list">
                    <li>Use the search above for quick access to services, locations, and insights.</li>
                    <li>Share your details if you want a real team member to follow up.</li>
                    <li>Explore the popular pages if you want to continue browsing.</li>
                </ul>
            </div>

            <div class="error-form-card" id="contact-team">
                <?php include("inc/contact-form.php"); ?>
            </div>
        </div>
    </section>
</main>

<script>
(function () {
    var pages = [
        { title: "Home", url: "/", keywords: "home empireonecx customer experience bpo outsourcing" },
        { title: "About Us", url: "/about-us", keywords: "about company story team" },
        { title: "Solutions", url: "/solutions/", keywords: "solutions services bpo cx outsourcing" },
        { title: "Customer Experience Solutions", url: "/solutions/customer-experience-solutions", keywords: "customer experience cx support omnichannel" },
        { title: "Multilingual Customer Support", url: "/solutions/multilingual-customer-support", keywords: "multilingual customer support languages fluent agents translation cx" },
        { title: "Omnichannel Contact Center Services", url: "/solutions/omnichannel-contact-center-services", keywords: "omnichannel contact center voice chat email sms social support" },
        { title: "Help Desk & Technical Support", url: "/solutions/help-desk-technical-support", keywords: "help desk technical support tier 1 tier 2 tier 3 tickets ITSM SLA" },
        { title: "Back Office Support", url: "/solutions/back-office-support", keywords: "back office admin operations support" },
        { title: "BPO Solutions", url: "/solutions/bpo-solutions", keywords: "bpo outsourcing process virtual assistants automation" },
        { title: "Finance & Accounting BPO", url: "/solutions/finance-accounting-bpo", keywords: "finance accounting invoices reconciliation bookkeeping" },
        { title: "Quality Assurance Outsourcing", url: "/solutions/quality-assurance-outsourcing", keywords: "quality assurance qa monitoring scorecards compliance" },
        { title: "Recruitment & Workforce Support", url: "/solutions/recruitment-workforce-support", keywords: "recruitment hiring workforce staffing" },
        { title: "Industries", url: "/industries/", keywords: "industries sectors ecommerce healthcare finance" },
        { title: "Healthcare BPO Services", url: "/industries/healthcare-bpo", keywords: "healthcare medical billing patient scheduling hipaa revenue cycle prior authorization payer" },
        { title: "Case Studies", url: "/case-study", keywords: "case studies results examples roi" },
        { title: "Insights", url: "/insights/", keywords: "blog insights articles guides" },
        { title: "Global Footprint", url: "/global-footprint/", keywords: "locations countries global delivery global footprint" },
        { title: "Canada", url: "/global-footprint/canada/", keywords: "canada cx bpo outsourcing" },
        { title: "United States", url: "/global-footprint/united-states/", keywords: "united states us cx bpo outsourcing" },
        { title: "United Kingdom", url: "/global-footprint/united-kingdom/", keywords: "united kingdom uk cx bpo outsourcing" },
        { title: "Australia", url: "/global-footprint/australia/", keywords: "australia cx bpo outsourcing" },
        { title: "UAE", url: "/global-footprint/uae/", keywords: "uae emirates cx bpo outsourcing" },
        { title: "Morocco", url: "/global-footprint/morocco/", keywords: "morocco multilingual cx bpo outsourcing emea" },
        { title: "Nicaragua", url: "/global-footprint/nicaragua/", keywords: "nicaragua nearshore cx bpo outsourcing" },
        { title: "Colombia", url: "/global-footprint/colombia/", keywords: "colombia bilingual cx bpo outsourcing latin america" },
        { title: "Venezuela", url: "/global-footprint/venezuela/", keywords: "venezuela spanish language cx bpo outsourcing" },
        { title: "Bolivia", url: "/global-footprint/bolivia/", keywords: "bolivia latin america cx bpo outsourcing" },
        { title: "Paraguay", url: "/global-footprint/paraguay/", keywords: "paraguay latin america cx bpo outsourcing" },
        { title: "South Africa", url: "/global-footprint/south-africa/", keywords: "south africa english language cx bpo outsourcing" },
        { title: "Pakistan", url: "/global-footprint/pakistan/", keywords: "pakistan technical support cx bpo outsourcing" },
        { title: "Philippines", url: "/global-footprint/philippines/", keywords: "philippines customer care cx bpo outsourcing" },
        { title: "Compliance & Security", url: "/compliance-security/", keywords: "compliance security soc iso gdpr pci" },
        { title: "Careers", url: "/career", keywords: "careers jobs hiring" },
        { title: "Contact Us", url: "/contact", keywords: "contact quote proposal call" }
    ];

    var form = document.getElementById("errorSearchForm");
    var input = document.getElementById("errorSearchInput");
    var results = document.getElementById("errorSearchResults");

    function findMatches(query) {
        var normalized = query.trim().toLowerCase();
        if (!normalized) return pages.slice(0, 5);
        return pages.filter(function (page) {
            return (page.title + " " + page.keywords).toLowerCase().indexOf(normalized) !== -1;
        }).slice(0, 6);
    }

    function render(matches, query) {
        results.innerHTML = "";
        if (!matches.length) {
            var empty = document.createElement("span");
            empty.className = "error-search__empty";
            empty.textContent = "No exact match for \"" + query + "\". Try Solutions, Global Footprint, Compliance, or Contact.";
            results.appendChild(empty);
            results.classList.add("is-visible");
            return;
        }

        matches.forEach(function (page) {
            var link = document.createElement("a");
            link.href = page.url;
            link.textContent = page.title;
            results.appendChild(link);
        });
        results.classList.add("is-visible");
    }

    input.addEventListener("input", function () {
        var query = input.value;
        if (!query.trim()) {
            results.classList.remove("is-visible");
            results.innerHTML = "";
            return;
        }
        render(findMatches(query), query);
    });

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        var query = input.value;
        var matches = findMatches(query);
        if (matches.length) {
            window.location.href = matches[0].url;
            return;
        }
        render(matches, query);
    });
})();
</script>

<?php include("inc/footer.php"); ?>
