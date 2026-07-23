<?php
    require __DIR__ . "/../../insights/posts.php";

    $allPosts = getInsightPosts();

    $spanishPostCopy = [
        'ai-in-customer-experience-automation' => [
            'title' => 'IA en la experiencia del cliente: que debe automatizarse',
            'imageAlt' => 'Automatizacion de experiencia del cliente asistida por IA',
        ],
        'benefits-of-outsourcing-customer-support' => [
            'title' => '7 beneficios clave de tercerizar el soporte al cliente',
            'imageAlt' => 'Equipo de outsourcing de soporte al cliente',
        ],
        'dedicated-vs-shared-bpo-teams' => [
            'title' => 'Equipos BPO dedicados vs. compartidos: cual modelo conviene',
            'imageAlt' => 'Equipo BPO dedicado colaborando en operaciones de clientes',
        ],
        'how-much-does-bpo-cost-2026' => [
            'title' => 'Cuanto cuesta el BPO en 2026',
            'imageAlt' => 'Planificacion de costos y precios de outsourcing BPO',
        ],
        'types-of-bpo' => [
            'title' => 'Tipos de BPO: categorias de business process outsourcing',
            'imageAlt' => 'Tipos de servicios de business process outsourcing',
        ],
        'what-is-bpo' => [
            'title' => 'Que es BPO: business process outsourcing explicado',
            'imageAlt' => 'Operaciones de business process outsourcing',
        ],
        'what-is-customer-experience-cx' => [
            'title' => 'Que es la experiencia del cliente (CX): guia esencial',
            'imageAlt' => 'Equipo de soporte de experiencia del cliente',
        ],
    ];

    $spanishCategoryCopy = [
        'ai' => ['label' => 'IA', 'slug' => 'ia'],
        'customer-experience' => ['label' => 'Experiencia del cliente', 'slug' => 'experiencia-del-cliente'],
        'customer-support' => ['label' => 'Soporte al cliente', 'slug' => 'soporte-al-cliente'],
        'bpo' => ['label' => 'BPO', 'slug' => 'bpo'],
        'bpo-strategy' => ['label' => 'Estrategia BPO', 'slug' => 'estrategia-bpo'],
        'pricing' => ['label' => 'Precios', 'slug' => 'precios'],
        'cx' => ['label' => 'CX', 'slug' => 'cx'],
    ];

    $spanishToEnglishCategorySlug = [];
    foreach ($spanishCategoryCopy as $englishSlug => $categoryCopy) {
        $spanishToEnglishCategorySlug[$categoryCopy['slug']] = $englishSlug;
    }

    foreach ($allPosts as $slug => &$post) {
        if (isset($spanishPostCopy[$slug])) {
            $post['title'] = $spanishPostCopy[$slug]['title'];
            $post['imageAlt'] = $spanishPostCopy[$slug]['imageAlt'];
        }
    }
    unset($post);

    $categories = [];
    foreach (getInsightCategories($allPosts) as $englishCategorySlug => $categoryName) {
        $categoryCopy = $spanishCategoryCopy[$englishCategorySlug] ?? [
            'label' => $categoryName,
            'slug' => $englishCategorySlug,
        ];
        $categories[$categoryCopy['slug']] = $categoryCopy['label'];
    }

    $selectedCategory = $_GET['categoria'] ?? '';
    $selectedEnglishCategory = $spanishToEnglishCategorySlug[$selectedCategory] ?? $selectedCategory;
    $posts = $selectedEnglishCategory ? array_filter($allPosts, function ($post) use ($selectedEnglishCategory) {
        foreach (normalizeInsightCategories($post) as $category) {
            if (getInsightCategorySlug($category) === $selectedEnglishCategory) {
                return true;
            }
        }

        return false;
    }) : $allPosts;

    $latestPost = reset($allPosts);

    function formatSpanishInsightDate($date)
    {
        $timestamp = strtotime($date);
        if (!$timestamp) {
            return $date;
        }

        $months = [
            1 => 'ene', 2 => 'feb', 3 => 'mar', 4 => 'abr', 5 => 'may', 6 => 'jun',
            7 => 'jul', 8 => 'ago', 9 => 'sep', 10 => 'oct', 11 => 'nov', 12 => 'dic',
        ];

        return date('j', $timestamp) . ' ' . $months[(int) date('n', $timestamp)] . ', ' . date('Y', $timestamp);
    }

    function getSpanishInsightPrimaryCategory($post, $spanishCategoryCopy)
    {
        $primaryCategory = getInsightPrimaryCategory($post);
        $englishSlug = getInsightCategorySlug($primaryCategory);
        return $spanishCategoryCopy[$englishSlug]['label'] ?? $primaryCategory;
    }

    $siteLanguage = "es";
    $baseHref = "/";
    $page_title = "Recursos de CX y BPO | EmpireOneCX";
    $meta_description = "Lea recursos de EmpireOneCX sobre outsourcing BPO, experiencia del cliente, automatizacion con IA, soporte escalable y estrategias operativas.";
    $metaKeywords = "recursos BPO, articulos BPO, experiencia del cliente, outsourcing en espanol, automatizacion con IA, soporte al cliente, estrategia BPO";
    $languageSwitchHrefEn = "/insights";
    $languageAlternates = [
        "en" => "https://empireonecx.com/insights",
        "es" => "https://empireonecx.com/es/recursos/",
        "x-default" => "https://empireonecx.com/insights",
    ];
    include(__DIR__ . "/../../inc/header.php");
?>

<main style="background-color: #000;">
    <section class="hero-section mybanner relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 11rem;padding-bottom: 52px;">
        <div class="absolute bg-black/50 -z-10" style="width:1920px; height:611px;"></div>
        <div class="container mx-auto w-full relative z-10">
            <div class="mainherossec flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
                <div class="lefthers w-full lg:w-1/2 fade-zoom-reveal">
                    <div class="overflow-hidden rounded-[16px]">
                        <img src="/assets/images/newsinsight.webp"
                            alt="Recursos e insights de EmpireOneCX"
                            class="w-[660px] h-[400px] object-cover block">
                    </div>
                </div>

                <div class="righthero w-full lg:w-1/2">
                    <div class="flex items-center gap-3">
                        <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                                Noticias y recursos de EmpireOneCX
                            </span>
                        </p>
                    </div>

                    <h1 class="w-full solutions-hero-headingss animate-reveal heading-underline text-left text-[40px] md:text-[48px] lg:text-[46px] leading-[1.2] mb-5 text-white">
                        Recursos para mejorar CX, BPO y crecimiento operativo
                    </h1>
                    <?php if ($latestPost): ?>
                        <div class="bottombtn animate-reveal delay-4 text-left">
                            <button onclick="window.location.href='<?= htmlspecialchars($latestPost['url'], ENT_QUOTES, 'UTF-8') ?>'" class="bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-10 text-[16px] hover:opacity-90 transition-opacity shadow-xl" style="border-radius: 8px;">
                                Leer el articulo mas reciente
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <h2 class="newstext text-[32px] font-bold mb-8 text-gray-900 scroll-animate">Explore todos los articulos</h2>

            <div class="mybtnanchor flex flex-wrap gap-3 mb-8">
                <a href="/es/recursos/" class="<?= $selectedCategory === '' ? 'btn-gradient text-white' : 'border border-gray-200 text-[rgba(0,0,0,1)]' ?> px-4 py-2 rounded-md text-[16px] leading-[24px] font-medium">Todos</a>
                <?php foreach ($categories as $categorySlug => $categoryName): ?>
                    <a href="/es/recursos/?categoria=<?= htmlspecialchars($categorySlug, ENT_QUOTES, 'UTF-8') ?>" class="<?= $selectedCategory === $categorySlug ? 'btn-gradient text-white' : 'border border-gray-200 text-[rgba(0,0,0,1)]' ?> px-4 py-2 rounded-md text-[16px] leading-[24px] font-medium">
                        <?= htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <hr class="border-gray-100 mb-10">

            <?php if (empty($posts)): ?>
                <div class="rounded-[8px] border border-gray-200 p-8 text-[18px] leading-[28px] text-[#3C3B47]">
                    Aun no hay articulos en esta categoria.
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
                                        <?= htmlspecialchars(getSpanishInsightPrimaryCategory($post, $spanishCategoryCopy), ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                </span>
                                <time datetime="<?= htmlspecialchars($post['datePublished'], ENT_QUOTES, 'UTF-8') ?>" class="text-[#000] text-[16px]">
                                    <?= htmlspecialchars(formatSpanishInsightDate($post['datePublished']), ENT_QUOTES, 'UTF-8') ?>
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
                                Lidera el futuro de la experiencia del cliente con
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-normal">EmpireOne</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Porque sus clientes merecen nada menos.
                            </p>
                            <div class="future-btn flex">
                                <a href="/contact" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Hablemos de su plan de crecimiento
                                </a>
                            </div>
                        </div>

                        <div class="cta-rightside flex justify-center order-1 md:order-2 mt-6 md:-mt-12">
                            <img src="/assets/images/cta-rightimg.webp"
                                class="hidden md:block w-[560px] h-[471px]"
                                alt="Experiencia del cliente" />
                            <img src="/assets/images/cta-rightimg-mobile.webp"
                                class="block md:hidden w-full max-w-[300px] h-auto"
                                alt="Experiencia del cliente" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include(__DIR__ . "/../../inc/footer.php"); ?>
