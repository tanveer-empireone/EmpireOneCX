<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
        } elseif(isset($metaDescription)) {
            $description = $metaDescription;
        } else {
            $description = $defaultDescription;
        }

        // Dynamic Keywords
        $keywords = isset($metaKeywords) ? $metaKeywords : $defaultKeywords;

        // Dynamic Canonical URL (Strips tracking parameters like ?gclid=123 for pure SEO indexation)
        $clean_uri = strtok($_SERVER['REQUEST_URI'], '?');
        $canonical = "https://" . $_SERVER['HTTP_HOST'] . $clean_uri;
    ?>

    <title><?php echo $title; ?></title>

    <link rel="icon" type="image/png" href="/assets/images/favicon.webp">
    <link rel="apple-touch-icon" href="/assets/images/favicon.webp">

    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="EmpireOneCX">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="<?php echo $canonical; ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/images/Empireone-logo.webp">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/images/Empireone-logo.webp">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="/assets/css/style.css">
    
</head>
<body>
    <div id="top-scroll-progress"></div>
    <div class="wrapper">
            <header>
                <div class="container mx-auto w-full">
                    <div class="flex items-center justify-between">
                        <div class="headermain flex items-center gap-8">
                            <div class="mainlogooo flex items-center gap-3 cursor-pointer">
                                <img src="/assets/images/white-logo.webp" alt="EmpireOne Logo" class="logo-img w-[147px] rounded-[5px]" onclick="window.location.href='/'" />
                            </div>
                            <nav class="menuss hidden lg:flex items-center 
                                space-x-5 xl:space-x-4 
                                text-[16px] xl:text-[16px]">
                                <a href="/" class="nav-link active">Home</a>
                                <a href="/about-us" class="nav-link">About Us</a>
                                <div class="nav-dropdown">
                                    <a href="/solutions" class="nav-link nav-dropdown-toggle">
                                        Solutions
                                        <i class="fas fa-chevron-down nav-dropdown-icon"></i>
                                    </a>
                                    <div class="nav-dropdown-menu" aria-label="Solutions submenu">
                                        <a href="/solutions/customer-experience-solutions">Customer Experience Solutions</a>
                                        <a href="/solutions/back-office-support">Back Office Support</a>
                                        <a href="/solutions/bpo-solutions">BPO Solutions</a>
                                        <a href="/solutions/finance-accounting-bpo">Finance & Accounting BPO</a>
                                        <a href="/solutions/quality-assurance-outsourcing">Quality Assurance Outsourcing</a>
                                        <a href="/solutions/recruitment-workforce-support">Recruitment & Workforce Support</a>
                                    </div>
                                </div>
                                <a href="/industries" class="nav-link">Industries</a>
                                <a href="/case-study" class="nav-link">Case Studies</a>
                                <a href="/insights" class="nav-link">Insights</a>
                                <a href="/career" class="nav-link">Careers</a>
                                <a href="/contact" class="nav-link">Contact Us</a>
                            </nav>
                        </div>

                        <div class="buttontopss hidden lg:flex items-center">
                            <button onclick="window.location.href='/contact'" class="header-btn btnchangescroll rounded-[7px] 
                                            px-[18px] py-[7px]
                                            text-[14px] text-white"  style="border:1px solid #fff; border-radius:8px;">
                                            Get a Quote
                            </button>
                            <button onclick="window.open('https://calendly.com/empireonegroup-marketing/30min', '_blank')" 
                                    class="header-btn rounded-[7px] 
                                        px-[18px] py-[7px]
                                        text-[14px] bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white ml-[12px]">
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
                    <a href="/" class="mobile-nav-link active block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors py-2">
                        <i class="fas fa-home mr-3 w-5 text-center"></i>Home
                    </a>
                    <a href="/about-us" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-info-circle mr-3 w-5 text-center"></i>About Us
                    </a>
                    <div class="mobile-solutions-group">
                        <a href="/solutions" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                            <i class="fas fa-lightbulb mr-3 w-5 text-center"></i>Solutions
                        </a>
                        <div class="mobile-solutions-submenu">
                            <a href="/solutions/customer-experience-solutions">Customer Experience Solutions</a>
                            <a href="/solutions/back-office-support">Back Office Support</a>
                            <a href="/solutions/bpo-solutions">BPO Solutions</a>
                            <a href="/solutions/finance-accounting-bpo">Finance & Accounting BPO</a>
                            <a href="/solutions/quality-assurance-outsourcing">Quality Assurance Outsourcing</a>
                            <a href="/solutions/recruitment-workforce-support">Recruitment & Workforce Support</a>
                        </div>
                    </div>
                    <a href="/industries" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-industry mr-3 w-5 text-center"></i>Industries
                    </a>
                    <a href="/case-study" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-industry mr-3 w-5 text-center"></i>Case Studies
                    </a>
                    <a href="/insights" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-newspaper mr-3 w-5 text-center"></i>Insights
                    </a>
                    <a href="/career" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-briefcase mr-3 w-5 text-center"></i>Careers
                    </a>
                    <a href="/contact" class="mobile-nav-link block text-gray-800 text-base font-medium hover:text-purple-600 transition-colors">
                        <i class="fas fa-envelope mr-3 w-5 text-center"></i>Contact Us
                    </a>
                </div>

                <button onclick="window.location.href='/contact'" class="mb-[12px] cta-gradient text-white font-bold py-3 px-5 rounded-[8px] text-sm w-full hover:scale-[1.02] active:scale-95 transition" style="font-size: 12px;padding: 10px 20px;">
                    <i class="fas fa-users mr-2"></i>Get a Quote
                </button>
                <button onclick="window.open('https://calendly.com/empireonegroup-marketing/30min', '_blank')" class="cta-gradient text-white font-bold py-3 px-5 rounded-[8px] text-sm w-full hover:scale-[1.02] active:scale-95 transition" style="font-size: 12px;padding: 10px 20px;">
                    <i class="fas fa-users mr-2"></i>Book a 15 Minute Call
                </button>
            </div>
        </div>
