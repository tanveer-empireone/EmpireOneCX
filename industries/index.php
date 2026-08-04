<?php
    $pageTitle = "CX & BPO Services by Industry: Healthcare, Tech & Finance";
    $metaDescription = "Explore tailored BPO services and AI automation solutions for 18+ industries. Scale your operations with our healthcare, finance, and tech outsourcing experts.";
    // $metaKeywords removed to prevent competitor scraping and because it is deprecated
    $baseHref = "/";
    $languageAlternates = [
        "en" => "https://empireonecx.com/industries/",
        "x-default" => "https://empireonecx.com/industries/",
    ];
    include(__DIR__ . "/../inc/header.php");
?>
<main style="background-color: #000;">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "name": "EmpireOneCX Industry BPO Solutions",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Healthcare BPO", "url": "https://empireonecx.com/industries/healthcare-bpo" },
        { "@type": "ListItem", "position": 2, "name": "Insurance BPO", "url": "https://empireonecx.com/insurance-bpo" },
        { "@type": "ListItem", "position": 3, "name": "Customer Service", "url": "https://empireonecx.com/customer-experience-solutions" },
        { "@type": "ListItem", "position": 4, "name": "Back Office Support", "url": "https://empireonecx.com/back-office-outsourcing" }
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
                    Industries
                </span>
            </p>
            <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto">
                Industry-Specific CX & BPO Solutions
            </h1>
            <p class="subpara shortspace font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto sm:mb-2" style="max-width: 848px !important;padding-bottom: 10px;"> 
                The future of business is here. EmpireOneCX empowers industries with cutting-edge AI solutions, customer experience (CX), and human ingenuity for outsourcing operations, driving smarter decisions and breakthrough growth.  
            </p>
            <div class="animate-reveal delay-3 mb-8 text-gray-300 text-sm font-medium tracking-wide">
                <span>HIPAA Compliant</span> &nbsp;|&nbsp; <span>PCI-DSS Certified</span> &nbsp;|&nbsp; <span>ISO 27001 Secure</span>
            </div>
            <div class="animate-reveal delay-4">
                <button onclick="window.location.href='contact'" class="herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;"> Check Your Industry Fit Now </button>
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
                
                <a href="/industries/#retail" class="line-btn snap-center whitespace-nowrap active flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v1.webp" class="w-[24px] h-[24px] object-contain" alt="Retail icon"> <span>Retails</span>
                </a>

                <a href="/industries/#automotive" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v2.webp" class="w-[24px] h-[24px] object-contain" alt="Automotive icon"> <span>Automotive</span>
                </a>

                <a href="/industries/#travel" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v3.webp" class="w-[24px] h-[24px] object-contain" alt="Travel icon"> <span>Travel</span>
                </a>

                <a href="/industries/#technical" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v4.webp" class="w-[24px] h-[24px] object-contain" alt="Telco icon"> <span>Telco</span>
                </a>

                <a href="/industries/#insurance" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v5.webp" class="w-[24px] h-[24px] object-contain" alt="Insurance icon"> <span>Insurance</span>
                </a>

                <a href="/industries/#healthcare" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v6.webp" class="w-[24px] h-[24px] object-contain" alt="Healthcare icon"> <span>Healthcare</span>
                </a>

                <a href="/industries/#energy" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v7.webp" class="w-[24px] h-[24px] object-contain" alt="Energy icon"> <span>Energy</span>
                </a>

                <a href="/industries/#utility" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v8.webp" class="w-[24px] h-[24px] object-contain" alt="Utility icon"> <span>Utility</span>
                </a>

                <a href="/industries/#technology" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v9.webp" class="w-[24px] h-[24px] object-contain" alt="Technology icon"> <span>Technology</span>
                </a>

                <a href="/industries/#government" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v10.webp" class="w-[24px] h-[24px] object-contain" alt="Government icon"> <span>Government</span>
                </a>

                <a href="/industries/#legal" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v11.webp" class="w-[24px] h-[24px] object-contain" alt="Legal icon"> <span>Legal</span>
                </a>

                <a href="/industries/#financeservices" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v12.webp" class="w-[24px] h-[24px] object-contain" alt="Finance icon"> <span>Finance Services</span>
                </a>

                <a href="/industries/#ecommerce" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v13.webp" class="w-[24px] h-[24px] object-contain" alt="eCommerce icon"> <span>eCommerce</span>
                </a>

                <a href="/industries/#realestate" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v14.webp" class="w-[24px] h-[24px] object-contain" alt="Real Estate icon"> <span>Real Estate</span>
                </a>

                <a href="/industries/#gaming" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v15.webp" class="w-[24px] h-[24px] object-contain" alt="Gaming icon"> <span>Gaming</span>
                </a>

                <a href="/industries/#homeservices" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v16.webp" class="w-[24px] h-[24px] object-contain" alt="Home Services icon"> <span>Home Services</span>
                </a>

                <a href="/industries/#homewarranty" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v17.webp" class="w-[24px] h-[24px] object-contain" alt="Home Warranty icon"> <span>Home Warranty</span>
                </a>

                <a href="/industries/#transportationlogistics" class="line-btn snap-center whitespace-nowrap flex flex-row items-center justify-center gap-2 px-6 md:px-8 py-4 rounded-[8px] text-white text-[16px] bg-[#29292B] hover:bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)]">
                    <img src="../assets/images/v18.webp" class="w-[24px] h-[24px] object-contain" alt="Transportation icon"> <span>Transportation & Logistics</span>
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
                                Retail & eCommerce 
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    CX & BPO Services
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX helps retail and e-commerce brands provide effortless customer journeys from browsing to delivery. From order processing to customer inquiries, our teams handle every detail with precision and care to bolster brand trust and loyalty. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus1-mobile.webp">
                                <img src="../assets/images/indus1.webp" alt="Retail customer service outsourcing agent" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Order and payment assistance</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Loyalty and feedback program support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Returns and refund coordination</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Customer support via chat, phone, and email</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Product and inventory management</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="automotive">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Automotive </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Automotive BPO &  
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Customer Engagement
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">The automotive industry thrives on accuracy and reliability. EmpireOneCX provides customer engagement and back-office solutions that help manufacturers, dealerships, and service centers manage operations smoothly and maintain strong client relationships. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus2-mobile.webp">
                                <img src="../assets/images/indus2.webp" alt="Automotive BPO and customer engagement support" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Appointment scheduling and coordination </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Dealer support and CRM management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Customer feedback and follow-up programs</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Warranty and claims assistance</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Product and service inquiry handling</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="travel">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Travel and Hospitality </span> 
                                </span>
                            </div>
                            <h2 class="solutionsitalic-font headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Travel & Hospitality  
                                <span class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-white" style="font-style:initial;">
                                    BPO Services
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">We help travel and hospitality brands deliver seamless guest experiences from booking to post-stay support. Our 24/7 customer service teams guarantee every traveler feels valued, informed, and cared for. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus3.webp" alt="Travel and hospitality reservation support specialist" class="w-full h-[467px] object-cover object-center object-top"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Reservation and booking management </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Cancellations and refund support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Membership and loyalty program management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Email, chat, and social media engagement</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Guest care and complaint resolution</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="technical">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Telco </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Telecommunications & Tech  
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Support BPO
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">We help technology-driven companies provide responsive and dependable customer care. EmpireOneCX's technical support professionals handle inquiries, troubleshooting, and product assistance with skill and empathy, securing smooth operations for your customers. </p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus4.webp" alt="Telecommunications tech support agent" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Tier 1 to Tier 3 technical support </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Remote troubleshooting and diagnostics</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Continuous 24/7 support coverage</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Product setup and onboarding assistance</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Ticket and knowledge base management </p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="insurance">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Insurance </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Insurance BPO  
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Services
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX supports insurance providers with efficient customer care and back-office operations. Our team ensures policyholders receive clear communication, fast resolutions, and reliable assistance.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus5-mobile.webp">
                                <img src="../assets/images/indus5.webp" alt="Insurance BPO claims processing specialist" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Policy inquiry and claims processing </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Data verification and document management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Customer retention support </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Billing and payment coordination</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Renewal and lead management </p></div>
                                </div>
                                <div class="mt-6">
                                    <a href="/industries/insurance-bpo" class="industry-explore-btn">Explore Insurance BPO Services <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections pt-[40px] pb-[80px] scroll-animate" id="healthcare">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> 
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Healthcare </span> 
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Healthcare BPO & 
                                <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">
                                    Compliance Services
                                </span>
                            </h2> 
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX partners with healthcare providers, insurers, and administrators to deliver secure, HIPAA-ready outsourcing solutions. We handle patient interactions and administrative support with professionalism and care.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <source media="(max-width: 767px)" srcset="../assets/images/indus6-mobile.webp">
                                <img src="../assets/images/indus6.webp" alt="Healthcare BPO compliance and patient support specialist" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class=" absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Patient scheduling and inquiry assistance </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Medical data processing and record management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Member and patient follow-up </p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Claims and billing support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Insurance verification and coordination </p></div>
                                </div>
                                <div class="mt-6">
                                    <a href="/industries/healthcare-bpo" class="industry-explore-btn">
                                        Explore Healthcare BPO Services
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
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Energy </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Energy Operations & 
                                <span class="solutionsitalic-font text-white">
                                    BPO Support
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">We help energy companies streamline back-office operations, customer support, and data workflows to improve efficiency, reliability, and service continuity.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus7.webp" alt="Energy operations and BPO support team" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Customer service and billing support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Meter data processing and validation</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Service request and outage coordination</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Compliance documentation management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-[16px] leading-[24px] text-black">Reporting and analytics support</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="utility">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Utility </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Utility Provider 
                                <span class="solutionsitalic-font text-white">
                                    BPO Services
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX delivers scalable operational support for utility providers to ensure seamless customer experiences and accurate data handling.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus8.webp" alt="Utility provider customer service agent" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Customer inquiries and account management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Billing and payment processing</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Service order management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Data entry and record validation</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Field service coordination</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="technology">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Technology </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Technology & SaaS  
                                <span class="solutionsitalic-font text-white">
                                    Outsourcing
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">We partner with technology companies to streamline processes, support users, and optimize internal workflows.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus9.webp" alt="Technology SaaS outsourcing and support team" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Technical and product support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">SaaS customer success operations</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Data annotation and labeling</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">QA and testing support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Knowledge base management</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="government">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Government </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Government Public Sector 
                                <span class="solutionsitalic-font text-white">
                                    BPO Support
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX provides process-driven operational services that help government agencies improve efficiency and citizen engagement.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus10.webp" alt="Government public sector BPO and document processing" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Case and document processing</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Data entry and validation</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Citizen support services</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Records management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Reporting and compliance support</p></div>
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
                                Legal Process 
                                <span class="solutionsitalic-font text-white">
                                    Outsourcing (LPO)
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX delivers reliable legal process outsourcing to help firms focus on strategy while we handle operational execution.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus11.webp" alt="Legal process outsourcing and document review" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Document review and management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Contract abstraction</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Legal research support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">E-discovery assistance</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Case file organization</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="financeservices">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Finance Services </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Financial Services 
                                <span class="solutionsitalic-font text-white">
                                    BPO & Support
                                </span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">We support financial institutions with secure, efficient back-office and customer operations.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus12.webp" alt="Financial services BPO back-office team" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Accounts payable and receivable support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Reconciliation and data validation</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Customer service operations</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Reporting and analytics</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]" /><p class="text-black">Compliance support</p></div>
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
                                eCommerce & Retail 
                                <span class="solutionsitalic-font text-white">Outsourcing</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">We help eCommerce brands scale operations while delivering fast, reliable customer experiences.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus13.webp" alt="eCommerce order fulfillment and customer service" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Order processing and fulfillment support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Marketplace management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Customer support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Catalog and pricing updates</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Performance reporting</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="realestate">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Real Estate </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Real Estate 
                                <span class="solutionsitalic-font text-white">BPO Services</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">We help real estate companies streamline transactions, listings, and customer communications.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus14.webp" alt="Real estate BPO and transaction coordinator" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Listing management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Lead qualification</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Transaction coordination</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">CRM updates</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Customer support</p></div>
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
                                Gaming Player Support & 
                                <span class="solutionsitalic-font text-white">BPO Services</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX enables gaming companies to maintain smooth operations and responsive player support.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus15.webp" alt="Gaming player support and moderation agent" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Player support services</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Moderation and trust & safety</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Data tagging and QA</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Community management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Reporting and insights</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="homeservices">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Home Services </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Home Services 
                                <span class="solutionsitalic-font text-white">BPO Solutions</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">We help home service providers deliver fast scheduling, reliable support, and efficient workflows.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus16.webp" alt="Home services scheduling and dispatch support" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Appointment scheduling</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Dispatch coordination</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Customer service</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Billing and invoicing support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">CRM updates</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="homewarranty">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Home Warranty </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Home Warranty 
                                <span class="solutionsitalic-font text-white">Claims BPO</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">EmpireOneCX supports home warranty companies with accurate, fast, and customer-friendly operations.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <picture class="rounded-[16px] w-full block">
                                <img src="../assets/images/indus17.webp" alt="Home warranty claims processing support" class="w-full h-full object-cover object-center"/>
                            </picture>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Claims intake and processing</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Vendor coordination</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Customer service</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Policy administration support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Reporting</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="indussections border-b border-[#605468] pt-[40px] pb-[60px] scroll-animate" id="transportationlogistics">
                        <div class="toptextwork">
                            <div class="relative flex items-center gap-2 text-sm py-3 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span class="spanfont block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></span>
                                    <span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> Transportation & Logistics </span>
                                </span>
                            </div>
                            <h2 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[10px]">
                                Logistics & Transportation 
                                <span class="solutionsitalic-font text-white">BPO</span>
                            </h2>
                            <p class="text-white text-[16px] leading-[24px]">We help logistics and transportation companies improve visibility, speed, and operational efficiency.</p>
                        </div>
                        <div class="imagetop mt-[30px] relative z-10">
                            <div class="heightimg rounded-[16px] w-full">
                                <img src="../assets/images/indus18.webp" alt="Logistics and transportation BPO tracking agent" class="w-full h-[467px] object-cover object-center"/>
                            </div>
                        </div>
                        <div class="indusweoffer relative w-[1094px] mx-auto -mt-[109px] z-[99]">
                            <div class="absolute inset-0 rounded-[16px] overflow-hidden">
                                <div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
                                <div class="absolute inset-[3px] rounded-[13px] bg-white"></div>
                            </div>
                            <div class="mytextoffer relative p-8">
                                <h3 class="inline-block text-[24px] leading-[32px] tracking-[-0.03em] font-medium mb-5 bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50%,#FE881C_100%)] bg-clip-text text-transparent">
                                    What We Offer
                                </h3>
                                <div class="managespacesolution grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Shipment tracking</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Order processing</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Documentation management</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Customer support</p></div>
                                    <div class="industext flex items-center gap-3"><img src="../assets/images/check.webp" alt="check icon" class="w-[20px] h-[20px]"/><p class="text-[16px] leading-[24px] text-black">Data and reporting</p></div>
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
                                Partner with a BPO that
                                <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]"> Understands Your Industry</span>
                            </h2>
                            <p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
                                EmpireOneCX provides the structure, expertise, and care to help your business grow with confidence.
                            </p>
                            <div class="future-btn">
                                <a href="contact" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
                                    See How We Deliver Impact <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include(__DIR__ . "/../inc/footer.php"); ?>
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
        retail: ["/industries/retail-bpo", "Explore Retail BPO Services"],
        automotive: ["/industries/automotive-bpo", "Explore Automotive BPO Services"],
        travel: ["/industries/travel-hospitality-bpo", "Explore Travel BPO Services"],
        technical: ["/industries/telecommunications-bpo", "Explore Telecom BPO Services"],
        energy: ["/industries/energy-bpo", "Explore Energy BPO Services"],
        utility: ["/industries/utility-bpo", "Explore Utility BPO Services"],
        technology: ["/industries/technology-bpo", "Explore Technology BPO Services"],
        government: ["/industries/government-bpo", "Explore Government BPO Services"],
        legal: ["/industries/legal-process-outsourcing", "Explore Legal Outsourcing Services"],
        financeservices: ["/industries/financial-services-bpo", "Explore Financial Services BPO"],
        ecommerce: ["/industries/ecommerce-bpo", "Explore eCommerce BPO Services"],
        realestate: ["/industries/real-estate-bpo", "Explore Real Estate BPO Services"],
        gaming: ["/industries/gaming-bpo", "Explore Gaming BPO Services"],
        homeservices: ["/industries/home-services-bpo", "Explore Home Services BPO"],
        homewarranty: ["/industries/home-warranty-bpo", "Explore Home Warranty BPO"],
        transportationlogistics: ["/industries/transportation-logistics-bpo", "Explore Logistics BPO Services"]
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
