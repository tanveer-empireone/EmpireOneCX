<?php
    $pageTitle = "CX, BPO & AI Case Studies: Real Outsourcing Results";
    $metaDescription = "Explore CX & BPO case studies showing how EmpireOneCX's AI-assisted contact center, back-office, and finance outsourcing solutions drive measurable ROI.";
    $languageSwitchHrefEs = "/es/casos-de-estudio/";
    $languageAlternates = [
        "en" => "https://empireonecx.com/case-study",
        "es" => "https://empireonecx.com/es/casos-de-estudio/",
        "x-default" => "https://empireonecx.com/case-study",
    ];
?>
<?php include("inc/header.php"); ?>
<style>
    .gradient-text {
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .gradient-border-bar {
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }
    .results-gradient-bg {
        background: linear-gradient(180deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);
    }
    .icon-gradient-1 {
        background: linear-gradient(135deg, #7A76FF 0%, #CB46FA 100%);
    }
    .icon-gradient-2 {
        background: linear-gradient(135deg, #CB46FA 0%, #FE881C 100%);
    }
    /* Custom border for the bottom bar to match the thin gradient look */
    .footer-card {
        position: relative;
        background: #fff;
        border-radius: 12px;
        z-index: 1;
    }
    .footer-card::before {
        content: "";
        position: absolute;
        top: -1px; bottom: -1px; left: -1px; right: -1px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);
        border-radius: 13px;
        z-index: -1;
        opacity: 0.6;
    }

    @media (max-width: 767px) {
        .case-study-page .hero-section {
            height: auto !important;
            min-height: 690px !important;
            padding: 170px 16px 76px !important;
            justify-content: flex-start !important;
        }

        .case-study-page .hero-section .solutions-bg-videowork {
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            z-index: 0 !important;
        }

        .case-study-page .hero-section > .absolute.bg-black\/50 {
            inset: 0 !important;
            width: 100% !important;
            height: 100% !important;
            z-index: 1 !important;
        }

        .case-study-page .hero-section .container {
            max-width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            z-index: 2 !important;
        }

        .case-study-page .hero-section .herosubtitle {
            margin-bottom: 14px !important;
            font-size: 16px !important;
            line-height: 24px !important;
            letter-spacing: 0.08em !important;
        }

        .case-study-page .hero-section .solutions-hero-heading {
            max-width: min(352px, calc(100vw - 32px)) !important;
            margin-left: auto !important;
            margin-right: auto !important;
            margin-bottom: 16px !important;
            font-size: 34px !important;
            line-height: 42px !important;
            letter-spacing: 0 !important;
            text-wrap: balance;
        }

        .case-study-page .hero-section .subpara {
            max-width: min(342px, calc(100vw - 36px)) !important;
            margin-left: auto !important;
            margin-right: auto !important;
            margin-bottom: 20px !important;
            font-size: 14px !important;
            line-height: 22px !important;
            letter-spacing: 0 !important;
        }

        .case-study-page .hero-section .delay-4 {
            padding-top: 0 !important;
        }

        .case-study-page .hero-section .delay-4 button {
            width: min(100%, 352px) !important;
            min-height: 54px !important;
            padding: 14px 18px !important;
            font-size: 14px !important;
            line-height: 20px !important;
            white-space: normal !important;
        }

        .case-study-page section:not(.hero-section) {
            padding-top: 58px !important;
            padding-bottom: 58px !important;
        }

        .case-study-page .maincaseboxes {
            display: flex !important;
            flex-direction: column !important;
            gap: 28px !important;
        }

        .case-study-page .mainleftbox,
        .case-study-page .mainrightsbox {
            width: 100% !important;
            padding-top: 0 !important;
        }

        .case-study-page .solution-heading,
        .case-study-page .solution-heading span {
            max-width: 100% !important;
            font-size: 30px !important;
            line-height: 38px !important;
            letter-spacing: 0 !important;
        }

        .case-study-page .spanfont {
            font-size: 17px !important;
            line-height: 25px !important;
        }

        .case-study-page .smpadd {
            padding-top: 12px !important;
        }

        .case-study-page .noflexemp {
            display: flex !important;
            gap: 16px !important;
            align-items: flex-start !important;
        }

        .case-study-page .mainheadcase {
            padding-top: 0 !important;
        }

        .case-study-page .noflexemp + .noflexemp {
            margin-top: 30px !important;
        }

        .case-study-page .noflexemp img,
        .case-study-page .noflexemp > div:first-child {
            width: 48px !important;
            height: 48px !important;
            flex: 0 0 48px !important;
        }

        .case-study-page .mainheadcase h4 {
            font-size: 24px !important;
            line-height: 32px !important;
        }

        .case-study-page .mainheadcase p {
            font-size: 15px !important;
            line-height: 24px !important;
        }

        .case-study-page .results-gradient-bg {
            min-height: auto !important;
            padding: 28px 22px !important;
            border-radius: 16px !important;
        }

        .case-study-page .results-gradient-bg h4 {
            margin-bottom: 18px !important;
            font-size: 22px !important;
            line-height: 30px !important;
        }

        .case-study-page .results-gradient-bg .w-16 {
            margin-bottom: 26px !important;
        }

        .case-study-page .results-gradient-bg .space-y-10 > :not([hidden]) ~ :not([hidden]) {
            margin-top: 26px !important;
        }

        .case-study-page .empmaints {
            gap: 14px !important;
        }

        .case-study-page .empmaints span {
            width: 74px !important;
            font-size: 34px !important;
            line-height: 1 !important;
        }

        .case-study-page .emptspace {
            font-size: 14px !important;
            line-height: 20px !important;
        }

        .case-study-page .results-gradient-bg a {
            margin-top: 30px !important;
            padding: 14px 16px !important;
            font-size: 14px !important;
            line-height: 20px !important;
        }

        .case-study-page .empgaps {
            gap: 14px !important;
        }

        .case-study-page .mytextemp {
            min-width: 0 !important;
            font-size: 18px !important;
            line-height: 26px !important;
        }

        .case-study-page .empsolbtn {
            display: block !important;
        }

        .case-study-page .empsolbtn p {
            font-size: 15px !important;
            line-height: 24px !important;
        }
    }

    @media (max-width: 360px) {
        .case-study-page .hero-section {
            min-height: 710px !important;
            padding-top: 160px !important;
        }

        .case-study-page .hero-section .solutions-hero-heading {
            font-size: 31px !important;
            line-height: 39px !important;
        }
    }
</style>
<main class="case-study-page">
    <section class="hero-section mainherowork relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 18rem; padding-bottom: 180px;">
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="none">
            <source src="./assets/images/case-study.mp4" type="video/mp4" />
        </video>
        <div class="absolute bg-black/50 -z-10" style="width:1920px; height:611px;"></div>
        <div class="container mx-auto w-full relative z-10">
            <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                    Case Studies
                </span>
            </p>
            <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto">
                Real Results from Smarter CX, BPO & AI Solutions
            </h1>
            <p class="subpara shortspace font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto sm:mb-3" style="max-width: 848px !important;">See how EmpireOneCX Solutions helps businesses reduce costs, improve customer experience, and scale operations through dedicated teams, automation, and AI-driven processes.</p>
            <div class="animate-reveal delay-4 pt-[15px]">
                <button onclick="window.location.href='contact'" class="herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;"> Build a High-Performance Offshore Team Today </button>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#FAF8F7]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/solutions/customer-experience-solutions" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Customer Experience (CX) Outsourcing</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-[40px] leading-[48px] tracking-[-0.03em] text-black mb-[20px]">
                        E-commerce Brand Reduces Response Time by 62% & Increases CSAT to 4.7/5
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Challenge</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    A mid-market e-commerce company in Texas was overwhelmed by chat, email, and social media inquiries, leading to slow responses, negative reviews, and rising churn during peak seasons.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Solution</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    EmpireOneCX built a dedicated omnichannel customer support team using Zendesk, implemented AI-assisted ticket routing, and standardized knowledge bases across all channels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Results</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">62%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Faster first response time</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">4.7</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">CSAT improved from 3.9 ? 4.7</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">28%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Reduction in support-related churn</p>
                                </div>
                            </div>
                        </div>
                        <a href="contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Let's Build Your Success Story</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Why It Matters
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                Faster, more empathetic conversations directly increased repeat purchases and brand loyalty.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#000]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/solutions/back-office-support" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Back-Office BPO Services</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-white text-[40px] leading-[48px] tracking-[-0.03em] mb-[20px]">
                        Logistics Company Cuts Processing Time by 55%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Challenge</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    A regional logistics company struggled with manual data entry and document processing, creating a 3-week backlog and frequent shipping errors.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Solution</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    EmpireOneCX deployed a dedicated back-office team equipped with OCR-powered document extraction and automated validation rules in their ERP system.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Results</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">55%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Faster processing time</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">40%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Reduction in errors</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">30%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Lower operating costs</p>
                                </div>
                            </div>
                        </div>
                        <a href="contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Your Turn to Scale Smarter Today</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Why It Matters
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                Operations scaled reliably without adding costly internal headcount.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#FAF8F7]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/solutions/finance-accounting-bpo" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Finance & Accounting Outsourcing</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-[40px] leading-[48px] tracking-[-0.03em] text-black mb-[20px]">
                        SaaS Company Shortens Month-End Close by 45%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Challenge</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    Inconsistent bookkeeping and delayed financial reports limited a growing SaaS provider's leadership visibility and delayed critical board reporting.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Solution</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    EmpireOneCX provided AI-powered invoice OCR, automated NetSuite reconciliations, and a dedicated accounting team that cleared backlogs within 90 days.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Results</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">5.5</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Month-end close reduced from 10 days to 5.5 days</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">99%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Reconciliation accuracy</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">35%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Cost savings vs in-house finance</p>
                                </div>
                            </div>
                        </div>
                        <a href="contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Take the First Step Today</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Why It Matters
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                 Leadership gained real-time insight to make faster, better financial decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#000]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/solutions/quality-assurance-outsourcing" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Quality Assurance (QA) Services</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-white text-[40px] leading-[48px] tracking-[-0.03em] mb-[20px]">
                        Contact Center Raises QA Score from 78% to 92%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Challenge</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    A global contact center faced inconsistent agent performance and lacked visibility into compliance and quality issues across 10,000+ monthly calls.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Solution</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    EmpireOneCX implemented automated QA scoring, speech analytics software, and structured 1-on-1 coaching programs to standardize evaluations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Results</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">92%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">QA score increased</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">18%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">CSAT improved</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">30%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Fewer escalations</p>
                                </div>
                            </div>
                        </div>
                        <a href="contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">See How This Would Work for You</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Why It Matters
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                Quality became predictable instead of reactive, securing compliance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#FAF8F7]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Recruitment & Workforce Support
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-[40px] leading-[48px] tracking-[-0.03em] text-black mb-[20px]">
                        BPO Firm Cuts Time-to-Hire by 50%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Challenge</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    Slow hiring cycles, limited applicant tracking, and high 90-day turnover limited a rapidly expanding firm's ability to scale.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Solution</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    EmpireOneCX deployed AI-assisted resume screening, structured behavioral interviews, and comprehensive 30-60-90 day onboarding support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Results</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">50%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Time-to-hire reduced</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">32%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Improvement in 90-day retention</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter"></span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Higher quality candidate pipeline</p>
                                </div>
                            </div>
                        </div>
                        <a href="career" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Accelerate Your Hiring Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Why It Matters
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                The client scaled faster without sacrificing talent quality.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#000]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                AI-Enabled BPO Solutions
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-white text-[40px] leading-[48px] tracking-[-0.03em] mb-[20px]">
                        Finance Operations Achieve 60% Automation Rate
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Challenge</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    Heavy manual data extraction workloads slowed financial operations and increased processing costs for a national enterprise.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Solution</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    EmpireOneCX implemented intelligent document processing (IDP), customized workflow automation, and real-time analytics dashboards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Results</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">60%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Processes automated</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">42%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Reduction in errors</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">2x</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Productivity per FTE</p>
                                </div>
                            </div>
                        </div>
                        <a href="contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Automate Your Operations</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Why It Matters
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                AI delivered measurable ROI, not just experimentation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">
        <div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute w-[720px] h-[760px] right-[54px] top-[-140px] bg-no-repeat opacity-100" style="background-image: url('./assets/images/futuresideig.webp'); transform: rotate(42deg);"> </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="mx-auto relative">
                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                    <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                    <div class="absolute inset-[3px] rounded-[13px] bg-white">
                        <div class="absolute inset-0">
                            <div class="hidden md:block absolute inset-0"
                                style="background: url('./assets/images/cta-bg-image.webp') no-repeat center/cover;">
                            </div>
                            <div class="md:hidden absolute inset-0"
                                style="background: url('./assets/images/cta-gradient.webp') no-repeat center/cover;">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="future-innerwork py-5 px-4 md:px-16 relative z-10">
                    <div class="ctamain text-center">
                        <div class="cta-left-sidework  pt-[60px] pb-[60px]">
                            <h2 class="solution-heading cta-solution-section future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">
                                Ready to Transform Your
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Business Operations</span>?
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Because your customers deserve nothing less.
                            </p>
                            <div class="future-btn">
                                <a href="https://calendly.com/empireonegroup-marketing/30min" target="_blank" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Start Reducing Costs Now <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "<?php echo $pageTitle; ?>",
  "description": "<?php echo $metaDescription; ?>",
  "url": "https://empireonecx.com/<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Customer Experience (CX) Outsourcing",
      "description": "E-commerce Brand Reduces Response Time by 62% & Increases CSAT to 4.7/5",
      "url": "https://empireonecx.com/solutions/customer-experience-solutions"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Back-Office BPO Services",
      "description": "Logistics Company Cuts Processing Time by 55%",
      "url": "https://empireonecx.com/solutions/back-office-support"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Finance & Accounting Outsourcing",
      "description": "SaaS Company Shortens Month-End Close by 45%",
      "url": "https://empireonecx.com/solutions/finance-accounting-bpo"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Quality Assurance (QA) Services",
      "description": "Contact Center Raises QA Score from 78% to 92%",
      "url": "https://empireonecx.com/solutions/quality-assurance-outsourcing"
    }
  ]
}
</script>
<?php include("inc/footer.php"); ?>
