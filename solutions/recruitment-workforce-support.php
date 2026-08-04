<?php
$pageTitle = "Recruitment & Workforce Support BPO Services"; //
$metaDescription = "EmpireOneCX's recruitment and workforce support services give growing businesses dedicated HR BPO teams, workforce planning, contingent staffing support, and virtual assistant coverage — without the overhead of building in-house."; //
$metaKeywords = "hr bpo services, outsourced workforce management, workforce management outsourcing, contingent workforce outsourcing, recruitment outsourcing companies, workforce planning outsourcing, HR business process outsourcing, recruitment process outsourcing, remote workforce support, virtual assistant services, staffing support BPO, talent operations outsourcing, HR admin outsourcing, employee onboarding support"; //
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

    <section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 overflow-hidden">
        
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp">
            <source src="/assets/images/solutions-herobg.mp4" type="video/mp4" />
        </video>
        
        <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>

        <div class="container mx-auto w-full relative z-10">

            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                
                <div class="text-center lg:text-left">
                    
                    <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Breadcrumb">
                        <a href="/solutions/">Solutions</a>
                        <span class="sep">/</span>
                        <span class="current">Recruitment & Workforce Support</span>
                    </nav>

                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            HR & Workforce Support BPO
                        </span>
                    </p>

                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto lg:mx-0" style="max-width: 860px;">
                        Scale Your Team Without Scaling Your Overhead
                    </h1>

                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8 mx-auto lg:mx-0" style="max-width: 848px !important;">
                        EmpireOneCX’s recruitment and workforce support services give growing businesses access to a dedicated HR BPO function. Experienced professionals manage recruiting coordination, workforce administration, onboarding support, and day-to-day HR tasks, allowing your internal team to focus on strategy rather than paperwork.
                    </p>

                    <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <button onclick="window.location.href='/solutions/'" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
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

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Are Recruitment and Workforce Support Services">
        <div class="container mx-auto px-4">
            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Operational HR Layer
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        What Are Recruitment and Workforce Support BPO Services?
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        HR business process outsourcing means delegating the operational and administrative functions of your people function — recruiting coordination, candidate communication, onboarding workflows, workforce scheduling, HR data management, and day-to-day employee support — to a specialized external provider. This is not a replacement for your HR leadership or your talent strategy.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        It is the operational layer underneath it: the coordination, documentation, scheduling, and communication tasks that consume your team's time without requiring their strategic expertise. Done right, outsourced workforce management gives you a scalable, cost-efficient HR operation that handles volume without headcount growth — and adapts immediately when your hiring pace changes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="In-House HR vs EmpireOne CX Workforce Support">
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
                        In-House HR Operations vs. EmpireOneCX Workforce Support BPO
                    </h3>
                </div>
            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="HR Operations Comparison">
                    <thead>
                        <tr>
                            <th>Operational Metric</th>
                            <th>In-House HR Team</th>
                            <th>EmpireOneCX Workforce Support BPO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monthly Cost</td>
                            <td>High — salaries, benefits, ATS software, compliance tools, turnover</td>
                            <td>Fractional/variable — scale cost directly with hiring volume</td>
                        </tr>
                        <tr>
                            <td>Recruiting Coordination</td>
                            <td>Manual scheduling, high admin burden per role</td>
                            <td>Structured coordination workflows, consistent candidate communication</td>
                        </tr>
                        <tr>
                            <td>Workforce Scalability</td>
                            <td>Slow — new hires require recruiting, onboarding, ramp-up</td>
                            <td>Immediate — add or reduce support capacity in days</td>
                        </tr>
                        <tr>
                            <td>Contingent Workforce Management</td>
                            <td>Often unstructured, inconsistently tracked</td>
                            <td>Dedicated coordination with documented workflows and reporting</td>
                        </tr>
                        <tr>
                            <td>HR Admin and Data Management</td>
                            <td>Split across HR, operations, and admin staff</td>
                            <td>Centralized, consistent, audit-ready documentation</td>
                        </tr>
                        <tr>
                            <td>Virtual Assistant Coverage</td>
                            <td>Ad hoc or unsupported</td>
                            <td>Dedicated VAs trained to your systems, processes, and brand standards</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Workforce Support Services We Deliver">
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
                    Recruitment and Workforce Support Services We Deliver
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Recruiting Coordination and Candidate Pipeline Support</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We manage the operational backbone of your recruiting process: job posting coordination, applicant tracking, interview scheduling, candidate communication, and offer letter administration. Your recruiters and hiring managers stay focused on decisions — we handle the logistics that slow them down.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">ATS Management</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Candidate Comm</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Contingent Workforce Outsourcing and Administration</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Managing contract staff, freelancers, and project-based workers creates a disproportionate administrative burden relative to the value of each engagement. EmpireOneCX's contingent workforce outsourcing teams handle onboarding coordination, contract documentation, time and attendance tracking, and off-boarding — keeping your contingent workforce compliant and organized at any volume.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Contract Admin</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Compliance</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Employee Onboarding Support</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        First impressions determine retention. We manage the end-to-end administrative onboarding experience for new hires: document collection, system provisioning coordination, policy acknowledgment tracking, and completion verification — so every new employee starts with a consistent, professional experience regardless of how fast you are hiring.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Document Collection</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">System Provisioning</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">HR Administration and Data Management</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        From employee record maintenance and HR data entry to benefits administration support and compliance documentation, our HR BPO teams handle the back-office operations of your people function with accuracy and auditability. Every record is documented, traceable, and maintained to your defined standards.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Data Entry</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Benefits Support</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Virtual Assistant Services for Workforce Operations</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Our dedicated virtual assistants integrate directly into your workforce operations — handling scheduling, internal communications, HR inbox management, reporting support, and operational coordination tasks across time zones and functions. Unlike general-purpose VA platforms, EmpireOneCX VAs are trained to your specific environment, tools, and workflows from day one.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">HR Inbox Mgmt</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Dedicated VAs</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Workforce Planning and Reporting Support</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We support your workforce planning cycles by maintaining headcount data, compiling hiring velocity reports, tracking open role status, and building the operational reporting your leadership needs to make resourcing decisions quickly and confidently.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">Headcount Data</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">Velocity Reports</span>
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
                        Why Companies Choose EmpireOneCX for HR BPO and Workforce Support
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        The true cost of HR administration is not the salaries of your HR team — it is the time your entire organization loses when recruiting moves slowly, onboarding is inconsistent, and workforce data is fragmented across systems. EmpireOneCX eliminates that drag by building a dedicated operational layer around your people function.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Strategic Workforce Planning, Not Just Admin Coverage</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">EmpireOneCX's workforce support model is built around your hiring roadmap, not just your current open roles. We align our coordination capacity to your growth plan — so when hiring accelerates, support scales with it, and when it slows, your costs adjust accordingly.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Contingent Workforce Expertise at Scale</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Managing contingent talent is operationally complex: different contract types, variable engagement lengths, compliance requirements that vary by state and jurisdiction, and off-boarding timelines that are easy to mismanage. Our contingent workforce outsourcing teams are trained across these variables and maintain clean documentation throughout every engagement.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Dedicated Virtual Assistants, Not a Rotating Pool</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">EmpireOneCX's virtual assistant model is built around continuity. Your assigned VAs learn your systems, your terminology, your preferences, and your workflows — and they stay. You are not re-briefing a new person every month. That consistency compounds into meaningful productivity gains across your workforce operations.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">System-Agnostic Integration</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">We work inside your existing HR and workforce tools — whether that is Workday, BambooHR, Greenhouse, Lever, ADP, Rippling, or a custom ATS. No migration, no retraining your team, no disruption to processes that are already working.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Compliance Coordination Across Industries</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Workforce compliance requirements differ significantly by sector and by workforce type. EmpireOneCX's HR BPO teams are trained across: Technology and SaaS (remote workforce coordination, multi-state compliance), Financial services and fintech (licensing verification, background screening), Healthcare (credentialing support, HIPAA-aligned documentation), Retail and e-commerce, Legal, and Real estate.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Secure Handling of Employee and Candidate Data</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Workforce data is among the most sensitive information your organization holds. EmpireOneCX protects it with AES-256 encryption, mandatory multi-factor authentication, SOC 2-compliant infrastructure, and isolated access environments — ensuring your employee records and candidate data are handled with the security they require.</p>
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
                        Business Impact of Outsourcing Recruitment and Workforce Support
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Organizations that move their HR operations to EmpireOneCX consistently report:
                    </p>
                </div>
            </div>

            <div class="solutions-wahtweoffer mt-10">
                <div class="mainsolthings flex items-left justify-between">
                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-y-5 mb-10">
                            <?php
                            $impacts = [
                                "Faster time-to-offer — recruiting coordination bottlenecks removed from the first engagement cycle",
                                "Consistent onboarding experiences that improve new hire retention and reduce early attrition",
                                "Measurable reduction in HR administrative burden on internal teams — freeing senior HR staff for strategic work",
                                "Immediate scale for contingent workforce programs without proportional headcount growth",
                                "Clean, audit-ready workforce documentation maintained continuously, not reconstructed before compliance reviews",
                                "Productivity gains from dedicated virtual assistants who operate as genuine team extensions — not generalist task handlers"
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
                                These outcomes follow directly from building a disciplined operational layer around your people function — one that scales with your hiring velocity and does not require you to grow your internal HR headcount to match.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Recruitment and Workforce Support FAQ">
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
                        Recruitment and Workforce Support
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQs</span>
                    </h3>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "What is HR BPO and what does it include?",
                            "HR business process outsourcing (HR BPO) means delegating the operational and administrative functions of your HR and people operations to a specialized external provider. This typically includes recruiting coordination, onboarding administration, contingent workforce management, HR data maintenance, employee record management, and day-to-day HR support tasks. EmpireOneCX covers all of these as part of a fully managed engagement, and can also provide dedicated virtual assistants who integrate directly into your workforce operations."
                        ],
                        [
                            "What is the difference between recruitment outsourcing and HR BPO?",
                            "Recruitment outsourcing — often called RPO (Recruitment Process Outsourcing) — focuses specifically on the end-to-end hiring process: sourcing, screening, scheduling, and offer management. HR BPO is broader: it covers the full operational layer of your people function, including workforce administration, contingent workforce management, onboarding, compliance documentation, and HR data management. EmpireOneCX offers both, and most clients benefit from a combination depending on where their internal capacity gaps are."
                        ],
                        [
                            "How does contingent workforce outsourcing work?",
                            "EmpireOneCX's contingent workforce outsourcing service covers the full administrative lifecycle of contract, freelance, and project-based workers: onboarding coordination, contract documentation, time tracking, compliance verification, and off-boarding. Our teams manage this operational workload so your internal HR and procurement teams are not pulled into administrative tasks for every new contingent engagement."
                        ],
                        [
                            "Can EmpireOneCX provide dedicated virtual assistants for HR and workforce operations?",
                            "Yes. EmpireOneCX's virtual assistant service within the workforce support model places dedicated VAs — trained to your specific systems, workflows, and standards — inside your HR and operations function. Typical tasks include scheduling, HR inbox management, internal communications coordination, reporting support, and operational documentation. Unlike general VA platforms, our VAs are assigned to your team and maintain continuity across engagements."
                        ],
                        [
                            "How quickly can an outsourced workforce support team become operational?",
                            "Most EmpireOneCX workforce support engagements reach operational readiness within two to three weeks. The onboarding phase covers system access, process alignment, workflow documentation, and handover of any in-flight recruiting or administration activity. Your existing operations are not disrupted during the transition."
                        ],
                        [
                            "Is HR BPO effective for small and mid-sized businesses, or only large enterprises?",
                            "Outsourced workforce support delivers disproportionate value for SMBs and mid-market companies, where internal HR teams are typically small and stretched across both strategic and operational responsibilities. For a growing company that cannot yet justify a dedicated recruiting coordinator, onboarding specialist, and HR admin, outsourcing allows you to cover all three functions at a fraction of the cost of individual hires — and scale that coverage as your headcount grows."
                        ],
                        [
                            "What industries does EmpireOneCX serve with recruitment and workforce support?",
                            "EmpireOneCX's HR BPO and workforce support teams are trained across technology and SaaS, financial services, healthcare, retail and e-commerce, legal and professional services, and real estate and property management. Each industry has distinct compliance requirements, workforce structures, and hiring patterns — our teams are built to reflect those differences, not apply a generic HR administration model."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button type="button" class="cx-faq-toggle" onclick="toggleHrFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
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
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Recruitment and Workforce Support Operations?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                If your recruiting is slow, your HR team is buried in administration, or your contingent workforce is outgrowing your ability to manage it cleanly, EmpireOneCX can help. Tell us your workforce structure, your hiring volume, and your current operational gaps — we will design a recruitment and workforce support engagement that fits your operation from day one.
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
function toggleHrFaq(index) {
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
      "name": "What is HR BPO and what does it include?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "HR business process outsourcing (HR BPO) means delegating the operational and administrative functions of your HR and people operations to a specialized external provider. This typically includes recruiting coordination, onboarding administration, contingent workforce management, HR data maintenance, employee record management, and day-to-day HR support tasks."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between recruitment outsourcing and HR BPO?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Recruitment outsourcing — often called RPO (Recruitment Process Outsourcing) — focuses specifically on the end-to-end hiring process: sourcing, screening, scheduling, and offer management. HR BPO is broader: it covers the full operational layer of your people function, including workforce administration, contingent workforce management, onboarding, compliance documentation, and HR data management."
      }
    },
    {
      "@type": "Question",
      "name": "How does contingent workforce outsourcing work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX's contingent workforce outsourcing service covers the full administrative lifecycle of contract, freelance, and project-based workers: onboarding coordination, contract documentation, time tracking, compliance verification, and off-boarding."
      }
    },
    {
      "@type": "Question",
      "name": "Can EmpireOneCX provide dedicated virtual assistants for HR and workforce operations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. EmpireOneCX's virtual assistant service within the workforce support model places dedicated VAs — trained to your specific systems, workflows, and standards — inside your HR and operations function."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can an outsourced workforce support team become operational?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most EmpireOneCX workforce support engagements reach operational readiness within two to three weeks. The onboarding phase covers system access, process alignment, workflow documentation, and handover of any in-flight recruiting or administration activity."
      }
    },
    {
      "@type": "Question",
      "name": "Is HR BPO effective for small and mid-sized businesses, or only large enterprises?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Outsourced workforce support delivers disproportionate value for SMBs and mid-market companies, where internal HR teams are typically small and stretched across both strategic and operational responsibilities."
      }
    },
    {
      "@type": "Question",
      "name": "What industries does EmpireOneCX serve with recruitment and workforce support?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX's HR BPO and workforce support teams are trained across technology and SaaS, financial services, healthcare, retail and e-commerce, legal and professional services, and real estate and property management."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Recruitment & Workforce Support BPO Services",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOne CX",
    "url": "https://empireonecx.com"
  },
  "description": "EmpireOneCX's recruitment and workforce support services give growing businesses dedicated HR BPO teams, workforce planning, contingent staffing support, and virtual assistant coverage — without the overhead of building in-house.",
  "url": "https://empireonecx.com/solutions/recruitment-workforce-support",
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
    "name": "Recruitment & Workforce Support BPO Services",
    "item": "https://empireonecx.com/solutions/recruitment-workforce-support"
  }]
}
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
