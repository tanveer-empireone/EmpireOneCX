<?php
$pageTitle = "Finance & Accounting BPO Services | EmpireOneCX"; //
$metaDescription = "EmpireOneCX's finance and accounting BPO services deliver accurate books, faster close cycles, and up to 60% cost savings. Bookkeeping, payroll, AP/AR, and more.";
$metaKeywords = "finance and accounting BPO services, finance BPO, accounting outsourcing, accounts payable outsourcing, bookkeeping BPO, payroll outsourcing, finance business process outsourcing, monthly close cycle, general ledger management, bank reconciliation, financial reporting outsourcing, QuickBooks outsourcing, Xero bookkeeping, SAP accounting, AP AR management"; //
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

            <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Breadcrumb">
                <a href="/solutions">Solutions</a>
                <span class="sep">/</span>
                <span class="current">Finance & Accounting BPO</span>
            </nav>

            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                
                <div>
                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            Finance & Accounting BPO
                        </span>
                    </p>

                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white" style="max-width: 860px;">
                        Cut Costs, Close Faster, and Scale
                    </h1>

                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8" style="max-width: 848px !important;">
                        EmpireOneCX’s finance and accounting BPO services give growing businesses access to a dedicated team of experienced accounting professionals, supported by AI-powered workflows that keep books accurate, shortening close cycles, and helping finance leaders focus on strategy rather than administration.
                    </p>

                    <div class="animate-reveal delay-4 flex flex-wrap items-center gap-4">
                        <button onclick="window.location.href='/contact'" class="herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;">
                            Build Your Finance Team
                        </button>
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

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Is Finance and Accounting BPO">
        <div class="container mx-auto px-4">
            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Operational Efficiency
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        What Is Finance and Accounting BPO?
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Finance and accounting business process outsourcing (BPO) means delegating your back-office financial operations — bookkeeping, payroll, accounts payable, accounts receivable, bank reconciliation, and financial reporting — to a specialized external provider.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        Done right, it's not just a cost play. It's a way to get senior accounting expertise, automation-grade accuracy, and enterprise-level compliance without building the infrastructure internally.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="In-House Finance vs EmpireOneCX Finance BPO">
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
                        In-House Finance vs. EmpireOneCX Finance BPO
                    </h3>
                </div>
            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="Finance BPO comparison table">
                    <thead>
                        <tr>
                            <th>Operational Metric</th>
                            <th>In-House Finance Team</th>
                            <th>EmpireOneCX Finance BPO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monthly Cost</td>
                            <td>High — salaries, benefits, software, training, turnover</td>
                            <td>Fractional/variable — up to 60% lower than in-house</td>
                        </tr>
                        <tr>
                            <td>Invoice Processing</td>
                            <td>Manual data entry, high error rate</td>
                            <td>AI-powered OCR, automated verification</td>
                        </tr>
                        <tr>
                            <td>Bank Reconciliation</td>
                            <td>Periodic, manual, often delayed</td>
                            <td>Continuous, automated, audit-ready</td>
                        </tr>
                        <tr>
                            <td>Scalability</td>
                            <td>Slow — recruits, onboarding, ramp-up required</td>
                            <td>Immediate — scale volume up or down in days</td>
                        </tr>
                        <tr>
                            <td>System Integration</td>
                            <td>Dependent on internal IT</td>
                            <td>Native support for QuickBooks, Xero, SAP, NetSuite</td>
                        </tr>
                        <tr>
                            <td>Compliance Coverage</td>
                            <td>Varies by hire seniority</td>
                            <td>GAAP/IFRS trained, industry-specific compliance built in</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Finance and Accounting BPO Services We Deliver">
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
                    Finance and Accounting BPO Services We Deliver
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Bookkeeping and General Ledger Management</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We maintain accurate, audit-ready books across your general ledger — managing journal entries, period-end closing, and account classifications in full compliance with GAAP or IFRS standards. Every entry is documented and traceable.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">GAAP / IFRS</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Period-end Closing</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Accounts Payable and Accounts Receivable</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        From automated invoice receipt and three-way matching to vendor payment coordination and cash collection follow-up, our AP and AR teams manage the full transactional cycle. The result: fewer processing delays, healthier cash flow, and less time your team spends chasing payments.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Three-way Matching</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Cash Collection</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2" ry="2"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Bank and Credit Card Reconciliation</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We perform continuous bank and credit card reconciliations across all accounts — catching discrepancies early, flagging potential fraud, and maintaining a clean, uninterrupted audit trail so you are always examination-ready.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Continuous Reconciliation</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Fraud Flagging</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Payroll Processing and Compliance</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        End-to-end payroll processing for domestic or multi-state workforces: calculations, tax deductions, statutory compliance, and disbursement coordination — ensuring every employee is paid accurately and on time, every cycle, without compliance exposure.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Tax Deductions</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Statutory Compliance</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Financial Reporting and Fractional CFO Support</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Regular financial reports including profit and loss statements, balance sheets, and cash flow summaries — delivered on your cadence. We also provide tax preparation support and, for clients who need it, fractional CFO-level visibility into financial performance and forward planning.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Financial Reports</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Fractional CFO</span>
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
                        Why Companies Choose EmpireOneCX for Finance BPO
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        The true cost of an in-house finance function extends far beyond base salaries. Software licensing, compliance training, hiring cycles, and turnover create compounding overhead that grows with your business. EmpireOneCX's finance BPO model eliminates that drag.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">AI-Assisted Workflows, Not Just Headcount</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Our accounting teams operate alongside AI-powered invoice OCR and automated reconciliation tools that reduce manual processing time by more than 40%. That efficiency flows directly to your financials — faster closes, fewer errors, lower cost per transaction.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Your Systems, Not Ours</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">We don't ask you to change your tech stack. Whether you run QuickBooks, Xero, Sage Intacct, SAP, or NetSuite, our teams plug directly into your existing environment. No migration. No disruption. No retraining your staff.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Compliance Expertise by Industry</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Finance compliance isn't one-size-fits-all. Our teams are trained across industry-specific regulatory frameworks: Financial services and fintech, Healthcare and insurance (HIPAA-aligned workflows), Retail and e-commerce (multi-jurisdictional sales tax), Real estate and property management, Legal and professional services, Technology and SaaS.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Enterprise-Grade Data Security</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Financial data is protected end-to-end: AES-256 encryption, mandatory multi-factor authentication (MFA), SOC 2-compliant data centers, and isolated virtual desktops. Your books are locked down.</p>
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
                        Business Impact of Outsourcing Finance and Accounting
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Organizations that move their finance and accounting operations to EmpireOneCX typically report:
                    </p>
                </div>
            </div>

            <div class="lasting-impression-soltuionsimg relative mt-10">
                <div class="solheightimg overflow-hidden rounded-[16px] w-full h-[490px] lg:h-[520px] xl:h-[580px]">
                    <img src="/assets/images/spage3.webp" alt="Finance and Accounting Outsourcing" class="fade-zoom-reveal w-full h-full object-cover object-center"/>
                </div>
            </div>

            <div class="solutions-wahtweoffer mt-10">
                <div class="mainsolthings flex items-left justify-between">
                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-y-5 mb-10">
                            <?php
                            $impacts = [
                                "Up to 60% reduction in total finance operational costs",
                                "Shorter monthly close cycles — from weeks to days",
                                "Measurable error reduction from the first billing period",
                                "Immediate scalability when transaction volume spikes or new entities are added",
                                "Audit readiness on demand — clean trails, documented processes, no scrambling"
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
                                These outcomes are not projections. They are the direct result of pairing experienced human accountants with AI-powered workflows that remove the friction of manual processing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Finance and Accounting BPO Services FAQ">
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
                        Finance and Accounting Outsourcing
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQs</span>
                    </h3>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "What are the main benefits of finance and accounting BPO?",
                            "The primary benefits of finance and accounting business process outsourcing include significant cost reductions (typically 40% to 60%), the ability to scale without hiring, immediate access to automation technologies like AI-powered invoice processing and reconciliation, and reduced compliance and audit risk. Companies also report meaningfully shorter monthly close cycles within the first quarter of engagement."
                        ],
                        [
                            "How do finance BPO providers protect sensitive financial data?",
                            "EmpireOneCX secures all financial data through AES-256 enterprise-grade encryption, strict multi-factor authentication (MFA) on all access points, SOC 2-compliant data centers, and isolated virtual desktop environments. These controls prevent unauthorized access and eliminate data leakage risk across your entire financial operation."
                        ],
                        [
                            "Can a finance BPO provider work inside my existing ERP or accounting software?",
                            "Yes. EmpireOneCX's finance teams are system-agnostic and trained to operate natively within your existing environment — including QuickBooks, Xero, Sage Intacct, SAP, and NetSuite. There is no requirement to migrate platforms or change your reporting infrastructure."
                        ],
                        [
                            "What finance functions can be outsourced to a BPO provider?",
                            "The most commonly outsourced finance functions include bookkeeping and general ledger management, accounts payable, accounts receivable, bank reconciliation, payroll processing, financial reporting, and tax preparation support. EmpireOneCX covers all of these as part of a fully managed engagement."
                        ],
                        [
                            "How quickly can an outsourced finance team be operational?",
                            "EmpireOneCX's onboarding process is designed for minimal disruption. Most engagements reach operational readiness within two to four weeks, depending on system access, current documentation, and transaction volume. Your existing workflows remain intact throughout."
                        ],
                        [
                            "Is finance BPO suitable for small and mid-sized businesses, or only enterprise?",
                            "Finance BPO is highly effective at the SMB and mid-market level — often more so than enterprise, where internal teams are larger. For growing companies that need senior accounting capability without the overhead of a full department, outsourcing delivers immediate and measurable value."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button type="button" class="cx-faq-toggle" onclick="toggleFinanceFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
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
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Finance and Accounting Operations?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                If your close cycles are dragging, your reconciliations are backlogged, or your finance team is stretched across work that shouldn't require senior attention, EmpireOneCX can help.
                                Tell us your systems, your volume, and your reporting requirements — we will design a finance and accounting BPO engagement that fits your operation from day one.
                            </p>
                            <div class="future-btn w-full max-w-2xl mx-auto mt-6">
                                <?php include(__DIR__ . "/../inc/contact-form.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
function toggleFinanceFaq(index) {
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
      "name": "What are the main benefits of finance and accounting BPO?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The primary benefits of finance and accounting business process outsourcing include significant cost reductions (typically 40% to 60%), the ability to scale without hiring, immediate access to automation technologies like AI-powered invoice processing and reconciliation, and reduced compliance and audit risk. Companies also report meaningfully shorter monthly close cycles within the first quarter of engagement."
      }
    },
    {
      "@type": "Question",
      "name": "How do finance BPO providers protect sensitive financial data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX secures all financial data through AES-256 enterprise-grade encryption, strict multi-factor authentication (MFA) on all access points, SOC 2-compliant data centers, and isolated virtual desktop environments. These controls prevent unauthorized access and eliminate data leakage risk across your entire financial operation."
      }
    },
    {
      "@type": "Question",
      "name": "Can a finance BPO provider work inside my existing ERP or accounting software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. EmpireOneCX's finance teams are system-agnostic and trained to operate natively within your existing environment — including QuickBooks, Xero, Sage Intacct, SAP, and NetSuite. There is no requirement to migrate platforms or change your reporting infrastructure."
      }
    },
    {
      "@type": "Question",
      "name": "What finance functions can be outsourced to a BPO provider?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The most commonly outsourced finance functions include bookkeeping and general ledger management, accounts payable, accounts receivable, bank reconciliation, payroll processing, financial reporting, and tax preparation support. EmpireOneCX covers all of these as part of a fully managed engagement."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can an outsourced finance team be operational?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX's onboarding process is designed for minimal disruption. Most engagements reach operational readiness within two to four weeks, depending on system access, current documentation, and transaction volume. Your existing workflows remain intact throughout."
      }
    },
    {
      "@type": "Question",
      "name": "Is finance BPO suitable for small and mid-sized businesses, or only enterprise?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Finance BPO is highly effective at the SMB and mid-market level — often more so than enterprise, where internal teams are larger. For growing companies that need senior accounting capability without the overhead of a full department, outsourcing delivers immediate and measurable value."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Finance and Accounting BPO Services",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOne CX",
    "url": "https://empireonecx.com"
  },
  "description": "EmpireOneCX's finance and accounting BPO services deliver accurate books, faster close cycles, and up to 60% cost savings. Bookkeeping, payroll, AP/AR, and more.",
  "url": "https://empireonecx.com/solutions/finance-accounting-bpo",
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
    "name": "Finance & Accounting BPO Services",
    "item": "https://empireonecx.com/solutions/finance-accounting-bpo"
  }]
}
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
