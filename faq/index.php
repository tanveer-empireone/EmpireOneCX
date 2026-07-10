<?php
$page_title = "BPO, CX & AI Support FAQ Hub | EmpireOneCX";
$metaDescription = "Clear answers about BPO, CX outsourcing, call center services, AI-assisted support, pricing, security, team models, and implementation.";
$metaKeywords = "BPO FAQ, CX outsourcing FAQ, call center FAQ, AI support FAQ, outsourcing questions, business process outsourcing answers";

$faqTopics = [
    [
        "icon" => "fa-diagram-project",
        "title" => "BPO FAQ",
        "description" => "Business process outsourcing models, services, pricing, implementation, governance, and provider selection.",
        "url" => "/faq/bpo-faq",
    ],
    [
        "icon" => "fa-headset",
        "title" => "CX Outsourcing FAQ",
        "description" => "Customer experience teams, omnichannel support, service quality, scalability, and customer journey management.",
        "url" => "/faq/cx-outsourcing-faq",
    ],
    [
        "icon" => "fa-phone-volume",
        "title" => "Call Center FAQ",
        "description" => "Inbound and outbound operations, staffing, coverage, performance metrics, technology, and quality assurance.",
        "url" => "/faq/call-center-faq",
    ],
    [
        "icon" => "fa-robot",
        "title" => "AI Support FAQ",
        "description" => "AI-assisted customer support, automation, human oversight, knowledge systems, security, and responsible deployment.",
        "url" => "/faq/ai-support-faq",
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
            ["/solutions", "View all outsourcing solutions"],
            ["/industries", "Browse industry-specific services"],
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
            ["/compliance-security", "Review compliance and security controls"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "What is the difference between onshore, nearshore, and offshore outsourcing?",
        "answer" => "Onshore outsourcing keeps delivery in the client's country. Nearshore outsourcing uses a nearby country with closer time-zone or cultural alignment. Offshore outsourcing uses a more distant delivery market and can provide broader talent access, extended coverage, and cost advantages.",
        "links" => [
            ["/insights/types-of-bpo", "Compare the main types of BPO"],
            ["/global-footprint", "Explore delivery locations"],
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

<style>
.faq-hub {
    background: #fff;
    color: #101014;
}
.faq-hub-hero {
    position: relative;
    z-index: 2;
    min-height: 650px;
    padding: 190px 0 90px;
    overflow: visible;
    background: #080810 url("/assets/images/newsinsight.webp") center/cover no-repeat;
}
.faq-hub-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(5, 6, 12, 0.97) 0%, rgba(8, 9, 18, 0.91) 52%, rgba(8, 9, 18, 0.78) 100%);
}
.faq-hub-hero__inner {
    position: relative;
    z-index: 1;
    max-width: 920px;
    margin: 0 auto;
    text-align: center;
}
.faq-hub-hero__eyebrow {
    margin: 0 0 14px;
    color: #CB46FA;
    font-size: 17px;
    line-height: 24px;
    font-weight: 600;
}
.faq-hub-kicker,
.faq-hub-section-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #cb46fa;
    font-size: 15px;
    line-height: 22px;
    font-weight: 700;
}
.faq-hub-hero .faq-hub-kicker {
    justify-content: center;
}
.faq-hub-kicker::before,
.faq-hub-section-label::before {
    content: "";
    width: 38px;
    height: 3px;
    background: linear-gradient(90deg, #7A76FF, #CB46FA, #FE881C);
}
.faq-hub-hero h1 {
    max-width: 880px;
    margin: 20px auto;
    color: #fff;
    font-size: 58px;
    line-height: 1.08;
    font-weight: 500;
}
.faq-hub-hero h1 span {
    background: linear-gradient(90deg, #7A76FF, #CB46FA 55%, #FE881C);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.faq-hub-hero__copy {
    max-width: 760px;
    margin: 0 auto 30px;
    color: rgba(255,255,255,.8);
    font-size: 19px;
    line-height: 30px;
}
.faq-hub-search-wrap {
    position: relative;
    width: min(650px, 100%);
    margin: 0 auto;
    text-align: left;
}
.faq-hub-search {
    display: grid;
    grid-template-columns: 24px 1fr;
    align-items: center;
    gap: 10px;
    width: 100%;
    padding: 0 18px;
    border: 1px solid rgba(255,255,255,.24);
    border-radius: 8px;
    background: rgba(255,255,255,.1);
    margin: 0 auto;
}
@keyframes faqHubRevealUp {
    from { opacity: 0; transform: translateY(28px); }
    to { opacity: 1; transform: translateY(0); }
}
.faq-hub-hero__reveal {
    opacity: 0;
    animation: faqHubRevealUp .7s ease forwards;
}
.faq-hub-hero__reveal.is-revealed {
    opacity: 1;
    transform: translateY(0);
    animation: none;
}
.faq-hub-hero .delay-1 { animation-delay: .1s; }
.faq-hub-hero .delay-2 { animation-delay: .25s; }
.faq-hub-hero .delay-3 { animation-delay: .4s; }
.faq-hub-hero .delay-4 { animation-delay: .55s; }
.faq-hub-search i {
    color: #cb46fa;
}
.faq-hub-search input {
    width: 100%;
    height: 54px;
    border: 0;
    outline: 0;
    color: #fff;
    background: transparent;
    font-size: 15px;
}
.faq-hub-search input::placeholder {
    color: rgba(255,255,255,.58);
}
.faq-hub-search-suggestions {
    position: absolute;
    top: calc(100% + 8px);
    right: 0;
    left: 0;
    z-index: 5;
    display: none;
    max-height: 330px;
    padding: 8px;
    border: 1px solid #e4e3ea;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0 20px 45px rgba(5, 6, 12, .28);
    overflow-y: auto;
}
.faq-hub-search-suggestions.is-visible {
    display: block;
}
.faq-hub-search-suggestion {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 14px;
    align-items: center;
    width: 100%;
    padding: 12px 14px;
    border: 0;
    border-radius: 6px;
    color: #15151b;
    background: transparent;
    text-align: left;
    cursor: pointer;
}
.faq-hub-search-suggestion:hover,
.faq-hub-search-suggestion.is-active {
    background: #f5f1ff;
}
.faq-hub-search-suggestion strong {
    display: block;
    font-size: 14px;
    line-height: 20px;
    font-weight: 700;
}
.faq-hub-search-suggestion small {
    display: block;
    margin-top: 3px;
    color: #7A76FF;
    font-size: 11px;
    line-height: 16px;
    font-weight: 700;
}
.faq-hub-search-suggestion i {
    color: #CB46FA;
    font-size: 13px;
}
.faq-hub-search-suggestions__empty {
    margin: 0;
    padding: 14px;
    color: #62616c;
    font-size: 13px;
    line-height: 20px;
    text-align: center;
}
.faq-hub-search-status {
    min-height: 20px;
    margin: 10px 0 0;
    color: rgba(255,255,255,.72);
    font-size: 13px;
    line-height: 20px;
    text-align: center;
}
.faq-hub-section {
    position: relative;
    z-index: 1;
    padding: 88px 0;
}
.faq-hub-section--soft {
    background: #f7f7fa;
}
.faq-hub-heading {
    max-width: 760px;
    margin: 14px 0 18px;
    color: #101014;
    font-size: 42px;
    line-height: 1.16;
    font-weight: 600;
}
.faq-hub-intro {
    max-width: 760px;
    color: #54535f;
    font-size: 17px;
    line-height: 28px;
}
.faq-hub-topics {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
    margin-top: 38px;
}
.faq-topic {
    display: flex;
    flex-direction: column;
    min-height: 245px;
    padding: 26px;
    border: 1px solid #e4e3ea;
    border-radius: 8px;
    background: #fff;
    text-decoration: none;
    transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;
}
.faq-topic:hover {
    transform: translateY(-4px);
    border-color: rgba(203,70,250,.45);
    box-shadow: 0 18px 40px rgba(20,18,35,.09);
}
.faq-topic__top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 12px;
}
.faq-topic__icon {
    display: grid;
    place-items: center;
    width: 44px;
    height: 44px;
    border-radius: 8px;
    color: #fff;
    background: linear-gradient(135deg, #7A76FF, #CB46FA 55%, #FE881C);
}
.faq-topic h3 {
    margin: 22px 0 10px;
    color: #101014;
    font-size: 22px;
    line-height: 29px;
    font-weight: 700;
}
.faq-topic p {
    margin: 0;
    color: #62616c;
    font-size: 14px;
    line-height: 23px;
}
.faq-topic__button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    align-self: flex-start;
    gap: 9px;
    min-height: 42px;
    margin-top: auto;
    padding: 0 18px;
    border-radius: 7px;
    color: #fff;
    background: linear-gradient(90deg, #7A76FF, #CB46FA 55%, #FE881C);
    font-size: 13px;
    font-weight: 700;
    line-height: 1;
    transition: transform .2s ease, box-shadow .2s ease;
}
.faq-topic p + .faq-topic__button {
    margin-top: 22px;
}
.faq-topic:hover .faq-topic__button {
    transform: translateX(3px);
    box-shadow: 0 9px 20px rgba(163, 72, 244, .24);
}
.faq-hub-layout {
    display: grid;
    grid-template-columns: 280px minmax(0, 1fr);
    gap: 48px;
    align-items: start;
}
.faq-hub-filter {
    position: sticky;
    top: 120px;
}
.faq-hub-filter h2 {
    margin: 14px 0 16px;
    font-size: 30px;
    line-height: 38px;
    font-weight: 600;
}
.faq-hub-filter p {
    color: #666570;
    font-size: 14px;
    line-height: 23px;
}
.faq-filter-buttons {
    display: flex;
    flex-direction: column;
    gap: 7px;
    margin-top: 24px;
}
.faq-filter-button {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 11px 13px;
    border: 1px solid #e1e0e8;
    border-radius: 7px;
    color: #3f3e48;
    background: #fff;
    text-align: left;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
}
.faq-filter-button.is-active {
    border-color: transparent;
    color: #fff;
    background: linear-gradient(90deg, #7A76FF, #CB46FA 58%, #FE881C);
}
.faq-hub-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.faq-hub-item {
    border: 1px solid #e4e3ea;
    border-radius: 8px;
    background: #fff;
    overflow: hidden;
}
.faq-hub-item[hidden] {
    display: none;
}
.faq-hub-question {
    display: grid;
    grid-template-columns: 1fr 28px;
    gap: 20px;
    align-items: center;
    width: 100%;
    padding: 22px 24px;
    border: 0;
    color: #15151b;
    background: #fff;
    text-align: left;
    cursor: pointer;
}
.faq-hub-question strong {
    display: block;
    font-size: 18px;
    line-height: 27px;
}
.faq-hub-question small {
    display: block;
    margin-bottom: 6px;
    color: #7A76FF;
    font-size: 11px;
    line-height: 16px;
    font-weight: 800;
    text-transform: uppercase;
}
.faq-hub-question i {
    color: #cb46fa;
    transition: transform .2s ease;
}
.faq-hub-item.is-open .faq-hub-question i {
    transform: rotate(180deg);
}
.faq-hub-answer {
    display: none;
    padding: 0 24px 24px;
    color: #4f4e59;
    font-size: 15px;
    line-height: 25px;
}
.faq-hub-item.is-open .faq-hub-answer {
    display: block;
}
.faq-hub-answer p {
    margin: 0;
}
.faq-hub-links {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 18px;
    margin-top: 16px;
}
.faq-hub-links a {
    color: #725cf4;
    font-size: 13px;
    line-height: 20px;
    font-weight: 700;
}
.faq-hub-links a:hover {
    color: #cb46fa;
}
.faq-hub-empty {
    display: none;
    padding: 28px;
    border: 1px dashed #cbc9d5;
    border-radius: 8px;
    color: #55545f;
    text-align: center;
}
.faq-hub-empty.is-visible {
    display: block;
}
.faq-hub-cta {
    position: relative;
    overflow: hidden;
    padding: 52px;
    border-radius: 8px;
    color: #fff;
    background: #101014;
}
.faq-hub-cta::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 44%;
    opacity: .28;
    background: url("/assets/images/cta-bg-image.webp") center/cover no-repeat;
}
.faq-hub-cta__content {
    position: relative;
    z-index: 1;
    max-width: 720px;
}
.faq-hub-cta h2 {
    margin: 0 0 14px;
    font-size: 38px;
    line-height: 47px;
    font-weight: 600;
}
.faq-hub-cta p {
    margin: 0 0 26px;
    color: rgba(255,255,255,.76);
    font-size: 16px;
    line-height: 26px;
}
.faq-hub-cta__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}
.faq-hub-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    min-height: 46px;
    padding: 0 22px;
    border: 1px solid rgba(255,255,255,.3);
    border-radius: 7px;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
}
.faq-hub-button--primary {
    border-color: transparent;
    background: linear-gradient(90deg, #7A76FF, #CB46FA 55%, #FE881C);
}
@media (max-width: 1024px) {
    .faq-hub-topics {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    .faq-hub-layout {
        grid-template-columns: 1fr;
    }
    .faq-hub-filter {
        position: static;
    }
    .faq-filter-buttons {
        flex-direction: row;
        flex-wrap: wrap;
    }
    .faq-filter-button {
        width: auto;
    }
}
@media (max-width: 640px) {
    .faq-hub-hero {
        min-height: 600px;
        padding: 145px 0 70px;
    }
    .faq-hub-hero h1 {
        font-size: 40px;
    }
    .faq-hub-hero__copy {
        font-size: 16px;
        line-height: 26px;
    }
    .faq-hub-section {
        padding: 64px 0;
    }
    .faq-hub-heading {
        font-size: 32px;
    }
    .faq-hub-topics {
        grid-template-columns: 1fr;
    }
    .faq-topic {
        min-height: 0;
    }
    .faq-hub-question {
        padding: 18px;
    }
    .faq-hub-question strong {
        font-size: 16px;
        line-height: 24px;
    }
    .faq-hub-answer {
        padding: 0 18px 20px;
    }
    .faq-hub-cta {
        padding: 34px 24px;
    }
    .faq-hub-cta::before {
        width: 100%;
        opacity: .14;
    }
    .faq-hub-cta h2 {
        font-size: 30px;
        line-height: 38px;
    }
}
</style>

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
                        <a class="faq-hub-button" href="/insights">Browse Insights</a>
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
            "@id" => "https://empireonecx.com/faq#webpage",
            "url" => "https://empireonecx.com/faq",
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
            "@id" => "https://empireonecx.com/faq#faq",
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
                ["@type" => "ListItem", "position" => 2, "name" => "Resources", "item" => "https://empireonecx.com/insights"],
                ["@type" => "ListItem", "position" => 3, "name" => "FAQ Hub", "item" => "https://empireonecx.com/faq"],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
