<?php
if (!isset($blogPost) || !is_array($blogPost)) {
    http_response_code(404);
    exit('Post not found');
}

if (!function_exists('blogTemplateEscape')) {
    function blogTemplateEscape($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('blogTemplateDate')) {
    function blogTemplateDate($date)
    {
        if (function_exists('formatInsightDate')) {
            return formatInsightDate($date);
        }

        $timestamp = strtotime($date);
        return $timestamp ? date('M j, Y', $timestamp) : $date;
    }
}

$pageTitle = $blogPost['pageTitle'] ?? $blogPost['title'];
$metaDescription = $blogPost['metaDescription'] ?? $blogPost['excerpt'] ?? '';
$metaKeywords = $blogPost['metaKeywords'] ?? '';
$publishedDisplay = blogTemplateDate($blogPost['datePublished'] ?? '');
$modifiedDisplay = blogTemplateDate($blogPost['dateModified'] ?? $blogPost['datePublished'] ?? '');
$primaryCategory = function_exists('getInsightPrimaryCategory') ? getInsightPrimaryCategory($blogPost) : ($blogPost['category'] ?? 'Insights');
$absoluteUrl = 'https://empireonecx.com' . ($blogPost['url'] ?? '');
$absoluteImage = 'https://empireonecx.com' . ($blogPost['image'] ?? '');

include(__DIR__ . '/header.php');
?>

<main class="relative bg-white">
    <section class="relative overflow-hidden bg-black px-4 sm:px-6" style="padding-top: 12rem; padding-bottom: 5rem;">
        <div class="absolute inset-0 opacity-35">
            <img src="<?= blogTemplateEscape($blogPost['image'] ?? '') ?>" alt="<?= blogTemplateEscape($blogPost['imageAlt'] ?? $blogPost['title']) ?>" class="h-full w-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/75 to-black"></div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-5xl">
                <a href="/insights" class="inline-flex items-center gap-2 text-[14px] leading-[22px] text-white/70 hover:text-white transition mb-8">
                    <span class="h-[2px] w-8 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]"></span>
                    Insights
                </a>
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <span class="px-4 py-2 rounded-[4px] text-[14px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">
                        <?= blogTemplateEscape($primaryCategory) ?>
                    </span>
                    <span class="text-[15px] leading-[24px] text-white/75">Published <?= blogTemplateEscape($publishedDisplay) ?></span>
                    <?php if (!empty($blogPost['typeLabel'])): ?>
                        <span class="text-[15px] leading-[24px] text-white/75"><?= blogTemplateEscape($blogPost['typeLabel']) ?></span>
                    <?php endif; ?>
                </div>
                <h1 class="text-white text-[42px] md:text-[62px] leading-[1.08] tracking-normal mb-6" style="font-family: helveticaregular, Arial, sans-serif;">
                    <?= blogTemplateEscape($blogPost['title']) ?>
                </h1>
                <p class="max-w-3xl text-[18px] md:text-[21px] leading-[32px] text-white/78 mb-8">
                    <?= blogTemplateEscape($blogPost['excerpt'] ?? '') ?>
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="<?= blogTemplateEscape($blogPost['startAnchor'] ?? '#article') ?>" class="inline-flex items-center justify-center px-6 py-3 rounded-[8px] text-white text-[15px] font-medium bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                        <?= blogTemplateEscape($blogPost['startButton'] ?? 'Start Reading') ?>
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center px-6 py-3 rounded-[8px] text-white text-[15px] font-medium border border-white/30 hover:border-white transition">
                        <?= blogTemplateEscape($blogPost['secondaryButton'] ?? 'Discuss BPO Support') ?>
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
                        <p class="text-[15px] leading-[24px] font-semibold text-black mb-4">Table of Contents</p>
                        <nav class="blog-toc-nav space-y-3 text-[14px] leading-[22px] text-[#555]">
                            <?php foreach (($blogPost['toc'] ?? []) as $item): ?>
                                <a class="blog-toc-link block hover:text-[#7A76FF]" href="<?= blogTemplateEscape($item['href']) ?>"><?= blogTemplateEscape($item['label']) ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </aside>

                <article class="max-w-4xl">
                    <style>
                        .blog-article h2 { font-family: helveticaregular, Arial, sans-serif; font-size: 34px; line-height: 42px; letter-spacing: 0; color: #050505; margin: 0 0 18px; }
                        .blog-article h3 { font-family: helveticaregular, Arial, sans-serif; font-size: 23px; line-height: 31px; color: #111; margin: 34px 0 12px; }
                        .blog-article p { font-size: 17px; line-height: 30px; color: #3C3B47; margin: 0 0 18px; }
                        .blog-article ul, .blog-article ol { margin: 0 0 28px 22px; color: #3C3B47; }
                        .blog-article li { font-size: 17px; line-height: 30px; margin-bottom: 10px; }
                        .blog-article section { scroll-margin-top: 110px; margin-bottom: 56px; }
                        .blog-article strong { color: #111; font-family: helveticaregular, Arial, sans-serif; }
                        .gradient-rule { width: 56px; height: 4px; border-radius: 999px; background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); margin-bottom: 18px; }
                        .blog-toc-link { position: relative; padding-left: 14px; transition: color 180ms ease, transform 180ms ease; }
                        .blog-toc-link::before { content: ""; position: absolute; left: 0; top: 0.45em; width: 4px; height: 4px; border-radius: 999px; background: transparent; transition: background 180ms ease, height 180ms ease, top 180ms ease; }
                        .blog-toc-link.is-active { color: #7A76FF; font-weight: 600; transform: translateX(2px); }
                        .blog-toc-link.is-active::before { top: 0.15em; width: 4px; height: 18px; background: linear-gradient(180deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); }
                    </style>

                    <div class="blog-article" id="article">
                        <?= $blogPost['content'] ?? '' ?>
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
                                <?= blogTemplateEscape($blogPost['ctaTitle'] ?? 'Lead the future of customer experience with EmpireOne') ?>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                <?= blogTemplateEscape($blogPost['ctaText'] ?? 'Because your customers deserve nothing less.') ?>
                            </p>
                            <div class="future-btn flex">
                                <a href="/contact" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Discuss Your Scaling Roadmap Today!
                                </a>
                            </div>
                        </div>
                        <div class="cta-rightside flex justify-center order-1 md:order-2 mt-6 md:-mt-12">
                            <img src="/assets/images/cta-rightimg.webp" class="hidden md:block w-[560px] h-[471px]" alt="Customer Experience" />
                            <img src="/assets/images/cta-rightimg-mobile.webp" class="block md:hidden w-full max-w-[300px] h-auto" alt="Customer Experience" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $blogPost['title'],
    'description' => $metaDescription,
    'author' => [
        '@type' => 'Organization',
        'name' => 'EmpireOneCX',
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'EmpireOneCX',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => 'https://empireonecx.com/assets/images/Empireone-logo.webp',
        ],
    ],
    'datePublished' => $blogPost['datePublished'] ?? '',
    'dateModified' => $blogPost['dateModified'] ?? $blogPost['datePublished'] ?? '',
    'image' => $absoluteImage,
    'mainEntityOfPage' => $absoluteUrl,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const tocLinks = Array.from(document.querySelectorAll(".blog-toc-link"));

    if (!tocLinks.length) {
        return;
    }

    const sections = [];

    tocLinks.forEach(function (link) {
        const sectionId = link.getAttribute("href");

        if (!sectionId || !sectionId.startsWith("#")) {
            return;
        }

        const section = document.querySelector(sectionId);

        if (section) {
            sections.push({
                id: section.id,
                link: link,
                element: section
            });
        }
    });

    if (!sections.length) {
        return;
    }

    function setActiveTocLink(sectionId) {
        tocLinks.forEach(function (link) {
            link.classList.remove("is-active");
            link.removeAttribute("aria-current");
        });

        const activeSection = sections.find(function (section) {
            return section.id === sectionId;
        });

        if (activeSection) {
            activeSection.link.classList.add("is-active");
            activeSection.link.setAttribute("aria-current", "true");
        }
    }

    function updateActiveTocLink() {
        const anchorOffset = 160;
        let activeSectionId = sections[0].id;

        sections.forEach(function (section) {
            const sectionTop = section.element.getBoundingClientRect().top;

            if (sectionTop <= anchorOffset) {
                activeSectionId = section.id;
            }
        });

        setActiveTocLink(activeSectionId);
    }

    let isTicking = false;

    function requestTocUpdate() {
        if (isTicking) {
            return;
        }

        isTicking = true;
        window.requestAnimationFrame(function () {
            updateActiveTocLink();
            isTicking = false;
        });
    }

    updateActiveTocLink();
    window.addEventListener("scroll", requestTocUpdate, { passive: true });
    window.addEventListener("resize", requestTocUpdate);
});
</script>

<?php include(__DIR__ . '/footer.php'); ?>
