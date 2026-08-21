<?php
    $page_title = "Contact Us | EmpireOneCX";
    $meta_description = "Contact EmpireOneCX to discuss CX outsourcing, BPO services, customer support, back-office support, and offshore team solutions.";
include("inc/header.php");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
.custom-confirm-btn {
    background: #ffffff !important;
    color: #000 !important;
    font-weight: 600;
    border-radius: 8px;
    padding: 10px 24px;
}
</style>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "EmpireOneCX",
  "url": "https://empireonecx.com/",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+1-800-233-0843",
      "contactType": "customer service",
      "email": "info@empireonecx.com",
      "availableLanguage": ["English"]
    }
  ],
  "location": [
    {
      "@type": "Place",
      "name": "Headquarters - Canada",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "250 Consumers Rd suite 810",
        "addressLocality": "Toronto",
        "addressRegion": "ON",
        "postalCode": "M2J 4V6",
        "addressCountry": "CA"
      }
    },
    {
      "@type": "Place",
      "name": "Philippines Site 1",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "EmpireOne Bldg Gen. Luna St Poblacion II Carcar City",
        "addressLocality": "Cebu",
        "postalCode": "6014",
        "addressCountry": "PH"
      }
    },
    {
      "@type": "Place",
      "name": "Colombia Site 1",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Calle 15 No. 4 - 81 Piso 10, Edificio del Caf�",
        "addressLocality": "Santa Marta",
        "addressRegion": "Magdalena",
        "addressCountry": "CO"
      }
    }
  ]
}
</script>

<main class="relative bg-black">
    <section class="hero-section careerhero mainherowork relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden">
        <video class="solutions-bg-videowork absolute w-[100%]" autoplay muted loop playsinline  preload="none">
            <source src="./assets/images/contactpgbg.mp4" type="video/mp4" />
        </video>
        <div class="absolute bg-black/50 -z-10" style="width:1920px; height:611px;"></div>
        <div class="container mx-auto w-full relative z-10">
            <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                <span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
                    Contact Us
                </span>
            </p>
            <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto">
                Let's Talk  
            </h1>
            <p class="subpara shortspace font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto sm:mb-3" style="max-width: 848px !important;padding-bottom: 20px;"> 
                Request a custom growth plan or book a free strategy call. Our team responds within 24 hours.
            </p>
        </div>
    </section>
    <section class="contact-form-section relative overflow-hidden">
        <div class="container contact-setting mx-auto px-4">
            <div class="contact-form-card relative overflow-hidden bg-white rounded-[24px] py-[65px] px-[40px] grid grid-cols-1 md:grid-cols-12">
                <div class="contact-form-left md:col-span-5">
                    <h2 class="contact-form-heading animate-reveal delay-1 text-[32px] leading-[40px] font-medium text-black">
                        Let's Build <br class="nobreak">
                        <span class="solutionsitalic-font font-normal">
                            Your High-Performance
                        </span>
                        Team Today!
                    </h2>
                    <p class="text-[18px] w-[455px] pt-[22px]">Tell us where you want to go. We'll design a high-performance, AI-Assisted offshore solution built specifically for your business.</p>
                    <p class="text-[18px] w-[455px] pt-[22px]"><b>Most clients launch in 2-4 Weeks.</b></p>
                    <div class="contact-page-context text-[16px] leading-[25px] text-[#3C3B47] max-w-[455px] pt-[22px] space-y-3">
                        <p>Use this form to start a conversation about customer support, contact center outsourcing, back-office operations, finance and accounting BPO, quality assurance, recruitment, or AI-assisted workflow support. Share the business goal, current team size, service channels, coverage hours, and any service-level targets you already track.</p>
                        <p>Our team reviews each request to understand the operating model first. That includes contact volume, language needs, technology stack, escalation rules, compliance requirements, launch timeline, and the internal resources available for onboarding.</p>
                        <p>After review, EmpireOneCX can recommend a delivery approach, staffing structure, transition plan, and next-step discussion tailored to the customer experience or BPO program you want to build.</p>
                    </div>
                    <div class="contact-side-img1 absolute w-[732px] h-[774px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>
                    
                </div>

                <form id="contactForm" class="contact-form-right md:col-span-7">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-[16px]">
                        <div class="contact-form-field ">
                            <label class="contact-form-label animate-reveal text-[18px] leading-[24px] text-[rgba(0, 0, 0, 1)]">
                                Full Name
                            </label>
                            <input type="text" name="full_name" placeholder="Your Name" class="contact-form-input w-full mt-[6px] px-[16px] py-[12px]
                                    rounded-[6px] bg-[rgba(229,229,229,1)] border border-[#E5E5E5] text-[16px] leading-[24px]
                                    focus:outline-none focus:ring-2 focus:ring-purple-400 transition">
                        </div>

                        <div class="contact-form-field">
                            <label class="contact-form-label animate-reveal text-[18px] leading-[24px] text-[rgba(0, 0, 0, 1)]">
                                Company Name
                            </label>
                            <input type="text" name="company_name" placeholder="Enter company name"
                                class="contact-form-input w-full mt-[6px] px-[16px] py-[12px]
                                    rounded-[6px] bg-[rgba(229,229,229,1)] border border-[#E5E5E5] text-[16px] leading-[24px]
                                    focus:outline-none focus:ring-2 focus:ring-purple-400 transition">
                        </div>

                    </div>

                    <div class="contact-form-row grid grid-cols-1 md:grid-cols-2 gap-[16px] mt-[20px]">

                        <div class="contact-form-field">
                            <label class="contact-form-label animate-reveal text-[18px] leading-[24px] text-[rgba(0, 0, 0, 1)]">
                                Email Address
                            </label>
                            <input type="email"  name="email" placeholder="name@company.com"
                                class="contact-form-input w-full mt-[6px] px-[16px] py-[12px]
                                    rounded-[6px] bg-[rgba(229,229,229,1)] border border-[#E5E5E5] text-[16px] leading-[24px]
                                    focus:outline-none focus:ring-2 focus:ring-purple-400 transition">
                        </div>

                        <div class="contact-form-field">
                            <label class="contact-form-label animate-reveal text-[18px] leading-[24px] text-black">
                                Contact Number
                            </label>

                            <div class="relative mt-[6px]">
                                <div id="phoneWrapper" class="flex items-center gap-2 bg-[rgba(229,229,229,1)] border border-[#E5E5E5] rounded-[6px] px-[16px] py-[12px] cursor-text">
                                    <div id="countryToggle"
                                        class="flex items-center gap-2 cursor-pointer select-none">
                                        <img id="selectedFlag"
                                            src="https://flagcdn.com/w20/us.webp"
                                            class="w-[20px] h-[14px]" alt="United States flag" loading="lazy" decoding="async">
                                        <span id="selectedCode" class="text-[15px]">+1</span>
                                        <svg class="w-3 h-3 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <div class="text-black-400 h-[22px]">|</div>

                                    <input type="hidden" name="country_code" id="country_code" value="+1">
                                    <input type="tel"  name="phone" placeholder="800-233-1234"
                                        class="w-full bg-transparent outline-none text-[16px]">
                                </div>

                                <div id="countryDropdown"
                                    class="absolute left-0 w-[260px] h-[300px] overflow-y-auto bg-white rounded-[10px] shadow-lg border hidden z-50">
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+213" data-flag="dz">
                                        <img src="https://flagcdn.com/w20/dz.png" class="w-5 h-4" alt="Algeria flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Algeria</span>
                                        <span class="text-sm text-gray-500">+213</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+355" data-flag="al">
                                        <img src="https://flagcdn.com/w20/al.png" class="w-5 h-4" alt="Albania flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Albania</span>
                                        <span class="text-sm text-gray-500">+355</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+376" data-flag="ad">
                                        <img src="https://flagcdn.com/w20/ad.png" class="w-5 h-4" alt="Andorra flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Andorra</span>
                                        <span class="text-sm text-gray-500">+376</span>
                                    </div>
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+61" data-flag="au">
                                        <img src="https://flagcdn.com/w20/au.png" class="w-5 h-4" alt="Australia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Australia</span>
                                        <span class="text-sm text-gray-500">+61</span>
                                    </div>
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+54" data-flag="ar">
                                        <img src="https://flagcdn.com/w20/ar.png" class="w-5 h-4" alt="Argentina flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Argentina</span>
                                        <span class="text-sm text-gray-500">+54</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+359" data-flag="bg">
                                        <img src="https://flagcdn.com/w20/bg.png" class="w-5 h-4" alt="Bulgaria flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bulgaria</span>
                                        <span class="text-sm text-gray-500">+359</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+973" data-flag="bh">
                                        <img src="https://flagcdn.com/w20/bh.png" class="w-5 h-4" alt="Bahrain flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bahrain</span>
                                        <span class="text-sm text-gray-500">+973</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+1-242" data-flag="bs">
                                        <img src="https://flagcdn.com/w20/bs.png" class="w-5 h-4" alt="Bahamas flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bahamas</span>
                                        <span class="text-sm text-gray-500">+1-242</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+880" data-flag="bd">
                                        <img src="https://flagcdn.com/w20/bd.png" class="w-5 h-4" alt="Bangladesh flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bangladesh</span>
                                        <span class="text-sm text-gray-500">+880</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+1-246" data-flag="bb">
                                        <img src="https://flagcdn.com/w20/bb.png" class="w-5 h-4" alt="Barbados flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Barbados</span>
                                        <span class="text-sm text-gray-500">+1-246</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+32" data-flag="be">
                                        <img src="https://flagcdn.com/w20/be.png" class="w-5 h-4" alt="Belgium flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Belgium</span>
                                        <span class="text-sm text-gray-500">+32</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+229" data-flag="bj">
                                        <img src="https://flagcdn.com/w20/bj.png" class="w-5 h-4" alt="Benin flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Benin</span>
                                        <span class="text-sm text-gray-500">+229</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+975" data-flag="bt">
                                        <img src="https://flagcdn.com/w20/bt.png" class="w-5 h-4" alt="Bhutan flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bhutan</span>
                                        <span class="text-sm text-gray-500">+975</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+387" data-flag="ba">
                                        <img src="https://flagcdn.com/w20/ba.png" class="w-5 h-4" alt="Bosnia &amp; Herzegovina flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bosnia & Herzegovina</span>
                                        <span class="text-sm text-gray-500">+387</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+267" data-flag="bw">
                                        <img src="https://flagcdn.com/w20/bw.png" class="w-5 h-4" alt="Botswana flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Botswana</span>
                                        <span class="text-sm text-gray-500">+267</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+55" data-flag="br">
                                        <img src="https://flagcdn.com/w20/br.png" class="w-5 h-4" alt="Brazil flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Brazil</span>
                                        <span class="text-sm text-gray-500">+55</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+246" data-flag="io">
                                        <img src="https://flagcdn.com/w20/io.png" class="w-5 h-4" alt="British Indian Ocean Territory flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">British Indian Ocean Territory</span>
                                        <span class="text-sm text-gray-500">+246</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+673" data-flag="bn">
                                        <img src="https://flagcdn.com/w20/bn.png" class="w-5 h-4" alt="Brunei flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Brunei</span>
                                        <span class="text-sm text-gray-500">+673</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+359" data-flag="bg">
                                        <img src="https://flagcdn.com/w20/bg.png" class="w-5 h-4" alt="Bulgaria flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bulgaria</span>
                                        <span class="text-sm text-gray-500">+359</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+226" data-flag="bf">
                                        <img src="https://flagcdn.com/w20/bf.png" class="w-5 h-4" alt="Burkina Faso flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Burkina Faso</span>
                                        <span class="text-sm text-gray-500">+226</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+257" data-flag="bi">
                                        <img src="https://flagcdn.com/w20/bi.png" class="w-5 h-4" alt="Burundi flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Burundi</span>
                                        <span class="text-sm text-gray-500">+257</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+591" data-flag="bo">
                                        <img src="https://flagcdn.com/w20/bo.png" class="w-5 h-4" alt="Bolivia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Bolivia</span>
                                        <span class="text-sm text-gray-500">+591</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+501" data-flag="bz">
                                        <img src="https://flagcdn.com/w20/bz.png" class="w-5 h-4" alt="Belize flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Belize</span>
                                        <span class="text-sm text-gray-500">+501</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+229" data-flag="bj">
                                        <img src="https://flagcdn.com/w20/bj.png" class="w-5 h-4" alt="Benin flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Benin</span>
                                        <span class="text-sm text-gray-500">+229</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+375" data-flag="by">
                                        <img src="https://flagcdn.com/w20/by.png" class="w-5 h-4" alt="Belarus flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Belarus</span>
                                        <span class="text-sm text-gray-500">+375</span>
                                    </div>
                                     <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+236" data-flag="cf">
                                        <img src="https://flagcdn.com/w20/cf.png" class="w-5 h-4" alt="Central African Republic flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Central African Republic</span>
                                        <span class="text-sm text-gray-500">+236</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+235" data-flag="td">
                                        <img src="https://flagcdn.com/w20/td.png" class="w-5 h-4" alt="Chad flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Chad</span>
                                        <span class="text-sm text-gray-500">+235</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+1" data-flag="ca">
                                        <img src="https://flagcdn.com/w20/ca.png" class="w-5 h-4" alt="Canada flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Canada</span>
                                        <span class="text-sm text-gray-500">+1</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+57" data-flag="co">
                                        <img src="https://flagcdn.com/w20/co.png" class="w-5 h-4" alt="Colombia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Colombia</span>
                                        <span class="text-sm text-gray-500">+57</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+269" data-flag="km">
                                        <img src="https://flagcdn.com/w20/km.png" class="w-5 h-4" alt="Comoros flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Comoros</span>
                                        <span class="text-sm text-gray-500">+269</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+242" data-flag="cg">
                                        <img src="https://flagcdn.com/w20/cg.png" class="w-5 h-4" alt="Congo (Republic) flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Congo (Republic)</span>
                                        <span class="text-sm text-gray-500">+242</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+56" data-flag="cl">
                                        <img src="https://flagcdn.com/w20/cl.png" class="w-5 h-4" alt="Chile flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Chile</span>
                                        <span class="text-sm text-gray-500">+56</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+855" data-flag="kh">
                                        <img src="https://flagcdn.com/w20/kh.png" class="w-5 h-4" alt="Cambodia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Cambodia</span>
                                        <span class="text-sm text-gray-500">+855</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+237" data-flag="cm">
                                        <img src="https://flagcdn.com/w20/cm.png" class="w-5 h-4" alt="Cameroon flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Cameroon</span>
                                        <span class="text-sm text-gray-500">+237</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+357" data-flag="cy">
                                        <img src="https://flagcdn.com/w20/cy.png" class="w-5 h-4" alt="Cyprus flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Cyprus</span>
                                        <span class="text-sm text-gray-500">+357</span>
                                    </div>
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+238" data-flag="cv">
                                        <img src="https://flagcdn.com/w20/cv.png" class="w-5 h-4" alt="Cape Verde flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Cape Verde</span>
                                        <span class="text-sm text-gray-500">+238</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+599" data-flag="bq">
                                        <img src="https://flagcdn.com/w20/bq.png" class="w-5 h-4" alt="Caribbean Netherlands flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Caribbean Netherlands</span>
                                        <span class="text-sm text-gray-500">+599</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+682" data-flag="ck">
                                        <img src="https://flagcdn.com/w20/ck.png" class="w-5 h-4" alt="Cook Islands flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Cook Islands</span>
                                        <span class="text-sm text-gray-500">+682</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+506" data-flag="cr">
                                        <img src="https://flagcdn.com/w20/cr.png" class="w-5 h-4" alt="Costa Rica flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Costa Rica</span>
                                        <span class="text-sm text-gray-500">+506</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+225" data-flag="ci">
                                        <img src="https://flagcdn.com/w20/ci.png" class="w-5 h-4" alt="C&#244;te d’Ivoire flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Côte d’Ivoire</span>
                                        <span class="text-sm text-gray-500">+225</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+385" data-flag="hr">
                                        <img src="https://flagcdn.com/w20/hr.png" class="w-5 h-4" alt="Croatia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Croatia</span>
                                        <span class="text-sm text-gray-500">+385</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+53" data-flag="cu">
                                        <img src="https://flagcdn.com/w20/cu.png" class="w-5 h-4" alt="Cuba flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Cuba</span>
                                        <span class="text-sm text-gray-500">+53</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+420" data-flag="cz">
                                        <img src="https://flagcdn.com/w20/cz.png" class="w-5 h-4" alt="Czech Republic flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Czech Republic</span>
                                        <span class="text-sm text-gray-500">+420</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+45" data-flag="dk">
                                        <img src="https://flagcdn.com/w20/dk.png" class="w-5 h-4" alt="Denmark flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Denmark</span>
                                        <span class="text-sm text-gray-500">+45</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+253" data-flag="dj">
                                        <img src="https://flagcdn.com/w20/dj.png" class="w-5 h-4" alt="Djibouti flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Djibouti</span>
                                        <span class="text-sm text-gray-500">+253</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+670" data-flag="tl">
                                        <img src="https://flagcdn.com/w20/tl.png" class="w-5 h-4" alt="East Timor flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">East Timor</span>
                                        <span class="text-sm text-gray-500">+670</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+593" data-flag="ec">
                                        <img src="https://flagcdn.com/w20/ec.png" class="w-5 h-4" alt="Ecuador flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Ecuador</span>
                                        <span class="text-sm text-gray-500">+593</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+20" data-flag="eg">
                                        <img src="https://flagcdn.com/w20/eg.png" class="w-5 h-4" alt="Egypt flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Egypt</span>
                                        <span class="text-sm text-gray-500">+20</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+503" data-flag="sv">
                                        <img src="https://flagcdn.com/w20/sv.png" class="w-5 h-4" alt="El Salvador flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">El Salvador</span>
                                        <span class="text-sm text-gray-500">+503</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+240" data-flag="gq">
                                        <img src="https://flagcdn.com/w20/gq.png" class="w-5 h-4" alt="Equatorial Guinea flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Equatorial Guinea</span>
                                        <span class="text-sm text-gray-500">+240</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+291" data-flag="er">
                                        <img src="https://flagcdn.com/w20/er.png" class="w-5 h-4" alt="Eritrea flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Eritrea</span>
                                        <span class="text-sm text-gray-500">+291</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+372" data-flag="ee">
                                        <img src="https://flagcdn.com/w20/ee.png" class="w-5 h-4" alt="Estonia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Estonia</span>
                                        <span class="text-sm text-gray-500">+372</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+251" data-flag="et">
                                        <img src="https://flagcdn.com/w20/et.png" class="w-5 h-4" alt="Ethiopia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Ethiopia</span>
                                        <span class="text-sm text-gray-500">+251</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+503" data-flag="sv">
                                        <img src="https://flagcdn.com/w20/sv.png" class="w-5 h-4" alt="El Salvador flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">El Salvador</span>
                                        <span class="text-sm text-gray-500">+503</span>
                                    </div>
                                    <!-- France -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+33" data-flag="fr">
                                        <img src="https://flagcdn.com/w20/fr.png" class="w-5 h-4" alt="France flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">France</span>
                                        <span class="text-sm text-gray-500">+33</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+679" data-flag="fj">
                                        <img src="https://flagcdn.com/w20/fj.png" class="w-5 h-4" alt="Fiji flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Fiji</span>
                                        <span class="text-sm text-gray-500">+679</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+358" data-flag="fi">
                                        <img src="https://flagcdn.com/w20/fi.png" class="w-5 h-4" alt="Finland flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Finland</span>
                                        <span class="text-sm text-gray-500">+358</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+241" data-flag="ga">
                                        <img src="https://flagcdn.com/w20/ga.png" class="w-5 h-4" alt="Gabon flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Gabon</span>
                                        <span class="text-sm text-gray-500">+241</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+220" data-flag="gm">
                                        <img src="https://flagcdn.com/w20/gm.png" class="w-5 h-4" alt="Gambia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Gambia</span>
                                        <span class="text-sm text-gray-500">+220</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+995" data-flag="ge">
                                        <img src="https://flagcdn.com/w20/ge.png" class="w-5 h-4" alt="Georgia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Georgia</span>
                                        <span class="text-sm text-gray-500">+995</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+49" data-flag="de">
                                        <img src="https://flagcdn.com/w20/de.png" class="w-5 h-4" alt="Germany flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Germany</span>
                                        <span class="text-sm text-gray-500">+49</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+233" data-flag="gh">
                                        <img src="https://flagcdn.com/w20/gh.png" class="w-5 h-4" alt="Ghana flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Ghana</span>
                                        <span class="text-sm text-gray-500">+233</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+350" data-flag="gi">
                                        <img src="https://flagcdn.com/w20/gi.png" class="w-5 h-4" alt="Gibraltar flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Gibraltar</span>
                                        <span class="text-sm text-gray-500">+350</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+30" data-flag="gr">
                                        <img src="https://flagcdn.com/w20/gr.png" class="w-5 h-4" alt="Greece flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Greece</span>
                                        <span class="text-sm text-gray-500">+30</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+299" data-flag="gl">
                                        <img src="https://flagcdn.com/w20/gl.png" class="w-5 h-4" alt="Greenland flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Greenland</span>
                                        <span class="text-sm text-gray-500">+299</span>
                                    </div>

                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer" data-code="+502" data-flag="gt">
                                        <img src="https://flagcdn.com/w20/gt.png" class="w-5 h-4" alt="Guatemala flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Guatemala</span>
                                        <span class="text-sm text-gray-500">+502</span>
                                    </div>

                                    <!-- India -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+91" data-flag="in">
                                        <img src="https://flagcdn.com/w20/in.png" class="w-5 h-4" alt="India flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">India</span>
                                        <span class="text-sm text-gray-500">+91</span>
                                    </div>

                                    <!-- Indonesia -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+62" data-flag="id">
                                        <img src="https://flagcdn.com/w20/id.png" class="w-5 h-4" alt="Indonesia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Indonesia</span>
                                        <span class="text-sm text-gray-500">+62</span>
                                    </div>

                                    <!-- Iraq -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+964" data-flag="iq">
                                        <img src="https://flagcdn.com/w20/iq.png" class="w-5 h-4" alt="Iraq flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Iraq</span>
                                        <span class="text-sm text-gray-500">+964</span>
                                    </div>

                                    <!-- Ireland -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+353" data-flag="ie">
                                        <img src="https://flagcdn.com/w20/ie.png" class="w-5 h-4" alt="Ireland flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Ireland</span>
                                        <span class="text-sm text-gray-500">+353</span>
                                    </div>

                                    <!-- Israel -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+972" data-flag="il">
                                        <img src="https://flagcdn.com/w20/il.png" class="w-5 h-4" alt="Israel flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Israel</span>
                                        <span class="text-sm text-gray-500">+972</span>
                                    </div>

                                    <!-- Italy -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+39" data-flag="it">
                                        <img src="https://flagcdn.com/w20/it.png" class="w-5 h-4" alt="Italy flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Italy</span>
                                        <span class="text-sm text-gray-500">+39</span>
                                    </div>

                                    <!-- Japan -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+81" data-flag="jp">
                                        <img src="https://flagcdn.com/w20/jp.png" class="w-5 h-4" alt="Japan flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Japan</span>
                                        <span class="text-sm text-gray-500">+81</span>
                                    </div>

                                    <!-- Kenya -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+254" data-flag="ke">
                                        <img src="https://flagcdn.com/w20/ke.png" class="w-5 h-4" alt="Kenya flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Kenya</span>
                                        <span class="text-sm text-gray-500">+254</span>
                                    </div>

                                    <!-- Malaysia -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+60" data-flag="my">
                                        <img src="https://flagcdn.com/w20/my.png" class="w-5 h-4" alt="Malaysia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Malaysia</span>
                                        <span class="text-sm text-gray-500">+60</span>
                                    </div>

                                    <!-- Mexico -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+52" data-flag="mx">
                                        <img src="https://flagcdn.com/w20/mx.png" class="w-5 h-4" alt="Mexico flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Mexico</span>
                                        <span class="text-sm text-gray-500">+52</span>
                                    </div>

                                    <!-- Nepal -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+977" data-flag="np">
                                        <img src="https://flagcdn.com/w20/np.png" class="w-5 h-4" alt="Nepal flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Nepal</span>
                                        <span class="text-sm text-gray-500">+977</span>
                                    </div>

                                    <!-- Netherlands -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+31" data-flag="nl">
                                        <img src="https://flagcdn.com/w20/nl.png" class="w-5 h-4" alt="Netherlands flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Netherlands</span>
                                        <span class="text-sm text-gray-500">+31</span>
                                    </div>

                                    <!-- New Zealand -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+64" data-flag="nz">
                                        <img src="https://flagcdn.com/w20/nz.png" class="w-5 h-4" alt="New Zealand flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">New Zealand</span>
                                        <span class="text-sm text-gray-500">+64</span>
                                    </div>

                                    <!-- Nigeria -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+234" data-flag="ng">
                                        <img src="https://flagcdn.com/w20/ng.png" class="w-5 h-4" alt="Nigeria flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Nigeria</span>
                                        <span class="text-sm text-gray-500">+234</span>
                                    </div>

                                    <!-- Pakistan -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+92" data-flag="pk">
                                        <img src="https://flagcdn.com/w20/pk.png" class="w-5 h-4" alt="Pakistan flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Pakistan</span>
                                        <span class="text-sm text-gray-500">+92</span>
                                    </div>

                                    <!-- Philippines -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+63" data-flag="ph">
                                        <img src="https://flagcdn.com/w20/ph.png" class="w-5 h-4" alt="Philippines flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Philippines</span>
                                        <span class="text-sm text-gray-500">+63</span>
                                    </div>

                                    <!-- Portugal -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+351" data-flag="pt">
                                        <img src="https://flagcdn.com/w20/pt.png" class="w-5 h-4" alt="Portugal flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Portugal</span>
                                        <span class="text-sm text-gray-500">+351</span>
                                    </div>

                                    <!-- Russia -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+7" data-flag="ru">
                                        <img src="https://flagcdn.com/w20/ru.png" class="w-5 h-4" alt="Russia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Russia</span>
                                        <span class="text-sm text-gray-500">+7</span>
                                    </div>

                                    <!-- Saudi Arabia -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+966" data-flag="sa">
                                        <img src="https://flagcdn.com/w20/sa.png" class="w-5 h-4" alt="Saudi Arabia flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Saudi Arabia</span>
                                        <span class="text-sm text-gray-500">+966</span>
                                    </div>

                                    <!-- Singapore -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+65" data-flag="sg">
                                        <img src="https://flagcdn.com/w20/sg.png" class="w-5 h-4" alt="Singapore flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Singapore</span>
                                        <span class="text-sm text-gray-500">+65</span>
                                    </div>

                                    <!-- South Africa -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+27" data-flag="za">
                                        <img src="https://flagcdn.com/w20/za.png" class="w-5 h-4" alt="South Africa flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">South Africa</span>
                                        <span class="text-sm text-gray-500">+27</span>
                                    </div>

                                    <!-- South Korea -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+82" data-flag="kr">
                                        <img src="https://flagcdn.com/w20/kr.png" class="w-5 h-4" alt="South Korea flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">South Korea</span>
                                        <span class="text-sm text-gray-500">+82</span>
                                    </div>

                                    <!-- Spain -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+34" data-flag="es">
                                        <img src="https://flagcdn.com/w20/es.png" class="w-5 h-4" alt="Spain flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Spain</span>
                                        <span class="text-sm text-gray-500">+34</span>
                                    </div>

                                    <!-- Sri Lanka -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+94" data-flag="lk">
                                        <img src="https://flagcdn.com/w20/lk.png" class="w-5 h-4" alt="Sri Lanka flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Sri Lanka</span>
                                        <span class="text-sm text-gray-500">+94</span>
                                    </div>

                                    <!-- Sweden -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+46" data-flag="se">
                                        <img src="https://flagcdn.com/w20/se.png" class="w-5 h-4" alt="Sweden flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Sweden</span>
                                        <span class="text-sm text-gray-500">+46</span>
                                    </div>

                                    <!-- Switzerland -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+41" data-flag="ch">
                                        <img src="https://flagcdn.com/w20/ch.png" class="w-5 h-4" alt="Switzerland flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Switzerland</span>
                                        <span class="text-sm text-gray-500">+41</span>
                                    </div>

                                    <!-- Thailand -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+66" data-flag="th">
                                        <img src="https://flagcdn.com/w20/th.png" class="w-5 h-4" alt="Thailand flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Thailand</span>
                                        <span class="text-sm text-gray-500">+66</span>
                                    </div>

                                    <!-- Turkey -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+90" data-flag="tr">
                                        <img src="https://flagcdn.com/w20/tr.png" class="w-5 h-4" alt="Turkey flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">Turkey</span>
                                        <span class="text-sm text-gray-500">+90</span>
                                    </div>

                                    <!-- United Arab Emirates -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+971" data-flag="ae">
                                        <img src="https://flagcdn.com/w20/ae.png" class="w-5 h-4" alt="United Arab Emirates flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">United Arab Emirates</span>
                                        <span class="text-sm text-gray-500">+971</span>
                                    </div>

                                    <!-- United Kingdom -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+44" data-flag="gb">
                                        <img src="https://flagcdn.com/w20/gb.png" class="w-5 h-4" alt="United Kingdom flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">United Kingdom</span>
                                        <span class="text-sm text-gray-500">+44</span>
                                    </div>

                                    <!-- United States -->
                                    <div class="country-item flex items-center gap-3 px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        data-code="+1" data-flag="us">
                                        <img src="https://flagcdn.com/w20/us.png" class="w-5 h-4" alt="United States flag" loading="lazy" decoding="async">
                                        <span class="flex-1 text-sm">United States</span>
                                        <span class="text-sm text-gray-500">+1</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="contact-form-field mt-[20px]">
                        <label class="contact-form-label animate-reveal text-[18px] leading-[24px] text-[rgba(0, 0, 0, 1)]">
                            What are you looking to build?
                        </label>
                        <select  name="inquiry_type"
                            class="contact-form-input w-full mt-[6px] px-[16px] py-[12px]
                                    rounded-[6px] bg-[rgba(229,229,229,1)] border border-[#E5E5E5] text-[16px] leading-[24px]
                                    focus:outline-none focus:ring-2 focus:ring-purple-400 transition">
                            <option value="Dedicated Support Team">Dedicated Support Team</option>
                            <option value="AI + Automation">AI + Automation</option>
                            <option value="Recruitment & Workforce">Recruitment & Workforce</option>
                            <option value="Customer Experience Optimization">Customer Experience Optimization</option>
                            <option value="Custom Solution">Custom Solution</option>
                            <option value="Partnership">Partnership</option>
                        </select>
                    </div>

                    <div class="contact-form-privacy flex items-center gap-[8px] mt-[20px]">
                        <input type="checkbox"  name="privacy" class="contact-form-checkbox accent-purple-500" required>
                        <p class="contact-form-privacy-text text-[18px] leading-[24px] text-[rgba(0, 0, 0, 1)]">
                            By ticking this box I agree that I have read the
                            <a href="/privacy-policy" class="contact-form-privacy-link bg-gradient-to-r underline from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent cursor-pointer">
                                privacy policy
                            </a>
                        </p>
                    </div>

                    <button type="submit"
                        class="contact-form-submit mt-[10px] px-[32px] py-[14px]
                            rounded-[10px] text-white text-[16px] font-medium
                            bg-gradient-to-r from-[#CB46FA] to-[#FE881C] mt-[40px]">
                        Get My Custom Growth Plan
                    </button>

                </form>
            </div>
        </div>
    </section>
    <section class="bg-white px-4 py-14">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="rounded-[12px] border border-[#ECEAF5] p-6">
                    <h2 class="text-[24px] leading-[32px] text-black mb-3">What to Include</h2>
                    <p class="text-[16px] leading-[26px] text-[#3C3B47]">Tell us which function you want to improve, the channels you use today, the number of agents or seats you are considering, your preferred coverage hours, and any current pain points such as long response times, backlog, seasonal volume, quality gaps, or high operating cost.</p>
                </div>
                <div class="rounded-[12px] border border-[#ECEAF5] p-6">
                    <h2 class="text-[24px] leading-[32px] text-black mb-3">How We Review</h2>
                    <p class="text-[16px] leading-[26px] text-[#3C3B47]">EmpireOneCX reviews each request against delivery model, staffing structure, training needs, compliance expectations, reporting requirements, technology stack, and launch timeline. This helps us respond with a practical recommendation instead of a generic outsourcing quote.</p>
                </div>
                <div class="rounded-[12px] border border-[#ECEAF5] p-6">
                    <h2 class="text-[24px] leading-[32px] text-black mb-3">What Happens Next</h2>
                    <p class="text-[16px] leading-[26px] text-[#3C3B47]">A team member will review your request, clarify the most important operating details, and help map the next step. Depending on your needs, that may include a discovery call, a staffing estimate, a phased transition plan, or a custom CX and BPO solution outline.</p>
                </div>
            </div>
            <div class="rounded-[12px] border border-[#ECEAF5] p-6 md:p-8 mt-6">
                <h2 class="text-[26px] leading-[34px] text-black mb-4">Common Reasons Teams Contact EmpireOneCX</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <p class="text-[16px] leading-[26px] text-[#3C3B47]">Some teams reach out because their customer support queue is growing faster than their internal hiring plan. Others need a partner for after-hours coverage, overflow volume, multilingual support, live chat, email support, social media response, or a dedicated contact center team that can follow brand-specific processes. We also speak with companies that want to move repetitive back-office tasks, finance workflows, quality reviews, data processing, or administrative work into a managed BPO model.</p>
                    <p class="text-[16px] leading-[26px] text-[#3C3B47]">The best first conversation is specific but does not need to be perfect. Share what you know today: monthly ticket volume, call volume, average handle time, backlog, target response time, current tools, number of internal team members, countries served, and the service outcomes you want to improve. From there, EmpireOneCX can help shape a realistic operating model, whether that means a small pilot team, a larger dedicated support operation, or a phased transition across multiple workflows.</p>
                    <p class="text-[16px] leading-[26px] text-[#3C3B47]">If your priority is cost control, we can review the drivers that affect pricing, including agent count, delivery location, management support, training, quality assurance, schedule coverage, and technology requirements. If your priority is service quality, we can focus on coaching, knowledge management, escalation design, QA scorecards, reporting cadence, and customer satisfaction measurement.</p>
                    <p class="text-[16px] leading-[26px] text-[#3C3B47]">For AI-assisted operations, we look for practical use cases first. That may include routing, summaries, quality monitoring, workflow automation, reporting, agent assist, knowledge base improvement, or document processing. The goal is not to replace the human relationship with customers, but to make the team faster, more consistent, and easier to manage.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="global-presence-section relative overflow-hidden pt-[100px] pb-[100px]">
         <video class="global-presence-video absolute inset-0 w-full h-[735px] object-cover" autoplay muted loop playsinline  preload="none">
            <source src="./assets/images/contact-pagenewvideo.mp4" type="video/mp4">
        </video>
        <div class="global-presence-overlay absolute inset-0 bg-black/60" style="height:735px;"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="global-presence-header flex justify-between items-start mb-16">
                <div>
                    <h2 class="global-presence-title scroll-animate text-[32px] leading-[40px] text-white font-medium">
                        Our Global Presence
                    </h2>
                    <p class="global-presence-subtitle scroll-animate text-[16px] leading-[24px] text-white mt-2">
                        Wherever you are, EmpireOneCX is just one call or message away.
                    </p>
                </div>
                <div class="slider-arrows flex gap-2">
                    <button id="prevSlide" class="swiper-button-prev w-[50px] h-[50px] flex items-center justify-center text-white text-[22px] rounded-full 
                        transition-colors duration-300"
                        style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);color:#fff;"
                        onmouseover="this.style.background='white'; this.style.color='black';"
                        onmouseout="this.style.background='linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)'; this.style.color='white';">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <button id="nextSlide" class="swiper-button-next w-[50px] h-[50px] flex items-center justify-center text-white text-[22px] rounded-full 
                        transition-colors duration-300"
                        style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);color:#fff;"
                        onmouseover="this.style.background='white'; this.style.color='black';"
                        onmouseout="this.style.background='linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)'; this.style.color='white';">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div class="swiper global-presence-swiper" style="padding-top: 16px;padding-right:16px;">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" >
                        <div class="empire-slide-left global-presence-card gradient-borderbox group relative overflow-hidden rounded-[18px]
                            p-[20px] backdrop-blur-2xl bg-gradient-to-br from-white/15 via-white/5 to-white/10 text-white scroll-animate
                            transition-all duration-[800ms] ease-[cubic-bezier(.16,1,.3,1)] hover:-translate-y-3 hover:shadow-[0_40px_100px_rgba(0,0,0,0.35)]">
                            <div class="imageworkcontact pb-[24px]">
                                <img src="assets/images/canada.webp" class="w-[65px]" alt="EmpireOne Canada Headquarters">
                            </div>
                            <div class="flex items-center justify-between relative w-full">
                                <h3 class="global-presence-country text-[24px] leading-[32px] font-medium mb-2">Canada</h3>
                                <div class="global-presence-country bg-white text-black text-[14px] px-3 py-1 rounded-[5px] font-medium whitespace-nowrap mb-2">Headquarter</div>
                            </div>
                            <p class="global-presence-address text-[14px] leading-[24px] text-white mb-4">
                                250 Consumers Rd suite 810,<br>Toronto, ON M2J 4V6
                            </p>
                            <div class="border-t border-gray-500 mb-5"></div>
                        </div>
                    </div>

                    <div class="swiper-slide" >
                        <div class="empire-slide-right global-presence-card gradient-borderbox group relative overflow-hidden rounded-[18px]
                            p-[26px] backdrop-blur-2xl bg-gradient-to-br from-white/15 via-white/5 to-white/10 text-white scroll-animate
                            transition-all duration-[800ms] ease-[cubic-bezier(.16,1,.3,1)] hover:-translate-y-3 hover:shadow-[0_40px_100px_rgba(0,0,0,0.35)]">
                            <div class="imageworkcontact pb-[20px]"><img src="assets/images/phill.webp" alt="EmpireOne Philippines Call Center Site 1"></div>
                            <div class="flex items-center justify-between relative w-full">
                                <h3 class="global-presence-country text-[24px] leading-[32px] font-medium mb-2">Philippines</h3>
                                <div class="bg-white text-black text-[14px] px-3 py-1 rounded-[5px] font-medium whitespace-nowrap mb-2">Site 1</div>
                            </div>
                            <p class="global-presence-address text-[14px] leading-[24px] text-white mb-4">
                                EmpireOne Bldg Gen. Luna St Poblacion II Carcar City, Cebu 6014
                            </p>
                            <div class="border-t border-gray-500 mb-5"></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="empire-slide-right global-presence-card gradient-borderbox group relative overflow-hidden rounded-[18px]
                            p-[26px] backdrop-blur-2xl bg-gradient-to-br from-white/15 via-white/5 to-white/10 text-white scroll-animate
                            transition-all duration-[800ms] ease-[cubic-bezier(.16,1,.3,1)] hover:-translate-y-3 hover:shadow-[0_40px_100px_rgba(0,0,0,0.35)]">
                            <div class="imageworkcontact pb-[20px]"><img src="assets/images/phill.webp" alt="EmpireOne Philippines Call Center Site 2"></div>
                            <div class="flex items-center justify-between relative w-full">
                                <h3 class="global-presence-country text-[24px] leading-[32px] font-medium mb-2">Philippines</h3>
                                <div class="bg-white text-black text-[14px] px-3 py-1 rounded-[5px] font-medium whitespace-nowrap mb-2">Site 2</div>
                            </div>
                            <p class="global-presence-address text-[14px] leading-[24px] text-white mb-4">
                                EmpireOne Bldg., S. Carmona St., Barangay 6, SanCarlos City,<br>Negros Occidental, 6127
                            </p>
                            <div class="border-t border-gray-500 mb-5"></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="empire-slide-left global-presence-card gradient-borderbox group relative overflow-hidden rounded-[18px]
                            p-[26px] backdrop-blur-2xl bg-gradient-to-br from-white/15 via-white/5 to-white/10 text-white scroll-animate
                            transition-all duration-[800ms] ease-[cubic-bezier(.16,1,.3,1)] hover:-translate-y-3 hover:shadow-[0_40px_100px_rgba(0,0,0,0.35)]">
                            <div class="imageworkcontact pb-[20px]"><img src="assets/images/phill.webp" alt="EmpireOne Philippines Call Center Site 3"></div>
                            <div class="flex items-center justify-between relative w-full">
                                <h3 class="global-presence-country text-[24px] leading-[32px] font-medium mb-2">Philippines</h3>
                                <div class="bg-white text-black text-[14px] px-3 py-1 rounded-[5px] font-medium whitespace-nowrap mb-2">Site 3</div>
                            </div>
                            <p class="global-presence-address text-[14px] leading-[24px] text-white mb-4">
                                Unit 806 FLB Corporate Center Bohol Avenue Cebu Business <br> Park Cebu City, Cebu 6000
                            </p>
                            <div class="border-t border-gray-500 mb-5"></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="empire-slide-left global-presence-card gradient-borderbox group relative overflow-hidden rounded-[18px]
                            p-[26px] backdrop-blur-2xl bg-gradient-to-br from-white/15 via-white/5 to-white/10 text-white scroll-animate
                            transition-all duration-[800ms] ease-[cubic-bezier(.16,1,.3,1)] hover:-translate-y-3 hover:shadow-[0_40px_100px_rgba(0,0,0,0.35)]">
                            <div class="imageworkcontact pb-[20px]"><img src="assets/images/colombia.webp" alt="EmpireOne Colombia BPO Site"></div>
                            <div class="flex items-center justify-between relative w-full">
                                <h3 class="global-presence-country text-[24px] leading-[32px] font-medium mb-2">Colombia</h3>
                                <div class="bg-white text-black text-[14px] px-3 py-1 rounded-[5px] font-medium whitespace-nowrap mb-2">Site 1</div>
                            </div>
                            <p class="global-presence-address text-[14px] leading-[24px] text-white mb-4">
                                Calle 15 No. 4 - 81 Piso 10, Edificio del Cafe, Santa Marta, Magdalena.
                            </p>
                            <div class="border-t border-gray-500 mb-5"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<?php include("inc/footer.php"); ?>

<script src="assets/js/jquery.js"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/assets/js/contact-page.js?v=20260821-1"></script>
