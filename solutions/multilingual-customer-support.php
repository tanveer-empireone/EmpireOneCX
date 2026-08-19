<?php
$pageTitle = "Multilingual Customer Support | EmpireOne CX";
$metaDescription = "EmpireOneCX multilingual customer support provides fluent-language agents, AI accent neutralization, per-language QA, and 24/7 multilingual coverage across voice, chat, email, and social.";
$metaKeywords = "multilingual customer support, multilingual call center, multilingual CX outsourcing, fluent language agents, AI accent neutralization, multilingual BPO, global customer support";
include(__DIR__ . "/../inc/header.php");
?>

<style>
.ecx-compact .ecx-form-wrap .ecx-label { display: none; }
.ecx-compact .ecx-form-wrap .ecx-input { padding: 8px 12px; font-size: 13px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-input::placeholder { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-select { padding: 8px 12px; font-size: 13px; background: rgba(20,20,20,0.95) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-select option { background: #1a1a1a; color: #fff; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper { padding: 8px 12px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"] { color: #fff !important; font-size: 13px; background: transparent !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"]::placeholder { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle span.ecx-code { color: #fff !important; font-size: 13px; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle svg { color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-divider { color: rgba(255,255,255,0.3) !important; }
.ecx-compact .ecx-form-wrap .ecx-grid-2 { gap: 8px; }
.ecx-compact .ecx-form-wrap .ecx-mt { margin-top: 8px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row { margin-top: 12px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row p { font-size: 12px; color: rgba(255,255,255,0.8) !important; }
.ecx-compact .ecx-form-wrap .ecx-submit-btn { margin-top: 14px; padding: 10px 24px; font-size: 14px; }
.ecx-compact .ecx-country-dropdown { background: #1a1a1a !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-country-item { color: #ddd !important; }
.ecx-compact .ecx-country-item:hover { background: rgba(122,118,255,0.2) !important; }
.cx-hero-section { padding-top: 18rem; padding-bottom: 180px; }
@media (max-width: 1024px) { .cx-hero-grid { grid-template-columns: 1fr !important; } .cx-hero-form { display: block !important; } .cx-hero-section { padding-top: 10rem !important; padding-bottom: 80px !important; height: auto !important; min-height: 100vh !important; } }
.cx-comparison-table { width: 100%; border-collapse: separate; border-spacing: 0; border-radius: 16px; overflow: hidden; }
.cx-comparison-table thead th { padding: 20px 24px; font-size: 15px; font-weight: 600; text-align: left; }
.cx-comparison-table thead th:first-child { background: #1a1a1a; color: #fff; }
.cx-comparison-table thead th:nth-child(2) { background: #2a2a2a; color: #aaa; }
.cx-comparison-table thead th:nth-child(3) { background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); color: #fff; }
.cx-comparison-table tbody td { padding: 18px 24px; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f0f0f0; vertical-align: top; }
.cx-comparison-table tbody tr:last-child td { border-bottom: none; }
.cx-comparison-table tbody td:first-child { background: #fafafa; color: #000; font-weight: 600; }
.cx-comparison-table tbody td:nth-child(2) { background: #fff; color: #555; }
.cx-comparison-table tbody td:nth-child(3) { background: #fdf9ff; color: #2a1a40; }
.cx-feature-card { border-radius: 16px; padding: 32px; background: #fff; box-shadow: 0 4px 24px rgba(122,118,255,0.08); border: 1px solid #f0eeff; transition: transform 0.2s ease, box-shadow 0.2s ease; }
.cx-feature-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(122,118,255,0.16); }
.cx-feature-icon { width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #7A76FF 0%, #CB46FA 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #fff; font-size: 22px; }
.cx-industry-pill { display: inline-flex; align-items: center; gap: 10px; padding: 10px 16px; border-radius: 100px; background: #fff; border: 1px solid #e8e4ff; font-size: 14px; color: #2a2a2a; }
.cx-industry-pill span.dot { width: 8px; height: 8px; border-radius: 50%; background: linear-gradient(135deg, #7A76FF, #FE881C); flex-shrink: 0; }
.cx-stat-number { font-size: 48px; font-weight: 700; line-height: 1; background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.cx-faq-item { border-bottom: 1px solid rgba(255,255,255,0.12); }
.cx-faq-item:last-child { border-bottom: none; }
.cx-faq-toggle { width: 100%; background: none; border: none; padding: 24px 0; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; }
.cx-faq-question { font-size: 17px; font-weight: 600; color: #fff; line-height: 26px; }
.cx-faq-icon { width: 32px; height: 32px; flex-shrink: 0; border-radius: 50%; background: linear-gradient(135deg, #7A76FF 0%, #FE881C 100%); display: flex; align-items: center; justify-content: center; transition: transform 0.25s ease; }
.cx-faq-icon svg { width: 14px; height: 14px; stroke: #fff; stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round; }
.cx-faq-item.open .cx-faq-icon { transform: rotate(180deg); }
.cx-faq-answer { font-size: 16px; line-height: 26px; color: #b7b7b7; max-height: 0; overflow: hidden; transition: max-height 0.35s ease, padding-bottom 0.25s ease; }
.cx-faq-item.open .cx-faq-answer { max-height: 420px; padding-bottom: 24px; }
.breadcrumb-nav a, .breadcrumb-nav span { font-size: 14px; color: #aaa; text-decoration: none; }
.breadcrumb-nav a:hover { color: #CB46FA; }
.breadcrumb-nav .sep { margin: 0 8px; }
.breadcrumb-nav .current { color: #fff; }
@keyframes revealUp { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: translateY(0); } }
.animate-reveal { animation: revealUp 0.7s ease forwards; }
.delay-1 { animation-delay: 0.1s; }
.delay-2 { animation-delay: 0.25s; }
.delay-3 { animation-delay: 0.4s; }
.delay-4 { animation-delay: 0.55s; }

@media (max-width: 767px) {
    .multilingual-page .cx-hero-section {
        height: auto !important;
        min-height: 690px !important;
        padding: 196px 20px 58px !important;
    }

    .multilingual-page .cx-hero-section .container {
        max-width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .multilingual-page .cx-hero-grid {
        display: grid !important;
        grid-template-columns: minmax(0, 1fr) !important;
        gap: 26px !important;
    }

    .multilingual-page .breadcrumb-nav {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 18px !important;
    }

    .multilingual-page .breadcrumb-nav a,
    .multilingual-page .breadcrumb-nav span {
        font-size: 13px !important;
        line-height: 20px !important;
    }

    .multilingual-page .breadcrumb-nav .sep {
        margin: 0 !important;
    }

    .multilingual-page .cx-hero-section .herosubtitle {
        display: block;
        width: 100%;
        margin: 0 auto 14px !important;
        font-size: 17px !important;
        line-height: 24px !important;
        text-align: center;
    }

    .multilingual-page .cx-hero-section .solutions-hero-heading {
        max-width: min(330px, calc(100vw - 40px)) !important;
        margin-left: auto !important;
        margin-right: auto !important;
        margin-bottom: 16px !important;
        font-size: 35px !important;
        line-height: 43px !important;
        letter-spacing: 0 !important;
        text-align: center;
        text-wrap: balance;
    }

    .multilingual-page .cx-hero-section .subpara {
        max-width: min(320px, calc(100vw - 42px)) !important;
        margin: 0 auto 26px !important;
        font-size: 14px !important;
        line-height: 22px !important;
        letter-spacing: 0 !important;
        text-align: center;
    }

    .multilingual-page .cx-hero-section .delay-4 {
        display: flex !important;
        width: 100%;
        flex-direction: column !important;
        align-items: center !important;
        gap: 12px !important;
    }

    .multilingual-page .cx-hero-section .delay-4 a {
        display: flex !important;
        width: min(100%, 300px) !important;
        justify-content: center;
        margin-left: auto !important;
        margin-right: auto !important;
        padding: 14px 18px !important;
        font-size: 14px !important;
        line-height: 20px !important;
        text-align: center;
    }

    .multilingual-page .cx-hero-section .delay-4 a + a {
        margin-top: 12px !important;
    }

    .multilingual-page .cx-hero-form {
        display: none !important;
    }

    .multilingual-page .samesectionpadding {
        padding-top: 58px !important;
        padding-bottom: 58px !important;
    }

    .multilingual-page .solgap {
        gap: 18px !important;
        margin-bottom: 28px !important;
    }

    .multilingual-page .solution-heading,
    .multilingual-page .solution-heading span {
        max-width: 100% !important;
        font-size: 30px !important;
        line-height: 38px !important;
        letter-spacing: 0 !important;
    }

    .multilingual-page .solution-side-img1,
    .multilingual-page .solution-side-img2 {
        display: none !important;
    }

    .multilingual-page [aria-label="What Is Multilingual Customer Support"] .grid.grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 14px !important;
    }

    .multilingual-page [aria-label="What Is Multilingual Customer Support"] .grid.grid-cols-2 > div {
        padding: 22px 12px !important;
        min-height: 190px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .multilingual-page .cx-stat-number {
        font-size: 40px !important;
        line-height: 44px !important;
        letter-spacing: 0 !important;
        white-space: nowrap;
    }

    .multilingual-page .cx-stat-number + p {
        max-width: 126px;
        margin-left: auto;
        margin-right: auto;
        font-size: 13px !important;
        line-height: 18px !important;
    }
}

@media (max-width: 360px) {
    .multilingual-page .cx-hero-section .solutions-hero-heading {
        font-size: 31px !important;
        line-height: 38px !important;
    }

    .multilingual-page .cx-stat-number {
        font-size: 36px !important;
        line-height: 40px !important;
    }

    .multilingual-page .cx-stat-number + p {
        font-size: 12px !important;
        line-height: 17px !important;
    }
}
</style>

<main class="multilingual-page relative">
<section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden">
    <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp"><source src="/assets/images/solutions-herobg.mp4" type="video/mp4" /></video>
    <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>
    <div class="container mx-auto w-full relative z-10">
        <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
            <div class="text-center lg:text-left">
                <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Breadcrumb"><a href="/solutions/">Solutions</a><span class="sep">/</span><span class="current">Multilingual Customer Support</span></nav>
                <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent"><span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">Multilingual Customer Support</span></p>
                <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto lg:mx-0" style="max-width:900px;">Multilingual Customer Support Built for Real Conversations</h1>
                <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8 mx-auto lg:mx-0" style="max-width:848px !important;">Every customer expects support in their own language, especially when something goes wrong. We staff fluent-language agents supported by AI accent neutralization technology across 15+ languages, with the same QA, CSAT, and response-time standards in every market.</p>
                <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4"><a href="/solutions/" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius:8px !important; background:rgba(255,255,255,0.08);">Explore All BPO Solutions</a><a href="/contact" class="herobtns inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base shadow-lg hover:shadow-purple-400/20" style="border-radius:8px !important;">Get a Free Consultation</a></div>
            </div>
            <div class="cx-hero-form animate-reveal delay-3" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.14); border-radius:16px; padding:24px;"><p style="color:#fff; font-size:15px; font-weight:600; text-align:center; margin:0 0 16px;">Get a Free Consultation</p><div class="ecx-compact"><?php include(__DIR__ . "/../inc/contact-form.php"); ?></div></div>
        </div>
    </div>
</section>

<section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="What Is Multilingual Customer Support">
    <div class="container mx-auto px-4">
        <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>
        <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items:center;">
            <div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Multilingual Customer Support</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width:560px;">What Is Multilingual Customer Support?</h3></div>
            <div><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">Multilingual customer support means every single interaction - voice, chat, email, or social - lands with an agent fluent in the customer's language. Tone, brand, and resolution quality hold steady across channels.</p><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">This is not translation layered onto an English-first team. It is native-level capability built into the operation from day one, removing the trust risk created by translation delays or inelegant phrasing.</p></div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <?php foreach ([['15+', 'Languages supported across delivery teams'], ['9', 'Countries with native and fluent-language talent pools'], ['95%+', 'Average CSAT equivalence across supported languages'], ['24/7', 'Coverage across time zones and language pairs']] as $s): ?>
            <div class="text-center p-8 rounded-[16px]" style="background:#fafafa; border:1px solid #f0eeff;"><div class="cx-stat-number mb-2"><?= $s[0] ?></div><p class="text-[14px] leading-[20px] text-[#555]"><?= $s[1] ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Translated Support vs True Multilingual Delivery">
    <div class="container mx-auto px-4">
        <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-10" style="align-items:center;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">See the Difference</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width:620px;">Translated Support vs. True <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">Multilingual Delivery</span></h3></div><div><p class="nomargin text-white text-[16px] leading-[24px]">Adding translation tools to a single-language team creates gaps: missed context, slower resolution, and inconsistent CSAT. A multilingual operation is built for fluency from the start.</p></div></div>
        <div class="overflow-x-auto rounded-[16px]"><table class="cx-comparison-table" role="table" aria-label="Multilingual support comparison table"><thead><tr><th>Operational Dimension</th><th>Translated Support</th><th>True Multilingual Delivery</th></tr></thead><tbody>
        <?php foreach ([['Language Handling','Machine-translated in real time, mid-conversation','Native or fluent agents, no translation lag'],['Tone & Brand Voice','Lost or flattened in translation','Preserved consistently in every language'],['Escalation Handling','Nuance and intent often misread','Full comprehension of context, idiom, and urgency'],['Coverage Model','Single team, translated on demand','Dedicated language-specific teams by region'],['Quality Consistency','CSAT drops in non-primary languages','CSAT parity maintained across all languages']] as $row): ?><tr><td><?= $row[0] ?></td><td><?= $row[1] ?></td><td><?= $row[2] ?></td></tr><?php endforeach; ?>
        </tbody></table></div>
    </div>
</section>

<section class="samesectionpadding py-24 bg-white" aria-label="Multilingual Support Capabilities"><div class="container mx-auto px-4"><div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:center;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Capabilities</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]">What Our Multilingual Support Delivers</h3></div><div><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">Language support covers voice, chat, email, and social without falling back to English. Every market gets consistent quality, localized tone, and measurable QA.</p></div></div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"><?php $cards = [['fa-language','Fluent Agents & AI Neutralization','Agents are recruited and trained for high-level fluency, enhanced by AI accent neutralization to ensure clear communication.',['Fluent Speakers','AI Accent Neutralization','Tech-Enabled Support']],['fa-comments','Consistent Brand Voice Across Languages','Tone, terminology, and messaging are localized and maintained per language so your brand voice stays consistent in every market.',['Brand Consistency','Localization','Tone Guidelines']],['fa-headset','Multilingual Channel Coverage','Language support covers voice, chat, email, and social. No fallback to English on any channel.',['Voice','Chat','Email','Social']],['fa-earth-americas','Region-Specific Delivery Teams','Dedicated teams are aligned to your highest-volume language markets. Fewer handoffs, context stays with the customer.',['Dedicated Teams','Regional Alignment','Lower Handoffs']],['fa-chart-line','Scalable Language Coverage','Add or scale language capacity as you enter new markets without rebuilding your support operation.',['Market Expansion','On-Demand Scaling','New Language Onboarding']],['fa-clipboard-check','Quality Monitoring Per Language','QA and CSAT are tracked per language so quality gaps are caught and corrected early.',['Language-Specific QA','CSAT Tracking','Continuous Improvement']]]; foreach ($cards as $card): ?><div class="cx-feature-card"><div class="cx-feature-icon"><i class="fas <?= $card[0] ?>"></i></div><h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= $card[1] ?></h4><p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= $card[2] ?></p><div class="flex flex-wrap gap-2"><?php foreach ($card[3] as $tag): ?><span class="cx-industry-pill"><span class="dot"></span><?= $tag ?></span><?php endforeach; ?></div></div><?php endforeach; ?></div></div></section>

<section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Multilingual Support Business Impact"><div class="container mx-auto px-4"><div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">What You Get</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]">Support Built Around Language, Not Around Workarounds</h3><p class="text-white/75 text-[16px] leading-[26px] mb-8">Outsource multilingual support to a team that builds every language into the operation. No add-ons, no translation workarounds.</p><a href="/contact" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base">Build Your Multilingual Team</a></div><div class="grid grid-cols-1 md:grid-cols-2 gap-6"><div class="rounded-[16px] p-7 bg-[#111] border border-white/10"><h4 class="text-white text-[22px] leading-[30px] mb-5">What You Get</h4><ul class="space-y-3 text-white/75 text-[15px] leading-[24px]"><?php foreach (['Native and fluent-language agents across 15+ languages','Dedicated teams by region and language pair','Voice, chat, email, and social coverage','Brand voice localization per language','Per-language QA and CSAT reporting','24/7 coverage aligned to language-region time zones'] as $item): ?><li class="flex gap-3"><span style="color:#CB46FA;">&#10003;</span><span><?= $item ?></span></li><?php endforeach; ?></ul></div><div class="rounded-[16px] p-7 bg-[#111] border border-white/10"><h4 class="text-white text-[22px] leading-[30px] mb-5">Business Impact</h4><ul class="space-y-3 text-white/75 text-[15px] leading-[24px]"><?php foreach (['CSAT parity across every supported language','Faster resolution with no translation lag','Stronger trust in non-primary-language markets','Smoother expansion into new geographies'] as $item): ?><li class="flex gap-3"><span style="color:#FE881C;">&#9656;</span><span><?= $item ?></span></li><?php endforeach; ?></ul><div class="mt-6 rounded-[12px] p-5" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"><p class="text-white text-[15px] leading-[24px]"><strong>Why it works:</strong> Language-specific teams are built from the start. No single team stretched across languages it cannot support.</p></div></div></div></div></div></section>

<section class="samesectionpadding py-24 bg-white" aria-label="Industry Expertise"><div class="container mx-auto px-4"><div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:center;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Industry Expertise</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]">Why Businesses Choose EmpireOneCX for Multilingual Support</h3></div><div><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">Language needs shift by industry and market. We build multilingual coverage around your actual customer base, not a generic list.</p></div></div><div class="grid grid-cols-1 lg:grid-cols-2 gap-8"><?php foreach ([['Retail & E-Commerce','Order, shipping, and returns support in multiple languages for customers shopping across borders.',['Cross-Border Support','Order Assistance','Returns']],['Travel & Hospitality','Booking changes, itineraries, and urgent traveler issues handled in the customer preferred language.',['Booking Support','Traveler Assistance','Real-Time Response']],['Financial Services & Fintech','Account, transaction, and fraud-related conversations handled by agents trained for compliance and accuracy.',['Compliance','Fraud Awareness','Account Support']],['Technology & SaaS','Technical support and onboarding delivered in multiple languages so every user gets the same product experience.',['Tech Support','Onboarding','Global User Base']]] as $ind): ?><div class="cx-feature-card"><h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= htmlspecialchars($ind[0], ENT_QUOTES, 'UTF-8') ?></h4><p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= htmlspecialchars($ind[1], ENT_QUOTES, 'UTF-8') ?></p><div class="flex flex-wrap gap-2"><?php foreach ($ind[2] as $tag): ?><span class="cx-industry-pill"><span class="dot"></span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span><?php endforeach; ?></div></div><?php endforeach; ?></div></div></section>

<section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Multilingual Customer Support FAQ"><div class="container mx-auto px-4"><div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:flex-start;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Common Questions</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]">Multilingual Customer Support FAQs</h3><p class="text-[16px] leading-[24px] text-gray-400">Everything you need to know before building a multilingual support team with EmpireOneCX.</p></div><div class="bg-[#111] rounded-[16px] p-6 md:p-8"><?php $faqs = [['Do you use real agents or machine translation?','Native and fluent-language agents handle every conversation directly. Translation tools are not a substitute for language proficiency.'],['Which languages do you currently support?','Coverage includes 15+ languages across our delivery teams. Additional languages can be onboarded as new markets are added.'],['Will quality be consistent across all languages, or just English?','CSAT and QA are tracked per language. Every language team is held to the same quality standard. No primary language tier.'],['How quickly can a new language be added to our support operation?','Most new language capacity can be onboarded within four to six weeks, depending on language and region.']]; foreach ($faqs as $i => $faq): ?><div class="cx-faq-item" id="faq-<?= $i ?>"><button type="button" class="cx-faq-toggle" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>"><span class="cx-faq-question"><?= htmlspecialchars($faq[0], ENT_QUOTES, 'UTF-8') ?></span><span class="cx-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><polyline points="6 9 12 15 18 9"/></svg></span></button><div class="cx-faq-answer" id="faq-answer-<?= $i ?>" role="region"><?= htmlspecialchars($faq[1], ENT_QUOTES, 'UTF-8') ?></div></div><?php endforeach; ?></div></div></div></section>

<section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden"><div class="container mx-auto px-4 relative z-10"><div class="mx-auto relative"><div class="absolute inset-0 rounded-[16px] overflow-hidden"><div class="absolute inset-0" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50%,#FE881C 100%);"></div><div class="absolute inset-[3px] rounded-[13px] bg-white"><div class="absolute inset-0"><div class="hidden md:block absolute inset-0" style="background:url('/assets/images/cta-bg-image.webp') no-repeat center/cover;"></div><div class="md:hidden absolute inset-0" style="background:url('/assets/images/cta-gradient.webp') no-repeat center/cover;"></div></div></div></div><div class="future-innerwork py-5 px-4 md:px-16 relative z-10"><div class="ctamain text-center"><div class="cta-left-sidework pt-[60px] pb-[60px]"><h2 class="solution-heading cta-solution-section future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">Ready to Support Every Customer <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]">in Their Own Language?</span></h2><p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">Tell us which languages and markets matter most to your business. We build multilingual support teams tailored to your specific needs.</p><div class="future-btn w-full max-w-2xl mx-auto mt-6"><a href="/contact" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base hover:scale-[1.02] active:scale-95 transition shadow-lg hover:shadow-purple-400/20">Get a Free Multilingual Support Consultation</a></div></div></div></div></div></div></section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.cx-faq-toggle').forEach(function (button) {
        button.addEventListener('click', function () {
            var item = button.closest('.cx-faq-item');
            if (!item) return;
            var isOpen = item.classList.contains('open');

            document.querySelectorAll('.cx-faq-item').forEach(function (el) {
                el.classList.remove('open');
                var toggle = el.querySelector('.cx-faq-toggle');
                if (toggle) toggle.setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () { var heroWrap = document.querySelector('.ecx-compact'); if (!heroWrap) return; var toggle = heroWrap.querySelector('.ecx-country-toggle'); var dropdown = heroWrap.querySelector('.ecx-country-dropdown'); var codeHid = heroWrap.querySelector('[name="country_code"]'); if (!toggle || !dropdown) return; var newToggle = toggle.cloneNode(true); toggle.parentNode.replaceChild(newToggle, toggle); newToggle.addEventListener('click', function (e) { e.stopPropagation(); dropdown.classList.toggle('open'); }); dropdown.addEventListener('click', function (e) { var item = e.target.closest('.ecx-country-item'); if (!item) return; var code = item.dataset.code; var flag = item.dataset.flag; heroWrap.querySelector('#ecxSelectedFlag').src = 'https://flagcdn.com/w20/' + flag + '.webp'; heroWrap.querySelector('.ecx-code').textContent = code; codeHid.value = code; dropdown.classList.remove('open'); }); document.addEventListener('click', function () { dropdown.classList.remove('open'); }); });
</script>

<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"Multilingual Customer Support","provider":{"@type":"Organization","name":"EmpireOne CX","url":"https://empireonecx.com"},"description":"Fluent-language multilingual customer support across voice, chat, email, and social with AI accent neutralization and per-language QA.","url":"https://empireonecx.com/solutions/multilingual-customer-support","areaServed":"Worldwide"}</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
