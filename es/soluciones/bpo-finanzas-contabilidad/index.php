<?php
$siteLanguage = "es";
$baseHref = "/";
$page_title = "Servicios BPO de finanzas y contabilidad | EmpireOneCX";
$meta_description = "Los servicios BPO de finanzas y contabilidad de EmpireOneCX entregan libros precisos, cierres más rápidos y hasta 60% de ahorro en costos. Contabilidad, nómina, AP/AR y más.";
$metaKeywords = "servicios BPO de finanzas y contabilidad, BPO financiero, outsourcing contable, outsourcing de cuentas por pagar, BPO de contabilidad, outsourcing de nómina, outsourcing de procesos financieros, cierre mensual, gestión de libro mayor, conciliación bancaria, outsourcing de reportes financieros, outsourcing QuickBooks, contabilidad Xero, contabilidad SAP, gestión AP AR";
$languageSwitchHrefEn = "/solutions/finance-accounting-bpo";
$languageAlternates = [
    "en" => "https://empireonecx.com/solutions/finance-accounting-bpo",
    "es" => "https://empireonecx.com/es/soluciones/bpo-finanzas-contabilidad/",
    "x-default" => "https://empireonecx.com/solutions/finance-accounting-bpo",
];
include(__DIR__ . "/../../../inc/header.php");
?>

<style>
/* ─── Compact hero form overrides ─── */
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
.ecx-compact .ecx-country-dropdown                                            { background: #1a1a1a !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-country-item                                                { color: #ddd !important; }
.ecx-compact .ecx-country-item:hover                                          { background: rgba(122,118,255,0.2) !important; }

/* ─── Page-scoped overrides ─── */
.cx-hero-section {
    padding-top: 18rem;
    padding-bottom: 180px;
}

@media (max-width: 1024px) {
    /* Stack grid, show form, and fix overflow/cut-off on mobile/tablet */
    .cx-hero-grid { grid-template-columns: 1fr !important; }
    .cx-hero-form { display: block !important; }
    .cx-hero-section {
        padding-top: 10rem !important;
        padding-bottom: 80px !important;
        height: auto !important;
        min-height: 100vh !important;
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
.cx-faq-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
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
    color: #fff; /* FIXED FAQ COLOR */
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

    <section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 overflow-hidden">
        
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp">
            <source src="/assets/images/solutions-herobg.mp4" type="video/mp4" />
        </video>
        
        <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>

        <div class="container mx-auto w-full relative z-10">

            <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Miga de pan">
                <a href="/es/soluciones/">Soluciones</a>
                <span class="sep">/</span>
                <span class="current">BPO de finanzas y contabilidad</span>
            </nav>

            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                
                <div>
                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            BPO de finanzas y contabilidad
                        </span>
                    </p>

                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white" style="max-width: 860px;">
                        Reduzca costos, cierre más rápido y escale
                    </h1>

                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8" style="max-width: 848px !important;">
                        Los servicios BPO de finanzas y contabilidad de EmpireOneCX brindan a las empresas en crecimiento acceso a un equipo dedicado de profesionales contables con experiencia, respaldado por flujos de trabajo impulsados por IA que mantienen los libros precisos, acortan los ciclos de cierre y ayudan a los líderes financieros a enfocarse en la estrategia en lugar de la administración.
                    </p>

                    <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <button onclick="window.location.href='/es/soluciones/'" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius: 8px !important; background: rgba(255,255,255,0.08);">
                            Explorar todas las soluciones BPO
                        </button>
                    </div>
                </div>

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

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Qué es el BPO de finanzas y contabilidad">
        <div class="container mx-auto px-4">
            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>

            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Eficiencia operativa
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        ¿Qué es el BPO de finanzas y contabilidad?
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        El outsourcing de procesos de negocio de finanzas y contabilidad (BPO) significa delegar sus operaciones financieras de back office, como contabilidad, nómina, cuentas por pagar, cuentas por cobrar, conciliación bancaria y reportes financieros, a un proveedor externo especializado.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        Cuando se hace bien, no es solo una jugada de costos. Es una forma de obtener experiencia contable senior, precisión de nivel automatización y cumplimiento de nivel empresarial sin construir la infraestructura internamente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Finanzas internas vs. BPO financiero de EmpireOneCX">
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
                        Finanzas internas vs. BPO financiero de EmpireOneCX
                    </h3>
                </div>
            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="Tabla comparativa de BPO financiero">
                    <thead>
                        <tr>
                            <th>Métrica operativa</th>
                            <th>Equipo financiero interno</th>
                            <th>BPO financiero de EmpireOneCX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Costo mensual</td>
                            <td>Alto: salarios, beneficios, software, capacitación y rotación</td>
                            <td>Fraccional/variable: hasta 60% menor que internamente</td>
                        </tr>
                        <tr>
                            <td>Procesamiento de facturas</td>
                            <td>Ingreso manual de datos, alta tasa de errores</td>
                            <td>OCR impulsado por IA, verificación automatizada</td>
                        </tr>
                        <tr>
                            <td>Conciliación bancaria</td>
                            <td>Periódica, manual y a menudo retrasada</td>
                            <td>Continua, automatizada y lista para auditoría</td>
                        </tr>
                        <tr>
                            <td>Escalabilidad</td>
                            <td>Lenta: requiere reclutamiento, incorporación y periodo de adaptación</td>
                            <td>Inmediata: ajuste el volumen hacia arriba o hacia abajo en días</td>
                        </tr>
                        <tr>
                            <td>Integración de sistemas</td>
                            <td>Dependiente del equipo interno de TI</td>
                            <td>Soporte nativo para QuickBooks, Xero, SAP y NetSuite</td>
                        </tr>
                        <tr>
                            <td>Cobertura de cumplimiento</td>
                            <td>Varía según la experiencia de cada contratación</td>
                            <td>Capacitación en GAAP/IFRS, con cumplimiento específico por industria incorporado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Servicios BPO de finanzas y contabilidad que ofrecemos">
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
                    Servicios BPO de finanzas y contabilidad que ofrecemos
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Contabilidad y gestión del libro mayor</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Mantenemos libros precisos y listos para auditoría en su libro mayor: gestionamos asientos contables, cierres de periodo y clasificaciones de cuentas en pleno cumplimiento con estándares GAAP o IFRS. Cada registro queda documentado y trazable.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">GAAP / IFRS</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 100%);">Cierre de periodo</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Cuentas por pagar y cuentas por cobrar</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Desde la recepción automatizada de facturas y la conciliación de tres vías hasta la coordinación de pagos a proveedores y el seguimiento de cobros, nuestros equipos de AP y AR gestionan el ciclo transaccional completo. El resultado: menos retrasos de procesamiento, flujo de caja más saludable y menos tiempo invertido por su equipo en perseguir pagos.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Conciliación de tres vías</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);">Cobranza</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2" ry="2"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Conciliación bancaria y de tarjetas de crédito</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Realizamos conciliaciones continuas de bancos y tarjetas de crédito en todas las cuentas: detectamos discrepancias de forma temprana, señalamos posibles fraudes y mantenemos una pista de auditoría limpia e ininterrumpida para que siempre esté preparado ante cualquier revisión.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Conciliación continua</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium text-white" style="background: linear-gradient(90deg, #7A76FF 0%, #FE881C 100%);">Alertas de fraude</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Procesamiento de nómina y cumplimiento</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Procesamiento integral de nómina para equipos locales o multiestatales: cálculos, deducciones fiscales, cumplimiento legal y coordinación de desembolsos, asegurando que cada empleado reciba el pago correcto y a tiempo en cada ciclo, sin exposición de cumplimiento.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Deducciones fiscales</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #7A76FF;">Cumplimiento legal</span>
                    </div>
                </div>

                <div class="cx-feature-card">
                    <div class="cx-feature-icon">
                        <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                    </div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Reportes financieros y soporte de CFO fraccional</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">
                        Reportes financieros periódicos, incluidos estados de pérdidas y ganancias, balances generales y resúmenes de flujo de caja, entregados con la frecuencia que usted necesita. También brindamos soporte para preparación fiscal y, para los clientes que lo requieren, visibilidad de nivel CFO fraccional sobre el desempeño financiero y la planificación futura.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">Reportes financieros</span>
                        <span class="px-3 py-1 rounded-full text-[13px] font-medium" style="background: #f5f0ff; color: #CB46FA;">CFO fraccional</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="samesectionpadding py-12 pt-[40px] relative overflow-hidden bg-white" aria-label="Por qué las empresas eligen EmpireOneCX">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items: center;">
                <div class="reveal-left">
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 521px;">
                        Por qué las empresas eligen EmpireOneCX para BPO financiero
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        El costo real de una función financiera interna va mucho más allá de los salarios base. Licencias de software, capacitación en cumplimiento, ciclos de contratación y rotación crean gastos generales acumulativos que crecen junto con su negocio. El modelo BPO financiero de EmpireOneCX elimina esa carga.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Flujos de trabajo asistidos por IA, no solo más personal</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Nuestros equipos contables operan junto con OCR de facturas impulsado por IA y herramientas de conciliación automatizada que reducen el tiempo de procesamiento manual en más de 40%. Esa eficiencia se refleja directamente en sus finanzas: cierres más rápidos, menos errores y menor costo por transacción.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Sus sistemas, no los nuestros</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">No le pedimos cambiar su conjunto tecnológico. Ya sea que use QuickBooks, Xero, Sage Intacct, SAP o NetSuite, nuestros equipos se integran directamente en su entorno actual. Sin migración. Sin interrupciones. Sin volver a capacitar a su personal.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Experiencia en cumplimiento por industria</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">El cumplimiento financiero no es igual para todos. Nuestros equipos están capacitados en marcos regulatorios específicos por industria: servicios financieros y fintech, salud y seguros (flujos alineados con HIPAA), retail y comercio electrónico (impuestos sobre ventas multijurisdiccionales), bienes raíces y gestión de propiedades, servicios legales y profesionales, tecnología y SaaS.</p>
                </div>
                
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3">Seguridad de datos de nivel empresarial</h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5">Los datos financieros están protegidos de extremo a extremo: cifrado AES-256, autenticación multifactor obligatoria (MFA), centros de datos conformes con SOC 2 y escritorios virtuales aislados. Sus libros quedan protegidos.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Impacto en el negocio">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-5" style="align-items: center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Impacto en el negocio
                            </span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width: 521px;">
                        Impacto empresarial de externalizar finanzas y contabilidad
                    </h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Las organizaciones que trasladan sus operaciones de finanzas y contabilidad a EmpireOneCX suelen reportar:
                    </p>
                </div>
            </div>

            <div class="lasting-impression-soltuionsimg relative mt-10">
                <div class="solheightimg overflow-hidden rounded-[16px] w-full h-[490px] lg:h-[520px] xl:h-[580px]">
                    <img src="/assets/images/spage3.webp" alt="Outsourcing de finanzas y contabilidad" class="fade-zoom-reveal w-full h-full object-cover object-center"/>
                </div>
            </div>

            <div class="solutions-wahtweoffer mt-10">
                <div class="mainsolthings flex items-left justify-between">
                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-y-5 mb-10">
                            <?php
                            $impacts = [
                                "Hasta 60% de reducción en los costos operativos totales de finanzas",
                                "Ciclos de cierre mensual más cortos: de semanas a días",
                                "Reducción medible de errores desde el primer periodo de facturación",
                                "Escalabilidad inmediata cuando aumenta el volumen de transacciones o se agregan nuevas entidades",
                                "Preparación para auditoría bajo demanda: rastros limpios, procesos documentados y sin improvisaciones"
                            ];
                            foreach ($impacts as $impact): ?>
                            <div class="flex items-center gap-3">
                                <img src="/assets/images/check.webp" alt="check" class="w-[20px] h-[20px]" />
                                <p class="text-[16px] leading-[24px] text-white"><?= $impact ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="rounded-[8px] mb-[12px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h3 class="mytextemp w-[146px] text-white text-[20px] leading-[28px] font-medium min-w-[120px]">Resultados reales</h3>
                        <div class="hidden md:block h-[42px] w-px bg-white flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between" style="width: 100%;">
                            <p class="text-white text-[16px] leading-[24px] w-[665px] mr-[50px]">
                                Estos resultados no son proyecciones. Son el resultado directo de combinar contadores humanos con experiencia con flujos de trabajo impulsados por IA que eliminan la fricción del procesamiento manual.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="FAQ de servicios BPO de finanzas y contabilidad">
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
                        Outsourcing de finanzas y contabilidad
                        <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white"> FAQ</span>
                    </h3>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        [
                            "¿Cuáles son los principales beneficios del BPO de finanzas y contabilidad?",
                            "Los beneficios principales del outsourcing de procesos de negocio de finanzas y contabilidad incluyen reducciones significativas de costos (normalmente de 40% a 60%), la capacidad de escalar sin contratar, acceso inmediato a tecnologías de automatización como procesamiento y conciliación de facturas impulsados por IA, y menor riesgo de cumplimiento y auditoría. Las empresas también reportan ciclos de cierre mensual considerablemente más cortos dentro del primer trimestre de colaboración."
                        ],
                        [
                            "¿Cómo protegen los proveedores de BPO financiero los datos financieros sensibles?",
                            "EmpireOneCX protege todos los datos financieros mediante cifrado AES-256 de nivel empresarial, autenticación multifactor (MFA) estricta en todos los puntos de acceso, centros de datos conformes con SOC 2 y entornos de escritorio virtual aislados. Estos controles previenen el acceso no autorizado y eliminan el riesgo de fuga de datos en toda su operación financiera."
                        ],
                        [
                            "¿Puede un proveedor de BPO financiero trabajar dentro de mi ERP o software contable actual?",
                            "Sí. Los equipos financieros de EmpireOneCX son independientes del sistema y están capacitados para operar de forma nativa dentro de su entorno existente, incluidos QuickBooks, Xero, Sage Intacct, SAP y NetSuite. No existe requisito de migrar plataformas ni cambiar su infraestructura de reportes."
                        ],
                        [
                            "¿Qué funciones financieras se pueden externalizar a un proveedor BPO?",
                            "Las funciones financieras que se externalizan con mayor frecuencia incluyen contabilidad y gestión del libro mayor, cuentas por pagar, cuentas por cobrar, conciliación bancaria, procesamiento de nómina, reportes financieros y soporte para preparación fiscal. EmpireOneCX cubre todas estas funciones como parte de una colaboración completamente gestionada."
                        ],
                        [
                            "¿Qué tan rápido puede estar operativo un equipo financiero externalizado?",
                            "El proceso de incorporación de EmpireOneCX está diseñado para causar mínima interrupción. La mayoría de las colaboraciones alcanzan preparación operativa en dos a cuatro semanas, según el acceso a sistemas, la documentación actual y el volumen de transacciones. Sus flujos de trabajo existentes permanecen intactos durante todo el proceso."
                        ],
                        [
                            "¿El BPO financiero es adecuado para pequeñas y medianas empresas, o solo para empresas grandes?",
                            "El BPO financiero es altamente efectivo para pequeñas y medianas empresas y compañías de mercado medio, a menudo incluso más que para grandes empresas, donde los equipos internos son más amplios. Para empresas en crecimiento que necesitan capacidad contable senior sin los gastos generales de un departamento completo, el outsourcing entrega valor inmediato y medible."
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button type="button" class="cx-faq-toggle" onclick="toggleFinanceFaq(<?= $i ?>)" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
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
                                ¿Listo para externalizar sus 
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]">operaciones de finanzas y contabilidad?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Si sus ciclos de cierre se están alargando, sus conciliaciones están atrasadas o su equipo financiero está sobrecargado con trabajo que no debería requerir atención senior, EmpireOneCX puede ayudar.
                                Cuéntenos sus sistemas, su volumen y sus requisitos de reportes; diseñaremos una colaboración BPO de finanzas y contabilidad que se ajuste a su operación desde el primer día.
                            </p>
                            <div class="future-btn w-full max-w-2xl mx-auto mt-6">
                                <a href="/es/contacto/" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base hover:scale-[1.02] active:scale-95 transition shadow-lg hover:shadow-purple-400/20">
                                    Solicite una consulta gratuita
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
function toggleFinanceFaq(index) {
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

<script>
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuáles son los principales beneficios del BPO de finanzas y contabilidad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Los beneficios principales del outsourcing de procesos de negocio de finanzas y contabilidad incluyen reducciones significativas de costos (normalmente de 40% a 60%), la capacidad de escalar sin contratar, acceso inmediato a tecnologías de automatización como procesamiento y conciliación de facturas impulsados por IA, y menor riesgo de cumplimiento y auditoría. Las empresas también reportan ciclos de cierre mensual considerablemente más cortos dentro del primer trimestre de colaboración."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo protegen los proveedores de BPO financiero los datos financieros sensibles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EmpireOneCX protege todos los datos financieros mediante cifrado AES-256 de nivel empresarial, autenticación multifactor (MFA) estricta en todos los puntos de acceso, centros de datos conformes con SOC 2 y entornos de escritorio virtual aislados. Estos controles previenen el acceso no autorizado y eliminan el riesgo de fuga de datos en toda su operación financiera."
      }
    },
    {
      "@type": "Question",
      "name": "¿Puede un proveedor de BPO financiero trabajar dentro de mi ERP o software contable actual?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí. Los equipos financieros de EmpireOneCX son independientes del sistema y están capacitados para operar de forma nativa dentro de su entorno existente, incluidos QuickBooks, Xero, Sage Intacct, SAP y NetSuite. No existe requisito de migrar plataformas ni cambiar su infraestructura de reportes."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué funciones financieras se pueden externalizar a un proveedor BPO?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Las funciones financieras que se externalizan con mayor frecuencia incluyen contabilidad y gestión del libro mayor, cuentas por pagar, cuentas por cobrar, conciliación bancaria, procesamiento de nómina, reportes financieros y soporte para preparación fiscal. EmpireOneCX cubre todas estas funciones como parte de una colaboración completamente gestionada."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tan rápido puede estar operativo un equipo financiero externalizado?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El proceso de incorporación de EmpireOneCX está diseñado para causar mínima interrupción. La mayoría de las colaboraciones alcanzan preparación operativa en dos a cuatro semanas, según el acceso a sistemas, la documentación actual y el volumen de transacciones. Sus flujos de trabajo existentes permanecen intactos durante todo el proceso."
      }
    },
    {
      "@type": "Question",
      "name": "¿El BPO financiero es adecuado para pequeñas y medianas empresas, o solo para empresas grandes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El BPO financiero es altamente efectivo para pequeñas y medianas empresas y compañías de mercado medio, a menudo incluso más que para grandes empresas, donde los equipos internos son más amplios. Para empresas en crecimiento que necesitan capacidad contable senior sin los gastos generales de un departamento completo, el outsourcing entrega valor inmediato y medible."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Servicios BPO de finanzas y contabilidad",
  "provider": {
    "@type": "Organization",
    "name": "EmpireOne CX",
    "url": "https://empireonecx.com"
  },
  "description": "Los servicios BPO de finanzas y contabilidad de EmpireOneCX entregan libros precisos, cierres más rápidos y hasta 60% de ahorro en costos. Contabilidad, nómina, AP/AR y más.",
  "url": "https://empireonecx.com/es/soluciones/bpo-finanzas-contabilidad/",
  "areaServed": "Mundial"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Soluciones",
    "item": "https://empireonecx.com/es/soluciones/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Servicios BPO de finanzas y contabilidad",
    "item": "https://empireonecx.com/es/soluciones/bpo-finanzas-contabilidad/"
  }]
}
</script>

<?php include(__DIR__ . "/../../../inc/footer.php"); ?>
