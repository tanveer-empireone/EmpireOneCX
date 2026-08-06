<?php
$siteLanguage = 'en';
$isSpanishSite = false;
$homeHref = '/';
$languageAlternates = $languageAlternates ?? [];
$suppressHreflang = $suppressHreflang ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!empty($baseHref)): ?>
    <base href="<?php echo htmlspecialchars($baseHref, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
    
    <?php
        // Default Values
        $siteName = "EmpireOneCX";
        $defaultTitle = "Customer Experience & Global Outsourcing Services";
        $defaultDescription = "AI-assisted customer experience and global outsourcing. Customer support, back-office, and business process outsourcing (BPO). Build your CX team and go live in 72 hours.";
        $defaultKeywords = "Customer experience, BPO services, AI automation, outsourcing, finance BPO, QA services, customer support outsourcing";

        // Dynamic Title (Mapped to match the variables used in your page files)
        if(isset($page_title)) {
            $title = $page_title;
        } elseif(isset($pageTitle)) {
            $title = $pageTitle . " | " . $siteName;
        } else {
            $title = $defaultTitle;
        }

        // Dynamic Description
        if(isset($page_description)) {
            $description = $page_description;
        } elseif(isset($meta_description)) {
            $description = $meta_description;
        } elseif(isset($metaDescription)) {
            $description = $metaDescription;
        } else {
            $description = $defaultDescription;
        }

        // Dynamic Keywords
        $keywords = isset($metaKeywords) ? $metaKeywords : $defaultKeywords;

        // Dynamic Canonical URL (strips tracking parameters and normalizes .php URLs)
        $clean_uri = strtok($_SERVER['REQUEST_URI'], '?');
        if ($clean_uri !== '/' && substr($clean_uri, -4) === '.php') {
            $clean_uri = substr($clean_uri, 0, -4);
        }
        if ($clean_uri !== '/' && substr($clean_uri, -6) === '/index') {
            $clean_uri = substr($clean_uri, 0, -6) ?: '/';
        }
        $canonical = "https://empireonecx.com" . $clean_uri;

        $hasQueryString = strpos($_SERVER['REQUEST_URI'] ?? '', '?') !== false;
        if ($suppressHreflang || $hasQueryString) {
            $languageAlternates = [];
        } elseif (empty($languageAlternates)) {
            $languageAlternates = [
                'en' => $canonical,
                'x-default' => $canonical,
            ];
        }
    ?>

    <title><?php echo htmlspecialchars($title ?? 'EmpireOneCX', ENT_QUOTES, 'UTF-8'); ?></title>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "EmpireOneCX",
      "url": "https://empireonecx.com",
      "logo": "https://empireonecx.com/assets/images/empireonecx.png"
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "EmpireOneCX",
      "url": "https://empireonecx.com"
    }
    </script>

    <link rel="icon" type="image/png" sizes="512x512" href="/assets/images/favicon.png">
    <link rel="apple-touch-icon" sizes="512x512" href="/assets/images/favicon.png">

    <meta name="description" content="<?php echo htmlspecialchars($description ?? 'EmpireOneCX delivers scalable BPO and CX solutions.', ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="EmpireOneCX">
    <meta name="robots" content="<?php echo htmlspecialchars($metaRobots ?? 'index, follow', ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <?php foreach ($languageAlternates as $alternateLang => $alternateUrl): ?>
    <link rel="alternate" hreflang="<?php echo htmlspecialchars($alternateLang, ENT_QUOTES, 'UTF-8'); ?>" href="<?php echo htmlspecialchars($alternateUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endforeach; ?>

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/images/empireonecx.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/images/empireonecx.png">

    <link rel="stylesheet" href="/assets/css/tailwind.generated.css?v=20260805-1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet"></noscript>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
    
    <link rel="stylesheet" href="/assets/css/style.min.css?v=20260805-1">
    <link rel="preload" href="/assets/css/ai-chatbot.min.css?v=20260805-1" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/ai-chatbot.min.css?v=20260805-1"></noscript>
    <?php if (!empty($enableCookieConsent)): ?>
    <link rel="stylesheet" href="/assets/css/cookie-consent.css?v=20260619-1">
    <?php endif; ?>
    
</head>
<body>
    <div id="top-scroll-progress"></div>
    <div class="wrapper">
            <header>
                <div class="container mx-auto w-full">
                    <div class="flex items-center justify-between">
                        <div class="headermain flex items-center gap-8">
                            <div class="mainlogooo flex items-center gap-3 cursor-pointer">
                                <img src="/assets/images/empireonecx.png" alt="EmpireOne Logo" class="logo-img w-[200px] rounded-[5px]" onclick="window.location.href='<?php echo $homeHref; ?>'" />
                            </div>
                            <nav class="menuss hidden lg:flex items-center 
                                space-x-5 xl:space-x-4 
                                text-[16px] xl:text-[16px]">
                                <a href="<?php echo $homeHref; ?>" class="nav-link active">Home</a>
                                <a href="/about-us" class="nav-link">About Us</a>
                                <div class="nav-dropdown nav-dropdown--solutions">
                                    <a href="/solutions/" class="nav-link nav-dropdown-toggle">
                                        Solutions
                                        <i class="fas fa-chevron-down nav-dropdown-icon"></i>
                                    </a>
                                    <div class="nav-dropdown-menu nav-mega-menu nav-mega-menu--solutions" aria-label="Solutions submenu">
                                        <div class="nav-mega-menu__header">
                                            <div>
                                                <span>Solutions</span>
                                                <strong>AI-assisted BPO services for scalable operations</strong>
                                            </div>
                                            <a href="/solutions/" class="nav-mega-menu__all">View All Solutions <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                        <div class="nav-mega-menu__grid nav-mega-menu__grid--solutions">
                                            <a href="/solutions/customer-experience-solutions"><i class="fas fa-headset"></i><span>Customer Experience Solutions</span></a>
                                            <a href="/solutions/multilingual-customer-support"><i class="fas fa-language"></i><span>Multilingual Customer Support</span></a>
                                            <a href="/solutions/omnichannel-contact-center-services"><i class="fas fa-comments"></i><span>Omnichannel Contact Center Services</span></a>
                                            <a href="/solutions/help-desk-technical-support"><i class="fas fa-screwdriver-wrench"></i><span>Help Desk &amp; Technical Support</span></a>
                                            <a href="/solutions/back-office-support"><i class="fas fa-inbox"></i><span>Back Office Support</span></a>
                                            <a href="/solutions/bpo-solutions"><i class="fas fa-gears"></i><span>BPO Solutions</span></a>
                                            <a href="/solutions/finance-accounting-bpo"><i class="fas fa-file-invoice-dollar"></i><span>Finance &amp; Accounting BPO</span></a>
                                            <a href="/solutions/quality-assurance-outsourcing"><i class="fas fa-clipboard-check"></i><span>Quality Assurance Outsourcing</span></a>
                                            <a href="/solutions/recruitment-workforce-support"><i class="fas fa-user-group"></i><span>Recruitment & Workforce Support</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-dropdown nav-dropdown--industries">
                                    <a href="/industries/" class="nav-link nav-dropdown-toggle">
                                        Industries
                                        <i class="fas fa-chevron-down nav-dropdown-icon"></i>
                                    </a>
                                    <div class="nav-dropdown-menu nav-mega-menu" aria-label="Industries submenu">
                                        <div class="nav-mega-menu__header">
                                            <div>
                                                <span>Industry Expertise</span>
                                                <strong>Specialized BPO teams for complex operations</strong>
                                            </div>
                                            <a href="/industries/" class="nav-mega-menu__all">View All Industries <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                        <div class="nav-mega-menu__grid">
                                            <a href="/industries/retail-bpo"><i class="fas fa-store"></i><span>Retail</span></a>
                                            <a href="/industries/automotive-bpo"><i class="fas fa-car"></i><span>Automotive</span></a>
                                            <a href="/industries/travel-hospitality-bpo"><i class="fas fa-plane-departure"></i><span>Travel & Hospitality</span></a>
                                            <a href="/industries/telecommunications-bpo"><i class="fas fa-tower-cell"></i><span>Telecommunications</span></a>
                                            <a href="/industries/insurance-bpo"><i class="fas fa-shield-halved"></i><span>Insurance</span></a>
                                            <a href="/industries/healthcare-bpo"><i class="fas fa-hospital"></i><span>Healthcare</span></a>
                                            <a href="/industries/energy-bpo"><i class="fas fa-bolt"></i><span>Energy</span></a>
                                            <a href="/industries/utility-bpo"><i class="fas fa-toolbox"></i><span>Utility</span></a>
                                            <a href="/industries/technology-bpo"><i class="fas fa-server"></i><span>Technology & SaaS</span></a>
                                            <a href="/industries/government-bpo"><i class="fas fa-landmark"></i><span>Government</span></a>
                                            <a href="/industries/legal-process-outsourcing"><i class="fas fa-gavel"></i><span>Legal</span></a>
                                            <a href="/industries/financial-services-bpo"><i class="fas fa-file-invoice-dollar"></i><span>Financial Services</span></a>
                                            <a href="/industries/ecommerce-bpo"><i class="fas fa-cart-shopping"></i><span>eCommerce</span></a>
                                            <a href="/industries/real-estate-bpo"><i class="fas fa-building"></i><span>Real Estate</span></a>
                                            <a href="/industries/gaming-bpo"><i class="fas fa-gamepad"></i><span>Gaming</span></a>
                                            <a href="/industries/home-services-bpo"><i class="fas fa-screwdriver-wrench"></i><span>Home Services</span></a>
                                            <a href="/industries/home-warranty-bpo"><i class="fas fa-house-circle-check"></i><span>Home Warranty</span></a>
                                            <a href="/industries/transportation-logistics-bpo"><i class="fas fa-truck"></i><span>Transportation & Logistics</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-dropdown">
                                    <a href="/insights/" class="nav-link nav-dropdown-toggle nav-resources-link">
                                        Resources
                                        <i class="fas fa-chevron-down nav-dropdown-icon"></i>
                                    </a>
                                    <div class="nav-dropdown-menu nav-dropdown-menu--resources" aria-label="Resources submenu">
                                        <a href="/insights/">
                                            <i class="fas fa-newspaper"></i>
                                            <span><strong>Insights</strong><small>Articles, guides, and BPO knowledge</small></span>
                                        </a>
                                        <a href="/case-study">
                                            <i class="fas fa-chart-line"></i>
                                            <span><strong>Case Studies</strong><small>Customer results and success stories</small></span>
                                        </a>
                                        <a href="/compliance-security/">
                                            <i class="fas fa-shield-halved"></i>
                                            <span><strong>Compliance & Security</strong><small>Certifications, controls, and data protection</small></span>
                                        </a>
                                        <a href="/faq/">
                                            <i class="fas fa-circle-question"></i>
                                            <span><strong>FAQ Hub</strong><small>BPO, CX, call center, and AI support answers</small></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="nav-dropdown">
                                    <a href="/global-footprint/" class="nav-link nav-dropdown-toggle">
                                        Global Footprint
                                        <i class="fas fa-chevron-down nav-dropdown-icon"></i>
                                    </a>
                                    <div class="nav-dropdown-menu nav-dropdown-menu--locations" aria-label="Global Footprint submenu">
                                        <a href="/global-footprint/canada/"><img class="nav-location-flag" src="/assets/images/flags/canada.svg" alt="Canada flag" loading="lazy">Canada</a>
                                        <a href="/global-footprint/united-states/"><img class="nav-location-flag" src="/assets/images/flags/united-states.svg" alt="United States flag" loading="lazy">United States</a>
                                        <a href="/global-footprint/united-kingdom/"><img class="nav-location-flag" src="/assets/images/flags/united-kingdom.svg" alt="United Kingdom flag" loading="lazy">United Kingdom</a>
                                        <a href="/global-footprint/australia/"><img class="nav-location-flag" src="/assets/images/flags/australia.svg" alt="Australia flag" loading="lazy">Australia</a>
                                        <a href="/global-footprint/uae/"><img class="nav-location-flag" src="/assets/images/flags/uae.svg" alt="UAE flag" loading="lazy">UAE</a>
                                        <a href="/global-footprint/morocco/"><img class="nav-location-flag" src="/assets/images/flags/morocco.svg" alt="Morocco flag" loading="lazy">Morocco</a>
                                        <a href="/global-footprint/nicaragua/"><img class="nav-location-flag" src="/assets/images/flags/nicaragua.svg" alt="Nicaragua flag" loading="lazy">Nicaragua</a>
                                        <a href="/global-footprint/colombia/"><img class="nav-location-flag" src="/assets/images/flags/colombia.svg" alt="Colombia flag" loading="lazy">Colombia</a>
                                        <a href="/global-footprint/venezuela/"><img class="nav-location-flag" src="/assets/images/flags/venezuela.svg" alt="Venezuela flag" loading="lazy">Venezuela</a>
                                        <a href="/global-footprint/bolivia/"><img class="nav-location-flag" src="/assets/images/flags/bolivia.svg" alt="Bolivia flag" loading="lazy">Bolivia</a>
                                        <a href="/global-footprint/paraguay/"><img class="nav-location-flag" src="/assets/images/flags/paraguay.svg" alt="Paraguay flag" loading="lazy">Paraguay</a>
                                        <a href="/global-footprint/south-africa/"><img class="nav-location-flag" src="/assets/images/flags/south-africa.svg" alt="South Africa flag" loading="lazy">South Africa</a>
                                        <a href="/global-footprint/pakistan/"><img class="nav-location-flag" src="/assets/images/flags/pakistan.svg" alt="Pakistan flag" loading="lazy">Pakistan</a>
                                        <a href="/global-footprint/philippines/"><img class="nav-location-flag" src="/assets/images/flags/philippines.svg" alt="Philippines flag" loading="lazy">Philippines</a>
                                    </div>
                                </div>
                                <a href="/contact" class="nav-link">Contact Us</a>
                                <a href="https://careers.empireonecx.com" class="nav-link" target="_blank" rel="noopener noreferrer">Careers</a>
                            </nav>
                        </div>

                        <div class="buttontopss hidden lg:flex items-center">

                            <button onclick="window.open('https://calendly.com/empireonegroup-marketing/30min', '_blank')" 
                                    class="header-btn rounded-[7px] 
                                        px-[18px] py-[7px]
                                        text-[14px] bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white">
                                        Book a 30 Minute Call
                            </button>
                        </div>

                        <div class="lg:hidden flex items-center gap-3">
                            <button id="menu-toggle" class="mobilehumburger p-2 focus:outline-none">
                                <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </header>
        </div>
        <div id="mobile-menu-overlay" class="mobile-menu-overlay fixed inset-0 z-40 lg:hidden hidden"></div>
        <div id="mobile-menu-container" class="mobile-menu-container">
            <div class="p-5">
                <div class="space-y-4 mb-6">
                    <a href="<?php echo $homeHref; ?>" class="mobile-nav-link active block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors py-2">
                        <i class="fas fa-home mr-3 w-5 text-center"></i>Home
                    </a>
                    <a href="/about-us" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-info-circle mr-3 w-5 text-center"></i>About Us
                    </a>
                    <div class="mobile-solutions-group">
                        <div class="mobile-nav-parent">
                            <a href="/solutions/" class="mobile-nav-link text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                                <i class="fas fa-lightbulb mr-3 w-5 text-center"></i>Solutions
                            </a>
                            <button class="mobile-submenu-toggle" type="button" aria-expanded="false" aria-controls="mobile-solutions-submenu" aria-label="Toggle Solutions submenu">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="mobile-solutions-submenu" class="mobile-solutions-submenu">
                            <a href="/solutions/customer-experience-solutions"><i class="fas fa-headset"></i>Customer Experience Solutions</a>
                            <a href="/solutions/multilingual-customer-support"><i class="fas fa-language"></i>Multilingual Customer Support</a>
                            <a href="/solutions/omnichannel-contact-center-services"><i class="fas fa-comments"></i>Omnichannel Contact Center Services</a>
                            <a href="/solutions/help-desk-technical-support"><i class="fas fa-screwdriver-wrench"></i>Help Desk &amp; Technical Support</a>
                            <a href="/solutions/back-office-support"><i class="fas fa-inbox"></i>Back Office Support</a>
                            <a href="/solutions/bpo-solutions"><i class="fas fa-gears"></i>BPO Solutions</a>
                            <a href="/solutions/finance-accounting-bpo"><i class="fas fa-file-invoice-dollar"></i>Finance &amp; Accounting BPO</a>
                            <a href="/solutions/quality-assurance-outsourcing"><i class="fas fa-clipboard-check"></i>Quality Assurance Outsourcing</a>
                            <a href="/solutions/recruitment-workforce-support"><i class="fas fa-user-group"></i>Recruitment & Workforce Support</a>
                        </div>
                    </div>
                    <div class="mobile-industries-group">
                        <div class="mobile-nav-parent">
                            <a href="/industries/" class="mobile-nav-link text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                                <i class="fas fa-industry mr-3 w-5 text-center"></i>Industries
                            </a>
                            <button class="mobile-submenu-toggle" type="button" aria-expanded="false" aria-controls="mobile-industries-submenu" aria-label="Toggle Industries submenu">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="mobile-industries-submenu" class="mobile-industries-submenu">
                            <a href="/industries/retail-bpo">Retail</a>
                            <a href="/industries/automotive-bpo">Automotive</a>
                            <a href="/industries/travel-hospitality-bpo">Travel & Hospitality</a>
                            <a href="/industries/telecommunications-bpo">Telecommunications</a>
                            <a href="/industries/insurance-bpo">Insurance</a>
                            <a href="/industries/healthcare-bpo">Healthcare</a>
                            <a href="/industries/energy-bpo">Energy</a>
                            <a href="/industries/utility-bpo">Utility</a>
                            <a href="/industries/technology-bpo">Technology & SaaS</a>
                            <a href="/industries/government-bpo">Government</a>
                            <a href="/industries/legal-process-outsourcing">Legal</a>
                            <a href="/industries/financial-services-bpo">Financial Services</a>
                            <a href="/industries/ecommerce-bpo">eCommerce</a>
                            <a href="/industries/real-estate-bpo">Real Estate</a>
                            <a href="/industries/gaming-bpo">Gaming</a>
                            <a href="/industries/home-services-bpo">Home Services</a>
                            <a href="/industries/home-warranty-bpo">Home Warranty</a>
                            <a href="/industries/transportation-logistics-bpo">Transportation & Logistics</a>
                        </div>
                    </div>
                    <div class="mobile-resources-group">
                        <div class="mobile-nav-parent">
                            <a href="/insights/" class="mobile-nav-link mobile-resources-link text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                                <i class="fas fa-folder-open mr-3 w-5 text-center"></i>Resources
                            </a>
                            <button class="mobile-submenu-toggle" type="button" aria-expanded="false" aria-controls="mobile-resources-submenu" aria-label="Toggle Resources submenu">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="mobile-resources-submenu" class="mobile-resources-submenu">
                            <a href="/insights/"><i class="fas fa-newspaper"></i>Insights</a>
                            <a href="/case-study"><i class="fas fa-chart-line"></i>Case Studies</a>
                            <a href="/compliance-security/"><i class="fas fa-shield-halved"></i>Compliance & Security</a>
                            <a href="/faq/"><i class="fas fa-circle-question"></i>FAQ Hub</a>
                        </div>
                    </div>
                    <div class="mobile-locations-group">
                        <div class="mobile-nav-parent">
                            <a href="/global-footprint/" class="mobile-nav-link text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                                <i class="fas fa-location-dot mr-3 w-5 text-center"></i>Global Footprint
                            </a>
                            <button class="mobile-submenu-toggle" type="button" aria-expanded="false" aria-controls="mobile-locations-submenu" aria-label="Toggle Global Footprint submenu">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="mobile-locations-submenu" class="mobile-locations-submenu">
                            <a href="/global-footprint/canada/"><img class="nav-location-flag" src="/assets/images/flags/canada.svg" alt="Canada flag" loading="lazy">Canada</a>
                            <a href="/global-footprint/united-states/"><img class="nav-location-flag" src="/assets/images/flags/united-states.svg" alt="United States flag" loading="lazy">United States</a>
                            <a href="/global-footprint/united-kingdom/"><img class="nav-location-flag" src="/assets/images/flags/united-kingdom.svg" alt="United Kingdom flag" loading="lazy">United Kingdom</a>
                            <a href="/global-footprint/australia/"><img class="nav-location-flag" src="/assets/images/flags/australia.svg" alt="Australia flag" loading="lazy">Australia</a>
                            <a href="/global-footprint/uae/"><img class="nav-location-flag" src="/assets/images/flags/uae.svg" alt="UAE flag" loading="lazy">UAE</a>
                            <a href="/global-footprint/morocco/"><img class="nav-location-flag" src="/assets/images/flags/morocco.svg" alt="Morocco flag" loading="lazy">Morocco</a>
                            <a href="/global-footprint/nicaragua/"><img class="nav-location-flag" src="/assets/images/flags/nicaragua.svg" alt="Nicaragua flag" loading="lazy">Nicaragua</a>
                            <a href="/global-footprint/colombia/"><img class="nav-location-flag" src="/assets/images/flags/colombia.svg" alt="Colombia flag" loading="lazy">Colombia</a>
                            <a href="/global-footprint/venezuela/"><img class="nav-location-flag" src="/assets/images/flags/venezuela.svg" alt="Venezuela flag" loading="lazy">Venezuela</a>
                            <a href="/global-footprint/bolivia/"><img class="nav-location-flag" src="/assets/images/flags/bolivia.svg" alt="Bolivia flag" loading="lazy">Bolivia</a>
                            <a href="/global-footprint/paraguay/"><img class="nav-location-flag" src="/assets/images/flags/paraguay.svg" alt="Paraguay flag" loading="lazy">Paraguay</a>
                            <a href="/global-footprint/south-africa/"><img class="nav-location-flag" src="/assets/images/flags/south-africa.svg" alt="South Africa flag" loading="lazy">South Africa</a>
                            <a href="/global-footprint/pakistan/"><img class="nav-location-flag" src="/assets/images/flags/pakistan.svg" alt="Pakistan flag" loading="lazy">Pakistan</a>
                            <a href="/global-footprint/philippines/"><img class="nav-location-flag" src="/assets/images/flags/philippines.svg" alt="Philippines flag" loading="lazy">Philippines</a>
                        </div>
                    </div>
                    <a href="/contact" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-envelope mr-3 w-5 text-center"></i>Contact Us
                    </a>
                    <a href="https://careers.empireonecx.com" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-briefcase mr-3 w-5 text-center"></i>Careers
                    </a>
                </div>


                <button onclick="window.open('https://calendly.com/empireonegroup-marketing/30min', '_blank')" class="cta-gradient text-white font-bold py-3 px-5 rounded-[8px] text-sm w-full hover:scale-[1.02] active:scale-95 transition" style="font-size: 12px;padding: 10px 20px;">
                    <i class="fas fa-users mr-2"></i>Book a 15 Minute Call
                </button>
            </div>
        </div>
