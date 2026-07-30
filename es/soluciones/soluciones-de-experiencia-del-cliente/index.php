<?php
$siteLanguage = "es";
$baseHref = "/";
$page_title = "Soluciones de experiencia del cliente | EmpireOneCX";
$meta_description = "Soluciones de experiencia del cliente de EmpireOneCX con IA, soporte omnicanal y equipos globales dedicados para mejorar CSAT, reducir abandono y escalar CX.";
$metaKeywords = "soluciones de experiencia del cliente, outsourcing CX, soporte omnicanal, gestión de experiencia del cliente, atención al cliente con IA, equipos CX externalizados, mejora de CSAT";
$languageSwitchHrefEn = "/solutions/customer-experience-solutions";
$languageAlternates = [
    "en" => "https://empireonecx.com/solutions/customer-experience-solutions",
    "es" => "https://empireonecx.com/es/soluciones/soluciones-de-experiencia-del-cliente/",
    "x-default" => "https://empireonecx.com/solutions/customer-experience-solutions",
];
include(__DIR__ . "/../../../inc/header.php");
?>

<style>

/* Compact hero form overrides */
.ecx-compact .ecx-form-wrap .ecx-label                                        { display: none; }
.ecx-compact .ecx-form-wrap .ecx-input                                        { padding: 8px 12px; font-size: 13px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-input::placeholder                           { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-select                                       { padding: 8px 12px; font-size: 13px; background: rgba(20,20,20,0.95) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-select option                                { background: #1a1a1a; color: #fff; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper                                { padding: 8px 12px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"]              { color: #fff !important; font-size: 13px; background: transparent !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"]::placeholder { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle span.ecx-code                 { color: #fff !important; font-size: 13px; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle svg                           { color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-divider                                      { color: rgba(255,255,255,0.3) !important; }
.ecx-compact .ecx-form-wrap .ecx-grid-2                                       { gap: 8px; }
.ecx-compact .ecx-form-wrap .ecx-mt                                           { margin-top: 8px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row                                  { margin-top: 12px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row p                                { font-size: 12px; color: rgba(255,255,255,0.8) !important; }
.ecx-compact .ecx-form-wrap .ecx-submit-btn                                   { margin-top: 14px; padding: 10px 24px; font-size: 14px; }
.ecx-compact .ecx-country-dropdown                                             { background: #1a1a1a !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-country-item                                                 { color: #ddd !important; }
.ecx-compact .ecx-country-item:hover                                           { background: rgba(122,118,255,0.2) !important; }

/* Page-scoped overrides */

.cx-hero-section {
    padding-top: 18rem;
    padding-bottom: 180px;
}

@media (max-width: 1024px) {
    .cx-hero-grid { grid-template-columns: 1fr !important; }
    .cx-hero-form { display: block !important; }
    .cx-hero-section {
        padding-top: 10rem !important;
        padding-bottom: 80px !important;
        height: auto !important;       /* Overrides any fixed heights */
        min-height: 100vh !important;  /* Ensures it at least covers the screen */
    }
    
}

.cx-comparison-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 16px;
    overflow: hidden;
}

.cx-comparison-table thead th {
    padding: 20px 24px;
    font-size: 15px;
    font-weight: 600;
    text-align: left;
}

.cx-comparison-table thead th:first-child {
    background: #1a1a1a;
    color: #fff;
}

.cx-comparison-table thead th:nth-child(2) {
    background: #2a2a2a;
    color: #aaa;
}

.cx-comparison-table thead th:nth-child(3) {
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    color: #fff;
}

.cx-comparison-table tbody tr td {
    padding: 18px 24px;
    font-size: 15px;
    line-height: 24px;
    border-bottom: 1px solid #f0f0f0;
    vertical-align: top;
}

.cx-comparison-table tbody tr:last-child td {
    border-bottom: none;
}

.cx-comparison-table tbody tr td:first-child {
    background: #fafafa;
    color: #000;
    font-weight: 600;
}

.cx-comparison-table tbody tr td:nth-child(2) {
    background: #fff;
    color: #555;
}

.cx-comparison-table tbody tr td:nth-child(3) {
    background: #fdf9ff;
    color: #2a1a40;
}

.cx-feature-card {
    border-radius: 16px;
    padding: 36px;
    background: #fff;
    box-shadow: 0 4px 24px rgba(122,118,255,0.08);
    border: 1px solid #f0eeff;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.cx-feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(122,118,255,0.16);
}

.cx-feature-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: linear-gradient(135deg, #7A76FF 0%, #CB46FA 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.cx-feature-icon svg {
    width: 26px;
    height: 26px;
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.cx-industry-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 22px;
    border-radius: 100px;
    background: #fff;
    border: 1px solid #e8e4ff;
    font-size: 15px;
    color: #2a2a2a;
    transition: background 0.2s, border-color 0.2s;
    cursor: default;
}

.cx-industry-pill:hover {
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    color: #fff;
    border-color: transparent;
}

.cx-industry-pill span.dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: linear-gradient(135deg, #7A76FF, #FE881C);
    flex-shrink: 0;
    transition: background 0.2s;
}

.cx-industry-pill:hover span.dot {
    background: rgba(255,255,255,0.6);
}

.cx-stat-number {
    font-size: 52px;
    font-weight: 700;
    line-height: 1;
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.cx-faq-item {
    border-bottom: 1px solid #f0f0f0;
}

.cx-faq-item:last-child {
    border-bottom: none;
}

.cx-faq-toggle {
    width: 100%;
    background: none;
    border: none;
    padding: 24px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    cursor: pointer;
    text-align: left;
}

.cx-faq-toggle:focus {
    outline: none;
}

.cx-faq-question {
    font-size: 17px;
    font-weight: 600;
    color: #fff;
    line-height: 26px;
}

.cx-faq-icon {
    width: 32px;
    height: 32px;
    flex-shrink: 0;
    border-radius: 50%;
    background: linear-gradient(135deg, #7A76FF 0%, #FE881C 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.25s ease;
}

.cx-faq-icon svg {
    width: 14px;
    height: 14px;
    stroke: #fff;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform 0.25s ease;
}

.cx-faq-item.open .cx-faq-icon {
    transform: rotate(180deg);
}

.cx-faq-answer {
    font-size: 16px;
    line-height: 26px;
    color: #555;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease, padding-bottom 0.25s ease;
}

.cx-faq-item.open .cx-faq-answer {
    max-height: 400px;
    padding-bottom: 24px;
}

.breadcrumb-nav a,
.breadcrumb-nav span {
    font-size: 14px;
    color: #aaa;
    text-decoration: none;
}

.breadcrumb-nav a:hover { color: #CB46FA; }
.breadcrumb-nav .sep { margin: 0 8px; }
.breadcrumb-nav .current { color: #fff; }

/* Reveal animations */
@keyframes revealUp {
    from { opacity: 0; transform: translateY(28px); }
    to   { opacity: 1; transform: translateY(0); }
}

.animate-reveal { animation: revealUp 0.7s ease forwards; }
.delay-1 { animation-delay: 0.1s; }
.delay-2 { animation-delay: 0.25s; }
.delay-3 { animation-delay: 0.4s; }
.delay-4 { animation-delay: 0.55s; }

</style>

<main class="relative">

    <section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden">

        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp">
            <source src="/assets/images/solutions-herobg.mp4" type="video/mp4" />
        </video>

        <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>

        <div class="container mx-auto w-full relative z-10">

            <!-- 440px GRID LAYOUT FOR FORM -->
            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                
                <!-- LEFT: Hero Copy (Left-Aligned Desktop, Centered Mobile) -->
                <div class="text-center lg:text-left">
                    
                    <!-- Breadcrumb MOVED INSIDE LEFT COLUMN -->
                    <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Migas de pan">
                        <a href="/es/soluciones/">Soluciones</a>
                        <span class="sep">/</span>
                        <span class="current">Soluciones de experiencia del cliente</span>
                    </nav>

                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            Soluciones de experiencia del cliente
                        </span>
                    </p>

                    <!-- ADDED lg:mx-0 TO STOP HORIZONTAL CENTERING ON DESKTOP -->
                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto lg:mx-0" style="max-width: 860px;">
                        Soluciones de experiencia del cliente que generan lealtad e impulsan ingresos
                    </h1>

                    <!-- ADDED lg:mx-0 TO STOP HORIZONTAL CENTERING ON DESKTOP -->
                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8 mx-auto lg:mx-0" style="max-width: 848px !important;">
                        Flujos de trabajo impulsados por IA, equipos globales dedicados de CX y atención omnicanal inteligente convierten cada punto de contacto en una oportunidad para fortalecer la lealtad.
                    </p>

                    <!-- ADDED lg:justify-start TO LEFT-ALIGN BUTTONS ON DESKTOP -->
                    <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <button onclick="window.location.href='/es/soluciones/'" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
                            Explorar todas las soluciones BPO
                        </button>
                    </div>
                </div>

                <!-- RIGHT: Compact Form -->
                <div class="cx-hero-form animate-reveal delay-3" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.14); border-radius:16px; padding:24px;">
                    <p style="color:#fff; font-size:15px; font-weight:600; text-align:center; margin:0 0 16px;">
                        Solicite una consulta gratuita
                    </p>
                    <div class="ecx-compact">
                        <?php include(__DIR__ . "/../../../inc/contact-form.php"); ?>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Qué son las soluciones de experiencia del cliente">

        <div class="container mx-auto px-4">

            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">

                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Soluciones de experiencia del cliente
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        ¿Qué son las soluciones de experiencia del cliente?
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Las soluciones de experiencia del cliente (CX) combinan plataformas, personas y estrategias operativas para optimizar, personalizar y simplificar cada interacción que una empresa tiene con sus clientes, desde el primer contacto hasta la retención y la recomendación.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        Las soluciones modernas de CX van más allá del soporte tradicional de call center. Unifican canales digitales y de voz, incorporan IA conversacional para resolver solicitudes de autoservicio y entregan a los agentes contexto del cliente en tiempo real, para que cada interacción sea informada, ágil y coherente sin importar dónde o cómo se comunique el cliente.
                    </p>
                </div>

            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                <?php
                $stats = [
                    ["50%", "Reducción del costo por contacto frente a operaciones internas tradicionales"],
                    ["90",  "Días para lograr una mejora medible en CSAT"],
                    ["9",   "Países con operación multilingüe 24/7/365"],
                    ["500+","Agentes disponibles bajo demanda"],
                ];
                foreach ($stats as $s): ?>
                <div class="text-center p-8 rounded-[16px]" style="background: #fafafa; border: 1px solid #f0eeff;">
                    <div class="cx-stat-number mb-2"><?= $s[0] ?></div>
                    <p class="text-[14px] leading-[20px] text-[#555]"><?= $s[1] ?></p>
                </div>
                <?php endforeach; ?>
            </div>

        </div>

    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Comparación entre soporte tradicional y EmpireOneCX">

        <div class="container mx-auto px-4">

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-10" style="align-items: center;">

                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Vea la diferencia
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        Soporte tradicional vs.
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> soluciones CX de EmpireOneCX</span>
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Una gran experiencia del cliente a escala requiere más que aumentar personal. Así se compara el outsourcing CX diseñado para operar con precisión frente al soporte interno tradicional.
                    </p>
                </div>

            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="tabla comparativa de CX">
                    <thead>
                        <tr>
                            <th>Dimensión operativa</th>
                            <th>Soporte interno tradicional</th>
                            <th>Soluciones CX de EmpireOneCX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rows = [
                            ["Gestión de canales",       "Colas aisladas y transferencias inconsistentes",                        "Consola omnicanal unificada: voz, email, chat, SMS y redes sociales"],
                            ["Resolución en el primer contacto", "Baja: alta dependencia de transferencias y devoluciones de llamada",             "El enrutamiento de intención asistido por IA reduce escalaciones y contactos repetidos"],
                            ["Visibilidad de datos",          "Reportes estáticos y ciclos de retroalimentación tardíos",                     "Seguimiento de CSAT en tiempo real, análisis de sentimiento y dashboards en vivo"],
                            ["Integración con CRM",          "Actualizaciones manuales y contexto del cliente desconectado",               "Integración nativa con Salesforce, Zendesk, HubSpot y más"],
                            ["Escalabilidad",              "Altos costos fijos y limitación por disponibilidad de talento local",     "Cobertura operativa en 9 países para ampliar equipos de 10 a más de 500 agentes"],
                            ["Calidad de agentes",            "Equipos genéricos, alta rotación y capacitación inconsistente",        "Equipos dedicados capacitados en su marca, productos y flujos de trabajo"],
                        ];
                        foreach ($rows as $r): ?>
                        <tr>
                            <td><?= $r[0] ?></td>
                            <td><?= $r[1] ?></td>
                            <td><?= $r[2] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </section>


    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Qué entregan nuestras soluciones CX">

        <div class="container mx-auto px-4">

            <div class="text-center mb-14">
                <h2 class="relative inline-flex items-center gap-2 text-sm py-3 overflow-hidden m-0 mb-3">
                    <span class="relative z-10 flex items-center gap-2">
                        <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                        <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            Nuestras capacidades
                        </span>
                    </span>
                </h2>
                <h3 class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-black mx-auto" style="max-width: 600px;">
                    Qué entregan nuestras soluciones de experiencia del cliente
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M3 5h18M3 12h18M3 19h18"/><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Soporte omnicanal inteligente</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Teléfono, email, chat en vivo, SMS y redes sociales gestionados desde una operación unificada. Los clientes cambian de canal sin perder contexto, la voz de su marca se mantiene consistente y ninguna interacción queda sin seguimiento.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Voz","Email","Chat en vivo","SMS","Redes sociales"] as $ch): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);"><?= $ch ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 12h6M9 15h4"/><circle cx="18" cy="6" r="3" style="stroke:none;fill:rgba(255,255,255,0.6)"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">IA conversacional y automatización de flujos de trabajo</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Chatbots basados en intención y flujos de autoservicio automatizados resuelven consultas repetitivas de nivel 1 al instante, sin intervención de agentes. Menor AHT, colas más cortas y agentes enfocados en interacciones de mayor valor.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Chatbots","Autoservicio","Enrutamiento por intención","Reducción de AHT"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><circle cx="9" cy="7" r="4"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><path d="M16 3.13a4 4 0 010 7.75"/><path d="M21 21v-2a4 4 0 00-3-3.87"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Equipos CX dedicados y capacitados en su marca</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Cada cliente de EmpireOneCX cuenta con un equipo dedicado, no con un grupo compartido. Los agentes se capacitan en la voz de su marca, catálogo de productos, protocolos de escalación y expectativas del cliente antes de la primera interacción. Sin guiones genéricos. Sin periodos de arranque en frío.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Equipos dedicados","Capacitación de marca","Protocolos personalizados"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Integración profunda con CRM y stack tecnológico</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Nuestros equipos trabajan directamente dentro de sus sistemas existentes. Integramos Salesforce, HubSpot, Zendesk, Freshdesk y plataformas líderes de telefonía en la nube para que el contexto completo del cliente esté disponible antes de iniciar la conversación.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["Salesforce","HubSpot","Zendesk","Freshdesk"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Analítica CX en tiempo real y reportes de sentimiento</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Puntuaciones CSAT, resolución en el primer contacto, tiempo promedio de gestión, sentimiento del cliente y tendencias de comportamiento monitoreadas en vivo. Reportes estructurados con la frecuencia que su operación necesita e insights accionables, no solo números aislados.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["CSAT","FCR","AHT","Análisis de sentimiento"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Seguridad y cumplimiento de nivel empresarial</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Cifrado AES-256, MFA en todos los accesos a sistemas y entornos de escritorio virtual aislados. Equipos CX para salud y servicios financieros capacitados en flujos alineados con HIPAA y requisitos de cumplimiento específicos para cada industria que atendemos.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach(["AES-256","HIPAA","MFA","VDI"] as $t): ?>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #555;"><?= $t ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Entregables CX e impacto en el negocio">

        <div class="container mx-auto px-4">

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-5" style="align-items: center;">

                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Soluciones de experiencia del cliente
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        Conversaciones que
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> impulsan lealtad e ingresos</span>
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Externalice su atención al cliente con un equipo que protege su marca, resuelve problemas con mayor rapidez y convierte cada interacción en una experiencia positiva.
                    </p>
                </div>

            </div>

            <div class="lasting-impression-soltuionsimg relative">
                <div class="solheightimg overflow-hidden rounded-[16px] w-full h-[490px] lg:h-[520px] xl:h-[580px]">
                    <img src="/assets/images/spage1.webp" alt="Equipo de EmpireOneCX brindando soporte omnicanal al cliente" class="fade-zoom-reveal w-full h-full object-cover object-center"/>
                </div>
            </div>

            <div class="solutions-wahtweoffer">

                <div class="mainsolthings flex items-left justify-between">

                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <h3 class="text-[24px] leading-[32px] tracking-[-0.03em] font-medium text-white mb-5">Qué obtiene</h3>
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-y-5 mb-10">
                            <?php
                            $deliverables = [
                                "Gestión de llamadas entrantes y salientes",
                                "Atención 24/7 y soporte help desk",
                                "Enrutamiento omnicanal: voz, chat, email y SMS",
                                "Chat en vivo, email y redes sociales",
                                "Soporte fuera de horario y por exceso de volumen",
                                "IA conversacional y autoservicio",
                                "Integración CRM y contexto del agente en tiempo real",
                                "Monitoreo QA y reportes CSAT",
                            ];
                            foreach ($deliverables as $d): ?>
                            <div class="flex items-center gap-3">
                                <img src="/assets/images/check.webp" alt="check" class="w-[20px] h-[20px]" />
                                <p class="text-[16px] leading-[24px] text-white"><?= $d ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="rightsidesoldes relative right-[54px] top-[-42px]">
                        <div class="noheightemp rounded-[14px] shadow-md p-[2px]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); box-shadow: 0px 6px 16px 0px rgba(77,77,92,0.14);">
                            <div class="bosx bg-white rounded-[calc(1rem-1px)] p-6 flex flex-row md:flex-col items-start gap-4 md:gap-[20px]">
                                <div class="boxesfont sm:ml-4 md:ml-0">
                                    <h3 class="text-[24px] leading-[28px] text-[#000000] mb-1 md:mb-9" style="font-weight: 600">Impacto en el negocio</h3>
                                    <img src="/assets/images/linebot.webp" class="mb-[15px]" alt="">
                                    <div class="linesli">
                                        <ul>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">Mayor CSAT y mejores puntuaciones NPS</li>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">Tiempos de respuesta y resolución más rápidos</li>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">Menor abandono y mayor valor de vida del cliente</li>
                                            <li><img src="/assets/images/trianglebox.webp" alt="">Reducción de 30 a 50% en costo por contacto</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="rounded-[8px] mb-[12px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h3 class="mytextemp w-[146px] text-white text-[20px] leading-[28px] font-medium min-w-[120px]">Por qué funciona</h3>
                        <div class="hidden md:block h-[42px] w-px bg-white flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between" style="width: 100%;">
                            <p class="text-white text-[16px] leading-[24px] w-[665px] mr-[50px]">
                                Creamos equipos dedicados de atención al cliente, capacitados en sus productos, tono y flujos de trabajo, respaldados por enrutamiento asistido por IA, bases de conocimiento y QA en tiempo real.
                            </p>
                            <a href="/es/contacto/" class="py-[10px] px-[24px] bg-white inline-block rounded-[8px]">
                                <span style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    Construya su equipo CX
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Soluciones CX específicas por industria">

        <div class="container mx-auto px-4">

            <div class="solution-side-img2 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items: center;">

                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Experiencia por industria
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        Por qué las empresas eligen EmpireOneCX para
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-black"> outsourcing CX</span>
                    </h3>
                </div>

                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        No implementamos modelos CX genéricos. Cada operación se diseña según los requisitos regulatorios, expectativas del cliente y estándares de servicio específicos de su industria.
                    </p>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <?php
                $industries = [
                    [
                        "Retail y e-commerce",
                        "Soporte estacional de alto volumen, seguimiento de pedidos, gestión de devoluciones y recuperación de carritos abandonados, diseñado para la velocidad y el volumen que sus clientes esperan.",
                        ["Seguimiento de pedidos","Devoluciones","Escala estacional","Recuperación de carrito"],
                    ],
                    [
                        "Servicios financieros y fintech",
                        "Soporte con enfoque antifraude, verificación de cuentas, resolución de disputas de facturación e interacciones alineadas con cumplimiento para proteger a sus clientes y a su negocio.",
                        ["Prevención de fraude","Cumplimiento","Soporte de cuentas","Resolución de disputas"],
                    ],
                    [
                        "Salud y seguros",
                        "Rutas de atención centradas en el paciente, manejo empático y flujos alineados con HIPAA para interacciones que requieren precisión y sensibilidad.",
                        ["Alineado con HIPAA","Atención empática","Soporte al paciente","Asistencia en reclamaciones"],
                    ],
                    [
                        "Tecnología y SaaS",
                        "Soporte técnico de nivel 1 y 2, onboarding de usuarios y gestión proactiva de renovaciones para maximizar LTV y reducir abandono voluntario.",
                        ["Soporte técnico N1/N2","Onboarding","Gestión de renovaciones","Optimización de LTV"],
                    ],
                ];
                foreach ($industries as $ind): ?>
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= $ind[0] ?></h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= $ind[1] ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach($ind[2] as $tag): ?>
                        <span class="cx-industry-pill"><span class="dot"></span><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-10 rounded-[16px] p-8 md:p-12 relative overflow-hidden" style="background: #000;">
                <div class="relative z-10 flex flex-col md:flex-row md:items-center gap-8">
                    <div class="flex-1">
                        <h4 class="text-[24px] leading-[32px] font-semibold text-white mb-3">Entrega global, experiencia local</h4>
                        <p class="text-[16px] leading-[26px] text-gray-400">
                            EmpireOneCX opera en 9 países con equipos CX multilingües que atienden clientes en inglés, español, idiomas europeos y asiáticos, con dominio nativo del idioma, no guiones traducidos. Cobertura 24/7/365 en distintas zonas horarias, sin dependencia de un solo país.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-3 flex-shrink-0">
                        <?php foreach(["Inglés","Español","Francés","Alemán","Japonés","Mandarin"] as $lang): ?>
                        <span class="px-4 py-2 rounded-full text-[14px] font-medium text-white" style="border: 1px solid rgba(122,118,255,0.4);"><?= $lang ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Soluciones de experiencia del cliente FAQ">

        <div class="container mx-auto px-4">

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items: flex-start;">

                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Preguntas frecuentes
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]">
                        Soluciones de experiencia del cliente
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQs</span>
                    </h3>
                    <p class="text-[16px] leading-[24px] text-gray-400">
                        Todo lo que necesita saber antes de asociarse con EmpireOneCX para externalizar su CX.
                    </p>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "¿Qué son las soluciones de experiencia del cliente?",
                            "Las soluciones de experiencia del cliente combinan tecnología, equipos capacitados y procesos operativos para gestionar y mejorar cada interacción que una empresa tiene con sus clientes en todos los canales: voz, digital y autoservicio. Normalmente incluyen enrutamiento omnicanal, IA conversacional, integración CRM, analítica y equipos de soporte dedicados. El objetivo es reducir fricción, mejorar satisfacción, aumentar retención y disminuir el costo de ofrecer un gran servicio a escala."
                        ],
                        [
                            "¿Cuál es el impacto empresarial de externalizar la experiencia del cliente?",
                            "Externalizar la experiencia del cliente con un proveedor especializado genera impacto medible en retención, costos y satisfacción. Las empresas suelen lograr reducciones de 30% a 50% en costo por contacto, mejoras significativas en resolución en el primer contacto y puntuaciones CSAT y NPS más altas frente a operaciones internas tradicionales. La ventaja operativa surge al combinar agentes humanos experimentados con automatización impulsada por IA y analítica en tiempo real."
                        ],
                        [
                            "¿Cómo se integra EmpireOneCX con CRM e infraestructura tecnológica existentes?",
                            "Los equipos CX de EmpireOneCX operan de forma nativa dentro de su stack tecnológico existente. Integramos directamente Salesforce, HubSpot, Zendesk, Freshdesk y plataformas líderes de telefonía en la nube para asegurar que los agentes tengan contexto completo del cliente en tiempo real antes de cada interacción. No es necesario reemplazar ni reconfigurar sus sistemas actuales. La integración forma parte del proceso de onboarding."
                        ],
                        [
                            "¿Cuál es la diferencia entre soporte omnicanal y multicanal?",
                            "El soporte multicanal significa que una empresa está disponible en varios canales, como teléfono, email y chat, pero esos canales operan de forma independiente. Los clientes que cambian de canal deben repetir su contexto. El soporte omnicanal unifica todos los canales en una sola consola operativa con una capa compartida de datos del cliente. Si un cliente inicia por chat y llama cinco minutos después, se le reconoce de inmediato, su historial completo está visible y el agente continúa la conversación, no empieza una nueva. EmpireOneCX entrega omnicanalidad, no solo multicanalidad."
                        ],
                        [
                            "¿Con qué rapidez puede EmpireOneCX implementar un equipo CX?",
                            "Para la mayoría de los proyectos, EmpireOneCX puede tener un equipo CX capacitado y listo para representar su marca en operación dentro de cuatro a seis semanas, incluyendo integración de sistemas, capacitación en su marca y productos, y configuración del proceso de QA. El plazo exacto depende del tamaño del equipo, la complejidad de los flujos y los requisitos de integración."
                        ],
                        [
                            "¿El CX externalizado es adecuado para empresas con requisitos estrictos de cumplimiento de datos?",
                            "Sí. EmpireOneCX opera con seguridad de datos de nivel empresarial: cifrado AES-256, MFA en todos los accesos a sistemas y entornos de escritorio virtual aislados. Nuestros equipos CX para salud y servicios financieros están capacitados en flujos alineados con HIPAA y requisitos específicos de cumplimiento. Operamos dentro de los marcos regulatorios relevantes para su industria y geografía, y podemos proporcionar documentación como parte del proceso de compras."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button class="cx-faq-toggle" onclick="toggleFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
                            <span class="cx-faq-question text-white"><?= $faq[0] ?></span>
                            <span class="cx-faq-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none"><polyline points="6 9 12 15 18 9"/></svg>
                            </span>
                        </button>
                        <div class="cx-faq-answer text-gray-400" id="faq-answer-<?= $i ?>" role="region" aria-labelledby="faq-<?= $i ?>">
                            <?= $faq[1] ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>

    </section>


    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">

        <div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute w-[720px] h-[760px] right-[54px] top-[-140px] bg-no-repeat opacity-100" style="background-image: url('/assets/images/futuresideig.webp'); transform: rotate(42deg);"></div>
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
                                ¿Listo para transformar su
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> experiencia del cliente</span>?
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Cuéntenos sus canales, su volumen y su mayor desafío de CX. Diseñaremos una solución construida alrededor de sus requisitos exactos.
                            </p>
                            <div class="future-btn w-full max-w-2xl mx-auto mt-6">
                                <a href="/es/contacto/" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base hover:scale-[1.02] active:scale-95 transition shadow-lg hover:shadow-purple-400/20">
                                    Solicite una consulta CX gratuita
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
function toggleFaq(index) {
    const item = document.getElementById('faq-' + index);
    const btn  = item.querySelector('.cx-faq-toggle');
    const isOpen = item.classList.contains('open');

    // Close all
    document.querySelectorAll('.cx-faq-item').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.cx-faq-toggle').setAttribute('aria-expanded', 'false');
    });

    // Open clicked (if it was closed)
    if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
    }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué son las soluciones de experiencia del cliente?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Las soluciones de experiencia del cliente combinan tecnología, equipos capacitados y procesos operativos para gestionar y mejorar cada interacción que una empresa tiene con sus clientes en todos los canales: voz, digital y autoservicio."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuál es el impacto empresarial de externalizar la experiencia del cliente?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Companies commonly achieve 30% to 50% reductions in cost-per-contact, significant improvements in first-contact resolution rates, and higher CSAT and NPS scores compared to legacy in-house operations."
      }
    },
    {
      "@type": "Question",
      "name": "¿Con qué rapidez puede EmpireOneCX implementar un equipo CX?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For most engagements, EmpireOneCX can have a trained, brand-ready CX team operational within four to six weeks — including system integration, agent training, and QA process setup."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Soluciones de experiencia del cliente",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOne CX",
    "url": "https://empireonecx.com"
  },
  "description": "AI-powered omnichannel customer experience outsourcing with dedicated global CX teams, CRM integration, and real-time analytics.",
  "url": "https://empireonecx.com/solutions/customer-experience-solutions",
  "areaServed": "Global"
}
</script>
<script>
// Re-init hero form country picker after the contact form include
document.addEventListener('DOMContentLoaded', function () {
    var heroWrap = document.querySelector('.ecx-compact');
    if (!heroWrap) return;

    var toggle   = heroWrap.querySelector('.ecx-country-toggle');
    var dropdown = heroWrap.querySelector('.ecx-country-dropdown');
    var flagImg  = heroWrap.querySelector('#ecxSelectedFlag');
    var codeSpan = heroWrap.querySelector('.ecx-code');
    var codeHid  = heroWrap.querySelector('[name="country_code"]');

    if (!toggle || !dropdown) return;

    // Clone toggle to remove the old (overwritten) event listener
    var newToggle = toggle.cloneNode(true);
    toggle.parentNode.replaceChild(newToggle, toggle);

    newToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        dropdown.classList.toggle('open');
    });

    dropdown.addEventListener('click', function (e) {
        var item = e.target.closest('.ecx-country-item');
        if (!item) return;
        var code = item.dataset.code;
        var flag = item.dataset.flag;
        heroWrap.querySelector('#ecxSelectedFlag').src = 'https://flagcdn.com/w20/' + flag + '.webp';
        heroWrap.querySelector('.ecx-code').textContent = code;
        codeHid.value = code;
        dropdown.classList.remove('open');
    });

    document.addEventListener('click', function () {
        dropdown.classList.remove('open');
    });
});
</script>

<?php include(__DIR__ . "/../../../inc/footer.php"); ?>









