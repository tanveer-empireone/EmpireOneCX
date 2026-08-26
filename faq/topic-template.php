<?php
$categories = array_values(array_unique(array_merge(["All"], array_column($faqs, "category"))));
include(__DIR__ . "/../inc/header.php");
?>

<link rel="stylesheet" href="/assets/css/extracted/faq-topic-template.css?v=20260821-1">

<main class="topic-faq-page" style="--topic-image:url('<?= htmlspecialchars($heroImage, ENT_QUOTES, "UTF-8") ?>')">
    <section class="topic-faq-hero">
        <div class="container mx-auto px-4">
            <div class="topic-faq-hero__inner">
                <p class="topic-faq-hero__eyebrow topic-faq-hero__reveal delay-1"><?= htmlspecialchars($kicker, ENT_QUOTES, "UTF-8") ?></p>
                <h1 class="topic-faq-hero__reveal delay-2"><span><?= htmlspecialchars($shortTitle, ENT_QUOTES, "UTF-8") ?>:</span> <?= htmlspecialchars($headlineRemainder, ENT_QUOTES, "UTF-8") ?></h1>
                <p class="topic-faq-hero__copy topic-faq-hero__reveal delay-3"><?= htmlspecialchars($heroCopy, ENT_QUOTES, "UTF-8") ?></p>
                <div class="topic-faq-search-wrap topic-faq-hero__reveal delay-4">
                    <label class="topic-faq-search">
                        <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                        <input id="topic-faq-search" type="search" placeholder="<?= htmlspecialchars($searchPlaceholder, ENT_QUOTES, "UTF-8") ?>" autocomplete="off" aria-autocomplete="list" aria-controls="topic-faq-search-suggestions" aria-expanded="false">
                    </label>
                    <div class="topic-faq-search-suggestions" id="topic-faq-search-suggestions" role="listbox"></div>
                    <p class="topic-faq-search-status" id="topic-faq-search-status" aria-live="polite"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="topic-faq-section topic-faq-section--soft">
        <div class="container mx-auto px-4">
            <p class="topic-faq-label"><?= htmlspecialchars($summaryLabel, ENT_QUOTES, "UTF-8") ?></p>
            <h2 class="topic-faq-heading"><?= htmlspecialchars($summaryHeading, ENT_QUOTES, "UTF-8") ?></h2>
            <p class="topic-faq-intro"><?= htmlspecialchars($summaryIntro, ENT_QUOTES, "UTF-8") ?></p>
            <?php if (!empty($summaryBullets) && is_array($summaryBullets)): ?>
            <ul class="topic-faq-plain-list" aria-label="Key points">
                <?php foreach ($summaryBullets as $bullet): ?>
                <li><?= htmlspecialchars($bullet, ENT_QUOTES, "UTF-8") ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <div class="topic-faq-summary">
                <article class="topic-faq-definition fade-zoom-reveal">
                    <h2><?= htmlspecialchars($definitionTitle, ENT_QUOTES, "UTF-8") ?></h2>
                    <p><?= htmlspecialchars($definitionCopy, ENT_QUOTES, "UTF-8") ?></p>
                    <a href="<?= htmlspecialchars($definitionLink[0], ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($definitionLink[1], ENT_QUOTES, "UTF-8") ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                </article>
                <div class="topic-faq-facts fade-zoom-reveal">
                    <?php foreach ($facts as $fact): ?>
                    <div class="topic-faq-fact"><strong><?= htmlspecialchars($fact[0], ENT_QUOTES, "UTF-8") ?></strong><span><?= htmlspecialchars($fact[1], ENT_QUOTES, "UTF-8") ?></span></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="topic-faq-section" id="topic-faq-results">
        <div class="container mx-auto px-4 topic-faq-layout">
            <aside class="topic-faq-sidebar">
                <p class="topic-faq-label">Browse Answers</p>
                <h2><?= htmlspecialchars($sidebarHeading, ENT_QUOTES, "UTF-8") ?></h2>
                <p>Filter by topic or search for a specific term. Each answer is visible on the page and links to deeper guidance where available.</p>
                <div class="topic-faq-filters" aria-label="Filter FAQ topics">
                    <?php foreach ($categories as $category): ?>
                    <button class="topic-faq-filter<?= $category === "All" ? " is-active" : "" ?>" type="button" data-category="<?= htmlspecialchars($category, ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($category, ENT_QUOTES, "UTF-8") ?></button>
                    <?php endforeach; ?>
                </div>
            </aside>
            <div>
                <div class="topic-faq-list">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <article class="topic-faq-item<?= $index === 0 ? " is-open" : "" ?>" data-category="<?= htmlspecialchars($faq["category"], ENT_QUOTES, "UTF-8") ?>" data-search="<?= htmlspecialchars(strtolower($faq["question"] . " " . $faq["answer"] . " " . $faq["category"]), ENT_QUOTES, "UTF-8") ?>">
                        <button class="topic-faq-question" type="button" aria-expanded="<?= $index === 0 ? "true" : "false" ?>">
                            <span><small><?= htmlspecialchars($faq["category"], ENT_QUOTES, "UTF-8") ?></small><strong><?= htmlspecialchars($faq["question"], ENT_QUOTES, "UTF-8") ?></strong></span>
                            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="topic-faq-answer">
                            <p><?= htmlspecialchars($faq["answer"], ENT_QUOTES, "UTF-8") ?></p>
                            <?php if (!empty($faq["links"])): ?><div class="topic-faq-links"><?php foreach ($faq["links"] as $link): ?><a href="<?= htmlspecialchars($link[0], ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($link[1], ENT_QUOTES, "UTF-8") ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a><?php endforeach; ?></div><?php endif; ?>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
                <div class="topic-faq-empty" id="topic-faq-empty">No matching questions were found. Try a broader term or another category.</div>
            </div>
        </div>
    </section>

    <section class="topic-faq-section topic-faq-section--soft">
        <div class="container mx-auto px-4">
            <div class="topic-faq-next">
                <div><h2><?= htmlspecialchars($ctaHeading, ENT_QUOTES, "UTF-8") ?></h2><p><?= htmlspecialchars($ctaCopy, ENT_QUOTES, "UTF-8") ?></p></div>
                <div class="topic-faq-actions"><a class="topic-faq-button topic-faq-button--primary" href="/contact">Ask Our Team <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a><a class="topic-faq-button" href="/faq/">Back to FAQ Hub</a></div>
            </div>
        </div>
    </section>
</main>

<script>
(function () {
    window.setTimeout(function () {
        document.querySelectorAll(".topic-faq-hero__reveal").forEach(function (element) {
            element.classList.add("is-revealed");
        });
    }, 1400);

    const items = Array.from(document.querySelectorAll(".topic-faq-item"));
    const search = document.getElementById("topic-faq-search");
    const status = document.getElementById("topic-faq-search-status");
    const suggestions = document.getElementById("topic-faq-search-suggestions");
    const empty = document.getElementById("topic-faq-empty");
    const filters = Array.from(document.querySelectorAll(".topic-faq-filter"));
    let activeCategory = "All";
    let activeSuggestion = -1;

    function applyFilters() {
        const query = search.value.trim().toLowerCase();
        let visibleCount = 0;
        let firstVisible = null;
        items.forEach(function (item) {
            const visible = (activeCategory === "All" || item.dataset.category === activeCategory) && (!query || item.dataset.search.includes(query));
            item.hidden = !visible;
            if (visible) {
                visibleCount += 1;
                if (!firstVisible) firstVisible = item;
            }
        });
        empty.classList.toggle("is-visible", visibleCount === 0);
        status.textContent = query ? visibleCount + (visibleCount === 1 ? " matching question found." : " matching questions found.") : "";
        if (query && firstVisible) {
            firstVisible.classList.add("is-open");
            firstVisible.querySelector(".topic-faq-question").setAttribute("aria-expanded", "true");
        }
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
            message.className = "topic-faq-search-suggestions__empty";
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
                button.className = "topic-faq-search-suggestion";
                button.setAttribute("role", "option");
                button.dataset.itemIndex = items.indexOf(item);
                button.dataset.suggestionIndex = index;
                title.textContent = item.querySelector(".topic-faq-question strong").textContent;
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
        item.querySelector(".topic-faq-question").setAttribute("aria-expanded", "true");
        closeSuggestions();
        item.scrollIntoView({ behavior: "smooth", block: "center" });
        window.setTimeout(function () {
            item.querySelector(".topic-faq-question").focus({ preventScroll: true });
        }, 500);
    }

    function updateActiveSuggestion(nextIndex) {
        const buttons = Array.from(suggestions.querySelectorAll(".topic-faq-search-suggestion"));
        if (!buttons.length) return;
        activeSuggestion = (nextIndex + buttons.length) % buttons.length;
        buttons.forEach(function (button, index) {
            button.classList.toggle("is-active", index === activeSuggestion);
            button.setAttribute("aria-selected", index === activeSuggestion ? "true" : "false");
        });
        buttons[activeSuggestion].scrollIntoView({ block: "nearest" });
    }

    document.querySelectorAll(".topic-faq-question").forEach(function (button) {
        button.addEventListener("click", function () {
            const item = button.closest(".topic-faq-item");
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
        const buttons = Array.from(suggestions.querySelectorAll(".topic-faq-search-suggestion"));
        if (event.key === "ArrowDown" && buttons.length) {
            event.preventDefault();
            updateActiveSuggestion(activeSuggestion + 1);
        } else if (event.key === "ArrowUp" && buttons.length) {
            event.preventDefault();
            updateActiveSuggestion(activeSuggestion - 1);
        } else if (event.key === "Enter") {
            event.preventDefault();
            if (activeSuggestion >= 0 && buttons[activeSuggestion]) selectSuggestion(buttons[activeSuggestion]);
            else if (buttons[0]) selectSuggestion(buttons[0]);
        } else if (event.key === "Escape") {
            closeSuggestions();
        }
    });

    suggestions.addEventListener("click", function (event) {
        const button = event.target.closest(".topic-faq-search-suggestion");
        if (button) selectSuggestion(button);
    });
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".topic-faq-search-wrap")) closeSuggestions();
    });
})();
</script>

<script type="application/ld+json">
<?= json_encode(["@context"=>"https://schema.org","@graph"=>[
    ["@type"=>"FAQPage","@id"=>"https://empireonecx.com".$pageUrl."#faq","url"=>"https://empireonecx.com".$pageUrl,"name"=>$page_title,"description"=>$metaDescription,"mainEntity"=>array_map(function($faq){return["@type"=>"Question","name"=>$faq["question"],"acceptedAnswer"=>["@type"=>"Answer","text"=>$faq["answer"]]];},$faqs)],
    ["@type"=>"BreadcrumbList","itemListElement"=>[
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>"https://empireonecx.com/"],
        ["@type"=>"ListItem","position"=>2,"name"=>"FAQ Hub","item"=>"https://empireonecx.com/faq/"],
        ["@type"=>"ListItem","position"=>3,"name"=>$shortTitle,"item"=>"https://empireonecx.com".$pageUrl]
    ]]
]], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
