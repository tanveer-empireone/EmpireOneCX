<?php
	$siteLanguage = "es";
	$baseHref = "/";
	$page_title = "Sobre nosotros | EmpireOneCX";
	$pageTitle = "Sobre nosotros | EmpireOneCX";
	$meta_description = "Conozca a EmpireOneCX, un socio de outsourcing BPO y experiencia del cliente que ayuda a las empresas a escalar operaciones con equipos humanos apoyados por IA.";
	$metaDescription = $meta_description;
	$metaKeywords = "sobre EmpireOneCX, outsourcing BPO, experiencia del cliente, equipos offshore, CX, atención al cliente";
	$languageSwitchHrefEn = "/about-us";
	$languageAlternates = [
		"en" => "https://empireonecx.com/about-us",
		"es" => "https://empireonecx.com/es/sobre-nosotros/",
		"x-default" => "https://empireonecx.com/about-us",
	];
	include("../../inc/header.php");
?>
<main class="relative">
	<section class="hero-section aboutpage-section relative flex flex-col items-center justify-center px-4 sm:px-6 text-center overflow-hidden" style="padding-top: 17rem; padding-bottom: 180px;">
		<video class="aboutpage-bg-videowork absolute opacity-[0.45]" autoplay muted loop playsinline preload="metadata" aria-hidden="true" poster="assets/images/aboutherobg-poster.webp">
			<source src="./assets/images/aboutherobg.mp4" type="video/mp4" />
		</video>
		<div class="absolute bg-black/50 -z-10" style="width:1920px; height:611px;"></div>
		<div class="container mx-auto w-full relative z-10">
			<p class="herosubtitle mb-4 animate-reveal delay-1 bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent"> Sobre
				<span class="font-reckless bg-gradient-to-r from-[#CB46FA] to-[#FE881C] bg-clip-text text-transparent">
					nosotros
				</span>
			</p>
			<h1 class="heromaintitle animate-reveal delay-2 text-[40px] font-medium leading-tight sm:leading-[1.1] mb-4 text-white">
                Nuestra historia. Nuestra gente. Nuestro propósito.
            </h1>
			<p class="about-subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg sm:max-w-3xl mx-auto px-4 mb-8 sm:mb-10"> Transformamos la experiencia del cliente mediante innovación, empatía y outsourcing preparado para el futuro. </p>
			<div class="animate-reveal delay-4">
				<button onclick="window.location.href='/contact'" class="herobtns bg-gradient-to-r from-[#7A76FF] via-[#CB46FA] to-[#FE881C] text-white py-4 px-8 text-sm sm:text-base hover:transition-all duration-300 shadow-lg hover:shadow-purple-400/20" style="border-radius: 8px !important;"> Construyamos su equipo offshore ahora </button>
			</div>
		</div>
	</section>
	<section class="about-empireone about-story-section relative overflow-hidden">
		<div class="about-story-bg" aria-hidden="true"></div>
		<div class="container mx-auto w-full px-4 relative z-10">
			<div class="about-story-grid">
				<div class="about-story-copy reveal-left" id="about-left">
					<p class="about-subtext relative flex items-center gap-2 text-sm py-3 overflow-hidden">
						<span class="relative z-10 flex items-center gap-2">
							<span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span>
							<span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
								Acerca de EmpireOneCX
							</span>
						</span>
					</p>
					<h2 class="about-heading about-story-title text-black">
						Equipos de CX y BPO asistidos por IA, construidos alrededor de un servicio realmente humano
					</h2>
					<p class="about-para about-story-lead">EmpireOneCX es un socio de outsourcing de nueva generación creado para elevar la experiencia del cliente. Combinamos sistemas digitales avanzados con profesionales capacitados que entienden que cada interacción importa.</p>
					<p class="about-para about-story-text">No solo respondemos llamadas. Construimos confianza, fortalecemos relaciones y ayudamos a las marcas a liderar con excelencia de servicio segura y escalable.</p>
					<div class="about-story-actions">
						<a href="/contact" class="about-story-btn">Construya su equipo offshore <i class="fas fa-arrow-right"></i></a>
						<a href="/solutions" class="about-story-link">Explorar soluciones</a>
					</div>
				</div>
				<div class="about-story-visual reveal-right">
					<div class="about-story-image-wrap">
						<img src="assets/images/empireoneteam.webp" alt="EmpireOneCX team outside the San Carlos site" loading="lazy" decoding="async">
					</div>
					<div class="about-story-proof" aria-label="EmpireOneCX strengths">
						<div>
							<i class="fas fa-headset"></i>
							<strong>Equipos centrados en el cliente</strong>
							<span>Soporte CX dedicado y alineado con sus flujos de trabajo.</span>
						</div>
						<div>
							<i class="fas fa-shield-halved"></i>
							<strong>Operaciones seguras</strong>
							<span>Entrega enfocada en cumplimiento para procesos sensibles.</span>
						</div>
						<div>
							<i class="fas fa-microchip"></i>
							<strong>Entrega asistida por IA</strong>
							<span>Flujos de trabajo más inteligentes con supervisión humana integrada.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="business-thrive bg-[rgba(0,0,0,1)] py-24 relative">
        <h2 class="sr-only">Nuestra misión y visión</h2>
		<div class="container mx-auto px-4 relative z-10">
			<div class="mygapbusiness grid grid-cols-1 lg:grid-cols-2 gap-y-24 items-center">
				<div class="empire-slide-left-newww">
					<p class="about-subtext relative flex gap-2 text-sm pr-4 py-3 overflow-hidden">
						<span class="relative z-10 flex items-center gap-2">
							<span class="block w-[24px] h-[4px] rounded"
								style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
								Nuestra misión
							</span>
						</span>
					</p>
					<h3 class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px] font-reckless" style="max-width: 630px; font-family: 'rackless', serif !important;">
						Impulsar
						<span class="bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent">
							a las empresas a crecer
						</span>
						a través de cada interacción
					</h3>
					<p class="about-page-para text-white text-[16px] leading-relaxed" style="max-width: 630px;"> Revolucionar la experiencia del cliente combinando de forma fluida la empatía humana con tecnología de IA de vanguardia. Estamos comprometidos con entregar un servicio excepcional y establecer el estándar de excelencia en engagement y atención al cliente. </p>
				</div>
				<div class="aboutpage-video1 empire-slide-right-newww relative w-full overflow-hidden justify-self-center
							aspect-[16/9] md:aspect-[16/9] lg:h-[462px] lg:aspect-auto">
					<video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata" aria-hidden="true">
						<source src="./assets/images/thrivevideo1.mp4" type="video/mp4" /> 
					</video>
				</div>
				<div class="aboutpage-video2 empire-slide-left-newww relative w-full overflow-hidden
							aspect-[16/9] md:aspect-[16/9] lg:h-[462px] lg:aspect-auto order-2 lg:order-1">
					<video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata" aria-hidden="true">
						<source src="./assets/images/thrivevideo2.mp4" type="video/mp4" /> 
					</video>
				</div>
				<div class="empire-slide-right-newww order-1 lg:order-2">
					<p class="about-subtext relative flex gap-2 text-sm pr-4 py-3 overflow-hidden">
					<span class="relative z-10 flex items-center gap-2">
						<span class="block w-[24px] h-[4px] rounded"
							style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
							Nuestra visión
						</span> 
					</span>
					</p>
					<h3 class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px] font-reckless" style="max-width: 719px; font-family: 'rackless', serif !important;">
						Ser el líder global en
						<span class="bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent">
							soluciones al cliente impulsadas por IA
						</span>
					</h3>
					<p class="about-page-para text-white text-[16px] leading-relaxed" style="max-width: 719px;"> Ser el líder global en soluciones al cliente impulsadas por IA, redefiniendo el futuro del outsourcing de procesos de negocio al crear un espacio donde la tecnología y la humanidad coexisten para entregar un servicio excepcional y soluciones eficientes. </p>
				</div>
			</div>
		</div>
	</section>
	<section class="culture-section py-24 pt-[60px] relative overflow-hidden bg-cover bg-center">
		<div class="container mx-auto px-4">
			<div class="absolute w-[1012px] h-[1069px] left-[310px] rotate-[157] opacity-100 bg-cover bg-center bg-no-repeat" style="background-image: url('./assets/images/homechooseus.webp');top: -505px;width: 1013px;left: 880px;rotate: 140deg;opacity: 0.25;"></div>
			<div class="about-side-image absolute right-0 top-[3%]"> 
				<img 
					src="./assets/images/aboutsideimg.webp"
					class="w-[80px] h-[128px] opacity-100 rotate-0"
					alt="Decorative side illustration on About page"
					width="80"
					height="128"
					loading="lazy"
					decoding="async"
					/> 
			</div>
			<div class="grid gap-5 lg:grid-cols-2 gap-16 mb-20" style="align-items: center;">
				<div class="reveal-left">
					<p class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> <span class="relative z-10 flex items-center gap-2">
							<span class="block w-[24px] h-[4px] rounded" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
								Cultura empresarial
							</span> </span>
						</span>
					</p>
					<h2 class="solution-heading text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px] font-reckless" style="max-width: 521px; font-family: 'rackless', serif !important;">
						Trate a los demás como
						<span class="bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)] bg-clip-text text-transparent">
							quiere ser tratado
						</span>
					</h2> 
				</div>
				<div class="reveal-right">
					<p class="company-culture-abformate text-[#3C3B47] text-[16px] leading-[24px] max-w-xl">“Trate a los demás como quiere ser tratado”. Tomamos cada decisión y abordamos cada estrategia con cuidado genuino, adoptando la IA con confianza para mejorar continuamente la conexión humana y permitir que la tecnología sirva a las personas. </p> 
					<a href="https://careers.empireonecx.com/" target="_blank" rel="noopener noreferrer" class="about-btn-work 
						text-[18px] 
						leading-[24px] 
						font-medium 
						tracking-[-0.02em] 
						inline-flex 
						items-center 
						gap-2 
						transition-all
						text-[rgba(0, 0, 0, 1)]
						mt-5">
					Únase al equipo de EmpireOneCX
					<img 
						src="assets/images/aboutbtnlearmore.webp" 
						class="w-[40px] h-[40px]" 
						alt="Learn more about career opportunities"
						width="40"
						height="40"
						loading="lazy"
						decoding="async"
						role="button"
						tabindex="0"
						onclick="window.location.href='https://careers.empireonecx.com/'"
						onkeypress="if(event.key === 'Enter'){ window.location.href='https://careers.empireonecx.com/'; }"
						/>
					</a> 
				</div>
			</div>
		</div>

		<div class="relative overflow-hidden">
			<div id="sliderTrack" class="flex">
				<div class="slide flex-shrink-0 basis-1/2 md:basis-1/3 lg:basis-1/4 p-2">
					<div class="overflow-hidden shadow-md rounded-[24px] h-[180px] md:h-[220px] lg:h-[360px]">
						<img src="assets/images/cultureimg1.webp" class="w-full h-full object-cover" />
					</div>
				</div>
				<div class="slide flex-shrink-0 basis-1/2 md:basis-1/3 lg:basis-1/4 p-2">
					<div class="overflow-hidden shadow-md rounded-[24px] h-[180px] md:h-[220px] lg:h-[360px]">
						<img src="assets/images/cultureimg2.webp" class="w-full h-full object-cover" />
					</div>
				</div>
				<div class="slide flex-shrink-0 basis-1/2 md:basis-1/3 lg:basis-1/4 p-2">
					<div class="overflow-hidden shadow-md rounded-[24px] h-[180px] md:h-[220px] lg:h-[360px]">
						<img src="assets/images/cultureimg3.webp" class="w-full h-full object-cover" />
					</div>
				</div>
				<div class="slide flex-shrink-0 basis-1/2 md:basis-1/3 lg:basis-1/4 p-2">
					<div class="overflow-hidden shadow-md rounded-[24px] h-[180px] md:h-[220px] lg:h-[360px]">
						<img src="assets/images/cultureimg4.webp" class="w-full h-full object-cover" />
					</div>
				</div>
				<div class="slide flex-shrink-0 basis-1/2 md:basis-1/3 lg:basis-1/4 p-2">
					<div class="overflow-hidden shadow-md rounded-[24px] h-[180px] md:h-[220px] lg:h-[360px]">
						<img src="assets/images/cultureimg2.webp" class="w-full h-full object-cover" />
					</div>
				</div>
				<div class="slide flex-shrink-0 basis-1/2 md:basis-1/3 lg:basis-1/4 p-2">
					<div class="overflow-hidden shadow-md rounded-[24px] h-[180px] md:h-[220px] lg:h-[360px]">
						<img src="assets/images/cultureimg1.webp" class="w-full h-full object-cover" />
					</div>
				</div>
				<div class="slide flex-shrink-0 basis-1/2 md:basis-1/3 lg:basis-1/4 p-2">
					<div class="overflow-hidden shadow-md rounded-[24px] h-[180px] md:h-[220px] lg:h-[360px]">
						<img src="assets/images/cultureimg4.webp" class="w-full h-full object-cover" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="standout-section fade-zoom-reveal relative w-full h-[700px] bg-cover bg-bottom flex items-center">
		<div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(75,41,73,0.95)_0%,rgba(75,41,73,0.85)_40%,rgba(75,41,73,0.6)_70%,rgba(75,41,73,0.3)_100%)]"></div>
		<div class="standout-mainwork relative z-10 mx-auto w-full">
			<div class="container mx-auto px-4">
				<div class="standout-mainworkset reveal-left">
					<p class="about-subtext relative flex gap-2 text-sm pr-4 py-3 overflow-hidden"> 
						<span class="relative z-10 flex items-center gap-2">
							<span class="block w-[24px] h-[4px] rounded"
								style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
								Por qué nosotros
							</span> 
						</span>
					</p>
					<h2 class="solution-heading mainsizefonescale text-[32px] leading-[40px] tracking-[-0.03em] text-white mb-[20px] font-reckless" style="max-width: 630px; font-family: 'rackless', serif !important;">
						Más de 10 años 
						<span class="deliverfonts text-[#fff]">
						entregando soluciones <br>
						</span>
						de outsourcing escalables
					</h2>
					<p class="mytopset about-page-para text-white text-[18px] leading-relaxed" style="max-width: 521px;"> Con la confianza de empresas globales en Norteamérica, Asia y mercados emergentes. </p>
					<ul class="stand-out-font space-y-2 mt-6 text-[18px]">
						<li class="flex items-start gap-3"> <span class="mt-2 h-2 w-2 rounded-full bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)]"></span> <a href="/solutions" class="text-gray-200 hover:text-white transition-colors">Marcos operativos probados</a> </li>
						<li class="flex items-start gap-3"> <span class="mt-2 h-2 w-2 rounded-full bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)]"></span> <a href="/solutions" class="text-gray-200 hover:text-white transition-colors">Entrega segura y conforme</a> </li>
						<li class="flex items-start gap-3"> <span class="mt-2 h-2 w-2 rounded-full bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)]"></span> <a href="/solutions" class="text-gray-200 hover:text-white transition-colors">Equipos offshore dedicados</a> </li>
						<li class="flex items-start gap-3"> <span class="mt-2 h-2 w-2 rounded-full bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)]"></span> <a href="/solutions" class="text-gray-200 hover:text-white transition-colors">Reportes de desempeño transparentes</a> </li>
						<li class="flex items-start gap-3"> <span class="mt-2 h-2 w-2 rounded-full bg-[linear-gradient(90deg,#7A76FF_0%,#CB46FA_50.14%)]"></span> <a href="/solutions" class="text-gray-200 hover:text-white transition-colors">Eficiencia acelerada por IA</a> </li>
					</ul>
					<p class="mytopset pt-[20px] about-page-para text-white text-[18px] leading-relaxed" style="max-width: 521px;"> No solo proporcionamos personal. Creamos equipos offshore de alto rendimiento alineados con sus objetivos. </p>
				</div>
			</div>
		</div>
	</section>
	<section class="redefining-section relative py-24 overflow-hidden bg-cover bg-center">
		<div class="container mx-auto px-4">
			<div class="scroll-animate flex flex-col items-center text-center">
					<p class="relative flex items-center gap-2 text-sm py-3 overflow-hidden"> <span class="relative z-10 flex items-center gap-2">
					<span class="block w-[24px] h-[4px] rounded"
						style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);">
					</span> <span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
							-webkit-background-clip: text;
							-webkit-text-fill-color: transparent;
							font-family: rackless !important;">
						Nuestro recorrido
					</span> </span>
					</p>
					<h2 class="about-heading text-[32px] leading-[40px] tracking-[-0.03em] mb-10 text-black" style="margin-top: 4px; max-width: 968px;">
					Redefiniendo lo que significan el crecimiento y la transformación
				</h2> 
			</div>
			<div class="redefing-gridcard grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4
						gap-6 justify-items-center">
				<div class="reveal-left w-full h-full">
					<div class="rounded-[14px] p-[2px] h-full" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
						<div class="mainformattext bg-white rounded-[calc(1rem-1px)]
							px-[10px] py-[30px] flex flex-col items-center text-center gap-[20px] h-full">
							<div class="w-[64px] h-[64px] flex items-center justify-center"> <img src="assets/images/redefinglogo1.webp" class="w-full h-full object-contain" alt="Redefining brand identity logo" loading="lazy" decoding="async" /> </div>
							<div class="boxesfont">
								<h3 class="text-[20px] leading-[28px] text-[#000000] mb-3 font-semibold">
									Base impulsada por propósito
								</h3>
								<p class="text-[18px] leading-[26px] leading-relaxed"> Construida sobre una misión clara: resolver problemas reales con impacto significativo y duradero. </p>
							</div>
						</div>
					</div>
				</div>
				<div class="reveal-left w-full h-full">
					<div class="rounded-[14px] p-[2px] h-full" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
						box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
						<div class="mainformattext bg-white rounded-[calc(1rem-1px)]
							px-[10px] py-[30px] flex flex-col items-center text-center gap-[20px] h-full">
							<div class="w-[64px] h-[64px] flex items-center justify-center"> <img src="assets/images/redefinglogo2.webp" class="w-full h-full object-contain" alt="Redefining business solutions logo" loading="lazy" decoding="async" /> </div>
							<div class="boxesfont">
								<h3 class="text-[20px] leading-[28px] text-[#000000] mb-3 font-semibold">
									Diseñado para escalar
								</h3>
								<p class="text-[18px] leading-[26px] leading-relaxed"> Diseñado para adaptarse y apoyar necesidades cambiantes sin perder calidad ni rendimiento. </p>
							</div>
						</div>
					</div>
				</div>
				<div class="reveal-right w-full h-full">
					<div class="rounded-[14px] p-[2px] h-full" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
						box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
						<div class="mainformattext bg-white rounded-[calc(1rem-1px)]
							px-[10px] py-[30px] flex flex-col items-center text-center gap-[20px] h-full">
							<div class="w-[64px] h-[64px] flex items-center justify-center"> <img src="assets/images/redefinglogo3.webp" class="w-full h-full object-contain" alt="Redefining digital transformation logo" loading="lazy" decoding="async" /> </div>
							<div class="boxesfont">
								<h3 class="text-[20px] leading-[28px] text-[#000000] mb-3 font-semibold">
									Impulsado por personas
								</h3>
								<p class="text-[18px] leading-[26px] leading-relaxed"> Impulsado por mentes apasionadas que colaboran, crean y se preocupan por cada resultado. </p>
							</div>
						</div>
					</div>
				</div>
				<div class="reveal-right w-full h-full">
					<div class="rounded-[14px] p-[2px] h-full" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
						box-shadow: 0px 6px 16px 0px rgba(77, 77, 92, 0.14);">
						<div class="mainformattext bg-white rounded-[calc(1rem-1px)]
							px-[10px] py-[30px] flex flex-col items-center text-center gap-[20px] h-full">
							<div class="w-[64px] h-[64px] flex items-center justify-center"> <img src="assets/images/redefinglogo4.webp" class="w-full h-full object-contain" alt="Redefining digital transformation logo" loading="lazy" decoding="async" /> </div>
							<div class="boxesfont">
								<h3 class="text-[20px] leading-[28px] text-[#000000] mb-3 font-semibold">
									Innovación enfocada en el futuro
								</h3>
								<p class="text-[18px] leading-[26px] leading-relaxed"> Evolucionamos constantemente mediante innovación intencional para mantenernos relevantes, ágiles y un paso adelante. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="behind-leadership-section relative w-full bg-[#FAF8F7] flex items-center">
		<div class="pt-[25%] mx-auto w-full">
			<div class="container mx-auto px-4">
				<div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">

					<div class="behind-leadership-leftside reveal-left">
						<p class="about-subtext relative flex gap-2 text-sm pr-4 py-3 overflow-hidden">
							<span class="relative z-10 flex items-center gap-2">
								<span class="block w-[24px] h-[4px] rounded"
									style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);"></span> 
								<span class="font-reckless font-normal text-[20px] leading-[28px] tracking-[-0.03em]" 
									style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
										-webkit-background-clip: text; -webkit-text-fill-color: transparent;font-family: rackless !important;">
									Liderazgo
								</span>
							</span>
						</p>

						<h2 class="aboutheadtags text-[32px] leading-[40px] tracking-[-0.03em] text-black mb-[20px]" style="max-width: 630px;">
							Detrás de EmpireOneCX hay un equipo de 
							<span class="bg-[linear-gradient(90deg,#FF5C8A_0%,#5B7CFF_45%,#A855F7_100%)] bg-clip-text text-transparent">
								líderes, innovadores y profesionales de experiencia del cliente
							</span>
							comprometidos con la excelencia.
						</h2> 
					</div>

					</div>
			</div>
		</div>
	</section>
	<section class="cta-section relative py-24 bg-white overflow-hidden">
		<div class="nobgmobile absolute inset-0 pointer-events-none" aria-hidden="true">
			<div class="absolute w-[720px] h-[760px] top-[-140px] bg-no-repeat opacity-100" style="background-image: url('./assets/images/futuresideig.webp'); transform: rotate(42deg);"> </div>
		</div>
		<div class="container mx-auto px-4 relative z-10">
			<div class="mx-auto relative">
				<div class="absolute inset-0 rounded-[16px] overflow-hidden">
					<div class="absolute inset-0" style="background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50%, #FE881C 100%);"></div>
					<div class="absolute inset-[3px] rounded-[13px] bg-white">
						<div class="absolute inset-0">
							<div class="hidden md:block absolute inset-0"
								style="background: url('./assets/images/cta-bg-image.webp') no-repeat center/cover;">
							</div>
							<div class="md:hidden absolute inset-0"
								style="background: url('./assets/images/cta-gradient.webp') no-repeat center/cover;">
							</div>
						</div>
					</div>
				</div>
				
				<div class="future-innerwork py-5 px-4 md:px-16 relative z-10">
					<div class="ctamain text-center">
						<div class="cta-left-sidework pt-[60px] pb-[60px]">
							<h2 class="solution-heading future-heading text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em] text-black mb-[15px] md:mb-[20px]">
								Lidere el futuro de la experiencia del cliente <br class="nobreak"> con
								<span class="solutionsitalic-font text-[32px] md:text-[48px] leading-[38px] md:leading-[56px] tracking-[-0.03em]">EmpireOneCX</span>
							</h2>
							<p class="future-customer-para text-[16px] md:text-[20px] leading-[24px] md:leading-[30px] text-[#2A2A2A] mb-8 md:mb-10">
								Porque sus clientes no merecen menos.
							</p>
							<div class="future-btn">
								<a href="/solutions" class="inline-block px-8 md:px-10 py-3 md:py-4 rounded-[8px] text-white text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] font-medium bg-[#7A76FF]">
									Explorar nuestras soluciones <i class="fa fa-arrow-right" style="padding-left:10px;"></i>
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
  "@type": "AboutPage",
  "name": "<?php echo $pageTitle; ?>",
  "description": "<?php echo $metaDescription; ?>",
  "url": "https://empireonecx.com/es/sobre-nosotros/",
  "foundingDate": "2016",
  "publisher": {
    "@type": "Organization",
    "name": "EmpireOneCX",
    "logo": {
      "@type": "ImageObject",
      "url": "https://empireonecx.com/assets/images/Empireone-logo.webp",
      "width": 250,
      "height": 60
    },
    "sameAs": [
      "https://www.linkedin.com/company/empireone-cx/",
      "https://twitter.com/empireonecx"
    ]
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://empireonecx.com/es/sobre-nosotros/"
  }
}
</script>

<?php include("../../inc/footer.php"); ?>
<script>
const track = document.getElementById("sliderTrack");
let slides = document.querySelectorAll(".slide");
let index = 0;

function getSlidesToShow() {
    if (window.innerWidth >= 1024) return 4;
    if (window.innerWidth >= 768) return 3;
    return 2;
}

function moveSlide() {
    const slidesToShow = getSlidesToShow();
    const slideWidth = slides[0].offsetWidth;

    index++;

    if (index > slides.length - slidesToShow) {
        index = 0;
    }

    track.style.transform = `translateX(-${index * slideWidth}px)`;
    track.style.transition = "transform 0.7s ease-in-out";
}

setInterval(moveSlide, 2500);
</script>
<script>
        const sliderItems = document.querySelectorAll('.slider-item');
        const dots = document.querySelectorAll('.dot');
        const container = document.getElementById('slider-container');
        
        let currentIndex = 0;
        let startX = 0;
        let isDragging = false;

        function setActive(index) {
            index = (index + sliderItems.length) % sliderItems.length;
            currentIndex = index;
            
            sliderItems.forEach((item, i) => {
                item.classList.toggle('active', i === index);
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        // Dragging Logic
        const handleStart = (e) => {
            startX = e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
            isDragging = true;
        };

        const handleEnd = (e) => {
            if (!isDragging) return;
            const endX = e.type.includes('mouse') ? e.pageX : e.changedTouches[0].clientX;
            const diff = startX - endX;

            if (Math.abs(diff) > 50) {
                if (diff > 0) setActive(currentIndex + 1);
                else setActive(currentIndex - 1);
            }
            isDragging = false;
        };

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                setActive(parseInt(dot.getAttribute('data-index')));
            });
        });

        container.addEventListener('touchstart', handleStart, { passive: true });
        container.addEventListener('touchend', handleEnd, { passive: true });
        container.addEventListener('mousedown', handleStart);
        window.addEventListener('mouseup', handleEnd);
        container.addEventListener('dragstart', (e) => e.preventDefault());

    </script>
