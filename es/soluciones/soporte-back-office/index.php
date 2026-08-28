<?php
$siteLanguage = "es";
$baseHref = "/";
$page_title = "Servicios de soporte back office | EmpireOneCX";
$meta_description = "Los servicios de soporte back office de EmpireOneCX cubren entrada de datos, procesamiento documental, gestión de pedidos, actualizaciones de CRM y manejo de correo con flujos asistidos por IA.";
$metaKeywords = "servicios de soporte back office, outsourcing back office, BPO back office, entrada de datos, procesamiento documental, procesamiento de pedidos, gestión de datos CRM, OCR documental, procesamiento de facturas, higiene de CRM, actualizaciones ERP, automatización RPA";
$languageSwitchHrefEn = "/solutions/back-office-support";
$languageAlternates = [
    "en" => "https://empireonecx.com/solutions/back-office-support",
    "es" => "https://empireonecx.com/es/soluciones/soporte-back-office/",
    "x-default" => "https://empireonecx.com/solutions/back-office-support",
];
include(__DIR__ . "/../../../inc/header.php");
?>

<link rel="stylesheet" href="/assets/css/extracted/solutions-back-office-support.css?v=20260821-1">

<main class="backoffice-page relative">
    <section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 overflow-hidden">
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp">
            <source src="/assets/images/solutions-herobg.mp4" type="video/mp4" />
        </video>

        <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>

        <div class="container mx-auto w-full relative z-10">
            <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Miga de pan">
                <a href="/es/soluciones/">Soluciones</a>
                <span class="sep">/</span>
                <span class="current">Servicios de soporte back office</span>
            </nav>

            <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
                <div>
                    <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                        <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">Outsourcing back office</span>
                    </p>

                    <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white" style="max-width:860px;">
                        Elimine cuellos de botella y libere a su equipo para crecer
                    </h1>

                    <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8" style="max-width:848px !important;">
                        Los servicios de soporte back office de EmpireOneCX gestionan el trabajo operativo que ocurre detrás de escena: con precisión, escala y flujos asistidos por IA, para que su equipo principal se concentre en clientes, crecimiento e ingresos.
                    </p>

                    <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <a href="/es/soluciones/" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius:8px !important; background:rgba(255,255,255,0.08);">
                            Explorar todas las soluciones BPO
                        </a>
                    </div>
                </div>

                <div class="cx-hero-form animate-reveal delay-3" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.14); border-radius:16px; padding:24px;">
                    <p style="color:#fff; font-size:15px; font-weight:600; text-align:center; margin:0 0 16px;">Obtenga una consulta gratuita</p>
                    <div class="ecx-compact">
                        <?php include(__DIR__ . "/../../../inc/contact-form.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Qué son los servicios de soporte back office">
        <div class="container mx-auto px-4">
            <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items:center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Detrás de escena</span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width:521px;">¿Qué son los servicios de soporte back office?</h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Los servicios de soporte back office son las funciones administrativas, operativas y de gestión de datos que mantienen funcionando a una empresa sin requerir interacción directa con el cliente. Incluyen entrada de datos, mantenimiento de bases de datos, procesamiento e indexación documental, gestión de pedidos y facturas, mantenimiento de sistemas CRM y ERP, y administración de comunicaciones internas.
                    </p>
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">
                        Estas funciones son esenciales para la operación, pero rara vez requieren talento senior interno para ejecutarlas. Externalizar el soporte back office da acceso a equipos dedicados, capacitados y apoyados por automatización con IA, a una fracción del costo de crear la misma capacidad internamente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Administración interna frente a outsourcing back office">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-10" style="align-items:center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Eficiencia operativa</span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width:521px;">Administración interna vs. outsourcing back office con EmpireOneCX</h3>
                </div>
            </div>

            <div class="overflow-x-auto rounded-[16px]">
                <table class="cx-comparison-table" role="table" aria-label="Tabla comparativa de soporte back office">
                    <thead>
                        <tr>
                            <th>Parámetro operativo</th>
                            <th>Administración interna tradicional</th>
                            <th>BPO back office de EmpireOneCX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Costos operativos</td><td>Altos: salarios locales, espacio físico y licencias de software.</td><td>Variables y fraccionados, con costos significativamente menores que un modelo interno.</td></tr>
                        <tr><td>Horarios de cobertura</td><td>Limitados al horario laboral local.</td><td>Cobertura 24/7/365 mediante turnos de entrega global.</td></tr>
                        <tr><td>Precisión de datos</td><td>Muestreo manual, vulnerable a errores de transcripción.</td><td>Verificación de doble revisión con RPA personalizado y validación asistida por IA.</td></tr>
                        <tr><td>Escalabilidad</td><td>Rígida: requiere contratación y onboarding para crecer.</td><td>Flexible: la capacidad se ajusta al volumen real de transacciones.</td></tr>
                        <tr><td>Tecnología</td><td>Inversión de capital en licencias locales y actualizaciones.</td><td>OCR con IA, RPA y automatización incluidos en el modelo operativo.</td></tr>
                        <tr><td>Cumplimiento</td><td>Depende de capacitación y supervisión internas.</td><td>Alineado por diseño con SOC 2, HIPAA, GDPR e ISO 27001 cuando aplica al alcance.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Servicios de soporte back office que entregamos">
        <div class="container mx-auto px-4">
            <div class="text-center mb-14">
                <h2 class="relative inline-flex items-center gap-2 text-sm py-3 overflow-hidden m-0 mb-3">
                    <span class="relative z-10 flex items-center gap-2">
                        <span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                        <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Nuestras capacidades</span>
                    </span>
                </h2>
                <h3 class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-black mx-auto" style="max-width:600px;">Servicios de soporte back office que entregamos</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $capabilities = [
                    ['fa-keyboard', 'Entrada de datos y gestión de datos de alto volumen', 'Nuestros equipos ejecutan entrada de datos, mantenimiento de bases, limpieza de registros y validación con controles de calidad de doble revisión. Así sus datos permanecen completos, consistentes y listos para auditoría.', ['Limpieza de datos', 'Validación']],
                    ['fa-file-lines', 'Procesamiento documental y OCR inteligente', 'Clasificamos, indexamos y digitalizamos documentación a escala mediante OCR y validación humana. Contratos, facturas, registros de cumplimiento y formularios se convierten en datos estructurados, buscables y listos para usar.', ['OCR con IA', 'Indexación documental']],
                    ['fa-receipt', 'Procesamiento de pedidos y facturas', 'Gestionamos el ciclo transaccional: ingreso de pedidos, conciliación de facturas, seguimiento de pagos y reconciliación de saldos, con la velocidad y precisión necesarias para proteger flujo de caja y relaciones con proveedores.', ['Pedidos', 'Facturas']],
                    ['fa-database', 'Higiene de sistemas CRM y ERP', 'Mantenemos perfiles, registros, migraciones, sincronizaciones y validaciones dentro de plataformas como Salesforce, HubSpot, Zendesk, SAP, NetSuite, QuickBooks y ERPs específicos de cada industria.', ['CRM', 'ERP']],
                    ['fa-envelope-open-text', 'Triage de correo y gestión de tickets', 'Administramos bandejas de entrada y colas de tickets de alto volumen, categorizando, enrutando y resolviendo consultas administrativas dentro de sus SLAs definidos.', ['Correo', 'Tickets']],
                    ['fa-shield-halved', 'Tecnología y seguridad de datos', 'Los equipos trabajan dentro de sus plataformas existentes con controles de acceso, MFA, escritorios virtuales aislados y procedimientos alineados con requisitos de seguridad y privacidad aplicables.', ['Seguridad', 'Cumplimiento']],
                ];
                foreach ($capabilities as $card): ?>
                <div class="cx-feature-card">
                    <div class="cx-feature-icon"><i class="fas <?= htmlspecialchars($card[0], ENT_QUOTES, 'UTF-8') ?>"></i></div>
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= htmlspecialchars($card[1], ENT_QUOTES, 'UTF-8') ?></h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= htmlspecialchars($card[2], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($card[3] as $tag): ?>
                        <span class="cx-industry-pill"><span class="dot"></span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Soluciones back office por industria">
        <div class="container mx-auto px-4">
            <div class="solution-side-img2 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Experiencia por industria</span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width:521px;">Outsourcing back office específico por industria</h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">
                        Las operaciones genéricas fallan cuando enfrentan requisitos regulatorios estrictos. EmpireOneCX configura equipos dedicados con capacitación vertical, controles de cumplimiento y estándares de precisión alineados con cada sector.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <?php
                $industries = [
                    ['Soporte back office para seguros', 'Indexación de pólizas, verificación documental de reclamaciones, entrada de datos de facturación de primas y cumplimiento de registros digitales.', ['Pólizas', 'Reclamaciones', 'Facturación']],
                    ['Soporte back office hipotecario', 'Configuración de archivos de préstamo, verificación de divulgaciones, comparación de datos de título y auditorías documentales posteriores al cierre.', ['Préstamos', 'Títulos', 'Auditorías']],
                    ['Soporte back office para salud', 'Procesamiento de admisión de pacientes, indexación de facturación médica e higiene de sistemas de registros de salud con procedimientos alineados a HIPAA cuando corresponde.', ['HIPAA', 'Pacientes', 'Facturación médica']],
                    ['Soporte back office para ecommerce', 'Actualizaciones de PIM, carga de catálogos SKU, seguimiento de pedidos, entrada de datos de inventario y coordinación con proveedores.', ['PIM', 'SKU', 'Inventario']],
                    ['Soporte back office para logística', 'Procesamiento de conocimientos de embarque, documentación aduanera, seguimiento de carga, conciliación de manifiestos y gestión de registros de transportistas.', ['Embarques', 'Aduanas', 'Carga']],
                    ['Sectores adicionales', 'También ofrecemos equipos especializados para bienes raíces, legal, servicios financieros, automotriz y servicios profesionales.', ['Bienes raíces', 'Legal', 'Servicios financieros']],
                ];
                foreach ($industries as $ind): ?>
                <div class="cx-feature-card">
                    <h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= htmlspecialchars($ind[0], ENT_QUOTES, 'UTF-8') ?></h4>
                    <p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= htmlspecialchars($ind[1], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($ind[2] as $tag): ?>
                        <span class="cx-industry-pill"><span class="dot"></span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Por qué externalizar operaciones back office">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-5" style="align-items:center;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Ventaja estratégica</span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width:621px;">Por qué las empresas externalizan operaciones back office con EmpireOneCX</h3>
                </div>
                <div class="reveal-right">
                    <p class="nomargin text-white text-[16px] leading-[24px]">
                        Contratar, capacitar y retener personal back office es costoso y difícil de escalar. EmpireOneCX reemplaza esa carga fija con un equipo entrenado que puede trabajar dentro de sus sistemas desde el primer día.
                    </p>
                </div>
            </div>

            <div class="solutions-wahtweoffer mt-10">
                <div class="mainsolthings flex items-left justify-between">
                    <div class="leftsidesoldes w-[800px] pt-[35px] pr-[110px]">
                        <div class="managespacesolution grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-y-5 mb-10">
                            <?php
                            $advantages = [
                                ['Flujos asistidos por IA, no solo más personal', 'Cada compromiso puede incorporar RPA, macros personalizadas y OCR con IA para reducir pasos manuales, disminuir errores y acelerar tiempos de respuesta.'],
                                ['Integración independiente del sistema', 'Trabajamos dentro de su stack actual: ERP, CRM, gestión documental y plataformas de workflow. No necesita reemplazar sus herramientas para comenzar.'],
                                ['Procesos documentados, rastreables y listos para auditoría', 'Cada proceso se documenta y cada salida se rastrea. El equipo se capacita en sus sistemas, estándares de precisión y reglas de escalamiento antes de manejar datos reales.'],
                            ];
                            foreach ($advantages as $item): ?>
                            <div class="flex items-start gap-3 mt-4">
                                <img src="/assets/images/check.webp" alt="" class="w-[20px] h-[20px] mt-1" aria-hidden="true" />
                                <div>
                                    <h4 class="text-[18px] font-semibold text-white mb-1"><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></h4>
                                    <p class="text-[16px] leading-[24px] text-gray-400"><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="rounded-[8px] mb-[12px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h3 class="mytextemp w-[146px] text-white text-[20px] leading-[28px] font-medium min-w-[120px]">Resultados reales</h3>
                        <div class="hidden md:block h-[42px] w-px bg-white flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between" style="width:100%;">
                            <p class="text-white text-[16px] leading-[24px] w-[665px] mr-[50px]">
                                El resultado es una operación más rápida, limpia y consistente que un modelo exclusivamente manual, con menor costo por transacción.
                            </p>
                            <a href="/es/contacto/" class="py-[10px] px-[24px] bg-white inline-block rounded-[8px]">
                                <span style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">
                                    Construya su equipo back office
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Preguntas frecuentes sobre soporte back office">
        <div class="container mx-auto px-4">
            <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:flex-start;">
                <div class="reveal-left">
                    <h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                            <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Preguntas frecuentes</span>
                        </span>
                    </h2>
                    <h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]">FAQ de servicios de soporte back office</h3>
                </div>

                <div class="reveal-right bg-[#111] rounded-[16px] p-6 md:p-8">
                    <?php
                    $faqs = [
                        ['¿Qué son los servicios de soporte back office?', 'Son funciones administrativas, operativas y de gestión de datos que una empresa necesita para funcionar, pero que no implican atención directa al cliente. Incluyen entrada de datos, procesamiento documental, pedidos, facturas, mantenimiento de CRM y ERP, correo y tickets internos.'],
                        ['¿Cuál es la diferencia entre outsourcing front office y back office?', 'El front office cubre funciones orientadas al cliente, como atención, ventas y soporte técnico. El back office cubre tareas internas como gestión de datos, documentos, sistemas, pedidos y flujos administrativos.'],
                        ['¿Por qué externalizar soporte back office en lugar de mantenerlo internamente?', 'Porque reduce costos de contratación, capacitación, rotación, licencias y supervisión en funciones de alto volumen. También permite sumar automatización, OCR, RPA y validación sin construir esa infraestructura desde cero.'],
                        ['¿Cómo asegura EmpireOneCX la precisión de los datos?', 'Aplicamos controles documentados, doble revisión, validación asistida por IA cuando corresponde y auditorías de QA contra estándares acordados. Los reportes permiten revisar precisión, volumen y tiempos de entrega.'],
                        ['¿Qué estándares de seguridad aplica EmpireOneCX?', 'Los programas pueden alinearse con SOC 2, HIPAA, GDPR e ISO 27001 según el alcance, la industria y los datos involucrados. También se definen permisos por rol, MFA y procedimientos de manejo de datos.'],
                        ['¿EmpireOneCX puede trabajar dentro de nuestro CRM, ERP o sistema documental?', 'Sí. Los equipos pueden operar dentro de plataformas existentes como Salesforce, HubSpot, Zendesk, QuickBooks, SAP, NetSuite y sistemas específicos de cada industria, sujeto a acceso, seguridad y capacitación.'],
                        ['¿Qué tan rápido puede implementarse un equipo back office?', 'Depende del alcance, volumen, sistemas y complejidad del proceso. Muchos compromisos pueden prepararse en dos a cuatro semanas, incluyendo documentación, capacitación, acceso a sistemas y calibración de QA.'],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="cx-faq-item" id="faq-<?= $i ?>">
                        <button type="button" class="cx-faq-toggle" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
                            <span class="cx-faq-question"><?= htmlspecialchars($faq[0], ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="cx-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><polyline points="6 9 12 15 18 9"/></svg></span>
                        </button>
                        <div class="cx-faq-answer text-gray-400" id="faq-answer-<?= $i ?>" role="region"><?= htmlspecialchars($faq[1], ENT_QUOTES, 'UTF-8') ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">
        <div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute w-[720px] h-[760px] right-[54px] top-[-140px] bg-no-repeat opacity-100" style="background-image:url('/assets/images/futuresideig.webp'); transform:rotate(42deg);"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="mx-auto relative">
                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                    <div class="absolute inset-0" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50%,#FE881C 100%);"></div>
                    <div class="absolute inset-[3px] rounded-[13px] bg-white">
                        <div class="absolute inset-0">
                            <div class="hidden md:block absolute inset-0" style="background:url('/assets/images/cta-bg-image.webp') no-repeat center/cover;"></div>
                            <div class="md:hidden absolute inset-0" style="background:url('/assets/images/cta-gradient.webp') no-repeat center/cover;"></div>
                        </div>
                    </div>
                </div>

                <div class="future-innerwork py-5 px-4 md:px-16 relative z-10">
                    <div class="ctamain text-center">
                        <div class="cta-left-sidework pt-[60px] pb-[60px]">
                            <h2 class="solution-heading cta-solution-section future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">
                                ¿Listo para optimizar sus <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]">operaciones back office?</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Si su equipo principal pierde horas en acumulación de datos, colas de documentos o tareas administrativas que no requieren su nivel de experiencia, EmpireOneCX puede asumir ese trabajo. Cuéntenos sus sistemas, volumen y mayor cuello de botella back office.
                            </p>
                            <div class="future-btn w-full max-w-2xl mx-auto mt-6">
                                <a href="/es/contacto/" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base hover:scale-[1.02] active:scale-95 transition shadow-lg hover:shadow-purple-400/20">
                                    Obtenga una consulta gratuita
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
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.cx-faq-toggle').forEach(function (button) {
        button.addEventListener('click', function () {
            var item = button.closest('.cx-faq-item');
            if (!item) return;
            var isOpen = item.classList.contains('open');

            document.querySelectorAll('.cx-faq-item').forEach(function (el) {
                el.classList.remove('open');
                var toggle = el.querySelector('.cx-faq-toggle');
                if (toggle) toggle.setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
</script>

<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"Servicios de soporte back office","provider":{"@type":"Organization","name":"EmpireOneCX","url":"https://empireonecx.com"},"description":"Servicios de soporte back office para entrada de datos, procesamiento documental, gestión de pedidos, CRM, ERP, tickets y flujos operativos asistidos por IA.","url":"https://empireonecx.com/es/soluciones/soporte-back-office/","areaServed":["Estados Unidos","Canadá"]}</script>

<?php include(__DIR__ . "/../../../inc/footer.php"); ?>
