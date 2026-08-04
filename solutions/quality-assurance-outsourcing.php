<?php
$pageTitle = "Quality Assurance Outsourcing Services | EmpireOneCX";
$metaDescription = "EmpireOneCX's quality assurance outsourcing services give you dedicated QA teams, structured testing workflows, and defect-free delivery — without the overhead of building in-house.";
$metaKeywords = "quality assurance outsourcing, outsource quality assurance, outsourced quality assurance, quality assurance outsourcing companies, outsource quality assurance services, outsource software quality assurance services, QA BPO, software QA outsourcing, call quality monitoring, quality control outsourcing, QA testing services, process quality management, defect tracking, compliance QA, BPO quality assurance";
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

    <section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden">
        
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp">
            <source src="/assets/images/solutions-herobg.mp4" type="video/mp4" />
        </video>
        
        <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>

        <div class="container mx-auto w-full relative z-10">

            <!-- 440px GRID LAYOUT FOR FORM -->
            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                
                <!-- LEFT: Hero Copy -->
                <div class="text-center lg:text-left">
                    
                    <!-- Breadcrumb MOVED INSIDE LEFT COLUMN -->
                    <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Breadcrumb">
                        <a href="/solutions/">Solutions</a>
                        <span class="sep">/</span>
                        <span class="current">Quality Assurance Outsourcing</span>
                    </nav>

                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            Quality Assurance Services
                        </span>
                    </p>

                    <!-- ADDED lg:mx-0 TO STOP HORIZONTAL CENTERING ON DESKTOP -->
                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto lg:mx-0" style="max-width: 860px;">
                        Protect Your Standards, Every Process, Every Time
                    </h1>

                    <!-- ADDED lg:mx-0 TO STOP HORIZONTAL CENTERING ON DESKTOP -->
                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8 mx-auto lg:mx-0" style="max-width: 848px !important;">
                        EmpireOneCX's quality assurance outsourcing services give growing businesses a dedicated QA function with structured testing protocols, trained quality analysts, and AI-assisted monitoring — so defects get caught before they reach your customers, not after. 
                    </p>

                    <!-- ADDED lg:justify-start TO LEFT-ALIGN BUTTONS ON DESKTOP -->
                    <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <button onclick="window.location.href='/solutions/'" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
                            Explore All BPO Solutions
                        </button>
                    </div>
                </div>

                <!-- RIGHT: Compact Form -->
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

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Is Quality Assurance Outsourcing">
        <div class="container mx-auto px-4">
            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                QA Outsourcing
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        What Is Quality Assurance Outsourcing?
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Quality assurance outsourcing means delegating your QA function — or specific quality control tasks within it — to a specialized external provider equipped with the personnel, processes, and tooling to do it rigorously and at scale. Done right, outsourced quality assurance is not a cost-cutting compromise.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        It is a structural upgrade: you get dedicated QA analysts, standardized evaluation frameworks, and continuous monitoring that most internal teams cannot sustain consistently — especially as transaction volumes grow.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="In-House QA vs EmpireOneCX Quality Assurance Outsourcing">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-10" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                See the Difference
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        In-House QA vs. EmpireOneCX Quality Assurance Outsourcing
                    </h3>
                </div>
            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="QA comparison table">
                    <thead>
                        <tr>
                            <th>Operational Metric</th>
                            <th>In-House QA Team</th>
                            <th>EmpireOneCX QA Outsourcing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monthly Cost</td>
                            <td>High — salaries, tools, training, management overhead</td>
                            <td>Fractional/variable — significant savings vs. internal build-out</td>
                        </tr>
                        <tr>
                            <td>Coverage Consistency</td>
                            <td>Limited by team size and shift availability</td>
                            <td>Continuous monitoring across all queues and processes</td>
                        </tr>
                        <tr>
                            <td>Evaluation Framework</td>
                            <td>Often informal, inconsistently applied</td>
                            <td>Standardized scorecards, calibrated across all analysts</td>
                        </tr>
                        <tr>
                            <td>Scalability</td>
                            <td>Slow — hiring and onboarding required for volume spikes</td>
                            <td>Immediate — scale QA coverage up or down within days</td>
                        </tr>
                        <tr>
                            <td>Reporting Visibility</td>
                            <td>Periodic, manually compiled</td>
                            <td>Real-time dashboards, automated defect tracking, trend analysis</td>
                        </tr>
                        <tr>
                            <td>Compliance Alignment</td>
                            <td>Varies by internal expertise</td>
                            <td>Built-in compliance QA across regulated industries</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Quality Assurance Outsourcing Services We Deliver">
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
                    Quality Assurance Outsourcing Services We Deliver
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Call and Contact Center Quality Monitoring</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We evaluate every interaction against your defined service standards — scoring calls, chats, and emails for compliance, tone, accuracy, and resolution quality. Each evaluation is documented with structured feedback and tied to agent performance trends, giving your leadership actionable data rather than anecdotal reports.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Interaction Scoring</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Agent Trends</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Back-Office Process Quality Auditing</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        For data entry, claims processing, document verification, and other back-office workflows, our QA teams perform structured audits against your accuracy benchmarks. We identify error patterns at the process level — not just the individual level — so your team can fix root causes, not just symptoms.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Process Auditing</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Root Cause Analysis</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Software QA and Testing Support</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        From functional testing and regression cycles to user acceptance testing (UAT) coordination, our software QA outsourcing team works directly within your development workflows. We document defects with full reproduction steps, prioritize by severity, and track resolution to closure — so nothing slips through to production.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">UAT</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Regression Testing</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Compliance and Regulatory QA</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        In regulated industries, quality assurance is not optional — it is auditable. Our compliance QA teams monitor interactions and processes against applicable regulatory frameworks, flagging deviations and maintaining documentation that holds up under examination. We cover financial services, healthcare, insurance, and legal operations.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Auditable QA</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Regulatory Checks</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">QA Reporting, Analytics, and Calibration</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Beyond individual evaluations, EmpireOneCX delivers structured QA reporting: defect rate trends, team performance scorecards, calibration session outputs, and root cause summaries. These reports are built to inform decisions, not just to document activity — and they are delivered on your preferred cadence.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Scorecards</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Defect Tracking</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="samesectionpadding py-12 pt-[40px] relative overflow-hidden bg-white" aria-label="Why Companies Choose EmpireOneCX">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items: center;">
                <div class="reveal-left">
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        Why Companies Choose EmpireOneCX to Outsource Quality Assurance
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Building a consistent, high-performing QA function internally requires more than hiring evaluators. It requires calibration infrastructure, reporting systems, analyst management, and ongoing framework maintenance — all of which compound in cost as your operation scales. EmpireOneCX eliminates that build-out entirely.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Structured Evaluation Frameworks, Not Ad Hoc Spot-Checks</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Every EmpireOneCX QA engagement begins with a calibration phase: we align our scoring rubrics to your service standards, your compliance requirements, and your customer experience goals. Evaluations are consistent because the frameworks are — not because individual analysts happen to agree.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">AI-Assisted Monitoring at Volume</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Our QA teams operate alongside AI-powered interaction monitoring tools that surface high-risk conversations, flag compliance keywords, and identify anomaly patterns across large transaction volumes. That coverage would be impossible to achieve manually at the same cost — and the output feeds directly into your quality improvement cycle.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Your Environment, Your Standards</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">We work within your existing platforms — whether that is your CRM, your ticketing system, your call recording infrastructure, or your document management environment. No migration. No retraining. We adapt to your stack.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Compliance QA by Industry</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Quality requirements differ by sector. Our QA teams are trained across: Financial services and fintech (CFPB, FINRA-aligned monitoring), Healthcare and insurance (HIPAA-aligned interaction auditing), Retail and e-commerce (consumer protection and returns compliance), Legal and professional services (privilege and confidentiality protocols), Technology and SaaS (bug severity frameworks, release quality gates).</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Secure Handling of Sensitive Interaction Data</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Interaction recordings, process documents, and QA evaluation data are handled with enterprise-grade security: AES-256 encryption, mandatory multi-factor authentication, SOC 2-compliant infrastructure, and isolated access environments. Your data stays protected throughout the evaluation cycle.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Business Impact">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-5" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Business Impact
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        Business Impact of Outsourcing Quality Assurance
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Organizations that move their QA function — or supplement their internal team — with EmpireOneCX consistently report:
                    </p>
                </div>
            </div>

            <div class="solutions-wahtweoffer mt-10">
                <div class="mainsolthings flex items-left justify-between">
                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-y-5 mb-10">
                            <?php
                            $impacts = [
                                "Measurable reduction in defect rates and customer-facing errors from the first evaluation cycle",
                                "Faster identification of systemic process failures — before they become customer complaints or compliance violations",
                                "Consistent coverage across all shifts, channels, and transaction types — without scaling headcount proportionally",
                                "Audit-ready documentation maintained continuously, not assembled under pressure ahead of examinations",
                                "Actionable QA data that actually reaches operations leadership, rather than sitting in analyst spreadsheets"
                            ];
                            foreach ($impacts as $impact): ?>
                            <div class="flex items-center gap-3">
                                <img src="/assets/images/check.webp" alt="check" class="w-[20px] h-[20px]" />
                                <p class="text-[16px] leading-[24px] text-white"><?= $impact ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="rounded-[8px] mb-[12px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h3 class="mytextemp w-[146px] text-white text-[20px] leading-[28px] font-medium min-w-[120px]">Real Results</h3>
                        <div class="hidden md:block h-[42px] w-px bg-white flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between" style="width: 100%;">
                            <p class="text-white text-[16px] leading-[24px] w-[665px] mr-[50px]">
                                These outcomes follow directly from the discipline of structured, calibrated, continuous quality assurance — and they are available to businesses that cannot justify the infrastructure cost of building that function internally.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Quality Assurance Outsourcing FAQ">
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
                        Quality Assurance Outsourcing
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQs</span>
                    </h3>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "What is quality assurance outsourcing and what does it include?",
                            "Quality assurance outsourcing means engaging a specialized external provider to manage your QA function or specific quality control workflows on your behalf. Depending on your operation, this can include call and chat monitoring, back-office process auditing, software testing, compliance QA, and structured performance reporting. EmpireOneCX covers all of these as part of a fully managed engagement tailored to your industry and workflow."
                        ],
                        [
                            "How does outsourced quality assurance compare to building a QA team in-house?",
                            "Building an internal QA team requires significant investment in hiring, tooling, calibration infrastructure, and ongoing management. Outsourcing delivers the same rigorous quality function — with standardized frameworks, AI-assisted monitoring, and industry-trained analysts — at a fraction of the cost of an equivalent in-house build. Most clients also benefit from faster deployment and more consistent evaluation coverage than their internal teams were achieving."
                        ],
                        [
                            "What industries does EmpireOneCX serve with quality assurance outsourcing?",
                            "EmpireOneCX's QA teams are trained across financial services, healthcare, insurance, retail and e-commerce, legal and professional services, and technology and SaaS. Each industry has distinct compliance requirements and quality standards — our frameworks are built to reflect those differences, not apply a generic rubric across all sectors."
                        ],
                        [
                            "How quickly can an outsourced QA team be operational?",
                            "Most EmpireOneCX QA engagements reach operational readiness within two to three weeks. The initial phase covers calibration — aligning our scoring frameworks to your standards, configuring access to your platforms, and establishing reporting cadences. Your existing workflows are not disrupted during onboarding."
                        ],
                        [
                            "Can EmpireOneCX handle software QA outsourcing as well as operational QA?",
                            "Yes. EmpireOneCX's QA capability spans both operational quality (call monitoring, back-office auditing, compliance checks) and software QA (functional testing, regression cycles, UAT support, defect documentation). Clients with both needs can consolidate under a single provider rather than managing separate QA vendors for each function."
                        ],
                        [
                            "Is quality assurance outsourcing suitable for small and mid-sized businesses?",
                            "Quality assurance outsourcing delivers disproportionate value at the SMB and mid-market level, where internal QA resources are often thin or nonexistent. Growing businesses frequently reach a point where transaction volume outpaces their ability to monitor quality consistently. Outsourcing resolves that gap immediately — without the cost of building a dedicated internal QA department."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button type="button" class="cx-faq-toggle" onclick="toggleQaFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
                            <span class="cx-faq-question text-white"><?= $faq[0] ?></span>
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
                                Ready to Outsource Your 
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Quality Assurance Function?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                If your error rates are climbing, your QA coverage is inconsistent, or your team is reviewing too small a sample to catch what matters, EmpireOneCX can help. Tell us your channels, your transaction volume, and your compliance requirements — we will design a quality assurance outsourcing engagement that fits your operation from day one.
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
function toggleQaFaq(index) {
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
      "name": "What is quality assurance outsourcing and what does it include?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Quality assurance outsourcing means engaging a specialized external provider to manage your QA function or specific quality control workflows on your behalf. Depending on your operation, this can include call and chat monitoring, back-office process auditing, software testing, compliance QA, and structured performance reporting."
      }
    },
    {
      "@type": "Question",
      "name": "How does outsourced quality assurance compare to building a QA team in-house?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Outsourcing delivers the same rigorous quality function — with standardized frameworks, AI-assisted monitoring, and industry-trained analysts — at a fraction of the cost of an equivalent in-house build. Most clients also benefit from faster deployment and more consistent evaluation coverage."
      }
    },
    {
      "@type": "Question",
      "name": "What industries does EmpireOneCX serve with quality assurance outsourcing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX's QA teams are trained across financial services, healthcare, insurance, retail and e-commerce, legal and professional services, and technology and SaaS."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can an outsourced QA team be operational?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most EmpireOneCX QA engagements reach operational readiness within two to three weeks. The initial phase covers calibration — aligning our scoring frameworks to your standards, configuring access to your platforms, and establishing reporting cadences."
      }
    },
    {
      "@type": "Question",
      "name": "Can EmpireOneCX handle software QA outsourcing as well as operational QA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. EmpireOneCX's QA capability spans both operational quality (call monitoring, back-office auditing, compliance checks) and software QA (functional testing, regression cycles, UAT support, defect documentation)."
      }
    },
    {
      "@type": "Question",
      "name": "Is quality assurance outsourcing suitable for small and mid-sized businesses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Quality assurance outsourcing delivers disproportionate value at the SMB and mid-market level, where internal QA resources are often thin or nonexistent. Outsourcing resolves that gap immediately — without the cost of building a dedicated internal QA department."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Quality Assurance Outsourcing Services",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOne CX",
    "url": "https://empireonecx.com"
  },
  "description": "EmpireOneCX's quality assurance outsourcing services give you dedicated QA teams, structured testing workflows, and defect-free delivery — without the overhead of building in-house.",
  "url": "https://empireonecx.com/solutions/quality-assurance-services",
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
    "item": "https://empireonecx.com/solutions/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Quality Assurance Services",
    "item": "https://empireonecx.com/solutions/quality-assurance-services"
  }]
}
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
