<?php
$siteLanguage = "es";
$page_title = "Centro de FAQ sobre BPO, CX y soporte con IA | EmpireOneCX";
$metaDescription = "Respuestas claras sobre BPO, outsourcing CX, servicios de call center, soporte asistido por IA, precios, seguridad, modelos de equipo e implementación.";
$metaKeywords = "FAQ BPO, FAQ outsourcing CX, FAQ call center, FAQ soporte IA, preguntas de outsourcing, respuestas sobre business process outsourcing";
$pageUrl = "/es/faq/";
$languageSwitchHrefEn = "/faq/";
$languageAlternates = [
    "en" => "https://empireonecx.com/faq/",
    "es" => "https://empireonecx.com/es/faq/",
    "x-default" => "https://empireonecx.com/faq/",
];

$faqTopics = [
    [
        "icon" => "fa-diagram-project",
        "title" => "FAQ de BPO",
        "description" => "Modelos de business process outsourcing, servicios, precios, implementación, gobernanza y selección de proveedores.",
        "url" => "/es/faq/bpo-faq/",
    ],
    [
        "icon" => "fa-headset",
        "title" => "FAQ de outsourcing CX",
        "description" => "Equipos de experiencia del cliente, soporte omnicanal, calidad de servicio, escalabilidad y gestión del recorrido del cliente.",
        "url" => "/es/faq/cx-outsourcing-faq/",
    ],
    [
        "icon" => "fa-phone-volume",
        "title" => "FAQ de call center",
        "description" => "Operaciones inbound y outbound, dotación, cobertura, métricas de desempeño, tecnología y aseguramiento de calidad.",
        "url" => "/es/faq/call-center-faq/",
    ],
    [
        "icon" => "fa-robot",
        "title" => "FAQ de soporte con IA",
        "description" => "Soporte al cliente asistido por IA, automatización, supervisión humana, sistemas de conocimiento, seguridad y despliegue responsable.",
        "url" => "/es/faq/ai-support-faq/",
    ],
];

$faqs = [
    [
        "category" => "BPO",
        "question" => "¿Qué es business process outsourcing, o BPO?",
        "answer" => "Business process outsourcing es la práctica de asignar operaciones empresariales seleccionadas a un especialista externo. BPO puede cubrir soporte al cliente, administración back-office, procesos financieros, procesamiento de datos, aseguramiento de calidad, reclutamiento y otros flujos de trabajo repetibles.",
        "links" => [
            ["/insights/what-is-bpo/", "Leer la guía completa de BPO"],
            ["/es/soluciones/bpo-ia-automatizacion/", "Explorar soluciones BPO"],
        ],
    ],
    [
        "category" => "CX",
        "question" => "¿Qué es el outsourcing de experiencia del cliente?",
        "answer" => "El outsourcing de experiencia del cliente entrega a un equipo externo la responsabilidad de interacciones seleccionadas con clientes u operaciones de soporte. Los servicios pueden incluir teléfono, email, chat, mensajería social, soporte técnico, retención, incorporación y gestión de retroalimentación del cliente.",
        "links" => [
            ["/es/soluciones/soluciones-de-experiencia-del-cliente/", "Explorar soluciones de experiencia del cliente"],
            ["/insights/what-is-customer-experience-cx/", "Aprender qué significa experiencia del cliente"],
        ],
    ],
    [
        "category" => "Call Center",
        "question" => "¿Qué es el outsourcing de call center?",
        "answer" => "El outsourcing de call center usa un proveedor externo para gestionar operaciones de voz inbound u outbound. Un contact center externalizado moderno también puede apoyar email, chat en vivo, SMS, canales sociales, gestión de fuerza laboral, analítica y aseguramiento de calidad.",
        "links" => [
            ["/es/soluciones/outsourcing-call-center-contact-center/", "Ver servicios de soporte omnicanal"],
        ],
    ],
    [
        "category" => "Soporte con IA",
        "question" => "¿Qué es el soporte al cliente asistido por IA?",
        "answer" => "El soporte al cliente asistido por IA combina profesionales de servicio capacitados con herramientas para enrutamiento, resúmenes, recuperación de conocimiento, monitoreo de calidad, automatización de flujos de trabajo y autoservicio. Los agentes humanos siguen siendo responsables del criterio, la empatía, las excepciones y las conversaciones sensibles.",
        "links" => [
            ["/insights/ai-in-customer-experience-automation/", "Ver dónde la IA debe apoyar CX"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "¿Qué procesos empresariales se pueden externalizar?",
        "answer" => "Los procesos que suelen externalizarse incluyen servicio al cliente, soporte técnico, entrada de datos, procesamiento de documentos, gestión de pedidos, apoyo de cuentas por pagar y por cobrar, bookkeeping, coordinación de reclutamiento, monitoreo de calidad, soporte de reclamaciones y administración específica por industria.",
        "links" => [
            ["/es/soluciones/", "Ver todas las soluciones de outsourcing"],
            ["/es/industrias/", "Explorar servicios por industria"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "¿Cuál es la diferencia entre equipos BPO dedicados y compartidos?",
        "answer" => "Un equipo dedicado trabaja principalmente para un cliente y ofrece mayor control de procesos y alineación con la marca. Un equipo compartido apoya a varios clientes y suele ser mejor para volúmenes bajos o variables. Los modelos híbridos combinan propiedad dedicada con recursos especializados compartidos.",
        "links" => [
            ["/insights/dedicated-vs-shared-bpo-teams/", "Comparar equipos dedicados y compartidos"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "¿Cuánto cuesta el outsourcing BPO?",
        "answer" => "Por lo general, el precio de BPO depende de la complejidad del servicio, ubicación, horarios de operación, idioma, modelo de dotación, tecnología, requisitos de cumplimiento y volumen esperado. Los proveedores pueden cobrar por agente, por hora, por transacción o según un resultado acordado.",
        "links" => [
            ["/insights/how-much-does-bpo-cost-2026/", "Revisar factores de precio BPO"],
        ],
    ],
    [
        "category" => "CX",
        "question" => "¿Cómo se mide la calidad del servicio al cliente externalizado?",
        "answer" => "La calidad suele medirse mediante satisfacción del cliente, resolución en el primer contacto, tiempo de respuesta, tiempo promedio de gestión, puntajes de calidad, tasas de escalación, adherencia, precisión y esfuerzo del cliente. La scorecard correcta depende del recorrido del cliente y del objetivo de negocio.",
        "links" => [
            ["/es/soluciones/outsourcing-control-calidad/", "Explorar outsourcing de aseguramiento de calidad"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "¿Cuánto tiempo toma lanzar un equipo externalizado?",
        "answer" => "El tiempo de lanzamiento depende de contratación, capacitación, integraciones, complejidad de procesos, revisiones de seguridad y escala requerida. EmpireOneCX puede lanzar algunos programas estándar en tan solo 72 horas, mientras que los programas complejos o regulados requieren un plan de implementación estructurado.",
        "links" => [
            ["/es/contacto/", "Conversar sobre un cronograma de implementación"],
        ],
    ],
    [
        "category" => "Seguridad",
        "question" => "¿Cómo se protegen los datos en una operación externalizada?",
        "answer" => "Un programa de outsourcing seguro usa controles de acceso, cifrado, procedimientos documentados, capacitación de la fuerza laboral, monitoreo, respuesta a incidentes y salvaguardas contractuales. Los requisitos deben alinearse con los datos involucrados y con marcos como SOC 2, ISO 27001, HIPAA, PCI DSS o GDPR.",
        "links" => [
            ["/compliance-security/", "Revisar controles de cumplimiento y seguridad"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "¿Cuál es la diferencia entre outsourcing onshore, nearshore y offshore?",
        "answer" => "El outsourcing onshore mantiene la entrega en el país del cliente. El outsourcing nearshore usa un país cercano con mayor alineación horaria o cultural. El outsourcing offshore usa un mercado de entrega más distante y puede ofrecer mayor acceso a talento, cobertura extendida y ventajas de costo.",
        "links" => [
            ["/insights/types-of-bpo/", "Comparar los principales tipos de BPO"],
            ["/es/presencia-global/", "Explorar ubicaciones de entrega"],
        ],
    ],
    [
        "category" => "BPO",
        "question" => "¿Cómo debe elegir una empresa un socio de outsourcing BPO o CX?",
        "answer" => "Evalúe experiencia relevante, modelo operativo, controles de seguridad, contratación y capacitación, compatibilidad tecnológica, reportes, gestión de calidad, continuidad de negocio, transparencia de precios y capacidad de escalar. Las referencias y un piloto claramente definido pueden reducir el riesgo de selección.",
        "links" => [
            ["/es/sobre-nosotros/", "Conocer EmpireOneCX"],
            ["/es/casos-de-estudio/", "Ver resultados de clientes"],
        ],
    ],
];

include(__DIR__ . "/../../inc/header.php");
?>

<link rel="stylesheet" href="/assets/css/extracted/faq.css?v=20260821-1">

<main class="faq-hub">
    <section class="faq-hub-hero">
        <div class="container mx-auto px-4">
            <div class="faq-hub-hero__inner">
                <p class="faq-hub-hero__eyebrow faq-hub-hero__reveal delay-1">Centro de conocimiento FAQ</p>
                <h1 class="faq-hub-hero__reveal delay-2">Centro de FAQ sobre BPO, CX, call center y <span>soporte con IA</span></h1>
                <p class="faq-hub-hero__copy faq-hub-hero__reveal delay-3">Respuestas directas y prácticas a preguntas comunes sobre outsourcing de experiencia del cliente y operaciones empresariales. Busque en el centro o explore por tema.</p>
                <div class="faq-hub-search-wrap faq-hub-hero__reveal delay-4">
                    <label class="faq-hub-search">
                        <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                        <input id="faq-hub-search" type="search" placeholder="Buscar preguntas sobre outsourcing..." autocomplete="off" aria-autocomplete="list" aria-controls="faq-hub-search-suggestions" aria-expanded="false">
                    </label>
                    <div class="faq-hub-search-suggestions" id="faq-hub-search-suggestions" role="listbox"></div>
                    <p class="faq-hub-search-status" id="faq-hub-search-status" aria-live="polite"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-hub-section faq-hub-section--soft">
        <div class="container mx-auto px-4">
            <p class="faq-hub-section-label">Explorar por tema</p>
            <h2 class="faq-hub-heading">Cuatro colecciones FAQ enfocadas</h2>
            <p class="faq-hub-intro">Este centro organiza las preguntas que compradores y líderes de operaciones hacen al evaluar equipos externalizados, contact centers y soporte asistido por IA.</p>
            <div class="faq-hub-topics">
                <?php foreach ($faqTopics as $topic): ?>
                <a class="faq-topic fade-zoom-reveal" href="<?= htmlspecialchars($topic["url"], ENT_QUOTES, "UTF-8") ?>">
                    <div class="faq-topic__top">
                        <span class="faq-topic__icon"><i class="fa-solid <?= htmlspecialchars($topic["icon"], ENT_QUOTES, "UTF-8") ?>" aria-hidden="true"></i></span>
                    </div>
                    <h3><?= htmlspecialchars($topic["title"], ENT_QUOTES, "UTF-8") ?></h3>
                    <p><?= htmlspecialchars($topic["description"], ENT_QUOTES, "UTF-8") ?></p>
                    <span class="faq-topic__button">
                        Explorar <?= htmlspecialchars($topic["title"], ENT_QUOTES, "UTF-8") ?>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="faq-hub-section" id="faq-hub-results">
        <div class="container mx-auto px-4 faq-hub-layout">
            <aside class="faq-hub-filter">
                <p class="faq-hub-section-label">Respuestas rápidas</p>
                <h2>Fundamentos de outsourcing</h2>
                <p>Seleccione un tema o use el campo de búsqueda. Cada respuesta está escrita para entenderse por sí sola y enlaza a un recurso más detallado de EmpireOneCX cuando está disponible.</p>
                <div class="faq-filter-buttons" aria-label="Filtrar temas FAQ">
                    <?php
                    $categories = ["Todos", "BPO", "CX", "Call Center", "Soporte con IA", "Seguridad"];
                    foreach ($categories as $category):
                    ?>
                    <button class="faq-filter-button<?= $category === "Todos" ? " is-active" : "" ?>" type="button" data-category="<?= htmlspecialchars($category, ENT_QUOTES, "UTF-8") ?>">
                        <?= htmlspecialchars($category, ENT_QUOTES, "UTF-8") ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </aside>

            <div>
                <div class="faq-hub-list" id="faq-hub-list">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <article class="faq-hub-item<?= $index === 0 ? " is-open" : "" ?>" data-category="<?= htmlspecialchars($faq["category"], ENT_QUOTES, "UTF-8") ?>" data-search="<?= htmlspecialchars(strtolower($faq["question"] . " " . $faq["answer"] . " " . $faq["category"]), ENT_QUOTES, "UTF-8") ?>">
                        <button class="faq-hub-question" type="button" aria-expanded="<?= $index === 0 ? "true" : "false" ?>">
                            <span>
                                <small><?= htmlspecialchars($faq["category"], ENT_QUOTES, "UTF-8") ?></small>
                                <strong><?= htmlspecialchars($faq["question"], ENT_QUOTES, "UTF-8") ?></strong>
                            </span>
                            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="faq-hub-answer">
                            <p><?= htmlspecialchars($faq["answer"], ENT_QUOTES, "UTF-8") ?></p>
                            <?php if (!empty($faq["links"])): ?>
                            <div class="faq-hub-links">
                                <?php foreach ($faq["links"] as $link): ?>
                                <a href="<?= htmlspecialchars($link[0], ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($link[1], ENT_QUOTES, "UTF-8") ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
                <div class="faq-hub-empty" id="faq-hub-empty">No se encontraron preguntas coincidentes. Pruebe con un término de búsqueda más amplio.</div>
            </div>
        </div>
    </section>

    <section class="faq-hub-section faq-hub-section--soft">
        <div class="container mx-auto px-4">
            <div class="faq-hub-cta">
                <div class="faq-hub-cta__content">
                    <h2>¿Tiene una pregunta específica sobre su operación?</h2>
                    <p>Converse con un especialista de EmpireOneCX sobre flujos de trabajo, niveles de servicio, requisitos de cumplimiento, modelo de dotación y objetivos de implementación.</p>
                    <div class="faq-hub-cta__actions">
                        <a class="faq-hub-button faq-hub-button--primary" href="/es/contacto/">Preguntar a nuestro equipo <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                        <a class="faq-hub-button" href="/es/recursos/">Explorar recursos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
(function () {
    window.setTimeout(function () {
        document.querySelectorAll(".faq-hub-hero__reveal").forEach(function (element) {
            element.classList.add("is-revealed");
        });
    }, 1400);

    const items = Array.from(document.querySelectorAll(".faq-hub-item"));
    const search = document.getElementById("faq-hub-search");
    const results = document.getElementById("faq-hub-results");
    const status = document.getElementById("faq-hub-search-status");
    const suggestions = document.getElementById("faq-hub-search-suggestions");
    const empty = document.getElementById("faq-hub-empty");
    const filters = Array.from(document.querySelectorAll(".faq-filter-button"));
    let activeCategory = "Todos";
    let activeSuggestion = -1;

    function applyFilters() {
        const query = search.value.trim().toLowerCase();
        let visibleCount = 0;
        let firstVisible = null;

        items.forEach(function (item) {
            const categoryMatch = activeCategory === "Todos" || item.dataset.category === activeCategory;
            const searchMatch = !query || item.dataset.search.includes(query);
            const visible = categoryMatch && searchMatch;
            item.hidden = !visible;
            if (visible) {
                visibleCount += 1;
                if (!firstVisible) firstVisible = item;
            }
        });

        empty.classList.toggle("is-visible", visibleCount === 0);
        status.textContent = query
            ? visibleCount + (visibleCount === 1 ? " pregunta coincidente encontrada." : " preguntas coincidentes encontradas.")
            : "";

        if (query && firstVisible) {
            firstVisible.classList.add("is-open");
            firstVisible.querySelector(".faq-hub-question").setAttribute("aria-expanded", "true");
        }

        return visibleCount;
    }

    function closeSuggestions() {
        suggestions.classList.remove("is-visible");
        search.setAttribute("aria-expanded", "false");
        activeSuggestion = -1;
    }

    function renderSuggestions() {
        const query = search.value.trim().toLowerCase();
        suggestions.replaceChildren();
        activeSuggestion = -1;

        if (query.length < 2) {
            closeSuggestions();
            return;
        }

        const matches = items.filter(function (item) {
            return item.dataset.search.includes(query);
        }).slice(0, 6);

        if (!matches.length) {
            const message = document.createElement("p");
            message.className = "faq-hub-search-suggestions__empty";
            message.textContent = "No se encontraron preguntas coincidentes.";
            suggestions.appendChild(message);
        } else {
            matches.forEach(function (item, index) {
                const button = document.createElement("button");
                const text = document.createElement("span");
                const title = document.createElement("strong");
                const category = document.createElement("small");
                const icon = document.createElement("i");

                button.type = "button";
                button.className = "faq-hub-search-suggestion";
                button.setAttribute("role", "option");
                button.dataset.itemIndex = items.indexOf(item);
                button.dataset.suggestionIndex = index;

                title.textContent = item.querySelector(".faq-hub-question strong").textContent;
                category.textContent = item.dataset.category;
                icon.className = "fa-solid fa-arrow-right";
                icon.setAttribute("aria-hidden", "true");

                text.append(title, category);
                button.append(text, icon);
                suggestions.appendChild(button);
            });
        }

        suggestions.classList.add("is-visible");
        search.setAttribute("aria-expanded", "true");
    }

    function selectSuggestion(button) {
        const item = items[Number(button.dataset.itemIndex)];
        if (!item) return;

        item.hidden = false;
        item.classList.add("is-open");
        item.querySelector(".faq-hub-question").setAttribute("aria-expanded", "true");
        closeSuggestions();
        item.scrollIntoView({ behavior: "smooth", block: "center" });
        window.setTimeout(function () {
            item.querySelector(".faq-hub-question").focus({ preventScroll: true });
        }, 500);
    }

    function updateActiveSuggestion(nextIndex) {
        const buttons = Array.from(suggestions.querySelectorAll(".faq-hub-search-suggestion"));
        if (!buttons.length) return;

        activeSuggestion = (nextIndex + buttons.length) % buttons.length;
        buttons.forEach(function (button, index) {
            button.classList.toggle("is-active", index === activeSuggestion);
            button.setAttribute("aria-selected", index === activeSuggestion ? "true" : "false");
        });
        buttons[activeSuggestion].scrollIntoView({ block: "nearest" });
    }

    document.querySelectorAll(".faq-hub-question").forEach(function (button) {
        button.addEventListener("click", function () {
            const item = button.closest(".faq-hub-item");
            const isOpen = item.classList.toggle("is-open");
            button.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    });

    filters.forEach(function (button) {
        button.addEventListener("click", function () {
            activeCategory = button.dataset.category;
            filters.forEach(function (filter) {
                filter.classList.toggle("is-active", filter === button);
            });
            applyFilters();
        });
    });

    search.addEventListener("input", function () {
        if (search.value.trim()) {
            activeCategory = "Todos";
            filters.forEach(function (filter) {
                filter.classList.toggle("is-active", filter.dataset.category === "Todos");
            });
        }

        applyFilters();
        renderSuggestions();
    });

    search.addEventListener("keydown", function (event) {
        const buttons = Array.from(suggestions.querySelectorAll(".faq-hub-search-suggestion"));

        if (event.key === "ArrowDown" && buttons.length) {
            event.preventDefault();
            updateActiveSuggestion(activeSuggestion + 1);
        } else if (event.key === "ArrowUp" && buttons.length) {
            event.preventDefault();
            updateActiveSuggestion(activeSuggestion - 1);
        } else if (event.key === "Enter") {
            event.preventDefault();
            if (activeSuggestion >= 0 && buttons[activeSuggestion]) {
                selectSuggestion(buttons[activeSuggestion]);
            } else if (buttons[0]) {
                selectSuggestion(buttons[0]);
            } else if (search.value.trim().length >= 2) {
                results.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        } else if (event.key === "Escape") {
            closeSuggestions();
        }
    });

    suggestions.addEventListener("click", function (event) {
        const button = event.target.closest(".faq-hub-search-suggestion");
        if (button) selectSuggestion(button);
    });

    document.addEventListener("click", function (event) {
        if (!event.target.closest(".faq-hub-search-wrap")) closeSuggestions();
    });
})();
</script>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "CollectionPage",
            "@id" => "https://empireonecx.com/es/faq/#webpage",
            "url" => "https://empireonecx.com/es/faq/",
            "name" => "Centro de FAQ sobre BPO, CX y soporte con IA",
            "description" => $metaDescription,
            "isPartOf" => ["@id" => "https://empireonecx.com/#website"],
            "about" => [
                ["@type" => "Thing", "name" => "Business Process Outsourcing"],
                ["@type" => "Thing", "name" => "Outsourcing de experiencia del cliente"],
                ["@type" => "Thing", "name" => "Outsourcing de call center"],
                ["@type" => "Thing", "name" => "Soporte al cliente asistido por IA"],
            ],
            "inLanguage" => "es",
        ],
        [
            "@type" => "FAQPage",
            "@id" => "https://empireonecx.com/es/faq/#faq",
            "mainEntity" => array_map(function ($faq) {
                return [
                    "@type" => "Question",
                    "name" => $faq["question"],
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => $faq["answer"],
                    ],
                ];
            }, $faqs),
            "inLanguage" => "es",
        ],
        [
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                ["@type" => "ListItem", "position" => 1, "name" => "Inicio", "item" => "https://empireonecx.com/es/"],
                ["@type" => "ListItem", "position" => 2, "name" => "Recursos", "item" => "https://empireonecx.com/es/recursos/"],
                ["@type" => "ListItem", "position" => 3, "name" => "Centro FAQ", "item" => "https://empireonecx.com/es/faq/"],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../../inc/footer.php"); ?>
