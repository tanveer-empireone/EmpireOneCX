<?php
$requiredLocationFields = ["name", "slug", "image", "title", "subtitle", "intro", "metaDescription", "overview", "services", "why", "industries", "faqs"];

foreach ($requiredLocationFields as $field) {
    if (!isset($location[$field])) {
        http_response_code(500);
        echo "Location page configuration is missing: " . htmlspecialchars($field, ENT_QUOTES, "UTF-8");
        exit;
    }
}

$page_title = $location["title"] . " | EmpireOneCX";
$metaDescription = $location["metaDescription"];
$metaKeywords = $location["name"] . " BPO outsourcing, " . $location["name"] . " customer experience outsourcing, CX outsourcing " . $location["name"] . ", EmpireOneCX " . $location["name"];

include(__DIR__ . "/../inc/header.php");
?>

<style>
    .location-detail-page {
        background: #fff;
        color: #06131e;
    }

    .location-detail-hero {
        padding-top: 16rem;
        padding-bottom: 165px;
    }

    .location-detail-grid {
        display: grid;
        grid-template-columns: 1fr 440px;
        gap: 48px;
        align-items: center;
    }

    .location-detail-kicker {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        color: #fff;
        font-size: 16px;
        line-height: 24px;
        margin-bottom: 18px;
    }

    .location-detail-kicker::before {
        content: "";
        width: 42px;
        height: 3px;
        border-radius: 999px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }

    .breadcrumb-nav a,
    .breadcrumb-nav span {
        font-size: 14px;
        line-height: 22px;
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
    }

    .breadcrumb-nav a:hover {
        color: #CB46FA;
    }

    .breadcrumb-nav .sep {
        margin: 0 8px;
    }

    .breadcrumb-nav .current {
        color: #fff;
    }

    .location-gradient-text {
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .location-detail-heading {
        max-width: 860px;
        color: #fff;
        font-size: 58px;
        line-height: 1.08;
        font-weight: 400;
        margin-bottom: 20px;
        font-family: helveticaregular, Arial, sans-serif;
        letter-spacing: 0;
    }

    .location-detail-subtitle {
        max-width: 760px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 30px;
        line-height: 1.18;
        margin-bottom: 24px;
    }

    .location-detail-intro {
        max-width: 760px;
        color: rgba(255, 255, 255, 0.78);
        font-size: 18px;
        line-height: 30px;
        margin-bottom: 32px;
    }

    .location-hero-image-card {
        border-radius: 16px;
        padding: 3px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
        box-shadow: 0 24px 70px rgba(0, 0, 0, 0.35);
    }

    .location-hero-image-card img {
        display: block;
        width: 100%;
        height: 430px;
        object-fit: cover;
        object-position: center;
        border-radius: 13px;
    }

    .location-section-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 18px;
        font-size: 18px;
        line-height: 26px;
        font-weight: 600;
    }

    .location-section-label::before {
        content: "";
        width: 34px;
        height: 4px;
        border-radius: 999px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }

    .location-feature-card {
        border: 1px solid #e8e4ff;
        border-radius: 10px;
        background: #fff;
        padding: 28px;
        box-shadow: 0 14px 34px rgba(6, 19, 30, 0.06);
    }

    .location-dark-card {
        border-radius: 12px;
        background: #111113;
        border: 1px solid rgba(255, 255, 255, 0.12);
        padding: 30px;
    }

    .location-pill {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 13px 18px;
        border-radius: 999px;
        background: #fff;
        border: 1px solid #e8e4ff;
        color: #06131e;
        font-size: 15px;
        line-height: 22px;
    }

    .location-pill::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 999px;
        background: linear-gradient(135deg, #7A76FF 0%, #FE881C 100%);
        flex-shrink: 0;
    }

    .location-faq-item {
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        padding: 24px 0;
    }

    .location-faq-item:last-child {
        border-bottom: 0;
    }

    @media (max-width: 1024px) {
        .location-detail-hero {
            padding-top: 10rem;
            padding-bottom: 90px;
        }

        .location-detail-grid {
            grid-template-columns: 1fr;
        }

        .location-detail-heading {
            font-size: 46px;
        }

        .location-detail-subtitle {
            font-size: 26px;
        }

        .location-hero-image-card img {
            height: 320px;
        }
    }

    @media (max-width: 640px) {
        .location-detail-hero {
            padding-top: 8.5rem;
            padding-bottom: 70px;
        }

        .location-detail-heading {
            font-size: 36px;
            line-height: 1.12;
        }

        .location-detail-subtitle {
            font-size: 22px;
        }

        .location-hero-image-card img {
            height: 240px;
        }
    }
</style>

<main class="location-detail-page">
    <script type="application/ld+json">
    <?= json_encode([
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => $location["title"],
        "description" => $location["metaDescription"],
        "provider" => [
            "@type" => "Organization",
            "name" => "EmpireOneCX",
            "url" => "https://empireonecx.com",
        ],
        "areaServed" => $location["name"],
        "serviceType" => "CX and BPO outsourcing",
        "url" => "https://empireonecx.com/global-footprint/" . $location["slug"],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>

    <section class="hero-section mainherowork location-detail-hero relative flex flex-col items-center justify-center overflow-hidden px-4 sm:px-6">
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/new-globe-pic-image.webp">
            <source src="/assets/images/homeglobalpresence.mp4" type="video/mp4" />
        </video>
        <div class="absolute inset-0 bg-black/45 z-0"></div>
        <div class="absolute inset-0 z-0" style="background: radial-gradient(circle at center, rgba(0,0,0,0.10) 0%, rgba(0,0,0,0.46) 58%, rgba(0,0,0,0.68) 100%);"></div>

        <div class="container mx-auto relative z-10">
            <div class="location-detail-grid">
                <div>
                    <nav class="breadcrumb-nav mb-6 mt-10 lg:mt-14" aria-label="Breadcrumb">
                        <a href="/global-footprint/">Global Footprint</a>
                        <span class="sep">/</span>
                        <span class="current"><?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?></span>
                    </nav>

                    <p class="location-detail-kicker">
                        <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>
                    </p>

                    <h1 class="location-detail-heading">
                        <?= htmlspecialchars($location["title"], ENT_QUOTES, "UTF-8") ?>
                    </h1>

                    <p class="location-detail-intro">
                        <?= htmlspecialchars($location["intro"], ENT_QUOTES, "UTF-8") ?>
                    </p>

                    <div class="flex flex-wrap items-center gap-4">
                        <a href="/contact" class="herobtns inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;">
                            Discuss <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> Support
                        </a>
                        <a href="/global-footprint/" class="inline-flex items-center justify-center text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
                            View All Global Footprint
                        </a>
                    </div>
                </div>

                <div class="location-hero-image-card">
                    <img src="<?= htmlspecialchars($location["image"], ENT_QUOTES, "UTF-8") ?>" alt="<?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> CX and BPO outsourcing location">
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                <div>
                    <p class="location-section-label location-gradient-text">Market Overview</p>
                    <h2 class="solution-heading text-[32px] md:text-[44px] leading-[1.15] text-black mb-5">
                        CX and BPO support built for <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> growth.
                    </h2>
                </div>
                <div>
                    <p class="text-[#3C3B47] text-[17px] leading-[30px]">
                        <?= htmlspecialchars($location["overview"], ENT_QUOTES, "UTF-8") ?>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12">
                <?php foreach ($location["services"] as $service): ?>
                    <div class="location-feature-card">
                        <h3 class="text-[22px] leading-[30px] text-black mb-3">
                            <?= htmlspecialchars($service["title"], ENT_QUOTES, "UTF-8") ?>
                        </h3>
                        <p class="text-[#3C3B47] text-[15px] leading-[25px]">
                            <?= htmlspecialchars($service["text"], ENT_QUOTES, "UTF-8") ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 bg-black relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <p class="location-section-label location-gradient-text">Why EmpireOneCX</p>
                    <h2 class="solution-heading text-[32px] md:text-[44px] leading-[1.15] text-white mb-5">
                        A global operating model with market-aware delivery.
                    </h2>
                    <p class="text-white/75 text-[17px] leading-[30px]">
                        <?= htmlspecialchars($location["why"], ENT_QUOTES, "UTF-8") ?>
                    </p>
                </div>

                <div class="location-dark-card">
                    <h3 class="text-white text-[24px] leading-[32px] mb-6">Common support needs</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <?php foreach ($location["industries"] as $industry): ?>
                            <span class="location-pill"><?= htmlspecialchars($industry, ENT_QUOTES, "UTF-8") ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-[0.72fr_1.28fr] gap-10 lg:gap-16">
                <div>
                    <p class="location-section-label location-gradient-text">FAQs</p>
                    <h2 class="solution-heading text-[32px] md:text-[44px] leading-[1.15] text-black mb-5">
                        Questions about <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> outsourcing
                    </h2>
                    <a href="/contact" class="inline-flex items-center justify-center px-7 py-4 rounded-[8px] text-white text-[15px] font-medium bg-[#7A76FF]">
                        Ask Our Team
                    </a>
                </div>
                <div class="rounded-[12px] bg-black p-6 md:p-8">
                    <?php foreach ($location["faqs"] as $faq): ?>
                        <div class="location-faq-item">
                            <h3 class="text-white text-[18px] leading-[26px] mb-3">
                                <?= htmlspecialchars($faq["question"], ENT_QUOTES, "UTF-8") ?>
                            </h3>
                            <p class="text-white/70 text-[15px] leading-[25px]">
                                <?= htmlspecialchars($faq["answer"], ENT_QUOTES, "UTF-8") ?>
                            </p>
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
                                Ready to build your
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?> CX team?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Talk to EmpireOneCX about secure, scalable customer experience and BPO support for your market.
                            </p>
                            <div class="future-btn">
                                <a href="/contact" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Get Started <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
