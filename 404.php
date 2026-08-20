<?php
http_response_code(404);

$page_title = "404 Page Not Found | EmpireOneCX";
$meta_description = "The page you are looking for could not be found. Search EmpireOneCX, visit a key page, or contact our team for support.";
$metaKeywords = "EmpireOneCX 404, page not found, customer experience outsourcing, BPO support";
$metaRobots = "noindex, follow";

include("inc/header.php");
?>

<link rel="stylesheet" href="/assets/css/extracted/404.css?v=20260821-1">

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
        { title: "Careers", url: "https://careers.empireonecx.com/", keywords: "careers jobs hiring" },
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
