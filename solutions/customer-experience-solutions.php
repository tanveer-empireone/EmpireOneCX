<?php

$pageTitle = "Customer Experience Solutions | EmpireOne CX";

$metaDescription = "EmpireOneCX's customer experience solutions combine AI, omnichannel support, and dedicated global teams to improve CSAT, reduce churn, and scale your customer experience without scaling costs.";

$metaKeywords = "customer experience solutions, CX outsourcing, omnichannel customer support, customer experience management, AI customer service, outsourced CX teams, CSAT improvement, first contact resolution";

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
.ecx-compact .ecx-country-dropdown                                             { background: #1a1a1a !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-country-item                                                 { color: #ddd !important; }
.ecx-compact .ecx-country-item:hover                                           { background: rgba(122,118,255,0.2) !important; }

/* ─── Page-scoped overrides ─── */

.cx-hero-section {
    padding-top: 18rem;
    padding-bottom: 180px;
}

@media (max-width: 1024px) {
    .cx-hero-grid { grid-template-columns: 1fr !important; }
    .cx-hero-form { display: block !important; }
    .cx-hero-section {
        padding-top: 10rem !important;
        padding-bottom: 80px !important;
        height: auto !important;       /* Overrides any fixed heights */
        min-height: 100vh !important;  /* Ensures it at least covers the screen */
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
    border-bottom: 1px solid #f0f0f0;
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
    color: #fff;
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
    color: #555;
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
                
                <!-- LEFT: Hero Copy (Left-Aligned Desktop, Centered Mobile) -->
                <div class="text-center lg:text-left">
                    
                    <!-- Breadcrumb MOVED INSIDE LEFT COLUMN -->
                    <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Breadcrumb">
                        <a href="/solutions">Solutions</a>
                        <span class="sep">/</span>
                        <span class="current">Customer Experience Solutions</span>
                    </nav>

                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            Customer Experience Solutions
                        </span>
                    </p>

                    <!-- ADDED lg:mx-0 TO STOP HORIZONTAL CENTERING ON DESKTOP -->
                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto lg:mx-0" style="max-width: 860px;">
                        Customer Experience Solutions That Build Loyalty and Drive Revenue
                    </h1>

                    <!-- ADDED lg:mx-0 TO STOP HORIZONTAL CENTERING ON DESKTOP -->
                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8 mx-auto lg:mx-0" style="max-width: 848px !important;">
                        AI-powered workflows, dedicated global CX teams, and intelligent omnichannel delivery turn every touchpoint into a loyalty-building moment.
                    </p>

                    <!-- ADDED lg:justify-start TO LEFT-ALIGN BUTTONS ON DESKTOP -->
                    <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <button onclick="window.location.href='/solutions'" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
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


    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Are Customer Experience Solutions">

        <div class="container mx-auto px-4">

            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">

                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Customer Experience Solutions
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        What Are Customer Experience Solutions?
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Customer experience (CX) solutions are integrated platforms, people, and operational strategies that optimize, personalize, and streamline every interaction a business has with its customers — from first contact through to retention and advocacy.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        Modern CX solutions go beyond traditional call center support. They unify digital and voice channels, layer in conversational AI for self-service resolution, and give agents real-time customer context so every interaction feels informed and effortless — regardless of how or where the customer reaches out.
                    </p>
                </div>

            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                <?php
                $stats = [
                    ["50%", "Cost-per-contact reduction vs. legacy in-house operations"],
                    ["90",  "Days to measurable CSAT improvement"],
                    ["9",   "Countries with 24/7/365 multilingual delivery"],
                    ["500+","Agents deployable on demand"],
                ];
                foreach ($stats as $s): ?>
                <div class="text-center p-8 rounded-[16px]" style="background: #fafafa; border: 1px solid #f0eeff;">
                    <div class="cx-stat-number mb-2"><?= $s[0] ?></div>
                    <p class="text-[14px] leading-[20px] text-[#555]"><?= $s[1] ?></p>
                </div>
                <?php endforeach; ?>
            </div>

        </div>

    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Legacy vs EmpireOneCX Comparison">

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
                        Legacy Support vs. EmpireOneCX's
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> CX Solutions</span>
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Great CX at scale requires more than headcount. Here's how purpose-built CX outsourcing compares to maintaining legacy in-house support.
                    </p>
                </div>

            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="CX comparison table">
                    <thead>
                        <tr>
                            <th>Operational Dimension</th>
                            <th>Legacy In-House Support</th>
                            <th>EmpireOne CX Solutions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rows = [
                            ["Channel Management",       "Siloed queues, inconsistent handoffs",                        "Unified omnichannel console — voice, email, chat, SMS, social"],
                            ["First-Contact Resolution", "Low — heavy reliance on transfers and callbacks",             "AI-assisted intent routing reduces escalations and repeat contacts"],
                            ["Data Visibility",          "Static reports, delayed feedback cycles",                     "Real-time CSAT tracking, sentiment analysis, live dashboards"],
                            ["CRM Integration",          "Manual updates, disconnected customer context",               "Native integration — Salesforce, Zendesk, HubSpot, and more"],
                            ["Scalability",              "High overhead, constrained by local talent availability",     "9-country delivery footprint, scale from 10 to 500+ agents"],
                            ["Agent Quality",            "Generic pools, high attrition, inconsistent training",        "Dedicated teams trained on your brand, products, and workflows"],
                        ];
                        foreach ($rows as $r): ?>
                        <tr>
                            <td><?= $r[0] ?></td>
                            <td><?= $r[1] ?></td>
                            <td><?= $r[2] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </section>


    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Our CX Solutions Deliver">

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
                    What Our Customer Experience Solutions Deliver
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M3 5h18M3 12h18M3 19h18"/><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Intelligent Omnichannel Support</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Phone, email, live chat, SMS, and social — managed from a single unified operation. Customers move between channels without losing context. Your brand voice stays consistent. No interaction falls through the cracks.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Voice","Email","Live Chat","SMS","Social"] as $ch): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);"><?= $ch ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 12h6M9 15h4"/><circle cx="18" cy="6" r="3" style="stroke:none;fill:rgba(255,255,255,0.6)"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Conversational AI &amp; Workflow Automation</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Intent-driven chatbots and automated self-service workflows resolve repetitive tier-1 queries instantly — without agent involvement. Lower AHT, shorter queue times, and agents freed for high-value interactions.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Chatbots","Self-Service","Intent Routing","AHT Reduction"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><circle cx="9" cy="7" r="4"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><path d="M16 3.13a4 4 0 010 7.75"/><path d="M21 21v-2a4 4 0 00-3-3.87"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Dedicated, Brand-Trained CX Teams</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Every EmpireOneCX client gets a dedicated team — not a shared pool. Agents are trained on your brand voice, product catalog, escalation protocols, and customer expectations before the first interaction. No generic scripts. No cold-start period.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Dedicated Teams","Brand Training","Custom Protocols"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Deep CRM &amp; Tech Stack Integration</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Our teams operate natively inside your existing systems. We integrate with Salesforce, HubSpot, Zendesk, Freshdesk, and leading cloud telephony platforms — complete customer context before the conversation begins.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Salesforce","HubSpot","Zendesk","Freshdesk"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Real-Time CX Analytics &amp; Sentiment Reporting</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        CSAT scores, first contact resolution, average handle time, customer sentiment, and behavioral trends — tracked live. Structured reporting on a cadence that fits your operation, with actionable insights, not just raw numbers.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["CSAT","FCR","AHT","Sentiment Analysis"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Enterprise-Grade Security &amp; Compliance</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        AES-256 encryption, MFA on all system access, and isolated virtual desktop environments. Healthcare and financial services CX teams trained in HIPAA-aligned and compliance-specific workflows — across every industry we serve.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["AES-256","HIPAA","MFA","VDI"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="CX Deliverables and Business Impact">

        <div class="container mx-auto px-4">

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-5" style="align-items: center;">

                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Customer Experience Solutions
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        Delivering Conversations
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> That Drive Loyalty &amp; Revenue</span>
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Outsource your customer support to a team that protects your brand, resolves issues faster, and turns every interaction into a positive buying experience.
                    </p>
                </div>

            </div>

            <div class="lasting-impression-soltuionsimg relative">
                <div class="solheightimg overflow-hidden rounded-[16px] w-full h-[490px] lg:h-[520px] xl:h-[580px]">
                    <img src="/assets/images/spage1.webp" alt="EmpireOne CX team delivering omnichannel customer support" class="fade-zoom-reveal w-full h-full object-cover object-center"/>
                </div>
            </div>

            <div class="solutions-wahtweoffer">

                <div class="mainsolthings flex items-left justify-between">

                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <h3 class="text-[24px] leading-[32px] tracking-[-0.03em] font-medium text-white mb-5">What You Get</h3>
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-y-5 mb-10">
                            <?php
                            $deliverables = [
                                "Inbound and outbound call handling",
                                "24/7 answering and helpdesk support",
                                "Omnichannel routing — voice, chat, email, SMS",
                                "Live chat, email, and social media",
                                "After-hours and overflow support",
                                "Conversational AI and self-service",
                                "CRM integration and real-time agent context",
                                "QA monitoring and CSAT reporting",
                            ];
                            foreach ($deliverables as $d): ?>
                            <div class="flex items-center gap-3">
                                <img src="/assets/images/check.webp" alt="check" class="w-[20px] h-[20px]" />
                                <p class="text-[16px] leading-[24px] text-white"><?= $d ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="rightsidesoldes relative right-[54px] top-[-42px]">
                        <div class="noheightemp rounded-[14px] shadow-md p-[2px]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); box-shadow: 0px 6px 16px 0px rgba(77,77,92,0.14);">
                            <div class="bosx bg-white rounded-[calc(1rem-1px)] p-6 flex flex-row md:flex-col items-start gap-4 md:gap-[20px]">
                                <div class="boxesfont sm:ml-4 md:ml-0">
                                    <h3 class="text-[24px] leading-[28px] text-[#000000] mb-1 md:mb-9" style="font-weight: 600">Business Impact</h3>
                                    <img src="/assets/images/linebot.webp" class="mb-[15px]" alt="">
                                    <div class="linesli">
                                        <ul>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">Higher CSAT &amp; NPS scores</li>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">Faster response &amp; resolution times</li>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">Lower churn &amp; higher lifetime value</li>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">30–50% cost-per-contact reduction</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="rounded-[8px] mb-[12px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h3 class="mytextemp w-[146px] text-white text-[20px] leading-[28px] font-medium min-w-[120px]">Why It Works</h3>
                        <div class="hidden md:block h-[42px] w-px bg-white flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between" style="width: 100%;">
                            <p class="text-white text-[16px] leading-[24px] w-[665px] mr-[50px]">
                                We build dedicated customer service teams trained on your products, tone, and workflows — backed by AI-assisted routing, knowledge bases, and real-time QA.
                            </p>
                            <a href="/contact" class="py-[10px] px-[24px] bg-white inline-block rounded-[8px]">
                                <span style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    Build Your CX Team
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Industry-Specific CX Solutions">

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
                        Why Businesses Choose EmpireOneCX for
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-black"> CX Outsourcing</span>
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        We don't deploy generic CX models. Every engagement is built around the regulatory requirements, customer expectations, and service standards specific to your vertical.
                    </p>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <?php
                $industries = [
                    [
                        "Retail &amp; E-Commerce",
                        "High-volume seasonal support, order tracking, returns processing, and cart abandonment recovery — built for the speed and volume your customers expect.",
                        ["Order Tracking","Returns","Seasonal Scale","Cart Recovery"],
                    ],
                    [
                        "Financial Services &amp; Fintech",
                        "Fraud-aware support, account verification, billing dispute resolution, and compliance-aligned interactions — protecting your customers and your business.",
                        ["Fraud Awareness","Compliance","Account Support","Dispute Resolution"],
                    ],
                    [
                        "Healthcare &amp; Insurance",
                        "Patient-first care pathways, empathetic handling, and HIPAA-aligned workflows — where every interaction requires precision and sensitivity.",
                        ["HIPAA Aligned","Empathetic Care","Patient Support","Claims Assistance"],
                    ],
                    [
                        "Technology &amp; SaaS",
                        "Tier-1 and Tier-2 technical support, user onboarding, and proactive renewal management to maximize LTV and reduce voluntary churn.",
                        ["Tech Support T1/T2","Onboarding","Renewal Management","LTV Optimization"],
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

            <div class="mt-10 rounded-[16px] p-8 md:p-12 relative overflow-hidden" style="background: #000;">
                <div class="relative z-10 flex flex-col md:flex-row md:items-center gap-8">
                    <div class="flex-1">
                        <h4 class="text-[24px] leading-[32px] font-semibold text-white mb-3">Global Delivery, Local Expertise</h4>
                        <p class="text-[16px] leading-[26px] text-gray-400">
                            EmpireOneCX operates across 9 countries with multilingual CX teams supporting customers in English, Spanish, European, and Asian languages — with native-language proficiency, not translated scripts. 24/7/365 coverage across time zones, with no single-country dependency.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-3 flex-shrink-0">
                        <?php foreach(["English","Spanish","French","German","Japanese","Mandarin"] as $lang): ?>
                        <span class="px-4 py-2 rounded-full text-[14px] font-medium text-white" style="border: 1px solid rgba(122,118,255,0.4);"><?= $lang ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Customer Experience Solutions FAQ">

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
                        Customer Experience Solutions
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQs</span>
                    </h3>
                    <p class="text-[16px] leading-[24px] text-gray-400">
                        Everything you need to know before partnering with EmpireOneCX for your CX outsourcing.
                    </p>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "What are customer experience solutions?",
                            "Customer experience solutions are integrated combinations of technology, trained teams, and operational processes designed to manage and improve every interaction a business has with its customers across all channels — voice, digital, and self-service. They typically include omnichannel routing, conversational AI, CRM integration, analytics, and dedicated support teams. The goal is to reduce friction, improve satisfaction, increase retention, and lower the cost of delivering great service at scale."
                        ],
                        [
                            "What is the business impact of outsourcing customer experience?",
                            "Outsourcing customer experience to a specialist provider delivers measurable impact across retention, cost, and satisfaction. Companies commonly achieve 30% to 50% reductions in cost-per-contact, significant improvements in first-contact resolution rates, and higher CSAT and NPS scores compared to legacy in-house operations. The operational leverage comes from combining experienced human agents with AI-powered automation and real-time analytics."
                        ],
                        [
                            "How does EmpireOneCX integrate with existing CRM and tech infrastructure?",
                            "EmpireOne's CX teams operate natively within your existing technology stack. We integrate directly with Salesforce, HubSpot, Zendesk, Freshdesk, and leading cloud telephony platforms — ensuring agents have complete, real-time customer context before every interaction. There is no requirement to replace or reconfigure your current systems. Integration is handled as part of the onboarding process."
                        ],
                        [
                            "What is the difference between omnichannel and multichannel customer support?",
                            "Multichannel support means a business is reachable across multiple channels — phone, email, chat — but those channels operate independently. Customers who switch channels must repeat their context. Omnichannel support unifies all channels into a single operational console with a shared customer data layer. A customer who starts on chat and calls five minutes later is immediately recognized, their full history is visible, and the agent picks up the conversation — not a new one. EmpireOneCX delivers omnichannel, not multichannel."
                        ],
                        [
                            "How quickly can EmpireOneCX deploy a CX team?",
                            "For most engagements, EmpireOneCX can have a trained, brand-ready CX team operational within four to six weeks — including system integration, agent training on your brand and products, and QA process setup. The exact timeline depends on team size, workflow complexity, and integration requirements."
                        ],
                        [
                            "Is outsourced CX appropriate for businesses that require strict data compliance?",
                            "Yes. EmpireOneCX operates with enterprise-grade data security — AES-256 encryption, MFA on all system access, and isolated virtual desktop environments. Our healthcare and financial services CX teams are trained in HIPAA-aligned and compliance-specific workflows. We operate within the regulatory frameworks relevant to your industry and geography, and can provide documentation as part of the procurement process."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button class="cx-faq-toggle" onclick="toggleFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
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
                                Ready to Transform Your
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Customer Experience</span>?
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Tell us your channels, your volume, and your biggest CX challenge. We'll design a solution built around your exact requirements.
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
function toggleFaq(index) {
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What are customer experience solutions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Customer experience solutions are integrated combinations of technology, trained teams, and operational processes designed to manage and improve every interaction a business has with its customers across all channels — voice, digital, and self-service."
      }
    },
    {
      "@type": "Question",
      "name": "What is the business impact of outsourcing customer experience?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Companies commonly achieve 30% to 50% reductions in cost-per-contact, significant improvements in first-contact resolution rates, and higher CSAT and NPS scores compared to legacy in-house operations."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can EmpireOneCX deploy a CX team?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For most engagements, EmpireOneCX can have a trained, brand-ready CX team operational within four to six weeks — including system integration, agent training, and QA process setup."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Customer Experience Solutions",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOne CX",
    "url": "https://empireonecx.com"
  },
  "description": "AI-powered omnichannel customer experience outsourcing with dedicated global CX teams, CRM integration, and real-time analytics.",
  "url": "https://empireonecx.com/solutions/customer-experience-solutions",
  "areaServed": "Worldwide"
}
</script>
<script>
// Re-init hero form country picker after the contact form include
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

<?php include(__DIR__ . "/../inc/footer.php"); ?>
