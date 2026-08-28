<?php
require_once(__DIR__ . "/industry-page-data-es.php");

$page = industry_page_data_es($industrySlug ?? "");
if (!$page) {
    http_response_code(404);
    include(__DIR__ . "/../../404.php");
    return;
}

$siteLanguage = "es";
$pageTitle = $page["meta_title"];
$page_title = $pageTitle;
$metaDescription = $page["meta_description"];
$meta_description = $metaDescription;
$metaKeywords = $page["keywords"];
$pageUrl = "/es/industrias/" . $page["slug"] . "/";
$languageSwitchHrefEn = "/industries/" . $page["english_slug"];
$languageAlternates = [
    "en" => "https://empireonecx.com/industries/" . $page["english_slug"],
    "es" => "https://empireonecx.com/es/industrias/" . $page["slug"] . "/",
    "x-default" => "https://empireonecx.com/industries/" . $page["english_slug"],
];

include(__DIR__ . "/../../inc/header.php");

$services = [];
foreach ($page["services"] as $title => $items) {
    $services[] = [
        "title" => $title,
        "items" => explode("|", $items),
    ];
}

$segments = array_map(function ($row) {
    return explode("|", $row, 2);
}, explode(";", $page["segments"]));

$faqs = [
    [
        "¿Qué es BPO para " . strtolower($page["name"]) . "?",
        "El BPO para " . strtolower($page["name"]) . " consiste en tercerizar atención al cliente, back office, datos o trabajo operativo con un equipo especializado. Aporta capacidad entrenada sin construir cada función internamente.",
    ],
    [
        "¿Qué procesos de " . strtolower($page["name"]) . " se pueden tercerizar?",
        "Las opciones comunes incluyen " . strtolower(implode(", ", array_slice(array_keys($page["services"]), 0, 5))) . ". El alcance se ajusta a sus sistemas, controles y objetivos de servicio.",
    ],
    [
        "¿Cómo reduce costos el outsourcing para " . strtolower($page["name"]) . "?",
        "Convierte parte de los costos fijos de contratación, capacitación, gestión y tecnología en un modelo de servicio más flexible. Los resultados dependen del alcance, la complejidad, los horarios y la estructura del equipo.",
    ],
    [
        "¿EmpireOneCX puede trabajar con nuestros sistemas actuales?",
        "Sí. Los equipos pueden trabajar en plataformas CRM, ticketing, ERP, comunicación y herramientas de la industria aprobadas por su empresa. El acceso, la capacitación, los flujos y los reportes se acuerdan antes del lanzamiento.",
    ],
    [
        "¿Cómo protegen la calidad y la experiencia del cliente?",
        "Los programas usan niveles de servicio definidos, revisiones de calidad, coaching, reglas de escalamiento y reportes. Los flujos de trabajo y la voz de marca se calibran con su equipo.",
    ],
    [
        "¿Con qué rapidez puede escalar un programa BPO para " . strtolower($page["name"]) . "?",
        "El tiempo depende de la complejidad del flujo, contratación, accesos, capacitación y cumplimiento. La mayoría de los lanzamientos avanzan por descubrimiento, transferencia de conocimiento, producción controlada y escalamiento planificado.",
    ],
];

$serviceIcons = ["fa-headset", "fa-gears", "fa-file-circle-check", "fa-users-gear", "fa-database", "fa-chart-line"];
$assurance = [
    ["fa-shield-halved", "Entrega segura", "Accesos basados en roles y flujos monitoreados protegen los datos operativos."],
    ["fa-list-check", "Gestión de calidad", "Scorecards, coaching y revisiones mantienen un servicio consistente."],
    ["fa-chart-column", "Visibilidad de SLA", "Los reportes monitorean volumen, calidad y tiempos de respuesta."],
    ["fa-user-graduate", "Capacitación por industria", "Los equipos aprenden sus sistemas, políticas y terminología."],
    ["fa-arrows-rotate", "Operaciones escalables", "La capacidad se ajusta para picos, atrasos y crecimiento."],
];
?>

<link rel="stylesheet" href="/assets/css/industry-detail.min.css?v=20260804-1">

<main class="industry-detail-page">
    <section class="industry-detail-hero" style="background-image:url('/assets/images/<?= htmlspecialchars($page["image"], ENT_QUOTES, "UTF-8") ?>')">
        <div class="container mx-auto px-4 industry-detail-hero-grid">
            <div>
                <nav class="industry-detail-breadcrumb" aria-label="Ruta de navegación">
                    <a href="/es/industrias/">Industrias</a><span>/</span>
                    <span><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO</span>
                </nav>
                <p class="industry-detail-eyebrow"><?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> BPO</p>
                <h1><?= htmlspecialchars($page["hero"], ENT_QUOTES, "UTF-8") ?></h1>
                <p class="industry-detail-hero-copy">
                    EmpireOneCX ayuda a <?= htmlspecialchars($page["audience"], ENT_QUOTES, "UTF-8") ?> a <?= htmlspecialchars($page["outcome"], ENT_QUOTES, "UTF-8") ?> mediante equipos capacitados y flujos de trabajo asistidos por IA.
                </p>
                <div class="industry-detail-trust" aria-label="Capacidades del servicio">
                    <span><i class="fa-solid fa-circle-check"></i> Cobertura 24/7 disponible</span>
                    <span><i class="fa-solid fa-circle-check"></i> Seguridad ISO 27001</span>
                    <span><i class="fa-solid fa-circle-check"></i> Soporte multicanal</span>
                </div>
                <div class="industry-detail-actions">
                    <a class="industry-detail-btn industry-detail-btn-primary" href="/es/contacto/">Solicite una consulta gratuita</a>
                    <a class="industry-detail-btn" href="#industry-services">Explore servicios para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?></a>
                </div>
            </div>
            <aside class="industry-detail-form" aria-label="Formulario de consulta BPO para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?>">
                <p class="industry-detail-form-title">Solicite una consulta BPO gratuita para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?></p>
                <?php include(__DIR__ . "/../../inc/contact-form.php"); ?>
            </aside>
        </div>
    </section>

    <section class="industry-detail-section">
        <div class="container mx-auto px-4">
            <div class="industry-detail-intro">
                <div>
                    <p class="industry-detail-label">Por qué importa el outsourcing especializado</p>
                    <h2 class="industry-detail-title">Las operaciones de <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> son cada vez más complejas</h2>
                </div>
                <div class="industry-detail-prose">
                    <p><?= htmlspecialchars($page["challenge"], ENT_QUOTES, "UTF-8") ?></p>
                    <p>El BPO para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> agrega capacidad entrenada para atención al cliente y trabajo back office. EmpireOneCX alinea la entrega con sus sistemas, niveles de servicio, estándares de marca y necesidades de reporte.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="industry-detail-soft" aria-label="Capacidades BPO para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?>">
        <div class="container mx-auto px-4">
            <div class="industry-detail-stats">
                <div class="industry-detail-stat"><strong>24/7</strong><span>cobertura disponible en distintas zonas horarias</span></div>
                <div class="industry-detail-stat"><strong>Omnicanal</strong><span>voz, correo electrónico, chat y mensajería</span></div>
                <div class="industry-detail-stat"><strong>QA</strong><span>monitoreo, coaching y controles de escalamiento</span></div>
                <div class="industry-detail-stat"><strong>Escalable</strong><span>capacidad para picos, atrasos y crecimiento</span></div>
            </div>
        </div>
    </section>

    <section id="industry-services" class="industry-detail-section industry-detail-soft">
        <div class="container mx-auto px-4">
            <p class="industry-detail-label">Servicios BPO para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?></p>
            <h2 class="industry-detail-title">Qué gestionamos para organizaciones de <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?></h2>
            <div class="industry-detail-grid">
                <?php foreach ($services as $index => $service): ?>
                <article class="industry-detail-card">
                    <div class="industry-detail-icon"><i class="fa-solid <?= $serviceIcons[$index] ?>"></i></div>
                    <div>
                        <h3><?= htmlspecialchars($service["title"], ENT_QUOTES, "UTF-8") ?></h3>
                        <h4>Qué incluye</h4>
                        <ul class="industry-detail-list">
                            <?php foreach ($service["items"] as $item): ?>
                            <li><?= htmlspecialchars($item, ENT_QUOTES, "UTF-8") ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="industry-detail-section industry-detail-dark">
        <div class="container mx-auto px-4">
            <p class="industry-detail-label">Garantía operativa</p>
            <h2 class="industry-detail-title industry-detail-title-light">Entrega controlada. Responsabilidad clara.</h2>
            <div class="industry-detail-assurance">
                <?php foreach ($assurance as $item): ?>
                <article class="industry-detail-card">
                    <div class="industry-detail-icon"><i class="fa-solid <?= $item[0] ?>"></i></div>
                    <h3><?= htmlspecialchars($item[1], ENT_QUOTES, "UTF-8") ?></h3>
                    <p><?= htmlspecialchars($item[2], ENT_QUOTES, "UTF-8") ?></p>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="industry-detail-section">
        <div class="container mx-auto px-4">
            <div class="industry-detail-intro">
                <div>
                    <p class="industry-detail-label">Por qué EmpireOneCX</p>
                    <h2 class="industry-detail-title">Outsourcing para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?> sin perder control</h2>
                </div>
                <div class="industry-detail-prose">
                    <p><strong>Equipos alineados a su industria:</strong> La capacitación cubre sus sistemas, terminología, políticas y recorrido del cliente.</p>
                    <p><strong>IA con criterio humano:</strong> La automatización apoya el trabajo repetitivo mientras las personas gestionan decisiones, contexto y empatía.</p>
                    <p><strong>Desempeño visible:</strong> KPIs, niveles de servicio y reportes mantienen la entrega medible.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="industry-detail-section industry-detail-soft">
        <div class="container mx-auto px-4">
            <p class="industry-detail-label">Segmentos de <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?></p>
            <h2 class="industry-detail-title">A quiénes apoyamos</h2>
            <p class="industry-detail-hero-copy" style="color:#55535e">Nuestros <?= htmlspecialchars($page["primary_keyword"], ENT_QUOTES, "UTF-8") ?> se adaptan a distintos modelos operativos, grupos de clientes y requisitos de flujo de trabajo.</p>
            <div class="industry-detail-table">
                <table>
                    <thead><tr><th>Segmento</th><th>Enfoque de servicio</th></tr></thead>
                    <tbody>
                        <?php foreach ($segments as $segment): ?>
                        <tr><td><?= htmlspecialchars($segment[0], ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($segment[1], ENT_QUOTES, "UTF-8") ?></td></tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="industry-detail-related">
                <a href="/es/soluciones/bpo-ia-automatizacion/">Explore nuestras soluciones BPO completas</a>
                <a href="/es/soluciones/soporte-back-office/">Servicios de soporte back office</a>
                <a href="/es/soluciones/soluciones-de-experiencia-del-cliente/">Soluciones de experiencia del cliente</a>
                <a href="/es/industrias/">Ver todas las industrias</a>
            </div>
        </div>
    </section>

    <section class="industry-detail-section industry-detail-dark">
        <div class="container mx-auto px-4 industry-detail-faq-layout">
            <div>
                <p class="industry-detail-label">Preguntas frecuentes</p>
                <h2 class="industry-detail-title industry-detail-title-light">FAQs sobre BPO para <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?></h2>
                <div class="industry-detail-prose"><p>Respuestas directas para líderes que evalúan <?= htmlspecialchars($page["primary_keyword"], ENT_QUOTES, "UTF-8") ?>.</p></div>
            </div>
            <div class="industry-detail-faq-list">
                <?php foreach ($faqs as $index => $faq): ?>
                <div class="industry-detail-faq-item<?= $index === 0 ? " is-open" : "" ?>">
                    <button class="industry-detail-faq-toggle" type="button" aria-expanded="<?= $index === 0 ? "true" : "false" ?>">
                        <span><?= htmlspecialchars($faq[0], ENT_QUOTES, "UTF-8") ?></span>
                        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                    </button>
                    <div class="industry-detail-faq-answer"><?= htmlspecialchars($faq[1], ENT_QUOTES, "UTF-8") ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="industry-detail-section">
        <div class="container mx-auto px-4">
            <div class="industry-detail-cta">
                <h2>¿Listo para fortalecer sus operaciones de <?= htmlspecialchars($page["name"], ENT_QUOTES, "UTF-8") ?>?</h2>
                <p>Diseñemos un modelo BPO alrededor de sus flujos, expectativas de clientes, sistemas, controles de riesgo y objetivos de crecimiento.</p>
                <div class="industry-detail-actions">
                    <a class="industry-detail-btn industry-detail-btn-primary" href="/es/contacto/">Solicite una consulta gratuita</a>
                    <a class="industry-detail-btn" href="https://calendly.com/empireonegroup-marketing/30min" target="_blank" rel="noopener">Agende una llamada de 30 minutos</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script defer src="/assets/js/industry-detail.js?v=20260821-1"></script>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Servicios BPO para " . $page["name"],
    "serviceType" => "Business Process Outsourcing para " . $page["name"],
    "provider" => [
        "@type" => "Organization",
        "name" => "EmpireOneCX",
        "url" => "https://empireonecx.com",
    ],
    "description" => $page["meta_description"],
    "url" => "https://empireonecx.com/es/industrias/" . $page["slug"] . "/",
    "areaServed" => "Worldwide",
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(function ($faq) {
        return [
            "@type" => "Question",
            "name" => $faq[0],
            "acceptedAnswer" => ["@type" => "Answer", "text" => $faq[1]],
        ];
    }, $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Industrias", "item" => "https://empireonecx.com/es/industrias/"],
        ["@type" => "ListItem", "position" => 2, "name" => $page["name"] . " BPO", "item" => "https://empireonecx.com/es/industrias/" . $page["slug"] . "/"],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../../inc/footer.php"); ?>
