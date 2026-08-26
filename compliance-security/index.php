<?php
$page_title = "Compliance & Security | EmpireOne CX";
$metaDescription = "EmpireOne CX is a SOC 2 Type II and ISO 27001 certified BPO provider offering HIPAA, PCI DSS, and GDPR compliant customer experience solutions.";
$metaKeywords = "SOC 2 certified BPO, ISO 27001 BPO provider, HIPAA compliant outsourcing, PCI DSS compliant BPO, GDPR compliant CX, compliance security outsourcing";
include(__DIR__ . "/../inc/header.php");

$securityCallUrl = "https://calendly.com/empireonegroup-marketing/30min";

$faqs = [
    [
        "question" => "What certifications does EmpireOne CX hold?",
        "answer" => "EmpireOne CX is certified in SOC 2 Type II and ISO/IEC 27001:2022. We also support HIPAA, PCI DSS, and GDPR-aligned operations and hold BBB Accreditation.",
    ],
    [
        "question" => "How quickly can EmpireOne CX onboard a compliant team?",
        "answer" => "Our core security controls are already in place. That helps us onboard dedicated teams quickly, with some programs launching in as little as 72 hours after scope and access are approved.",
    ],
    [
        "question" => "How does HIPAA compliance work in BPO?",
        "answer" => "HIPAA work requires strict controls around electronic Protected Health Information (ePHI). We use encrypted systems, controlled production floors, and role-based access to help protect sensitive healthcare data.",
    ],
    [
        "question" => "Does EmpireOne CX support GDPR for European clients?",
        "answer" => "Yes. We support GDPR-aligned data handling for European customer data. Our teams follow documented privacy, access, and processing controls across approved delivery locations.",
    ],
    [
        "question" => "How does EmpireOne CX monitor data security?",
        "answer" => "We use AI-assisted monitoring and quality checks to review customer interactions. These controls help flag unusual activity, protect sensitive information, and support clear reporting.",
    ],
];
?>

<link rel="stylesheet" href="/assets/css/extracted/compliance-security.css?v=20260821-1">

<main class="security-page">
    <section class="security-hero-section relative overflow-hidden bg-black px-4 sm:px-6">
        <div class="absolute inset-0 opacity-30">
            <img src="/assets/images/b8.webp" alt="Secure customer experience operations" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/75 to-black"></div>
        <div class="container mx-auto relative z-10">
            <div class="security-hero-grid">
                <div class="text-center lg:text-left">
                    <p class="security-kicker mb-4">Compliance & Security</p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-3 mb-6 text-[14px] md:text-[15px] leading-[22px] text-white/80">
                        <span class="px-4 py-2 rounded-[4px] security-gradient-bg text-white font-medium">Last reviewed: June 2026</span>
                        <span class="px-4 py-2 rounded-[4px] bg-white/10 border border-white/15">EmpireOne CX Compliance Team</span>
                    </div>
                    <h1 class="security-hero-heading mx-auto lg:mx-0">
                        Built for Trust. Engineered for Safety.
                    </h1>
                    <h2 class="security-hero-subheading mx-auto lg:mx-0">
                        SOC 2 Certified BPO & CX Outsourcing You Can Trust
                    </h2>
                    <p class="security-hero-description mx-auto lg:mx-0">
                        Your customer data needs constant protection. EmpireOne CX delivers AI-assisted CX and BPO teams backed by clear controls, independent certifications, and secure global delivery practices.
                    </p>
                    <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-7 py-4 rounded-[8px] text-white text-[15px] md:text-[16px] font-medium security-gradient-bg hover:opacity-90 transition">
                        Schedule a Security Consultation
                    </a>
                </div>
                <div class="security-hero-form mx-auto lg:mx-0">
                    <p class="security-hero-form-title">Get a Free Security Consultation</p>
                    <div class="ecx-compact">
                        <?php include(__DIR__ . "/../inc/contact-form.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-10 lg:gap-16 items-start">
                <div>
                    <p class="security-section-label security-gradient-text">Global Standards</p>
                    <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-6">
                        Enterprise-Grade Protection.
                    </h2>
                </div>
                <div class="text-[17px] leading-[30px] text-[#3C3B47]">
                    <p class="mb-5">Great customer service depends on strong data protection. EmpireOne CX runs secure delivery operations supported by independent audits, certifications, and ongoing monitoring.</p>
                    <p>We help clients support regulated workflows, including healthcare records, payment-related processes, and European customer data. Each program is scoped around the rules and risks that apply to your business.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-[#f7f8fb]">
        <div class="container mx-auto">
            <div class="max-w-3xl mb-10">
                <p class="security-section-label security-gradient-text">Certified Frameworks</p>
                <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-4">Our Certifications & Frameworks</h2>
                <p class="text-[17px] leading-[28px] text-[#3C3B47]">Each framework below is built into the way our people, systems, and delivery centers operate.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <?php
                $certifications = [
                    [
                        "title" => "What is SOC 2 Type II and why does it matter for BPO?",
                        "impact" => "SOC 2 helps speed up vendor risk reviews. It shows that our security controls are documented, tested, and consistently followed.",
                        "proof" => "SOC 2 Type II is an independent audit by external auditors. It reviews controls for security, availability, confidentiality, processing integrity, and privacy over a sustained period.",
                    ],
                    [
                        "title" => "What is ISO/IEC 27001:2022 and why does it matter for BPO?",
                        "impact" => "ISO 27001 gives enterprise teams confidence that information security is managed through a formal system.",
                        "proof" => "ISO/IEC 27001:2022 is a global standard for Information Security Management Systems. It confirms that we use a structured approach to protect sensitive information.",
                    ],
                    [
                        "title" => "What is HIPAA Compliance and why does it matter for BPO?",
                        "impact" => "Healthcare and health-tech teams can outsource selected support, billing, and back-office workflows with stronger privacy controls.",
                        "proof" => "HIPAA-related work is handled with encrypted systems, controlled access, and documented safeguards for electronic Protected Health Information (ePHI).",
                    ],
                    [
                        "title" => "What is PCI DSS Compliance and why does it matter for BPO?",
                        "impact" => "PCI DSS controls help reduce risk when support teams assist with payments, refunds, or subscription questions.",
                        "proof" => "PCI DSS sets security requirements for cardholder data. We use restricted networks, controlled workflows, and monitored environments for approved payment-related processes.",
                    ],
                    [
                        "title" => "What is GDPR Compliance and why does it matter for BPO?",
                        "impact" => "GDPR-aligned processes help protect European customer data and reduce privacy risk.",
                        "proof" => "GDPR requires lawful, transparent, and secure handling of personal data. We map access, processing, and retention controls to the approved client workflow.",
                    ],
                    [
                        "title" => "A Commitment to Ethical Business",
                        "impact" => "BBB Accreditation gives partners another signal of trust, transparency, and service accountability.",
                        "proof" => "BBB Accreditation reflects standards for honest business practices, clear communication, and responsive customer service.",
                    ],
                ];
                ?>
                <?php foreach ($certifications as $index => $cert): ?>
                    <article class="cert-card security-card p-6 <?= $index === 0 ? 'is-open' : ''; ?>">
                        <button class="cert-toggle" type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false'; ?>">
                            <h3 class="text-[20px] md:text-[22px] leading-[30px] text-black pr-2"><?= htmlspecialchars($cert["title"], ENT_QUOTES, "UTF-8"); ?></h3>
                            <span class="cert-icon security-gradient-bg">+</span>
                        </button>
                        <div class="cert-content mt-5">
                            <div class="impact-box rounded-[8px] p-5 mb-4">
                                <p class="text-[14px] uppercase tracking-[0.08em] font-semibold text-[#7A76FF] mb-2">The Business Impact</p>
                                <p class="text-[16px] leading-[26px] text-[#3C3B47]"><?= htmlspecialchars($cert["impact"], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                            <div class="proof-box rounded-[8px] p-5">
                                <p class="text-[14px] uppercase tracking-[0.08em] font-semibold text-[#FE881C] mb-2">The Technical Proof</p>
                                <p class="text-[16px] leading-[26px] text-[#3C3B47]"><?= htmlspecialchars($cert["proof"], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-10">
                <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-7 py-4 rounded-[8px] text-white text-[16px] font-medium security-gradient-bg hover:opacity-90 transition">
                    Schedule a Security Consultation
                </a>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-10 lg:gap-16">
                <div>
                    <p class="security-section-label security-gradient-text">Business Advantage</p>
                    <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-5">Why Our Compliance is Your Competitive Advantage</h2>
                    <p class="text-[17px] leading-[30px] text-[#3C3B47]">Outsourcing should not mean losing control of customer data. Our compliance framework gives clients clearer oversight, stronger controls, and faster vendor approval.</p>
                </div>
                <div class="grid grid-cols-1 gap-5">
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Unlock Enterprise Deals</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">SOC 2 and ISO 27001 documentation can help clients move through vendor risk reviews faster and with fewer follow-up questions.</p>
                    </div>
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Accelerate Onboarding</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">Our security controls, training processes, and access procedures are already defined. That helps approved teams launch faster.</p>
                    </div>
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Protect Your Reputation</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">AI-assisted monitoring and clear workflows help reduce avoidable mistakes. Your customer trust stays protected.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-[#06131e] text-white">
        <div class="container mx-auto">
            <div class="max-w-3xl mb-12">
                <p class="security-section-label">Security Workflow</p>
                <h2 class="text-[34px] md:text-[46px] leading-[1.12] mb-4">Our Security-First Process</h2>
                <p class="text-[17px] leading-[28px] text-white/72">A simple path from secure setup to clear reporting.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <?php
                $steps = [
                    ["Secure Work Environment", "Approved production areas use restricted access, secure networks, and clear physical security rules. Sensitive workflows can include no-phone, no-paper, and no-pen controls."],
                    ["Trained, Approved Teams", "Agents complete background checks, role-based training, and secure system onboarding before working in client environments."],
                    ["AI-Assisted Monitoring", "AI-assisted QA helps review interactions, identify risky behavior, and support sensitive-data protection."],
                    ["Clear Reporting", "Clients receive compliance updates, QA scorecards, and operational reporting so security performance remains visible."],
                ];
                ?>
                <div class="space-y-10">
                    <?php foreach ($steps as $index => $step): ?>
                        <div class="security-step flex gap-5">
                            <div class="step-badge security-gradient-bg"><?= $index + 1; ?></div>
                            <div>
                                <h3 class="text-[23px] leading-[31px] mb-3"><?= htmlspecialchars($step[0], ENT_QUOTES, "UTF-8"); ?></h3>
                                <p class="text-[16px] leading-[27px] text-white/72"><?= htmlspecialchars($step[1], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="rounded-[10px] overflow-hidden min-h-[420px]">
                    <img src="/assets/images/b4.webp" alt="Secure delivery center" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-10 lg:gap-16">
                <div>
                    <p class="security-section-label security-gradient-text">Answers</p>
                    <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-5">Frequently Asked Questions</h2>
                    <p class="text-[17px] leading-[30px] text-[#3C3B47]">Clear answers to common security, compliance, and onboarding questions.</p>
                </div>
                <div class="space-y-4">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="security-faq-item security-card p-5 <?= $index === 0 ? 'is-open' : ''; ?>">
                            <button class="w-full flex items-center justify-between gap-5 text-left" type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false'; ?>">
                                <h3 class="text-[19px] md:text-[21px] leading-[29px] text-black"><?= htmlspecialchars($faq["question"], ENT_QUOTES, "UTF-8"); ?></h3>
                                <span class="security-faq-icon cert-icon security-gradient-bg">+</span>
                            </button>
                            <div class="security-faq-answer">
                                <p class="pt-4 text-[16px] leading-[27px] text-[#3C3B47]"><?= htmlspecialchars($faq["answer"], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section relative py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="mx-auto relative">
                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                    <div class="absolute inset-0 security-gradient-bg"></div>
                    <div class="absolute inset-[3px] rounded-[13px] bg-white">
                        <div class="absolute inset-0">
                            <div class="hidden md:block absolute inset-0" style="background: url('/assets/images/cta-bg-image.webp') no-repeat center/cover;"></div>
                            <div class="md:hidden absolute inset-0" style="background: url('/assets/images/cta-gradient.webp') no-repeat center/cover;"></div>
                        </div>
                    </div>
                </div>
                <div class="future-innerwork py-8 px-4 md:px-16 relative z-10">
                    <div class="ctamain grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="cta-left-sidework order-2 md:order-1">
                            <h2 class="solution-heading future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-normal text-black mb-[15px] md:mb-[20px]" style="max-width: 640px;">
                                Ready to scale into healthcare, finance, or European markets with full compliance already built in?
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Build your dedicated, fully compliant CX team today and go live with total peace of mind.
                            </p>
                            <div class="future-btn flex">
                                <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium security-gradient-bg">
                                    Book a 30-Minute Security & Solutions Call
                                </a>
                            </div>
                        </div>
                        <div class="cta-rightside flex justify-center order-1 md:order-2 mt-6 md:-mt-12">
                            <img src="/assets/images/cta-rightimg.webp" class="hidden md:block w-[560px] h-[471px]" alt="Customer Experience" />
                            <img src="/assets/images/cta-rightimg-mobile.webp" class="block md:hidden w-full max-w-[300px] h-auto" alt="Customer Experience" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="mobile-security-cta items-center justify-center rounded-[8px] px-4 py-4 text-white text-[15px] font-medium security-gradient-bg">
        Schedule a Security Consultation
    </a>
</main>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
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
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".cert-card .cert-toggle").forEach(function (button) {
        button.addEventListener("click", function () {
            const card = button.closest(".cert-card");
            const isOpen = card.classList.toggle("is-open");
            button.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    });

    document.querySelectorAll(".security-faq-item button").forEach(function (button) {
        button.addEventListener("click", function () {
            const item = button.closest(".security-faq-item");
            const isOpen = item.classList.toggle("is-open");
            button.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    });
});
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
