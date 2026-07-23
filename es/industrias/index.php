<?php
$siteLanguage = "es";
$baseHref = "/";
$page_title = "Industrias de CX y BPO | EmpireOneCX";
$meta_description = "Explore soluciones BPO y automatización con IA para industrias como salud, finanzas, tecnología, retail, seguros, viajes, eCommerce y más.";
$metaKeywords = "industrias BPO, outsourcing por industria, servicios CX en español, BPO para salud, BPO financiero, soporte para retail, automatización con IA";
$languageSwitchHrefEn = "/industries";
$languageAlternates = [
    "en" => "https://empireonecx.com/industries",
    "es" => "https://empireonecx.com/es/industrias/",
    "x-default" => "https://empireonecx.com/industries",
];
include(__DIR__ . "/../../inc/header.php");
?>
<main style="background-color: #000;">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "name": "Soluciones BPO por industria de EmpireOneCX",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "BPO para salud", "url": "https://empireonecx.com/industries/healthcare-bpo" },
        { "@type": "ListItem", "position": 2, "name": "BPO para seguros", "url": "https://empireonecx.com/insurance-bpo" },
        { "@type": "ListItem", "position": 3, "name": "Servicio al cliente", "url": "https://empireonecx.com/customer-experience-solutions" },
        { "@type": "ListItem", "position": 4, "name": "Soporte administrativo", "url": "https://empireonecx.com/back-office-outsourcing" }
      ]
    }
    </script>

    <section class="hero-section mainherowork relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 16rem; padding-bottom: 165px;">
        <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline poster="../assets/images/industries-poster.webp">
            <source src="../assets/images/industries.mp4" type="video/mp4" />
        </video>
        <div class="absolute bg-black/50 -z-10" style="width:1920px; height:611px;"></div>
        <div class="container mx-auto w-full relative z-10">
            <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                    Industrias
                </span>
            </p>
            <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto">
                Soluciones CX y BPO especializadas por industria
            </h1>
            <p class="subpara shortspace font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto sm:mb-2" style="max-width: 848px !important;padding-bottom: 10px;"> 
                El futuro de los negocios ya está aquí. EmpireOneCX impulsa a las industrias con soluciones de IA, experiencia del cliente (CX) e ingenio humano para operaciones tercerizadas, decisiones más inteligentes y crecimiento sostenido.  
            </p>
            <div class="animate-reveal delay-3 mb-8 text-gray-300 text-sm font-medium tracking-wide">
                <span>Cumplimiento HIPAA</span> &nbsp;|&nbsp; <span>Certificación PCI-DSS</span> &nbsp;|&nbsp; <span>Seguridad ISO 27001</span>
            </div>
            <div class="animate-reveal delay-4">
                <button onclick="window.location.href='contact'" class="herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;"> Evalúe su industria ahora </button>
            </div>
        </div>
    </section>

    <section class="controlbtns samesectionpadding pb-[10px] md:pb-[40px] pt-[60px] md:pt-[80px] relative overflow-hidden bg-cover bg-center">
        <div class="container mx-auto">
            <div class="linebtns flex flex-nowrap md:flex-wrap justify-start md:justify-center items-center gap-4 
                        overflow-x-auto md:overflow-visible 
                        px-5 md:px-0 pb-2 md:pb-0 
                        snap-x snap-mandatory
                        [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
                
                <a href="/es/industrias#retail" class="line-btn snap-center whitespace-nowrap active flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v1.webp" class="w-[24px] h-[24px] object-contain" alt="icono de retail"> <span>Retail</span>
                </a>

                <a href="/es/industrias#automotive" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v2.webp" class="w-[24px] h-[24px] object-contain" alt="icono automotriz"> <span>Automotriz</span>
                </a>

                <a href="/es/industrias#travel" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v3.webp" class="w-[24px] h-[24px] object-contain" alt="icono de viajes"> <span>Viajes</span>
                </a>

                <a href="/es/industrias#technical" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v4.webp" class="w-[24px] h-[24px] object-contain" alt="icono de telecomunicaciones"> <span>Telecom</span>
                </a>

                <a href="/es/industrias#insurance" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v5.webp" class="w-[24px] h-[24px] object-contain" alt="icono de seguros"> <span>Seguros</span>
                </a>

                <a href="/es/industrias#healthcare" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v6.webp" class="w-[24px] h-[24px] object-contain" alt="icono de salud"> <span>Salud</span>
                </a>

                <a href="/es/industrias#energy" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v7.webp" class="w-[24px] h-[24px] object-contain" alt="icono de energía"> <span>Energía</span>
                </a>

                <a href="/es/industrias#utility" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v8.webp" class="w-[24px] h-[24px] object-contain" alt="icono de servicios públicos"> <span>Servicios públicos</span>
                </a>

                <a href="/es/industrias#technology" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v9.webp" class="w-[24px] h-[24px] object-contain" alt="icono de tecnología"> <span>Tecnología</span>
                </a>

                <a href="/es/industrias#government" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v10.webp" class="w-[24px] h-[24px] object-contain" alt="icono de gobierno"> <span>Gobierno</span>
                </a>

                <a href="/es/industrias#legal" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v11.webp" class="w-[24px] h-[24px] object-contain" alt="icono legal"> <span>Legal</span>
                </a>

                <a href="/es/industrias#financeservices" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v12.webp" class="w-[24px] h-[24px] object-contain" alt="icono financiero"> <span>Servicios financieros</span>
                </a>

                <a href="/es/industrias#ecommerce" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v13.webp" class="w-[24px] h-[24px] object-contain" alt="icono de eCommerce"> <span>eCommerce</span>
                </a>

                <a href="/es/industrias#realestate" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v14.webp" class="w-[24px] h-[24px] object-contain" alt="Bienes raíces icon"> <span>Bienes raíces</span>
                </a>

                <a href="/es/industrias#gaming" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v15.webp" class="w-[24px] h-[24px] object-contain" alt="icono de gaming"> <span>Gaming</span>
                </a>

                <a href="/es/industrias#homeservices" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v16.webp" class="w-[24px] h-[24px] object-contain" alt="Home Servicios icon"> <span>Servicios para el hogar</span>
                </a>

                <a href="/es/industrias#homewarranty" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v17.webp" class="w-[24px] h-[24px] object-contain" alt="Garantía del hogar icon"> <span>Garantía del hogar</span>
                </a>

                <a href="/es/industrias#transportationlogistics" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v18.webp" class="w-[24px] h-[24px] object-contain" alt="icono de transporte"> <span>Transporte y logística</span>
                </a>

                <div class="min-w-[20px] md:hidden"></div>
                
            </div>
        </div>
    </section>

    <section class="industrysection samesectionpadding">
        <div class="container mx-auto px-4">
            <div class="mainflextag flex">
                <div class="leftsideline pt-[45px] relative">
                    <div id="scroll-line" class="w-1 bg-gray-300 h-full rounded relative">
                        <div id="scroll-progress" class="w-full h-0 rounded" style="background: linear-gradient(180deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                    </div>
                </div>
                <div class="rightsideline">
                    
                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="retail">
                        <div class="toptextwork ">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Retail </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Retail y eCommerce 
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Servicios CX y BPO
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX ayuda a marcas de retail y eCommerce a ofrecer recorridos simples desde la búsqueda hasta la entrega. Desde el procesamiento de pedidos hasta las consultas de clientes, nuestros equipos gestionan cada detalle con precisión y cuidado para fortalecer la confianza y la lealtad. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus1-mobile.webp">
                                <img src="../assets/images/indus1.webp" alt="Agente de outsourcing de servicio al cliente para retail" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Asistencia con pedidos y pagos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Soporte para programas de fidelidad y comentarios</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Coordinación de devoluciones y reembolsos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Atención al cliente por chat, teléfono y correo electrónico</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Gestión de productos e inventario</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="automotive">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Automotriz </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                BPO automotriz y  
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    relación con clientes
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">La industria automotriz depende de la precisión y la confiabilidad. EmpireOneCX ofrece soluciones de atención al cliente y back office que ayudan a fabricantes, concesionarios y centros de servicio a operar con fluidez y mantener relaciones sólidas con sus clientes. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus2-mobile.webp">
                                <img src="../assets/images/indus2.webp" alt="Soporte BPO automotriz y atención al cliente" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Programación y coordinación de citas </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Soporte a concesionarios y gestión de CRM</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Programas de retroalimentación y seguimiento</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Asistencia con garantías y reclamaciones</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Gestión de consultas sobre productos y servicios</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="travel">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Viajes y hospitalidad </span> 
                                </span>
                            </div>
                            <h2 class="solutionsitalic-font headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Viajes y hospitalidad  
                                <span class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-white" style="font-style:initial;">
                                    Servicios BPO
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">Ayudamos a marcas de viajes y hospitalidad a ofrecer experiencias fluidas desde la reserva hasta el soporte posterior a la estadía. Nuestros equipos de atención 24/7 garantizan que cada viajero se sienta valorado, informado y bien atendido. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus3.webp" alt="Especialista en soporte de reservas para viajes y hospitalidad" class="w-full h-[467px] object-cover object-center object-top"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Gestión de reservas </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Soporte para cancelaciones y reembolsos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Gestión de membresías y programas de fidelidad</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Atención por email, chat y redes sociales</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Atención a huéspedes y resolución de quejas</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="technical">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Telecom </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Telecomunicaciones y tecnología  
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Soporte BPO
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">Ayudamos a empresas tecnológicas a ofrecer una atención ágil y confiable. Los profesionales de soporte técnico de EmpireOneCX gestionan consultas, resolución de problemas y asistencia de producto con habilidad y empatía para mantener operaciones fluidas para sus clientes. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus4.webp" alt="Agente de soporte técnico para telecomunicaciones" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Soporte técnico de nivel 1 a nivel 3 </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Diagnóstico y resolución remota de problemas</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Cobertura de soporte continua 24/7</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Asistencia en configuración e incorporación de productos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Gestión de tickets y base de conocimiento </p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="insurance">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Seguros </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                BPO para seguros  
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Servicios
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX apoya a proveedores de seguros con atención al cliente eficiente y operaciones administrativas. Nuestro equipo garantiza comunicación clara, respuestas rápidas y asistencia confiable para los asegurados.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus5-mobile.webp">
                                <img src="../assets/images/indus5.webp" alt="BPO para seguros claims processing specialist" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Consultas de pólizas y procesamiento de reclamaciones </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Verificación de datos y gestión documental</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Soporte para retención de clientes </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Coordinación de facturación y pagos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Gestión de renovaciones y prospectos </p></div>
                                </div>
                                <div class="mt-6">
                                    <a href="/industries/insurance-bpo" class="industry-explore-btn">Explorar servicios BPO para seguros <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections pt-[40px] pb-[80px] scroll-animate" id="healthcare">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Salud </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                BPO para salud & 
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Compliance Servicios
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX colabora con proveedores de salud, aseguradoras y administradores para ofrecer soluciones de outsourcing seguras y preparadas para HIPAA. Gestionamos interacciones con pacientes y soporte administrativo con profesionalismo y cuidado.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus6-mobile.webp">
                                <img src="../assets/images/indus6.webp" alt="BPO para salud compliance and patient support specialist" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Programación de pacientes y asistencia en consultas </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Procesamiento de datos médicos y gestión de registros</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Seguimiento a miembros y pacientes </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Soporte para reclamaciones y facturación</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Verificación y coordinación de seguros </p></div>
                                </div>
                                <div class="mt-6">
                                    <a href="/industries/healthcare-bpo" class="industry-explore-btn">
                                        Explorar servicios BPO para salud
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="energy">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Energía </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Operaciones de energía y 
                                <span class="solutionsitalic-font text-white">
                                    soporte BPO
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">Ayudamos a empresas de energía a optimizar operaciones administrativas, soporte al cliente y flujos de datos para mejorar eficiencia, confiabilidad y continuidad del servicio.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus7.webp" alt="Equipo de operaciones de energía y soporte BPO" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Atención al cliente y soporte de facturación</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Procesamiento y validación de datos de medidores</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Coordinación de solicitudes de servicio e interrupciones</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Gestión de documentación de cumplimiento</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Soporte de informes y analítica</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="utility">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Servicios públicos </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Proveedores de servicios públicos 
                                <span class="solutionsitalic-font text-white">
                                    Servicios BPO
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX ofrece soporte operativo escalable para proveedores de servicios públicos, asegurando experiencias fluidas y manejo preciso de datos.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus8.webp" alt="Agente de servicio al cliente para servicios públicos" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Consultas de clientes y gestión de cuentas</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Procesamiento de facturación y pagos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Gestión de órdenes de servicio</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Ingreso de datos y validación de registros</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Coordinación de servicios en campo</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="technology">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Tecnología </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Tecnología y SaaS  
                                <span class="solutionsitalic-font text-white">
                                    Outsourcing
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">Colaboramos con empresas de tecnología para agilizar procesos, apoyar a usuarios y optimizar flujos internos.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus9.webp" alt="Equipo de outsourcing y soporte para tecnología SaaS" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Soporte técnico y de producto</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Operaciones de éxito del cliente para SaaS</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Anotación y etiquetado de datos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Soporte de QA y pruebas</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Gestión de base de conocimiento</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="government">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Gobierno </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Gobierno y sector público 
                                <span class="solutionsitalic-font text-white">
                                    soporte BPO
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX ofrece servicios operativos orientados a procesos que ayudan a las agencias gubernamentales a mejorar la eficiencia y la participación ciudadana.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus10.webp" alt="BPO para gobierno y procesamiento documental del sector público" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Procesamiento de casos y documentos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Ingreso y validación de datos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Servicios de atención ciudadana</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Gestión de registros</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Soporte de informes y cumplimiento</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="legal">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Legal </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Procesos legales 
                                <span class="solutionsitalic-font text-white">
                                    Outsourcing (LPO)
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX ofrece outsourcing confiable de procesos legales para que las firmas se enfoquen en la estrategia mientras nosotros gestionamos la ejecución operativa.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus11.webp" alt="Outsourcing de procesos legales y revisión documental" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Revisión y gestión de documentos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Extracción de datos de contratos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Soporte de investigación legal</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Asistencia en e-discovery</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Organización de expedientes</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="financeservices">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Finance Servicios </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Financial Servicios 
                                <span class="solutionsitalic-font text-white">
                                    BPO y soporte
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">Apoyamos a instituciones financieras con operaciones administrativas y de atención al cliente seguras y eficientes.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus12.webp" alt="Equipo back office BPO para servicios financieros" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Soporte de cuentas por pagar y por cobrar</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Conciliación y validación de datos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Operaciones de servicio al cliente</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Informes y analítica</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]" /><p class="text-black">Soporte de cumplimiento</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="ecommerce">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> eCommerce </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                eCommerce y retail 
                                <span class="solutionsitalic-font text-white">Outsourcing</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">Ayudamos a marcas de eCommerce a escalar operaciones mientras ofrecen experiencias rápidas y confiables.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus13.webp" alt="Fulfillment de pedidos eCommerce y servicio al cliente" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Procesamiento de pedidos y soporte de fulfillment</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Gestión de marketplaces</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Atención al cliente</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Actualizaciones de catálogo y precios</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Informes de rendimiento</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="realestate">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Bienes raíces </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Bienes raíces 
                                <span class="solutionsitalic-font text-white">Servicios BPO</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">Ayudamos a empresas inmobiliarias a agilizar transacciones, listados y comunicaciones con clientes.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus14.webp" alt="BPO inmobiliario y coordinación de transacciones" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Gestión de listados</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Calificación de prospectos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Coordinación de transacciones</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Actualizaciones de CRM</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Atención al cliente</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="gaming">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Gaming </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Soporte a jugadores y 
                                <span class="solutionsitalic-font text-white">Servicios BPO</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX ayuda a empresas de gaming a mantener operaciones fluidas y soporte ágil para jugadores.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus15.webp" alt="Agente de soporte y moderación para gaming" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Servicios de soporte a jugadores</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Moderación, confianza y seguridad</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Etiquetado de datos y QA</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Gestión de comunidades</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Informes e insights</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="homeservices">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Home Servicios </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Home Servicios 
                                <span class="solutionsitalic-font text-white">Soluciones BPO</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">Ayudamos a proveedores de servicios para el hogar a ofrecer programación rápida, soporte confiable y flujos eficientes.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus16.webp" alt="Soporte de programación y despacho para servicios del hogar" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Programación de citas</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Coordinación de despacho</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Servicio al cliente</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Soporte de facturación</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Actualizaciones de CRM</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="homewarranty">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Garantía del hogar </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Garantía del hogar 
                                <span class="solutionsitalic-font text-white">BPO de reclamaciones</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX apoya a empresas de garantía del hogar con operaciones precisas, rápidas y centradas en el cliente.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <img src="../assets/images/indus17.webp" alt="Soporte de procesamiento de reclamaciones de garantía del hogar" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Recepción y procesamiento de reclamaciones</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Coordinación de proveedores</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Servicio al cliente</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Soporte de administración de pólizas</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Informes</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="transportationlogistics">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Transporte y logística </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Logística y transporte 
                                <span class="solutionsitalic-font text-white">BPO</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">Ayudamos a empresas de logística y transporte a mejorar visibilidad, velocidad y eficiencia operativa.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus18.webp" alt="Agente BPO de seguimiento para logística y transporte" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    Lo que ofrecemos
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Seguimiento de envíos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Procesamiento de pedidos</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Gestión de documentación</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Atención al cliente</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="icono de verificación" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Datos e informes</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden">
        <div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute w-[720px] h-[760px] top-[-140px] bg-no-repeat opacity-100" style="background-image: url('../assets/images/futuresideig.webp'); transform: rotate(42deg);"> </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="mx-auto relative">
                <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                    <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                    <div class="absolute inset-[3px] rounded-[13px] bg-white">
                        <div class="absolute inset-0">
                            <div class="hidden md:block absolute inset-0" style="background: url('../assets/images/cta-bg-image.webp') no-repeat center/cover;"></div>
                            <div class="md:hidden absolute inset-0" style="background: url('../assets/images/cta-gradient.webp') no-repeat center/cover;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="future-innerwork py-5 px-4 md:px-16 relative z-10">
                    <div class="ctamain text-center">
                        <div class="cta-left-sidework  pt-[60px] pb-[60px]">
                            <h2 class="solution-heading cta-solution-section future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">
                                Asóciese con un BPO que
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> entiende su industria</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                EmpireOneCX aporta la estructura, experiencia y cuidado que su negocio necesita para crecer con confianza.
                            </p>
                            <div class="future-btn">
                                <a href="contact" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    Vea cómo generamos impacto <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include(__DIR__ . "/../../inc/footer.php"); ?>
<script>
const progress = document.getElementById('scroll-progress');
const mainFlex = document.querySelector('.mainflextag');

window.addEventListener('scroll', () => {
    const rect = mainFlex.getBoundingClientRect();
    const viewportCenter = window.innerHeight / 2;
    const distance = viewportCenter - rect.top;
    const total = rect.height;

    let percent = (distance / total) * 100;
    percent = Math.max(6, Math.min(100, percent));
    progress.style.height = percent + '%';
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const industryPages = {
        retail: ["/industries/retail-bpo", "Explorar servicios BPO para retail"],
        automotive: ["/industries/automotive-bpo", "Explorar servicios BPO automotrices"],
        travel: ["/industries/travel-hospitality-bpo", "Explorar servicios BPO para viajes"],
        technical: ["/industries/telecommunications-bpo", "Explorar servicios BPO para telecomunicaciones"],
        energy: ["/industries/energy-bpo", "Explorar servicios BPO para energía"],
        utility: ["/industries/utility-bpo", "Explorar servicios BPO para servicios públicos"],
        technology: ["/industries/technology-bpo", "Explorar servicios BPO para tecnología"],
        government: ["/industries/government-bpo", "Explorar servicios BPO para gobierno"],
        legal: ["/industries/legal-process-outsourcing", "Explorar servicios de outsourcing legal"],
        financeservices: ["/industries/financial-services-bpo", "Explorar BPO para servicios financieros"],
        ecommerce: ["/industries/ecommerce-bpo", "Explorar servicios BPO para eCommerce"],
        realestate: ["/industries/real-estate-bpo", "Explorar servicios BPO inmobiliarios"],
        gaming: ["/industries/gaming-bpo", "Explorar servicios BPO para gaming"],
        homeservices: ["/industries/home-services-bpo", "Explorar BPO para servicios del hogar"],
        homewarranty: ["/industries/home-warranty-bpo", "Explorar BPO para garantía del hogar"],
        transportationlogistics: ["/industries/transportation-logistics-bpo", "Explorar servicios BPO para logística"]
    };

    Object.entries(industryPages).forEach(function ([sectionId, page]) {
        const section = document.getElementById(sectionId);
        const offer = section ? section.querySelector(".mytextoffer") : null;
        if (!offer || offer.querySelector(".industry-explore-btn")) return;

        const wrapper = document.createElement("div");
        wrapper.className = "mt-6";
        wrapper.innerHTML = '<a class="industry-explore-btn" href="' + page[0] + '">' +
            page[1] + ' <i class="fa fa-arrow-right" aria-hidden="true"></i></a>';
        offer.appendChild(wrapper);
    });
});
</script>
<script>
  const buttons = document.querySelectorAll(".line-btn");
  buttons.forEach(btn => {
    btn.addEventListener("click", function () {
      buttons.forEach(b => b.classList.remove("btn-active"));
      this.classList.add("btn-active");
    });
  });
</script>
