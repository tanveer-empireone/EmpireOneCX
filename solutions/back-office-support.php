<?php
$pageTitle = "Back Office Support Services";
$metaDescription = "EmpireOneCX's back office support services cover data entry, document processing, order management, CRM updates, and email handling - with up to 60% lower costs than in-house.";
$metaKeywords = "back office support services, back office outsourcing, back office BPO, virtual back office support, data entry outsourcing, document processing outsourcing, order processing outsourcing, CRM data management, data entry services, OCR document processing, invoice processing, CRM hygiene, ERP updates, email ticket management, RPA automation, back office support outsourcing, insurance back office, mortgage back office, healthcare back office";
include(__DIR__ . "/../inc/header.php");
?>

<style>
/* ─── Compact hero form overrides ─── */
.ecx-compact .ecx-form-wrap .ecx-label                                        { display: none; }
.ecx-compact .ecx-form-wrap .ecx-input                                        { padding: 8px 12px; font-size: 13px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-input::placeholder                           { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-select                                       { padding: 8px 12px; font-size: 13px; background: rgba(20,20,20,0.95) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-select option                                { background: #1a1a1a; color: #fff; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper                                { padding: 8px 12px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"]              { color: #fff !important; font-size: 13px; background: transparent !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"]::placeholder { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle span.ecx-code                 { color: #fff !important; font-size: 13px; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle svg                           { color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-divider                                      { color: rgba(255,255,255,0.3) !important; }
.ecx-compact .ecx-form-wrap .ecx-grid-2                                       { gap: 8px; }
.ecx-compact .ecx-form-wrap .ecx-mt                                           { margin-top: 8px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row                                  { margin-top: 12px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row p                                { font-size: 12px; color: rgba(255,255,255,0.8) !important; }
.ecx-compact .ecx-form-wrap .ecx-submit-btn                                   { margin-top: 14px; padding: 10px 24px; font-size: 14px; }
.ecx-compact .ecx-country-dropdown                                            { background: #1a1a1a !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-country-item                                                { color: #ddd !important; }
.ecx-compact .ecx-country-item:hover                                          { background: rgba(122,118,255,0.2) !important; }

/* ─── Page-scoped overrides ─── */
.cx-hero-section {
    padding-top: 18rem;
    padding-bottom: 180px;
}

@media (max-width: 1024px) {
    /* Stack grid, show form, and fix overflow/cut-off on mobile/tablet */
    .cx-hero-grid { grid-template-columns: 1fr !important; }
    .cx-hero-form { display: block !important; }
    .cx-hero-section {
        padding-top: 10rem !important;
        padding-bottom: 80px !important;
        height: auto !important;
        min-height: 100vh !important;
    }
}

.cx-comparison-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 16px;
    overflow: hidden;
}
.cx-comparison-table thead th {
    padding: 20px 24px;
    font-size: 15px;
    font-weight: 600;
    text-align: left;
}
.cx-comparison-table thead th:first-child {
    background: #1a1a1a;
    color: #fff;
}
.cx-comparison-table thead th:nth-child(2) {
    background: #2a2a2a;
    color: #aaa;
}
.cx-comparison-table thead th:nth-child(3) {
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    color: #fff;
}
.cx-comparison-table tbody tr td {
    padding: 18px 24px;
    font-size: 15px;
    line-height: 24px;
    border-bottom: 1px solid #f0f0f0;
    vertical-align: top;
}
.cx-comparison-table tbody tr:last-child td {
    border-bottom: none;
}
.cx-comparison-table tbody tr td:first-child {
    background: #fafafa;
    color: #000;
    font-weight: 600;
}
.cx-comparison-table tbody tr td:nth-child(2) {
    background: #fff;
    color: #555;
}
.cx-comparison-table tbody tr td:nth-child(3) {
    background: #fdf9ff;
    color: #2a1a40;
}
.cx-feature-card {
    border-radius: 16px;
    padding: 36px;
    background: #fff;
    box-shadow: 0 4px 24px rgba(122,118,255,0.08);
    border: 1px solid #f0eeff;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.cx-feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(122,118,255,0.16);
}
.cx-feature-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: linear-gradient(135deg, #7A76FF 0%, #CB46FA 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}
.cx-feature-icon svg {
    width: 26px;
    height: 26px;
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.cx-industry-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 22px;
    border-radius: 100px;
    background: #fff;
    border: 1px solid #e8e4ff;
    font-size: 15px;
    color: #2a2a2a;
    transition: background 0.2s, border-color 0.2s;
    cursor: default;
}
.cx-industry-pill:hover {
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    color: #fff;
    border-color: transparent;
}
.cx-industry-pill span.dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: linear-gradient(135deg, #7A76FF, #FE881C);
    flex-shrink: 0;
    transition: background 0.2s;
}
.cx-industry-pill:hover span.dot {
    background: rgba(255,255,255,0.6);
}
.cx-stat-number {
    font-size: 52px;
    font-weight: 700;
    line-height: 1;
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.cx-faq-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.cx-faq-item:last-child {
    border-bottom: none;
}
.cx-faq-toggle {
    width: 100%;
    background: none;
    border: none;
    padding: 24px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    cursor: pointer;
    text-align: left;
}
.cx-faq-toggle:focus {
    outline: none;
}
.cx-faq-question {
    font-size: 17px;
    font-weight: 600;
    color: #fff; /* FIXED FAQ COLOR */
    line-height: 26px;
}
.cx-faq-icon {
    width: 32px;
    height: 32px;
    flex-shrink: 0;
    border-radius: 50%;
    background: linear-gradient(135deg, #7A76FF 0%, #FE881C 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.25s ease;
}
.cx-faq-icon svg {
    width: 14px;
    height: 14px;
    stroke: #fff;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform 0.25s ease;
}
.cx-faq-item.open .cx-faq-icon {
    transform: rotate(180deg);
}
.cx-faq-answer {
    font-size: 16px;
    line-height: 26px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease, padding-bottom 0.25s ease;
}
.cx-faq-item.open .cx-faq-answer {
    max-height: 400px;
    padding-bottom: 24px;
}
.breadcrumb-nav a,
.breadcrumb-nav span {
    font-size: 14px;
    color: #aaa;
    text-decoration: none;
}
.breadcrumb-nav a:hover { color: #CB46FA; }
.breadcrumb-nav .sep { margin: 0 8px; }
.breadcrumb-nav .current { color: #fff; }

/* Reveal animations */
@keyframes revealUp {
    from { opacity: 0; transform: translateY(28px); }
    to   { opacity: 1; transform: translateY(0); }
}
.animate-reveal { animation: revealUp 0.7s ease forwards; }
.delay-1 { animation-delay: 0.1s; }
.delay-2 { animation-delay: 0.25s; }
.delay-3 { animation-delay: 0.4s; }
.delay-4 { animation-delay: 0.55s; }
</style>

<main class="relative">

    <section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 overflow-hidden">
        
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp">
            <source src="/assets/images/solutions-herobg.mp4" type="video/mp4" />
        </video>
        
        <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>

        <div class="container mx-auto w-full relative z-10">

            <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Breadcrumb">
                <a href="/solutions">Solutions</a>
                <span class="sep">/</span>
                <span class="current">Back Office Support Services</span>
            </nav>

            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                
                <div>
                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            Back Office Outsourcing
                        </span>
                    </p>

                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white" style="max-width: 860px;">
                        Eliminate Bottlenecks and Free Your Team to Grow
                    </h1>

                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8" style="max-width: 848px !important;">
                        EmpireOneCX’s back office support services handle the full behind-the-scenes workload - accurately, at scale, and embedded with AI-assisted workflows - so your core team stays focused on clients, growth, and revenue.
                    </p>

                    <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <button onclick="window.location.href='/solutions'" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
                            Explore All BPO Solutions
                        </button>
                    </div>
                </div>

                <div class="cx-hero-form animate-reveal delay-3" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.14); border-radius:16px; padding:24px;">
                    <p style="color:#fff; font-size:15px; font-weight:600; text-align:center; margin:0 0 16px;">
                        Get a Free Consultation
                    </p>
                    <div class="ecx-compact">
                        <?php include(__DIR__ . "/../inc/contact-form.php"); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Are Back Office Support Services">
        <div class="container mx-auto px-4">
            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Behind the Scenes
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        What Are Back Office Support Services?
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Back office support services are the administrative, operational, and data-management functions that keep a business running without requiring direct customer interaction. They include data entry and database management, document processing and indexing, order and invoice handling, CRM and ERP system maintenance, and internal communication management.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        These functions are essential to business operations but rarely require in-house senior talent to execute them. Outsourcing back office support gives businesses access to trained, dedicated teams and AI-assisted automation - at a fraction of the cost of staffing the equivalent capacity internally.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="In-House Administration vs. EmpireOneCX Back Office Outsourcing">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-10" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Operational Efficiency
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        In-House Admin vs. EmpireOneCX Back Office Outsourcing
                    </h3>
                </div>
            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="Back office comparison table">
                    <thead>
                        <tr>
                            <th>Operational Parameter</th>
                            <th>Traditional In-House Admin</th>
                            <th>EmpireOneCX Back Office BPO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Operational Costs</td>
                            <td>High - local salaries, real estate, software licenses</td>
                            <td>Variable and fractional - up to 60% lower than in-house</td>
                        </tr>
                        <tr>
                            <td>Coverage Hours</td>
                            <td>Restricted to local business hours</td>
                            <td>24/7/365 coverage across global delivery shifts</td>
                        </tr>
                        <tr>
                            <td>Data Accuracy</td>
                            <td>Manual sampling, vulnerable to transcription errors</td>
                            <td>Dual-pass verification with custom RPA and AI validation</td>
                        </tr>
                        <tr>
                            <td>Scalability</td>
                            <td>Rigid - hiring and onboarding required to scale</td>
                            <td>Elastic - scale up or down based on transaction volume</td>
                        </tr>
                        <tr>
                            <td>Technology</td>
                            <td>Capital expenditure for local licenses and updates</td>
                            <td>Enterprise-grade AI OCR, RPA, and automation included</td>
                        </tr>
                        <tr>
                            <td>Compliance</td>
                            <td>Dependent on internal training and awareness</td>
                            <td>SOC 2, HIPAA, GDPR, and ISO 27001 aligned by design</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Back Office Support Services We Deliver">
        <div class="container mx-auto px-4">
            <div class="text-center mb-14">
                <h2 class="relative inline-flex items-center gap-2 text-sm py-3 overflow-hidden m-0 mb-3">
                    <span class="relative z-10 flex items-center gap-2">
                        <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                        <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            Our Capabilities
                        </span>
                    </span>
                </h2>
                <h3 class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-black mx-auto" style="max-width: 600px;">
                    Back Office Support Services We Deliver
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">High-Volume Data Entry and Data Management</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Accurate data is the foundation of every business decision. Our teams execute high-speed data entry, database maintenance, data cleansing, and validation routines with structured dual-pass quality checks - ensuring your records are complete, consistent, and audit-ready at all times.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Data Cleansing</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Validation</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 12h6M9 15h4"/><circle cx="18" cy="6" r="3" style="stroke:none;fill:rgba(255,255,255,0.6)"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Document Processing and Intelligent OCR</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We classify, index, and digitize documentation at scale using Optical Character Recognition (OCR) systems combined with human validation. Contracts, invoices, compliance records, legacy paperwork, and unstructured forms become clean, searchable, structured digital data - ready for immediate use across your systems.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">AI OCR</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Document Indexing</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><circle cx="9" cy="7" r="4"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><path d="M16 3.13a4 4 0 010 7.75"/><path d="M21 21v-2a4 4 0 00-3-3.87"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Order and Invoice Processing</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Delays in order and invoice management create cash flow gaps and erode supplier trust. Our back office teams manage your full transaction cycle - order entry, invoice matching, payment tracking, and balance reconciliation - with the speed and accuracy that keeps your operations and vendor relationships healthy.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Order Entry</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Invoice Matching</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">CRM and ERP System Hygiene</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Your CRM and ERP platforms are only as powerful as the data inside them. We handle routine profile updates, record synchronization, asset migration, and data validation across Salesforce, HubSpot, Zendesk, SAP, NetSuite, QuickBooks, and industry-specific ERPs - so your teams always work from a single, accurate source of truth.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">CRM Updates</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">ERP Maintenance</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Email Triage and Support Ticket Management</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We manage high-volume corporate inboxes and support ticket queues, categorizing, routing, and resolving administrative queries within your defined SLAs. No dropped threads, no missed follow-ups, no communication gaps - regardless of volume spikes.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Email Handling</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Ticket Routing</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Technology and Data Security</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Our teams operate natively within your existing platforms. EmpireOneCX back office operations are designed to satisfy international data standards: SOC 2, HIPAA, GDPR, and ISO 27001. All data is protected with AES-256 encryption, mandatory MFA, and isolated virtual desktop environments that prevent data leakage.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">SOC 2 / HIPAA</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">AES-256</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Industry-Specific Back Office Solutions">
        <div class="container mx-auto px-4">
            <div class="solution-side-img2 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Industry Expertise
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        Industry-Specific Back Office
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-black"> Outsourcing</span>
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Generic back office operations fail when confronted with strict industry regulations. EmpireOneCX deploys dedicated teams with vertical-specific training across compliance frameworks relevant to each sector. Each engagement is configured to the specific compliance standards and accuracy requirements of your industry.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <?php
                $industries = [
                    [
                        "Insurance Back Office Support Services",
                        "Policy indexing, claims document verification, premium billing data entry, and digital record compliance - handled by teams trained in insurance document workflows and regulatory requirements.",
                        ["Policy Indexing","Claims Verification","Billing Data"]
                    ],
                    [
                        "Mortgage Back Office Support Services",
                        "Loan file setup, disclosure verification, title data matching, and post-closing document audits - executed with the accuracy and traceability that mortgage compliance demands.",
                        ["Loan File Setup","Title Data","Post-Closing Audits"]
                    ],
                    [
                        "Healthcare Back Office Support Services",
                        "HIPAA-aligned patient intake processing, medical billing indexing, and health record system hygiene - managed by teams trained in healthcare data handling standards.",
                        ["HIPAA Aligned","Patient Intake","Medical Billing"]
                    ],
                    [
                        "Ecommerce Back Office Support Services",
                        "Product information management (PIM) system updates, SKU catalog uploads, order tracking, inventory data entry, and supplier coordination - scaled for high-volume operations.",
                        ["PIM Updates","SKU Uploads","Inventory Data"]
                    ],
                    [
                        "Logistics Back Office Support Services",
                        "Bill of lading processing, customs documentation entry, freight tracking, manifest reconciliation, and carrier record management - built for speed and accuracy.",
                        ["Bill of Lading","Customs Entry","Freight Tracking"]
                    ],
                    [
                        "Additional Sectors We Serve",
                        "We also provide specialized, compliant back office support teams for real estate, legal, financial services, automotive, and professional services organizations globally.",
                        ["Real Estate","Legal","Financial Services","Professional Services"]
                    ],
                ];
                foreach ($industries as $ind): ?>
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= $ind[0] ?></h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= $ind[1] ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach($ind[2] as $tag): ?>
                        <span class="cx-industry-pill"><span class="dot"></span><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Why Businesses Outsource Back Office">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-5" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Strategic Advantage
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        Why Businesses Outsource Back Office Operations to EmpireOneCX
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Hiring, training, and retaining in-house staff for back office functions is expensive, inflexible, and operationally inefficient at scale. Outsourcing to EmpireOneCX replaces that overhead with a dedicated, trained team that is ready to operate within your systems from day one - and that scales with your volume, not against it.
                    </p>
                </div>
            </div>

            <div class="solutions-wahtweoffer mt-10">
                <div class="mainsolthings flex items-left justify-between">
                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-y-5 mb-10">
                            
                            <div class="flex items-start gap-3">
                                <img src="/assets/images/check.webp" alt="check" class="w-[20px] h-[20px] mt-1" />
                                <div>
                                    <h4 class="text-[18px] font-semibold text-white mb-1">AI-Assisted Workflows, Not Just Headcount</h4>
                                    <p class="text-[16px] leading-[24px] text-gray-400">Every EmpireOneCX back office engagement is embedded with automation. We deploy Robotic Process Automation (RPA) scripts - including UiPath and custom macros - and AI-powered OCR to eliminate repetitive manual steps, reduce error rates, and accelerate turnaround times.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3 mt-4">
                                <img src="/assets/images/check.webp" alt="check" class="w-[20px] h-[20px] mt-1" />
                                <div>
                                    <h4 class="text-[18px] font-semibold text-white mb-1">System-Agnostic Integration</h4>
                                    <p class="text-[16px] leading-[24px] text-gray-400">We work inside your existing technology stack - not alongside it. Our teams are trained to operate natively within your specific ERP, CRM, document management, and workflow platforms. No new software required. No disruption to existing processes.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3 mt-4">
                                <img src="/assets/images/check.webp" alt="check" class="w-[20px] h-[20px] mt-1" />
                                <div>
                                    <h4 class="text-[18px] font-semibold text-white mb-1">Documented, Trackable, Audit-Ready</h4>
                                    <p class="text-[16px] leading-[24px] text-gray-400">Every process is documented. Every output is tracked. Every team member is trained on your specific systems, accuracy standards, and escalation protocols before handling live data. This gives you an audit trail that is always accessible.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="rounded-[8px] mb-[12px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h3 class="mytextemp w-[146px] text-white text-[20px] leading-[28px] font-medium min-w-[120px]">Real Results</h3>
                        <div class="hidden md:block h-[42px] w-px bg-white flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between" style="width: 100%;">
                            <p class="text-white text-[16px] leading-[24px] w-[665px] mr-[50px]">
                                The output is faster, cleaner, and more consistent than manual-only teams - at a significantly lower cost per transaction.
                            </p>
                            <a href="/contact" class="py-[10px] px-[24px] bg-white inline-block rounded-[8px]">
                                <span style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    Build Your Back Office Team
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Back Office Support Services FAQ">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items: flex-start;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Common Questions
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]">
                        Back Office Support Services
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQs</span>
                    </h3>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "What are back office support services?",
                            "Back office support services are the administrative, data management, and operational functions a business needs to run internally - but that do not involve direct customer interaction. They include data entry and database management, document indexing and processing, order and invoice handling, CRM and ERP maintenance, and email and ticket management. These functions are essential but highly suitable for outsourcing because they require precision and scale rather than senior strategic judgment."
                        ],
                        [
                            "What is the difference between back office and front office outsourcing?",
                            "Front office outsourcing covers customer-facing functions - customer service, sales support, and technical helpdesk. Back office outsourcing covers the internal operational functions that support the business: data management, document processing, system hygiene, order processing, and administrative workflows. Many organizations outsource both, with EmpireOneCX providing integrated front and back office BPO across a single delivery model."
                        ],
                        [
                            "Why outsource back office support services instead of keeping them in-house?",
                            "Outsourcing back office functions eliminates the cost of local hiring, training, software licensing, and managing staff turnover in roles that are high in volume but low in strategic complexity. It also provides immediate access to AI-assisted automation - OCR, RPA, and dual-pass validation - that most internal teams do not have the infrastructure to deploy. The result is lower cost per transaction, faster turnaround, and more consistent accuracy than manual in-house operations."
                        ],
                        [
                            "How does EmpireOneCX ensure data accuracy in back office processing?",
                            "EmpireOneCX applies a dual-pass verification model to high-volume data workflows - each processed record is independently verified by a second operator or by AI validation rules before it enters your systems. Additionally, all processes are documented with output tracking, and regular QA audits are performed against pre-agreed accuracy SLAs. Clients have full visibility into accuracy rates through regular reporting."
                        ],
                        [
                            "What data security standards does EmpireOneCX meet for back office operations?",
                            "EmpireOneCX secures all back office data with AES-256 encryption, mandatory multi-factor authentication across all system access points, isolated virtual desktop environments, and SOC 2-compliant data handling. For healthcare engagements, workflows are HIPAA-aligned. For operations involving European data, GDPR protocols apply. ISO 27001 architecture governs the broader information security management framework."
                        ],
                        [
                            "Can EmpireOneCX integrate with our existing ERP, CRM, or document management systems?",
                            "Yes. EmpireOneCX's back office teams are system-agnostic and trained to operate natively inside your existing platforms - including Salesforce, HubSpot, Zendesk, QuickBooks, SAP, NetSuite, and industry-specific EMRs. There is no requirement to replace or reconfigure your current infrastructure. System access and training are handled as part of the onboarding process, typically completed within two to four weeks."
                        ],
                        [
                            "How quickly can a back office support team be deployed?",
                            "Most EmpireOneCX back office engagements reach operational readiness within two to four weeks - including system access setup, process documentation, team training on your specific workflows, and QA calibration. For simpler, lower-volume engagements, deployment can be faster. We design the onboarding process to keep your existing operations running without interruption."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button type="button" class="cx-faq-toggle" onclick="toggleBoFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
                            <span class="cx-faq-question"><?= $faq[0] ?></span>
                            <span class="cx-faq-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none"><polyline points="6 9 12 15 18 9"/></svg>
                            </span>
                        </button>
                        <div class="cx-faq-answer text-gray-400" id="faq-answer-<?= $i ?>" role="region" aria-labelledby="faq-<?= $i ?>">
                            <?= $faq[1] ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">
        <div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute w-[720px] h-[760px] right-[54px] top-[-140px] bg-no-repeat opacity-100" style="background-image: url('/assets/images/futuresideig.webp'); transform: rotate(42deg);"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="mx-auto relative">
                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                    <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                    <div class="absolute inset-[3px] rounded-[13px] bg-white">
                        <div class="absolute inset-0">
                            <div class="hidden md:block absolute inset-0" style="background: url('/assets/images/cta-bg-image.webp') no-repeat center/cover;"></div>
                            <div class="md:hidden absolute inset-0" style="background: url('/assets/images/cta-gradient.webp') no-repeat center/cover;"></div>
                        </div>
                    </div>
                </div>

                <div class="future-innerwork py-5 px-4 md:px-16 relative z-10">
                    <div class="ctamain text-center">
                        <div class="cta-left-sidework pt-[60px] pb-[60px]">
                            <h2 class="solution-heading cta-solution-section future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">
                                Ready to Streamline Your
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Back Office Operations?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                If your core team is losing hours to data backlogs, document processing queues, or administrative overhead that doesn't require their seniority - EmpireOneCX can take it off their plate. Tell us your systems, your volume, and your biggest back office bottleneck. We will design a support model built around your exact workflows, compliance requirements, and output standards.
                            </p>
                            <div class="future-btn w-full max-w-2xl mx-auto mt-6">
                                <a href="/contact" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base hover:scale-[1.02] active:scale-95 transition shadow-lg hover:shadow-purple-400/20">
                                    Get a Free CX Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
function toggleBoFaq(index) {
    const item = document.getElementById('faq-' + index);
    const btn  = item.querySelector('.cx-faq-toggle');
    const isOpen = item.classList.contains('open');

    // Close all
    document.querySelectorAll('.cx-faq-item').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.cx-faq-toggle').setAttribute('aria-expanded', 'false');
    });

    // Open clicked (if it was closed)
    if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
    }
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var heroWrap = document.querySelector('.ecx-compact');
    if (!heroWrap) return;

    var toggle   = heroWrap.querySelector('.ecx-country-toggle');
    var dropdown = heroWrap.querySelector('.ecx-country-dropdown');
    var flagImg  = heroWrap.querySelector('#ecxSelectedFlag');
    var codeSpan = heroWrap.querySelector('.ecx-code');
    var codeHid  = heroWrap.querySelector('[name="country_code"]');

    if (!toggle || !dropdown) return;

    // Clone toggle to remove the old (overwritten) event listener
    var newToggle = toggle.cloneNode(true);
    toggle.parentNode.replaceChild(newToggle, toggle);

    newToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        dropdown.classList.toggle('open');
    });

    dropdown.addEventListener('click', function (e) {
        var item = e.target.closest('.ecx-country-item');
        if (!item) return;
        var code = item.dataset.code;
        var flag = item.dataset.flag;
        heroWrap.querySelector('#ecxSelectedFlag').src = 'https://flagcdn.com/w20/' + flag + '.webp';
        heroWrap.querySelector('.ecx-code').textContent = code;
        codeHid.value = code;
        dropdown.classList.remove('open');
    });

    document.addEventListener('click', function () {
        dropdown.classList.remove('open');
    });
});
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What are back office support services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Back office support services are the administrative, data management, and operational functions a business needs to run internally - but that do not involve direct customer interaction. They include data entry, document processing, and CRM maintenance."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between back office and front office outsourcing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Front office outsourcing covers customer-facing functions - customer service, sales support, and technical helpdesk. Back office outsourcing covers internal operational functions like data management, document processing, and administrative workflows."
      }
    },
    {
      "@type": "Question",
      "name": "Why outsource back office support services instead of keeping them in-house?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Outsourcing back office functions eliminates the cost of local hiring, training, software licensing, and managing staff turnover. It also provides immediate access to AI-assisted automation - OCR, RPA, and dual-pass validation."
      }
    },
    {
      "@type": "Question",
      "name": "How does EmpireOneCX ensure data accuracy in back office processing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX applies a dual-pass verification model to high-volume data workflows - each processed record is independently verified by a second operator or by AI validation rules before it enters your systems."
      }
    },
    {
      "@type": "Question",
      "name": "What data security standards does EmpireOneCX meet for back office operations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX secures all back office data with AES-256 encryption, mandatory multi-factor authentication, isolated virtual desktop environments, and SOC 2-compliant data handling. Workflows can be HIPAA-aligned or GDPR compliant as needed."
      }
    },
    {
      "@type": "Question",
      "name": "Can EmpireOneCX integrate with our existing ERP, CRM, or document management systems?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. EmpireOneCX's back office teams are system-agnostic and trained to operate natively inside your existing platforms - including Salesforce, HubSpot, Zendesk, QuickBooks, SAP, NetSuite, and industry-specific EMRs."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can a back office support team be deployed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most EmpireOneCX back office engagements reach operational readiness within two to four weeks - including system access setup, process documentation, team training on your specific workflows, and QA calibration."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Back Office Support Services",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOneCX BPO",
    "url": "https://empireonecx.com"
  },
  "description": "Empireo's back office support services cover data entry, document processing, order management, CRM updates, and email handling - with up to 60% lower costs than in-house.",
  "url": "https://empireonecx.com/solutions/back-office-support-services",
  "areaServed": "Worldwide"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Solutions",
    "item": "https://empireonecx.com/solutions"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Back Office Support Services",
    "item": "https://empireonecx.com/solutions/back-office-support-services"
  }]
}
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
