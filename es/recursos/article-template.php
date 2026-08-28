<?php
require_once(__DIR__ . "/posts-es.php");

$blogPost = getSpanishInsightPost($spanishPostSlug ?? "");
if (!$blogPost) {
    http_response_code(404);
    include(__DIR__ . "/../../404.php");
    return;
}

$siteLanguage = "es";
$pageTitle = $blogPost["pageTitle"];
$page_title = $pageTitle;
$metaDescription = $blogPost["metaDescription"];
$meta_description = $metaDescription;
$metaKeywords = $blogPost["metaKeywords"];
$pageUrl = $blogPost["url"];
$languageSwitchHrefEn = "/insights/" . $blogPost["english_slug"];
$languageAlternates = [
    "en" => "https://empireonecx.com/insights/" . $blogPost["english_slug"],
    "es" => "https://empireonecx.com" . $blogPost["url"],
    "x-default" => "https://empireonecx.com/insights/" . $blogPost["english_slug"],
];

include(__DIR__ . "/../../inc/header.php");
?>

<main class="relative bg-white">
    <section class="relative overflow-hidden bg-black px-4 sm:px-6" style="padding-top: 12rem; padding-bottom: 5rem;">
        <div class="absolute inset-0 opacity-35">
            <img src="<?= htmlspecialchars($blogPost["image"], ENT_QUOTES, "UTF-8") ?>" alt="<?= htmlspecialchars($blogPost["imageAlt"], ENT_QUOTES, "UTF-8") ?>" class="h-full w-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/75 to-black"></div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-5xl">
                <a href="/es/recursos/" class="inline-flex items-center gap-2 text-[14px] leading-[22px] text-white/70 hover:text-white transition mb-8">
                    <span class="h-[2px] w-8 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]"></span>
                    Recursos
                </a>
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <span class="px-4 py-2 rounded-[4px] text-[14px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">
                        <?= htmlspecialchars($blogPost["category"], ENT_QUOTES, "UTF-8") ?>
                    </span>
                    <span class="text-[15px] leading-[24px] text-white/75">Publicado <?= htmlspecialchars(formatSpanishInsightDate($blogPost["datePublished"]), ENT_QUOTES, "UTF-8") ?></span>
                </div>
                <h1 class="blog-hero-title text-white tracking-normal mb-6" style="font-family: helveticaregular, Arial, sans-serif;">
                    <?= htmlspecialchars($blogPost["title"], ENT_QUOTES, "UTF-8") ?>
                </h1>
                <div class="flex flex-wrap gap-3 mt-2">
                    <a href="#article" class="inline-flex items-center justify-center px-6 py-3 rounded-[8px] text-white text-[15px] font-medium bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                        <?= htmlspecialchars($blogPost["startButton"], ENT_QUOTES, "UTF-8") ?>
                    </a>
                    <a href="/es/contacto/" class="inline-flex items-center justify-center px-6 py-3 rounded-[8px] text-white text-[15px] font-medium border border-white/30 hover:border-white transition">
                        <?= htmlspecialchars($blogPost["secondaryButton"], ENT_QUOTES, "UTF-8") ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-4 sm:px-6 py-16 md:py-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[300px_minmax(0,1fr)] gap-10 lg:gap-16">
                <aside class="hidden lg:block">
                    <div class="sticky top-28 rounded-[8px] border border-gray-200 bg-white p-6 shadow-sm">
                        <p class="text-[15px] leading-[24px] font-semibold text-black mb-4">Índice</p>
                        <nav class="blog-toc-nav space-y-3 text-[14px] leading-[22px] text-[#555]">
                            <?php foreach ($blogPost["toc"] as $item): ?>
                                <a class="blog-toc-link block hover:text-[#7A76FF]" href="<?= htmlspecialchars($item["href"], ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($item["label"], ENT_QUOTES, "UTF-8") ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </aside>

                <article class="max-w-4xl">
                    <link rel="stylesheet" href="/assets/css/extracted/inc-blog-template.css?v=20260821-1">
                    <div class="blog-article" id="article">
                        <p><?= htmlspecialchars($blogPost["excerpt"], ENT_QUOTES, "UTF-8") ?></p>
                        <?php foreach ($blogPost["sections"] as $section): ?>
                            <section id="<?= htmlspecialchars(spanishInsightAnchor($section[0]), ENT_QUOTES, "UTF-8") ?>">
                                <div class="gradient-rule"></div>
                                <h2><?= htmlspecialchars($section[0], ENT_QUOTES, "UTF-8") ?></h2>
                                <?php foreach ($section[1] as $paragraph): ?>
                                    <p><?= htmlspecialchars($paragraph, ENT_QUOTES, "UTF-8") ?></p>
                                <?php endforeach; ?>
                            </section>
                        <?php endforeach; ?>
                        <section id="puntos-clave">
                            <div class="gradient-rule"></div>
                            <h2>Puntos clave</h2>
                            <ul>
                                <?php foreach ($blogPost["bullets"] as $bullet): ?>
                                    <li><?= htmlspecialchars($bullet, ENT_QUOTES, "UTF-8") ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="cta-section relative py-20 bg-white overflow-hidden">
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
                    <div class="ctamain grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="cta-left-sidework order-2 md:order-1">
                            <h2 class="solution-heading future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-normal text-black mb-[15px] md:mb-[20px]" style="max-width: 561px;">
                                <?= htmlspecialchars($blogPost["ctaTitle"], ENT_QUOTES, "UTF-8") ?>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                <?= htmlspecialchars($blogPost["ctaText"], ENT_QUOTES, "UTF-8") ?>
                            </p>
                            <div class="future-btn flex">
                                <a href="/es/contacto/" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Hablemos de su plan de crecimiento
                                </a>
                            </div>
                        </div>
                        <div class="cta-rightside flex justify-center order-1 md:order-2 mt-6 md:-mt-12">
                            <img src="/assets/images/cta-rightimg.webp" class="hidden md:block w-[560px] h-[471px]" alt="Experiencia del cliente" />
                            <img src="/assets/images/cta-rightimg-mobile.webp" class="block md:hidden w-full max-w-[300px] h-auto" alt="Experiencia del cliente" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => $blogPost["title"],
    "description" => $blogPost["metaDescription"],
    "author" => ["@type" => "Organization", "name" => "EmpireOneCX"],
    "publisher" => ["@type" => "Organization", "name" => "EmpireOneCX"],
    "datePublished" => $blogPost["datePublished"],
    "dateModified" => $blogPost["dateModified"],
    "image" => "https://empireonecx.com" . $blogPost["image"],
    "mainEntityOfPage" => "https://empireonecx.com" . $blogPost["url"],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../../inc/footer.php"); ?>
