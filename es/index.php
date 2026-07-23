<?php
$siteLanguage = "es";
$baseHref = "/";
$page_title = "Soluciones de experiencia del cliente y outsourcing global | EmpireOneCX";
$meta_description = "EmpireOneCX ofrece soluciones de experiencia del cliente, BPO y outsourcing global con equipos humanos apoyados por IA para escalar operaciones con rapidez.";
$metaKeywords = "experiencia del cliente, servicios BPO, outsourcing, atención al cliente, automatización con IA, equipos offshore";
$languageAlternates = [
    "en" => "https://empireonecx.com/",
    "es" => "https://empireonecx.com/es/",
    "x-default" => "https://empireonecx.com/",
];
include("../inc/header.php");
?>
<link rel="preload" href="assets/images/herobgdownimage.webp" as="image" fetchpriority="high">

<style>
@keyframes heroFadeInUp {
    from { opacity: 0; transform: translateY(40px) scale(0.98); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}
.hero-css-reveal {
    opacity: 0;
    animation: heroFadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
}
.hero-css-reveal.delay-1 { animation-delay: 0.10s; }
.hero-css-reveal.delay-2 { animation-delay: 0.28s; }
.hero-css-reveal.delay-3 { animation-delay: 0.46s; }
.hero-css-reveal.delay-4 { animation-delay: 0.64s; }
</style>

<main class="relative">
    <section class="hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 14rem; padding-bottom: 180px;">
        <video class="absolute" autoplay muted loop playsinline poster="assets/images/herobgdownimage.webp" preload="metadata" aria-hidden="true" style="width:100%;object-fit: cover;" width="1920" height="1080">
            <source src="./assets/images/hero.mp4" type="video/mp4" />
        </video>

        <div class="absolute bg-black/50 -z-8" style="width:100%; height:100%;"></div>
        <div class="container mx-auto w-full relative z-10">
            <div class="hero-main-heading-work">
                <h1 class="herosubtitle mb-4 hero-css-reveal delay-1">
                    <span class="relative z-10 flex justify-center items-center gap-2">
                        <span class="font-reckless font-normal text-[22px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
                            EmpireOneCX 			
                        </span>
                    </span>
                </h1>
    
                <h2 class="heromaintitle hero-css-reveal delay-2 text-[40px] font-medium leading-tight sm:leading-[1.1] mb-4 text-white">
                     Experiencia del cliente <span class="bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">asistida por IA</span>
                    <span class="text-white font-medium">y <span class="bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">soluciones BPO</span></span>
                </h2>
    
                <div class="hero-subpara font-normal hero-css-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto px-4 mb-8 sm:mb-6">
                    <p class="mb-4">
                        EmpireOneCX ofrece servicios seguros y escalables de CX y BPO asistidos por IA. Impulsados por IA, perfeccionados por personas.
                    </p>
                </div>
                
                <div class="hero-css-reveal delay-4">
                    <button onclick="window.location.href='/contact'" class="herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;">
                         Cree su equipo de CX hoy y comience en 72 horas
                    </button>
                </div>
            </div>
        </div>
        <div class="myimgshadow absolute w-full" style="bottom: -80px; left: 0; opacity: 1;">
    <img src="assets/images/herobgdownimage.webp" alt="" class="w-full h-auto object-cover" fetchpriority="high" decoding="sync" width="1920" height="470"> 
</div>
    </section>

    <section class="buildwith gradient-section relative">
        <div class="container mx-auto w-full px-4">
            <div class="main-build-with-work bg-white rounded-xl sm:rounded-2xl px-6 sm:px-8 md:px-12 py-6 sm:py-8 flex flex-col md:flex-row items-center justify-center gap-6 sm:gap-8 md:gap-15 border border-gray-200">

                <div class="centerbuilt flex items-center gap-3">
                    <span class="w-6 h-[4px] bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]"></span>
                    <p class="buildwithpara text-[24px] leading-[40px] tracking-[-0.03em] text-slate-900 font-medium">
                        Creado para generar confianza. Diseñado para la seguridad.
                    </p>
                </div>

                <div class="mybuiltlogo flex flex-wrap items-center justify-center sm:gap-5">
                    <div class="relative group">
                        <img src="./assets/images/built-logo1.webp"
                            class="h-[90px] w-[90px] lg:w-[71px] cursor-pointer buildwithbadges simpleimg" alt="SOC 2 Type II verified logo" loading="lazy" width="90" height="90" decoding="async" />

                        <div class="mainboxshover absolute bottom-full left-1/2 -translate-x-1/2 mb-3
                                    opacity-0 group-hover:opacity-100
                                    scale-95 group-hover:scale-100
                                    transition-all duration-300 ease-out
                                    bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]
                                    text-white text-xs px-4 py-3 rounded-xl
                                     text-center shadow-2xl z-50 pointer-events-none buildinfirst-logo" role="tooltip">
                            <strong class="block mb-1">SOC 2 Type II</strong>
                            Controles verificados de seguridad, disponibilidad y protección de datos.
                        </div>
                    </div>

                    <div class="relative group">
                        <img src="./assets/images/built-logo2.webp"
                            class="h-[90px] w-[90px] lg:w-[71px] cursor-pointer buildwithbadges simpleimg" alt="PCI DSS verified logo" loading="lazy" width="90" height="90" decoding="async" />

                        <div class="mainboxshover absolute bottom-full left-1/2 -translate-x-1/2 mb-3
                                    opacity-0 group-hover:opacity-100
                                    scale-95 group-hover:scale-100
                                    transition-all duration-300 ease-out
                                    bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]
                                    text-white text-xs px-4 py-3 rounded-xl
                                        text-center shadow-2xl z-50 pointer-events-none" role="tooltip">
                            <strong class="block mb-1">PCI DSS</strong>
                            Procesamiento seguro de datos de tarjetas de crédito.
                        </div>
                    </div>

                    <div class="relative group">
                        <img src="./assets/images/built-logo3.webp"
                            class="h-[90px] w-[90px] lg:w-[71px] cursor-pointer buildwithbadges simpleimg" alt="HIPAA Compliant verified logo" loading="lazy" width="90" height="90" decoding="async" />

                        <div class="mainboxshover absolute bottom-full left-1/2 -translate-x-1/2 mb-3
                                    opacity-0 group-hover:opacity-100
                                    scale-95 group-hover:scale-100
                                    transition-all duration-300 ease-out
                                    bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]
                                    text-white text-xs px-4 py-3 rounded-xl
                                        text-center shadow-2xl z-50 pointer-events-none" role="tooltip">
                            <strong class="block mb-1">HIPAA Compliant</strong>
                            Manejo protegido de datos de atención médica.
                        </div>
                    </div>

                    <div class="relative group cursor-pointer">
                        <img src="./assets/images/built-logo4.webp"
                            class="h-[90px] w-[90px] lg:w-[71px] cursor-pointer buildwithbadges simpleimg" alt="GDPR Compliant verified logo" loading="lazy" width="90" height="90" decoding="async" />

                        <div class="mainboxshover absolute bottom-full left-1/2 -translate-x-1/2 mb-3
                                    opacity-0 group-hover:opacity-100
                                    scale-95 group-hover:scale-100
                                    transition-all duration-300 ease-out
                                    bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]
                                    text-white text-xs px-4 py-3 rounded-xl
                                        text-center shadow-2xl z-50 pointer-events-none" role="tooltip">
                            <strong class="block mb-1">GDPR Compliant</strong>
                            Estándares de protección de datos personales de la UE.
                        </div>
                    </div>

                    <div class="relative group">
                            <img src="./assets/images/built-logo5.webp" class="buildwithbadges h-[90px] w-[90px] sm:w-64 md:w-80 lg:w-[71px]"  alt="ISO/IEC 27001:2022 Certification logo" loading="lazy" width="90" height="90" decoding="async" />

                        <div class="mainboxshover absolute bottom-full left-1/2 -translate-x-1/2 mb-3
                                    opacity-0 group-hover:opacity-100
                                    scale-95 group-hover:scale-100
                                    transition-all duration-300 ease-out
                                    bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]
                                    text-white text-xs px-4 py-3 rounded-xl
                                        text-center shadow-2xl z-50 pointer-events-none buildinlast-logo" role="tooltip">
                            <strong class="block mb-1">ISO/IEC 27001:2022</strong>
                            Gestión de seguridad de la información certificada.
                        </div>
                    </div>
                    
                    <div class="relative group">
                            <img src="./assets/images/built-logo6.webp" class="buildwithbadges h-[90px] w-[90px] sm:w-64 md:w-80 lg:w-[71px]" alt="BBB Accredited Business logo" loading="lazy" width="90" height="90" decoding="async" />
                        <div class="mainboxshover absolute bottom-full left-1/2 -translate-x-1/2 mb-3
                                    opacity-0 group-hover:opacity-100
                                    scale-95 group-hover:scale-100
                                    transition-all duration-300 ease-out
                                    bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C]
                                    text-white text-xs px-4 py-3 rounded-xl
                                        text-center shadow-2xl z-50 pointer-events-none buildinlast-logo" role="tooltip">
                            <strong class="block mb-1">BBB Accredited Business</strong>
                            Meets BBB Standards for Trust
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-empireone pt-14 relative overflow-hidden">
        <div class="container mx-auto w-full px-4">
            <div class="grid lg:grid-cols-2 items-center">
                <div class="space-y-6 empire-slide-left" id="about-left">
                    <h2 class="about-subtext relative flex items-center gap-2 text-sm pl-2 pr-4 py-3 overflow-hidden">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
                                Acerca de EmpireOneCX
                            </span>
                        </span>
                    </h2>

                    <h3 class="about-heading text-[32px] md:text-[48px] leading-[40px] md:leading-[56px] tracking-[-0.03em] mb-8 text-black" style="margin-top: 4px;">
                        Su socio confiable en experiencia del cliente y outsourcing
                    </h3>

                    <p class="about-para text-[#3C3B47] text-[16px] leading-relaxed max-w-xl">EmpireOneCX ofrece servicios seguros, escalables y asistidos por IA de CX y BPO que ayudan a las organizaciones a reducir costos, mejorar la eficiencia y elevar la experiencia del cliente.</p>
                    <p class="about-para text-[#3C3B47] text-[16px] leading-relaxed max-w-xl mb-8" style="max-width: 630px;">Somos un BPO integral que combina automatización y soluciones impulsadas por un equipo de expertos para clientes en
Norteamérica, Asia y mercados globales.</p>
                    <p class="about-para text-[#3C3B47] text-[16px] leading-relaxed max-w-xl" style="max-width: 630px;margin-top:12px;">Combinamos marcos operativos probados, profesionales offshore altamente capacitados y automatización avanzada para crear
resultados predecibles, medibles y escalables.</p>

                    <div class="keyrespons pb-[25px]">
                        <div class="topheadkeys pb-[22px]">
                            <h3 class="text-[24px] leading-[40px] text-slate-900 font-semibold">Lo que diferencia a EmpireOneCX</h3>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="flex items-center">
                                <div class="pr-[12px] flex items-center justify-center">
                                    <img src="assets/images/trianglebox.webp" alt="Decorative triangle box" loading="lazy" width="24" height="24" decoding="async">
                                </div>
                                <p class="text-[16px] keychangefont text-[#3C3B47]">Equipos offshore dedicados</p>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="pr-[12px] flex items-center justify-center">
                                    <img src="assets/images/trianglebox.webp" alt="Decorative triangle box" loading="lazy" width="24" height="24" decoding="async">
                                </div>
                                <p class="text-[16px] keychangefont text-[#3C3B47]">Entrega segura y conforme</p>
                            </div>

                            <div class="flex items-center">
                                <div class="pr-[12px] flex items-center justify-center">
                                    <img src="assets/images/trianglebox.webp" alt="Decorative triangle box" loading="lazy" width="24" height="24" decoding="async">
                                </div>
                                <p class="text-[16px] keychangefont text-[#3C3B47]">Flujos de trabajo asistidos por IA</p>
                            </div>

                            <div class="flex items-center">
                                <div class="pr-[12px] flex items-center justify-center">
                                    <img src="assets/images/trianglebox.webp" alt="Decorative triangle box" loading="lazy" width="24" height="24" decoding="async">
                                </div>
                                <p class="text-[16px] keychangefont text-[#3C3B47]">Mentalidad de alianza a largo plazo</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animatedvideo empire-slide-right relative block !items-end left-[120px] transition-all duration-700" id="about-right">
                    <video aria-hidden="true" tabindex="-1" autoplay muted loop playsinline preload="metadata" class="absolute inset-0 w-[519px] h-[582px] object-cover rounded-2xl" width="519" height="582">
                        <source src="./assets/images/homeabout-bgvideo.mp4" type="video/mp4" />
                    </video>
                    <img src="./assets/images/homeaboutimg.webp" alt="EmpireOneCX innovation showcase" loading="lazy" decoding="async" width="519" height="582" class="about-right-img relative z-10 w-[519px] h-[582px] object-cover" />
                </div>
            </div>
        </div>

        <div class="about-side-image absolute right-0 top-[62%]">
            <img src="./assets/images/aboutsideimg.webp" class="w-[95px] h-[140px] opacity-100 rotate-0" alt="about side image" loading="lazy" width="95" height="140" decoding="async" />
        </div>
    </section>

    <section class="customer-service pb-[100px]">
        <div class="container mx-auto w-full px-4">
            <div class="rounded-[16px] p-[2px] bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] opacity-100">
                <div class="bgcustomer bg-white rounded-[14px] px-10 py-12">
                    <h2 class="customersformat text-center text-[32px] leading-[40px] font-medium text-[#000000]">
                        Excelencia operativa respaldada por cifras
                    </h2>
                    <div class="mytexx grid grid-cols-1 md:grid-cols-5 gap-x-6 gap-y-10 md:gap-x-8 md:gap-y-6 text-center mt-8">
                        <div class="flex flex-col items-center space-y-3">
                            <div class="counter text-[40px] leading-[48px] tracking-[-0.03em] text-center font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent" data-target="10">
                                0
                            </div>
                            <p class="counterpara text-[16px] leading-[24px] tracking-[-0.02em] text-gray-700 text-center whitespace-nowrap">
                                Años de experiencia
                            </p>
                        </div>

                        <div class="flex flex-col items-center space-y-3">
                            <div class="counter text-[40px] leading-[48px] tracking-[-0.03em] text-center font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent" data-target="750" data-suffix="+">
                                0
                            </div>
                            <p class="counterpara text-[16px] leading-[24px] tracking-[-0.02em] text-gray-700 text-center whitespace-nowrap">
                                Agentes
                            </p>
                        </div>

                        <div class="flex flex-col items-center space-y-3">
                            <div class="counter text-[40px] leading-[48px] tracking-[-0.03em] text-center font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent" data-target="1.5" data-decimal="1" data-suffix="k">
                                0
                            </div>
                            <p class="counterpara text-[16px] leading-[24px] tracking-[-0.02em] text-gray-700 text-center whitespace-nowrap">
                                Capacidad de puestos
                            </p>
                        </div>

                        <div class="flex flex-col items-center space-y-3">
                            <div class="counter text-[40px] leading-[48px] tracking-[-0.03em] text-center font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent" data-target="4.4" data-decimal="1" data-suffix="%">
                                0
                            </div>
                            <p class="counterpara text-[16px] leading-[24px] tracking-[-0.02em] text-gray-700 text-center whitespace-nowrap">
                                Rotación
                            </p>
                        </div>

                        <div class="flex flex-col items-center space-y-3" style="padding-bottom: 0px;">
                            <div class="counter text-[40px] leading-[48px] tracking-[-0.03em] text-center font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent" data-target="87" data-suffix="%">
                                0
                            </div>
                            <p class="counterpara text-[16px] leading-[24px] tracking-[-0.02em] text-gray-700 text-center whitespace-nowrap">
                                Satisfacción del cliente
                            </p>
                        </div>

                        <div class="flex flex-col items-center space-y-4">
							<div class="counter text-[40px] leading-tight tracking-[-0.03em] font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent" data-target="5" data-suffix="+">
								0
							</div>
							<p class="counterpara text-[14px] sm:text-[15px] md:text-[16px] leading-[22px] sm:leading-[24px] tracking-[-0.02em] text-gray-700 text-center">
								Años impulsando operaciones digitales con IA
							</p>
						</div>

                        <div class="flex flex-col items-center space-y-4">
							<div class="counter text-[40px] leading-tight tracking-[-0.03em] font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent" data-target="12" data-suffix="+">
								0
							</div>
							<p class="counterpara text-[14px] sm:text-[15px] md:text-[16px] leading-[22px] sm:leading-[24px] tracking-[-0.02em] text-gray-700 text-center">
								Implementaciones empresariales en funciones clave
							</p>
						</div>

                        <div class="flex flex-col items-center space-y-4">
							<div class="countss text-[40px] leading-tight tracking-[-0.03em] font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent">
								35% - 60%
							</div>
							<p class="counterpara text-[14px] sm:text-[15px] md:text-[16px] leading-[22px] sm:leading-[24px] tracking-[-0.02em] text-gray-700 text-center">
								Mejoras de eficiencia mediante automatización inteligente
							</p>
						</div>

                        <div class="flex flex-col items-center space-y-4">
							<div class="countss text-[40px] leading-tight tracking-[-0.03em] font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent">
								4.8/5
							</div>
							<p class="counterpara text-[14px] sm:text-[15px] md:text-[16px] leading-[22px] sm:leading-[24px] tracking-[-0.02em] text-gray-700 text-center">
								Satisfacción de clientes de socios empresariales confiables
							</p>
						</div>

                        <div class="flex flex-col items-center space-y-4">
							<div class="countss text-[40px] leading-tight tracking-[-0.03em] font-medium bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent">
								24/7
							</div>
							<p class="counterpara text-[14px] sm:text-[15px] md:text-[16px] leading-[22px] sm:leading-[24px] tracking-[-0.02em] text-gray-700 text-center">
								Monitoreo con IA para calidad y cumplimiento
							</p>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nobreak container mx-auto relative overflow-visible">
            <div class="absolute w-[1178px] h-[1069px] bg-no-repeat bg-contain opacity-[20%] pointer-events-none" style="top: -720px; left: -885px; transform: rotate(90deg); background-image: url('./assets/images/homechooseus.webp'); z-index: -9;">
            </div>
        </div>
    </section>

    <section class="smart-solutions relative overflow-hidden bg-[rgba(14,4,25,1)]">
        <div class="solutions-right-image absolute right-0 z-[99999] top-[50px]">
            <img src="./assets/images/home-solution-side-img1.webp" class="smart-solution-sideimg w-[90px] h-[125px] opacity-100 rotate-0" alt="Solution side image" loading="lazy" decoding="async" width="90" height="125" />
        </div>
        <div class="solutions-left-image absolute left-0 top-[58.4%]">
            <img src="./assets/images/home-solution-side-img2.webp" class="smart-solution-sideimg w-[112px] h-[150px] opacity-100 rotate-0" alt="Solution side image" loading="lazy" decoding="async" width="112" height="150" />
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-8xl mx-auto mb-20">
                <div class="maintopheservice">
                    <span class="relative z-10 flex items-center gap-2" style="justify-content: center;">
                        <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                        <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
                            Nuestros servicios
                        </span>
                    </span>
                    <h3 class="solution-heading text-[48px] leading-[40px] tracking-[-0.03em] text-center text-white mb-[20px] pt-[22px]">
                        Nuestras soluciones de <span style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">CX y outsourcing</span> asistidas por IA
                    </h3>
                    <p class="solution-para text-[16px] leading-[24px] tracking-[1px] text-center text-white max-w-[630px] mx-auto">
                        EmpireOneCX ofrece servicios integrales de outsourcing diseñados para respaldar cada etapa de sus operaciones.
                    </p>
                </div>
            </div>

            <div class="flex gap-[22px] overflow-x-auto snap-x snap-mandatory max-[767px]:flex min-[768px]:grid md:grid-cols-2 lg:grid-cols-3 min-[768px]:overflow-visible [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
                <div class="mainpics group relative overflow-hidden transition-all duration-500 h-[525px] snap-center max-[767px]:min-w-[85%] fade-zoom-reveal">
                    <img src="./assets/images/soll1.webp" class="zoom-img absolute w-full h-full left-0 object-cover" style="mix-blend-mode: exclusion;" loading="lazy" alt="Customer Support" decoding="async" width="600" height="525" />
                    <div class="premium-gradient-overlay absolute inset-0 z-10"></div>
                    <div class="solution-cardset relative z-20 p-8 flex flex-col h-full">
                        <h2 class="font-semibold text-[24px] md:text-[32px] leading-[40px] text-white mb-1 transition-transform duration-500 group-hover:-translate-y-2">
                            Servicios de outsourcing de atención al cliente
                        </h2>
                        <h3 class="about-subtext relative flex items-center gap-2 py-3 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                <span class="makespx text-white text-[20px] leading-[28px] tracking-[-0.03em]">Equipos escalables de CX y BPO</span>
                            </span>
                        </h3>
                        <div class="hover-reveal-content">
                            <p class="pt-[12px] text-[16px] leading-[24px] text-white/90 max-w-[340px] mb-6">
                                Externalice la atención al cliente con agentes offshore dedicados y potenciados por IA. Mejore el CSAT, reduzca costos y escale el soporte con rapidez.
                            </p>
                            <a href="solutions#customersupport" class="about-btn-work text-[16px] leading-[24px] font-medium tracking-[-0.02em] inline-flex items-center gap-2 transition-all text-[#fff] bg-white/10 px-5 py-2 rounded-full backdrop-blur-sm border border-white/20 hover:bg-white/20">
                                Ver el impacto
                                <img src="assets/images/aboutbtnlearmore.webp" class="w-[24px] h-[24px]" loading="lazy" alt="Learn More Button" decoding="async" width="24" height="24" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mainpics group relative overflow-hidden transition-all duration-500 h-[525px] snap-center max-[767px]:min-w-[85%] fade-zoom-reveal">
                    <img src="./assets/images/soll2.webp" class="zoom-img absolute w-full h-full left-0 object-cover" style="mix-blend-mode: exclusion;" loading="lazy" alt="Customer Support" decoding="async" width="600" height="525" />
                    <div class="premium-gradient-overlay absolute inset-0 z-10"></div>
                    <div class="solution-cardset relative z-20 p-8 flex flex-col h-full">
                        <h2 class="font-semibold text-[24px] md:text-[32px] leading-[40px] text-white mb-1 transition-transform duration-500 group-hover:-translate-y-2">
                            Servicios de soporte back office
                        </h2>
                        <h3 class="about-subtext relative flex items-center gap-2 py-3 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                <span class="makespx text-white text-[20px] leading-[28px] tracking-[-0.03em]">Outsourcing de procesos offshore</span>
                            </span>
                        </h3>
                        <div class="hover-reveal-content">
                            <p class="pt-[12px] text-[16px] leading-[24px] text-white/90 max-w-[340px] mb-6">
                                Optimice sus operaciones con servicios de soporte back office. Equipos offshore precisos, escalables y rentables para tareas administrativas.
                            </p>
                            <a href="solutions#bookofficesupport" class="about-btn-work text-[16px] leading-[24px] font-medium tracking-[-0.02em] inline-flex items-center gap-2 transition-all text-[#fff] bg-white/10 px-5 py-2 rounded-full backdrop-blur-sm border border-white/20 hover:bg-white/20">
                                Ver el impacto
                                <img src="assets/images/aboutbtnlearmore.webp" class="w-[24px] h-[24px]" loading="lazy" alt="Learn More Button" decoding="async" width="24" height="24" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mainpics group relative overflow-hidden transition-all duration-500 h-[525px] snap-center max-[767px]:min-w-[85%] fade-zoom-reveal">
                    <img src="./assets/images/soll3.webp" class="zoom-img absolute w-full h-full left-0 object-cover" style="mix-blend-mode: exclusion;" loading="lazy" alt="Customer Support" decoding="async" width="600" height="525" />
                    <div class="premium-gradient-overlay absolute inset-0 z-10"></div>
                    <div class="solution-cardset relative z-20 p-8 flex flex-col h-full">
                        <h2 class="font-semibold text-[24px] md:text-[32px] leading-[40px] text-white mb-1 transition-transform duration-500 group-hover:-translate-y-2">
                            Servicios BPO de finanzas y contabilidad
                        </h2>
                        <h3 class="about-subtext relative flex items-center gap-2 py-3 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                <span class="makespx text-white text-[20px] leading-[28px] tracking-[-0.03em]">Equipos contables offshore</span>
                            </span>
                        </h3>
                        <div class="hover-reveal-content">
                            <p class="pt-[12px] text-[16px] leading-[24px] text-white/90 max-w-[340px] mb-6">
                                Externalice finanzas y contabilidad para reducir costos y mejorar la precisión. Servicios de contabilidad, cuentas por pagar/cobrar, nómina e informes.
                            </p>
                            <a href="solutions#finance" class="about-btn-work text-[16px] leading-[24px] font-medium tracking-[-0.02em] inline-flex items-center gap-2 transition-all text-[#fff] bg-white/10 px-5 py-2 rounded-full backdrop-blur-sm border border-white/20 hover:bg-white/20">
                                Ver el impacto
                                <img src="assets/images/aboutbtnlearmore.webp" class="w-[24px] h-[24px]" loading="lazy" alt="Learn More Button" decoding="async" width="24" height="24" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mainpics group relative overflow-hidden transition-all duration-500 h-[525px] snap-center max-[767px]:min-w-[85%] fade-zoom-reveal">
                    <img src="./assets/images/soll4.webp" class="zoom-img absolute w-full h-full left-0 object-cover" style="mix-blend-mode: exclusion;" loading="lazy" alt="Customer Support" decoding="async" width="600" height="525" />
                    <div class="premium-gradient-overlay absolute inset-0 z-10"></div>
                    <div class="solution-cardset relative z-20 p-8 flex flex-col h-full">
                        <h2 class="font-semibold text-[24px] md:text-[32px] leading-[40px] text-white mb-1 transition-transform duration-500 group-hover:-translate-y-2">
                            Servicios de aseguramiento de calidad (QA)
                        </h2>
                        <h3 class="about-subtext relative flex items-center gap-2 py-3 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                <span class="makespx text-white text-[20px] leading-[28px] tracking-[-0.03em]">Outsourcing de QA para call centers</span>
                            </span>
                        </h3>
                        <div class="hover-reveal-content">
                            <p class="pt-[12px] text-[16px] leading-[24px] text-white/90 max-w-[340px] mb-6">
                                Mejore la calidad del servicio con outsourcing de QA. Auditorías con IA, scorecards, insights de coaching y seguimiento del desempeño.
                            </p>
                            <a href="solutions#qualityassurance" class="about-btn-work text-[16px] leading-[24px] font-medium tracking-[-0.02em] inline-flex items-center gap-2 transition-all text-[#fff] bg-white/10 px-5 py-2 rounded-full backdrop-blur-sm border border-white/20 hover:bg-white/20">
                                Ver el impacto
                                <img src="assets/images/aboutbtnlearmore.webp" class="w-[24px] h-[24px]" loading="lazy" alt="Learn More Button" decoding="async" width="24" height="24" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mainpics group relative overflow-hidden transition-all duration-500 h-[525px] snap-center max-[767px]:min-w-[85%] fade-zoom-reveal">
                    <img src="./assets/images/soll5.webp" class="zoom-img absolute w-full h-full left-0 object-cover" style="mix-blend-mode: exclusion;" loading="lazy" alt="Customer Support" decoding="async" width="600" height="525" />
                    <div class="premium-gradient-overlay absolute inset-0 z-10"></div>
                    <div class="solution-cardset relative z-20 p-8 flex flex-col h-full">
                        <h2 class="font-semibold text-[24px] md:text-[32px] leading-[40px] text-white mb-1 transition-transform duration-500 group-hover:-translate-y-2">
                            Reclutamiento y soporte de fuerza laboral
                        </h2>
                        <h3 class="about-subtext relative flex items-center gap-2 py-3 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                <span class="makespx text-white text-[20px] leading-[28px] tracking-[-0.03em]">Soluciones globales de contratación</span>
                            </span>
                        </h3>
                        <div class="hover-reveal-content">
                            <p class="pt-[12px] text-[16px] leading-[24px] text-white/90 max-w-[340px] mb-6">
                                Contrate más rápido con reclutamiento offshore y soporte de fuerza laboral. Contratación, onboarding y gestión de personal 360°.
                            </p>
                            <a href="solutions#recruitment" class="about-btn-work text-[16px] leading-[24px] font-medium tracking-[-0.02em] inline-flex items-center gap-2 transition-all text-[#fff] bg-white/10 px-5 py-2 rounded-full backdrop-blur-sm border border-white/20 hover:bg-white/20">
                                Ver el impacto
                                <img src="assets/images/aboutbtnlearmore.webp" class="w-[24px] h-[24px]" loading="lazy" alt="Learn More Button" decoding="async" width="24" height="24" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mainpics group relative overflow-hidden transition-all duration-500 h-[525px] snap-center max-[767px]:min-w-[85%] fade-zoom-reveal">
                    <img src="./assets/images/soll6.webp" class="zoom-img absolute w-full h-full left-0 object-cover" style="mix-blend-mode: exclusion;" loading="lazy" alt="Customer Support" decoding="async" width="600" height="525" />
                    <div class="premium-gradient-overlay absolute inset-0 z-10"></div>
                    <div class="solution-cardset relative z-20 p-8 flex flex-col h-full">
                        <h2 class="font-semibold text-[24px] md:text-[32px] leading-[40px] text-white mb-1 transition-transform duration-500 group-hover:-translate-y-2">
                            Soluciones de experiencia del cliente asistidas por IA
                        </h2>
                        <h3 class="about-subtext relative flex items-center gap-2 py-3 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                <span class="makespx text-white text-[20px] leading-[28px] tracking-[-0.03em]">Automatización inteligente de procesos</span>
                            </span>
                        </h3>
                        <div class="hover-reveal-content">
                            <p class="pt-[12px] text-[16px] leading-[24px] text-white/90 max-w-[340px] mb-6">
                                Transforme sus operaciones con experiencia del cliente asistida por IA. Automatice flujos de trabajo, QA, documentos y analítica a escala.
                            </p>
                            <a href="solutions#aienablebpo" class="about-btn-work text-[16px] leading-[24px] font-medium tracking-[-0.02em] inline-flex items-center gap-2 transition-all text-[#fff] bg-white/10 px-5 py-2 rounded-full backdrop-blur-sm border border-white/20 hover:bg-white/20">
                                Ver el impacto
                                <img src="assets/images/aboutbtnlearmore.webp" class="w-[24px] h-[24px]" loading="lazy" alt="Learn More Button" decoding="async" width="24" height="24" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="globe-capability-work">
        <div class="globe-capability-work-header">
            <h2>Capacidad global y escalable para entregar experiencia del cliente</h2>
            <p>
                Nuestra presencia global permite operaciones 24/7, soporte multilingüe y alineación cultural.
            </p>
        </div>
        <div class="globe-capability-work-wrapper desktopshow">
            <img src="assets/images/new-globe-pic-image.webp" alt="Globe" class="globe-capability-work-image" loading="lazy" decoding="async" width="1000" height="1000">

            <div class="globe-coutry-img-text">
                <div class="globe-capability-work-country" style="top: 23%; left: 30%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/canada.webp" loading="lazy" decoding="async" width="32" height="32" alt="Canada flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Canada
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>
    
                <div class="globe-capability-work-country" style="top: 56%; left: 25%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Nicaragua.webp" loading="lazy" decoding="async" width="32" height="32" alt="Nicaragua flag"/>
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Nicaragua
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>
    
                <div class="globe-capability-work-country" style="top: 56%; left: 31%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Columbia.webp" loading="lazy" decoding="async" width="32" height="32" alt="Colombia flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Colombia
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>
    
                <div class="globe-capability-work-country" style="top: 53%; left: 34%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Benezuela.webp" loading="lazy" decoding="async" width="32" height="32" alt="Venezuela flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Venezuela
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>
    
                <div class="globe-capability-work-country" style="top: 63%; left: 35%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Bolovia.webp" loading="lazy" decoding="async" width="32" height="32" alt="Bolivia flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Bolivia
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>
    
                <div class="globe-capability-work-country" style="top: 66%; left: 38%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Paraguay.webp" loading="lazy" decoding="async" width="32" height="32" alt="Paraguay flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Paraguay
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>
    
                <div class="globe-capability-work-country" style="top: 28%; left: 48%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Morocco.webp" loading="lazy" decoding="async" width="32" height="32" alt="Morocco flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Morocco
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>

                <div class="globe-capability-work-country" style="top: 52%; left: 55%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/SouthAfrica.webp" loading="lazy" decoding="async" width="32" height="32" alt="South Africa flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                South Africa
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>

                <div class="globe-capability-work-country" style="top: 24%; left: 67%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Pakistan.webp" loading="lazy" decoding="async" width="32" height="32" alt="Pakistan flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Pakistan
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>

                <div class="globe-capability-work-country" style="top: 38%; left: 66.5%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/India.webp" loading="lazy" decoding="async" width="32" height="32" alt="India flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                India
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>

                <div class="globe-capability-work-country" style="top: 57%; left: 80%;">
                    <div class="relative">
                        <div class="tail-border"></div>
                        <div class="gradient-border-box shadow-2xl">
                            <div class="flex-shrink">
                                <img src="assets/images/Philphine.webp" loading="lazy" decoding="async" width="32" height="32" alt="Philippines flag">
                            </div>
                            <p class="text-white text-[14px] font-semibold tracking-tight">
                                Philippines
                            </p>
                            <div class="bubble-tail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="globe-capability-work-wrapper mobileshow">
            <img src="assets/images/mobileglobe.webp" alt="Globe" class="globe-capability-work-image" loading="lazy" decoding="async" width="400" height="400">
            <div class="globe-coutry-img-text">
                <div class="globe-capability-work-country" style="top: 40%; left: 24%;">
                    <span>Canada</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 68%; left: 15%;">
                    <span>Nicaragua</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 69%; left: 22%;">
                    <span>Colombia</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 66%; left: 25%;">
                    <span>Venezuela</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 73%; left: 27%;">
                    <span>Bolivia</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 77%; left: 31%;">
                    <span>Paraguay</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 50%; left: 45%;">
                    <span>Morocco</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 62%; left: 54%;">
                    <span>South Africa</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 50%; left: 71%;">
                    <span>Pakistan</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 56%; left: 74%;">
                    <span>India</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
    
                <div class="globe-capability-work-country" style="top: 69%; left: 89%;">
                    <span>Philippines</span>
                    <img src="assets/images/globe-location.webp" alt="location" loading="lazy" decoding="async" width="20" height="20">
                </div>
            </div>
        </div>
    </section>

    <section class="chooseus-section relative overflow-hidden bg-cover bg-center bg-[#FAF8F7]">
        <div class="container mx-auto px-4">
            <div class="changework grid gap-5 lg:grid-cols-2 gap-16 mb-10" style="align-items: center;">
                <div class="reveal-left">
                    <p class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                        <span class="relative z-10 flex items-center gap-2">
                            <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                            <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
                                ¿Por qué elegirnos?
                            </span>
                        </span>
                    </p>
                    <h2 class="about-heading text-[32px] md:text-[48px] leading-[40px] md:leading-[56px] tracking-[-0.03em] mb-8 text-black" style="margin-top: 4px;">
                        Por qué las empresas eligen EmpireOneCX
                    </h2>
                </div>
                <div class="reveal-right">
                    <p class="abformate text-[#3C3B47] text-[16px] leading-relaxed max-w-xl mb-10" style="max-width: 630px;">
                        En EmpireOneCX ofrecemos una combinación única de experiencia, innovación y calidad que nos diferencia dentro de la industria CX. Estas son algunas razones para elegirnos.
                    </p>
                </div>
            </div>
            <div class="chooseus-gridcard grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="reveal-left">
                    <div class="rounded-[14px] shadow-md p-[2px] h-[100%]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
                        <div class="mainformattext bg-white rounded-[calc(1rem-1px)] p-6 flex flex-row md:flex-col items-start gap-4 md:gap-[20px] h-full">
                            <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center">
                                <img src="assets/images/homecustomercareexp.webp" alt="experience" loading="lazy" decoding="async" class="w-full h-full object-contain">
                            </div>
                            <div class="boxesfont sm:ml-4 md:ml-0">
                                <h3 class="text-[18px] leading-[28px] text-[#000000] mb-1 md:mb-9" style="font-weight: 600;">
                                    Equipos dedicados y escalables
                                </h3>
                                <img src="assets/images/linebot.webp" loading="lazy" alt="Equipos dedicados y escalables" decoding="async" class="mb-[15px]">
                                <p class="text-[16px] text-slate-700 leading-[24px] leading-relaxed">
                                    Obtenga equipos de trabajo exclusivos, creados alrededor de los
objetivos de su negocio. Escale a otro nivel sus proyectos con modelos
flexibles diseñados para acompañar su crecimiento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal-left">
                    <div class="rounded-[14px] shadow-md p-[2px] h-[100%]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
                        <div class="mainformattext bg-white rounded-[calc(1rem-1px)] p-6 flex flex-row md:flex-col items-start gap-4 md:gap-[20px] h-full">
                            <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center">
                                <img src="assets/images/homecustomerinnov.webp" alt="Innovation" loading="lazy" decoding="async" class="w-full h-full object-contain">
                            </div>
                            <div class="boxesfont sm:ml-4 md:ml-0">
                                <h3 class="text-[18px] leading-[28px] text-[#000000] mb-1 md:mb-9" style="font-weight: 600;">
                                    Excelencia operativa impulsada por IA
                                </h3>
                                <img src="assets/images/linebot.webp" loading="lazy" alt="Excelencia operativa impulsada por IA" decoding="async" class="mb-[15px]">
                                <p class="text-[16px] text-slate-700 leading-[24px] leading-relaxed">
                                    Aprovechamos la eficiencia impulsada por la inteligencia artificial y la
automatización inteligente para optimizar los flujos de trabajo, mejorar
la precisión y acelerar la prestación de nuestros servicios, sin sacrificar
la calidad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal-right">
                    <div class="rounded-[14px] shadow-md p-[2px] h-[100%]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
                        <div class="mainformattext bg-white rounded-[calc(1rem-1px)] p-6 flex flex-row md:flex-col items-start gap-4 md:gap-[20px] h-full">
                            <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center">
                                <img src="assets/images/homecustomerquality.webp" alt="Quality" loading="lazy" decoding="async" class="w-full h-full object-contain">
                            </div>
                            <div class="boxesfont sm:ml-4 md:ml-0">
                                <h3 class="text-[18px] leading-[28px] text-[#000000] mb-1 md:mb-9" style="font-weight: 600;">
                                    Operaciones seguras, conformes y transparentes
                                </h3>
                                <img src="assets/images/linebot.webp" loading="lazy" alt="Operaciones seguras, conformes y transparentes" decoding="async" class="mb-[15px]">
                                <p class="text-[16px] text-slate-700 leading-[24px] leading-relaxed">
                                    Sus datos están protegidos mediante operaciones seguras y conformes, respaldadas por reportes transparentes que le dan visibilidad completa del desempeño y los resultados.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal-right">
                    <div class="rounded-[14px] shadow-md p-[2px] h-[100%]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
                        <div class="mainformattext bg-white rounded-[calc(1rem-1px)] p-6 flex flex-row md:flex-col items-start gap-4 md:gap-[20px] h-full">
                            <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center">
                                <img src="assets/images/homecustomerpartner.webp" alt="Partnership" loading="lazy" decoding="async" class="w-full h-full object-contain">
                            </div>
                            <div class="boxesfont sm:ml-4 md:ml-0">
                                <h3 class="text-[18px] leading-[28px] text-[#000000] mb-1 md:mb-9" style="font-weight: 600;">
                                    Entrega comprobada y resultados de desempeño
                                </h3>
                                <img src="assets/images/linebot.webp" loading="lazy" alt="Entrega comprobada y resultados de desempeño" decoding="async" class="mb-[15px]">
                                <p class="text-[16px] text-slate-700 leading-[24px] leading-relaxed">
                                    Entregamos resultados medibles mediante procesos probados,
ejecución consistente y una mentalidad orientada a resultados que
generan impacto real en el negocio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="corporate-social py-14 relative overflow-hidden">
        <div class="container mx-auto w-full px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="maincooporate reveal-left">
                    <h2 class="text-[40px] leading-[48px] tracking-[-0.03em] text-black mb-6">
                        Responsabilidad <br> 
                        <span class="csrfont text-[40px] leading-[48px] tracking-[-0.03em] text-black">
                            social corporativa
                        </span>
                    </h2>

                    <p class="businesstext text-[16px] leading-[24px] tracking-[-0.02em] text-[rgba(60,59,71,1)] mb-10 max-w-[505px] ">
                        Creemos que el éxito empresarial se mide no solo por el crecimiento, sino también por el impacto. EmpireOneCX está profundamente comprometida con crear cambios positivos a través de nuestra gente y nuestras comunidades.
                    </p>

                    <div class="flex flex-col items-start gap-4">
                        <img src="assets/images/csrqouma.webp" loading="lazy" alt="quote" decoding="async" class="w-[28px] h-[14px]">
                        <p class="coptext [font-family:'helvetica',Arial,sans-serif] font-medium text-[24px] leading-[32px] tracking-[0em] bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                            Creemos que el crecimiento sostenible nace 
                            <br class="nobreak"> de crear un impacto positivo.
                        </p>
                    </div>
                </div>
                <div class="socialcards grid grid-cols-1 md:grid-cols-2 gap-6 relative">
                    <div class="relative z-10 space-y-6">
                        <div class="p-[2px] rounded-2xl bg-gradient-to-br from-[#7A76FF] via-[#CB46FA] to-[#FF8A00] shadow-sm reveal-right">
                            <div class="csr-card-work bg-white rounded-[calc(1rem-1px)] py-8 pl-[20px] pr-[20px] flex flex-row md:flex-col items-start md:items-center text-left md:text-center gap-4 md:gap-0 h-full">
                                <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center md:mb-4">
                                    <img src="assets/images/homeCommunity.webp" loading="lazy" alt="Development" decoding="async" class="w-full h-full object-contain">
                                </div>
                                <div class="maintextss flex-1">
                                    <h3 class="text-[18px] leading-[28px] mb-2" style="font-weight: 600;">
                                        Empoderamiento comunitario
                                    </h3>
                                    <p class="text-[16px] text-slate-600 leading-[24px]">
                                        Brindamos oportunidades y apoyo a causas locales
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-[2px] rounded-2xl bg-gradient-to-br from-[#7A76FF] via-[#CB46FA] to-[#FF8A00] shadow-sm reveal-right">
                            <div class="csr-card-work bg-white rounded-[calc(1rem-1px)] py-8 pl-[20px] pr-[20px] flex flex-row md:flex-col items-start md:items-center text-left md:text-center gap-4 md:gap-0 h-full">
                                <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center md:mb-4">
                                    <img src="assets/images/homeWell-being.webp" loading="lazy" alt="Bienestar de los colaboradores" decoding="async" class="w-full h-full object-contain">
                                </div>
                                <div class="maintextss flex-1">
                                    <h3 class="text-[18px] leading-[28px] mb-2" style="font-weight: 600;">
                                        Bienestar de los colaboradores
                                    </h3>
                                    <p class="text-[16px] text-slate-600 leading-[24px]">
                                        Promovemos la salud mental, el equilibrio y el crecimiento profesional
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="csrlast-cards relative z-10 space-y-6 md:mt-12">
                        <div class="p-[2px] rounded-2xl bg-gradient-to-br from-[#7A76FF] via-[#CB46FA] to-[#FF8A00] shadow-sm reveal-right">
                            <div class="csr-card-work bg-white rounded-[calc(1rem-1px)] py-8 pl-[20px] pr-[20px] flex flex-row md:flex-col items-start md:items-center text-left md:text-center gap-4 md:gap-0 h-full">
                                <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center md:mb-4">
                                    <img src="assets/images/homeResponsibility.webp" alt="Responsabilidad ambiental" loading="lazy" decoding="async" class="w-full h-full object-contain">
                                </div>
                                <div class="maintextss flex-1">
                                    <h3 class="text-[18px] leading-[28px] mb-2" style="font-weight: 600;">
                                        Responsabilidad ambiental
                                    </h3>
                                    <p class="text-[16px] text-slate-600 leading-[24px]">
                                        Adoptamos prácticas sostenibles dentro de nuestras operaciones
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-[2px] rounded-2xl bg-gradient-to-br from-[#7A76FF] via-[#CB46FA] to-[#FF8A00] shadow-sm reveal-right">
                            <div class="csr-card-work bg-white rounded-[calc(1rem-1px)] py-8 pl-[20px] pr-[20px] flex flex-row md:flex-col items-start md:items-center text-left md:text-center gap-4 md:gap-0 h-full">
                                <div class="flex-shrink-0 w-[64px] h-[64px] sm:w-16 sm:h-16 md:w-16 md:h-16 flex items-center justify-center md:mb-4">
                                    <img src="assets/images/homeDevelopment.webp" alt="Skill Development" loading="lazy" decoding="async" class="w-full h-full object-contain">
                                </div>
                                <div class="maintextss flex-1">
                                    <h3 class="text-[18px] leading-[28px] mb-2" style="font-weight: 600;">
                                        Educación y desarrollo de habilidades
                                    </h3>
                                    <p class="text-[16px] text-slate-600 leading-[24px]">
                                        Apoyamos programas que impulsan a las futuras generaciones
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqsection pt-[80px] pb-[70px] relative">
        <div class="container mx-auto w-full px-4">
            <div class="text-center mb-16">
                <p class="relative flex items-center justify-center gap-2 text-sm py-3 overflow-hidden">
                    <span class="relative z-10 flex items-center gap-2">
                        <span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                        <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
                            Preguntas frecuentes
                        </span>
                    </span>
                </p>
                <h2 class="mt-2 text-[32px] md:text-[48px]">
                    Preguntas frecuentes
                </h2>
            </div>
            <div class="space-y-4">
    <div class="active faq-item group border-none bg-white shadow-sm transition-all duration-300 hover:shadow-md [&.active]:bg-gradient-to-r [&.active]:from-[#7A76FF] [&.active]:via-[#CB46FA] [&.active]:to-[#FE881C]">
        <button onclick="toggleFaq(this)" class="flex items-center justify-between w-full p-5 sm:p-6 text-left focus:outline-none">
            
            <h3 class="text-[18px] md:text-[22px] font-semibold text-slate-800 group-[.active]:text-white pr-8">¿Qué servicios ofrece EmpireOneCX?</h3>
            
            <span class="faq-icon flex-shrink-0 ">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </button>
        <div class="faq-content">
            <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-slate-600 group-[.active]:text-white/90 leading-relaxed border-t border-slate-50 group-[.active]:border-white/20 pt-4">
                
                <p>EmpireOneCX ofrece una suite integral de soluciones de outsourcing que incluye:</p>
                
                <ul class="mt-3 space-y-2 list-disc list-inside group-[.active]:text-white">
                    <li>Outsourcing de atención al cliente</li>
                    <li>Soporte back office</li>
                    <li>BPO de finanzas y contabilidad</li>
                    <li>Servicios de QA</li>
                    <li>Reclutamiento y soporte de fuerza laboral</li>
                    <li>Soluciones BPO asistidas por IA</li>
                </ul>
            </div>
        </div>
    </div>
</div>

                <div class="faq-item group bg-white border-top border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md [&.active]:bg-gradient-to-r [&.active]:from-[#7A76FF] [&.active]:via-[#CB46FA] [&.active]:to-[#FE881C]">
                    <button onclick="toggleFaq(this)" class="flex items-center justify-between w-full p-5 sm:p-6 text-left focus:outline-none">
    <h3 class="text-[18px] md:text-[22px] font-semibold text-slate-800 group-[.active]:text-white pr-8">¿Ofrecen equipos offshore exclusivos?</h3>
    <span class="faq-icon flex-shrink-0 ">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </span>
</button>
                    <div class="faq-content">
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-slate-600 group-[.active]:text-white/90 leading-relaxed border-t border-slate-50 group-[.active]:border-white/20 pt-4">
                            Sí. Nos especializamos en crear <span class="font-medium group-[.active]:text-white">equipos offshore dedicados y de tiempo completo</span> que funcionan como una extensión natural de su empresa, alineados exclusivamente con sus objetivos y cultura.
                        </div>
                    </div>
                </div>

                <div class="faq-item group bg-white border-top border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md [&.active]:bg-gradient-to-r [&.active]:from-[#7A76FF] [&.active]:via-[#CB46FA] [&.active]:to-[#FE881C]">
                    <button onclick="toggleFaq(this)" class="flex items-center justify-between w-full p-5 sm:p-6 text-left focus:outline-none">
                        <h3 class="text-[18px] md:text-[22px] font-semibold text-slate-800 group-[.active]:text-white pr-8">¿Sus operaciones son seguras y cumplen normativas?</h3>
                        <span class="faq-icon flex-shrink-0 ">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-slate-600 group-[.active]:text-white/90 leading-relaxed border-t border-slate-50 group-[.active]:border-white/20 pt-4">
                            Por supuesto. La seguridad de los datos es nuestra prioridad. Mantenemos cumplimiento con:
                            <div class="mt-4 grid grid-cols-2 gap-2">
                                <div class="flex items-center text-sm font-medium text-slate-700 bg-slate-50 p-2 rounded-lg group-[.active]:bg-white/10 group-[.active]:text-white">
                                    <svg class="w-4 h-4 mr-2 text-green-500 group-[.active]:text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                                    Estándares ISO
                                </div>
                                <div class="flex items-center text-sm font-medium text-slate-700 bg-slate-50 p-2 rounded-lg group-[.active]:bg-white/10 group-[.active]:text-white">
                                    <svg class="w-4 h-4 mr-2 text-green-500 group-[.active]:text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                                    GDPR & HIPAA
                                </div>
                                <div class="flex items-center text-sm font-medium text-slate-700 bg-slate-50 p-2 rounded-lg group-[.active]:bg-white/10 group-[.active]:text-white">
                                    <svg class="w-4 h-4 mr-2 text-green-500 group-[.active]:text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                                    Alineación PCI-DSS
                                </div>
                                <div class="flex items-center text-sm font-medium text-slate-700 bg-slate-50 p-2 rounded-lg group-[.active]:bg-white/10 group-[.active]:text-white">
                                    <svg class="w-4 h-4 mr-2 text-green-500 group-[.active]:text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                                    Controles SOC 2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item group bg-white border-top border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md [&.active]:bg-gradient-to-r [&.active]:from-[#7A76FF] [&.active]:via-[#CB46FA] [&.active]:to-[#FE881C]">
                    <button onclick="toggleFaq(this)" class="flex items-center justify-between w-full p-5 sm:p-6 text-left focus:outline-none">
                        <h3 class="text-[18px] md:text-[22px] font-semibold text-slate-800 group-[.active]:text-white pr-8">¿Qué tan rápido podemos lanzar un equipo?</h3>
                        <span class="faq-icon flex-shrink-0 ">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-slate-600 group-[.active]:text-white/90 leading-relaxed border-t border-slate-50 group-[.active]:border-white/20 pt-4">
                            Nuestro proceso de incorporación es ágil. Nos permite conformar y poner en marcha un equipo, por lo general, en un
plazo de 2 a 4 semanas. Este tiempo puede variar ligeramente según la complejidad técnica del proyecto y las
habilidades específicas requeridas para los cargos.
                        </div>
                    </div>
                </div>

                <div class="faq-item group bg-white border-top border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md [&.active]:bg-gradient-to-r [&.active]:from-[#7A76FF] [&.active]:via-[#CB46FA] [&.active]:to-[#FE881C]">
                    <button onclick="toggleFaq(this)" class="flex items-center justify-between w-full p-5 sm:p-6 text-left focus:outline-none">
                        <h3 class="text-[18px] md:text-[22px] font-semibold text-slate-800 group-[.active]:text-white pr-8">¿Pueden escalar equipos hacia arriba o hacia abajo?</h3>
                        <span class="faq-icon flex-shrink-0 ">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-slate-600 group-[.active]:text-white leading-relaxed border-t border-slate-50 group-[.active]:border-black/20 pt-4">
                            Sí. Nuestros modelos de colaboración están diseñados para ofrecer <span class="font-medium group-[.active]:text-white">máxima flexibilidad</span>. Ya sea por picos estacionales o crecimiento acelerado, podemos ajustar el tamaño de su equipo a sus necesidades operativas.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nobreak container mx-auto relative overflow-visible">
            <div class="absolute w-[1178px] h-[1069px] bg-no-repeat bg-contain pointer-events-none" style="top: -500px; left: -800px; transform: rotate(90deg); background-image: url('./assets/images/homechooseus.webp'); z-index: -9; opacity:0.4;">
            </div>
        </div>
    </section>

    <section class="cta-section relative py-24 overflow-hidden">
		<div class="container mx-auto px-4 relative z-10">
			<div class="mx-auto relative">
				<div class="absolute inset-0 rounded-[16px] overflow-hidden">
					<div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
					<div class="absolute inset-[3px] rounded-[13px] bg-white">
						<div class="absolute inset-0">
							<div class="hidden md:block absolute inset-0" style="background: url('./assets/images/cta-bg-image.webp') no-repeat center/cover;"></div>
							<div class="md:hidden absolute inset-0" style="background: url('./assets/images/cta-gradient.webp') no-repeat center/cover;"></div>
						</div>
					</div>
				</div>
				
				<div class="future-innerwork py-5 px-4 md:px-16 relative z-10">
					<div class="ctamain text-center">
						<div class="cta-left-sidework pt-[60px] pb-[60px]">
							<h2 class="solution-heading future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">
								Reinvente la experiencia del cliente <br class="nobreak"> con <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em]">EmpireOneCX</span>
							</h2>
							<p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
								IA más inteligente. Toque humano real. Resultados medibles.
							</p>
							<div class="future-btn">
								<a href="/about-us" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
									Conozca nuestra historia <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include("../inc/footer.php"); ?>
