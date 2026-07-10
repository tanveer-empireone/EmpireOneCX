<?php
$categories = array_values(array_unique(array_merge(["All"], array_column($faqs, "category"))));
include(__DIR__ . "/../inc/header.php");
?>

<style>
.topic-faq-page{background:#fff;color:#101014}.topic-faq-hero{position:relative;min-height:650px;padding:190px 0 90px;overflow:hidden;background:#080810 var(--topic-image) center/cover no-repeat}.topic-faq-hero:before{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(5,6,12,.98),rgba(8,9,18,.93) 54%,rgba(8,9,18,.76))}.topic-faq-hero__inner{position:relative;z-index:1;max-width:930px}.topic-faq-breadcrumb{display:flex;flex-wrap:wrap;align-items:center;gap:9px;margin-bottom:24px;color:rgba(255,255,255,.68);font-size:14px}.topic-faq-breadcrumb a{color:#fff}.topic-faq-label{display:inline-flex;align-items:center;gap:10px;color:#cb46fa;font-size:15px;line-height:22px;font-weight:800}.topic-faq-label:before{content:"";width:38px;height:3px;background:linear-gradient(90deg,#7A76FF,#CB46FA,#FE881C)}.topic-faq-hero h1{max-width:900px;margin:20px 0;color:#fff;font-size:58px;line-height:1.08;font-weight:500}.topic-faq-hero h1 span{background:linear-gradient(90deg,#7A76FF,#CB46FA 55%,#FE881C);-webkit-background-clip:text;-webkit-text-fill-color:transparent}.topic-faq-hero__copy{max-width:780px;margin:0 0 30px;color:rgba(255,255,255,.8);font-size:19px;line-height:30px}.topic-faq-search{display:grid;grid-template-columns:24px 1fr;align-items:center;gap:10px;width:min(650px,100%);padding:0 18px;border:1px solid rgba(255,255,255,.24);border-radius:8px;background:rgba(255,255,255,.1)}.topic-faq-search i{color:#cb46fa}.topic-faq-search input{width:100%;height:54px;border:0;outline:0;color:#fff;background:transparent;font-size:15px}.topic-faq-search input::placeholder{color:rgba(255,255,255,.58)}.topic-faq-section{padding:86px 0}.topic-faq-section--soft{background:#f7f7fa}.topic-faq-heading{max-width:790px;margin:14px 0 18px;color:#101014;font-size:42px;line-height:1.16;font-weight:600}.topic-faq-intro{max-width:820px;color:#585762;font-size:17px;line-height:28px}.topic-faq-summary{display:grid;grid-template-columns:1.25fr .75fr;gap:26px;margin-top:36px}.topic-faq-definition,.topic-faq-facts{border:1px solid #e4e3ea;border-radius:8px;background:#fff}.topic-faq-definition{padding:34px;border-top:3px solid #cb46fa}.topic-faq-definition h2{margin:0 0 14px;font-size:25px;line-height:33px;font-weight:700}.topic-faq-definition p{margin:0;color:#4f4e59;font-size:16px;line-height:27px}.topic-faq-definition a{display:inline-flex;align-items:center;gap:8px;margin-top:20px;color:#725cf4;font-size:14px;font-weight:800}.topic-faq-facts{display:grid;grid-template-columns:1fr 1fr;overflow:hidden}.topic-faq-fact{display:flex;flex-direction:column;justify-content:center;min-height:128px;padding:22px;border-bottom:1px solid #ecebf0}.topic-faq-fact:nth-child(odd){border-right:1px solid #ecebf0}.topic-faq-fact:nth-last-child(-n+2){border-bottom:0}.topic-faq-fact strong{color:#17171d;font-size:18px;line-height:25px}.topic-faq-fact span{margin-top:5px;color:#74727d;font-size:12px;line-height:18px}.topic-faq-layout{display:grid;grid-template-columns:286px minmax(0,1fr);gap:48px;align-items:start}.topic-faq-sidebar{position:sticky;top:120px}.topic-faq-sidebar h2{margin:14px 0 15px;font-size:30px;line-height:38px;font-weight:600}.topic-faq-sidebar p{color:#666570;font-size:14px;line-height:23px}.topic-faq-filters{display:flex;flex-direction:column;gap:7px;margin-top:23px}.topic-faq-filter{width:100%;padding:11px 13px;border:1px solid #e1e0e8;border-radius:7px;color:#3f3e48;background:#fff;text-align:left;font-size:13px;font-weight:700;cursor:pointer}.topic-faq-filter.is-active{border-color:transparent;color:#fff;background:linear-gradient(90deg,#7A76FF,#CB46FA 58%,#FE881C)}.topic-faq-list{display:flex;flex-direction:column;gap:12px}.topic-faq-item{border:1px solid #e4e3ea;border-radius:8px;background:#fff;overflow:hidden}.topic-faq-item[hidden]{display:none}.topic-faq-question{display:grid;grid-template-columns:1fr 28px;gap:20px;align-items:center;width:100%;padding:22px 24px;border:0;color:#15151b;background:#fff;text-align:left;cursor:pointer}.topic-faq-question small{display:block;margin-bottom:6px;color:#7A76FF;font-size:11px;line-height:16px;font-weight:800;text-transform:uppercase}.topic-faq-question strong{display:block;font-size:18px;line-height:27px}.topic-faq-question i{color:#cb46fa;transition:transform .2s ease}.topic-faq-item.is-open .topic-faq-question i{transform:rotate(180deg)}.topic-faq-answer{display:none;padding:0 24px 24px;color:#4f4e59;font-size:15px;line-height:25px}.topic-faq-item.is-open .topic-faq-answer{display:block}.topic-faq-answer p{margin:0}.topic-faq-links{display:flex;flex-wrap:wrap;gap:10px 18px;margin-top:16px}.topic-faq-links a{color:#725cf4;font-size:13px;line-height:20px;font-weight:800}.topic-faq-links a:hover{color:#cb46fa}.topic-faq-empty{display:none;padding:28px;border:1px dashed #cbc9d5;border-radius:8px;color:#55545f;text-align:center}.topic-faq-empty.is-visible{display:block}.topic-faq-next{display:grid;grid-template-columns:1fr auto;gap:30px;align-items:center;padding:42px;border:1px solid #dedde6;border-radius:8px;background:#fff}.topic-faq-next h2{margin:0 0 10px;font-size:34px;line-height:42px;font-weight:600}.topic-faq-next p{max-width:700px;margin:0;color:#5b5a65;font-size:15px;line-height:25px}.topic-faq-actions{display:flex;flex-wrap:wrap;gap:10px}.topic-faq-button{display:inline-flex;align-items:center;justify-content:center;gap:8px;min-height:46px;padding:0 21px;border:1px solid #cfcdd8;border-radius:7px;color:#2d2c34;font-size:14px;font-weight:800}.topic-faq-button--primary{border-color:transparent;color:#fff;background:linear-gradient(90deg,#7A76FF,#CB46FA 55%,#FE881C)}
.topic-faq-hero{z-index:2;overflow:visible}.topic-faq-hero__inner{max-width:920px;margin:0 auto;text-align:center}.topic-faq-hero__eyebrow{margin:0 0 14px;color:#CB46FA;font-size:17px;line-height:24px;font-weight:600}.topic-faq-hero h1{margin:0 auto 20px}.topic-faq-hero__copy{margin:0 auto 30px}.topic-faq-section{position:relative;z-index:1}.topic-faq-search-wrap{position:relative;width:min(650px,100%);margin:0 auto;text-align:left}.topic-faq-search{width:100%}.topic-faq-search-status{min-height:20px;margin:10px 0 0;color:rgba(255,255,255,.72);font-size:13px;line-height:20px;text-align:center}.topic-faq-search-suggestions{position:absolute;top:calc(100% + 8px);right:0;left:0;z-index:5;display:none;max-height:330px;padding:8px;border:1px solid #e4e3ea;border-radius:8px;background:#fff;box-shadow:0 20px 45px rgba(5,6,12,.28);overflow-y:auto}.topic-faq-search-suggestions.is-visible{display:block}.topic-faq-search-suggestion{display:grid;grid-template-columns:1fr auto;gap:14px;align-items:center;width:100%;padding:12px 14px;border:0;border-radius:6px;color:#15151b;background:transparent;text-align:left;cursor:pointer}.topic-faq-search-suggestion:hover,.topic-faq-search-suggestion.is-active{background:#f5f1ff}.topic-faq-search-suggestion strong{display:block;font-size:14px;line-height:20px;font-weight:700}.topic-faq-search-suggestion small{display:block;margin-top:3px;color:#7A76FF;font-size:11px;line-height:16px;font-weight:700}.topic-faq-search-suggestion i{color:#CB46FA;font-size:13px}.topic-faq-search-suggestions__empty{margin:0;padding:14px;color:#62616c;font-size:13px;line-height:20px;text-align:center}@keyframes topicFaqRevealUp{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:translateY(0)}}.topic-faq-hero__reveal{opacity:0;animation:topicFaqRevealUp .7s ease forwards}.topic-faq-hero__reveal.is-revealed{opacity:1;transform:translateY(0);animation:none}.topic-faq-hero .delay-1{animation-delay:.1s}.topic-faq-hero .delay-2{animation-delay:.25s}.topic-faq-hero .delay-3{animation-delay:.4s}.topic-faq-hero .delay-4{animation-delay:.55s}
@media(max-width:1024px){.topic-faq-summary,.topic-faq-layout{grid-template-columns:1fr}.topic-faq-sidebar{position:static}.topic-faq-filters{flex-direction:row;flex-wrap:wrap}.topic-faq-filter{width:auto}.topic-faq-next{grid-template-columns:1fr}}
@media(max-width:640px){.topic-faq-hero{min-height:610px;padding:145px 0 70px}.topic-faq-hero h1{font-size:40px}.topic-faq-hero__copy{font-size:16px;line-height:26px}.topic-faq-section{padding:64px 0}.topic-faq-heading{font-size:32px}.topic-faq-definition{padding:26px 22px}.topic-faq-facts{grid-template-columns:1fr}.topic-faq-fact,.topic-faq-fact:nth-child(odd),.topic-faq-fact:nth-last-child(-n+2){border-right:0;border-bottom:1px solid #ecebf0}.topic-faq-fact:last-child{border-bottom:0}.topic-faq-question{padding:18px}.topic-faq-question strong{font-size:16px;line-height:24px}.topic-faq-answer{padding:0 18px 20px}.topic-faq-next{padding:30px 22px}.topic-faq-next h2{font-size:29px;line-height:37px}}
</style>

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
                <div class="topic-faq-actions"><a class="topic-faq-button topic-faq-button--primary" href="/contact">Ask Our Team <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a><a class="topic-faq-button" href="/faq">Back to FAQ Hub</a></div>
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
        ["@type"=>"ListItem","position"=>2,"name"=>"FAQ Hub","item"=>"https://empireonecx.com/faq"],
        ["@type"=>"ListItem","position"=>3,"name"=>$shortTitle,"item"=>"https://empireonecx.com".$pageUrl]
    ]]
]], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
