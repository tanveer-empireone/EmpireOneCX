<?php
require_once(__DIR__ . "/location-page-data-es.php");

$location = location_page_data_es($locationSlug ?? "");
if (!$location) {
    http_response_code(404);
    include(__DIR__ . "/../../404.php");
    return;
}

$siteLanguage = "es";
$pageTitle = $location["title"] . " | EmpireOneCX";
$page_title = $pageTitle;
$metaDescription = $location["metaDescription"];
$meta_description = $metaDescription;
$metaKeywords = "outsourcing BPO " . $location["name"] . ", outsourcing CX " . $location["name"] . ", soporte al cliente " . $location["name"] . ", EmpireOneCX " . $location["name"];
$pageUrl = "/es/presencia-global/" . $locationSlug . "/";
$languageSwitchHrefEn = "/global-footprint/" . $location["english_slug"] . "/";
$languageAlternates = [
    "en" => "https://empireonecx.com/global-footprint/" . $location["english_slug"] . "/",
    "es" => "https://empireonecx.com/es/presencia-global/" . $locationSlug . "/",
    "x-default" => "https://empireonecx.com/global-footprint/" . $location["english_slug"] . "/",
];

include(__DIR__ . "/../../inc/header.php");
?>

<link rel="stylesheet" href="/assets/css/extracted/global-footprint-location-page-template.css?v=20260821-1">

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
        "serviceType" => "Outsourcing CX y BPO",
        "url" => "https://empireonecx.com/es/presencia-global/" . $locationSlug . "/",
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
                    <nav class="breadcrumb-nav mb-6 mt-10 lg:mt-14" aria-label="Ruta de navegación">
                        <a href="/es/presencia-global/">Presencia global</a>
                        <span class="sep">/</span>
                        <span class="current"><?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?></span>
                    </nav>

                    <p class="location-detail-kicker"><?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?></p>
                    <h1 class="location-detail-heading"><?= htmlspecialchars($location["title"], ENT_QUOTES, "UTF-8") ?></h1>
                    <p class="location-detail-intro"><?= htmlspecialchars($location["intro"], ENT_QUOTES, "UTF-8") ?></p>

                    <div class="flex flex-wrap items-center gap-4">
                        <a href="/es/contacto/" class="herobtns inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;">
                            Hablemos sobre soporte en <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>
                        </a>
                        <a href="/es/presencia-global/" class="inline-flex items-center justify-center text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
                            Ver toda la presencia global
                        </a>
                    </div>
                </div>

                <div class="location-hero-image-card">
                    <img src="<?= htmlspecialchars($location["image"], ENT_QUOTES, "UTF-8") ?>" alt="Ubicación de outsourcing CX y BPO en <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                <div>
                    <p class="location-section-label location-gradient-text">Resumen del mercado</p>
                    <h2 class="solution-heading text-[32px] md:text-[44px] leading-[1.15] text-black mb-5">
                        Soporte CX y BPO creado para el crecimiento en <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>.
                    </h2>
                </div>
                <div>
                    <p class="text-[#3C3B47] text-[17px] leading-[30px]"><?= htmlspecialchars($location["overview"], ENT_QUOTES, "UTF-8") ?></p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12">
                <?php foreach ($location["services"] as $service): ?>
                    <div class="location-feature-card">
                        <h3 class="text-[22px] leading-[30px] text-black mb-3"><?= htmlspecialchars($service["title"], ENT_QUOTES, "UTF-8") ?></h3>
                        <p class="text-[#3C3B47] text-[15px] leading-[25px]"><?= htmlspecialchars($service["text"], ENT_QUOTES, "UTF-8") ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 bg-black relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <p class="location-section-label location-gradient-text">Por qué EmpireOneCX</p>
                    <h2 class="solution-heading text-[32px] md:text-[44px] leading-[1.15] text-white mb-5">
                        Un modelo operativo global con entrega consciente del mercado.
                    </h2>
                    <p class="text-white/75 text-[17px] leading-[30px]"><?= htmlspecialchars($location["why"], ENT_QUOTES, "UTF-8") ?></p>
                </div>

                <div class="location-dark-card">
                    <h3 class="text-white text-[24px] leading-[32px] mb-6">Necesidades comunes de soporte</h3>
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
                        Preguntas sobre outsourcing en <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>
                    </h2>
                    <a href="/es/contacto/" class="inline-flex items-center justify-center px-7 py-4 rounded-[8px] text-white text-[15px] font-medium bg-[#7A76FF]">
                        Pregunte a nuestro equipo
                    </a>
                </div>
                <div class="rounded-[12px] bg-black p-6 md:p-8">
                    <?php foreach ($location["services"] as $service): ?>
                        <div class="location-faq-item">
                            <h3 class="text-white text-[18px] leading-[26px] mb-3">¿EmpireOneCX ofrece <?= strtolower(htmlspecialchars($service["title"], ENT_QUOTES, "UTF-8")) ?> para <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>?</h3>
                            <p class="text-white/70 text-[15px] leading-[25px]"><?= htmlspecialchars($service["text"], ENT_QUOTES, "UTF-8") ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">
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
                                ¿Listo para crear su equipo CX para
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> <?= htmlspecialchars($location["name"], ENT_QUOTES, "UTF-8") ?>?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Hable con EmpireOneCX sobre soporte seguro y escalable de experiencia del cliente y BPO para su mercado.
                            </p>
                            <div class="future-btn">
                                <a href="/es/contacto/" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Comenzar <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include(__DIR__ . "/../../inc/footer.php"); ?>
