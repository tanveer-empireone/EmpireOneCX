<?php
    $siteLanguage = "es";
    $baseHref = "/";
    $pageTitle = "Casos de estudio de CX, BPO e IA: resultados reales";
    $metaDescription = "Explore casos de estudio de CX y BPO que muestran como las soluciones de contact center, back office, finanzas e IA de EmpireOneCX generan ROI medible.";
    $languageSwitchHrefEn = "/case-study";
    $languageAlternates = [
        "en" => "https://empireonecx.com/case-study",
        "es" => "https://empireonecx.com/es/casos-de-estudio/",
        "x-default" => "https://empireonecx.com/case-study",
    ];
    include(__DIR__ . "/../../inc/header.php");
?>
<style>
    .gradient-text {
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .gradient-border-bar {
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    }
    .results-gradient-bg {
        background: linear-gradient(180deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);
    }
    .icon-gradient-1 {
        background: linear-gradient(135deg, #7A76FF 0%, #CB46FA 100%);
    }
    .icon-gradient-2 {
        background: linear-gradient(135deg, #CB46FA 0%, #FE881C 100%);
    }
    /* Custom border for the bottom bar to match the thin gradient look */
    .footer-card {
        position: relative;
        background: #fff;
        border-radius: 12px;
        z-index: 1;
    }
    .footer-card::before {
        content: "";
        position: absolute;
        top: -1px; bottom: -1px; left: -1px; right: -1px;
        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);
        border-radius: 13px;
        z-index: -1;
        opacity: 0.6;
    }
</style>
<main>
    <section class="hero-section mainherowork relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 18rem; padding-bottom: 180px;">
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="none">
            <source src="/assets/images/case-study.mp4" type="video/mp4" />
        </video>
        <div class="absolute bg-black/50 -z-10" style="width:1920px; height:611px;"></div>
        <div class="container mx-auto w-full relative z-10">
            <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                    Casos de estudio
                </span>
            </p>
            <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto">
                Resultados reales de soluciones CX, BPO e IA mas inteligentes
            </h1>
            <p class="subpara shortspace font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto sm:mb-3" style="max-width: 848px !important;">Vea como EmpireOneCX ayuda a las empresas a reducir costos, mejorar la experiencia del cliente y escalar operaciones mediante equipos dedicados, automatizacion y procesos impulsados por IA.</p>
            <div class="animate-reveal delay-4 pt-[15px]">
                <button onclick="window.location.href='/contact'" class="herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;"> Construya hoy un equipo offshore de alto rendimiento </button>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#FAF8F7]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/customer-experience-solutions" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Outsourcing de experiencia del cliente (CX)</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-[40px] leading-[48px] tracking-[-0.03em] text-black mb-[20px]">
                        Marca de eCommerce reduce el tiempo de respuesta en 62% y aumenta CSAT a 4.7/5
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="/assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Desafio</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    Una empresa mediana de eCommerce en Texas estaba saturada por consultas de chat, correo y redes sociales, lo que generaba respuestas lentas, reseñas negativas y mayor abandono durante temporadas pico.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="/assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Solucion</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    EmpireOneCX construyo un equipo dedicado de soporte omnicanal con Zendesk, implemento enrutamiento de tickets asistido por IA y estandarizo bases de conocimiento en todos los canales.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Resultados</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">62%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Tiempo de primera respuesta mas rapido</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">4.7</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">CSAT mejoro de 3.9 a 4.7</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">28%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Reduccion del abandono relacionado con soporte</p>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Construyamos su historia de exito</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Por que importa
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                Conversaciones mas rapidas y empaticas aumentaron directamente las compras repetidas y la lealtad a la marca.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#000]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/back-office-outsourcing" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Servicios BPO de back office</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-white text-[40px] leading-[48px] tracking-[-0.03em] mb-[20px]">
                        Empresa de logistica reduce el tiempo de procesamiento en 55%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="/assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Desafio</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    Una empresa regional de logistica enfrentaba problemas con ingreso manual de datos y procesamiento documental, lo que generaba un atraso de 3 semanas y errores frecuentes de envio.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="/assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Solucion</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    EmpireOneCX implemento un equipo dedicado de back office con extraccion documental mediante OCR y reglas automatizadas de validacion en su sistema ERP.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Resultados</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">55%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Tiempo de procesamiento mas rapido</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">40%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Reduccion de errores</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">30%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Menores costos operativos</p>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Es su turno de escalar con mas inteligencia</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Por que importa
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                Las operaciones escalaron de forma confiable sin sumar personal interno costoso.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#FAF8F7]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/finance-accounting-outsourcing" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Outsourcing de finanzas y contabilidad</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-[40px] leading-[48px] tracking-[-0.03em] text-black mb-[20px]">
                        Empresa SaaS reduce el cierre mensual en 45%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="/assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Desafio</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    La contabilidad inconsistente y los reportes financieros tardios limitaban la visibilidad directiva de un proveedor SaaS en crecimiento y retrasaban reportes criticos para la junta.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="/assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Solucion</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    EmpireOneCX proporciono OCR de facturas impulsado por IA, conciliaciones automatizadas en NetSuite y un equipo contable dedicado que elimino atrasos en 90 dias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Resultados</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">5.5</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Cierre mensual reducido de 10 dias a 5.5 dias</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">99%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Precision en conciliaciones</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">35%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Ahorro de costos frente a finanzas internas</p>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Tome el primer paso hoy</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Por que importa
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                 La direccion obtuvo visibilidad en tiempo real para tomar mejores decisiones financieras con mayor rapidez.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#000]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0">
                                <a href="/quality-assurance-services" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Servicios de aseguramiento de calidad (QA)</a>
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-white text-[40px] leading-[48px] tracking-[-0.03em] mb-[20px]">
                        Contact center eleva su puntaje QA de 78% a 92%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="/assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Desafio</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    Un contact center global enfrentaba desempeno inconsistente de agentes y poca visibilidad sobre cumplimiento y calidad en mas de 10,000 llamadas mensuales.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="/assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Solucion</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    EmpireOneCX implemento calificacion QA automatizada, analitica de voz y programas estructurados de coaching 1 a 1 para estandarizar evaluaciones.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Resultados</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">92%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Puntaje QA aumentado</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">18%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">CSAT mejorado</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">30%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Menos escalaciones</p>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Vea como funcionaria para usted</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Por que importa
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                La calidad paso de ser reactiva a predecible, fortaleciendo el cumplimiento.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#FAF8F7]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                Reclutamiento y soporte de fuerza laboral
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-[40px] leading-[48px] tracking-[-0.03em] text-black mb-[20px]">
                        Firma BPO reduce el tiempo de contratacion en 50%
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="/assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Desafio</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    Ciclos de contratacion lentos, seguimiento limitado de candidatos y alta rotacion a 90 dias limitaban la capacidad de escalar de una firma en rapida expansion.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="/assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] text-[#1a1a1a] tracking-tight mb-2">Solucion</h4>
                                <p class="text-[#3C3B47] text-[20px] leading-[1.6]">
                                    EmpireOneCX implemento filtrado de curriculos asistido por IA, entrevistas conductuales estructuradas y soporte completo de onboarding a 30-60-90 dias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Resultados</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">50%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Tiempo de contratacion reducido</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">32%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Mejora en retencion a 90 dias</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter"></span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Pipeline de candidatos de mayor calidad</p>
                                </div>
                            </div>
                        </div>
                        <a href="https://careers.empireonecx.com/" target="_blank" rel="noopener noreferrer" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Acelere su contratacion ahora</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Por que importa
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                El cliente escalo mas rapido sin sacrificar la calidad del talento.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[80px] pb-[80px] bg-[#000]">
        <div class="container mx-auto w-full px-4">
            <div class="maincaseboxes flex justify-between">
                <div class="mainleftbox w-[739px]">
                    <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                        <div class="relative z-10 flex items-center gap-2">
                            <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                            <h2 class="spanfont text-[20px] leading-[28px] tracking-[-0.03em] m-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                AI-Enabled BPO Solucions
                            </h2> 
                        </div>
                    </div>
                    <h3 class="solution-heading headingspace text-white text-[40px] leading-[48px] tracking-[-0.03em] mb-[20px]">
                        Operaciones financieras alcanzan 60% de automatizacion
                    </h3>            
                    <div class="smpadd space-y-14 pt-4">
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-1 shadow-sm">
                                <img src="/assets/images/empsicons1.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Desafio</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    Las cargas pesadas de extraccion manual de datos ralentizaban las operaciones financieras y elevaban los costos de procesamiento para una empresa nacional.
                                </p>
                            </div>
                        </div>
                        <div class="noflexemp flex gap-6">
                            <div class="flex-shrink-0 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white icon-gradient-2 shadow-sm">
                                <img src="/assets/images/empsicons2.webp" loading="lazy" width="58" height="58" alt="">
                            </div>
                            <div class="mainheadcase">
                                <h4 class="text-[32px] tracking-tight text-white mb-2">Solucion</h4>
                                <p class="text-[20px] leading-[1.6] text-white">
                                    EmpireOneCX implemento procesamiento inteligente de documentos (IDP), automatizacion personalizada de flujos de trabajo y dashboards de analitica en tiempo real.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainrightsbox w-[412px] pt-[15px]">
                    <div class="results-gradient-bg rounded-[20px] p-10 text-white flex flex-col min-h-[480px] shadow-lg">
                        <div class="flex-grow">
                            <h4 class="text-[24px] mb-6 opacity-90">Resultados</h4>
                            <div class="w-16 h-[5px] bg-white  mb-10"></div>
                            
                            <div class="space-y-10">
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">60%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Procesos automatizados</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">42%</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Reduccion de errores</p>
                                </div>
                                <div class="empmaints flex items-center gap-5">
                                    <span class="text-[40px] w-[85px] font-bold leading-none tracking-tighter">2x</span>
                                    <p class="emptspace text-[16px] leading-tight pt-1 opacity-95">Productividad por FTE</p>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="mt-10 bg-white text-center py-4 px-4 rounded-xl font-bold text-[15px] shadow-md transition-all hover:scale-[1.02] active:scale-[0.98]">
                            <span class="gradient-text">Automatice sus operaciones</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mb-[12px] rounded-[10px] p-[2px] mt-[50px]"
                style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">

                <div class="rounded-[8px] px-6 py-6 flex flex-col md:flex-row md:items-center bg-[#fff]">
                    <div class="empgaps flex flex-col md:flex-row md:items-center gap-6 w-full">
                        <h4 class="mytextemp text-black text-[20px] leading-[28px] font-medium min-w-[120px] m-0">
                            Por que importa
                        </h4>
                        <div class="hidden md:block h-[42px] w-px bg-black flex-shrink-0"></div>
                        <div class="empsolbtn flex items-center justify-between">
                            <p class="text-black text-[18px] leading-[24px]">
                                La IA genero ROI medible, no solo experimentacion.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">
        <div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute w-[720px] h-[760px] right-[54px] top-[-140px] bg-no-repeat opacity-100" style="background-image: url('/assets/images/futuresideig.webp'); transform: rotate(42deg);"> </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="mx-auto relative">
                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                    <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                    <div class="absolute inset-[3px] rounded-[13px] bg-white">
                        <div class="absolute inset-0">
                            <div class="hidden md:block absolute inset-0"
                                style="background: url('/assets/images/cta-bg-image.webp') no-repeat center/cover;">
                            </div>
                            <div class="md:hidden absolute inset-0"
                                style="background: url('/assets/images/cta-gradient.webp') no-repeat center/cover;">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="future-innerwork py-5 px-4 md:px-16 relative z-10">
                    <div class="ctamain text-center">
                        <div class="cta-left-sidework  pt-[60px] pb-[60px]">
                            <h2 class="solution-heading cta-solution-section future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">
                                Listo para transformar sus
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> operaciones de negocio</span>?
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                Porque sus clientes merecen nada menos.
                            </p>
                            <div class="future-btn">
                                <a href="https://calendly.com/empireonegroup-marketing/30min" target="_blank" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Comience a reducir costos ahora <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "<?php echo $pageTitle; ?>",
  "description": "<?php echo $metaDescription; ?>",
  "url": "https://empireonecx.com/es/casos-de-estudio/",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Outsourcing de experiencia del cliente (CX)",
      "description": "Marca de eCommerce reduce el tiempo de respuesta en 62% y aumenta CSAT a 4.7/5",
      "url": "https://empireonecx.com/customer-experience-solutions"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Servicios BPO de back office",
      "description": "Empresa de logistica reduce el tiempo de procesamiento en 55%",
      "url": "https://empireonecx.com/back-office-outsourcing"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Outsourcing de finanzas y contabilidad",
      "description": "Empresa SaaS reduce el cierre mensual en 45%",
      "url": "https://empireonecx.com/finance-accounting-outsourcing"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Servicios de aseguramiento de calidad (QA)",
      "description": "Contact center eleva su puntaje QA de 78% a 92%",
      "url": "https://empireonecx.com/quality-assurance-services"
    }
  ]
}
</script>
<?php include(__DIR__ . "/../../inc/footer.php"); ?>