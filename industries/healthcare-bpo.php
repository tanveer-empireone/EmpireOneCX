<?php
$pageTitle = "Healthcare BPO Services & Outsourcing Solutions";
$metaDescription = "HIPAA-compliant healthcare BPO for patient scheduling, billing, revenue cycle management, authorizations, records, and payer operations.";
$metaKeywords = "healthcare bpo, healthcare bpo services, bpo for healthcare, healthcare bpo solutions, healthcare bpo outsourcing, healthcare bpo companies, hipaa compliant healthcare bpo, healthcare payer bpo, healthcare bpo support services, healthcare business process outsourcing, healthcare bpo providers, medical billing outsourcing, revenue cycle management bpo, prior authorization outsourcing";

include(__DIR__ . "/../inc/header.php");

$services = [
    [
        "icon" => "fa-calendar-check",
        "title" => "Patient Scheduling & Intake Management",
        "copy" => "We manage patient scheduling and intake across phone, chat, and digital channels.",
        "items" => [
            "Multi-channel appointment scheduling (phone, chat, portal)",
            "Insurance eligibility pre-verification at intake",
            "Patient intake form processing",
            "No-show reminders and follow-up",
        ],
    ],
    [
        "icon" => "fa-file-invoice-dollar",
        "title" => "Medical Billing & Revenue Cycle Management",
        "copy" => "Our teams support accurate claims, denials, payments, and accounts receivable workflows.",
        "items" => [
            "Medical coding support (ICD-10, CPT, HCPCS)",
            "Claims submission and scrubbing",
            "Denial management and appeals",
            "Payment posting and reconciliation",
            "Accounts receivable and patient billing support",
        ],
    ],
    [
        "icon" => "fa-shield-halved",
        "title" => "Prior Authorization & Utilization Management",
        "copy" => "We submit, track, and follow up on authorization requests to reduce administrative delays.",
        "items" => [
            "Prior authorization submission and tracking",
            "Peer-to-peer coordination support",
            "Utilization review documentation",
            "Status updates and urgent escalations",
        ],
    ],
    [
        "icon" => "fa-headset",
        "title" => "Patient Support & Care Navigation",
        "copy" => "Trained teams handle patient inquiries, follow-up, referrals, and care navigation.",
        "items" => [
            "Inbound patient inquiry handling",
            "Post-discharge check-in outreach",
            "Referral and specialist coordination",
            "Prescription routing and satisfaction follow-up",
        ],
    ],
    [
        "icon" => "fa-folder-open",
        "title" => "Medical Records & Data Processing",
        "copy" => "We process records, clinical data, and EHR updates with documented quality controls.",
        "items" => [
            "Medical records request processing (ROI)",
            "EHR data entry and chart abstraction",
            "Document scanning, indexing, and archival",
            "Eligibility checks and data quality review",
        ],
    ],
    [
        "icon" => "fa-hospital-user",
        "title" => "Healthcare Payer BPO Services",
        "copy" => "We support health plans and administrators with member, claims, provider, and enrollment operations.",
        "items" => [
            "Member services and enrollment support",
            "Claims intake and adjudication support",
            "Provider credentialing and contracting support",
            "Appeals, grievances, and benefits coordination",
        ],
    ],
];

$faqs = [
    [
        "What is healthcare BPO?",
        "Healthcare BPO outsources non-clinical work such as billing, scheduling, authorizations, records, and claims to a specialist team.",
    ],
    [
        "Is outsourcing healthcare processes HIPAA-compliant?",
        "Yes, with appropriate controls. EmpireOneCX uses signed BAAs, HIPAA training, restricted access, and secure workflows for protected health information.",
    ],
    [
        "What healthcare processes can be outsourced?",
        "Common functions include billing, coding support, scheduling, authorizations, eligibility checks, records, member services, and claims support.",
    ],
    [
        "How does healthcare BPO reduce costs?",
        "It can reduce fixed hiring, training, management, and technology costs. Results depend on scope, complexity, hours, and team structure.",
    ],
    [
        "Will outsourcing affect our patient experience?",
        "Done well, it improves access through faster scheduling, accurate billing support, and consistent follow-up.",
    ],
    [
        "Do you work with EHR and practice management systems?",
        "Yes. Teams can work in approved EHR and practice management systems, including Epic, Oracle Health/Cerner, athenahealth, eClinicalWorks, and NextGen.",
    ],
];
?>

<style>
.healthcare-page {
    background: #fff;
    color: #101014;
}
.healthcare-hero {
    position: relative;
    min-height: 820px;
    padding: 190px 0 100px;
    overflow: hidden;
    background: #090910 url("/assets/images/indus6.webp") center/cover no-repeat;
}
.healthcare-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(5, 8, 14, 0.96) 0%, rgba(10, 12, 20, 0.88) 48%, rgba(5, 8, 14, 0.74) 100%);
}
.healthcare-hero__grid {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: minmax(0, 1fr) 440px;
    gap: 48px;
    align-items: center;
}
.healthcare-breadcrumb {
    display: flex;
    gap: 8px;
    margin-bottom: 24px;
    font-size: 14px;
    line-height: 20px;
    color: #aaa;
}
.healthcare-breadcrumb a {
    color: #aaa;
}
.healthcare-breadcrumb a:hover {
    color: #cb46fa;
}
.healthcare-eyebrow,
.healthcare-section-label {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 0 14px;
    font-size: 18px;
    line-height: 26px;
    font-weight: 500;
    background: linear-gradient(90deg, #7a76ff 0%, #cb46fa 52%, #fe881c 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.healthcare-eyebrow::before,
.healthcare-section-label::before {
    content: "";
    width: 28px;
    height: 4px;
    flex: 0 0 28px;
    border-radius: 999px;
    background: linear-gradient(90deg, #7a76ff 0%, #cb46fa 52%, #fe881c 100%);
}
.healthcare-hero h1 {
    max-width: 850px;
    margin: 0;
    color: #fff;
    font-size: clamp(44px, 5.3vw, 76px);
    line-height: 1.04;
    font-weight: 500;
    letter-spacing: 0;
}
.healthcare-hero__copy {
    max-width: 810px;
    margin: 22px 0 0;
    color: #d8d8df;
    font-size: 18px;
    line-height: 30px;
}
.healthcare-trust-line {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 20px;
    margin-top: 24px;
    color: #fff;
    font-size: 14px;
    line-height: 20px;
}
.healthcare-trust-line span {
    display: inline-flex;
    align-items: center;
    gap: 7px;
}
.healthcare-trust-line i {
    color: #14d488;
}
.healthcare-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 30px;
}
.healthcare-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 52px;
    padding: 0 26px;
    border: 1px solid rgba(255, 255, 255, 0.28);
    border-radius: 8px;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    transition: transform 0.2s ease, border-color 0.2s ease;
}
.healthcare-btn:hover {
    transform: translateY(-2px);
    border-color: rgba(255, 255, 255, 0.62);
}
.healthcare-btn--primary {
    border: 0;
    background: linear-gradient(90deg, #7a76ff 0%, #cb46fa 52%, #fe881c 100%);
}
.healthcare-form-card {
    padding: 24px;
    border: 1px solid rgba(255, 255, 255, 0.16);
    border-radius: 8px;
    background: rgba(12, 12, 18, 0.82);
    box-shadow: 0 26px 70px rgba(0, 0, 0, 0.32);
    backdrop-filter: blur(14px);
}
.healthcare-form-card__title {
    margin: 0 0 16px;
    color: #fff;
    font-size: 17px;
    line-height: 24px;
    font-weight: 600;
    text-align: center;
}
.healthcare-form-card .ecx-form-wrap .ecx-label {
    display: none;
}
.healthcare-form-card .ecx-form-wrap .ecx-input,
.healthcare-form-card .ecx-form-wrap .ecx-select {
    padding: 9px 12px;
    border-color: rgba(255,255,255,0.18);
    background: rgba(255,255,255,0.10);
    color: #fff;
    font-size: 13px;
}
.healthcare-form-card .ecx-form-wrap .ecx-input::placeholder {
    color: rgba(255,255,255,0.55);
}
.healthcare-form-card .ecx-form-wrap .ecx-select {
    background: #1b1b22;
}
.healthcare-form-card .ecx-phone-wrapper {
    padding: 9px 12px;
    border-color: rgba(255,255,255,0.18);
    background: rgba(255,255,255,0.10);
}
.healthcare-form-card .ecx-phone-wrapper input[type="tel"],
.healthcare-form-card .ecx-country-toggle span.ecx-code {
    color: #fff;
    font-size: 13px;
}
.healthcare-form-card .ecx-grid-2 {
    gap: 8px;
}
.healthcare-form-card .ecx-mt {
    margin-top: 8px;
}
.healthcare-form-card .ecx-privacy-row {
    margin-top: 12px;
}
.healthcare-form-card .ecx-privacy-row p {
    color: rgba(255,255,255,0.78);
    font-size: 12px;
    line-height: 18px;
}
.healthcare-form-card .ecx-submit-btn {
    margin-top: 14px;
    padding: 11px 20px;
    font-size: 14px;
}
.healthcare-section {
    padding: 92px 0;
}
.healthcare-section--soft {
    background: #f7f7fa;
}
.healthcare-section--dark {
    background: #09090d;
    color: #fff;
}
.healthcare-intro-grid {
    display: grid;
    grid-template-columns: minmax(280px, 0.78fr) minmax(0, 1.22fr);
    gap: 70px;
    align-items: start;
}
.healthcare-title {
    margin: 0;
    font-size: clamp(34px, 4vw, 52px);
    line-height: 1.12;
    font-weight: 500;
    letter-spacing: 0;
}
.healthcare-title--light {
    color: #fff;
}
.healthcare-prose {
    display: grid;
    gap: 16px;
}
.healthcare-prose p {
    margin: 0;
    color: #3c3b47;
    font-size: 16px;
    line-height: 27px;
}
.healthcare-section--dark .healthcare-prose p {
    color: #b8b8c2;
}
.healthcare-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    border-top: 1px solid #e7e6ec;
    border-bottom: 1px solid #e7e6ec;
}
.healthcare-stat {
    min-height: 170px;
    padding: 30px 24px;
    border-right: 1px solid #e7e6ec;
}
.healthcare-stat:last-child {
    border-right: 0;
}
.healthcare-stat strong {
    display: block;
    margin-bottom: 10px;
    font-size: 34px;
    line-height: 42px;
    background: linear-gradient(90deg, #7a76ff 0%, #cb46fa 52%, #fe881c 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.healthcare-stat span {
    color: #4f4d59;
    font-size: 14px;
    line-height: 22px;
}
.healthcare-service-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 20px;
    margin-top: 46px;
}
.healthcare-service-card {
    display: grid;
    grid-template-columns: 52px 1fr;
    gap: 18px;
    padding: 28px;
    border: 1px solid #e9e7ef;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0 8px 28px rgba(10, 15, 30, 0.05);
}
.healthcare-service-icon,
.healthcare-compliance-icon,
.healthcare-difference-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 8px;
    color: #fff;
    background: linear-gradient(135deg, #7a76ff 0%, #cb46fa 58%, #fe881c 100%);
}
.healthcare-service-icon i,
.healthcare-compliance-icon i,
.healthcare-difference-icon i {
    font-size: 21px;
}
.healthcare-service-card h3 {
    margin: 0 0 10px;
    color: #111116;
    font-size: 21px;
    line-height: 29px;
    font-weight: 600;
}
.healthcare-service-card p {
    margin: 0;
    color: #565461;
    font-size: 15px;
    line-height: 24px;
}
.healthcare-service-card h4 {
    margin: 18px 0 8px;
    color: #22212a;
    font-size: 14px;
    font-weight: 700;
}
.healthcare-check-list {
    display: grid;
    gap: 7px;
    margin: 0;
    padding: 0;
    list-style: none;
}
.healthcare-check-list li {
    position: relative;
    padding-left: 20px;
    color: #4b4955;
    font-size: 14px;
    line-height: 21px;
}
.healthcare-check-list li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 7px;
    width: 7px;
    height: 7px;
    border-radius: 999px;
    background: #7a76ff;
}
.healthcare-compliance-grid {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 14px;
    margin-top: 44px;
}
.healthcare-compliance-card {
    padding: 22px;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 8px;
    background: #141419;
}
.healthcare-compliance-icon {
    width: 44px;
    height: 44px;
    margin-bottom: 18px;
}
.healthcare-compliance-card h3 {
    margin: 0 0 10px;
    color: #fff;
    font-size: 17px;
    line-height: 24px;
    font-weight: 600;
}
.healthcare-compliance-card p {
    margin: 0;
    color: #aaa9b3;
    font-size: 14px;
    line-height: 23px;
}
.healthcare-difference-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
    margin-top: 42px;
}
.healthcare-difference-card {
    display: grid;
    grid-template-columns: 52px 1fr;
    gap: 18px;
    padding: 28px;
    border-bottom: 1px solid #e2e0e8;
}
.healthcare-difference-card h3 {
    margin: 0 0 9px;
    color: #15141b;
    font-size: 19px;
    line-height: 27px;
    font-weight: 600;
}
.healthcare-difference-card p {
    margin: 0;
    color: #55535e;
    font-size: 15px;
    line-height: 24px;
}
.healthcare-ecosystem {
    overflow-x: auto;
    margin-top: 38px;
    border: 1px solid #e7e5ed;
    border-radius: 8px;
}
.healthcare-ecosystem table {
    width: 100%;
    min-width: 760px;
    border-collapse: collapse;
}
.healthcare-ecosystem th,
.healthcare-ecosystem td {
    padding: 17px 20px;
    border-bottom: 1px solid #eceaf0;
    text-align: left;
    font-size: 15px;
    line-height: 23px;
}
.healthcare-ecosystem th {
    color: #fff;
    background: #101014;
    font-weight: 600;
}
.healthcare-ecosystem td:first-child {
    color: #17161d;
    font-weight: 600;
}
.healthcare-ecosystem tr:last-child td {
    border-bottom: 0;
}
.healthcare-faq-layout {
    display: grid;
    grid-template-columns: minmax(280px, 0.72fr) minmax(0, 1.28fr);
    gap: 70px;
    align-items: start;
}
.healthcare-faq-list {
    padding: 6px 28px;
    border-radius: 8px;
    background: #141419;
}
.healthcare-faq-item {
    border-bottom: 1px solid rgba(255,255,255,0.12);
}
.healthcare-faq-item:last-child {
    border-bottom: 0;
}
.healthcare-faq-toggle {
    width: 100%;
    padding: 22px 0;
    border: 0;
    color: #fff;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
    text-align: left;
    cursor: pointer;
}
.healthcare-faq-toggle span:first-child {
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
}
.healthcare-faq-toggle i {
    color: #cb46fa;
    transition: transform 0.2s ease;
}
.healthcare-faq-item.is-open .healthcare-faq-toggle i {
    transform: rotate(180deg);
}
.healthcare-faq-answer {
    max-height: 0;
    overflow: hidden;
    color: #aaa9b3;
    font-size: 15px;
    line-height: 25px;
    transition: max-height 0.3s ease, padding-bottom 0.3s ease;
}
.healthcare-faq-item.is-open .healthcare-faq-answer {
    max-height: 360px;
    padding-bottom: 22px;
}
.healthcare-cta {
    position: relative;
    overflow: hidden;
    padding: 70px 34px;
    border: 3px solid transparent;
    border-radius: 8px;
    background: linear-gradient(#fff, #fff) padding-box, linear-gradient(90deg, #7a76ff, #cb46fa, #fe881c) border-box;
    text-align: center;
}
.healthcare-cta h2 {
    margin: 0;
    color: #111116;
    font-size: clamp(34px, 4.5vw, 56px);
    line-height: 1.1;
    font-weight: 500;
}
.healthcare-cta p {
    max-width: 760px;
    margin: 18px auto 0;
    color: #4d4b57;
    font-size: 17px;
    line-height: 28px;
}
.healthcare-cta .healthcare-actions {
    justify-content: center;
}
.healthcare-cta .healthcare-btn:not(.healthcare-btn--primary) {
    color: #22212a;
    border-color: #cbc8d3;
}
.healthcare-cta__trust {
    margin-top: 24px;
    color: #686671;
    font-size: 13px;
    line-height: 21px;
}
@media (max-width: 1100px) {
    .healthcare-hero__grid,
    .healthcare-intro-grid,
    .healthcare-faq-layout {
        grid-template-columns: 1fr;
    }
    .healthcare-hero {
        padding-top: 140px;
    }
    .healthcare-form-card {
        max-width: 720px;
    }
    .healthcare-compliance-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}
@media (max-width: 760px) {
    .healthcare-hero {
        min-height: auto;
        padding: 112px 0 64px;
        background-position: 62% center;
    }
    .healthcare-hero h1 {
        font-size: 42px;
        line-height: 1.08;
    }
    .healthcare-hero__copy {
        font-size: 16px;
        line-height: 26px;
    }
    .healthcare-section {
        padding: 64px 0;
    }
    .healthcare-stats,
    .healthcare-service-grid,
    .healthcare-difference-grid,
    .healthcare-compliance-grid {
        grid-template-columns: 1fr;
    }
    .healthcare-stat {
        min-height: 0;
        border-right: 0;
        border-bottom: 1px solid #e7e6ec;
    }
    .healthcare-stat:last-child {
        border-bottom: 0;
    }
    .healthcare-service-card,
    .healthcare-difference-card {
        grid-template-columns: 1fr;
        padding: 22px;
    }
    .healthcare-actions,
    .healthcare-btn {
        width: 100%;
    }
    .healthcare-form-card {
        padding: 18px;
    }
    .healthcare-faq-list {
        padding: 4px 20px;
    }
}
</style>

<main class="healthcare-page">
    <section class="healthcare-hero">
        <div class="container mx-auto px-4 healthcare-hero__grid">
            <div>
                <nav class="healthcare-breadcrumb" aria-label="Breadcrumb">
                    <a href="/industries">Industries</a>
                    <span>/</span>
                    <span>Healthcare BPO</span>
                </nav>
                <p class="healthcare-eyebrow">Healthcare BPO</p>
                <h1>Built for Healthcare. Built for Compliance. Built to Scale.</h1>
                <p class="healthcare-hero__copy">
                    Healthcare-trained teams support patient access, billing, authorizations, records, and payer operations within defined compliance controls.
                </p>
                <div class="healthcare-trust-line" aria-label="Compliance credentials">
                    <span><i class="fa-solid fa-circle-check"></i> HIPAA Compliant</span>
                    <span><i class="fa-solid fa-circle-check"></i> PCI-DSS Certified</span>
                    <span><i class="fa-solid fa-circle-check"></i> ISO 27001 Secure</span>
                </div>
                <div class="healthcare-actions">
                    <a class="healthcare-btn healthcare-btn--primary" href="/contact">Get a Free Consultation</a>
                    <a class="healthcare-btn" href="#healthcare-services">Explore Healthcare BPO Services</a>
                </div>
            </div>

            <aside class="healthcare-form-card" aria-label="Healthcare BPO consultation form">
                <p class="healthcare-form-card__title">Get a Free Healthcare BPO Consultation</p>
                <?php include(__DIR__ . "/../inc/contact-form.php"); ?>
            </aside>
        </div>
    </section>

    <section class="healthcare-section">
        <div class="container mx-auto px-4">
            <div class="healthcare-intro-grid">
                <div>
                    <p class="healthcare-section-label">Why Healthcare Needs Specialized BPO</p>
                    <h2 class="healthcare-title">The Administrative Burden Is Real - and Growing</h2>
                </div>
                <div class="healthcare-prose">
                    <p>Staffing shortages, administrative costs, compliance requirements, and reimbursement pressure pull healthcare teams away from patient care.</p>
                    <p>EmpireOneCX combines healthcare-trained specialists, AI-assisted workflows, and defined controls to handle administrative work without reducing visibility or oversight.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="healthcare-section--soft" aria-label="Healthcare BPO statistics">
        <div class="container mx-auto px-4">
            <div class="healthcare-stats">
                <div class="healthcare-stat"><strong>24/7</strong><span>patient and operational coverage available</span></div>
                <div class="healthcare-stat"><strong>Omnichannel</strong><span>phone, chat, email, and digital support</span></div>
                <div class="healthcare-stat"><strong>HIPAA</strong><span>with ISO 27001 and PCI-DSS controls</span></div>
                <div class="healthcare-stat"><strong>QA-Led</strong><span>monitoring, coaching, and reporting</span></div>
            </div>
        </div>
    </section>

    <section id="healthcare-services" class="healthcare-section healthcare-section--soft">
        <div class="container mx-auto px-4">
            <p class="healthcare-section-label">Healthcare BPO Services</p>
            <h2 class="healthcare-title">What We Handle for Healthcare Organizations</h2>

            <div class="healthcare-service-grid">
                <?php foreach ($services as $service): ?>
                <article class="healthcare-service-card">
                    <div class="healthcare-service-icon" aria-hidden="true">
                        <i class="fa-solid <?= htmlspecialchars($service["icon"], ENT_QUOTES, "UTF-8") ?>"></i>
                    </div>
                    <div>
                        <h3><?= htmlspecialchars($service["title"], ENT_QUOTES, "UTF-8") ?></h3>
                        <p><?= htmlspecialchars($service["copy"], ENT_QUOTES, "UTF-8") ?></p>
                        <h4>What's included</h4>
                        <ul class="healthcare-check-list">
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

    <section class="healthcare-section healthcare-section--dark">
        <div class="container mx-auto px-4">
            <div class="healthcare-intro-grid">
                <div>
                    <p class="healthcare-section-label">Security & Compliance</p>
                    <h2 class="healthcare-title healthcare-title--light">HIPAA-Ready Infrastructure. Not Just a Checkbox.</h2>
                </div>
                <div class="healthcare-prose">
                    <p>Healthcare workflows use defined access, training, audit, and data-handling controls.</p>
                </div>
            </div>

            <div class="healthcare-compliance-grid">
                <article class="healthcare-compliance-card">
                    <div class="healthcare-compliance-icon"><i class="fa-solid fa-lock"></i></div>
                    <h3>HIPAA Compliance</h3>
                    <p>PHI teams receive HIPAA training and use role-based access and audit logging.</p>
                </article>
                <article class="healthcare-compliance-card">
                    <div class="healthcare-compliance-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3>ISO 27001 Security</h3>
                    <p>Controls cover access, encryption, incident response, and risk review.</p>
                </article>
                <article class="healthcare-compliance-card">
                    <div class="healthcare-compliance-icon"><i class="fa-solid fa-credit-card"></i></div>
                    <h3>PCI-DSS Certified</h3>
                    <p>Payment workflows are structured to protect cardholder data.</p>
                </article>
                <article class="healthcare-compliance-card">
                    <div class="healthcare-compliance-icon"><i class="fa-solid fa-file-signature"></i></div>
                    <h3>Signed BAAs</h3>
                    <p>BAAs define accountability before protected health information is handled.</p>
                </article>
                <article class="healthcare-compliance-card">
                    <div class="healthcare-compliance-icon"><i class="fa-solid fa-desktop"></i></div>
                    <h3>Secure Infrastructure</h3>
                    <p>Restricted devices, VPN access, screen controls, and reviews support delivery.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="healthcare-section">
        <div class="container mx-auto px-4">
            <p class="healthcare-section-label">Why EmpireOneCX</p>
            <h2 class="healthcare-title">Healthcare BPO Built for Providers Who Can't Afford Errors</h2>

            <div class="healthcare-difference-grid">
                <article class="healthcare-difference-card">
                    <div class="healthcare-difference-icon"><i class="fa-solid fa-user-nurse"></i></div>
                    <div>
                        <h3>Healthcare-Trained Teams, Not General BPO Agents</h3>
                        <p>Teams learn HIPAA protocols, terminology, workflows, and patient communication standards.</p>
                    </div>
                </article>
                <article class="healthcare-difference-card">
                    <div class="healthcare-difference-icon"><i class="fa-solid fa-microchip"></i></div>
                    <div>
                        <h3>AI-Assisted Workflows That Reduce Error Rates</h3>
                        <p>Automation supports claims checks, validation, and eligibility while people handle judgment.</p>
                    </div>
                </article>
                <article class="healthcare-difference-card">
                    <div class="healthcare-difference-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <div>
                        <h3>Real-Time Visibility and SLA Accountability</h3>
                        <p>Dashboards and SLAs keep quality, throughput, and improvement visible.</p>
                    </div>
                </article>
                <article class="healthcare-difference-card">
                    <div class="healthcare-difference-icon"><i class="fa-solid fa-arrows-rotate"></i></div>
                    <div>
                        <h3>Scalable Without Disrupting Your Operations</h3>
                        <p>Add capacity for enrollment periods, backlogs, mergers, or new services.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="healthcare-section healthcare-section--soft">
        <div class="container mx-auto px-4">
            <p class="healthcare-section-label">Healthcare Segments</p>
            <h2 class="healthcare-title">We Serve the Full Healthcare Ecosystem</h2>
            <p class="mt-4 text-[16px] leading-[26px] text-[#55535e]">Our healthcare BPO solutions support providers, payers, administrators, and specialty care organizations.</p>

            <div class="healthcare-ecosystem">
                <table>
                    <thead>
                        <tr><th>Segment</th><th>Services Focus</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Hospitals & Health Systems</td><td>Patient access, revenue cycle management, medical records, patient support</td></tr>
                        <tr><td>Physician Groups & Clinics</td><td>Scheduling, billing, prior authorization, patient communications</td></tr>
                        <tr><td>Health Plans & Payers</td><td>Member services, claims support, enrollment, appeals</td></tr>
                        <tr><td>Dental & Vision Practices</td><td>Scheduling, billing, insurance verification</td></tr>
                        <tr><td>Behavioral Health Providers</td><td>Intake, scheduling, billing, care coordination support</td></tr>
                        <tr><td>Home Health & Hospice</td><td>Intake, scheduling, records management, billing</td></tr>
                        <tr><td>Pharmacies & PBMs</td><td>Prior authorization support, patient services, data processing</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="flex flex-wrap gap-4 mt-8">
                <a class="text-[#7a76ff] font-semibold hover:text-[#cb46fa]" href="/solutions/bpo-solutions">Explore our full BPO solutions</a>
                <a class="text-[#7a76ff] font-semibold hover:text-[#cb46fa]" href="/solutions/back-office-support">Back-office support services</a>
                <a class="text-[#7a76ff] font-semibold hover:text-[#cb46fa]" href="/solutions/customer-experience-solutions">Patient experience and CX solutions</a>
                <a class="text-[#7a76ff] font-semibold hover:text-[#cb46fa]" href="/industries">View all industries we serve</a>
            </div>
        </div>
    </section>

    <section class="healthcare-section healthcare-section--dark">
        <div class="container mx-auto px-4 healthcare-faq-layout">
            <div>
                <p class="healthcare-section-label">Common Questions</p>
                <h2 class="healthcare-title healthcare-title--light">Healthcare BPO FAQs</h2>
                <p class="mt-5 text-[16px] leading-[26px] text-[#aaa9b3]">What healthcare leaders need to know about outsourcing administrative operations securely and effectively.</p>
            </div>
            <div class="healthcare-faq-list">
                <?php foreach ($faqs as $index => $faq): ?>
                <div class="healthcare-faq-item<?= $index === 0 ? " is-open" : "" ?>">
                    <button class="healthcare-faq-toggle" type="button" aria-expanded="<?= $index === 0 ? "true" : "false" ?>">
                        <span><?= htmlspecialchars($faq[0], ENT_QUOTES, "UTF-8") ?></span>
                        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                    </button>
                    <div class="healthcare-faq-answer"><?= htmlspecialchars($faq[1], ENT_QUOTES, "UTF-8") ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="healthcare-section">
        <div class="container mx-auto px-4">
            <div class="healthcare-cta">
                <h2>Ready to Reduce Your Administrative Burden?</h2>
                <p>Build a healthcare BPO program around your workflows, controls, and growth plans.</p>
                <div class="healthcare-actions">
                    <a class="healthcare-btn healthcare-btn--primary" href="/contact">Get a Free Consultation</a>
                    <a class="healthcare-btn" href="https://calendly.com/empireonegroup-marketing/30min" target="_blank" rel="noopener">Book a 15-Minute Call</a>
                </div>
                <div class="healthcare-cta__trust">HIPAA Compliant | ISO 27001 Certified | PCI-DSS Secure | BAA Executed Before Day One</div>
            </div>
        </div>
    </section>
</main>

<script>
document.querySelectorAll(".healthcare-faq-toggle").forEach(function (button) {
    button.addEventListener("click", function () {
        var item = button.closest(".healthcare-faq-item");
        var wasOpen = item.classList.contains("is-open");

        document.querySelectorAll(".healthcare-faq-item").forEach(function (faq) {
            faq.classList.remove("is-open");
            faq.querySelector(".healthcare-faq-toggle").setAttribute("aria-expanded", "false");
        });

        if (!wasOpen) {
            item.classList.add("is-open");
            button.setAttribute("aria-expanded", "true");
        }
    });
});
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Healthcare BPO Services",
  "serviceType": "Healthcare Business Process Outsourcing",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOneCX",
    "url": "https://empireonecx.com"
  },
  "description": "HIPAA-compliant healthcare BPO services including patient scheduling, medical billing, revenue cycle management, prior authorization, patient support, medical records, and payer operations.",
  "url": "https://empireonecx.com/industries/healthcare-bpo",
  "areaServed": "Worldwide"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($faqs as $index => $faq): ?>
    {
      "@type": "Question",
      "name": <?= json_encode($faq[0], JSON_UNESCAPED_SLASHES) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($faq[1], JSON_UNESCAPED_SLASHES) ?>
      }
    }<?= $index < count($faqs) - 1 ? "," : "" ?>
    <?php endforeach; ?>
  ]
}
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
