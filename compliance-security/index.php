<?php
$page_title = "Compliance & Security | EmpireOne CX";
$metaDescription = "EmpireOne CX is a SOC 2 Type II and ISO 27001 certified BPO provider offering HIPAA, PCI DSS, and GDPR compliant customer experience solutions.";
$metaKeywords = "SOC 2 certified BPO, ISO 27001 BPO provider, HIPAA compliant outsourcing, PCI DSS compliant BPO, GDPR compliant CX, compliance security outsourcing";
include(__DIR__ . "/../inc/header.php");

$securityCallUrl = "https://calendly.com/empireonegroup-marketing/30min";

$faqs = [
    [
        "question" => "What certifications does EmpireOne CX hold?",
        "answer" => "EmpireOne CX is certified in SOC 2 Type II and ISO/IEC 27001:2022. We also maintain full compliance with HIPAA, PCI DSS, and GDPR, and hold BBB Accreditation.",
    ],
    [
        "question" => "How quickly can EmpireOne CX onboard a compliant team?",
        "answer" => "Because our infrastructure is pre-built to meet SOC 2, HIPAA, and PCI DSS standards, we can securely onboard and launch dedicated teams in as little as 72 hours, bypassing the typical months-long audit delays.",
    ],
    [
        "question" => "How does HIPAA compliance work in BPO?",
        "answer" => "Our HIPAA-compliant BPO environment utilizes end-to-end encrypted systems, clean-room physical floors, and strict role-based access controls to guarantee that electronic Protected Health Information (ePHI) is never compromised.",
    ],
    [
        "question" => "Does EmpireOne CX support GDPR for European clients?",
        "answer" => "Yes. Our global delivery centers in Toronto, Bogota, and Lahore are fully GDPR compliant, ensuring that all European citizen data is processed legally, transparently, and securely according to EU regulations.",
    ],
    [
        "question" => "How does EmpireOne CX monitor data security?",
        "answer" => "We deploy AI-assisted monitoring to audit 100% of customer interactions. This system automatically redacts sensitive information, flags anomalous agent behavior, and provides continuous, transparent security reporting.",
    ],
];
?>

<style>
    .security-page {
        background: #fff;
        color: #06131e;
    }

    .security-kicker {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        color: #d9d9e2;
        font-size: 16px;
        line-height: 24px;
    }

    .security-kicker::before {
        content: "";
        width: 42px;
        height: 3px;
        border-radius: 999px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }

    .security-gradient-text {
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .security-gradient-bg {
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);
    }

    .security-hero-section {
        padding-top: 12rem;
        padding-bottom: 80px;
    }

    .security-hero-grid {
        display: grid;
        grid-template-columns: 1fr 440px;
        gap: 48px;
        align-items: center;
    }

    .security-hero-heading {
        max-width: 860px;
        font-size: 64px;
        line-height: 1.08;
        font-weight: 400;
        color: #fff;
        margin-bottom: 20px;
        font-family: helveticaregular, Arial, sans-serif;
    }

    .security-hero-subheading {
        max-width: 860px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 34px;
        line-height: 1.18;
        margin-bottom: 24px;
    }

    .security-hero-description {
        max-width: 768px;
        color: rgba(255, 255, 255, 0.76);
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 32px;
    }

    .security-hero-form {
        width: 100%;
        max-width: 440px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.26);
        backdrop-filter: blur(10px);
    }

    .security-hero-form-title {
        color: #fff;
        font-size: 15px;
        line-height: 22px;
        font-weight: 600;
        text-align: center;
        margin: 0 0 16px;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-label {
        display: none;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-input {
        padding: 8px 12px;
        font-size: 13px;
        background: rgba(255, 255, 255, 0.1) !important;
        border-color: rgba(255, 255, 255, 0.2);
        color: #fff !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-input::placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-select {
        padding: 8px 12px;
        font-size: 13px;
        background: rgba(20, 20, 20, 0.95) !important;
        border-color: rgba(255, 255, 255, 0.2);
        color: #fff !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-select option {
        background: #1a1a1a;
        color: #fff;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-phone-wrapper {
        padding: 8px 12px;
        background: rgba(255, 255, 255, 0.1) !important;
        border-color: rgba(255, 255, 255, 0.2) !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"] {
        color: #fff !important;
        font-size: 13px;
        background: transparent !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"]::placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-country-toggle span.ecx-code,
    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-country-toggle svg {
        color: #fff !important;
        font-size: 13px;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-divider {
        color: rgba(255, 255, 255, 0.3) !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-grid-2 {
        gap: 8px;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-mt {
        margin-top: 8px;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-privacy-row {
        margin-top: 12px;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-privacy-row p {
        font-size: 12px;
        line-height: 18px;
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .security-hero-form .ecx-compact .ecx-form-wrap .ecx-submit-btn {
        margin-top: 14px;
        padding: 10px 24px;
        font-size: 14px;
    }

    .security-hero-form .ecx-compact .ecx-country-dropdown {
        background: #1a1a1a !important;
        border-color: rgba(255, 255, 255, 0.2) !important;
    }

    .security-hero-form .ecx-compact .ecx-country-item {
        color: #ddd !important;
    }

    .security-hero-form .ecx-compact .ecx-country-item:hover {
        background: rgba(122, 118, 255, 0.2) !important;
    }

    .security-section-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 18px;
        font-size: 18px;
        line-height: 26px;
        font-weight: 600;
    }

    .security-section-label::before {
        content: "";
        width: 34px;
        height: 4px;
        border-radius: 999px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }

    .security-card {
        border: 1px solid #e6e7ec;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 14px 34px rgba(6, 19, 30, 0.06);
    }

    .cert-card {
        position: relative;
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .cert-card::before {
        content: "";
        position: absolute;
        inset: 0 0 auto 0;
        height: 4px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }

    .cert-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 18px 42px rgba(6, 19, 30, 0.1);
    }

    .cert-toggle {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        text-align: left;
    }

    .cert-icon {
        flex: 0 0 auto;
        width: 30px;
        height: 30px;
        border-radius: 8px;
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.2s ease;
    }

    .cert-card.is-open .cert-icon {
        transform: rotate(45deg);
    }

    .cert-content {
        display: block;
    }

    .impact-box {
        border-left: 3px solid #7A76FF;
        background: #f8f8ff;
    }

    .proof-box {
        border-left: 3px solid #FE881C;
        background: #fff9f4;
    }

    .security-step {
        position: relative;
    }

    .security-step:not(:last-child)::after {
        content: "";
        position: absolute;
        left: 24px;
        top: 52px;
        bottom: -34px;
        width: 2px;
        background: linear-gradient(180deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }

    .step-badge {
        flex: 0 0 auto;
        width: 50px;
        height: 50px;
        border-radius: 10px;
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    .security-faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.25s ease;
    }

    .security-faq-item.is-open .security-faq-answer {
        max-height: 260px;
    }

    .security-faq-icon {
        transition: transform 0.2s ease;
    }

    .security-faq-item.is-open .security-faq-icon {
        transform: rotate(45deg);
    }

    .mobile-security-cta {
        position: fixed;
        left: 12px;
        right: 12px;
        bottom: 12px;
        z-index: 60;
        display: none;
        box-shadow: 0 18px 34px rgba(6, 19, 30, 0.22);
    }

    @media (max-width: 767px) {
        .cert-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.25s ease;
        }

        .cert-card.is-open .cert-content {
            max-height: 760px;
        }

        .mobile-security-cta {
            display: flex;
        }

        .security-step:not(:last-child)::after {
            bottom: -26px;
        }

        .security-hero-section {
            padding-top: 8rem;
            padding-bottom: 60px;
        }

        .security-hero-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .security-hero-heading {
            font-size: 38px;
            line-height: 1.08;
        }

        .security-hero-subheading {
            font-size: 24px;
            line-height: 1.18;
        }

        .security-hero-description {
            font-size: 17px;
            line-height: 28px;
        }

        .security-hero-form {
            padding: 20px;
            max-width: 100%;
        }
    }
</style>

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
                        Your customer data never takes a day off. Neither does our security infrastructure. EmpireOne CX delivers AI-assisted, globally scalable teams backed by the world's strictest security and compliance standards.
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
                    <p class="mb-5">At EmpireOne CX, world-class customer service requires world-class data protection. Operating from our secure global delivery centers in Bogota, Lahore, and Toronto, we've invested heavily in independent audits, certifications, and continuous monitoring.</p>
                    <p>Whether you are handling healthcare records, processing payments, or scaling into European markets, our infrastructure is pre-built to meet your industry's exact regulatory requirements.</p>
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
                        "impact" => "Pass stringent Vendor Risk Assessments (VRAs) instantly. Knowing our internal security practices are consistently enforced allows you to safely integrate our offshore teams into your proprietary workflows.",
                        "proof" => "SOC 2 Type II is an independent third-party audit conducted by accredited external auditors, confirming a service provider consistently protects client data across security, availability, confidentiality, processing integrity, and privacy. The Type II designation means the controls were tested over a sustained period, not a single snapshot.",
                    ],
                    [
                        "title" => "What is ISO/IEC 27001:2022 and why does it matter for BPO?",
                        "impact" => "It provides a globally recognized guarantee of resilience against cyber threats, giving your enterprise stakeholders and IT departments instant peace of mind when partnering with us.",
                        "proof" => "It is the highest international standard for Information Security Management Systems (ISMS). Certified by internationally recognized bodies, it confirms we have a robust, systematic approach to managing sensitive company information so that it remains secure.",
                    ],
                    [
                        "title" => "What is HIPAA Compliance and why does it matter for BPO?",
                        "impact" => "Healthcare providers and health-tech companies can safely outsource support, billing, and back-office operations to EmpireOne CX without risking catastrophic regulatory fines or patient trust.",
                        "proof" => "We adhere strictly to the Health Insurance Portability and Accountability Act, utilizing encrypted systems and stringent physical access controls to protect electronic Protected Health Information (ePHI).",
                    ],
                    [
                        "title" => "What is PCI DSS Compliance and why does it matter for BPO?",
                        "impact" => "If your financial CX team handles payments, refunds, or subscriptions, our environment ensures cardholder data is never exposed, drastically reducing your liability.",
                        "proof" => "We maintain the Payment Card Industry Data Security Standard. Our networks, physical floors, and agent workflows are heavily restricted and monitored to process credit card information securely.",
                    ],
                    [
                        "title" => "What is GDPR Compliance and why does it matter for BPO?",
                        "impact" => "If you have customers in Europe, a single misstep in data handling can result in massive fines. We provide a fully compliant bridge to support your global customer base legally and safely.",
                        "proof" => "We strictly follow the General Data Protection Regulation (EU), ensuring transparent, secure, and lawful processing of personal data across all global delivery centers.",
                    ],
                    [
                        "title" => "A Commitment to Ethical Business",
                        "impact" => "EmpireOne CX is a BBB Accredited Business, giving partners confidence that their outsourcing provider is committed to ethical operations and responsive customer service.",
                        "proof" => "We meet the Better Business Bureau's rigorous Standards for Trust, maintaining a proven track record of transparent, responsive, and highly ethical customer service.",
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
                    <p class="text-[17px] leading-[30px] text-[#3C3B47]">For growing businesses and enterprise brands, outsourcing often comes with a fear of losing control over data. Our compliance framework transforms that risk into a strategic advantage.</p>
                </div>
                <div class="grid grid-cols-1 gap-5">
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Unlock Enterprise Deals</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">Pass stringent vendor risk assessments immediately. Clients using EmpireOne's SOC 2 and ISO 27001 certified environment have reduced VRA completion timelines by an average of 3 to 4 weeks.</p>
                    </div>
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Accelerate Onboarding</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">Because our infrastructure in Bogota, Lahore, and Toronto is already compliant with healthcare and financial regulations, we can launch dedicated teams in as little as 72 hours.</p>
                    </div>
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Protect Your Reputation</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">24/7 AI-monitored workflows help ensure that human error does not lead to data leaks. We protect your brand equity as fiercely as you do.</p>
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
                <p class="text-[17px] leading-[28px] text-white/72">A clear, auditable progression from infrastructure controls to transparent reporting.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <?php
                $steps = [
                    ["Infrastructure Lockdown", "Our global delivery centers utilize restricted-access network environments, zero-trust architecture, and strict physical security protocols, including no mobile phones, pens, or paper on PCI/HIPAA production floors."],
                    ["Secure Talent Onboarding", "Every dedicated agent undergoes rigorous background checks, secure endpoint device provisioning, and mandatory, industry-specific compliance training before touching your systems."],
                    ["AI-Assisted Monitoring", "We deploy AI-driven QA to monitor 100% of interactions. Our systems automatically redact sensitive data from transcripts and alert management to behavioral anomalies."],
                    ["Transparent Reporting & Auditing", "We do not just secure your data; we prove it. You receive regular compliance reports and QA scorecards, giving you full visibility into our ongoing security posture."],
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
                    <p class="text-[17px] leading-[30px] text-[#3C3B47]">Common security, compliance, and onboarding questions for regulated CX and BPO operations.</p>
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
