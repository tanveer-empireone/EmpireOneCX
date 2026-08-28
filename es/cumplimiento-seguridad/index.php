<?php
$siteLanguage = "es";
$page_title = "Cumplimiento y seguridad | EmpireOneCX";
$metaDescription = "EmpireOneCX es un proveedor BPO certificado en SOC 2 Type II e ISO 27001 que ofrece soluciones de experiencia del cliente alineadas con HIPAA, PCI DSS y GDPR.";
$metaKeywords = "BPO certificado SOC 2, proveedor BPO ISO 27001, outsourcing compatible con HIPAA, BPO compatible con PCI DSS, CX compatible con GDPR, cumplimiento y seguridad outsourcing";
$pageUrl = "/es/cumplimiento-seguridad/";
$languageSwitchHrefEn = "/compliance-security/";
$languageAlternates = [
    "en" => "https://empireonecx.com/compliance-security/",
    "es" => "https://empireonecx.com/es/cumplimiento-seguridad/",
    "x-default" => "https://empireonecx.com/compliance-security/",
];
include(__DIR__ . "/../../inc/header.php");

$securityCallUrl = "https://calendly.com/empireonegroup-marketing/30min";

$faqs = [
    [
        "question" => "¿Qué certificaciones tiene EmpireOneCX?",
        "answer" => "EmpireOneCX cuenta con certificación SOC 2 Type II e ISO/IEC 27001:2022. También apoyamos operaciones alineadas con HIPAA, PCI DSS y GDPR, y contamos con acreditación BBB.",
    ],
    [
        "question" => "¿Con qué rapidez puede EmpireOneCX incorporar un equipo compatible?",
        "answer" => "Nuestros controles principales de seguridad ya están implementados. Esto nos ayuda a incorporar equipos dedicados con rapidez; algunos programas pueden lanzarse en tan solo 72 horas después de aprobar el alcance y los accesos.",
    ],
    [
        "question" => "¿Cómo funciona el cumplimiento HIPAA en BPO?",
        "answer" => "El trabajo relacionado con HIPAA requiere controles estrictos sobre la información médica protegida electrónica, o ePHI. Usamos sistemas cifrados, áreas de producción controladas y acceso basado en roles para ayudar a proteger datos sensibles de salud.",
    ],
    [
        "question" => "¿EmpireOneCX apoya GDPR para clientes europeos?",
        "answer" => "Sí. Apoyamos el manejo de datos alineado con GDPR para datos de clientes europeos. Nuestros equipos siguen controles documentados de privacidad, acceso y procesamiento en ubicaciones de entrega aprobadas.",
    ],
    [
        "question" => "¿Cómo monitorea EmpireOneCX la seguridad de los datos?",
        "answer" => "Usamos monitoreo asistido por IA y controles de calidad para revisar interacciones con clientes. Estos controles ayudan a detectar actividad inusual, proteger información sensible y respaldar reportes claros.",
    ],
];
?>

<link rel="stylesheet" href="/assets/css/extracted/compliance-security.css?v=20260821-1">

<main class="security-page">
    <section class="security-hero-section relative overflow-hidden bg-black px-4 sm:px-6">
        <div class="absolute inset-0 opacity-30">
            <img src="/assets/images/b8.webp" alt="Operaciones seguras de experiencia del cliente" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/75 to-black"></div>
        <div class="container mx-auto relative z-10">
            <div class="security-hero-grid">
                <div class="text-center lg:text-left">
                    <p class="security-kicker mb-4">Cumplimiento y seguridad</p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-3 mb-6 text-[14px] md:text-[15px] leading-[22px] text-white/80">
                        <span class="px-4 py-2 rounded-[4px] security-gradient-bg text-white font-medium">Última revisión: junio de 2026</span>
                        <span class="px-4 py-2 rounded-[4px] bg-white/10 border border-white/15">Equipo de cumplimiento de EmpireOneCX</span>
                    </div>
                    <h1 class="security-hero-heading mx-auto lg:mx-0">
                        Creado para generar confianza. Diseñado para la seguridad.
                    </h1>
                    <h2 class="security-hero-subheading mx-auto lg:mx-0">
                        BPO y outsourcing CX certificados en SOC 2, en los que puede confiar
                    </h2>
                    <p class="security-hero-description mx-auto lg:mx-0">
                        Sus datos de clientes necesitan protección constante. EmpireOneCX ofrece equipos de CX y BPO asistidos por IA, respaldados por controles claros, certificaciones independientes y prácticas seguras de entrega global.
                    </p>
                    <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-7 py-4 rounded-[8px] text-white text-[15px] md:text-[16px] font-medium security-gradient-bg hover:opacity-90 transition">
                        Agende una consulta de seguridad
                    </a>
                </div>
                <div class="security-hero-form mx-auto lg:mx-0">
                    <p class="security-hero-form-title">Obtenga una consulta de seguridad gratuita</p>
                    <div class="ecx-compact">
                        <?php include(__DIR__ . "/../../inc/contact-form.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-10 lg:gap-16 items-start">
                <div>
                    <p class="security-section-label security-gradient-text">Estándares globales</p>
                    <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-6">
                        Protección de nivel empresarial.
                    </h2>
                </div>
                <div class="text-[17px] leading-[30px] text-[#3C3B47]">
                    <p class="mb-5">Un gran servicio al cliente depende de una sólida protección de datos. EmpireOneCX opera servicios de entrega seguros, respaldados por auditorías independientes, certificaciones y monitoreo continuo.</p>
                    <p>Ayudamos a los clientes a respaldar flujos de trabajo regulados, incluidos registros de salud, procesos relacionados con pagos y datos de clientes europeos. Cada programa se define según las reglas y los riesgos que aplican a su negocio.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-[#f7f8fb]">
        <div class="container mx-auto">
            <div class="max-w-3xl mb-10">
                <p class="security-section-label security-gradient-text">Marcos certificados</p>
                <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-4">Nuestras certificaciones y marcos de control</h2>
                <p class="text-[17px] leading-[28px] text-[#3C3B47]">Cada marco a continuación forma parte de la manera en que operan nuestras personas, sistemas y centros de entrega.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <?php
                $certifications = [
                    [
                        "title" => "¿Qué es SOC 2 Type II y por qué importa para BPO?",
                        "impact" => "SOC 2 ayuda a acelerar las revisiones de riesgo de proveedores. Demuestra que nuestros controles de seguridad están documentados, probados y se siguen de forma consistente.",
                        "proof" => "SOC 2 Type II es una auditoría independiente realizada por auditores externos. Revisa controles de seguridad, disponibilidad, confidencialidad, integridad del procesamiento y privacidad durante un periodo sostenido.",
                    ],
                    [
                        "title" => "¿Qué es ISO/IEC 27001:2022 y por qué importa para BPO?",
                        "impact" => "ISO 27001 brinda confianza a los equipos empresariales al demostrar que la seguridad de la información se gestiona mediante un sistema formal.",
                        "proof" => "ISO/IEC 27001:2022 es un estándar global para Sistemas de Gestión de Seguridad de la Información. Confirma que usamos un enfoque estructurado para proteger información sensible.",
                    ],
                    [
                        "title" => "¿Qué es el cumplimiento HIPAA y por qué importa para BPO?",
                        "impact" => "Los equipos de salud y health-tech pueden externalizar flujos de soporte, facturación y back-office seleccionados con controles de privacidad más sólidos.",
                        "proof" => "El trabajo relacionado con HIPAA se gestiona con sistemas cifrados, acceso controlado y salvaguardas documentadas para la información médica protegida electrónica, o ePHI.",
                    ],
                    [
                        "title" => "¿Qué es el cumplimiento PCI DSS y por qué importa para BPO?",
                        "impact" => "Los controles PCI DSS ayudan a reducir el riesgo cuando los equipos de soporte asisten con pagos, reembolsos o preguntas de suscripción.",
                        "proof" => "PCI DSS establece requisitos de seguridad para datos de titulares de tarjetas. Usamos redes restringidas, flujos de trabajo controlados y entornos monitoreados para procesos aprobados relacionados con pagos.",
                    ],
                    [
                        "title" => "¿Qué es el cumplimiento GDPR y por qué importa para BPO?",
                        "impact" => "Los procesos alineados con GDPR ayudan a proteger datos de clientes europeos y a reducir el riesgo de privacidad.",
                        "proof" => "GDPR exige un manejo legal, transparente y seguro de datos personales. Mapeamos los controles de acceso, procesamiento y retención al flujo de trabajo aprobado por el cliente.",
                    ],
                    [
                        "title" => "Un compromiso con prácticas empresariales éticas",
                        "impact" => "La acreditación BBB brinda a los socios otra señal de confianza, transparencia y responsabilidad de servicio.",
                        "proof" => "La acreditación BBB refleja estándares de prácticas comerciales honestas, comunicación clara y servicio al cliente receptivo.",
                    ],
                ];
                ?>
                <?php foreach ($certifications as $index => $cert): ?>
                    <article class="cert-card security-card p-6 <?= $index === 0 ? 'is-open' : ''; ?>">
                        <button class="cert-toggle" type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false'; ?>">
                            <h3 class="text-[20px] md:text-[22px] leading-[30px] text-black pr-2"><?= htmlspecialchars($cert["title"], ENT_QUOTES, "UTF-8"); ?></h3>
                            <span class="cert-icon security-gradient-bg">+</span>
                        </button>
                        <div class="cert-content mt-5">
                            <div class="impact-box rounded-[8px] p-5 mb-4">
                                <p class="text-[14px] uppercase tracking-[0.08em] font-semibold text-[#7A76FF] mb-2">Impacto empresarial</p>
                                <p class="text-[16px] leading-[26px] text-[#3C3B47]"><?= htmlspecialchars($cert["impact"], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                            <div class="proof-box rounded-[8px] p-5">
                                <p class="text-[14px] uppercase tracking-[0.08em] font-semibold text-[#FE881C] mb-2">Prueba técnica</p>
                                <p class="text-[16px] leading-[26px] text-[#3C3B47]"><?= htmlspecialchars($cert["proof"], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-10">
                <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-7 py-4 rounded-[8px] text-white text-[16px] font-medium security-gradient-bg hover:opacity-90 transition">
                    Agende una consulta de seguridad
                </a>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-10 lg:gap-16">
                <div>
                    <p class="security-section-label security-gradient-text">Ventaja empresarial</p>
                    <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-5">Por qué nuestro cumplimiento es su ventaja competitiva</h2>
                    <p class="text-[17px] leading-[30px] text-[#3C3B47]">Externalizar no debe significar perder control sobre los datos de clientes. Nuestro marco de cumplimiento ofrece a los clientes mayor visibilidad, controles más sólidos y aprobación de proveedores más rápida.</p>
                </div>
                <div class="grid grid-cols-1 gap-5">
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Acceda a acuerdos empresariales</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">La documentación SOC 2 e ISO 27001 puede ayudar a los clientes a avanzar por revisiones de riesgo de proveedores con mayor rapidez y menos preguntas de seguimiento.</p>
                    </div>
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Acelere la incorporación</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">Nuestros controles de seguridad, procesos de capacitación y procedimientos de acceso ya están definidos. Esto ayuda a que los equipos aprobados puedan lanzarse más rápido.</p>
                    </div>
                    <div class="security-card p-6">
                        <h3 class="text-[23px] leading-[31px] mb-3 text-black">Proteja su reputación</h3>
                        <p class="text-[16px] leading-[27px] text-[#3C3B47]">El monitoreo asistido por IA y los flujos de trabajo claros ayudan a reducir errores evitables. La confianza de sus clientes permanece protegida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-[#06131e] text-white">
        <div class="container mx-auto">
            <div class="max-w-3xl mb-12">
                <p class="security-section-label">Flujo de trabajo de seguridad</p>
                <h2 class="text-[34px] md:text-[46px] leading-[1.12] mb-4">Nuestro proceso con seguridad desde el inicio</h2>
                <p class="text-[17px] leading-[28px] text-white/72">Un camino simple desde la configuración segura hasta reportes claros.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <?php
                $steps = [
                    ["Entorno de trabajo seguro", "Las áreas de producción aprobadas usan acceso restringido, redes seguras y reglas claras de seguridad física. Los flujos sensibles pueden incluir controles sin teléfonos, sin papel y sin bolígrafos."],
                    ["Equipos capacitados y aprobados", "Los agentes completan verificaciones de antecedentes, capacitación basada en roles e incorporación segura a sistemas antes de trabajar en entornos de clientes."],
                    ["Monitoreo asistido por IA", "El QA asistido por IA ayuda a revisar interacciones, identificar conductas de riesgo y apoyar la protección de datos sensibles."],
                    ["Reportes claros", "Los clientes reciben actualizaciones de cumplimiento, scorecards de QA y reportes operativos para que el desempeño de seguridad permanezca visible."],
                ];
                ?>
                <div class="space-y-10">
                    <?php foreach ($steps as $index => $step): ?>
                        <div class="security-step flex gap-5">
                            <div class="step-badge security-gradient-bg"><?= $index + 1; ?></div>
                            <div>
                                <h3 class="text-[23px] leading-[31px] mb-3"><?= htmlspecialchars($step[0], ENT_QUOTES, "UTF-8"); ?></h3>
                                <p class="text-[16px] leading-[27px] text-white/72"><?= htmlspecialchars($step[1], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="rounded-[10px] overflow-hidden min-h-[420px]">
                    <img src="/assets/images/b4.webp" alt="Centro de entrega seguro" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 py-16 md:py-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-10 lg:gap-16">
                <div>
                    <p class="security-section-label security-gradient-text">Respuestas</p>
                    <h2 class="text-[34px] md:text-[46px] leading-[1.12] text-black mb-5">Preguntas frecuentes</h2>
                    <p class="text-[17px] leading-[30px] text-[#3C3B47]">Respuestas claras a preguntas comunes sobre seguridad, cumplimiento e incorporación.</p>
                </div>
                <div class="space-y-4">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="security-faq-item security-card p-5 <?= $index === 0 ? 'is-open' : ''; ?>">
                            <button class="w-full flex items-center justify-between gap-5 text-left" type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false'; ?>">
                                <h3 class="text-[19px] md:text-[21px] leading-[29px] text-black"><?= htmlspecialchars($faq["question"], ENT_QUOTES, "UTF-8"); ?></h3>
                                <span class="security-faq-icon cert-icon security-gradient-bg">+</span>
                            </button>
                            <div class="security-faq-answer">
                                <p class="pt-4 text-[16px] leading-[27px] text-[#3C3B47]"><?= htmlspecialchars($faq["answer"], ENT_QUOTES, "UTF-8"); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section relative py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="mx-auto relative">
                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                    <div class="absolute inset-0 security-gradient-bg"></div>
                    <div class="absolute inset-[3px] rounded-[13px] bg-white">
                        <div class="absolute inset-0">
                            <div class="hidden md:block absolute inset-0" style="background: url('/assets/images/cta-bg-image.webp') no-repeat center/cover;"></div>
                            <div class="md:hidden absolute inset-0" style="background: url('/assets/images/cta-gradient.webp') no-repeat center/cover;"></div>
                        </div>
                    </div>
                </div>
                <div class="future-innerwork py-8 px-4 md:px-16 relative z-10">
                    <div class="ctamain grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="cta-left-sidework order-2 md:order-1">
                            <h2 class="solution-heading future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-normal text-black mb-[15px] md:mb-[20px]" style="max-width: 640px;">
                                ¿Listo para crecer en salud, finanzas o mercados europeos con cumplimiento ya integrado?
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Cree hoy su equipo CX dedicado y plenamente compatible, y salga en vivo con total tranquilidad.
                            </p>
                            <div class="future-btn flex">
                                <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium security-gradient-bg">
                                    Agende una llamada de 30 minutos sobre seguridad y soluciones
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

    <a href="<?= htmlspecialchars($securityCallUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="mobile-security-cta items-center justify-center rounded-[8px] px-4 py-4 text-white text-[15px] font-medium security-gradient-bg">
        Agende una consulta de seguridad
    </a>
</main>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
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
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".cert-card .cert-toggle").forEach(function (button) {
        button.addEventListener("click", function () {
            const card = button.closest(".cert-card");
            const isOpen = card.classList.toggle("is-open");
            button.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    });

    document.querySelectorAll(".security-faq-item button").forEach(function (button) {
        button.addEventListener("click", function () {
            const item = button.closest(".security-faq-item");
            const isOpen = item.classList.toggle("is-open");
            button.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    });
});
</script>

<?php include(__DIR__ . "/../../inc/footer.php"); ?>
