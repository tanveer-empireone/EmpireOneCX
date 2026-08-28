<?php
$siteLanguage = "es";
$pageTitle = "Industrias de CX y BPO | EmpireOneCX";
$page_title = $pageTitle;
$metaDescription = "Explore soluciones BPO y de experiencia del cliente para retail, salud, finanzas, tecnología, seguros, viajes, logística, eCommerce y más.";
$meta_description = $metaDescription;
$metaKeywords = "industrias BPO, outsourcing por industria, servicios CX en español, BPO para salud, BPO financiero, soporte para retail, automatización con IA";
$pageUrl = "/es/industrias/";
$languageSwitchHrefEn = "/industries/";
$languageAlternates = [
    "en" => "https://empireonecx.com/industries/",
    "es" => "https://empireonecx.com/es/industrias/",
    "x-default" => "https://empireonecx.com/industries/",
];
include(__DIR__ . "/../../inc/header.php");

$industries = [
    ["Retail", "bpo-comercio-minorista", "Atención omnicanal, pedidos, devoluciones, fidelización y operaciones de catálogo para marcas de retail."],
    ["Automotriz", "bpo-automotriz", "Soporte a propietarios, concesionarios, garantías, programación de servicio y gestión de leads."],
    ["Viajes y hotelería", "bpo-viajes-hoteleria", "Reservas, atención al huésped, gestión de interrupciones y soporte digital en varias zonas horarias."],
    ["Telecomunicaciones", "bpo-telecomunicaciones", "Soporte técnico, atención a suscriptores, facturación, activaciones y retención."],
    ["Seguros", "bpo-seguros", "Servicio a asegurados, soporte de reclamos, administración de pólizas y back office especializado."],
    ["Salud", "bpo-salud", "Soporte a pacientes, programación, autorizaciones, facturación y operaciones con controles de privacidad."],
    ["Energía", "bpo-energia", "Atención al cliente, facturación, datos de medición, coordinación en campo y soporte de incidentes."],
    ["Servicios públicos", "bpo-servicios-publicos", "Soporte de cuentas, cobranzas, órdenes de servicio, interrupciones y reportes regulatorios."],
    ["Tecnología y SaaS", "bpo-tecnologia-saas", "Soporte técnico, onboarding, customer success, operaciones de datos y back office tecnológico."],
    ["Gobierno y sector público", "bpo-gobierno-sector-publico", "Atención ciudadana, procesamiento de casos, registros, validación de datos y reportes."],
    ["Legal", "outsourcing-procesos-legales", "Revisión documental, contratos, investigación legal, e-discovery y back office jurídico."],
    ["Servicios financieros", "bpo-servicios-financieros", "Atención financiera, préstamos, pagos, KYC, cuentas por pagar y conciliación."],
    ["eCommerce", "bpo-comercio-electronico", "Soporte pre y poscompra, pedidos, devoluciones, marketplace, catálogo y suscripciones."],
    ["Bienes raíces", "bpo-bienes-raices", "Calificación de leads, soporte a residentes, listados, transacciones y coordinación de proveedores."],
    ["Videojuegos", "bpo-videojuegos", "Soporte a jugadores, moderación, confianza y seguridad, pagos y operaciones en vivo."],
    ["Servicios para el hogar", "bpo-servicios-hogar", "Atención de llamadas, programación, despacho, seguimiento de cotizaciones y back office."],
    ["Garantía del hogar", "bpo-garantia-hogar", "Recepción de reclamos, verificación de cobertura, coordinación de contratistas y autorizaciones."],
    ["Transporte y logística", "bpo-transporte-logistica", "Seguimiento de envíos, procesamiento de cargas, despacho, documentación y excepciones."],
];
?>

<main class="es-industries-page">
    <section class="es-industries-hero">
        <div class="container mx-auto px-4">
            <p class="es-industries-eyebrow">Industrias</p>
            <h1>Soluciones CX y BPO especializadas por industria</h1>
            <p>EmpireOneCX ayuda a equipos de distintas industrias a mejorar la atención al cliente, ampliar capacidad operativa y mantener procesos medibles con equipos capacitados y flujos asistidos por IA.</p>
            <div class="es-industries-actions">
                <a href="/es/contacto/" class="es-industries-btn es-industries-btn-primary">Evalúe su industria ahora</a>
                <a href="/es/soluciones/" class="es-industries-btn">Explore soluciones BPO</a>
            </div>
        </div>
    </section>

    <section class="es-industries-list">
        <div class="container mx-auto px-4">
            <div class="es-industries-intro">
                <p class="es-industries-eyebrow">Experiencia por sector</p>
                <h2>Elija la industria que mejor se ajusta a su operación</h2>
                <p>Cada página explica los retos operativos, servicios tercerizables, segmentos atendidos y preguntas frecuentes de esa industria.</p>
            </div>
            <div class="es-industries-grid">
                <?php foreach ($industries as $industry): ?>
                <article class="es-industry-card">
                    <h3><?= htmlspecialchars($industry[0], ENT_QUOTES, "UTF-8") ?></h3>
                    <p><?= htmlspecialchars($industry[2], ENT_QUOTES, "UTF-8") ?></p>
                    <a href="/es/industrias/<?= htmlspecialchars($industry[1], ENT_QUOTES, "UTF-8") ?>/">Ver servicios para <?= htmlspecialchars($industry[0], ENT_QUOTES, "UTF-8") ?></a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<style>
.es-industries-page{background:#050505;color:#fff}
.es-industries-hero{position:relative;overflow:hidden;padding:210px 0 120px;text-align:center;background:linear-gradient(rgba(0,0,0,.56),rgba(0,0,0,.72)),url('/assets/images/industries-poster.webp') center/cover no-repeat}
.es-industries-hero h1{max-width:900px;margin:0 auto 18px;font-family:Georgia,serif;font-size:clamp(42px,6vw,76px);line-height:1.05}
.es-industries-hero p{max-width:850px;margin:0 auto;color:#e7e1ef;font-size:18px;line-height:1.7}
.es-industries-eyebrow{display:inline-block;margin-bottom:16px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;background:linear-gradient(90deg,#7A76FF,#CB46FA,#FE881C);-webkit-background-clip:text;background-clip:text;color:transparent}
.es-industries-actions{display:flex;justify-content:center;gap:16px;flex-wrap:wrap;margin-top:34px}
.es-industries-btn{display:inline-flex;align-items:center;justify-content:center;min-height:52px;padding:14px 24px;border:1px solid rgba(255,255,255,.42);border-radius:8px;color:#fff;font-weight:700;text-decoration:none}
.es-industries-btn-primary{border:0;background:linear-gradient(90deg,#7A76FF,#CB46FA,#FE881C)}
.es-industries-list{padding:80px 0;background:#fff;color:#101014}
.es-industries-intro{max-width:820px;margin-bottom:34px}
.es-industries-intro h2{font-family:Georgia,serif;font-size:clamp(34px,4vw,54px);line-height:1.1;margin:0 0 14px}
.es-industries-intro p{font-size:17px;line-height:1.7;color:#55535e}
.es-industries-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px}
.es-industry-card{border:1px solid #e9e5ff;border-radius:8px;padding:24px;background:linear-gradient(135deg,#fff,#fff8f4)}
.es-industry-card h3{margin:0 0 10px;font-size:22px;font-weight:800}
.es-industry-card p{margin:0 0 20px;color:#55535e;line-height:1.65}
.es-industry-card a{color:#7A76FF;font-weight:800;text-decoration:none}
@media (max-width:900px){.es-industries-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.es-industries-hero{padding:160px 0 86px}}
@media (max-width:640px){.es-industries-grid{grid-template-columns:1fr}.es-industries-hero{text-align:left}.es-industries-actions{justify-content:flex-start}.es-industries-hero p{font-size:16px}.es-industries-list{padding:56px 0}}
</style>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "CollectionPage",
    "name" => "Industrias de CX y BPO | EmpireOneCX",
    "description" => $metaDescription,
    "url" => "https://empireonecx.com/es/industrias/",
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include(__DIR__ . "/../../inc/footer.php"); ?>
