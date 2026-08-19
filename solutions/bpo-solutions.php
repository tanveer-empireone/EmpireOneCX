<?php
$pageTitle = "AI-Enabled BPO Solutions & Automation Services";
$metaDescription = "EmpireOneCX's AI-enabled BPO solutions combine robotic process automation, intelligent workflows, and experienced human teams to cut costs, eliminate errors, and scale faster than traditional outsourcing.";
$metaKeywords = "bpo automation, automation in bpo industry, robotic process automation bpo, ai bpo services, artificial intelligence in bpo industry, digital transformation and business process outsourcing, ai and automation in bpo, robotic automation in bpo, ai-powered bpo services, automated bpo, bpo automation platform, gen ai bpo services, ai in business process outsourcing, conversation intelligence for bpo, ai-powered data processing outsourcing, ai automation platforms for bpo call centers, intelligent assistance bpo, future of bpo with ai and automation";
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

@media (max-width: 767px) {
  .bpo-page .cx-hero-section {
    height: auto !important;
    min-height: 720px !important;
    padding: 188px 20px 62px !important;
    justify-content: flex-start !important;
    text-align: center !important;
  }

  .bpo-page .cx-hero-section .container {
    max-width: 100% !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  .bpo-page .cx-hero-grid {
    display: grid !important;
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 26px !important;
  }

  .bpo-page .breadcrumb-nav {
    display: flex !important;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 7px;
    margin-bottom: 18px !important;
    line-height: 20px !important;
  }

  .bpo-page .breadcrumb-nav a,
  .bpo-page .breadcrumb-nav span {
    font-size: 13px !important;
    line-height: 20px !important;
  }

  .bpo-page .breadcrumb-nav .sep {
    margin: 0 !important;
  }

  .bpo-page .cx-hero-section .herosubtitle {
    display: block !important;
    width: 100% !important;
    margin: 0 auto 14px !important;
    font-size: 16px !important;
    line-height: 24px !important;
    letter-spacing: 0.08em !important;
    text-align: center !important;
  }

  .bpo-page .cx-hero-section .solutions-hero-heading {
    max-width: min(350px, calc(100vw - 40px)) !important;
    margin: 0 auto 16px !important;
    font-size: 34px !important;
    line-height: 42px !important;
    letter-spacing: 0 !important;
    text-align: center !important;
    text-wrap: balance;
  }

  .bpo-page .cx-hero-section .subpara,
  .bpo-page .cx-hero-section .cx-hero-grid > div:first-child > p:not(.herosubtitle) {
    max-width: min(330px, calc(100vw - 42px)) !important;
    margin-left: auto !important;
    margin-right: auto !important;
    margin-bottom: 26px !important;
    font-size: 14px !important;
    line-height: 22px !important;
    letter-spacing: 0 !important;
    text-align: center !important;
  }

  .bpo-page .cx-hero-section .delay-4 {
    display: flex !important;
    width: 100% !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 12px !important;
  }

  .bpo-page .cx-hero-section .delay-4 a,
  .bpo-page .cx-hero-section .delay-4 button {
    display: flex !important;
    width: min(100%, 300px) !important;
    min-height: 52px !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 14px 18px !important;
    font-size: 14px !important;
    line-height: 20px !important;
    text-align: center !important;
    white-space: normal !important;
  }

  .bpo-page .cx-hero-form {
    display: none !important;
  }

  .bpo-page .samesectionpadding {
    padding-top: 58px !important;
    padding-bottom: 58px !important;
  }

  .bpo-page .solution-heading,
  .bpo-page .solution-heading span {
    max-width: 100% !important;
    font-size: 30px !important;
    line-height: 38px !important;
    letter-spacing: 0 !important;
  }

  .bpo-page .cx-feature-card {
    padding: 28px 20px !important;
  }

  .bpo-page .cx-comparison-table {
    min-width: 720px !important;
  }
}

@media (max-width: 360px) {
  .bpo-page .cx-hero-section {
    min-height: 760px !important;
    padding-top: 184px !important;
  }

  .bpo-page .cx-hero-section .solutions-hero-heading {
    font-size: 31px !important;
    line-height: 39px !important;
  }
}
</style>

<main class="bpo-page relative">

    <section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 overflow-hidden">
        
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp">
            <source src="/assets/images/solutions-herobg.mp4" type="video/mp4" />
        </video>
        
        <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>

        <div class="container mx-auto w-full relative z-10">

            <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Breadcrumb">
                <a href="/solutions/">Solutions</a>
                <span class="sep">/</span>
                <span class="current">AI-Enabled BPO Solutions</span>
            </nav>

            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                
                <div>
                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            AI-Enabled BPO Solutions
                        </span>
                    </p>

                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white" style="max-width: 860px;">
                        Replace Manual Friction With Intelligent & Scalable Automation
                    </h1>

                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8" style="max-width: 848px !important;">
                        EmpireOneCX's AI-enabled BPO solutions are built differently. We combine experienced human operators with robotic process automation, AI-powered workflow tools, and intelligent monitoring systems.
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

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Is AI-Enabled BPO">
        <div class="container mx-auto px-4">
            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                BPO Automation
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        What Is AI-Enabled BPO and How Is It Different From Traditional Outsourcing?
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Conventional BPO outsources a process to a team of people who perform it manually, at lower cost. AI-enabled BPO outsources the process to a team of people working alongside automation tools — RPA bots, AI-powered document processing, intelligent quality monitoring, and machine-learning-assisted decision support — that handle the high-volume, rules-based tasks at machine speed.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        The difference in outcomes is significant: Traditional BPO scales linearly: more volume requires more headcount. AI-enabled BPO scales non-linearly: automation absorbs volume spikes without proportional cost increases, and human operators handle edge cases, exceptions, and quality oversight. For growing businesses, this model delivers the cost efficiency of outsourcing and the throughput efficiency of automation — without requiring you to build and manage the automation infrastructure yourself.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Traditional BPO vs EmpireOneCX AI-Enabled BPO">
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
                        Traditional BPO vs. EmpireOneCX AI-Enabled BPO
                    </h3>
                </div>
            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="AI BPO comparison table">
                    <thead>
                        <tr>
                            <th>Operational Metric</th>
                            <th>Traditional BPO</th>
                            <th>EmpireOneCX AI-Enabled BPO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Scaling Model</td>
                            <td>Linear — more volume requires more headcount</td>
                            <td>Non-linear — automation absorbs volume spikes</td>
                        </tr>
                        <tr>
                            <td>Error Rate</td>
                            <td>Dependent on human consistency, fatigue, and training</td>
                            <td>Significantly reduced through automated validation and AI checks</td>
                        </tr>
                        <tr>
                            <td>Processing Speed</td>
                            <td>Limited by human throughput per task</td>
                            <td>AI-assisted processing reduces cycle time by 40%+ on eligible workflows</td>
                        </tr>
                        <tr>
                            <td>Cost Per Transaction</td>
                            <td>Flat or rising as complexity increases</td>
                            <td>Decreasing as automation handles higher share of volume</td>
                        </tr>
                        <tr>
                            <td>Quality Monitoring</td>
                            <td>Periodic, sample-based</td>
                            <td>Continuous, AI-assisted across 100% of eligible interactions</td>
                        </tr>
                        <tr>
                            <td>Implementation</td>
                            <td>Headcount-based onboarding</td>
                            <td>Workflow mapping + automation configuration + human oversight layer</td>
                        </tr>
                        <tr>
                            <td>Adaptability</td>
                            <td>Slow to restructure as processes change</td>
                            <td>Automation rules updated rapidly; human layer absorbs exceptions</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="AI-Enabled BPO Solutions We Deliver">
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
                    AI-Enabled BPO Solutions We Deliver
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M3 5h18M3 12h18M3 19h18"/><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Robotic Process Automation (RPA) for BPO Workflows</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        We deploy robotic process automation across high-volume, rules-based back-office tasks — data entry, form processing, system updates, invoice handling, order management, and reconciliation workflows. RPA bots execute these tasks at machine speed with zero fatigue, zero keystroke errors, and full audit trail documentation. Human operators manage exception queues and edge cases that fall outside defined rules.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">RPA Bots</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Data Entry Automation</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 12h6M9 15h4"/><circle cx="18" cy="6" r="3" style="stroke:none;fill:rgba(255,255,255,0.6)"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">AI-Powered Data Processing and Document Handling</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        From invoice OCR and automated data extraction to intelligent document classification and validation, our AI-powered data processing workflows eliminate the manual input layer from your document-heavy operations. Processing that previously required a team of data entry operators runs through structured AI pipelines — with human review applied only to flagged exceptions.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Invoice OCR</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Document Classification</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><circle cx="9" cy="7" r="4"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><path d="M16 3.13a4 4 0 010 7.75"/><path d="M21 21v-2a4 4 0 00-3-3.87"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Conversation Intelligence for BPO Call Centers</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Our AI-enabled contact center operations use conversation intelligence tools to monitor interactions in real time — flagging compliance risks, surfacing coaching moments, identifying customer sentiment shifts, and scoring agent performance automatically. This replaces periodic manual sampling with continuous, structured quality oversight across every call, chat, and email in your queue.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Real-time Monitoring</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Sentiment Scoring</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Generative AI-Assisted Customer Service Operations</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        EmpireOneCX's gen AI-enabled customer service teams are supported by AI tools that surface relevant knowledge base content, suggest response templates, and auto-draft first responses for agent review — compressing handle time without sacrificing quality or personalization. Agents spend their time on decisions and empathy, not searching for information they already have.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Gen AI Support</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Auto-Draft Responses</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Intelligent Process Automation for Finance and Accounting</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Accounts payable, accounts receivable, bank reconciliation, and general ledger workflows are among the highest-ROI targets for intelligent automation in BPO. Our finance teams operate alongside AI-powered invoice processing, three-way match automation, and anomaly detection tools that catch errors before they reach your books — accelerating close cycles and reducing manual correction effort.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Finance Automation</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Anomaly Detection</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">AI-Powered Quality Assurance and Compliance Monitoring</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Across all BPO service lines, EmpireOneCX applies AI-assisted QA monitoring to evaluate output quality, flag deviations from defined standards, and surface compliance risks before they escalate. This layer of automated oversight runs continuously — not on a sampling schedule — giving your leadership real-time visibility into process health across every function we manage.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">AI QA</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">Continuous Monitoring</span>
                    </div>
                </div>
                
                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Digital Transformation Support and Process Redesign</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        For organizations at earlier stages of their automation journey, EmpireOneCX provides structured process assessment and digital transformation support — mapping existing workflows, identifying automation-eligible tasks, configuring the right tooling, and building the human-oversight layer needed to manage the transition. We have implemented this model across finance, call center, back office, quality assurance, and HR operations.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">Process Redesign</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;">Digital Transformation</span>
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
                        Why Companies Choose EmpireOneCX for AI-Enabled BPO
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Deploying automation in a BPO context is operationally complex. Bots break when source systems change. AI models require training data, calibration, and ongoing governance. Human teams need to be restructured around exception management rather than transaction processing. Most organizations lack the internal capacity to manage all three simultaneously while also running the business. EmpireOneCX removes that complexity entirely. We bring the automation infrastructure, the AI tooling, the trained human teams, and the operational governance model — so your business gets the output of AI-enabled BPO without building the capability from scratch.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Automation That Operates Inside Your Systems</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">EmpireOneCX's RPA and AI tools are configured to work within your existing tech stack — your ERP, your CRM, your document management system, your accounting software. There is no requirement to migrate platforms or rebuild integrations. We adapt the automation layer to your environment.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Human Oversight Built Into Every Workflow</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">AI-enabled BPO does not mean removing humans from the process. It means repositioning them. EmpireOneCX's human operators manage exception queues, handle edge cases, perform calibration reviews, and provide the judgment layer that automation cannot replicate. Every automated workflow has a defined human escalation path.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Continuous Improvement, Not Set-and-Forget</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Automation without governance degrades over time as processes, systems, and volumes change. EmpireOneCX's operations teams actively monitor bot performance, retrain AI models when accuracy drifts, and update automation rules as your business evolves. The capability improves with use — it does not stagnate.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Measurable Cost Reduction From the First Billing Cycle</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Because automation absorbs a significant share of transaction volume from day one, clients typically see cost-per-transaction reductions within the first full engagement period — not after a multi-year implementation runway. The efficiency gains are immediate and compounding.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">AI Governance and Data Security</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">All AI-processed data is handled with enterprise-grade security: AES-256 encryption, SOC 2-compliant infrastructure, multi-factor authentication, and isolated processing environments. AI model outputs are auditable, and data residency requirements are respected across all engagements.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Industry-Specific AI BPO Configuration</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">AI automation requirements differ by sector. EmpireOneCX's AI-enabled BPO capabilities are deployed across: Financial services and fintech, Healthcare, Insurance, Retail and e-commerce, Legal and professional services, Technology and SaaS.</p>
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
                        Business Impact of AI-Enabled BPO
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Organizations that move their operations to EmpireOneCX's AI-enabled BPO model consistently report major improvements:
                    </p>
                </div>
            </div>

            <div class="solutions-wahtweoffer mt-10">
                <div class="mainsolthings flex items-left justify-between">
                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-y-5 mb-10">
                            <?php
                            $impacts = [
                                "40%+ reduction in manual processing time on automation-eligible workflows — from the first operational month",
                                "Significant cost-per-transaction improvement as automation absorbs volume without proportional headcount growth",
                                "Measurable error rate reduction on data entry, document processing, and reconciliation workflows",
                                "Continuous quality coverage across 100% of monitored interactions — versus the spot-check model of traditional QA",
                                "Faster close cycles, shorter handle times, and accelerated processing throughput across every function",
                                "Audit-ready documentation generated automatically by automated workflows — not assembled retrospectively",
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
                                These are not projections based on automation theory. They are the direct result of deploying structured RPA and AI tooling alongside trained human teams inside live client operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 relative overflow-hidden bg-white" aria-label="The Future of BPO">
        <div class="container mx-auto px-4">
            <div class="mt-10 rounded-[16px] p-8 md:p-12 relative overflow-hidden" style="background: #fdf9ff; border: 1px solid #e8e4ff;">
                <div class="relative z-10 flex flex-col gap-6">
                    <h4 class="text-[28px] leading-[36px] font-semibold text-black mb-3">The Future of BPO Is AI-Enabled — Here Is What That Means in Practice</h4>
                    <p class="text-[16px] leading-[26px] text-[#555]">
                        The BPO industry is undergoing a structural shift. Generative AI, robotic process automation, and conversation intelligence are moving from competitive differentiators to operational requirements. Organizations that continue to run purely manual outsourcing models will face rising cost pressure, slower throughput, and quality ceilings that automation-enabled competitors will not encounter.
                    </p>
                    <p class="text-[16px] leading-[26px] text-[#555]">
                        EmpireOneCX's AI-enabled BPO model is built for this transition. We are not retrofitting automation into a legacy outsourcing structure — we have rebuilt our delivery model around the combination of human expertise and intelligent tooling that produces better outcomes at lower cost than either approach alone. For our clients, this means access to automation-grade efficiency without the capital investment, the technical infrastructure, or the change management burden of building it internally.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="AI-Enabled BPO Solutions FAQ">
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
                        AI-Enabled BPO Solutions
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQs</span>
                    </h3>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "What is BPO automation and how does it work?",
                            "BPO automation refers to the use of robotic process automation (RPA), artificial intelligence, and intelligent workflow tools to handle high-volume, rules-based tasks within an outsourced business process. Rather than relying solely on human operators to perform every task manually, automated BPO deployments use bots and AI tools to execute predictable tasks at machine speed — while human operators manage exceptions, quality oversight, and judgment-dependent decisions. EmpireOneCX deploys this model across finance, call center, back office, QA, and HR operations."
                        ],
                        [
                            "What is the difference between RPA and AI in BPO?",
                            "Robotic process automation (RPA) handles structured, rules-based tasks — copying data between systems, processing standard form inputs, executing defined workflows without variation. AI in BPO goes further: it handles unstructured inputs (documents, conversations, images), learns from historical patterns, makes probabilistic judgments, and surfaces insights that rules-based bots cannot generate. EmpireOneCX's AI-enabled BPO model combines both — RPA for structured workflow automation and AI tools for document intelligence, conversation monitoring, and quality analytics."
                        ],
                        [
                            "How does AI automation reduce costs in BPO operations?",
                            "AI and automation reduce BPO costs by shifting the volume-to-headcount relationship. In traditional BPO, doubling transaction volume roughly doubles cost because it requires roughly doubling headcount. In an AI-enabled BPO model, automation absorbs a significant share of that volume increase — so cost grows much more slowly than output. Additionally, automation reduces error rates, which lowers the cost of rework, corrections, and compliance remediation. EmpireOneCX clients typically see cost-per-transaction reductions from the first full engagement period."
                        ],
                        [
                            "What processes are best suited for AI-enabled BPO?",
                            "The highest-ROI candidates for AI automation in BPO are high-volume, rules-based processes with structured inputs and defined decision logic: accounts payable processing, invoice data extraction, bank reconciliation, data entry and validation, call quality monitoring, document classification, and order management. Processes that require significant judgment, relationship context, or creative problem-solving remain best handled by experienced human operators — supported, not replaced, by AI tools."
                        ],
                        [
                            "Does AI-enabled BPO require changing our existing systems?",
                            "No. EmpireOneCX's automation and AI tooling is configured to operate within your existing technology environment — including your ERP, CRM, accounting software, document management system, and communication platforms. We do not require platform migrations or system replacements. Our technical teams handle integration and configuration as part of the onboarding process."
                        ],
                        [
                            "How quickly can an AI-enabled BPO engagement become operational?",
                            "Standard BPO functions — staffed by human operators working within existing client systems — reach operational readiness within two to four weeks. AI and automation configuration adds a structured setup phase: workflow mapping, bot development or configuration, testing, and calibration. Depending on the complexity of the automation scope, AI-enabled engagements typically reach full operational readiness within four to eight weeks. Automation layers can be added progressively to running engagements without disrupting live operations."
                        ],
                        [
                            "Is AI-enabled BPO suitable for small and mid-sized businesses?",
                            "AI-enabled BPO is particularly well-suited to SMBs and mid-market companies because it provides access to automation infrastructure that would be prohibitively expensive to build internally. A growing business that cannot justify hiring a dedicated RPA developer, an AI operations team, and the tooling licenses those functions require can access equivalent capability through EmpireOneCX's managed AI-enabled BPO model — at a cost structure that scales with their volume."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button type="button" class="cx-faq-toggle" onclick="toggleCxFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
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
                                Ready to Move Beyond 
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Manual Outsourcing?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                If your current BPO model is still built on headcount-for-headcount labor arbitrage, EmpireOneCX can show you what AI-enabled operations look like in practice — and quantify the efficiency gap between where you are and where you could be.
                                Tell us your current processes, your transaction volumes, and your biggest operational friction points. We will design an AI-enabled BPO engagement that delivers measurable improvement from the first month of operation.
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
function toggleCxFaq(index) {
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
      "name": "What is BPO automation and how does it work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "BPO automation refers to the use of robotic process automation (RPA), artificial intelligence, and intelligent workflow tools to handle high-volume, rules-based tasks within an outsourced business process. EmpireOneCX deploys this model across finance, call center, back office, QA, and HR operations."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between RPA and AI in BPO?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Robotic process automation (RPA) handles structured, rules-based tasks. AI in BPO goes further: it handles unstructured inputs, learns from historical patterns, makes probabilistic judgments, and surfaces insights that rules-based bots cannot generate."
      }
    },
    {
      "@type": "Question",
      "name": "How does AI automation reduce costs in BPO operations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "AI and automation reduce BPO costs by shifting the volume-to-headcount relationship. In an AI-enabled BPO model, automation absorbs a significant share of that volume increase — so cost grows much more slowly than output. Additionally, automation reduces error rates."
      }
    },
    {
      "@type": "Question",
      "name": "What processes are best suited for AI-enabled BPO?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The highest-ROI candidates for AI automation in BPO are high-volume, rules-based processes with structured inputs and defined decision logic: accounts payable processing, invoice data extraction, bank reconciliation, data entry, call quality monitoring, document classification, and order management."
      }
    },
    {
      "@type": "Question",
      "name": "Does AI-enabled BPO require changing our existing systems?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. EmpireOneCX's automation and AI tooling is configured to operate within your existing technology environment — including your ERP, CRM, accounting software, document management system, and communication platforms."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can an AI-enabled BPO engagement become operational?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard BPO functions reach operational readiness within two to four weeks. Depending on the complexity of the automation scope, AI-enabled engagements typically reach full operational readiness within four to eight weeks."
      }
    },
    {
      "@type": "Question",
      "name": "Is AI-enabled BPO suitable for small and mid-sized businesses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "AI-enabled BPO is particularly well-suited to SMBs and mid-market companies because it provides access to automation infrastructure that would be prohibitively expensive to build internally."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "AI-Enabled BPO Solutions & Automation Services",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOne CX",
    "url": "https://empireonecx.com"
  },
  "description": "EmpireOneCX's AI-enabled BPO solutions combine robotic process automation, intelligent workflows, and experienced human teams to cut costs, eliminate errors, and scale faster than traditional outsourcing.",
  "url": "https://empireonecx.com/solutions/ai-enabled-bpo-solutions",
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
    "name": "AI-Enabled BPO Solutions",
    "item": "https://empireonecx.com/solutions/ai-enabled-bpo-solutions"
  }]
}
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
