<?php
$page_title = "Global Footprint | EmpireOneCX";
$metaDescription = "Explore EmpireOneCX global footprint pages across North America, Europe, the Middle East, Africa, Asia, and Latin America. Learn how our global CX and BPO delivery model supports growing brands.";
$metaKeywords = "EmpireOneCX global footprint, BPO global delivery, CX outsourcing Canada, United States, United Kingdom, Australia, UAE, Morocco, Nicaragua, Colombia, Venezuela, Bolivia, Paraguay, South Africa, Pakistan, Philippines";
$languageAlternates = [
    "en" => "https://empireonecx.com/global-footprint/",
    "x-default" => "https://empireonecx.com/global-footprint/",
];

$locations = [
    [
        "name" => "Canada",
        "slug" => "canada",
        "summary" => "North American CX and BPO support for brands that need scalable teams, responsive service, and trusted operational delivery.",
        "image" => "/assets/images/canada-skyscraper.webp",
        "highlights" => ["Customer experience teams", "Back-office support", "Nearshore-friendly coverage", "Secure operational workflows"],
    ],
    [
        "name" => "United States",
        "slug" => "united-states",
        "summary" => "CX outsourcing and BPO support for U.S. businesses looking to scale support capacity, reduce operational pressure, and improve customer responsiveness.",
        "image" => "/assets/images/USA.webp",
        "highlights" => ["Customer support outsourcing", "AI-assisted operations", "Sales and service support", "Scalable support capacity"],
    ],
    [
        "name" => "United Kingdom",
        "slug" => "united-kingdom",
        "summary" => "Customer experience and business process outsourcing support for UK brands serving local, regional, and global customers.",
        "image" => "/assets/images/UK.webp",
        "highlights" => ["Omnichannel support", "GDPR-aware workflows", "Flexible team scaling", "Quality assurance support"],
    ],
    [
        "name" => "Australia",
        "slug" => "australia",
        "summary" => "BPO and customer support solutions for Australian businesses that need reliable coverage, operational resilience, and scalable service teams.",
        "image" => "/assets/images/Australia.webp",
        "highlights" => ["After-hours support", "Customer care teams", "Back-office operations", "Overflow support"],
    ],
    [
        "name" => "UAE",
        "slug" => "uae",
        "summary" => "CX and BPO support for UAE businesses and regional teams that require high-quality customer engagement and secure operational workflows.",
        "image" => "/assets/images/UAE.webp",
        "highlights" => ["Regional customer support", "Finance and admin workflows", "Multichannel service", "Global delivery alignment"],
    ],
    [
        "name" => "Morocco",
        "slug" => "morocco",
        "summary" => "Multilingual CX and BPO delivery support for brands that need flexible coverage across Europe, the Middle East, and North Africa.",
        "image" => "/assets/images/morocco-skyline.webp",
        "highlights" => ["Multilingual support", "Nearshore coverage", "Customer care teams", "Back-office workflows"],
    ],
    [
        "name" => "Nicaragua",
        "slug" => "nicaragua",
        "summary" => "Nearshore CX and operational support for businesses serving North American customers with responsive and cost-efficient teams.",
        "image" => "/assets/images/nicaragua-skyline.webp",
        "highlights" => ["Nearshore service teams", "Customer support", "Administrative workflows", "Scalable coverage"],
    ],
    [
        "name" => "Colombia",
        "slug" => "colombia",
        "summary" => "Latin America CX and BPO support for companies that need bilingual service, operational consistency, and regional flexibility.",
        "image" => "/assets/images/colombia-skyline.webp",
        "highlights" => ["Bilingual support", "Customer experience teams", "Sales support", "Back-office operations"],
    ],
    [
        "name" => "Venezuela",
        "slug" => "venezuela",
        "summary" => "CX and BPO delivery support for teams looking to expand Spanish-language service capacity and operational coverage.",
        "image" => "/assets/images/venezuela-skyline.webp",
        "highlights" => ["Spanish-language support", "Customer care coverage", "Back-office assistance", "Flexible staffing"],
    ],
    [
        "name" => "Bolivia",
        "slug" => "bolivia",
        "summary" => "Customer support and business process teams for brands seeking reliable Latin America delivery capacity.",
        "image" => "/assets/images/bolivia-skyline.webp",
        "highlights" => ["Customer service", "Administrative support", "Regional coverage", "Quality workflows"],
    ],
    [
        "name" => "Paraguay",
        "slug" => "paraguay",
        "summary" => "Flexible CX and back-office support for organizations building efficient, scalable service operations in Latin America.",
        "image" => "/assets/images/paraguay-skyline.webp",
        "highlights" => ["Customer support", "Back-office teams", "Operational scaling", "Service quality"],
    ],
    [
        "name" => "South Africa",
        "slug" => "south-africa",
        "summary" => "English-language CX and BPO support with strong global service alignment and flexible operating coverage.",
        "image" => "/assets/images/south-africa-skyline.webp",
        "highlights" => ["English-language support", "Global service coverage", "Quality assurance", "Customer care teams"],
    ],
    [
        "name" => "Pakistan",
        "slug" => "pakistan",
        "summary" => "Skilled CX, back-office, technical, and AI-assisted operations support for businesses scaling global delivery teams.",
        "image" => "/assets/images/pakistan-skyline.webp",
        "highlights" => ["Technical support", "Back-office operations", "AI-assisted workflows", "Scalable staffing"],
    ],
    [
        "name" => "Philippines",
        "slug" => "philippines",
        "summary" => "Established customer experience and BPO delivery support for brands needing high-quality English-language service teams.",
        "image" => "/assets/images/philippines-skyline.webp",
        "highlights" => ["Customer care teams", "Voice and digital support", "Back-office operations", "Quality monitoring"],
    ],
];

include(__DIR__ . "/../inc/header.php");
?>

<style>
@media (max-width: 767px) {
    .global-footprint-page .hero-section {
        height: auto !important;
        min-height: 680px !important;
        padding: 160px 16px 76px !important;
        justify-content: flex-start !important;
    }

    .global-footprint-page .hero-section .container {
        max-width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .global-footprint-page .hero-section .herosubtitle {
        margin-bottom: 14px !important;
        font-size: 16px !important;
        line-height: 24px !important;
        letter-spacing: 0.08em !important;
    }

    .global-footprint-page .hero-section .solutions-hero-heading {
        max-width: min(352px, calc(100vw - 32px)) !important;
        margin-left: auto !important;
        margin-right: auto !important;
        margin-bottom: 16px !important;
        font-size: 34px !important;
        line-height: 42px !important;
        letter-spacing: 0 !important;
        text-wrap: balance;
    }

    .global-footprint-page .hero-section .subpara {
        max-width: min(342px, calc(100vw - 36px)) !important;
        margin-left: auto !important;
        margin-right: auto !important;
        margin-bottom: 18px !important;
        padding-bottom: 0 !important;
        font-size: 14px !important;
        line-height: 22px !important;
        letter-spacing: 0 !important;
    }

    .global-footprint-page .hero-section .delay-3 {
        max-width: min(330px, calc(100vw - 36px));
        margin-left: auto !important;
        margin-right: auto !important;
        font-size: 13px !important;
        line-height: 21px !important;
    }

    .global-footprint-page .hero-section .delay-4 button {
        width: min(100%, 352px) !important;
        min-height: 52px !important;
        padding: 14px 18px !important;
        font-size: 14px !important;
        line-height: 20px !important;
        white-space: normal !important;
    }

    .global-footprint-page .controlbtns {
        padding-top: 40px !important;
        padding-bottom: 22px !important;
    }

    .global-footprint-page .linebtns {
        display: flex !important;
        flex-wrap: nowrap !important;
        justify-content: flex-start !important;
        gap: 12px !important;
        width: 100% !important;
        max-width: 100vw !important;
        overflow-x: auto !important;
        overflow-y: hidden !important;
        padding: 0 16px 12px !important;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
    }

    .global-footprint-page .linebtns .line-btn {
        flex: 0 0 auto !important;
        min-width: max-content !important;
        padding: 14px 22px !important;
        font-size: 15px !important;
        line-height: 20px !important;
    }

    .global-footprint-page .industrysection {
        padding-top: 42px !important;
        padding-bottom: 54px !important;
    }

    .global-footprint-page .locations-mainflextag {
        display: block !important;
    }

    .global-footprint-page .leftsideline {
        display: none !important;
    }

    .global-footprint-page .rightsideline {
        width: 100% !important;
    }

    .global-footprint-page .indussections {
        padding-top: 34px !important;
        padding-bottom: 50px !important;
    }

    .global-footprint-page .toptextwork .spanfont {
        font-size: 17px !important;
        line-height: 25px !important;
    }

    .global-footprint-page .solution-heading,
    .global-footprint-page .solution-heading span {
        max-width: 100% !important;
        font-size: 30px !important;
        line-height: 38px !important;
        letter-spacing: 0 !important;
    }

    .global-footprint-page .toptextwork p {
        font-size: 15px !important;
        line-height: 24px !important;
    }

    .global-footprint-page .imagetop {
        margin-top: 24px !important;
    }

    .global-footprint-page .heightimg img {
        height: 220px !important;
    }

    .global-footprint-page .indusweoffer {
        width: 100% !important;
        margin-top: 18px !important;
    }

    .global-footprint-page .mytextoffer {
        padding: 24px 18px !important;
    }

    .global-footprint-page .indusweoffer h3 {
        font-size: 22px !important;
        line-height: 30px !important;
    }

    .global-footprint-page .indusweoffer a {
        width: 100% !important;
        min-height: 48px !important;
        margin-top: 4px !important;
    }

    .global-footprint-page .future-customer-section {
        padding-top: 58px !important;
        padding-bottom: 58px !important;
    }
}

@media (max-width: 360px) {
    .global-footprint-page .hero-section {
        min-height: 700px !important;
        padding-top: 154px !important;
    }

    .global-footprint-page .hero-section .solutions-hero-heading {
        font-size: 31px !important;
        line-height: 39px !important;
    }
}
</style>

<main class="global-footprint-page" style="background-color: #ffffff;">
    <script type="application/ld+json">
    <?= json_encode([
        "@context" => "https://schema.org",
        "@type" => "ItemList",
        "name" => "EmpireOneCX Global Footprint",
        "description" => "EmpireOneCX global footprint pages for CX and BPO outsourcing services.",
        "itemListElement" => array_map(function ($location, $index) {
            return [
                "@type" => "ListItem",
                "position" => $index + 1,
                "name" => $location["name"],
                "url" => "https://empireonecx.com/global-footprint/" . $location["slug"],
            ];
        }, $locations, array_keys($locations)),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>

    <section class="hero-section mainherowork relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 16rem; padding-bottom: 165px;">
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/new-globe-pic-image.webp">
            <source src="/assets/images/homeglobalpresence.mp4" type="video/mp4" />
        </video>
        <div class="absolute inset-0 bg-black/45 z-0"></div>
        <div class="absolute inset-0 z-0" style="background: radial-gradient(circle at center, rgba(0,0,0,0.10) 0%, rgba(0,0,0,0.46) 58%, rgba(0,0,0,0.68) 100%);"></div>
        <div class="container mx-auto w-full relative z-10">
            <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                    Global Footprint
                </span>
            </p>
            <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto">
                CX & BPO Support Across Our Global Footprint
            </h1>
            <p class="subpara shortspace font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto sm:mb-2" style="max-width: 848px !important;padding-bottom: 10px;">
                Explore priority markets where EmpireOneCX helps brands scale customer experience, back-office, compliance-ready, and AI-assisted outsourcing support.
            </p>
            <div class="animate-reveal delay-3 mb-8 text-gray-300 text-sm font-medium tracking-wide">
                <span>Global Delivery</span> &nbsp;|&nbsp; <span>AI-Assisted CX</span> &nbsp;|&nbsp; <span>Secure BPO Operations</span>
            </div>
            <div class="animate-reveal delay-4">
                <button type="button" onclick="window.scrollToLocationTarget('location-markets')" data-location-target="location-markets" class="location-scroll-trigger herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;">
                    Explore Priority Markets
                </button>
            </div>
        </div>
    </section>

    <section class="controlbtns samesectionpadding pb-[10px] md:pb-[40px] pt-[60px] md:pt-[80px] relative overflow-hidden bg-cover bg-center">
        <div class="container mx-auto">
            <div class="linebtns flex flex-nowrap md:flex-wrap justify-start md:justify-center items-center gap-4 overflow-x-auto md:overflow-visible px-5 md:px-0 pb-2 md:pb-0 snap-x snap-mandatory [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
                <?php foreach ($locations as $index => $location): ?>
                    <button type="button" onclick="window.scrollToLocationTarget('<?= htmlspecialchars($location["slug"], ENT_QUOTES, "UTF-8") ?>')" data-location-target="<?= htmlspecialchars($location["slug"], ENT_QUOTES, "UTF-8") ?>" class="line-btn location-scroll-trigger snap-center whitespace-nowrap <?= $index === 0 ? 'active btn-active' : '' ?> flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                        <span><?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?></span>
                    </button>
                <?php endforeach; ?>
                <div class="min-w-[20px] md:hidden"></div>
            </div>
        </div>
    </section>

    <section id="location-markets" class="industrysection samesectionpadding">
        <div class="container mx-auto px-4">
            <div class="mainflextag locations-mainflextag flex">
                <div class="leftsideline pt-[45px] relative">
                    <div class="w-1 bg-gray-300 h-full rounded relative">
                        <div id="location-scroll-progress" class="w-full h-0 rounded" style="min-height: 6%; background: linear-gradient(180deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                    </div>
                </div>
                <div class="rightsideline">
                    <?php foreach ($locations as $location): ?>
                        <div class="indussections border-b border-[#E6E4EC] pt-[40px] pb-[60px] scroll-animate" id="<?= htmlspecialchars($location["slug"], ENT_QUOTES, "UTF-8") ?>">
                            <div class="toptextwork">
                                <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                    <span class="relative z-10 flex items-center gap-2">
                                        <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                        <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                            <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>
                                        </span>
                                    </span>
                                </div>
                                <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[10px]">
                                    <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> CX & BPO
                                    <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-black">
                                        Market Support
                                    </span>
                                </h2>
                                <p class="text-[#3C3B47] text-[16px] leading-[24px] max-w-[970px]">
                                    <?= htmlspecialchars($location["summary"], ENT_QUOTES, "UTF-8") ?>
                                </p>
                            </div>
                            <div class="imagetop mt-[30px] relative z-10">
                                <div class="heightimg rounded-[16px] w-full overflow-hidden">
                                    <img src="<?= htmlspecialchars($location["image"], ENT_QUOTES, "UTF-8") ?>" alt="<?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> CX and BPO outsourcing support" class="w-full h-[467px] object-cover object-center" />
                                </div>
                            </div>
                            <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                    <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                    <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                                </div>
                                <div class="mytextoffer relative p-8">
                                    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
                                        <div>
                                            <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                                Market Focus
                                            </h3>
                                            <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                                <?php foreach ($location["highlights"] as $highlight): ?>
                                                    <div class="industext flex items-center gap-3">
                                                        <img src="/assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" />
                                                        <p class="text-[16px] leading-[24px] text-black">
                                                            <?= htmlspecialchars($highlight, ENT_QUOTES, "UTF-8") ?>
                                                        </p>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <a href="/global-footprint/<?= htmlspecialchars($location["slug"], ENT_QUOTES, "UTF-8") ?>/" class="inline-flex items-center justify-center shrink-0 px-6 py-3 rounded-[8px] text-white text-[14px] leading-[20px] font-medium bg-[#7A76FF]">
                                            View <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> Page
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">
        <div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute w-[720px] h-[760px] top-[-140px] bg-no-repeat opacity-100" style="background-image: url('/assets/images/futuresideig.webp'); transform: rotate(42deg);"></div>
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
                                Scale customer operations
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Across Priority Markets</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Build dedicated CX and BPO teams with the structure, security, and flexibility your market requires.
                            </p>
                            <div class="future-btn">
                                <a href="/contact" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Discuss Your Market <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
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
function initLocationArchive() {
    const locationProgress = document.getElementById('location-scroll-progress');
    const locationsMainFlex = document.querySelector('.locations-mainflextag');

    if (locationProgress && locationsMainFlex) {
        window.addEventListener('scroll', () => {
            const rect = locationsMainFlex.getBoundingClientRect();
            const viewportCenter = window.innerHeight / 2;
            const distance = viewportCenter - rect.top;
            const total = rect.height;
            let percent = (distance / total) * 100;
            percent = Math.max(6, Math.min(100, percent));
            locationProgress.style.height = percent + '%';
        });
    }

    window.scrollToLocationTarget = function (targetId) {
        const target = document.getElementById(targetId);

        if (!target) {
            return;
        }

        const header = document.querySelector("header");
        const headerOffset = header ? header.offsetHeight + 24 : 110;
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: targetPosition,
            behavior: "auto"
        });
    };

    document.querySelectorAll(".location-scroll-trigger").forEach(btn => {
        btn.addEventListener("click", function (event) {
            const targetId = this.getAttribute("data-location-target");

            if (!targetId) {
                return;
            }

            if (this.classList.contains("line-btn")) {
                document.querySelectorAll(".line-btn").forEach(item => item.classList.remove("btn-active"));
                this.classList.add("btn-active");
            }

            event.preventDefault();
            window.setTimeout(() => window.scrollToLocationTarget(targetId), 40);
        });
    });
}

initLocationArchive();
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
