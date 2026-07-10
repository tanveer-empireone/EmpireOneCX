<?php
require_once(__DIR__ . "/industry-page-data.php");

$page = industry_page_data($industrySlug ?? "");
if (!$page) {
    http_response_code(404);
    include(__DIR__ . "/../404.php");
    return;
}

$pageTitle = $page["meta_title"];
$metaDescription = $page["meta_description"];
$metaKeywords = $page["keywords"];

include(__DIR__ . "/../inc/header.php");

$services = [];
foreach ($page["services"] as $title => $items) {
    $services[] = [
        "title" => $title,
        "items" => explode("|", $items),
    ];
}

$segments = array_map(function ($row) {
    return explode("|", $row, 2);
}, explode(";", $page["segments"]));

$faqs = [
    [
        "What is " . strtolower($page["name"]) . " BPO?",
        $page["name"] . " BPO means outsourcing customer support, back-office, data, or operational work to a specialist team. It adds trained capacity without building every function internally.",
    ],
    [
        "Which " . strtolower($page["name"]) . " processes can be outsourced?",
        "Common options include " . strtolower(implode(", ", array_slice(array_keys($page["services"]), 0, 5))) . ". Scope is matched to your systems, controls, and service goals.",
    ],
    [
        "How does " . strtolower($page["name"]) . " outsourcing reduce operating costs?",
        "It converts some fixed hiring, training, management, and technology costs into a flexible service model. Results vary by scope, complexity, hours, and team structure.",
    ],
    [
        "Can EmpireOneCX work with our existing systems?",
        "Yes. Teams can work in approved CRM, ticketing, ERP, communication, and industry platforms. Access, training, workflows, and reporting are agreed before launch.",
    ],
    [
        "How do you protect quality and customer experience?",
        "Programs use defined service levels, quality reviews, coaching, escalation rules, and reporting. Workflows and brand voice are calibrated with your team.",
    ],
    [
        "How quickly can a " . strtolower($page["name"]) . " BPO program scale?",
        "Timing depends on workflow complexity, hiring, access, training, and compliance. Most launches move through discovery, knowledge transfer, controlled production, and planned scale-up.",
    ],
];

$serviceIcons = ["fa-headset", "fa-gears", "fa-file-circle-check", "fa-users-gear", "fa-database", "fa-chart-line"];
$assurance = [
    ["fa-shield-halved", "Secure Delivery", "Role-based access and monitored workflows protect operational data."],
    ["fa-list-check", "Quality Management", "Scorecards, coaching, and reviews keep service consistent."],
    ["fa-chart-column", "SLA Visibility", "Reporting tracks volume, quality, and turnaround."],
    ["fa-user-graduate", "Industry Training", "Teams learn your systems, policies, and terminology."],
    ["fa-arrows-rotate", "Scalable Operations", "Capacity adjusts for peaks, backlogs, and growth."],
];
?>

<link rel="stylesheet" href="/assets/css/industry-detail.css?v=20260611-1">

<main class="industry-detail-page">
    <section class="industry-detail-hero" style="background-image:url('/assets/images/<?= htmlspecialchars($page["image"], ENT_QUOTES, "UTF-8") ?>')">
        <div class="container mx-auto px-4 industry-detail-hero-grid">
            <div>
                <nav class="industry-detail-breadcrumb" aria-label="Breadcrumb">
                    <a href="/industries">Industries</a><span>/</span>
                    <span><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO</span>
                </nav>
                <p class="industry-detail-eyebrow"><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO</p>
                <h1><?= htmlspecialchars($page["hero"], ENT_QUOTES, "UTF-8") ?></h1>
                <p class="industry-detail-hero-copy">
                    EmpireOneCX helps <?= htmlspecialchars($page["audience"], ENT_QUOTES, "UTF-8") ?> <?= htmlspecialchars($page["outcome"], ENT_QUOTES, "UTF-8") ?> through trained teams and AI-assisted workflows.
                </p>
                <div class="industry-detail-trust" aria-label="Service capabilities">
                    <span><i class="fa-solid fa-circle-check"></i> 24/7 Coverage Available</span>
                    <span><i class="fa-solid fa-circle-check"></i> ISO 27001 Secure</span>
                    <span><i class="fa-solid fa-circle-check"></i> Multichannel Support</span>
                </div>
                <div class="industry-detail-actions">
                    <a class="industry-detail-btn industry-detail-btn-primary" href="/contact">Get a Free Consultation</a>
                    <a class="industry-detail-btn" href="#industry-services">Explore <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> Services</a>
                </div>
            </div>
            <aside class="industry-detail-form" aria-label="<?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO consultation form">
                <p class="industry-detail-form-title">Get a Free <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO Consultation</p>
                <?php include(__DIR__ . "/../inc/contact-form.php"); ?>
            </aside>
        </div>
    </section>

    <section class="industry-detail-section">
        <div class="container mx-auto px-4">
            <div class="industry-detail-intro">
                <div>
                    <p class="industry-detail-label">Why Specialized Outsourcing Matters</p>
                    <h2 class="industry-detail-title"><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> Operations Are Getting More Complex</h2>
                </div>
                <div class="industry-detail-prose">
                    <p><?= htmlspecialchars($page["challenge"], ENT_QUOTES, "UTF-8") ?></p>
                    <p><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO adds trained capacity for customer and back-office work. EmpireOneCX aligns delivery with your systems, service levels, brand standards, and reporting needs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="industry-detail-soft" aria-label="<?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO capabilities">
        <div class="container mx-auto px-4">
            <div class="industry-detail-stats">
                <div class="industry-detail-stat"><strong>24/7</strong><span>coverage available across time zones</span></div>
                <div class="industry-detail-stat"><strong>Omnichannel</strong><span>voice, email, chat, and messaging</span></div>
                <div class="industry-detail-stat"><strong>QA-Led</strong><span>monitoring, coaching, and escalation controls</span></div>
                <div class="industry-detail-stat"><strong>Scalable</strong><span>capacity for peaks, backlogs, and growth</span></div>
            </div>
        </div>
    </section>

    <section id="industry-services" class="industry-detail-section industry-detail-soft">
        <div class="container mx-auto px-4">
            <p class="industry-detail-label"><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO Services</p>
            <h2 class="industry-detail-title">What We Handle for <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> Organizations</h2>
            <div class="industry-detail-grid">
                <?php foreach ($services as $index => $service): ?>
                <article class="industry-detail-card">
                    <div class="industry-detail-icon"><i class="fa-solid <?= $serviceIcons[$index] ?>"></i></div>
                    <div>
                        <h3><?= htmlspecialchars($service["title"], ENT_QUOTES, "UTF-8") ?></h3>
                        <h4>What's included</h4>
                        <ul class="industry-detail-list">
                            <?php foreach ($service["items"] as $item): ?>
                            <li><?= htmlspecialchars($item, ENT_QUOTES, "UTF-8") ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="industry-detail-section industry-detail-dark">
        <div class="container mx-auto px-4">
            <p class="industry-detail-label">Operational Assurance</p>
            <h2 class="industry-detail-title industry-detail-title-light">Controlled Delivery. Clear Accountability.</h2>
            <div class="industry-detail-assurance">
                <?php foreach ($assurance as $item): ?>
                <article class="industry-detail-card">
                    <div class="industry-detail-icon"><i class="fa-solid <?= $item[0] ?>"></i></div>
                    <h3><?= htmlspecialchars($item[1], ENT_QUOTES, "UTF-8") ?></h3>
                    <p><?= htmlspecialchars($item[2], ENT_QUOTES, "UTF-8") ?></p>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="industry-detail-section">
        <div class="container mx-auto px-4">
            <div class="industry-detail-intro">
                <div>
                    <p class="industry-detail-label">Why EmpireOneCX</p>
                    <h2 class="industry-detail-title"><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> Outsourcing Without Losing Control</h2>
                </div>
                <div class="industry-detail-prose">
                    <p><strong>Industry-aligned teams:</strong> Training covers your systems, terminology, policies, and customer journey.</p>
                    <p><strong>AI with human judgment:</strong> Automation supports repetitive work while people handle decisions and empathy.</p>
                    <p><strong>Visible performance:</strong> KPIs, service levels, and reporting keep delivery measurable.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="industry-detail-section industry-detail-soft">
        <div class="container mx-auto px-4">
            <p class="industry-detail-label"><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> Segments</p>
            <h2 class="industry-detail-title">Who We Support</h2>
            <p class="industry-detail-hero-copy" style="color:#55535e">Our <?= htmlspecialchars($page["primary_keyword"], ENT_QUOTES, "UTF-8") ?> adapt to different operating models, customer groups, and workflow requirements.</p>
            <div class="industry-detail-table">
                <table>
                    <thead><tr><th>Segment</th><th>Services Focus</th></tr></thead>
                    <tbody>
                        <?php foreach ($segments as $segment): ?>
                        <tr><td><?= htmlspecialchars($segment[0], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($segment[1], ENT_QUOTES, "UTF-8") ?></td></tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="industry-detail-related">
                <a href="/solutions/bpo-solutions">Explore our full BPO solutions</a>
                <a href="/solutions/back-office-support">Back-office support services</a>
                <a href="/solutions/customer-experience-solutions">Customer experience solutions</a>
                <a href="/industries">View all industries</a>
            </div>
        </div>
    </section>

    <section class="industry-detail-section industry-detail-dark">
        <div class="container mx-auto px-4 industry-detail-faq-layout">
            <div>
                <p class="industry-detail-label">Common Questions</p>
                <h2 class="industry-detail-title industry-detail-title-light"><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO FAQs</h2>
                <div class="industry-detail-prose"><p>Direct answers for leaders evaluating <?= htmlspecialchars($page["primary_keyword"], ENT_QUOTES, "UTF-8") ?>.</p></div>
            </div>
            <div class="industry-detail-faq-list">
                <?php foreach ($faqs as $index => $faq): ?>
                <div class="industry-detail-faq-item<?= $index === 0 ? " is-open" : "" ?>">
                    <button class="industry-detail-faq-toggle" type="button" aria-expanded="<?= $index === 0 ? "true" : "false" ?>">
                        <span><?= htmlspecialchars($faq[0], ENT_QUOTES, "UTF-8") ?></span>
                        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                    </button>
                    <div class="industry-detail-faq-answer"><?= htmlspecialchars($faq[1], ENT_QUOTES, "UTF-8") ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="industry-detail-section">
        <div class="container mx-auto px-4">
            <div class="industry-detail-cta">
                <h2>Ready to Strengthen Your <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> Operations?</h2>
                <p>Let's design a BPO engagement around your workflows, customer expectations, systems, risk controls, and growth targets.</p>
                <div class="industry-detail-actions">
                    <a class="industry-detail-btn industry-detail-btn-primary" href="/contact">Get a Free Consultation</a>
                    <a class="industry-detail-btn" href="https://calendly.com/empireonegroup-marketing/30min" target="_blank" rel="noopener">Book a 15-Minute Call</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.querySelectorAll(".industry-detail-faq-toggle").forEach(function (button) {
    button.addEventListener("click", function () {
        var item = button.closest(".industry-detail-faq-item");
        var wasOpen = item.classList.contains("is-open");
        document.querySelectorAll(".industry-detail-faq-item").forEach(function (faq) {
            faq.classList.remove("is-open");
            faq.querySelector(".industry-detail-faq-toggle").setAttribute("aria-expanded", "false");
        });
        if (!wasOpen) {
            item.classList.add("is-open");
            button.setAttribute("aria-expanded", "true");
        }
    });
});
</script>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => $page["name"] . " BPO Services",
    "serviceType" => $page["name"] . " Business Process Outsourcing",
    "provider" => [
        "@type" => "Organization",
        "name" => "EmpireOneCX",
        "url" => "https://empireonecx.com",
    ],
    "description" => $page["meta_description"],
    "url" => "https://empireonecx.com/industries/" . $page["slug"],
    "areaServed" => "Worldwide",
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(function ($faq) {
        return [
            "@type" => "Question",
            "name" => $faq[0],
            "acceptedAnswer" => ["@type" => "Answer", "text" => $faq[1]],
        ];
    }, $faqs),
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Industries", "item" => "https://empireonecx.com/industries"],
        ["@type" => "ListItem", "position" => 2, "name" => $page["name"] . " BPO", "item" => "https://empireonecx.com/industries/" . $page["slug"]],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
