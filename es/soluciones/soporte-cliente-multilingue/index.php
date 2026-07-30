<?php
$siteLanguage = "es";
$baseHref = "/";
$page_title = "Soporte al cliente multilingüe | EmpireOneCX";
$meta_description = "El soporte al cliente multilingüe de EmpireOneCX ofrece agentes con fluidez idiomática, neutralización de acento con IA, QA por idioma y cobertura multilingüe 24/7 en voz, chat, correo electrónico y redes sociales.";
$metaKeywords = "soporte al cliente multilingüe, call center multilingüe, outsourcing CX multilingüe, agentes con fluidez idiomática, neutralización de acento con IA, BPO multilingüe, soporte global al cliente";
$languageSwitchHrefEn = "/solutions/multilingual-customer-support";
$languageAlternates = [
    "en" => "https://empireonecx.com/solutions/multilingual-customer-support",
    "es" => "https://empireonecx.com/es/soluciones/soporte-cliente-multilingue/",
    "x-default" => "https://empireonecx.com/solutions/multilingual-customer-support",
];
include(__DIR__ . "/../../../inc/header.php");
?>

<style>
.ecx-compact .ecx-form-wrap .ecx-label { display: none; }
.ecx-compact .ecx-form-wrap .ecx-input { padding: 8px 12px; font-size: 13px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-input::placeholder { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-select { padding: 8px 12px; font-size: 13px; background: rgba(20,20,20,0.95) !important; border-color: rgba(255,255,255,0.2); color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-select option { background: #1a1a1a; color: #fff; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper { padding: 8px 12px; background: rgba(255,255,255,0.1) !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"] { color: #fff !important; font-size: 13px; background: transparent !important; }
.ecx-compact .ecx-form-wrap .ecx-phone-wrapper input[type="tel"]::placeholder { color: rgba(255,255,255,0.5) !important; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle span.ecx-code { color: #fff !important; font-size: 13px; }
.ecx-compact .ecx-form-wrap .ecx-country-toggle svg { color: #fff !important; }
.ecx-compact .ecx-form-wrap .ecx-divider { color: rgba(255,255,255,0.3) !important; }
.ecx-compact .ecx-form-wrap .ecx-grid-2 { gap: 8px; }
.ecx-compact .ecx-form-wrap .ecx-mt { margin-top: 8px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row { margin-top: 12px; }
.ecx-compact .ecx-form-wrap .ecx-privacy-row p { font-size: 12px; color: rgba(255,255,255,0.8) !important; }
.ecx-compact .ecx-form-wrap .ecx-submit-btn { margin-top: 14px; padding: 10px 24px; font-size: 14px; }
.ecx-compact .ecx-country-dropdown { background: #1a1a1a !important; border-color: rgba(255,255,255,0.2) !important; }
.ecx-compact .ecx-country-item { color: #ddd !important; }
.ecx-compact .ecx-country-item:hover { background: rgba(122,118,255,0.2) !important; }
.cx-hero-section { padding-top: 18rem; padding-bottom: 180px; }
@media (max-width: 1024px) { .cx-hero-grid { grid-template-columns: 1fr !important; } .cx-hero-form { display: block !important; } .cx-hero-section { padding-top: 10rem !important; padding-bottom: 80px !important; height: auto !important; min-height: 100vh !important; } }
.cx-comparison-table { width: 100%; border-collapse: separate; border-spacing: 0; border-radius: 16px; overflow: hidden; }
.cx-comparison-table thead th { padding: 20px 24px; font-size: 15px; font-weight: 600; text-align: left; }
.cx-comparison-table thead th:first-child { background: #1a1a1a; color: #fff; }
.cx-comparison-table thead th:nth-child(2) { background: #2a2a2a; color: #aaa; }
.cx-comparison-table thead th:nth-child(3) { background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); color: #fff; }
.cx-comparison-table tbody td { padding: 18px 24px; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f0f0f0; vertical-align: top; }
.cx-comparison-table tbody tr:last-child td { border-bottom: none; }
.cx-comparison-table tbody td:first-child { background: #fafafa; color: #000; font-weight: 600; }
.cx-comparison-table tbody td:nth-child(2) { background: #fff; color: #555; }
.cx-comparison-table tbody td:nth-child(3) { background: #fdf9ff; color: #2a1a40; }
.cx-feature-card { border-radius: 16px; padding: 32px; background: #fff; box-shadow: 0 4px 24px rgba(122,118,255,0.08); border: 1px solid #f0eeff; transition: transform 0.2s ease, box-shadow 0.2s ease; }
.cx-feature-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(122,118,255,0.16); }
.cx-feature-icon { width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #7A76FF 0%, #CB46FA 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #fff; font-size: 22px; }
.cx-industry-pill { display: inline-flex; align-items: center; gap: 10px; padding: 10px 16px; border-radius: 100px; background: #fff; border: 1px solid #e8e4ff; font-size: 14px; color: #2a2a2a; }
.cx-industry-pill span.dot { width: 8px; height: 8px; border-radius: 50%; background: linear-gradient(135deg, #7A76FF, #FE881C); flex-shrink: 0; }
.cx-stat-number { font-size: 48px; font-weight: 700; line-height: 1; background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.cx-faq-item { border-bottom: 1px solid rgba(255,255,255,0.12); }
.cx-faq-item:last-child { border-bottom: none; }
.cx-faq-toggle { width: 100%; background: none; border: none; padding: 24px 0; display: flex; align-items: center; justify-content: space-between; gap: 16px; cursor: pointer; text-align: left; }
.cx-faq-question { font-size: 17px; font-weight: 600; color: #fff; line-height: 26px; }
.cx-faq-icon { width: 32px; height: 32px; flex-shrink: 0; border-radius: 50%; background: linear-gradient(135deg, #7A76FF 0%, #FE881C 100%); display: flex; align-items: center; justify-content: center; transition: transform 0.25s ease; }
.cx-faq-icon svg { width: 14px; height: 14px; stroke: #fff; stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round; }
.cx-faq-item.open .cx-faq-icon { transform: rotate(180deg); }
.cx-faq-answer { font-size: 16px; line-height: 26px; color: #b7b7b7; max-height: 0; overflow: hidden; transition: max-height 0.35s ease, padding-bottom 0.25s ease; }
.cx-faq-item.open .cx-faq-answer { max-height: 420px; padding-bottom: 24px; }
.breadcrumb-nav a, .breadcrumb-nav span { font-size: 14px; color: #aaa; text-decoration: none; }
.breadcrumb-nav a:hover { color: #CB46FA; }
.breadcrumb-nav .sep { margin: 0 8px; }
.breadcrumb-nav .current { color: #fff; }
@keyframes revealUp { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: translateY(0); } }
.animate-reveal { animation: revealUp 0.7s ease forwards; }
.delay-1 { animation-delay: 0.1s; }
.delay-2 { animation-delay: 0.25s; }
.delay-3 { animation-delay: 0.4s; }
.delay-4 { animation-delay: 0.55s; }
</style>

<main class="relative">
<section class="hero-section mainherowork cx-hero-section relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden">
    <video class="solutions-bg-videowork absolute" autoplay muted loop playsinline preload="metadata" poster="/assets/images/solutions-herobg-poster.webp"><source src="/assets/images/solutions-herobg.mp4" type="video/mp4" /></video>
    <div class="absolute inset-0 bg-black/75 z-0 pointer-events-none"></div>
    <div class="container mx-auto w-full relative z-10">
        <div class="cx-hero-grid" style="display:grid; grid-template-columns:1fr 440px; gap:48px; align-items:center;">
            <div class="text-center lg:text-left">
                <nav class="breadcrumb-nav mb-6 animate-reveal delay-1" aria-label="Miga de pan"><a href="/es/soluciones/">Soluciones</a><span class="sep">/</span><span class="current">Soporte al cliente multilingüe</span></nav>
                <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent"><span class="spanfont bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">Soporte al cliente multilingüe</span></p>
                <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto lg:mx-0" style="max-width:900px;">Soporte al cliente multilingüe construido para conversaciones reales</h1>
                <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mb-8 mx-auto lg:mx-0" style="max-width:848px !important;">Cada cliente espera recibir soporte en su propio idioma, especialmente cuando algo sale mal. Asignamos agentes con fluidez idiomática respaldados por tecnología de neutralización de acento con IA en más de 15 idiomas, con los mismos estándares de QA, CSAT y tiempo de respuesta en cada mercado.</p>
                <div class="animate-reveal delay-4 flex flex-wrap items-center justify-center lg:justify-start gap-4"><a href="/es/soluciones/" class="text-white py-4 px-8 text-sm sm:text-base border border-white/30 hover:border-white/60 transition-all duration-300" style="border-radius:8px !important; background:rgba(255,255,255,0.08);">Explorar todas las soluciones BPO</a><a href="/es/contacto/" class="herobtns inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base shadow-lg hover:shadow-purple-400/20" style="border-radius:8px !important;">Solicite una consulta gratuita</a></div>
            </div>
            <div class="cx-hero-form animate-reveal delay-3" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.14); border-radius:16px; padding:24px;"><p style="color:#fff; font-size:15px; font-weight:600; text-align:center; margin:0 0 16px;">Solicite una consulta gratuita</p><div class="ecx-compact"><?php include(__DIR__ . "/../../../inc/contact-form.php"); ?></div></div>
        </div>
    </div>
</section>

<section class="samesectionpadding py-24 pt-[80px] relative overflow-hidden bg-white" aria-label="Qué es el soporte al cliente multilingüe">
    <div class="container mx-auto px-4">
        <div class="solution-side-img1 absolute w-[846px] h-[893px] opacity-[40%] bg-cover bg-center bg-no-repeat"></div>
        <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-12" style="align-items:center;">
            <div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Soporte al cliente multilingüe</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width:560px;">¿Qué es el soporte al cliente multilingüe?</h3></div>
            <div><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">El soporte al cliente multilingüe significa que cada interacción, ya sea por voz, chat, correo electrónico o redes sociales, llega a un agente con fluidez en el idioma del cliente. El tono, la marca y la calidad de resolución se mantienen consistentes en todos los canales.</p><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px] mt-4">Esto no es traducción añadida sobre un equipo pensado primero en inglés. Es capacidad de nivel nativo integrada en la operación desde el primer día, eliminando el riesgo de confianza que generan los retrasos de traducción o una redacción poco natural.</p></div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <?php foreach ([['15+', 'Idiomas soportados en los equipos de entrega'], ['9', 'Países con grupos de talento nativo y con fluidez idiomática'], ['95%+', 'Equivalencia promedio de CSAT en los idiomas soportados'], ['24/7', 'Cobertura en zonas horarias y pares de idiomas']] as $s): ?>
            <div class="text-center p-8 rounded-[16px]" style="background:#fafafa; border:1px solid #f0eeff;"><div class="cx-stat-number mb-2"><?= $s[0] ?></div><p class="text-[14px] leading-[20px] text-[#555]"><?= $s[1] ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Soporte traducido vs. entrega multilingüe real">
    <div class="container mx-auto px-4">
        <div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-10" style="align-items:center;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Vea la diferencia</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]" style="max-width:620px;">Soporte traducido vs. <span class="solutionsitalic-font text-[32px] leading-[40px] tracking-[-0.03em] text-white">entrega multilingüe real</span></h3></div><div><p class="nomargin text-white text-[16px] leading-[24px]">Agregar herramientas de traducción a un equipo de un solo idioma crea brechas: contexto perdido, resolución más lenta y CSAT inconsistente. Una operación multilingüe se construye con fluidez desde el inicio.</p></div></div>
        <div class="overflow-x-auto rounded-[16px]"><table class="cx-comparison-table" role="table" aria-label="Tabla comparativa de soporte multilingüe"><thead><tr><th>Dimensión operativa</th><th>Soporte traducido</th><th>Entrega multilingüe real</th></tr></thead><tbody>
        <?php foreach ([['Gestión del idioma','Traducción automática en tiempo real durante la conversación','Agentes nativos o fluidos, sin retraso de traducción'],['Tono y voz de marca','Se pierde o se vuelve plano en la traducción','Se conserva de forma consistente en cada idioma'],['Gestión de escalaciones','Los matices y la intención suelen interpretarse mal','Comprensión completa del contexto, las expresiones y la urgencia'],['Modelo de cobertura','Un solo equipo con traducción bajo demanda','Equipos dedicados por idioma y región'],['Consistencia de calidad','El CSAT cae en idiomas no principales','Paridad de CSAT mantenida en todos los idiomas']] as $row): ?><tr><td><?= $row[0] ?></td><td><?= $row[1] ?></td><td><?= $row[2] ?></td></tr><?php endforeach; ?>
        </tbody></table></div>
    </div>
</section>

<section class="samesectionpadding py-24 bg-white" aria-label="Capacidades de soporte multilingüe"><div class="container mx-auto px-4"><div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:center;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Capacidades</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]">Qué ofrece nuestro soporte multilingüe</h3></div><div><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">El soporte por idioma cubre voz, chat, correo electrónico y redes sociales sin recurrir al inglés como respaldo. Cada mercado recibe calidad consistente, tono localizado y QA medible.</p></div></div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"><?php $cards = [['fa-language','Agentes fluidos y neutralización con IA','Los agentes se reclutan y capacitan para lograr fluidez de alto nivel, reforzada con neutralización de acento mediante IA para asegurar una comunicación clara.',['Hablantes fluidos','Neutralización de acento con IA','Soporte habilitado por tecnología']],['fa-comments','Voz de marca consistente en todos los idiomas','El tono, la terminología y los mensajes se localizan y mantienen por idioma para que la voz de su marca permanezca consistente en cada mercado.',['Consistencia de marca','Localización','Guías de tono']],['fa-headset','Cobertura multilingüe por canal','El soporte por idioma cubre voz, chat, correo electrónico y redes sociales. Sin recurrir al inglés en ningún canal.',['Voz','Chat','Correo electrónico','Redes sociales']],['fa-earth-americas','Equipos de entrega específicos por región','Los equipos dedicados se alinean con sus mercados de mayor volumen por idioma. Menos transferencias, y el contexto permanece con el cliente.',['Equipos dedicados','Alineación regional','Menos transferencias']],['fa-chart-line','Cobertura idiomática escalable','Agregue o amplíe capacidad por idioma al entrar en nuevos mercados sin reconstruir su operación de soporte.',['Expansión de mercado','Escalamiento bajo demanda','Incorporación de nuevos idiomas']],['fa-clipboard-check','Monitoreo de calidad por idioma','QA y CSAT se monitorean por idioma para detectar y corregir brechas de calidad de forma temprana.',['QA por idioma','Seguimiento de CSAT','Mejora continua']]]; foreach ($cards as $card): ?><div class="cx-feature-card"><div class="cx-feature-icon"><i class="fas <?= $card[0] ?>"></i></div><h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= $card[1] ?></h4><p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= $card[2] ?></p><div class="flex flex-wrap gap-2"><?php foreach ($card[3] as $tag): ?><span class="cx-industry-pill"><span class="dot"></span><?= $tag ?></span><?php endforeach; ?></div></div><?php endforeach; ?></div></div></section>

<section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="Impacto del soporte multilingüe en el negocio"><div class="container mx-auto px-4"><div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Qué obtiene</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]">Soporte construido alrededor del idioma, no de soluciones improvisadas</h3><p class="text-white/75 text-[16px] leading-[26px] mb-8">Externalice el soporte multilingüe con un equipo que integra cada idioma en la operación. Sin añadidos, sin soluciones improvisadas de traducción.</p><a href="/es/contacto/" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base">Construya su equipo multilingüe</a></div><div class="grid grid-cols-1 md:grid-cols-2 gap-6"><div class="rounded-[16px] p-7 bg-[#111] border border-white/10"><h4 class="text-white text-[22px] leading-[30px] mb-5">Qué obtiene</h4><ul class="space-y-3 text-white/75 text-[15px] leading-[24px]"><?php foreach (['Agentes nativos y con fluidez en más de 15 idiomas','Equipos dedicados por región y par de idiomas','Voz, chat, email, and social coverage','Localización de la voz de marca por idioma','Reportes de QA y CSAT por idioma','Cobertura 24/7 alineada con zonas horarias por idioma y región'] as $item): ?><li class="flex gap-3"><span style="color:#CB46FA;">&#10003;</span><span><?= $item ?></span></li><?php endforeach; ?></ul></div><div class="rounded-[16px] p-7 bg-[#111] border border-white/10"><h4 class="text-white text-[22px] leading-[30px] mb-5">Impacto en el negocio</h4><ul class="space-y-3 text-white/75 text-[15px] leading-[24px]"><?php foreach (['Paridad de CSAT en cada idioma soportado','Resolución más rápida sin retraso de traducción','Mayor confianza en mercados de idiomas no principales','Expansión más fluida hacia nuevas geografías'] as $item): ?><li class="flex gap-3"><span style="color:#FE881C;">&#9656;</span><span><?= $item ?></span></li><?php endforeach; ?></ul><div class="mt-6 rounded-[12px] p-5" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"><p class="text-white text-[15px] leading-[24px]"><strong>Por qué funciona:</strong> Los equipos específicos por idioma se construyen desde el inicio. No hay un solo equipo forzado a cubrir idiomas que no puede atender correctamente.</p></div></div></div></div></div></section>

<section class="samesectionpadding py-24 bg-white" aria-label="Experiencia por industria"><div class="container mx-auto px-4"><div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:center;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Experiencia por industria</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]">Por qué las empresas eligen EmpireOneCX para soporte multilingüe</h3></div><div><p class="nomargin text-[#3C3B47] text-[16px] leading-[24px]">Las necesidades de idioma cambian según la industria y el mercado. Construimos la cobertura multilingüe alrededor de su base real de clientes, no de una lista genérica.</p></div></div><div class="grid grid-cols-1 lg:grid-cols-2 gap-8"><?php foreach ([['Venta minorista y comercio electrónico','Soporte de pedidos, envíos y devoluciones en múltiples idiomas para clientes que compran entre países.',['Soporte transfronterizo','Asistencia con pedidos','Devoluciones']],['Viajes y hospitalidad','Cambios de reserva, itinerarios y problemas urgentes de viajeros atendidos en el idioma preferido del cliente.',['Soporte de reservas','Asistencia al viajero','Respuesta en tiempo real']],['Servicios financieros y fintech','Conversaciones sobre cuentas, transacciones y fraude atendidas por agentes capacitados en cumplimiento y precisión.',['Cumplimiento','Conciencia de fraude','Soporte de cuentas']],['Tecnología y SaaS','Soporte técnico e incorporación entregados en múltiples idiomas para que cada usuario reciba la misma experiencia de producto.',['Soporte técnico','Incorporación','Base global de usuarios']]] as $ind): ?><div class="cx-feature-card"><h4 class="text-[20px] leading-[28px] font-semibold text-black mb-3"><?= htmlspecialchars($ind[0], ENT_QUOTES, 'UTF-8') ?></h4><p class="text-[15px] leading-[24px] text-[#555] mb-5"><?= htmlspecialchars($ind[1], ENT_QUOTES, 'UTF-8') ?></p><div class="flex flex-wrap gap-2"><?php foreach ($ind[2] as $tag): ?><span class="cx-industry-pill"><span class="dot"></span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span><?php endforeach; ?></div></div><?php endforeach; ?></div></div></section>

<section class="samesectionpadding bg-[rgba(0,0,0,1)] py-24" aria-label="FAQ de soporte al cliente multilingüe"><div class="container mx-auto px-4"><div class="solgap grid gap-5 lg:grid-cols-2 gap-16 mb-14" style="align-items:flex-start;"><div><h2 class="relative flex items-center gap-2 text-sm py-3 overflow-hidden m-0"><span class="relative z-10 flex items-center gap-2"><span class="spanfont block w-[24px] h-[4px] rounded" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%);"></span><span class="spanfont text-[20px] leading-[28px] tracking-[-0.03em]" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50.14%,#FE881C 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Preguntas frecuentes</span></span></h2><h3 class="solution-heading headingspace text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px]">FAQ de soporte al cliente multilingües</h3><p class="text-[16px] leading-[24px] text-gray-400">Todo lo que necesita saber antes de construir un equipo de soporte multilingüe con EmpireOneCX.</p></div><div class="bg-[#111] rounded-[16px] p-6 md:p-8"><?php $faqs = [['¿Usan agentes reales o traducción automática?','Agentes nativos y con fluidez idiomática atienden cada conversación directamente. Las herramientas de traducción no sustituyen el dominio del idioma.'],['¿Qué idiomas soportan actualmente?','La cobertura incluye más de 15 idiomas en nuestros equipos de entrega. Se pueden incorporar idiomas adicionales a medida que se agregan nuevos mercados.'],['¿La calidad será consistente en todos los idiomas o solo en inglés?','CSAT y QA se monitorean por idioma. Cada equipo de idioma se mantiene bajo el mismo estándar de calidad. No existe un nivel de idioma principal.'],['¿Qué tan rápido se puede agregar un nuevo idioma a nuestra operación de soporte?','La mayoría de la nueva capacidad por idioma puede incorporarse en cuatro a seis semanas, según el idioma y la región.']]; foreach ($faqs as $i => $faq): ?><div class="cx-faq-item" id="faq-<?= $i ?>"><button type="button" class="cx-faq-toggle" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>"><span class="cx-faq-question"><?= htmlspecialchars($faq[0], ENT_QUOTES, 'UTF-8') ?></span><span class="cx-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><polyline points="6 9 12 15 18 9"/></svg></span></button><div class="cx-faq-answer" id="faq-answer-<?= $i ?>" role="region"><?= htmlspecialchars($faq[1], ENT_QUOTES, 'UTF-8') ?></div></div><?php endforeach; ?></div></div></div></section>

<section class="future-customer-section samesectionpadding relative py-24 bg-white overflow-hidden"><div class="container mx-auto px-4 relative z-10"><div class="mx-auto relative"><div class="absolute inset-0 rounded-[16px] overflow-hidden"><div class="absolute inset-0" style="background:linear-gradient(90deg,#7A76FF 0%,#CB46FA 50%,#FE881C 100%);"></div><div class="absolute inset-[3px] rounded-[13px] bg-white"><div class="absolute inset-0"><div class="hidden md:block absolute inset-0" style="background:url('/assets/images/cta-bg-image.webp') no-repeat center/cover;"></div><div class="md:hidden absolute inset-0" style="background:url('/assets/images/cta-gradient.webp') no-repeat center/cover;"></div></div></div></div><div class="future-innerwork py-5 px-4 md:px-16 relative z-10"><div class="ctamain text-center"><div class="cta-left-sidework pt-[60px] pb-[60px]"><h2 class="solution-heading cta-solution-section future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">¿Listo para atender a cada cliente <span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[56px] md:leading-[56px] tracking-[-0.03em]">en su propio idioma?</span></h2><p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">Cuéntenos qué idiomas y mercados son más importantes para su negocio. Construimos equipos de soporte multilingüe adaptados a sus necesidades específicas.</p><div class="future-btn w-full max-w-2xl mx-auto mt-6"><a href="/es/contacto/" class="inline-flex items-center justify-center bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white font-bold py-4 px-8 rounded-[8px] text-sm sm:text-base hover:scale-[1.02] active:scale-95 transition shadow-lg hover:shadow-purple-400/20">Solicite una consulta gratuita de soporte multilingüe</a></div></div></div></div></div></div></section>
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

document.addEventListener('DOMContentLoaded', function () { var heroWrap = document.querySelector('.ecx-compact'); if (!heroWrap) return; var toggle = heroWrap.querySelector('.ecx-country-toggle'); var dropdown = heroWrap.querySelector('.ecx-country-dropdown'); var codeHid = heroWrap.querySelector('[name="country_code"]'); if (!toggle || !dropdown) return; var newToggle = toggle.cloneNode(true); toggle.parentNode.replaceChild(newToggle, toggle); newToggle.addEventListener('click', function (e) { e.stopPropagation(); dropdown.classList.toggle('open'); }); dropdown.addEventListener('click', function (e) { var item = e.target.closest('.ecx-country-item'); if (!item) return; var code = item.dataset.code; var flag = item.dataset.flag; heroWrap.querySelector('#ecxSelectedFlag').src = 'https://flagcdn.com/w20/' + flag + '.webp'; heroWrap.querySelector('.ecx-code').textContent = code; codeHid.value = code; dropdown.classList.remove('open'); }); document.addEventListener('click', function () { dropdown.classList.remove('open'); }); });
</script>

<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"Soporte al cliente multilingüe","provider":{"@type":"Organization","name":"EmpireOne CX","url":"https://empireonecx.com"},"description":"Soporte al cliente multilingüe con agentes fluidos en voz, chat, correo electrónico y redes sociales, neutralización de acento con IA y QA por idioma.","url":"https://empireonecx.com/es/soluciones/soporte-cliente-multilingue/","areaServed":"Mundial"}</script>

<?php include(__DIR__ . "/../../../inc/footer.php"); ?>
