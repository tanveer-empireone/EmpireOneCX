<?php
$page_title = "BPO, CX & AI Support FAQ Hub | EmpireOneCX";
$metaDescription = "Clear answers about BPO, CX outsourcing, call center services, AI-assisted support, pricing, security, team models, and implementation.";
$metaKeywords = "BPO FAQ, CX outsourcing FAQ, call center FAQ, AI support FAQ, outsourcing questions, business process outsourcing answers";

$faqTopics = [
    [
        "icon" => "fa-diagram-project",
        "title" => "BPO FAQ",
        "description" => "Business process outsourcing models, services, pricing, implementation, governance, and provider selection.",
        "url" => "/faq/bpo-faq/",
    ],
    [
        "icon" => "fa-headset",
        "title" => "CX Outsourcing FAQ",
        "description" => "Customer experience teams, omnichannel support, service quality, scalability, and customer journey management.",
        "url" => "/faq/cx-outsourcing-faq/",
    ],
    [
        "icon" => "fa-phone-volume",
        "title" => "Call Center FAQ",
        "description" => "Inbound and outbound operations, staffing, coverage, performance metrics, technology, and quality assurance.",
        "url" => "/faq/call-center-faq/",
    ],
    [
        "icon" => "fa-robot",
        "title" => "AI Support FAQ",
        "description" => "AI-assisted customer support, automation, human oversight, knowledge systems, security, and responsible deployment.",
        "url" => "/faq/ai-support-faq/",
    ],
];

$faqs = [
    [
        "category" => "BPO",
        "question" => "What is business process outsourcing (BPO)?",
        "answer" => "Business process outsourcing is the practice of assigning selected business operations to an external specialist. BPO can cover customer support, back-office administration, finance processes, data processing, quality assurance, recruitment, and other repeatable workflows.",
        "links" => [
            ["/insights/what-is-bpo", "Read the complete BPO guide"],
            ["/solutions/bpo-solutions", "Explore BPO solutions"],
        ],
    ],
    [
        "category" => "CX",
        "question" => "What is customer experience outsourcing?",
        "answer" => "Customer experience outsourcing gives an external team responsibility for selected customer interactions or support operations. Services may include phone, email, chat, social messaging, technical support, retention, onboarding, and customer feedback management.",
        "links" => [
            ["/solutions/customer-experience-solutions", "Explore customer experience solutions"],
            ["/insights/what-is-customer-experience-cx", "Learn what customer experience means"],
        ],
    ],
    [
        "category" => "Call Center",
        "question" => "What is call center outsourcing?",
        "answer" => "Call center outsourcing uses an external service provider to manage inbound or outbound voice operations. A modern outsourced contact center may also support email, live chat, SMS, social channels, workforce management, analytics, and quality assurance.",
        "links" => [
            ["/solutions/customer-experience-solutions", "View omnichannel support services"],
        ],
    ],
    [
        "category" => "AI Support",
        "question" => "What is AI-assisted customer support?",
        "answer" => "AI-assisted customer support combines trained service professionals with tools for routing, summarization, knowledge retrieval, quality monitoring, workflow automation, and self-service. Human agents remain responsible for judgment, empathy, exceptions, and sensitive conversations.",
        "links" => [
            ["/insights/ai-in-customer-experience-automation", "See where AI should support CX"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "Which business processes can be outsourced?",
        "answer" => "Commonly outsourced processes include customer service, technical support, data entry, document processing, order management, accounts payable and receivable support, bookkeeping, recruitment coordination, quality monitoring, claims support, and industry-specific administration.",
        "links" => [
            ["/solutions/", "View all outsourcing solutions"],
            ["/industries/", "Browse industry-specific services"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "What is the difference between dedicated and shared BPO teams?",
        "answer" => "A dedicated team works primarily for one client and offers greater process control and brand alignment. A shared team supports multiple clients and is usually better suited to lower or variable volumes. Hybrid models combine dedicated ownership with shared specialist resources.",
        "links" => [
            ["/insights/dedicated-vs-shared-bpo-teams", "Compare dedicated and shared teams"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "How much does BPO outsourcing cost?",
        "answer" => "Typically, BPO pricing depends on service complexity, location, operating hours, language, staffing model, technology, compliance requirements, and expected volume. Providers may charge per agent, per hour, per transaction, or against an agreed outcome.",
        "links" => [
            ["/insights/how-much-does-bpo-cost-2026", "Review BPO pricing factors"],
        ],
    ],
    [
        "category" => "CX",
        "question" => "How is outsourced customer service quality measured?",
        "answer" => "Quality is commonly measured through customer satisfaction, first-contact resolution, response time, average handling time, quality scores, escalation rates, adherence, accuracy, and customer effort. The right scorecard depends on the customer journey and business objective.",
        "links" => [
            ["/solutions/quality-assurance-outsourcing", "Explore quality assurance outsourcing"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "How long does it take to launch an outsourced team?",
        "answer" => "Launch time depends on hiring, training, integrations, process complexity, security reviews, and required scale. EmpireOneCX can launch some standard programs in as little as 72 hours, while complex or regulated programs require a structured implementation plan.",
        "links" => [
            ["/contact", "Discuss an implementation timeline"],
        ],
    ],
    [
        "category" => "Security",
        "question" => "How is data protected in an outsourced operation?",
        "answer" => "A secure outsourcing program uses access controls, encryption, documented procedures, workforce training, monitoring, incident response, and contractual safeguards. Requirements should be aligned with the data involved and frameworks such as SOC 2, ISO 27001, HIPAA, PCI DSS, or GDPR.",
        "links" => [
            ["/compliance-security/", "Review compliance and security controls"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "What is the difference between onshore, nearshore, and offshore outsourcing?",
        "answer" => "Onshore outsourcing keeps delivery in the client's country. Nearshore outsourcing uses a nearby country with closer time-zone or cultural alignment. Offshore outsourcing uses a more distant delivery market and can provide broader talent access, extended coverage, and cost advantages.",
        "links" => [
            ["/insights/types-of-bpo", "Compare the main types of BPO"],
            ["/global-footprint/", "Explore delivery locations"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "How should a company choose a BPO or CX outsourcing partner?",
        "answer" => "Evaluate relevant experience, operating model, security controls, hiring and training, technology compatibility, reporting, quality management, business continuity, pricing transparency, and the provider's ability to scale. References and a clearly defined pilot can reduce selection risk.",
        "links" => [
            ["/about-us", "Learn about EmpireOneCX"],
            ["/case-study", "View customer results"],
        ],
    ],
];

include(__DIR__ . "/../inc/header.php");
?>

<link rel="stylesheet" href="/assets/css/extracted/faq.css?v=20260821-1">

<main class="faq-hub">
    <section class="faq-hub-hero">
        <div class="container mx-auto px-4">
            <div class="faq-hub-hero__inner">
                <p class="faq-hub-hero__eyebrow faq-hub-hero__reveal delay-1">FAQ Knowledge Center</p>
                <h1 class="faq-hub-hero__reveal delay-2">BPO, CX, Call Center &amp; <span>AI Support FAQ Hub</span></h1>
                <p class="faq-hub-hero__copy faq-hub-hero__reveal delay-3">Direct, practical answers to common questions about outsourcing customer experience and business operations. Search the hub or browse by topic.</p>
                <div class="faq-hub-search-wrap faq-hub-hero__reveal delay-4">
                    <label class="faq-hub-search">
                        <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                        <input id="faq-hub-search" type="search" placeholder="Search outsourcing questions..." autocomplete="off" aria-autocomplete="list" aria-controls="faq-hub-search-suggestions" aria-expanded="false">
                    </label>
                    <div class="faq-hub-search-suggestions" id="faq-hub-search-suggestions" role="listbox"></div>
                    <p class="faq-hub-search-status" id="faq-hub-search-status" aria-live="polite"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-hub-section faq-hub-section--soft">
        <div class="container mx-auto px-4">
            <p class="faq-hub-section-label">Browse by Topic</p>
            <h2 class="faq-hub-heading">Four focused FAQ collections</h2>
            <p class="faq-hub-intro">This hub organizes the questions buyers and operations leaders ask while evaluating outsourced teams, contact centers, and AI-assisted support.</p>
            <div class="faq-hub-topics">
                <?php foreach ($faqTopics as $topic): ?>
                <?php if (!empty($topic["url"])): ?>
                <a class="faq-topic fade-zoom-reveal" href="<?= htmlspecialchars($topic["url"], ENT_QUOTES, "UTF-8") ?>">
                <?php else: ?>
                <article class="faq-topic fade-zoom-reveal">
                <?php endif; ?>
                    <div class="faq-topic__top">
                        <span class="faq-topic__icon"><i class="fa-solid <?= htmlspecialchars($topic["icon"], ENT_QUOTES, "UTF-8") ?>" aria-hidden="true"></i></span>
                    </div>
                    <h3><?= htmlspecialchars($topic["title"], ENT_QUOTES, "UTF-8") ?></h3>
                    <p><?= htmlspecialchars($topic["description"], ENT_QUOTES, "UTF-8") ?></p>
                    <?php if (!empty($topic["url"])): ?>
                    <span class="faq-topic__button">
                        Explore <?= htmlspecialchars($topic["title"], ENT_QUOTES, "UTF-8") ?>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </span>
                    <?php endif; ?>
                <?= !empty($topic["url"]) ? "</a>" : "</article>" ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="faq-hub-section" id="faq-hub-results">
        <div class="container mx-auto px-4 faq-hub-layout">
            <aside class="faq-hub-filter">
                <p class="faq-hub-section-label">Quick Answers</p>
                <h2>Outsourcing fundamentals</h2>
                <p>Select a topic or use the search field above. Every answer is written to stand on its own and links to a more detailed EmpireOneCX resource where available.</p>
                <div class="faq-filter-buttons" aria-label="Filter FAQ topics">
                    <?php
                    $categories = ["All", "BPO", "CX", "Call Center", "AI Support", "Security"];
                    foreach ($categories as $category):
                    ?>
                    <button class="faq-filter-button<?= $category === "All" ? " is-active" : "" ?>" type="button" data-category="<?= htmlspecialchars($category, ENT_QUOTES, "UTF-8") ?>">
                        <?= htmlspecialchars($category, ENT_QUOTES, "UTF-8") ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </aside>

            <div>
                <div class="faq-hub-list" id="faq-hub-list">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <article class="faq-hub-item<?= $index === 0 ? " is-open" : "" ?>" data-category="<?= htmlspecialchars($faq["category"], ENT_QUOTES, "UTF-8") ?>" data-search="<?= htmlspecialchars(strtolower($faq["question"] . " " . $faq["answer"] . " " . $faq["category"]), ENT_QUOTES, "UTF-8") ?>">
                        <button class="faq-hub-question" type="button" aria-expanded="<?= $index === 0 ? "true" : "false" ?>">
                            <span>
                                <small><?= htmlspecialchars($faq["category"], ENT_QUOTES, "UTF-8") ?></small>
                                <strong><?= htmlspecialchars($faq["question"], ENT_QUOTES, "UTF-8") ?></strong>
                            </span>
                            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="faq-hub-answer">
                            <p><?= htmlspecialchars($faq["answer"], ENT_QUOTES, "UTF-8") ?></p>
                            <?php if (!empty($faq["links"])): ?>
                            <div class="faq-hub-links">
                                <?php foreach ($faq["links"] as $link): ?>
                                <a href="<?= htmlspecialchars($link[0], ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($link[1], ENT_QUOTES, "UTF-8") ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
                <div class="faq-hub-empty" id="faq-hub-empty">No matching questions were found. Try a broader search term.</div>
            </div>
        </div>
    </section>

    <section class="faq-hub-section faq-hub-section--soft">
        <div class="container mx-auto px-4">
            <div class="faq-hub-cta">
                <div class="faq-hub-cta__content">
                    <h2>Have a question specific to your operation?</h2>
                    <p>Discuss your workflows, service levels, compliance requirements, staffing model, and implementation goals with an EmpireOneCX specialist.</p>
                    <div class="faq-hub-cta__actions">
                        <a class="faq-hub-button faq-hub-button--primary" href="/contact">Ask Our Team <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                        <a class="faq-hub-button" href="/insights/">Browse Insights</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
(function () {
    window.setTimeout(function () {
        document.querySelectorAll(".faq-hub-hero__reveal").forEach(function (element) {
            element.classList.add("is-revealed");
        });
    }, 1400);

    const items = Array.from(document.querySelectorAll(".faq-hub-item"));
    const search = document.getElementById("faq-hub-search");
    const results = document.getElementById("faq-hub-results");
    const status = document.getElementById("faq-hub-search-status");
    const suggestions = document.getElementById("faq-hub-search-suggestions");
    const empty = document.getElementById("faq-hub-empty");
    const filters = Array.from(document.querySelectorAll(".faq-filter-button"));
    let activeCategory = "All";
    let activeSuggestion = -1;

    function applyFilters() {
        const query = search.value.trim().toLowerCase();
        let visibleCount = 0;
        let firstVisible = null;

        items.forEach(function (item) {
            const categoryMatch = activeCategory === "All" || item.dataset.category === activeCategory;
            const searchMatch = !query || item.dataset.search.includes(query);
            const visible = categoryMatch && searchMatch;
            item.hidden = !visible;
            if (visible) {
                visibleCount += 1;
                if (!firstVisible) firstVisible = item;
            }
        });

        empty.classList.toggle("is-visible", visibleCount === 0);
        status.textContent = query
            ? visibleCount + (visibleCount === 1 ? " matching question found." : " matching questions found.")
            : "";

        if (query && firstVisible) {
            firstVisible.classList.add("is-open");
            firstVisible.querySelector(".faq-hub-question").setAttribute("aria-expanded", "true");
        }

        return visibleCount;
    }

    function closeSuggestions() {
        suggestions.classList.remove("is-visible");
        search.setAttribute("aria-expanded", "false");
        activeSuggestion = -1;
    }

    function renderSuggestions() {
        const query = search.value.trim().toLowerCase();
        suggestions.replaceChildren();
        activeSuggestion = -1;

        if (query.length < 2) {
            closeSuggestions();
            return;
        }

        const matches = items.filter(function (item) {
            return item.dataset.search.includes(query);
        }).slice(0, 6);

        if (!matches.length) {
            const message = document.createElement("p");
            message.className = "faq-hub-search-suggestions__empty";
            message.textContent = "No matching questions found.";
            suggestions.appendChild(message);
        } else {
            matches.forEach(function (item, index) {
                const button = document.createElement("button");
                const text = document.createElement("span");
                const title = document.createElement("strong");
                const category = document.createElement("small");
                const icon = document.createElement("i");

                button.type = "button";
                button.className = "faq-hub-search-suggestion";
                button.setAttribute("role", "option");
                button.dataset.itemIndex = items.indexOf(item);
                button.dataset.suggestionIndex = index;

                title.textContent = item.querySelector(".faq-hub-question strong").textContent;
                category.textContent = item.dataset.category;
                icon.className = "fa-solid fa-arrow-right";
                icon.setAttribute("aria-hidden", "true");

                text.append(title, category);
                button.append(text, icon);
                suggestions.appendChild(button);
            });
        }

        suggestions.classList.add("is-visible");
        search.setAttribute("aria-expanded", "true");
    }

    function selectSuggestion(button) {
        const item = items[Number(button.dataset.itemIndex)];
        if (!item) return;

        item.hidden = false;
        item.classList.add("is-open");
        item.querySelector(".faq-hub-question").setAttribute("aria-expanded", "true");
        closeSuggestions();
        item.scrollIntoView({ behavior: "smooth", block: "center" });
        window.setTimeout(function () {
            item.querySelector(".faq-hub-question").focus({ preventScroll: true });
        }, 500);
    }

    function updateActiveSuggestion(nextIndex) {
        const buttons = Array.from(suggestions.querySelectorAll(".faq-hub-search-suggestion"));
        if (!buttons.length) return;

        activeSuggestion = (nextIndex + buttons.length) % buttons.length;
        buttons.forEach(function (button, index) {
            button.classList.toggle("is-active", index === activeSuggestion);
            button.setAttribute("aria-selected", index === activeSuggestion ? "true" : "false");
        });
        buttons[activeSuggestion].scrollIntoView({ block: "nearest" });
    }

    document.querySelectorAll(".faq-hub-question").forEach(function (button) {
        button.addEventListener("click", function () {
            const item = button.closest(".faq-hub-item");
            const isOpen = item.classList.toggle("is-open");
            button.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    });

    filters.forEach(function (button) {
        button.addEventListener("click", function () {
            activeCategory = button.dataset.category;
            filters.forEach(function (filter) {
                filter.classList.toggle("is-active", filter === button);
            });
            applyFilters();
        });
    });

    search.addEventListener("input", function () {
        if (search.value.trim()) {
            activeCategory = "All";
            filters.forEach(function (filter) {
                filter.classList.toggle("is-active", filter.dataset.category === "All");
            });
        }

        applyFilters();
        renderSuggestions();
    });

    search.addEventListener("keydown", function (event) {
        const buttons = Array.from(suggestions.querySelectorAll(".faq-hub-search-suggestion"));

        if (event.key === "ArrowDown" && buttons.length) {
            event.preventDefault();
            updateActiveSuggestion(activeSuggestion + 1);
        } else if (event.key === "ArrowUp" && buttons.length) {
            event.preventDefault();
            updateActiveSuggestion(activeSuggestion - 1);
        } else if (event.key === "Enter") {
            event.preventDefault();
            if (activeSuggestion >= 0 && buttons[activeSuggestion]) {
                selectSuggestion(buttons[activeSuggestion]);
            } else if (buttons[0]) {
                selectSuggestion(buttons[0]);
            } else if (search.value.trim().length >= 2) {
                results.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        } else if (event.key === "Escape") {
            closeSuggestions();
        }
    });

    suggestions.addEventListener("click", function (event) {
        const button = event.target.closest(".faq-hub-search-suggestion");
        if (button) selectSuggestion(button);
    });

    document.addEventListener("click", function (event) {
        if (!event.target.closest(".faq-hub-search-wrap")) closeSuggestions();
    });
})();
</script>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "CollectionPage",
            "@id" => "https://empireonecx.com/faq/#webpage",
            "url" => "https://empireonecx.com/faq/",
            "name" => "BPO, CX & AI Support FAQ Hub",
            "description" => $metaDescription,
            "isPartOf" => ["@id" => "https://empireonecx.com/#website"],
            "about" => [
                ["@type" => "Thing", "name" => "Business Process Outsourcing"],
                ["@type" => "Thing", "name" => "Customer Experience Outsourcing"],
                ["@type" => "Thing", "name" => "Call Center Outsourcing"],
                ["@type" => "Thing", "name" => "AI-assisted Customer Support"],
            ],
        ],
        [
            "@type" => "FAQPage",
            "@id" => "https://empireonecx.com/faq/#faq",
            "mainEntity" => array_map(function ($faq) {
                return [
                    "@type" => "Question",
                    "name" => $faq["question"],
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => $faq["answer"],
                    ],
                ];
            }, $faqs),
        ],
        [
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://empireonecx.com/"],
                ["@type" => "ListItem", "position" => 2, "name" => "Resources", "item" => "https://empireonecx.com/insights/"],
                ["@type" => "ListItem", "position" => 3, "name" => "FAQ Hub", "item" => "https://empireonecx.com/faq/"],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
