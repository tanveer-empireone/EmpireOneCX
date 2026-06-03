<?php
    require __DIR__ . "/posts.php";

    $allPosts = getInsightPosts();
    $categories = getInsightCategories($allPosts);
    $selectedCategory = $_GET['category'] ?? '';
    $posts = $selectedCategory ? array_filter($allPosts, function ($post) use ($selectedCategory) {
        foreach (normalizeInsightCategories($post) as $category) {
            if (getInsightCategorySlug($category) === $selectedCategory) {
                return true;
            }
        }

        return false;
    }) : $allPosts;
    $latestPost = reset($allPosts);
    $pageTitle = "News & Insights";
    $metaDescription = "Explore EmpireOneCX insights on business process outsourcing, customer experience, AI-assisted operations, and scalable support teams.";
    $metaKeywords = "BPO insights, business process outsourcing, BPO guides, customer experience, outsourcing strategy, AI assisted BPO";
    include(__DIR__ . "/../inc/header.php");
?>

<main style="background-color: #000;">
    <section class="hero-section mybanner relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 11rem;padding-bottom: 52px;">
        <div class="absolute bg-black/50 -z-10" style="width:1920px; height:611px;"></div>
        <div class="container mx-auto w-full relative z-10">
            <div class="mainherossec flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
                <div class="lefthers w-full lg:w-1/2 fade-zoom-reveal">
                    <div class="overflow-hidden rounded-[16px]">
                        <img src="/assets/images/newsinsight.webp"
                            alt="EmpireOneCX insights"
                            class="w-[660px] h-[400px] object-cover block">
                    </div>
                </div>

                <div class="righthero w-full lg:w-1/2">
                    <div class="flex items-center gap-3">
                        <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                                EmpireOneCX News & Insights
                            </span>
                        </p>
                    </div>

                    <h1 class="w-full solutions-hero-headingss animate-reveal heading-underline text-left text-[40px] md:text-[48px] lg:text-[46px] leading-[1.2] mb-5 text-white">
                        Insights for Smarter CX, BPO, and Operational Growth
                    </h1>
                    <?php if ($latestPost): ?>
                        <div class="bottombtn animate-reveal delay-4 text-left">
                            <button onclick="window.location.href='<?= htmlspecialchars($latestPost['url'], ENT_QUOTES, 'UTF-8') ?>'" class="bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-10 text-[16px] hover:opacity-90 transition-opacity shadow-xl" style="border-radius: 8px;">
                                Read latest article
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <h2 class="newstext text-[32px] font-bold mb-8 text-gray-900 scroll-animate">Explore all posts</h2>

            <div class="mybtnanchor flex flex-wrap gap-3 mb-8">
                <a href="/insights" class="<?= $selectedCategory === '' ? 'btn-gradient text-white' : 'border border-gray-200 text-[rgba(0,0,0,1)]' ?> px-4 py-2 rounded-md text-[16px] leading-[24px] font-medium">All Posts</a>
                <?php foreach ($categories as $categorySlug => $categoryName): ?>
                    <a href="/insights?category=<?= htmlspecialchars($categorySlug, ENT_QUOTES, 'UTF-8') ?>" class="<?= $selectedCategory === $categorySlug ? 'btn-gradient text-white' : 'border border-gray-200 text-[rgba(0,0,0,1)]' ?> px-4 py-2 rounded-md text-[16px] leading-[24px] font-medium">
                        <?= htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <hr class="border-gray-100 mb-10">

            <?php if (empty($posts)): ?>
                <div class="rounded-[8px] border border-gray-200 p-8 text-[18px] leading-[28px] text-[#3C3B47]">
                    No posts found in this category yet.
                </div>
            <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-8">
                <?php foreach ($posts as $post): ?>
                    <a href="<?= htmlspecialchars($post['url'], ENT_QUOTES, 'UTF-8') ?>" class="newtextstyle group block cursor-pointer h-full fade-zoom-reveal">
                        <div class="flex flex-col h-full transition-all duration-500 hover:-translate-y-1 rounded-[10px]">
                            <div class="rounded-[8px] overflow-hidden mb-5">
                                <img src="<?= htmlspecialchars($post['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($post['imageAlt'], ENT_QUOTES, 'UTF-8') ?>" class="w-full h-[265px] object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                            <h3 class="text-[22px] leading-[30px] mb-4 text-gray-900 group-hover:text-purple-600 transition-colors duration-300">
                                <?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?>
                            </h3>
                            <div class="flex items-center gap-4 mt-auto">
                                <span class="blogfont px-3 py-1.5 rounded-full bg-gradient-to-r from-[rgba(122,118,255,0.1)] via-[rgba(203,70,250,0.1)] to-[rgba(254,136,28,0.1)]">
                                    <span class="text-[16px] bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                                        <?= htmlspecialchars(getInsightPrimaryCategory($post), ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                </span>
                                <time datetime="<?= htmlspecialchars($post['datePublished'], ENT_QUOTES, 'UTF-8') ?>" class="text-[#000] text-[16px]">
                                    <?= htmlspecialchars(formatInsightDate($post['datePublished']), ENT_QUOTES, 'UTF-8') ?>
                                </time>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="cta-section relative py-24 bg-white overflow-hidden">
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
                                Lead the future of customer experience with
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-normal">EmpireOne</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Because your customers deserve nothing less.
                            </p>
                            <div class="future-btn flex">
                                <a href="/contact" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Discuss Your Scaling Roadmap Today!
                                </a>
                            </div>
                        </div>

                        <div class="cta-rightside flex justify-center order-1 md:order-2 mt-6 md:-mt-12">
                            <img src="/assets/images/cta-rightimg.webp"
                                class="hidden md:block w-[560px] h-[471px]"
                                alt="Customer Experience" />
                            <img src="/assets/images/cta-rightimg-mobile.webp"
                                class="block md:hidden w-full max-w-[300px] h-auto"
                                alt="Customer Experience" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
